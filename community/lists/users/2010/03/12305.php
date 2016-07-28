<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 16:27:11 2010" -->
<!-- isoreceived="20100310212711" -->
<!-- sent="Wed, 10 Mar 2010 13:29:08 -0800" -->
<!-- isosent="20100310212908" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="4B980F24.8060203_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="063591A1FD6A8143ACC2CA38F4C1B5EF85022818_at_HVXMSPA.us.lmco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] 3D domain decomposition with MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 16:29:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12304.php">Cole, Derek E: "[OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12304.php">Cole, Derek E: "[OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
It already seems that you have a good idea of what challenges you're
facing.&nbsp; So, I'm unclear which part you're asking about.<br>
<br>
Which cells do you need to update [x][y][z]?&nbsp; It sounds like you need
nearest neighbors.&nbsp; So, one technique is to allocate on each process
not just the subsection of data that will be computed by that process
but also ghost cells.<br>
<br>
So, the first step would be to fill in ghost cells from neighboring
processes.&nbsp; You can either pack faces into contiguous arrays for
sending (and unpacking on the other end), or you can use derived
datatypes (the MPI standard is perhaps sufficiently readable that you
could just go there).<br>
<br>
Once the ghost cells are packed, each process can compute its elements
locally.<br>
<br>
Sorry if I missed the point of what you were asking.<br>
<br>
Cole, Derek E wrote:
<blockquote
 cite="mid063591A1FD6A8143ACC2CA38F4C1B5EF85022818@HVXMSPA.us.lmco.com"
 type="cite">
  <meta name="Generator" content="Microsoft Word 12 (filtered medium)">
  <style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
a:link, span.MsoHyperlink
	{mso-style-priority:99;
	color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-priority:99;
	color:purple;
	text-decoration:underline;}
span.EmailStyle17
	{mso-style-type:personal-compose;
	font-family:"Calibri","sans-serif";
	color:windowtext;}
.MsoChpDefault
	{mso-style-type:export-only;}
@page Section1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.Section1
	{page:Section1;}
-->
  </style>
<!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026" />
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1" />
 </o:shapelayout></xml><![endif]-->
  <div class="Section1">
  <p class="MsoNormal">Hi all. I am relatively new to MPI, and so this
may be
covered somewhere else, but I can&#8217;t seem to find any links to tutorials
mentioning any specifics, so perhaps someone here can help.<o:p></o:p></p>
  <p class="MsoNormal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal">In C, I have a 3D array that I have dynamically
allocated and
access like Array[x][y][z]. I was hoping to calculate a subsection for
each
processor to work on, &nbsp;of size nx in the x dimension, ny in the y
dimension, and the full Z dimension. Starting at Array[sx][sy][0] and
going to
Array[ex][ey][z] where ey-sy=ny.<o:p></o:p></p>
  <p class="MsoNormal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal">What is the best way to do this? I am able to
calculate the
neighboring processors and assign a sub-section of the XY dimensions to
each
processor, however I am having problems with sharing the border
information of
the arrays with the other processors. I don&#8217;t really want to have to do
a
MPI_Send for each of the 0..Z slices&#8217;s border information. I&#8217;d kind
of like to process all of the Z, then share the full &#8220;face&#8221; of the
border information with the neighbor processor. For example, if process
1 was
the right neighbor of process zero, I&#8217;d want process zero to send
Subarray[0..nx][ny][0..Z](the
right most face) to processor 1&#8217;s left-most face..assuming the X-Y
plane
was your screen, and the Z dimension extended into the screen.<o:p></o:p></p>
  <p class="MsoNormal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal">If anyone has any information that talks about
how to use
the MPI data types, or some other method, or wants to talk about how
this might
be done, I&#8217;m all ears.<o:p></o:p></p>
  <p class="MsoNormal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal">I know it is hard to talk about without
pictures, so if you
all like, I can post a picture explaning what I want to do. Thanks!<o:p></o:p></p>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12304.php">Cole, Derek E: "[OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12304.php">Cole, Derek E: "[OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
