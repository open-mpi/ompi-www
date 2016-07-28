<?
$subject_val = "Re: [hwloc-devel] ship valgrind suppressions?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 23 13:32:30 2012" -->
<!-- isoreceived="20120223183230" -->
<!-- sent="Thu, 23 Feb 2012 13:32:25 -0500" -->
<!-- isosent="20120223183225" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ship valgrind suppressions?" -->
<!-- id="20C24F46-8B79-42ED-BDBE-16B4FBC243A1_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F46853A.6090402_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] ship valgrind suppressions?<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-23 13:32:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2898.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4341)"</a>
<li><strong>Previous message:</strong> <a href="2896.php">Brice Goglin: "[hwloc-devel] ship valgrind suppressions?"</a>
<li><strong>In reply to:</strong> <a href="2896.php">Brice Goglin: "[hwloc-devel] ship valgrind suppressions?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, let's ship it in the tarball.
<br>
<p>On Feb 23, 2012, at 1:28 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;make check&quot; doesn't report any single memory leak under valgrind
</span><br>
<span class="quotelev1">&gt; anymore in trunk... except those from external libs such as libpci and
</span><br>
<span class="quotelev1">&gt; libxml. I created the attached suppressions file to hide them when
</span><br>
<span class="quotelev1">&gt; valgrind'ing hwloc programs. Just pass --suppressions=hwloc.supp to
</span><br>
<span class="quotelev1">&gt; valgrind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the record, the reason we need this is:
</span><br>
<span class="quotelev1">&gt; * libpci and libxml use libz, which initializes global state without
</span><br>
<span class="quotelev1">&gt; ever freeing it.
</span><br>
<span class="quotelev1">&gt; * libxml only frees it global state in xmlCleanupParser(), but we
</span><br>
<span class="quotelev1">&gt; stopped calling it in hwloc because the program may still be using
</span><br>
<span class="quotelev1">&gt; libxml when hwloc stops using it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should we ship this suppressions file in the tarball? At least having it
</span><br>
<span class="quotelev1">&gt; somewhere online may be a good idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;hwloc.supp&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="2898.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4341)"</a>
<li><strong>Previous message:</strong> <a href="2896.php">Brice Goglin: "[hwloc-devel] ship valgrind suppressions?"</a>
<li><strong>In reply to:</strong> <a href="2896.php">Brice Goglin: "[hwloc-devel] ship valgrind suppressions?"</a>
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
