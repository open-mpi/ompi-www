<?
$subject_val = "Re: [hwloc-devel] specifying I/O devices on the command-line";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 09:26:15 2011" -->
<!-- isoreceived="20110412132615" -->
<!-- sent="Tue, 12 Apr 2011 15:26:09 +0200" -->
<!-- isosent="20110412132609" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] specifying I/O devices on the command-line" -->
<!-- id="4DA452F1.7090005_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="79B00662-209F-4B47-9B79-4AD362D48619_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 09:26:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2133.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Previous message:</strong> <a href="2131.php">Jeff Squyres: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>In reply to:</strong> <a href="2131.php">Jeff Squyres: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2133.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/04/2011 15:14, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Apr 12, 2011, at 8:10 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am looking for a good way to specify PCI and OS devices on the
</span><br>
<span class="quotelev2">&gt;&gt; command-line (for hwloc-calc and hwloc-bind).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The trunk currently supports:
</span><br>
<span class="quotelev2">&gt;&gt; * os:foobar with for OS device named foobar (eth0, mlx4_0, ...)
</span><br>
<span class="quotelev2">&gt;&gt; * pci:0000:00:00.0 or pci:00:00.0 for a given PCI device
</span><br>
<span class="quotelev2">&gt;&gt; * pci:aaaa:bbbb:c for the c-th PCI device with vendor ID aaaa and device
</span><br>
<span class="quotelev2">&gt;&gt; ID bbbb
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The idea is basically to make it easy to bind processes near some
</span><br>
<span class="quotelev2">&gt;&gt; high-performance devices:
</span><br>
<span class="quotelev2">&gt;&gt;   hwloc-bind os:mlx4_0 &lt;mympibenchmark&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   hwloc-bind pci:nvidia:tesla:0 &lt;mycudabenchmark&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Nifty.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you list multiple devices?  E.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   hwloc-bind os:mlx4_0 os:mlx4_1 my_mpi_benchmark
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes, that works. We're just extended the way we parse a single
<br>
&quot;location&quot; on the command line. All existing operations on these
<br>
locations (add, substract, xor, negate) still work.
<br>
<p><p><span class="quotelev1">&gt; Also, is there a CLI way to retrieve which numa nodes / OS processors are near such devices?  I can imagine wanting to script up something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - retrieve a mask / list of processors near OS device &lt;foo&gt;
</span><br>
<span class="quotelev1">&gt; - binding N processes, one per processor, to the processors near that device
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Once you have a way to specify some I/O device, you can convert them
<br>
into whatever hwloc-calc can do. For instance:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc-calc os:mlx4_0 --pulist --po
<br>
gives the comma-separated list of physical indexes of PU near mlx4_0
<br>
<p>By the way, for this exact case, we should actually support:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc-distribute &lt;N&gt; --restrict $(hwloc-calc os:mlx4_0)
<br>
I'll look at this.
<br>
<p><p><span class="quotelev2">&gt;&gt; Ideally, the os:foobar notation would be enough. But as long as we don't
</span><br>
<span class="quotelev2">&gt;&gt; have any OS name associated with (proprietary) GPUs, people will have to
</span><br>
<span class="quotelev2">&gt;&gt; identify GPUs by their PCI ids.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other ideas that we may want so support:
</span><br>
<span class="quotelev2">&gt;&gt; * PCI devices by name: something like the 2nd PCI device whose name
</span><br>
<span class="quotelev2">&gt;&gt; contains &quot;tesla C2070&quot; so that people don't have to dig into lspci
</span><br>
<span class="quotelev2">&gt;&gt; manually to find out the vendor/device IDs or busids (mostly useful for
</span><br>
<span class="quotelev2">&gt;&gt; GPUs that have no OS names)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; I immediately had that question when I read your 2nd example, above (i.e., where did you get the names from?).  Are these names in the lstopo output?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>PCI names are only in the verbose output (they are usually very long).
<br>
OS names are always shown.
<br>
<p><span class="quotelev2">&gt;&gt; * OS devices by class: something like os:net:2 for the 2nd network
</span><br>
<span class="quotelev2">&gt;&gt; interface (not sure it's useful)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; I'm not sure it is -- isn't the ordering of PCI devices non-deterministic between cold boots?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>As long as you don't plug/unplug anything in between, it should be ok,
<br>
but I can't be strictly sure about this.
<br>
<p>The ordering won't change, but the OS names may still change because of
<br>
udev.
<br>
<p><span class="quotelev2">&gt;&gt; I/O devices will not be supported through the generic hierarchical
</span><br>
<span class="quotelev2">&gt;&gt; notation &quot;socket:1.core:2...&quot; anyway. So we could make their
</span><br>
<span class="quotelev2">&gt;&gt; command-line specification totally different from the usual one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's actually the first time we select objects on something different
</span><br>
<span class="quotelev2">&gt;&gt; than just a type or a depth and some indexes. So we could introduce a
</span><br>
<span class="quotelev2">&gt;&gt; new syntax here. For instance:
</span><br>
<span class="quotelev2">&gt;&gt;   &lt;type&gt;[attributename=attributevalue,...]:index
</span><br>
<span class="quotelev2">&gt;&gt;   &lt;type&gt;[attributename=attributevalue,...]:firstindex:lastindex
</span><br>
<span class="quotelev2">&gt;&gt;   &lt;type&gt;[attributename=attributevalue,...]:firstindex:amount
</span><br>
<span class="quotelev2">&gt;&gt; Not sure it's worth doing this.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; It might be better to just put out basic functionality in 1.3 and *not* do advanced syntax like this (i.e., only do basic syntax).  And then see what people ask for.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Then we need to define what &quot;basic syntax&quot; means :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2133.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Previous message:</strong> <a href="2131.php">Jeff Squyres: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>In reply to:</strong> <a href="2131.php">Jeff Squyres: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2133.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
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
