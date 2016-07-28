<?
$subject_val = "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 15:49:17 2010" -->
<!-- isoreceived="20100607194917" -->
<!-- sent="Mon, 7 Jun 2010 15:49:06 -0400" -->
<!-- isosent="20100607194906" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager." -->
<!-- id="88E92C22-DE4A-464A-83B7-A4496CCBD2EC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1833A47E-7AAE-40A9-A921-1856AFF9C28C_at_myri.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 15:49:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13242.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Previous message:</strong> <a href="13240.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>In reply to:</strong> <a href="13219.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13342.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13342.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Scott's patch was different than the one you applied.  Apparently, his fixes this user's problem (I don't know if Guillaume tested yours).
<br>
<p>Which one wins?
<br>
<p><p><p>On Jun 3, 2010, at 9:49 AM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 3, 2010, at 8:54 AM, guillaume ranquet wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; granquet_at_bordeplage-15 ~ $ mpirun --mca btl mx,openib,sm,self --mca pml
</span><br>
<span class="quotelev2">&gt; &gt; ^cm --mca mpi_leave_pinned 0 ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev2">&gt; &gt; [bordeplage-15.bordeaux.grid5000.fr:02707] Error in mx_init (error No MX
</span><br>
<span class="quotelev2">&gt; &gt; device entry in /dev.)
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 0 of 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; it works :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff, you may want to change this message to opal_output_verbose(). It is in $OMPI/ompi/mca/common/common_mx.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ok. I think that OMPI is trying to open the MX MTL first. It fails at
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mx_init() (the first error message) but it had already created some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpool resources. It then tries to open the MX BTL and it skips the MX
</span><br>
<span class="quotelev3">&gt; &gt;&gt; initialization and returns SUCCESS. The MX BTL then tries to call
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mx_get_info() which fails and prints the second message.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Try the attached patch. It tries to clean up if mx_init() fails and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; does not return SUCCESS on subsequent attempts to initialize MX.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Scott
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried your patch and it seems to correct the issue:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configured with:  --prefix=$HOME/openmpi-1.4.2-nomx-bin/
</span><br>
<span class="quotelev2">&gt; &gt; - --with-openib=/usr --with-mx=/usr
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ~/openmpi-1.4.2-nomx-bin/bin/mpirun ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev2">&gt; &gt; [bordeplage-15.bordeaux.grid5000.fr:22406] Error in mx_init (error No MX
</span><br>
<span class="quotelev2">&gt; &gt; device entry in /dev.)
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 0 of 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Excellent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; don't hesitate if you need further testing :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for all your assistance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; do you plan on applying this patch on next release? (1.4.3?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff, I leave this up to you and George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13242.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Previous message:</strong> <a href="13240.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>In reply to:</strong> <a href="13219.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13342.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13342.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
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
