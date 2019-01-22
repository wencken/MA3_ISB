require('./style.css');
{
  const $filterForm = document.querySelector(`.filter__form`),
    $players = document.querySelector(`.players__list`);

  const init = () => {
    // return;
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
  };

  const handleSubmitFilterForm = async e => {
    console.log("submit");
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

    // const data = new FormData($filterForm);
    // const entries = [...data.entries()];

    // const qs = new URLSearchParams(entries).toString();
    // const url = `${form.getAttribute('action')}?${qs}`;

    // const response = await fetch(url, {
    //   headers: new Headers({
    //     Accept: 'application/json'
    //   })
    // });
    // const actData = await response.json();
    // parsePlayerData(actData);
  };

  // const parsePlayerData = data => {
  //   console.log(data);
  // };

  const createActListItem = act => {
    console.log(act);
    return `<li class='player'>
    <a href="index.php?page=detail&amp;id=${act['id']}">
    <span class='player__name'>${act['type']} | ${act['artiest_naam']} (${act['land']}) | ${act['act_naam']}</span>
    <span class='player__stat'>${act['datum']} | ${act['locatie_naam']} | ${act['beginuur']}</span>
    </a>
    </li>`;
  };

  const handleLoadActs = data => {
    $players.innerHTML = data
      .map(player => createActListItem(player))
      .join(``);
  };

  init();
}
