var request = {};
request.method = "getAll";

//Retreieves data from the database
var retrieveData = $.post(
    "http://dev.erichay.com/lumo/group.php",
    {"json": JSON.stringify(request)},
    function( data )
    {
        var jsonObj = JSON.parse(data);

        //document.getElementById("group3").innerHTML=jsonObj[1].description;
        //document.getElementById("group4").innerHTML=jsonObj[2].description;
        //document.getElementById("group5").innerHTML=jsonObj[3].description;
        //document.getElementById("group6").innerHTML=jsonObj[4].description;

        //document.getElementById("location1").innerHTML=jsonObj[0].group_name;
        //document.getElementById("location3").innerHTML=jsonObj[1].group_name;
        //document.getElementById("location4").innerHTML=jsonObj[2].group_name;
        //document.getElementById("location5").innerHTML=jsonObj[3].group_name;
        //document.getElementById("location6").innerHTML=jsonObj[4].group_name;
    }
);
