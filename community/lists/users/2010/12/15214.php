<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 14:05:37 2010" -->
<!-- isoreceived="20101222190537" -->
<!-- sent="Wed, 22 Dec 2010 11:04:43 -0800" -->
<!-- isosent="20101222190443" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance" -->
<!-- id="4D124BCB.5030006_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D12437C.4030509_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 14:04:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15215.php">David Singleton: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15213.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15213.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15215.php">David Singleton: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
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
Gilbert Grosdidier wrote:
<blockquote cite="mid4D12437C.4030509@cern.ch" type="cite">
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="Content-Type">
Bonsoir Eugene,<br>
</blockquote>
Bon matin chez moi.<br>
<blockquote cite="mid4D12437C.4030509@cern.ch" type="cite"> Here
follows some output for a 1024 core run.<br>
</blockquote>
Assuming this corresponds meaningfully with your original e-mail, 1024
cores means performance of 700 vs 900.&nbsp; So, that looks roughly
consistent with the 28% MPI time you show here.&nbsp; That seems to imply
that the slowdown is due entirely to long MPI times (rather than slow
non-MPI times).&nbsp; Just a sanity check.<br>
<blockquote cite="mid4D12437C.4030509@cern.ch" type="cite">
Unfortunately, I'm yet unable to have the equivalent MPT chart.<br>
</blockquote>
That may be all right.&nbsp; If one run clearly shows a problem (which is
perhaps the case here), then a "good profile" is not needed.&nbsp; Here, a
"good profile" would perhaps be used only to confirm that near-zero MPI
time is possible.<br>
<blockquote cite="mid4D12437C.4030509@cern.ch" type="cite"> <font
 face="Courier New, Courier, monospace">#IPMv0.983####################################################################<br>
# host&nbsp;&nbsp;&nbsp; : r34i0n0/x86_64_Linux&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mpi_tasks : 1024 on 128 nodes<br>
# start&nbsp;&nbsp; : 12/21/10/13:18:09&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; wallclock : 3357.308618 sec<br>
# stop&nbsp;&nbsp;&nbsp; : 12/21/10/14:14:06&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; %comm&nbsp;&nbsp;&nbsp;&nbsp; : 27.67<br>
##############################################################################<br>
#<br>
#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [total]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;avg&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
min&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; max <br>
# wallclock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.43754e+06&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3356.98&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3356.83&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3357.31<br>
# user&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.82831e+06&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2762.02&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2622.04&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2923.37<br>
# system&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 376230&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 367.412&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 174.603&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
492.919<br>
# mpi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 951328&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 929.031&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 633.137&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
1052.86<br>
# %comm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 27.6719&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 18.8601&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
31.363</font></blockquote>
No glaring evidence here of load imbalance being the sole explanation,
but hard to tell from these numbers.&nbsp; (If min comm time is 0%, then
that process is presumably holding everyone else up.)<br>
<blockquote cite="mid4D12437C.4030509@cern.ch" type="cite"><font
 face="Courier New, Courier, monospace">#&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
[time]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [calls]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;%mpi&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;%wall&gt;<br>
# MPI_Waitall&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 741683&nbsp;&nbsp; 7.91081e+07&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 77.96&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
21.58<br>
# MPI_Allreduce&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 114057&nbsp;&nbsp; 2.53665e+07&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
11.99&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.32<br>
# MPI_Isend&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 27420.6&nbsp;&nbsp; 6.53513e+08&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2.88&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0.80<br>
# MPI_Irecv&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 464.616&nbsp;&nbsp; 6.53513e+08&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
0.05&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0.01<br>
###############################################################################</font><br>
  <br>
It seems to my non-expert eye that MPI_Waitall is dominant among MPI
calls,<br>
but not for the overall application,</blockquote>
If at 1024 cores, performance is 700 compared to 900, then whatever the
problem is still hasn't dominated the entire application performance.&nbsp;
So, it looks like MPI_Waitall is the problem, even if it doesn't
dominate overall application time.<br>
<br>
Looks like on average each MPI_Waitall call is completing 8+ MPI_Isend
calls and 8+ MPI_Irecv calls.&nbsp; I think IPM gives some point-to-point
messaging information.&nbsp; Maybe you can tell what the distribution is of
message sizes, etc.&nbsp; Or, maybe you already know the characteristic
pattern.&nbsp; Does a stand-alone message-passing test (without the
computational portion) capture the performance problem you're looking
for?<br>
<blockquote cite="mid4D12437C.4030509@cern.ch" type="cite">Le
22/12/2010 18:50, Eugene Loh a &eacute;crit&nbsp;:
  <blockquote cite="mid:4D123A4C.5030806@oracle.com" type="cite">Can
you isolate a bit more where the time is being spent?&nbsp; The performance
effect you're describing appears to be drastic.&nbsp; Have you profiled the
code?&nbsp; Some choices of tools can be found in the FAQ <a
 class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>&nbsp;
The results may be "uninteresting" (all time spent in your MPI_Waitall
calls, for example), but it'd be good to rule out other possibilities
(e.g., I've seen cases where it's the non-MPI time that's the culprit).
    <br>
    <br>
If all the time is spent in MPI_Waitall, then I wonder if it would be
possible for you to reproduce the problem with just some
MPI_Isend|Irecv|Waitall calls that mimic your program.&nbsp; E.g., "lots of
short messages", or "lots of long messages", etc.&nbsp; It sounds like there
is some repeated set of MPI exchanges, so maybe that set can be
extracted and run without the complexities of the application.&nbsp;</blockquote>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15215.php">David Singleton: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15213.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15213.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15215.php">David Singleton: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
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
