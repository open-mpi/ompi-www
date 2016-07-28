<?
$subject_val = "[OMPI devel] RFC: calloc instead of malloc in opal_obj_new()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 16:54:36 2014" -->
<!-- isoreceived="20141003205436" -->
<!-- sent="Fri, 3 Oct 2014 20:54:34 +0000" -->
<!-- isosent="20141003205434" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: calloc instead of malloc in opal_obj_new()" -->
<!-- id="214361E7-BDE9-43E5-91BC-6F6A8E6BCB35_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 16:54:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16002.php">Howard: "[OMPI devel] opal components subject to removal for 1.9 release"</a>
<li><strong>Previous message:</strong> <a href="16000.php">Bert Wesarg: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16004.php">George Bosilca: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Reply:</strong> <a href="16004.php">George Bosilca: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Reply:</strong> <a href="16007.php">Howard: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: change the malloc() to calloc() in opal_obj_new() (perhaps only in debug builds?)
<br>
<p>WHY: Drastically reduces valgrind output
<br>
<p>WHERE: see <a href="https://github.com/open-mpi/ompi/blob/master/opal/class/opal_object.h#L462-L467">https://github.com/open-mpi/ompi/blob/master/opal/class/opal_object.h#L462-L467</a>
<br>
<p>TIMEOUT: teleconf, Tue, Oct 14 (there's no rush)
<br>
<p>MORE DETAIL:
<br>
<p>I was debugging some code today and came across a bunch of places where we write structs down various IPC mechanisms, and the structs contain holes.  In most places, the performance doesn't matter / the readability of struct members is more important, so we haven't re-ordered the structs to remove holes.  But consequently, those holes end up uninitialized, and therefore memcpy()ing or write()ing instances of these structs causes valgrind to emit warnings.
<br>
<p>The patch below eliminates most (all?) of these valgrind warnings -- in debug builds, it changes the malloc() inside OBJ_NEW to a calloc().
<br>
<p>Upon a little more thought, however, I wonder if we use OBJ_NEW in any fast code paths (other than in bulk, such as when we need to grow a free list).  Specifically: would it be terrible to *always* calloc -- not just for debug builds?
<br>
<p>-----
<br>
diff --git a/opal/class/opal_object.h b/opal/class/opal_object.h
<br>
index 7012bac..585f13e 100644
<br>
--- a/opal/class/opal_object.h
<br>
+++ b/opal/class/opal_object.h
<br>
@@ -464,7 +464,11 @@ static inline opal_object_t *opal_obj_new(opal_class_t * cl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_object_t *object;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(cls-&gt;cls_sizeof &gt;= sizeof(opal_object_t));
<br>
&nbsp;
<br>
+#if OPAL_ENABLE_DEBUG
<br>
+    object = (opal_object_t *) calloc(1, cls-&gt;cls_sizeof);
<br>
+#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;object = (opal_object_t *) malloc(cls-&gt;cls_sizeof);
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 == cls-&gt;cls_initialized) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_class_initialize(cls);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16002.php">Howard: "[OMPI devel] opal components subject to removal for 1.9 release"</a>
<li><strong>Previous message:</strong> <a href="16000.php">Bert Wesarg: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16004.php">George Bosilca: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Reply:</strong> <a href="16004.php">George Bosilca: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<li><strong>Reply:</strong> <a href="16007.php">Howard: "Re: [OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
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
