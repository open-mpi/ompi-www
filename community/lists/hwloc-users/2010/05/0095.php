<?
$subject_val = "Re: [hwloc-users] Distances";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 15:21:18 2010" -->
<!-- isoreceived="20100525192118" -->
<!-- sent="Tue, 25 May 2010 21:21:13 +0200" -->
<!-- isosent="20100525192113" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Distances" -->
<!-- id="4BFC2329.8090105_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="374D3CB2-C653-4555-8A37-23E1A5273115_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Distances<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 15:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0096.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Previous message:</strong> <a href="0094.php">Samuel Thibault: "Re: [hwloc-users] Distances"</a>
<li><strong>In reply to:</strong> <a href="0093.php">Wheeler, Kyle Bruce: "[hwloc-users] Distances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0097.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] Distances"</a>
<li><strong>Reply:</strong> <a href="0097.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] Distances"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 25/05/2010 21:02, Wheeler, Kyle Bruce wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see anything in hwloc for determining &quot;distance&quot; between objects in the hierarchy. Is there something I'm missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, distance doesn't make sense between all object types, and begs the question &quot;what units?&quot;. However, it's something that is supported in some sense on several systems (liblgrp/libnuma/tmc), and it'd be nice to know it exists in hwloc.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Distances is something planned for 1.1. Ticket
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/ticket/32">https://svn.open-mpi.org/trac/hwloc/ticket/32</a> is about it. hwloc already
<br>
gathers distances from Linux sysfs (from the ACPI SLIT table) and
<br>
Solaris to group NUMA nodes accordingly. We need to sort the matrix in
<br>
the logical order (instead of OS order) and expose it to the
<br>
application. And we need to clarify what we want to support exactly
<br>
(extend the NUMA distance to a distance between other objects? what if
<br>
we ever get some incomplete distance matrix?). What units must be well
<br>
documented too, right.
<br>
<p>If you have comments/ideas to add on the ticket, let us know (or get an
<br>
account and comment there :)).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0096.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Previous message:</strong> <a href="0094.php">Samuel Thibault: "Re: [hwloc-users] Distances"</a>
<li><strong>In reply to:</strong> <a href="0093.php">Wheeler, Kyle Bruce: "[hwloc-users] Distances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0097.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] Distances"</a>
<li><strong>Reply:</strong> <a href="0097.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] Distances"</a>
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
