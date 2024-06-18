var food= [
      "ข้าวเหนียวมะม่วง", "ขนมถ้วย", "ข้าวเหนียวเปียกลำใยมะพร้าวอ่อน", "ขนมบ้าบิ่นมะพร้าวอ่อน", "สาคูต้นข้าวโพดมะพร้าวอ่อน", "ข้าวเหนียวเปียกลำใยมะพร้าวอ่อน",
      "วุ้นใบเตยสาคูกะทิมะพร้าวอ่อน", "ครองแครงอัญชัน", "ขนมหยกมณี", "ขนมเปียกปูน", "ขนมชั้น", "บัวลอย",
      "ไข่เต่า", "ขนมหม้อแกงถั่ว", "ขนมต้มใบเตย", "ขนมกล้วย", "ลอดช่องน้ำกะทิ",
      "ลูกชุบ", "เปียกปูนกะทิสด", "สังขยาไข่", "ทับทิมกรอบ", "บัวลอยเผือกมะพร้าวอ่อน", "ขนมใส่ไส้",
      "ข้าวต้มมัด", "ขนมถังแตก", "กล้วยแขก", "ทาร์ตไข่", "บิงซู", "ไอศกรีมนมสด", "ฮันนี่โทส", "พานาคอสต้า", "โมจิ", "เฟรนฟราย", "ไดฟูกุ", "โดนัท",
      "เค้ก", "ชีสเค้ก", "เค้กบลูเบอร์รี่", "ฝอยทอง", "สตอเบอร์รี่ชีสเค้ก", "วัฟเฟิล", "ไอศกรีมมิ้นช็อค", "น้ำแข็งไส", "ชานมไข่มุก", "ปาท่องโก๋", "โรตี", "แพนเค้ก"
  ]

function randomfood() {

var random = food[Math.floor(Math.random() * food.length)];
document.getElementById("foodname").innerHTML=random;
var images = ["img/pig-chip.gif","img/pig-eating.gif"];

function getRandomImage(){
  var rnd = Math.floor(Math.random() * images.length);
  return images[rnd];
}

var image =  document.getElementById("foodimg");
if (image.getAttribute('src') == "img/random.png")
                {
                    image.src = getRandomImage();
                    document.getElementById("foodname").className='random';
                } else {
                  image.src = getRandomImage();
                }

}

