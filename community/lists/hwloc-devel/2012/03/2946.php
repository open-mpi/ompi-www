<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 10:51:46 2012" -->
<!-- isoreceived="20120320145146" -->
<!-- sent="Tue, 20 Mar 2012 10:51:34 -0400" -->
<!-- isosent="20120320145134" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409" -->
<!-- id="F83E7623-7F61-4F58-8915-B30D281A7819_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201203172345.q2HNjgRL028937_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 10:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2947.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2945.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2963.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409"</a>
<li><strong>Maybe reply:</strong> <a href="2963.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel:
<br>
<p>What do you think of this patch?  It separates out the individual version checking to make the #define logic a little easier to read.
<br>
<p>Index: include/hwloc/autogen/config.h.in
<br>
===================================================================
<br>
--- include/hwloc/autogen/config.h.in	(revision 4414)
<br>
+++ include/hwloc/autogen/config.h.in	(working copy)
<br>
@@ -34,11 +34,40 @@
<br>
&nbsp;&nbsp;* well-known easy cases.
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
+/* Some handy constants to make the logic below a little more readable */
<br>
+#if defined(__cplusplus) &amp;&amp; \
<br>
+    (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))
<br>
+#define GXX_ABOVE_3_4 1
<br>
+#else
<br>
+#define GXX_ABOVE_3_4 0
<br>
+#endif
<br>
+
<br>
+#if !defined(__cplusplus) &amp;&amp; \
<br>
+    (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))
<br>
+#define GCC_ABOVE_2_95 1
<br>
+#else
<br>
+#define GCC_ABOVE_2_95 0
<br>
+#endif
<br>
+
<br>
+#if !defined(__cplusplus) &amp;&amp; \
<br>
+    (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))
<br>
+#define GCC_ABOVE_2_96 1
<br>
+#else
<br>
+#define GCC_ABOVE_2_96 0
<br>
+#endif
<br>
+
<br>
+#if !defined(__cplusplus) &amp;&amp; \
<br>
+    (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR__ &gt;= 3))
<br>
+#define GCC_ABOVE_3_3 1
<br>
+#else
<br>
+#define GCC_ABOVE_3_3 0
<br>
+#endif
<br>
+
<br>
&nbsp;/* Maybe before gcc 2.95 too */
<br>
&nbsp;#ifdef HWLOC_HAVE_ATTRIBUTE_UNUSED
<br>
&nbsp;#define __HWLOC_HAVE_ATTRIBUTE_UNUSED HWLOC_HAVE_ATTRIBUTE_UNUSED 
<br>
&nbsp;#elif defined(__GNUC__)
<br>
-# define __HWLOC_HAVE_ATTRIBUTE_UNUSED ((defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))) || (!defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))))
<br>
+# define __HWLOC_HAVE_ATTRIBUTE_UNUSED (GXX_ABOVE_3_4 || GCC_ABOVE_2_95)
<br>
&nbsp;#else
<br>
&nbsp;# define __HWLOC_HAVE_ATTRIBUTE_UNUSED 0
<br>
&nbsp;#endif
<br>
@@ -51,7 +80,7 @@
<br>
&nbsp;#ifdef HWLOC_HAVE_ATTRIBUTE_MALLOC
<br>
&nbsp;#define __HWLOC_HAVE_ATTRIBUTE_MALLOC HWLOC_HAVE_ATTRIBUTE_MALLOC 
<br>
&nbsp;#elif defined(__GNUC__)
<br>
-# define __HWLOC_HAVE_ATTRIBUTE_MALLOC ((defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))) || (!defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))))
<br>
+# define __HWLOC_HAVE_ATTRIBUTE_MALLOC (GXX_ABOVE_3_4 || GCC_ABOVE_2_96)
<br>
&nbsp;#else
<br>
&nbsp;# define __HWLOC_HAVE_ATTRIBUTE_MALLOC 0
<br>
&nbsp;#endif
<br>
@@ -64,7 +93,7 @@
<br>
&nbsp;#ifdef HWLOC_HAVE_ATTRIBUTE_CONST
<br>
&nbsp;#define __HWLOC_HAVE_ATTRIBUTE_CONST HWLOC_HAVE_ATTRIBUTE_CONST 
<br>
&nbsp;#elif defined(__GNUC__)
<br>
-# define __HWLOC_HAVE_ATTRIBUTE_CONST ((defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))) || (!defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))))
<br>
+# define __HWLOC_HAVE_ATTRIBUTE_CONST (GXX_ABOVE_3_4 || GCC_ABOVE_2_95)
<br>
&nbsp;#else
<br>
&nbsp;# define __HWLOC_HAVE_ATTRIBUTE_CONST 0
<br>
&nbsp;#endif
<br>
@@ -77,7 +106,7 @@
<br>
&nbsp;#ifdef HWLOC_HAVE_ATTRIBUTE_PURE
<br>
&nbsp;#define __HWLOC_HAVE_ATTRIBUTE_PURE HWLOC_HAVE_ATTRIBUTE_PURE 
<br>
&nbsp;#elif defined(__GNUC__)
<br>
-# define __HWLOC_HAVE_ATTRIBUTE_PURE ((defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))) || (!defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))))
<br>
+# define __HWLOC_HAVE_ATTRIBUTE_PURE (GXX_ABOVE_3_4 || GCC_ABOVE_2_96)
<br>
&nbsp;#else
<br>
&nbsp;# define __HWLOC_HAVE_ATTRIBUTE_PURE 0
<br>
&nbsp;#endif
<br>
@@ -90,7 +119,7 @@
<br>
&nbsp;#ifdef HWLOC_HAVE_ATTRIBUTE_DEPRECATED
<br>
&nbsp;#define __HWLOC_HAVE_ATTRIBUTE_DEPRECATED HWLOC_HAVE_ATTRIBUTE_DEPRECATED 
<br>
&nbsp;#elif defined(__GNUC__)
<br>
-# define __HWLOC_HAVE_ATTRIBUTE_DEPRECATED ((defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))) || (!defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR__ &gt;= 3))))
<br>
+# define __HWLOC_HAVE_ATTRIBUTE_DEPRECATED (GXX_ABOVE_3_4 || GCC_ABOVE_3_3)
<br>
&nbsp;#else
<br>
&nbsp;# define __HWLOC_HAVE_ATTRIBUTE_DEPRECATED 0
<br>
&nbsp;#endif
<br>
<p><p>On Mar 17, 2012, at 7:45 PM, sthibaul_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2012-03-17 19:45:42 EDT (Sat, 17 Mar 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 4409
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4409">https://svn.open-mpi.org/trac/hwloc/changeset/4409</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Disable attribute use with g++ &lt; 3.4, these do not understand them.
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/include/hwloc/autogen/config.h.in |    10 +++++-----                              
</span><br>
<span class="quotelev1">&gt;   1 files changed, 5 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/include/hwloc/autogen/config.h.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/include/hwloc/autogen/config.h.in	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/include/hwloc/autogen/config.h.in	2012-03-17 19:45:42 EDT (Sat, 17 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -38,7 +38,7 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HWLOC_HAVE_ATTRIBUTE_UNUSED
</span><br>
<span class="quotelev1">&gt; #define __HWLOC_HAVE_ATTRIBUTE_UNUSED HWLOC_HAVE_ATTRIBUTE_UNUSED 
</span><br>
<span class="quotelev1">&gt; #elif defined(__GNUC__)
</span><br>
<span class="quotelev1">&gt; -# define __HWLOC_HAVE_ATTRIBUTE_UNUSED (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))
</span><br>
<span class="quotelev1">&gt; +# define __HWLOC_HAVE_ATTRIBUTE_UNUSED ((defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))) || (!defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))))
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; # define __HWLOC_HAVE_ATTRIBUTE_UNUSED 0
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; @@ -51,7 +51,7 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HWLOC_HAVE_ATTRIBUTE_MALLOC
</span><br>
<span class="quotelev1">&gt; #define __HWLOC_HAVE_ATTRIBUTE_MALLOC HWLOC_HAVE_ATTRIBUTE_MALLOC 
</span><br>
<span class="quotelev1">&gt; #elif defined(__GNUC__)
</span><br>
<span class="quotelev1">&gt; -# define __HWLOC_HAVE_ATTRIBUTE_MALLOC (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))
</span><br>
<span class="quotelev1">&gt; +# define __HWLOC_HAVE_ATTRIBUTE_MALLOC ((defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))) || (!defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))))
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; # define __HWLOC_HAVE_ATTRIBUTE_MALLOC 0
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HWLOC_HAVE_ATTRIBUTE_CONST
</span><br>
<span class="quotelev1">&gt; #define __HWLOC_HAVE_ATTRIBUTE_CONST HWLOC_HAVE_ATTRIBUTE_CONST 
</span><br>
<span class="quotelev1">&gt; #elif defined(__GNUC__)
</span><br>
<span class="quotelev1">&gt; -# define __HWLOC_HAVE_ATTRIBUTE_CONST (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))
</span><br>
<span class="quotelev1">&gt; +# define __HWLOC_HAVE_ATTRIBUTE_CONST ((defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))) || (!defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))))
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; # define __HWLOC_HAVE_ATTRIBUTE_CONST 0
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HWLOC_HAVE_ATTRIBUTE_PURE
</span><br>
<span class="quotelev1">&gt; #define __HWLOC_HAVE_ATTRIBUTE_PURE HWLOC_HAVE_ATTRIBUTE_PURE 
</span><br>
<span class="quotelev1">&gt; #elif defined(__GNUC__)
</span><br>
<span class="quotelev1">&gt; -# define __HWLOC_HAVE_ATTRIBUTE_PURE (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))
</span><br>
<span class="quotelev1">&gt; +# define __HWLOC_HAVE_ATTRIBUTE_PURE ((defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))) || (!defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))))
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; # define __HWLOC_HAVE_ATTRIBUTE_PURE 0
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; @@ -90,7 +90,7 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HWLOC_HAVE_ATTRIBUTE_DEPRECATED
</span><br>
<span class="quotelev1">&gt; #define __HWLOC_HAVE_ATTRIBUTE_DEPRECATED HWLOC_HAVE_ATTRIBUTE_DEPRECATED 
</span><br>
<span class="quotelev1">&gt; #elif defined(__GNUC__)
</span><br>
<span class="quotelev1">&gt; -# define __HWLOC_HAVE_ATTRIBUTE_DEPRECATED (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR__ &gt;= 3))
</span><br>
<span class="quotelev1">&gt; +# define __HWLOC_HAVE_ATTRIBUTE_DEPRECATED ((defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR &gt;= 4))) || (!defined(__cplusplus) &amp;&amp; (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR__ &gt;= 3))))
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; # define __HWLOC_HAVE_ATTRIBUTE_DEPRECATED 0
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
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
<li><strong>Next message:</strong> <a href="2947.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2945.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2963.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409"</a>
<li><strong>Maybe reply:</strong> <a href="2963.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409"</a>
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
