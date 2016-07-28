<?
$subject_val = "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 14:43:00 2014" -->
<!-- isoreceived="20140107194300" -->
<!-- sent="Tue, 7 Jan 2014 13:43:00 -0600" -->
<!-- isosent="20140107194300" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c" -->
<!-- id="CAANzjE=uYb6x5_CamXeOn_Z7Z=Rg_evvk89H3y-N8C+5RUS+zQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DFA80D54-9FE3-4B95-823C-C69985C23102_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-01-07 14:43:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13574.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Previous message:</strong> <a href="13572.php">George Bosilca: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>In reply to:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13574.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Reply:</strong> <a href="13574.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Either would be fine with me. If you left in the verbose message then it
<br>
might be a bit confusing to any user that might see it.
<br>
<p><p>On Fri, Jan 3, 2014 at 9:13 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That would work. Alternatively, you could try just returning OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; in place of OPAL_ERR_NOT_AVAILABLE. This would still avoid opening the
</span><br>
<span class="quotelev1">&gt; components for no reason (thus saving some memory) while not causing
</span><br>
<span class="quotelev1">&gt; opal_init to abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2014, at 3:19 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So removing all output like in this patch would be ok?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev1">&gt; b/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev2">&gt; &gt; index a09fe59..f487752 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -14,13 +14,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -#include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -#include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;opal/include/opal/constants.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -#include &quot;opal/mca/compress/compress.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;opal/mca/compress/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;opal/mca/compress/base/static-components.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -45,13 +41,6 @@ MCA_BASE_FRAMEWORK_DECLARE(opal, compress, NULL,
</span><br>
<span class="quotelev1">&gt; opal_compress_base_register, op
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int opal_compress_base_register (mca_base_register_flag_t flags)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    /* Compression currently only used with C/R */
</span><br>
<span class="quotelev2">&gt; &gt; -    if( !opal_cr_is_enabled ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        opal_output_verbose(10,
</span><br>
<span class="quotelev1">&gt; opal_compress_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt; -                            &quot;compress:open: FT is not enabled,
</span><br>
<span class="quotelev1">&gt; skipping!&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -        return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -61,13 +50,6 @@ static int opal_compress_base_register
</span><br>
<span class="quotelev1">&gt; (mca_base_register_flag_t flags)
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; int opal_compress_base_open(mca_base_open_flag_t flags)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    /* Compression currently only used with C/R */
</span><br>
<span class="quotelev2">&gt; &gt; -    if( !opal_cr_is_enabled ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        opal_output_verbose(10,
</span><br>
<span class="quotelev1">&gt; opal_compress_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt; -                            &quot;compress:open: FT is not enabled,
</span><br>
<span class="quotelev1">&gt; skipping!&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -        return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     /* Open up all available components */
</span><br>
<span class="quotelev2">&gt; &gt;     return mca_base_framework_components_open
</span><br>
<span class="quotelev1">&gt; (&amp;opal_compress_base_framework, flags);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jan 02, 2014 at 12:32:32PM -0500, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think the only reason I protected that framework is to reduce the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; overhead of an application using a build of Open MPI with CR support,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no enabling it at runtime. Nothing in the compress framework depends on
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CR infrastructure (although the CR infrastructure can use the compress
</span><br>
<span class="quotelev3">&gt; &gt;&gt; framework if the user chooses to). So I bet we can remove the protection
</span><br>
<span class="quotelev3">&gt; &gt;&gt; altogether and be fine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I think this patch is fine. I might also go as far as removing the
</span><br>
<span class="quotelev1">&gt; 'if'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; block altogether as the protection should not been needed any longer.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Dec 27, 2013 at 3:46 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Right now the C/R code fails because of a change introduced in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal/mca/compress/base/compress_base_open.c in 2013 with commit
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; git 734c724ff76d9bf814f3ab0396bcd9ee6fddcd1b
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; svn r28239
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Update OPAL frameworks to use the MCA framework system.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This commit changed a lot but also the return value of the function
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OPAL_SUCCESS to OPAL_ERR_NOT_AVAILABLE. With following patch I can make
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it work again:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; diff --git a/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; b/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; index a09fe59..69eabfa 100644
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --- a/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +++ b/opal/mca/compress/base/compress_base_open.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; @@ -45,11 +45,11 @@ MCA_BASE_FRAMEWORK_DECLARE(opal, compress, NULL,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_compress_base_register, op
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; static int opal_compress_base_register (mca_base_register_flag_t flags)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     /* Compression currently only used with C/R */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     if( !opal_cr_is_enabled ) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         opal_output_verbose(10,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_compress_base_framework.framework_output,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                             &quot;compress:open: FT is not enabled,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; skipping!&quot;);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -        return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +        return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My question is if OPAL_ERR_NOT_AVAILABLE is indeed the correct return
</span><br>
<span class="quotelev1">&gt; value
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and the function calling opal_compress_base_register() should actually
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; handle OPAL_ERR_NOT_AVAILABLE or if returning OPAL_SUCCESS is still the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; right
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; return value?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                Adrian
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev3">&gt; &gt;&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13574.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Previous message:</strong> <a href="13572.php">George Bosilca: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>In reply to:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13574.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Reply:</strong> <a href="13574.php">Adrian Reber: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
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
