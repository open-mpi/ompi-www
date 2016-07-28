<?
$subject_val = "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 16:15:45 2009" -->
<!-- isoreceived="20090924201545" -->
<!-- sent="Thu, 24 Sep 2009 13:16:15 -0700" -->
<!-- isosent="20090924201615" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?" -->
<!-- id="4ABBD38F.5020003_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="216FF918-D4D7-47DA-A96E-E31F45E6F455_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 16:16:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10757.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10755.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10738.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10784.php">Jonathan Dursi: "[OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11"</a>
<li><strong>Reply:</strong> <a href="10784.php">Jonathan Dursi: "[OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jonathan Dursi wrote:
<br>
<p><span class="quotelev1">&gt; So to summarize:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3.2 + gcc4.4.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Test problem with periodic (left neighbour of proc 0 is proc N-1)  
</span><br>
<span class="quotelev1">&gt; Sendrecv()s:
</span><br>
<span class="quotelev1">&gt;   Default always hangs in Sendrecv after random number of iterations
</span><br>
<span class="quotelev1">&gt;   Turning off sm (-mca btl self,tcp) not observed to hang
</span><br>
<span class="quotelev1">&gt;   Using -mca btl_sm_num_fifos 5 (for a 6 task job) not observed to hang
</span><br>
<span class="quotelev1">&gt;   Using fewer than 5 fifos hangs in Sendrecv after random number of  
</span><br>
<span class="quotelev1">&gt; iterations or Finalize
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3.3 + gcc4.4.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Test problem with periodic (left neighbour of proc 0 is proc N-1)  
</span><br>
<span class="quotelev1">&gt; Sendrecv()s:
</span><br>
<span class="quotelev1">&gt;   Default sometimes (~20% of time) hangs in Sendrecv after random  
</span><br>
<span class="quotelev1">&gt; number of iterations
</span><br>
<span class="quotelev1">&gt;   Turning off sm (-mca btl self,tcp) not observed to hang
</span><br>
<span class="quotelev1">&gt;   Using -mca btl_sm_num_fifos 5 (for a 6 task job) not observed to hang
</span><br>
<span class="quotelev1">&gt;   Using fewer than 5 fifos but more than 2 not observed to hang
</span><br>
<span class="quotelev1">&gt;   Using 2 fifos sometimes (~20% of time) hangs in Finalize  or  
</span><br>
<span class="quotelev1">&gt; Sendrecv after random number of iterations but sometimes completes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3.2 + intel 11.0 compilers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are seeing a problem which we believe to be related; ~1% of 
</span><br>
<span class="quotelev1">&gt; certain  single-node jobs hang, turning off sm or setting num_fifos to 
</span><br>
<span class="quotelev1">&gt; NP-1  eliminates this.
</span><br>
<p>I can reproduce this with just Barriers, which keeps the processes all 
<br>
in sync.  So, this has nothing to do with processes outrunning one 
<br>
another (which wasn't likely in the first place given that you had 
<br>
Sendrecv calls).
<br>
<p>The problem is fickle.  E.g., building OMPI with -g seems to make the 
<br>
problem go away.
<br>
<p>I did observe that the sm FIFO would fill up.  That's weird since there 
<br>
aren't ever a lot of in-flight messages.  I tried adding a line of code 
<br>
that would make a process pause if ever it tried to write to a FIFO that 
<br>
seemed full.  That pretty much made the problem go away.  So, I guess 
<br>
it's a memory coherency problem:  receive clears the FIFO, but writer 
<br>
thinks it's congested.
<br>
<p>I tried all sorts of GCC compilers.  The problem seems to set in with 
<br>
4.4.0.  I don't know what's significant about that.  It requires moving 
<br>
to the 2.18 assembler, but I tried the 2.18 assembler with 4.3.3 and 
<br>
that worked okay.  I'd think this has to do with GCC 4.4.x, but you say 
<br>
you see the problem with Intel compilers as well.  Hmm.  Maybe an OMPI 
<br>
problem that's better exposed with GCC 4.4.x?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10757.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10755.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10738.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10784.php">Jonathan Dursi: "[OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11"</a>
<li><strong>Reply:</strong> <a href="10784.php">Jonathan Dursi: "[OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11"</a>
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
