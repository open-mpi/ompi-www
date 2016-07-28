<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 12:00:38 2010" -->
<!-- isoreceived="20100602160038" -->
<!-- sent="Wed, 2 Jun 2010 12:00:32 -0400" -->
<!-- isosent="20100602160032" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager." -->
<!-- id="AB4DC077-AE1E-4D03-B29A-DB4EB1369C77_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1975F6D3-7FFD-4CC1-B38F-FB8C2BA5466F_at_myri.com" -->
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
<strong>Date:</strong> 2010-06-02 12:00:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13211.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Previous message:</strong> <a href="13209.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13209.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 11:52 AM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; What if you explicitly disable MX?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~/openmpi-1.4.2-bin/bin/mpirun --mca btl openib,sm,self --mca btl ^mx ~/bwlat/mpi_helloworld
</span><br>
<p>And can you try this as well?
<br>
<p>~/openmpi-1.4.2-bin/bin/mpirun --mca btl openib,sm,self --mca pml ^cm ~/bwlat/mpi_helloworld
<br>
<p>Thanks,
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13211.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Previous message:</strong> <a href="13209.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13209.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
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
