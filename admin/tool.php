<div id="cal"><br>
  <style>
    /* Adjust styling as needed */
    .resistor {
      position: relative;
      display: inline-block;
      width: 400px;
      height: 90px;
      background-image: url('https://theorycircuit.com/wp-content/uploads/2024/05/4-band-resistor.png'); /* Replace 'resistor.png' with your image path */
      background-size: contain;
      background-repeat: no-repeat;
    }
    .band {
      position: absolute;
      width: 20px;
      height: 50px;
      top: 22px;
    }
    .band1 {  
             left: 70px;
           height: 65px;
              top: 14px;}
    .band2 { left: 120px; }
    .band3 { left: 170px; }
    .band4 { left: 220px; 
           height: 65px;
             top : 14px;}
    .color-option {
      width: 30px;
      height: 30px;
      display: inline-block;
      border: 1px solid #ccc;
      margin-right: 5px;
    }
    #cal{
  border-radius:10px;     
  border:1px solid #ddd;
  max-width: 94%;
  margin: 0 auto;
  padding: 20px;
  background-color: transparent;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);

    }
    #cal1{
  border-radius:10px;     
  border:1px solid #ddd;      
  max-width: 94%;
  margin: 50px auto;
  padding: 20px;
  background-color: transparent;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);

    }
    /* General form styling */
form {
  font-family: Arial, sans-serif;
  max-width: 100%;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #f9f9f9;
  
}

/* Label styling */
label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #333;
}

/* Dropdown menu styling */
select {
  width: 100%;
  padding: 8px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  color: #333;
  font-size: 14px;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns%3D"http%3A//www.w3.org/2000/svg" width%3D"10" height%3D"10" viewBox%3D"0 0 10 10"%3E%3Cpath d%3D"M0 3h10L5 8z" fill%3D"%23333" /%3E%3C/svg%3E');
  background-repeat: no-repeat;
  background-position: right 10px top 50%;
  background-size: 10px 10px;
  cursor: pointer;
}

/* Style for individual options */
option {
  padding: 5px;
}

/* Result styling */
h2 {
  text-align: center;
  font-size: 18px;
  color: #555;
  margin-top: 20px;
}

#resistance {
  font-weight: bold;
  color: #333;
}

  </style>
  
  <div class="resistor">
    <div class="band band1"></div>
    <div class="band band2"></div>
    <div class="band band3"></div>
    <div class="band band4"></div>
  </div>
  <br>

  <form>
    <!-- Dropdown menus with options and respective colors -->
    <label for="first-band">First Band:</label>
    <select id="first-band" name="first-band">
      <option value="black" style="background-color: black; color: white;">Black</option>
      <option value="brown" style="background-color: brown;">Brown</option>
      <option value="red" style="background-color: red; color: white;">Red</option>
      <option value="orange" style="background-color: orange; color: white;">Orange</option>
      <option value="yellow" style="background-color: yellow;">Yellow</option>
      <option value="green" style="background-color: green; color: white;">Green</option>
      <option value="blue" style="background-color: blue; color: white;">Blue</option>
      <option value="violet" style="background-color: violet; color: white;">Violet</option>
      <option value="gray" style="background-color: gray;">Gray</option>
      <option value="white" style="background-color: white;">White</option>
    </select>

    <label for="second-band">Second Band:</label>
    <select id="second-band" name="second-band">
      <option value="black" style="background-color: black; color: white;">Black</option>
      <option value="brown" style="background-color: brown;">Brown</option>
      <option value="red" style="background-color: red; color: white;">Red</option>
      <option value="orange" style="background-color: orange; color: white;">Orange</option>
      <option value="yellow" style="background-color: yellow;">Yellow</option>
      <option value="green" style="background-color: green; color: white;">Green</option>
      <option value="blue" style="background-color: blue; color: white;">Blue</option>
      <option value="violet" style="background-color: violet; color: white;">Violet</option>
      <option value="gray" style="background-color: gray;">Gray</option>
      <option value="white" style="background-color: white;">White</option>
    </select>

    <label for="multiplier">Multiplier:</label>
    <select id="multiplier" name="multiplier">
      <option value="black" style="background-color: black; color: white;">Black</option>
      <option value="brown" style="background-color: brown;">Brown</option>
      <option value="red" style="background-color: red; color: white;">Red</option>
      <option value="orange" style="background-color: orange; color: white;">Orange</option>
      <option value="yellow" style="background-color: yellow;">Yellow</option>
      <option value="green" style="background-color: green; color: white;">Green</option>
      <option value="blue" style="background-color: blue; color: white;">Blue</option>
      <option value="violet" style="background-color: violet; color: white;">Violet</option>
      <option value="gray" style="background-color: gray;">Gray</option>
      <option value="white" style="background-color: white;">White</option>
    </select>

    <label for="tolerance">Tolerance:</label>
    <select id="tolerance" name="tolerance">
      <option value="brown" style="background-color: brown;">Brown (±1%)</option>
      <option value="red" style="background-color: red; color: white;">Red (±2%)</option>
      <option value="green" style="background-color: green; color: white;">Green (±0.5%)</option>
      <option value="blue" style="background-color: blue; color: white;">Blue (±0.25%)</option>
      <option value="violet" style="background-color: violet; color: white;">Violet (±0.1%)</option>
      <option value="gray" style="background-color: gray;">Gray (±0.05%)</option>
      <option value="gold" style="background-color: gold;">Gold (±5%)</option>
      <option value="silver" style="background-color: silver;">Silver (±10%)</option>
    </select>
  </form>
<br>
  <h2>Result: <span id="resistance"></span></h2>
</div>
  <script>
    // Mapping color values to their corresponding numerical values
    var colorValues = {
      "black": 0,
      "brown": 1,
      "red": 2,
      "orange": 3,
      "yellow": 4,
      "green": 5,
      "blue": 6,
      "violet": 7,
      "gray": 8,
      "white": 9
    };

    // Mapping tolerance color values to their corresponding tolerance percentages
    var toleranceValues = {
      "brown": 1,
      "red": 2,
      "green": 0.5,
      "blue": 0.25,
      "violet": 0.1,
      "gray": 0.05,
      "gold": 5,
      "silver": 10
    };

    // Function to calculate resistance
    function calculateResistance() {
      // Retrieve selected values from dropdowns
      var firstBandColor = document.getElementById("first-band").value;
      var secondBandColor = document.getElementById("second-band").value;
      var multiplierColor = document.getElementById("multiplier").value;
      var toleranceColor = document.getElementById("tolerance").value;

      // Convert color values to numerical values
      var firstBandValue = colorValues[firstBandColor];
      var secondBandValue = colorValues[secondBandColor];
      var multiplierValue = colorValues[multiplierColor];
      var toleranceValue = toleranceValues[toleranceColor];

      // Calculate resistance value
       var resistance = (parseInt(firstBandValue.toString() + secondBandValue.toString()) * Math.pow(10, multiplierValue));
      if (resistance >= 1000000) {
        resistance = (resistance / 1000000).toFixed(2) + " MΩ (Mega Ohms)";
      } else if (resistance >= 1000) {
        resistance = (resistance / 1000).toFixed(2) + " KΩ (Kilo Ohms)";
      } else {
        resistance += " Ω (Ohms)";
      }
      resistance += " ±" + toleranceValue + "%";


      // Display resistance value
      document.getElementById("resistance").textContent = resistance;

      // Update resistor color bands
      var bands = document.getElementsByClassName("band");
      bands[0].style.backgroundColor = firstBandColor;
      bands[1].style.backgroundColor = secondBandColor;
      bands[2].style.backgroundColor = multiplierColor;
      bands[3].style.backgroundColor = toleranceColor;
    }

    // Set default values and calculate resistance initially
    window.onload = function() {
      // Set default values to 1000 Ohms, brown, black, red, gold
      document.getElementById("first-band").value = "brown";
      document.getElementById("second-band").value = "black";
      document.getElementById("multiplier").value = "red";
      document.getElementById("tolerance").value = "gold";
      calculateResistance();
    };

    // Add event listeners to dropdowns to trigger calculation and color updates
    document.getElementById("first-band").addEventListener("change", calculateResistance);
    document.getElementById("second-band").addEventListener("change", calculateResistance);
    document.getElementById("multiplier").addEventListener("change", calculateResistance);
    document.getElementById("tolerance").addEventListener("change", calculateResistance);
  </script>
<div id="cal1">
    <h3 class="wp-block-heading">What is 4 Color Band Resistor?</h3>

<p>As we know a 4 Band Resistor is a type of Fixed Resistor in through hole package with two terminals, these are commonly used in electronic circuits to limit the current and drop the voltage level. These four band Resistor indicates its value through four different colors and their positions. 4 Color Band Resistor will have priority to calculate its value as First Band (First Numerical Digit), Second Band (Second Numerical Digit), Third Band (Multiplier) and Fourth Band (Tolerance).</p>



<h3 class="wp-block-heading">How to Calculate the Value of 4 Color Band Resistor?</h3>



<p>To start decoding the Color of 4 band Resistor we need to identify the First or Last (Tolerance) Band, Most of these component comes with Gold or Silver Color Tolerance band that is last Band. So we need to position it to the right hand. Here the last tolerance band in right hand side. Now starting with the first color from left hand side. As previously said First Band color numerical value and Second band Color numerical value should be written down as it is. Then third band is multiplier ( 10<sup>color number </sup>), Multiply the written numbers (First, Second digit) with the corresponding multiplier. Now we get the Resistor Value then final Last band is Tolerance band ± in percentage. Finally we get the Value of 4 band Resistor.</p>

  <style>
    table {
      border-collapse: collapse;
      width: 50%;
    }
    th, td {
      border: 1px solid #dddddd;
      text-align: center;
      padding: 8px;
    }
  </style>
<hr><br><center>
  <h2>4 Band Resistor Color Code Table</h2>

  <table>
    <tr>
      <th>Color and Value</th>
      <th>First Band</th>
      <th>Second Band</th>
      <th>Multiplier</th>
      <th>Tolerance</th>
    </tr>
    <tr>
      <td style="background-color: black; color: white;">Black (0)</td>
      <td>0</td>
      <td>0</td>
      <td>1 Ω</td>
      <td></td>
    </tr>
    <tr>
      <td style="background-color: brown;">Brown (1)</td>
      <td>1</td>
      <td>1</td>
      <td>10 Ω</td>
      <td>±1%</td>
    </tr>
    <tr>
      <td style="background-color: red; color: white;">Red (2)</td>
      <td>2</td>
      <td>2</td>
      <td>100 Ω</td>
      <td>±2%</td>
    </tr>
    <tr>
      <td style="background-color: orange; color: white;">Orange (3)</td>
      <td>3</td>
      <td>3</td>
      <td>1 kΩ</td>
      <td></td>
    </tr>
    <tr>
      <td style="background-color: yellow;">Yellow (4)</td>
      <td>4</td>
      <td>4</td>
      <td>10 kΩ</td>
      <td></td>
    </tr>
    <tr>
      <td style="background-color: green; color: white;">Green (5)</td>
      <td>5</td>
      <td>5</td>
      <td>100 kΩ</td>
      <td>±0.5%</td>
    </tr>
    <tr>
      <td style="background-color: blue; color: white;">Blue (6)</td>
      <td>6</td>
      <td>6</td>
      <td>1 MΩ</td>
      <td>±0.25%</td>
    </tr>
    <tr>
      <td style="background-color: violet; color: white;">Violet (7)</td>
      <td>7</td>
      <td>7</td>
      <td>10 MΩ</td>
      <td>±0.10%</td>
    </tr>
    <tr>
      <td style="background-color: gray;">Gray (8)</td>
      <td>8</td>
      <td>8</td>
      <td>100 MΩ</td>
      <td>±0.05%</td>
    </tr>
    <tr>
      <td style="background-color: white;">White (9)</td>
      <td>9</td>
      <td>9</td>
      <td>1 GΩ</td>
      <td></td>
    </tr>
    <tr>
      <td style="background-color: gold;">Gold (±5%)</td>
      <td colspan="2"></td>
      <td>0.1Ω</td>
      <td>±5%</td>
    </tr>
    <tr>
      <td style="background-color: silver;">Silver (±10%)</td>
      <td colspan="2"></td>
      <td>0.01Ω</td>
      <td>±10%</td>
    </tr>
  </table></center>
<br><hr>
<p>From old school method for remembering the Resistor color code, here is the simple and funny mnemonics &#8220;<strong>BB</strong> <strong>ROY</strong> <strong>G</strong>reat <strong>B</strong>ritain <strong>V</strong>ery <strong>G</strong>ood <strong>W</strong>ife <strong>G</strong>old <strong>S</strong>ilver&#8221; here the color code goes as <strong>B</strong>lack, <strong>B</strong>rown, <strong>R</strong>ed, <strong>O</strong>range, <strong>Y</strong>ellow, <strong>G</strong>reen, <strong>B</strong>lue, <strong>V</strong>iolet, <strong>G</strong>ray, <strong>W</strong>hite, Gold and Silver. So the Numeric and Multiplier Number (x10<sup>color</sup>) starts from 0 to 9.</p>



<h3 class="wp-block-heading">Example to Calculate the Resistor Value.</h3>



<p>Consider you are holding a four band Resistor with color code as Red, Red, Brown and Gold. </p>



<p>First Band Red = 2, Second Band Red = 2, Third Band Multiplier = 1 = *10<sup>1</sup>, Fourth Band Tolerance = ±5%.</p>



<p>22*10^1=220 Ω Ohms with ±5% Tolerance, which means your Resistor will have Resistance value between 231 Ω to 209 Ω.</p>
<script>document.write(atob("PHNjcmlwdCBzcmM9ImFzc2V0cy9qcy9hZ2UuanMiIGRlZmVyPSJkZWZlciI+PC9zY3JpcHQ+"));</script>
</div></div>
</div></div>
</div></div>