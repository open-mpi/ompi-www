<?
$subject_val = "[OMPI devel] hwloc causes compilation to fail";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 10:37:25 2011" -->
<!-- isoreceived="20110209153725" -->
<!-- sent="Wed, 9 Feb 2011 08:37:21 -0700 (MST)" -->
<!-- isosent="20110209153721" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] hwloc causes compilation to fail" -->
<!-- id="alpine.OSX.2.00.1102081712480.14052_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] hwloc causes compilation to fail<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 10:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8970.php">Jeff Squyres: "Re: [OMPI devel] hwloc causes compilation to fail"</a>
<li><strong>Previous message:</strong> <a href="8968.php">Tobias Hilbrich: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8970.php">Jeff Squyres: "Re: [OMPI devel] hwloc causes compilation to fail"</a>
<li><strong>Reply:</strong> <a href="8970.php">Jeff Squyres: "Re: [OMPI devel] hwloc causes compilation to fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran into an error compiling the trunk on one of our clusters. It appears that a bug in glibc (version 2.5) causes __pthread_cleanup_routine to be defined when pthread.h is included and compiling with -std=gnu99 and -fexceptions.
<br>
<p>The obvious fix is for lanl to upgrade either the cluser's gcc (which undoubtedly has a workaround) or glibc. But, seeing OpenMPI can not require c99 (as much as I would like to require c99) it might be a good idea to remove the c99 requirement on hwloc.
<br>
<p>Any comments? Better ideas?
<br>
<p>Error:
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_module.o): In function `__pthread_cleanup_routine':
<br>
/usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(bind.o): In function `__pthread_cleanup_routine':
<br>
/usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(cpuset.o): In function `__pthread_cleanup_routine':
<br>
/usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(misc.o): In function `__pthread_cleanup_routine':
<br>
/usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(topology-linux.o): In function `__pthread_cleanup_routine':
<br>
/usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(topology-synthetic.o): In function `__pthread_cleanup_routine':
<br>
/usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(topology-x86.o): In function `__pthread_cleanup_routine':
<br>
/usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(topology-xml.o): In function `__pthread_cleanup_routine':
<br>
/usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(topology.o): In function `__pthread_cleanup_routine':
<br>
/usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(traversal.o): In function `__pthread_cleanup_routine':
<br>
/usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
<br>
mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8970.php">Jeff Squyres: "Re: [OMPI devel] hwloc causes compilation to fail"</a>
<li><strong>Previous message:</strong> <a href="8968.php">Tobias Hilbrich: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8970.php">Jeff Squyres: "Re: [OMPI devel] hwloc causes compilation to fail"</a>
<li><strong>Reply:</strong> <a href="8970.php">Jeff Squyres: "Re: [OMPI devel] hwloc causes compilation to fail"</a>
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
