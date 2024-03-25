let cat1 = document.querySelector("#cat1");
let cat2 = document.querySelector("#cat2");
let cat3 = document.querySelector("#cat3");
let cat4 = document.querySelector("#cat4");
let cat5 = document.querySelector("#cat5");
let cat1_table = document.querySelector("#cat1-table");
let cat2_table = document.querySelector("#cat2-table");
let cat3_table = document.querySelector("#cat3-table");
let cat4_table = document.querySelector("#cat4-table");
let cat5_table = document.querySelector("#cat5-table");

cat1.addEventListener("click", function() {
    cat1.classList.remove("unselected-cat");
    cat1.classList.add("selected-cat");
    cat2.classList.remove("selected-cat");
    cat2.classList.add("unselected-cat");
    cat3.classList.remove("selected-cat");
    cat3.classList.add("unselected-cat");
    cat4.classList.remove("selected-cat");
    cat4.classList.add("unselected-cat");
    cat5.classList.remove("selected-cat");
    cat5.classList.add("unselected-cat");
    cat1_table.style.display = "table";
    cat2_table.style.display = "none";
    cat3_table.style.display = "none";
    cat4_table.style.display = "none";
    cat5_table.style.display = "none";
});

cat2.addEventListener("click", function() {
    cat2.classList.remove("unselected-cat");
    cat2.classList.add("selected-cat");
    cat1.classList.remove("selected-cat");
    cat1.classList.add("unselected-cat");
    cat3.classList.remove("selected-cat");
    cat3.classList.add("unselected-cat");
    cat4.classList.remove("selected-cat");
    cat4.classList.add("unselected-cat");
    cat5.classList.remove("selected-cat");
    cat5.classList.add("unselected-cat");
    cat2_table.style.display = "table";
    cat1_table.style.display = "none";
    cat3_table.style.display = "none";
    cat4_table.style.display = "none";
    cat5_table.style.display = "none";
});

cat3.addEventListener("click", function() {
    cat3.classList.remove("unselected-cat");
    cat3.classList.add("selected-cat");
    cat1.classList.remove("selected-cat");
    cat1.classList.add("unselected-cat");
    cat2.classList.remove("selected-cat");
    cat2.classList.add("unselected-cat");
    cat4.classList.remove("selected-cat");
    cat4.classList.add("unselected-cat");
    cat5.classList.remove("selected-cat");
    cat5.classList.add("unselected-cat");
    cat3_table.style.display = "table";
    cat1_table.style.display = "none";
    cat2_table.style.display = "none";
    cat4_table.style.display = "none";
    cat5_table.style.display = "none";
});

cat4.addEventListener("click", function() {
    cat4.classList.remove("unselected-cat");
    cat4.classList.add("selected-cat");
    cat1.classList.remove("selected-cat");
    cat1.classList.add("unselected-cat");
    cat2.classList.remove("selected-cat");
    cat2.classList.add("unselected-cat");
    cat3.classList.remove("selected-cat");
    cat3.classList.add("unselected-cat");
    cat5.classList.remove("selected-cat");
    cat5.classList.add("unselected-cat");
    cat4_table.style.display = "table";
    cat1_table.style.display = "none";
    cat2_table.style.display = "none";
    cat3_table.style.display = "none";
    cat5_table.style.display = "none";
});

cat5.addEventListener("click", function() {
    cat5.classList.remove("unselected-cat");
    cat5.classList.add("selected-cat");
    cat1.classList.remove("selected-cat");
    cat1.classList.add("unselected-cat");
    cat2.classList.remove("selected-cat");
    cat2.classList.add("unselected-cat");
    cat3.classList.remove("selected-cat");
    cat3.classList.add("unselected-cat");
    cat4.classList.remove("selected-cat");
    cat4.classList.add("unselected-cat");
    cat5_table.style.display = "table";
    cat1_table.style.display = "none";
    cat2_table.style.display = "none";
    cat3_table.style.display = "none";
    cat4_table.style.display = "none";
});