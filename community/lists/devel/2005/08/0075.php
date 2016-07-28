<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  4 07:19:16 2005" -->
<!-- isoreceived="20050804121916" -->
<!-- sent="Thu, 4 Aug 2005 08:19:10 -0400" -->
<!-- isosent="20050804121910" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  broken rmgr?" -->
<!-- id="6fabceb3cd13dc0da87639e66ce2d11e_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6.2.3.4.2.20050803205324.01d0d168_at_pobox1663.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-04 07:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0076.php">Brian Barrett: "Re:  broken rmgr?"</a>
<li><strong>Previous message:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0071.php">Ralph H. Castain: "Re:  broken rmgr?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0076.php">Brian Barrett: "Re:  broken rmgr?"</a>
<li><strong>Reply:</strong> <a href="0076.php">Brian Barrett: "Re:  broken rmgr?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can confirm this -- running a simple MPI &quot;hello world&quot; on one node 
<br>
with the rsh pls, the MPI processes finish and exit, but then orterun 
<br>
hangs:
<br>
<p>(gdb) bt
<br>
#0  0xb7e8ef88 in poll () from /lib/libc.so.6
<br>
#1  0xb7f4f8a5 in poll_dispatch (arg=0xb7f6f080, tv=0xbfffe4f8) at 
<br>
poll.c:196
<br>
#2  0xb7f4d72b in opal_event_loop (flags=1) at event.c:515
<br>
#3  0xb7f5ac6e in opal_progress () at opal_progress.c:211
<br>
#4  0xb7d6fca1 in opal_condition_wait (c=0xb7d7242c, m=0xb7d72418)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at condition.h:72
<br>
#5  0xb7d6f7f0 in orte_pls_rsh_finalize () at pls_rsh_module.c:833
<br>
#6  0xb7fb3ab6 in orte_pls_base_finalize () at pls_base_close.c:40
<br>
#7  0xb7d9092f in orte_rmgr_urm_finalize () at rmgr_urm.c:336
<br>
#8  0xb7fc14f7 in orte_rmgr_base_close () at rmgr_base_close.c:33
<br>
#9  0xb7fd3563 in orte_system_finalize () at orte_system_finalize.c:61
<br>
#10 0xb7fceca5 in orte_finalize () at orte_finalize.c:36
<br>
#11 0x0804a0d9 in main (argc=4, argv=0xbfffe6d4) at orterun.c:390
<br>
<p>Am investigating...
<br>
<p><p><p><p>On Aug 3, 2005, at 10:55 PM, Ralph H. Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...it was running for me last night and (I thought) this morning,
</span><br>
<span class="quotelev1">&gt; but I'll test it again and see if I can reproduce the problem. Could
</span><br>
<span class="quotelev1">&gt; be something crept in there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At 06:28 PM 8/3/2005, you wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I just noticed that mpirun hangs forever inside the
</span><br>
<span class="quotelev2">&gt;&gt; orte_rmgr.finalize() routine. AFAIK this is new to today, and 
</span><br>
<span class="quotelev2">&gt;&gt; confirmed
</span><br>
<span class="quotelev2">&gt;&gt; on PPC64, x86-64, x86-32.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't have the immediate time, at the moment, to dig deeper, but
</span><br>
<span class="quotelev2">&gt;&gt; thought I would throw that out there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev2">&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0076.php">Brian Barrett: "Re:  broken rmgr?"</a>
<li><strong>Previous message:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0071.php">Ralph H. Castain: "Re:  broken rmgr?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0076.php">Brian Barrett: "Re:  broken rmgr?"</a>
<li><strong>Reply:</strong> <a href="0076.php">Brian Barrett: "Re:  broken rmgr?"</a>
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
