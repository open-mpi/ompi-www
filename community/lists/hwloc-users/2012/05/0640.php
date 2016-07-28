<?
$subject_val = "Re: [hwloc-users] Hwloc error.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 11:22:46 2012" -->
<!-- isoreceived="20120530152246" -->
<!-- sent="Wed, 30 May 2012 17:22:41 +0200" -->
<!-- isosent="20120530152241" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Hwloc error." -->
<!-- id="20120530152240.GP3370_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGrHuK4vknEf4eth0q7ApyFBjEyfCDhK0u+QorXp+GL5fu1oww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Hwloc error.<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 11:22:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0641.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Previous message:</strong> <a href="0639.php">John Hanks: "[hwloc-users] Hwloc error."</a>
<li><strong>In reply to:</strong> <a href="0639.php">John Hanks: "[hwloc-users] Hwloc error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0641.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Reply:</strong> <a href="0641.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Reply:</strong> <a href="0642.php">Jeff Squyres: "Re: [hwloc-users] Hwloc error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>John Hanks, le Wed 30 May 2012 17:03:47 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; * Hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 594
</span><br>
<p>There is indeed something odd with what the Linux kernel reports:
<br>
<p>os node 1 has cpuset 0x0003ffff
<br>
os node 2 has cpuset 0x00fc0000
<br>
<p>as can be seen in /sys/devices/system/node/node*/cpumap, but
<br>
<p>os socket 0 has cpuset 0x00000fff
<br>
os socket 1 has cpuset 0x00fff000
<br>
<p>as can be seen in /sys/devices/system/cpu/cpu*/topology/physical_package_id
<br>
<p>i.e. the kernel reports that socket 0 is completely in node 1, while
<br>
socket 1 is half in node 1 and half in node 2. Do you have more
<br>
information about what the machine actually contains socket- and
<br>
NUMA-wise? The dell website is not really felpful, it talks about 4-16
<br>
cores for the DL165 G7, while you have 24.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0641.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Previous message:</strong> <a href="0639.php">John Hanks: "[hwloc-users] Hwloc error."</a>
<li><strong>In reply to:</strong> <a href="0639.php">John Hanks: "[hwloc-users] Hwloc error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0641.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Reply:</strong> <a href="0641.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Reply:</strong> <a href="0642.php">Jeff Squyres: "Re: [hwloc-users] Hwloc error."</a>
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
