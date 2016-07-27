<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 10:47:01 2012" -->
<!-- isoreceived="20120320144701" -->
<!-- sent="Tue, 20 Mar 2012 15:46:55 +0100" -->
<!-- isosent="20120320144655" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="4F68985F.8070503_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="72D62870-F7AB-4EE9-87D3-A7F3490D7B4D_at_cisco.com" -->
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
<strong>Date:</strong> 2012-03-20 10:46:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2946.php">Jeffrey Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409"</a>
<li><strong>Previous message:</strong> <a href="2944.php">Jeffrey Squyres: "[hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2944.php">Jeffrey Squyres: "[hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2947.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2947.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/03/2012 15:33, Jeffrey Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On a machine I have, I'm getting output like this with hwloc trunk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     PCIBridge
</span><br>
<span class="quotelev1">&gt;       PCI 15b3:6750
</span><br>
<span class="quotelev1">&gt;         Net L#11 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;         Net L#12 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;         OpenFabrics L#13 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is all well and good (mlx4_0 is a RoCE card).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way in the hwloc topology data to tell which port eth0 and eth1 correspond to?
</span><br>
<p>You should have a &quot;Address&quot; info attribute in each eth object containing
<br>
something like 80:34:00:48:fe:80:00:00:00:00:00:01:00:02:c9:03:00:0b:53:49
<br>
Is this useful?
<br>
<p>Otherwise, I don't see any way to link IB ports with net interfaces in
<br>
sysfs:
<br>
* My /sys/class/infiniband/mlx4_0 contains a &quot;ports&quot; directory with &quot;1&quot;
<br>
and &quot;2&quot; in there, but I can't find anything related to my &quot;ib0&quot; and
<br>
&quot;ib1&quot; interface in there.
<br>
* /sys/class/net/ib0 doesn't seem to contain anything about IB ports either.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2946.php">Jeffrey Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409"</a>
<li><strong>Previous message:</strong> <a href="2944.php">Jeffrey Squyres: "[hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2944.php">Jeffrey Squyres: "[hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2947.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2947.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
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
