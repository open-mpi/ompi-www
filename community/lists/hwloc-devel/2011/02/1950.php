<?
$subject_val = "Re: [hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 17:32:57 2011" -->
<!-- isoreceived="20110217223257" -->
<!-- sent="Thu, 17 Feb 2011 23:32:51 +0100" -->
<!-- isosent="20110217223251" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] The de-C99 of hwloc" -->
<!-- id="4D5DA213.4010904_at_inria.fr" -->
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
<strong>Date:</strong> 2011-02-17 17:32:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1951.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1949.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1952.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1952.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
<span class="quotelev1">&gt; I put up a bitbucket with the result (against the SVN trunk):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://bitbucket.org/jsquyres/hwloc-de-c99">https://bitbucket.org/jsquyres/hwloc-de-c99</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also attach an SVN diff against the trunk so that you can see the whole thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I didn't check everything in detail, but at least I didn't see anything
<br>
totally wrong :)
<br>
<p>Minor comments:
<br>
* do you really need to check if ptr != NULL before freeing ptr ? my
<br>
free accepts NULL ptr
<br>
* I would rather assert(0) when type is OBJ_TYPE_MAX in switches
<br>
* note that backporting to 1.1 would conflict in the distance stuff
<br>
(some code was moved from src/topology.c to distance.c, and types were
<br>
changed from unsigned to float)
<br>
<p>What's your plan now? Apply this to hwloc trunk, don't backport in hwloc
<br>
1.1, but backport to OMPI's copy of hwloc 1.1 to get some wide testing?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1951.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1949.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1952.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1952.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
