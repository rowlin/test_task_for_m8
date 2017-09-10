$(document).ready(function () {

    $('#add').click(function(){
        $('#openModal').show();
    });

    $('.edit').click(function () {
       var id = $(this).data('value');
        $.get('get/' + id ,function (data) {
            if(data.code == 200){
                $('#openModal').fadeIn();
                $('#name1').val(data.data.name1);
                $('#name2').val(data.data.name2);
                $('#name3').val(data.data.name3);

                // and change save button
                $('#save').data('value' , id);


            }else{
            }
            
        })
    });


    $('.delete').click(function () {
        var id = $(this).data('value');
        $.ajax({
            type: "get",
            url:  'delete/' + id,
            success: function (data) {
                console.log(data);
                if(data.code == '200'){
                    console.log(data);
                    $("#box" + id).remove();
                }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
        
        
        
    });
    

    $('#close').click(function (){
        $('#openModal').fadeOut();
    });


    $('#save').click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault();
        var url;
        save_edit = $(this).data('value');
        console.log(save_edit);
        if(save_edit){
        //then save edited data
            url = '/edit/'+ save_edit;
        }else{
        //then create
            url = '/create/'
        }

        $.ajax({
            type: 'post',
            url: url,
            dataType: 'json',
            data: {
                'name1': $("#name1").val(),
                'name2': $('#name2').val(),
                'name3': $('#name3').val(),
            },
            success: function (data) {
                console.log(data);
                if (data.code == '200') {
                    if(data.mess == 'add') {
                        var section = '<div class="box_section" id="box'+ data.data.id +'"><div id="number">' + data.data.id;
                        section += '</div> <div> <input type="text" placeholder="' + data.data.name1 + '" name="name1"><br/>';
                        section += '<input type="text" placeholder="' + data.data.name2 + '" name="name2"><br/>';
                        section += '<input type="text" placeholder="' + data.data.name3 + '" name="name3"></div>';
                        section += '<div id="buttons"> <span class="edit" data-value="'+ data.data.id + '">';
                        section += '<img src="img/M8_assets/Edit.png" class="pt5"> </span>';
                        section += '<span class="delete" data-value="' + data.data.id +' ">'
                        section += '<img src="img/M8_assets/Delete.png" class="pt5pl20"> </span> </div>'
                        $('.modalDialog').fadeOut();
                        $('#list').append(section);
                    }
                    if(data.mess == 'updated'){
                        var up = $("#box" + data.data.id);
                        console.log(up);
                        up.find('#ans1').attr('placeholder' , data.data.name1);
                        up.find('#ans2').attr('placeholder' , data.data.name2);
                        up.find('#ans3').attr('placeholder' , data.data.name3);
                        $('.modalDialog').fadeOut();
                    }
                }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        })
    })
});

/**
 * Created by alice on 08.09.17.
 */
