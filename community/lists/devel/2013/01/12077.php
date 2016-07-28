<?
$subject_val = "Re: [OMPI devel] RFC: opal_list iteration macros";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 10:36:42 2013" -->
<!-- isoreceived="20130130153642" -->
<!-- sent="Thu, 31 Jan 2013 00:36:29 +0900" -->
<!-- isosent="20130130153629" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: opal_list iteration macros" -->
<!-- id="20130131003629.cf4e9db3eb6b9075fb7fcaa6_at_nifty.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 10:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12078.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12076.php">Jure Pe&#196;&#141;ar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="12068.php">Nathan Hjelm: "[OMPI devel] RFC: opal_list iteration macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12079.php">Nathan Hjelm: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Reply:</strong> <a href="12079.php">Nathan Hjelm: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Agreed.
<br>
But how about backward traversal in addition to forward traversal?
<br>
e.g. OPAL_LIST_FOREACH_FW, OPAL_LIST_FOREACH_FW_SAFE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_LIST_FOREACH_BW, OPAL_LIST_FOREACH_BW_SAFE
<br>
We sometimes search an item from the end of a list.
<br>
<p>Thanks, 
<br>
KAWASHIMA Takahiro
<br>
<p><span class="quotelev1">&gt; What: Add two new macros to opal_list.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define opal_list_foreach(item, list, type)                             \
</span><br>
<span class="quotelev1">&gt;   for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next ;      \
</span><br>
<span class="quotelev1">&gt;        item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
</span><br>
<span class="quotelev1">&gt;        item = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define opal_list_foreach_safe(item, next, list, type)                  \
</span><br>
<span class="quotelev1">&gt;   for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next,       \
</span><br>
<span class="quotelev1">&gt;          next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next ;\
</span><br>
<span class="quotelev1">&gt;        item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
</span><br>
<span class="quotelev1">&gt;        item = next, next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
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
<span class="quotelev1">&gt;      item != opal_list_get_end (list) ;
</span><br>
<span class="quotelev1">&gt;      item = opal_list_get_next (item)) {
</span><br>
<span class="quotelev1">&gt;    some_class_t *foo = (some_class_t *) foo;
</span><br>
<span class="quotelev1">&gt;    ...
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
<span class="quotelev1">&gt;    ...
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12078.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12076.php">Jure Pe&#196;&#141;ar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="12068.php">Nathan Hjelm: "[OMPI devel] RFC: opal_list iteration macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12079.php">Nathan Hjelm: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Reply:</strong> <a href="12079.php">Nathan Hjelm: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
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
