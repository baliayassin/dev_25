$("document").ready(function () {
  
    
    for (var i = 0; i < (25/2); i++) 
        $("main").append(createArticle());        
        $("main article:last").addClass("plus");
    
    $("main").on("click", ".box:not(.plus)", showStar); 
    $(".box.plus").click(addArticle);            
})

function addArticle() {
    $("main").prepend(createArticle());
}

function showStar() {
  
    $(this).toggleClass("star");    
}

function createArticle() {
    var newArticle = $("<article/>");
    newArticle.addClass("box");    
    var color='#' + (0x1000000 + (Math.random()) * 0xffffff).toString(16).substr(1, 6);
    newArticle.css("background-color", color);
    return newArticle;
}





