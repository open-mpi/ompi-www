<?
$subject_val = "Re: [OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 11:16:39 2010" -->
<!-- isoreceived="20100304161639" -->
<!-- sent="Thu, 4 Mar 2010 10:16:29 -0600" -->
<!-- isosent="20100304161629" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="B48D4F87-D407-416C-9174-29DAF5888DAC_at_mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF72F1BD5E.D2FBB064-ON852576DC.0045C6DB-852576DC.004ACAA0_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init() and MPI_Init_thread()<br>
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 11:16:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12249.php">Anthony Chan: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12247.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12244.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12249.php">Anthony Chan: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 4, 2010, at 7:36 AM, Richard Treumann wrote:
<br>
<span class="quotelev1">&gt; A call to MPI_Init allows the MPI library to return any level of  
</span><br>
<span class="quotelev1">&gt; thread support it chooses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
This is correct, insofar as the MPI implementation can always choose  
<br>
any level of thread support.
<br>
<span class="quotelev1">&gt; This MPI 1.1 call does not let the application say what it wants and  
</span><br>
<span class="quotelev1">&gt; does not let the implementation reply with what it can guarantee.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Well, sort of.  MPI-2.2, sec 12.4.3, page 385, lines 24-25:
<br>
<p>------8&lt;------
<br>
24|  A call to MPI_INIT has the same effect as a call to  
<br>
MPI_INIT_THREAD with a required
<br>
25|  = MPI_THREAD_SINGLE.
<br>
------8&lt;------
<br>
<p>So even though there is no explicit request and response for thread  
<br>
level support, it is implicitly asking for MPI_THREAD_SINGLE.  Since  
<br>
all implementations must be able to support at least SINGLE (0 threads  
<br>
running doesn't really make sense), SINGLE will be provided at a  
<br>
minimum.  Callers to plain-old &quot;MPI_Init&quot; should not expect any higher  
<br>
level of thread support if they wish to maintain portability.
<br>
<p>[...snip...]
<br>
<span class="quotelev1">&gt; Consider a made up example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Imagine some system supports Mutex lock/unlock but with terrible  
</span><br>
<span class="quotelev1">&gt; performance. As a work around, it offers a non-standard substitute  
</span><br>
<span class="quotelev1">&gt; for malloc called st_malloc (single thread malloc) that does not do  
</span><br>
<span class="quotelev1">&gt; locking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
[...snip...]
<br>
<p>Dick's example is a great illustration of why FUNNELED might be  
<br>
necessary.  The moral of the story is &quot;don't lie to the MPI  
<br>
implementation&quot; :)
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12249.php">Anthony Chan: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12247.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12244.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12249.php">Anthony Chan: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
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
