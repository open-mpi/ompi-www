<?
$subject_val = "Re: [hwloc-devel] First plugin namespace issue report";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 23:38:53 2013" -->
<!-- isoreceived="20130605033853" -->
<!-- sent="Wed, 5 Jun 2013 03:38:48 +0000" -->
<!-- isosent="20130605033848" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] First plugin namespace issue report" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F65BDDE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51AE1C11.3080203_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 23:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3793.php">Brice Goglin: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>Previous message:</strong> <a href="3791.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>In reply to:</strong> <a href="3789.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3794.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3794.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2013, at 9:55 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; One option might be to try to lt_dlsym one of the hwloc symbols that you know you'll need in the plugin (or any public hwloc symbol, for that matter).  If ltdl_sym gets NULL back for the hwloc global symbol, then the plugin should disqualify itself and have itself unloaded (perhaps with some way of reporting what/why it did that).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lt_dlsym doesn't seem to accept special handles such as RTLD_DEFAULT
</span><br>
<span class="quotelev1">&gt; like dlsym does, and we don't have a handle on hwloc. I don't see how to
</span><br>
<span class="quotelev1">&gt; do that with lt_dlsym?
</span><br>
<p><p>Can we lt_dlopen(NULL) to get a handle to this process?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3793.php">Brice Goglin: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>Previous message:</strong> <a href="3791.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>In reply to:</strong> <a href="3789.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3794.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Reply:</strong> <a href="3794.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
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
