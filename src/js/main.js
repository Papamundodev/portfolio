import { updateContrastRatio } from "./color-ratio";

document.addEventListener("DOMContentLoaded", () => {
  // Initialize color ratio calculations
  updateContrastRatio();

  // burger menu
  const burger = document.querySelector("#theme-navbar-toggler");
  burger.addEventListener("click", () => {
    burger.classList.toggle("open");
  });

  const popover = document.getElementById("navmenu-header-mobile");
  popover.addEventListener("toggle", (event) => {
    if (event.newState === "closed") {
      burger.classList.remove("open");
    } else if (event.newState === "open") {
    }
  });
});
