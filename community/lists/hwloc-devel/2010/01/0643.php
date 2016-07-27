<?
$subject_val = "[hwloc-devel] processor restriction + lookup of pid for 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 16:48:18 2010" -->
<!-- isoreceived="20100129214818" -->
<!-- sent="Fri, 29 Jan 2010 22:48:13 +0100" -->
<!-- isosent="20100129214813" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] processor restriction + lookup of pid for 1.0" -->
<!-- id="4B63579D.5020906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] processor restriction + lookup of pid for 1.0<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 16:48:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0644.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1707)"</a>
<li><strong>Previous message:</strong> <a href="0642.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1709"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0645.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0645.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am looking at the remaining tickets for v1.0. Assuming there are no
<br>
&quot;critical&quot; warning anymore, and assuming we have done enough for people
<br>
to combine network topologies (manually for now), only 2 ticket remains:
<br>
#12 support user-defined processor restriction
<br>
#21 Allow lookup of specific PIDs
<br>
<p>I understand #12 but I am not sure what #21 actually needs. We would do
<br>
a get_cpubind(pid) and then what ? Do a processor restriction as defined
<br>
in #12 ? If so, then #12 is included in #21 :) Is there anything else to
<br>
do in #21 apart from #12 and lstopo --pid ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0644.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1707)"</a>
<li><strong>Previous message:</strong> <a href="0642.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1709"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0645.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Reply:</strong> <a href="0645.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
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
