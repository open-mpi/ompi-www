<?
$subject_val = "Re: [OMPI devel] RFC: opal_list iteration macros";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 11:01:04 2013" -->
<!-- isoreceived="20130130160104" -->
<!-- sent="Thu, 31 Jan 2013 01:00:48 +0900" -->
<!-- isosent="20130130160048" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: opal_list iteration macros" -->
<!-- id="20130131010048.2e51b159299a5d92a9a3f68a_at_nifty.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20130130155355.GH99519_at_pantheralanlgov.local" -->
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
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 11:00:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12081.php">Jure Pečar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12079.php">Nathan Hjelm: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12079.php">Nathan Hjelm: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't care the macro names. Either one is OK for me.
<br>
<p>Thanks, 
<br>
KAWASHIMA Takahiro
<br>
<p><span class="quotelev1">&gt; Hmm, maybe something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OPAL_LIST_FOREACH, OPAL_LISTFOREACH_REV, OPAL_LIST_FOREACH_SAFE, OPAL_LIST_FOREACH_REV_SAFE?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 31, 2013 at 12:36:29AM +0900, KAWASHIMA Takahiro wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Agreed.
</span><br>
<span class="quotelev2">&gt; &gt; But how about backward traversal in addition to forward traversal?
</span><br>
<span class="quotelev2">&gt; &gt; e.g. OPAL_LIST_FOREACH_FW, OPAL_LIST_FOREACH_FW_SAFE,
</span><br>
<span class="quotelev2">&gt; &gt;      OPAL_LIST_FOREACH_BW, OPAL_LIST_FOREACH_BW_SAFE
</span><br>
<span class="quotelev2">&gt; &gt; We sometimes search an item from the end of a list.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, 
</span><br>
<span class="quotelev2">&gt; &gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What: Add two new macros to opal_list.h:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #define opal_list_foreach(item, list, type)                             \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next ;      \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        item = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #define opal_list_foreach_safe(item, next, list, type)                  \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next,       \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;          next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next ;\
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        item = next, next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The first macro provides a simple iterator over an unchanging list and the second macro is safe for opal_list_item_remove(item).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Why: These macros provide a clean way to do the following:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for (item = opal_list_get_first (list) ;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      item != opal_list_get_end (list) ;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      item = opal_list_get_next (item)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    some_class_t *foo = (some_class_t *) foo;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; becomes:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; some_class_t *foo;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_list_foreach(foo, list, some_class_t) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When: This is a very simple addition but I wanted to give a heads up on the devel list because these macros are different from what we usually provide (though they should look familiar to those familiar with the Linux kernel). I intend to commit these macros to the truck (and CMR for 1.7.1) tomorrow (Wed 01/29/13) around 12:00 PM MST.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thoughs? Comments?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Nathan Hjelm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HPC-3, LANL
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12081.php">Jure Pečar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12079.php">Nathan Hjelm: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12079.php">Nathan Hjelm: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
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
