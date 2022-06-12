let x=0;
  function fechaizq(){
      switch(x){
          case 0:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid1.png')	;	
              
          x=2;
            break;
          case 1:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid2.png')	;
              
          x--;	
            break;
          case 2:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid3.png')	;
                
          x--;	
            break;          
        }		
  }
  function fechader(){
      switch(x){
          case 0:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid3.png')	;
            
          x++;
            break;
          case 1:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid2.png')	;
          
          x++;	
            break;
          case 2:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid1.png')	;	
            
          x=0;	
            break;          
          }		
  }