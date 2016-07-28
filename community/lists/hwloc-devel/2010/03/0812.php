<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 12:52:00 2010" -->
<!-- isoreceived="20100326165200" -->
<!-- sent="Fri, 26 Mar 2010 12:51:53 -0400" -->
<!-- isosent="20100326165153" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853" -->
<!-- id="6CE3F989-4842-493D-9633-7629DF4BD4BB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201003261601.o2QG1HtS005450_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 12:51:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0813.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<li><strong>Previous message:</strong> <a href="0811.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0813.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<li><strong>Reply:</strong> <a href="0813.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<li><strong>Reply:</strong> <a href="0820.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does this work with compilers that (pseudo) impersonate gcc (e.g., icc)?
<br>
<p>On Mar 26, 2010, at 12:01 PM, &lt;sthibaul_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-03-26 12:01:17 EDT (Fri, 26 Mar 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1853
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1853">https://svn.open-mpi.org/trac/hwloc/changeset/1853</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Automatically enable some attributes when the compiler is known to be gcc. Thanks Bert Wesarg for the suggestion
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/config.h.in |    28 ++++++++++++++++++----------           
</span><br>
<span class="quotelev1">&gt;    1 files changed, 18 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/include/hwloc/config.h.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/include/hwloc/config.h.in     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/include/hwloc/config.h.in     2010-03-26 12:01:17 EDT (Fri, 26 Mar 2010)
</span><br>
<span class="quotelev1">&gt; @@ -19,8 +19,16 @@
</span><br>
<span class="quotelev1">&gt;  # endif
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#ifdef HWLOC_HAVE_ATTRIBUTE_UNUSED
</span><br>
<span class="quotelev1">&gt; -# if HWLOC_HAVE_ATTRIBUTE_UNUSED
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Note: this is public.  We can not assume anything from the compiler used
</span><br>
<span class="quotelev1">&gt; + * by the application and thus the HWLOC_HAVE_* macros below are not
</span><br>
<span class="quotelev1">&gt; + * fetched from the autoconf result here. We only automatically use a few
</span><br>
<span class="quotelev1">&gt; + * well-known easy cases.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* Maybe before gcc 2.95 too */
</span><br>
<span class="quotelev1">&gt; +#if defined(HWLOC_HAVE_ATTRIBUTE_UNUSED) || (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))
</span><br>
<span class="quotelev1">&gt; +# if HWLOC_HAVE_ATTRIBUTE_UNUSED || (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))
</span><br>
<span class="quotelev1">&gt;  #  define __hwloc_attribute_unused __attribute__((__unused__))
</span><br>
<span class="quotelev1">&gt;  # else
</span><br>
<span class="quotelev1">&gt;  #  define __hwloc_attribute_unused
</span><br>
<span class="quotelev1">&gt; @@ -29,8 +37,8 @@
</span><br>
<span class="quotelev1">&gt;  # define __hwloc_attribute_unused
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#ifdef HWLOC_HAVE_ATTRIBUTE_MALLOC
</span><br>
<span class="quotelev1">&gt; -# if HWLOC_HAVE_ATTRIBUTE_MALLOC
</span><br>
<span class="quotelev1">&gt; +#if defined(HWLOC_HAVE_ATTRIBUTE_MALLOC) || (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))
</span><br>
<span class="quotelev1">&gt; +# if HWLOC_HAVE_ATTRIBUTE_MALLOC || (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))
</span><br>
<span class="quotelev1">&gt;  #  define __hwloc_attribute_malloc __attribute__((__malloc__))
</span><br>
<span class="quotelev1">&gt;  # else
</span><br>
<span class="quotelev1">&gt;  #  define __hwloc_attribute_malloc
</span><br>
<span class="quotelev1">&gt; @@ -39,8 +47,8 @@
</span><br>
<span class="quotelev1">&gt;  # define __hwloc_attribute_malloc
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#ifdef HWLOC_HAVE_ATTRIBUTE_CONST
</span><br>
<span class="quotelev1">&gt; -# if HWLOC_HAVE_ATTRIBUTE_CONST
</span><br>
<span class="quotelev1">&gt; +#if defined(HWLOC_HAVE_ATTRIBUTE_CONST) || (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))
</span><br>
<span class="quotelev1">&gt; +# if HWLOC_HAVE_ATTRIBUTE_CONST || (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))
</span><br>
<span class="quotelev1">&gt;  #  define __hwloc_attribute_const __attribute__((__const__))
</span><br>
<span class="quotelev1">&gt;  # else
</span><br>
<span class="quotelev1">&gt;  #  define __hwloc_attribute_const
</span><br>
<span class="quotelev1">&gt; @@ -49,8 +57,8 @@
</span><br>
<span class="quotelev1">&gt;  # define __hwloc_attribute_const
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#ifdef HWLOC_HAVE_ATTRIBUTE_PURE
</span><br>
<span class="quotelev1">&gt; -# if HWLOC_HAVE_ATTRIBUTE_PURE
</span><br>
<span class="quotelev1">&gt; +#if defined(HWLOC_HAVE_ATTRIBUTE_PURE) || (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))
</span><br>
<span class="quotelev1">&gt; +# if HWLOC_HAVE_ATTRIBUTE_PURE || (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 96))
</span><br>
<span class="quotelev1">&gt;  #  define __hwloc_attribute_pure __attribute__((__pure__))
</span><br>
<span class="quotelev1">&gt;  # else
</span><br>
<span class="quotelev1">&gt;  #  define __hwloc_attribute_pure
</span><br>
<span class="quotelev1">&gt; @@ -59,8 +67,8 @@
</span><br>
<span class="quotelev1">&gt;  # define __hwloc_attribute_pure
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#ifdef HWLOC_HAVE_ATTRIBUTE_DEPRECATED
</span><br>
<span class="quotelev1">&gt; -# if HWLOC_HAVE_ATTRIBUTE_DEPRECATED
</span><br>
<span class="quotelev1">&gt; +#if defined(HWLOC_HAVE_ATTRIBUTE_DEPRECATED) || (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR__ &gt;= 3))
</span><br>
<span class="quotelev1">&gt; +# if HWLOC_HAVE_ATTRIBUTE_DEPRECATED || (__GNUC__ &gt; 3 || (__GNUC__ == 3 &amp;&amp; __GNUC_MINOR__ &gt;= 3))
</span><br>
<span class="quotelev1">&gt;  #  define __hwloc_attribute_deprecated __attribute__((__deprecated__))
</span><br>
<span class="quotelev1">&gt;  # else
</span><br>
<span class="quotelev1">&gt;  #  define __hwloc_attribute_deprecated
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0813.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<li><strong>Previous message:</strong> <a href="0811.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0813.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<li><strong>Reply:</strong> <a href="0813.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<li><strong>Reply:</strong> <a href="0820.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
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
