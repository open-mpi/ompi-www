<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 10:35:27 2009" -->
<!-- isoreceived="20091005143527" -->
<!-- sent="Mon, 05 Oct 2009 16:34:18 +0200" -->
<!-- isosent="20091005143418" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="4ACA03EA.5020804_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="057315A6-9175-49E7-BDAB-0B1224E84A67_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] release status<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-05 10:34:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0148.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0146.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0146.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0148.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0148.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed wrote:
<br>
<span class="quotelev1">&gt; ok as I said to me it is not so strange (maybe init/clear would be a
</span><br>
<span class="quotelev1">&gt; better name though), but indeed it might confuse people, so probably
</span><br>
<span class="quotelev1">&gt; better avoid it.
</span><br>
<span class="quotelev1">&gt; Force the user to to the right thing is better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the question remains, opaque + functions, or public...
</span><br>
<p>I haven't had time to actually fully implement this yet, but my last
<br>
plan was opaque pointer + functions such as:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_t hwloc_cpuset_alloc(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void hwloc_cpuset_destroy(hwloc_cpuset_t cpuset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_t hwloc_cpuset_copy(hwloc_cpuset_t cpuset);
<br>
with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;typedef struct hwloc_cpuset_s * hwloc_cpuset_t;
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0148.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0146.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0146.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0148.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0148.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
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
