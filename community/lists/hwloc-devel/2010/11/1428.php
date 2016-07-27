<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2734";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 12:55:22 2010" -->
<!-- isoreceived="20101105165522" -->
<!-- sent="Fri, 5 Nov 2010 12:55:17 -0400" -->
<!-- isosent="20101105165517" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2734" -->
<!-- id="D0F3550F-E521-4F10-AD5C-2467E4899485_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201011051653.oA5Gr89T001757_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2734<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 12:55:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1429.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2734"</a>
<li><strong>Previous message:</strong> <a href="1427.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1429.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2734"</a>
<li><strong>Maybe reply:</strong> <a href="1429.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2734"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can just assign constants to DIST_SUBDIRS; don't assign to it conditionally.
<br>
<p>It should be set to:
<br>
<p>DIST_SUBDIRS = ports xml linux
<br>
<p>Meaning: we always distribute these dirs.  If DIST_SUBDIRS is set, it trumps SUBDIRS during &quot;make dist&quot;.  Hence, it needs to be a complete listing of all the subdirs.
<br>
<p><p>On Nov 5, 2010, at 12:53 PM, sthibaul_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-11-05 12:53:08 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2734
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2734">https://svn.open-mpi.org/trac/hwloc/changeset/2734</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; keep linux in DIST_SUBDIRS for make dist on non-Linux platforms.
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/README            |    31 +++++++++++++++++++++++++++----         
</span><br>
<span class="quotelev1">&gt;   trunk/tests/Makefile.am |     5 ++++-                                   
</span><br>
<span class="quotelev1">&gt;   2 files changed, 31 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/README
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/README	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/README	2010-11-05 12:53:08 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -426,7 +426,8 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Example hwloc API program.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt; - * Copyright ? 2009 INRIA, Universit? Bordeaux 1
</span><br>
<span class="quotelev1">&gt; + * Copyright ? 2009-2010 INRIA
</span><br>
<span class="quotelev1">&gt; + * Copyright ? 2009-2010 Universit? Bordeaux 1
</span><br>
<span class="quotelev1">&gt;  * Copyright ? 2009-2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * hwloc-hello.c
</span><br>
<span class="quotelev1">&gt; @@ -453,13 +454,13 @@
</span><br>
<span class="quotelev1">&gt; int main(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int depth;
</span><br>
<span class="quotelev1">&gt; - unsigned i;
</span><br>
<span class="quotelev1">&gt; + unsigned i, n;
</span><br>
<span class="quotelev1">&gt;  unsigned long size;
</span><br>
<span class="quotelev1">&gt;  int levels;
</span><br>
<span class="quotelev1">&gt;  char string[128];
</span><br>
<span class="quotelev1">&gt;  int topodepth;
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_t topology;
</span><br>
<span class="quotelev1">&gt; - hwloc_bitmap_t cpuset;
</span><br>
<span class="quotelev1">&gt; + hwloc_cpuset_t cpuset;
</span><br>
<span class="quotelev1">&gt;  hwloc_obj_t obj;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* Allocate and initialize topology object. */
</span><br>
<span class="quotelev1">&gt; @@ -564,6 +565,28 @@
</span><br>
<span class="quotelev1">&gt;      hwloc_bitmap_free(cpuset);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; + /*****************************************************************
</span><br>
<span class="quotelev1">&gt; +  * Sixth example:
</span><br>
<span class="quotelev1">&gt; +  * Allocate some memory on the last NUMA node, bind some existing
</span><br>
<span class="quotelev1">&gt; +  * memory to the last NUMA node.
</span><br>
<span class="quotelev1">&gt; +  *****************************************************************/
</span><br>
<span class="quotelev1">&gt; + /* Get last node. */
</span><br>
<span class="quotelev1">&gt; + n = hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_NODE);
</span><br>
<span class="quotelev1">&gt; + if (n) {
</span><br>
<span class="quotelev1">&gt; +     void *m;
</span><br>
<span class="quotelev1">&gt; +     size_t size = 1024*1024;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +     obj = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, n - 1);
</span><br>
<span class="quotelev1">&gt; +     m = hwloc_alloc_membind_nodeset(topology, size, obj-&gt;nodeset,
</span><br>
<span class="quotelev1">&gt; +             HWLOC_MEMBIND_DEFAULT, 0);
</span><br>
<span class="quotelev1">&gt; +     hwloc_free_membind(topology, m, size);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +     m = malloc(size);
</span><br>
<span class="quotelev1">&gt; +     hwloc_set_area_membind_nodeset(topology, m, size, obj-&gt;nodeset,
</span><br>
<span class="quotelev1">&gt; +             HWLOC_MEMBIND_DEFAULT, 0);
</span><br>
<span class="quotelev1">&gt; +     free(m);
</span><br>
<span class="quotelev1">&gt; + }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /* Destroy topology object. */
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_destroy(topology);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -647,5 +670,5 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Generated on Thu Oct 21 2010 17:46:01 for Hardware Locality (hwloc) by  doxygen
</span><br>
<span class="quotelev1">&gt; +Generated on Fri Nov 5 2010 17:52:24 for Hardware Locality (hwloc) by  doxygen
</span><br>
<span class="quotelev1">&gt; 1.7.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/tests/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/tests/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/tests/Makefile.am	2010-11-05 12:53:08 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -7,10 +7,13 @@
</span><br>
<span class="quotelev1">&gt; AM_LDFLAGS = $(HWLOC_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SUBDIRS = ports xml
</span><br>
<span class="quotelev1">&gt; +DIST_SUBDIRS =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if HWLOC_HAVE_LINUX
</span><br>
<span class="quotelev1">&gt; SUBDIRS += linux
</span><br>
<span class="quotelev1">&gt; -endif
</span><br>
<span class="quotelev1">&gt; +else !HWLOC_HAVE_LINUX
</span><br>
<span class="quotelev1">&gt; +DIST_SUBDIRS += linux
</span><br>
<span class="quotelev1">&gt; +endif !HWLOC_HAVE_LINUX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LDADD =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
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
<li><strong>Next message:</strong> <a href="1429.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2734"</a>
<li><strong>Previous message:</strong> <a href="1427.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1429.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2734"</a>
<li><strong>Maybe reply:</strong> <a href="1429.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2734"</a>
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
