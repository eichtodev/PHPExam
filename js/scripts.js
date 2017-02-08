$(function () {
	//DateTimePicker
    $('#birthday').datetimepicker({
    	viewMode: 'years',
    	format: 'MM-DD-YYYY'
    });

    //Form Validation
    $("#SignUpForm").submit(function() {
    	var Name = $("#name").val();
    	var Birthday = $("#birthday").val();

    	if (Name == "" && Birthday == "") {
    		alert("All fields are required.");
    		return false;
    	} else if (Name == "") {
    		alert("Name field is required.");
    		return false;
    	} else if (Birthday == "") {
    		alert("Birthday field is required.");
    		return false;
    	} else {
    		return true;
    	}
    });

    $("#name").keypress(function(event) {
    	return CharactersOnly(event);
    });

    $("#birthday").keypress(function(event) {
    	return NoCharInput(event);
    });
});

function CharactersOnly(e){
	var e=window.event || e;
	var unicode=e.charCode || e.keyCode;
	return (unicode>=65 && unicode<=90 || unicode>=97 && unicode<=122 
			|| unicode==32 || unicode==8 || unicode==9 || unicode==16 
			|| unicode==46 || unicode>=37 && unicode<=40)? true : false
}

function NoCharInput(e){
	var e=window.event || e;
	var unicode=e.charCode || e.keyCode;
	return (unicode==9 || unicode==8)? true : false
}