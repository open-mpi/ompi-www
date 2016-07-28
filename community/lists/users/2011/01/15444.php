<?
$subject_val = "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 28 02:16:15 2011" -->
<!-- isoreceived="20110128071615" -->
<!-- sent="Fri, 28 Jan 2011 18:16:04 +1100" -->
<!-- isosent="20110128071604" -->
<!-- name="Michael Curtis" -->
<!-- email="michael.curtis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with SLURM and non-local nodes" -->
<!-- id="5DC74A07-FCE4-4D16-AD0F-CBB5003D92D3_at_monash.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D5E6345-FC41-4E15-A5E7-30C1DEEA579E_at_monash.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with SLURM and non-local nodes<br>
<strong>From:</strong> Michael Curtis (<em>michael.curtis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-28 02:16:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15445.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Previous message:</strong> <a href="15443.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Experiences with Mellanox Connect-X HCA ?"</a>
<li><strong>In reply to:</strong> <a href="15426.php">Michael Curtis: "[OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15476.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15476.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 27/01/2011, at 4:51 PM, Michael Curtis wrote:
<br>
<p>Some more debugging information:
<br>
<p><span class="quotelev1">&gt; Failing case:
</span><br>
<span class="quotelev1">&gt; michael_at_ipc ~ $ salloc -n8 mpirun --display-map ./mpi
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<p>Backtrace with debugging symbols
<br>
#0  0x00007ffff7bb5c1e in ?? () from /usr/lib/libopen-rte.so.0
<br>
#1  0x00007ffff792e23f in ?? () from /usr/lib/libopen-pal.so.0
<br>
#2  0x00007ffff7920679 in opal_progress () from /usr/lib/libopen-pal.so.0
<br>
#3  0x00007ffff7bb6e5d in orte_plm_base_daemon_callback () from /usr/lib/libopen-rte.so.0
<br>
#4  0x00007ffff62b67e7 in plm_slurm_launch_job (jdata=&lt;value optimised out&gt;) at ../../../../../../orte/mca/plm/slurm/plm_slurm_module.c:360
<br>
#5  0x00000000004041c8 in orterun (argc=4, argv=0x7fffffffe7d8) at ../../../../../orte/tools/orterun/orterun.c:754
<br>
#6  0x0000000000403234 in main (argc=4, argv=0x7fffffffe7d8) at ../../../../../orte/tools/orterun/main.c:13
<br>
<p>Trace output with -d100 and --enable-trace:
<br>
[:10821] progressed_wait: ../../../../../orte/mca/plm/base/plm_base_launch_support.c 459
<br>
[:10821] defining message event: ../../../../../orte/mca/plm/base/plm_base_launch_support.c 423
<br>
<p>I'm guessing from this that it's crashing in the event loop, maybe at :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static void process_orted_launch_report(int fd, short event, void *data)
<br>
&nbsp;
<br>
strace:
<br>
poll([{fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, events=POLLIN}, {fd=13, events=POLLIN}], 6, 1000) = 1 ([{fd=13, revents=POLLIN}])
<br>
readv(13, [{&quot;R\333\0\0\377\377\377\377R\333\0\0\377\377\377\377R\333\0\0\0\0\0\0\0\0\0\4\0\0\0\232&quot;..., 36}], 1) = 36
<br>
readv(13, [{&quot;R\333\0\0\377\377\377\377R\333\0\0\0\0\0\0\0\0\0\n\0\0\0\1\0\0\0u1390&quot;..., 154}], 1) = 154
<br>
poll([{fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, events=POLLIN}, {fd=13, events=POLLIN}], 6, 0) = 0 (Timeout)
<br>
--- SIGSEGV (Segmentation fault) @ 0 (0) ---
<br>
<p><p>OK, I matched the disassemblies and confirmed that the crash originates in process_orted_launch_report, and therefore matched up the source code line with where gdb reckons the program counter was at that point:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* update state */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
<br>
<p>Hopefully all this information helps a little!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15445.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Previous message:</strong> <a href="15443.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Experiences with Mellanox Connect-X HCA ?"</a>
<li><strong>In reply to:</strong> <a href="15426.php">Michael Curtis: "[OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15476.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15476.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
