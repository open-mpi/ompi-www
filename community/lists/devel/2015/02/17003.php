<?
$subject_val = "[OMPI devel] RFC: merge opal_free_list_t and ompi_free_list_t";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 17:34:30 2015" -->
<!-- isoreceived="20150219223430" -->
<!-- sent="Thu, 19 Feb 2015 15:34:28 -0700" -->
<!-- isosent="20150219223428" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: merge opal_free_list_t and ompi_free_list_t" -->
<!-- id="20150219223428.GG1830_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: merge opal_free_list_t and ompi_free_list_t<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 17:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17004.php">Dave Turner: "Re: [OMPI devel] devel Digest, Vol 2917, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="17002.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Merge the opal_free_list_t and ompi_free_list_t implementations
<br>
and add explicit interfaces for single and multi-threaded use.
<br>
<p>Why: Historically these two lists were different due to ompi_free_list_t
<br>
dependencies in ompi (mpool). Those dependencies have since been moved
<br>
to opal so it is safe to (finally) combine them. The combined free
<br>
list comes in three flavors:
<br>
<p>&nbsp;- Single-threaded. Only to be used when it is guaranteed that no
<br>
&nbsp;&nbsp;&nbsp;concurrent access will be made to the free list. Single-threaded
<br>
&nbsp;&nbsp;&nbsp;functions are suffixed with _st.
<br>
<p>&nbsp;- Mutli-threaded. To be used when the free list may be accessed by
<br>
&nbsp;&nbsp;&nbsp;multiple threads despite the setting of opal_using_threads.
<br>
&nbsp;&nbsp;&nbsp;Multi-threaded functins are suffixed with _mt.
<br>
<p>&nbsp;- Conditionally multi-threaded. Common use case. These functions are
<br>
&nbsp;&nbsp;&nbsp;thread-safe if opal_using_threads is set to true.
<br>
<p>Compatibility functions for the ompi_free_list_t and the old accessor
<br>
functions (OPAL_FREE_LIST_*) are available while the code base is
<br>
transitioned to the new class/functions.
<br>
<p>Additional changes to the free list:
<br>
<p>&nbsp;- Added a new argument to opal_free_list_init: mpool_reg_flags. These
<br>
&nbsp;&nbsp;&nbsp;flags will be passed to the mpool allocation function for all free
<br>
&nbsp;&nbsp;&nbsp;list allocations.
<br>
<p>&nbsp;- Free list item initializer functions now return an integer to
<br>
&nbsp;&nbsp;&nbsp;indicate success or failure. This allows initializtion function that
<br>
&nbsp;&nbsp;&nbsp;perform allocation to indicate whether the free list item is
<br>
&nbsp;&nbsp;&nbsp;usable. If an initializer returns an error the item will not be added
<br>
&nbsp;&nbsp;&nbsp;to the free list.
<br>
<p>Additionally, I took this opportunity to clean up the initialization
<br>
functions. Instead of providing multiple flavors of initialization
<br>
(ompi_free_list_init, ompi_free_list_init_new, ompi_free_list_init_ex,
<br>
etc) there is only a single free list initializer: opal_free_list_init.
<br>
<p>On additional thought: some free list users store the opal_free_list_t
<br>
their item belongs to in their opal_free_list_item_t subclass
<br>
(ex. btl/sm/btl_sm_frag.h) so that the appropriate opal_free_list_t can
<br>
be passed to opal_free_list_return. We could add an opal_free_list_t *
<br>
to opal_free_list_item_t and change:
<br>
<p>void opal_free_list_return (opal_free_list_t *, opal_free_list_item_t
<br>
*);
<br>
<p>to
<br>
<p>void opal_free_list_return (opal_free_list_item_t *);
<br>
<p>It would simplify some code with the cost of 8 bytes per free list
<br>
item. If this is acceptable I can add the change to this RFC.
<br>
<p><p><p>When: Friday Mar 6. This gives me time to talk face-to-face with some of
<br>
you at the MPI forum.
<br>
<p><p>PR: <a href="https://github.com/open-mpi/ompi/pull/407">https://github.com/open-mpi/ompi/pull/407</a>
<br>
<p><p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17003/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17004.php">Dave Turner: "Re: [OMPI devel] devel Digest, Vol 2917, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="17002.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
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
