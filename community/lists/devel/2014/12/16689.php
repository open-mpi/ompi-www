<?
$subject_val = "Re: [OMPI devel] FT code (again)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 10:47:13 2014" -->
<!-- isoreceived="20141219154713" -->
<!-- sent="Fri, 19 Dec 2014 10:47:12 -0500" -->
<!-- isosent="20141219154712" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FT code (again)" -->
<!-- id="CAMJJpkUn4C02VZYx50iiiENLCS-47i_K=hkJVtRUa1+Ezs0jvg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20141219152613.GQ28353_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] FT code (again)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 10:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16690.php">Dave Goodell (dgoodell): "[OMPI devel] Git security vulnerability, please upgrade Windows &amp; OS X Git clients"</a>
<li><strong>Previous message:</strong> <a href="16688.php">Adrian Reber: "[OMPI devel] FT code (again)"</a>
<li><strong>In reply to:</strong> <a href="16688.php">Adrian Reber: "[OMPI devel] FT code (again)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16695.php">Joshua Ladd: "Re: [OMPI devel] FT code (again)"</a>
<li><strong>Reply:</strong> <a href="16695.php">Joshua Ladd: "Re: [OMPI devel] FT code (again)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A opal_pmix.fence seems like a perfect replacement.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, Dec 19, 2014 at 10:26 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Again I am trying to get the FT code working. This time I am unsure how
</span><br>
<span class="quotelev1">&gt; to resolve the code changes from this commit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit aec5cd08bd8c33677276612b899b48618d271efa
</span><br>
<span class="quotelev1">&gt; Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Thu Aug 21 18:56:47 2014 +0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Per the PMIx RFC:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This includes changes like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -172,17 +164,7 @@ static int rte_init(void)
</span><br>
<span class="quotelev1">&gt;       * in the job won't be executing this step, so we would hang
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_PROC_IS_NON_MPI &amp;&amp; !orte_do_not_barrier) {
</span><br>
<span class="quotelev1">&gt; -        orte_grpcomm_collective_t coll;
</span><br>
<span class="quotelev1">&gt; -        OBJ_CONSTRUCT(&amp;coll, orte_grpcomm_collective_t);
</span><br>
<span class="quotelev1">&gt; -        coll.id = orte_process_info.peer_modex;
</span><br>
<span class="quotelev1">&gt; -        coll.active = true;
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret = orte_grpcomm.modex(&amp;coll))) {
</span><br>
<span class="quotelev1">&gt; -            ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -            error = &quot;orte modex&quot;;
</span><br>
<span class="quotelev1">&gt; -            goto error;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        ORTE_WAIT_FOR_COMPLETION(coll.active);
</span><br>
<span class="quotelev1">&gt; -        OBJ_DESTRUCT(&amp;coll);
</span><br>
<span class="quotelev1">&gt; +        opal_pmix.fence(NULL, 0);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the FT code in orte/mca/ess/env/ess_env_module.c there is similar code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;coll, orte_grpcomm_collective_t);
</span><br>
<span class="quotelev1">&gt;     coll.id = orte_process_info.snapc_init_barrier;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 if (ORTE_SUCCESS != (ret = orte_grpcomm.barrier(&amp;coll))) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             coll.active = true;
</span><br>
<span class="quotelev1">&gt;             ORTE_WAIT_FOR_COMPLETION(coll.active);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can this be expressed with the new code?
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16688.php">http://www.open-mpi.org/community/lists/devel/2014/12/16688.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16689/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16690.php">Dave Goodell (dgoodell): "[OMPI devel] Git security vulnerability, please upgrade Windows &amp; OS X Git clients"</a>
<li><strong>Previous message:</strong> <a href="16688.php">Adrian Reber: "[OMPI devel] FT code (again)"</a>
<li><strong>In reply to:</strong> <a href="16688.php">Adrian Reber: "[OMPI devel] FT code (again)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16695.php">Joshua Ladd: "Re: [OMPI devel] FT code (again)"</a>
<li><strong>Reply:</strong> <a href="16695.php">Joshua Ladd: "Re: [OMPI devel] FT code (again)"</a>
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
