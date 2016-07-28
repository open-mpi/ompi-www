<?
$subject_val = "[OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 17:10:19 2014" -->
<!-- isoreceived="20140729211019" -->
<!-- sent="Tue, 29 Jul 2014 15:10:16 -0600" -->
<!-- isosent="20140729211016" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="20140729211016.GF43566_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: add atomic compare-and-swap that returns old value<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 17:10:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15328.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15326.php">Pritchard Jr., Howard: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15328.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15328.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Add new versions of opal_atomic_cmpset_* that return the old value
<br>
not whether they succeeded.
<br>
<p>Why: I plan on adding support for network atomics to the BTL
<br>
interface. The compare-and-swap function will return the old value from
<br>
the target memory location. In order to implement a similar operation
<br>
for shared memory (in vader) I need versions of the opal_atomic_cmset_*
<br>
macros that return the old value.
<br>
<p>When: If there are no objections I plan on adding these new macros in
<br>
about two weeks (Aug 12).
<br>
<p><p>I have one question associated with this RFC. Is there a reason why the
<br>
current implementations of opal atomics (add, cmpset) do not return the
<br>
old value? cmpset sort of makes sense but I found the semantics of
<br>
opal_atomic_add_* confusing (returns the new value).
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15327/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15328.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15326.php">Pritchard Jr., Howard: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15328.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15328.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
