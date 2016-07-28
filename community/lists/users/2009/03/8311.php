<?
$subject_val = "Re: [OMPI users] Gamess with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 03:50:53 2009" -->
<!-- isoreceived="20090305085053" -->
<!-- sent="Thu, 05 Mar 2009 09:50:47 +0100" -->
<!-- isosent="20090305085047" -->
<!-- name="Thomas Exner" -->
<!-- email="texner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gamess with openmpi" -->
<!-- id="49AF9267.2000304_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="96FA806B-5CAD-45A9-953B-25CBC590E010_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Gamess with openmpi<br>
<strong>From:</strong> Thomas Exner (<em>texner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 03:50:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8312.php">Yury Tarasievich: "[OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8310.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>In reply to:</strong> <a href="8298.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8339.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Reply:</strong> <a href="8339.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff:
<br>
<p>Thank you very much for your reply. Unfortunately, the overloading is
<br>
not the problem. The phenomenon also appears if we use only two
<br>
processes on the 8core machines. When I run the jobs over two nodes, one
<br>
&nbsp;is doing nothing anymore after a couple of minutes. The strange thing
<br>
is that this only happens on ifiniband and only with mpi2 libraries
<br>
(openmpi and mvapich2). Mvapich1 is running reasonably fine at the
<br>
moment. Perhaps the first to mpi implementations have something in
<br>
common, which could trigger the problems.
<br>
<p>Thanks again.
<br>
Thomas
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay in replying -- INBOX deluge makes me miss emails on
</span><br>
<span class="quotelev1">&gt; the users list sometimes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unfortunately not familiar with gamess -- have you checked with
</span><br>
<span class="quotelev1">&gt; their support lists or documentation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that Open MPI's IB progression engine will spin hard to make
</span><br>
<span class="quotelev1">&gt; progress for message passing.  Specifically, if you have processes that
</span><br>
<span class="quotelev1">&gt; are &quot;blocking&quot; in message passing calls, those processes will actually
</span><br>
<span class="quotelev1">&gt; be spinning trying to make progress (vs. actually blocking in the
</span><br>
<span class="quotelev1">&gt; kernel).  So if you overload your hosts -- meaning that you run more
</span><br>
<span class="quotelev1">&gt; Open MPI jobs than there are cores -- you could well experience dramatic
</span><br>
<span class="quotelev1">&gt; slowdown in overall performance because every MPI job will be competing
</span><br>
<span class="quotelev1">&gt; for CPU cycles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2009, at 4:57 AM, Thomas Exner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Because I am new to this list, I would like to introduce myself as
</span><br>
<span class="quotelev2">&gt;&gt; Thomas Exner and please excuse silly questions, because I am only a
</span><br>
<span class="quotelev2">&gt;&gt; chemist.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And now my problem, with which I am fiddling around for almost a week: I
</span><br>
<span class="quotelev2">&gt;&gt; try to use gamess with openmpi on infiniband. There is a good
</span><br>
<span class="quotelev2">&gt;&gt; description on how to  compile it with mpi and it can be done, even if
</span><br>
<span class="quotelev2">&gt;&gt; it is not easy. But then on run time everything gets weird. The
</span><br>
<span class="quotelev2">&gt;&gt; specialty of gamess is that it runs twice as much mpi jobs than used for
</span><br>
<span class="quotelev2">&gt;&gt; the computation. The second half is used as data server, requiring data
</span><br>
<span class="quotelev2">&gt;&gt; but with very little cpu load. Each one of these data servers is
</span><br>
<span class="quotelev2">&gt;&gt; connected to a specific compute job. Therefore, these two corresponding
</span><br>
<span class="quotelev2">&gt;&gt; jobs have to be run on the same node. On one node everything is fine
</span><br>
<span class="quotelev2">&gt;&gt; (2x4core machines in my case), because all the jobs are guarantied to
</span><br>
<span class="quotelev2">&gt;&gt; run on this node. If I try two nodes, at the beginning also everything
</span><br>
<span class="quotelev2">&gt;&gt; is fine. 8 compute jobs and 8 data server are running on each machine.
</span><br>
<span class="quotelev2">&gt;&gt; But after a short while, the entire set of processes (16) on the first
</span><br>
<span class="quotelev2">&gt;&gt; node start to accumulate CPU time, with nothing useful happening.  The
</span><br>
<span class="quotelev2">&gt;&gt; second node's processes go entirely to sleep. Is it possible that all
</span><br>
<span class="quotelev2">&gt;&gt; the compute jobs are for some reason been transfered to the first node?
</span><br>
<span class="quotelev2">&gt;&gt; This would explain the load of 16 on the first and 0 on the second node,
</span><br>
<span class="quotelev2">&gt;&gt; because 16 compute jobs (100 % cpu load) and 16 data servers (almost 0%
</span><br>
<span class="quotelev2">&gt;&gt; load) are running, respectively. Strange thing is also that the same
</span><br>
<span class="quotelev2">&gt;&gt; version runs on gigabit and myrinet fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be great if somebody could help me on that. If you need more
</span><br>
<span class="quotelev2">&gt;&gt; information, I will be happy to share them with you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much.
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8312.php">Yury Tarasievich: "[OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8310.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>In reply to:</strong> <a href="8298.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8339.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Reply:</strong> <a href="8339.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
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
