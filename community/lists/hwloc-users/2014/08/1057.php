<?
$subject_val = "Re: [hwloc-users] setting memory bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 12:44:08 2014" -->
<!-- isoreceived="20140819164408" -->
<!-- sent="Tue, 19 Aug 2014 18:44:05 +0200" -->
<!-- isosent="20140819164405" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] setting memory bindings" -->
<!-- id="53F37ED5.3080607_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D018D99D.16697%rta_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] setting memory bindings<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-19 12:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1058.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1056.php">Aulwes, Rob: "[hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1056.php">Aulwes, Rob: "[hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1058.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1058.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 19/08/2014 18:38, Aulwes, Rob a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to write a custom C++ allocator that wraps hwloc calls.
</span><br>
<span class="quotelev1">&gt;  I've tried using various hwloc_alloc* functions to set the memory
</span><br>
<span class="quotelev1">&gt; bindings, but when I call hwloc_get_area_membind_nodeset to verify, I
</span><br>
<span class="quotelev1">&gt; don't get the same policy I passed to alloc.  Are there example codes
</span><br>
<span class="quotelev1">&gt; that show how to set memory bindings?  More generally, are there
</span><br>
<span class="quotelev1">&gt; example codes that help illustrate how to use hwloc API?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,Rob Aulwes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello
<br>
<p>Your problem may be related to the fact that same policies are identical
<br>
on some operating systems. For instance DEFAULT and FIRST_TOUCH are
<br>
often identical. What did you set and what did you get back?
<br>
<p>There are many examples in the tests subdirectory, in doc/hwloc-helloc.c
<br>
and in hwloc/helper.h and hwloc/inline.h, but I don't think we have much
<br>
about the membind API, and this API isn't a easy one unfortunately
<br>
(given the variety of existing policies and operating systems).
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1058.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1056.php">Aulwes, Rob: "[hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1056.php">Aulwes, Rob: "[hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1058.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1058.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
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
