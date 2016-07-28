<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 15:12:42 2012" -->
<!-- isoreceived="20120320191242" -->
<!-- sent="Tue, 20 Mar 2012 15:12:38 -0400" -->
<!-- isosent="20120320191238" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="D438A3A1-DD86-4C5A-A800-7A8C6E3212A6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F68D5D6.4090509_at_inria.fr" -->
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
<strong>Date:</strong> 2012-03-20 15:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2954.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2952.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2952.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2954.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2954.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2012, at 3:09 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Looks like we just need to read /sys/class/net/ib*/dev_id, make that
</span><br>
<span class="quotelev1">&gt; decimal, add one, and we get the port number.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How would you like this to appear in the topology? Is a object info such
</span><br>
<span class="quotelev1">&gt; as &quot;Port=%d&quot; in each network interface in a OFED object ok?
</span><br>
<p><p>You mean attached to the &quot;ib0&quot; (etc.) PCI devices?  If so, I think that would be fine.
<br>
<p>Are the other info keys capitalized?
<br>
<p>Will you display this info in lstopo output?
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
<li><strong>Next message:</strong> <a href="2954.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2952.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2952.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2954.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2954.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
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
