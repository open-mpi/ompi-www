<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 10:08:26 2011" -->
<!-- isoreceived="20110616140826" -->
<!-- sent="Thu, 16 Jun 2011 16:08:20 +0200" -->
<!-- isosent="20110616140820" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514" -->
<!-- id="4DFA0E54.9070007_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201106161212.p5GCCDZn015210_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-16 10:08:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2208.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514"</a>
<li><strong>Previous message:</strong> <a href="2206.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3512)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2208.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514"</a>
<li><strong>Maybe reply:</strong> <a href="2208.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What kind of machine/architecture is this?
<br>
<p>Brice
<br>
<p><p><p>Le 16/06/2011 14:12, sthibaul_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2011-06-16 08:12:13 EDT (Thu, 16 Jun 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 3514
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3514">https://svn.open-mpi.org/trac/hwloc/changeset/3514</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add z11 &quot;book&quot; support
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology-linux.c |    23 ++++++++++++++++++++---                 
</span><br>
<span class="quotelev1">&gt;    1 files changed, 20 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/src/topology-linux.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/src/topology-linux.c	2011-06-16 08:12:13 EDT (Thu, 16 Jun 2011)
</span><br>
<span class="quotelev1">&gt; @@ -2402,9 +2402,9 @@
</span><br>
<span class="quotelev1">&gt;    caches_added = 0;
</span><br>
<span class="quotelev1">&gt;    hwloc_bitmap_foreach_begin(i, cpuset)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; -      struct hwloc_obj *sock, *core, *thread;
</span><br>
<span class="quotelev1">&gt; -      hwloc_bitmap_t socketset, coreset, threadset, savedcoreset;
</span><br>
<span class="quotelev1">&gt; -      unsigned mysocketid, mycoreid;
</span><br>
<span class="quotelev1">&gt; +      struct hwloc_obj *sock, *core, *book, *thread;
</span><br>
<span class="quotelev1">&gt; +      hwloc_bitmap_t socketset, coreset, bookset, threadset, savedcoreset;
</span><br>
<span class="quotelev1">&gt; +      unsigned mysocketid, mycoreid, mybookid;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;        /* look at the socket */
</span><br>
<span class="quotelev1">&gt;        mysocketid = 0; /* shut-up the compiler */
</span><br>
<span class="quotelev1">&gt; @@ -2441,6 +2441,23 @@
</span><br>
<span class="quotelev1">&gt;          coreset = NULL; /* don't free it */
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +      /* look at the books */
</span><br>
<span class="quotelev1">&gt; +      mybookid = 0; /* shut-up the compiler */
</span><br>
<span class="quotelev1">&gt; +      sprintf(str, &quot;%s/cpu%d/topology/book_id&quot;, path, i);
</span><br>
<span class="quotelev1">&gt; +      if (hwloc_parse_sysfs_unsigned(str, &amp;mybookid, topology-&gt;backend_params.sysfs.root_fd) == 0) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        sprintf(str, &quot;%s/cpu%d/topology/book_siblings&quot;, path, i);
</span><br>
<span class="quotelev1">&gt; +        bookset = hwloc_parse_cpumap(str, topology-&gt;backend_params.sysfs.root_fd);
</span><br>
<span class="quotelev1">&gt; +        if (bookset &amp;&amp; hwloc_bitmap_first(bookset) == i) {
</span><br>
<span class="quotelev1">&gt; +          book = hwloc_alloc_setup_object(HWLOC_OBJ_GROUP, mybookid);
</span><br>
<span class="quotelev1">&gt; +          book-&gt;cpuset = bookset;
</span><br>
<span class="quotelev1">&gt; +          hwloc_debug_1arg_bitmap(&quot;os book %u has cpuset %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                       mybookid, bookset);
</span><br>
<span class="quotelev1">&gt; +          hwloc_insert_object_by_cpuset(topology, book);
</span><br>
<span class="quotelev1">&gt; +          bookset = NULL; /* don't free it */
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;        /* look at the thread */
</span><br>
<span class="quotelev1">&gt;        threadset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;        hwloc_bitmap_only(threadset, i);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2208.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514"</a>
<li><strong>Previous message:</strong> <a href="2206.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3512)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2208.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514"</a>
<li><strong>Maybe reply:</strong> <a href="2208.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514"</a>
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
