<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 10:48:59 2011" -->
<!-- isoreceived="20111213154859" -->
<!-- sent="Tue, 13 Dec 2011 16:48:54 +0100" -->
<!-- isosent="20111213154854" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="4EE773E6.6000505_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9C0CAE07-DD88-463B-A2FF-4BDF44D99B04_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.1 and 1.4rc1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 10:48:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2603.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2601.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2601.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2603.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2603.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/12/2011 16:45, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Dec 13, 2011, at 10:40 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In most cases, you don't need PCI support for this, you juste manipulate
</span><br>
<span class="quotelev2">&gt;&gt; a cuda device, an ibv_device, a MX endpoint, ... and use one of the
</span><br>
<span class="quotelev2">&gt;&gt; inline helpers to get the corresponding locality (a cpuset).
</span><br>
<span class="quotelev1">&gt; I care mostly about Ethernet devices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We can get the locality for those by reading
<br>
/sys/class/net/&lt;name&gt;/device/local_cpus with name=eth0 and so on. That's
<br>
very similar to what we do for OFED. I can add a helper for these
<br>
devices as well if needed.
<br>
<p>How do you identify these devices in your application ? by interface name ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2603.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2601.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2601.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2603.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2603.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
