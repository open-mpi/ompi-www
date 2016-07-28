<?
$subject_val = "Re: [OMPI devel] RFC: opal_list iteration macros";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 12:18:12 2013" -->
<!-- isoreceived="20130129171812" -->
<!-- sent="Tue, 29 Jan 2013 09:18:05 -0800" -->
<!-- isosent="20130129171805" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: opal_list iteration macros" -->
<!-- id="14496534-9C85-4EA8-9598-ED5D70BB5909_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130129170852.GF99519_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: opal_list iteration macros<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 12:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12068.php">Nathan Hjelm: "[OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12068.php">Nathan Hjelm: "[OMPI devel] RFC: opal_list iteration macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Reply:</strong> <a href="12070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ja, I've considered a similar addition on occasion. +1 from me
<br>
<p>Only comment: you should change these to match our convention by making the macros be capital letters: e.g., OPAL_LIST_FOREACH
<br>
<p>On Jan 29, 2013, at 9:08 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What: Add two new macros to opal_list.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define opal_list_foreach(item, list, type)                             \
</span><br>
<span class="quotelev1">&gt;  for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next ;      \
</span><br>
<span class="quotelev1">&gt;       item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
</span><br>
<span class="quotelev1">&gt;       item = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define opal_list_foreach_safe(item, next, list, type)                  \
</span><br>
<span class="quotelev1">&gt;  for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next,       \
</span><br>
<span class="quotelev1">&gt;         next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next ;\
</span><br>
<span class="quotelev1">&gt;       item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
</span><br>
<span class="quotelev1">&gt;       item = next, next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first macro provides a simple iterator over an unchanging list and the second macro is safe for opal_list_item_remove(item).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: These macros provide a clean way to do the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for (item = opal_list_get_first (list) ;
</span><br>
<span class="quotelev1">&gt;     item != opal_list_get_end (list) ;
</span><br>
<span class="quotelev1">&gt;     item = opal_list_get_next (item)) {
</span><br>
<span class="quotelev1">&gt;   some_class_t *foo = (some_class_t *) foo;
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; becomes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; some_class_t *foo;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_list_foreach(foo, list, some_class_t) {
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: This is a very simple addition but I wanted to give a heads up on the devel list because these macros are different from what we usually provide (though they should look familiar to those familiar with the Linux kernel). I intend to commit these macros to the truck (and CMR for 1.7.1) tomorrow (Wed 01/29/13) around 12:00 PM MST.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughs? Comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12068.php">Nathan Hjelm: "[OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12068.php">Nathan Hjelm: "[OMPI devel] RFC: opal_list iteration macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Reply:</strong> <a href="12070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
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
