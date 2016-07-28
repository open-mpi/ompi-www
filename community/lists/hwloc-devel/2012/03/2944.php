<?
$subject_val = "[hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 10:33:06 2012" -->
<!-- isoreceived="20120320143306" -->
<!-- sent="Tue, 20 Mar 2012 10:33:01 -0400" -->
<!-- isosent="20120320143301" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] PCI device name question" -->
<!-- id="72D62870-F7AB-4EE9-87D3-A7F3490D7B4D_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] PCI device name question<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 10:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2945.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2943.php">Jeffrey Squyres: "Re: [hwloc-devel] trunk build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2945.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2945.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a machine I have, I'm getting output like this with hwloc trunk:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:6750
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#11 &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#12 &quot;eth1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics L#13 &quot;mlx4_0&quot;
<br>
<p>which is all well and good (mlx4_0 is a RoCE card).
<br>
<p>Is there a way in the hwloc topology data to tell which port eth0 and eth1 correspond to?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2945.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2943.php">Jeffrey Squyres: "Re: [hwloc-devel] trunk build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2945.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2945.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
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
