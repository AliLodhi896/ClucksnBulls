document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("carouselModal");
  const closeBtn = document.getElementById("closeBtn");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  const carouselSlides = document.querySelectorAll(".carousel-slide");
  let slideIndex = 0;

  // Open modal automatically
  modal.style.display = "block";

  // Close modal when close button is clicked
  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  // Show a specific slide
  function showSlide(index) {
    if (index < 0) {
      slideIndex = carouselSlides.length - 1;
    } else if (index >= carouselSlides.length) {
      slideIndex = 0;
    }
    carouselSlides.forEach((slide) => (slide.style.display = "none"));
    carouselSlides[slideIndex].style.display = "block";
  }

  // Move to the previous slide
  prevBtn.addEventListener("click", () => {
    slideIndex--;
    showSlide(slideIndex);
  });

  // Move to the next slide
  nextBtn.addEventListener("click", () => {
    slideIndex++;
    showSlide(slideIndex);
  });

  setInterval(() => {
    slideIndex++;
    showSlide(slideIndex);
  }, 5000);

  showSlide(slideIndex);
});
