<?
$subject_val = "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 08:14:53 2015" -->
<!-- isoreceived="20150626121453" -->
<!-- sent="Fri, 26 Jun 2015 12:14:51 +0000" -->
<!-- isosent="20150626121451" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="8523540E-5E46-463D-AE3E-CB5B3B5E08B2_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="558CE79A.8020304_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-26 08:14:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17553.php">Edgar Gabriel: "Re: [OMPI devel] Pruning from the 2.x branch"</a>
<li><strong>Previous message:</strong> <a href="17551.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "[OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>In reply to:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2015, at 10:48 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as far as i understand, the behavior depends on how plugins are enumerated and this is system dependent
</span><br>
<span class="quotelev1">&gt; (by default, Daniel got a crash, but i got none ...)
</span><br>
<span class="quotelev1">&gt; should we sort the plugins by name/library name so we do not fall into this kind of system dependent issues ?
</span><br>
<p>On one hand, this scheme makes the loading more deterministic and repeatable.
<br>
<p>On the other hand, it may mask bugs like this.
<br>
<p>I'm not sure which is better (or worse).  Mmmmph.
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
<li><strong>Next message:</strong> <a href="17553.php">Edgar Gabriel: "Re: [OMPI devel] Pruning from the 2.x branch"</a>
<li><strong>Previous message:</strong> <a href="17551.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "[OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>In reply to:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
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
