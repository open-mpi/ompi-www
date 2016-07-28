<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 11:16:18 2010" -->
<!-- isoreceived="20100909151618" -->
<!-- sent="Thu, 9 Sep 2010 11:16:10 -0400" -->
<!-- isosent="20100909151610" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="OF227B2E90.46CB89A3-ON85257799.0051A28B-85257799.0053E365_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D2A473C6-C3EA-457F-AD68-9899AB1C946E_at_pittman.co.uk" -->
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
<strong>Date:</strong> 2010-09-09 11:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14197.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14195.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley's observation may apply to an application that iterates on many to 
<br>
one communication patterns. If the only collective used is MPI_Reduce, 
<br>
some non-root tasks can get ahead and keep pushing iteration results at 
<br>
tasks that are nearer the root. This could overload them and cause some 
<br>
extra slow down. 
<br>
<p>In most parallel applications, there is some web of interdependency across 
<br>
tasks between iterations that keeps them roughly in step.  I find it hare 
<br>
to believe that there are many programs that need semantically redundant 
<br>
MPI_Barriers.
<br>
<p>For example -
<br>
<p>In a program that does neighbor communication, no task can get very far 
<br>
ahead of its neighbors.  It is possible for a task at one corner to be a a 
<br>
few steps ahead of one at the opposite corner but only a few steps. In 
<br>
this case though, the distant neighbor is not being affected by that task 
<br>
that is out ahead anyway. It is only affected by its immediate neighbors,
<br>
<p>In a program that does an MPI_Bcast from root and an MPI_Reduce to root in 
<br>
each iteration, No task gets far ahead because the task that finished the 
<br>
Bcast early, just wait longer at the Reduce.
<br>
<p>An program that makes a call to a non-rooted collective every iteration 
<br>
will stay in pretty tight synch.
<br>
<p>Think carefully before tossing in either MPI_Barrier or some non-blocking 
<br>
barrier.  Unless MPI_Bcast or MPI_Reduce is the only collective you call, 
<br>
your problem is likely not progress skew..
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p><p>From:
<br>
Ashley Pittman &lt;ashley_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
09/09/2010 03:53 AM
<br>
Subject:
<br>
Re: [OMPI users] MPI_Reduce performance
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>
<p><p><p><p>On 9 Sep 2010, at 08:31, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2010-09-09 at 01:24 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; As people have said, these time values are to be expected. All they
</span><br>
<span class="quotelev2">&gt;&gt; reflect is the time difference spent in reduce waiting for the slowest
</span><br>
<span class="quotelev2">&gt;&gt; process to catch up to everyone else. The barrier removes that factor
</span><br>
<span class="quotelev2">&gt;&gt; by forcing all processes to start from the same place.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No mystery here - just a reflection of the fact that your processes
</span><br>
<span class="quotelev2">&gt;&gt; arrive at the MPI_Reduce calls at different times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, however, it seems Gabriele is saying the total execution time
</span><br>
<span class="quotelev1">&gt; *drops* by ~500 s when the barrier is put *in*.  (Is that the right way
</span><br>
<span class="quotelev1">&gt; around, Gabriele?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's harder to explain as a sync issue.
</span><br>
<p>Not really, you need some way of keeping processes in sync or else the 
<br>
slow ones get slower and the fast ones stay fast.  If you have an 
<br>
un-balanced algorithm then you can end up swamping certain ranks and when 
<br>
they get behind they get even slower and performance goes off a cliff 
<br>
edge.
<br>
<p>Adding sporadic barriers keeps everything in sync and running nicely, if 
<br>
things are performing well then the barrier only slows things down but if 
<br>
there is a problem it'll bring all process back together and destroy the 
<br>
positive feedback cycle.  This is why you often only need a 
<br>
synchronisation point every so often, I'm also a huge fan of asyncronous 
<br>
barriers as a full sync is a blunt and slow operation, using asyncronous 
<br>
barriers you can allow small differences in timing but prevent them from 
<br>
getting too large with very little overhead in the common case where 
<br>
processes are synced already.  I'm thinking specifically of starting a 
<br>
sync-barrier on iteration N, waiting for it on N+25 and immediately 
<br>
starting another one, again waiting for it 25 steps later.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14198/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14197.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14195.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
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
