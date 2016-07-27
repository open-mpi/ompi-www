<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 04:56:46 2009" -->
<!-- isoreceived="20091222095646" -->
<!-- sent="Tue, 22 Dec 2009 10:56:41 +0100" -->
<!-- isosent="20091222095641" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="4B3097D9.7010805_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B21787C.9090501_at_inria.fr" -->
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
<strong>Date:</strong> 2009-12-22 04:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0549.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1515)"</a>
<li><strong>Previous message:</strong> <a href="0547.php">Chris Samuel: "Re: [hwloc-devel] &quot;compar&quot;"</a>
<li><strong>In reply to:</strong> <a href="0506.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/11/0386.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
<span class="quotelev3">&gt;&gt;&gt; and Jeff has already removed the PLPA tests from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk, I am going to add (1) and probably (3), and document (2) and (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the PLPA doc section. Then I'll move most comments from plpa.h into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this doc section and remove plpa.h entirely.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; How about having a v-like interface like you mentioned in #2?  (analogous to writev, etc. -- takes an array)
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Here's an untested proposal. Not sure about the function name and the
<br>
documentation. Any better idea would be much appreciated.
<br>
<p>Brice
<br>
<p><p><p>/** \brief Find an object below a chain of objects specified by types and indexes.
<br>
&nbsp;*
<br>
&nbsp;* Arrays \p typev and \p idxv must contain \p nr types and indexes.
<br>
&nbsp;*
<br>
&nbsp;* Start from the top system object and walk the arrays \p typev and \p idxv.
<br>
&nbsp;* For each type and index couple in the arrays, look under the previously found
<br>
&nbsp;* object to find the index-th object of the given type.
<br>
&nbsp;*/
<br>
static __inline hwloc_obj_t
<br>
hwloc_get_obj_below_array_by_type (hwloc_topology_t topology, int nr, hwloc_obj_type_t *typev, unsigned *idxv)
<br>
{
<br>
&nbsp;&nbsp;hwloc_obj_t obj = hwloc_get_system_obj(topology);
<br>
&nbsp;&nbsp;int i;
<br>
<p>&nbsp;&nbsp;for(i=0; i&lt;nr; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;obj = hwloc_get_obj_inside_cpuset_by_type(topology, obj-&gt;cpuset, typev[i], idxv[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!obj)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;return obj;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0549.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1515)"</a>
<li><strong>Previous message:</strong> <a href="0547.php">Chris Samuel: "Re: [hwloc-devel] &quot;compar&quot;"</a>
<li><strong>In reply to:</strong> <a href="0506.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/11/0386.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
