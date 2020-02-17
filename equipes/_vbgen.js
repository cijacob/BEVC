ns = (document.layers) ? 1:0;
ie = (document.all) ? 1:0;

function MyWinphp(llen,hlen,ptit,pname) {
   alert(pname);
   MyW=window.open ('',ptit,'width=' + llen + ',height=' + hlen + ',SCROLLBARS');
   MyW.document.write("<HTML><HEAD><TITLE>"+ptit+"</TITLE></HEAD><BODY MARGINWIDTH=0 MARGINHEIGHT=0>");
   MyW.document.write("<SCRIPT LANGUAGE=\"JavaScript\">location.href=\""+pname+".php\";");
   MyW.document.write("<"+"/SCRIPT></BODY></HTML>");   }

function Jimprime() {
   if (typeof(window.print) != 'undefined')
     {window.print(); } }

function setForm(formname, elementname, elvalue, sub) {
   document.forms[formname].elements[elementname].value=elvalue;
   if (sub != 'NO') document.forms[formname].submit(); 
   return true;}

function setPop(url) {
   window.open(url,'popup','menubar=yes,scrollbars=yes,location=no,toolbar=yes,status=no,resizable=yes'); }

function setArForm(formname, elname, elvalue, sub) {
   while (elname.length > 0) {
      anElem = elname.shift(); 
      document.forms[formname].elements[anElem].value=elvalue.shift(); }
   if (sub != 'NO') document.forms[formname].submit(); }

function setBtn(BtnName) {
   while (BtnName.length > 0) {
      var el = document.getElementById(BtnName.shift())
      el.style.visibility='visible';
      el.style.display='block'; } }

function clearConge(id) {
   elStart = 'Started'+id;
   document.forms['calForm'].elements[elStart].value='';
   elEnd = 'Ended'+id;
   document.forms['calForm'].elements[elEnd].value=''; }
   
function clearScore(id) {
   elH = 'Sc1H['+id+']'
   elA = 'Sc1A['+id+']'
   document.forms['Envoires'].elements[elH].value='';
   document.forms['Envoires'].elements[elA].value='';
   elH = 'Sc2H['+id+']'
   elA = 'Sc2A['+id+']'
   document.forms['Envoires'].elements[elH].value='';
   document.forms['Envoires'].elements[elA].value='';
   elH = 'Sc3H['+id+']'
   elA = 'Sc3A['+id+']'
   document.forms['Envoires'].elements[elH].value='';
   document.forms['Envoires'].elements[elA].value='';
   elH = 'Sc4H['+id+']'
   elA = 'Sc4A['+id+']'
   document.forms['Envoires'].elements[elH].value='';
   document.forms['Envoires'].elements[elA].value='';
   elH = 'Sc5H['+id+']'
   elA = 'Sc5A['+id+']'
   document.forms['Envoires'].elements[elH].value='';
   document.forms['Envoires'].elements[elA].value=''; }

function autoTab(field, maxlength, comma) {
   doTab = 0;
   if(comma == 1) 
     {lastchar = field.value.substr(field.value.length - 1,1);
      if (lastchar == ' ')
        {doTab = 1;} }
   if(field.value.length >= maxlength || doTab == 1)
     {for (i=0; i<field.form.length; i++)
        {if(field.form[i].name == field.name)
           {next = i + 1;
            break; } }
      i = field.index;
      field.form[next].focus(); } }

function subFullArea(field, maxlength,formname) {
   if(field.value.length >= maxlength)
     {document.forms[formname].submit();} }

function Is_Num(evt) {
   var keyCode = evt.which ? evt.which : evt.keyCode;
   var cnumerique = '0123456789 ';
   if (String.fromCharCode(8) == String.fromCharCode(keyCode)) return true;
   if (String.fromCharCode(46) == String.fromCharCode(keyCode)) return true;
   if (cnumerique.indexOf(String.fromCharCode(keyCode)) == -1) return false; }

function BlurSet(a,b,c,d) {
   var temp = new Array();
   id1 = a+'['+b+']['+c+']';
   id2 = a+'['+b+']['+(c+6)+']';
   id0 = 0;
   id = document.forms['FM_B'].elements[id1].value;
   if (id.indexOf('/') > 0)
     {temp = id.split('/');
      document.forms['FM_B'].elements[id1].value = temp[0];
      document.forms['FM_B'].elements[id2].value = temp[1];
      if (c < 13) id0 = 1;  }
   if (a == 'XS')
     {id3 = 'XS[5]['+(c+12)+']';
      id4 = 'XS[5]['+(c+18)+']';
      document.forms['FM_B'].elements[id3].value=document.forms['FM_B'].elements[id1].value;
      if (id0 == 1) 
        document.forms['FM_B'].elements[id4].value=document.forms['FM_B'].elements[id2].value;}
   if (d > 0)
     {if (d == 1) id5 = a+'['+(b+1)+'][1]';
      if (d == 2) id5 = 'XS[5][1]';
      if (d == 3) id5 = 'XS[5][19]';
      document.forms['FM_B'].elements[id5].focus(); } }
