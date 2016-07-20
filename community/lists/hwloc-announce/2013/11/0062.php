<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.8rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 09:06:25 2013" -->
<!-- isoreceived="20131106140625" -->
<!-- sent="Wed, 06 Nov 2013 15:06:23 +0100" -->
<!-- isosent="20131106140623" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.8rc1 released" -->
<!-- id="527A4CDF.307_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 09:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0063.php">Brice Goglin: "[hwloc-announce] hwloc @ SC13 next week"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/09/0061.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.7.2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate for v1.8:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.8rc1 is the first milestone of a major feature release.
<br>
It adds PCI discovery on Linux without dependencies on external libs,
<br>
a new API to manipulate differences between very similar topologies,
<br>
multiple improvements to command-line tools, and more.
<br>
<p>* New components
<br>
&nbsp;&nbsp;+ Add the &quot;linuxpci&quot; component that always works on Linux even when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libpciaccess and libpci aren't available (and even with a modified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;file-system root). By default the old &quot;pci&quot; component runs first
<br>
&nbsp;&nbsp;&nbsp;&nbsp;because &quot;linuxpci&quot; lacks device names (obj-&gt;name is always NULL).
<br>
* API
<br>
&nbsp;&nbsp;+ Add the topology difference API in hwloc/diff.h for manipulating
<br>
&nbsp;&nbsp;&nbsp;&nbsp;many similar topologies.
<br>
&nbsp;&nbsp;+ Add hwloc_topology_dup() for duplicating an entire topology.
<br>
&nbsp;&nbsp;+ hwloc.h and hwloc/helper.h have been reorganized to clarify the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;documentation sections. The actual inline code has moved out of hwloc.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;into the new hwloc/inlines.h.
<br>
&nbsp;&nbsp;+ Deprecated functions are now in hwloc/deprecated.h, and not in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;official documentation anymore.
<br>
* Tools
<br>
&nbsp;&nbsp;+ Add hwloc-diff and hwloc-patch tools together with the new diff API.
<br>
&nbsp;&nbsp;+ Add hwloc-compress-dir to (de)compress an entire directory of XML files
<br>
&nbsp;&nbsp;&nbsp;&nbsp;using hwloc-diff and hwloc-patch.
<br>
&nbsp;&nbsp;+ Object colors in the graphical output of lstopo may be changed by adding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a &quot;lstopoStyle&quot; info attribute. See CUSTOM COLORS in the lstopo(1) manpage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for details. Thanks to Jirka Hladky for discussing the idea.
<br>
&nbsp;&nbsp;+ hwloc-gather-topology may now gather I/O-related files on Linux when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--io is given. Only the linuxpci component supports discovering I/O
<br>
&nbsp;&nbsp;&nbsp;&nbsp;objects from these extended tarballs.
<br>
&nbsp;&nbsp;+ hwloc-annotate now supports --ri to remove/replace info attributes with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a given name.
<br>
&nbsp;&nbsp;+ hwloc-info supports &quot;root&quot; and &quot;all&quot; special locations for dumping
<br>
&nbsp;&nbsp;&nbsp;&nbsp;information about the root object.
<br>
&nbsp;&nbsp;+ lstopo now supports --append-legend to append custom lines of text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to the legend in the graphical output. Thanks to Jirka Hladky for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;discussing the idea.
<br>
&nbsp;&nbsp;+ hwloc-calc and friends have a more robust parsing of locations given
<br>
&nbsp;&nbsp;&nbsp;&nbsp;on the command-line and they report useful error messages about it.
<br>
&nbsp;&nbsp;+ Add --whole-system to hwloc-bind, hwloc-calc, hwloc-distances and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc-distrib, and add --restrict to hwloc-bind for uniformity among
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tools.
<br>
* Misc
<br>
&nbsp;&nbsp;+ Calling hwloc_topology_load() or hwloc_topology_set_*() on an already
<br>
&nbsp;&nbsp;&nbsp;&nbsp;loaded topology now returns an error (deprecated since release 1.6.1).
<br>
&nbsp;&nbsp;+ Fix the initialisation of cpusets and nodesets in Group objects added
<br>
&nbsp;&nbsp;&nbsp;&nbsp;when inserting PCI hostbridges.
<br>
&nbsp;&nbsp;+ Never merge Group objects that were added explicitly by the user with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_custom_insert_group_object_by_parent().
<br>
&nbsp;&nbsp;+ Add a sanity check during dynamic plugin loading to prevent some
<br>
&nbsp;&nbsp;&nbsp;&nbsp;crashes when hwloc is dynamically loaded by another plugin mechanisms.
<br>
&nbsp;&nbsp;+ Add --with-hwloc-plugins-path to specify the install/load directories
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of plugins.
<br>
&nbsp;&nbsp;+ Add the MICSerialNumber info attribute to the root object when running
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc inside a Xeon Phi to match the same attribute in the MIC OS device
<br>
&nbsp;&nbsp;&nbsp;&nbsp;when running in the host.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0063.php">Brice Goglin: "[hwloc-announce] hwloc @ SC13 next week"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/09/0061.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.7.2 released"</a>
<!-- nextthread="start" -->
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
