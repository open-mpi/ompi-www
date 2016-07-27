<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 15:09:16 2012" -->
<!-- isoreceived="20120320190916" -->
<!-- sent="Tue, 20 Mar 2012 20:09:10 +0100" -->
<!-- isosent="20120320190910" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="4F68D5D6.4090509_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5D732DD2-AF82-44B7-8480-370D8FFA6DAE_at_cisco.com" -->
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
<strong>Date:</strong> 2012-03-20 15:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2953.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2951.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2953.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2953.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/03/2012 19:02, Jeffrey Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 20, 2012, at 12:02 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, what we don't know is how to map that to port 1/2 (we have
</span><br>
<span class="quotelev2">&gt;&gt; ib0/ib1 mac addresses, those are = GUID+1/2 on my machine)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that is more correctly stated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A Mellanox guy pointed me to the ibdev2netdev script in current OFED distributions -- it looks like they do actually do the mapping based on the GID.
</span><br>
<p>Looks like we just need to read /sys/class/net/ib*/dev_id, make that
<br>
decimal, add one, and we get the port number.
<br>
<p>How would you like this to appear in the topology? Is a object info such
<br>
as &quot;Port=%d&quot; in each network interface in a OFED object ok?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2953.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2951.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2953.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2953.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
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
