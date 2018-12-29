function calcBeg(val) {
	var calcOutput = document.querySelector('.calc input');
	if(val === +val){
	calcOutput.value += val + "";
	}
	else if(val == 'C') calcOutput.value = "";
	else if(val == '=') calcOutput.value = +calcOutput.value * 2;
}