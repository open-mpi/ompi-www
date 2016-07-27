<?
$subject_val = "Re: [hwloc-devel] Support for solaris lgrp_affinity_set";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 19 11:31:14 2010" -->
<!-- isoreceived="20100819153114" -->
<!-- sent="Thu, 19 Aug 2010 17:31:08 +0200" -->
<!-- isosent="20100819153108" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Support for solaris lgrp_affinity_set" -->
<!-- id="20100819153108.GB5327_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C5C4242.2060507_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Support for solaris lgrp_affinity_set<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-19 11:31:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1269.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2418)"</a>
<li><strong>Previous message:</strong> <a href="1267.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc membind interface? [Was: svn:hwloc r2339]"</a>
<li><strong>In reply to:</strong> <a href="1256.php">Terry Dontje: "[hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1270.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1270.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Terry Dontje, le Fri 06 Aug 2010 13:11:30 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; Is anyone looking at replacing the Solaris processor_bind calls with 
</span><br>
<span class="quotelev1">&gt; lgrp_affinity_set calls in hwloc?
</span><br>
<p>I eventually added using lgrp_affinity_set(). Not as a replacement for
<br>
processor_bind, as AIUI, lgrp_affinity_set() doesn't permit to specify
<br>
precise processors.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1269.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2418)"</a>
<li><strong>Previous message:</strong> <a href="1267.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc membind interface? [Was: svn:hwloc r2339]"</a>
<li><strong>In reply to:</strong> <a href="1256.php">Terry Dontje: "[hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1270.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1270.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
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
