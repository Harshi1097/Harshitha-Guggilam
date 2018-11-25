
    $(document).ready(function(){     
      var email=$("#useremailid").text().trim();
      console.log(email);
      var fruits="";
      $.post("get_fruit_information.php",
            {"email":email},
            function(data,status){
              console.log(data);
              fruits=JSON.parse(data);
              createTable(fruits,email);
            }
        );
                  
      $(document).on("click","#delete",function(){
          var temp=$(this).attr("name");
          console.log(temp.split(":")[0]+" "+temp.split(":")[1]);
          fruitRemove(temp.split(":")[0],temp.split(":")[1]);
      });
      $(document).on("click","#update",function(){
          var temp=$(this).attr("name");
      });
      $("#btn_add").click(function(){
        $("tbody").remove();
        $.post("add_fruit_information.php",
            {
              "email":email,
              "fruit_name":$("#fruit_name").val(),
              "quantity":$("#quantity").val(),
              "price":$("#price").val()
            },
            function(data,status){
              console.log(data);
              fruits=JSON.parse(data);
              createTable(fruits,email);
            }
          );
      });
      $(document).on("click","#update",function(){
        var index=$(this).attr("name");
        console.log(index);
        console.log(fruits[index].fname);
        $("#update_fruit").text(fruits[index].fname);
        $("#update_quantity").val(fruits[index].quantity);
        $("#update_price").val(fruits[index].price);

      });
      $("#update_btn").click(function(){
         $("tbody").remove();
         $.post("update_fruit_information.php",
            {
              "email":email,
              "fruit_name":$("#update_fruit").text(),
              "quantity":$("#update_quantity").val(),
              "price":$("#update_price").val()
            },
            function(data,status){
              console.log(data);
              fruits=JSON.parse(data);
              createTable(fruits,email);
            }
          );
      });
    });
    function createTable(fruits,email){
      for (var i = 0; i < fruits.length; i++) {
              getData(fruits[i],email,i);
        }
    }
    function getData(fruit,email,index)
    {
        var row = $("<tr />");
        var tbody=$("<tbody/>");
        $("#tableone").append(tbody);
          tbody.append(row); 
          row.append($("<td>" + fruit.fname + "</td>"));
          row.append($("<td>" + fruit.quantity + "</td>"));
          row.append($("<td>" + fruit.price + "</td>"));
          row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='update2.png' width='40' height='30'></td>"));
          row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='delete2.png' width='40' height='30'></td>"));
    }       
    function fruitRemove(email,fruit_name)
    {
      
      $("tbody").remove();
      $.post("delete_fruit_information.php",
            {"email":email,"fruit_name":fruit_name},
            function(data,status){              
              fruits=JSON.parse(data);
              drawTable(fruits,email);
            }
          );
    }
	