<?
$subject_val = "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 18:02:29 2014" -->
<!-- isoreceived="20141003220229" -->
<!-- sent="Fri, 3 Oct 2014 18:02:26 -0400" -->
<!-- isosent="20141003220226" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()" -->
<!-- id="731BCE3A-5FC9-42F5-869D-6D61F89ED365_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="214361E7-BDE9-43E5-91BC-6F6A8E6BCB35_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 18:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16005.php">Paul Hargrove: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Previous message:</strong> <a href="16003.php">George Bosilca: "Re: [OMPI devel] opal components subject to removal for 1.9 release"</a>
<li><strong>In reply to:</strong> <a href="16001.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16005.php">Paul Hargrove: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Reply:</strong> <a href="16005.php">Paul Hargrove: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It&#146;s a tough call. This proposal will create significant differences between the debug and fast builds. As the entire objects will be set to zero this might reduce bugs in the debug build, bugs that will be horribly difficult to track in any non-debug builds. Moreover, if the structures are carefully accessed in our code, adding such a disruptive initialization just to prevent valgrind from reporting false-positive about uninitialized reads in memcpy is too costly as a solution (I am also conscient that it will be almost impossible to write a valgrind suppression rule for the specific case you mention).
<br>
<p>Some parts of the code have (or at least had) some level of cleanness for the gaps in the structures. The solution was to minimally zero-fy the gaps, maintaining the same behavior between debug and non-debug builds. However, in order to do this one need to know the layout of the structure, so this is not a completely generic solution&#133;
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Oct 3, 2014, at 16:54 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: change the malloc() to calloc() in opal_obj_new() (perhaps only in debug builds?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Drastically reduces valgrind output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: see <a href="https://github.com/open-mpi/ompi/blob/master/opal/class/opal_object.h#L462-L467">https://github.com/open-mpi/ompi/blob/master/opal/class/opal_object.h#L462-L467</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: teleconf, Tue, Oct 14 (there's no rush)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was debugging some code today and came across a bunch of places where we write structs down various IPC mechanisms, and the structs contain holes.  In most places, the performance doesn't matter / the readability of struct members is more important, so we haven't re-ordered the structs to remove holes.  But consequently, those holes end up uninitialized, and therefore memcpy()ing or write()ing instances of these structs causes valgrind to emit warnings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch below eliminates most (all?) of these valgrind warnings -- in debug builds, it changes the malloc() inside OBJ_NEW to a calloc().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Upon a little more thought, however, I wonder if we use OBJ_NEW in any fast code paths (other than in bulk, such as when we need to grow a free list).  Specifically: would it be terrible to *always* calloc -- not just for debug builds?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/class/opal_object.h b/opal/class/opal_object.h
</span><br>
<span class="quotelev1">&gt; index 7012bac..585f13e 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/class/opal_object.h
</span><br>
<span class="quotelev1">&gt; +++ b/opal/class/opal_object.h
</span><br>
<span class="quotelev1">&gt; @@ -464,7 +464,11 @@ static inline opal_object_t *opal_obj_new(opal_class_t * cl
</span><br>
<span class="quotelev1">&gt;     opal_object_t *object;
</span><br>
<span class="quotelev1">&gt;     assert(cls-&gt;cls_sizeof &gt;= sizeof(opal_object_t));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; +    object = (opal_object_t *) calloc(1, cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;     object = (opal_object_t *) malloc(cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;     if (0 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt;         opal_class_initialize(cls);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16001.php">http://www.open-mpi.org/community/lists/devel/2014/10/16001.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16005.php">Paul Hargrove: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Previous message:</strong> <a href="16003.php">George Bosilca: "Re: [OMPI devel] opal components subject to removal for 1.9 release"</a>
<li><strong>In reply to:</strong> <a href="16001.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16005.php">Paul Hargrove: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Reply:</strong> <a href="16005.php">Paul Hargrove: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
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
