<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 13:56:01 2005" -->
<!-- isoreceived="20051021185601" -->
<!-- sent="Fri, 21 Oct 2005 13:55:56 -0500" -->
<!-- isosent="20051021185556" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="20051021185556.GE30127_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4358E778.1030402_at_indiana.edu" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 13:55:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0467.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0465.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0464.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0469.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0469.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct 21, 2005 at 08:04:56AM -0500, Andrew Friedley wrote:
<br>
<span class="quotelev1">&gt; I've managed to reproduce the segfault, but haven't yet figured out the 
</span><br>
<span class="quotelev1">&gt; problem.  I've got some distractions to attend to this afternoon, so it 
</span><br>
<span class="quotelev1">&gt; might be a while before I get a fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<p>I rebuilt without a vpath build (running ./configure) in the src dir,
<br>
and now I get:
<br>
<p>troy_at_octeropt:/usr/src/ompi-buildtest$ /usr/local/bin/mpirun -np 2
<br>
hostname
<br>
/usr/local/bin/mpirun: Symbol `opal_event_lock' has different size in
<br>
shared object, consider re-linking
<br>
Segmentation fault
<br>
<p>(gdb) run -np 2 hostname
<br>
Starting program: /usr/local/bin/mpirun -np 2 hostname
<br>
/usr/local/bin/mpirun: Symbol `opal_event_lock' has different size in
<br>
shared object, consider re-linking
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 46912509504224 (LWP 14767)]
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 46912509504224 (LWP 14767)]
<br>
0x00002aaaab31fc9b in getenv () from /lib/libc.so.6
<br>
(gdb) bt
<br>
#0  0x00002aaaab31fc9b in getenv () from /lib/libc.so.6
<br>
#1  0x00002aaaab53bd86 in poll_init () at poll.c:101
<br>
#2  0x00002aaaab539bbc in opal_event_init () at event.c:269
<br>
#3  0x00002aaaaabd73c2 in orte_init_stage1 (infrastructure=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at orte_init_stage1.c:143
<br>
#4  0x00002aaaaabdbfbf in orte_system_init (infrastructure=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at orte_system_init.c:38
<br>
#5  0x00002aaaaabd6d24 in orte_init (infrastructure=true) at
<br>
orte_init.c:46
<br>
#6  0x0000000000402375 in orterun (argc=4, argv=0x7fffffa593e8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at orterun.c:294
<br>
#7  0x0000000000402013 in main (argc=4, argv=0x7fffffa593e8) at
<br>
main.c:13
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0467.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0465.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0464.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0469.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0469.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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
