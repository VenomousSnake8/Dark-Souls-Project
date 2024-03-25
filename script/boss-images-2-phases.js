let phase1 = document.querySelector("#phase1");
let phase2 = document.querySelector("#phase2");
let phase1img = document.querySelector("#phase1img");
let phase2img = document.querySelector("#phase2img");

phase1.addEventListener("click", function() {
    phase1img.style.display = "block";
    phase2img.style.display = "none";
    phase1.classList.remove("unselected-cat");
    phase1.classList.add("selected-cat");
    phase2.classList.remove("selected-cat");
    phase2.classList.add("unselected-cat")
});

phase2.addEventListener("click", function() {
    phase2img.style.display = "block";
    phase1img.style.display = "none";
    phase2.classList.remove("unselected-cat");
    phase2.classList.add("selected-cat");
    phase1.classList.remove("selected-cat");
    phase1.classList.add("unselected-cat")
});