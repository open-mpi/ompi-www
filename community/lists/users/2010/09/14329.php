<?
$subject_val = "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 13:55:42 2010" -->
<!-- isoreceived="20100924175542" -->
<!-- sent="Fri, 24 Sep 2010 13:55:34 -0400" -->
<!-- isosent="20100924175534" -->
<!-- name="Lewis, Ambrose J." -->
<!-- email="AMBROSE.J.LEWIS_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;self scheduled&amp;quot; work &amp;amp; mpi receive???" -->
<!-- id="3D807689CC0B144B8A15A477B60C25D40446DA9F_at_0015-its-exmb10.us.saic.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF17360539.D3B097D0-ON852577A8.0047FEC3-852577A8.0048EF34_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???<br>
<strong>From:</strong> Lewis, Ambrose J. (<em>AMBROSE.J.LEWIS_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 13:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14330.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14328.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
<li><strong>In reply to:</strong> <a href="14323.php">Richard Treumann: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good points...I'll see if anything can be done to speed up the master.  If we can shrink the number of MPI processes without hurting overall throughput maybe I could save enough to fit another run on the freed cores.  Thanks for the ideas!
<br>
I was also worried about contention on the nodes since I'm running multiple MPI processes on the same multi-core box.  A typical run is 120 MPI processes on 5 nodes, each with 24 cores. I may play a little with the &quot;--bynode&quot; parameter to see if this has any (significant) effect
<br>
THANXS
<br>
amb
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] on behalf of Richard Treumann
<br>
Sent: Fri 9/24/2010 9:16 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???
<br>
&nbsp;
<br>
Amb 
<br>
<p>It sounds like you have more workers than you can keep fed. Workers are 
<br>
finishing up and requesting their next assignment but sit idle because 
<br>
there are so many other idle workers too.
<br>
<p>Load balance does not really matter if the choke point is the master.  The 
<br>
work is being done as fast as the master can hand it out.
<br>
<p>Consider using fewer workers and seeing if your load balance improves and 
<br>
your total thruput stays the same. If you want to use all the workers you 
<br>
have efficiently, you need to find a way to make the master deliver 
<br>
assignments as fast as workers finish them. 
<br>
<p>Compute processes do not care about fairness. Having half the processes 
<br>
busy 100% of the time and the other half idle  vs. having all the 
<br>
processes busy 50% of the time gives the same thruput and the hard workers 
<br>
will not complain. 
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
Mikael Lavoie &lt;mikael.lavoie_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
09/23/2010 05:08 PM
<br>
Subject:
<br>
Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>
<p><p><p>Hi Ambrose,
<br>
<p>I'm interested in you work, i have a app to convert for myself and i don't 
<br>
know enough the MPI structure and syntaxe to make it...
<br>
<p>So if you wanna share your app i'm interested in taking a look at it!! 
<br>
<p>Thanks and have a nice day!!
<br>
<p>Mikael Lavoie
<br>
2010/9/23 Lewis, Ambrose J. &lt;AMBROSE.J.LEWIS_at_[hidden]&gt;
<br>
Hi All:
<br>
I've written an openmpi program that &quot;self schedules&quot; the work.  
<br>
The master task is in a loop chunking up an input stream and handing off 
<br>
jobs to worker tasks.  At first the master gives the next job to the next 
<br>
highest rank.  After all ranks have their first job, the master waits via 
<br>
an MPI receive call for the next free worker.  The master parses out the 
<br>
rank from the MPI receive and sends the next job to this node.  The jobs 
<br>
aren't all identical, so they run for slightly different durations based 
<br>
on the input data.
<br>
&nbsp;
<br>
When I plot a histogram of the number of jobs each worker performed, the 
<br>
lower mpi ranks are doing much more work than the higher ranks.  For 
<br>
example, in a 120 process run, rank 1 did 32 jobs while rank 119 only did 
<br>
2.  My guess is that openmpi returns the lowest rank from the MPI Recv 
<br>
when I've got MPI_ANY_SOURCE set and multiple sends have happened since 
<br>
the last call.
<br>
&nbsp;
<br>
Is there a different Recv call to make that will spread out the data 
<br>
better?
<br>
&nbsp;
<br>
THANXS!
<br>
amb
<br>
&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14329/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14330.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14328.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
<li><strong>In reply to:</strong> <a href="14323.php">Richard Treumann: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
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
