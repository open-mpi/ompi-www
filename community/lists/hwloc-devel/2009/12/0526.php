<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1466";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 09:15:55 2009" -->
<!-- isoreceived="20091216141555" -->
<!-- sent="Wed, 16 Dec 2009 15:15:50 +0100" -->
<!-- isosent="20091216141550" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1466" -->
<!-- id="4B28EB96.6070605_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200912161322.nBGDMHQh029637_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1466<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 09:15:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0527.php">Jeff Squyres: "Re: [hwloc-devel] more embedded"</a>
<li><strong>Previous message:</strong> <a href="0525.php">Samuel Thibault: "Re: [hwloc-devel] more embedded"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jsquyres_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Add bullet about the compar -&gt; compare rename
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/NEWS |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;    1 files changed, 3 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/NEWS
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/NEWS	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/NEWS	2009-12-16 08:22:17 EST (Wed, 16 Dec 2009)
</span><br>
<span class="quotelev1">&gt; @@ -17,6 +17,9 @@
</span><br>
<span class="quotelev1">&gt;  Version 1.0.0
</span><br>
<span class="quotelev1">&gt;  -------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +* Renamed hwloc_cpuset_compar_first() and hwloc_cpuset_compar() to
</span><br>
<span class="quotelev1">&gt; +  hwloc_cpuset_compare_first() and hwloc_cpuset_compare(),
</span><br>
<span class="quotelev1">&gt; +  respectively (i.e., added the missing &quot;e&quot;).
</span><br>
<span class="quotelev1">&gt;  * Add hwloc_topology_export_xml() to export the topology in a XML file.
</span><br>
<span class="quotelev1">&gt;  * Add hwloc_topology_get_support() to retrieve the supported features
</span><br>
<span class="quotelev1">&gt;    for the current topologt context.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I suspect that the NEWS is already severely outdated anyway since we
<br>
added/renamed many functions. We'll have to svn diff before releasing.
<br>
NEWS might end up saying &quot;the API has changed a lot, try to compile and
<br>
fix your stuff&quot; :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0527.php">Jeff Squyres: "Re: [hwloc-devel] more embedded"</a>
<li><strong>Previous message:</strong> <a href="0525.php">Samuel Thibault: "Re: [hwloc-devel] more embedded"</a>
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
