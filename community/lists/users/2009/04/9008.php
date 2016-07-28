<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 11:33:30 2009" -->
<!-- isoreceived="20090421153330" -->
<!-- sent="Tue, 21 Apr 2009 08:33:15 -0700" -->
<!-- isosent="20090421153315" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49EDE73B.8040209_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="a599d60e0904210804u7da78aa3y137ef3d381711dc7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 11:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9009.php">Josh Hursey: "Re: [OMPI users] Automatic checkpoint/restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9007.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9013.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
Ankush Kaul wrote:
<blockquote
 cite="mida599d60e0904210804u7da78aa3y137ef3d381711dc7@mail.gmail.com"
 type="cite"><span style="color: rgb(0, 0, 0);">@</span><span class="gI"><span
 class="go">Eugene<br>
they are ok but we wanted something better, which would more clearly
show de diff in using a single pc and the cluster.<br>
  </span></span></blockquote>
Another option is the NAS Parallel Benchmarks.&nbsp; They are older, but
well known, self-verifying, report performance, and relatively small
and accessible.<br>
<blockquote
 cite="mida599d60e0904210804u7da78aa3y137ef3d381711dc7@mail.gmail.com"
 type="cite"><span style="color: rgb(0, 0, 0);">@</span><font
 color="#888888"><span style="color: rgb(0, 0, 0);">Prakash</span><br
 style="color: rgb(0, 0, 0);">
  <span style="color: rgb(0, 0, 0);">i had prob with running de
programs as they were compiling using mpcc n not mpicc</span><br>
  </font><br>
@gus<br>
we are tryin 2 figure out de hpl config, its quite complicated, also de
locate command lists lots of confusing results.<br>
  <br>
@jeff<br>
i think u are correct we may have installed openmpi without VT support,
but is there anythin we can do now???<br>
</blockquote>
Reinstall OMPI?<br>
<blockquote
 cite="mida599d60e0904210804u7da78aa3y137ef3d381711dc7@mail.gmail.com"
 type="cite">One more thing I found this program but dont know how to
run it : <a
 href="http://www.cis.udel.edu/%7Epollock/367/manual/node35.html">http://www.cis.udel.edu/~pollock/367/manual/node35.html</a><br>
</blockquote>
That may depend on more than just MPI.&nbsp; You need some graphics.&nbsp; You
might need the MPICH MPE environment.<br>
<br>
If I understand where you're at on this, you might also try writing
your own MPI programs.&nbsp; Run something simple.&nbsp; Then something a little
more complicated.&nbsp; And so on.&nbsp; Build something bit by bit.&nbsp; Good luck.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9009.php">Josh Hursey: "Re: [OMPI users] Automatic checkpoint/restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9007.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9013.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
