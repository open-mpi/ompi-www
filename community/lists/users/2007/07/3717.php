<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 14:27:39 2007" -->
<!-- isoreceived="20070718182739" -->
<!-- sent="Wed, 18 Jul 2007 14:27:19 -0400" -->
<!-- isosent="20070718182719" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="1184783239.3979.131.camel_at_doorstop.home.net" -->
<!-- inreplyto="469E5190.6080805_at_open-mpi.org" -->
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
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 14:27:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3718.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3716.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3712.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-07-18 at 13:44 -0400, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Adam C Powell IV wrote:
</span><br>
<span class="quotelev2">&gt; &gt; As mentioned, I'm running in a chroot environment, so rsh and ssh won't
</span><br>
<span class="quotelev2">&gt; &gt; work: &quot;rsh localhost&quot; will rsh into the primary local host environment,
</span><br>
<span class="quotelev2">&gt; &gt; not the chroot, which will fail.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [The purpose is to be able to build and test MPI programs in the Debian
</span><br>
<span class="quotelev2">&gt; &gt; unstable distribution, without upgrading the whole machine to unstable.
</span><br>
<span class="quotelev2">&gt; &gt; Though most machines I use for this purpose run Debian stable or
</span><br>
<span class="quotelev2">&gt; &gt; testing, the machine I'm currently using runs a very old Fedora, for
</span><br>
<span class="quotelev2">&gt; &gt; which I don't think OpenMPI is available.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Allright, I understand what you are trying to do now. To be honest, I 
</span><br>
<span class="quotelev1">&gt; don't think we have ever really thought about this use case. We always 
</span><br>
<span class="quotelev1">&gt; figured that to test Open MPI people would simply install it in a 
</span><br>
<span class="quotelev1">&gt; different directory and use it from there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With MPICH, mpirun -np 1 just runs the new process in the current
</span><br>
<span class="quotelev2">&gt; &gt; context, without rsh/ssh, so it works in a chroot.  Does OpenMPI not
</span><br>
<span class="quotelev2">&gt; &gt; support this functionality?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI does support this functionality. First, a bit of explanation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use 'pls' (process launching system) components to handling the 
</span><br>
<span class="quotelev1">&gt; launching of processes. There are components for slurm, gridengine, rsh, 
</span><br>
<span class="quotelev1">&gt; and others. At runtime we open each of these components and query them 
</span><br>
<span class="quotelev1">&gt; as to whether they can be used. The original error you posted says that 
</span><br>
<span class="quotelev1">&gt; none of the 'pls' components can be used because all of they detected 
</span><br>
<span class="quotelev1">&gt; they could not run in your setup. The slurm one excluded itself because 
</span><br>
<span class="quotelev1">&gt; there were no environment variables set indicating it is running under 
</span><br>
<span class="quotelev1">&gt; SLURM. Similarly, the gridengine pls said it cannot run as well. The 
</span><br>
<span class="quotelev1">&gt; 'rsh' pls said it cannot run because neither 'ssh' nor 'rsh' are 
</span><br>
<span class="quotelev1">&gt; available (I assume this is the case, though you did not explicitly say 
</span><br>
<span class="quotelev1">&gt; they were not available).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But in this case, you do want the 'rsh' pls to be used. It will 
</span><br>
<span class="quotelev1">&gt; automatically fork any local processes, and will user rsh/ssh to launch 
</span><br>
<span class="quotelev1">&gt; any remote processes. Again, I don't think we ever imagined the use case 
</span><br>
<span class="quotelev1">&gt;   on a UNIX-like system where there are no launchers like SLURM 
</span><br>
<span class="quotelev1">&gt; available, and rsh/ssh also wasn't available (Open MPI is, after all, 
</span><br>
<span class="quotelev1">&gt; primarily concerned with multi-node operation).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, there are several ways around this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Make rsh or ssh available, even though they will not be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Tell the 'rsh' pls component to use a dummy program such as 
</span><br>
<span class="quotelev1">&gt; /bin/false by adding the following to the command line:
</span><br>
<span class="quotelev1">&gt; -mca pls_rsh_agent /bin/false
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Create a dummy 'rsh' executable that is available in your path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For instance:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ which ssh
</span><br>
<span class="quotelev1">&gt; /usr/bin/which: no ssh in 
</span><br>
<span class="quotelev1">&gt; (/u/tprins/usr/ompia/bin:/u/tprins/usr/bin:/usr/local/bin:/bin:/usr/X11R6/bin)
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ which rsh
</span><br>
<span class="quotelev1">&gt; /usr/bin/which: no rsh in 
</span><br>
<span class="quotelev1">&gt; (/u/tprins/usr/ompia/bin:/u/tprins/usr/bin:/usr/local/bin:/bin:/usr/X11R6/bin)
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ mpirun -np 1  hostname
</span><br>
<span class="quotelev1">&gt; [odin.cs.indiana.edu:18913] [0,0,0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 317
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    orte_pls_base_select failed
</span><br>
<span class="quotelev1">&gt;    --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [odin.cs.indiana.edu:18913] [0,0,0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; runtime/orte_system_init.c at line 46
</span><br>
<span class="quotelev1">&gt; [odin.cs.indiana.edu:18913] [0,0,0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 52
</span><br>
<span class="quotelev1">&gt; [odin.cs.indiana.edu:18913] [0,0,0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; orterun.c at line 399
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ mpirun -np 1 -mca pls_rsh_agent /bin/false  hostname
</span><br>
<span class="quotelev1">&gt; odin.cs.indiana.edu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ touch usr/bin/rsh
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ chmod +x usr/bin/rsh
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ mpirun -np 1  hostname
</span><br>
<span class="quotelev1">&gt; odin.cs.indiana.edu
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<p>Yes, this helps tremendously.  I installed rsh, and now it pretty much
<br>
works.
<br>
<p>The one missing detail is that I can't seem to get the stdout/stderr
<br>
output.  For example:
<br>
<p>$ orterun -np 1 uptime
<br>
$ uptime
<br>
18:24:27 up 13 days,  3:03,  0 users,  load average: 0.00, 0.03, 0.00
<br>
<p>The man page indicates that stdout/stderr is supposed to come back to
<br>
the stdout/stderr of the orterun process.  Any ideas on why this isn't
<br>
working?
<br>
<p>Thank you again!
<br>
<p>-Adam
<br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Welcome to the best software in the world today cafe!
<a href="http://www.take6.com/albums/greatesthits.html">http://www.take6.com/albums/greatesthits.html</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3718.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3716.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3712.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
