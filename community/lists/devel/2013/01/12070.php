<?
$subject_val = "Re: [OMPI devel] RFC: opal_list iteration macros";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 12:22:15 2013" -->
<!-- isoreceived="20130129172215" -->
<!-- sent="Tue, 29 Jan 2013 17:22:09 +0000" -->
<!-- isosent="20130129172209" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: opal_list iteration macros" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CBB79C_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="14496534-9C85-4EA8-9598-ED5D70BB5909_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 12:22:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]"</a>
<li><strong>Previous message:</strong> <a href="12069.php">Ralph Castain: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12069.php">Ralph Castain: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12077.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Agreed.  I like the idea, and recognize that it is inspired by Linux kernel macros.  But I would prefer them to be upper case to match our conventions.
<br>
<p>Also, please be sure to put in good comments explaining their use in the .h file.
<br>
<p>Thanks!
<br>
<p><p>On Jan 29, 2013, at 12:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ja, I've considered a similar addition on occasion. +1 from me
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only comment: you should change these to match our convention by making the macros be capital letters: e.g., OPAL_LIST_FOREACH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2013, at 9:08 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What: Add two new macros to opal_list.h:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define opal_list_foreach(item, list, type)                             \
</span><br>
<span class="quotelev2">&gt;&gt; for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next ;      \
</span><br>
<span class="quotelev2">&gt;&gt;      item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
</span><br>
<span class="quotelev2">&gt;&gt;      item = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define opal_list_foreach_safe(item, next, list, type)                  \
</span><br>
<span class="quotelev2">&gt;&gt; for (item = (type *) (list)-&gt;opal_list_sentinel.opal_list_next,       \
</span><br>
<span class="quotelev2">&gt;&gt;        next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next ;\
</span><br>
<span class="quotelev2">&gt;&gt;      item != (type *) &amp;(list)-&gt;opal_list_sentinel ;                   \
</span><br>
<span class="quotelev2">&gt;&gt;      item = next, next = (type *) ((opal_list_item_t *) (item))-&gt;opal_list_next)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The first macro provides a simple iterator over an unchanging list and the second macro is safe for opal_list_item_remove(item).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why: These macros provide a clean way to do the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; for (item = opal_list_get_first (list) ;
</span><br>
<span class="quotelev2">&gt;&gt;    item != opal_list_get_end (list) ;
</span><br>
<span class="quotelev2">&gt;&gt;    item = opal_list_get_next (item)) {
</span><br>
<span class="quotelev2">&gt;&gt;  some_class_t *foo = (some_class_t *) foo;
</span><br>
<span class="quotelev2">&gt;&gt;  ...
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; becomes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; some_class_t *foo;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_list_foreach(foo, list, some_class_t) {
</span><br>
<span class="quotelev2">&gt;&gt;  ...
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When: This is a very simple addition but I wanted to give a heads up on the devel list because these macros are different from what we usually provide (though they should look familiar to those familiar with the Linux kernel). I intend to commit these macros to the truck (and CMR for 1.7.1) tomorrow (Wed 01/29/13) around 12:00 PM MST.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thoughs? Comments?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3, LANL
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]"</a>
<li><strong>Previous message:</strong> <a href="12069.php">Ralph Castain: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12069.php">Ralph Castain: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12077.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
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
