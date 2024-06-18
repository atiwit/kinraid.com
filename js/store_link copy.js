import foodList from "./foodList.json" assert {type : 'json'};

let placesArr = [] ; 

const display = () => {
  const img1 = document.getElementById("img1") ; 
  const img2 = document.getElementById("img2") ; 
  const img3 = document.getElementById("img3") ; 

  const name1 = document.getElementById("name1");
  const name2 = document.getElementById("name2");
  const name3 = document.getElementById("name3");

  const info1 = document.getElementById("info1");
  const info2 = document.getElementById("info2");
  const info3 = document.getElementById("info3");

  const link1 = document.getElementById("link1");
  const link2 = document.getElementById("link2");
  const link3 = document.getElementById("link3");

  const ratingLabel1 = document.getElementById("ratingLabel1");
  const ratingLabel2 = document.getElementById("ratingLabel2");
  const ratingLabel3 = document.getElementById("ratingLabel3");

  img1.src = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=300&maxheight=200&photoreference=" + placesArr[0].photos[0].photo_reference + "&key=AIzaSyBMZt-WtD0bzzDbDDACLQF0KoLFKsW5qQ4" ; 
  img2.src = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=300&maxheight=200&photoreference=" + placesArr[1].photos[0].photo_reference + "&key=AIzaSyBMZt-WtD0bzzDbDDACLQF0KoLFKsW5qQ4" ; 
  img3.src = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=300&maxheight=200&photoreference=" + placesArr[2].photos[0].photo_reference + "&key=AIzaSyBMZt-WtD0bzzDbDDACLQF0KoLFKsW5qQ4" ; 

  name1.innerHTML = placesArr[0].name ; 
  name2.innerHTML = placesArr[1].name ; 
  name3.innerHTML = placesArr[2].name ; 

  info1.innerHTML = placesArr[0].vicinity ;
  info2.innerHTML = placesArr[1].vicinity ;
  info3.innerHTML = placesArr[2].vicinity ;

  link1.href = "https://www.google.com/search?q=" + placesArr[0].name ;
  link2.href = "https://www.google.com/search?q=" + placesArr[1].name ;
  link3.href = "https://www.google.com/search?q=" + placesArr[2].name ;

  ratingLabel1.innerHTML = toString(placesArr[0].rating) ; 
  ratingLabel2.innerHTML = toString(placesArr[1].rating) ; 
  ratingLabel3.innerHTML = toString(placesArr[2].rating) ; 
}

document.addEventListener('DOMContentLoaded', async () => {
  // set food idx
  let strNum = document.cookie;
  let stidx = strNum.indexOf("num=") + 4, edidx = strNum.indexOf("; foodname=");
  let temp = strNum.substring(stidx, edidx);
  let num = Number(temp);

  if (!isNaN(num) && Number.isInteger(num) && num >= 0 && num < foodList.length) {
    const foodTitleName = document.getElementById("foodTitleName");
    const foodImg = document.getElementById("foodImg");

    foodTitleName.innerHTML = foodList[num].foodname;
    foodImg.src = foodList[num].img;

    let my_latitude , my_longitude ; 

    await fetch("https://ipapi.co/json/").then((response) => response.json())
    .then((data) => {
      my_latitude = Number(data.latitude) ; 
      my_longitude = Number(data.longitude) ; 

      console.log(my_latitude + " " + my_longitude);
    });


    const apiUrl = `proxy.php?lat=${my_latitude}&lng=${my_longitude}`;

    try {
      const response = await fetch(apiUrl);
      const data = await response.json();

      if (data.status === 'OK') {
          placesArr = data.results;
          display();
      } else {
          console.error('Error:' + data.status);
          $('#errorModal').modal('show')
          //location.assign("https://kinraid.com/index");
          // Handle the error as needed
        }
    } catch (error) {
      console.error('Fetch error:' + error);
      $('#errorModal').modal('show')
      //location.assign("https://kinraid.com/index");
      // Handle the error as needed
    }
  } else {
    console.error("Invalid food data or index");
    $('#errorModal').modal('show')
    //location.assign("https://kinraid.com/index");
  }
});