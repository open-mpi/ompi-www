<?
$subject_val = "[OMPI users] AlltoallV (with some zero send count values)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 16:43:17 2012" -->
<!-- isoreceived="20120306214317" -->
<!-- sent="Tue, 6 Mar 2012 16:43:11 -0500" -->
<!-- isosent="20120306214311" -->
<!-- name="Timothy Stitt" -->
<!-- email="Timothy.Stitt.9_at_[hidden]" -->
<!-- subject="[OMPI users] AlltoallV (with some zero send count values)" -->
<!-- id="8A0CB688-690A-493F-A8E6-EBB5518D3E39_at_nd.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="03846B8B-0132-4D2E-9F3B-4289A236E7E0_at_nd.edu" -->
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
<strong>Subject:</strong> [OMPI users] AlltoallV (with some zero send count values)<br>
<strong>From:</strong> Timothy Stitt (<em>Timothy.Stitt.9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 16:43:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18706.php">Tim Prince: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Previous message:</strong> <a href="18704.php">Eugene Loh: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="18699.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18708.php">Jed Brown: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Reply:</strong> <a href="18708.php">Jed Brown: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Reply:</strong> <a href="18727.php">Jeffrey Squyres: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Reply:</strong> <a href="18763.php">Shamis, Pavel: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Can anyone tell me whether it is legal to pass zero values for some of the send count elements in an MPI_AlltoallV() call? I want to perform an all-to-all operation but for performance reasons do not want to send data to various ranks who don't need to receive any useful values. If it is legal, can I assume the implementation is smart enough to not send messages when the send count is 0?
<br>
<p>FYI: my tests show that AlltoallV operations with various send count values set to 0...hangs.
<br>
<p>Thanks,
<br>
<p>Tim.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18706.php">Tim Prince: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Previous message:</strong> <a href="18704.php">Eugene Loh: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="18699.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18708.php">Jed Brown: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Reply:</strong> <a href="18708.php">Jed Brown: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Reply:</strong> <a href="18727.php">Jeffrey Squyres: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Reply:</strong> <a href="18763.php">Shamis, Pavel: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
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
