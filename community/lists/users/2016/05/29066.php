<?
$subject_val = "Re: [OMPI users] users Digest, Vol 3489, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 14:49:20 2016" -->
<!-- isoreceived="20160502184920" -->
<!-- sent="Mon, 2 May 2016 18:49:15 +0000" -->
<!-- isosent="20160502184915" -->
<!-- name="Palmer, Bruce J" -->
<!-- email="Bruce.Palmer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 3489, Issue 1" -->
<!-- id="61BD36C35043184BB5E9C6E07E2C74AB1A631956_at_EX10MBOX02.pnnl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.23.1462204802.32307.users_at_open-mpi.org" -->
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
<strong>From:</strong> Palmer, Bruce J (<em>Bruce.Palmer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 14:49:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29067.php">Nathan Hjelm: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="29065.php">Gilles Gouaillardet: "Re: [OMPI users] OpenSHMEM + STM Linking Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29067.php">Nathan Hjelm: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<li><strong>Reply:</strong> <a href="29067.php">Nathan Hjelm: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I downloaded and built openmpi-2.0.0rc2 and used that for the test. I get a crash on more than 1 processor for the lock/unlock protocol with the error message
<br>
<p>[node005:29916] *** An error occurred in MPI_Win_lock
<br>
[node005:29916] *** reported by process [3736862721,6]
<br>
[node005:29916] *** on win rdma window 3
<br>
[node005:29916] *** MPI_ERR_RMA_SYNC: error executing rma sync
<br>
[node005:29916] *** MPI_ERRORS_ARE_FATAL (processes in this win will now abort,
<br>
[node005:29916] ***    and potentially your MPI job)
<br>
<p>and the request-based protocol hangs on the MPI_Rget call. The flush_local protocol seems to work though. Unlike 1.8.3, the problems seem to occur no matter what the value of NSIZE is. Should I try actually building 1.10 after applying the patch to it?
<br>
<p>Bruce
<br>
<p>Message: 1
<br>
Date: Mon, 2 May 2016 13:42:21 +0900
<br>
From: Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI Datatypes and RMA
<br>
Message-ID: &lt;01c20fdf-c41b-96a8-6732-661745ddf272_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;
<br>
<p>Bruce,
<br>
<p><p>this issue was previously fixed on master and v2.x, but for some reasons, the fix was not backported to v1.10
<br>
<p>i made a PR at <a href="https://github.com/open-mpi/ompi-release/pull/1120/files">https://github.com/open-mpi/ompi-release/pull/1120/files</a>
<br>
<p>in the mean time, feel free to manually apply the patch at <a href="https://patch-diff.githubusercontent.com/raw/open-mpi/ompi-release/pull/1120.patch">https://patch-diff.githubusercontent.com/raw/open-mpi/ompi-release/pull/1120.patch</a>
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29067.php">Nathan Hjelm: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="29065.php">Gilles Gouaillardet: "Re: [OMPI users] OpenSHMEM + STM Linking Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29067.php">Nathan Hjelm: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<li><strong>Reply:</strong> <a href="29067.php">Nathan Hjelm: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
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
