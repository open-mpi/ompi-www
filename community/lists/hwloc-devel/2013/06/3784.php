<?
$subject_val = "Re: [hwloc-devel] First plugin namespace issue report";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 08:22:39 2013" -->
<!-- isoreceived="20130604122239" -->
<!-- sent="Tue, 04 Jun 2013 14:22:33 +0200" -->
<!-- isosent="20130604122233" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] First plugin namespace issue report" -->
<!-- id="51ADDC09.3070904_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51ADD984.7010009_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] First plugin namespace issue report<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 08:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3785.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Previous message:</strong> <a href="3783.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>In reply to:</strong> <a href="3783.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3786.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3786.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/06/2013 14:11, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Adding topology flag to disable plugin may indeed be a nice workaround.
</span><br>
<span class="quotelev1">&gt; As long as the hwloc user doesn't need what's in plugin, things will
</span><br>
<span class="quotelev1">&gt; work fine. And I think things will work fine in the OpenCL case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I take that back. Topology flags come too late, plugins are loaded
<br>
during the first topology_init().
<br>
We're back to things like &quot;export HWLOC_PLUGINS_PATH=/none&quot;
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3785.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Previous message:</strong> <a href="3783.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>In reply to:</strong> <a href="3783.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3786.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3786.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
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
