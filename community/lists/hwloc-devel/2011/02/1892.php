<?
$subject_val = "Re: [hwloc-devel] git repo for python bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 17:14:45 2011" -->
<!-- isoreceived="20110201221445" -->
<!-- sent="Tue, 01 Feb 2011 16:14:39 -0600" -->
<!-- isosent="20110201221439" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git repo for python bindings" -->
<!-- id="4D4885CF.7010200_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D39B8F4.6070707_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] git repo for python bindings<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 17:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1893.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3143)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/01/1891.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3138)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/01/1875.php">Guy Streeter: "[hwloc-devel] git repo for python bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/21/2011 10:48 AM, Guy Streeter wrote:
<br>
<span class="quotelev1">&gt; The python bindings are now available at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.fedorahosted.org/git/python-hwloc.git">http://git.fedorahosted.org/git/python-hwloc.git</a>
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; git://git.fedorahosted.org/python-hwloc.git
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Guy
</span><br>
<p>I have significantly updated the python bindings implementation:
<br>
<p>Renamed the classes; Topology, Obj, Bitmap, etc.
<br>
<p>Removed the unnecessary hwloc_ prefix everywhere.
<br>
<p>(physically, in the source code) separated the helpers from the API and 
<br>
gathered them by the doxygen groups in helpers.h
<br>
<p>Implemented more iterators.
<br>
<p>Corrected a few bugs.
<br>
<p>Made sure that all of the hwloc_obj except userdata is readonly.
<br>
<p>Changed the accessors for bitmaps in the hwlog_obj structure so they always 
<br>
return a copy of the bitmap. This prevent accidental modification of the const 
<br>
data.
<br>
<p>Made a few enhancements to my python implementation of lstopo.
<br>
<p>Implemented hwloc-distrib and hwloc-calc in python.
<br>
<p>Other things I can't think of right now.
<br>
<p>--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1893.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3143)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/01/1891.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3138)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/01/1875.php">Guy Streeter: "[hwloc-devel] git repo for python bindings"</a>
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
