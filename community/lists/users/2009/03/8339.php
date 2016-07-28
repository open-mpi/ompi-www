<?
$subject_val = "Re: [OMPI users] Gamess with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 17:27:02 2009" -->
<!-- isoreceived="20090305222702" -->
<!-- sent="Thu, 5 Mar 2009 17:26:48 -0500" -->
<!-- isosent="20090305222648" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gamess with openmpi" -->
<!-- id="C711D765-A9DC-4A9F-81F6-8344CB3E286F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AF9267.2000304_at_gmx.net" -->
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
<strong>Date:</strong> 2009-03-05 17:26:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8340.php">Jeff Squyres: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>Previous message:</strong> <a href="8338.php">Jeff Squyres: "Re: [OMPI users] Runtime error only on one node."</a>
<li><strong>In reply to:</strong> <a href="8311.php">Thomas Exner: "Re: [OMPI users] Gamess with openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is gamess calling fork(), perchance?  Perhaps through a system() or  
<br>
popen() call?
<br>
<p>On Mar 5, 2009, at 3:50 AM, Thomas Exner wrote:
<br>
<p><span class="quotelev1">&gt; Dear Jeff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for your reply. Unfortunately, the overloading is
</span><br>
<span class="quotelev1">&gt; not the problem. The phenomenon also appears if we use only two
</span><br>
<span class="quotelev1">&gt; processes on the 8core machines. When I run the jobs over two nodes,  
</span><br>
<span class="quotelev1">&gt; one
</span><br>
<span class="quotelev1">&gt;  is doing nothing anymore after a couple of minutes. The strange thing
</span><br>
<span class="quotelev1">&gt; is that this only happens on ifiniband and only with mpi2 libraries
</span><br>
<span class="quotelev1">&gt; (openmpi and mvapich2). Mvapich1 is running reasonably fine at the
</span><br>
<span class="quotelev1">&gt; moment. Perhaps the first to mpi implementations have something in
</span><br>
<span class="quotelev1">&gt; common, which could trigger the problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again.
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the delay in replying -- INBOX deluge makes me miss  
</span><br>
<span class="quotelev1">&gt; emails on
</span><br>
<span class="quotelev2">&gt; &gt; the users list sometimes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm unfortunately not familiar with gamess -- have you checked with
</span><br>
<span class="quotelev2">&gt; &gt; their support lists or documentation?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that Open MPI's IB progression engine will spin hard to make
</span><br>
<span class="quotelev2">&gt; &gt; progress for message passing.  Specifically, if you have processes  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt; are &quot;blocking&quot; in message passing calls, those processes will  
</span><br>
<span class="quotelev1">&gt; actually
</span><br>
<span class="quotelev2">&gt; &gt; be spinning trying to make progress (vs. actually blocking in the
</span><br>
<span class="quotelev2">&gt; &gt; kernel).  So if you overload your hosts -- meaning that you run more
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI jobs than there are cores -- you could well experience  
</span><br>
<span class="quotelev1">&gt; dramatic
</span><br>
<span class="quotelev2">&gt; &gt; slowdown in overall performance because every MPI job will be  
</span><br>
<span class="quotelev1">&gt; competing
</span><br>
<span class="quotelev2">&gt; &gt; for CPU cycles.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 24, 2009, at 4:57 AM, Thomas Exner wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear all:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Because I am new to this list, I would like to introduce myself as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thomas Exner and please excuse silly questions, because I am only a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; chemist.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And now my problem, with which I am fiddling around for almost a  
</span><br>
<span class="quotelev1">&gt; week: I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; try to use gamess with openmpi on infiniband. There is a good
</span><br>
<span class="quotelev3">&gt; &gt;&gt; description on how to  compile it with mpi and it can be done,  
</span><br>
<span class="quotelev1">&gt; even if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it is not easy. But then on run time everything gets weird. The
</span><br>
<span class="quotelev3">&gt; &gt;&gt; specialty of gamess is that it runs twice as much mpi jobs than  
</span><br>
<span class="quotelev1">&gt; used for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the computation. The second half is used as data server,  
</span><br>
<span class="quotelev1">&gt; requiring data
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but with very little cpu load. Each one of these data servers is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; connected to a specific compute job. Therefore, these two  
</span><br>
<span class="quotelev1">&gt; corresponding
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jobs have to be run on the same node. On one node everything is  
</span><br>
<span class="quotelev1">&gt; fine
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (2x4core machines in my case), because all the jobs are  
</span><br>
<span class="quotelev1">&gt; guarantied to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; run on this node. If I try two nodes, at the beginning also  
</span><br>
<span class="quotelev1">&gt; everything
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is fine. 8 compute jobs and 8 data server are running on each  
</span><br>
<span class="quotelev1">&gt; machine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But after a short while, the entire set of processes (16) on the  
</span><br>
<span class="quotelev1">&gt; first
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node start to accumulate CPU time, with nothing useful  
</span><br>
<span class="quotelev1">&gt; happening.  The
</span><br>
<span class="quotelev3">&gt; &gt;&gt; second node's processes go entirely to sleep. Is it possible that  
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the compute jobs are for some reason been transfered to the first  
</span><br>
<span class="quotelev1">&gt; node?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This would explain the load of 16 on the first and 0 on the  
</span><br>
<span class="quotelev1">&gt; second node,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; because 16 compute jobs (100 % cpu load) and 16 data servers  
</span><br>
<span class="quotelev1">&gt; (almost 0%
</span><br>
<span class="quotelev3">&gt; &gt;&gt; load) are running, respectively. Strange thing is also that the  
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev3">&gt; &gt;&gt; version runs on gigabit and myrinet fine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It would be great if somebody could help me on that. If you need  
</span><br>
<span class="quotelev1">&gt; more
</span><br>
<span class="quotelev3">&gt; &gt;&gt; information, I will be happy to share them with you.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks very much.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thomas
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="8340.php">Jeff Squyres: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>Previous message:</strong> <a href="8338.php">Jeff Squyres: "Re: [OMPI users] Runtime error only on one node."</a>
<li><strong>In reply to:</strong> <a href="8311.php">Thomas Exner: "Re: [OMPI users] Gamess with openmpi"</a>
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
