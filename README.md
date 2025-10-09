
[index.html](https://github.com/user-attachments/files/22796181/index.html)
<img width="500" height="500" alt="Download_3d_weather_icon_day_for_free-removebg-preview" src="https://github.com/user-attachments/assets/50356f9f-fe1e-465e-aeb1-fd4a89ce167b" />
![gemini](https://github.com/user-attachments/assets/7cbb18b4-dce9-480e-a6d8-df0ea35b78a7)
<img width="3297" height="3296" alt="Logo" src="https://github.com/user-attachments/assets/9d850ed9-99f3-4235-ba50-e3334d2a7373" /><img width="1024" height="1024" alt="profile" src="https://github.com/user-attachments/assets/61c17115-0cf6-4174-9e6d-a1c4b3f2c341" />

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Historical-BOT|By AVENGER</title>
</head>

<body>
    <nav class="navbar">
        <h3 class="navbar__logo">HISTORICAL FACT BOT</h3>
        <button class="navbar__button" id="themeToggler"><i class='bx bx-sun'></i></button>
    </nav>
    <header class="header">
        <div class="header__title">
            <h1>Hello, There!</h1>
            <h2>How can I help you today?</h2>
        </div>
        <div class="suggests">
            <div class="suggests__item">
                <p class="suggests__item-text">
                    present news about history
                </p>
                <div class="suggests__item-icon">
                    <i class='bx bx-stopwatch'></i>
                </div>
            </div>
            <div class="suggests__item">
                <p class="suggests__item-text">
                    Help me understand particular place
                </p>
                <div class="suggests__item-icon">
                    <i class='bx bx-edit-alt'></i>
                </div>
            </div>
            <div class="suggests__item">
                <p class="suggests__item-text">
                    Give me key terms in history places 
                </p>
                <div class="suggests__item-icon">
                    <i class='bx bx-compass'></i>
                </div>
            </div>
            <div class="suggests__item">
                <p class="suggests__item-text">
                    say about the history 
                </p>
                <div class="suggests__item-icon">
                    <i class='bx bx-wrench'></i>
                </div>
            </div>
        </div>
    </header>
    <section class="chats"></section>
    <section class="prompt">
        <form action="#" class="prompt__form" novalidate>
            <div class="prompt__input-wrapper">
                <input type="text" placeholder="Enter a prompt here" class="prompt__form-input" required>
                <button class="prompt__form-button" id="sendButton">
                    <i class='bx bx-send'></i>
                </button>
                <button class="prompt__form-button" id="deleteButton">
                    <i class='bx bx-trash'></i>
                </button>
            </div>
        </form>
        <p class="prompt__disclaim">
        </p>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="red.js"></script>
</body>

</html>


[calci.html](https://github.com/user-attachments/files/22796389/calci.html)
<html lang="en">
<head>
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        .calculator input, .calculator button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .calculator button {
            background-color: #0044cc;
            color: white;
            cursor: pointer;
        }
        .calculator button:hover {
            background-color: #0033a0;
        }
        .output {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .operations {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .operations button {
            background-color: #0099cc;
            color: white;
        }
        .operations button:hover {
            background-color: #007ba0;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <div class="output">
            <input id="result" type="text" disabled placeholder="0">
        </div>
        <div class="operations">
            <button onclick="appendValue('1')">1</button>
            <button onclick="appendValue('2')">2</button>
            <button onclick="appendValue('3')">3</button>
            <button onclick="appendValue('4')">4</button>
            <button onclick="appendValue('5')">5</button>
            <button onclick="appendValue('6')">6</button>
            <button onclick="appendValue('7')">7</button>
            <button onclick="appendValue('8')">8</button>
            <button onclick="appendValue('9')">9</button>
            <button onclick="appendValue('0')">0</button>
            <button onclick="setOperation('+')">+</button>
            <button onclick="setOperation('-')">-</button>
            <button onclick="setOperation('*')">*</button>
            <button onclick="setOperation('/')">/</button>
            <button onclick="clearResult()">C</button>
            <button onclick="calculateResult()">=</button>
            <button onclick="setOperation('%')">%</button>
            <button onclick="calculateSquare()">x²</button>
            <button onclick="calculateSquareRoot()">√</button>
            <button onclick="setOperation('**')">^</button>
        </div>
    </div>
    <script>
        let currentValue = '', firstOperand = null, operation = '';
        function appendValue(value) 
{
            currentValue += value;
            document.getElementById('result').value = currentValue;
        }
        function setOperation(op) 
{
            if (currentValue === '') return;
            if (firstOperand === null) {
                firstOperand = parseFloat(currentValue);
            }
            operation = op;
            currentValue = '';
        }
        function clearResult() 
{
            currentValue = '';
            firstOperand = null;
            operation = '';
            document.getElementById('result').value = '0';
        }
        function calculateResult() 
{
            if (firstOperand === null || currentValue === '') return;
            let secondOperand = parseFloat(currentValue);
            let result;
            switch (operation) {
                case '+': result = firstOperand + secondOperand; break;
                case '-': result = firstOperand - secondOperand; break;
                case '*': result = firstOperand * secondOperand; break;
                case '/': result = secondOperand === 0 ? 'Error: Div by 0' : firstOperand / secondOperand; break;
                case '%': result = firstOperand % secondOperand; break;
                case '**': result = Math.pow(firstOperand, secondOperand); break;
                default: return;
            }
            document.getElementById('result').value = result;
            currentValue = result;
            firstOperand = null;
            operation = '';
        }
        function calculateSquare() 
{
            if (currentValue === '') return;
            let result = Math.pow(parseFloat(currentValue), 2);
            document.getElementById('result').value = result;
            currentValue = result;
        }
        function calculateSquareRoot() 
{
            if (currentValue === '') return;
            let result = Math.sqrt(parseFloat(currentValue));
            document.getElementById('result').value = result;
            currentValue = result;
        }
    </script>
    
</body>
</html>
[weather.html](https://github.com/user-attachments/files/22796392/weather.html)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="weat.css">
</head>
<body>
    <div id="weather-container">
        
   <h2>WEATHER FORECAST</h2>
        <img src="Download_3d_weather_icon_day_for_free-removebg-preview.png" alt="">
        <input type="text" id="city" placeholder="Enter city">
        <button onclick="getWeather()">Search</button>
<img id="weather-icon" alt="Weather Icon">
           <div id="temp-div"></div>
 <div id="weather-info"></div>

<div id="hourly-forecast"></div>
    </div>
     <script src="./script.js"></script>
</body>
</html>

[sql.html](https://github.com/user-attachments/files/22796398/sql.html)


 
<!DOCTYPE html> 

<head> 
<title>Sorted Student Records</title> 
 
<style> 
    body { 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        background-color: #f0f2f5; 
        color: #333; 
        margin: 0; 
        padding: 20px; 
    } 

    h2 { 
        text-align: center; 
        color: #4A90E2; 
        margin-bottom: 20px; 
    } 

    table { 
        width: 100%; 
        border-collapse: collapse; 
        background-color: #fff; 
        border-radius: 10px; 
        overflow: hidden; 
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); 
        margin: 0 auto; 
    } 

    th, 
    td { 
        padding: 12px 15px; 
        text-align: left; 
        border-bottom: 1px solid #ddd; 
    } 

    th { 
        background-color: #4A90E2; 
        color: white; 
        text-transform: uppercase; 
        letter-spacing: 0.03em; 
    } 

    tr { 
        transition: background-color 0.3s ease; 
    } 

    tr:hover { 
        background-color: #f1f1f1; 


 

 
    } 

    td { 
        font-size: 0.9em; 
        color: #555; 
    } 

    @media (max-width: 768px) { 

        table, 
        th, 
        td { 
            display: block; 
            width: 100%; 
        } 

        th, 
        td { 
            box-sizing: border-box; 
        } 

        tr { 
            margin-bottom: 15px; 
            display: block; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        } 
        th { 
            position: absolute; 
            top: -9999px; 
            left: -9999px; 
        } 

        td { 
            border: none; 
            position: relative; 
            padding-left: 50%; 
            text-align: right; 
        } 

        td:before { 
            content: attr(data-label); 
            position: absolute; 
            left: 0; 
            width: 50%; 
            padding-left: 15px; 
            font-weight: bold; 
            text-align: left; 
            text-transform: uppercase; 
            color: #4A90E2; 
        }
    }
</style>

<body> 
<h2>Sorted Student Records by Name</h2> 
<table> 
    <thead> 
        <tr> 
            <th>ID</th> 
            <th>Name</th> 
            <th>USN</th> 
            <th>Branch</th> 
            <th>Email</th> 
            <th>Address</th> 
        </tr> 
    </thead> 
    <tbody> 
        <?php foreach ($students as $student): ?> 
            <tr> 
                <td data-label="ID"><?php echo htmlspecialchars($student['id']); ?></td> 
                <td data-label="Name"><?php echo htmlspecialchars($student['name']); ?></td> 
                <td data-label="USN"><?php echo htmlspecialchars($student['usn']); ?></td> 
                <td data-label="Branch"><?php echo htmlspecialchars($student['branch']); ?></td> 
                <td data-label="Email"><?php echo htmlspecialchars($student['email']); ?></td> 
                <td data-label="Address"><?php echo htmlspecialchars($student['address']); ?></td> 
            </tr> 
        <?php endforeach; ?> 
    </tbody> 
</table> 
</body> 
</HTML>
[weat.css](https://github.com/user-attachments/files/22796401/weat.css)
body {
  background-image: linear-gradient(to right, rgb(111, 36, 36) , rgb(61, 57, 121));
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  
  height: 100vh;
  margin: 0;
}
#weather-container {
  background: rgba(0, 0, 0, 0.3);
  max-width: 400px;
  padding: 50px;
  border-radius: 15px;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: .5s;
}
#weather-container{
   box-shadow: 7px 7px 7px 7px #292789;
}
#weather-container img{
  width: 80px;
}

h2, label, p {
  color: #070000;
  margin: 8px 0;
  transition: .5s;
}
h2:hover{
  color: rgb(20, 177, 205);
}

input {
  width: calc(100% - 16px);
  padding: 8px;
  box-sizing: border-box;
  border-radius: 10px;
  border: 1px solid rgb(0, 0, 0);
  margin-top: 20px;
}

button {
  background: #04091a;
  color: rgb(255, 249, 249);
  padding: 10px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  margin-top: 20px;
  width: 100px;
  font-size: 15px;
}

button:hover {
  background: #3a03ff;
}

#temp-div p {
  font-size: 60px;
  margin-top: -30px;
}

#weather-info {
  font-size: 20px;
}

#weather-icon {
  width: 200px;
  height: 200px;
  margin: 0 auto 10px; 
  margin-bottom: 0;
  display: none;
}

#hourly-forecast {
  margin-top: 50px;
  overflow-x: auto;
  white-space: nowrap;
  display: flex;
  justify-content: space-between;
}

.hourly-item {
  flex: 0 0 auto;
  width: 80px;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-right: 10px;
  color: rgb(255, 255, 255);
}

.hourly-item img {
  width: 30px;
  height: 30px;
  margin-bottom: 5px;
}

#hourly-heading {
  color: #fff;
  margin-top: 10px;
}[style.css](https://github.com/user-attachments/files/22796403/style.css)
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');

*{
    margin: 0;
    padding: 0;
    outline: none;
    box-sizing: border-box;
    font-family: "Open Sans", sans-serif;
}

:root{
    --primary-color: #131314;
    --secondary-color: #1E1F20;
    --secondary-hover-color: #333537;
  
    --focus-color: #282A2C;
    --focus-hover-color: #37393B;
  
    --button-hover-color: #2f3030;
  
    --text-color: #fff;
    --text-secondary-color: #D8D8D8;
    --heading-secondary-color: #444746;
    --placeholder-color: #ABAFB3;
}

.light_mode{
    --primary-color: #FFFFFF;
    --secondary-color: #F0F4F9;
    --secondary-hover-color: #DDE3EA;
  
    --focus-color: #E9EEF6;
    --focus-hover-color: #E1E6ED;
  
    --button-hover-color: #E9ECF1;
  
    --text-color: #000;
    --text-secondary-color: #4D4D4D;
    --heading-secondary-color: #C4C7C5;
    --placeholder-color: #717075;
}

body{
    background: var(--primary-color);
}

.header,
.chats .message,
.chats .message .message__content,
.prompt__form{
    margin: 0 auto;
    max-width: 824px;
}

body.hide-header .header{
    margin: 0;
    display: none;
}

.navbar{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 2rem;
}

.navbar__logo{
    color: var(--text-secondary-color);
    font-weight: 600;
}

.navbar__button{
    padding: 0.5rem;
    font-size: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0.75rem;
    border: none;
    background: var(--secondary-color);
    color: var(--text-color);
    cursor: pointer;
    transition: background 0.3s ease;
}

.navbar__button:hover{
    background: var(--secondary-hover-color);
}

.header{
    margin-top: 6vh;
}

.header__title h1{
    width: fit-content;
    background: linear-gradient(to right, #4a90e2, #a355b9, #ff6b6b);
    background-clip: text;
    -webkit-background-clip: text;
    text-fill-color: transparent;
    -webkit-text-fill-color: transparent;
    font-size: 3.25rem;
    font-weight: 600;
}

.header__title h2{
    color: var(--heading-secondary-color);
    font-size: 3.25rem;
    font-weight: 600;
    background: linear-gradient(to right, #278a82, #a355b9, #ff6b6b);
    background-clip: text;
    -webkit-background-clip: text;
    text-fill-color: transparent;
    -webkit-text-fill-color: transparent;
    transition: .5s;
}



.suggests{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 4.875rem;
    gap: 0.5rem;
}

.suggests__item{
    background: var(--secondary-color);
    color: var(--text-secondary-color);
    padding: 1rem;
    height: 12.5rem;
    width: 12.5rem;
    border-radius: 0.75rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    transition: background 0.3s ease;
}

.suggests__item:hover{
    background: var(--secondary-hover-color);
}

.suggests__item-text{
    font-weight: 500;
    line-height: 1.375rem;
}

.suggests__item-icon{
    text-align: right;
}

.suggests__item-icon i{
    font-size: 1.5rem;
    background: var(--primary-color);
    padding: 0.5rem;
    border-radius: 50%;
}

.prompt{
    position: fixed;
    background: var(--primary-color);
    z-index: 1000;
    width: 100%;
    left: 0;
    bottom: 0;
    padding: 1rem;
}

.prompt__input-wrapper{
    width: 100%;
    height: 4rem;
    display: flex;
    position: relative;
}

.prompt__form-input{
    height: 100%;
    width: 100%;
    border: none;
    resize: none;
    font-size: 1rem;
    color: var(--text-color);
    padding: 1rem 1.75rem;
    border-radius: 100px;
    background: var(--secondary-color);
    transition: background 0.3s ease;
}

.prompt__form-input:focus{
    background: var(--focus-color);
}

.prompt__form-input:focus ~ .prompt__form-button:hover{
    background: var(--focus-hover-color);
}

.prompt__form-input::placeholder{
    color: var(--placeholder-color);
}

.prompt__form-button{
    position: absolute;
    right: 0.5rem;
    top: 50%;
    transform: translateY(-50%);
    border: none;
    width: 48px;
    height: 48px;
    cursor: pointer;
    border-radius: 50%;
    font-size: 1.4rem;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-color);
    background: transparent;
    transition: all 0.3s ease;
}

.prompt__form-button:hover{
    background: var(--button-hover-color);
}

.prompt__form-button#sendButton{
    transform: translateY(-50%) scale(0);
}

.prompt__form-input:valid ~ .prompt__form-button#sendButton{
    transform: translateY(-50%) scale(1);
}

.prompt__form-input:valid ~ #deleteButton{
    right: 3.5rem;
}

.prompt__disclaim{
    text-align: center;
    color: var(--placeholder-color);
    font-size: 0.85rem;
    margin-top: 1rem;
}

.chats{
    padding: 2rem 1rem 10rem;
    max-height: 100%;
    overflow-y: auto;
    scrollbar-color: #999 transparent;
}

.chats .message--incoming{
    margin-top: 1.5rem;
}

.chats .message--outgoing:not(:first-child){
    margin-top: 40px;
}

.chats .message__content{
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
    width: 100%;
}

.chats .message__text{
    color: var(--text-color);
    white-space: pre-wrap;
    margin-top: 10px;
}

.hide{
    display: none !important;
}

.chats .message--error .message__text{
    color: #e55865;
}

.chats .message--loading .message__text{
    display: none;
}

.chats .message__avatar{
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius: 50%;
    object-fit: top center;
}

.chats .message--loading .message__avatar{
    animation: rotate 3s linear infinite;
}

@keyframes rotate {
    
    100%{
        transform: rotate(360deg);
    }

}

.chats .message__icon{
    color: var(--text-color);
    cursor: pointer;
    height: 35px;
    width: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: none;
    font-size: 1.25rem;
    margin-left: 3.5rem;
    transition: background 0.3s ease;
}

.chats .message__icon:hover{
    background: var(--secondary-hover-color);
}

.chats .message__loading-indicator{
    display: none;
    gap: 0.6rem;
    width: 100%;
    flex-direction: column;
    margin-bottom: 20px;
}

.chats .message--loading .message__loading-indicator{
    display: flex;
}

.chats .message__loading-indicator .message__loading-bar{
    height: 1rem;
    width: 100%;
    border-radius: 0.135rem;
    background-position: -800px 0;
    background: linear-gradient(to right, #2563eb60 30%, var(--primary-color) 60%, #2563eb60);
    animation: loading 3s linear infinite;
}

.chats .message__loading-indicator .message__loading-bar:first-child{
    width: 85%;
}

.chats .message__loading-indicator .message__loading-bar:last-child{
    width: 70%;
}

@keyframes loading {
    
    0%{
        background-position: -800px 0;
    }
    50%{
        background-position: 0px 0;
    }
    100%{
        background-position: 800px 0;
    }

}

.code__copy-btn{
    background-color: transparent;
    border: none;
    color: var(--text-color);
    border-radius: 5px;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 12px;
    z-index: 10;
    font-size: 18px;
}

p{
    margin-bottom: 10px;
}

ul{
    list-style: disc inside;
    margin-left: 20px;
}

ol{
    margin-left: 40px;
}

strong{
    font-weight: bold;
}

em{
    font-size: italic;
}

a{
    color: #1e90ff;
    text-decoration: none;
}

th,
td{
    border: 1px solid;
    text-align: left;
    padding: 10px;
}

pre{
    position: relative;
    background-color: var(--secondary-color);
    padding: 10px 0 0;
    font-family: monospace;
    font-size: 14px;
    border-radius: 10px;
    margin: 0;
    overflow-x: auto;
}

code{
    margin-top: 30px;
    border-radius: 5px;
    color: inherit;
}

.code__language-label{
    position: absolute;
    font-weight: bold;
    top: 10px;
    left: 12px;
    color: var(--placeholder-color);
    font-size: 14px;
    text-transform: capitalize;
}

.hljs{
    background-color: var(--secondary-color);
}

blockquote{
    padding-left: 60px;
    line-height: 2.5rem;
    color: var(--text-color);
}

@media screen and (max-width: 980px) {
    
    .header{
        padding: 0 2rem;
    }

    .header__title{
        line-height: 2.8rem;
    }

    .header__title h1{
        font-size: 2.7rem;
    }

    .header__title h2{
        font-size: 2.5rem;
    }

    .suggests{
        justify-content: center;
    }

    .suggests__item:nth-child(3),
    .suggests__item:nth-child(4){
        display: none;
    }

    .message{
        padding: 0 1.5rem;
    }

    .prompt__disclaim{
        font-size: 0.8rem;
    }

}
[red.js](https://github.com/user-attachments/files/22796406/red.js)
const messageForm = document.querySelector(".prompt__form");
const chatHistoryContainer = document.querySelector(".chats");
const suggestionItems = document.querySelectorAll(".suggests__item");

const themeToggleButton = document.getElementById("themeToggler");
const clearChatButton = document.getElementById("deleteButton");

// State variables
let currentUserMessage = null;
let isGeneratingResponse = false;

const GOOGLE_API_KEY = "AIzaSyAxM57X_NeOMGAzFkOweRe16wqcqSBvE4I";
const API_REQUEST_URL = `https://generativelanguage.googleapis.com/v1/models/gemini-pro:generateContent?key=${GOOGLE_API_KEY}`;

// Load saved data from local storage
const loadSavedChatHistory = () => {
    const savedConversations = JSON.parse(localStorage.getItem("saved-api-chats")) || [];
    const isLightTheme = localStorage.getItem("themeColor") === "light_mode";

    document.body.classList.toggle("light_mode", isLightTheme);
    themeToggleButton.innerHTML = isLightTheme ? '<i class="bx bx-moon"></i>' : '<i class="bx bx-sun"></i>';

    chatHistoryContainer.innerHTML = '';

    // Iterate through saved chat history and display messages
    savedConversations.forEach(conversation => {
        // Display the user's message
        const userMessageHtml = `

            <div class="message__content">
                <img class="message__avatar" src="assets/profile.png" alt="User avatar">
               <p class="message__text">${conversation.userMessage}</p>
            </div>
        
        `;

        const outgoingMessageElement = createChatMessageElement(userMessageHtml, "message--outgoing");
        chatHistoryContainer.appendChild(outgoingMessageElement);

        // Display the API response
        const responseText = conversation.apiResponse?.candidates?.[0]?.content?.parts?.[0]?.text;
        const parsedApiResponse = marked.parse(responseText); // Convert to HTML
        const rawApiResponse = responseText; // Plain text version

        const responseHtml = `
        
           <div class="message__content">
                <img class="message__avatar" src="assets/gemini.svg" alt="Gemini avatar">
                <p class="message__text"></p>
                <div class="message__loading-indicator hide">
                    <div class="message__loading-bar"></div>
                    <div class="message__loading-bar"></div>
                    <div class="message__loading-bar"></div>
                </div>
            </div>
            <span onClick="copyMessageToClipboard(this)" class="message__icon hide"><i class='bx bx-copy-alt'></i></span>
        
        `;

        const incomingMessageElement = createChatMessageElement(responseHtml, "message--incoming");
        chatHistoryContainer.appendChild(incomingMessageElement);

        const messageTextElement = incomingMessageElement.querySelector(".message__text");

        // Display saved chat without typing effect
        showTypingEffect(rawApiResponse, parsedApiResponse, messageTextElement, incomingMessageElement, true); // 'true' skips typing
    });

    document.body.classList.toggle("hide-header", savedConversations.length > 0);
};

// create a new chat message element
const createChatMessageElement = (htmlContent, ...cssClasses) => {
    const messageElement = document.createElement("div");
    messageElement.classList.add("message", ...cssClasses);
    messageElement.innerHTML = htmlContent;
    return messageElement;
}

// Show typing effect
const showTypingEffect = (rawText, htmlText, messageElement, incomingMessageElement, skipEffect = false) => {
    const copyIconElement = incomingMessageElement.querySelector(".message__icon");
    copyIconElement.classList.add("hide"); // Initially hide copy button

    if (skipEffect) {
        // Display content directly without typing
        messageElement.innerHTML = htmlText;
        hljs.highlightAll();
        addCopyButtonToCodeBlocks();
        copyIconElement.classList.remove("hide"); // Show copy button
        isGeneratingResponse = false;
        return;
    }

    const wordsArray = rawText.split(' ');
    let wordIndex = 0;

    const typingInterval = setInterval(() => {
        messageElement.innerText += (wordIndex === 0 ? '' : ' ') + wordsArray[wordIndex++];
        if (wordIndex === wordsArray.length) {
            clearInterval(typingInterval);
            isGeneratingResponse = false;
            messageElement.innerHTML = htmlText;
            hljs.highlightAll();
            addCopyButtonToCodeBlocks();
            copyIconElement.classList.remove("hide");
        }
    }, 75);
};

// Fetch API response based on user input
const requestApiResponse = async (incomingMessageElement) => {
    const messageTextElement = incomingMessageElement.querySelector(".message__text");

    try {
        const response = await fetch(API_REQUEST_URL, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
                contents: [{ role: "user", parts: [{ text: currentUserMessage }] }]
            }),
        });

        const responseData = await response.json();
        if (!response.ok) throw new Error(responseData.error.message);

        const responseText = responseData?.candidates?.[0]?.content?.parts?.[0]?.text;
        if (!responseText) throw new Error("Invalid API response.");

        const parsedApiResponse = marked.parse(responseText);
        const rawApiResponse = responseText;

        showTypingEffect(rawApiResponse, parsedApiResponse, messageTextElement, incomingMessageElement);

        // Save conversation in local storage
        let savedConversations = JSON.parse(localStorage.getItem("saved-api-chats")) || [];
        savedConversations.push({
            userMessage: currentUserMessage,
            apiResponse: responseData
        });
        localStorage.setItem("saved-api-chats", JSON.stringify(savedConversations));
    } catch (error) {
        isGeneratingResponse = false;
        messageTextElement.innerText = error.message;
        messageTextElement.closest(".message").classList.add("message--error");
    } finally {
        incomingMessageElement.classList.remove("message--loading");
    }
};

// Add copy button to code blocks
const addCopyButtonToCodeBlocks = () => {
    const codeBlocks = document.querySelectorAll('pre');
    codeBlocks.forEach((block) => {
        const codeElement = block.querySelector('code');
        let language = [...codeElement.classList].find(cls => cls.startsWith('language-'))?.replace('language-', '') || 'Text';

        const languageLabel = document.createElement('div');
        languageLabel.innerText = language.charAt(0).toUpperCase() + language.slice(1);
        languageLabel.classList.add('code__language-label');
        block.appendChild(languageLabel);

        const copyButton = document.createElement('button');
        copyButton.innerHTML = `<i class='bx bx-copy'></i>`;
        copyButton.classList.add('code__copy-btn');
        block.appendChild(copyButton);

        copyButton.addEventListener('click', () => {
            navigator.clipboard.writeText(codeElement.innerText).then(() => {
                copyButton.innerHTML = `<i class='bx bx-check'></i>`;
                setTimeout(() => copyButton.innerHTML = `<i class='bx bx-copy'></i>`, 2000);
            }).catch(err => {
                console.error("Copy failed:", err);
                alert("Unable to copy text!");
            });
        });
    });
};

// Show loading animation during API request
const displayLoadingAnimation = () => {
    const loadingHtml = `

        <div class="message__content">
            <img class="message__avatar" src="assets/gemini.svg" alt="Gemini avatar">
            <p class="message__text"></p>
            <div class="message__loading-indicator">
                <div class="message__loading-bar"></div>
                <div class="message__loading-bar"></div>
                <div class="message__loading-bar"></div>
            </div>
        </div>
        <span onClick="copyMessageToClipboard(this)" class="message__icon hide"><i class='bx bx-copy-alt'></i></span>
    
    `;

    const loadingMessageElement = createChatMessageElement(loadingHtml, "message--incoming", "message--loading");
    chatHistoryContainer.appendChild(loadingMessageElement);

    requestApiResponse(loadingMessageElement);
};

// Copy message to clipboard
const copyMessageToClipboard = (copyButton) => {
    const messageContent = copyButton.parentElement.querySelector(".message__text").innerText;

    navigator.clipboard.writeText(messageContent);
    copyButton.innerHTML = `<i class='bx bx-check'></i>`; // Confirmation icon
    setTimeout(() => copyButton.innerHTML = `<i class='bx bx-copy-alt'></i>`, 1000); // Revert icon after 1 second
};

// Handle sending chat messages
const handleOutgoingMessage = () => {
    currentUserMessage = messageForm.querySelector(".prompt__form-input").value.trim() || currentUserMessage;
    if (!currentUserMessage || isGeneratingResponse) return; // Exit if no message or already generating response

    isGeneratingResponse = true;

    const outgoingMessageHtml = `
    
        <div class="message__content">
            <img class="message__avatar" src="assets/profile.png" alt="User avatar">
            <p class="message__text"></p>
        </div>

    `;

    const outgoingMessageElement = createChatMessageElement(outgoingMessageHtml, "message--outgoing");
    outgoingMessageElement.querySelector(".message__text").innerText = currentUserMessage;
    chatHistoryContainer.appendChild(outgoingMessageElement);

    messageForm.reset(); // Clear input field
    document.body.classList.add("hide-header");
    setTimeout(displayLoadingAnimation, 500); // Show loading animation after delay
};

// Toggle between light and dark themes
themeToggleButton.addEventListener('click', () => {
    const isLightTheme = document.body.classList.toggle("light_mode");
    localStorage.setItem("themeColor", isLightTheme ? "light_mode" : "dark_mode");

    // Update icon based on theme
    const newIconClass = isLightTheme ? "bx bx-moon" : "bx bx-sun";
    themeToggleButton.querySelector("i").className = newIconClass;
});

// Clear all chat history
clearChatButton.addEventListener('click', () => {
    if (confirm("Are you sure you want to delete all chat history?")) {
        localStorage.removeItem("saved-api-chats");

        // Reload chat history to reflect changes
        loadSavedChatHistory();

        currentUserMessage = null;
        isGeneratingResponse = false;
    }
});

// Handle click on suggestion items
suggestionItems.forEach(suggestion => {
    suggestion.addEventListener('click', () => {
        currentUserMessage = suggestion.querySelector(".suggests__item-text").innerText;
        handleOutgoingMessage();
    });
});

// Prevent default from submission and handle outgoing message
messageForm.addEventListener('submit', (e) => {
    e.preventDefault();
    handleOutgoingMessage();
});

// Load saved chat history on page load
loadSavedChatHistory();[script.js](https://github.com/user-attachments/files/22796407/script.js)
function getWeather() {
    const apiKey = '778a88253e73fc1f3eea05afc4391fd8';
    const city = document.getElementById('city').value;

    if (!city) {
        alert('Please enter a city');
        return;
    }

    const currentWeatherUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`;
    const forecastUrl = `https://api.openweathermap.org/data/2.5/forecast?q=${city}&appid=${apiKey}`;

    fetch(currentWeatherUrl)
        .then(response => response.json())
        .then(data => {
            displayWeather(data);
        })
        .catch(error => {
            console.error('Error fetching current weather data:', error);
            alert('Error fetching current weather data. Please try again.');
        });

    fetch(forecastUrl)
        .then(response => response.json())
        .then(data => {
            displayHourlyForecast(data.list);
        })
        .catch(error => {
            console.error('Error fetching hourly forecast data:', error);
            alert('Error fetching hourly forecast data. Please try again.');
        });
}

function displayWeather(data) {
    const tempDivInfo = document.getElementById('temp-div');
    const weatherInfoDiv = document.getElementById('weather-info');
    const weatherIcon = document.getElementById('weather-icon');
    const hourlyForecastDiv = document.getElementById('hourly-forecast');

    // Clear previous content
    weatherInfoDiv.innerHTML = '';
    hourlyForecastDiv.innerHTML = '';
    tempDivInfo.innerHTML = '';

    if (data.cod === '404') {
        weatherInfoDiv.innerHTML = `<p>${data.message}</p>`;
    } else {
        const cityName = data.name;
        const temperature = Math.round(data.main.temp - 273.15); // Convert to Celsius
        const description = data.weather[0].description;
        const iconCode = data.weather[0].icon;
        const iconUrl = `https://openweathermap.org/img/wn/${iconCode}@4x.png`;

        const temperatureHTML = `
            <p>${temperature}°C</p>
        `;

        const weatherHtml = `
            <p>${cityName}</p>
            <p>${description}</p>
        `;

        tempDivInfo.innerHTML = temperatureHTML;
        weatherInfoDiv.innerHTML = weatherHtml;
        weatherIcon.src = iconUrl;
        weatherIcon.alt = description;

        showImage();
    }
}

function displayHourlyForecast(hourlyData) {
    const hourlyForecastDiv = document.getElementById('hourly-forecast');

    const next24Hours = hourlyData.slice(0, 8); // Display the next 24 hours (3-hour intervals)

    next24Hours.forEach(item => {
        const dateTime = new Date(item.dt * 1000); // Convert timestamp to milliseconds
        const hour = dateTime.getHours();
        const temperature = Math.round(item.main.temp - 273.15); // Convert to Celsius
        const iconCode = item.weather[0].icon;
        const iconUrl = `https://openweathermap.org/img/wn/${iconCode}.png`;

        const hourlyItemHtml = `
            <div class="hourly-item">
                <span>${hour}:00</span>
                <img src="${iconUrl}" alt="Hourly Weather Icon">
                <span>${temperature}°C</span>
            </div>
        `;

        hourlyForecastDiv.innerHTML += hourlyItemHtml;
    });
}

function showImage() {
    const weatherIcon = document.getElementById('weather-icon');
    weatherIcon.style.display = 'block'; // Make the image visible once it's loaded
}  [wert.js](https://github.com/user-attachments/files/22796409/wert.js)[wert.js](https://github.com/user-attachments/files/22796411/wert.js)
const api = {
    key: "2fa73590fd8b5a4c6e68098ad5625395",
    base: "https://api.openweathermap.org/data/2.5/"
  };
  
  const searchbox = document.querySelector(".search-box");
  searchbox.addEventListener("keypress", setQuery);
  
  function setQuery(evt) {
    if (evt.keyCode == 13) {
      getResults(searchbox.value);
    }
  }
  
  function getResults(query) {
    fetch(${api.base}weather?q=${query}&units=metric&APPID=${api.key})
      .then((weather) => {
        return weather.json();
      })
      .then(displayResults);
  }
  
  function displayResults(weather) {
    console.log(weather);
    let city = document.querySelector(".location .city");
    city.innerText = ${weather.name}, ${weather.sys.country};
  
    let now = new Date();
    let date = document.querySelector(".location .date");
    date.innerText = dateBuilder(now);
  
    let temp = document.querySelector(".current .temp");
    temp.innerHTML = ${Math.round(weather.main.temp)}<span>°C</span>;
  
    let weather_el = document.querySelector(".current .weather");
    weather_el.innerText = weather.weather[0].main;
  
    let hilow = document.querySelector(".hi-low");
    hilow.innerText = ${weather.main.temp_min}°C / ${weather.main.temp_max}°C;
  }
  
  function dateBuilder(d) {
    let months = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ];
    let days = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ];
  
    let day = days[d.getDay()];
    let date = d.getDate();
    let month = months[d.getMonth()];
    let year = d.getFullYear();
  
    return ${day} ${date} ${month} ${year};[eat.js](https://github.com/user-attachments/files/22796414/eat.js)
const api = {
    key: "2fa73590fd8b5a4c6e68098ad5625395",
    base: "https://api.openweathermap.org/data/2.5/"
  };
  
  const searchbox = document.querySelector(".search-box");
  searchbox.addEventListener("keypress", setQuery);
  
  function setQuery(evt) {
    if (evt.keyCode == 13) {
      getResults(searchbox.value);
    }
  }
  
  function getResults(query) {
    fetch(${api.base}weather?q=${query}&units=metric&APPID=${api.key})
      .then((weather) => {
        return weather.json();
      })
      .then(displayResults);
  }
  
  function displayResults(weather) {
    console.log(weather);
    let city = document.querySelector(".location .city");
    city.innerText = ${weather.name}, ${weather.sys.country};
    let now = new Date();
    let date = document.querySelector(".location .date");
    date.innerText = dateBuilder(now);
    let temp = document.querySelector(".current .temp");
    temp.innerHTML = ${Math.round(weather.main.temp)}<span>°C</span>;
    let weather_el = document.querySelector(".current .weather");
    weather_el.innerText = weather.weather[0].main;
    let hilow = document.querySelector(".hi-low");
    hilow.innerText = ${weather.main.temp_min}°C / ${weather.main.temp_max}°C;
  }
  
  function dateBuilder(d) {
    let months = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ];
    let days = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ];
  
    let day = days[d.getDay()];
    let date = d.getDate();
    let month = months[d.getMonth()];
    let year = d.getFullYear();
  
    return ${day} ${date} ${month} ${year};
  }
  }
