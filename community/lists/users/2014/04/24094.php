<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 16:45:50 2014" -->
<!-- isoreceived="20140407204550" -->
<!-- sent="Mon, 7 Apr 2014 16:45:49 -0400" -->
<!-- isosent="20140407204549" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh" -->
<!-- id="CAB2ovovaqrRCninJktQcZN2HHqQ1AsDSknTaAzLgkWj6VVeXag_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CB62946_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh<br>
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 16:45:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24095.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24093.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24090.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The permission denied looks like it is being issued against
<br>
<p>'/bin/.'
<br>
<p>What do you get if you grep your own username from /etc/passwd?  That is,
<br>
<p>% grep Edwin /etc/passwd
<br>
<p>If your shell is listed as /bin/csh, then you need to use csh's
<br>
syntax, which would be
<br>
<p>% source hello
<br>
<p>(which will also work from bash).  The dot command is specific to
<br>
sh/bash, and csh sees it as you trying to run /bin/., which is the
<br>
same as tying any directory name as a command.
<br>
<p>[roo]$ csh
<br>
[roo]% /bin/.
<br>
/bin/.: Permission denied.
<br>
[roo]% . foo.txt
<br>
/bin/.: Permission denied.
<br>
[roo]% /bin
<br>
/bin: Permission denied.
<br>
<p>Try specifically invoking bash, then try it
<br>
<p>% bash
<br>
$ . hello
<br>
<p><p><p><p>On Mon, Apr 7, 2014 at 4:36 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I guess this is not OpenMPI related anymore.  I can repeat the essential problem interactively:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % echo $SHELL
</span><br>
<span class="quotelev1">&gt; /bin/csh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % echo $SHLVL
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat hello
</span><br>
<span class="quotelev1">&gt; echo Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % /bin/bash hello
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % /bin/csh hello
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %  . hello
</span><br>
<span class="quotelev1">&gt; /bin/.: Permission denied
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I need to hope the administrator can fix it.  Sorry for the bother...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 07, 2014 3:27 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 07.04.2014 um 22:04 schrieb Blosch, Edwin L:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am submitting a job for execution under SGE.  My default shell is /bin/csh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where - in SGE or on the interactive command line you get?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The script that is submitted has #!/bin/bash at the top.  The script runs on the 1st node allocated to the job.  The script runs a Python wrapper that ultimately issues the following mpirun command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /apps/local/test/openmpi/bin/mpirun --machinefile mpihosts.914 -np 48 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 --mca btl ^tcp --mca shmem_mmap_relocate_backing_file -1 --bind-to-core --bycore --mca orte_rsh_agent /usr/bin/rsh --mca plm_rsh_disable_qrsh 1 /apps/local/test/solver/bin/solver_openmpi -cycles 50 -ri restart.0 -i flow.inp &gt;&amp; output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just so there's no confusion, OpenMPI is built without support for SGE.  It should be using rsh to launch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are 4 nodes involved (each 12 cores, 48 processes total).  In the output file, I see 3 sets of messages as shown below.  I assume I am seeing 1 set of messages for each of the 3 remote nodes where processes need to be launched:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /bin/.: Permission denied.
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_PREFIX=/apps/local/falcon2014/openmpi: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; export: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; export: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH: Undefined variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks really like csh is trying to interpret bash commands. In case SGE's queue is set up to have &quot;shell_start_mode posix_compliant&quot; set, the first line of the script is not treated in a special way. You can change the shell only by &quot;-S /bin/bash&quot; then (or redefine the queue to have &quot;shell_start_mode unix_behavior&quot; set and get the expected behavior when starting a script [side effect: the shell is not started as login shell any longer. See also `man sge_conf` =&gt; &quot;login_shells&quot; for details]).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: you don't want a tight integration by intention?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  These look like errors you get when csh is trying to parse commands intended for bash.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know what may be going on here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="24095.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24093.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24090.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
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
