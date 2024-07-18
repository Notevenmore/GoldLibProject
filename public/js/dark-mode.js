const toggleDarkMode = (selector) => {
  const element = document.querySelector(selector);
  if (element) {
    element.classList.toggle("darkColorI");
  }
};

const makeToggleClass = () => {
  document.querySelector("body").classList.toggle("darkColorII");
  document.querySelector("nav").classList.toggle("darkNav");

  toggleDarkMode("header");
  toggleDarkMode("footer");
  toggleDarkMode("section.book-description");
  toggleDarkMode("section.review-list");

  Array.from(document.querySelectorAll("section.cart form .item-book")).map((e) => {
    e.classList.toggle("darkColorI");
  });
  Array.from(document.querySelectorAll("section.countdown-list .countdown")).map((e) => {
    e.classList.toggle("darkColorI");
  });
};

const operationChangeMode = (src, mode) => {
  document.querySelector("nav span button img").src = src;
  localStorage.setItem("mode", mode);
};

if (localStorage.getItem("mode") === null) {
  localStorage.setItem("mode", "light");
} else if (localStorage.getItem("mode") == "dark") {
  makeToggleClass();
}

document.querySelector("nav span button").addEventListener("click", () => {
  if (localStorage.getItem("mode") === "dark") {
    operationChangeMode("../img/dark-mode.png", "light");
  } else {
    operationChangeMode("../img/light-mode.png", "dark");
  }
  makeToggleClass();
});
