<?
$subject_val = "Re: [hwloc-users] lstopo and GPus";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 08:23:58 2012" -->
<!-- isoreceived="20120828122358" -->
<!-- sent="Tue, 28 Aug 2012 14:23:54 +0200" -->
<!-- isosent="20120828122354" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo and GPus" -->
<!-- id="20120828122354.GH28646_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2012-08-28 08:23:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0674.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0672.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Gabriele Fatigati: "[hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0674.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Reply:</strong> <a href="0674.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Tue 28 Aug 2012 14:19:44 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I'm using hwloc 1.5. I would to see how GPUs are connected with the processor
</span><br>
<span class="quotelev1">&gt; socket using lstopo command.&#160;
</span><br>
<p>About connexion with the socket, there is indeed no real graphical
<br>
difference between &quot;connected to socket #1&quot; and &quot;connected to all
<br>
sockets&quot;. You can use the text output for that:
<br>
<p>$ lstopo
<br>
&nbsp;&nbsp;Socket #0
<br>
&nbsp;&nbsp;Socket #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI...
<br>
(connected to socket #1)
<br>
<p>vs
<br>
<p>$ lstopo
<br>
&nbsp;&nbsp;Socket #0
<br>
&nbsp;&nbsp;Socket #1
<br>
&nbsp;&nbsp;PCI...
<br>
(connected to both sockets)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0674.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0672.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Gabriele Fatigati: "[hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0674.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Reply:</strong> <a href="0674.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
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
