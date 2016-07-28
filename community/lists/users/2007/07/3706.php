<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 10:51:17 2007" -->
<!-- isoreceived="20070718145117" -->
<!-- sent="Wed, 18 Jul 2007 10:50:59 -0400" -->
<!-- isosent="20070718145059" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="1184770259.3979.113.camel_at_doorstop.home.net" -->
<!-- inreplyto="469E1AB0.3060705_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-07-18 10:50:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3707.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3705.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3705.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3707.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3707.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-07-18 at 09:50 -0400, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Adam C Powell IV wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Greetings,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm running the Debian package of OpenMPI in a chroot (with /proc
</span><br>
<span class="quotelev2">&gt; &gt; mounted properly), and orte_init is failing as follows:
</span><br>
<span class="quotelev2">&gt; &gt; [snip]
</span><br>
<span class="quotelev2">&gt; &gt; What could be wrong?  Does orterun not run in a chroot environment?
</span><br>
<span class="quotelev2">&gt; &gt; What more can I do to investigate further?
</span><br>
<span class="quotelev1">&gt; Try running mpirun with the added options:
</span><br>
<span class="quotelev1">&gt; -mca orte_debug 1 -mca pls_base_verbose 20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then send the output to the list.
</span><br>
<p>Thanks!  Here's the output:
<br>
<p>$ orterun -mca orte_debug 1 -mca pls_base_verbose 20 -np 1 uptime
<br>
[new-host-3:19201] mca: base: components_open: Looking for pls components
<br>
[new-host-3:19201] mca: base: components_open: distilling pls components
<br>
[new-host-3:19201] mca: base: components_open: accepting all pls components
<br>
[new-host-3:19201] mca: base: components_open: opening pls components
<br>
[new-host-3:19201] mca: base: components_open: found loaded component gridengine[new-host-3:19201] mca: base: components_open: component gridengine open function successful
<br>
[new-host-3:19201] mca: base: components_open: found loaded component proxy
<br>
[new-host-3:19201] mca: base: components_open: component proxy open function successful
<br>
[new-host-3:19201] mca: base: components_open: found loaded component rsh
<br>
[new-host-3:19201] mca: base: components_open: component rsh open function successful
<br>
[new-host-3:19201] mca: base: components_open: found loaded component slurm
<br>
[new-host-3:19201] mca: base: components_open: component slurm open function successful
<br>
[new-host-3:19201] orte:base:select: querying component gridengine
<br>
[new-host-3:19201] pls:gridengine: NOT available for selection
<br>
[new-host-3:19201] orte:base:select: querying component proxy
<br>
[new-host-3:19201] orte:base:select: querying component rsh
<br>
[new-host-3:19201] orte:base:select: querying component slurm
<br>
[new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init_stage1.c at line 312
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
<p>&nbsp;&nbsp;orte_pls_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_system_init.c at line 42
<br>
[new-host-3:19201] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="3707.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3705.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3705.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3707.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3707.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
