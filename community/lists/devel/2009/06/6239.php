<?
$subject_val = "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 14:11:21 2009" -->
<!-- isoreceived="20090615181121" -->
<!-- sent="Mon, 15 Jun 2009 11:11:15 -0700" -->
<!-- isosent="20090615181115" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option" -->
<!-- id="4A368EC3.9090701_at_sun.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="497553.47892.qm_at_web8705.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-15 14:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6240.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6238.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6237.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Leo P. wrote:
<blockquote cite="mid497553.47892.qm@web8705.mail.in.yahoo.com"
 type="cite">
  <style type="text/css"><!-- DIV {margin:0px;} --></style>
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">
  <div>HI Nik,<br>
  <br>
I tried the Sun Studio Performance Analyzer and it was able to profile
to application but not the openMPI source code. The source code was
empty in Sun Studio Performance Analyzer. I tried but i was not able to
get the profiling information of openMPI.<br>
  <br>
So i installed Vampir trace and i was able to get otf while suggested i
got the profiling information. But i fail to understand what i should
do now. <br>
  <span>1. Am i suppose to download additional information for trace
information visualization? Is the additional software this <a
 target="_blank" href="https://www.ssl-id.net/www.vampir.eu/index.html">https://www.ssl-id.net/www.vampir.eu/index.html</a></span><br>
2. If not how can i visualize the trace information i got vampir-trace.<br>
  <br>
Sorry for bugging everyone so much about this. But i spend a lot of
time and this alone and i am not getting output. <br>
  </div>
  </div>
</blockquote>
It's probably fine to bug people about some of this.  OMPI would
benefit from having a tool ecosystem around it.  There's VampirTrace
and PERUSE instrumentation and stuff, but some more activity/attention
in this area would be better.<br>
<br>
I don't know that VampirTrace will give what you're looking for.  You
seem to want to profile the internals of OMPI.  VT basically just
instruments entry into and exit out of MPI.  In contrast, PERUSE
instruments MPI internals.<br>
<br>
Sun Studio Performance Analyzer should also work.  I know I've used it
to profile both MPI apps and the internals of OMPI.<br>
<br>
One of the problems...  I mean, one of the *features* of Sun
Performance Analyzer is that it *HIDES* the internals of the MPI
library.  There is a concept of user and expert models and stuff.  Most
users just want to see their program the way they wrote it (whether for
Java, OpenMP, MPI, etc.).  So, Performance Analyzer hides the "black
box" stuff (internals of Java, OpenMP, MPI, etc.).  But, *you* want
"expert" capabilities.  You want to see what's under the hood.  So,
after you have collected data and have started the Analyzer GUI, choose
"View" -&gt; "Show/Hide Functions..." -&gt; "Show All".  Maybe there
are other things you're encountering, but for me that changes MPI calls
from being black boxes to exposing where OMPI is spending its time: 
PML functions, BTL functions, etc.<br>
<br>
To get source code information, you also need to build OMPI with -g
turned on.  That will include debugging information.  With some
compilers, turning -g on might turn off optimizations... I just don't
know.  With Sun Studio compilers, -g will not change your optimizations
-- it will only add debugging/symbolic information, compiler commentary
on optimizations, etc.<br>
<br>
If you want to ask Nik or me other questions, feel free.  I'll send you
Nik's home phone number!  :^)<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6240.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6238.php">Nikolay Molchanov: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6237.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
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
