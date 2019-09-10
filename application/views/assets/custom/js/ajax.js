
function frm_submit(url, data)
{
    var data = data;
    $.ajax({
        url:url,
        type:'POST',
        data: data,
        success: function(reslt){
            //debugger;
            var arr =jQuery.parseJSON(reslt);
            var status = arr['status'];
            var path = arr['path'];
            if(status)
            {
                $("#error").fadeIn(1000, function(){
                    $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Hooray!! You just achieved it!!</div>');
                });
                setTimeout('window.top.location.replace(\''+path+'\'); ',1000);
                //setTimeout('window.top.location.href = \''+path+'\'; ',1000);
            }
            else
            {
                $("#error").html('');
                $("#error").fadeIn(1000, function(){
                    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Ohhh! It doesn\'t worked! Just Try again!</div>');
                });
            }
        }
    });
}

function logout(url)
{
    $.ajax
	({
		url:url,
		type:'POST',
		cache: false,
		async:false,
		success: function(result){
			$("#logout_user").html('Signing out...');
			setTimeout('location.reload();',500);
		}
	});
}

function createButtons(arr)
{
    //var $el_div = $('#div_btn_levels',window.parent.document);
    var $el_div = $('#div_btn_levels');
    $el_div.empty();
    var num = 0;
    var max = arr[arr.length-1].level_id;
	for(let i=0; i<max; i++)
	{	
        num = i+ +1;
        if(arr_num_exist(num,arr, 'level_id'))
            $el_div.append('<button class="btn2 btn_levels success" name="btn_submit" level="'+num+'">'+num+'</button>');
        else
        $el_div.append('<button class="btn2 btn_levels" name="btn_submit" level="'+num+'">'+num+'</button>');
    }
    max++;
    $el_div.append('<button class="btn2 btn_levels" name="btn_submit" level="'+max+'">'+max+'</button>');
}

function arr_num_exist(num, arr, key)
{
    for(let i=0; i< arr.length; i++)
    {
        if(arr[i][key] == num)
            return true;
    }
    return false;
}
function btn_changeLevel(url,level)
{
    $.ajax
	({
		url:url,
        type:'POST',
        data: {level:level},
		cache: false,
		async:false,
		success: function(result){
            var arr =jQuery.parseJSON(result);
            var path = arr['path'];
            window.top.location.replace(path);
		}
	});
}