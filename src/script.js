'use strict';
// 答え隠す
document.getElementById("seikai").style.display ="none"; 
// 箱を定義
const hako= document.getElementById("hako");
const torf= document.getElementById("torf");
const seikai1=document.createTextNode("正解！");
const huseikai1=document.createTextNode("不正解！");

// クラスでボタンを押したときの操作を定義
var elements = document.getElementsByClassName('button');
elements = Array.from(elements);


elements.forEach(element => {
    element.addEventListener('click',function() {
    const get = element.getAttribute('data-number');
        if (get ==1){
            element.classList.toggle('blue');
            torf.appendChild(seikai1);
            torf.classList.add("seikai1")
            hako.classList.add("hako2");
            seikai.style.display ="block";
            s1.classList.add("cantclick"); 
            s2.classList.add("cantclick"); 
            s0.classList.add("cantclick"); 
        }else{
            element.classList.toggle('red');
             for(let i=1; i<4; i++){
                     const get = document.getElementById(`s${i%3}`).getAttribute('data-number');
                     const blue =document.getElementById(`s${i%3}`);
                     console.log(get);
                     if(get==1){
                        blue.classList.add('blue');
                     }
                   
                 }
                 torf.appendChild(huseikai1);
                 torf.classList.add("huseikai1");
                 hako.classList.add("hako2");
                 seikai.style.display ="block";
                 s1.classList.add("cantclick"); 
                 s2.classList.add("cantclick"); 
                 s0.classList.add("cantclick"); 
        }
    })
});