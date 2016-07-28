<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 17:35:42 2014" -->
<!-- isoreceived="20140407213542" -->
<!-- sent="Mon, 7 Apr 2014 21:35:09 +0000" -->
<!-- isosent="20140407213509" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CB629B3_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5F067BDF-CBEA-46AA-83C2-9F4D75D89AFB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 17:35:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24098.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24096.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24096.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24098.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24098.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That worked!
<br>
<p>But still a mystery.
<br>
<p>I tried printing the environment immediately before mpirun.  Inside the Python wrapper, I do os.system('env') immediately before the subprocess.pOpen( ['mpirun', ..., shell=False ] ) command.  This returns SHELL=/bin/csh, and I can confirm that getpwuid, if it works, would also have returned /bin/csh, as that is my default shell.
<br>
<p>It is also interesting that it does not matter if the job-submission script is #!/bin/bash or #!/bin/tcsh (properly re-written, of course) -- I get the same errors either way. 
<br>
<p>So why did the launcher use a bash syntax on the remote host?  It does not seem to be behaving exactly as you described.
<br>
<p>But telling it to check the remote shell did the trick.
<br>
<p>Thanks
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Monday, April 07, 2014 4:12 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh
<br>
<p>I doubt that the rsh launcher is getting confused by the cmd you show below. However, if that command is embedded in a script that changes the shell away from your default shell, then yes - it might get confused. When the rsh launcher spawns your remote orted, it attempts to set some envars to ensure things are correctly setup (e.g., that the path is right). Thus, it needs to know what the remove shell is going to be.
<br>
<p>If given no other direction, it assumes that both the remote shell and your current shell are your default shell as reported by getpwuid (if available - otherwise, it falls back to the SHELL envar). If the remote shell can be something different, then you need to set the &quot;plm_rsh_assume_same_shell=0&quot; MCA param so it will check the remote shell.
<br>
<p><p>On Apr 7, 2014, at 1:53 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Noam, that makes sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I did mean to do &quot;. hello&quot; (with space in between).  That was an attempt to replicate whatever OpenMPI is doing.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the first post I mentioned that my mpirun command actually gets executed from within a Python script using the subprocess module.  I don't know the details of the rsh launcher, but there are 3 remote hosts in the hosts file, and 3 sets of the error messages below.  May be the rsh launcher is getting confused, doing something that is only valid under bash even though my default login environment is /bin/csh.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --machinefile mpihosts.914 -np 48 -x LD_LIBRARY_PATH --mca orte_rsh_agent /usr/bin/rsh  solver_openmpi  -i flow.inp &gt;&amp; output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % cat output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/.: Permission denied.
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX=/apps/local/test/openmpi: Command not found.
</span><br>
<span class="quotelev1">&gt; export: Command not found.
</span><br>
<span class="quotelev1">&gt; PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
</span><br>
<span class="quotelev1">&gt; export: Command not found.
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH: Undefined variable.
</span><br>
<span class="quotelev1">&gt; /bin/.: Permission denied.
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX=/apps/local/test/openmpi: Command not found.
</span><br>
<span class="quotelev1">&gt; export: Command not found.
</span><br>
<span class="quotelev1">&gt; PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
</span><br>
<span class="quotelev1">&gt; export: Command not found.
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH: Undefined variable.
</span><br>
<span class="quotelev1">&gt; /bin/.: Permission denied.
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX=/apps/local/test/openmpi: Command not found.
</span><br>
<span class="quotelev1">&gt; export: Command not found.
</span><br>
<span class="quotelev1">&gt; PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
</span><br>
<span class="quotelev1">&gt; export: Command not found.
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH: Undefined variable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Noam Bernstein
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 07, 2014 3:41 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2014, at 4:36 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess this is not OpenMPI related anymore.  I can repeat the essential problem interactively:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; % echo $SHELL
</span><br>
<span class="quotelev2">&gt;&gt; /bin/csh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; % echo $SHLVL
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; % cat hello
</span><br>
<span class="quotelev2">&gt;&gt; echo Hello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; % /bin/bash hello
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; % /bin/csh hello
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; %  . hello
</span><br>
<span class="quotelev2">&gt;&gt; /bin/.: Permission denied
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; . is a bash internal which evaluates the contents of the file in the current shell.  Since you're running csh, it's just looking for an executable named ., which does not exist (the csh analog of bash's . is source). /bin/. _is_ in your path, but it's a directory (namely /bin itself), which cannot be executed, hence the error. Perhaps you meant to do
</span><br>
<span class="quotelev1">&gt;   ./hello
</span><br>
<span class="quotelev1">&gt; which means (both in bash and csh) run the script hello in the current working directory (.), rather than looking for it in the list of directories in $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 											Noam
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
<li><strong>Next message:</strong> <a href="24098.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24096.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24096.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24098.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24098.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh"</a>
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
