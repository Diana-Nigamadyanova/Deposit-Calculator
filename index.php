<!DOCTYPE html>
<html>
 <head>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="mystyle.css">
	  <title>Deposit Calculator</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	  <link href="assets/datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <script src="assets/datepicker/js/datepicker.min.js"></script>
 </head>
   <div class="top">
      <h2>Deposit Calculator</h2>
  </div>
	<body>
		<div class="calculator">
			<h1>Депозитный калькулятор</h1>
			<p> Калькулятор депозитов позволяет рассчитать ваши доходы после внесения суммы на счет в банке по определенному тарифу.</p>
			<form action="" class="calculate">
				<div class="row">
					<input type='text' id="startDate" class='datepicker-here' autocomplete="off" placeholder="  Дата открытия" > 
					<input type="number" id="term" class="Terms" placeholder="  Срок вклада" required min="1">
					<select id="selectItem" class="Terms">
						<option value="1">месяц</option>
						<option value="2">год</option>
					</select><p>
				</div>
				<div class="row">
					<input type="number" id="sum" placeholder="  Сумма вклада" required min="1000" max="3000000">
					<input  type="number" id="percent" placeholder="  Процентная ставка,% годовых 10,00" required min="3" max="100" step="1"><p>
				</div>
				<div class="row">
					<input  type="checkbox"  id="checkbox" value="a1" checked>Ежемесячное пополнение вклада
					<input  type="number" id="sumAdd" placeholder="  Сумма пополнения вклада" required min="1000" max="3000000">
				</div>
				<input type="button" id="button" onclick="func()" value="Рассчитать">
				<p class="result"></p>
			</form>
			<script>
				var chkstatus = document.getElementById('checkbox'); 
				var btnshowhide = document.getElementById('sumAdd');
				chkstatus.onchange = function() {
					if(!(this.checked)){
				  	sumAdd.style.display='none';
				  	document.getElementById('sumAdd').value = "0";
					}
				  else {
				  	sumAdd.style.display='';
				  	document.getElementById("sumAdd").value = "";
				  }
				}
			</script>

				<script>
				function func(){
					var form = document.querySelector('.calculate');
					var term= form.querySelector('#term')
					var selectItem=form.querySelector('#selectItem');
				
					if (term>60 && selectItem.value="1"){
				    alert("Не более 60 месяцев");
					}
					if (term>5 && selectItem.value="2"){
				    alert("Не более 5 лет");
					}

					/*	let xhr = new XMLHttpRequest();
					let url="calc.php";xhr.open("POST", url, true);
					xhr.openreadystatechange=function(){
						if (xhr.redyState===4 && xhr.status===200){
							result.innerHTML=this.responseText;
						}
					};

					var data=JSON.stringify({
						"startDate": startDate.value,
						"term":term.value*selectItem.value,
						"sum" : sum.value,
						"percent": percent.value,
						"sumAdd": sumAdd.value
					});
					xhr.send(data);*/
				}
			</script>
		</div>
	</body>
</html>