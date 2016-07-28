<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 10 10:08:34 2010" -->
<!-- isoreceived="20100910140834" -->
<!-- sent="Fri, 10 Sep 2010 10:08:26 -0400" -->
<!-- isosent="20100910140826" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="OF783905E4.D59DB1B8-ON8525779A.004A754E-8525779A.004DADB1_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CCA4B987-EEB1-428B-BC5B-95341BEF0973_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-10 10:08:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14211.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14209.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14208.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14211.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14211.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ashley
<br>
<p>I understand the problem with descriptor flooding can be serious in an 
<br>
application with unidirectional data dependancy. Perhaps we have a 
<br>
different perception of how common that is.
<br>
<p>It seems to me that such programs would be very rare but if they are more 
<br>
common than I imagine, then discussion of how to modulate them is 
<br>
worthwhile.  In many cases, I think that adding some flow control to the 
<br>
application is a better solution than semantically redundant barrier. (A 
<br>
barrier that is there only to affect performance, not correctness, is what 
<br>
I mean by semantically redundant)
<br>
<p>For example, a Master/Worker application could have each worker break 
<br>
after every 4th send to the master and post an MPI_Recv for an 
<br>
OK_to_continue token.  If the token had been sent, this would delay the 
<br>
worker a few microseconds. If it had not been sent, the worker would be 
<br>
kept waiting.
<br>
<p>The Master would keep track of how many messages from each worker it had 
<br>
absorbed and on message 3 from a particular worker, send an OK_to_continue 
<br>
token to that worker.  The master would keep sending OK_to_continue tokens 
<br>
every 4th recv from then on (7, 11, 15 ...)  The descriptor queues would 
<br>
all remain short and only a worker that the master could not keep up with 
<br>
would ever lose a chance to keep working.  By sending the OK_to_continue 
<br>
token a bit early, the application would ensure that when there was no 
<br>
backlog, every worker would find a token when it looked for it and there 
<br>
would be no significant loss of compute time.
<br>
<p>Even with non-blocking barrier and a 10 step lag between Ibarrier and 
<br>
Wait, , if some worker is slow for 12 steps, the fast workers end up being 
<br>
kept in a non-productive MPI_Wait.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick 
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 09/09/2010 05:34:15 PM:
<br>
<p><span class="quotelev1">&gt; [image removed] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] MPI_Reduce performance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 09/09/2010 05:37 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9 Sep 2010, at 21:40, Richard Treumann wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ashley 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can you provide an example of a situation in which these 
</span><br>
<span class="quotelev1">&gt; semantically redundant barriers help? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not making the case for semantically redundant barriers, I'm 
</span><br>
<span class="quotelev1">&gt; making a case for implicit synchronisation in every iteration of a 
</span><br>
<span class="quotelev1">&gt; application.  Many applications have this already by nature of the 
</span><br>
<span class="quotelev1">&gt; data-flow required, anything that calls mpi_allgather or 
</span><br>
<span class="quotelev1">&gt; mpi_allreduce are the easiest to verify but there are many other 
</span><br>
<span class="quotelev1">&gt; ways of achieving the same thing.  My point is about the subset of 
</span><br>
<span class="quotelev1">&gt; programs which don't have this attribute and are therefore 
</span><br>
<span class="quotelev1">&gt; susceptible to synchronisation problems.  It's my experience that 
</span><br>
<span class="quotelev1">&gt; for low iteration counts these codes can run fine but once they hit 
</span><br>
<span class="quotelev1">&gt; a problem they go over a cliff edge performance wise and there is no
</span><br>
<span class="quotelev1">&gt; way back from there until the end of the job.  The email from 
</span><br>
<span class="quotelev1">&gt; Gabriele would appear to be a case that demonstrates this problem 
</span><br>
<span class="quotelev1">&gt; but I've seen it many times before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using your previous email as an example I would describe adding 
</span><br>
<span class="quotelev1">&gt; barriers to a problem as a way artificially reducing the 
</span><br>
<span class="quotelev1">&gt; &quot;elasticity&quot; of the program to ensure balanced use of resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I may be missing something but my statement for the text book would be 
</span><br>
<p><span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;If adding a barrier to your MPI program makes it run faster, 
</span><br>
<span class="quotelev1">&gt; there is almost certainly a flaw in it that is better solved another 
</span><br>
way.&quot; 
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The only exception I can think of is some sort of one direction 
</span><br>
<span class="quotelev1">&gt; data dependancy with messages small enough to go eagerly.  A program
</span><br>
<span class="quotelev1">&gt; that calls MPI_Reduce with a small message and the same root every 
</span><br>
<span class="quotelev1">&gt; iteration and  calls no other collective would be an example. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In that case, fast tasks at leaf positions would run free and a 
</span><br>
<span class="quotelev1">&gt; slow task near the root could pile up early arrivals and end up with
</span><br>
<span class="quotelev1">&gt; some additional slowing. Unless it was driven into paging I cannot 
</span><br>
<span class="quotelev1">&gt; imagine the slowdown would be significant though. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've diagnosed problems where the cause was a receive queue of tens 
</span><br>
<span class="quotelev1">&gt; of thousands of messages, in this case each and every receive 
</span><br>
<span class="quotelev1">&gt; performs slowly unless the descriptor is near the front of the queue
</span><br>
<span class="quotelev1">&gt; so the concern is not purely about memory usage at individual 
</span><br>
<span class="quotelev1">&gt; processes although that can also be a factor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14211.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14209.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14208.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14211.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14211.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
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
