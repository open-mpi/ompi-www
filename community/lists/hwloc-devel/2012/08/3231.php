<?
$subject_val = "Re: [hwloc-devel] merging the valarray branch (with a better name)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 19:22:28 2012" -->
<!-- isoreceived="20120824232228" -->
<!-- sent="Sat, 25 Aug 2012 01:22:18 +0200" -->
<!-- isosent="20120824232218" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging the valarray branch (with a better name)" -->
<!-- id="d54c7f42-8e5b-435a-8974-576b07cf7c83_at_email.android.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="503805C6.6060103_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] merging the valarray branch (with a better name)<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 19:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3232.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3232.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;If so, there's no need for topology-wide
</span><br>
<span class="quotelev1">&gt;hwloc_set_topology_userdata_blob_callback(), the application gives the
</span><br>
<span class="quotelev1">&gt;right callbacks when it adds the (key,data) pair.
</span><br>
<p>Forget about this last sentence. We cannot set per object import callback in advance since objects are not imported yet. The import callback has to be topology-wide. It'll be able to look at the object attributes if different kinds of blobs may have been exported for different objects
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3232.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3232.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
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
