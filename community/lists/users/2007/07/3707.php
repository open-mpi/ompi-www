<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 11:09:10 2007" -->
<!-- isoreceived="20070718150910" -->
<!-- sent="Wed, 18 Jul 2007 11:09:09 -0400" -->
<!-- isosent="20070718150909" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="469E2D15.20504_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1184770259.3979.113.camel_at_doorstop.home.net" -->
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
<strong>Date:</strong> 2007-07-18 11:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3708.php">Javier Fernández: "[OMPI users] Octave MPITB for Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="3706.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3706.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is strange. I assume that you what to use rsh or ssh to launch the 
<br>
processes?
<br>
<p>If you want to use ssh, does &quot;which ssh&quot; find ssh? Similarly, if you 
<br>
want to use rsh, does &quot;which rsh&quot; find rsh?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Adam C Powell IV wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2007-07-18 at 09:50 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Adam C Powell IV wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running the Debian package of OpenMPI in a chroot (with /proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mounted properly), and orte_init is failing as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What could be wrong?  Does orterun not run in a chroot environment?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What more can I do to investigate further?
</span><br>
<span class="quotelev2">&gt;&gt; Try running mpirun with the added options:
</span><br>
<span class="quotelev2">&gt;&gt; -mca orte_debug 1 -mca pls_base_verbose 20
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then send the output to the list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!  Here's the output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ orterun -mca orte_debug 1 -mca pls_base_verbose 20 -np 1 uptime
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: Looking for pls components
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: distilling pls components
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: accepting all pls components
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: opening pls components
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: found loaded component gridengine[new-host-3:19201] mca: base: components_open: component gridengine open function successful
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: found loaded component proxy
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: component proxy open function successful
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] orte:base:select: querying component gridengine
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] pls:gridengine: NOT available for selection
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] orte:base:select: querying component proxy
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] orte:base:select: querying component rsh
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] orte:base:select: querying component slurm
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init_stage1.c at line 312
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
<span class="quotelev1">&gt;   orte_pls_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 52
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev1">&gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3708.php">Javier Fernández: "[OMPI users] Octave MPITB for Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="3706.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3706.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
