<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 15:42:59 2014" -->
<!-- isoreceived="20140718194259" -->
<!-- sent="Fri, 18 Jul 2014 12:42:00 -0700" -->
<!-- isosent="20140718194200" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="351C8D4D-FE5B-456A-A0F9-3C695C8CA83A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tzSwbXqWC_oHQ8E6jzisEfgAf+De3gNgCZDQA7kPnz+Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-18 15:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15203.php">Yossi Etigin: "[OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15201.php">Ralph Castain: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>In reply to:</strong> <a href="15198.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15199.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't recommend our solution as a general approach - we moved the object instance to the framework base so it never goes out of memory.
<br>
<p>Regardless, it seems to me that proper cleanup is the better solution, although it means work. I've asked that it be added to next week's telecon agenda so we can reach some resolution.
<br>
<p><p>On Jul 18, 2014, at 9:35 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It would make sense, though I guess I always thought that was part of what happened in OBJ_CLASS_INSTANCE - guess I was wrong. My thinking was that DEREGISTER would be the counter to INSTANCE, and I do want to keep this from getting even more clunky - so maybe renaming INSTANCE to be REGISTER and completing the initialization inside it would be the way to go. Or renaming DEREGISTER to something more obviously the counter to INSTANCE?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; just so we are clear :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on one hand OBJ_CLASS_INSTANCE is a macro that must be invoked &quot;outside&quot; of a function :
</span><br>
<span class="quotelev1">&gt; It *statically* initializes a struct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on the other hand, OBJ_CLASS_DEREGISTER is a macro that must be invoked inside a function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using OBJ_CLASS_REGISTER is not only about renaming, it also requires to move all these invokations into functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my idea of having both OBJ_CLASS_INSTANCE and OBJ_CLASS_REGISTER is :
</span><br>
<span class="quotelev1">&gt; - we do not need to move OBJ_CLASS_INSTANCE into functions
</span><br>
<span class="quotelev1">&gt; - we can have two behaviours depending on OPAL_ENABLE_DEBUG :
</span><br>
<span class="quotelev1">&gt; OBJ_CLASS_REGISTER would simply do nothing if OPAL_ENABLE_DEBUG is zero (and opal_class_initialize would still be invoked in opal_obj_new). that could also be a bit faster than having only one OBJ_CLASS_REGISTER macro in optimized mode.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that being said, i am also fine with simplifying this, remove OBJ_CLASS_INSTANCE and use OBJ_CLASS_REGISTER and OBJ_CLASS_DEREGISTER
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; about the bug you hit, did you already solve it and how ?
</span><br>
<span class="quotelev1">&gt; a trivial workaround is not to dlclose the dynamic library (ok, that's cheating ...)
</span><br>
<span class="quotelev1">&gt; a simple workaround (if it is even doable) is to declare the class &quot;somewhere else&quot; so the (library containing the) class struct is not dlclose'd before it is invoked (ok, that's ugly ...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what i wrote earlier was misleading :
</span><br>
<span class="quotelev1">&gt; OBJ_CLASS_INSTANCE(class);
</span><br>
<span class="quotelev1">&gt; foo = OBJ_NEW(class);
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; opal_class_t class_class = {...};
</span><br>
<span class="quotelev1">&gt; foo-&gt;super.obj_class = &amp;class_class;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; class_class is no more accessible when the OBJ_RELEASE is called since the library was dlclose'd, so you do not even get a change to invoke the destructor ...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; a possible workaround could be to malloc a copy of class_class, have foo-&gt;super.obj_class point to it after each OBJ_NEW, and finally have its cls_destruct_array point to NULL when closing the framework/component.
</span><br>
<span class="quotelev1">&gt; (of course that causes a leak ...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15198.php">http://www.open-mpi.org/community/lists/devel/2014/07/15198.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15202/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15203.php">Yossi Etigin: "[OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15201.php">Ralph Castain: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>In reply to:</strong> <a href="15198.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15199.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
