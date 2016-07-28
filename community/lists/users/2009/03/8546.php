<?
$subject_val = "Re: [OMPI users] mpirun/exec requires ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 13:31:00 2009" -->
<!-- isoreceived="20090323173100" -->
<!-- sent="Mon, 23 Mar 2009 11:30:50 -0600" -->
<!-- isosent="20090323173050" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun/exec requires ssh?" -->
<!-- id="29EA2D3E-4920-4F4C-9B2A-153F866202A3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C7C5AC.8020309_at_mpip-mainz.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun/exec requires ssh?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 13:30:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8547.php">Olaf Lenz: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8545.php">Olaf Lenz: "[OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>In reply to:</strong> <a href="8545.php">Olaf Lenz: "[OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8547.php">Olaf Lenz: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8547.php">Olaf Lenz: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I regularly run jobs like that on 1.3.1 - it has no desire to use ssh  
<br>
to start anything. On a local host such as this command uses, all  
<br>
mpiexec does is fork/exec the procs.
<br>
<p>It sounds like something strange is going on in your environment that  
<br>
makes OMPI think it is launching on a remote host. Most likely cause  
<br>
is something in your Ethernet configuration. Can you send us the  
<br>
output of ifconfig (or whatever your equivalent is)?
<br>
<p><p>On Mar 23, 2009, at 11:23 AM, Olaf Lenz wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to find anything on this on the mailings list or anywhere  
</span><br>
<span class="quotelev1">&gt; else, but I wasn't able to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OpenMPI 1.2.x, I was able to simply run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpiexec -n 2 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on my Dual core machine without any problems. All MPI tasks  
</span><br>
<span class="quotelev1">&gt; inherited the environment of the calling shell, and no SSH was used  
</span><br>
<span class="quotelev1">&gt; whatsoever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, using OpenMPI 1.3.1, it seems to try to use ssh to start the  
</span><br>
<span class="quotelev1">&gt; processes, which on the one hand requires me to enter the password/ 
</span><br>
<span class="quotelev1">&gt; passphrase, and furthermore destroys the environment. This make it  
</span><br>
<span class="quotelev1">&gt; much less convenient to use OpenMPI on Multicore machines, compared  
</span><br>
<span class="quotelev1">&gt; to 1.2.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's the reason for this change in behavior? And is there a way to  
</span><br>
<span class="quotelev1">&gt; get back to the old behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Olaf
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
<li><strong>Next message:</strong> <a href="8547.php">Olaf Lenz: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8545.php">Olaf Lenz: "[OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>In reply to:</strong> <a href="8545.php">Olaf Lenz: "[OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8547.php">Olaf Lenz: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8547.php">Olaf Lenz: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
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
