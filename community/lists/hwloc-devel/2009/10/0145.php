<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 10:07:55 2009" -->
<!-- isoreceived="20091005140755" -->
<!-- sent="Mon, 5 Oct 2009 16:07:49 +0200" -->
<!-- isosent="20091005140749" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="F3486902-2749-4F29-A5CE-B9CBCFBEDBFD_at_gmx.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091005133117.GI26609_at_const" -->
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
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-05 10:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0143.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0144.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5-ott-09, at 15:31, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Fawzi Mohamed, le Mon 05 Oct 2009 15:23:23 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; well you assume you have a single copy of the whole system structure,
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure that would be the case, and while the memory per core  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; growing, the memory per thread is not growing much,... but anyway  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; is not the important point...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Threads share the cache levels, so it would be useless to keep a copy
</span><br>
<span class="quotelev1">&gt; per thread. A copy per NUMA node should be far enough.
</span><br>
<p>well thread don't necessarily share caches, but you are right, one  
<br>
copy per NUMA node should be enough, if someone uses one process per  
<br>
thread then it is its fault... ;)
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0143.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0144.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
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
