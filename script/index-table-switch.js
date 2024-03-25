let table1 = document.querySelector("#index-table1");
let table2 = document.querySelector("#index-table2");
let table3 = document.querySelector("#index-table3");
let ds1button = document.querySelector("#ds1button");
let ds2button = document.querySelector("#ds2button");
let ds3button = document.querySelector("#ds3button");

ds1button.addEventListener("click", function() {
    table1.style.display = "table";
    table2.style.display = "none";
    table3.style.display = "none";
    ds1button.classList.remove("inactive-switch");
    ds1button.classList.add("active-switch");
    ds2button.classList.remove("active-switch");
    ds2button.classList.add("inactive-switch");
    ds3button.classList.remove("active-switch");
    ds3button.classList.add("inactive-switch");
});

ds2button.addEventListener("click", function() {
    table2.style.display = "table";
    table3.style.display = "none";
    table1.style.display = "none";
    ds2button.classList.remove("inactive-switch");
    ds2button.classList.add("active-switch");
    ds1button.classList.remove("active-switch");
    ds1button.classList.add("inactive-switch");
    ds3button.classList.remove("active-switch");
    ds3button.classList.add("inactive-switch");
});

ds3button.addEventListener("click", function() {
    table3.style.display = "table";
    table2.style.display = "none";
    table1.style.display = "none";
    ds3button.classList.remove("inactive-switch");
    ds3button.classList.add("active-switch");
    ds2button.classList.remove("active-switch");
    ds2button.classList.add("inactive-switch");
    ds1button.classList.remove("active-switch");
    ds1button.classList.add("inactive-switch");
});