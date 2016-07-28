<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 09:54:44 2010" -->
<!-- isoreceived="20100602135444" -->
<!-- sent="Wed, 2 Jun 2010 09:54:38 -0400" -->
<!-- isosent="20100602135438" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager." -->
<!-- id="A93FC8E6-1F18-43BA-9FA8-72F4E5E7B9B5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C0651CA.3060102_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 09:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13204.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Previous message:</strong> <a href="13202.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>In reply to:</strong> <a href="13200.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13207.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13207.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13208.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 8:42 AM, guillaume ranquet wrote:
<br>
<p><span class="quotelev1">&gt; yes, I have multiple clusters, some with infiniband, some with mx, some
</span><br>
<span class="quotelev1">&gt; nodes with both Myrinet et Infiniband hardware and others with ethernet
</span><br>
<span class="quotelev1">&gt; only.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I reproduced it on a vanilla 1.4.1 and 1.4.2 with and without the
</span><br>
<span class="quotelev1">&gt; - --with-mx switch.
</span><br>
<p>Note that per <a href="http://www.open-mpi.org/faq/?category=building#default-build">http://www.open-mpi.org/faq/?category=building#default-build</a>, even if you don't specify --with-mx, if Open MPI's configure is able to find the MX libs/headers, we'll still build support for it.
<br>
<p><span class="quotelev1">&gt; this is the output I get on a node with ethernet and infiniband hardware.
</span><br>
<span class="quotelev1">&gt; note the Error regarding mx.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ~/openmpi-1.4.2-bin/bin/mpirun ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev1">&gt; [bordeplage-9.bordeaux.grid5000.fr:32365] Error in mx_init (error No MX
</span><br>
<span class="quotelev1">&gt; device entry in /dev.)
</span><br>
<span class="quotelev1">&gt; [bordeplage-9.bordeaux.grid5000.fr:32365] mca_btl_mx_component_init:
</span><br>
<span class="quotelev1">&gt; mx_get_info(MX_NIC_COUNT) failed with status 4(MX not initialized.)
</span><br>
<p>I'm guessing the MX BTL is designed to be noisy when it fails, on the assumption that if MX is down, you probably want to know it.
<br>
<p>George/Myricom -- can you confirm?
<br>
<p><span class="quotelev1">&gt; Hello world from process 0 of 1
</span><br>
<span class="quotelev1">&gt; [bordeplage-9:32365] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [bordeplage-9:32365] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [bordeplage-9:32365] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [bordeplage-9:32365] Failing at address: 0x7f53bb7bb360
</span><br>
<p>What happens if you run:
<br>
<p>~/openmpi-1.4.2-bin/bin/mpirun --mca btl openib,sm,self ~/bwlat/mpi_helloworld
<br>
<p>(i.e., MX support is still compiled in, but remove MX from the run-time)
<br>
<p><span class="quotelev1">&gt; I recompiled a 1.4.2 --with-openib --without-mx and the problem is gone
</span><br>
<span class="quotelev1">&gt; (no segfault, no error message).
</span><br>
<span class="quotelev1">&gt; seems you aimed at the right spot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now the problem is that I need support for both.
</span><br>
<span class="quotelev1">&gt; I could compile two versions of openmpi and deploy appropriate versions
</span><br>
<span class="quotelev1">&gt; on each cluster with support either for mx, either for openib... but
</span><br>
<span class="quotelev1">&gt; it's quite painful and well, how should I manage nodes with both?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for now I'll be sticking to a version of openmpi compiled with both
</span><br>
<span class="quotelev1">&gt; hardware support and --without-memory-manager.
</span><br>
<span class="quotelev1">&gt; unless the list has a better idea?
</span><br>
<p>I'm still guessing that there's some weird interaction between the memory management of those two plugins (MX and verbs).  I don't know of anyone else who has this kind of configuration where it could be tested / debugged.  :-(
<br>
<p>Per the above suggestion, let's see what happens if you run without MX and/or without openib via mpirun command line option.  If that fixes the problem, that would mean you only have to change command line params when you run -- not have 2 OMPI installs.  Additionally, you might be able to leave both plugins enabled but setenv the OMPI_MCA_memory_ptmalloc2_disable environment variable to 1; this will disable the OMPI memory management stuff.  Note that this is not a normal MCA parameter -- you cannot set it on the command line or in a file; it *must* be set as an environment variable (for boring, technical reasons -- I can explain if you care).
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13204.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Previous message:</strong> <a href="13202.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>In reply to:</strong> <a href="13200.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13207.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13207.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13208.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
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
