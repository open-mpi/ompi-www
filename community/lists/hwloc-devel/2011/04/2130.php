<?
$subject_val = "[hwloc-devel] specifying I/O devices on the command-line";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 08:10:15 2011" -->
<!-- isoreceived="20110412121015" -->
<!-- sent="Tue, 12 Apr 2011 14:10:10 +0200" -->
<!-- isosent="20110412121010" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] specifying I/O devices on the command-line" -->
<!-- id="4DA44122.3060202_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] specifying I/O devices on the command-line<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 08:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2131.php">Jeff Squyres: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Previous message:</strong> <a href="2129.php">Brice Goglin: "[hwloc-devel] 1.2rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2131.php">Jeff Squyres: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Reply:</strong> <a href="2131.php">Jeff Squyres: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Maybe reply:</strong> <a href="2133.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Maybe reply:</strong> <a href="2134.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am looking for a good way to specify PCI and OS devices on the
<br>
command-line (for hwloc-calc and hwloc-bind).
<br>
<p>The trunk currently supports:
<br>
* os:foobar with for OS device named foobar (eth0, mlx4_0, ...)
<br>
* pci:0000:00:00.0 or pci:00:00.0 for a given PCI device
<br>
* pci:aaaa:bbbb:c for the c-th PCI device with vendor ID aaaa and device
<br>
ID bbbb
<br>
<p>The idea is basically to make it easy to bind processes near some
<br>
high-performance devices:
<br>
&nbsp;&nbsp;&nbsp;hwloc-bind os:mlx4_0 &lt;mympibenchmark&gt;
<br>
&nbsp;&nbsp;&nbsp;hwloc-bind pci:nvidia:tesla:0 &lt;mycudabenchmark&gt;
<br>
<p>Ideally, the os:foobar notation would be enough. But as long as we don't
<br>
have any OS name associated with (proprietary) GPUs, people will have to
<br>
identify GPUs by their PCI ids.
<br>
<p>Other ideas that we may want so support:
<br>
* PCI devices by name: something like the 2nd PCI device whose name
<br>
contains &quot;tesla C2070&quot; so that people don't have to dig into lspci
<br>
manually to find out the vendor/device IDs or busids (mostly useful for
<br>
GPUs that have no OS names)
<br>
* OS devices by class: something like os:net:2 for the 2nd network
<br>
interface (not sure it's useful)
<br>
<p><p><p>If we want to make all the above even more unreadable, we could also
<br>
support specifying a range of indexes (pcifoo:start:amount or
<br>
pcifoo:start-end) like we already do for non-I/O objects. But I am not
<br>
sure this is actually useful. People may still specify pcifoo:0 pcifoo:1
<br>
pcifoo:2 whenever needed.
<br>
<p>I/O devices will not be supported through the generic hierarchical
<br>
notation &quot;socket:1.core:2...&quot; anyway. So we could make their
<br>
command-line specification totally different from the usual one.
<br>
<p><p>It's actually the first time we select objects on something different
<br>
than just a type or a depth and some indexes. So we could introduce a
<br>
new syntax here. For instance:
<br>
&nbsp;&nbsp;&nbsp;&lt;type&gt;[attributename=attributevalue,...]:index
<br>
&nbsp;&nbsp;&nbsp;&lt;type&gt;[attributename=attributevalue,...]:firstindex:lastindex
<br>
&nbsp;&nbsp;&nbsp;&lt;type&gt;[attributename=attributevalue,...]:firstindex:amount
<br>
Not sure it's worth doing this.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2131.php">Jeff Squyres: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Previous message:</strong> <a href="2129.php">Brice Goglin: "[hwloc-devel] 1.2rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2131.php">Jeff Squyres: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Reply:</strong> <a href="2131.php">Jeff Squyres: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Maybe reply:</strong> <a href="2133.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Maybe reply:</strong> <a href="2134.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
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
