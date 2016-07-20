<?
$subject_val = "Re: [hwloc-users] lstopo and GPus";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 08:21:59 2012" -->
<!-- isoreceived="20120828122159" -->
<!-- sent="Tue, 28 Aug 2012 14:21:45 +0200" -->
<!-- isosent="20120828122145" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo and GPus" -->
<!-- id="20120828122145.GG28646_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJNPZUW+Wy0Awh6BfRoW+DtW6dXw3xB2dQbJXuOG12qcc4YRKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] lstopo and GPus<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 08:21:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0673.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0671.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Gabriele Fatigati: "[hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0673.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Tue 28 Aug 2012 14:19:44 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I attach the figure. The system has two GPUs, but I don't understand how to
</span><br>
<span class="quotelev1">&gt; find that information from PCI boxes.
</span><br>
<p>The 10de:xxxx devices are the GPUs (or alternatively, use the cuda
<br>
branch from the svn repository).  The figure shows that they are both
<br>
connected to the same bus.  You can additionally run lstopo as root to
<br>
get the bus speed.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0673.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0671.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Gabriele Fatigati: "[hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0673.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
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
