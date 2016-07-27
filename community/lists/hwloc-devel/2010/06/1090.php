<?
$subject_val = "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 25 09:50:09 2010" -->
<!-- isoreceived="20100625135009" -->
<!-- sent="Fri, 25 Jun 2010 09:50:05 -0400" -->
<!-- isosent="20100625135005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything" -->
<!-- id="DFF051D8-10F9-4612-B7F9-3E2077FFEC49_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100625133704.GV6591_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-25 09:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<li><strong>Previous message:</strong> <a href="1089.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<li><strong>In reply to:</strong> <a href="1089.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<li><strong>Reply:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<li><strong>Reply:</strong> <a href="1093.php">Brice Goglin: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2010, at 9:37 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; % ./utils/hwloc-ps
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess it just means you don't have any process bound to some proc.
</span><br>
<p>Ah -- the documentation says:
<br>
<p>hwloc-ps
<br>
<p>hwloc-ps lists all processes currently running on the machine with their corresponding binding according to the hwloc topology.
<br>
<p>And the man page says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc-bind - List currently running processes and their binding.
<br>
<p>(obvious typo there s/hwloc-bind/hwloc-ps/ -- I'll fix)
<br>
<p>...leading me to believe that hwloc-ps shows *all* processes and if any process is bound to something, it'll show what it's bound to.
<br>
<p>Sounds like this is just a doc bug, right?  If so, I can fix.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<li><strong>Previous message:</strong> <a href="1089.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<li><strong>In reply to:</strong> <a href="1089.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<li><strong>Reply:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
<li><strong>Reply:</strong> <a href="1093.php">Brice Goglin: "Re: [hwloc-devel] hwloc-ps on trunk doesn't seem to do anything"</a>
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
