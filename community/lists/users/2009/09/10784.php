<?
$subject_val = "[OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 14:24:22 2009" -->
<!-- isoreceived="20090926182422" -->
<!-- sent="Sat, 26 Sep 2009 14:24:11 -0400" -->
<!-- isosent="20090926182411" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="[OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11" -->
<!-- id="A1689949-5E35-405F-9026-8A44374ECD37_at_scinet.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ABBD38F.5020003_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-26 14:24:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10785.php">Pavel Shamis (Pasha): "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>Previous message:</strong> <a href="10783.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10756.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10745.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Eugene:
<br>
<p>Thanks for your efforts in reproducing this problem; glad to know it's  
<br>
not just us.
<br>
<p>I think our solution for now is just to migrate our users to MVAPICH2  
<br>
and Intel MPI; these MPICH-based systems work for us and our users  
<br>
extremely reliably, and it just looks like OpenMPI isn't ready for  
<br>
real production use on our system.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<p>On 2009-09-24, at 4:16PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Jonathan Dursi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So to summarize:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.3.2 + gcc4.4.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test problem with periodic (left neighbour of proc 0 is proc N-1)   
</span><br>
<span class="quotelev2">&gt;&gt; Sendrecv()s:
</span><br>
<span class="quotelev2">&gt;&gt;  Default always hangs in Sendrecv after random number of iterations
</span><br>
<span class="quotelev2">&gt;&gt;  Turning off sm (-mca btl self,tcp) not observed to hang
</span><br>
<span class="quotelev2">&gt;&gt;  Using -mca btl_sm_num_fifos 5 (for a 6 task job) not observed to  
</span><br>
<span class="quotelev2">&gt;&gt; hang
</span><br>
<span class="quotelev2">&gt;&gt;  Using fewer than 5 fifos hangs in Sendrecv after random number of   
</span><br>
<span class="quotelev2">&gt;&gt; iterations or Finalize
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.3.3 + gcc4.4.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test problem with periodic (left neighbour of proc 0 is proc N-1)   
</span><br>
<span class="quotelev2">&gt;&gt; Sendrecv()s:
</span><br>
<span class="quotelev2">&gt;&gt;  Default sometimes (~20% of time) hangs in Sendrecv after random   
</span><br>
<span class="quotelev2">&gt;&gt; number of iterations
</span><br>
<span class="quotelev2">&gt;&gt;  Turning off sm (-mca btl self,tcp) not observed to hang
</span><br>
<span class="quotelev2">&gt;&gt;  Using -mca btl_sm_num_fifos 5 (for a 6 task job) not observed to  
</span><br>
<span class="quotelev2">&gt;&gt; hang
</span><br>
<span class="quotelev2">&gt;&gt;  Using fewer than 5 fifos but more than 2 not observed to hang
</span><br>
<span class="quotelev2">&gt;&gt;  Using 2 fifos sometimes (~20% of time) hangs in Finalize  or   
</span><br>
<span class="quotelev2">&gt;&gt; Sendrecv after random number of iterations but sometimes completes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.3.2 + intel 11.0 compilers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are seeing a problem which we believe to be related; ~1% of  
</span><br>
<span class="quotelev2">&gt;&gt; certain  single-node jobs hang, turning off sm or setting num_fifos  
</span><br>
<span class="quotelev2">&gt;&gt; to NP-1  eliminates this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can reproduce this with just Barriers, which keeps the processes  
</span><br>
<span class="quotelev1">&gt; all in sync.  So, this has nothing to do with processes outrunning  
</span><br>
<span class="quotelev1">&gt; one another (which wasn't likely in the first place given that you  
</span><br>
<span class="quotelev1">&gt; had Sendrecv calls).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is fickle.  E.g., building OMPI with -g seems to make  
</span><br>
<span class="quotelev1">&gt; the problem go away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did observe that the sm FIFO would fill up.  That's weird since  
</span><br>
<span class="quotelev1">&gt; there aren't ever a lot of in-flight messages.  I tried adding a  
</span><br>
<span class="quotelev1">&gt; line of code that would make a process pause if ever it tried to  
</span><br>
<span class="quotelev1">&gt; write to a FIFO that seemed full.  That pretty much made the problem  
</span><br>
<span class="quotelev1">&gt; go away.  So, I guess it's a memory coherency problem:  receive  
</span><br>
<span class="quotelev1">&gt; clears the FIFO, but writer thinks it's congested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried all sorts of GCC compilers.  The problem seems to set in  
</span><br>
<span class="quotelev1">&gt; with 4.4.0.  I don't know what's significant about that.  It  
</span><br>
<span class="quotelev1">&gt; requires moving to the 2.18 assembler, but I tried the 2.18  
</span><br>
<span class="quotelev1">&gt; assembler with 4.3.3 and that worked okay.  I'd think this has to do  
</span><br>
<span class="quotelev1">&gt; with GCC 4.4.x, but you say you see the problem with Intel compilers  
</span><br>
<span class="quotelev1">&gt; as well.  Hmm.  Maybe an OMPI problem that's better exposed with GCC  
</span><br>
<span class="quotelev1">&gt; 4.4.x?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Jonathan Dursi &lt;ljdursi_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10785.php">Pavel Shamis (Pasha): "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>Previous message:</strong> <a href="10783.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10756.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10745.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
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
