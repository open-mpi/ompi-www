<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 09:23:12 2015" -->
<!-- isoreceived="20150223142312" -->
<!-- sent="Mon, 23 Feb 2015 09:23:08 -0500" -->
<!-- isosent="20150223142308" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f" -->
<!-- id="2A6A1029-C087-4D41-81EA-82F21D5220AC_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150223044555.9BDC0260AB1_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-23 09:23:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17021.php">Jeff Squyres (jsquyres): "[OMPI devel] multi-rail performance"</a>
<li><strong>Previous message:</strong> <a href="17019.php">Jeff Squyres (jsquyres): "[OMPI devel] Topic for Tuesday"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17053.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f"</a>
<li><strong>Reply:</strong> <a href="17053.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please revert this fix. I don&#226;&#128;&#153;t know what you&#226;&#128;&#153;re trying to fix (Coverity CID 1269934), but you altered the meaning of the code (regarding the MPI_ERR_IN_STATUS return code) and remove meaningful comments. Btw the original fix was useless as a call to recv could not return MPI_ERR_IN_STATUS (as this code is reserved for functions handling multiple requests).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; On Feb 22, 2015, at 23:45 , gitdub_at_[hidden] wrote:
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
<span class="quotelev1">&gt;       via  004160f8da97be1f29aefeaaa51cf52298e0d3a4 (commit)
</span><br>
<span class="quotelev1">&gt;      from  4c91bdfb0c106f66590aa20b245946dea4af6d61 (commit)
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
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/004160f8da97be1f29aefeaaa51cf52298e0d3a4">https://github.com/open-mpi/ompi/commit/004160f8da97be1f29aefeaaa51cf52298e0d3a4</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 004160f8da97be1f29aefeaaa51cf52298e0d3a4
</span><br>
<span class="quotelev1">&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Feb 23 13:45:23 2015 +0900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    coll/tuned: silence CID 1269934
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/coll/tuned/coll_tuned_barrier.c b/ompi/mca/coll/tuned/coll_tuned_barrier.c
</span><br>
<span class="quotelev1">&gt; index 8002a74..455e7e1 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/coll/tuned/coll_tuned_barrier.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/coll/tuned/coll_tuned_barrier.c
</span><br>
<span class="quotelev1">&gt; @@ -69,8 +69,6 @@ ompi_coll_tuned_sendrecv_zero(int dest, int stag,
</span><br>
<span class="quotelev1">&gt;     /* post new irecv */
</span><br>
<span class="quotelev1">&gt;     err = MCA_PML_CALL(irecv( NULL, 0, MPI_BYTE, source, rtag,
</span><br>
<span class="quotelev1">&gt;                               comm, &amp;reqs[0]));
</span><br>
<span class="quotelev1">&gt; -    /* try to silence CID 1269934 */
</span><br>
<span class="quotelev1">&gt; -    assert( MPI_ERR_IN_STATUS != err );
</span><br>
<span class="quotelev1">&gt;     if (err != MPI_SUCCESS) { line = __LINE__; goto error_handler; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* send data to children */
</span><br>
<span class="quotelev1">&gt; @@ -79,15 +77,6 @@ ompi_coll_tuned_sendrecv_zero(int dest, int stag,
</span><br>
<span class="quotelev1">&gt;     if (err != MPI_SUCCESS) { line = __LINE__; goto error_handler; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     err = ompi_request_wait_all( 2, reqs, statuses );
</span><br>
<span class="quotelev1">&gt; -    if (err != MPI_SUCCESS) { line = __LINE__; goto error_handler; }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return (MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; - error_handler:
</span><br>
<span class="quotelev1">&gt; -    /* As we use wait_all we will get MPI_ERR_IN_STATUS which is not an error
</span><br>
<span class="quotelev1">&gt; -     * code that we can propagate up the stack. Instead, look for the real
</span><br>
<span class="quotelev1">&gt; -     * error code from the MPI_ERROR in the status.
</span><br>
<span class="quotelev1">&gt; -     */
</span><br>
<span class="quotelev1">&gt;     if( MPI_ERR_IN_STATUS == err ) {
</span><br>
<span class="quotelev1">&gt;         /* At least we know the error was detected during the wait_all */
</span><br>
<span class="quotelev1">&gt;         int err_index = 1;
</span><br>
<span class="quotelev1">&gt; @@ -98,13 +87,18 @@ ompi_coll_tuned_sendrecv_zero(int dest, int stag,
</span><br>
<span class="quotelev1">&gt;         OPAL_OUTPUT ((ompi_coll_tuned_stream, &quot;%s:%d: Error %d occurred in the %s&quot;
</span><br>
<span class="quotelev1">&gt;                                               &quot; stage of ompi_coll_tuned_sendrecv_zero\n&quot;,
</span><br>
<span class="quotelev1">&gt;                       __FILE__, line, err, (0 == err_index ? &quot;receive&quot; : &quot;send&quot;)));
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        /* Error discovered during the posting of the irecv or isend,
</span><br>
<span class="quotelev1">&gt; -         * and no status is available.
</span><br>
<span class="quotelev1">&gt; -         */
</span><br>
<span class="quotelev1">&gt; -        OPAL_OUTPUT ((ompi_coll_tuned_stream, &quot;%s:%d: Error %d occurred\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                      __FILE__, line, err));
</span><br>
<span class="quotelev1">&gt; +        return MPI_ERR_IN_STATUS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    if (err != MPI_SUCCESS) { line = __LINE__; goto error_handler; }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return (MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + error_handler:
</span><br>
<span class="quotelev1">&gt; +    /* Error discovered during the posting of the irecv or isend,
</span><br>
<span class="quotelev1">&gt; +     * and no status is available.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    OPAL_OUTPUT ((ompi_coll_tuned_stream, &quot;%s:%d: Error %d occurred\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                  __FILE__, line, err));
</span><br>
<span class="quotelev1">&gt;     return err;
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
<span class="quotelev1">&gt; ompi/mca/coll/tuned/coll_tuned_barrier.c | 28 +++++++++++-----------------
</span><br>
<span class="quotelev1">&gt; 1 file changed, 11 insertions(+), 17 deletions(-)
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
<li><strong>Next message:</strong> <a href="17021.php">Jeff Squyres (jsquyres): "[OMPI devel] multi-rail performance"</a>
<li><strong>Previous message:</strong> <a href="17019.php">Jeff Squyres (jsquyres): "[OMPI devel] Topic for Tuesday"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17053.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f"</a>
<li><strong>Reply:</strong> <a href="17053.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f"</a>
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
