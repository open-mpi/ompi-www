<?
$subject_val = "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 21:10:18 2010" -->
<!-- isoreceived="20101216021018" -->
<!-- sent="Wed, 15 Dec 2010 20:10:14 -0600" -->
<!-- isosent="20101216021014" -->
<!-- name="Ioannis Papadopoulos" -->
<!-- email="giannis.papadopoulos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_Test() too many times results in a time spike" -->
<!-- id="4D097506.2060303_at_gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8003045B-066F-41C2-93F2-091796964157_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calling MPI_Test() too many times results in a time spike<br>
<strong>From:</strong> Ioannis Papadopoulos (<em>giannis.papadopoulos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 21:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15158.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="15156.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>In reply to:</strong> <a href="15156.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15158.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="15158.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/15/2010 07:39 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 30, 2010, at 4:09 PM, Ioannis Papadopoulos wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The overall time may be the same, however it is alarming (at least to me) that if you call MPI_Test() too many times, the average time per MPI_Test() call increases. After all, that is what I am trying to measure, how much it costs to call MPI_Test() on average.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In your MPI_Wtime() example, the average overhead of MPI_Wtime() is exactly the same, independently of max/min time - which is what I would expect. This is not true for MPI_Test(). A small delay before calling the later, lowers the MPI_Test() average time.
</span><br>
<span class="quotelev1">&gt; There is a difference between MPI_Test() and MPI_Wtime() -- wtime just calls gettimeofday() and doesn't do anything else.  MPI_Test() trips the progression engine and therefore may do a variable number of things, some of which may involve I/O and/or memory allocation.  Those are variable time tasks, depending on all kinds of factors on your system (as Eugene alluded to).  This is doubly true if you're seeing it with two different MPI implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So yes, there might be those small &quot;spikes&quot; that you're seeing (to be honest, I hesitate to use the word &quot;spike&quot; when dealing with such small numbers in TCP traffic).  And they could be due to a lot of different things, many of which are beyond OMPI's control.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you seen if this has any impact on your actual application performance?
</span><br>
<p>I agree that MPI_Test() has to do some progress, but as you can see I am 
<br>
only sending one message and I busy wait on it - since there is nothing 
<br>
else to do and no other incoming traffic, I would expect no difference 
<br>
among MPI_Test() calls, apart from the last one (the one that will 
<br>
notify me that my message arrived).
<br>
<p>&nbsp;From the first set of benchmarks, you can clearly see that the average 
<br>
time for an MPI_Test() call has decreased by 2 orders of magnitude with 
<br>
that naive timer. My application is a framework that relies heavily on 
<br>
non-blocking primitives so I overuse MPI_Test(). The initial message was 
<br>
sent because I noticed this specific quirk of MPI_Test() when I was 
<br>
trying to figure out how much overhead my framework puts on top of MPI - 
<br>
having a really small piece of work just before MPI_Test() has given 1) 
<br>
lower and 2) more consistent times (minimal fluctuations).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15158.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="15156.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>In reply to:</strong> <a href="15156.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15158.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="15158.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
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
