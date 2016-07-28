<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 13:44:50 2007" -->
<!-- isoreceived="20070718174450" -->
<!-- sent="Wed, 18 Jul 2007 13:44:48 -0400" -->
<!-- isosent="20070718174448" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="469E5190.6080805_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1184773775.3979.120.camel_at_doorstop.home.net" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 13:44:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3713.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3711.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3714.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3714.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3717.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adam C Powell IV wrote:
<br>
<span class="quotelev1">&gt; As mentioned, I'm running in a chroot environment, so rsh and ssh won't
</span><br>
<span class="quotelev1">&gt; work: &quot;rsh localhost&quot; will rsh into the primary local host environment,
</span><br>
<span class="quotelev1">&gt; not the chroot, which will fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [The purpose is to be able to build and test MPI programs in the Debian
</span><br>
<span class="quotelev1">&gt; unstable distribution, without upgrading the whole machine to unstable.
</span><br>
<span class="quotelev1">&gt; Though most machines I use for this purpose run Debian stable or
</span><br>
<span class="quotelev1">&gt; testing, the machine I'm currently using runs a very old Fedora, for
</span><br>
<span class="quotelev1">&gt; which I don't think OpenMPI is available.]
</span><br>
<p>Allright, I understand what you are trying to do now. To be honest, I 
<br>
don't think we have ever really thought about this use case. We always 
<br>
figured that to test Open MPI people would simply install it in a 
<br>
different directory and use it from there.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With MPICH, mpirun -np 1 just runs the new process in the current
</span><br>
<span class="quotelev1">&gt; context, without rsh/ssh, so it works in a chroot.  Does OpenMPI not
</span><br>
<span class="quotelev1">&gt; support this functionality?
</span><br>
<p>Open MPI does support this functionality. First, a bit of explanation:
<br>
<p>We use 'pls' (process launching system) components to handling the 
<br>
launching of processes. There are components for slurm, gridengine, rsh, 
<br>
and others. At runtime we open each of these components and query them 
<br>
as to whether they can be used. The original error you posted says that 
<br>
none of the 'pls' components can be used because all of they detected 
<br>
they could not run in your setup. The slurm one excluded itself because 
<br>
there were no environment variables set indicating it is running under 
<br>
SLURM. Similarly, the gridengine pls said it cannot run as well. The 
<br>
'rsh' pls said it cannot run because neither 'ssh' nor 'rsh' are 
<br>
available (I assume this is the case, though you did not explicitly say 
<br>
they were not available).
<br>
<p>But in this case, you do want the 'rsh' pls to be used. It will 
<br>
automatically fork any local processes, and will user rsh/ssh to launch 
<br>
any remote processes. Again, I don't think we ever imagined the use case 
<br>
&nbsp;&nbsp;on a UNIX-like system where there are no launchers like SLURM 
<br>
available, and rsh/ssh also wasn't available (Open MPI is, after all, 
<br>
primarily concerned with multi-node operation).
<br>
<p>So, there are several ways around this:
<br>
<p>1. Make rsh or ssh available, even though they will not be used.
<br>
<p>2. Tell the 'rsh' pls component to use a dummy program such as 
<br>
/bin/false by adding the following to the command line:
<br>
-mca pls_rsh_agent /bin/false
<br>
<p>3. Create a dummy 'rsh' executable that is available in your path.
<br>
<p>For instance:
<br>
<p>[tprins_at_odin ~]$ which ssh
<br>
/usr/bin/which: no ssh in 
<br>
(/u/tprins/usr/ompia/bin:/u/tprins/usr/bin:/usr/local/bin:/bin:/usr/X11R6/bin)
<br>
[tprins_at_odin ~]$ which rsh
<br>
/usr/bin/which: no rsh in 
<br>
(/u/tprins/usr/ompia/bin:/u/tprins/usr/bin:/usr/local/bin:/bin:/usr/X11R6/bin)
<br>
[tprins_at_odin ~]$ mpirun -np 1  hostname
<br>
[odin.cs.indiana.edu:18913] [0,0,0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init_stage1.c at line 317
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_pls_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[odin.cs.indiana.edu:18913] [0,0,0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_system_init.c at line 46
<br>
[odin.cs.indiana.edu:18913] [0,0,0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init.c at line 52
<br>
[odin.cs.indiana.edu:18913] [0,0,0] ORTE_ERROR_LOG: Error in file 
<br>
orterun.c at line 399
<br>
<p>[tprins_at_odin ~]$ mpirun -np 1 -mca pls_rsh_agent /bin/false  hostname
<br>
odin.cs.indiana.edu
<br>
<p>[tprins_at_odin ~]$ touch usr/bin/rsh
<br>
[tprins_at_odin ~]$ chmod +x usr/bin/rsh
<br>
[tprins_at_odin ~]$ mpirun -np 1  hostname
<br>
odin.cs.indiana.edu
<br>
[tprins_at_odin ~]$
<br>
<p><p>I hope this helps,
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Adam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 2007-07-18 at 11:09 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is strange. I assume that you what to use rsh or ssh to launch the 
</span><br>
<span class="quotelev2">&gt;&gt; processes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want to use ssh, does &quot;which ssh&quot; find ssh? Similarly, if you 
</span><br>
<span class="quotelev2">&gt;&gt; want to use rsh, does &quot;which rsh&quot; find rsh?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Adam C Powell IV wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 2007-07-18 at 09:50 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Adam C Powell IV wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm running the Debian package of OpenMPI in a chroot (with /proc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mounted properly), and orte_init is failing as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What could be wrong?  Does orterun not run in a chroot environment?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What more can I do to investigate further?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Try running mpirun with the added options:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca orte_debug 1 -mca pls_base_verbose 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then send the output to the list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!  Here's the output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ orterun -mca orte_debug 1 -mca pls_base_verbose 20 -np 1 uptime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: Looking for pls components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: distilling pls components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: accepting all pls components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: opening pls components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component gridengine[new-host-3:19201] mca: base: components_open: component gridengine open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component proxy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: component proxy open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] orte:base:select: querying component gridengine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] pls:gridengine: NOT available for selection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] orte:base:select: querying component proxy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] orte:base:select: querying component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] orte:base:select: querying component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init_stage1.c at line 312
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   orte_pls_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 52
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Adam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3713.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3711.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3714.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3714.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3717.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
