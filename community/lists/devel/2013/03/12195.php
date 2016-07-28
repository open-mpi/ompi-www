<?
$subject_val = "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  8 09:10:06 2013" -->
<!-- isoreceived="20130308141006" -->
<!-- sent="Fri, 8 Mar 2013 14:10:01 +0000" -->
<!-- isosent="20130308141001" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F96C39_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAC5F40C-E45B-404C-AE70-C197587B6A8A_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-08 09:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12196.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12193.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12196.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12196.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Isn't that what assert()'s are for?  :-)
<br>
<p>The point is that for Ralph's case, the #2 assert would cause a notification *right at the point of the error* (i.e., the errant DESTRUCT).  The other tools you mention all cause notifications long after the DESTRUCT (i.e., when the freed memory is used, at which time it may be totally jumbled/corrupt/the FILE/line info gone).  You know how hard it can be to track down memory corruption; having a notification right at the point of the error is a Good Thing.
<br>
<p>Don't forget that we have lots of other asserts in the OBJ system (in the debug case only, of course).
<br>
<p>And per my other mail, if I find legitimate cases where the destructors are invoked where refcount!=1, we'll figure something else out.
<br>
<p><p><p>On Mar 8, 2013, at 7:22 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm sorry Ralph, I'm puzzled by your approach. You knowingly use a broken example to justify a patch that under correct/consistent usage solve a non-issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why can't you use any decent memory debugger (fence, purify or valgrind) to identify the issue you describe below?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 8, 2013, at 02:19 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 7, 2013, at 4:37 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please refrain from doing so, the assumption #1 this patch is based on is false. First, OBJ_CONSTRUCT can be run to construct a specific type of object in a preallocated memory region (not only on the stack or heap). In fact, it is the only way we can dynamically initialize an object in a memory allocated outside the OBJ_NEW system. Second, OBJ_CONSTRUCT is not necessarily matched with an OBJ_DESTRUCT, it work just fine with OBJ_RELEASE. In fact I use these feature in several places.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An example will be a memory region without a predefined size, that I manipulate as opal_list_item_t. This fragment gets allocated when it's size is know, then gets OBJ_CONSTRUCT'ed and then used. The reference count is playing its role, when nobody is using the object anymore, it will be automatically released. With the change you propose such usage will be prohibited. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The feature you are looking for, the one that might have shorten Ralph's debugging time, is already in the opal_object_t. One should use the cls_init_file_name and cls_init_lineno fields to see where the object was first initialized as these fields are set either by the OBJ_NEW or by the OBJ_CONSTRUCT call.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not exactly. Consider the case where we have a library - e.g., ORTE. Down in the library, perhaps several function calls down, we receive a pointer to an object. The library, not knowing any better, uses OBJ_RETAIN to indicate that this object is being used and therefore should not be released. It then returns and allows an async procedure to run.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Up above, one caller to the library uses OBJ_NEW to create the object. Thus, the reference count system is in-play and governs when the data goes away.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, in another place, the caller uses OBJ_CONSTRUCT to initialize the object, and OBJ_DESTRUCTs it when the high-level call returns. In this case, the reference count system is ignored - OBJ_DESTRUCT destroys the object regardless of the reference count. So suddenly the library is working with garbage, with no way to know that it happened.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So now let's be specific to see how your suggestion doesn't solve the problem (I actually had tried it). Consider the OOB operating asynchronously. In the first case, where the opal_buffer_t is created via OBJ_NEW, we can point the message system at the data field in the buffer and just OBJ_RETAIN it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, in the second case, the OBJ_RETAIN won't work - the calling code releases the data area, but the OOB has no idea that happened. So the pointer to the data field actually isn't valid any more, but there is no way to detect it. Likewise, looking for opal_object_t info is useless as the fields no longer exist.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I realize this is an incorrect program - the caller isn't allowed to release data until the async operation concludes. But the fact that a library function, especially one that is hidden down low in the code base, is async may not be immediately apparent. The resulting &quot;bug&quot; is extremely hard to chase down, especially as it almost inevitably is exposed as a race condition.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The goal of this RFC was to make such problems immediately apparent. Perhaps one solution would be to get rid of OBJ_DESTRUCT and just have everyone use OBJ_RELEASE, augmented with a flag to indicate whether or not to free the backing memory. Another might be to have OBJ_DESTRUCT respect ref counts, but Jeff, Brian and I didn't like that one. The proposed solution was another way to approach it that would force the above scenario to be recognized only during debug builds, thus allowing it to be identified and corrected.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your example use-case is certainly something I hadn't considered - so perhaps we'll have to think of another way to detect my situation while still allowing what you do, or perhaps add a new OBJ_CONSTRUCT_WITH_RETAIN (or whatever) macro for use in your use-case that corrects the ref count?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS: The second patch (ref count == 1 in OBJ_DESTRUCT) is trivial but reasonable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 7, 2013, at 22:10 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT: Simple patch that will fail an assert() if you OBJ_CONSTRUCT an object and its ref count goes to 0 (in debug builds only).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY: To catch bugs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE: opal/class/opal_class.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHEN: Timeout of 1 week -- COB, Thurs, 14 Mar, 2013
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On the call on Tuesday, we talked about some ideas for catching bugs with respect to object reference counting.  After the call, Brian, Ralph, and I came up with two useful asserts to help catch bugs (in debug builds only):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. If you OBJ_CONSTRUCT an object, its ref count should never go to zero.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. When a object is destroyed, its refcount should be exactly 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This RFC is for #1.  The attached patch doesn't seem to cause any problems (and we didn't expect it to).  But it's a good addition to the other asserts() that are already in the object code already.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As for #2, Ralph has previously found bugs in the ORTE layer that would have been much easier to track down if #2 were in place.  I'll send an RFC for #2 when I have managed to fix all the problems that it has found in the OMPI layer...  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Index: opal/class/opal_object.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- opal/class/opal_object.h	(revision 28147)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ opal/class/opal_object.h	(working copy)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -169,7 +169,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * @param NAME   Name of the class to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -#define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OPAL_OBJ_MAGIC_ID, OBJ_CLASS(BASE_CLASS), 1, __FILE__, __LINE__ }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OPAL_OBJ_MAGIC_ID, 1, OBJ_CLASS(BASE_CLASS), 1, __FILE__, __LINE__ }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OBJ_CLASS(BASE_CLASS), 1 }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -184,6 +184,10 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /** Magic ID -- want this to be the very first item in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      struct's memory */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  uint64_t obj_magic_id;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /* flag whether this was initialized using construct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +     * versus obj_new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +     */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    bool constructed;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  opal_class_t *obj_class;            /**&lt; class descriptor */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  volatile int32_t obj_reference_count;   /**&lt; reference count */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -252,6 +256,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  object-&gt;obj_magic_id = OPAL_OBJ_MAGIC_ID;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  object-&gt;cls_init_file_name = file;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  object-&gt;cls_init_lineno = line;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    object-&gt;constructed = false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  return object;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OBJ_NEW(type)                                   \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -313,6 +318,8 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      assert(NULL != ((opal_object_t *) (object))-&gt;obj_class);        \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      assert(OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (object))-&gt;obj_magic_id); \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      if (0 == opal_obj_update((opal_object_t *) (object), -1)) {     \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            /* constructed objects are not allowed to reach 0 */        \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            assert(!(((opal_object_t *) (object))-&gt;constructed));       \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          OBJ_SET_MAGIC_ID((object), 0);                              \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          opal_obj_run_destructors((opal_object_t *) (object));       \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -344,6 +351,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  OBJ_CONSTRUCT_INTERNAL((object), OBJ_CLASS(type));          \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; } while (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OBJ_CONSTRUCT_INTERNAL(object, type)                        \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do {                                                                \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  OBJ_SET_MAGIC_ID((object), OPAL_OBJ_MAGIC_ID);              \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -352,11 +360,24 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }                                                               \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ((opal_object_t *) (object))-&gt;obj_class = (type);               \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ((opal_object_t *) (object))-&gt;obj_reference_count = 1;          \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    ((opal_object_t *) (object))-&gt;constructed = true;               \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  opal_obj_run_constructors((opal_object_t *) (object));          \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; } while (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#define OBJ_CONSTRUCT_INTERNAL(object, type)                        \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +do {                                                                \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    OBJ_SET_MAGIC_ID((object), OPAL_OBJ_MAGIC_ID);              \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    if (0 == (type)-&gt;cls_initialized) {                             \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        opal_class_initialize((type));                              \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    }                                                               \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    ((opal_object_t *) (object))-&gt;obj_class = (type);               \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    ((opal_object_t *) (object))-&gt;obj_reference_count = 1;          \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    opal_obj_run_constructors((opal_object_t *) (object));          \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +} while (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Destruct (finalize) an object that is not dynamically allocated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="12196.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12193.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12196.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12196.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
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
