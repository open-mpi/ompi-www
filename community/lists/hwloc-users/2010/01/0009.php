<?
$subject_val = "[hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 10:45:10 2010" -->
<!-- isoreceived="20100128154510" -->
<!-- sent="Thu, 28 Jan 2010 08:44:38 -0700" -->
<!-- isosent="20100128154438" -->
<!-- name="Dan Eaton" -->
<!-- email="daniel.eaton_at_[hidden]" -->
<!-- subject="[hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8" -->
<!-- id="AD3E5D661CED404A842D89A45C87D56629708271A4_at_axe-post.Acceleware.local" -->
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
<strong>Subject:</strong> [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8<br>
<strong>From:</strong> Dan Eaton (<em>daniel.eaton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 10:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0010.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0008.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0010.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0010.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have two RHEL 4.x machines on which I just downloaded and built hwloc.
<br>
<p>The RHEL 4.7 machine is dual-socket, quad-core Harpertown (Xeon E5430), and I get the following (hierarchy, but no caches).
<br>
<span class="quotelev1">&gt; ./lstopo
</span><br>
System(31GB)
<br>
&nbsp;&nbsp;Socket#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core#0 + P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core#2 + P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core#1 + P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core#3 + P#6
<br>
&nbsp;&nbsp;Socket#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core#4 + P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core#6 + P#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core#5 + P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core#7 + P#7
<br>
<p>The RHEL 4.8 machine is dual-socket, quad-core Nehalem (Xeon X5550, HT off), and I get the following (no hiearchy or caches):
<br>
<span class="quotelev1">&gt; ./lstopo
</span><br>
Machine(5956MB)
<br>
&nbsp;&nbsp;Socket#0 + Core#0 + P#0
<br>
&nbsp;&nbsp;Socket#1 + Core#1 + P#1
<br>
&nbsp;&nbsp;Socket#2 + Core#2 + P#2
<br>
&nbsp;&nbsp;Socket#3 + Core#3 + P#3
<br>
&nbsp;&nbsp;Socket#4 + Core#4 + P#4
<br>
&nbsp;&nbsp;Socket#5 + Core#5 + P#5
<br>
&nbsp;&nbsp;Socket#6 + Core#6 + P#6
<br>
&nbsp;&nbsp;Socket#7 + Core#7 + P#7
<br>
<p>Is this expected behaviour on those Linux versions? I would be surprised if this was the case, because it's possible to fully reconstruct the hiarachy from /proc/cpuinfo alone on them (caches aside).
<br>
<p>Thanks,
<br>
Dan
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0010.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0008.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0010.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0010.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
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
