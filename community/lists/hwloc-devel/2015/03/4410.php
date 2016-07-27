<?
$subject_val = "[hwloc-devel] Lhwloc1 duplicate symbol issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 16:00:43 2015" -->
<!-- isoreceived="20150325200043" -->
<!-- sent="Wed, 25 Mar 2015 20:00:40 +0000" -->
<!-- isosent="20150325200040" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Lhwloc1 duplicate symbol issue" -->
<!-- id="173CB330-B2BF-4BAE-AF1F-CF54D8733920_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Lhwloc1 duplicate symbol issue<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 16:00:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4411.php">Brice Goglin: "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>Previous message:</strong> <a href="4409.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-467-g1bb7b7e)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4411.php">Brice Goglin: "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>Reply:</strong> <a href="4411.php">Brice Goglin: "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has come up in multiple scenarios recently: when compiling OMPI (which contains hwloc 1.9.1), you get a linker error complaining about a duplicate symbol &quot;Lhwloc1&quot;.
<br>
<p>Peter (CC'ed) was looking into this, but it came up again today with Nathan (also CC'ed).  He did some experiments with hwloc itself (outside of OMPI) before Peter was able to, and determined the following:
<br>
<p>- gcc 5.0 on OS X Yosemitie, compiling with -m32
<br>
- hwloc-1.9.1 tag in git: compile fails with Lhwloc1 dup symbol
<br>
- hwloc-1.10 tag in git: works fine
<br>
- master tag in git: works fine
<br>
<p>My question is: have you see this Lhwloc1 dup symbol issue before?
<br>
<p>I ask because on OMPI master, we can just upgrade to hwloc 1.10.  But in OMPI v1.8.x, it's less attractive to upgrade -- it would be cool if there was a simple fix that we could backport/patch the hwloc 1.9.1 in OMPI 1.8.x with the fix.
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
<li><strong>Next message:</strong> <a href="4411.php">Brice Goglin: "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>Previous message:</strong> <a href="4409.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-467-g1bb7b7e)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4411.php">Brice Goglin: "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>Reply:</strong> <a href="4411.php">Brice Goglin: "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
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
