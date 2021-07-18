'use strict';

// const hako= document.getElementById("hako");
// const torf= document.getElementById("torf");
// const seikai= document.getElementById("seikai");
// const s1= document.getElementById("s1");
// const s2= document.getElementById("s2");
// const s3= document.getElementById("s3");
// const seikai1=document.createTextNode("正解！");
// const seikai2=document.createTextNode("正解は「たかなわ」です！");
// const huseikai1=document.createTextNode("不正解！");


// s2.onclick=function seikaidayo() {
// s2.classList.add("blue");
// torf.appendChild(seikai1);
// torf.classList.add("seikai1")
// seikai.appendChild(seikai2);
// hako.classList.add("hako2");
// s1.classList.add("cantclick");
// s2.classList.add("cantclick");
// s3.classList.add("cantclick");
// }
// s1.onclick=function huseikaidayo() {
// s1.classList.add("red");
// s2.classList.add("blue");
// torf.appendChild(huseikai1);
// torf.classList.add("huseikai1")
// seikai.appendChild(seikai2);
// hako.classList.add("hako2");
// s1.classList.add("cantclick");
// s2.classList.add("cantclick");
// s3.classList.add("cantclick");
// 
// s3.onclick=function(){
// s3.classList.add("red");
// s2.classList.add("blue");
// torf.appendChild(huseikai1);
// torf.classList.add("huseikai1")
// seikai.appendChild(seikai2);
// hako.classList.add("hako2");
// s2.classList.add("cantclick");
// s1.classList.add("cantclick");
// s3.classList.add("cantclick");
// }

// 画像の挿入
let image = new Array()
image[1] = "./img/picture1.png";
image[2] = "./img/picture2.png";
image[3] = "./img/picture.3.png";
image[4] = "./img/picture.4.png";
image[5] = "./img/picture.5.png";
image[6] = "./img/picture.6.png";
image[7] = "./img/picture.7.png";
image[8] = "./img/picture.8.png";
image[9] = "./img/picture.9.png";
image[10] = "./img/picture.10.png";

// 選択しの挿入
let option = [
    ['たかわ', 'こうわ', 'たかなわ'],
    ['かめど', 'かめと', 'かめいど'],
    ['かゆまち', 'おかとまち', 'こうじまち'],
    ['おかどもん', 'ごせいもん', 'おなりもん'],
    ['たたりき', 'たたら', 'とどろき'],
    ['せきこうい', 'いじい', 'しゃくじい'],
    ['ざっしき', 'ざっしょく', 'ぞうしき'],
    ['ごしろちょう', 'みとちょう', 'おかちまち'],
    ['ろっこつ', 'しこね', 'ししぼね'],
    ['こしゃく', 'こばく', 'こぐれ']
];

// 正解一覧
let answerchoices = [
   '', 'たかなわ','かめいど','こうじまち','おなりもん','とどろき','しゃくじい','ぞうしき','おかちまち','ししぼね','こぐれ'
];

// シャッフル関数(行列１０個)
var newestArray=[]
for (let i = 0; i < 10; i++) {
  var array = [1, 2, 0];
var newArray= [];
var n;
var k;
while (array.length > 0) {
  n = array.length;
  k = Math.floor(Math.random() * n);

  newArray.push(array[k]);
  array.splice(k, 1);
}
 newestArray.push(newArray)
};
console.log(newestArray)

// HTML
for (let i = 0; i < 10; i++) {
    let one =
        '<div class="mainvisual">'
        + '<h2> <span class="under">'
        + ` ${i + 1}. この地名はなんて読む？</span></h2>`
        + '<div class="picture">'
        + `<img src= ${image[i + 1]} alt="picture">`
        + '</div>'
        + '<ul>'
        + `<li id="s${i+1}-1-${newestArray[i][0]}"class="button"onclick="judge(${i+1},1,${newestArray[i][0]})">`
        + `<b>${option[i][newestArray[i][0]]}</b>`
        + '</li>'
        + `<li id="s${i+1}-2-${newestArray[i][1]}"class="button"onclick="judge(${i+1},2,${newestArray[i][1]})">`
        + `<b>${option[i][newestArray[i][1]]}</b>`
        + '</li>'
        + `<li id="s${i+1}-3-${newestArray[i][2]}"class="button"onclick="judge(${i+1},3,${newestArray[i][2]})">`
        + `<b>${option[i][newestArray[i][2]]}</b>`
        + '</li>'
        + '</ul>'
        + `<div id="hako${i+1}">`
        + `<p id="torf${i+1}"></p>`
        + `<p id="seikai${i+1}"></p>`
        + '</div>'
        + '</div>';

    document.write(one);
}

//押したらジャッジ関数
function judge(question,pushednumber,seikainumber){

 // 正解不正解の箱
    const hako=document.getElementById('hako'+question);
    hako.classList.add("hako2");
    const kotae= document.getElementById('torf'+question);
    const seikai= document.getElementById('seikai'+question);
    const seikai1=document.createTextNode("正解！");
    const huseikai1=document.createTextNode("不正解！");
　　const seikai2=document.createTextNode(`正解は「${answerchoices[question]}」です！`);
    seikai.appendChild(seikai2);

    // 選択肢定義
    let place=document.getElementById('s'+question+'-'+pushednumber+'-'+seikainumber);
    let s1=document.getElementById('s'+question+'-1'+'-0');
    let s4=document.getElementById('s'+question+'-1'+'-1');
    let s7=document.getElementById('s'+question+'-1'+'-2');
    let s2=document.getElementById('s'+question+'-2'+'-0');
    let s5=document.getElementById('s'+question+'-2'+'-1');
    let s8=document.getElementById('s'+question+'-2'+'-2');
    let s3=document.getElementById('s'+question+'-3'+'-0');
    let s6=document.getElementById('s'+question+'-3'+'-1');
    let s9=document.getElementById('s'+question+'-3'+'-2');
   
// 正解をあおくする
if(null !== s7){
    s7.classList.add("blue");
}
if(null !== s8){
    s8.classList.add("blue");
}
if(null !== s9){
    s9.classList.add("blue");
}

// 正解の表示
if (seikainumber==2){
    kotae.appendChild(seikai1);
   kotae.classList.add("seikai1");
 }

// 不正解の表示
 else{
    kotae.appendChild(huseikai1);
    kotae.classList.add("huseikai1")
     place.classList.add("red");
 }
 
//  ボタン押せないように
 if(null !== s1){
    s1.classList.add("cantclick"); 
 }
 if(null !== s2){
    s2.classList.add("cantclick"); 
 }
 if(null !== s3){
    s3.classList.add("cantclick"); 
 }
 if(null !== s4){
    s4.classList.add("cantclick"); 
 }
 if(null !== s5){
    s5.classList.add("cantclick"); 
 }
 if(null !== s6){
    s6.classList.add("cantclick"); 
 }
 if(null !== s7){
    s7.classList.add("cantclick"); 
 }
 if(null !== s8){
    s8.classList.add("cantclick"); 
 }
 if(null !== s9){
    s9.classList.add("cantclick"); 
 }
};