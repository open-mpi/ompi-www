<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 12:00:45 2010" -->
<!-- isoreceived="20100909160045" -->
<!-- sent="Thu, 09 Sep 2010 12:00:28 -0400" -->
<!-- isosent="20100909160028" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="4C89049C.5050904_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF227B2E90.46CB89A3-ON85257799.0051A28B-85257799.0053E365_at_us.ibm.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 12:00:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14200.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14198.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14198.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14200.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14200.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All
<br>
<p>Gabrielle's question, Ashley's recipe, and Dick Treutmann's cautionary 
<br>
words, may be part of a larger context of load balance, or not?
<br>
<p>Would Ashley's recipe of sporadic barriers be a silver bullet to
<br>
improve load imbalance problems, regardless of which collectives or
<br>
even point-to-point calls are in use?
<br>
<p>I have in mind for instance our big climate models.
<br>
Some of them work in MPMD mode, where several executables
<br>
representing atmosphere, ocean, etc, have their own
<br>
communicators, but interact with each other indirectly,
<br>
coordinated by a flux coupler (within yet another communicator).
<br>
The coupler receives, merges, and sends data across the other (physical) 
<br>
components.
<br>
The components don't talk to each other:
<br>
the coupler is the broker, the master.
<br>
This structure may be used in other fields and areas of application,
<br>
I'd guess.
<br>
<p>More often than not some components lag behind (regardless of how
<br>
much you tune the number of processors assigned to each component),
<br>
slowing down the whole scheme.
<br>
The coupler must sit and wait for that late component,
<br>
the other components must sit and wait for the coupler,
<br>
and the (vicious) &quot;positive feedback&quot; cycle that
<br>
Ashley mentioned goes on and on.
<br>
<p>Would sporadic barriers in the flux coupler &quot;shake up&quot; these delays?
<br>
<p>Ashley:  How did you get to the magic number of 25 iterations for the
<br>
sporadic barriers?
<br>
Would it be application/communicator pattern dependent?
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Richard Treumann wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley's observation may apply to an application that iterates on many 
</span><br>
<span class="quotelev1">&gt; to one communication patterns. If the only collective used is 
</span><br>
<span class="quotelev1">&gt; MPI_Reduce, some non-root tasks can get ahead and keep pushing iteration 
</span><br>
<span class="quotelev1">&gt; results at tasks that are nearer the root. This could overload them and 
</span><br>
<span class="quotelev1">&gt; cause some extra slow down.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In most parallel applications, there is some web of interdependency 
</span><br>
<span class="quotelev1">&gt; across tasks between iterations that keeps them roughly in step.  I find 
</span><br>
<span class="quotelev1">&gt; it hare to believe that there are many programs that need semantically 
</span><br>
<span class="quotelev1">&gt; redundant MPI_Barriers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In a program that does neighbor communication, no task can get very far 
</span><br>
<span class="quotelev1">&gt; ahead of its neighbors.  It is possible for a task at one corner to be a 
</span><br>
<span class="quotelev1">&gt; a few steps ahead of one at the opposite corner but only a few steps. In 
</span><br>
<span class="quotelev1">&gt; this case though, the distant neighbor is not being affected by that 
</span><br>
<span class="quotelev1">&gt; task that is out ahead anyway. It is only affected by its immediate 
</span><br>
<span class="quotelev1">&gt; neighbors,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In a program that does an MPI_Bcast from root and an MPI_Reduce to root 
</span><br>
<span class="quotelev1">&gt; in each iteration, No task gets far ahead because the task that finished 
</span><br>
<span class="quotelev1">&gt; the Bcast early, just wait longer at the Reduce.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An program that makes a call to a non-rooted collective every iteration 
</span><br>
<span class="quotelev1">&gt; will stay in pretty tight synch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Think carefully before tossing in either MPI_Barrier or some 
</span><br>
<span class="quotelev1">&gt; non-blocking barrier.  Unless MPI_Bcast or MPI_Reduce is the only 
</span><br>
<span class="quotelev1">&gt; collective you call, your problem is likely not progress skew..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dick Treumann  -  MPI Team          
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: 	Ashley Pittman &lt;ashley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: 	Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: 	09/09/2010 03:53 AM
</span><br>
<span class="quotelev1">&gt; Subject: 	Re: [OMPI users] MPI_Reduce performance
</span><br>
<span class="quotelev1">&gt; Sent by: 	users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9 Sep 2010, at 08:31, Terry Frankcombe wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; On Thu, 2010-09-09 at 01:24 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; As people have said, these time values are to be expected. All they
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; reflect is the time difference spent in reduce waiting for the slowest
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; process to catch up to everyone else. The barrier removes that factor
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; by forcing all processes to start from the same place.
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; No mystery here - just a reflection of the fact that your processes
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; arrive at the MPI_Reduce calls at different times.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Yes, however, it seems Gabriele is saying the total execution time
</span><br>
<span class="quotelev2">&gt;  &gt; *drops* by ~500 s when the barrier is put *in*.  (Is that the right way
</span><br>
<span class="quotelev2">&gt;  &gt; around, Gabriele?)
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; That's harder to explain as a sync issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really, you need some way of keeping processes in sync or else the 
</span><br>
<span class="quotelev1">&gt; slow ones get slower and the fast ones stay fast.  If you have an 
</span><br>
<span class="quotelev1">&gt; un-balanced algorithm then you can end up swamping certain ranks and 
</span><br>
<span class="quotelev1">&gt; when they get behind they get even slower and performance goes off a 
</span><br>
<span class="quotelev1">&gt; cliff edge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding sporadic barriers keeps everything in sync and running nicely, if 
</span><br>
<span class="quotelev1">&gt; things are performing well then the barrier only slows things down but 
</span><br>
<span class="quotelev1">&gt; if there is a problem it'll bring all process back together and destroy 
</span><br>
<span class="quotelev1">&gt; the positive feedback cycle.  This is why you often only need a 
</span><br>
<span class="quotelev1">&gt; synchronisation point every so often, I'm also a huge fan of asyncronous 
</span><br>
<span class="quotelev1">&gt; barriers as a full sync is a blunt and slow operation, using asyncronous 
</span><br>
<span class="quotelev1">&gt; barriers you can allow small differences in timing but prevent them from 
</span><br>
<span class="quotelev1">&gt; getting too large with very little overhead in the common case where 
</span><br>
<span class="quotelev1">&gt; processes are synced already.  I'm thinking specifically of starting a 
</span><br>
<span class="quotelev1">&gt; sync-barrier on iteration N, waiting for it on N+25 and immediately 
</span><br>
<span class="quotelev1">&gt; starting another one, again waiting for it 25 steps later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
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
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a> &lt;<a href="http://padb.pittman.org.uk/">http://padb.pittman.org.uk/</a>&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14200.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14198.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14198.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14200.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14200.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
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
