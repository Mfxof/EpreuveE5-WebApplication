const headers = document.querySelectorAll(".accordion-header");
headers.forEach(header => {
  header.addEventListener("click", function() {
    this.classList.toggle("active");
    const content = this.nextElementSibling;
  if (content.style.maxHeight) {
    content.style.maxHeight = null;
    this.querySelector("i").classList.remove("fa-angle-down");
    this.querySelector("i").classList.add("fa-angle-right");
  } else {
    content.style.maxHeight = content.scrollHeight + "px";
    this.querySelector("i").classList.remove("fa-angle-right");
    this.querySelector("i").classList.add("fa-angle-down");
  }
});
});