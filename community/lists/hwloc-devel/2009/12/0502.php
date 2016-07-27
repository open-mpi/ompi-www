<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 02:08:34 2009" -->
<!-- isoreceived="20091210070834" -->
<!-- sent="Thu, 10 Dec 2009 08:08:28 +0100" -->
<!-- isosent="20091210070828" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="4B209E6C.6020404_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B164FFA.2060602_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 02:08:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0503.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0501.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1456)"</a>
<li><strong>In reply to:</strong> <a href="0454.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0503.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0503.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin wrote:
<br>
<span class="quotelev2">&gt;&gt; I am looking at what we could add to the main API/helpers, here's what
</span><br>
<span class="quotelev2">&gt;&gt; could be useful:
</span><br>
<span class="quotelev2">&gt;&gt; 1) get_obj_under_by_type(topology, type, index, subtype, subindex)
</span><br>
<span class="quotelev2">&gt;&gt; returns for instance core 2 under socket 3. It's very easy
</span><br>
<span class="quotelev2">&gt;&gt; (get_obj_by_type+get_obj_inside_cpuset_by_type).
</span><br>
<span class="quotelev2">&gt;&gt; 2) Some people might want _under_under with 3 types/indexes. Not sure we
</span><br>
<span class="quotelev2">&gt;&gt; want it, or want to make it generic with arrays of types/indexes...
</span><br>
<span class="quotelev2">&gt;&gt; 3) Generic conversion routines between os_index and logical_index, like
</span><br>
<span class="quotelev2">&gt;&gt; get_obj_by_os_index(type, os_index) and get_os_index_by_type(type, index)
</span><br>
<span class="quotelev2">&gt;&gt; 4) Some kind of processor flag which tells us whether a physical proc
</span><br>
<span class="quotelev2">&gt;&gt; exists and is online
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any opinion about this? Should we drop the current plpa.h and just add
</span><br>
<span class="quotelev1">&gt; the above new inlines to helper.h? (with some documentation about
</span><br>
<span class="quotelev1">&gt; switching from PLPA into these new functions)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Since nobody commented and Jeff has already removed the PLPA tests from
<br>
trunk, I am going to add (1) and probably (3), and document (2) and (4)
<br>
in the PLPA doc section. Then I'll move most comments from plpa.h into
<br>
this doc section and remove plpa.h entirely.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0503.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0501.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1456)"</a>
<li><strong>In reply to:</strong> <a href="0454.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0503.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0503.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
