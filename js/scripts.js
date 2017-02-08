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

    //Export to XML
    $("#btnExportXML").click(function() {
    	// var Name = $("#name").val();
    	// var Birthday = $("#birthday").val();

    	// if (Name == "" && Birthday == "") {
    	// 	alert("All fields are required.");
    	// } else if (Name == "") {
    	// 	alert("Name field is required.");
    	// } else if (Birthday == "") {
    	// 	alert("Birthday field is required.");
    	// } else {
	    // 	$.ajax({
	    // 		async: false,
	    // 		type: "POST",
	    // 		url: "xmlexport.php",
	    // 		data: {
	    // 			"Name": Name,
	    // 			"Birthday": Birthday
	    // 		},
	    // 		error: function(req, error) {
	    // 			alert(req.statusText);
	    // 		},
	    // 		success: function(msg) {
	    // 			if (msg == "ok") {
	    // 				window.location.href = "http://localhost/PHPExam/data/data.xml";
	    // 			}
	    // 		}
	    // 	});
    	// }
    });
});