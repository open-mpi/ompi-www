<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 16:47:17 2008" -->
<!-- isoreceived="20081212214717" -->
<!-- sent="Fri, 12 Dec 2008 16:47:11 -0500" -->
<!-- isosent="20081212214711" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="C449D459-43A9-4BE6-AEF1-208D64B8A7D2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081212202216.GA26074_at_DOME" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 16:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7527.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7525.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7523.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7563.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7563.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2008, at 3:22 PM, douglas.guptill_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I could imagine another alternative.&amp;nbsp; Construct a wrapper  
</span><br>
<span class="quotelev2">&gt;&gt; function that
</span><br>
<span class="quotelev2">&gt;&gt; intercepts MPI_Recv and turn it into something like&lt;br&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;br&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PMPI_Irecv&lt;br&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while ( ! done ) {&lt;br&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp; nanosleep(short);&lt;br&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp; PMPI_Test(&amp;amp;done);&lt;br&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }&lt;br&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;br&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how useful this would be for your particular case.&lt;br&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the suggestion.  I didn't know about &quot;PMPI_Irecv&quot; (my
</span><br>
<span class="quotelev1">&gt; question was what/where did the &quot;P&quot; prefix to MPI come from?) so I
</span><br>
<span class="quotelev1">&gt; went back to the MPI standard, and re-read the description of
</span><br>
<span class="quotelev1">&gt; &quot;mpi_send&quot; and &quot;mpi_recv&quot;.
</span><br>
<p>The &quot;P&quot; is MPI's profiling interface.  See chapter 14 in the MPI-2.1  
<br>
doc.
<br>
<p><span class="quotelev1">&gt; Based on my re-read of the MPI standard, it appears that I may have
</span><br>
<span class="quotelev1">&gt; slightly mis-stated my issue.  The spin is probably taking place in
</span><br>
<span class="quotelev1">&gt; &quot;mpi_send&quot;.  &quot;mpi_send&quot;, according to my understanding of the MPI
</span><br>
<span class="quotelev1">&gt; standard, may not exit until a matching &quot;mpi_recv&quot; has been initiated,
</span><br>
<span class="quotelev1">&gt; or completed.  At least that is the conclusion I came to.
</span><br>
<p>Perhaps something like this:
<br>
<p>int MPI_Send(...) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int flag;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PMPI_Isend(..., &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nanosleep(short);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMPI_Test(&amp;req, &amp;flag, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} while (!flag);
<br>
}
<br>
<p>That is, *you* provide MPI_Send and intercept all your apps calls to  
<br>
MPI_Send.  But you implement it by doing a non-blocking send and  
<br>
sleeping and polling MPI to know when it's done.  Of course, you don't  
<br>
have to implement this as MPI_Send -- you could always have  
<br>
your_func_prefix_send(...) instead of explicitly using the MPI  
<br>
profiling interface.  But using the profiling interface allows you to  
<br>
swap in/out different implementations of MPI_Send (etc.) at link time,  
<br>
if that's desirable to you.
<br>
<p>Looping over sleep/test is not the most efficient way of doing it, but  
<br>
it may be suitable for your purposes.
<br>
<p><span class="quotelev1">&gt; However my complaint - sorry, I wish I could think of a better word -
</span><br>
<span class="quotelev1">&gt; remains.
</span><br>
<p>No worries!  :-)
<br>
<p><span class="quotelev1">&gt; It appears that openmpi spin-waits, as opposed to, say,
</span><br>
<span class="quotelev1">&gt; going to sleep and waiting for a wake-up call.  Like a semaphore - if
</span><br>
<span class="quotelev1">&gt; those things still exist.
</span><br>
<p><p>Correct.  Most MPI's do at least some form of spin waiting (some do  
<br>
have the ability to block after a while).  As mentioned on this  
<br>
thread, we have it on our roadmap, but the timing of when it happens  
<br>
is -- as yet -- unknown.  We are at driven by customer/user input,  
<br>
though, so if lots of people ask for this, there's more of a chance  
<br>
for it getting done than if no one is asking for it.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7527.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7525.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7523.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7563.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7563.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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
