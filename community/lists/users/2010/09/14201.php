<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 14:10:21 2010" -->
<!-- isoreceived="20100909181021" -->
<!-- sent="Thu, 9 Sep 2010 14:10:13 -0400" -->
<!-- isosent="20100909181013" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="OF160AF875.42EFCC20-ON85257799.00604D47-85257799.0063D2A0_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C890D7D.2080706_at_oracle.com" -->
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
<strong>Date:</strong> 2010-09-09 14:10:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14202.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14200.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14200.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14202.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14202.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was pointing out that most programs have some degree of elastic 
<br>
synchronization built in. Tasks (or groups or components in a coupled 
<br>
model) seldom only produce data.they also consume what other tasks produce 
<br>
and that limits the potential skew. 
<br>
<p>If step n for a task (or group or coupled component) depends on data 
<br>
produced by step n-1 in another task  (or group or coupled component) then 
<br>
no task can be farther ahead of the task it depends on than one step.   If 
<br>
there are 2 tasks that each need the others step n-1 result to compute 
<br>
step n then they can never get farther than one step out of synch.  If 
<br>
there were a rank ordered loop of  8 tasks so each one needs the output of 
<br>
the prior step on task ((me-1)  mod tasks) to compute then you can get 
<br>
more skew because if 
<br>
task 5 gets stalled in step 3,
<br>
task 6 will finish step 3 and send results to 7 but stall on recv for step 
<br>
4 (lacking the end of step 3 send by task 5)
<br>
task 7 will finish step 4 and send results to 0  but stall on recv for 
<br>
step 5
<br>
task 0 will finish step 5 and send results to 1  but stall on recv for 
<br>
step 6
<br>
etc
<br>
<p>In a 2D or 3D grid, the dependency is tighter so the possible skew is 
<br>
less. but it is still significant on a huge grid   In a program with 
<br>
frequent calls to MPI_Allreduce on COMM_WORLD, the skew is very limited. 
<br>
The available skew gets harder to predict as the interdependencies grow 
<br>
more complex.
<br>
<p>I call this &quot;elasticity&quot; because the amount of stretch varies but, like a 
<br>
bungee cord or an waist band, only goes so far. Every parallel program has 
<br>
some degree of elasticity built into the way its parts interact.
<br>
<p>I assume a coupler has some elasticity too. That is, ocean and atmosphere 
<br>
each model Monday and report in to coupler but neither can model Tuesday 
<br>
until they get some of the Monday results generated by the other. (I am 
<br>
pretending granularity is day by day)  Wouldn't the right level of 
<br>
synchronization among component result automatically form the data 
<br>
dependencies among them?
<br>
<p>&nbsp;
<br>
<p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p><p>From:
<br>
Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
09/09/2010 12:40 PM
<br>
Subject:
<br>
Re: [OMPI users] MPI_Reduce performance
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>
<p><p><p>Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; More often than not some components lag behind (regardless of how
</span><br>
<span class="quotelev1">&gt; much you tune the number of processors assigned to each component),
</span><br>
<span class="quotelev1">&gt; slowing down the whole scheme.
</span><br>
<span class="quotelev1">&gt; The coupler must sit and wait for that late component,
</span><br>
<span class="quotelev1">&gt; the other components must sit and wait for the coupler,
</span><br>
<span class="quotelev1">&gt; and the (vicious) &quot;positive feedback&quot; cycle that
</span><br>
<span class="quotelev1">&gt; Ashley mentioned goes on and on.
</span><br>
<p>I think &quot;sit and wait&quot; is the &quot;typical&quot; scenario that Dick mentions. 
<br>
Someone lags, so someone else has to wait.
<br>
<p>In contrast, the &quot;feedback&quot; cycle Ashley mentions is where someone lags 
<br>
and someone else keeps racing ahead, pumping even more data at the 
<br>
laggard, forcing the laggard ever further behind.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14202.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14200.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14200.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14202.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14202.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
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
