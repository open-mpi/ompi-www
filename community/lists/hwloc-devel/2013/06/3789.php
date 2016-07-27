<?
$subject_val = "Re: [hwloc-devel] First plugin namespace issue report";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 12:55:51 2013" -->
<!-- isoreceived="20130604165551" -->
<!-- sent="Tue, 04 Jun 2013 18:55:45 +0200" -->
<!-- isosent="20130604165545" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] First plugin namespace issue report" -->
<!-- id="51AE1C11.3080203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F659710_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-06-04 12:55:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3790.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>Previous message:</strong> <a href="3788.php">David Beer: "Re: [hwloc-devel] Move to git?"</a>
<li><strong>In reply to:</strong> <a href="3785.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3792.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3792.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/06/2013 14:34, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jun 4, 2013, at 5:11 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) custom test with ltdl: The program just silently fails to load hwloc
</span><br>
<span class="quotelev2">&gt;&gt; symbols. Equivalent to passing the topology flag above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One option might be to try to lt_dlsym one of the hwloc symbols that you know you'll need in the plugin (or any public hwloc symbol, for that matter).  If ltdl_sym gets NULL back for the hwloc global symbol, then the plugin should disqualify itself and have itself unloaded (perhaps with some way of reporting what/why it did that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>lt_dlsym doesn't seem to accept special handles such as RTLD_DEFAULT
<br>
like dlsym does, and we don't have a handle on hwloc. I don't see how to
<br>
do that with lt_dlsym?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3790.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>Previous message:</strong> <a href="3788.php">David Beer: "Re: [hwloc-devel] Move to git?"</a>
<li><strong>In reply to:</strong> <a href="3785.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3792.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3792.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
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
