<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  7 15:18:45 2007" -->
<!-- isoreceived="20070207201845" -->
<!-- sent="Wed, 7 Feb 2007 15:18:33 -0500" -->
<!-- isosent="20070207201833" -->
<!-- name="Nader Ahmadi" -->
<!-- email="a_nader_at_[hidden]" -->
<!-- subject="[OMPI users] Does Open MPI  &amp;quot;Realy&amp;quot; support AIX?" -->
<!-- id="BAY102-DAV9F9F3F98B523D07C36B638D9E0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Nader Ahmadi (<em>a_nader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-07 15:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2637.php">Mark Kosmowski: "[OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2635.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2641.php">Jeff Squyres: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<li><strong>Reply:</strong> <a href="2641.php">Jeff Squyres: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<li><strong>Reply:</strong> <a href="2642.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>We are in the process to decide, if we should use Open MPI in an AIX environment.
<br>
<p>Our in-house testing indicates that OMPI (V 1.1.x and V 1.2.x) stdio is broken under AIX. 
<br>
<p>At this point, I am trying to find out if there is a fix or work-around for this problem. I have put another 
<br>
<p>posting (see attached). One recommendation was try pre-release of V 1.2, which didn't make any difference.
<br>
<p>I am hoping that an OMPI developer or someone from IBM come up with a solution.  
<br>
<p>Open MPI documentation, indicates that AIX is being supported, with limited testing before each release.
<br>
<p>What is limited testing? Does it mean, Configure, Install and running &quot;Hello World&quot; on one node? 
<br>
<p>In short, we did configure and installed  V 1.1.x as well as V1.2.x, but attempt to running
<br>
<p>a simple test such as &quot;mpirun -np 1 hostname&quot;, fails, see attached for more details.
<br>
<p>I have eight  nodes IBM systems, I could run any test, to solve this problem.
<br>
<p>Thanks for your comments
<br>
<p>Ali,
<br>
<p>---------------------------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt;From Previous Posting on OMPI user's group 
</span><br>
<p>---------------------------------------------------------------------------------------------------------- 
<br>
<p>I have installed Open MPI 1.1.2  on IBM AIX 5.3 cluster. It looks like 
<br>
<p>terminal output is broken. There are a few entry in the OpenMPI archive for this problem, 
<br>
<p>with no suggested solution or real work around. 
<br>
<p>I am putting this posting with hope to get some advise for a work around or solution. 
<br>
<p>#mpirun -np 1 hostname 
<br>
<p>No out put, piping the command to &quot;cat&quot; or &quot;more&quot; generate no out put as well. 
<br>
<p>The only way to get an output from this command is to add --debug-daemons 
<br>
<p>#mpirun -np 1 --debug-daemons hostname 
<br>
<p>Even this debug option is not working for a real application which generate several output. 
<br>
<p>Looking forward for any comments. 
<br>
<p>Thanks 
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2637.php">Mark Kosmowski: "[OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2635.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2641.php">Jeff Squyres: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<li><strong>Reply:</strong> <a href="2641.php">Jeff Squyres: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<li><strong>Reply:</strong> <a href="2642.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
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
