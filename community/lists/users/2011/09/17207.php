<?
$subject_val = "Re: [OMPI users] Problem with MPI_BARRIER";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  9 12:00:46 2011" -->
<!-- isoreceived="20110909160046" -->
<!-- sent="Fri, 09 Sep 2011 09:00:33 -0700" -->
<!-- isosent="20110909160033" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_BARRIER" -->
<!-- id="4E6A3821.2070800_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EEB35218-A1CA-41B1-8BCE-484023AA7A8E_at_coria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_BARRIER<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-09 12:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17208.php">Kaizaad Bilimorya: "[OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Previous message:</strong> <a href="17206.php">Greg Fischer: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>In reply to:</strong> <a href="17204.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17215.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17215.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/8/2011 11:47 AM, Ghislain Lartigue wrote:
<br>
<span class="quotelev1">&gt; I guess you're perfectly right!
</span><br>
<span class="quotelev1">&gt; I will try to test it tomorrow by putting a call system(&quot;wait(X)) befor the barrier!
</span><br>
What does &quot;wait(X)&quot; mean?
<br>
<p>Anyhow, here is how I see your computation:
<br>
<p>A)  The first barrier simply synchronizes the processes.
<br>
B)  Then you start a bunch of non-blocking, point-to-point messages.
<br>
C)  Then another barrier.
<br>
D)  Finally, the point-to-point messages are completed.
<br>
<p>Your mental model might be that A, B, and C should be fast and that D 
<br>
should take a long time.  The reality may be that the completion of all 
<br>
those messages is actually taking place during C.
<br>
<p>How about the following?
<br>
<p>Barrier
<br>
t0 = MPI_Wtime()
<br>
start all non-blocking messages
<br>
t1 = MPI_Wtime()
<br>
Barrier
<br>
t2 = MPI_Wtime()
<br>
complete all messages
<br>
t3 = MPI_Wtime()
<br>
Barrier
<br>
t4 = MPI_Wtime()
<br>
<p>Then, look at the data from all the processes graphically.  Compare the 
<br>
picture to the same experiment, but with middle Barrier missing.  
<br>
Presumably, the full iteration will take roughly as long in both cases.  
<br>
The difference, I might expect, would be that with the middle barrier 
<br>
present, it gets all the time and the message-completion is fast.  
<br>
Without the middle barrier, the message completion is slow.  So, message 
<br>
completion is taking a long time either way and the only difference is 
<br>
whether it's taking place during your MPI_Test loop or during what you 
<br>
thought was only a barrier.
<br>
<p>A simple way of doing all this is to run with a time-line profiler... 
<br>
some MPI performance analysis tool.  You won't have to instrument the 
<br>
code, dump timings, or figure out graphics.  Just look at pretty 
<br>
pictures!  There is some description of tool candidates in the OMPI FAQ 
<br>
at <a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>
<br>
<span class="quotelev1">&gt; PS:
</span><br>
<span class="quotelev1">&gt; if anyone has more information about the implementation of the MPI_IRECV() procedure, I would be glad to learn more about it!
</span><br>
I don't know how much detail you want here, but I suspect not much 
<br>
detail is warranted.  There is a lot of complexity here, but I think a 
<br>
few key ideas will help.
<br>
<p>First, I'm pretty sure you're sending &quot;long&quot; messages.  OMPI usually 
<br>
sends such messages by queueing up a request.  These requests can, in 
<br>
the general case, be &quot;progressed&quot; whenever an MPI call is made.  So, 
<br>
whenever you make an MPI call, get away from the thought that you're 
<br>
doing one specific thing, as specified by the call and its arguments.  
<br>
Think instead that you will also be looking around to see whatever other 
<br>
MPI work can be progressed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17208.php">Kaizaad Bilimorya: "[OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Previous message:</strong> <a href="17206.php">Greg Fischer: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>In reply to:</strong> <a href="17204.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17215.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17215.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
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
