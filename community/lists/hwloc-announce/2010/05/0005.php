<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.0 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 12:00:12 2010" -->
<!-- isoreceived="20100518160012" -->
<!-- sent="Tue, 18 May 2010 12:00:07 -0400" -->
<!-- isosent="20100518160007" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.0 released" -->
<!-- id="6413C760-F50D-45F0-858F-B80E05D2E3F0_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.0 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 12:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/06/0006.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.0.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/04/0004.php">Jeff Squyres: "[hwloc-announce] Hardware locality (hwloc) v1.0rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is tremendously pleased to announce the release of version 1.0:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a> 
<br>
&nbsp;&nbsp;&nbsp;(mirrors will update shortly) 
<br>
<p>hwloc provides command line tools and a C API to obtain the hierarchical map of key computing elements, such as: NUMA memory nodes, shared caches, processor sockets, processor cores, and processor &quot;threads&quot;.  hwloc also gathers various attributes such as cache and memory information, and is portable across a variety of different operating systems and platforms. 
<br>
<p>The hwloc team considers version 1.0 to be the first production-quality release that is suitable for widespread adoption.  Please send your feedback on hwloc experiences to our mailing lists (see the web site, above).
<br>
<p>The following is a summary of the changes since the v0.9 series.
<br>
<p>* The ABI of the library has changed since the v0.9 series.
<br>
* Backend updates
<br>
&nbsp;&nbsp;+ Add FreeBSD support.
<br>
&nbsp;&nbsp;+ Add x86 cpuid based backend.
<br>
&nbsp;&nbsp;+ Add Linux cgroup support to the Linux cpuset code.
<br>
&nbsp;&nbsp;+ Support binding of entire multithreaded process on Linux.
<br>
&nbsp;&nbsp;+ Fix and enable Group support in Windows.
<br>
&nbsp;&nbsp;+ Cleanup XML export/import.
<br>
* Objects
<br>
&nbsp;&nbsp;+ HWLOC_OBJ_PROC is renamed into HWLOC_OBJ_PU for &quot;Processing Unit&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;its stringified type name is now &quot;PU&quot;.
<br>
&nbsp;&nbsp;+ Use new HWLOC_OBJ_GROUP objects instead of MISC when grouping
<br>
&nbsp;&nbsp;&nbsp;&nbsp;objects according to NUMA distances or arbitrary OS aggregation.
<br>
&nbsp;&nbsp;+ Rework memory attributes.
<br>
&nbsp;&nbsp;+ Add different cpusets in each object to specify processors that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;are offline, unavailable, ...
<br>
&nbsp;&nbsp;+ Cleanup the storage of object names and DMI infos.
<br>
* Features
<br>
&nbsp;&nbsp;+ Add support for looking up specific PID topology information.
<br>
&nbsp;&nbsp;+ Add hwloc_topology_export_xml() to export the topology in a XML file.
<br>
&nbsp;&nbsp;+ Add hwloc_topology_get_support() to retrieve the supported features
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for the current topology context.
<br>
&nbsp;&nbsp;+ Support non-SYSTEM object as the root of the tree, use MACHINE in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;most common cases.
<br>
&nbsp;&nbsp;+ Add hwloc_get_*cpubind() routines to retrieve the current binding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of processes and threads.
<br>
* API
<br>
&nbsp;&nbsp;+ Add HWLOC_API_VERSION to help detect the currently used API version.
<br>
&nbsp;&nbsp;+ Add missing ending &quot;e&quot; to *compare* functions.
<br>
&nbsp;&nbsp;+ Add several routines to emulate PLPA functions.
<br>
&nbsp;&nbsp;+ Rename and rework the cpuset and/or/xor/not/clear operators to output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;their result in a dedicated argument instead of modifying one input.
<br>
&nbsp;&nbsp;+ Deprecate hwloc_obj_snprintf() in favor of hwloc_obj_type/attr_snprintf().
<br>
&nbsp;&nbsp;+ Clarify the use of parent and ancestor in the API, do not use father.
<br>
&nbsp;&nbsp;+ Replace hwloc_get_system_obj() with hwloc_get_root_obj().
<br>
&nbsp;&nbsp;+ Return -1 instead of HWLOC_OBJ_TYPE_MAX in the API since the latter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;isn't public.
<br>
&nbsp;&nbsp;+ Relax constraints in hwloc_obj_type_of_string().
<br>
&nbsp;&nbsp;+ Improve displaying of memory sizes.
<br>
&nbsp;&nbsp;+ Add 0x prefix to cpuset strings.
<br>
* Tools
<br>
&nbsp;&nbsp;+ lstopo now displays logical indexes by default, use --physical to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;revert back to OS/physical indexes.
<br>
&nbsp;&nbsp;+ Add colors in the lstopo graphical outputs to distinguish between online,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;offline, reserved, ... objects.
<br>
&nbsp;&nbsp;+ Extend lstopo to show cpusets, filter objects by type, ...
<br>
&nbsp;&nbsp;+ Renamed hwloc-mask into hwloc-calc which supports many new options.
<br>
* Documentation
<br>
&nbsp;&nbsp;+ Add a hwloc(7) manpage containing general information.
<br>
&nbsp;&nbsp;+ Add documentation about how to switch from PLPA to hwloc.
<br>
&nbsp;&nbsp;+ Cleanup the distributed documentation files.
<br>
* Miscellaneous
<br>
&nbsp;&nbsp;+ Many compilers warning fixes.
<br>
&nbsp;&nbsp;+ Cleanup the ABI by using the visibility attribute.
<br>
&nbsp;&nbsp;+ Add project embedding support.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/06/0006.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.0.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/04/0004.php">Jeff Squyres: "[hwloc-announce] Hardware locality (hwloc) v1.0rc1 released"</a>
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
