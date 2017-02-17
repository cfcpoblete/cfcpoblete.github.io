<!doctype>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js">    </script>
        <style type="text/css">
        td
        {
            word-wrap: break-word;
            max-width: 150px;
            text-align: center;
        }
        </style>
    </head>
    <body>
         <p id="demo" onclick="myFunction()"></p>
        <script>
            $.ajax("http://docs.google.com/spreadsheets/d/e/2PACX-1vSdvxM-4_FTd9S-sKiTkaiAPHqwzXFmV4uXWFSSWZRH_eCbK9fAPSPI-a0Mi9edE2rqTeVEORt8ih5G/pub?gid=56048618&single=true&output=tsv").done(function(raw)
            {
                var result = raw.split("\n");
                var subresult = "";
                var data = "";
                var table = "<table><tr><th>Timestamp</th><th>Name of Company</th><th>Contact Person</th><th>Email</th><th>Tel/Mobile</th><th>Comments</th><th>Vessel Name</th><th>Vessel Type</th><th>Number of Safe Manning Requirement</th><th>Additional Crew Compliment</th><th>Area of Operation</th><th>Additional Crew Compliment</th><th>Special Training/course Requirements</th><th>Oil Majors Charterer guidelines</th><th>Vessel Activity</th><th>a. Asian crews</th><th>b. European crews</th></tr>";

                for (i = 1; i < result.length; i++) 
                { 
                    subresult = result[i];
                    data = subresult.split("\t");
                    table = table + "<tr><td>" + data[0] + "</td><td>" + data[1] + "</td><td>" + data[2] + "</td><td>" + data[3] + "</td><td>" + data[4] + "</td><td>" + data[5] + "</td><td>" + data[6] + "</td><td>" + data[7] + "</td><td>"+ data[8] + "</td></tr>";

                }


                document.getElementById("demo").innerHTML = table + "</table>";
            });
        </script>

    </body>
</html>
