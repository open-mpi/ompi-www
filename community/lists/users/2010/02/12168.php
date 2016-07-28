<?
$subject_val = "Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 09:26:45 2010" -->
<!-- isoreceived="20100226142645" -->
<!-- sent="Fri, 26 Feb 2010 15:26:04 +0100" -->
<!-- isosent="20100226142604" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed." -->
<!-- id="748ED376-C680-4968-A89A-982C36BC00EC_at_staff.uni-marburg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="17be05571002260601x6681073i7fde8faea7070958_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed.<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 09:26:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12169.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12167.php">Tobias M&#195;&#188;ller: "[OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<li><strong>In reply to:</strong> <a href="12167.php">Tobias M&#195;&#188;ller: "[OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 26.02.2010 um 15:01 schrieb Tobias M&#252;ller:
<br>
<p><span class="quotelev1">&gt; I hope this list is the right place for my problem concerning OpenMPI
</span><br>
<span class="quotelev1">&gt; with Sun Gridengine. I'm running OpenMPI with gridengine support:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt; MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on 4 Debian Lenny system with Sun Gridengine 6.2. I've written a small
</span><br>
<p>which update version of SGE?
<br>
<p><span class="quotelev1">&gt; test program which only displays the hostname of each MPI process its
</span><br>
<span class="quotelev1">&gt; running on and start this via a simple script with a submit by qsub:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt; ### number of processors and parallel environment
</span><br>
<span class="quotelev1">&gt; #$ -pe sol 32
</span><br>
<span class="quotelev1">&gt; ### Job name
</span><br>
<span class="quotelev1">&gt; #$ -N &quot;mpi_test&quot;
</span><br>
<span class="quotelev1">&gt; ### Start from current working directory
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -l arch=lx26-amd64
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpirun.openmpi --mca pls_gridengine_verbose 1 -v ~/grid/ 
</span><br>
<span class="quotelev1">&gt; mpi_test/main
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The gridengine starts the jobs, but fails with Host key verification
</span><br>
<span class="quotelev1">&gt; failed. in the logfiles:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; local configuration sol2.XXX not defined - using global configuration
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;sol2.XXX&quot;
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;sol3.XXX&quot;
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;sol4.XXX&quot;
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;sol1.XXX&quot;
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.sol2&quot;
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.sol4&quot;
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.sol1&quot;
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.sol3&quot;
</span><br>
<span class="quotelev1">&gt; Establishing /usr/bin/ssh session to host sol2.XXX ...
</span><br>
<span class="quotelev1">&gt; Host key verification failed.
</span><br>
<span class="quotelev1">&gt; /usr/bin/ssh exited with exit code 255
</span><br>
<span class="quotelev1">&gt; reading exit code from shepherd ... 129
</span><br>
<span class="quotelev1">&gt; [sol2:22892] ERROR: A daemon on node sol2.XXX failed to start as  
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; [sol2:22892] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [sol2:22892] ERROR: the 'qstat -t' command on the Grid Engine tasks.
</span><br>
<span class="quotelev1">&gt; [sol2:22892] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev1">&gt; [sol2:22892] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [sol2:22892] ERROR: The daemon exited unexpectedly with status 129.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The host keys for all 4 solX hosts are in the known_hosts file of the
</span><br>
<span class="quotelev1">&gt; user submitting the job and of the known_hosts file of root.
</span><br>
<p>You setup SGE to use SSH as remote startup method and it's working  
<br>
otherwise for qrsh and qrsh with command? Can you try to the - 
<br>
builtin- method as an alternative?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Any hints why this could go wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;   Tobias
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
<li><strong>Next message:</strong> <a href="12169.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12167.php">Tobias M&#195;&#188;ller: "[OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<li><strong>In reply to:</strong> <a href="12167.php">Tobias M&#195;&#188;ller: "[OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
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
