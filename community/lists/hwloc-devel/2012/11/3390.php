<?
$subject_val = "[hwloc-devel] doing a hwloc v1.6rc1 soon";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 12 05:27:15 2012" -->
<!-- isoreceived="20121112102715" -->
<!-- sent="Mon, 12 Nov 2012 03:27:05 -0700" -->
<!-- isosent="20121112102705" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] doing a hwloc v1.6rc1 soon" -->
<!-- id="50A0CEF9.7060903_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] doing a hwloc v1.6rc1 soon<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-12 05:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3391.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5045)"</a>
<li><strong>Previous message:</strong> <a href="3389.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5041)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am planning to release a hwloc v1.6rc1 today or tomorrow unless
<br>
somebody complains. The full list of NEWS is listed below. And it would
<br>
contain some fixes that are pending in the v1.5.x branch (listed below too).
<br>
<p>The big change is obviously the rework of backends/components, but I
<br>
don't expect many problems there since I did quite a lot of testing.
<br>
Support for dynamically-loaded plugins is disabled by default (it's
<br>
mostly useful for distribution packagers), so hopefully it won't break
<br>
any existing installation. This work will significantly ease future
<br>
improvements since we'll now be able to use external libraries (cuda,
<br>
display/GL, openfabrics) without causing to much pain to packagers.
<br>
<p>There are also a usual pile of minor improvements everywhere.
<br>
<p>Brice
<br>
<p><p>Version 1.6.0
<br>
-------------
<br>
* Major changes
<br>
&nbsp;&nbsp;+ Reorganize the backend infrastructure to support dynamic selection
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of components and dynamic loading of plugins. For details, see the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;new documentation section Components and plugins.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- The HWLOC_COMPONENTS variable lets one replace the default discovery
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;components.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Dynamic loading of plugins may be enabled with --enable-plugins
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(except on AIX and Windows). It will build libxml2 and libpci
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support as separated modules. This helps reducing the dependencies
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the core hwloc library when distributed as a binary package.
<br>
* Backends
<br>
&nbsp;&nbsp;+ Add CPUModel detection on Darwin and x86/FreeBSD.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Robin Scher for providing ways to implement this.
<br>
&nbsp;&nbsp;+ The x86 backend now adds CPUModel info attributes to socket objects
<br>
&nbsp;&nbsp;&nbsp;&nbsp;created by other backends that do not natively support this attribute.
<br>
&nbsp;&nbsp;+ Fix detection on FreeBSD in case of cpuset restriction. Thanks to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Sebastian Kuzminsky for reporting the problem.
<br>
* XML
<br>
&nbsp;&nbsp;+ Add hwloc_topology_set_userdata_import/export_callback(),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_export_obj_userdata() and _userdata_base64() to let
<br>
&nbsp;&nbsp;&nbsp;&nbsp;applications specify how to save/restore the custom data they placed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;in the userdata private pointer field of hwloc objects.
<br>
* Tools
<br>
&nbsp;&nbsp;+ Add hwloc-annotate program to add string info attributes to XML
<br>
&nbsp;&nbsp;&nbsp;&nbsp;topologies.
<br>
&nbsp;&nbsp;+ Add --pid-cmd to hwloc-ps to append the output of a command to each
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PID line. May be used for showing Open MPI process ranks, see the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc-ps(1) manpage for details.
<br>
&nbsp;&nbsp;+ hwloc-bind now exits with an error if binding fails; the executable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is not launched unless binding suceeeded or --force was given.
<br>
&nbsp;&nbsp;+ Add --quiet to hwloc-calc and hwloc-bind to hide non-fatal error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;messages.
<br>
&nbsp;&nbsp;+ Fix command-line pid support in windows tools.
<br>
&nbsp;&nbsp;+ All programs accept --verbose as a synonym to -v.
<br>
* Misc
<br>
&nbsp;&nbsp;+ When merging objects with HWLOC_IGNORE_TYPE_KEEP_STRUCTURE or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lstopo --merge, compare object types before deciding which one of two
<br>
&nbsp;&nbsp;&nbsp;&nbsp;identical object to remove (e.g. keep sockets in favor of caches).
<br>
&nbsp;&nbsp;+ Add some GUID- and LID-related info attributes to OpenFabrics
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OS devices.
<br>
&nbsp;&nbsp;+ Only add CPUType socket attributes on Solaris/Sparc. Other cases
<br>
&nbsp;&nbsp;&nbsp;&nbsp;don't report reliable information (Solaris/x86), and a replacement
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is available as the Architecture string info in the Machine object.
<br>
&nbsp;&nbsp;+ Document object attributes and string infos in a new Attributes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;section in the documentation.
<br>
<p><p>Version 1.5.2
<br>
-------------
<br>
* Fix some DIR descriptor leaks on Linux.
<br>
* Fix I/O device lists when some were filtered out after a XML import.
<br>
* Add missing Backend string info on Solaris in most cases.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3391.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5045)"</a>
<li><strong>Previous message:</strong> <a href="3389.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5041)"</a>
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
