'use strict';

const correctsentence=document.createTextNode("正解！");
const uncorectsentence=document.createTextNode("不正解！");
const all_answer_box=document.getElementsByClassName("answerbox");

function check(choice_id,question_id,choice_valid){
    const selectedchoice= document.getElementById("s"+question_id+'-'+choice_valid+'-'+choice_id);
    const answerbox= document.getElementById("answerbox_"+question_id);
    const TorF= document.getElementById("TorF_"+question_id);
    answerbox.style.display="block";
    answerbox.classList.add("hako2");
    for(let i=0; i<3; i++){
        window['allchoices'+i] = document.getElementsByClassName('answerlist_'+question_id)[i];
        window['allchoices'+i].classList.add("cantclick"); 
    }
        if (choice_valid ==1){
            selectedchoice.classList.add('blue');
            TorF.appendChild(correctsentence);
            TorF.classList.add("correctsentence");

        }else{
            for(let i=0; i<3; i++){
                const correctchoice = document.getElementById("s"+question_id+'-1-'+i);
                if(correctchoice!=null){
                    correctchoice.classList.add('blue');
                    selectedchoice.classList.add('red');
                }
                TorF.appendChild(uncorectsentence);
                TorF.classList.add("uncorectsentence");
        }
    };
};
