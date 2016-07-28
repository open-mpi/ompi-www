<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 17:39:43 2012" -->
<!-- isoreceived="20120320213943" -->
<!-- sent="Tue, 20 Mar 2012 17:39:39 -0400" -->
<!-- isosent="20120320213939" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="9ACA0826-EA14-4851-9339-8ACCE1FB23DB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F68F6E9.3090109_at_inria.fr" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 17:39:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2963.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409"</a>
<li><strong>Previous message:</strong> <a href="2961.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2961.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2987.php">Christopher Samuel: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2012, at 5:30 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Does the new patch add port numbers at all if &lt;foo&gt;/device/infiniband doesn't exist?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No. For each ethX, the hwloc &quot;ethX&quot; object will only get a Port number
</span><br>
<span class="quotelev1">&gt; if the corresponding sysfs device has some infiniband &quot;child&quot;.
</span><br>
<span class="quotelev1">&gt; Otherwise, no Port attribute is added.
</span><br>
<p>Ok, this is probably a good solution.  1-based port numbers for OpenFabrics devices, no port numbers for other devices.
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
<li><strong>Next message:</strong> <a href="2963.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409"</a>
<li><strong>Previous message:</strong> <a href="2961.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2961.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2987.php">Christopher Samuel: "Re: [hwloc-devel] PCI device name question"</a>
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
