<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 09:32:03 2005" -->
<!-- isoreceived="20051021143203" -->
<!-- sent="Fri, 21 Oct 2005 09:31:57 -0500" -->
<!-- isosent="20051021143157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="1129905117.16079.37.camel_at_doolie.osl.iu.edu" -->
<!-- inreplyto="20051021034355.GZ30127_at_kalmia.hozed.org" -->
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
<strong>Date:</strong> 2005-10-21 09:31:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0459.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0457.php">Jeff Squyres: "Patches for the v1.0 branch"</a>
<li><strong>In reply to:</strong> <a href="0456.php">Troy Benjegerdes: "Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0459.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0459.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Blah -- this is a segv when trying to print a help message. The help
<br>
message you should have gotten was:
<br>
<p>-----
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_sds_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value ?? instead of ORTE_SUCCESS
<br>
-----
<br>
<p>I'll look into why this happened (segv instead of printing the message).
<br>
<p>However, the real issue is why you got this error in the first place.
<br>
What version of OMPI were you running (a nightly tarball, an rc tarball,
<br>
etc.)?  What run-time environment were you using -- a batch scheduler or
<br>
simple rsh/ssh?  Can you send the information listed in
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ?
<br>
<p><p><p>On Thu, 2005-10-20 at 22:43 -0500, Troy Benjegerdes wrote:
<br>
<span class="quotelev1">&gt; Anyone know what's up here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; troy_at_opteron1:~$ mpirun -np 2 hostname
</span><br>
<span class="quotelev1">&gt; [opteron1.scl.ameslab.gov:01865] [NO-NAME] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file ../../../ompi-svn_v1.0/orte/runtime/orte_init_stage1.c at line 212
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; troy_at_opteron1:~$ gdb
</span><br>
<span class="quotelev1">&gt; -bash: gdb: command not found
</span><br>
<span class="quotelev1">&gt; troy_at_opteron1:~$ gdb mpirun
</span><br>
<span class="quotelev1">&gt; GNU gdb 6.3-debian
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License, and you
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev1">&gt; conditions.
</span><br>
<span class="quotelev1">&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev1">&gt; details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-linux&quot;...Using host libthread_db
</span><br>
<span class="quotelev1">&gt; library &quot;/lib/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 2 hostname
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/bin/mpirun -np 2 hostname
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 46912509168352 (LWP 7636)]
</span><br>
<span class="quotelev1">&gt; [opteron1.scl.ameslab.gov:07636] [NO-NAME] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file ../../../ompi-svn_v1.0/orte/runtime/orte_init_stage1.c at line 212
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 46912509168352 (LWP 7636)]
</span><br>
<span class="quotelev1">&gt; 0x00002aaaab3279d0 in strlen () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002aaaab3279d0 in strlen () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002aaaab2fa158 in vfprintf () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00002aaaab31931d in vasprintf () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00002aaaab50b150 in output () from /usr/local/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002aaaab50ae14 in opal_show_help () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x00002aaaaabd2a8d in orte_init_stage1 () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x00002aaaaabd594a in orte_system_init () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; #7  0x00002aaaaabd2969 in orte_init () from /usr/local/lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x00000000004021d3 in orterun (argc=4, argv=0x7fffffd242a8)
</span><br>
<span class="quotelev1">&gt;     at ../../../../ompi-svn_v1.0/orte/tools/orterun/orterun.c:294
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000401f93 in main (argc=4, argv=0x7fffffd242a8)
</span><br>
<span class="quotelev1">&gt;     at ../../../../ompi-svn_v1.0/orte/tools/orterun/main.c:13
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0459.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0457.php">Jeff Squyres: "Patches for the v1.0 branch"</a>
<li><strong>In reply to:</strong> <a href="0456.php">Troy Benjegerdes: "Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0459.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0459.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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
