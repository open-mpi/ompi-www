<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-730-g06d3b57";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 13:58:32 2015" -->
<!-- isoreceived="20150119185832" -->
<!-- sent="Mon, 19 Jan 2015 10:58:27 -0800" -->
<!-- isosent="20150119185827" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-730-g06d3b57" -->
<!-- id="54CA4351-B555-4C51-BA92-3CDF62A0F3C2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150119184828.496E1260A1F_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-730-g06d3b57<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-19 13:58:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16806.php">Adrian Reber: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16804.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you explain the comment about opal_setenv getting &#226;&#128;&#156;picky&#226;&#128;&#157;? You can pass a flag that tells opal_setenv whether or not to overwrite a pre-existing value, and it tells you if the value was found (which is exactly what you asked for) - why isn&#226;&#128;&#153;t it adequate to just pass a &#226;&#128;&#156;false&#226;&#128;&#157; for overwrite and check the return for OPAL_EXISTS?
<br>
<p><p><span class="quotelev1">&gt; On Jan 19, 2015, at 10:48 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  06d3b57c07a3e028d660d747848e320369185d06 (commit)
</span><br>
<span class="quotelev1">&gt;       via  fd807aee69675a0b0602eb6971bacf61db5b10a5 (commit)
</span><br>
<span class="quotelev1">&gt;      from  da83b084f506ea3c34ebe9da3c6dd6f44e2537a8 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/06d3b57c07a3e028d660d747848e320369185d06">https://github.com/open-mpi/ompi/commit/06d3b57c07a3e028d660d747848e320369185d06</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 06d3b57c07a3e028d660d747848e320369185d06
</span><br>
<span class="quotelev1">&gt; Merge: da83b08 fd807ae
</span><br>
<span class="quotelev1">&gt; Author: Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Jan 19 11:48:24 2015 -0700
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Merge pull request #351 from hppritcha/topic/alps_odls_spawn_bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    odls/alps: check if PMI gni rdma creds already set
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/fd807aee69675a0b0602eb6971bacf61db5b10a5">https://github.com/open-mpi/ompi/commit/fd807aee69675a0b0602eb6971bacf61db5b10a5</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit fd807aee69675a0b0602eb6971bacf61db5b10a5
</span><br>
<span class="quotelev1">&gt; Author: Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Jan 19 10:12:38 2015 -0800
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    odls/alps: check if PMI gni rdma creds already set
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Need to check if the alps odls component has already
</span><br>
<span class="quotelev1">&gt;    read the rdma creds from alps.  Its okay to ask apshepherd
</span><br>
<span class="quotelev1">&gt;    multiple times for rdma creds, but opal_setenv gets
</span><br>
<span class="quotelev1">&gt;    a bit picky about this.  Rather than check for the OPAL_EXISTS
</span><br>
<span class="quotelev1">&gt;    return value from opal_setenv, for now just check with
</span><br>
<span class="quotelev1">&gt;    a static variable whether or not orte_odls_alps_get_rdma_creds
</span><br>
<span class="quotelev1">&gt;    has already been successfully called before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Would be nice to have an opal_getenv function for checking
</span><br>
<span class="quotelev1">&gt;    if an env. variable had already been set by opal_putenv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/odls/alps/odls_alps_utils.c b/orte/mca/odls/alps/odls_alps_utils.c
</span><br>
<span class="quotelev1">&gt; index 8236038..2ffee05 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/odls/alps/odls_alps_utils.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/odls/alps/odls_alps_utils.c
</span><br>
<span class="quotelev1">&gt; @@ -53,6 +53,17 @@ int orte_odls_alps_get_rdma_creds(void)
</span><br>
<span class="quotelev1">&gt;     alpsAppGni_t *rdmacred_buf;
</span><br>
<span class="quotelev1">&gt;     char *ptr;
</span><br>
<span class="quotelev1">&gt;     char env_buffer[1024];
</span><br>
<span class="quotelev1">&gt; +    static int already_got_creds = 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /*
</span><br>
<span class="quotelev1">&gt; +     * If we already put the GNI RDMA credentials into orte_launch_environ,
</span><br>
<span class="quotelev1">&gt; +     * no need to do anything.
</span><br>
<span class="quotelev1">&gt; +     * TODO: kind of ugly, need to implement an opal_getenv
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (1 == already_got_creds) {
</span><br>
<span class="quotelev1">&gt; +        return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;      * get the Cray HSN RDMA credentials here and stuff them in to the
</span><br>
<span class="quotelev1">&gt; @@ -234,6 +245,7 @@ int orte_odls_alps_get_rdma_creds(void)
</span><br>
<span class="quotelev1">&gt;     } 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    fn_exit:
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS == ret) already_got_creds = 1;
</span><br>
<span class="quotelev1">&gt;     return ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt; orte/mca/odls/alps/odls_alps_utils.c | 12 ++++++++++++
</span><br>
<span class="quotelev1">&gt; 1 file changed, 12 insertions(+)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16806.php">Adrian Reber: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16804.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
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
