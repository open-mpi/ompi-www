<?
$subject_val = "Re: [OMPI devel] RFC: opal_cache_line_size";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 17:53:40 2012" -->
<!-- isoreceived="20120423215340" -->
<!-- sent="Mon, 23 Apr 2012 17:53:42 -0400" -->
<!-- isosent="20120423215342" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: opal_cache_line_size" -->
<!-- id="995BA59B-115C-4612-B0D4-6FF48BAD3D91_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHwLALP4_epdJ_kXEKFWAjJTiysWfVd=n+t_wnj=L5D0jzPwtg_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 17:53:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10912.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Previous message:</strong> <a href="10910.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>In reply to:</strong> <a href="10909.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10912.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="10912.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess at the end is a trade-off between performance and space. What we wanted with this code is to avoid false sharing of cache lines between our data (internal header we add in from of elements in lists) and the content of the data (whatever is coming from the upper layer).
<br>
<p>If the header is smaller than a single L1 cache line you don't want to waste too much memory, even if this gives you one less cache line ping-pong for the first cache line in the user data. However, I did a quick grep and most of our headers are larger than a single line of cache (even Itanium L2) so I suppose that making opal_cache_line_size equal to the L2 cache line size will not be a too big waste of memory overall.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Apr 23, 2012, at 17:04 , Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Apr 23, 2012 at 4:21 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; No one replied to this RFC.  Does anyone have an opinion about it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have attached a patch (including some debugging output) showing my initial implementation.  If no one objects by the end of this week, I'll commit to the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a naive question - why do we need to find the cacheline size of
</span><br>
<span class="quotelev1">&gt; the L1? If it is to avoid cacheline ping-pong, shouldn't we set
</span><br>
<span class="quotelev1">&gt; &quot;opal_cache_line_size&quot; to at least the line size of the L2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not a cache coherency expert (so correct me if I am wrong) - I
</span><br>
<span class="quotelev1">&gt; think most of the modern processors keep track of memory ownership (in
</span><br>
<span class="quotelev1">&gt; the MOSI or MOESI protocols) by the L2 line size. So if L1 line size
</span><br>
<span class="quotelev1">&gt; is smaller than L2 line size, then we will still get cache line ping
</span><br>
<span class="quotelev1">&gt; pong effect in those processors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I quickly googled and found that in modern AMD &amp; Intel processors, L1
</span><br>
<span class="quotelev1">&gt; line size is same as the L2 line size, and same is true for K
</span><br>
<span class="quotelev1">&gt; computer's SPARC64 VIIIfx.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, Itanium has L1 line size = 32 bytes, L2 line size = 64 bytes.
</span><br>
<span class="quotelev1">&gt; And it's the L2 that interfaces the bus logic:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.owchallie.com/systems/cache-itanium.php">http://www.owchallie.com/systems/cache-itanium.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if we dirty an L1 cache line, the cache coherency logic would mark
</span><br>
<span class="quotelev1">&gt; the whole 64-byte L2 line as dirty (Modified). Thus if another
</span><br>
<span class="quotelev1">&gt; thread/processor owns a seperate L1 that is next to the first line and
</span><br>
<span class="quotelev1">&gt; thus shares the L2 line, we would still get false sharing...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev1">&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Terry: please add this to the agenda tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 30, 2012, at 1:09 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was just recently reminded of a comment that is near the top of opal_init_util():
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* JMS See note in runtime/opal.h -- this is temporary; to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       replaced with real hwloc information soon (in trunk/v1.5 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       beyond, only).  This *used* to be a #define, so it's important
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       to define it very early.  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_cache_line_size = 128;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A few points:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. On my platforms, hwloc tells me that my cache line size is 64, not 128.  Probably not a tragedy, but...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. I see opal_cache_line_size being used in a lot of BTL and PML initialization locations.  I see it being used in opal/class/free_list.*, too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. I poked around with this yesterday to see if we could have hwloc initialize the opal_cache_line_size value.  Points to remember:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - we initialize the opal hwloc framework in opal_init(), but we do not load the local machine's architecture then (because it can be expensive, particularly if lots of MPI processes are all doing it simultaneously)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - instead, the local machine topology is discovered once by each orted (using hwloc) and then RML sent to each local MPI process, where it is locally loaded into each MPI proc's hwloc tree
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - this happens during the orte_init() in ompi_mpi_init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meaning: we can initialize the opal_cache_line_size in MPI processes during orte_init().
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this acceptable to everyone?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, I can go ahead and code this up.  I would probably leave the initial value hard-coded to 128 (just in case something uses it before orte_init()), and then later during orte_init(), reset it to the smallest L1 cache size that hwloc finds on the machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10912.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Previous message:</strong> <a href="10910.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>In reply to:</strong> <a href="10909.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10912.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="10912.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
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
