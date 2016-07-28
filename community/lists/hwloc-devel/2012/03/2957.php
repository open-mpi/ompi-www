<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 16:48:45 2012" -->
<!-- isoreceived="20120320204845" -->
<!-- sent="Tue, 20 Mar 2012 16:48:41 -0400" -->
<!-- isosent="20120320204841" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="F45D4A7A-1167-4FE1-829E-28703A65C6F6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F68DE62.2070003_at_inria.fr" -->
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
<strong>Date:</strong> 2012-03-20 16:48:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2958.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2956.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2956.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2958.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2958.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2959.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2012, at 3:45 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; That looks good to me, as long as starting port numbers to 1 for
</span><br>
<span class="quotelev1">&gt; non-IB/OFED is OK.
</span><br>
<p><p>Hmm.  Not sure about that.  I always thought it was strange that IB devices started with port 1.  
<br>
<p>Are *we* (hwloc) supplying the port number, or are you getting it from /sys somewhere?
<br>
<p>(/me reads the patch and ibdev2netdev...)
<br>
<p>Ah, I see -- we're effectively doing the same thing as the ibdev2netdev script:
<br>
<p>-----
<br>
port=$(cat /sys/class/net/$eth/dev_id)
<br>
port=$(printf &quot;%d&quot; $port)
<br>
port=$(( port + 1 ))
<br>
-----
<br>
<p>Hrm.  I don't know if the +1 is a good assumption to make in general.
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
<li><strong>Next message:</strong> <a href="2958.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2956.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2956.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2958.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2958.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2959.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
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
