<?
$subject_val = "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 21 15:07:50 2014" -->
<!-- isoreceived="20140221200750" -->
<!-- sent="Fri, 21 Feb 2014 14:07:49 -0600" -->
<!-- isosent="20140221200749" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c" -->
<!-- id="CAANzjEk6CXxSKgn=LW=pWtytzP5FLW2wGYF_bjggn4kM0vd1uw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1C210C17-3ACE-42BF-B02B-7E847BE1F867_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-21 15:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14212.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14210.php">Nathan Hjelm: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>In reply to:</strong> <a href="14208.php">Ralph Castain: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p><p>On Fri, Feb 21, 2014 at 10:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; looks fine to me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 21, 2014, at 6:23 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To restart a process using orte-restart I need sstore initialized when
</span><br>
<span class="quotelev2">&gt; &gt; running as a tool. This is currently missing. The new code is
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and should only affect --with-ft builds. The following is the change I
</span><br>
<span class="quotelev2">&gt; &gt; want to make:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; index 93aed89..b102e6d 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -43,6 +43,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;orte/mca/state/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;orte/mca/snapc/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;orte/mca/sstore/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;orte/util/session_dir.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -175,11 +176,22 @@ int orte_ess_base_tool_setup(void)
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;orte_snapc_base_open&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         goto error;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; mca_base_framework_open(&amp;orte_sstore_base_framework, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; +        error = &quot;orte_sstore_base_open&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        goto error;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP,
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_IS_APP))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         goto error;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret = orte_sstore_base_select())) {
</span><br>
<span class="quotelev2">&gt; &gt; +        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; +        error = &quot;orte_sstore_base_select&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        goto error;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Tools do not need all the OPAL CR stuff */
</span><br>
<span class="quotelev2">&gt; &gt;     opal_cr_set_enabled(false);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -201,6 +213,7 @@ int orte_ess_base_tool_finalize(void)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev2">&gt; &gt;     mca_base_framework_close(&amp;orte_snapc_base_framework);
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_base_framework_close(&amp;orte_sstore_base_framework);
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* if I am a tool, then all I will have done is
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               Adrian
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14211/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14212.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14210.php">Nathan Hjelm: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>In reply to:</strong> <a href="14208.php">Ralph Castain: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<!-- nextthread="start" -->
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
