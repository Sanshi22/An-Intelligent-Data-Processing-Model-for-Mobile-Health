function myFunction() 
{
    document.write("Hello World!");
	var myWindow = window.open("", "MsgWindow", "width=200, height=100");
myWindow.document.write("<p>This is 'MsgWindow'. I am 200px wide and 100px tall!</p>");
}

function WriteFile()
{

var fh = fopen("C:\\Users\\ASHUTOSH\\Desktop\\test.txt", 3); // Open the file for writing

if(fh!=-1) // If the file has been successfully opened
{
    var str = "ashutosh hiiii!!";
    fwrite(fh, str); // Write the string to a file
    fclose(fh); // Close the file 
}

}


