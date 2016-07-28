<?
$subject_val = "Re: [OMPI users] OpenMPI and glut";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 13:44:40 2010" -->
<!-- isoreceived="20101008174440" -->
<!-- sent="Fri, 08 Oct 2010 10:44:25 -0700" -->
<!-- isosent="20101008174425" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and glut" -->
<!-- id="4CAF5879.4080500_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C5FD53FFC7D1704890B0B1FE85A004F6037B4BCB_at_cyclone.aegis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and glut<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-08 13:44:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14424.php">Ed Peddycoart: "Re: [OMPI users] OpenMPI and glut"</a>
<li><strong>In reply to:</strong> <a href="14424.php">Ed Peddycoart: "Re: [OMPI users] OpenMPI and glut"</a>
<!-- nextthread="start" -->
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
Ed Peddycoart wrote:
<blockquote
 cite="midC5FD53FFC7D1704890B0B1FE85A004F6037B4BCB@cyclone.aegis.com"
 type="cite">
  <meta content="text/html; charset=unicode" http-equiv="Content-Type">
  <meta name="GENERATOR" content="MSHTML 8.00.6001.18943">
  <div id="idOWAReplyText45586" dir="ltr">
  <div dir="ltr">After searching some more and reading some FAQs on the
opmi website,&nbsp; I see sugestions on how to make a remote app use the
local display to render, but that isn't what I need... Let me revise or
clarify my question:&nbsp; </div>
  <div dir="ltr">&nbsp;</div>
  <div dir="ltr">I have an app which will run on 5 machines:&nbsp; The app
will be kicked off on Machine0.&nbsp; Machine1,2,3,4 will render a scene to
their own display, then send data to Machine0, which will use the data
as input to render its scene, which will be rendered on its own display.</div>
  </div>
</blockquote>
I'm missing the question.<br>
<blockquote
 cite="midC5FD53FFC7D1704890B0B1FE85A004F6037B4BCB@cyclone.aegis.com"
 type="cite">
  <div id="idOWAReplyText45586" dir="ltr">
  <div dir="ltr"> </div>
  <div dir="ltr">Also,&nbsp;Is my understand of rank correct:&nbsp; Rank is&nbsp;like
a&nbsp;App ID#?&nbsp; Rank&nbsp;= 0 is the initial process? and 1-N is all others?<br>
  </div>
  </div>
</blockquote>
The ranks start at 0 and end at N-1.<br>
<br>
Typically, one thinks of all N processes starting at once.&nbsp; E.g., you
could have a hostfile that lists the 5 machines on which your processes
will run.&nbsp; When you use "mpirun --np 5 --hostfile myhostfile ...", all
5 processes will be started, each on its machine.&nbsp; Each one should get
to an MPI_Init() call, at which point they coordinate with one another
to set up interprocess communications.<br>
<blockquote
 cite="midC5FD53FFC7D1704890B0B1FE85A004F6037B4BCB@cyclone.aegis.com"
 type="cite">
  <div id="idOWAReplyText45586" dir="ltr">
  <div dir="ltr"><br>
  </div>
  <div dir="ltr">
  <hr tabindex="-1"><font face="Tahoma" size="2"><b>From:</b> Ed
Peddycoart<br>
  <b>Sent:</b> Fri 10/8/2010 11:10 AM<br>
  <b>To:</b> <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
  <b>Subject:</b> OpenMPI and glut<br>
  </font><br>
  </div>
  </div>
  <div dir="ltr">
  <div id="idOWAReplyText12131" dir="ltr">
  <div dir="ltr"><span><font face="Arial" size="2">I have a glut app I
am infusing with MPI calls... The glut init appears to fail in the
rank1 processes.&nbsp; How do I accomplish this, that is, parallel rendering
with GLUT and MPI?</font></span></div>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14424.php">Ed Peddycoart: "Re: [OMPI users] OpenMPI and glut"</a>
<li><strong>In reply to:</strong> <a href="14424.php">Ed Peddycoart: "Re: [OMPI users] OpenMPI and glut"</a>
<!-- nextthread="start" -->
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
