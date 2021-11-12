var yearArray = new Array();
var springArray = new Array();
var summerArray = new Array();
var autumnArray = new Array();
var winterArray = new Array();
var nSpring, n19, n20, n21, n22=0;

function writeTable(number) {

  var htmlText="";
  htmlText += "<html><head>"
  htmlText += "<title>J.G.'s JavaScript Seasons Table</title>"
  htmlText += "</head>"

  htmlText += "<body BGCOLOR=#FFFFFF TEXT=#000000 LINK=#0000FF VLINK=#663399 ALINK=#FF0000>"


  htmlText += "<div align=\"center\"><center>"
  htmlText +="<A HREF='index.htm'>back</A><P>"

  htmlText += "<TABLE width=500 border=1 cellpadding=1 cellspacing=0 bordercolor=#CCCCCC>"

  htmlText += "<TR>"
  htmlText += "<TD COLSPAN=5>"
  htmlText += "<FONT COLOR=red size=+1><P ALIGN=center>" + "JavaScript Seasons Table</FONT>"
  htmlText += "</TD>"
  htmlText += "</TR>"
  htmlText += "<TR>"

  htmlText += "<TR>"
  htmlText += "<TD COLSPAN=5>"
  htmlText += "<P ALIGN=center>" + "© J.Giesen  --  http://www.GeoAstro.de"
  htmlText += "</TD>"
  htmlText += "</TR>"

  /*
  htmlText += "<TR>"
  htmlText += "<TD COLSPAN=5>"
  htmlText += "<P ALIGN=center>" + "http://www.GeoAstro.de"
  htmlText += "</TD>"
  htmlText += "</TR>"
  */
  
  htmlText += "<TR>"
  htmlText += "<TD bgcolor=#CCCCCC>"
  htmlText +="<P ALIGN=right>"
  htmlText +="Year";
  htmlText += "</TD>"

  htmlText += "<TD bgcolor=#CCCCCC>"
  htmlText +="<P ALIGN=right>"
  htmlText +="Spring / UT";
  htmlText += "</TD>"

  htmlText += "<TD bgcolor=#CCCCCC>"
  htmlText +="<P ALIGN=right>"
  htmlText +="Summer / UT";
  htmlText += "</TD>"

  htmlText += "<TD bgcolor=#CCCCCC>"
  htmlText +="<P ALIGN=right>"
  htmlText +="Autumn / UT";
  htmlText += "</TD>"

  htmlText += "<TD bgcolor=#CCCCCC>"
  htmlText +="<P ALIGN=right>"
  htmlText +="Winter / UT";
  htmlText += "</TD>"

  htmlText +=  "</TR>"



  for (var i=0; i<=number; i++)
      {

    
      
  htmlText += "<TR>"
  htmlText += "<TD>"
  htmlText +="<P ALIGN=right>"

  htmlText += yearArray[i];
  htmlText += "</TD>"

  htmlText += "<TD>"
  htmlText +="<P ALIGN=right>"
  htmlText += springArray[i];
  htmlText += "</TD>"

  htmlText += "<TD>"
  htmlText +="<P ALIGN=right>"
  htmlText += summerArray[i];
  htmlText += "</TD>"

  htmlText += "<TD>"
  htmlText +="<P ALIGN=right>"
  htmlText += autumnArray[i];
  htmlText += "</TD>"

  htmlText += "<TD>"
  htmlText +="<P ALIGN=right>"
  htmlText += winterArray[i];
  htmlText += "</TD>" 

  htmlText +=  "</TR>"
            
  }

  htmlText += "</TABLE>"
  htmlText += "<P>nSpring "+nSpring;
  htmlText += "<P>Mar 19 "+n19;
  htmlText += "<P>Mar 20 "+n20;
  htmlText += "<P>Mar 21 "+n21;
  htmlText += "<P>Mar 22 "+n22;	
  htmlText += "</body></html>"

  document.open();
  document.write(htmlText);
  document.close();
}


