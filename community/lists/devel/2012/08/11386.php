<?
$subject_val = "Re: [OMPI devel] RFC: sm BTL Initialization via Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 10:34:28 2012" -->
<!-- isoreceived="20120807143428" -->
<!-- sent="Tue, 7 Aug 2012 14:34:23 +0000" -->
<!-- isosent="20120807143423" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm BTL Initialization via Modex" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B110DD2A0_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F7AEC0555CE39418857F909CEE0451B110DBBC4_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 10:34:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11387.php">Paul Kapinos: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11385.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>In reply to:</strong> <a href="11382.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11391.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Reply:</strong> <a href="11391.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This may be useful.
<br>
<p>Attached is a patch tarball with the updates - may make quick reviews easier.
<br>
<p>Thanks,
<br>
<p>Sam
<br>
<p><p><p>On Aug 6, 2012, at 3:23 PM, Gutierrez, Samuel K wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, I just finished testing with knem support enabled. Looks good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 6, 2012, at 2:21 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've run this hg tree with the intel, IBM, and IMB suites on a Romley server with 20 cores for NP values of 2,3,4,...,19,20.  The only failures were the IBM spawn tests (which are expected, because I ran with &quot;--mca btl sm,self&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So -- +1 on this from me (disclaimer: I haven't looked at the code).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 5, 2012, at 6:38 AM, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The majority of the code required to get away from explicit RML usage during
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared memory initialization is complete. With this update, the sm BTL and sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpool modex around the information required for setup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've completed some initial testing and everything seems to be working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properly, but additional testing and feedback is greatly appreciated -- and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; almost certainly required.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Things that haven't been tested:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; o The sm BTL with progress threads enabled (OMPI_ENABLE_PROGRESS_THREADS).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; o The sm BTL with any kernel assistance enabled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: In preparation for the eventual BTL move.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       opal/mca/shmem/posix/shmem_posix_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       opal/mca/shmem/sysv/shmem_sysv_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       opal/mca/shmem/mmap/shmem_mmap_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       opal/mca/shmem/windows/shmem_windows_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       ompi/mca/btl/sm/btl_sm_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       ompi/mca/btl/sm/help-mpi-btl-sm.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       ompi/mca/btl/sm/btl_sm.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       ompi/mca/btl/sm/btl_sm_fifo.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       ompi/mca/mpool/sm/mpool_sm_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       ompi/mca/mpool/sm/mpool_sm.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       ompi/mca/common/sm/common_sm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M       ompi/mca/common/sm/common_sm.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The majority of changes that most will care about are in btl/sm/* and mpool/sm/*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The branch can be found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://bitbucket.org/samuelkgutierrez/rmllesssm">https://bitbucket.org/samuelkgutierrez/rmllesssm</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: If everything looks okay, Aug 10, 2012. If not, some time after issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have been resolved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11386/rmllesssm.patch.tar.gz">rmllesssm.patch.tar.gz</a>
</ul>
<!-- attachment="rmllesssm.patch.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11387.php">Paul Kapinos: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11385.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>In reply to:</strong> <a href="11382.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11391.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Reply:</strong> <a href="11391.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
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
