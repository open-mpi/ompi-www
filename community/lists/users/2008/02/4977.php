<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 02:28:35 2008" -->
<!-- isoreceived="20080205072835" -->
<!-- sent="Tue, 5 Feb 2008 09:28:27 +0200" -->
<!-- isosent="20080205072827" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="20080205072827.GA10354_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A14F91CBBBA3014385A806944C9BEF1BAE7C49_at_maildrd1.nyc.deshaw.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 02:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4978.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="4976.php">George Bosilca: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>In reply to:</strong> <a href="4970.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4979.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4979.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Feb 04, 2008 at 04:23:13PM -0500, Sacerdoti, Federico wrote:
<br>
<span class="quotelev1">&gt; Bug3 is a test-case derived from a real, scalable application (desmond
</span><br>
<span class="quotelev1">&gt; for molecular dynamics) that several experienced MPI developers have
</span><br>
<span class="quotelev1">&gt; worked on. Note the MPI_Send calls of processes N&gt;0 are *blocking*; the
</span><br>
<span class="quotelev1">&gt; openmpi silently sends them in the background and overwhelms process 0
</span><br>
<span class="quotelev1">&gt; due to lack of flow control.
</span><br>
MPI_Send is *blocking* in MPI sense of the word i.e when MPI_Send returns
<br>
send buffer can be reused. MPI spec section 3.4.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4978.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="4976.php">George Bosilca: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>In reply to:</strong> <a href="4970.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4979.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4979.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
