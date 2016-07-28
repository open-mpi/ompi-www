<?
$subject_val = "Re: [OMPI devel] RFC: opal_cache_line_size";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 16:21:33 2012" -->
<!-- isoreceived="20120423202133" -->
<!-- sent="Mon, 23 Apr 2012 16:21:27 -0400" -->
<!-- isosent="20120423202127" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: opal_cache_line_size" -->
<!-- id="F3F65832-F3B5-4D82-839E-7E6AD5421908_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2D25F9FE-28FA-4284-BEA9-A5AB5E234181_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: opal_cache_line_size<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 16:21:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10907.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Previous message:</strong> <a href="10905.php">Jeffrey Squyres: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10789.php">Jeffrey Squyres: "[OMPI devel] RFC: opal_cache_line_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10907.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="10907.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="10909.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No one replied to this RFC.  Does anyone have an opinion about it?
<br>
<p>I have attached a patch (including some debugging output) showing my initial implementation.  If no one objects by the end of this week, I'll commit to the trunk.
<br>
<p>Terry: please add this to the agenda tomorrow.
<br>
<p><p>On Mar 30, 2012, at 1:09 PM, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I was just recently reminded of a comment that is near the top of opal_init_util():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* JMS See note in runtime/opal.h -- this is temporary; to be
</span><br>
<span class="quotelev1">&gt;       replaced with real hwloc information soon (in trunk/v1.5 and
</span><br>
<span class="quotelev1">&gt;       beyond, only).  This *used* to be a #define, so it's important
</span><br>
<span class="quotelev1">&gt;       to define it very early.  */
</span><br>
<span class="quotelev1">&gt;    opal_cache_line_size = 128;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A few points:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. On my platforms, hwloc tells me that my cache line size is 64, not 128.  Probably not a tragedy, but...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I see opal_cache_line_size being used in a lot of BTL and PML initialization locations.  I see it being used in opal/class/free_list.*, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. I poked around with this yesterday to see if we could have hwloc initialize the opal_cache_line_size value.  Points to remember:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - we initialize the opal hwloc framework in opal_init(), but we do not load the local machine's architecture then (because it can be expensive, particularly if lots of MPI processes are all doing it simultaneously)
</span><br>
<span class="quotelev1">&gt; - instead, the local machine topology is discovered once by each orted (using hwloc) and then RML sent to each local MPI process, where it is locally loaded into each MPI proc's hwloc tree
</span><br>
<span class="quotelev1">&gt; - this happens during the orte_init() in ompi_mpi_init()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning: we can initialize the opal_cache_line_size in MPI processes during orte_init().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this acceptable to everyone?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, I can go ahead and code this up.  I would probably leave the initial value hard-coded to 128 (just in case something uses it before orte_init()), and then later during orte_init(), reset it to the smallest L1 cache size that hwloc finds on the machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10906/opal-cache-line-size.diff">opal-cache-line-size.diff</a>
</ul>
<!-- attachment="opal-cache-line-size.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10907.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Previous message:</strong> <a href="10905.php">Jeffrey Squyres: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10789.php">Jeffrey Squyres: "[OMPI devel] RFC: opal_cache_line_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10907.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="10907.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="10909.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
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
