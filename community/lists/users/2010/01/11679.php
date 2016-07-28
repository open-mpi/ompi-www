<?
$subject_val = "Re: [OMPI users] Dual quad core Opteron hangs on Bcast.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 09:30:37 2010" -->
<!-- isoreceived="20100104143037" -->
<!-- sent="Mon, 04 Jan 2010 06:32:16 -0800" -->
<!-- isosent="20100104143216" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dual quad core Opteron hangs on Bcast." -->
<!-- id="4B41FBF0.5090700_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39991001040217r406de588j2bed8413ee8ae56f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-01-04 09:32:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11680.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11678.php">Lenny Verkhovsky: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>In reply to:</strong> <a href="11678.php">Lenny Verkhovsky: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11680.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
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
Lenny Verkhovsky wrote:
<blockquote
 cite="mid453d39991001040217r406de588j2bed8413ee8ae56f@mail.gmail.com"
 type="cite">
  <div dir="ltr">
  <div>have you tried IMB benchmark with Bcast,<br>
  </div>
  <div>I think the problem is in the app.</div>
  </div>
</blockquote>
Presumably not since increasing btl_sm_num_fifos cures the problem.&nbsp;
This appears to be trac 2043 (again)!&nbsp; Note that all processes *do*
enter the broadcasts.&nbsp; The first broadcast call is exactly the same on
each and every process.&nbsp; The second broadcast only differs in that that
root uses one buffer and the non-root processes use a different buffer.<br>
<blockquote
 cite="mid453d39991001040217r406de588j2bed8413ee8ae56f@mail.gmail.com"
 type="cite">
  <div dir="ltr">
  <div>All ranks in the communicator should enter Bcast,</div>
  <div>since you have</div>
  <div>if (rank==0) </div>
  <div>else state, not all of them enters the same flow.</div>
  </div>
</blockquote>
<br>
<blockquote
 cite="mid453d39991001040217r406de588j2bed8413ee8ae56f@mail.gmail.com"
 type="cite">
  <div dir="ltr">
  <div>&nbsp; if (iRank == 0)<br>
&nbsp;{<br>
&nbsp; iLength = sizeof (acMessage);<br>
&nbsp; MPI_Bcast (&amp;iLength, 1, MPI_INT, 0, MPI_COMM_WORLD);<br>
&nbsp; MPI_Bcast (acMessage, iLength, MPI_CHAR, 0, MPI_COMM_WORLD);<br>
&nbsp; printf ("Process 0: Message sent\n");<br>
&nbsp;}<br>
&nbsp; else<br>
&nbsp;{<br>
&nbsp; MPI_Bcast (&amp;iLength, 1, MPI_INT, 0, MPI_COMM_WORLD);<br>
&nbsp; pMessage = (char *) malloc (iLength);<br>
&nbsp; MPI_Bcast (pMessage, iLength, MPI_CHAR, 0, MPI_COMM_WORLD);<br>
&nbsp; printf ("Process %d: %s\n", iRank, pMessage);<br>
&nbsp;}<br>
  <br>
  </div>
  <div>Lenny.</div>
  <br>
  <div class="gmail_quote">On Mon, Jan 4, 2010 at 8:23 AM, Eugene Loh <span
 dir="ltr">&lt;<a href="mailto:Eugene.Loh@sun.com">Eugene.Loh@sun.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div bgcolor="#ffffff" text="#000000">
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
    <blockquote cite="http://mid4B4184F0.3090205@math.udel.edu"
 type="cite">
      <div class="im">I am
having a problem with BCast hanging on a dual quad core Opteron (2382,
2.6GHz, Quad Core, 4 x 512KB L2, 6MB L3 Cache) system running FC11 with
openmpi-1.4.&nbsp; The LD_LIBRARY_PATH and PATH variables are correctly
set.&nbsp; I have used the FC11 rpm distribution of openmpi and built
openmpi-1.4 locally with the same results.&nbsp; The problem was first
observed in a larger reliable CFD code, but I can create the problem
with a simple demo code (attached).&nbsp; The code attempts to execute 2000
pairs of broadcasts. <br>
      <br>
The hostfile contains a single line <br>
&lt;machinename&gt; slots=8 <br>
      <br>
If I run it with 4 cores or fewer, the code will run fine. <br>
      <br>
If I run it with 5 cores or more, it will hang some of the time after
successfully executing several hundred broadcasts.&nbsp; The number varies
from run to run.&nbsp; The code usually finishes with 5 cores.&nbsp; The
probability of hanging seems to increase with the number of nodes.&nbsp; The
syntax I use is simple. <br>
      <br>
mpiexec -machinefile hostfile -np 5 bcast_example <br>
      <br>
There was some discussion of a similar problem on the user list, but I
could not find a resolution.&nbsp; I have tried setting the processor
affinity (--mca mpi_paffinity_alone 1).&nbsp; I have tried varying the
broadcast algorithm (--mca coll_tuned_bcast_algorithm 1-6).&nbsp; I have
also tried excluding (-mca oob_tcp_if_exclude) my eth1 interface (see
ifconfig.txt attached) which is not connected to anything.&nbsp; None of
these changed the outcome. <br>
      <br>
Any thoughts or suggestions would be appreciated. <br>
      </div>
    </blockquote>
    </div>
  </blockquote>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11680.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11678.php">Lenny Verkhovsky: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>In reply to:</strong> <a href="11678.php">Lenny Verkhovsky: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11680.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
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
