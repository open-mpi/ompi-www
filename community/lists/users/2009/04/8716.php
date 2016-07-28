<?
$subject_val = "Re: [OMPI users] mpirun interaction with pbsdsh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 11:21:22 2009" -->
<!-- isoreceived="20090401152122" -->
<!-- sent="Wed, 1 Apr 2009 09:21:06 -0600" -->
<!-- isosent="20090401152106" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun interaction with pbsdsh" -->
<!-- id="99910DE8-1CAC-4B0E-821D-3FF555681439_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B734E619-2153-4DD6-B784-4BD71612A6D8_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun interaction with pbsdsh<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 11:21:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Previous message:</strong> <a href="8715.php">Brock Palen: "[OMPI users] mpirun interaction with pbsdsh"</a>
<li><strong>In reply to:</strong> <a href="8715.php">Brock Palen: "[OMPI users] mpirun interaction with pbsdsh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick is the proper response. :-)
<br>
<p>The old 1.2 series would attempt to spawn a local orted on each of  
<br>
those nodes, and that is what is failing. Best guess is that it is  
<br>
because pbsdsh doesn't fully replicate a key part of the environment  
<br>
that is expected.
<br>
<p>One thing you could try is do this with 1.3.1. It will just fork/exec  
<br>
that local application instead of trying to start a daemon, so the  
<br>
odds are much better that it will work.
<br>
<p>I don't know of any native way to get mpirun to launch a farm - it  
<br>
will always set the comm_size to the total #procs. I suppose we could  
<br>
add that option, if people want it - wouldn't be very hard to implement.
<br>
<p>Ralph'
<br>
On Apr 1, 2009, at 8:49 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Ok this is weird, and the correct answer is probably &quot;don't do that&quot;,
</span><br>
<span class="quotelev1">&gt; Anyway:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; User wants to run many many small jobs, faster than our scheduler 
</span><br>
<span class="quotelev1">&gt; +torque can start, he uses pbsdsh to start them in parallel, under tm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pbsdsh bash -c 'cd $PBS_O_WORKDIR/$PBS_VNODENUM; mpirun  -np 1  
</span><br>
<span class="quotelev1">&gt; application'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is kinda silly because the code while MPI based, when ran on  
</span><br>
<span class="quotelev1">&gt; single rank does not require mpirun to start, and just just fine if  
</span><br>
<span class="quotelev1">&gt; you leave off mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What happens though if you do leave it on (this is with ompi-1.2.x)   
</span><br>
<span class="quotelev1">&gt; you get errors about
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nyx428.engin.umich.edu:01929] pls:tm: failed to poll for a spawned  
</span><br>
<span class="quotelev1">&gt; proc, return status = 17002
</span><br>
<span class="quotelev1">&gt; [nyx428.engin.umich.edu:01929] [0,0,0] ORTE_ERROR_LOG: In errno in  
</span><br>
<span class="quotelev1">&gt; file rmgr_urm.c at line 462
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kinda makes sense, pbsdsh has already started 'mpirun' under tm, and  
</span><br>
<span class="quotelev1">&gt; now mpirun is trying to start a process also under tm. In fact with  
</span><br>
<span class="quotelev1">&gt; older versions (1.2.0).  The above will work fine only for the first  
</span><br>
<span class="quotelev1">&gt; TMNODE, any second node, will hang, at 'poll()' if you strace it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To we can solve the above by not using mpirun to start single  
</span><br>
<span class="quotelev1">&gt; processes under tm that were spawned by tm in the first place.  Just  
</span><br>
<span class="quotelev1">&gt; thought you would like to know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to have mpirun spawn all the processes like pbsdsh?   
</span><br>
<span class="quotelev1">&gt; Problem is the code is MPI based, so if you say 'run 4'  its going  
</span><br>
<span class="quotelev1">&gt; to do the noraml COMM_SIZE=4, only read first input, etc.  Also we  
</span><br>
<span class="quotelev1">&gt; have to change the CWD of each rank.  Thus can you make mpirun farm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Previous message:</strong> <a href="8715.php">Brock Palen: "[OMPI users] mpirun interaction with pbsdsh"</a>
<li><strong>In reply to:</strong> <a href="8715.php">Brock Palen: "[OMPI users] mpirun interaction with pbsdsh"</a>
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
