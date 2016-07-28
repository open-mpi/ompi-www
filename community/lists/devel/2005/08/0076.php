<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  4 09:15:20 2005" -->
<!-- isoreceived="20050804141520" -->
<!-- sent="Thu, 4 Aug 2005 09:15:21 -0500" -->
<!-- isosent="20050804141521" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  broken rmgr?" -->
<!-- id="31EAD777-730F-41AA-9DA1-25915770DE3D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6fabceb3cd13dc0da87639e66ce2d11e_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-04 09:15:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0077.php">Jeff Squyres: "rsh pls changes"</a>
<li><strong>Previous message:</strong> <a href="0075.php">Jeff Squyres: "Re:  broken rmgr?"</a>
<li><strong>In reply to:</strong> <a href="0075.php">Jeff Squyres: "Re:  broken rmgr?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is fixed now.  There was a bug in the poll ops that was  
<br>
uncovered yesterday when I fixed a deadlock issue in the event library.
<br>
<p>Brian
<br>
<p>On Aug 4, 2005, at 7:19 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I can confirm this -- running a simple MPI &quot;hello world&quot; on one node
</span><br>
<span class="quotelev1">&gt; with the rsh pls, the MPI processes finish and exit, but then orterun
</span><br>
<span class="quotelev1">&gt; hangs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xb7e8ef88 in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0xb7f4f8a5 in poll_dispatch (arg=0xb7f6f080, tv=0xbfffe4f8) at
</span><br>
<span class="quotelev1">&gt; poll.c:196
</span><br>
<span class="quotelev1">&gt; #2  0xb7f4d72b in opal_event_loop (flags=1) at event.c:515
</span><br>
<span class="quotelev1">&gt; #3  0xb7f5ac6e in opal_progress () at opal_progress.c:211
</span><br>
<span class="quotelev1">&gt; #4  0xb7d6fca1 in opal_condition_wait (c=0xb7d7242c, m=0xb7d72418)
</span><br>
<span class="quotelev1">&gt;      at condition.h:72
</span><br>
<span class="quotelev1">&gt; #5  0xb7d6f7f0 in orte_pls_rsh_finalize () at pls_rsh_module.c:833
</span><br>
<span class="quotelev1">&gt; #6  0xb7fb3ab6 in orte_pls_base_finalize () at pls_base_close.c:40
</span><br>
<span class="quotelev1">&gt; #7  0xb7d9092f in orte_rmgr_urm_finalize () at rmgr_urm.c:336
</span><br>
<span class="quotelev1">&gt; #8  0xb7fc14f7 in orte_rmgr_base_close () at rmgr_base_close.c:33
</span><br>
<span class="quotelev1">&gt; #9  0xb7fd3563 in orte_system_finalize () at orte_system_finalize.c:61
</span><br>
<span class="quotelev1">&gt; #10 0xb7fceca5 in orte_finalize () at orte_finalize.c:36
</span><br>
<span class="quotelev1">&gt; #11 0x0804a0d9 in main (argc=4, argv=0xbfffe6d4) at orterun.c:390
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am investigating...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2005, at 10:55 PM, Ralph H. Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...it was running for me last night and (I thought) this morning,
</span><br>
<span class="quotelev2">&gt;&gt; but I'll test it again and see if I can reproduce the problem. Could
</span><br>
<span class="quotelev2">&gt;&gt; be something crept in there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At 06:28 PM 8/3/2005, you wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just noticed that mpirun hangs forever inside the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rmgr.finalize() routine. AFAIK this is new to today, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confirmed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on PPC64, x86-64, x86-32.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Don't have the immediate time, at the moment, to dig deeper, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thought I would throw that out there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0077.php">Jeff Squyres: "rsh pls changes"</a>
<li><strong>Previous message:</strong> <a href="0075.php">Jeff Squyres: "Re:  broken rmgr?"</a>
<li><strong>In reply to:</strong> <a href="0075.php">Jeff Squyres: "Re:  broken rmgr?"</a>
<!-- nextthread="start" -->
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
