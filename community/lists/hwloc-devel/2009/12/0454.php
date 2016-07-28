<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 06:31:17 2009" -->
<!-- isoreceived="20091202113117" -->
<!-- sent="Wed, 02 Dec 2009 12:31:06 +0100" -->
<!-- isosent="20091202113106" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="4B164FFA.2060602_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B0AD386.9030903_at_inria.fr" -->
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
<strong>Date:</strong> 2009-12-02 06:31:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0455.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="0453.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1407)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/11/0419.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0502.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0502.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, having a &quot;simple&quot; API like that might be a Good Thing...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I.e., just be able to bind to a specific thread/core/socket with a
</span><br>
<span class="quotelev2">&gt;&gt; minimum fuss/muss. Even if such an API would be mainly syntactic sugar
</span><br>
<span class="quotelev2">&gt;&gt; for other hwloc functionality -- there definitely is something to be
</span><br>
<span class="quotelev2">&gt;&gt; said for &quot;make the simple things simple&quot;.  It will definitely (IMNSHO)
</span><br>
<span class="quotelev2">&gt;&gt; extend hwloc's reach into a larger class of applications.  Meaning:
</span><br>
<span class="quotelev2">&gt;&gt; there are a variety of hard-coded apps out there that we'll never see;
</span><br>
<span class="quotelev2">&gt;&gt; apps that run on specific servers for specific purposes, where the
</span><br>
<span class="quotelev2">&gt;&gt; developers hard code in there &quot;bind to cores 1-4&quot; or &quot;bind to sockets
</span><br>
<span class="quotelev2">&gt;&gt; 1,3&quot; because they already know the setup and this app is not intended
</span><br>
<span class="quotelev2">&gt;&gt; to be portable.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking at what we could add to the main API/helpers, here's what
</span><br>
<span class="quotelev1">&gt; could be useful:
</span><br>
<span class="quotelev1">&gt; * get_obj_under_by_type(topology, type, index, subtype, subindex)
</span><br>
<span class="quotelev1">&gt; returns for instance core 2 under socket 3. It's very easy
</span><br>
<span class="quotelev1">&gt; (get_obj_by_type+get_obj_inside_cpuset_by_type).
</span><br>
<span class="quotelev1">&gt; * Some people might want _under_under with 3 types/indexes. Not sure we
</span><br>
<span class="quotelev1">&gt; want it, or want to make it generic with arrays of types/indexes...
</span><br>
<span class="quotelev1">&gt; * Generic conversion routines between os_index and logical_index, like
</span><br>
<span class="quotelev1">&gt; get_obj_by_os_index(type, os_index) and get_os_index_by_type(type, index)
</span><br>
<span class="quotelev1">&gt; * Some kind of processor flag which tells us whether a physical proc
</span><br>
<span class="quotelev1">&gt; exists and is online
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Any opinion about this? Should we drop the current plpa.h and just add
<br>
the above new inlines to helper.h? (with some documentation about
<br>
switching from PLPA into these new functions)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0455.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="0453.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1407)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/11/0419.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0502.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0502.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
