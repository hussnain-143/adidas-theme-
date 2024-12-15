document.addEventListener("DOMContentLoaded", function () {
    let items = document.querySelectorAll(".carousel .carousel-item");

    items.forEach((el) => {
      const minPerSlide = 3; // Number of items visible at a time
      let next = el.nextElementSibling;
      for (let i = 1; i < minPerSlide; i++) {
        if (!next) {
          // Wrap to beginning
          next = items[0];
        }
        let cloneChild = next.cloneNode(true);
        el.appendChild(cloneChild.children[0]); // Append cloned item
        next = next.nextElementSibling;
      }
    });
  });