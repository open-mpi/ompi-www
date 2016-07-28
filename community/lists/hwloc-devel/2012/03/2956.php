<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 15:45:50 2012" -->
<!-- isoreceived="20120320194550" -->
<!-- sent="Tue, 20 Mar 2012 20:45:38 +0100" -->
<!-- isosent="20120320194538" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="4F68DE62.2070003_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1E3E10A0-96CD-4476-8C4E-001855127552_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PCI device name question<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 15:45:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2957.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2955.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2955.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2957.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2957.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/03/2012 20:30, Jeffrey Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 20, 2012, at 3:29 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By the way, do you want Port numbers to start at 0 or 1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, IB (and probably RoCE) port numbers start with 1.  Shrug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So let's report whatever they report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sample output you showed looks perfect to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is your patch small enough to port back to the v1.3 branch, perchance?  Or should I update OMPI SVN trunk with our next v1.4 release?
</span><br>
<p>Yeah the patch (attached) is very simple and applies to v1.3 without any
<br>
problem.
<br>
<p>Note that it also adds port numbers to non-IB/OFED devices. When I
<br>
switch a ConnectX board to ethernet, I get:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:634a (P#49152 busid=0000:0c:00.0 class=0c06(IB) PCIVendor=&quot;Mellanox Technologies&quot; PCIDevice=&quot;MT25418 [ConnectX VPI PCIe 2.0 2.5GT/s - IB DDR / 10GigE]&quot;) &quot;Mellanox Technologies MT25418 [ConnectX VPI PCIe 2.0 2.5GT/s - IB DDR / 10GigE]&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#3 (Address=00:00:00:11:11:11 Port=1) &quot;eth3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#4 (Address=00:00:00:11:11:12 Port=2) &quot;eth4&quot;
<br>
<p><p>That looks good to me, as long as starting port numbers to 1 for
<br>
non-IB/OFED is OK.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2956/ibport.patch">ibport.patch</a>
</ul>
<!-- attachment="ibport.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2957.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2955.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2955.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2957.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2957.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
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
