<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 09:43:51 2006" -->
<!-- isoreceived="20060628134351" -->
<!-- sent="Wed, 28 Jun 2006 09:43:38 -0400" -->
<!-- isosent="20060628134338" -->
<!-- name="Patrick Jessee" -->
<!-- email="pj_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi 1.1: startup problem caused by file descriptor state" -->
<!-- id="44A2878A.1070202_at_fluent.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Patrick Jessee (<em>pj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 09:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1485.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="1483.php">openmpi-user: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1486.php">Brian Barrett: "Re: [OMPI users] Openmpi 1.1: startup problem caused by file	descriptor state"</a>
<li><strong>Reply:</strong> <a href="1486.php">Brian Barrett: "Re: [OMPI users] Openmpi 1.1: startup problem caused by file	descriptor state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.  I've tracked down the source of the previously reported startup 
<br>
problem with Openmpi 1.1.  On startup, it fails with the messages:
<br>
<p>mca_oob_tcp_accept: accept() failed with errno 9.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;:
<br>
<p>This didn't happen with 1.0.2.
<br>
<p>The trigger for this behavior is if standard input happens to be closed 
<br>
before calling mpirun.  In this particular case, mpirun was being 
<br>
started by a wrapper Bourne shell script that had standard input 
<br>
closed.  It's fairly easy to reproduce.  Interestingly, the problem is 
<br>
not seen if standard input is opened from an arbitrary device such as 
<br>
/dev/null.
<br>
<p>This is the first MPI with which we've seen this behavior, and it didn't 
<br>
happen with 1.0.2 so something must have been introduced in 1.1.   
<br>
Perhaps 1.1 makes some assumptions about the state of the standard file 
<br>
descriptors.
<br>
<p>Hopefully this feedback is helpful to someone in resolving the problem.
<br>
<p>-Patrick
<br>
<p><p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1485.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="1483.php">openmpi-user: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1486.php">Brian Barrett: "Re: [OMPI users] Openmpi 1.1: startup problem caused by file	descriptor state"</a>
<li><strong>Reply:</strong> <a href="1486.php">Brian Barrett: "Re: [OMPI users] Openmpi 1.1: startup problem caused by file	descriptor state"</a>
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
