<?
$subject_val = "Re: [hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 03:37:58 2011" -->
<!-- isoreceived="20110218083758" -->
<!-- sent="Fri, 18 Feb 2011 09:37:52 +0100" -->
<!-- isosent="20110218083752" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] The de-C99 of hwloc" -->
<!-- id="4D5E2FE0.4080901_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="272D9159-7EBD-404B-98EF-AC8B014501E0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] The de-C99 of hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 03:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1961.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1959.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1962.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1962.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 17/02/2011 23:15, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; I took a whack at this on OS X and Linux.  I took the approach of only removing C99 from src/* -- this is the only part of the code base that embedding projects will care about.  Specifically: utils and tests are still C99-full.  
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Here's an additional patch (one top of yours) that removes c99 entirely
<br>
(I'd rather not have different coding standards in different
<br>
directories). Several fixes under utils, a single one under tests, one
<br>
in glibc-sched.h and we're good.
<br>
tests/ports/ however shows that more work in needed on other OSes.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1960/de-c99.more.diff">de-c99.more.diff</a>
</ul>
<!-- attachment="de-c99.more.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1961.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1959.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1962.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1962.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
