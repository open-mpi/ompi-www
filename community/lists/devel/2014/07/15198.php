<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 12:35:47 2014" -->
<!-- isoreceived="20140718163547" -->
<!-- sent="Sat, 19 Jul 2014 01:35:45 +0900" -->
<!-- isosent="20140718163545" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="CAAkFZ5tzSwbXqWC_oHQ8E6jzisEfgAf+De3gNgCZDQA7kPnz+Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2BB4F5C4-12E2-4880-BBEB-AC81D8825217_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-18 12:35:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15199.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15197.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15197.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15202.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15202.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would make sense, though I guess I always thought that was part of what
</span><br>
<span class="quotelev1">&gt; happened in OBJ_CLASS_INSTANCE - guess I was wrong. My thinking was that
</span><br>
<span class="quotelev1">&gt; DEREGISTER would be the counter to INSTANCE, and I do want to keep this
</span><br>
<span class="quotelev1">&gt; from getting even more clunky - so maybe renaming INSTANCE to be REGISTER
</span><br>
<span class="quotelev1">&gt; and completing the initialization inside it would be the way to go. Or
</span><br>
<span class="quotelev1">&gt; renaming DEREGISTER to something more obviously the counter to INSTANCE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
just so we are clear :
<br>
<p>on one hand OBJ_CLASS_INSTANCE is a macro that must be invoked &quot;outside&quot; of
<br>
a function :
<br>
It *statically* initializes a struct.
<br>
<p>on the other hand, OBJ_CLASS_DEREGISTER is a macro that must be invoked
<br>
inside a function.
<br>
<p>using OBJ_CLASS_REGISTER is not only about renaming, it also requires to
<br>
move all these invokations into functions.
<br>
<p>my idea of having both OBJ_CLASS_INSTANCE and OBJ_CLASS_REGISTER is :
<br>
- we do not need to move OBJ_CLASS_INSTANCE into functions
<br>
- we can have two behaviours depending on OPAL_ENABLE_DEBUG :
<br>
OBJ_CLASS_REGISTER would simply do nothing if OPAL_ENABLE_DEBUG is zero
<br>
(and opal_class_initialize would still be invoked in opal_obj_new). that
<br>
could also be a bit faster than having only one OBJ_CLASS_REGISTER macro in
<br>
optimized mode.
<br>
<p>that being said, i am also fine with simplifying this, remove
<br>
OBJ_CLASS_INSTANCE and use OBJ_CLASS_REGISTER and OBJ_CLASS_DEREGISTER
<br>
<p><p>about the bug you hit, did you already solve it and how ?
<br>
a trivial workaround is not to dlclose the dynamic library (ok, that's
<br>
cheating ...)
<br>
a simple workaround (if it is even doable) is to declare the class
<br>
&quot;somewhere else&quot; so the (library containing the) class struct is not
<br>
dlclose'd before it is invoked (ok, that's ugly ...).
<br>
<p>what i wrote earlier was misleading :
<br>
OBJ_CLASS_INSTANCE(class);
<br>
foo = OBJ_NEW(class);
<br>
then
<br>
opal_class_t class_class = {...};
<br>
foo-&gt;super.obj_class = &amp;class_class;
<br>
<p>class_class is no more accessible when the OBJ_RELEASE is called since the
<br>
library was dlclose'd, so you do not even get a change to invoke the
<br>
destructor ...
<br>
<p>a possible workaround could be to malloc a copy of class_class, have
<br>
foo-&gt;super.obj_class point to it after each OBJ_NEW, and finally have its
<br>
cls_destruct_array point to NULL when closing the framework/component.
<br>
(of course that causes a leak ...)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15198/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15199.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15197.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15197.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15202.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15202.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
