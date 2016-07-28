<?
$subject_val = "Re: [OMPI devel] opal_free_list_t annoyance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 11:29:01 2014" -->
<!-- isoreceived="20140528152901" -->
<!-- sent="Wed, 28 May 2014 15:28:59 +0000" -->
<!-- isosent="20140528152859" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_free_list_t annoyance" -->
<!-- id="56E67E00-F8C8-4110-9534-F20F5F3C868B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140513210155.GD93343_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_free_list_t annoyance<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 11:28:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14899.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14897.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14785.php">Nathan Hjelm: "[OMPI devel] opal_free_list_t annoyance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14901.php">Nathan Hjelm: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Reply:</strong> <a href="14901.php">Nathan Hjelm: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 13, 2014, at 4:01 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; While tracking down memory leaks in components I ran into an interesting
</span><br>
<span class="quotelev1">&gt; issue. osc/rdma uses an opal_free_list_t (not an ompi_free_list_t) for
</span><br>
<span class="quotelev1">&gt; buffer fragments. The fragment class allocates a buffer as part in the
</span><br>
<span class="quotelev1">&gt; constructor and frees the buffer in the destructor. The problem is that
</span><br>
<span class="quotelev1">&gt; the item constructor is called but the destructor is never called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked into the issue and I see what is happening. When growing the free
</span><br>
<span class="quotelev1">&gt; list we call the constructor for each item we allocate (see
</span><br>
<span class="quotelev1">&gt; opal_free_list.c:113) but the free list destructor does not invoke the
</span><br>
<span class="quotelev1">&gt; destructor. This is different from ompi_free_list_t which does invoke
</span><br>
<span class="quotelev1">&gt; the destructor on each constructed item.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The question is. Is this difference intentional? It seems a little odd
</span><br>
<span class="quotelev1">&gt; that the free list does not call the item destructor given that it
</span><br>
<span class="quotelev1">&gt; calls the constructor. If this is intentional is there a reason for this
</span><br>
<span class="quotelev1">&gt; behavior? If not I plan on &quot;fixing&quot; the opal_free_list_t destructor to
</span><br>
<span class="quotelev1">&gt; call the item destructor.
</span><br>
<p>The difference is not intentional, AFAIK.  I fixed the &quot;ompi_&quot; version back in r29096 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/29096">https://svn.open-mpi.org/trac/ompi/changeset/29096</a>), August 2013.  I was probably unaware of the &quot;opal_&quot; version at the time, hence the lack of a corresponding fix.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14899.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14897.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14785.php">Nathan Hjelm: "[OMPI devel] opal_free_list_t annoyance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14901.php">Nathan Hjelm: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Reply:</strong> <a href="14901.php">Nathan Hjelm: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
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
