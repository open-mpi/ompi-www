<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 13:59:21 2007" -->
<!-- isoreceived="20070718175921" -->
<!-- sent="Wed, 18 Jul 2007 11:59:11 -0600" -->
<!-- isosent="20070718175911" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="C2C3B10F.A0B6%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 13:59:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3715.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3713.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3712.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3717.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim has proposed a clever fix that I had not thought of - just be aware that
<br>
it could cause unexpected behavior at some point. Still, for what you are
<br>
trying to do, that might meet your needs.
<br>
<p>Ralph
<br>
<p><p>On 7/18/07 11:44 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Adam C Powell IV wrote:
</span><br>
<span class="quotelev2">&gt;&gt; As mentioned, I'm running in a chroot environment, so rsh and ssh won't
</span><br>
<span class="quotelev2">&gt;&gt; work: &quot;rsh localhost&quot; will rsh into the primary local host environment,
</span><br>
<span class="quotelev2">&gt;&gt; not the chroot, which will fail.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [The purpose is to be able to build and test MPI programs in the Debian
</span><br>
<span class="quotelev2">&gt;&gt; unstable distribution, without upgrading the whole machine to unstable.
</span><br>
<span class="quotelev2">&gt;&gt; Though most machines I use for this purpose run Debian stable or
</span><br>
<span class="quotelev2">&gt;&gt; testing, the machine I'm currently using runs a very old Fedora, for
</span><br>
<span class="quotelev2">&gt;&gt; which I don't think OpenMPI is available.]
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With MPICH, mpirun -np 1 just runs the new process in the current
</span><br>
<span class="quotelev2">&gt;&gt; context, without rsh/ssh, so it works in a chroot.  Does OpenMPI not
</span><br>
<span class="quotelev2">&gt;&gt; support this functionality?
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Adam
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 2007-07-18 at 11:09 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is strange. I assume that you what to use rsh or ssh to launch the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you want to use ssh, does &quot;which ssh&quot; find ssh? Similarly, if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to use rsh, does &quot;which rsh&quot; find rsh?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Adam C Powell IV wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, 2007-07-18 at 09:50 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Adam C Powell IV wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm running the Debian package of OpenMPI in a chroot (with /proc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mounted properly), and orte_init is failing as follows:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What could be wrong?  Does orterun not run in a chroot environment?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What more can I do to investigate further?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try running mpirun with the added options:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca orte_debug 1 -mca pls_base_verbose 20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then send the output to the list.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!  Here's the output:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ orterun -mca orte_debug 1 -mca pls_base_verbose 20 -np 1 uptime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: Looking for pls components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: distilling pls components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: accepting all pls components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: opening pls components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gridengine[new-host-3:19201] mca: base: components_open: component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gridengine open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component proxy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: component proxy open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: component rsh open function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: component slurm open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] orte:base:select: querying component gridengine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] pls:gridengine: NOT available for selection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] orte:base:select: querying component proxy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] orte:base:select: querying component rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] orte:base:select: querying component slurm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runtime/orte_init_stage1.c at line 312
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   orte_pls_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runtime/orte_init.c at line 52
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Adam
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="3715.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3713.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3712.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3717.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
