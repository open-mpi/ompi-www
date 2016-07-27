<?
$subject_val = "Re: [hwloc-devel] XML string filtering";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 09:05:57 2012" -->
<!-- isoreceived="20120706130557" -->
<!-- sent="Fri, 6 Jul 2012 10:05:47 -0300" -->
<!-- isosent="20120706130547" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] XML string filtering" -->
<!-- id="20120706130547.GF4655_at_type.eduroam.ufrgs.br" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FF6DEEF.4050706_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] XML string filtering<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 09:05:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3149.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4"</a>
<li><strong>Previous message:</strong> <a href="3147.php">Jeff Squyres: "Re: [hwloc-devel] XML string filtering"</a>
<li><strong>In reply to:</strong> <a href="3146.php">Brice Goglin: "[hwloc-devel] XML string filtering"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Fri 06 Jul 2012 14:50:46 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I could just use isprint() to check every character
</span><br>
<span class="quotelev1">&gt; before export and only keep those between 32 and 127.
</span><br>
<p>Why not just taking 32-126?  I don't see what isprint will bring.
<br>
<p><span class="quotelev1">&gt; But what about \n,
</span><br>
<span class="quotelev1">&gt; \t, \r, \f which are before ? Do we want to allow them?
</span><br>
<p>I'd say so if they are allowed in the xml standard (I don't know whether
<br>
they are).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3149.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4"</a>
<li><strong>Previous message:</strong> <a href="3147.php">Jeff Squyres: "Re: [hwloc-devel] XML string filtering"</a>
<li><strong>In reply to:</strong> <a href="3146.php">Brice Goglin: "[hwloc-devel] XML string filtering"</a>
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
