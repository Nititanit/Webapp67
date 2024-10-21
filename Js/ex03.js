const digitize = n => [...`${n}`].map(i => parseInt(i));
console.log(digitize(123));  // ผลลัพธ์จะเป็น [1, 2, 3]
console.log(digitize(1230)); // ผลลัพธ์จะเป็น [1, 2, 3, 0]
 