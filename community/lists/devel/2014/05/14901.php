<?
$subject_val = "Re: [OMPI devel] opal_free_list_t annoyance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 12:35:37 2014" -->
<!-- isoreceived="20140528163537" -->
<!-- sent="Wed, 28 May 2014 10:35:36 -0600" -->
<!-- isosent="20140528163536" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_free_list_t annoyance" -->
<!-- id="20140528163536.GB44233_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56E67E00-F8C8-4110-9534-F20F5F3C868B_at_cisco.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 12:35:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14902.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Previous message:</strong> <a href="14900.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14898.php">Dave Goodell (dgoodell): "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May 28, 2014 at 03:28:59PM +0000, Dave Goodell (dgoodell) wrote:
<br>
<span class="quotelev1">&gt; On May 13, 2014, at 4:01 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; While tracking down memory leaks in components I ran into an interesting
</span><br>
<span class="quotelev2">&gt; &gt; issue. osc/rdma uses an opal_free_list_t (not an ompi_free_list_t) for
</span><br>
<span class="quotelev2">&gt; &gt; buffer fragments. The fragment class allocates a buffer as part in the
</span><br>
<span class="quotelev2">&gt; &gt; constructor and frees the buffer in the destructor. The problem is that
</span><br>
<span class="quotelev2">&gt; &gt; the item constructor is called but the destructor is never called.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I looked into the issue and I see what is happening. When growing the free
</span><br>
<span class="quotelev2">&gt; &gt; list we call the constructor for each item we allocate (see
</span><br>
<span class="quotelev2">&gt; &gt; opal_free_list.c:113) but the free list destructor does not invoke the
</span><br>
<span class="quotelev2">&gt; &gt; destructor. This is different from ompi_free_list_t which does invoke
</span><br>
<span class="quotelev2">&gt; &gt; the destructor on each constructed item.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The question is. Is this difference intentional? It seems a little odd
</span><br>
<span class="quotelev2">&gt; &gt; that the free list does not call the item destructor given that it
</span><br>
<span class="quotelev2">&gt; &gt; calls the constructor. If this is intentional is there a reason for this
</span><br>
<span class="quotelev2">&gt; &gt; behavior? If not I plan on &quot;fixing&quot; the opal_free_list_t destructor to
</span><br>
<span class="quotelev2">&gt; &gt; call the item destructor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The difference is not intentional, AFAIK.  I fixed the &quot;ompi_&quot; version back in r29096 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/29096">https://svn.open-mpi.org/trac/ompi/changeset/29096</a>), August 2013.  I was probably unaware of the &quot;opal_&quot; version at the time, hence the lack of a corresponding fix.
</span><br>
<p>Excellent. That was the answer I was looking for. We already made the
<br>
equivalent fix and it has been applied to 1.8.2.
<br>
<p>Thanks Dave.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14901/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14902.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Previous message:</strong> <a href="14900.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14898.php">Dave Goodell (dgoodell): "Re: [OMPI devel] opal_free_list_t annoyance"</a>
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
