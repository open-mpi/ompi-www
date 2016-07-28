<?
$subject_val = "Re: [OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 15:06:56 2010" -->
<!-- isoreceived="20100303200656" -->
<!-- sent="Wed, 3 Mar 2010 14:06:47 -0600" -->
<!-- isosent="20100303200647" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="5FFA2064-EBA4-4E8F-A4AC-8C854691C356_at_mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF19FEED2F.CC906EE3-ON852576DB.005EEE2E-852576DB.0060AC79_at_us.ibm.com" -->
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
<strong>Date:</strong> 2010-03-03 15:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12227.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Previous message:</strong> <a href="12225.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12220.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12229.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12229.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2010, at 11:35 AM, Richard Treumann wrote:
<br>
<span class="quotelev1">&gt; If the application will make MPI calls from multiple threads and  
</span><br>
<span class="quotelev1">&gt; MPI_INIT_THREAD has returned FUNNELED, the application must be  
</span><br>
<span class="quotelev1">&gt; willing to take the steps that ensure there will never be concurrent  
</span><br>
<span class="quotelev1">&gt; calls to MPI from the threads. The threads will take turns - without  
</span><br>
<span class="quotelev1">&gt; fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Minor nitpick: if the implementation returns FUNNELED, only the main  
<br>
thread (basically the thread that called MPI_INIT_THREAD, see MPI-2.2  
<br>
pg 386 for def'n) may make MPI calls.  Dick's paragraph above is  
<br>
correct if you replace FUNNELED with SERIALIZED.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12227.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Previous message:</strong> <a href="12225.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12220.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12229.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12229.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
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
