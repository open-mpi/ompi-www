<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 13:25:21 2009" -->
<!-- isoreceived="20091123182521" -->
<!-- sent="Mon, 23 Nov 2009 19:25:10 +0100" -->
<!-- isosent="20091123182510" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="4B0AD386.9030903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="19B840D6-400D-4BD7-BD2A-C8540CF1FEE5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 13:25:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0420.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1371)"</a>
<li><strong>Previous message:</strong> <a href="0418.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0387.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/12/0454.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/12/0454.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; FWIW, having a &quot;simple&quot; API like that might be a Good Thing...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e., just be able to bind to a specific thread/core/socket with a
</span><br>
<span class="quotelev1">&gt; minimum fuss/muss. Even if such an API would be mainly syntactic sugar
</span><br>
<span class="quotelev1">&gt; for other hwloc functionality -- there definitely is something to be
</span><br>
<span class="quotelev1">&gt; said for &quot;make the simple things simple&quot;.  It will definitely (IMNSHO)
</span><br>
<span class="quotelev1">&gt; extend hwloc's reach into a larger class of applications.  Meaning:
</span><br>
<span class="quotelev1">&gt; there are a variety of hard-coded apps out there that we'll never see;
</span><br>
<span class="quotelev1">&gt; apps that run on specific servers for specific purposes, where the
</span><br>
<span class="quotelev1">&gt; developers hard code in there &quot;bind to cores 1-4&quot; or &quot;bind to sockets
</span><br>
<span class="quotelev1">&gt; 1,3&quot; because they already know the setup and this app is not intended
</span><br>
<span class="quotelev1">&gt; to be portable.
</span><br>
<p>I am looking at what we could add to the main API/helpers, here's what
<br>
could be useful:
<br>
* get_obj_under_by_type(topology, type, index, subtype, subindex)
<br>
returns for instance core 2 under socket 3. It's very easy
<br>
(get_obj_by_type+get_obj_inside_cpuset_by_type).
<br>
* Some people might want _under_under with 3 types/indexes. Not sure we
<br>
want it, or want to make it generic with arrays of types/indexes...
<br>
* Generic conversion routines between os_index and logical_index, like
<br>
get_obj_by_os_index(type, os_index) and get_os_index_by_type(type, index)
<br>
* Some kind of processor flag which tells us whether a physical proc
<br>
exists and is online
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0420.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1371)"</a>
<li><strong>Previous message:</strong> <a href="0418.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0387.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/12/0454.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/12/0454.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
