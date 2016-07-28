<?
$subject_val = "Re: [OMPI users] Gridengine + Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 03:24:07 2008" -->
<!-- isoreceived="20080710072407" -->
<!-- sent="Thu, 10 Jul 2008 09:23:55 +0200" -->
<!-- isosent="20080710072355" -->
<!-- name="Romaric David" -->
<!-- email="david_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gridengine + Open MPI" -->
<!-- id="4875B90B.4080501_at_icps.u-strasbg.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4873F6C1.7030805_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Gridengine + Open MPI<br>
<strong>From:</strong> Romaric David (<em>david_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 03:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6040.php">lammpi_at_[hidden]: "[OMPI users] Open Mpi on LFS 6.3"</a>
<li><strong>Previous message:</strong> <a href="6038.php">Tod A. Charles-Pascal: "[OMPI users] compile fail on 64bit AMD cluster with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="6035.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just made a fix for the problem I've shown below in r18844. I think it 
</span><br>
<span class="quotelev1">&gt; is essentially the same problem that you are running into here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know if you still see the problem with the SGE tight 
</span><br>
<span class="quotelev1">&gt; integration job errors out. And I'll look at the suspend/resume feature 
</span><br>
<span class="quotelev1">&gt; later on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I compiled r18845, and jobs are indeed correctly started, thanks a lot !!!
<br>
<p>For the suspend issue : I ran a job on 2 machines.
<br>
On the 1st one, the mpi job processes are suspent/resumed/stopped correctly.
<br>
On the 2nd one, they are not, they go on running.
<br>
<p>As soon as this works, I can push SGE + openmpi to my test-users :-)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Romaric
<br>
<p><pre>
-- 
--------------------------------------
   R. David - david_at_[hidden]
   Tel. : 03 90 24 45 48  (Fax 45 47)
--------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6040.php">lammpi_at_[hidden]: "[OMPI users] Open Mpi on LFS 6.3"</a>
<li><strong>Previous message:</strong> <a href="6038.php">Tod A. Charles-Pascal: "[OMPI users] compile fail on 64bit AMD cluster with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="6035.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
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
