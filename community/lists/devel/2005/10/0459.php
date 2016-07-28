<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 09:51:38 2005" -->
<!-- isoreceived="20051021145138" -->
<!-- sent="Fri, 21 Oct 2005 09:51:36 -0500" -->
<!-- isosent="20051021145136" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="20051021145135.GA30127_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1129905117.16079.37.camel_at_doolie.osl.iu.edu" -->
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
<strong>Date:</strong> 2005-10-21 09:51:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0460.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0458.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0458.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0460.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0460.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0464.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just did a fresh build from the v1.0 branch. I just ran this from the
<br>
command line.. I guess I was hopeing it was going to default to ssh to
<br>
start things up.
<br>
<p>I also built this as a vpath build.... Does anyone else regularly build
<br>
like that? It seems to at least confuse paths in gdb.
<br>
<p>More to come later..
<br>
<p>On Fri, Oct 21, 2005 at 09:31:57AM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Blah -- this is a segv when trying to print a help message. The help
</span><br>
<span class="quotelev1">&gt; message you should have gotten was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
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
<span class="quotelev1">&gt;   orte_sds_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value ?? instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll look into why this happened (segv instead of printing the message).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the real issue is why you got this error in the first place.
</span><br>
<span class="quotelev1">&gt; What version of OMPI were you running (a nightly tarball, an rc tarball,
</span><br>
<span class="quotelev1">&gt; etc.)?  What run-time environment were you using -- a batch scheduler or
</span><br>
<span class="quotelev1">&gt; simple rsh/ssh?  Can you send the information listed in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 2005-10-20 at 22:43 -0500, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Anyone know what's up here?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; troy_at_opteron1:~$ mpirun -np 2 hostname
</span><br>
<span class="quotelev2">&gt; &gt; [opteron1.scl.ameslab.gov:01865] [NO-NAME] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt; &gt; file ../../../ompi-svn_v1.0/orte/runtime/orte_init_stage1.c at line 212
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt; troy_at_opteron1:~$ gdb
</span><br>
<span class="quotelev2">&gt; &gt; -bash: gdb: command not found
</span><br>
<span class="quotelev2">&gt; &gt; troy_at_opteron1:~$ gdb mpirun
</span><br>
<span class="quotelev2">&gt; &gt; GNU gdb 6.3-debian
</span><br>
<span class="quotelev2">&gt; &gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt; &gt; GDB is free software, covered by the GNU General Public License, and you
</span><br>
<span class="quotelev2">&gt; &gt; are
</span><br>
<span class="quotelev2">&gt; &gt; welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev2">&gt; &gt; conditions.
</span><br>
<span class="quotelev2">&gt; &gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev2">&gt; &gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev2">&gt; &gt; details.
</span><br>
<span class="quotelev2">&gt; &gt; This GDB was configured as &quot;x86_64-linux&quot;...Using host libthread_db
</span><br>
<span class="quotelev2">&gt; &gt; library &quot;/lib/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) run -np 2 hostname
</span><br>
<span class="quotelev2">&gt; &gt; Starting program: /usr/local/bin/mpirun -np 2 hostname
</span><br>
<span class="quotelev2">&gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt; &gt; [New Thread 46912509168352 (LWP 7636)]
</span><br>
<span class="quotelev2">&gt; &gt; [opteron1.scl.ameslab.gov:07636] [NO-NAME] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt; &gt; file ../../../ompi-svn_v1.0/orte/runtime/orte_init_stage1.c at line 212
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; [Switching to Thread 46912509168352 (LWP 7636)]
</span><br>
<span class="quotelev2">&gt; &gt; 0x00002aaaab3279d0 in strlen () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00002aaaab3279d0 in strlen () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002aaaab2fa158 in vfprintf () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002aaaab31931d in vasprintf () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00002aaaab50b150 in output () from /usr/local/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00002aaaab50ae14 in opal_show_help () from
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00002aaaaabd2a8d in orte_init_stage1 () from
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/lib/liborte.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00002aaaaabd594a in orte_system_init () from
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/lib/liborte.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00002aaaaabd2969 in orte_init () from /usr/local/lib/liborte.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x00000000004021d3 in orterun (argc=4, argv=0x7fffffd242a8)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../ompi-svn_v1.0/orte/tools/orterun/orterun.c:294
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x0000000000401f93 in main (argc=4, argv=0x7fffffd242a8)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../ompi-svn_v1.0/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
-- 
--------------------------------------------------------------------------
Troy Benjegerdes                'da hozer'                hozer_at_[hidden]  
Somone asked me why I work on this free (<a href="http://www.fsf.org/philosophy/">http://www.fsf.org/philosophy/</a>)
software stuff and not get a real job. Charles Shultz had the best answer:
&quot;Why do musicians compose symphonies and poets write poems? They do it
because life wouldn't have any meaning for them if they didn't. That's why
I draw cartoons. It's my life.&quot; -- Charles Shultz
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0460.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0458.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0458.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0460.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0460.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0464.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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
