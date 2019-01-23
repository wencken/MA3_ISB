require('./style.css');
{
  const $filterForm = document.querySelector(`.filter__form`),
    $acts = document.querySelector(`.acts__list`);

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
  };

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
