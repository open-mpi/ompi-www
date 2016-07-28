<?
$subject_val = "[OMPI devel] opal_free_list_t annoyance";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 17:01:58 2014" -->
<!-- isoreceived="20140513210158" -->
<!-- sent="Tue, 13 May 2014 15:01:55 -0600" -->
<!-- isosent="20140513210155" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_free_list_t annoyance" -->
<!-- id="20140513210155.GD93343_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] opal_free_list_t annoyance<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-13 17:01:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14786.php">Gilles Gouaillardet: "[OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14784.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.6rc1 tarball posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14798.php">George Bosilca: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Reply:</strong> <a href="14798.php">George Bosilca: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Reply:</strong> <a href="14898.php">Dave Goodell (dgoodell): "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While tracking down memory leaks in components I ran into an interesting
<br>
issue. osc/rdma uses an opal_free_list_t (not an ompi_free_list_t) for
<br>
buffer fragments. The fragment class allocates a buffer as part in the
<br>
constructor and frees the buffer in the destructor. The problem is that
<br>
the item constructor is called but the destructor is never called.
<br>
<p>I looked into the issue and I see what is happening. When growing the free
<br>
list we call the constructor for each item we allocate (see
<br>
opal_free_list.c:113) but the free list destructor does not invoke the
<br>
destructor. This is different from ompi_free_list_t which does invoke
<br>
the destructor on each constructed item.
<br>
<p>The question is. Is this difference intentional? It seems a little odd
<br>
that the free list does not call the item destructor given that it
<br>
calls the constructor. If this is intentional is there a reason for this
<br>
behavior? If not I plan on &quot;fixing&quot; the opal_free_list_t destructor to
<br>
call the item destructor.
<br>
<p>-Nathan
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14785/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14786.php">Gilles Gouaillardet: "[OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14784.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.6rc1 tarball posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14798.php">George Bosilca: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Reply:</strong> <a href="14798.php">George Bosilca: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Reply:</strong> <a href="14898.php">Dave Goodell (dgoodell): "Re: [OMPI devel] opal_free_list_t annoyance"</a>
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
