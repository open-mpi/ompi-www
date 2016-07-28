<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 14:12:22 2010" -->
<!-- isoreceived="20100602181222" -->
<!-- sent="Wed, 2 Jun 2010 14:12:09 -0400" -->
<!-- isosent="20100602181209" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager." -->
<!-- id="7A35769D-C97B-4227-87EC-4DEA2848AA4C_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C069585.7030908_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager.<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 14:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13216.php">Jed Brown: "[OMPI users] Highly variable performance"</a>
<li><strong>Previous message:</strong> <a href="13214.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 1:31 PM, guillaume ranquet wrote:
<br>
<p><span class="quotelev1">&gt; granquet_at_bordeplage-9 ~/openmpi-1.4.2 $ ~/openmpi-1.4.2-bin/bin/mpirun
</span><br>
<span class="quotelev1">&gt; - --mca btl openib,sm,self --mca pml ^cm ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 1
</span><br>
<span class="quotelev1">&gt; granquet_at_bordeplage-9 ~/openmpi-1.4.2 $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can tell it works :)
</span><br>
<p>Ok. I think that OMPI is trying to open the MX MTL first. It fails at mx_init() (the first error message) but it had already created some mpool resources. It then tries to open the MX BTL and it skips the MX initialization and returns SUCCESS. The MX BTL then tries to call mx_get_info() which fails and prints the second message.
<br>
<p>Try the attached patch. It tries to clean up if mx_init() fails and does not return SUCCESS on subsequent attempts to initialize MX.
<br>
<p>Scott
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13215/ompi-1.4.2-no-mx.patch.gz">ompi-1.4.2-no-mx.patch.gz</a>
</ul>
<!-- attachment="ompi-1.4.2-no-mx.patch.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13216.php">Jed Brown: "[OMPI users] Highly variable performance"</a>
<li><strong>Previous message:</strong> <a href="13214.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
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
