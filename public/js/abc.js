$(document).ready(function () {
    //change selectboxes to selectize mode to be searchable
       $("select").select2();
    });

const mySelect = document.getElementById("mySelect");

    mySelect.onchange = () =>{
        console.log("Selected option value: " + this.value);
      // Lấy giá trị của option được chọn
      const selectedOption = mySelect.options[mySelect.selectedIndex].value;
      
      // Nếu option được chọn là "Add Option"
      if (selectedOption === "addOption") {
        // Hiển thị div để thêm option mới
        const addOptionDiv = document.getElementById("addOptionDiv");
        addOptionDiv.style.display = "block";
        
        // Thêm sự kiện click vào nút "Add"
        const addOptionBtn = document.getElementById("addOptionBtn");
        addOptionBtn.onclick = function() {
          // Lấy giá trị của input và tạo option mới
          const newOptionValue = document.getElementById("newOptionValue").value;
          const newOption = new Option(newOptionValue, newOptionValue);
          
          // Thêm option mới vào select box và ẩn div thêm mới
          mySelect.add(newOption);
          addOptionDiv.style.display = "none";
          
          // Chọn option mới thêm vào
          mySelect.value = newOptionValue;
        };
      }
    };


