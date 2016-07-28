<?
$subject_val = "Re: [OMPI users] Do MPI calls ever sleep?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 14:22:42 2010" -->
<!-- isoreceived="20100721182242" -->
<!-- sent="Wed, 21 Jul 2010 20:24:49 +0200" -->
<!-- isosent="20100721182449" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Do MPI calls ever sleep?" -->
<!-- id="877hkolmku.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1279735853.4130.21.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Do MPI calls ever sleep?<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 14:24:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13731.php">Douglas Guptill: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13729.php">David Ronis: "[OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13729.php">David Ronis: "[OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13732.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13732.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 21 Jul 2010 14:10:53 -0400, David Ronis &lt;David.Ronis_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Is there another MPI routine that polls for data and then gives up its
</span><br>
<span class="quotelev1">&gt; time-slice?
</span><br>
<p>You're probably looking for the runtime option -mca yield_when_idle 1.
<br>
This will slightly increase latency, but allows other threads to run
<br>
without competing with the spinning MPI.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13731.php">Douglas Guptill: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13729.php">David Ronis: "[OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13729.php">David Ronis: "[OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13732.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13732.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
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
