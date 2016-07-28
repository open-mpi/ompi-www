<?
$subject_val = "Re: [hwloc-devel] specifying I/O devices on the command-line";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 09:14:06 2011" -->
<!-- isoreceived="20110412131406" -->
<!-- sent="Tue, 12 Apr 2011 09:14:00 -0400" -->
<!-- isosent="20110412131400" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] specifying I/O devices on the command-line" -->
<!-- id="79B00662-209F-4B47-9B79-4AD362D48619_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DA44122.3060202_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] specifying I/O devices on the command-line<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 09:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2132.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Previous message:</strong> <a href="2130.php">Brice Goglin: "[hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>In reply to:</strong> <a href="2130.php">Brice Goglin: "[hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2132.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Reply:</strong> <a href="2132.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 12, 2011, at 8:10 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I am looking for a good way to specify PCI and OS devices on the
</span><br>
<span class="quotelev1">&gt; command-line (for hwloc-calc and hwloc-bind).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The trunk currently supports:
</span><br>
<span class="quotelev1">&gt; * os:foobar with for OS device named foobar (eth0, mlx4_0, ...)
</span><br>
<span class="quotelev1">&gt; * pci:0000:00:00.0 or pci:00:00.0 for a given PCI device
</span><br>
<span class="quotelev1">&gt; * pci:aaaa:bbbb:c for the c-th PCI device with vendor ID aaaa and device
</span><br>
<span class="quotelev1">&gt; ID bbbb
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The idea is basically to make it easy to bind processes near some
</span><br>
<span class="quotelev1">&gt; high-performance devices:
</span><br>
<span class="quotelev1">&gt;   hwloc-bind os:mlx4_0 &lt;mympibenchmark&gt;
</span><br>
<span class="quotelev1">&gt;   hwloc-bind pci:nvidia:tesla:0 &lt;mycudabenchmark&gt;
</span><br>
<p>Nifty.  
<br>
<p>Can you list multiple devices?  E.g.:
<br>
<p>&nbsp;&nbsp;hwloc-bind os:mlx4_0 os:mlx4_1 my_mpi_benchmark
<br>
<p>Also, is there a CLI way to retrieve which numa nodes / OS processors are near such devices?  I can imagine wanting to script up something like:
<br>
<p>- retrieve a mask / list of processors near OS device &lt;foo&gt;
<br>
- binding N processes, one per processor, to the processors near that device
<br>
<p><span class="quotelev1">&gt; Ideally, the os:foobar notation would be enough. But as long as we don't
</span><br>
<span class="quotelev1">&gt; have any OS name associated with (proprietary) GPUs, people will have to
</span><br>
<span class="quotelev1">&gt; identify GPUs by their PCI ids.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other ideas that we may want so support:
</span><br>
<span class="quotelev1">&gt; * PCI devices by name: something like the 2nd PCI device whose name
</span><br>
<span class="quotelev1">&gt; contains &quot;tesla C2070&quot; so that people don't have to dig into lspci
</span><br>
<span class="quotelev1">&gt; manually to find out the vendor/device IDs or busids (mostly useful for
</span><br>
<span class="quotelev1">&gt; GPUs that have no OS names)
</span><br>
<p>I immediately had that question when I read your 2nd example, above (i.e., where did you get the names from?).  Are these names in the lstopo output?
<br>
<p><span class="quotelev1">&gt; * OS devices by class: something like os:net:2 for the 2nd network
</span><br>
<span class="quotelev1">&gt; interface (not sure it's useful)
</span><br>
<p>I'm not sure it is -- isn't the ordering of PCI devices non-deterministic between cold boots?
<br>
<p><span class="quotelev1">&gt; If we want to make all the above even more unreadable, we could also
</span><br>
<span class="quotelev1">&gt; support specifying a range of indexes (pcifoo:start:amount or
</span><br>
<span class="quotelev1">&gt; pcifoo:start-end) like we already do for non-I/O objects. But I am not
</span><br>
<span class="quotelev1">&gt; sure this is actually useful. People may still specify pcifoo:0 pcifoo:1
</span><br>
<span class="quotelev1">&gt; pcifoo:2 whenever needed.
</span><br>
<p>For consistency, it doesn't sound like a bad idea.
<br>
<p><span class="quotelev1">&gt; I/O devices will not be supported through the generic hierarchical
</span><br>
<span class="quotelev1">&gt; notation &quot;socket:1.core:2...&quot; anyway. So we could make their
</span><br>
<span class="quotelev1">&gt; command-line specification totally different from the usual one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's actually the first time we select objects on something different
</span><br>
<span class="quotelev1">&gt; than just a type or a depth and some indexes. So we could introduce a
</span><br>
<span class="quotelev1">&gt; new syntax here. For instance:
</span><br>
<span class="quotelev1">&gt;   &lt;type&gt;[attributename=attributevalue,...]:index
</span><br>
<span class="quotelev1">&gt;   &lt;type&gt;[attributename=attributevalue,...]:firstindex:lastindex
</span><br>
<span class="quotelev1">&gt;   &lt;type&gt;[attributename=attributevalue,...]:firstindex:amount
</span><br>
<span class="quotelev1">&gt; Not sure it's worth doing this.
</span><br>
<p>It might be better to just put out basic functionality in 1.3 and *not* do advanced syntax like this (i.e., only do basic syntax).  And then see what people ask for.
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
<li><strong>Next message:</strong> <a href="2132.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Previous message:</strong> <a href="2130.php">Brice Goglin: "[hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>In reply to:</strong> <a href="2130.php">Brice Goglin: "[hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2132.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Reply:</strong> <a href="2132.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
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
