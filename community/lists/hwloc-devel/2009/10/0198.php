<?
$subject_val = "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 10:13:08 2009" -->
<!-- isoreceived="20091021141308" -->
<!-- sent="Wed, 21 Oct 2009 10:13:03 -0400" -->
<!-- isosent="20091021141303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ibverbs -&amp;gt; not just infiniband!" -->
<!-- id="49F78B24-E1CC-4F2D-9D7D-92956187EFC1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ADF0515.80005_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] ibverbs -&gt; not just infiniband!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 10:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0197.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0222.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, finally done.  It was somewhat painful because I also discovered  
<br>
that doxygen man pages weren't being generated for openfabrics-verbs.h  
<br>
and linux.h properly, so I fixed that as well.
<br>
<p>Note that I also renamed hwloc_ibverbs_get_device_cpuset(),  
<br>
hwloc_ibv_get_device_cpuset() -- might as well use the same prefix as  
<br>
the verbs API.  It'll be recognizable to verbs programmers that way.
<br>
<p><p>On Oct 21, 2009, at 8:56 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 21, 2009, at 8:41 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Or, we could install it only on Linux for now? (and document  
</span><br>
<span class="quotelev1">&gt; this in
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; doxyfile)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Actually, a colleague from Sun tells me that Sun's verbs stack is
</span><br>
<span class="quotelev2">&gt; &gt; available.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What should we return from hwloc_ibv_get_device_cpuset() if not  
</span><br>
<span class="quotelev1">&gt; #ifdef
</span><br>
<span class="quotelev2">&gt; &gt; LINUX?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd say a full cpuset.
</span><br>
<span class="quotelev1">&gt; Or the full-system cpuset:
</span><br>
<span class="quotelev1">&gt;    return hwloc_cpuset_dup(hwloc_get_system_obj(topology)-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; If the latter we'll need to add a topology parameter to
</span><br>
<span class="quotelev1">&gt; hwloc_ibv_get_device_cpuset()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0197.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0222.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
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
