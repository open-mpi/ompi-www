<?
$subject_val = "Re: [hwloc-devel] Compiler warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 12 08:01:18 2012" -->
<!-- isoreceived="20120712120118" -->
<!-- sent="Thu, 12 Jul 2012 14:01:12 +0200" -->
<!-- isosent="20120712120112" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Compiler warnings" -->
<!-- id="4FFEBC88.5040509_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1DB45318-1DAE-4874-B9EF-7B4759CF0684_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Compiler warnings<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-12 08:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3170.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="3168.php">Jeff Squyres: "[hwloc-devel] Compiler warnings"</a>
<li><strong>In reply to:</strong> <a href="3168.php">Jeff Squyres: "[hwloc-devel] Compiler warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3170.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Reply:</strong> <a href="3170.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Reply:</strong> <a href="3171.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/07/2012 13:35, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; I silenced some harmless compiler warnings (i.e., the compiler couldn't tell that some variables would always be initialized) in r4610.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting a few others, though -- could you have a look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; distances.c: In function 'hwloc_distances_set_from_env':
</span><br>
<span class="quotelev1">&gt; distances.c:259: warning: '__old_locale' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; topology-xml.c: In function 'hwloc_topology_export_xmlbuffer':
</span><br>
<span class="quotelev1">&gt; topology-xml.c:882: warning: '__old_locale' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; topology-xml.c: In function 'hwloc_topology_export_xml':
</span><br>
<span class="quotelev1">&gt; topology-xml.c:857: warning: '__old_locale' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I saw some similar new compiler warnings with gcc 4.7.x (and I already
<br>
fixed them) but I can't get yours with 4.7.1 now. Which compiler do you
<br>
have?
<br>
<p>The patch should fix them but the compiler shouldn't be that dumb.
<br>
<p>Brice
<br>
<p>--- include/private/private.h	(r&#233;vision 4610)
<br>
+++ include/private/private.h	(copie de travail)
<br>
@@ -346,7 +346,7 @@
<br>
&nbsp;#ifdef HAVE_XLOCALE_H
<br>
&nbsp;#include &quot;xlocale.h&quot;
<br>
&nbsp;#endif
<br>
-#define hwloc_localeswitch_declare locale_t __old_locale, __new_locale
<br>
+#define hwloc_localeswitch_declare locale_t __old_locale = (locale_t)0, __new_locale
<br>
&nbsp;#define hwloc_localeswitch_init() do {                     \
<br>
&nbsp;&nbsp;&nbsp;__new_locale = newlocale(LC_ALL_MASK, &quot;C&quot;, (locale_t)0); \
<br>
&nbsp;&nbsp;&nbsp;if (__new_locale != (locale_t)0)                         \
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3170.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="3168.php">Jeff Squyres: "[hwloc-devel] Compiler warnings"</a>
<li><strong>In reply to:</strong> <a href="3168.php">Jeff Squyres: "[hwloc-devel] Compiler warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3170.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Reply:</strong> <a href="3170.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Reply:</strong> <a href="3171.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
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
