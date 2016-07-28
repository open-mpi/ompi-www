<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 10:35:49 2010" -->
<!-- isoreceived="20100312153549" -->
<!-- sent="Fri, 12 Mar 2010 07:35:44 -0800" -->
<!-- isosent="20100312153544" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="B964A3D0-7742-49F2-B270-800DD2E7EAC6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B99DB55.7050205_at_inria.fr" -->
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
<strong>Date:</strong> 2010-03-12 10:35:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0751.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0749.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0744.php">Brice Goglin: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0751.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0751.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2010, at 10:12 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I guess we a thread-safety section in hwloc.doxy to document that all
</span><br>
<span class="quotelev1">&gt; topology modifiers (most of hwloc_topology_* functions, not all of them)
</span><br>
<span class="quotelev1">&gt; cannot run concurrently.
</span><br>
<p>To support that, do we need to make internal variables and fields be volatile?
<br>
<p>If we say that applications need to provide their own synchronization between readers and writers, atomic writes shouldn't be an issue, right?
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
<li><strong>Next message:</strong> <a href="0751.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0749.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0744.php">Brice Goglin: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0751.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0751.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
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
