<?
$subject_val = "[OMPI users] mpirun interaction with pbsdsh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 10:50:39 2009" -->
<!-- isoreceived="20090401145039" -->
<!-- sent="Wed, 1 Apr 2009 10:49:31 -0400" -->
<!-- isosent="20090401144931" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun interaction with pbsdsh" -->
<!-- id="B734E619-2153-4DD6-B784-4BD71612A6D8_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] mpirun interaction with pbsdsh<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 10:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8716.php">Ralph Castain: "Re: [OMPI users] mpirun interaction with pbsdsh"</a>
<li><strong>Previous message:</strong> <a href="8714.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8716.php">Ralph Castain: "Re: [OMPI users] mpirun interaction with pbsdsh"</a>
<li><strong>Reply:</strong> <a href="8716.php">Ralph Castain: "Re: [OMPI users] mpirun interaction with pbsdsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok this is weird, and the correct answer is probably &quot;don't do that&quot;,
<br>
Anyway:
<br>
<p>User wants to run many many small jobs, faster than our scheduler 
<br>
+torque can start, he uses pbsdsh to start them in parallel, under tm.
<br>
<p>pbsdsh bash -c 'cd $PBS_O_WORKDIR/$PBS_VNODENUM; mpirun  -np 1  
<br>
application'
<br>
<p>This is kinda silly because the code while MPI based, when ran on  
<br>
single rank does not require mpirun to start, and just just fine if  
<br>
you leave off mpirun.
<br>
<p>What happens though if you do leave it on (this is with ompi-1.2.x)   
<br>
you get errors about
<br>
<p>[nyx428.engin.umich.edu:01929] pls:tm: failed to poll for a spawned  
<br>
proc, return status = 17002
<br>
[nyx428.engin.umich.edu:01929] [0,0,0] ORTE_ERROR_LOG: In errno in  
<br>
file rmgr_urm.c at line 462
<br>
<p><p>Kinda makes sense, pbsdsh has already started 'mpirun' under tm, and  
<br>
now mpirun is trying to start a process also under tm. In fact with  
<br>
older versions (1.2.0).  The above will work fine only for the first  
<br>
TMNODE, any second node, will hang, at 'poll()' if you strace it.
<br>
<p>To we can solve the above by not using mpirun to start single  
<br>
processes under tm that were spawned by tm in the first place.  Just  
<br>
thought you would like to know.
<br>
<p>Is there a way to have mpirun spawn all the processes like pbsdsh?   
<br>
Problem is the code is MPI based, so if you say 'run 4'  its going to  
<br>
do the noraml COMM_SIZE=4, only read first input, etc.  Also we have  
<br>
to change the CWD of each rank.  Thus can you make mpirun farm?
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8716.php">Ralph Castain: "Re: [OMPI users] mpirun interaction with pbsdsh"</a>
<li><strong>Previous message:</strong> <a href="8714.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8716.php">Ralph Castain: "Re: [OMPI users] mpirun interaction with pbsdsh"</a>
<li><strong>Reply:</strong> <a href="8716.php">Ralph Castain: "Re: [OMPI users] mpirun interaction with pbsdsh"</a>
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
