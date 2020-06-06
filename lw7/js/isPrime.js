function isPrimeNumber(x){
	let array;
	if (Array.isArray(x)){
		array = x;
	} else {
		array = [x];
	}
	for(let i = 0; i < array.length; i++){
		let num = array[i];
		if (typeof(num) == "number") {
            if (isPrimeElement(num)) {
                console.log('Результат: ', num, ' is prime number');
            } else {
                console.log('Результат: ', num, ' is not prime number');
            }
        } else {
            console.log(num, 'Переданный параметр не число');		
        }
	}
}

function isPrimeElement(number){
    isPrime = true;
	if (number === 2) {
	    isPrime = true;
		return isPrime;
	}		
	if (number > 2){
	    for (let i = 2; i < number; i++) {
            if (number % i == 0) {
                isPrime = false;
                break;
            }
        }
	} else {
		isPrime = false;
	}
    return isPrime;
}




