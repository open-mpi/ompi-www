<?
$subject_val = "[OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  7 16:10:41 2013" -->
<!-- isoreceived="20130307211041" -->
<!-- sent="Thu, 7 Mar 2013 21:10:35 +0000" -->
<!-- isosent="20130307211035" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F87C5E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-07 16:10:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12189.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12187.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Style question: // in C code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12189.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12189.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Simple patch that will fail an assert() if you OBJ_CONSTRUCT an object and its ref count goes to 0 (in debug builds only).
<br>
<p>WHY: To catch bugs.
<br>
<p>WHERE: opal/class/opal_class.h
<br>
<p>WHEN: Timeout of 1 week -- COB, Thurs, 14 Mar, 2013
<br>
<p>MORE DETAIL:
<br>
<p>On the call on Tuesday, we talked about some ideas for catching bugs with respect to object reference counting.  After the call, Brian, Ralph, and I came up with two useful asserts to help catch bugs (in debug builds only):
<br>
<p>1. If you OBJ_CONSTRUCT an object, its ref count should never go to zero.
<br>
2. When a object is destroyed, its refcount should be exactly 1.
<br>
<p>This RFC is for #1.  The attached patch doesn't seem to cause any problems (and we didn't expect it to).  But it's a good addition to the other asserts() that are already in the object code already.
<br>
<p>As for #2, Ralph has previously found bugs in the ORTE layer that would have been much easier to track down if #2 were in place.  I'll send an RFC for #2 when I have managed to fix all the problems that it has found in the OMPI layer...  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
Index: opal/class/opal_object.h
===================================================================
--- opal/class/opal_object.h	(revision 28147)
+++ opal/class/opal_object.h	(working copy)
@@ -169,7 +169,7 @@
  * @param NAME   Name of the class to initialize
  */
 #if OPAL_ENABLE_DEBUG
-#define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OPAL_OBJ_MAGIC_ID, OBJ_CLASS(BASE_CLASS), 1, __FILE__, __LINE__ }
+#define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OPAL_OBJ_MAGIC_ID, 1, OBJ_CLASS(BASE_CLASS), 1, __FILE__, __LINE__ }
 #else
 #define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OBJ_CLASS(BASE_CLASS), 1 }
 #endif
@@ -184,6 +184,10 @@
     /** Magic ID -- want this to be the very first item in the
         struct's memory */
     uint64_t obj_magic_id;
+    /* flag whether this was initialized using construct
+     * versus obj_new
+     */
+    bool constructed;
 #endif
     opal_class_t *obj_class;            /**&lt; class descriptor */
     volatile int32_t obj_reference_count;   /**&lt; reference count */
@@ -252,6 +256,7 @@
     object-&gt;obj_magic_id = OPAL_OBJ_MAGIC_ID;
     object-&gt;cls_init_file_name = file;
     object-&gt;cls_init_lineno = line;
+    object-&gt;constructed = false;
     return object;
 }
 #define OBJ_NEW(type)                                   \
@@ -313,6 +318,8 @@
         assert(NULL != ((opal_object_t *) (object))-&gt;obj_class);        \
         assert(OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (object))-&gt;obj_magic_id); \
         if (0 == opal_obj_update((opal_object_t *) (object), -1)) {     \
+            /* constructed objects are not allowed to reach 0 */        \
+            assert(!(((opal_object_t *) (object))-&gt;constructed));       \
             OBJ_SET_MAGIC_ID((object), 0);                              \
             opal_obj_run_destructors((opal_object_t *) (object));       \
             OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
@@ -344,6 +351,7 @@
     OBJ_CONSTRUCT_INTERNAL((object), OBJ_CLASS(type));          \
 } while (0)
 
+#if OPAL_ENABLE_DEBUG
 #define OBJ_CONSTRUCT_INTERNAL(object, type)                        \
 do {                                                                \
     OBJ_SET_MAGIC_ID((object), OPAL_OBJ_MAGIC_ID);              \
@@ -352,11 +360,24 @@
     }                                                               \
     ((opal_object_t *) (object))-&gt;obj_class = (type);               \
     ((opal_object_t *) (object))-&gt;obj_reference_count = 1;          \
+    ((opal_object_t *) (object))-&gt;constructed = true;               \
     opal_obj_run_constructors((opal_object_t *) (object));          \
     OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
 } while (0)
+#else
+#define OBJ_CONSTRUCT_INTERNAL(object, type)                        \
+do {                                                                \
+    OBJ_SET_MAGIC_ID((object), OPAL_OBJ_MAGIC_ID);              \
+    if (0 == (type)-&gt;cls_initialized) {                             \
+        opal_class_initialize((type));                              \
+    }                                                               \
+    ((opal_object_t *) (object))-&gt;obj_class = (type);               \
+    ((opal_object_t *) (object))-&gt;obj_reference_count = 1;          \
+    opal_obj_run_constructors((opal_object_t *) (object));          \
+    OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
+} while (0)
+#endif
 
-
 /**
  * Destruct (finalize) an object that is not dynamically allocated.
  *
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12189.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12187.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Style question: // in C code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12189.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12189.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
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
