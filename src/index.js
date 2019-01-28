require('./style.css');
{
  const $filterForm = document.querySelector(`.filter`);
  const $acts = document.querySelector(`.act__section`);

  const menu = document.querySelector('.menu-icon');
  const nav = document.querySelector('.burger__menu');
  const pijltje = document.querySelector(`.pijltje`);

  let forward = true;

  const filter = document.querySelector(`.filter__heading`);
  let filteren = true;

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
    nav.classList.add('noklik');
    menu.addEventListener('click', handleShowMenu);
    filter.addEventListener('click', handleShowFilter);
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

  const handleShowFilter = () => {
    if (filteren) {
      $filterForm.classList.add('nodropdown');
      $filterForm.classList.remove('dropdown');
      pijltje.classList.add('down');
      pijltje.classList.remove('up');
    } else {
      $filterForm.classList.add('dropdown');
      $filterForm.classList.remove('nodropdown');
      pijltje.classList.add('up');
      pijltje.classList.remove('down');
    }

    filteren = !filteren;
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
    <p class='act__type ${act['type']}_color'>${act['type']}</p>
    <div class="act__img">
    <picture>
        <source
        type="image/webp"
        srcset="
        assets/img/${act['afbeelding']}_10.webp 100w,
        assets/img/${act['afbeelding']}_20.webp 195w,
        assets/img/${act['afbeelding']}_33.webp 480w,
        assets/img/${act['afbeelding']}_50.webp 640w,
        assets/img/${act['afbeelding']}_67.webp 720w,
        assets/img/${act['afbeelding']}_75.webp 816w,
        assets/img/${act['afbeelding']}_85.webp 960w,
        assets/img/${act['afbeelding']}_100.webp 1200w
        "
        sizes="(min-width: 1440px)  30rem,
        (min-width: 1024px)  30rem,
        (min-width: 768px)  30rem,
        (min-width: 320px) 3Orem,
        (min-width: 0)  30rem
        "
        />
        <source
        type="image/jpg"
        srcset="
        assets/img/${act['afbeelding']}_10.jpg 100w,
        assets/img/${act['afbeelding']}_20.jpg 195w,
        assets/img/${act['afbeelding']}_33.jpg 480w,
        assets/img/${act['afbeelding']}_50.jpg 640w,
        assets/img/${act['afbeelding']}_67.jpg 720w,
        assets/img/${act['afbeelding']}_75.jpg 816w,
        assets/img/${act['afbeelding']}_85.jpg 960w,
        assets/img/${act['afbeelding']}_100.jpg 1200w
        "
        sizes="(min-width: 1440px)  30rem,
        (min-width: 1024px)  30rem,
        (min-width: 768px)  30rem,
        (min-width: 320px) 3Orem,
        (min-width: 0)  30rem
        "
        />
        <img class="act__image"
        src="./assets/img/${act['afbeelding']}_100.jpg"
        alt="${act['act_naam']}" />
      </picture>
      </div>
      <div class='act-div__grid'>

      <p class='body-groot strong act__datum'>${act['datum']}</p>

      <div class='act__info'>
          <h4 class='heading-2 act__naam'>${act['artiest_naam']} (${
  act['land']
})</h4>
          <h5 class='heading-3 act__titel'>${act['act_naam']}</h5>
          <p class='body-klein act__locatie'>${act['locatie_naam']} | ${
  act['beginuur']
}</p>
      </div>

      </div>
    </a>
  </article>`;
  };

  init();
}
