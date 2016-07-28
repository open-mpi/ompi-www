<?
$subject_val = "Re: [OMPI users] calling a parallel solver from sequential code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 19 05:53:40 2013" -->
<!-- isoreceived="20131119105340" -->
<!-- sent="Tue, 19 Nov 2013 11:55:07 +0100" -->
<!-- isosent="20131119105507" -->
<!-- name="Florian Bruckner" -->
<!-- email="e0425375_at_[hidden]" -->
<!-- subject="Re: [OMPI users] calling a parallel solver from sequential code" -->
<!-- id="528B438B.7010802_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="528A3E41.4050300_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] calling a parallel solver from sequential code<br>
<strong>From:</strong> Florian Bruckner (<em>e0425375_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-19 05:55:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23006.php">Siegmar Gross: "Re: [OMPI users] MPI Java bindings compile errors and missingdatatype"</a>
<li><strong>Previous message:</strong> <a href="23004.php">Christoffer Hamberg: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>In reply to:</strong> <a href="23003.php">Damien: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/18/2013 05:20 PM, Damien wrote:
<br>
<span class="quotelev1">&gt; Florian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's two ways.  You can make your whole app MPI-based, but only 
</span><br>
<span class="quotelev1">&gt; have the master process do any of the sequential work, while the 
</span><br>
<span class="quotelev1">&gt; others spin until the parallel part.  That's the easiest, but you then 
</span><br>
<span class="quotelev1">&gt; have MPI everywhere in your app.  The other way is to have the MPI 
</span><br>
<span class="quotelev1">&gt; processes exist totally outside your main sequential process. This 
</span><br>
<span class="quotelev1">&gt; keeps you isolated from the MPI, but it's a lot more work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've done the MPI on the outside with the MUMPS linear solver. You 
</span><br>
<span class="quotelev1">&gt; need to spin up the MPI process group separately, so your sequential 
</span><br>
<span class="quotelev1">&gt; process isn't doing any work while they're running. You also need to 
</span><br>
<span class="quotelev1">&gt; send data to the MPI processes, which I used Boost's Shared-Memory 
</span><br>
<span class="quotelev1">&gt; library for (if you can't use C++ in your project this won't work for 
</span><br>
<span class="quotelev1">&gt; you at all).  You also have to keep the MPI processes and the main 
</span><br>
<span class="quotelev1">&gt; process synchronised and you need your main process to surrender it's 
</span><br>
<span class="quotelev1">&gt; core while the MPI solve is going on, so you end up with a bunch of 
</span><br>
<span class="quotelev1">&gt; Sleep or sched_yield calls so that everything plays nicely.  The whole 
</span><br>
<span class="quotelev1">&gt; thing takes a *lot* of tweaking to get right. Honestly, it's a total 
</span><br>
<span class="quotelev1">&gt; pig and I'd recommend against this path (we don't use it anymore in 
</span><br>
<span class="quotelev1">&gt; our software).
</span><br>
that is exactly what i wanted to do! we already tested the serial 
<br>
version of MUMPS in our code and it performs quite well. we use it to 
<br>
solve a preconditioning system inside of CVODE (multistep 
<br>
time-integration). cvode is more or less a black-box solver, which then 
<br>
sometimes calls the preconditioning solver. There is an MPI version of 
<br>
CVODE available, but i didn't want to parallelize that part of the code, 
<br>
because it is not really significant. Furthermore i don't know what 
<br>
happens internally and i would have to handle two different 
<br>
parallelizations at once.
<br>
<p>but thank you for your explaination
<br>
i didn't think that i would be that complicated, to get MPI working.
<br>
<p>greetings
<br>
Florian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23006.php">Siegmar Gross: "Re: [OMPI users] MPI Java bindings compile errors and missingdatatype"</a>
<li><strong>Previous message:</strong> <a href="23004.php">Christoffer Hamberg: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>In reply to:</strong> <a href="23003.php">Damien: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
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
