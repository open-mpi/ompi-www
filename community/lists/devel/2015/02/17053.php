<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 00:03:37 2015" -->
<!-- isoreceived="20150226050337" -->
<!-- sent="Thu, 26 Feb 2015 14:03:51 +0900" -->
<!-- isosent="20150226050351" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f" -->
<!-- id="54EEA937.7040808_at_iferc.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2A6A1029-C087-4D41-81EA-82F21D5220AC_at_icl.utk.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 00:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17054.php">Howard Pritchard: "Re: [OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>Previous message:</strong> <a href="17052.php">Ralph Castain: "[OMPI devel] Free list warning"</a>
<li><strong>In reply to:</strong> <a href="17020.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>this is now fixed by commit 05140df1e66ad3a5d6449d339244580f4b36d872
<br>
/* i wanted to silence a false positive and introduce a bug, shame on me
<br>
... */
<br>
<p>the original code basically did
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_ERR_IN_STATUS == err ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* At least we know the error was detected during the wait_all */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int err_index = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_SUCCESS == statuses[0].MPI_ERROR ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err_index = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = statuses[err_index].MPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return err;
<br>
}
<br>
<p>is this really correct ?
<br>
i mean should it rather be
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_ERR_IN_STATUS == err ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* At least we know the error was detected during the wait_all */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int err_index = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_SUCCESS == statuses[0].MPI_ERROR ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err_index = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = statuses[err_index].MPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return err;
<br>
}
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2015/02/23 23:23, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Please revert this fix. I don&#226;&#128;&#153;t know what you&#226;&#128;&#153;re trying to fix (Coverity CID 1269934), but you altered the meaning of the code (regarding the MPI_ERR_IN_STATUS return code) and remove meaningful comments. Btw the original fix was useless as a call to recv could not return MPI_ERR_IN_STATUS (as this code is reserved for functions handling multiple requests).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 22, 2015, at 23:45 , gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt;&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt;&gt;       via  004160f8da97be1f29aefeaaa51cf52298e0d3a4 (commit)
</span><br>
<span class="quotelev2">&gt;&gt;      from  4c91bdfb0c106f66590aa20b245946dea4af6d61 (commit)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/004160f8da97be1f29aefeaaa51cf52298e0d3a4">https://github.com/open-mpi/ompi/commit/004160f8da97be1f29aefeaaa51cf52298e0d3a4</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; commit 004160f8da97be1f29aefeaaa51cf52298e0d3a4
</span><br>
<span class="quotelev2">&gt;&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Mon Feb 23 13:45:23 2015 +0900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    coll/tuned: silence CID 1269934
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/mca/coll/tuned/coll_tuned_barrier.c b/ompi/mca/coll/tuned/coll_tuned_barrier.c
</span><br>
<span class="quotelev2">&gt;&gt; index 8002a74..455e7e1 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/coll/tuned/coll_tuned_barrier.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/coll/tuned/coll_tuned_barrier.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -69,8 +69,6 @@ ompi_coll_tuned_sendrecv_zero(int dest, int stag,
</span><br>
<span class="quotelev2">&gt;&gt;     /* post new irecv */
</span><br>
<span class="quotelev2">&gt;&gt;     err = MCA_PML_CALL(irecv( NULL, 0, MPI_BYTE, source, rtag,
</span><br>
<span class="quotelev2">&gt;&gt;                               comm, &amp;reqs[0]));
</span><br>
<span class="quotelev2">&gt;&gt; -    /* try to silence CID 1269934 */
</span><br>
<span class="quotelev2">&gt;&gt; -    assert( MPI_ERR_IN_STATUS != err );
</span><br>
<span class="quotelev2">&gt;&gt;     if (err != MPI_SUCCESS) { line = __LINE__; goto error_handler; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /* send data to children */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -79,15 +77,6 @@ ompi_coll_tuned_sendrecv_zero(int dest, int stag,
</span><br>
<span class="quotelev2">&gt;&gt;     if (err != MPI_SUCCESS) { line = __LINE__; goto error_handler; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     err = ompi_request_wait_all( 2, reqs, statuses );
</span><br>
<span class="quotelev2">&gt;&gt; -    if (err != MPI_SUCCESS) { line = __LINE__; goto error_handler; }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    return (MPI_SUCCESS);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; - error_handler:
</span><br>
<span class="quotelev2">&gt;&gt; -    /* As we use wait_all we will get MPI_ERR_IN_STATUS which is not an error
</span><br>
<span class="quotelev2">&gt;&gt; -     * code that we can propagate up the stack. Instead, look for the real
</span><br>
<span class="quotelev2">&gt;&gt; -     * error code from the MPI_ERROR in the status.
</span><br>
<span class="quotelev2">&gt;&gt; -     */
</span><br>
<span class="quotelev2">&gt;&gt;     if( MPI_ERR_IN_STATUS == err ) {
</span><br>
<span class="quotelev2">&gt;&gt;         /* At least we know the error was detected during the wait_all */
</span><br>
<span class="quotelev2">&gt;&gt;         int err_index = 1;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -98,13 +87,18 @@ ompi_coll_tuned_sendrecv_zero(int dest, int stag,
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL_OUTPUT ((ompi_coll_tuned_stream, &quot;%s:%d: Error %d occurred in the %s&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                               &quot; stage of ompi_coll_tuned_sendrecv_zero\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                       __FILE__, line, err, (0 == err_index ? &quot;receive&quot; : &quot;send&quot;)));
</span><br>
<span class="quotelev2">&gt;&gt; -    } else {
</span><br>
<span class="quotelev2">&gt;&gt; -        /* Error discovered during the posting of the irecv or isend,
</span><br>
<span class="quotelev2">&gt;&gt; -         * and no status is available.
</span><br>
<span class="quotelev2">&gt;&gt; -         */
</span><br>
<span class="quotelev2">&gt;&gt; -        OPAL_OUTPUT ((ompi_coll_tuned_stream, &quot;%s:%d: Error %d occurred\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                      __FILE__, line, err));
</span><br>
<span class="quotelev2">&gt;&gt; +        return MPI_ERR_IN_STATUS;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; +    if (err != MPI_SUCCESS) { line = __LINE__; goto error_handler; }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return (MPI_SUCCESS);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + error_handler:
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Error discovered during the posting of the irecv or isend,
</span><br>
<span class="quotelev2">&gt;&gt; +     * and no status is available.
</span><br>
<span class="quotelev2">&gt;&gt; +     */
</span><br>
<span class="quotelev2">&gt;&gt; +    OPAL_OUTPUT ((ompi_coll_tuned_stream, &quot;%s:%d: Error %d occurred\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                  __FILE__, line, err));
</span><br>
<span class="quotelev2">&gt;&gt;     return err;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/coll/tuned/coll_tuned_barrier.c | 28 +++++++++++-----------------
</span><br>
<span class="quotelev2">&gt;&gt; 1 file changed, 11 insertions(+), 17 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17020.php">http://www.open-mpi.org/community/lists/devel/2015/02/17020.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17054.php">Howard Pritchard: "Re: [OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>Previous message:</strong> <a href="17052.php">Ralph Castain: "[OMPI devel] Free list warning"</a>
<li><strong>In reply to:</strong> <a href="17020.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f"</a>
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
