<?
$subject_val = "Re: [OMPI devel] RFC: opal_cache_line_size";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 17:04:33 2012" -->
<!-- isoreceived="20120423210433" -->
<!-- sent="Mon, 23 Apr 2012 17:04:29 -0400" -->
<!-- isosent="20120423210429" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: opal_cache_line_size" -->
<!-- id="CAHwLALP4_epdJ_kXEKFWAjJTiysWfVd=n+t_wnj=L5D0jzPwtg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F3F65832-F3B5-4D82-839E-7E6AD5421908_at_cisco.com" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 17:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10910.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Previous message:</strong> <a href="10908.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>In reply to:</strong> <a href="10906.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10911.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="10911.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 23, 2012 at 4:21 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; No one replied to this RFC. &#160;Does anyone have an opinion about it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached a patch (including some debugging output) showing my initial implementation. &#160;If no one objects by the end of this week, I'll commit to the trunk.
</span><br>
<p>I have a naive question - why do we need to find the cacheline size of
<br>
the L1? If it is to avoid cacheline ping-pong, shouldn't we set
<br>
&quot;opal_cache_line_size&quot; to at least the line size of the L2?
<br>
<p>I am not a cache coherency expert (so correct me if I am wrong) - I
<br>
think most of the modern processors keep track of memory ownership (in
<br>
the MOSI or MOESI protocols) by the L2 line size. So if L1 line size
<br>
is smaller than L2 line size, then we will still get cache line ping
<br>
pong effect in those processors.
<br>
<p>I quickly googled and found that in modern AMD &amp; Intel processors, L1
<br>
line size is same as the L2 line size, and same is true for K
<br>
computer's SPARC64 VIIIfx.
<br>
<p>However, Itanium has L1 line size = 32 bytes, L2 line size = 64 bytes.
<br>
And it's the L2 that interfaces the bus logic:
<br>
<p><a href="http://www.owchallie.com/systems/cache-itanium.php">http://www.owchallie.com/systems/cache-itanium.php</a>
<br>
<p>So if we dirty an L1 cache line, the cache coherency logic would mark
<br>
the whole 64-byte L2 line as dirty (Modified). Thus if another
<br>
thread/processor owns a seperate L1 that is next to the first line and
<br>
thus shares the L2 line, we would still get false sharing...
<br>
<p>Rayson
<br>
<p>=================================
<br>
Open Grid Scheduler / Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry: please add this to the agenda tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2012, at 1:09 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was just recently reminded of a comment that is near the top of opal_init_util():
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;/* JMS See note in runtime/opal.h -- this is temporary; to be
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; replaced with real hwloc information soon (in trunk/v1.5 and
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; beyond, only). &#160;This *used* to be a #define, so it's important
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; to define it very early. &#160;*/
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;opal_cache_line_size = 128;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A few points:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. On my platforms, hwloc tells me that my cache line size is 64, not 128. &#160;Probably not a tragedy, but...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. I see opal_cache_line_size being used in a lot of BTL and PML initialization locations. &#160;I see it being used in opal/class/free_list.*, too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. I poked around with this yesterday to see if we could have hwloc initialize the opal_cache_line_size value. &#160;Points to remember:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - we initialize the opal hwloc framework in opal_init(), but we do not load the local machine's architecture then (because it can be expensive, particularly if lots of MPI processes are all doing it simultaneously)
</span><br>
<span class="quotelev2">&gt;&gt; - instead, the local machine topology is discovered once by each orted (using hwloc) and then RML sent to each local MPI process, where it is locally loaded into each MPI proc's hwloc tree
</span><br>
<span class="quotelev2">&gt;&gt; - this happens during the orte_init() in ompi_mpi_init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Meaning: we can initialize the opal_cache_line_size in MPI processes during orte_init().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this acceptable to everyone?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, I can go ahead and code this up. &#160;I would probably leave the initial value hard-coded to 128 (just in case something uses it before orte_init()), and then later during orte_init(), reset it to the smallest L1 cache size that hwloc finds on the machine.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p><pre>
-- 
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10910.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Previous message:</strong> <a href="10908.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>In reply to:</strong> <a href="10906.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10911.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="10911.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
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
