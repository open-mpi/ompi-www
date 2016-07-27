<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 04:26:10 2010" -->
<!-- isoreceived="20101202092610" -->
<!-- sent="Thu, 02 Dec 2010 10:25:23 +0100" -->
<!-- isosent="20101202092523" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="1291281923.2480.75.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1366C9D3-AD29-47FF-9A31-36B27FA69313_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] SWIG bindings<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 04:25:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1655.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1653.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3rc3r2879)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1635.php">Jeff Squyres: "[hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1655.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1655.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1658.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a perl-wrapper lib for hwloc based on hwloc-1.0.2. It is written
<br>
manually because of the pointer things. However, the lib is not
<br>
complete. I use it mainly for discovering topologies. Supporting pinning
<br>
does not make sense for perl scripts to my opinion
<br>
<p>I'm thinking about either submitting this to CPAN or to the hwloc dev
<br>
team. However, I first wanted to wait how things with hwloc 1.1 will
<br>
look, when the dust has settled somehow.
<br>
<p>Any hints or ideas?
<br>
<p>Attached you find the man page.
<br>
<p>On Tue, 2010-11-30 at 11:07 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Would anyone object if I take a whack at making some SWIG bindings for hwloc?  I'm thinking specifically for perl (because that's my scripting language of choice), but I could probably be convinced to look at python as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (this would be for 1.2 at the earliest -- definitely not for 1.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]

</pre>
<p>
NAME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hwloc - Perl Access to Portable Hardware Locality (hwloc)
<br>
<p>SYNOPSIS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use Hwloc;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Load topology
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $topology = hwloc_topology_init();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die &quot;Failed to init topology&quot; unless $topology;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $rc = hwloc_topology_load($topology);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die &quot;Failed to load topology&quot; if $rc;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Determine number of sockets and processors
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $nProcs   = hwloc_get_nbobjs_by_type($topology,HWLOC_OBJ_PU);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die &quot;Failed to determine number of processors&quot; unless $nProcs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $nSockets = hwloc_get_nbobjs_by_type($topology,HWLOC_OBJ_SOCKET);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die &quot;Failed to determine number of sockets&quot; unless $nSockets;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf &quot;Topology contains %d processors on %d sockets.\n&quot;, $nProcs, $nSockets;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Browse through processors, retrieve data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $proc = undef;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while ($proc = hwloc_get_next_obj_by_type($topology,HWLOC_OBJ_PU,$proc)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $idx  = hwloc_get_obj_data($proc,HWLOC_ObjLogicalIndex);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $id   = hwloc_get_obj_data($proc,HWLOC_ObjOsIndex);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $rank = hwloc_get_obj_data($proc,HWLOC_ObjSiblingRank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf &quot;Processor %2d: os_index %2d, sibling_rank %2d\n&quot;, $idx, $id, $rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Calculate distance between first and last processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $firstProc = hwloc_get_obj_by_type($topology,HWLOC_OBJ_PU,0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $lastProc  = hwloc_get_obj_by_type($topology,HWLOC_OBJ_PU,$nProcs-1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $ancestor  = hwloc_get_common_ancestor_obj($topology,$firstProc,$lastProc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die &quot;Failed to determine common ancestor of first and last processor&quot; unless $ancestor;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $distance  = hwloc_get_obj_data($firstProc,HWLOC_ObjDepth) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_obj_data($lastProc,HWLOC_ObjDepth)  -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2*hwloc_get_obj_data($ancestor,HWLOC_ObjDepth);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf &quot;Processors %2d and %2d are %2d levels apart.\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_obj_data($firstProc,HWLOC_ObjOsIndex),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_obj_data($lastProc,HWLOC_ObjOsIndex),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$distance;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Destroy topology
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_destroy($topology);
<br>
<p>DESCRIPTION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The Hwloc module provides a perl API for selected functions of the hwloc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C API.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Visit &lt;<a href="http://www.open-mpi.org/projects/hwloc">http://www.open-mpi.org/projects/hwloc</a>&gt; for information about
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The Hwloc module treats objects of C type *hwloc_topology_t* and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*hwloc_obj_t* as perl integers. The perl value *undef* is used to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;represent the C value NULL.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;To access the properties of a *hwloc_obj_t* object, the Hwloc module
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provides the method hwloc_get_obj_data, which is not part of the hwloc C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;API.
<br>
<p>CONSTANTS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The following constants are exported by the Hwloc module:
<br>
<p>&nbsp;&nbsp;Type of topology objects
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_MACHINE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_NODE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_SOCKET
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_CACHE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_CORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_PU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_GROUP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_MISC
<br>
<p>&nbsp;&nbsp;Topology flags
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM
<br>
<p>&nbsp;&nbsp;Properties of topology objects
<br>
&nbsp;&nbsp;&nbsp;&nbsp;These constants are used by the hwloc_get_obj_data method.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjType
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjOsIndex
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjDepth
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjLogicalIndex
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjNextCousin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjPrevCousin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjParent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjSiblingRank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjNextSibling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjPrevSibling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjArity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjFirstChild
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_ObjLastChild
<br>
<p>&nbsp;&nbsp;Misc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_API_VERSION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_TYPE_UNORDERED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_TYPE_DEPTH_UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_TYPE_DEPTH_MULTIPLE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_CPUBIND_PROCESS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_CPUBIND_THREAD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_CPUBIND_STRICT
<br>
<p>METHODS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The following methods are exported:
<br>
<p>&nbsp;&nbsp;Create and destroy topologies
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$t   = hwloc_topology_init()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rc  = hwloc_topology_set_flags($t,$flags)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rc  = hwloc_topology_load($t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_destroy($t)
<br>
<p>&nbsp;&nbsp;Get some topology information
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$val = hwloc_topology_get_depth($t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$val = hwloc_topology_get_type_depth($t,$type)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$val = hwloc_topology_get_depth_type($t,$depth)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$val = hwloc_get_nbobjs_by_depth($t,$depth)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$val = hwloc_get_nbobjs_by_type($t,$type)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$val = hwloc_topology_is_thissystem($t)
<br>
<p>&nbsp;&nbsp;Retrieve objects and their properties
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$obj = hwloc_get_obj_by_depth($t,$depth,$idx)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$obj = hwloc_get_obj_by_type($t,$type,$idx)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$val = hwloc_get_obj_data($obj,$spec)
<br>
<p>&nbsp;&nbsp;Traversal helpers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$obj = hwloc_get_root_obj($t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$obj = hwloc_get_ancestor_obj_by_depth($t,$depth,$obj)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$obj = hwloc_get_ancestor_obj_by_type($t,$type,$obj)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$obj = hwloc_get_next_obj_by_depth($t,$depth,$obj)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$obj = hwloc_get_next_obj_by_type($t,$type,$obj)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$obj = hwloc_get_pu_obj_by_os_index($t,$idx)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$obj = hwloc_get_next_child($t,$obj,$obj)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$obj = hwloc_get_common_ancestor_obj($t,$obj,$obj)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$val = hwloc_obj_is_in_subtree($t,$obj,$obj)
<br>
<p>AUTHOR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bernd Kallies, &lt;kallies_at_[hidden]&gt;
<br>
<p>COPYRIGHT AND LICENSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Copyright (C) 2010 by Bernd Kallies
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;This library is free software; you can redistribute it and/or modify it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;under the same terms as Perl itself, either Perl version 5.10.1 or, at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;your option, any later version of Perl 5 you may have available.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1655.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1653.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3rc3r2879)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1635.php">Jeff Squyres: "[hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1655.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1655.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1658.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
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
