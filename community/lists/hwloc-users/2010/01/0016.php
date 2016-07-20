<?
$subject_val = "[hwloc-users] Istopo question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 12:57:02 2010" -->
<!-- isoreceived="20100128175702" -->
<!-- sent="Thu, 28 Jan 2010 12:56:56 -0500" -->
<!-- isosent="20100128175656" -->
<!-- name="Norman Lo" -->
<!-- email="normanlo_at_[hidden]" -->
<!-- subject="[hwloc-users] Istopo question" -->
<!-- id="4B61CFE8.3020909_at_cs.umd.edu" -->
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
<strong>Subject:</strong> [hwloc-users] Istopo question<br>
<strong>From:</strong> Norman Lo (<em>normanlo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 12:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0017.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0015.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0018.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Reply:</strong> <a href="0018.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I checked out the current version of hwloc from the svn. I ran lstopo 
<br>
and got the follow result (snapshot of it):
<br>
<p>Towards the beginning:
<br>
<p>&nbsp;&nbsp;Socket#0 cpuset 0x000000ff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3Cache(8192KB) cpuset 0x000000ff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache(256KB) cpuset 0x00000011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache(32KB) cpuset 0x00000011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#0 cpuset 0x00000011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#0 cpuset 0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#4 cpuset 0x00000010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache(256KB) cpuset 0x00000022
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache(32KB) cpuset 0x00000022
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#1 cpuset 0x00000022
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#1 cpuset 0x00000002
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#5 cpuset 0x00000020
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache(256KB) cpuset 0x00000044
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache(32KB) cpuset 0x00000044
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#2 cpuset 0x00000044
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#2 cpuset 0x00000004
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#6 cpuset 0x00000040
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache(256KB) cpuset 0x00000088
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache(32KB) cpuset 0x00000088
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#3 cpuset 0x00000088
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#3 cpuset 0x00000008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#7 cpuset 0x00000080
<br>
<p>Towards the end:Machine(3016MB) + Socket#0 + L3#0(8192KB)
<br>
&nbsp;&nbsp;L2#0(256KB) + L1#0(32KB) + Core#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#1
<br>
&nbsp;&nbsp;L2#1(256KB) + L1#1(32KB) + Core#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#3
<br>
&nbsp;&nbsp;L2#2(256KB) + L1#2(32KB) + Core#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#5
<br>
&nbsp;&nbsp;L2#3(256KB) + L1#3(32KB) + Core#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#7
<br>
<p>It seems to me that they are reporting different things. If I understand 
<br>
correctly, the lstopo reports that P#1 and P#4 are in core 1 (and so 
<br>
forth) while at the end, it reports that core#0 has P#0 and P#1. I'm 
<br>
wondering why there is such a descrepancy or if I have misinterpret 
<br>
something here. The machine I am running on is a i7-920 (4 cores with 
<br>
hyperthreading).
<br>
<p>Any answer would be greatly appreciated. Thank you very much in advance.
<br>
<p>Norman
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0017.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0015.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0018.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Reply:</strong> <a href="0018.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
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
