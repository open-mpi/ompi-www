<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 15:22:48 2011" -->
<!-- isoreceived="20111209202248" -->
<!-- sent="Fri, 09 Dec 2011 21:22:40 +0100" -->
<!-- isosent="20111209202240" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="4EE26E10.80305_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="108DD19D-A572-4F96-8372-C02404A223EC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.1 and 1.4rc1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 15:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2594.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4032)"</a>
<li><strong>Previous message:</strong> <a href="2592.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2592.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2598.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2598.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/12/2011 13:47, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; 1. Will there ever be any differentiation between cache levels in hwloc_obj.type?  I ask because in OMPI, we found that the various counting routines were not helpful because they only search by *type*, not by (obj.type, obj.attr-&gt;cache.depth).  This was somewhat of a bummer; we basically ended up writing our own traversal helpers in OMPI because when searching for an OBJ_CACHE, we had to search on the tuple -- not just the type.
</span><br>
<p>What you need is just a way to convert OBJ_CACHE + cache.depth into a
<br>
hwloc level depth, and then use hwloc_get_obj_by_depth() and friends as
<br>
usual. This is actually included in ticket #41. However, ticket #41 is
<br>
blocked until #50 is sorted out because adding instruction caches may
<br>
mean that OBJ_CACHE + cache.depth does not always identify a unique
<br>
level anymore.
<br>
<p>In the meantime, I could easily write a helper that you guys would use
<br>
for OMPI for now.
<br>
<p>Adding new types OBJ_CACHE_L1... L3 may not help that much if we add
<br>
instruction caches. We'd need L1d L1i ... many possible types.
<br>
<p><span class="quotelev1">&gt; 2. It would be helpful to have a member in the obj that represents the logical AND of online_cpuset and allowed_cpuset.
</span><br>
<p>I am never sure about all this. I don't like all these cpusets. Samuel
<br>
will answer better :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2594.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4032)"</a>
<li><strong>Previous message:</strong> <a href="2592.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2592.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2598.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2598.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
