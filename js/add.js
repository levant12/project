// for dropdown menu
const prodType = document.getElementById("productType");
const bookForm = document.getElementById("bInfo");
const DVDForm = document.getElementById("dInfo");
const furnitureForm = document.getElementById("fInfo");

// Functions
const changeForm = function () {
  const type = prodType.options[prodType.selectedIndex].value;
  // switch (type) {
  //   case "furniture": {
  //     furnitureForm.classList.remove("hidden");
  //     DVDForm.classList.add("hidden");
  //     bookForm.classList.add("hidden");
  //     break;
  //   }
  //   case "book": {
  //     furnitureForm.classList.add("hidden");
  //     DVDForm.classList.add("hidden");
  //     bookForm.classList.remove("hidden");
  //     break;
  //   }
  //   case "dvd": {
  //     furnitureForm.classList.add("hidden");
  //     DVDForm.classList.remove("hidden");
  //     bookForm.classList.add("hidden");
  //     break;
  //   }
  // }
  const funcArray = [];
  funcArray["furniture"] =
    "furnitureForm.classList.remove('hidden'); DVDForm.classList.add('hidden'); bookForm.classList.add('hidden');";
  funcArray["book"] =
    "furnitureForm.classList.add('hidden'); DVDForm.classList.add('hidden');  bookForm.classList.remove('hidden');";
  funcArray["dvd"] =
    "furnitureForm.classList.add('hidden'); DVDForm.classList.remove('hidden'); bookForm.classList.add('hidden');";
  const F = new Function(funcArray[type]);
  F();
};
