 const items = document.querySelectorAll(".carousel-item");
 let current = 0;

 function showNextItem() {
   items[current].classList.remove("active");
   current = (current + 1) % items.length;
   items[current].classList.add("active");
 }

