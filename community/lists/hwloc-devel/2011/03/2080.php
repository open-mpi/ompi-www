<?
$subject_val = "Re: [hwloc-devel] Merging the PCI branch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 14:47:08 2011" -->
<!-- isoreceived="20110331184708" -->
<!-- sent="Thu, 31 Mar 2011 14:47:02 -0400" -->
<!-- isosent="20110331184702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Merging the PCI branch?" -->
<!-- id="B15A7431-7D4C-42E8-A6E2-1F5C17C769E9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110331184105.GA5938_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Merging the PCI branch?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-31 14:47:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2081.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Previous message:</strong> <a href="2079.php">Samuel Thibault: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>In reply to:</strong> <a href="2079.php">Samuel Thibault: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2081.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="2081.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2011, at 2:41 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; [re: making PCI the default]
</span><br>
<span class="quotelev1">&gt; I'm unsure about it. We need to keep the simple things simple, and many
</span><br>
<span class="quotelev1">&gt; people will only care about CPU placement first, so that should remain
</span><br>
<span class="quotelev1">&gt; simple.
</span><br>
<p>Ok.  I guess I don't have too strong of an opinion here.
<br>
<p><span class="quotelev2">&gt;&gt; How / where do these new devices show up in the tree that is returned from hwloc?  For example, are PCI busses children of NUMA nodes, or siblings?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They show up according to the corresponding cpuset. In the case of a
</span><br>
<span class="quotelev1">&gt; NUMA node, since PCI busses are typically close to the whole set of cpus
</span><br>
<span class="quotelev1">&gt; of the NUMA node, it'll be a child (else you wouldn't know which NUMA
</span><br>
<span class="quotelev1">&gt; node it's close to). Of course, more complexe hardware will have
</span><br>
<span class="quotelev1">&gt; different relations.
</span><br>
<p>That's exactly what I was hoping.
<br>
<p>Brice's text of &quot;They have no cpusets / may appear at random places in the topology&quot; could be interpreted multiple ways, so I wasn't sure.
<br>
<p><span class="quotelev2">&gt;&gt; Is libpci available on all platforms?  Or is it only needed on Linux?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is said to work on linux, free/net/openbsd, solaris, aix, and
</span><br>
<span class="quotelev1">&gt; whatever OS that lets it access x86 io ports.
</span><br>
<p>K.
<br>
<p>Are we *requiring* libpci to build?  Or do we allow building without it (and therefore you just don't get the PCI functionality)?
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
<li><strong>Next message:</strong> <a href="2081.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Previous message:</strong> <a href="2079.php">Samuel Thibault: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>In reply to:</strong> <a href="2079.php">Samuel Thibault: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2081.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="2081.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
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
