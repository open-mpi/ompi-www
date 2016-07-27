<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 11:25:16 2010" -->
<!-- isoreceived="20100312162516" -->
<!-- sent="Fri, 12 Mar 2010 08:25:11 -0800" -->
<!-- isosent="20100312162511" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="7FB9E31F-9FA7-46F5-A306-E8CE5224AE9E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100312161623.GW5044_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] thread safety<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 11:25:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0755.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0753.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0753.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0755.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0755.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12, 2010, at 8:16 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; With a full memory barrier, you do not have any issue.
</span><br>
<p>So we're saying that the only way to use hwloc safely with multiple different thread readers and writers is to do a full memory barrier across the entire machine?  That seems like a big hammer, and can have performance implications on other parts of the system that you aren't even using.
<br>
<p>Is it sufficient, for example, for the app to mark the entire topology struct instance volatile?  I.e.:
<br>
<p>&nbsp;&nbsp;&nbsp;volatile hwloc_topology_t topology;
<br>
<p>Then every field in there is volatile, right?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0755.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0753.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0753.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0755.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0755.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
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
