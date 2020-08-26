var buttonform = document.querySelector('button_form');
var formBoard = document.querySelector('form_board');//form_board
let formBoardStyle = getComputedStyle(formBoard);
buttonform.addEventListener( "click" , 
    function() {
        if(formBoard.style.display == "none" || formBoardStyle.display == "none")
            formBoard.style.display="block";
        else
            formBoard.style.display="none";
    }
);