<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 13:40:10 2007" -->
<!-- isoreceived="20070718174010" -->
<!-- sent="Wed, 18 Jul 2007 11:40:02 -0600" -->
<!-- isosent="20070718174002" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="C2C3AC92.A0B1%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 13:40:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3712.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3712.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/18/07 9:49 AM, &quot;Adam C Powell IV&quot; &lt;hazelsct_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As mentioned, I'm running in a chroot environment, so rsh and ssh won't
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With MPICH, mpirun -np 1 just runs the new process in the current
</span><br>
<span class="quotelev1">&gt; context, without rsh/ssh, so it works in a chroot.  Does OpenMPI not
</span><br>
<span class="quotelev1">&gt; support this functionality?
</span><br>
<p>Yes - and no. OpenMPI will launch on a local node without using rsh/ssh.
<br>
However, and it is a big however, our init code requires that we still
<br>
identify a working launcher that could be used to launch on remote nodes.
<br>
Frankly, we never considered the case you describe.
<br>
<p>We could (and perhaps should) modify the code to allow it to continue even
<br>
if it doesn't find a viable launcher. I believe our initial thinking was
<br>
that something that launched only on the local node wasn't much use to MPI
<br>
and therefore that scenario probably represents an error condition.
<br>
<p>We'll discuss it and see what we think should be done. Meantime, the answer
<br>
would have to be &quot;no, we don't support that&quot;
<br>
<p>Ralph
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
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gridengine[new-host-3:19201] mca: base: components_open: component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gridengine open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component proxy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: component proxy open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: component rsh open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] mca: base: components_open: component slurm open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successful
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
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime/orte_init_stage1.c at line 312
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
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at line 52
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3712.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3712.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
