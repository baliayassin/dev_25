
/*
$('#game1').click(function(){
	
	event.preventDefault();
	$(this).css("border","3px solid yellow");
	$(this).css("background-color","yellow");
	$(this).css("opacity","0.7");
});
*/
  
function hiddiv(){
    
        document.getElementById("loghide").style.display="none";
        
        document.getElementById("logedIn").style.display="block";
    }


/*
$(document).ready(function(){
    var count=1;
   
        var i=1,j=1,game,gameContent;
        

        for(i;i<17;i++){
            gameContent=$('<div>').attr({
                'id':i
            })

     game=$('<img />').attr({

        'id':'game'+(count),
        'src':'images/game'+(i)+'_'+j+".png"
     }).appendTo(gameContent); 

     game=$('<img />').attr({
        
                'id':'game'+(count+1),
                'src':'images/game'+(i)+'_'+(j+1)+".png",
             }).appendTo(gameContent);
             
             $(game).css({
                'padding-left':'10px'
            })

             game=$('<img />').attr({
                
                        'id':'game'+(count+2),
                        'src':'images/game'+(i)+'_'+(j+2)+".png",
                     }).appendTo(gameContent);
                    
                     $(gameContent).css({
                         'width':'80%',
                         'margin':'0px auto',
                         'padding-bottom':'15px'
                     })
                    $('#allGames').append(gameContent); 

                    $(game).css({
                        'padding-left':'10px'
                    })


                    count=count+3;

                    }

        });

*/
        $(document).ready(function(){
          
            $.getJSON( "games.json", function( data ) {
                var items = [];
                var counter=1;
                var shtml="";

                $.each( data.games, function(game) {
                    $.each(this.game,function(){
                      console.log("name="+this.name);
                      console.log("percent="+this.percent);
                    });
                    console.log("ok next array at game[i]");
                  });
               });

            });
            
            
      
/*
                //console.log(data);
                $.each( data.games, function( key,val) {
                    
                    $.each( val.game, function( key2,val2) {

                       
                      for(var i=0;i<3;i++){

                        console.log(val.game);
                      }
/*
                      
            shtml+=" <div class='leftGame'><ul><li>"+val.game[i].name+"</li>"+"<li>"+val.game[i].percent+
                        "</li></ul></div>";
                           shtml+="<br>";
                           $("main").append(shtml);
                          // $("main").append("<div class='leftGame'><button><span>"+val2.name+"</span>"+"<span>"+val2.percent+
                          // "</span></button></div>");

                        console.log(val.game[i].name);
                              
                         console.log(val.game);
                        // console.log(val2[i].percent);

                        }
                       /*
                     shtml+=" <div class='leftGame'><ul><li>"+val2.name+"</li>"+"<li>"+val2.percent+
                     "</li></ul></div>";
                        shtml+="<br>";
                        $("main").append(shtml);
                       // $("main").append("<div class='leftGame'><button><span>"+val2.name+"</span>"+"<span>"+val2.percent+
                       // "</span></button></div>");
                      /*
                        $("main").append("<div><button><span class=leftGame>"+val2.name+"</span>"+"<span>"+val2.percent+
                        "</span><span>"+val2.name+" </span><span>"+val2.percent+"</span>"+
                        "</span><span>"+val2.name+" </span><span>"+val2.percent+"</span>"+
                        "</button></div>");
                      */

                        
                    
                //   $("main").append("<div><button><spane class='leftGame'>"+name+"</spane>"+;
                   // "<span class='x'>"+name+"</span>"+ 
                    //"<span> class='midGame'"+percent+"</spane></button</div>")
                  
                  //  console.log(key);
                   // console.log(val);
                  
            