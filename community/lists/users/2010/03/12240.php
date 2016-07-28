<?
$subject_val = "Re: [OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 09:34:41 2010" -->
<!-- isoreceived="20100304143441" -->
<!-- sent="Thu, 4 Mar 2010 15:34:35 +0100" -->
<!-- isosent="20100304143435" -->
<!-- name="Fran&#231;ois Trahay" -->
<!-- email="trahay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="201003041534.35477.trahay_at_labri.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B8EFFA7.8030208_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init() and MPI_Init_thread()<br>
<strong>From:</strong> Fran&#231;ois Trahay (<em>trahay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 09:34:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12241.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12239.php">Shiqing Fan: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="12232.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12244.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 04 March 2010 01:32:39 Yuanyuan ZHANG wrote:
<br>
<span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help, but unfortunately I am still not clear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You are right Dave, FUNNELED allows the application to have multiple
</span><br>
<span class="quotelev2">&gt; &gt; threads but only the man thread calls MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My understanding is that even if I use SINGLE or MPI_Init, I can still
</span><br>
<span class="quotelev1">&gt; have multiple threads if I use OpenMP PARALLEL directive, and only
</span><br>
<span class="quotelev1">&gt; the main thread makes MPI calls. Am I correct?
</span><br>
<p>Actually if your application asks for MPI_THREAD_SINGLE, it specifies that it 
<br>
won't use any thread, so you shouldn't use OpenMP threads. If you asked SINGLE 
<br>
and use threads (even if only the main thread calls MPI) the behavior is 
<br>
unspecified (we can imagine that some MPI implementation cannot support any 
<br>
thread within the process for some reason). 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; An OpenMP/MPI hybrid program that makes MPI calls only in between
</span><br>
<span class="quotelev2">&gt; &gt; parallel sections is usually a FUNNELED user of MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For an OpenMP/MPI hybrid program, if I only want to make MPI calls using
</span><br>
<span class="quotelev1">&gt; the main thread, ie., only in between parallel sections, can I just use
</span><br>
<span class="quotelev1">&gt; SINGLE or MPI_Init? What's the benefit of FUNNELED?
</span><br>
<p>Asking for the FUNNELED thread-safety level informs the MPI library that your 
<br>
application is going to run threads. If you ask for SINGLE, then you say &quot;I 
<br>
promise, I won't use any thread&quot;. The difference may be unclear from an 
<br>
application developer point of view, but it is important from the MPI library 
<br>
point of view. 
<br>
<p>However, I guess most modern MPI libraries support FUNNELED by default and the 
<br>
performance should be the same for FUNNELED and SINGLE
<br>
<p><p>Francois Trahay
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12241.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12239.php">Shiqing Fan: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="12232.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12244.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
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
