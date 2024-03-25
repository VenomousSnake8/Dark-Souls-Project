let cat1_t = document.querySelector("#cat1-t");
let cat2_t = document.querySelector("#cat2-t");
let cat3_t = document.querySelector("#cat3-t");
let cat1_divt = document.querySelector("#cat1-divt");
let cat2_divt = document.querySelector("#cat2-divt");
let cat3_divt = document.querySelector("#cat3-divt");

cat1_t.addEventListener("click", function() {
    cat1_t.classList.remove("unselected-cat");
    cat1_t.classList.add("selected-cat");
    cat2_t.classList.remove("selected-cat");
    cat2_t.classList.add("unselected-cat");
    cat3_t.classList.remove("selected-cat");
    cat3_t.classList.add("unselected-cat");
    cat1_divt.style.display = "block";
    cat2_divt.style.display = "none";
    cat3_divt.style.display = "none";
});

cat2_t.addEventListener("click", function() {
    cat2_t.classList.remove("unselected-cat");
    cat2_t.classList.add("selected-cat");
    cat1_t.classList.remove("selected-cat");
    cat1_t.classList.add("unselected-cat");
    cat3_t.classList.remove("selected-cat");
    cat3_t.classList.add("unselected-cat");
    cat2_divt.style.display = "block";
    cat1_divt.style.display = "none";
    cat3_divt.style.display = "none";
});

cat3_t.addEventListener("click", function() {
    cat3_t.classList.remove("unselected-cat");
    cat3_t.classList.add("selected-cat");
    cat1_t.classList.remove("selected-cat");
    cat1_t.classList.add("unselected-cat");
    cat2_t.classList.remove("selected-cat");
    cat2_t.classList.add("unselected-cat");
    cat3_divt.style.display = "block";
    cat1_divt.style.display = "none";
    cat2_divt.style.display = "none";
});