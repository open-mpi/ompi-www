<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 10:55:48 2011" -->
<!-- isoreceived="20111213155548" -->
<!-- sent="Tue, 13 Dec 2011 10:55:38 -0500" -->
<!-- isosent="20111213155538" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="00F56DA9-8ABF-4EBC-9362-679C2BACD875_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE773E6.6000505_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 10:55:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2604.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2602.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2602.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2604.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2604.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2011, at 10:48 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; We can get the locality for those by reading
</span><br>
<span class="quotelev1">&gt; /sys/class/net/&lt;name&gt;/device/local_cpus with name=eth0 and so on. That's
</span><br>
<span class="quotelev1">&gt; very similar to what we do for OFED. I can add a helper for these
</span><br>
<span class="quotelev1">&gt; devices as well if needed.
</span><br>
<p>That would be great.  It would cover many, many people in the world (i.e., outside of those with specialty/nice network types -- ok, couldn't resist that one ;-) ).
<br>
<p><span class="quotelev1">&gt; How do you identify these devices in your application ? by interface name ?
</span><br>
<p>Yes, mostly by interface name.
<br>
<p>How about a generic lookup?  I.e., take the device name pattern (or specific string) to look for as input?
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
<li><strong>Next message:</strong> <a href="2604.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2602.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2602.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2604.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2604.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
