<?
$subject_val = "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 09:16:49 2010" -->
<!-- isoreceived="20100924131649" -->
<!-- sent="Fri, 24 Sep 2010 09:16:38 -0400" -->
<!-- isosent="20100924131638" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;self scheduled&amp;quot; work &amp;amp; mpi receive???" -->
<!-- id="OF17360539.D3B097D0-ON852577A8.0047FEC3-852577A8.0048EF34_at_us.ibm.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTinguf-LknYi=t_SgJcJV6SMXnzrROfVSb+3Y3=T_at_mail.gmail.com" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 09:16:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14324.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14322.php">Olivier Riff: "Re: [OMPI users] Display in terminal of error message using throw std::runtime_error on distant node..."</a>
<li><strong>In reply to:</strong> <a href="14304.php">Mikael Lavoie: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14329.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Reply:</strong> <a href="14329.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Amb 
<br>

<br>
It sounds like you have more workers than you can keep fed. Workers are 
<br>
finishing up and requesting their next assignment but sit idle because 
<br>
there are so many other idle workers too.
<br>

<br>
Load balance does not really matter if the choke point is the master.  The 
<br>
work is being done as fast as the master can hand it out.
<br>

<br>
Consider using fewer workers and seeing if your load balance improves and 
<br>
your total thruput stays the same. If you want to use all the workers you 
<br>
have efficiently, you need to find a way to make the master deliver 
<br>
assignments as fast as workers finish them. 
<br>

<br>
Compute processes do not care about fairness. Having half the processes 
<br>
busy 100% of the time and the other half idle  vs. having all the 
<br>
processes busy 50% of the time gives the same thruput and the hard workers 
<br>
will not complain. 
<br>

<br>

<br>
Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>

<br>

<br>

<br>

<br>
From:
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

<br>

<br>

<br>
Hi Ambrose,
<br>

<br>
I'm interested in you work, i have a app to convert for myself and i don't 
<br>
know enough the MPI structure and syntaxe to make it...
<br>

<br>
So if you wanna share your app i'm interested in taking a look at it!! 
<br>

<br>
Thanks and have a nice day!!
<br>

<br>
Mikael Lavoie
<br>
2010/9/23 Lewis, Ambrose J. &lt;AMBROSE.J.LEWIS_at_[hidden]&gt;
<br>
Hi All:
<br>
I&#226;&#128;&#153;ve written an openmpi program that &#226;&#128;&#156;self schedules&#226;&#128;&#157; the work.  
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
aren&#226;&#128;&#153;t all identical, so they run for slightly different durations based 
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
when I&#226;&#128;&#153;ve got MPI_ANY_SOURCE set and multiple sends have happened since 
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

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14324.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14322.php">Olivier Riff: "Re: [OMPI users] Display in terminal of error message using throw std::runtime_error on distant node..."</a>
<li><strong>In reply to:</strong> <a href="14304.php">Mikael Lavoie: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14329.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Reply:</strong> <a href="14329.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
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
