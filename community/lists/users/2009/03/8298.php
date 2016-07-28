<?
$subject_val = "Re: [OMPI users] Gamess with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 15:31:37 2009" -->
<!-- isoreceived="20090304203137" -->
<!-- sent="Wed, 4 Mar 2009 15:31:31 -0500" -->
<!-- isosent="20090304203131" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gamess with openmpi" -->
<!-- id="96FA806B-5CAD-45A9-953B-25CBC590E010_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A3C46D.7050002_at_gmx.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 15:31:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8299.php">Jeff Squyres: "Re: [OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>Previous message:</strong> <a href="8297.php">Jan Lindheim: "[OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8175.php">Thomas Exner: "[OMPI users] Gamess with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8311.php">Thomas Exner: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Reply:</strong> <a href="8311.php">Thomas Exner: "Re: [OMPI users] Gamess with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying -- INBOX deluge makes me miss emails  
<br>
on the users list sometimes.
<br>
<p>I'm unfortunately not familiar with gamess -- have you checked with  
<br>
their support lists or documentation?
<br>
<p>Note that Open MPI's IB progression engine will spin hard to make  
<br>
progress for message passing.  Specifically, if you have processes  
<br>
that are &quot;blocking&quot; in message passing calls, those processes will  
<br>
actually be spinning trying to make progress (vs. actually blocking in  
<br>
the kernel).  So if you overload your hosts -- meaning that you run  
<br>
more Open MPI jobs than there are cores -- you could well experience  
<br>
dramatic slowdown in overall performance because every MPI job will be  
<br>
competing for CPU cycles.
<br>
<p><p>On Feb 24, 2009, at 4:57 AM, Thomas Exner wrote:
<br>
<p><span class="quotelev1">&gt; Dear all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because I am new to this list, I would like to introduce myself as
</span><br>
<span class="quotelev1">&gt; Thomas Exner and please excuse silly questions, because I am only a  
</span><br>
<span class="quotelev1">&gt; chemist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And now my problem, with which I am fiddling around for almost a  
</span><br>
<span class="quotelev1">&gt; week: I
</span><br>
<span class="quotelev1">&gt; try to use gamess with openmpi on infiniband. There is a good
</span><br>
<span class="quotelev1">&gt; description on how to  compile it with mpi and it can be done, even if
</span><br>
<span class="quotelev1">&gt; it is not easy. But then on run time everything gets weird. The
</span><br>
<span class="quotelev1">&gt; specialty of gamess is that it runs twice as much mpi jobs than used  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; the computation. The second half is used as data server, requiring  
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev1">&gt; but with very little cpu load. Each one of these data servers is
</span><br>
<span class="quotelev1">&gt; connected to a specific compute job. Therefore, these two  
</span><br>
<span class="quotelev1">&gt; corresponding
</span><br>
<span class="quotelev1">&gt; jobs have to be run on the same node. On one node everything is fine
</span><br>
<span class="quotelev1">&gt; (2x4core machines in my case), because all the jobs are guarantied to
</span><br>
<span class="quotelev1">&gt; run on this node. If I try two nodes, at the beginning also everything
</span><br>
<span class="quotelev1">&gt; is fine. 8 compute jobs and 8 data server are running on each machine.
</span><br>
<span class="quotelev1">&gt; But after a short while, the entire set of processes (16) on the first
</span><br>
<span class="quotelev1">&gt; node start to accumulate CPU time, with nothing useful happening.  The
</span><br>
<span class="quotelev1">&gt; second node's processes go entirely to sleep. Is it possible that all
</span><br>
<span class="quotelev1">&gt; the compute jobs are for some reason been transfered to the first  
</span><br>
<span class="quotelev1">&gt; node?
</span><br>
<span class="quotelev1">&gt; This would explain the load of 16 on the first and 0 on the second  
</span><br>
<span class="quotelev1">&gt; node,
</span><br>
<span class="quotelev1">&gt; because 16 compute jobs (100 % cpu load) and 16 data servers (almost  
</span><br>
<span class="quotelev1">&gt; 0%
</span><br>
<span class="quotelev1">&gt; load) are running, respectively. Strange thing is also that the same
</span><br>
<span class="quotelev1">&gt; version runs on gigabit and myrinet fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be great if somebody could help me on that. If you need more
</span><br>
<span class="quotelev1">&gt; information, I will be happy to share them with you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much.
</span><br>
<span class="quotelev1">&gt; Thomas
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8299.php">Jeff Squyres: "Re: [OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>Previous message:</strong> <a href="8297.php">Jan Lindheim: "[OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8175.php">Thomas Exner: "[OMPI users] Gamess with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8311.php">Thomas Exner: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Reply:</strong> <a href="8311.php">Thomas Exner: "Re: [OMPI users] Gamess with openmpi"</a>
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
