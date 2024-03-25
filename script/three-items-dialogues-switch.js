let cat1_d = document.querySelector("#cat1-d");
let cat2_d = document.querySelector("#cat2-d");
let cat3_d = document.querySelector("#cat3-d");
let cat1_divd = document.querySelector("#cat1-divd");
let cat2_divd = document.querySelector("#cat2-divd");
let cat3_divd = document.querySelector("#cat3-divd");

cat1_d.addEventListener("click", function() {
    cat1_d.classList.remove("unselected-cat");
    cat1_d.classList.add("selected-cat");
    cat2_d.classList.remove("selected-cat");
    cat2_d.classList.add("unselected-cat");
    cat3_d.classList.remove("selected-cat");
    cat3_d.classList.add("unselected-cat");
    cat1_divd.style.display = "table";
    cat2_divd.style.display = "none";
    cat3_divd.style.display = "none";
});

cat2_d.addEventListener("click", function() {
    cat2_d.classList.remove("unselected-cat");
    cat2_d.classList.add("selected-cat");
    cat1_d.classList.remove("selected-cat");
    cat1_d.classList.add("unselected-cat");
    cat3_d.classList.remove("selected-cat");
    cat3_d.classList.add("unselected-cat");
    cat2_divd.style.display = "table";
    cat1_divd.style.display = "none";
    cat3_divd.style.display = "none";
});

cat3_d.addEventListener("click", function() {
    cat3_d.classList.remove("unselected-cat");
    cat3_d.classList.add("selected-cat");
    cat1_d.classList.remove("selected-cat");
    cat1_d.classList.add("unselected-cat");
    cat2_d.classList.remove("selected-cat");
    cat2_d.classList.add("unselected-cat");
    cat3_divd.style.display = "table";
    cat1_divd.style.display = "none";
    cat2_divd.style.display = "none";
});