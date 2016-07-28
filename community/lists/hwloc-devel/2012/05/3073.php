<?
$subject_val = "[hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 16:59:23 2012" -->
<!-- isoreceived="20120509205923" -->
<!-- sent="Wed, 9 May 2012 16:59:17 -0400" -->
<!-- isosent="20120509205917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] [PATCH] Use plain &amp;quot;inline&amp;quot; in C++" -->
<!-- id="52727D1F-0496-419A-8246-6F1B3E58302E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 16:59:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3074.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3072.php">Jeff Squyres: "Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3074.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Maybe reply:</strong> <a href="3074.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Maybe reply:</strong> <a href="3076.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When hwloc.h is included in C++ source, we should just set __hwloc_inline__ to &quot;inline&quot; (not __inline__ or otherwise), because &quot;inline&quot; is part of the C++ language.
<br>
<p>We found this in testing OMPI with the Solaris Studio compilers -- their C++ compiler doesn't recognize __inline__.  This is a new issue because the OMPI C++ bindings are now including &lt;hwloc.h&gt; (due to some lengthy header dependency chains...).
<br>
<p>Samuel -- does this look right to you?  If so, I can apply to 1.3, 1.4, and trunk.
<br>
<p>Index: include/hwloc/autogen/config.h.in
<br>
===================================================================
<br>
--- include/hwloc/autogen/config.h.in	(revision 26414)
<br>
+++ include/hwloc/autogen/config.h.in	(working copy)
<br>
@@ -2,7 +2,7 @@
<br>
&nbsp;&nbsp;* Copyright &#169; 2009 CNRS
<br>
&nbsp;&nbsp;* Copyright &#169; 2009-2010 inria.  All rights reserved.
<br>
&nbsp;&nbsp;* Copyright &#169; 2009-2012 Universit&#233; Bordeaux 1
<br>
- * Copyright &#169; 2009-2011 Cisco Systems, Inc.  All rights reserved.
<br>
+ * Copyright &#169; 2009-2012 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;* See COPYING in top-level directory.
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
@@ -21,7 +21,11 @@
<br>
&nbsp;# endif
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
-#if defined(_MSC_VER) || defined(__HP_cc)
<br>
+/* Note that if we're compiling C++, then just use the &quot;inline&quot;
<br>
+   keyword, since it's part of C++ */
<br>
+#if defined(c_plusplus) || defined(__cplusplus)
<br>
+#  define __hwloc_inline inline
<br>
+#elif defined(_MSC_VER) || defined(__HP_cc)
<br>
&nbsp;#  define __hwloc_inline __inline
<br>
&nbsp;#else
<br>
&nbsp;#  define __hwloc_inline __inline__
<br>
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
<li><strong>Next message:</strong> <a href="3074.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3072.php">Jeff Squyres: "Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3074.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Maybe reply:</strong> <a href="3074.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Maybe reply:</strong> <a href="3076.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
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
