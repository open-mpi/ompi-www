<?
$subject_val = "Re: [OMPI devel] RFC: opal_list iteration macros";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 10:54:00 2013" -->
<!-- isoreceived="20130130155400" -->
<!-- sent="Wed, 30 Jan 2013 08:53:55 -0700" -->
<!-- isosent="20130130155355" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: opal_list iteration macros" -->
<!-- id="20130130155355.GH99519_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130131003629.cf4e9db3eb6b9075fb7fcaa6_at_nifty.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 10:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12080.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12078.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="12077.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12080.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Reply:</strong> <a href="12080.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, maybe something like:
<br>
<p>OPAL_LIST_FOREACH, OPAL_LISTFOREACH_REV, OPAL_LIST_FOREACH_SAFE, OPAL_LIST_FOREACH_REV_SAFE?
<br>
<p>-Nathan
<br>
<p>On Thu, Jan 31, 2013 at 12:36:29AM +0900, KAWASHIMA Takahiro wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed.
</span><br>
<span class="quotelev1">&gt; But how about backward traversal in addition to forward traversal?
</span><br>
<span class="quotelev1">&gt; e.g. OPAL_LIST_FOREACH_FW, OPAL_LIST_FOREACH_FW_SAFE,
</span><br>
<span class="quotelev1">&gt;      OPAL_LIST_FOREACH_BW, OPAL_LIST_FOREACH_BW_SAFE
</span><br>
<span class="quotelev1">&gt; We sometimes search an item from the end of a list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, 
</span><br>
<span class="quotelev1">&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What: Add two new macros to opal_list.h:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define opal_list_foreach(item, list, type)                             \
</span><br>
<span class="quotelev2">&gt; &gt;   for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next ;      \
</span><br>
<span class="quotelev2">&gt; &gt;        item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
</span><br>
<span class="quotelev2">&gt; &gt;        item = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define opal_list_foreach_safe(item, next, list, type)                  \
</span><br>
<span class="quotelev2">&gt; &gt;   for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next,       \
</span><br>
<span class="quotelev2">&gt; &gt;          next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next ;\
</span><br>
<span class="quotelev2">&gt; &gt;        item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
</span><br>
<span class="quotelev2">&gt; &gt;        item = next, next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The first macro provides a simple iterator over an unchanging list and the second macro is safe for opal_list_item_remove(item).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Why: These macros provide a clean way to do the following:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; for (item = opal_list_get_first (list) ;
</span><br>
<span class="quotelev2">&gt; &gt;      item != opal_list_get_end (list) ;
</span><br>
<span class="quotelev2">&gt; &gt;      item = opal_list_get_next (item)) {
</span><br>
<span class="quotelev2">&gt; &gt;    some_class_t *foo = (some_class_t *) foo;
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; becomes:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; some_class_t *foo;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; opal_list_foreach(foo, list, some_class_t) {
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When: This is a very simple addition but I wanted to give a heads up on the devel list because these macros are different from what we usually provide (though they should look familiar to those familiar with the Linux kernel). I intend to commit these macros to the truck (and CMR for 1.7.1) tomorrow (Wed 01/29/13) around 12:00 PM MST.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thoughs? Comments?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan Hjelm
</span><br>
<span class="quotelev2">&gt; &gt; HPC-3, LANL
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
<li><strong>Next message:</strong> <a href="12080.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12078.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="12077.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12080.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Reply:</strong> <a href="12080.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
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
