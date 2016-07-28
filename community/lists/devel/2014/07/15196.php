<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 11:25:13 2014" -->
<!-- isoreceived="20140718152513" -->
<!-- sent="Sat, 19 Jul 2014 00:25:10 +0900" -->
<!-- isosent="20140718152510" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="CAAkFZ5vu7nXbh-oxFtFoYRFA2pYwQ=oR1ZNC_h0ngNijj4ZAiQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="746E3C82-91F0-4875-A861-6E4B35EB21C0_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-07-18 11:25:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15197.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15195.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15195.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15197.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15197.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 for the overall idea !
<br>
<p>On Fri, Jul 18, 2014 at 10:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * add an OBJ_CLASS_DEREGISTER and require that all instantiations be
</span><br>
<span class="quotelev1">&gt; matched by deregister at close of the framework/component that instanced
</span><br>
<span class="quotelev1">&gt; it. Of course, that requires that we protect the class system against
</span><br>
<span class="quotelev1">&gt; someone releasing/deconstructing an object after the class was deregistered
</span><br>
<span class="quotelev1">&gt; since we don't know who might be using that class outside of where it was
</span><br>
<span class="quotelev1">&gt; created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my understanding is that in theory, we already have an issue and
</span><br>
fortunatly, we do not hit it :
<br>
let's consider a framework/component that instanciate a class
<br>
(OBJ_CLASS_INSTANCE) *with a destructor*, allocate an object of this class
<br>
(OBJ_NEW) and expects &quot;someone else&quot; will free it (OBJ_RELEASE)
<br>
if this framework/component ends up in a dynamic library that is dlclose'd
<br>
when the framework/component is no more used, then OBJ_RELEASE will try to
<br>
call the destructor which is no more accessible (since the lib was
<br>
dlclose'd)
<br>
<p>i could not experience such a scenario yet, and of course, this does not
<br>
mean there is no problem. i experienced a &quot;kind of&quot; similar situation
<br>
described in <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14937.php">http://www.open-mpi.org/community/lists/devel/2014/06/14937.php</a>
<br>
<p>back to OBJ_CLASS_DEREGISTER, what about an OBJ_CLASS_REGISTER in order to
<br>
make this symmetric and easier to debug ?
<br>
<p>currently, OBJ_CLASS_REGISTER is &quot;implied&quot; the first time an object of a
<br>
given class is allocated. from opal_obj_new :
<br>
if (0 == cls-&gt;cls_initialized) opal_class_initialize(cls);
<br>
<p>that could be replaced by an error if 0 == cls-&gt;cls_initialized
<br>
and OBJ_CLASS_REGISTER would simply call opal_class_initialize
<br>
<p>of course, this change could be implemented only when compiled
<br>
with OPAL_ENABLE_DEBUG
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15197.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15195.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15195.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15197.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15197.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
