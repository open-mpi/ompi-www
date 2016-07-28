<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 05:39:14 2010" -->
<!-- isoreceived="20100630093914" -->
<!-- sent="Wed, 30 Jun 2010 11:39:09 +0200" -->
<!-- isosent="20100630093909" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270" -->
<!-- id="20100630093909.GB5222_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C2AF696.5010909_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 05:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1119.php">Brice Goglin: "[hwloc-devel] standalone-like build inside other projects"</a>
<li><strong>Previous message:</strong> <a href="1117.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<li><strong>In reply to:</strong> <a href="1117.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 30 Jun 2010 09:47:34 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I reverted a commit that was slightly improving Power7 support with old kernels
</span><br>
<span class="quotelev1">&gt; but it was also preventing sockets with unknown id from appearing with recent
</span><br>
<span class="quotelev1">&gt; kernels. The P7 topology is properly detected for real now. With old kernels,
</span><br>
<span class="quotelev1">&gt; the topology will be slightly more broken, but it will never be complete there
</span><br>
<span class="quotelev1">&gt; anyway.
</span><br>
<p>Ah, I hadn't noticed that core_siblings was not trivial.
<br>
<p>I've checked cputopology.txt again, core_siblings is indeed documented
<br>
as always being cores for the same packages, so this seems right.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1119.php">Brice Goglin: "[hwloc-devel] standalone-like build inside other projects"</a>
<li><strong>Previous message:</strong> <a href="1117.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<li><strong>In reply to:</strong> <a href="1117.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
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
