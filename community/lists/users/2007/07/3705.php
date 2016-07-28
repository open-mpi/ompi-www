<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 09:50:45 2007" -->
<!-- isoreceived="20070718135045" -->
<!-- sent="Wed, 18 Jul 2007 09:50:40 -0400" -->
<!-- isosent="20070718135040" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_pls_base_select fails" -->
<!-- id="469E1AB0.3060705_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1184763573.3979.85.camel_at_doorstop.home.net" -->
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
<strong>Date:</strong> 2007-07-18 09:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3706.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3704.php">Adam C Powell IV: "[OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3704.php">Adam C Powell IV: "[OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3706.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3706.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adam C Powell IV wrote:
<br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running the Debian package of OpenMPI in a chroot (with /proc
</span><br>
<span class="quotelev1">&gt; mounted properly), and orte_init is failing as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uptime
</span><br>
<span class="quotelev1">&gt;  12:51:55 up 12 days, 21:30,  0 users,  load average: 0.00, 0.00, 0.00
</span><br>
<span class="quotelev1">&gt; $ orterun -np 1 uptime
</span><br>
<span class="quotelev1">&gt; [new-host-3:18250] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init_stage1.c at line 312
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
<span class="quotelev1">&gt; [new-host-3:18250] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt; [new-host-3:18250] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 52
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
<span class="quotelev1">&gt; Note running with -v produces no more output than this.  Running orted
</span><br>
<span class="quotelev1">&gt; in the background doesn't seem to help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What could be wrong?  Does orterun not run in a chroot environment?
</span><br>
<span class="quotelev1">&gt; What more can I do to investigate further?
</span><br>
Try running mpirun with the added options:
<br>
-mca orte_debug 1 -mca pls_base_verbose 20
<br>
<p>Then send the output to the list.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3706.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3704.php">Adam C Powell IV: "[OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3704.php">Adam C Powell IV: "[OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3706.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3706.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
