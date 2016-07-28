<?
$subject_val = "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  3 06:19:35 2014" -->
<!-- isoreceived="20140103111935" -->
<!-- sent="Fri, 3 Jan 2014 12:19:34 +0100" -->
<!-- isosent="20140103111934" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c" -->
<!-- id="20140103111934.GA29710_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjE=13MtQgn5KNyYLQFz7wj9r_T-gP=E7piEHUKgL5d6H2g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-03 06:19:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Previous message:</strong> <a href="13568.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13567.php">Josh Hursey: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Reply:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So removing all output like in this patch would be ok?
<br>
<p>diff --git a/opal/mca/compress/base/compress_base_open.c b/opal/mca/compress/base/compress_base_open.c
<br>
index a09fe59..f487752 100644
<br>
--- a/opal/mca/compress/base/compress_base_open.c
<br>
+++ b/opal/mca/compress/base/compress_base_open.c
<br>
@@ -14,13 +14,9 @@
<br>
&nbsp;
<br>
&nbsp;#include &quot;opal_config.h&quot;
<br>
&nbsp;
<br>
-#include &lt;string.h&gt;
<br>
-#include &quot;opal/mca/mca.h&quot;
<br>
&nbsp;#include &quot;opal/mca/base/base.h&quot;
<br>
&nbsp;#include &quot;opal/include/opal/constants.h&quot;
<br>
-#include &quot;opal/mca/compress/compress.h&quot;
<br>
&nbsp;#include &quot;opal/mca/compress/base/base.h&quot;
<br>
-#include &quot;opal/util/output.h&quot;
<br>
&nbsp;
<br>
&nbsp;#include &quot;opal/mca/compress/base/static-components.h&quot;
<br>
&nbsp;
<br>
@@ -45,13 +41,6 @@ MCA_BASE_FRAMEWORK_DECLARE(opal, compress, NULL, opal_compress_base_register, op
<br>
&nbsp;
<br>
&nbsp;static int opal_compress_base_register (mca_base_register_flag_t flags)
<br>
&nbsp;{
<br>
-    /* Compression currently only used with C/R */
<br>
-    if( !opal_cr_is_enabled ) {
<br>
-        opal_output_verbose(10, opal_compress_base_framework.framework_output,
<br>
-                            &quot;compress:open: FT is not enabled, skipping!&quot;);
<br>
-        return OPAL_ERR_NOT_AVAILABLE;
<br>
-    }
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
@@ -61,13 +50,6 @@ static int opal_compress_base_register (mca_base_register_flag_t flags)
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;int opal_compress_base_open(mca_base_open_flag_t flags)
<br>
&nbsp;{
<br>
-    /* Compression currently only used with C/R */
<br>
-    if( !opal_cr_is_enabled ) {
<br>
-        opal_output_verbose(10, opal_compress_base_framework.framework_output,
<br>
-                            &quot;compress:open: FT is not enabled, skipping!&quot;);
<br>
-        return OPAL_SUCCESS;
<br>
-    }
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Open up all available components */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return mca_base_framework_components_open (&amp;opal_compress_base_framework, flags);
<br>
&nbsp;}
<br>
<p><p><p>On Thu, Jan 02, 2014 at 12:32:32PM -0500, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I think the only reason I protected that framework is to reduce the
</span><br>
<span class="quotelev1">&gt; overhead of an application using a build of Open MPI with CR support, but
</span><br>
<span class="quotelev1">&gt; no enabling it at runtime. Nothing in the compress framework depends on the
</span><br>
<span class="quotelev1">&gt; CR infrastructure (although the CR infrastructure can use the compress
</span><br>
<span class="quotelev1">&gt; framework if the user chooses to). So I bet we can remove the protection
</span><br>
<span class="quotelev1">&gt; altogether and be fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think this patch is fine. I might also go as far as removing the 'if'
</span><br>
<span class="quotelev1">&gt; block altogether as the protection should not been needed any longer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 27, 2013 at 3:46 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Right now the C/R code fails because of a change introduced in
</span><br>
<span class="quotelev2">&gt; &gt; opal/mca/compress/base/compress_base_open.c in 2013 with commit
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; git 734c724ff76d9bf814f3ab0396bcd9ee6fddcd1b
</span><br>
<span class="quotelev2">&gt; &gt; svn r28239
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Update OPAL frameworks to use the MCA framework system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This commit changed a lot but also the return value of the function from
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_SUCCESS to OPAL_ERR_NOT_AVAILABLE. With following patch I can make
</span><br>
<span class="quotelev2">&gt; &gt; it work again:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev2">&gt; &gt; b/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev2">&gt; &gt; index a09fe59..69eabfa 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -45,11 +45,11 @@ MCA_BASE_FRAMEWORK_DECLARE(opal, compress, NULL,
</span><br>
<span class="quotelev2">&gt; &gt; opal_compress_base_register, op
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  static int opal_compress_base_register (mca_base_register_flag_t flags)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;      /* Compression currently only used with C/R */
</span><br>
<span class="quotelev2">&gt; &gt;      if( !opal_cr_is_enabled ) {
</span><br>
<span class="quotelev2">&gt; &gt;          opal_output_verbose(10,
</span><br>
<span class="quotelev2">&gt; &gt; opal_compress_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt;                              &quot;compress:open: FT is not enabled,
</span><br>
<span class="quotelev2">&gt; &gt; skipping!&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -        return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev2">&gt; &gt; +        return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My question is if OPAL_ERR_NOT_AVAILABLE is indeed the correct return value
</span><br>
<span class="quotelev2">&gt; &gt; and the function calling opal_compress_base_register() should actually
</span><br>
<span class="quotelev2">&gt; &gt; handle OPAL_ERR_NOT_AVAILABLE or if returning OPAL_SUCCESS is still the
</span><br>
<span class="quotelev2">&gt; &gt; right
</span><br>
<span class="quotelev2">&gt; &gt; return value?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev1">&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Previous message:</strong> <a href="13568.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13567.php">Josh Hursey: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Reply:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
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
