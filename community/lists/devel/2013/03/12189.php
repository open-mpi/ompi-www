<?
$subject_val = "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  7 19:37:18 2013" -->
<!-- isoreceived="20130308003718" -->
<!-- sent="Fri, 8 Mar 2013 01:37:11 +0100" -->
<!-- isosent="20130308003711" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed" -->
<!-- id="C7BE963E-43A9-4946-965D-A581C4AA0A14_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F87C5E_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-07 19:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12190.php">Ralph Castain: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12190.php">Ralph Castain: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12190.php">Ralph Castain: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please refrain from doing so, the assumption #1 this patch is based on is false. First, OBJ_CONSTRUCT can be run to construct a specific type of object in a preallocated memory region (not only on the stack or heap). In fact, it is the only way we can dynamically initialize an object in a memory allocated outside the OBJ_NEW system. Second, OBJ_CONSTRUCT is not necessarily matched with an OBJ_DESTRUCT, it work just fine with OBJ_RELEASE. In fact I use these feature in several places.
<br>
<p>An example will be a memory region without a predefined size, that I manipulate as opal_list_item_t. This fragment gets allocated when it's size is know, then gets OBJ_CONSTRUCT'ed and then used. The reference count is playing its role, when nobody is using the object anymore, it will be automatically released. With the change you propose such usage will be prohibited. 
<br>
<p>The feature you are looking for, the one that might have shorten Ralph's debugging time, is already in the opal_object_t. One should use the cls_init_file_name and cls_init_lineno fields to see where the object was first initialized as these fields are set either by the OBJ_NEW or by the OBJ_CONSTRUCT call.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: The second patch (ref count == 1 in OBJ_DESTRUCT) is trivial but reasonable.
<br>
<p>On Mar 7, 2013, at 22:10 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Simple patch that will fail an assert() if you OBJ_CONSTRUCT an object and its ref count goes to 0 (in debug builds only).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: To catch bugs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: opal/class/opal_class.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Timeout of 1 week -- COB, Thurs, 14 Mar, 2013
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the call on Tuesday, we talked about some ideas for catching bugs with respect to object reference counting.  After the call, Brian, Ralph, and I came up with two useful asserts to help catch bugs (in debug builds only):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. If you OBJ_CONSTRUCT an object, its ref count should never go to zero.
</span><br>
<span class="quotelev1">&gt; 2. When a object is destroyed, its refcount should be exactly 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This RFC is for #1.  The attached patch doesn't seem to cause any problems (and we didn't expect it to).  But it's a good addition to the other asserts() that are already in the object code already.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for #2, Ralph has previously found bugs in the ORTE layer that would have been much easier to track down if #2 were in place.  I'll send an RFC for #2 when I have managed to fix all the problems that it has found in the OMPI layer...  :-)
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
<span class="quotelev1">&gt; Index: opal/class/opal_object.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/class/opal_object.h	(revision 28147)
</span><br>
<span class="quotelev1">&gt; +++ opal/class/opal_object.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -169,7 +169,7 @@
</span><br>
<span class="quotelev1">&gt;  * @param NAME   Name of the class to initialize
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; -#define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OPAL_OBJ_MAGIC_ID, OBJ_CLASS(BASE_CLASS), 1, __FILE__, __LINE__ }
</span><br>
<span class="quotelev1">&gt; +#define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OPAL_OBJ_MAGIC_ID, 1, OBJ_CLASS(BASE_CLASS), 1, __FILE__, __LINE__ }
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OBJ_CLASS(BASE_CLASS), 1 }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; @@ -184,6 +184,10 @@
</span><br>
<span class="quotelev1">&gt;     /** Magic ID -- want this to be the very first item in the
</span><br>
<span class="quotelev1">&gt;         struct's memory */
</span><br>
<span class="quotelev1">&gt;     uint64_t obj_magic_id;
</span><br>
<span class="quotelev1">&gt; +    /* flag whether this was initialized using construct
</span><br>
<span class="quotelev1">&gt; +     * versus obj_new
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    bool constructed;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     opal_class_t *obj_class;            /**&lt; class descriptor */
</span><br>
<span class="quotelev1">&gt;     volatile int32_t obj_reference_count;   /**&lt; reference count */
</span><br>
<span class="quotelev1">&gt; @@ -252,6 +256,7 @@
</span><br>
<span class="quotelev1">&gt;     object-&gt;obj_magic_id = OPAL_OBJ_MAGIC_ID;
</span><br>
<span class="quotelev1">&gt;     object-&gt;cls_init_file_name = file;
</span><br>
<span class="quotelev1">&gt;     object-&gt;cls_init_lineno = line;
</span><br>
<span class="quotelev1">&gt; +    object-&gt;constructed = false;
</span><br>
<span class="quotelev1">&gt;     return object;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #define OBJ_NEW(type)                                   \
</span><br>
<span class="quotelev1">&gt; @@ -313,6 +318,8 @@
</span><br>
<span class="quotelev1">&gt;         assert(NULL != ((opal_object_t *) (object))-&gt;obj_class);        \
</span><br>
<span class="quotelev1">&gt;         assert(OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (object))-&gt;obj_magic_id); \
</span><br>
<span class="quotelev1">&gt;         if (0 == opal_obj_update((opal_object_t *) (object), -1)) {     \
</span><br>
<span class="quotelev1">&gt; +            /* constructed objects are not allowed to reach 0 */        \
</span><br>
<span class="quotelev1">&gt; +            assert(!(((opal_object_t *) (object))-&gt;constructed));       \
</span><br>
<span class="quotelev1">&gt;             OBJ_SET_MAGIC_ID((object), 0);                              \
</span><br>
<span class="quotelev1">&gt;             opal_obj_run_destructors((opal_object_t *) (object));       \
</span><br>
<span class="quotelev1">&gt;             OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
</span><br>
<span class="quotelev1">&gt; @@ -344,6 +351,7 @@
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT_INTERNAL((object), OBJ_CLASS(type));          \
</span><br>
<span class="quotelev1">&gt; } while (0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; #define OBJ_CONSTRUCT_INTERNAL(object, type)                        \
</span><br>
<span class="quotelev1">&gt; do {                                                                \
</span><br>
<span class="quotelev1">&gt;     OBJ_SET_MAGIC_ID((object), OPAL_OBJ_MAGIC_ID);              \
</span><br>
<span class="quotelev1">&gt; @@ -352,11 +360,24 @@
</span><br>
<span class="quotelev1">&gt;     }                                                               \
</span><br>
<span class="quotelev1">&gt;     ((opal_object_t *) (object))-&gt;obj_class = (type);               \
</span><br>
<span class="quotelev1">&gt;     ((opal_object_t *) (object))-&gt;obj_reference_count = 1;          \
</span><br>
<span class="quotelev1">&gt; +    ((opal_object_t *) (object))-&gt;constructed = true;               \
</span><br>
<span class="quotelev1">&gt;     opal_obj_run_constructors((opal_object_t *) (object));          \
</span><br>
<span class="quotelev1">&gt;     OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
</span><br>
<span class="quotelev1">&gt; } while (0)
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +#define OBJ_CONSTRUCT_INTERNAL(object, type)                        \
</span><br>
<span class="quotelev1">&gt; +do {                                                                \
</span><br>
<span class="quotelev1">&gt; +    OBJ_SET_MAGIC_ID((object), OPAL_OBJ_MAGIC_ID);              \
</span><br>
<span class="quotelev1">&gt; +    if (0 == (type)-&gt;cls_initialized) {                             \
</span><br>
<span class="quotelev1">&gt; +        opal_class_initialize((type));                              \
</span><br>
<span class="quotelev1">&gt; +    }                                                               \
</span><br>
<span class="quotelev1">&gt; +    ((opal_object_t *) (object))-&gt;obj_class = (type);               \
</span><br>
<span class="quotelev1">&gt; +    ((opal_object_t *) (object))-&gt;obj_reference_count = 1;          \
</span><br>
<span class="quotelev1">&gt; +    opal_obj_run_constructors((opal_object_t *) (object));          \
</span><br>
<span class="quotelev1">&gt; +    OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
</span><br>
<span class="quotelev1">&gt; +} while (0)
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Destruct (finalize) an object that is not dynamically allocated.
</span><br>
<span class="quotelev1">&gt;  *
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12190.php">Ralph Castain: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12190.php">Ralph Castain: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12190.php">Ralph Castain: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
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
