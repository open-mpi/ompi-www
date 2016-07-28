<?
$subject_val = "Re: [OMPI devel] RFC: sm BTL Initialization via Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 16:21:56 2012" -->
<!-- isoreceived="20120806202156" -->
<!-- sent="Mon, 6 Aug 2012 16:21:04 -0400" -->
<!-- isosent="20120806202104" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm BTL Initialization via Modex" -->
<!-- id="DDE15FE1-003C-4991-90F1-CFE607A1F88D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2F7AEC0555CE39418857F909CEE0451B110D8D3E_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm BTL Initialization via Modex<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 16:21:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11381.php">Jeff Squyres: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Previous message:</strong> <a href="11379.php">Gutierrez, Samuel K: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>In reply to:</strong> <a href="11372.php">Gutierrez, Samuel K: "[OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11382.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Reply:</strong> <a href="11382.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've run this hg tree with the intel, IBM, and IMB suites on a Romley server with 20 cores for NP values of 2,3,4,...,19,20.  The only failures were the IBM spawn tests (which are expected, because I ran with &quot;--mca btl sm,self&quot;).
<br>
<p>So -- +1 on this from me (disclaimer: I haven't looked at the code).
<br>
<p><p>On Aug 5, 2012, at 6:38 AM, Gutierrez, Samuel K wrote:
<br>
<p><span class="quotelev1">&gt; WHAT:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The majority of the code required to get away from explicit RML usage during
</span><br>
<span class="quotelev1">&gt; shared memory initialization is complete. With this update, the sm BTL and sm
</span><br>
<span class="quotelev1">&gt; mpool modex around the information required for setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've completed some initial testing and everything seems to be working
</span><br>
<span class="quotelev1">&gt; properly, but additional testing and feedback is greatly appreciated -- and
</span><br>
<span class="quotelev1">&gt; almost certainly required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Things that haven't been tested:
</span><br>
<span class="quotelev1">&gt; o The sm BTL with progress threads enabled (OMPI_ENABLE_PROGRESS_THREADS).
</span><br>
<span class="quotelev1">&gt; o The sm BTL with any kernel assistance enabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: In preparation for the eventual BTL move.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: 
</span><br>
<span class="quotelev1">&gt; M       opal/mca/shmem/posix/shmem_posix_module.c
</span><br>
<span class="quotelev1">&gt; M       opal/mca/shmem/sysv/shmem_sysv_module.c
</span><br>
<span class="quotelev1">&gt; M       opal/mca/shmem/mmap/shmem_mmap_module.c
</span><br>
<span class="quotelev1">&gt; M       opal/mca/shmem/windows/shmem_windows_module.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/sm/btl_sm_component.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/sm/help-mpi-btl-sm.txt
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/sm/btl_sm.h
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/sm/btl_sm_fifo.h
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/mpool/sm/mpool_sm_component.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/mpool/sm/mpool_sm.h
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/common/sm/common_sm.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/common/sm/common_sm.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The majority of changes that most will care about are in btl/sm/* and mpool/sm/*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch can be found:
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/samuelkgutierrez/rmllesssm">https://bitbucket.org/samuelkgutierrez/rmllesssm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: If everything looks okay, Aug 10, 2012. If not, some time after issues
</span><br>
<span class="quotelev1">&gt; have been resolved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11381.php">Jeff Squyres: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Previous message:</strong> <a href="11379.php">Gutierrez, Samuel K: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>In reply to:</strong> <a href="11372.php">Gutierrez, Samuel K: "[OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11382.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Reply:</strong> <a href="11382.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
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
