import foodList from "./foodList.json" assert {type: 'json'};

//boolean
let spicyCheckBox = document.getElementById("spicyCheckBox");
let seafoodCheckBox = document.getElementById("seafoodCheckBox");

//info
let foodCheckBox = document.getElementById("foodCheckBox");
let dessertCheckBox = document.getElementById("dessertCheckBox");
let snackCheckBox = document.getElementById("snackCheckBox");

let randomButton = document.getElementById("randomButton"); // get button

let minCalInput = document.getElementById("minCalInput");
let maxCalInput = document.getElementById("maxCalInput");

let foodImgPanel = document.getElementById("foodImgPanel");
let foodResultName = document.getElementById("foodResultName");

//ปรับทุกอย่างเป็นคลิ๊ก
function handleButtonClick(event) {
    event.preventDefault(); 
    // Input validation #1
    if ((!foodCheckBox.checked && !dessertCheckBox.checked && !snackCheckBox.checked) || minCalInput.value === "" || maxCalInput.value === "") {
        alert("กรุณากรอกข้อมูลให้ครบ");
        return;
    }

    //cal
    let min_cal = Number(minCalInput.value);
    let max_cal = Number(maxCalInput.value);

    let newList = [];
    foodList.forEach((now) => {
        if ((!spicyCheckBox.checked || !now.spicy) &&
            (!seafoodCheckBox.checked || !now.seafood) &&
            (now.avg_calories >= min_cal && now.avg_calories <= max_cal) &&
            ((foodCheckBox.checked && now.cuisine === "อาหาร") ||
            (dessertCheckBox.checked && now.cuisine === "ของหวาน") ||
            (snackCheckBox.checked && now.cuisine === "ของกินเล่น"))) {
            newList.push(now);
        }
    });

    // Input validation #2
    if (newList.length === 0) {
        alert("ไม่พบอาหารดังกล่าว");
        return;
    }

    // Random
    let listSize = newList.length;
    let randomIdx = Math.floor(Math.random() * listSize);
    let randomFoodResult = newList[randomIdx];
    let mainIdx;

    for (let i = 0; i < foodList.length; i++) {
        if (randomFoodResult.foodname === foodList[i].foodname) {
            mainIdx = i;
            break;
        }
    }

    // Show result
    foodImgPanel.src = randomFoodResult.img;
    foodResultName.innerHTML = randomFoodResult.foodname;

    $('#randomModal').modal('show');
    document.cookie = "num=" + mainIdx + ";Path=/;SameSite=None;domain=kinraid.com;secure";
    document.cookie = "foodname=" + randomFoodResult.foodname + ";Path=/;SameSite=None;domain=kinraid.com;secure";
}


// Attach click event listener to the button
randomButton.addEventListener("click", handleButtonClick);
randomButton.addEventListener("touchstart", handleButtonClick); // Handle touch events
randomButton.addEventListener("mousedown", handleButtonClick); // Handle touch events
randomButton.addEventListener("ontouchstart", handleButtonClick); // Handle touch events
