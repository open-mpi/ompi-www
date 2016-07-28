<?
$subject_val = "Re: [hwloc-users] Solaris and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 10:28:51 2012" -->
<!-- isoreceived="20120912142851" -->
<!-- sent="Wed, 12 Sep 2012 16:28:45 +0200" -->
<!-- isosent="20120912142845" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Solaris and hwloc" -->
<!-- id="20120912142845.GR5495_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FD2A495D-61FC-468B-A561-229A2886D445_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Solaris and hwloc<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 10:28:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0711.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0708.php">Jeff Squyres: "[hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 12 Sep 2012 16:16:57 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; He seems to get an hwloc error any time he tries to bind to more than 1 PU.  Is that expected on Solaris?
</span><br>
<p>Without lgrp support, unfortunately yes: the processor_bind solaris interface only permits to bind to one processor.
<br>
<p>With lgrp support, on should be able to bind oneself to sets of whole
<br>
NUMA nodes. I don't know any interface which would provide a granularity
<br>
between one processor and one NUMA node.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0711.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0708.php">Jeff Squyres: "[hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
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
