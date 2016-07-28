<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 17:55:24 2014" -->
<!-- isoreceived="20140407215524" -->
<!-- sent="Mon, 7 Apr 2014 14:54:49 -0700" -->
<!-- isosent="20140407215449" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh" -->
<!-- id="3229CF17-31CF-498F-8FFD-63BE64E7839D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CB629B3_at_HDXDSP53.us.lmco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 17:54:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24097.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24097.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24093.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 7, 2014, at 2:35 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That worked!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But still a mystery.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried printing the environment immediately before mpirun.  Inside the Python wrapper, I do os.system('env') immediately before the subprocess.pOpen( ['mpirun', ..., shell=False ] ) command.  This returns SHELL=/bin/csh, and I can confirm that getpwuid, if it works, would also have returned /bin/csh, as that is my default shell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is also interesting that it does not matter if the job-submission script is #!/bin/bash or #!/bin/tcsh (properly re-written, of course) -- I get the same errors either way. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So why did the launcher use a bash syntax on the remote host?  It does not seem to be behaving exactly as you described.
</span><br>
<p>It is odd - my best guess is that something in the code incorrectly picks up on the local bash shell and uses it instead of csh. Perhaps getpwuid isn't on your system?
<br>
<p>Otherwise, I'll have to check as it is possible the configure logic is incorrectly defaulting to &quot;no getpwuid&quot;, which would result in us picking up your local shell as bash.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But telling it to check the remote shell did the trick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 07, 2014 4:12 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I doubt that the rsh launcher is getting confused by the cmd you show below. However, if that command is embedded in a script that changes the shell away from your default shell, then yes - it might get confused. When the rsh launcher spawns your remote orted, it attempts to set some envars to ensure things are correctly setup (e.g., that the path is right). Thus, it needs to know what the remove shell is going to be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If given no other direction, it assumes that both the remote shell and your current shell are your default shell as reported by getpwuid (if available - otherwise, it falls back to the SHELL envar). If the remote shell can be something different, then you need to set the &quot;plm_rsh_assume_same_shell=0&quot; MCA param so it will check the remote shell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2014, at 1:53 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Noam, that makes sense.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I did mean to do &quot;. hello&quot; (with space in between).  That was an attempt to replicate whatever OpenMPI is doing.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the first post I mentioned that my mpirun command actually gets executed from within a Python script using the subprocess module.  I don't know the details of the rsh launcher, but there are 3 remote hosts in the hosts file, and 3 sets of the error messages below.  May be the rsh launcher is getting confused, doing something that is only valid under bash even though my default login environment is /bin/csh.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --machinefile mpihosts.914 -np 48 -x LD_LIBRARY_PATH --mca orte_rsh_agent /usr/bin/rsh  solver_openmpi  -i flow.inp &gt;&amp; output
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; % cat output
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /bin/.: Permission denied.
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_PREFIX=/apps/local/test/openmpi: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; export: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; export: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH: Undefined variable.
</span><br>
<span class="quotelev2">&gt;&gt; /bin/.: Permission denied.
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_PREFIX=/apps/local/test/openmpi: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; export: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; export: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH: Undefined variable.
</span><br>
<span class="quotelev2">&gt;&gt; /bin/.: Permission denied.
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_PREFIX=/apps/local/test/openmpi: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; export: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; export: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH: Undefined variable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Noam Bernstein
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, April 07, 2014 3:41 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 7, 2014, at 4:36 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess this is not OpenMPI related anymore.  I can repeat the essential problem interactively:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % echo $SHELL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/csh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % echo $SHLVL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % cat hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % /bin/bash hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % /bin/csh hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; %  . hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/.: Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; . is a bash internal which evaluates the contents of the file in the current shell.  Since you're running csh, it's just looking for an executable named ., which does not exist (the csh analog of bash's . is source). /bin/. _is_ in your path, but it's a directory (namely /bin itself), which cannot be executed, hence the error. Perhaps you meant to do
</span><br>
<span class="quotelev2">&gt;&gt;  ./hello
</span><br>
<span class="quotelev2">&gt;&gt; which means (both in bash and csh) run the script hello in the current working directory (.), rather than looking for it in the list of directories in $PATH
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 											Noam
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="24099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24097.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24097.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when	launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24093.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
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
