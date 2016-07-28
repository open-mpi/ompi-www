<?
$subject_val = "[OMPI devel] Collective component development (CAS)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 07:13:52 2012" -->
<!-- isoreceived="20120807111352" -->
<!-- sent="Tue, 7 Aug 2012 13:13:44 +0200" -->
<!-- isosent="20120807111344" -->
<!-- name="Juan A. Rico" -->
<!-- email="jarico_at_[hidden]" -->
<!-- subject="[OMPI devel] Collective component development (CAS)" -->
<!-- id="359EB103-0FFE-4353-AE32-83DB9244DD7A_at_unex.es" -->
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
<strong>Subject:</strong> [OMPI devel] Collective component development (CAS)<br>
<strong>From:</strong> Juan A. Rico (<em>jarico_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 07:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11384.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11382.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As we told in the last teleconference, a few lines about our work in the University of Extremadura related to Open MPI:
<br>
<p>We are developing new (proof-of-concept) collective and mpool components for improving the collective operations performance. New collective algorithms require user buffers on a shared memory space to all the processes, that it is allocated at initialization time and bound to communicators. User needs to use MPI_Alloc_mem for allocating memory in this shared pool (with an MPI_Info object or MPI_INFO_NULL) instead of malloc. Mpool new component manages the allocation using Open MPI allocator services. 
<br>
Broadcast and Reduce algorithms are implemented. As expected, performance is improved because of zero intermediate copy, and all processes collaborating in calculation directly on user buffers in Reduce.
<br>
Components are called CAS (Common Address Space). Perhaps it is not a good name.
<br>
<p>Another work is about adding hierarchical capabilities to Tuned and SM (and CAS) collective components in Open MPI, which not care about hardware topology. 
<br>
<p>Please, we appreciate comments and your opinions. If you need more information we are glad to provide you (also, a poster in the EuroMPI 2012 will be presented in September).
<br>
<p>I would like to thank Shiquing Fan for their help at HLRS in contact you and the procedure for contributing to Open MPI project.
<br>
<p>Best regards,
<br>
Juan A. Rico
<br>
University of Extremadura.
<br>
jarico_at_[hidden]
<br>
C&#225;ceres, Spain.
<br>
Phone: +34 645 269 389
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11384.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11382.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
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
