
function createMatrix() {
	var n = 20 * 20;
	for(var i = 0; i < n; i++)
	{
		matrix = document.getElementById('matrix');
		var cont = document.createElement('div');
		cont.className = 'cell';
		matrix.appendChild(cont);
	}

}



	var row, col;


	function setCell(row, col){
		if(row < 0) row = 20 + row%20; if(col < 0) col = 20 + col%20;
		var curCell = matrix.children[row*20 + col];
		curCell.style.background='#555555';//#aaff55
		curCell.style.border="0.5px solid #ffa500";
		curCell.style.transition="0s";
	};

	function delCell(row, col){
		if(row < 0) row = 20 + row%20; if(col < 0) col = 20 + col%20;
		var curCell = matrix.children[row*20 + col];
		curCell.style.background="transparent";
		curCell.style.border="0.5px solid gray";
		curCell.style.transition="1.5s";
	};













window.onload = function() {
				var scd = document.getElementById('scd');
				scd.disabled='disabled';
	/*setTimeout(function() { 
		var popUp = document.createElement('div');
		popUp.className = 'popup';
		var popChild = document.createElement('div');
		document.body.appendChild(popUp);
		popUp.appendChild(document.createElement('div'));
		popUp.appendChild(document.createElement('div'));
		
		//alert('end');
	 }, 5000);*/


	 

	//var beg = prompt("where the begining?", '1,1').split(',');
	//if(!beg[1].instanceOf('Number')) { beg[0] = '19'; beg[1] = '19';}
	var beg = ['1', '1'];
	row = +beg[0] - 1;
	col = +beg[1] - 1;
	var matrix = document.getElementById('matrix');
	matrix.style.margin = '20px';
	createMatrix();
	matrix = document.getElementById('matrix');
	setCell(row%20, col%20);
	document.body.addEventListener('keydown', function(event) {
		delCell(row%20, col%20);
		if(event.key === 'ArrowRight') col++;
		if(event.key === 'ArrowDown') row++;
		if(event.key === 'ArrowLeft') col--;
		if(event.key === 'ArrowUp') row--;
		setCell(row%20, col%20);
	});


	//delCell(beg);
	//var cell = matrix.getElementsByClassName('cell');
};