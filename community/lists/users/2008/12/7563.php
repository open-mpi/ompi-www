<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 15:15:24 2008" -->
<!-- isoreceived="20081218201524" -->
<!-- sent="Thu, 18 Dec 2008 15:37:06 -0400" -->
<!-- isosent="20081218193706" -->
<!-- name="douglas.guptill_at_[hidden]" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="20081218193706.GA12663_at_DOME" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C449D459-43A9-4BE6-AEF1-208D64B8A7D2_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:douglas.guptill_at_[hidden]?Subject=Re:%20[OMPI%20users]%20trouble%20using%20--mca%20mpi_yield_when_idle%201"><em>douglas.guptill_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-12-18 14:37:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7564.php">Jeff Squyres: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7562.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="7526.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff, Eugene:
<br>
<p>On Fri, Dec 12, 2008 at 04:47:11PM -0500, Jeff Squyres wrote:
<br>
<p>...&lt;snip&gt;...
<br>
<p><span class="quotelev1">&gt; The &quot;P&quot; is MPI's profiling interface.  See chapter 14 in the MPI-2.1  
</span><br>
<span class="quotelev1">&gt; doc.
</span><br>
<p>Ah...Thank you, both Jeff and Eugene, for pointing that out.
<br>
<p>I think there is a typo in chapter 14 - the first sentence isn't a
<br>
sentence - but that's another story.
<br>
<p><p><span class="quotelev2">&gt; &gt;Based on my re-read of the MPI standard, it appears that I may have
</span><br>
<span class="quotelev2">&gt; &gt;slightly mis-stated my issue.  The spin is probably taking place in
</span><br>
<span class="quotelev2">&gt; &gt;&quot;mpi_send&quot;.  &quot;mpi_send&quot;, according to my understanding of the MPI
</span><br>
<span class="quotelev2">&gt; &gt;standard, may not exit until a matching &quot;mpi_recv&quot; has been initiated,
</span><br>
<span class="quotelev2">&gt; &gt;or completed.  At least that is the conclusion I came to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int MPI_Send(...) {
</span><br>
<span class="quotelev1">&gt;    MPI_Request req;
</span><br>
<span class="quotelev1">&gt;    int flag;
</span><br>
<span class="quotelev1">&gt;    PMPI_Isend(..., &amp;req);
</span><br>
<span class="quotelev1">&gt;    do {
</span><br>
<span class="quotelev1">&gt;       nanosleep(short);
</span><br>
<span class="quotelev1">&gt;       PMPI_Test(&amp;req, &amp;flag, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;    } while (!flag);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is, *you* provide MPI_Send and intercept all your apps calls to  
</span><br>
<span class="quotelev1">&gt; MPI_Send.  But you implement it by doing a non-blocking send and  
</span><br>
<span class="quotelev1">&gt; sleeping and polling MPI to know when it's done.  Of course, you don't  
</span><br>
<span class="quotelev1">&gt; have to implement this as MPI_Send -- you could always have  
</span><br>
<span class="quotelev1">&gt; your_func_prefix_send(...) instead of explicitly using the MPI  
</span><br>
<span class="quotelev1">&gt; profiling interface.  But using the profiling interface allows you to  
</span><br>
<span class="quotelev1">&gt; swap in/out different implementations of MPI_Send (etc.) at link time,  
</span><br>
<span class="quotelev1">&gt; if that's desirable to you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looping over sleep/test is not the most efficient way of doing it, but  
</span><br>
<span class="quotelev1">&gt; it may be suitable for your purposes.
</span><br>
<p>Indeed, it is very suitable.  Thank you, both Jeff and Eugene, for
<br>
pointing the way.  That solution changes the load for my job from 2.0
<br>
to 1.0, as indicated by &quot;xload&quot; over a 40-minute run.
<br>
<p>That means I can *double* the throughput of my machine.
<br>
<p>Some gory details:
<br>
<p>I ignored the suggestion to use MPI_STATUS_IGNORE, and that got me
<br>
some trouble, as you may not be surprised to hear.  The solution was
<br>
to use MPI_Request_get_status instead of MPI_Test.
<br>
<p>As some of my waits (both in MPI_SEND and MPI_RECV) will be very
<br>
short, and some will be up to 4 minutes, I implemented a graduated
<br>
sleep time; it starts at 1 millisecond, and doubles after each sleep
<br>
up to a maximum of 100 milliseconds.  Interestingly, when I left the
<br>
sleep time at a constant 1 millisecond, the run load went up
<br>
significantly; it varied over the range 1.3 -&gt; 1.7 .
<br>
<p>I have attached my MPI_Send.c and MPI_Recv.c .  Comments welcome and
<br>
appreciated.
<br>
<p>Regards,
<br>
Douglas.
<br>
<pre>
-- 
  Douglas Guptill                       
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada


</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7563/MPI_Recv.c">MPI_Recv.c</a>
</ul>
<!-- attachment="MPI_Recv.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7563/MPI_Send.c">MPI_Send.c</a>
</ul>
<!-- attachment="MPI_Send.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7564.php">Jeff Squyres: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7562.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="7526.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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
