let cat1_m = document.querySelector("#cat1-m");
let cat2_m = document.querySelector("#cat2-m");
let cat1_div = document.querySelector("#cat1-div");
let cat2_div = document.querySelector("#cat2-div");

cat1_m.addEventListener("click", function() {
    cat1_m.classList.remove("unselected-cat");
    cat1_m.classList.add("selected-cat");
    cat2_m.classList.remove("selected-cat");
    cat2_m.classList.add("unselected-cat");
    cat1_div.style.display = "block";
    cat2_div.style.display = "none";
});

cat2_m.addEventListener("click", function() {
    cat2_m.classList.remove("unselected-cat");
    cat2_m.classList.add("selected-cat");
    cat1_m.classList.remove("selected-cat");
    cat1_m.classList.add("unselected-cat");
    cat2_div.style.display = "block";
    cat1_div.style.display = "none";
});