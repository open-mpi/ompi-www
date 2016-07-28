<?
$subject_val = "Re: [OMPI users] programming qsn??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 16:31:58 2009" -->
<!-- isoreceived="20090813203158" -->
<!-- sent="Thu, 13 Aug 2009 13:32:38 -0700" -->
<!-- isosent="20090813203238" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] programming qsn??" -->
<!-- id="4A847866.50709_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="428810f20908131221o48dc6d2cx858b35539aef2ba0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] programming qsn??<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 16:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10356.php">Jeff Squyres: "Re: [OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="10354.php">Kritiraj Sajadah: "Re: [OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="10353.php">amjad ali: "[OMPI users] programming qsn??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10357.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Reply:</strong> <a href="10357.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
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
amjad ali wrote:
<blockquote
 cite="mid428810f20908131221o48dc6d2cx858b35539aef2ba0@mail.gmail.com"
 type="cite">
  <meta http-equiv="Content-Type" content="text/html; ">
  <meta name="ProgId" content="Word.Document">
  <meta name="Generator" content="Microsoft Word 11">
  <meta name="Originator" content="Microsoft Word 11">
  <link rel="File-List"
 href="file:///C:%5CDOCUME%7E1%5CMUHAMMAD%5CLOCALS%7E1%5CTemp%5Cmsohtml1%5C01%5Cclip_filelist.xml">
  <style>
<!--
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:AR-SA;}
@page Section1
	{size:8.5in 11.0in;
	margin:1.0in 1.25in 1.0in 1.25in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
--></style>
  <p class="MsoNormal">I am parallelizing a CFD 2D code in
FORTRAN+OPENMPI. Suppose
that the grid (all triangles) is partitioned among 8 processes using
METIS.
Each process has different number of neighboring processes. Suppose
each
process has n elements/faces whose data it needs to sends to
corresponding
neighboring processes, and it has m number of elements/faces on which
it needs
to get data from corresponding neighboring processes. Values of n and m
are
different for each process. Another aim is to hide the communication
behind
computation. For this I do the following for each process:</p>
  <p class="MsoNormal">&nbsp;</p>
  <p class="MsoNormal">DO j = 1 to n</p>
  <p class="MsoNormal">CALL MPI_ISEND (send_data, num, type, dest(j),
tag, <span style="">MPI_COMM_WORLD, ireq(j), ierr)</span></p>
  <p class="MsoNormal"><span style="">ENDDO</span></p>
  <p class="MsoNormal"><span style="">&nbsp;</span></p>
  <p class="MsoNormal">DO k = 1 to m</p>
  <p class="MsoNormal">CALL MPI_RECV(recv_data, num, type, source(k),
tag, <span style="">MPI_COMM_WORLD, status, ierr)</span></p>
  <p class="MsoNormal"><span style="">ENDDO</span></p>
  <p class="MsoNormal"><span style="">&nbsp;</span></p>
  <p class="MsoNormal"><span style="">&nbsp;This solves my
problem. But it gives memory leakage; Ram gets filled after few
thousands of
iteration. What is the solution/remedy? How should I tackle this?</span></p>
  <p class="MsoNormal"><span style="">&nbsp;</span></p>
  <p class="MsoNormal"><span style="">In another CFD code
I removed this problem of memory-filling by following (in that code
n=m) : </span></p>
  <p class="MsoNormal"><span style="">&nbsp;</span></p>
  <p class="MsoNormal">DO j = 1 to n</p>
  <p class="MsoNormal">CALL MPI_ISEND (send_data, num, type, dest(j),
tag, <span style="">MPI_COMM_WORLD, ireq(j), ierr)</span></p>
  <p class="MsoNormal"><span style="">ENDDO</span></p>
  <p class="MsoNormal"><span style="">&nbsp;</span></p>
  <p class="MsoNormal"><span style="">CALL
MPI_WAITALL(n,ireq,status,ierr)</span></p>
  <p class="MsoNormal"><span style="">&nbsp;</span></p>
  <p class="MsoNormal">DO k = 1 to n</p>
  <p class="MsoNormal">CALL MPI_RECV(recv_data, num, type, source(k),
tag, <span style="">MPI_COMM_WORLD, status, ierr)</span></p>
  <p class="MsoNormal"><span style="">ENDDO</span></p>
  <p class="MsoNormal"><span style="">&nbsp;</span></p>
  <p class="MsoNormal"><span style="">But this is not
working in current code; and the previous code was not giving correct
results
with large number of processes.</span></p>
</blockquote>
I don't know how literally to read the code you sent.&nbsp; Maybe your
actual code "does the right thing", but just to confirm I think the
correct code should look like this:<br>
<br>
DO J=1, N<br>
&nbsp;&nbsp; CALL MPI_ISEND(...)<br>
END DO<br>
<br>
DO K=1, M<br>
&nbsp;&nbsp; CALL MPI_RECV(...)<br>
END DO<br>
<br>
CALL MPI_WAITALL(...)<br>
<br>
That is, you start all non-blocking sends.&nbsp; Then you perform receives.&nbsp;
Then you complete the sends.&nbsp; More commonly, one would post all
receives first using non-blocking calls (MPI_IRECV), then perform all
sends (MPI_SEND), then complete the receives with MPI_WAITALL.<br>
<br>
Yet another option is to post non-blocking receives, then non-blocking
sends, then complete all sends and receives with a WAITALL call that
has M+N requests.<br>
<br>
Sorry if you already knew all this and I'm just overreacting to the
simplified code you sent out.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10356.php">Jeff Squyres: "Re: [OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="10354.php">Kritiraj Sajadah: "Re: [OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="10353.php">amjad ali: "[OMPI users] programming qsn??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10357.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Reply:</strong> <a href="10357.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
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
