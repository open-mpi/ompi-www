<?
$subject_val = "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  3 09:49:27 2010" -->
<!-- isoreceived="20100603134927" -->
<!-- sent="Thu, 3 Jun 2010 09:49:01 -0400" -->
<!-- isosent="20100603134901" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager." -->
<!-- id="1833A47E-7AAE-40A9-A921-1856AFF9C28C_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C07A601.8080304_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager.<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-03 09:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13220.php">Katz, Jacob: "[OMPI users] SM failure with mixed 32/64-bit procs on the same machine"</a>
<li><strong>Previous message:</strong> <a href="13218.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13218.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13241.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13241.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2010, at 8:54 AM, guillaume ranquet wrote:
<br>
<p><span class="quotelev1">&gt; granquet_at_bordeplage-15 ~ $ mpirun --mca btl mx,openib,sm,self --mca pml
</span><br>
<span class="quotelev1">&gt; ^cm --mca mpi_leave_pinned 0 ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev1">&gt; [bordeplage-15.bordeaux.grid5000.fr:02707] Error in mx_init (error No MX
</span><br>
<span class="quotelev1">&gt; device entry in /dev.)
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it works :)
</span><br>
<p>Jeff, you may want to change this message to opal_output_verbose(). It is in $OMPI/ompi/mca/common/common_mx.c.
<br>
<p><span class="quotelev2">&gt;&gt; Ok. I think that OMPI is trying to open the MX MTL first. It fails at
</span><br>
<span class="quotelev2">&gt;&gt; mx_init() (the first error message) but it had already created some
</span><br>
<span class="quotelev2">&gt;&gt; mpool resources. It then tries to open the MX BTL and it skips the MX
</span><br>
<span class="quotelev2">&gt;&gt; initialization and returns SUCCESS. The MX BTL then tries to call
</span><br>
<span class="quotelev2">&gt;&gt; mx_get_info() which fails and prints the second message.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try the attached patch. It tries to clean up if mx_init() fails and
</span><br>
<span class="quotelev2">&gt;&gt; does not return SUCCESS on subsequent attempts to initialize MX.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried your patch and it seems to correct the issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configured with:  --prefix=$HOME/openmpi-1.4.2-nomx-bin/
</span><br>
<span class="quotelev1">&gt; - --with-openib=/usr --with-mx=/usr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ~/openmpi-1.4.2-nomx-bin/bin/mpirun ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev1">&gt; [bordeplage-15.bordeaux.grid5000.fr:22406] Error in mx_init (error No MX
</span><br>
<span class="quotelev1">&gt; device entry in /dev.)
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 1
</span><br>
<p>Excellent.
<br>
<p><span class="quotelev1">&gt; don't hesitate if you need further testing :)
</span><br>
<p>Thanks for all your assistance!
<br>
<p><span class="quotelev1">&gt; do you plan on applying this patch on next release? (1.4.3?)
</span><br>
<p>Jeff, I leave this up to you and George.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13220.php">Katz, Jacob: "[OMPI users] SM failure with mixed 32/64-bit procs on the same machine"</a>
<li><strong>Previous message:</strong> <a href="13218.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13218.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13241.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13241.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
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
