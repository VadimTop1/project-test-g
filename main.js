var buttonform = document.querySelector('.button_form');
//alert(buttonform);
//var formBoard = document.querySelector('form_board');//form_board
let formBoardStyle = getComputedStyle(form_board);
buttonform.addEventListener( "click" , 
    function() {
        if(form_board.style.display == "none" || formBoardStyle.display == "none")
        {
            form_board.style.display="block";
            buttonform.style.color = "#ffffff";
        }else{
            form_board.style.display="none";
            buttonform.style.color = "#000000";
        }
    }
);