<?
$subject_val = "Re: [OMPI users] users Digest, Vol 3489, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 17:26:27 2016" -->
<!-- isoreceived="20160502212627" -->
<!-- sent="Mon, 2 May 2016 15:26:25 -0600" -->
<!-- isosent="20160502212625" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 3489, Issue 1" -->
<!-- id="20160502212625.GE22814_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="61BD36C35043184BB5E9C6E07E2C74AB1A631956_at_EX10MBOX02.pnnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 3489, Issue 1<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 17:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29068.php">Maciek Lewiński: "[OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>Previous message:</strong> <a href="29066.php">Palmer, Bruce J: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="29066.php">Palmer, Bruce J: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Its not really a good idea to mix active and passive synchronization (we
<br>
may actually explicitly forbid it in the future). You can remove the
<br>
calls to MPI_Win_fence () and still have correct synchronization. That
<br>
said, you did find a bug in my bad synchronization detection because
<br>
this is legal:
<br>
<p>MPI_Win_fence (...);
<br>
MPI_Win_lock (...);
<br>
<p>but this is not
<br>
<p>MPI_Win_fence (...);
<br>
MPI_Put (...); /* MPI_Get, MPI_Accumulate, etc */
<br>
MPI_Win_lock (...);
<br>
<p>I will fix the bad synchronization detection in osc/rdma.
<br>
<p>-Nathan
<br>
<p>On Mon, May 02, 2016 at 06:49:15PM +0000, Palmer, Bruce J wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I downloaded and built openmpi-2.0.0rc2 and used that for the test. I get a crash on more than 1 processor for the lock/unlock protocol with the error message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node005:29916] *** An error occurred in MPI_Win_lock
</span><br>
<span class="quotelev1">&gt; [node005:29916] *** reported by process [3736862721,6]
</span><br>
<span class="quotelev1">&gt; [node005:29916] *** on win rdma window 3
</span><br>
<span class="quotelev1">&gt; [node005:29916] *** MPI_ERR_RMA_SYNC: error executing rma sync
</span><br>
<span class="quotelev1">&gt; [node005:29916] *** MPI_ERRORS_ARE_FATAL (processes in this win will now abort,
</span><br>
<span class="quotelev1">&gt; [node005:29916] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the request-based protocol hangs on the MPI_Rget call. The flush_local protocol seems to work though. Unlike 1.8.3, the problems seem to occur no matter what the value of NSIZE is. Should I try actually building 1.10 after applying the patch to it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bruce
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 2 May 2016 13:42:21 +0900
</span><br>
<span class="quotelev1">&gt; From: Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI Datatypes and RMA
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;01c20fdf-c41b-96a8-6732-661745ddf272_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bruce,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this issue was previously fixed on master and v2.x, but for some reasons, the fix was not backported to v1.10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i made a PR at <a href="https://github.com/open-mpi/ompi-release/pull/1120/files">https://github.com/open-mpi/ompi-release/pull/1120/files</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the mean time, feel free to manually apply the patch at <a href="https://patch-diff.githubusercontent.com/raw/open-mpi/ompi-release/pull/1120.patch">https://patch-diff.githubusercontent.com/raw/open-mpi/ompi-release/pull/1120.patch</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29066.php">http://www.open-mpi.org/community/lists/users/2016/05/29066.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29067/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29068.php">Maciek Lewiński: "[OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>Previous message:</strong> <a href="29066.php">Palmer, Bruce J: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="29066.php">Palmer, Bruce J: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
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
