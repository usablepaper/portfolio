// ios height 정확히 구하기
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty("--vh", `${vh}px`);

window.addEventListener("resize", () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
});
window.addEventListener("touchend", () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
});

function initFancybox() {
  jQuery("[data-fancybox]").fancybox({
    thumbs: false,
    hash: false,
    loop: true,
    keyboard: true,
    toolbar: true,
    buttons: ["close"],
    animationEffect: false,
    arrows: true,
    clickContent: false,
    animationEffect: "slide",
    transitionEffect: "slide",
  });
}

function headHeaderTrigger() {
  const triggers = document.querySelectorAll(".trigger span");
  if (!triggers) return;

  triggers.forEach((trigger) => {
    trigger.addEventListener("click", (e) => {
      let id = e.currentTarget.closest(".trigger").dataset.id;
      let popup = document.querySelector(`.popup--${id}`);
      let isActive = popup.classList.contains("active");
      document.querySelectorAll(".popup.active").forEach((activePopup) => {
        if (activePopup !== popup) {
          activePopup.classList.remove("active");
        }
      });
      isActive
        ? popup.classList.remove("active")
        : popup.classList.add("active");
    });
  });

  let exits = document.querySelectorAll(".popup__exit");
  exits.forEach((exit) => {
    exit.addEventListener("click", () => {
      exit.closest(".popup").classList.remove("active");
    });
  });
}

function getCurrentWeather() {
  const weatherContainer = document.querySelector(".weather");
  if (!weatherContainer) return;

  const region = {
    lat: 37.5666791,
    lon: 126.9782914,
  };
  const apikey = `166ff7b7bee066d57c04758d0ab0e74e`;
  fetch(
    `https://api.openweathermap.org/data/2.5/weather?lat=${region.lat}&lon=${region.lon}&appid=${apikey}`
  )
    .then((res) => {
      return res.json();
    })
    .then((data) => {
      document
        .querySelector(".temp-current")
        .querySelector(".cont").textContent = `${(
        data.main.temp - 273.15
      ).toFixed(1)}°C`;
      let img_src = `/wp-content/themes/usablepaper/assets/src/weather/${data.weather[0].icon}.png`;
      document.querySelector(".weather__icon img").setAttribute("src", img_src);
    });
}

window.addEventListener("DOMContentLoaded", function () {
  initFancybox();
  headHeaderTrigger();
  getCurrentWeather();
});
window.addEventListener("resize", function () {});
window.addEventListener("scroll", function () {});
