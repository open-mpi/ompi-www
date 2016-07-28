<?
$subject_val = "Re: [OMPI users] Dual quad core Opteron hangs on Bcast.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 01:21:53 2010" -->
<!-- isoreceived="20100104062153" -->
<!-- sent="Sun, 03 Jan 2010 22:23:32 -0800" -->
<!-- isosent="20100104062332" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dual quad core Opteron hangs on Bcast." -->
<!-- id="4B418964.9000402_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B4184F0.3090205_at_math.udel.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dual quad core Opteron hangs on Bcast.<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 01:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11676.php">Götz Waschk: "[OMPI users] openib btl slows down application"</a>
<li><strong>Previous message:</strong> <a href="11674.php">Louis Rossi: "[OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>In reply to:</strong> <a href="11674.php">Louis Rossi: "[OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11678.php">Lenny Verkhovsky: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Reply:</strong> <a href="11678.php">Lenny Verkhovsky: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
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
If you're willing to try some stuff:<br>
<br>
1) What about "-mca coll_sync_barrier_before 100"?&nbsp; (The default may be
1000.&nbsp; So, you can try various values less than 1000.&nbsp; I'm suggesting
100.)&nbsp; Note that broadcast has somewhat one-way traffic flow, which can
have some undesirable flow control issues.<br>
<br>
2) What about "-mca btl_sm_num_fifos 16"?&nbsp; Default is 1.&nbsp; If the
problem is trac ticket 2043, then this suggestion can help.<br>
<br>
P.S.&nbsp; There's a memory leak, right?&nbsp; The receive buffer is being
allocated over and over again.&nbsp; Might not be that closely related to
the problem you see here, but at a minimum it's bad style.<br>
<br>
Louis Rossi wrote:
<blockquote cite="mid4B4184F0.3090205@math.udel.edu" type="cite">I am
having a problem with BCast hanging on a dual quad core Opteron (2382,
2.6GHz, Quad Core, 4 x 512KB L2, 6MB L3 Cache) system running FC11 with
openmpi-1.4.&nbsp; The LD_LIBRARY_PATH and PATH variables are correctly
set.&nbsp; I have used the FC11 rpm distribution of openmpi and built
openmpi-1.4 locally with the same results.&nbsp; The problem was first
observed in a larger reliable CFD code, but I can create the problem
with a simple demo code (attached).&nbsp; The code attempts to execute 2000
pairs of broadcasts.
  <br>
  <br>
The hostfile contains a single line
  <br>
&lt;machinename&gt; slots=8
  <br>
  <br>
If I run it with 4 cores or fewer, the code will run fine.
  <br>
  <br>
If I run it with 5 cores or more, it will hang some of the time after
successfully executing several hundred broadcasts.&nbsp; The number varies
from run to run.&nbsp; The code usually finishes with 5 cores.&nbsp; The
probability of hanging seems to increase with the number of nodes.&nbsp; The
syntax I use is simple.
  <br>
  <br>
mpiexec -machinefile hostfile -np 5 bcast_example
  <br>
  <br>
There was some discussion of a similar problem on the user list, but I
could not find a resolution.&nbsp; I have tried setting the processor
affinity (--mca mpi_paffinity_alone 1).&nbsp; I have tried varying the
broadcast algorithm (--mca coll_tuned_bcast_algorithm 1-6).&nbsp; I have
also tried excluding (-mca oob_tcp_if_exclude) my eth1 interface (see
ifconfig.txt attached) which is not connected to anything.&nbsp; None of
these changed the outcome.
  <br>
  <br>
Any thoughts or suggestions would be appreciated.
  <br>
  <br>
  <pre wrap="">
<hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
  </pre>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11676.php">Götz Waschk: "[OMPI users] openib btl slows down application"</a>
<li><strong>Previous message:</strong> <a href="11674.php">Louis Rossi: "[OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>In reply to:</strong> <a href="11674.php">Louis Rossi: "[OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11678.php">Lenny Verkhovsky: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Reply:</strong> <a href="11678.php">Lenny Verkhovsky: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
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
