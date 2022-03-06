// set dropdown menu default value
$(document).ready(function () {
  $("#productType").val("dvd");
});

// dropdown menu items
const prodType = document.getElementById("productType");
const bookForm = document.getElementById("bInfo");
const DVDForm = document.getElementById("dInfo");
const furnitureForm = document.getElementById("fInfo");

// Functions
const changeForm = function () {
  const type = prodType.options[prodType.selectedIndex].value;
  const funcObj = {
    furniture:
      "furnitureForm.classList.remove('hidden'); DVDForm.classList.add('hidden'); bookForm.classList.add('hidden');",
    book: "furnitureForm.classList.add('hidden'); DVDForm.classList.add('hidden');  bookForm.classList.remove('hidden');",
    dvd: "furnitureForm.classList.add('hidden'); DVDForm.classList.remove('hidden'); bookForm.classList.add('hidden');",
  };

  const F = new Function(funcObj[type]);
  F();
};
