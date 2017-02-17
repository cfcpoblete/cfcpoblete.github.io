<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js">    </script>
<script>
function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function checkRM(rank, trm, rrm) {

$.ajax("http://docs.google.com/spreadsheets/d/1CObGLwWbGuIqDwBiLcehiYF8_zSj_odZjlrCyNrOyqg/pub?gid=1332163506&single=true&output=tsv").done(function(desc)
                    {
                      var result2 = desc.split("\n");
                      var subresult2 = "";
                      var data2 = "";

                        for (j = 1; j < result2.length; j++) 
                        { 
                          subresult2 = result2[j];
                          data2 = subresult2.split("\t");
                          
                          if(data2[0] == rank){

                             if(parseInt(trm) >= parseInt(data2[1]) && parseInt(trm) <= parseInt(data2[2])){
                                document.getElementById("TRMEval").innerHTML = data2[3]; 
                             }

                             if(parseInt(rrm) >= parseInt(data2[4]) && parseInt(rrm) <= parseInt(data2[5])){
                                document.getElementById("RRMEval").innerHTML = data2[6]; 
                             }
                          
                          }
                        }

                    });



}

function RT(rev) {

    if (rev == "1") {
    reverse = 6;
    } else if (rev == "2") {
    reverse = 5;
    } else if (rev == "3") {
    reverse = 4;
    } else if (rev == "4") {
    reverse = 3;
    } else if (rev == "5") {
    reverse = 2;
    } else if (rev == "6") {
    reverse = 1;
    } else {
    reverse = "EMPTY";
    }
return reverse;
}

</script>
</head>
<body>

<table>

  <tr>
    <td align="left" valign="middle" >
    
<table  width="845" border="0" align="center" cellpadding="0" cellspacing="0" >

    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr> 
      <td align="center" valign="middle"><span class="TextABold">SeaMOS Form</span></td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
</table>

    <table width="845" border="0" cellspacing="5" cellpadding="0">
      <tr>
        <td>
        <b><span>Rank</span></b><span>:</span><span id="Rank"><i><%=rstemp("applyPositionApplied")%></i></span><br /><br />
        <b><span>TRM Rating</span></b><span>:</span><span id="TRMRating"><i><%=rstemp("TRM")%></i></span><br />
        <b><span>TRM Evaluation</span></b><span>:</span><span id="TRMEval"><i><%=rstemp("TRMDesc")%></i></span><br /><br />
        <b><span>RRM Rating</span></b><span>:</span><span id="RRMRating"><i><%=rstemp("RRM")%></i></span><br />
        <b><span>RRM Evaluation</span></b><span>:</span><span id="RRMEval"><i><%=rstemp("RRMDesc")%></i></span><br /><br />
        <table border="1" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td width="100%" colspan="7"><b><span>Part 0(Contact Information)</span></b><span>: Please fill in the necessary information on the space provided.</span></td>
          </tr>
          <tr>
            <td width="20%"><span>Last Name*</span></td>
            <td width="20%"><span>First Name</span></td>
            <td width="10%"><span>Middle Name</span></td>
            <td width="15%"><span>Telephone/Mobile*</span></td>
            <td width="20%"><span>Address</span></td>
            <td width="15%"><span>Email*</span></td>
          </tr>
          <tr>
            <td width="20%" valign="top"><span id="LName"><i><%=rstemp("applyLastName")%></i></span></td>
            <td width="20%" valign="top"><span id="FName"><i><%=rstemp("applyFirstName")%></i></span></td>
            <td width="10%" valign="top"><span id="MName"><i><%=rstemp("applyMiddleName")%></i></span></td>
            <td width="15%" valign="top"><span id="TelNo"><i><%=rstemp("applyHomeTel")%></i></span></td>
            <td width="20%" valign="top"><span id="Add"><i><%=rstemp("applyAddress")%></i></span></td>
            <td width="15%" valign="top"><span id="EAdd"><i><%=rstemp("applyEmail")%></i></span></td>
          </tr>
        </table>
          <br />
          <table border="1" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td width="100%" colspan="7"><b><span>Part 1(Profile)</span></b><span>: Please fill
                in the necessary information on the space provided.</span></td>
            </tr>
            <tr>
              <td width="22%"><span>Rank*</span></td>
              <td width="6%"><span>Age*</span></td>
              <td width="11%"><span>Civil Status*</span></td>
              <td width="13%"><span>No. of Children*</span></td>
              <td width="15%"><span>Citizenship*</span></td>
              <td width="13%"><span>Years in Shipping*</span></td>
              <td width="16%"><span>Years in shipping (Offshore only)*</span></td>
            </tr>
            <tr>
              <td width="22%" valign="top"><span id="Rank2"><i><%=rstemp("applyPositionApplied")%></i></span></td>
              <td width="6%" valign="top"><span id="Age"><i><%=rstemp("applyAge")%></i></span></td>
              <td width="11%" valign="top"><span id="MStatus"><i><%=rstemp("applyMaritalStatus")%></i></span></td>
              <td width="13%" valign="top"><span id="NOC"><i><%=rstemp("applyNoOfChildren")%></i></span></td>
              <td width="15%" valign="top"><span id="Nationality"><i><%=rstemp("applyNationality")%></i></span></td>
              <td width="13%" valign="top"><span id="YOS"><i><%=rstemp("applyYearsInShipping")%></i></span></td>
              <td width="16%" valign="top"><span id="YIO"><i><%=rstemp("applyYearsInOffshore")%></i></span></td>
            </tr>
          </table>
          <br />
          <table border="1" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td width="100%" colspan="7"><b><span>Part 2 (Work Experience)</span></b><span>: </span><span>In completing the questionnaire, please remember that there is NO
                RIGHT or WRONG answers. The items in this section pertain to brief
                descriptions of experiences of officer-level seafarers. We are only
                interested in knowing how each item relates to you as an officer. </span></td>
            </tr>
            <tr>
              <td width="100%" colspan="7"><b><span>Specific
                instruction</span></b><span>: </span><span>Please rate TO WHAT EXTENT DOES EACH ITEM DESCRIBES YOU AS AN OFFICER.
                  Please read each item carefully and <b>tick</b> the appropriate rating. Please use the following rating scale:<br />
                  <br />
                  </span>
                <table width="511" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="21" valign="top"><span>6</span></td>
                    <td width="21" valign="top"><span>=</span></td>
                    <td width="125" valign="top"><span>Exactly like me</span></td>
                    <td width="264" valign="top"><span>(Descriptive of you at all instances)</span></td>
                  </tr>
                  <tr>
                    <td width="21" valign="top"><span>5</span></td>
                    <td width="21" valign="top"><span>=</span></td>
                    <td width="125" valign="top"><span>Very much like me</span></td>
                    <td width="264" valign="top"><span>(Descriptive of you on several instances)</span></td>
                  </tr>
                  <tr>
                    <td width="21" valign="top"><span>4</span></td>
                    <td width="21" valign="top"><span>=</span></td>
                    <td width="125" valign="top"><span>Like me somewhat</span></td>
                    <td width="264" valign="top"><span>(Descriptive of you on a few instances)</span></td>
                  </tr>
                  <tr>
                    <td width="21" valign="top"><span>3</span></td>
                    <td width="21" valign="top"><span>=</span></td>
                    <td width="125" valign="top"><span>Not like me</span></td>
                    <td width="264" valign="top"><span>(Not descriptive of you on a few instances)</span></td>
                  </tr>
                  <tr>
                    <td width="21" valign="top"><span>2</span></td>
                    <td width="21" valign="top"><span>=</span></td>
                    <td width="125" valign="top"><span>Not so much like me</span></td>
                    <td width="264" valign="top"><span>(Not descriptive of you on a several instances)</span></td>
                  </tr>
                  <tr>
                    <td width="21" valign="top"><span>1</span></td>
                    <td width="21" valign="top"><span>=</span></td>
                    <td width="125" valign="top"><span>Not at all like me</span></td>
                    <td width="264" valign="top"><span>(Not descriptive of you at all instances)</span></td>
                  </tr>
                </table>
                <br />
                <table border="1" cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td width="80%" valign="bottom"><span>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>I am not comfortable
                      about fulfilling others&rsquo; responsibilities when necessary
                      
                      </span></td>
                    <td width="3%" align="center"><span id="w1"><i><%=rstemp("WE1")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom" bgcolor="#C5CAE9"><span>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>I discourage
                      discussion about work related and personal issues on board
                      
                      </span></td>
                    <td width="3%" align="center" bgcolor="#C5CAE9"><span id="w2"><i><%=rstemp("WE2")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom"><span>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>I feel uneasy and
                      uncomfortable whenever I see other crews&rsquo; different customs and beliefs
                      
                      </span></td>
                    <td width="3%" align="center"><span id="w3"><i><%=rstemp("WE3")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom" bgcolor="#C5CAE9"><span>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>I will only take the
                      risk when I am sure that it will satisfy the client's demands
                      
                      </span></td>
                    <td width="3%" align="center" bgcolor="#C5CAE9"><span id="w4"><i><%=rstemp("WE4")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom"><span>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>I do not argue with
                      clients or company representative even if I'm right
                      
                      </span></td>
                    <td width="3%" align="center"><span id="w5"><i><%=rstemp("WE5")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom" bgcolor="#C5CAE9"><span>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>I tend to continue
                      what I am doing even if it means a possibility of damaging property
                      
                      </span></td>
                    <td width="3%" align="center" bgcolor="#C5CAE9"><span id="w6"><i><%=rstemp("WE6")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom"><span>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>I perform tasks even
                      if the safety protocol has been violated
                      
                      </span></td>
                    <td width="3%" align="center"><span id="w7"><i><%=rstemp("WE7")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom" bgcolor="#C5CAE9"><span>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>It is ok for me to
                      continue working on a task even if it is beyond my skills and abilities
                      
                      </span></td>
                    <td width="3%" align="center" bgcolor="#C5CAE9"><span id="w8"><i><%=rstemp("WE8")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom"><span>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span>I criticize how
                      other crew members' work even if it will hurt their feelings
                      
                      </span></td>
                    <td width="3%" align="center"><span id="w9"><i><%=rstemp("WE9")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom" bgcolor="#C5CAE9"><span>10.&nbsp;&nbsp;&nbsp; </span><span>I hesitate to help crew members who are having difficulty with their
                      assigned tasks
                      
                      </span></td>
                    <td width="3%" align="center" bgcolor="#C5CAE9"><span id="w10"><i><%=rstemp("WE10")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom"><span>11.&nbsp;&nbsp;&nbsp; </span><span>I can afford to risk the safety of the ship and crew in order to
                      meet a client's demand
                      
                      </span></td>
                    <td width="3%" align="center"><span id="w11"><i><%=rstemp("WE11")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom" bgcolor="#C5CAE9"><span>12.&nbsp;&nbsp;&nbsp; </span><span>I get discouraged when faced with difficult situations
                      
                      </span></td>
                    <td width="3%" align="center" bgcolor="#C5CAE9"><span id="w12"><i><%=rstemp("WE12")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom"><span>13.&nbsp;&nbsp;&nbsp; </span><span>I do not mingle with lower ranking crew members
                      
                      </span></td>
                    <td width="3%" align="center"><span id="w13"><i><%=rstemp("WE13")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom" bgcolor="#C5CAE9"><span>14.&nbsp;&nbsp;&nbsp; </span><span>I believe that a crew member's job onboard will still be successful
                      even without the cooperation of others.
                      
                      </span></td>
                    <td width="3%" align="center" bgcolor="#C5CAE9"><span id="w14"><i><%=rstemp("WE14")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom"><span>15.&nbsp;&nbsp;&nbsp; </span><span>I sometimes oppose the instruction of my superior in order to
                      accomplish a task
                      
                      </span></td>
                    <td width="3%" align="center"><span id="w15"><i><%=rstemp("WE15")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom" bgcolor="#C5CAE9"><span>16.&nbsp;&nbsp;&nbsp; </span><span>I can be mean in response to <span class="SpellE">offenses</span> done
                      by others
                      
                      </span></td>
                    <td width="3%" align="center" bgcolor="#C5CAE9"><span id="w16"><i><%=rstemp("WE16")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom"><span>17.&nbsp;&nbsp;&nbsp; </span><span>I share stories about my personal and career life with other crew
                      
                      </span></td>
                    <td width="3%" align="center"><span id="w17"><i><%=rstemp("WE17")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom" bgcolor="#C5CAE9"><span>18.&nbsp;&nbsp;&nbsp; </span><span>I find it hard to admit whenever I commit mistakes
                      
                      </span></td>
                    <td width="3%" align="center" bgcolor="#C5CAE9"><span id="w18"><i><%=rstemp("WE18")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom"><span>19.&nbsp;&nbsp;&nbsp; </span><span>I sometimes let frustrations affect my work onboard
                      
                      </span></td>
                    <td width="3%" align="center"><span id="w19"><i><%=rstemp("WE19")%></i></span></td>
                    </tr>
                  <tr>
                    <td width="80%" valign="bottom" bgcolor="#C5CAE9"><span>20.&nbsp;&nbsp;&nbsp; </span><span>I tend to comply with a client's demand rather than secure the
                      safety of the ship and the crew
                      
                      </span></td>
                    <td width="3%" align="center" bgcolor="#C5CAE9"><span id="w20"><i><%=rstemp("WE20")%></i></span></td>
                    </tr>
                </table></td>
            </tr>
          </table>
          <br />
          <br /></td>
        <td width="10>&nbsp;</td>
        <td width="1" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="250" align="right" valign="top"><br /></td>
      </tr>
    </table>
    <script type="text/javascript">

                  $.ajax("http://docs.google.com/spreadsheets/d/e/2PACX-1vSdvxM-4_FTd9S-sKiTkaiAPHqwzXFmV4uXWFSSWZRH_eCbK9fAPSPI-a0Mi9edE2rqTeVEORt8ih5G/pub?gid=56048618&single=true&output=tsv").done(function(raw)
            {
              var result = raw.split("\n");

                for (i = 1; i < result.length; i++) 
                { 
                  if (i == getParameterByName("v")) {
                            var subresult = result[i];
                            var data = subresult.split("\t");
                            document.getElementById("Rank").innerHTML= data[7];
                            document.getElementById("LName").innerHTML= data[3];
                            document.getElementById("FName").innerHTML= data[1];
                            document.getElementById("MName").innerHTML= data[2];
                            document.getElementById("TelNo").innerHTML= data[4];
                            document.getElementById("Add").innerHTML= data[5];
                            document.getElementById("EAdd").innerHTML= data[6];
                            document.getElementById("Rank2").innerHTML= data[7];
                            document.getElementById("Age").innerHTML= data[8];
                            document.getElementById("MStatus").innerHTML= data[9];
                            document.getElementById("NOC").innerHTML= data[10];
                            document.getElementById("Nationality").innerHTML= data[11];
                            document.getElementById("YOS").innerHTML= data[12];
                            document.getElementById("YIO").innerHTML= data[13];

                            document.getElementById("w1").innerHTML= data[14];
                            document.getElementById("w2").innerHTML= data[15];
                            document.getElementById("w3").innerHTML= data[16];
                            document.getElementById("w4").innerHTML= data[17];
                            document.getElementById("w5").innerHTML= data[18];
                            document.getElementById("w6").innerHTML= data[19];
                            document.getElementById("w7").innerHTML= data[20];
                            document.getElementById("w8").innerHTML= data[21];
                            document.getElementById("w9").innerHTML= data[22];
                            document.getElementById("w10").innerHTML= data[23];
                            document.getElementById("w11").innerHTML= data[24];
                            document.getElementById("w12").innerHTML= data[25];
                            document.getElementById("w13").innerHTML= data[26];
                            document.getElementById("w14").innerHTML= data[27];
                            document.getElementById("w15").innerHTML= data[28];
                            document.getElementById("w16").innerHTML= data[29];
                            document.getElementById("w17").innerHTML= data[30];
                            document.getElementById("w18").innerHTML= data[31];
                            document.getElementById("w19").innerHTML= data[32];
                            document.getElementById("w20").innerHTML= data[33];

var TRMRating = (RT(data[15]) + RT(data[16]) + parseInt(data[18]) + RT(data[19]) + parseInt(data[21]) + RT(data[25]) + RT(data[26]) + RT(data[31]) + RT(data[32]) + RT(data[33])) / 10;
 
                  document.getElementById("TRMRating").innerHTML = TRMRating;

var RRMRating = (RT(data[14]) + RT(data[22]) + RT(data[23]) + parseInt(data[28]) + RT(data[29])) / 5;

                  document.getElementById("RRMRating").innerHTML = RRMRating;

checkRM(data[7], TRMRating, RRMRating);

                  }
                }

            });


    </script>


    </td>
  </tr></table>
</body>
</html> 