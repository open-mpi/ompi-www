<?
$subject_val = "[OMPI devel] RFC: opal_list iteration macros";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 12:08:57 2013" -->
<!-- isoreceived="20130129170857" -->
<!-- sent="Tue, 29 Jan 2013 10:08:52 -0700" -->
<!-- isosent="20130129170852" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: opal_list iteration macros" -->
<!-- id="20130129170852.GF99519_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: opal_list iteration macros<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 12:08:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12069.php">Ralph Castain: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12067.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12069.php">Ralph Castain: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Reply:</strong> <a href="12069.php">Ralph Castain: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Reply:</strong> <a href="12077.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Add two new macros to opal_list.h:
<br>
<p>#define opal_list_foreach(item, list, type)                             \
<br>
&nbsp;&nbsp;for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next ;      \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
<br>
<p>#define opal_list_foreach_safe(item, next, list, type)                  \
<br>
&nbsp;&nbsp;for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next,       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next ;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = next, next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
<br>
<p>The first macro provides a simple iterator over an unchanging list and the second macro is safe for opal_list_item_remove(item).
<br>
<p>Why: These macros provide a clean way to do the following:
<br>
<p>for (item = opal_list_get_first (list) ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item != opal_list_get_end (list) ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = opal_list_get_next (item)) {
<br>
&nbsp;&nbsp;&nbsp;some_class_t *foo = (some_class_t *) foo;
<br>
&nbsp;&nbsp;&nbsp;...
<br>
}
<br>
<p>becomes:
<br>
<p>some_class_t *foo;
<br>
<p>opal_list_foreach(foo, list, some_class_t) {
<br>
&nbsp;&nbsp;&nbsp;...
<br>
}
<br>
<p>When: This is a very simple addition but I wanted to give a heads up on the devel list because these macros are different from what we usually provide (though they should look familiar to those familiar with the Linux kernel). I intend to commit these macros to the truck (and CMR for 1.7.1) tomorrow (Wed 01/29/13) around 12:00 PM MST.
<br>
<p>Thoughs? Comments?
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12069.php">Ralph Castain: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12067.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12069.php">Ralph Castain: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Reply:</strong> <a href="12069.php">Ralph Castain: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Reply:</strong> <a href="12077.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
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
