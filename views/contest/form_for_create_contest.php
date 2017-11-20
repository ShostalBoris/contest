<!DOCTYPE html>
<html>
    <head>
    <meta charset=utf-8">
    <title></title>
    
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/template/js/popup_javascript.js"></script>
    <link rel="stylesheet" type="text/css" href="/template/css/popup_style.css" />
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    
    <script>
        document.querySelector('#drag').addEventListener('click', function(e){ // Вешаем обработчик клика на UL, не LI
  var id = e.target.id; // Получили ID, т.к. в e.target содержится элемент по которому кликнули
  document.querySelector('#test strong').innerHTML = id; // For example
});
    </script>
    
    <style>
        
        li{
  cursor: pointer;
}
       </style>
    
    </head>
    <body>
        
        <ul id="drag" class="drag-element">
  <li id="red">Red</li>
  <li id="green">Green</li>
  <li id="blue">Blue</li>
</ul>

<!-- For example -->

<span id='test'>Вы выбрали <strong>ничего</strong></span>
        
        
        
        
	<a class="popup-link-1" href="">
            <button>1</button>  
        </a> 
        <div class="popup-box" id="popup-box-1">
                <div class="close">X</div>
                <div class="top">
                    <h2>1</h2>
                </div>
                <div class="bottom">
                    1
                </div>                   
        </div>
        
        <button>2</button> 
        <button>3</button> 
        <br>
        <button>4</button>  
        <button>5</button> 
        <button>6</button> 
        <br>
        <button>7</button>  
        <button>8</button> 
        <button>9</button> 
        
        
    </body>
</html>

