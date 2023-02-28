@extends('layout')
@Section('content')
<div class="men-wear">
    <div class="container">
        <div class="searchable">
            
            <select id="select_page" style="width:200px;" class="operator"> 
            <option value="addOption">Add Option</option>
         <option value="alpha">alpha</option> 
         <option value="beta">beta</option>
         <option value="theta">theta</option>
         <option value="omega">omega</option>
  </select>

  <select id="mySelect" style="width: 200%;">
  <option value="option1">Option 1</option>
  <option value="option2">Option 2</option>
  <option value="option3">Option 3</option>
  <option value="addOption">Add Option</option>
</select>


<!-- Modal dialog for adding new option -->
<div id="addOptionDiv" style="display: none;">
  <input type="text" id="newOptionValue">
  <button id="addOptionBtn">Add Option</button>
</div>

        </div>
    </div>

</div>


@endSection