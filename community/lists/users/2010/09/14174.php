<?
$subject_val = "Re: [OMPI users] Memory allocation error when linking with MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 14:03:53 2010" -->
<!-- isoreceived="20100903180353" -->
<!-- sent="Fri, 3 Sep 2010 14:03:48 -0400" -->
<!-- isosent="20100903180348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation error when linking with MPI libraries" -->
<!-- id="7E8A4020-0A27-444C-ABED-CD7E513D4C73_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=ViHFg3zNmhkaGuyzgT6mwdH3JXvvVeWLymkSZ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory allocation error when linking with MPI libraries<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 14:03:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14175.php">Reuti: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<li><strong>Previous message:</strong> <a href="14173.php">David Zhang: "Re: [OMPI users] Problems with mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14137.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14024.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 31, 2010, at 8:36 AM, Nicolas Deladerriere wrote:
<br>
<p><span class="quotelev1">&gt; I also fixed my memory allocation issue using environment variable OMPI_MCA_memory_ptmalloc2_disable which is much more easier (at least in my case) than compiled new openmpi package and install that new package.
</span><br>
<span class="quotelev1">&gt; The point is that it is a bit complicated to have information about this variable (seems to be a secret variable !). Actually I have read that it cannot be used as normal MCA parameter and cannot be set in configuration file ( <a href="http://www.open-mpi.org/community/lists/users/2010/06/13208.php">http://www.open-mpi.org/community/lists/users/2010/06/13208.php</a> ).
</span><br>
<p>Correct.  Unfortunately, the way this MCA param is used, it is checked during the startup of the process itself -- before even main() is invoked.  Hence, we really can only do very, very limited things to check to see if that MCA parameter is enabled.  getenv() is in the list of acceptable checks; open() is not.  Basically, anything that invokes malloc() is not in the list of acceptable checks.
<br>
<p><span class="quotelev1">&gt; When using this variable, I have added -x OMPI_MCA_memory_ptmalloc2_disable option to my mpirun command line. Do I really have to do it ?
</span><br>
<p>Or you could set it in your shell startup files.
<br>
<p><span class="quotelev1">&gt; Is the environment variable (plus -x option if required) is still the only solution to set this parameter to 1 ?
</span><br>
<p>It depends.  You need to have that env variable set on all nodes where you are running.
<br>
<p>1. If you're using rsh/ssh to start your job, you could set this env variable in the non-interactive section of your shell startup files on every node, and then it should be set automatically when you mpirun across the nodes.
<br>
<p>2. If you're using a resource manager/scheduler of some sort, it might well copy your environment for you to all the nodes where you mpirun.  So setenv'ing it in your current shell and then submitting to the scheduler might be sufficient (e.g,. Torque and SLURM do this).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14175.php">Reuti: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<li><strong>Previous message:</strong> <a href="14173.php">David Zhang: "Re: [OMPI users] Problems with mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14137.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14024.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
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
