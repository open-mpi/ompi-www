<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 11:53:29 2010" -->
<!-- isoreceived="20100602155329" -->
<!-- sent="Wed, 2 Jun 2010 11:52:35 -0400" -->
<!-- isosent="20100602155235" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager." -->
<!-- id="1975F6D3-7FFD-4CC1-B38F-FB8C2BA5466F_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C067554.6010004_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager.<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 11:52:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13210.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13208.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13208.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13210.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13210.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 11:14 AM, guillaume ranquet wrote:
<br>
<p><span class="quotelev2">&gt;&gt; What happens if you run:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ~/openmpi-1.4.2-bin/bin/mpirun --mca btl openib,sm,self ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (i.e., MX support is still compiled in, but remove MX from the run-time)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sadly, exactly the same thing :(
</span><br>
<span class="quotelev1">&gt; it doesn't seems to disable MX (as the Error message is still there, I'm
</span><br>
<span class="quotelev1">&gt; just guessing, as I said I don't really know anything about MPI :-/).
</span><br>
<p><p>What if you explicitly disable MX?
<br>
<p>~/openmpi-1.4.2-bin/bin/mpirun --mca btl openib,sm,self --mca btl ^mx ~/bwlat/mpi_helloworld
<br>
<p><span class="quotelev2">&gt;&gt; Does the same error happen if he tries on a MX host that does not have IB?
</span><br>
<span class="quotelev1">&gt; this node only has a myrinet card,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev1">&gt; warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; note that this is with openmpi-1.4.1
</span><br>
<p>Ok, there is no segfault when it can't find IB.
<br>
<p>Which version of OMPI are you running on the IB nodes? 1.4.2?
<br>
<p>I can try to write a patch that does not alter the mpool if MX is not available.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13210.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13208.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13208.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13210.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13210.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
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
