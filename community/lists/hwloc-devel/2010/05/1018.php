<?
$subject_val = "Re: [hwloc-devel] Cacheline sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 17:00:17 2010" -->
<!-- isoreceived="20100525210017" -->
<!-- sent="Tue, 25 May 2010 23:00:12 +0200" -->
<!-- isosent="20100525210012" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cacheline sizes" -->
<!-- id="4BFC3A5C.9050307_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1867BD67-8FC9-4947-8092-AA2D2B989F71_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Cacheline sizes<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 17:00:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1019.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Previous message:</strong> <a href="1017.php">Samuel Thibault: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>In reply to:</strong> <a href="1016.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1019.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Reply:</strong> <a href="1019.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached patch implements a &quot;linesize&quot; cache attribute. You now get
<br>
things like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache #0 (8192KB line=64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #0 (256KB line=64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache #0 (32KB line=64)
<br>
<p><p><span class="quotelev2">&gt;&gt; Talking about caches, one thing we need to think about is Instruction
</span><br>
<span class="quotelev2">&gt;&gt; caches (we only gather Data and Unified caches on Linux so far).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Why is runtime icache information important? :)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Some people manually optimizing their kernels want this kind of info as
<br>
well as TLB size for instance...
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1018/0001-Add-linesize-cache-attribute.patch">0001-Add-linesize-cache-attribute.patch</a>
</ul>
<!-- attachment="0001-Add-linesize-cache-attribute.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1019.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Previous message:</strong> <a href="1017.php">Samuel Thibault: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>In reply to:</strong> <a href="1016.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1019.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Reply:</strong> <a href="1019.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
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
