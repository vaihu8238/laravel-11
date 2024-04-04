$(document).on("click","#btn_add",function(){

    data =  $('#user_form').serialize();
    console.log(data)

    $.ajax({
        data: data,
        type: "post",
        url: "backend/save.php",
  
    "success":function (result){
        console.log(result)
        console.log(JSON.parse(result))

        dataResult = JSON.parse(result);
        console.log(dataResult.status)

        if(dataResult.status ==200)
        {
            
            $('#exampleModal').hide();
            alert("data added..!");
            window.location.reload();

        }
    }
});
});


// $(document).ready(function(){
//     getdata();
// });
// function getdata()
// {
//     $.ajax({
//         type:"GET",
//         url: "backend/fetchdata.php",
//         success : function (response){
//             // console.log(response);
        
//         $.each(response, function(key,value){
//             // console.log(value['name']);

//             $('.userdata').append('<tr>'+
//               '<td>'+value['uid']+'</td>\
//               <td>'+value['name']+'</td>\
//               <td>'+value['email']+'</td>\
//               <td>'+value['phone']+'</td>\
//               <td>'+value['city']+'</td>\
//               <td>\
//                 <a href="" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>\
//                 <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>\
//               </td>\
//             </tr>\ ');
            
//         })
//     }

//   });  

// }

$(document).on('click','.update',function() {
    var id=$(this).attr("data-id");
    var name=$(this).attr("data-name");
    var email=$(this).attr("data-email");
    var phone=$(this).attr("data-phone");
    var city=$(this).attr("data-city");

    $('#id_u').val(id);
    $('#name_u').val(name);
    $('#email_u').val(email);
    $('#phone_u').val(phone);
    $('#city_u').val(city);
});

$(document).on('click','#update',function() {
    var data = $("#update_form").serialize();
    $.ajax({
        data: data,
        type: "POST",
        url: "backend/save.php",
        success: function(dataResult)
        {
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200)
                {
                    $('#editexampleModal').modal('hide');
                    alert('Data updated successfully !'); 
                    location.reload();						
                }
                else if(dataResult.statusCode==201)
                {
                   alert(dataResult);
                }
        }
    });
});


$(document).on("click",".delete",function(e){
    var id=$(this).attr("data-id");
    $('#id_d').val(id);
    // alert(id);
});

$(document).on("click", "#delete", function(e) { 
    $.ajax({
        url: "backend/save.php",
        type: "POST",
        cache: false,
        data:{
            type:3,
            id: $("#id_d").val()
        },
        success: function(dataResult){
                $('#deleteexampleModal').modal('hide');
                $("#"+dataResult).remove();
        
        }
    });
});


$(document).on("click","#delete_multiple",function(){
    var user=[];
    $(".user_checkbox:checked").each(function(){
        user.push($(this).data('user-id'));
    });

    if(user.length<=0)
    {
        alert("Please select records."); 
    }
    else
    {
        var checked = confirm("Are you sure you want to delete "+(user.length>1?"these":"this")+" row?");
        if(checked==true)
        {
            var select_val =user.join(",");
            console.log(select_val);
            $.ajax({
                type: "POST",
                url: "backend/save.php",
                cache:false,
                data:{
                    type: 4,						
                    id : select_val
                },
                success: function(response) {
                    var ids = response.split(",");
                    for (var i=0; i < ids.length; i++ ) {	
                        $("#"+ids[i]).remove(); 
                    }	
                }
            });
        }
    }
});

$(document).ready(function()
    {
        $('[data-toggle="tooltip"]').tooltip();
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function()
        {
            if(this.checked)
            {
                checkbox.each(function()
                {
                    this.checked = true;                        
                });
            } 
            else
            {
                checkbox.each(function()
                {
                    this.checked = false;                        
                });
            } 
        });
        checkbox.click(function()
        {
            if(!this.checked)
            {
                $("#selectAll").prop("checked", false);
            }
        });
});