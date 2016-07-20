<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 04:50:42 2015" -->
<!-- isoreceived="20151027085042" -->
<!-- sent="Tue, 27 Oct 2015 09:50:37 +0100" -->
<!-- isosent="20151027085037" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="20151027085037.GH2826_at_var.home" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="562F392A.9050405_at_fau.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 04:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1203.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1201.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1200.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1203.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Fabian Wein, le Tue 27 Oct 2015 09:43:22 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Is there a way to configure the topology manually?
</span><br>
<p>Yes, you can export the current topology to an xml file:
<br>
<p>lstopo platform.xml
<br>
<p>then modify the platform, then use
<br>
<p>export HWLOC_XMLFILE=platform.xml
<br>
<p>to force using the modified xml file instead of detection.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1203.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1201.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1200.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1203.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
