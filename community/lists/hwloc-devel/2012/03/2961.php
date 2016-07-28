<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 17:30:23 2012" -->
<!-- isoreceived="20120320213023" -->
<!-- sent="Tue, 20 Mar 2012 22:30:17 +0100" -->
<!-- isosent="20120320213017" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="4F68F6E9.3090109_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7E96B387-73E2-4A12-A214-358439DB4EF5_at_cisco.com" -->
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
<strong>Date:</strong> 2012-03-20 17:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2962.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2960.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2960.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2962.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2962.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/03/2012 22:12, Jeffrey Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 20, 2012, at 5:07 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; New patch attached, it doesn't add port numbers for non-IB devices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does the new patch add port numbers at all if &lt;foo&gt;/device/infiniband doesn't exist?
</span><br>
<p>No. For each ethX, the hwloc &quot;ethX&quot; object will only get a Port number
<br>
if the corresponding sysfs device has some infiniband &quot;child&quot;.
<br>
Otherwise, no Port attribute is added.
<br>
<p><span class="quotelev1">&gt; I.e., is the dev_id/port number irrelevant if it's not an OpenFabrics device?
</span><br>
<p>dev_id seems to be very rarely used outside of IB. It will be 0x0 is the
<br>
vast majority of cases. With the first patch, we would get Port=1 is
<br>
most cases. And Port=1, 2, ... for other cases where dev_id is actually
<br>
used for &quot;shared NICs&quot;. It's not too bad.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2962.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2960.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2960.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2962.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2962.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
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
