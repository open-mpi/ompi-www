<?
$subject_val = "Re: [hwloc-devel] Compiler warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 12 08:10:13 2012" -->
<!-- isoreceived="20120712121013" -->
<!-- sent="Thu, 12 Jul 2012 08:10:11 -0400" -->
<!-- isosent="20120712121011" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Compiler warnings" -->
<!-- id="550E7E62-E770-46CF-B83A-2154C7151E4A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FFEBC88.5040509_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-12 08:10:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3171.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="3169.php">Brice Goglin: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>In reply to:</strong> <a href="3169.php">Brice Goglin: "Re: [hwloc-devel] Compiler warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3171.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the gcc that comes with RHEL 6.x:
<br>
<p>% gcc --version
<br>
gcc (GCC) 4.4.6 20110731 (Red Hat 4.4.6-3)
<br>
Copyright (C) 2010 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p><p>On Jul 12, 2012, at 8:01 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 12/07/2012 13:35, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I silenced some harmless compiler warnings (i.e., the compiler couldn't tell that some variables would always be initialized) in r4610.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting a few others, though -- could you have a look?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; distances.c: In function 'hwloc_distances_set_from_env':
</span><br>
<span class="quotelev2">&gt;&gt; distances.c:259: warning: '__old_locale' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; topology-xml.c: In function 'hwloc_topology_export_xmlbuffer':
</span><br>
<span class="quotelev2">&gt;&gt; topology-xml.c:882: warning: '__old_locale' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; topology-xml.c: In function 'hwloc_topology_export_xml':
</span><br>
<span class="quotelev2">&gt;&gt; topology-xml.c:857: warning: '__old_locale' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw some similar new compiler warnings with gcc 4.7.x (and I already
</span><br>
<span class="quotelev1">&gt; fixed them) but I can't get yours with 4.7.1 now. Which compiler do you
</span><br>
<span class="quotelev1">&gt; have?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch should fix them but the compiler shouldn't be that dumb.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- include/private/private.h	(r&#233;vision 4610)
</span><br>
<span class="quotelev1">&gt; +++ include/private/private.h	(copie de travail)
</span><br>
<span class="quotelev1">&gt; @@ -346,7 +346,7 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_XLOCALE_H
</span><br>
<span class="quotelev1">&gt; #include &quot;xlocale.h&quot;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; -#define hwloc_localeswitch_declare locale_t __old_locale, __new_locale
</span><br>
<span class="quotelev1">&gt; +#define hwloc_localeswitch_declare locale_t __old_locale = (locale_t)0, __new_locale
</span><br>
<span class="quotelev1">&gt; #define hwloc_localeswitch_init() do {                     \
</span><br>
<span class="quotelev1">&gt;   __new_locale = newlocale(LC_ALL_MASK, &quot;C&quot;, (locale_t)0); \
</span><br>
<span class="quotelev1">&gt;   if (__new_locale != (locale_t)0)                         \
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="3171.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="3169.php">Brice Goglin: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>In reply to:</strong> <a href="3169.php">Brice Goglin: "Re: [hwloc-devel] Compiler warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3171.php">Jeff Squyres: "Re: [hwloc-devel] Compiler warnings"</a>
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
