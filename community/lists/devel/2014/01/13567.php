<?
$subject_val = "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 12:32:32 2014" -->
<!-- isoreceived="20140102173232" -->
<!-- sent="Thu, 2 Jan 2014 12:32:32 -0500" -->
<!-- isosent="20140102173232" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c" -->
<!-- id="CAANzjE=13MtQgn5KNyYLQFz7wj9r_T-gP=E7piEHUKgL5d6H2g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20131227204658.GB32485_at_lisas.de" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 12:32:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13568.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13566.php">Josh Hursey: "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13563.php">Adrian Reber: "[OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13569.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Reply:</strong> <a href="13569.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the only reason I protected that framework is to reduce the
<br>
overhead of an application using a build of Open MPI with CR support, but
<br>
no enabling it at runtime. Nothing in the compress framework depends on the
<br>
CR infrastructure (although the CR infrastructure can use the compress
<br>
framework if the user chooses to). So I bet we can remove the protection
<br>
altogether and be fine.
<br>
<p>So I think this patch is fine. I might also go as far as removing the 'if'
<br>
block altogether as the protection should not been needed any longer.
<br>
<p>Thanks,
<br>
Josh
<br>
<p><p><p>On Fri, Dec 27, 2013 at 3:46 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Right now the C/R code fails because of a change introduced in
</span><br>
<span class="quotelev1">&gt; opal/mca/compress/base/compress_base_open.c in 2013 with commit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; git 734c724ff76d9bf814f3ab0396bcd9ee6fddcd1b
</span><br>
<span class="quotelev1">&gt; svn r28239
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Update OPAL frameworks to use the MCA framework system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This commit changed a lot but also the return value of the function from
</span><br>
<span class="quotelev1">&gt; OPAL_SUCCESS to OPAL_ERR_NOT_AVAILABLE. With following patch I can make
</span><br>
<span class="quotelev1">&gt; it work again:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev1">&gt; b/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev1">&gt; index a09fe59..69eabfa 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev1">&gt; @@ -45,11 +45,11 @@ MCA_BASE_FRAMEWORK_DECLARE(opal, compress, NULL,
</span><br>
<span class="quotelev1">&gt; opal_compress_base_register, op
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static int opal_compress_base_register (mca_base_register_flag_t flags)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      /* Compression currently only used with C/R */
</span><br>
<span class="quotelev1">&gt;      if( !opal_cr_is_enabled ) {
</span><br>
<span class="quotelev1">&gt;          opal_output_verbose(10,
</span><br>
<span class="quotelev1">&gt; opal_compress_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                              &quot;compress:open: FT is not enabled,
</span><br>
<span class="quotelev1">&gt; skipping!&quot;);
</span><br>
<span class="quotelev1">&gt; -        return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev1">&gt; +        return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is if OPAL_ERR_NOT_AVAILABLE is indeed the correct return value
</span><br>
<span class="quotelev1">&gt; and the function calling opal_compress_base_register() should actually
</span><br>
<span class="quotelev1">&gt; handle OPAL_ERR_NOT_AVAILABLE or if returning OPAL_SUCCESS is still the
</span><br>
<span class="quotelev1">&gt; right
</span><br>
<span class="quotelev1">&gt; return value?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13567/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13568.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13566.php">Josh Hursey: "Re: [OMPI devel] [PATCH v3 1/2] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13563.php">Adrian Reber: "[OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13569.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Reply:</strong> <a href="13569.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
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
