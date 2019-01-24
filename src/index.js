require('./style.css');
{
  const $filterForm = document.querySelector(`.filter__form`),
    $acts = document.querySelector(`.acts__list`);

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
    if (!document.querySelector || !('classList' in document.body)) {
      return false;
    }
  };
  carousel = (function() {
    const box = document.querySelector('.carouselbox');
    const next = box.querySelector('.next');
    const prev = box.querySelector('.prev');
    const items = box.querySelectorAll('.content li');

    let counter = 0;
    const amount = items.length;
    let current = items[0];
    box.classList.add('actief');

    function navigate(direction) {
      current.classList.remove('current');
      counter = counter + direction;
      if (direction === - 1 && counter < 0) {
        counter = amount - 1;
      }
      if (direction === 1 && !items[counter]) {
        counter = 0;
      }
      current = items[counter];
      current.classList.add('current');
    }
    next.addEventListener('click', function(ev) {
      navigate(1);
    });
    prev.addEventListener('click', function(ev) {
      navigate(- 1);
    });
    navigate(0);
  })();

  const handleSubmitFilterForm = async e => {
    console.log('submit');
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadActs(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  const createActListItem = act => {
    console.log(act);
    return `<li class='act'>
    <a href="index.php?page=detail&amp;id=${act['id']}">
    <span class='act__name'>${act['type']} | ${act['artiest_naam']} (${
  act['land']
}) | ${act['act_naam']}</span>
    <span class='act__stat'>${act['datum']} | ${act['locatie_naam']} | ${
  act['beginuur']
}</span>
    </a>
    </li>`;
  };

  const handleLoadActs = data => {
    $acts.innerHTML = data.map(act => createActListItem(act)).join(``);
  };
  init();
}
