require('./style.css');
{
  const $filterForm = document.querySelector(`.filter`);
  const $acts = document.querySelector(`.act__section`);

  const menu = document.querySelector('.menu-icon');
  const nav = document.querySelector('.burger__menu');
  let forward = true;

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
    nav.classList.add('noklik');
    menu.addEventListener('click', handleShowMenu);
  };

  const handleShowMenu = () => {
    if (forward) {
      menu.classList.add('forward');
      menu.classList.remove('backward');
      nav.classList.add('klik');
      nav.classList.remove('noklik');
    } else {
      menu.classList.remove('forward');
      menu.classList.add('backward');
      nav.classList.add('noklik');
      nav.classList.remove('klik');
    }

    forward = !forward;
  };

  const handleLoadActs = data => {
    console.log(data);
    $acts.innerHTML = data.map(act => createactListItem(act)).join(``);
  };

  const handleSubmitFilterForm = e => {
    console.log('submit');
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    console.log(qs);
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

  const createactListItem = act => {
    return `  <article class='act__article'>
    <a class='act_link' href="index.php?page=detail&amp;id=${act['act_id']}">
    <p class='act__type'>${act['type']}</p>
    <picture class="act__image">
        <source
        type="image/webp"
        srcset="
        assets/img/${act['afbeelding']}_10.webp 155w,
        assets/img/${act['afbeelding']}_20.webp 310w,
        assets/img/${act['afbeelding']}_33.webp 517w,
        assets/img/${act['afbeelding']}_50.webp 776w,
        assets/img/${act['afbeelding']}_67.webp 1034w,
        assets/img/${act['afbeelding']}_75.webp 1164w,
        assets/img/${act['afbeelding']}_85.webp 1319w,
        assets/img/${act['afbeelding']}_100.webp 1552w
        "
        sizes="(min-width: 1440px) 59rem,
        (min-width: 1024px) 47rem,
        (min-width: 768px) 36rem,
        (min-width: 320px) 54rem,
        (min-width: 0) 100vw
        "
        />
        <source
        type="image/jpg"
        srcset="
        assets/img/${act['afbeelding']}_10.jpg 155w,
        assets/img/${act['afbeelding']}_20.jpg 310w,
        assets/img/${act['afbeelding']}_33.jpg 517w,
        assets/img/${act['afbeelding']}_50.jpg 776w,
        assets/img/${act['afbeelding']}_67.jpg 1034w,
        assets/img/${act['afbeelding']}_75.jpg 1164w,
        assets/img/${act['afbeelding']}_85.jpg 1319w,
        assets/img/${act['afbeelding']}_100.jpg 1552w
        "
        sizes="(min-width: 1440px) 59rem,
        (min-width: 1024px) 47rem,
        (min-width: 768px) 36rem,
        (min-width: 320px) 54rem,
        (min-width: 0) 100vw
        "
        />
        <img
        src="./assets/img/${act['afbeelding']}_100.jpg"
        alt="${act['act_naam']}" />
      </picture>
      <div class='act-div__grid'>
      <p class='body-groot strong act__datum'>${act['datum']}</p>
      <div class='act__info'>
          <h4 class='heading-2 act__naam'>${act['artiest_naam']} (${
  act['land']
})</h4>
          <h5 class='heading-3 act__titel'>${act['act_naam']}</h5>
          <p class='body-klein act__locatie'>${act['locatie_naam']} | ${
  act['beginuur']
} | ${act['kinderen']}</p>
      </div>
      </div>
    </a>
  </article>`;
  };

  init();
}
