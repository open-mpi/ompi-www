<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 16:12:06 2005" -->
<!-- isoreceived="20051021211206" -->
<!-- sent="Fri, 21 Oct 2005 16:12:05 -0500" -->
<!-- isosent="20051021211205" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="ec59eb132e878408e576d417e4a49749_at_indiana.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051021185556.GE30127_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 16:12:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0470.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0468.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0466.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0470.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0470.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0472.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0474.php">Troy Benjegerdes: "Dumb SVN question (was RE: Segfaults on startup?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just committed a fix to the trunk to fix your original segfault down 
<br>
in opal_show_help() - this is the same problem Ken posted. This fix 
<br>
should make it into the v1.0 branch eventually.  Even so, you are going 
<br>
to run into the real problem you were handling - this fix is just for 
<br>
proper error handling/output.
<br>
<p>The error below looks like a word size mismatch - one thing is compiled 
<br>
64bit, the other is compiled 32bit.  Make sure everything is compiled 
<br>
either 32bit or 64bit.
<br>
<p>Andrew
<br>
<p>On Oct 21, 2005, at 1:55 PM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Oct 21, 2005 at 08:04:56AM -0500, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I've managed to reproduce the segfault, but haven't yet figured out 
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; problem.  I've got some distractions to attend to this afternoon, so 
</span><br>
<span class="quotelev2">&gt;&gt; it
</span><br>
<span class="quotelev2">&gt;&gt; might be a while before I get a fix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I rebuilt without a vpath build (running ./configure) in the src dir,
</span><br>
<span class="quotelev1">&gt; and now I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; troy_at_octeropt:/usr/src/ompi-buildtest$ /usr/local/bin/mpirun -np 2
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun: Symbol `opal_event_lock' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 2 hostname
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/bin/mpirun -np 2 hostname
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun: Symbol `opal_event_lock' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 46912509504224 (LWP 14767)]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 46912509504224 (LWP 14767)]
</span><br>
<span class="quotelev1">&gt; 0x00002aaaab31fc9b in getenv () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002aaaab31fc9b in getenv () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002aaaab53bd86 in poll_init () at poll.c:101
</span><br>
<span class="quotelev1">&gt; #2  0x00002aaaab539bbc in opal_event_init () at event.c:269
</span><br>
<span class="quotelev1">&gt; #3  0x00002aaaaabd73c2 in orte_init_stage1 (infrastructure=true)
</span><br>
<span class="quotelev1">&gt;     at orte_init_stage1.c:143
</span><br>
<span class="quotelev1">&gt; #4  0x00002aaaaabdbfbf in orte_system_init (infrastructure=true)
</span><br>
<span class="quotelev1">&gt;     at orte_system_init.c:38
</span><br>
<span class="quotelev1">&gt; #5  0x00002aaaaabd6d24 in orte_init (infrastructure=true) at
</span><br>
<span class="quotelev1">&gt; orte_init.c:46
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000402375 in orterun (argc=4, argv=0x7fffffa593e8)
</span><br>
<span class="quotelev1">&gt;     at orterun.c:294
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000402013 in main (argc=4, argv=0x7fffffa593e8) at
</span><br>
<span class="quotelev1">&gt; main.c:13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0470.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0468.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0466.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0470.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0470.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0472.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0474.php">Troy Benjegerdes: "Dumb SVN question (was RE: Segfaults on startup?)"</a>
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
