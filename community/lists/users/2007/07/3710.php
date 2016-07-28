<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 11:49:44 2007" -->
<!-- isoreceived="20070718154944" -->
<!-- sent="Wed, 18 Jul 2007 11:49:35 -0400" -->
<!-- isosent="20070718154935" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="1184773775.3979.120.camel_at_doorstop.home.net" -->
<!-- inreplyto="469E2D15.20504_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-07-18 11:49:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3711.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3709.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3707.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3711.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3711.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3712.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As mentioned, I'm running in a chroot environment, so rsh and ssh won't
<br>
work: &quot;rsh localhost&quot; will rsh into the primary local host environment,
<br>
not the chroot, which will fail.
<br>
<p>[The purpose is to be able to build and test MPI programs in the Debian
<br>
unstable distribution, without upgrading the whole machine to unstable.
<br>
Though most machines I use for this purpose run Debian stable or
<br>
testing, the machine I'm currently using runs a very old Fedora, for
<br>
which I don't think OpenMPI is available.]
<br>
<p>With MPICH, mpirun -np 1 just runs the new process in the current
<br>
context, without rsh/ssh, so it works in a chroot.  Does OpenMPI not
<br>
support this functionality?
<br>
<p>Thanks,
<br>
Adam
<br>
<p>On Wed, 2007-07-18 at 11:09 -0400, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; This is strange. I assume that you what to use rsh or ssh to launch the 
</span><br>
<span class="quotelev1">&gt; processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want to use ssh, does &quot;which ssh&quot; find ssh? Similarly, if you 
</span><br>
<span class="quotelev1">&gt; want to use rsh, does &quot;which rsh&quot; find rsh?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adam C Powell IV wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2007-07-18 at 09:50 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Adam C Powell IV wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm running the Debian package of OpenMPI in a chroot (with /proc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mounted properly), and orte_init is failing as follows:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What could be wrong?  Does orterun not run in a chroot environment?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What more can I do to investigate further?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Try running mpirun with the added options:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -mca orte_debug 1 -mca pls_base_verbose 20
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Then send the output to the list.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!  Here's the output:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ orterun -mca orte_debug 1 -mca pls_base_verbose 20 -np 1 uptime
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: Looking for pls components
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: distilling pls components
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: accepting all pls components
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: opening pls components
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: found loaded component gridengine[new-host-3:19201] mca: base: components_open: component gridengine open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: found loaded component proxy
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: component proxy open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] orte:base:select: querying component gridengine
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] pls:gridengine: NOT available for selection
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] orte:base:select: querying component proxy
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] orte:base:select: querying component rsh
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] orte:base:select: querying component slurm
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init_stage1.c at line 312
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   orte_pls_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev2">&gt; &gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 52
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev2">&gt; &gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Adam
</span><br>
<p><pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Welcome to the best software in the world today cafe!
<a href="http://www.take6.com/albums/greatesthits.html">http://www.take6.com/albums/greatesthits.html</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3711.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3709.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3707.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3711.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3711.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3712.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
