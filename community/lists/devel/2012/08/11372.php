<?
$subject_val = "[OMPI devel] RFC: sm BTL Initialization via Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  5 06:38:31 2012" -->
<!-- isoreceived="20120805103831" -->
<!-- sent="Sun, 5 Aug 2012 10:38:26 +0000" -->
<!-- isosent="20120805103826" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: sm BTL Initialization via Modex" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B110D8D3E_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: sm BTL Initialization via Modex<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-05 06:38:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11373.php">Yevgeny Kliteynik: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<li><strong>Previous message:</strong> <a href="11371.php">Gutierrez, Samuel K: "[OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11380.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Reply:</strong> <a href="11380.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:
<br>
<p>The majority of the code required to get away from explicit RML usage during
<br>
shared memory initialization is complete. With this update, the sm BTL and sm
<br>
mpool modex around the information required for setup.
<br>
<p>I've completed some initial testing and everything seems to be working
<br>
properly, but additional testing and feedback is greatly appreciated -- and
<br>
almost certainly required.
<br>
<p>Things that haven't been tested:
<br>
o The sm BTL with progress threads enabled (OMPI_ENABLE_PROGRESS_THREADS).
<br>
o The sm BTL with any kernel assistance enabled.
<br>
<p>WHY: In preparation for the eventual BTL move.
<br>
<p>WHERE:
<br>
M       opal/mca/shmem/posix/shmem_posix_module.c
<br>
M       opal/mca/shmem/sysv/shmem_sysv_module.c
<br>
M       opal/mca/shmem/mmap/shmem_mmap_module.c
<br>
M       opal/mca/shmem/windows/shmem_windows_module.c
<br>
M       ompi/mca/btl/sm/btl_sm.c
<br>
M       ompi/mca/btl/sm/btl_sm_component.c
<br>
M       ompi/mca/btl/sm/help-mpi-btl-sm.txt
<br>
M       ompi/mca/btl/sm/btl_sm.h
<br>
M       ompi/mca/btl/sm/btl_sm_fifo.h
<br>
M       ompi/mca/mpool/sm/mpool_sm_component.c
<br>
M       ompi/mca/mpool/sm/mpool_sm.h
<br>
M       ompi/mca/common/sm/common_sm.c
<br>
M       ompi/mca/common/sm/common_sm.h
<br>
<p>The majority of changes that most will care about are in btl/sm/* and mpool/sm/*
<br>
<p>The branch can be found:
<br>
<a href="https://bitbucket.org/samuelkgutierrez/rmllesssm">https://bitbucket.org/samuelkgutierrez/rmllesssm</a>
<br>
<p>TIMEOUT: If everything looks okay, Aug 10, 2012. If not, some time after issues
<br>
have been resolved.
<br>
<p>Thanks,
<br>
<p>Sam
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11372/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11373.php">Yevgeny Kliteynik: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<li><strong>Previous message:</strong> <a href="11371.php">Gutierrez, Samuel K: "[OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11380.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Reply:</strong> <a href="11380.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
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
