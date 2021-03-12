# Assignment 12th May 2020



## Question 1

To check whether a given number is EVEN or ODD.

Used ```Number.isInteger=true;``` to check whether input is integer type.

If true ```num%2``` is evaluated to check EVEN or ODD.

If false "invalid" input message is raised



## Question 2

To print every character of a string in new line.

used for loop to iterate through entire string character by character
and print each char in new line.

using
```
for (var i = 0; i < word.length; i++) {
		console.log(word[i]);
	}
```


## Question 3

To create a calculator to add,subtract,multiply,divide two number.

Called assign function through add,subtract,multiply,divide to evaluate number two numbers based on argument passed.

sample HTML tag
```
<button id="divide" value="/" onclick="assign(value)">Divide</button>
```
sample JavaScript code
```
function assign(value){
    if(value=="/"){				 
       document.getElementById("result").value=num1/num2;//num1 and num2 being two inputs.
}
}
```
![Calculator](https://github.com/Sagun-Dev/WT-Assignment/blob/main/Images/12rd_March/Calculator.png)


## Question 4

To reverse words of a string.
used for loop to iterate through entire reversed string character by character and concatenated with empty string.

Sample code:
```
var sentence=prompt("Enter a sentence");
var revSentence="";
	for (var i = sentence.length - 1; i >= 0; i--) {
		revSentence+=sentence[i];
	}
```

## Contributing
Pull requests are welcome. 

## License
[Sagun Devkota](http://sagundev.com.np/)
