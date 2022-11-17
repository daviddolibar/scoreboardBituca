<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <title>Scoreboard BITUCA</title>
    <style type="text/css">
  	.oro {
    		color: #D4AC0D;
	}
	.plata {
   		 color: #7F8C8D;
	}
	.bronce {
   		 color: #935116;
	}
    </style>
</head>
<body id="cuerpo">
<header>
<img src="header.png" alt="Nature" style="width:100%; height:95px; ">
</header>
</br>
<div id="posini"></div>
<div id="posfin"></div>
<div id="tabla12" >
<div style="float:left; width: 45%; margin: 10px; padding: 15px; text-align: center;">
<table id="tabla1" class="display compact" >
    <thead>
    	<tr>
            <p align="center"><strong>CATEGORÍA A1</strong></p>
        </tr>
        <tr>
            <th>Centro educativo</th>
            <th>Puntuación final</th>
        </tr>
    </thead>
</table>
</div>
<div style="float:right; width: 45%; margin: 10px; padding: 15px; text-align: center;">
<table id="tabla2" class="display compact" >
    <thead>
    	<tr>
            <p align="center"><strong>CATEGORÍA A2</strong></p>
        </tr>
        <tr>
            <th>Centro educativo</th>
            <th>Puntuación final</th>
        </tr>
    </thead>
</table>
</div>
</div>
<div id="tabla34" style="float:left; width: 45%; margin: 10px; padding: 15px; text-align: center;">
<table id="tabla3" class="display compact" >
    <thead>
    	<tr>
            <p align="center"><strong>CATEGORÍA B</strong></p>
        </tr>
        <tr>
            <th>Centro educativo</th>
            <th>Puntuación final</th>
        </tr>
    </thead>
</table>
</br></br>
<table id="tabla4" class="display compact" >
    <thead>
    	<tr>
            <p align="center"><strong>CATEGORÍA C</strong></p>
        </tr>
        <tr>
            <th>Centro educativo</th>
            <th>Puntuación final</th>
        </tr>
    </thead>
</table>
</div>
<div id="tabla56" style="float:right; width: 45%; margin: 10px; padding: 15px; text-align: center;">
<table id="tabla5" class="display compact" >
    <thead>
    	<tr>
            <p align="center"><strong>CATEGORÍA D</strong></p>
        </tr>
        <tr>
            <th>Centro educativo</th>
            <th>Puntuación final</th>
        </tr>
    </thead>
</table>
</br></br>
<table id="tabla6" class="display compact" >
    <thead>
    	<tr>
            <p align="center"><strong>CATEGORÍA E</strong></p>
        </tr>
        <tr>
            <th>Centro educativo</th>
            <th>Puntuación final</th>
        </tr>
    </thead>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script type="application/javascript">

function showTable(nombretabla){
document.getElementById(nombretabla).style.visibility = "visible";
}
function hideTable(nombretabla){
document.getElementById(nombretabla).style.visibility = "hidden";
}

    $(document).ready( function () {

        var tabla1=$('#tabla1').DataTable({
            ajax: {
    		"url": "get_data.php",
    		"type": "POST",
    		"data": {"cate":"1"},
  	    },
  	    createdRow: function (row, data, index) {
                if ( index == 0 ) {
                	$(row).addClass('oro');
                } else if ( index == 1 ) {
                	$(row).addClass('plata');
                }if ( index == 2 ) {
                	$(row).addClass('bronce');
                }
            },
            responsive: true,
            paging: false,
            ordering: false,
            info: false,
            searching: false,
            columnDefs: [
    		{
        		targets: "_all",
        		className: 'dt-center'
   		 }
 	    ]
        });
        
	
	var tabla2=$('#tabla2').DataTable({
            ajax: {
    		"url": "get_data.php",
    		"type": "POST",
    		"data": {"cate":"2"},
  	    },
  	    createdRow: function (row, data, index) {
                if ( index == 0 ) {
                	$(row).addClass('oro');
                } else if ( index == 1 ) {
                	$(row).addClass('plata');
                }if ( index == 2 ) {
                	$(row).addClass('bronce');
                }
            },
            responsive: true,
            paging: false,
            ordering: false,
            info: false,
            searching: false,
            columnDefs: [
    		{
        		targets: "_all",
        		className: 'dt-center'
   		 }
 	    ]
        });
	
	var tabla3=$('#tabla3').DataTable({
            ajax: {
    		"url": "get_data.php",
    		"type": "POST",
    		"data": {"cate":"3"},
  	    },
  	    createdRow: function (row, data, index) {
                if ( index == 0 ) {
                	$(row).addClass('oro');
                } else if ( index == 1 ) {
                	$(row).addClass('plata');
                }if ( index == 2 ) {
                	$(row).addClass('bronce');
                }
            },
            responsive: true,
            paging: false,
            ordering: false,
            info: false,
            searching: false,
            columnDefs: [
    		{
        		targets: "_all",
        		className: 'dt-center'
   		 }
 	    ]
        });
        
        var tabla4=$('#tabla4').DataTable({
            ajax: {
    		"url": "get_data.php",
    		"type": "POST",
    		"data": {"cate":"4"},
  	    },
  	    createdRow: function (row, data, index) {
                if ( index == 0 ) {
                	$(row).addClass('oro');
                } else if ( index == 1 ) {
                	$(row).addClass('plata');
                }if ( index == 2 ) {
                	$(row).addClass('bronce');
                }
            },
            responsive: true,
            paging: false,
            ordering: false,
            info: false,
            searching: false,
            columnDefs: [
    		{
        		targets: "_all",
        		className: 'dt-center'
   		 }
 	    ]
        });
        
        var tabla5=$('#tabla5').DataTable({
            ajax: {
    		"url": "get_data.php",
    		"type": "POST",
    		"data": {"cate":"5"},
  	    },
  	    createdRow: function (row, data, index) {
                if ( index == 0 ) {
                	$(row).addClass('oro');
                } else if ( index == 1 ) {
                	$(row).addClass('plata');
                }if ( index == 2 ) {
                	$(row).addClass('bronce');
                }
            },
            responsive: true,
            paging: false,
            ordering: false,
            info: false,
            searching: false,
            columnDefs: [
    		{
        		targets: "_all",
        		className: 'dt-center'
   		 }
 	    ]
        });
        
        var tabla6=$('#tabla6').DataTable({
            ajax: {
    		"url": "get_data.php",
    		"type": "POST",
    		"data": {"cate":"6"},
  	    },
  	    createdRow: function (row, data, index) {
                if ( index == 0 ) {
                	$(row).addClass('oro');
                } else if ( index == 1 ) {
                	$(row).addClass('plata');
                }if ( index == 2 ) {
                	$(row).addClass('bronce');
                }
            },
            responsive: true,
            paging: false,
            ordering: false,
            info: false,
            searching: false,
            columnDefs: [
    		{
        		targets: "_all",
        		className: 'dt-center'
   		 }
 	    ]
        });
        
        setInterval( function () {
        	tabla1.ajax.reload();
        	tabla2.ajax.reload();
     		tabla3.ajax.reload();
     		tabla4.ajax.reload();
     		tabla5.ajax.reload();
     		tabla6.ajax.reload();
	}, 1000 );
		
	muestra=0;
	setInterval( function () {
		if (muestra==0) {
			showTable('tabla12');
			document.getElementById('posfin').appendChild(document.getElementById('tabla34'));
			document.getElementById('posfin').appendChild(document.getElementById('tabla56'));
			document.getElementById('posini').appendChild(document.getElementById('tabla12'));
     			hideTable('tabla34');
     			hideTable('tabla56'); 
     			muestra=1;
     		} else {
     			showTable('tabla34');
     			showTable('tabla56');
     			document.getElementById('posfin').appendChild(document.getElementById('tabla12'));
     			document.getElementById('posini').appendChild(document.getElementById('tabla34'));
     			document.getElementById('posini').appendChild(document.getElementById('tabla56'));
     			hideTable('tabla12');
     			muestra=0;
     		}
	}, 10000 );


} );
</script>
</body>
</html>
