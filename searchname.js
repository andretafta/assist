$(document).ready(function(){  
    $('#namakaryawan').keyup(function(){  
         var query = $(this).val();  
         if(query != '')  
         {  
              $.ajax({  
                   url:"searchname.php",  
                   method:"POST",  
                   data:{query:query},  
                   success:function(data)  
                   {  
                        $('#namaList').show();  
                        $('#namaList').html(data);  
                   }  
              });  
         }  
         else{
          $('#namaList').hide();  
         }
    });  
    $(document).on('click', '#namaList li', function(){  
         $('#namakaryawan').val($(this).text());  
         $('#namaList').hide();  
    }); 
     
});  