<?
$subject_val = "[hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 17:15:05 2011" -->
<!-- isoreceived="20110217221505" -->
<!-- sent="Thu, 17 Feb 2011 17:15:00 -0500" -->
<!-- isosent="20110217221500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] The de-C99 of hwloc" -->
<!-- id="272D9159-7EBD-404B-98EF-AC8B014501E0_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] The de-C99 of hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 17:15:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1949.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1947.php">Samuel Thibault: "Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1949.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1949.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1950.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1954.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1956.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1960.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1961.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1968.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1969.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1973.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I took a whack at this on OS X and Linux.  I took the approach of only removing C99 from src/* -- this is the only part of the code base that embedding projects will care about.  Specifically: utils and tests are still C99-full.  
<br>
<p>I put up a bitbucket with the result (against the SVN trunk):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/hwloc-de-c99">https://bitbucket.org/jsquyres/hwloc-de-c99</a>
<br>
<p>I also attach an SVN diff against the trunk so that you can see the whole thing.
<br>
<p>Comments?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1948/de-c99.diff">de-c99.diff</a>
</ul>
<!-- attachment="de-c99.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1949.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1947.php">Samuel Thibault: "Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1949.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1949.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1950.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1954.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1956.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1960.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1961.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1968.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1969.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="1973.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
