<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 13 09:39:22 2010" -->
<!-- isoreceived="20101113143922" -->
<!-- sent="Sat, 13 Nov 2010 14:39:15 +0000" -->
<!-- isosent="20101113143915" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="671D8819-015E-4369-AC4C-18F180E1E153_at_warwick.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Chris Jewell (<em>chris.jewell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-13 09:39:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14754.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14752.php">Nicolai Stange: "[OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14754.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14754.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14755.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave, Reuti,
<br>
<p>Sorry for kicking off this thread, and then disappearing.  I've been away for a bit.  Anyway, Dave, I'm glad you experienced the same issue as I had with my installation of SGE 6.2u5 and OpenMPI with core binding -- namely that with 'qsub -pe openmpi 8 -binding set linear:1 &lt;myscript.com&gt;', if two or more of the parallel processes get scheduled to the same execution node, then the processes end up being bound to the same core.  Not good!
<br>
<p>I've been playing around quite a bit trying to understand this issue, and ended up on the GE dev list:
<br>
<p><a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=39&amp;dsMessageId=285878">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=39&amp;dsMessageId=285878</a>
<br>
<p>It seems that most people expect that calls to 'qrsh -inherit' (that I assume OpenMPI uses to bind parallel processes to reserved GE slots) activates a separate binding.  This does not appear to be the case.  I *was* hoping that using -binding pe linear:1 might enable me to write a script that read the pe_hostfile and created a machine file for OpenMPI, but this fails as GE does not appear to give information as to which cores are unbound, only the number required.
<br>
<p>So, for now, my solution has been to use a JSV to remove core binding for the MPI jobs (but retain it for serial and SMP jobs).  Any more ideas??
<br>
<p>Cheers,
<br>
<p>Chris
<br>
<p>(PS. Dave: how is my alma mater these days??)
<br>
<pre>
--
Dr Chris Jewell
Department of Statistics
University of Warwick
Coventry
CV4 7AL
UK
Tel: +44 (0)24 7615 0778
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14754.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14752.php">Nicolai Stange: "[OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14754.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14754.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14755.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
