<html>
<script type="text/javascript" src="overlibmws.js"></script>
<style type="text/css">
#centerContainer{
	width:606px;
	position: relative;
	margin-left:auto; 
	margin-right:auto;
}

#header{
	font-family: Arial,Helvetica,Verdana,sans-serif;
	font-size:20px;
	color: #0046E3;
	text-align:center;	
	font-weight: bold;
	
}
</style>
<body>
<div id='header'>
Select a State
</div>
<div id='centerContainer'>
<img src="usamap.gif" onclick="this.blur();" id="map" width="606" height="484" border="0" usemap="#hovermap" class="imgBase" oncontextmenu="this.blur(); return false;" />

<map name="hovermap">
<area href="state.php/?$state=ME" onmouseover="return overlib('<center><B>&nbsp;Maine&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="576, 43, 582, 61, 585, 61, 586, 65, 589, 66, 592, 70, 591, 73, 584, 79, 568, 92, 564, 104, 560, 101, 552, 75, 557, 68, 558, 51, 562, 41, 565, 43, 571, 40"/>

<area href="state.php/?state=NH" onmouseover="return overlib('<center><B>&nbsp;New Hampshire&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="551,85,549,87,548,97,547,108,558,93,564,103,565,115,556,123,548,123"/>

<area href="state.php/?state=VT" onmouseover="return overlib('<center><B>&nbsp;Vermont&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="533,83,540,81,547,80,549,89,546,100,533,93,538,107,542,124,547,122,536,101,548,96,548,114,540,120"/>

<area href="state.php/?state=MA" onmouseover="return overlib('<center><B>&nbsp;Massachussetts&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="541,125,550,122,563,119,576,130,542,136,552,131,562,131,570,136"/>

<area href="state.php/?state=NY" onmouseover="return overlib('<center><B>&nbsp;New York&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="478,147,494,145,508,141,520,141,531,148,541,151,545,143,543,132,539,117,537,105,533,93,530,85,523,87,512,90,508,101,507,113,499,116,489,118,483,121,479,131"/>

<area href="state.php/?state=CT" onmouseover="return overlib('<center><B>&nbsp;Connecticut&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="543,134,549,132,556,132,560,140,554,144,546,145"/>

<area href="state.php/?state=RI" onmouseover="return overlib('<center><B>&nbsp;Rhode Island&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="560,132,566,135,561,141"/>

<area href="state.php/?state=PA" onmouseover="return overlib('<center><B>&nbsp;Pennsylvania&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="470,150,476,145,484,148,493,146,501,143,515,142,523,140,528,148,532,164,527,171,519,174,511,175,499,175,490,178,479,181,474,181,473,171,472,165"/>

<area href="state.php/?state=NJ" onmouseover="return overlib('<center><B>&nbsp;New Jersey&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="530,149,537,149,528,155,533,164,528,170,537,181,540,173,542,169,543,163,537,157"/>

<area href="state.php/?state=DE" onmouseover="return overlib('<center><B>&nbsp;Delaware&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="525,172,530,176,537,183,532,187,528,186,526,179"/>

<area href="state.php/?state=MD" onmouseover="return overlib('<center><B>&nbsp;Maryland&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="486,179,493,177,503,175,513,174,522,172,527,186,536,188,531,196,526,193,523,188,521,181,519,184,521,195,517,193,512,195,514,188,509,184,501,177,493,182,488,186"/>

<area href="state.php/?state=WV" onmouseover="return overlib('<center><B>&nbsp;West Virginia&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="473,174,476,181,484,178,488,186,493,180,501,178,507,181,503,186,499,184,495,189,488,195,484,206,476,215,466,218,458,210,456,204,459,197,464,188,471,184"/>

<area href="state.php?state=VA" onmouseover="return overlib('<center><B>&nbsp;Virginia&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="505,183,511,186,511,194,516,192,523,198,525,208,531,211,531,216,524,218,504,221,479,225,459,227,450,229,456,223,463,215,470,219,472,215,478,214,483,209,485,203,489,196,495,192,497,186,500,182"/>

<area href="state.php/?state=NC" onmouseover="return overlib('<center><B>&nbsp;North Carolina&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="468,226,493,225,512,222,532,218,523,225,535,226,535,232,528,233,532,240,526,243,518,249,514,255,506,256,498,247,489,250,483,250,477,246,470,247,466,245,456,252,446,251,439,253,444,247,450,243,461,236"/>

<area href="state.php/?state=SC" onmouseover="return overlib('<center><B>&nbsp;South Carolina&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="455,255,463,248,476,246,485,248,493,248,501,253,511,258,504,267,495,280,487,287,481,279,473,272,467,267,"/>

<area href="state.php/?state=GA" onmouseover="return overlib('<center><B>&nbsp;Georgia&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="428,255,452,251,461,261,471,271,484,285,485,305,479,305,477,311,467,313,456,313,445,312,442,311,439,301,439,293,440,288,437,282,434,272,433,269"/>

<area href="state.php/?state=FL" onmouseover="return overlib('<center><B>&nbsp;Florida&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="413,314,425,314,440,317,451,315,468,316,481,312,491,323,500,336,509,353,511,372,507,382,497,377,489,368,478,355,474,342,471,332,464,325,455,322,444,327,434,322,424,319,414,323,"/>

<area href="state.php/?state=AL" onmouseover="return overlib('<center><B>&nbsp;Alabama&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="402,257,426,255,439,287,440,309,428,311,412,313,409,320,404,319,401,305,400,286,400,270,400,264,400,257"/>

<area href="state.php/?state=MS" onmouseover="return overlib('<center><B>&nbsp;Mississippi&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="377,260,398,257,398,291,401,321,389,324,384,314,377,315,364,315,369,298,367,286,367,279,370,271,373,266"/>

<area href="state.php/?state=TN" onmouseover="return overlib('<center><B>&nbsp;Tennessee&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="383,238,375,259,389,258,404,253,420,253,429,253,440,249,447,241,455,237,462,233,465,226,459,229,441,231,423,234,404,236"/>

<area href="state.php/?state=KY" onmouseover="return overlib('<center><B>&nbsp;Kentucky&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="463,214,450,227,441,228,415,232,393,235,384,236,386,228,395,221,402,216,413,214,423,211,426,204,432,197,440,201,450,202,459,213,458,211"/>

<area href="state.php/?state=OH" onmouseover="return overlib('<center><B>&nbsp;Ohio&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="468,153,457,159,451,163,443,159,427,161,429,182,433,194,438,196,446,198,456,200,459,193,465,187,470,180,473,172"/>

<area href="state.php/?state=MI" onmouseover="return overlib('<center><B>&nbsp;Michigan&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="420,105,427,105,434,109,433,122,429,130,436,131,439,126,445,132,443,149,441,155,429,157,423,157,411,158,407,157,411,150,408,139,405,126,409,116,416,113,417,107,420,104,392,116,391,106,382,102,372,100,367,96,375,91,386,82,382,89,393,93,401,94,416,90,423,95,430,98,422,98,411,100,402,106,397,110"/>

<area href="state.php/?state=IN" onmouseover="return overlib('<center><B>&nbsp;Indiana&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="402,166,412,162,424,161,427,180,426,198,419,203,413,213,404,214,398,214,404,206,403,192,401,181,401,168"/>

<area href="state.php/?state=WI" onmouseover="return overlib('<center><B>&nbsp;Wisconsin&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="357,94,369,101,379,104,391,112,392,131,392,148,368,153,361,148,361,135,348,124,344,122,343,111,348,102,351,97"/>

<area href="state.php/?state=IL" onmouseover="return overlib('<center><B>&nbsp;Illinois&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="371,155,391,154,397,170,401,201,394,218,386,225,380,216,372,212,376,203,368,199,359,186,362,170,366,169"/>

<area href="state.php/?state=MN" onmouseover="return overlib('<center><B>&nbsp;Minnesota&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="301,67,319,64,329,72,347,75,368,76,350,89,340,107,351,128,358,138,343,139,325,139,308,140,309,122,307,109,305,85,"/>

<area href="state.php/?state=IA" onmouseover="return overlib('<center><B>&nbsp;Iowa&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="306,142,334,142,357,142,364,155,369,163,362,166,357,179,340,180,324,180,315,180,312,169,308,160"/>

<area href="state.php/?state=MO" onmouseover="return overlib('<center><B>&nbsp;Missouri&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="317,183,335,183,356,184,363,200,371,205,369,214,377,223,385,233,375,244,375,236,367,236,350,236,329,237,327,219,329,203,322,198"/>

<area href="state.php/?state=AR" onmouseover="return overlib('<center><B>&nbsp;Arkansas&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="327,242,347,241,371,239,378,244,369,264,365,284,334,286,334,277,330,273,330,261"/>

<area href="state.php/?state=LA" onmouseover="return overlib('<center><B>&nbsp;Louisiana&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="335,289,365,288,367,296,360,308,369,317,383,316,377,326,388,332,376,339,362,330,355,335,342,328,338,331,341,321,341,312,337,307"/>

<area href="state.php/?state=ND" onmouseover="return overlib('<center><B>&nbsp;North Dakota&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="238,64,262,67,297,66,299,87,300,106,273,105,252,105,235,102,235,86"/>

<area href="state.php/?state=SD" onmouseover="return overlib('<center><B>&nbsp;South Dakota&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="234,106,256,108,277,109,301,110,305,129,303,150,290,149,274,146,232,130,231,144,247,146,262,146"/>

<area href="state.php/?state=NE" onmouseover="return overlib('<center><B>&nbsp;Nebraska&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="229,145,253,148,279,150,303,155,312,173,314,190,296,190,273,187,256,188,248,188,249,174,242,172,228,170"/>

<area href="state.php/?state=KS" onmouseover="return overlib('<center><B>&nbsp;Kansas&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="249,189,281,192,318,193,322,211,322,231,300,231,275,230,257,230,246,228,247,216,"/>

<area href="state.php/?state=OK" onmouseover="return overlib('<center><B>&nbsp;Oklahoma&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="233,231,256,231,280,233,310,235,324,236,326,258,327,277,318,272,304,276,290,273,283,270,269,266,267,261,269,248,268,241,257,238,245,235,235,237"/>

<area href="state.php/?state=TX" onmouseover="return overlib('<center><B>&nbsp;Texas&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="233,238,263,241,262,266,273,270,293,280,320,277,331,289,336,311,334,333,319,341,306,350,294,356,291,375,284,384,272,377,265,361,257,342,245,330,234,328,225,339,209,330,207,317,194,304,187,296,205,299,223,301,229,300,231,278,231,257"/>

<area href="state.php/?state=MT" onmouseover="return overlib('<center><B>&nbsp;Montana&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="125,47,167,56,205,60,229,64,230,92,228,116,206,113,179,109,162,107,142,111,139,96,136,81,129,68"/>

<area href="state.php/?state=WY" onmouseover="return overlib('<center><B>&nbsp;Wyoming&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="165,108,196,114,227,120,225,145,223,170,200,167,170,164,155,162,160,140"/>

<area href="state.php/?state=CO" onmouseover="return overlib('<center><B>&nbsp;Colorado&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="176,169,216,174,244,178,243,205,243,226,204,223,171,219,175,199"/>

<area href="state.php/?state=NM" onmouseover="return overlib('<center><B>&nbsp;New Mexico&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="169,225,201,230,229,233,228,262,225,296,184,293,167,292,158,296,162,271,166,250"/>

<area href="state.php/?state=ID" onmouseover="return overlib('<center><B>&nbsp;Idaho&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="116,45,122,45,122,69,130,81,136,103,152,114,154,144,125,141,97,135,105,108,112,89,108,75,112,62"/>

<area href="state.php/?state=UT" onmouseover="return overlib('<center><B>&nbsp;Utah&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="125,146,141,150,153,151,152,166,163,167,172,169,169,191,164,219,146,216,129,215,115,212,113,211,116,192,120,179,122,165,125,155"/>

<area href="state.php/?state=AZ" onmouseover="return overlib('<center><B>&nbsp;Arizona&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="113,216,139,221,164,224,158,255,153,298,130,294,111,282,97,272,98,259,104,253,102,237,104,227"/>

<area href="state.php/?state=WA" onmouseover="return overlib('<center><B>&nbsp;Washington&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="66,33,91,41,112,44,108,65,104,80,86,76,70,78,54,74,53,65,47,61,47,37,60,43"/>

<area href="state.php/?state=OR" onmouseover="return overlib('<center><B>&nbsp;Oregon&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="43,66,49,71,56,80,72,82,91,82,108,88,98,107,94,133,76,131,55,126,34,119,25,117,32,99,38,87"/>

<area href="state.php/?state=NV" onmouseover="return overlib('<center><B>&nbsp;Nevada&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="66,134,97,142,121,147,115,183,110,223,100,224,99,235,91,220,77,200,59,175,57,170,62,154"/>

<area href="state.php/?state=CA" onmouseover="return overlib('<center><B>&nbsp;California&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="24,123,61,132,52,169,75,204,98,242,93,266,68,267,62,249,43,236,34,229,27,205,27,185,27,173,19,161,17,141"/>


<area href="state.php/?state=AK" onmouseover="return overlib('<center><B>&nbsp;Alaska&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="109,329,125,335,145,338,153,348,154,385,143,394,127,386,117,405,96,426,106,415,107,405,93,401,83,389,88,379,95,376,97,366,87,369,82,360,95,360,99,354,89,349,84,345,93,340,97,331,155,367,154,381,121,401,121,397,138,398,153,398,137,395,91,431,96,424,103,419,105,413,105,406,101,406"/>


<area href="state.php/?state=HI" onmouseover="return overlib('<center><B>&nbsp;Hawaii&nbsp;</B><BR></center>', FGCOLOR, '#FFFFFF');" onmouseout="nd();" shape="poly" coords="342,379,351,378,374,378,396,380,421,379,442,380,462,380,469,404,468,435,342,401,341,426,342,454,360,454,380,453,397,454,416,453,434,453,452,454,467,454,"/>

</map>

</div>
</body>
</html>

