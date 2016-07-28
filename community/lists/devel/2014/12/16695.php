<?
$subject_val = "Re: [OMPI devel] FT code (again)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 12:09:58 2014" -->
<!-- isoreceived="20141219170958" -->
<!-- sent="Fri, 19 Dec 2014 12:09:56 -0500" -->
<!-- isosent="20141219170956" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FT code (again)" -->
<!-- id="CAG4F6z8MOSiyDEBaneSvBT-xV8p9gGW9V+WczZpGthm=vV6FOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkUn4C02VZYx50iiiENLCS-47i_K=hkJVtRUa1+Ezs0jvg_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 12:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16696.php">Howard Pritchard: "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Previous message:</strong> <a href="16694.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16689.php">George Bosilca: "Re: [OMPI devel] FT code (again)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George is correct; opal_pmix.fence replaces the grpcomm barrier.
<br>
<p>Josh
<br>
<p>On Fri, Dec 19, 2014 at 10:47 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A opal_pmix.fence seems like a perfect replacement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 19, 2014 at 10:26 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again I am trying to get the FT code working. This time I am unsure how
</span><br>
<span class="quotelev2">&gt;&gt; to resolve the code changes from this commit:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; commit aec5cd08bd8c33677276612b899b48618d271efa
</span><br>
<span class="quotelev2">&gt;&gt; Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Thu Aug 21 18:56:47 2014 +0000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Per the PMIx RFC:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This includes changes like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -172,17 +164,7 @@ static int rte_init(void)
</span><br>
<span class="quotelev2">&gt;&gt;       * in the job won't be executing this step, so we would hang
</span><br>
<span class="quotelev2">&gt;&gt;       */
</span><br>
<span class="quotelev2">&gt;&gt;      if (ORTE_PROC_IS_NON_MPI &amp;&amp; !orte_do_not_barrier) {
</span><br>
<span class="quotelev2">&gt;&gt; -        orte_grpcomm_collective_t coll;
</span><br>
<span class="quotelev2">&gt;&gt; -        OBJ_CONSTRUCT(&amp;coll, orte_grpcomm_collective_t);
</span><br>
<span class="quotelev2">&gt;&gt; -        coll.id = orte_process_info.peer_modex;
</span><br>
<span class="quotelev2">&gt;&gt; -        coll.active = true;
</span><br>
<span class="quotelev2">&gt;&gt; -        if (ORTE_SUCCESS != (ret = orte_grpcomm.modex(&amp;coll))) {
</span><br>
<span class="quotelev2">&gt;&gt; -            ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt; -            error = &quot;orte modex&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -            goto error;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -        ORTE_WAIT_FOR_COMPLETION(coll.active);
</span><br>
<span class="quotelev2">&gt;&gt; -        OBJ_DESTRUCT(&amp;coll);
</span><br>
<span class="quotelev2">&gt;&gt; +        opal_pmix.fence(NULL, 0);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the FT code in orte/mca/ess/env/ess_env_module.c there is similar code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     OBJ_CONSTRUCT(&amp;coll, orte_grpcomm_collective_t);
</span><br>
<span class="quotelev2">&gt;&gt;     coll.id = orte_process_info.snapc_init_barrier;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 if (ORTE_SUCCESS != (ret = orte_grpcomm.barrier(&amp;coll))) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             coll.active = true;
</span><br>
<span class="quotelev2">&gt;&gt;             ORTE_WAIT_FOR_COMPLETION(coll.active);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can this be expressed with the new code?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Adrian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16688.php">http://www.open-mpi.org/community/lists/devel/2014/12/16688.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16689.php">http://www.open-mpi.org/community/lists/devel/2014/12/16689.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16695/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16696.php">Howard Pritchard: "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Previous message:</strong> <a href="16694.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16689.php">George Bosilca: "Re: [OMPI devel] FT code (again)"</a>
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
