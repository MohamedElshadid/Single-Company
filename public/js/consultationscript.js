$(function() {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

var consform ={
    phone:'',
    name:'',
    time:'',
    comment:''

}
console.log('ssssssssssaaaaaaaaa')
$('#consmodal').on('change','#username',(event)=>
    {
            console.log(event.target)
            q1=$(event.target);// get element
            consform.name  = q1.prop('value'); //get value

        });//question 1 answer
    
        $('#consmodal').on('change','#phoneno',(event)=>
    {
            console.log(event.target)
            q1=$(event.target);// get element
            consform.phone  = q1.prop('value'); //get value

        });//question 1 answer
        $('#consmodal').on('change','#comment',(event)=>
        {
                q1=$(event.target);
                consform.comment  = q1.prop('value'); 
        });//question 1 answer
        $('#consmodal').on('change','#date',(event)=>
           {
            console.log(event.target)
            q1=$(event.target);// get element
            consform.time  = q1.prop('value'); //get value

        });//question 1 answer

$('#conssubmit').on('click',(event)=>
{
    var myform =new FormData ();


    myform.append('username',consform.name);
    myform.append('phone',consform.phone);
    myform.append('comment',consform.comment);
    myform.append('date',consform.time);
    $('.alerts ul').html('');
    $.ajax({
                url: "/contact",
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
                data: myform,                         // Setting the data attribute of ajax with file_data
                type: 'POST',
                success:function(data)
                {
                    console.log(consform.time);
                    x=JSON.parse(data);
                    if(x.erors)
                    {   
                        x.erors.forEach(element => {
                             $(`<li>${element}</li>`).appendTo($('.alerts ul'));
                        });
                       
                       console.log(x.erors); 
                    }
                    if(x.message)
                    {
                     
                            $(`<li>${x.message}</li>`).appendTo($('.alerts ul'));
                     
                        console.log(x.message,'sssss'); 
                    }

                }
       })///ajax

    });
});



