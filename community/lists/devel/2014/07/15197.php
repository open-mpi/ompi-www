<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 11:41:14 2014" -->
<!-- isoreceived="20140718154114" -->
<!-- sent="Fri, 18 Jul 2014 08:40:15 -0700" -->
<!-- isosent="20140718154015" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="2BB4F5C4-12E2-4880-BBEB-AC81D8825217_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5vu7nXbh-oxFtFoYRFA2pYwQ=oR1ZNC_h0ngNijj4ZAiQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-18 11:40:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15198.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15196.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15196.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15198.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15198.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 18, 2014, at 8:25 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; +1 for the overall idea !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 18, 2014 at 10:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; * add an OBJ_CLASS_DEREGISTER and require that all instantiations be matched by deregister at close of the framework/component that instanced it. Of course, that requires that we protect the class system against someone releasing/deconstructing an object after the class was deregistered since we don't know who might be using that class outside of where it was created.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my understanding is that in theory, we already have an issue and fortunatly, we do not hit it :
</span><br>
<span class="quotelev1">&gt; let's consider a framework/component that instanciate a class (OBJ_CLASS_INSTANCE) *with a destructor*, allocate an object of this class (OBJ_NEW) and expects &quot;someone else&quot; will free it (OBJ_RELEASE)
</span><br>
<span class="quotelev1">&gt; if this framework/component ends up in a dynamic library that is dlclose'd when the framework/component is no more used, then OBJ_RELEASE will try to call the destructor which is no more accessible (since the lib was dlclose'd)
</span><br>
<p>FWIW: Intel has hit that exact scenario in our testing and got a glorious segv out of it. We now have an assert for NULL in the base object macro's to warn us to fix it (which I can provide for review if we want to include it in our repo).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i could not experience such a scenario yet, and of course, this does not mean there is no problem. i experienced a &quot;kind of&quot; similar situation described in <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14937.php">http://www.open-mpi.org/community/lists/devel/2014/06/14937.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; back to OBJ_CLASS_DEREGISTER, what about an OBJ_CLASS_REGISTER in order to make this symmetric and easier to debug ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; currently, OBJ_CLASS_REGISTER is &quot;implied&quot; the first time an object of a given class is allocated. from opal_obj_new :
</span><br>
<span class="quotelev1">&gt; if (0 == cls-&gt;cls_initialized) opal_class_initialize(cls);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that could be replaced by an error if 0 == cls-&gt;cls_initialized
</span><br>
<span class="quotelev1">&gt; and OBJ_CLASS_REGISTER would simply call opal_class_initialize
</span><br>
<p>It would make sense, though I guess I always thought that was part of what happened in OBJ_CLASS_INSTANCE - guess I was wrong. My thinking was that DEREGISTER would be the counter to INSTANCE, and I do want to keep this from getting even more clunky - so maybe renaming INSTANCE to be REGISTER and completing the initialization inside it would be the way to go. Or renaming DEREGISTER to something more obviously the counter to INSTANCE?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; of course, this change could be implemented only when compiled
</span><br>
<span class="quotelev1">&gt; with OPAL_ENABLE_DEBUG
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15196.php">http://www.open-mpi.org/community/lists/devel/2014/07/15196.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15197/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15198.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15196.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15196.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15198.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15198.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
