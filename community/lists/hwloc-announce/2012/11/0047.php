<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.6rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 09:25:33 2012" -->
<!-- isoreceived="20121120142533" -->
<!-- sent="Tue, 20 Nov 2012 15:25:28 +0100" -->
<!-- isosent="20121120142528" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.6rc2 released" -->
<!-- id="50AB92D8.80500_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50A24092.1040803_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.6rc2 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 09:25:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/12/0048.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6 released"</a>
<li><strong>Previous message:</strong> <a href="0046.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0046.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just released 1.6rc2 (mirrors will update soon).
<br>
<p>Changes since rc1 are minor:
<br>
* Fix the filtering of I/O objects when importing XML topologies
<br>
* Some documentation additions about synthetic topologies
<br>
* Misc doc updates
<br>
* A minor build fix
<br>
<p>Brice
<br>
<p><p><p><p>Le 13/11/2012 13:44, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt; release candidate for v1.6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.6rc1 is the first milestone of a major feature release. It brings
</span><br>
<span class="quotelev1">&gt; a significant rework of the core which eases the combining of multiple
</span><br>
<span class="quotelev1">&gt; topology discovery sources, and future additions of new sources.
</span><br>
<span class="quotelev1">&gt; Some components may also now be built and loaded as separate plugins,
</span><br>
<span class="quotelev1">&gt; which should make distribution packagers' life easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aside of this core rework, we have the usual set of small API additions
</span><br>
<span class="quotelev1">&gt; (one may now export/import its own custom private data to XML), new
</span><br>
<span class="quotelev1">&gt; command-line tools (hwloc-annotate), new command-line options, some
</span><br>
<span class="quotelev1">&gt; small discovery improvements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They are also a couple bug fixes that were waiting for a v1.5.2 release,
</span><br>
<span class="quotelev1">&gt; that may or may not ever exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test it, and feel free to pass by the Inria booth at SC12
</span><br>
<span class="quotelev1">&gt; (#1209) to discuss all this and/or report problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version 1.6.0
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; * Major changes
</span><br>
<span class="quotelev1">&gt;   + Reorganize the backend infrastructure to support dynamic selection
</span><br>
<span class="quotelev1">&gt;     of components and dynamic loading of plugins. For details, see the
</span><br>
<span class="quotelev1">&gt;     new documentation section Components and plugins.
</span><br>
<span class="quotelev1">&gt;     - The HWLOC_COMPONENTS variable lets one replace the default discovery
</span><br>
<span class="quotelev1">&gt;       components.
</span><br>
<span class="quotelev1">&gt;     - Dynamic loading of plugins may be enabled with --enable-plugins
</span><br>
<span class="quotelev1">&gt;       (except on AIX and Windows). It will build libxml2 and libpci
</span><br>
<span class="quotelev1">&gt;       support as separated modules. This helps reducing the dependencies
</span><br>
<span class="quotelev1">&gt;       of the core hwloc library when distributed as a binary package.
</span><br>
<span class="quotelev1">&gt; * Backends
</span><br>
<span class="quotelev1">&gt;   + Add CPUModel detection on Darwin and x86/FreeBSD.
</span><br>
<span class="quotelev1">&gt;     Thanks to Robin Scher for providing ways to implement this.
</span><br>
<span class="quotelev1">&gt;   + The x86 backend now adds CPUModel info attributes to socket objects
</span><br>
<span class="quotelev1">&gt;     created by other backends that do not natively support this attribute.
</span><br>
<span class="quotelev1">&gt;   + Fix detection on FreeBSD in case of cpuset restriction. Thanks to
</span><br>
<span class="quotelev1">&gt;     Sebastian Kuzminsky for reporting the problem.
</span><br>
<span class="quotelev1">&gt; * XML
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_topology_set_userdata_import/export_callback(),
</span><br>
<span class="quotelev1">&gt;     hwloc_export_obj_userdata() and _userdata_base64() to let
</span><br>
<span class="quotelev1">&gt;     applications specify how to save/restore the custom data they placed
</span><br>
<span class="quotelev1">&gt;     in the userdata private pointer field of hwloc objects.
</span><br>
<span class="quotelev1">&gt; * Tools
</span><br>
<span class="quotelev1">&gt;   + Add hwloc-annotate program to add string info attributes to XML
</span><br>
<span class="quotelev1">&gt;     topologies.
</span><br>
<span class="quotelev1">&gt;   + Add --pid-cmd to hwloc-ps to append the output of a command to each
</span><br>
<span class="quotelev1">&gt;     PID line. May be used for showing Open MPI process ranks, see the
</span><br>
<span class="quotelev1">&gt;     hwloc-ps(1) manpage for details.
</span><br>
<span class="quotelev1">&gt;   + hwloc-bind now exits with an error if binding fails; the executable
</span><br>
<span class="quotelev1">&gt;     is not launched unless binding suceeeded or --force was given.
</span><br>
<span class="quotelev1">&gt;   + Add --quiet to hwloc-calc and hwloc-bind to hide non-fatal error
</span><br>
<span class="quotelev1">&gt;     messages.
</span><br>
<span class="quotelev1">&gt;   + Fix command-line pid support in windows tools.
</span><br>
<span class="quotelev1">&gt;   + All programs accept --verbose as a synonym to -v.
</span><br>
<span class="quotelev1">&gt; * Misc
</span><br>
<span class="quotelev1">&gt;   + Fix some DIR descriptor leaks on Linux.
</span><br>
<span class="quotelev1">&gt;   + Fix I/O device lists when some were filtered out after a XML import.
</span><br>
<span class="quotelev1">&gt;   + Add missing Backend string info on Solaris in most cases.
</span><br>
<span class="quotelev1">&gt;   + When merging objects with HWLOC_IGNORE_TYPE_KEEP_STRUCTURE or
</span><br>
<span class="quotelev1">&gt;     lstopo --merge, compare object types before deciding which one of two
</span><br>
<span class="quotelev1">&gt;     identical object to remove (e.g. keep sockets in favor of caches).
</span><br>
<span class="quotelev1">&gt;   + Add some GUID- and LID-related info attributes to OpenFabrics
</span><br>
<span class="quotelev1">&gt;     OS devices.
</span><br>
<span class="quotelev1">&gt;   + Only add CPUType socket attributes on Solaris/Sparc. Other cases
</span><br>
<span class="quotelev1">&gt;     don't report reliable information (Solaris/x86), and a replacement
</span><br>
<span class="quotelev1">&gt;     is available as the Architecture string info in the Machine object.
</span><br>
<span class="quotelev1">&gt;   + Document object attributes and string infos in a new Attributes
</span><br>
<span class="quotelev1">&gt;     section in the documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/12/0048.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6 released"</a>
<li><strong>Previous message:</strong> <a href="0046.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0046.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc1 released"</a>
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
