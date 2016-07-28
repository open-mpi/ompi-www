<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 13:04:56 2005" -->
<!-- isoreceived="20051021180456" -->
<!-- sent="Fri, 21 Oct 2005 08:04:56 -0500" -->
<!-- isosent="20051021130456" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="4358E778.1030402_at_indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20051021145135.GA30127_at_kalmia.hozed.org" -->
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
<strong>Date:</strong> 2005-10-21 08:04:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0465.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0463.php">Troy Benjegerdes: "BUG: --disable-cxx still runs c++ configure tests"</a>
<li><strong>In reply to:</strong> <a href="0459.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0466.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've managed to reproduce the segfault, but haven't yet figured out the 
<br>
problem.  I've got some distractions to attend to this afternoon, so it 
<br>
might be a while before I get a fix.
<br>
<p>Andrew
<br>
<p><p>Troy Benjegerdes wrote:
<br>
<span class="quotelev1">&gt; I just did a fresh build from the v1.0 branch. I just ran this from the
</span><br>
<span class="quotelev1">&gt; command line.. I guess I was hopeing it was going to default to ssh to
</span><br>
<span class="quotelev1">&gt; start things up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also built this as a vpath build.... Does anyone else regularly build
</span><br>
<span class="quotelev1">&gt; like that? It seems to at least confuse paths in gdb.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More to come later..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 21, 2005 at 09:31:57AM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Blah -- this is a segv when trying to print a help message. The help
</span><br>
<span class="quotelev2">&gt;&gt; message you should have gotten was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   orte_sds_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value ?? instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll look into why this happened (segv instead of printing the message).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, the real issue is why you got this error in the first place.
</span><br>
<span class="quotelev2">&gt;&gt; What version of OMPI were you running (a nightly tarball, an rc tarball,
</span><br>
<span class="quotelev2">&gt;&gt; etc.)?  What run-time environment were you using -- a batch scheduler or
</span><br>
<span class="quotelev2">&gt;&gt; simple rsh/ssh?  Can you send the information listed in
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2005-10-20 at 22:43 -0500, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone know what's up here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; troy_at_opteron1:~$ mpirun -np 2 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [opteron1.scl.ameslab.gov:01865] [NO-NAME] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ../../../ompi-svn_v1.0/orte/runtime/orte_init_stage1.c at line 212
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; troy_at_opteron1:~$ gdb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash: gdb: command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; troy_at_opteron1:~$ gdb mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU gdb 6.3-debian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GDB is free software, covered by the GNU General Public License, and you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conditions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This GDB was configured as &quot;x86_64-linux&quot;...Using host libthread_db
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library &quot;/lib/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) run -np 2 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting program: /usr/local/bin/mpirun -np 2 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 46912509168352 (LWP 7636)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [opteron1.scl.ameslab.gov:07636] [NO-NAME] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ../../../ompi-svn_v1.0/orte/runtime/orte_init_stage1.c at line 212
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Switching to Thread 46912509168352 (LWP 7636)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x00002aaaab3279d0 in strlen () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00002aaaab3279d0 in strlen () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00002aaaab2fa158 in vfprintf () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00002aaaab31931d in vasprintf () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00002aaaab50b150 in output () from /usr/local/lib/libopal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00002aaaab50ae14 in opal_show_help () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/libopal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00002aaaaabd2a8d in orte_init_stage1 () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/liborte.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x00002aaaaabd594a in orte_system_init () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/liborte.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x00002aaaaabd2969 in orte_init () from /usr/local/lib/liborte.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8  0x00000000004021d3 in orterun (argc=4, argv=0x7fffffd242a8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at ../../../../ompi-svn_v1.0/orte/tools/orterun/orterun.c:294
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9  0x0000000000401f93 in main (argc=4, argv=0x7fffffd242a8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at ../../../../ompi-svn_v1.0/orte/tools/orterun/main.c:13
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0465.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0463.php">Troy Benjegerdes: "BUG: --disable-cxx still runs c++ configure tests"</a>
<li><strong>In reply to:</strong> <a href="0459.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0466.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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
