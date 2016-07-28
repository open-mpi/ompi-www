<?
$subject_val = "Re: [hwloc-devel] Merging the PCI branch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 14:41:11 2011" -->
<!-- isoreceived="20110331184111" -->
<!-- sent="Thu, 31 Mar 2011 20:41:05 +0200" -->
<!-- isosent="20110331184105" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Merging the PCI branch?" -->
<!-- id="20110331184105.GA5938_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53507605.324157.1301587619342.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-31 14:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2080.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Previous message:</strong> <a href="2078.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2070.php">Brice Goglin: "[hwloc-devel] Merging the PCI branch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2080.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="2080.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 31 Mar 2011 18:06:59 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 28, 2011, at 5:26 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; First, to avoid breaking existing applications, I/O devices are not
</span><br>
<span class="quotelev2">&gt; &gt; added to the topology unless a new topology flag is set. Only lstopo
</span><br>
<span class="quotelev2">&gt; &gt; enables PCI devices by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good.  Although I think we should plan to make this the default in some future version (i.e., say that in the docs).
</span><br>
<p>I'm unsure about it. We need to keep the simple things simple, and many
<br>
people will only care about CPU placement first, so that should remain
<br>
simple.
<br>
<p><span class="quotelev1">&gt; How / where do these new devices show up in the tree that is returned from hwloc?  For example, are PCI busses children of NUMA nodes, or siblings?
</span><br>
<p>They show up according to the corresponding cpuset. In the case of a
<br>
NUMA node, since PCI busses are typically close to the whole set of cpus
<br>
of the NUMA node, it'll be a child (else you wouldn't know which NUMA
<br>
node it's close to). Of course, more complexe hardware will have
<br>
different relations.
<br>
<p><span class="quotelev2">&gt; &gt; These new objects are special:
</span><br>
<span class="quotelev2">&gt; &gt; * They have no cpusets
</span><br>
<span class="quotelev2">&gt; &gt; * They may appear at random places in the topology, with very different
</span><br>
<span class="quotelev2">&gt; &gt; numbers of bridges above them. So we don't associate a &quot;level&quot; or a
</span><br>
<span class="quotelev2">&gt; &gt; &quot;depth&quot; to these new types. If you ever need to enumerate them, use the
</span><br>
<span class="quotelev2">&gt; &gt; new get_next_osdev() or get_next_pcidev() functions. This may need a bit
</span><br>
<span class="quotelev2">&gt; &gt; more of documentation.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; libpci is needed to make this work. And only Linux gives you OS devices
</span><br>
<span class="quotelev2">&gt; &gt; for now (we use sysfs to translate between pci devs and os devs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is libpci available on all platforms?  Or is it only needed on Linux?
</span><br>
<p>It is said to work on linux, free/net/openbsd, solaris, aix, and
<br>
whatever OS that lets it access x86 io ports.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2080.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Previous message:</strong> <a href="2078.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2070.php">Brice Goglin: "[hwloc-devel] Merging the PCI branch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2080.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="2080.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
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
