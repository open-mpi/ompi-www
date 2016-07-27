<?
$subject_val = "Re: [hwloc-devel] Attribute unsed not regognized";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 07:33:06 2010" -->
<!-- isoreceived="20100326113306" -->
<!-- sent="Fri, 26 Mar 2010 12:33:00 +0100" -->
<!-- isosent="20100326113300" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Attribute unsed not regognized" -->
<!-- id="36ca99e91003260433p4c1b501v81e0ad863f4030fd_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4BAC930B.3040501_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Attribute unsed not regognized<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 07:33:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0799.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0797.php">Brice Goglin: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>In reply to:</strong> <a href="0797.php">Brice Goglin: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0799.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0799.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0810.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 26, 2010 at 11:57, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Bert Wesarg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There is also a problem, that these __hwloc_attributes defines don't
</span><br>
<span class="quotelev2">&gt;&gt; get through after install:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using the embedding stuff ? Or only including our headers ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's no guarantee that your external application will use the same
</span><br>
<span class="quotelev1">&gt; compiler, so unless the embedding stuff re-runs the checks when
</span><br>
<span class="quotelev1">&gt; configuring your external applications, there's no easy solution.
</span><br>
<p>Thats true, sadly. I don't use it in the embedded mode. Maybe provide
<br>
fallbacks for known gcc compilers. Like this PoC patch:
<br>
<p>Index: include/hwloc/config.h.in
<br>
===================================================================
<br>
--- include/hwloc/config.h.in	(revision 1847)
<br>
+++ include/hwloc/config.h.in	(working copy)
<br>
@@ -19,52 +19,34 @@
<br>
&nbsp;# endif
<br>
&nbsp;#endif
<br>
<p>-#ifdef HWLOC_HAVE_ATTRIBUTE_UNUSED
<br>
-# if HWLOC_HAVE_ATTRIBUTE_UNUSED
<br>
-#  define __hwloc_attribute_unused __attribute__((__unused__))
<br>
-# else
<br>
-#  define __hwloc_attribute_unused
<br>
-# endif
<br>
+#define HWLOC_HAVE(what) (defined(HWLOC_HAVE_##what) &amp;&amp; HWLOC_HAVE_##what)
<br>
+
<br>
+#if HWLOC_HAVE(ATTRIBUTE_UNUSED) || defined(__GNUC__)
<br>
+# define __hwloc_attribute_unused __attribute__((__unused__))
<br>
&nbsp;#else
<br>
&nbsp;# define __hwloc_attribute_unused
<br>
&nbsp;#endif
<br>
<p>-#ifdef HWLOC_HAVE_ATTRIBUTE_MALLOC
<br>
-# if HWLOC_HAVE_ATTRIBUTE_MALLOC
<br>
-#  define __hwloc_attribute_malloc __attribute__((__malloc__))
<br>
-# else
<br>
-#  define __hwloc_attribute_malloc
<br>
-# endif
<br>
+#if HWLOC_HAVE(ATTRIBUTE_MALLOC)
<br>
+# define __hwloc_attribute_malloc __attribute__((__malloc__))
<br>
&nbsp;#else
<br>
&nbsp;# define __hwloc_attribute_malloc
<br>
&nbsp;#endif
<br>
<p>-#ifdef HWLOC_HAVE_ATTRIBUTE_CONST
<br>
-# if HWLOC_HAVE_ATTRIBUTE_CONST
<br>
-#  define __hwloc_attribute_const __attribute__((__const__))
<br>
-# else
<br>
-#  define __hwloc_attribute_const
<br>
-# endif
<br>
+#if HWLOC_HAVE(ATTRIBUTE_CONST) || defined(__GNUC__)
<br>
+# define __hwloc_attribute_const __attribute__((__const__))
<br>
&nbsp;#else
<br>
&nbsp;# define __hwloc_attribute_const
<br>
&nbsp;#endif
<br>
<p>-#ifdef HWLOC_HAVE_ATTRIBUTE_PURE
<br>
-# if HWLOC_HAVE_ATTRIBUTE_PURE
<br>
-#  define __hwloc_attribute_pure __attribute__((__pure__))
<br>
-# else
<br>
-#  define __hwloc_attribute_pure
<br>
-# endif
<br>
+#if HWLOC_HAVE(ATTRIBUTE_PURE) || defined(__GNUC__)
<br>
+# define __hwloc_attribute_pure __attribute__((__pure__))
<br>
&nbsp;#else
<br>
&nbsp;# define __hwloc_attribute_pure
<br>
&nbsp;#endif
<br>
<p>-#ifdef HWLOC_HAVE_ATTRIBUTE_DEPRECATED
<br>
-# if HWLOC_HAVE_ATTRIBUTE_DEPRECATED
<br>
-#  define __hwloc_attribute_deprecated __attribute__((__deprecated__))
<br>
-# else
<br>
-#  define __hwloc_attribute_deprecated
<br>
-# endif
<br>
+#if HWLOC_HAVE(ATTRIBUTE_DEPRECATED) || defined(__GNUC__)
<br>
+# define __hwloc_attribute_deprecated __attribute__((__deprecated__))
<br>
&nbsp;#else
<br>
&nbsp;# define __hwloc_attribute_deprecated
<br>
&nbsp;#endif
<br>
<p>Regards,
<br>
Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0799.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0797.php">Brice Goglin: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>In reply to:</strong> <a href="0797.php">Brice Goglin: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0799.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0799.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0810.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
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
