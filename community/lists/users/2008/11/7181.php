<?
$subject_val = "Re: [OMPI users] problem running Open MPI on Cells";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  1 07:39:59 2008" -->
<!-- isoreceived="20081101113959" -->
<!-- sent="Sat, 1 Nov 2008 07:39:53 -0400" -->
<!-- isosent="20081101113953" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running Open MPI on Cells" -->
<!-- id="ED488E92-D834-405D-917A-BF2019A5293E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0810312146020.28861_at_lxplus238.cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem running Open MPI on Cells<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-01 07:39:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7182.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7180.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1052, Issue 10"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7174.php">Gilbert Grosdidier: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7183.php">Hahn Kim: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Reply:</strong> <a href="7183.php">Hahn Kim: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2008, at 4:52 PM, Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev1">&gt; To monitor the environment from inside the application, it could be  
</span><br>
<span class="quotelev1">&gt; useful to
</span><br>
<span class="quotelev1">&gt; issue a 'system(&quot;printenv&quot;)' call at the very beginning of the main  
</span><br>
<span class="quotelev1">&gt; program,
</span><br>
<span class="quotelev1">&gt; even before (and after, btw) the MPI_Init call, when running in  
</span><br>
<span class="quotelev1">&gt; serial job mode
</span><br>
<span class="quotelev1">&gt; with a single CAB, using mpirun.
</span><br>
<p>Note that it may not be safe to call system(), depending on your  
<br>
environment.  It might be better to getenv() to look for the specific  
<br>
environment variable that you're looking for, or loop over environ to  
<br>
show the entire environment.
<br>
<p>You can also use the -x option to mpirun to export a specific  
<br>
environment variable to all the MPI processes.  If you're using the  
<br>
rsh/ssh launcher, OMPI won't automatically export mpirun's entire  
<br>
environment to the MPI processes.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7182.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7180.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1052, Issue 10"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7174.php">Gilbert Grosdidier: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7183.php">Hahn Kim: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Reply:</strong> <a href="7183.php">Hahn Kim: "Re: [OMPI users] problem running Open MPI on Cells"</a>
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
