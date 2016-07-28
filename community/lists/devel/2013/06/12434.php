<?
$subject_val = "[OMPI devel] RFC: Add static initializer for opal_mutex_t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  7 12:01:45 2013" -->
<!-- isoreceived="20130607160145" -->
<!-- sent="Fri, 7 Jun 2013 16:01:26 +0000" -->
<!-- isosent="20130607160126" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Add static initializer for opal_mutex_t" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7152F6D9A8C_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Add static initializer for opal_mutex_t<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-07 12:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Previous message:</strong> <a href="12433.php">Ralph Castain: "Re: [OMPI devel] Rest of OMPI meeting notes up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Reply:</strong> <a href="12435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Add a static initializer for opal_mutex_t for both posix and solaris threads.
<br>
<p>Why: Enables the use of opal locks that don't have to be OBJ_CONSTRUCT'ed.
<br>
<p>When: This is a trivial addition but I would like some review/testing of the code (I don't have solaris). Setting timeout to Tuesday, June 11, 2013
<br>
<p><p>diff --git a/opal/threads/mutex_unix.h b/opal/threads/mutex_unix.h
<br>
index 27528e6..28b1744 100644
<br>
--- a/opal/threads/mutex_unix.h
<br>
+++ b/opal/threads/mutex_unix.h
<br>
@@ -81,6 +81,25 @@ OPAL_DECLSPEC OBJ_CLASS_DECLARATION(opal_mutex_t);
<br>
&nbsp;&nbsp;* POSIX threads
<br>
&nbsp;&nbsp;************************************************************************/
<br>
&nbsp;
<br>
+#if !OPAL_ENABLE_MULTI_THREADS &amp;&amp; OPAL_ENABLE_DEBUG
<br>
+#define OPAL_MUTEX_STATIC_INIT                      \
<br>
+  {                                                 \
<br>
+      .super = OPAL_OBJ_STATIC_INIT(opal_object_t), \
<br>
+      .m_lock_pthread = PTHREAD_MUTEX_INITIALIZER,  \
<br>
+      .m_lock_debug = 0,                            \
<br>
+      .m_lock_file = NULL,                          \
<br>
+      .m_lock_line = 0,                             \
<br>
+      .m_lock_atomic = 0                            \
<br>
+  }
<br>
+#else
<br>
+#define OPAL_MUTEX_STATIC_INIT                      \
<br>
+  {                                                 \
<br>
+      .super = OPAL_OBJ_STATIC_INIT(opal_object_t), \
<br>
+      .m_lock_pthread = PTHREAD_MUTEX_INITIALIZER,  \
<br>
+      .m_lock_atomic = 0                            \
<br>
+  }
<br>
+#endif
<br>
+
<br>
&nbsp;static inline int opal_mutex_trylock(opal_mutex_t *m)
<br>
&nbsp;{
<br>
&nbsp;#if OPAL_ENABLE_DEBUG
<br>
@@ -130,6 +149,25 @@ static inline void opal_mutex_unlock(opal_mutex_t *m)
<br>
&nbsp;&nbsp;* Solaris threads
<br>
&nbsp;&nbsp;************************************************************************/
<br>
&nbsp;
<br>
+#if !OPAL_ENABLE_MULTI_THREADS &amp;&amp; OPAL_ENABLE_DEBUG
<br>
+#define OPAL_MUTEX_STATIC_INIT                      \
<br>
+  {                                                 \
<br>
+      .super = OPAL_OBJ_STATIC_INIT(opal_object_t), \
<br>
+      .m_lock_solaris = DEFAULTMUTEX,               \
<br>
+      .m_lock_debug = 0,                            \
<br>
+      .m_lock_file = NULL,                          \
<br>
+      .m_lock_line = 0,                             \
<br>
+      .m_lock_atomic = 0                            \
<br>
+  }
<br>
+#else
<br>
+#define OPAL_MUTEX_STATIC_INIT                      \
<br>
+  {                                                 \
<br>
+      .super = OPAL_OBJ_STATIC_INIT(opal_object_t), \
<br>
+      .m_lock_solaris = DEFAULTMUTEX,               \
<br>
+      .m_lock_atomic = 0                            \
<br>
+  }
<br>
+#endif
<br>
+
<br>
&nbsp;
<br>
&nbsp;static inline int opal_mutex_trylock(opal_mutex_t *m)
<br>
&nbsp;{
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Previous message:</strong> <a href="12433.php">Ralph Castain: "Re: [OMPI devel] Rest of OMPI meeting notes up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Reply:</strong> <a href="12435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
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
