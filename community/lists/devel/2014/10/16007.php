<?
$subject_val = "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 18:45:56 2014" -->
<!-- isoreceived="20141003224556" -->
<!-- sent="Fri, 03 Oct 2014 16:45:55 -0600" -->
<!-- isosent="20141003224555" -->
<!-- name="Howard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()" -->
<!-- id="542F2723.4000504_at_gmail.com" -->
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
<strong>From:</strong> Howard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 18:45:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16008.php">Paul Hargrove: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Previous message:</strong> <a href="16006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>In reply to:</strong> <a href="16001.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I'd be okay with this as long as there would be a config option to revert
<br>
back to using malloc rather than calloc.
<br>
<p>Howard
<br>
<p>On 10/3/14 2:54 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; WHAT: change the malloc() to calloc() in opal_obj_new() (perhaps only in debug builds?)
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
<span class="quotelev1">&gt;       opal_object_t *object;
</span><br>
<span class="quotelev1">&gt;       assert(cls-&gt;cls_sizeof &gt;= sizeof(opal_object_t));
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; +#if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; +    object = (opal_object_t *) calloc(1, cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;       object = (opal_object_t *) malloc(cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;       if (0 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt;           opal_class_initialize(cls);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16008.php">Paul Hargrove: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Previous message:</strong> <a href="16006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>In reply to:</strong> <a href="16001.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
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
