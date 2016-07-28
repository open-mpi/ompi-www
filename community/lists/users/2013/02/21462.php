<?
$subject_val = "[OMPI users] rcu_sched stalls on CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 18:04:24 2013" -->
<!-- isoreceived="20130225230424" -->
<!-- sent="Mon, 25 Feb 2013 16:04:15 -0700" -->
<!-- isosent="20130225230415" -->
<!-- name="Simon DeDeo" -->
<!-- email="simon.dedeo_at_[hidden]" -->
<!-- subject="[OMPI users] rcu_sched stalls on CPU" -->
<!-- id="9642E77E-72A4-4643-A713-E7719A1655E7_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] rcu_sched stalls on CPU<br>
<strong>From:</strong> Simon DeDeo (<em>simon.dedeo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-25 18:04:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21463.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Previous message:</strong> <a href="21461.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21470.php">Simon DeDeo: "Re: [OMPI users] rcu_sched stalls on CPU"</a>
<li><strong>Reply:</strong> <a href="21470.php">Simon DeDeo: "Re: [OMPI users] rcu_sched stalls on CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been having some trouble tracing the source of a CPU stall with open MPI on Gentoo.
<br>
<p>My code is very simple: each process does a Monte Carlo run, saves some data to disk, and sends back a single MPI_DOUBLE to node zero, which picks the best value from all the computations (including the one it did itself).
<br>
<p>For some reason, this can cause CPUs to &quot;stall&quot; (see the error below, on dmesg output) -- this stall actually causes the system to crash and reboot, which seems pretty crazy.
<br>
<p>My best guess is that some of the nodes greater than zero have &quot;MPI_Send&quot;s out, but node zero is not finished with its own computation yet, and so has not put out an MPI_Recv. They get mad waiting? This happens when I give the Monte Carlo runs large numbers, and so the variance in end time is larger.
<br>
<p>However, the behavior seems a bit extreme, and I am wondering if something more subtle is going on. My sysadmin was trying to fix something on the machine the last time it crashed, and it trashed the kernel! So I am also in the sysadmin doghouse.
<br>
<p>Any help or advice greatly appreciated! Is it likely to be an MPI_Send/MPI_Recv problem, or is there something else going on?
<br>
<p>[ 1273.079260] INFO: rcu_sched detected stalls on CPUs/tasks: { 12 13} (detected by 17, t=60002 jiffies)
<br>
[ 1273.079272] Pid: 2626, comm: cluster Not tainted 3.6.11-gentoo #10
<br>
[ 1273.079275] Call Trace:
<br>
[ 1273.079277]  &lt;IRQ&gt;  [&lt;ffffffff81099b87&gt;] rcu_check_callbacks+0x5a7/0x600
<br>
[ 1273.079294]  [&lt;ffffffff8103fae3&gt;] update_process_times+0x43/0x80
<br>
[ 1273.079298]  [&lt;ffffffff8106d796&gt;] tick_sched_timer+0x76/0xc0
<br>
[ 1273.079303]  [&lt;ffffffff8105329e&gt;] __run_hrtimer.isra.33+0x4e/0x100
<br>
[ 1273.079306]  [&lt;ffffffff81053adb&gt;] hrtimer_interrupt+0xeb/0x220
<br>
[ 1273.079311]  [&lt;ffffffff8101fd94&gt;] smp_apic_timer_interrupt+0x64/0xa0
<br>
[ 1273.079316]  [&lt;ffffffff81515f07&gt;] apic_timer_interrupt+0x67/0x70
<br>
[ 1273.079317]  &lt;EOI&gt;
<br>
<p>Simon
<br>
<p>Research Fellow
<br>
Santa Fe Institute
<br>
<a href="http://santafe.edu/~simon">http://santafe.edu/~simon</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21463.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Previous message:</strong> <a href="21461.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21470.php">Simon DeDeo: "Re: [OMPI users] rcu_sched stalls on CPU"</a>
<li><strong>Reply:</strong> <a href="21470.php">Simon DeDeo: "Re: [OMPI users] rcu_sched stalls on CPU"</a>
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
