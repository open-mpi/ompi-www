<?
$subject_val = "Re: [OMPI users] init of component openib returned failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 17:40:43 2010" -->
<!-- isoreceived="20100518214043" -->
<!-- sent="Tue, 18 May 2010 17:40:36 -0400" -->
<!-- isosent="20100518214036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] init of component openib returned failure" -->
<!-- id="391B2B22-822B-47F4-9F11-C9F6A08CD4A2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BF26971.50602_at_q-leap.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] init of component openib returned failure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 17:40:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13081.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="13079.php">Josh Hursey: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="13069.php">Peter Kruse: "[OMPI users] init of component openib returned failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13082.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Reply:</strong> <a href="13082.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try running with:
<br>
<p>mpirun.openmpi-1.4.1 --mca btl_base_verbose 50  --mca btl self,openib -n 2 --mca btl_openib_verbose 100 ./IMB-MPI1 -npmin 2 PingPong
<br>
<p>Also, are you saying that running the same command line with osu_latency works just fine?  That would be really weird...
<br>
<p><p>On May 18, 2010, at 6:18 AM, Peter Kruse wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; trying to run Intel MPI Benchmarks with OpenMPI 1.4.1 fails in initializing
</span><br>
<span class="quotelev1">&gt; the component openib.  System is Debian GNU/Linux 5.0.4.
</span><br>
<span class="quotelev1">&gt; The command to start the job (under Torque 2.4.7) was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun.openmpi-1.4.1 --mca btl_base_verbose 50  --mca btl self,openib -n 2
</span><br>
<span class="quotelev1">&gt; ./IMB-MPI1 -npmin 2 PingPong
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and results in these messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] mca: base: components_open: component openib has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] mca: base: components_open: component openib open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] mca: base: components_open: component openib has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] mca: base: components_open: component openib open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] select: initializing btl component openib
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] select: init of component openib returned failure
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] select: module openib unloaded
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] select: initializing btl component openib
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] select: init of component openib returned failure
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] select: module openib unloaded
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Process 1 ([[4887,1],0]) is on host: beo-15
</span><br>
<span class="quotelev1">&gt;    Process 2 ([[4887,1],1]) is on host: beo-16
</span><br>
<span class="quotelev1">&gt;    BTLs attempted: self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    PML add procs failed
</span><br>
<span class="quotelev1">&gt;    --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [beo-15:20933] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; orterun has exited due to process rank 0 with PID 20933 on
</span><br>
<span class="quotelev1">&gt; node beo-15 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by orterun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [beo-16:20605] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [beo-15:20930] 1 more process has sent help message help-mca-bml-r2.txt /
</span><br>
<span class="quotelev1">&gt; unreachable proc
</span><br>
<span class="quotelev1">&gt; [beo-15:20930] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
</span><br>
<span class="quotelev1">&gt; help / error messages
</span><br>
<span class="quotelev1">&gt; [beo-15:20930] 1 more process has sent help message help-mpi-runtime /
</span><br>
<span class="quotelev1">&gt; mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; running another Benchmark (OSU) succeeds in loading the openib component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;ibstat |grep -i state&quot; on both nodes gives:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev1">&gt;                  State: Active
</span><br>
<span class="quotelev1">&gt;                  Physical state: LinkUp
</span><br>
<span class="quotelev1">&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running with &quot;mpi_abort_delay -1&quot; and attaching an strace on the process
</span><br>
<span class="quotelev1">&gt; is not very helpful it loops with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], [], 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, NULL, {0x2aee58ff3250, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x2aee59d44f60}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_SETMASK, [], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; nanosleep({5, 0}, {5, 0})               = 0
</span><br>
<span class="quotelev1">&gt; ----------------------------8&lt;----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody have an idea what is wrong or how can we get more debugging
</span><br>
<span class="quotelev1">&gt; information about the initialization of the openib module?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Peter
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13081.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="13079.php">Josh Hursey: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="13069.php">Peter Kruse: "[OMPI users] init of component openib returned failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13082.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Reply:</strong> <a href="13082.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
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
