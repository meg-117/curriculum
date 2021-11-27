//問1

let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓

function isEven(numbers) {
    return numbers % 2 ===0;
}

console.log(numbers.filter(isEven) + 'は偶数です');
 
//問2

function car (getNumGas){

console.log();
return getNumGas;
}

class cars {
    constractar(gas,num){
        this.gas = gas;
        this.num = num;
    }
}

let gas = car ('〇〇');
let num = car ('△△');

console.log ('ガソリンは' + gas +'です。ナンバーは' + num + 'です');