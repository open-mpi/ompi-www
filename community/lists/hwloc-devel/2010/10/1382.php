<?
$subject_val = "[hwloc-devel] Strange results on itanium 2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 27 08:52:32 2010" -->
<!-- isoreceived="20101027125232" -->
<!-- sent="Wed, 27 Oct 2010 14:52:22 +0200" -->
<!-- isosent="20101027125222" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="[hwloc-devel] Strange results on itanium 2" -->
<!-- id="201010271452.22933.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Strange results on itanium 2<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-27 08:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1383.php">Samuel Thibault: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1381.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2645)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1383.php">Samuel Thibault: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Maybe reply:</strong> <a href="1383.php">Samuel Thibault: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have run hwloc on system with 2 itanium 2 cpus. Results are not OK, L3 cache 
<br>
is bellow L2 cache. Could you please check it? 
<br>
<p>BOX:
<br>
HP Integrity BL870c
<br>
<p>Output of command: &quot;lstopo --physical -&quot;
<br>
Machine (16GB)
<br>
&nbsp;&nbsp;Socket p#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (16KB) + Core p#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 (9216KB) + PU p#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 (9216KB) + PU p#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (16KB) + Core p#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 (9216KB) + PU p#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 (9216KB) + PU p#3
<br>
&nbsp;&nbsp;Socket p#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (16KB) + Core p#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 (9216KB) + PU p#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 (9216KB) + PU p#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (16KB) + Core p#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 (9216KB) + PU p#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 (9216KB) + PU p#7
<br>
<p>I have attached a tar file with full information.
<br>
<p>Thanks!
<br>
Jirka
<br>
<p>
<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1382/2010-Oct-27_05h29m_hwloc-results.tar.gz">2010-Oct-27_05h29m_hwloc-results.tar.gz</a>
</ul>
<!-- attachment="2010-Oct-27_05h29m_hwloc-results.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1383.php">Samuel Thibault: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1381.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2645)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1383.php">Samuel Thibault: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Maybe reply:</strong> <a href="1383.php">Samuel Thibault: "Re: [hwloc-devel] Strange results on itanium 2"</a>
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
