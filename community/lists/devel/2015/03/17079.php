<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 10:05:05 2015" -->
<!-- isoreceived="20150302150505" -->
<!-- sent="Mon, 2 Mar 2015 07:05:01 -0800" -->
<!-- isosent="20150302150501" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80" -->
<!-- id="822EF73A-2CAC-4DD2-9ADD-724DA22B4F09_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150302134338.0EC622607EB_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-02 10:05:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17080.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-1195-gfbb7c80"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17078.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17080.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-1195-gfbb7c80"</a>
<li><strong>Reply:</strong> <a href="17080.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-1195-gfbb7c80"</a>
<li><strong>Reply:</strong> <a href="17081.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It&#226;&#128;&#153;s your code, so you are welcome to do this if you want. I&#226;&#128;&#153;ll just point out that his is a really big hit in total execution time at scale as it will be done in addition to the barrier already performed in MPI_Finalize
<br>
<p>So you are going to do _two_ barriers during shutdown.
<br>
<p><p><span class="quotelev1">&gt; On Mar 2, 2015, at 5:43 AM, gitdub_at_[hidden] wrote:
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
<span class="quotelev1">&gt;       via  fbb7c80312cbcd823346e89a56f5d83e8620c57c (commit)
</span><br>
<span class="quotelev1">&gt;       via  168c83ed9592120fd2199e8280b517ab0060e136 (commit)
</span><br>
<span class="quotelev1">&gt;      from  42f5a36ee3f1e400aa251804725b86192c9df9fa (commit)
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
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/fbb7c80312cbcd823346e89a56f5d83e8620c57c">https://github.com/open-mpi/ompi/commit/fbb7c80312cbcd823346e89a56f5d83e8620c57c</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit fbb7c80312cbcd823346e89a56f5d83e8620c57c
</span><br>
<span class="quotelev1">&gt; Merge: 42f5a36 168c83e
</span><br>
<span class="quotelev1">&gt; Author: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Mar 2 15:43:32 2015 +0200
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Merge pull request #439 from alex-mikheev/topic/mxm_finalize_fix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OMPI/MXM: add out of band barrier at the end of del_procs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/168c83ed9592120fd2199e8280b517ab0060e136">https://github.com/open-mpi/ompi/commit/168c83ed9592120fd2199e8280b517ab0060e136</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 168c83ed9592120fd2199e8280b517ab0060e136
</span><br>
<span class="quotelev1">&gt; Author: Alex Mikheev &lt;alexm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Mar 2 12:56:02 2015 +0200
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OMPI/MXM: add out of band barrier at the end of del_procs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mxm shutdown requires out of band barrier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/mtl/mxm/mtl_mxm.c b/ompi/mca/mtl/mxm/mtl_mxm.c
</span><br>
<span class="quotelev1">&gt; index 1a4e21a..ed4089a 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/mtl/mxm/mtl_mxm.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/mtl/mxm/mtl_mxm.c
</span><br>
<span class="quotelev1">&gt; @@ -617,6 +617,7 @@ int ompi_mtl_mxm_del_procs(struct mca_mtl_base_module_t *mtl, size_t nprocs,
</span><br>
<span class="quotelev1">&gt;             OBJ_RELEASE(endpoint);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    opal_pmix.fence(NULL, 0);
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/pml/yalla/pml_yalla.c b/ompi/mca/pml/yalla/pml_yalla.c
</span><br>
<span class="quotelev1">&gt; index 2cfa6ca..d53cb7c 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/pml/yalla/pml_yalla.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/pml/yalla/pml_yalla.c
</span><br>
<span class="quotelev1">&gt; @@ -240,6 +240,7 @@ int mca_pml_yalla_del_procs(struct ompi_proc_t **procs, size_t nprocs)
</span><br>
<span class="quotelev1">&gt;         PML_YALLA_VERBOSE(2, &quot;disconnected from rank %ld&quot;, procs[i]-&gt;super.proc_name);
</span><br>
<span class="quotelev1">&gt;         procs[i]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_PML] = NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    opal_pmix.fence(NULL, 0);
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
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
<span class="quotelev1">&gt; ompi/mca/mtl/mxm/mtl_mxm.c     | 1 +
</span><br>
<span class="quotelev1">&gt; ompi/mca/pml/yalla/pml_yalla.c | 1 +
</span><br>
<span class="quotelev1">&gt; 2 files changed, 2 insertions(+)
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
<li><strong>Next message:</strong> <a href="17080.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-1195-gfbb7c80"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17078.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17080.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-1195-gfbb7c80"</a>
<li><strong>Reply:</strong> <a href="17080.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-1195-gfbb7c80"</a>
<li><strong>Reply:</strong> <a href="17081.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80"</a>
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
