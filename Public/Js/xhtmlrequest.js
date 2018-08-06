var requestServer = function(url, type, data, choose, cb)
{

    // Set up the AJAX request.
    var xhr = new XMLHttpRequest();
    // Open the connection.
    xhr.open(type, url, true);

    var formData;

    if(choose == 2)//set of key/value pairs to send, set to multipart/form-data.
    {
    	formData = new formData();
    	formData.append("data", data)
   	xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
    }else if(choose == 1){//body string
   	formData = data;
   	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }else{//json string
   	formData = JSON.stringify({data: data})
      xhr.setRequestHeader("Content-type", "application/json");
    }

    // Set up a handler for when the request finishes.
    xhr.onload = function () {
        if (xhr.status === 200){
          //  console.log("da chay thanh cong ham request")
        }
        else{
        	cb("An unknown error. ", null)
           	alert("Xay ra loi khong xac dinh. Sorry!!!")
        }
    };

    // Send the Data to server
    xhr.send(formData);

    //take data from server responsible
    xhr.onreadystatechange = function()
    {//State = 4 is request finished and response is ready, xhr.status == 200 is 200: "OK"
    	
        if(xhr.readyState == 4)
        {
           	if(xhr.status === 200)
            {
               console.log(xhr.responseText)
           	//	var data_response = JSON.parse(xhr.responseText);
               	cb(null, xhr.responseText)
               }else{
               	var err = "Status code err: " + xhr.status
               	cb(err, null)
               }
           }
    }
}