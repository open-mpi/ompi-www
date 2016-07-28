<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 16:36:46 2014" -->
<!-- isoreceived="20140407203646" -->
<!-- sent="Mon, 7 Apr 2014 20:36:14 +0000" -->
<!-- isosent="20140407203614" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CB62946_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="138605BC-EC44-4E70-85E5-0A643E0A1A4F_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 16:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24091.php">Noam Bernstein: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24089.php">Reuti: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24089.php">Reuti: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24091.php">Noam Bernstein: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24091.php">Noam Bernstein: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24093.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24094.php">Bennet Fauber: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess this is not OpenMPI related anymore.  I can repeat the essential problem interactively:
<br>
<p>% echo $SHELL
<br>
/bin/csh
<br>
<p>% echo $SHLVL
<br>
1
<br>
<p>% cat hello
<br>
echo Hello
<br>
<p>% /bin/bash hello
<br>
Hello
<br>
<p>% /bin/csh hello
<br>
Hello
<br>
<p>%  . hello
<br>
/bin/.: Permission denied
<br>
<p>I think I need to hope the administrator can fix it.  Sorry for the bother...
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
<br>
Sent: Monday, April 07, 2014 3:27 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh
<br>
<p>Am 07.04.2014 um 22:04 schrieb Blosch, Edwin L:
<br>
<p><span class="quotelev1">&gt; I am submitting a job for execution under SGE.  My default shell is /bin/csh.
</span><br>
<p>Where - in SGE or on the interactive command line you get?
<br>
<p><p><span class="quotelev1">&gt;  The script that is submitted has #!/bin/bash at the top.  The script runs on the 1st node allocated to the job.  The script runs a Python wrapper that ultimately issues the following mpirun command:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /apps/local/test/openmpi/bin/mpirun --machinefile mpihosts.914 -np 48 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 --mca btl ^tcp --mca shmem_mmap_relocate_backing_file -1 --bind-to-core --bycore --mca orte_rsh_agent /usr/bin/rsh --mca plm_rsh_disable_qrsh 1 /apps/local/test/solver/bin/solver_openmpi -cycles 50 -ri restart.0 -i flow.inp &gt;&amp; output
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Just so there's no confusion, OpenMPI is built without support for SGE.  It should be using rsh to launch.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; There are 4 nodes involved (each 12 cores, 48 processes total).  In the output file, I see 3 sets of messages as shown below.  I assume I am seeing 1 set of messages for each of the 3 remote nodes where processes need to be launched:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /bin/.: Permission denied.
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX=/apps/local/falcon2014/openmpi: Command not found.
</span><br>
<span class="quotelev1">&gt; export: Command not found.
</span><br>
<span class="quotelev1">&gt; PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
</span><br>
<span class="quotelev1">&gt; export: Command not found.
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH: Undefined variable.
</span><br>
<p>This looks really like csh is trying to interpret bash commands. In case SGE's queue is set up to have &quot;shell_start_mode posix_compliant&quot; set, the first line of the script is not treated in a special way. You can change the shell only by &quot;-S /bin/bash&quot; then (or redefine the queue to have &quot;shell_start_mode unix_behavior&quot; set and get the expected behavior when starting a script [side effect: the shell is not started as login shell any longer. See also `man sge_conf` =&gt; &quot;login_shells&quot; for details]).
<br>
<p>BTW: you don't want a tight integration by intention?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;  These look like errors you get when csh is trying to parse commands intended for bash. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Does anyone know what may be going on here?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24091.php">Noam Bernstein: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24089.php">Reuti: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24089.php">Reuti: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24091.php">Noam Bernstein: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24091.php">Noam Bernstein: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24093.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24094.php">Bennet Fauber: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
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
