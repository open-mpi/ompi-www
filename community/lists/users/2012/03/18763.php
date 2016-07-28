<?
$subject_val = "Re: [OMPI users] AlltoallV (with some zero send count values)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 10:15:36 2012" -->
<!-- isoreceived="20120314141536" -->
<!-- sent="Wed, 14 Mar 2012 10:15:31 -0400" -->
<!-- isosent="20120314141531" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlltoallV (with some zero send count values)" -->
<!-- id="974A3ADB-7E4F-413F-BD73-C906089B5811_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8A0CB688-690A-493F-A8E6-EBB5518D3E39_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] AlltoallV (with some zero send count values)<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 10:15:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18764.php">Patrik Jonsson: "[OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Previous message:</strong> <a href="18762.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18728.php">Jeffrey Squyres: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone tell me whether it is legal to pass zero values for some of the send count elements in an MPI_AlltoallV() call? I want to perform an all-to-all operation but for performance reasons do not want to send data to various ranks who don't need to receive any useful values. If it is legal, can I assume the implementation is smart enough to not send messages when the send count is 0?
</span><br>
<p>Well, if the message size is small I would suggest you to use alltoall instead of alltoallv. If the message size is large, alltoallV probably will be little bit faster.
<br>
<p>FYI the implementation sends a message for count 0.
<br>
<p>Regards,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18764.php">Patrik Jonsson: "[OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Previous message:</strong> <a href="18762.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18728.php">Jeffrey Squyres: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
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
