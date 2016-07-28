<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 16:54:42 2014" -->
<!-- isoreceived="20140407205442" -->
<!-- sent="Mon, 7 Apr 2014 20:53:51 +0000" -->
<!-- isosent="20140407205351" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CB62975_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="660CF19E-D85E-4DA8-952A-2D909F35E0FC_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 16:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24096.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24094.php">Bennet Fauber: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24091.php">Noam Bernstein: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24096.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24096.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Noam, that makes sense.
<br>
<p>Yes, I did mean to do &quot;. hello&quot; (with space in between).  That was an attempt to replicate whatever OpenMPI is doing.  
<br>
<p>In the first post I mentioned that my mpirun command actually gets executed from within a Python script using the subprocess module.  I don't know the details of the rsh launcher, but there are 3 remote hosts in the hosts file, and 3 sets of the error messages below.  May be the rsh launcher is getting confused, doing something that is only valid under bash even though my default login environment is /bin/csh.  
<br>
<p>mpirun --machinefile mpihosts.914 -np 48 -x LD_LIBRARY_PATH --mca orte_rsh_agent /usr/bin/rsh  solver_openmpi  -i flow.inp &gt;&amp; output
<br>
<p>% cat output
<br>
<p>/bin/.: Permission denied.
<br>
OPAL_PREFIX=/apps/local/test/openmpi: Command not found.
<br>
export: Command not found.
<br>
PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
<br>
export: Command not found.
<br>
LD_LIBRARY_PATH: Undefined variable.
<br>
/bin/.: Permission denied.
<br>
OPAL_PREFIX=/apps/local/test/openmpi: Command not found.
<br>
export: Command not found.
<br>
PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
<br>
export: Command not found.
<br>
LD_LIBRARY_PATH: Undefined variable.
<br>
/bin/.: Permission denied.
<br>
OPAL_PREFIX=/apps/local/test/openmpi: Command not found.
<br>
export: Command not found.
<br>
PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
<br>
export: Command not found.
<br>
LD_LIBRARY_PATH: Undefined variable.
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Noam Bernstein
<br>
Sent: Monday, April 07, 2014 3:41 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh
<br>
<p><p>On Apr 7, 2014, at 4:36 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I guess this is not OpenMPI related anymore.  I can repeat the essential problem interactively:
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
<p>. is a bash internal which evaluates the contents of the file in the current shell.  Since you're running csh, it's just looking for an executable named ., which does not exist (the csh analog of bash's . is source). /bin/. _is_ in your path, but it's a directory (namely /bin itself), which cannot be executed, hence the error. Perhaps you meant to do
<br>
&nbsp;&nbsp;&nbsp;./hello
<br>
which means (both in bash and csh) run the script hello in the current working directory (.), rather than looking for it in the list of directories in $PATH
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
_______________________________________________
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
<li><strong>Next message:</strong> <a href="24096.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24094.php">Bennet Fauber: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24091.php">Noam Bernstein: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24096.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24096.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching	jobs with	OpenMPI 1.6.5 rsh"</a>
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
