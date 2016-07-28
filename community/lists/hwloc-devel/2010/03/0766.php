<?
$subject_val = "Re: [hwloc-devel] Proposal for cpuset API change";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 15:26:51 2010" -->
<!-- isoreceived="20100317192651" -->
<!-- sent="Wed, 17 Mar 2010 20:26:46 +0100" -->
<!-- isosent="20100317192646" -->
<!-- name="Brice GOGLIN" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Proposal for cpuset API change" -->
<!-- id="c50fc5b2282b0eb20dc3004fed71889d.squirrel_at_webmail-ral.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="36ca99e91003171200n26754cf8id1b1d3759daec13c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Proposal for cpuset API change<br>
<strong>From:</strong> Brice GOGLIN (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 15:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0767.php">Bert Wesarg: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>Previous message:</strong> <a href="0765.php">Bert Wesarg: "[hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>In reply to:</strong> <a href="0765.php">Bert Wesarg: "[hwloc-devel] Proposal for cpuset API change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0767.php">Bert Wesarg: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>Reply:</strong> <a href="0767.php">Bert Wesarg: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it is necessary to make a small change to the cpuset API. The
</span><br>
<span class="quotelev1">&gt; current API was made fit to allow dynamically sized cpusets. I.e. an
</span><br>
<span class="quotelev1">&gt; alloc/modify/free style life cycle. The problem I see is, from where
</span><br>
<span class="quotelev1">&gt; should hwloc_cpuset_alloc() get the size of the cpuset? The solution I
</span><br>
<span class="quotelev1">&gt; see is to pass the hwloc_topology_t into hwloc_cpuset_alloc(), so that
</span><br>
<span class="quotelev1">&gt; the information comes from there [1].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't looked through the whole tree, if a hwloc_topology_t is
</span><br>
<span class="quotelev1">&gt; always available at places where hwloc_cpuset_alloc() is called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<p>There's no need to hardwire any cpuset size at all, even if it comes from
<br>
the OS instead of from hwloc/config.h. Some students are working on
<br>
allocating a single unsigned long first and then dynamically reallocate
<br>
more whenever you try to set a bit with a very large index (and possibly
<br>
use some sparse allocation model too). I expect the code to be ready for
<br>
1.1. Until then, statically allocating 1024 should be enough is the vast
<br>
majority of cases.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0767.php">Bert Wesarg: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>Previous message:</strong> <a href="0765.php">Bert Wesarg: "[hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>In reply to:</strong> <a href="0765.php">Bert Wesarg: "[hwloc-devel] Proposal for cpuset API change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0767.php">Bert Wesarg: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>Reply:</strong> <a href="0767.php">Bert Wesarg: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
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
