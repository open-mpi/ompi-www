<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 12:50:33 2010" -->
<!-- isoreceived="20101222175033" -->
<!-- sent="Wed, 22 Dec 2010 09:50:04 -0800" -->
<!-- isosent="20101222175004" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance" -->
<!-- id="4D123A4C.5030806_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D1187F6.10305_at_cern.ch" -->
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
<strong>Date:</strong> 2010-12-22 12:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15212.php">Eugene Loh: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Previous message:</strong> <a href="15210.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15210.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15213.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Reply:</strong> <a href="15213.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you isolate a bit more where the time is being spent?  The 
<br>
performance effect you're describing appears to be drastic.  Have you 
<br>
profiled the code?  Some choices of tools can be found in the FAQ 
<br>
<a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>  The results may be 
<br>
&quot;uninteresting&quot; (all time spent in your MPI_Waitall calls, for example), 
<br>
but it'd be good to rule out other possibilities (e.g., I've seen cases 
<br>
where it's the non-MPI time that's the culprit).
<br>
<p>If all the time is spent in MPI_Waitall, then I wonder if it would be 
<br>
possible for you to reproduce the problem with just some 
<br>
MPI_Isend|Irecv|Waitall calls that mimic your program.  E.g., &quot;lots of 
<br>
short messages&quot;, or &quot;lots of long messages&quot;, etc.  It sounds like there 
<br>
is some repeated set of MPI exchanges, so maybe that set can be 
<br>
extracted and run without the complexities of the application.
<br>
<p>Anyhow, some profiling might help guide one to the problem.
<br>
<p>Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev1">&gt; There are indeed a high rate of communications. But the buffer
</span><br>
<span class="quotelev1">&gt; size is always the same for a given pair of processes, and I thought
</span><br>
<span class="quotelev1">&gt; that mpi_leave_pinned should avoid freeing the memory in this case.
</span><br>
<span class="quotelev1">&gt; Am I wrong ?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15212.php">Eugene Loh: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Previous message:</strong> <a href="15210.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15210.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15213.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Reply:</strong> <a href="15213.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
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
