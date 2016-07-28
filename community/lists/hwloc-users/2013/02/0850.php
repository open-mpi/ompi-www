<?
$subject_val = "[hwloc-users] hwloc-bind --get on Solaris for binding to a single core";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 01:49:12 2013" -->
<!-- isoreceived="20130206064912" -->
<!-- sent="Tue, 05 Feb 2013 22:49:05 -0800" -->
<!-- isosent="20130206064905" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc-bind --get on Solaris for binding to a single core" -->
<!-- id="5111FCE1.2050601_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.61.1360130865.7491.hwloc-users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc-bind --get on Solaris for binding to a single core<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 01:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0851.php">Samuel Thibault: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>Previous message:</strong> <a href="0849.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0851.php">Samuel Thibault: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>Reply:</strong> <a href="0851.php">Samuel Thibault: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is on a Solaris 11 system with hwloc 1.6.1:
<br>
<p>% lstopo-no-graphics
<br>
Machine (4095MB) + NUMANode L#0 (P#0 4095MB) + Socket L#0
<br>
&nbsp;&nbsp;&nbsp;Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;Core L#3 + PU L#3 (P#3)
<br>
% hwloc-bind socket:0.pu:1 hwloc-bind --get
<br>
0x0000000f
<br>
<p>I assume that output is wrong.  I bind to a single core, but the returned mask shows binding to all four cores.
<br>
<p>To confirm that binding is indeed happening and that it's the reporting that's incorrect:
<br>
<p>% hwloc-bind socket:0.pu:0 pbind -q
<br>
process id 1773: 0
<br>
% hwloc-bind socket:0.pu:1 pbind -q
<br>
process id 1774: 1
<br>
% hwloc-bind socket:0.pu:2 pbind -q
<br>
process id 1775: 2
<br>
% hwloc-bind socket:0.pu:3 pbind -q
<br>
process id 1776: 3
<br>
<p>It seems to me the problem is in topology-solaris.c.  In hwloc_solaris_set_sth_cpubind(), we can bind to a single core with 
<br>
processor_bind(), which is what's happening in our case.  Then, in hwloc_solaris_get_sth_cpubind(), we check for lgroup affinity but 
<br>
not for any processor_bind() binding.  So, we assume we're not bound.
<br>
<p>How about adding a check upon entry to hwloc_solaris_get_sth_cpubind():  if processor_bind() shows binding, report this and be done. 
<br>
&nbsp;&nbsp;If not, then continue on with the lgroup logic that's already in that function.  Yes?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0851.php">Samuel Thibault: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>Previous message:</strong> <a href="0849.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0851.php">Samuel Thibault: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
<li><strong>Reply:</strong> <a href="0851.php">Samuel Thibault: "Re: [hwloc-users] hwloc-bind --get on Solaris for binding to a single core"</a>
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
