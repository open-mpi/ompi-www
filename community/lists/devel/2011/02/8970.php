<?
$subject_val = "Re: [OMPI devel] hwloc causes compilation to fail";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 11:13:43 2011" -->
<!-- isoreceived="20110209161343" -->
<!-- sent="Wed, 9 Feb 2011 08:13:43 -0800" -->
<!-- isosent="20110209161343" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc causes compilation to fail" -->
<!-- id="F5D924AD-D365-42F6-AC20-69CC01D5EE70_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1102081712480.14052_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hwloc causes compilation to fail<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 11:13:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8971.php">Nikolay Piskun: "[OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)"</a>
<li><strong>Previous message:</strong> <a href="8969.php">Nathan Hjelm: "[OMPI devel] hwloc causes compilation to fail"</a>
<li><strong>In reply to:</strong> <a href="8969.php">Nathan Hjelm: "[OMPI devel] hwloc causes compilation to fail"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ew.
<br>
<p>Let me take this upstream to hwloc and see what we can do here.  :-\
<br>
<p>On Feb 9, 2011, at 7:37 AM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; I ran into an error compiling the trunk on one of our clusters. It appears that a bug in glibc (version 2.5) causes __pthread_cleanup_routine to be defined when pthread.h is included and compiling with -std=gnu99 and -fexceptions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The obvious fix is for lanl to upgrade either the cluser's gcc (which undoubtedly has a workaround) or glibc. But, seeing OpenMPI can not require c99 (as much as I would like to require c99) it might be a good idea to remove the c99 requirement on hwloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments? Better ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error:
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_module.o): In function `__pthread_cleanup_routine':
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(bind.o): In function `__pthread_cleanup_routine':
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(cpuset.o): In function `__pthread_cleanup_routine':
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(misc.o): In function `__pthread_cleanup_routine':
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(topology-linux.o): In function `__pthread_cleanup_routine':
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(topology-synthetic.o): In function `__pthread_cleanup_routine':
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(topology-x86.o): In function `__pthread_cleanup_routine':
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(topology-xml.o): In function `__pthread_cleanup_routine':
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(topology.o): In function `__pthread_cleanup_routine':
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(traversal.o): In function `__pthread_cleanup_routine':
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:580: multiple definition of `__pthread_cleanup_routine'
</span><br>
<span class="quotelev1">&gt; mca/paffinity/hwloc/.libs/libmca_paffinity_hwloc.a(paffinity_hwloc_component.o):/usr/include/pthread.h:580: first defined here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8971.php">Nikolay Piskun: "[OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)"</a>
<li><strong>Previous message:</strong> <a href="8969.php">Nathan Hjelm: "[OMPI devel] hwloc causes compilation to fail"</a>
<li><strong>In reply to:</strong> <a href="8969.php">Nathan Hjelm: "[OMPI devel] hwloc causes compilation to fail"</a>
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
