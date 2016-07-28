<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 20 22:44:04 2005" -->
<!-- isoreceived="20051021034404" -->
<!-- sent="Thu, 20 Oct 2005 22:43:55 -0500" -->
<!-- isosent="20051021034355" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="20051021034355.GZ30127_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-20 22:43:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0457.php">Jeff Squyres: "Patches for the v1.0 branch"</a>
<li><strong>Previous message:</strong> <a href="0455.php">Galen Mark Shipman: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0458.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0458.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anyone know what's up here?
<br>
<p>troy_at_opteron1:~$ mpirun -np 2 hostname
<br>
[opteron1.scl.ameslab.gov:01865] [NO-NAME] ORTE_ERROR_LOG: Not found in
<br>
file ../../../ompi-svn_v1.0/orte/runtime/orte_init_stage1.c at line 212
<br>
Segmentation fault
<br>
troy_at_opteron1:~$ gdb
<br>
-bash: gdb: command not found
<br>
troy_at_opteron1:~$ gdb mpirun
<br>
GNU gdb 6.3-debian
<br>
Copyright 2004 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you
<br>
are
<br>
welcome to change it and/or distribute copies of it under certain
<br>
conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
<br>
details.
<br>
This GDB was configured as &quot;x86_64-linux&quot;...Using host libthread_db
<br>
library &quot;/lib/libthread_db.so.1&quot;.
<br>
<p>(gdb) run -np 2 hostname
<br>
Starting program: /usr/local/bin/mpirun -np 2 hostname
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 46912509168352 (LWP 7636)]
<br>
[opteron1.scl.ameslab.gov:07636] [NO-NAME] ORTE_ERROR_LOG: Not found in
<br>
file ../../../ompi-svn_v1.0/orte/runtime/orte_init_stage1.c at line 212
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 46912509168352 (LWP 7636)]
<br>
0x00002aaaab3279d0 in strlen () from /lib/libc.so.6
<br>
(gdb) bt
<br>
#0  0x00002aaaab3279d0 in strlen () from /lib/libc.so.6
<br>
#1  0x00002aaaab2fa158 in vfprintf () from /lib/libc.so.6
<br>
#2  0x00002aaaab31931d in vasprintf () from /lib/libc.so.6
<br>
#3  0x00002aaaab50b150 in output () from /usr/local/lib/libopal.so.0
<br>
#4  0x00002aaaab50ae14 in opal_show_help () from
<br>
/usr/local/lib/libopal.so.0
<br>
#5  0x00002aaaaabd2a8d in orte_init_stage1 () from
<br>
/usr/local/lib/liborte.so.0
<br>
#6  0x00002aaaaabd594a in orte_system_init () from
<br>
/usr/local/lib/liborte.so.0
<br>
#7  0x00002aaaaabd2969 in orte_init () from /usr/local/lib/liborte.so.0
<br>
#8  0x00000000004021d3 in orterun (argc=4, argv=0x7fffffd242a8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../ompi-svn_v1.0/orte/tools/orterun/orterun.c:294
<br>
#9  0x0000000000401f93 in main (argc=4, argv=0x7fffffd242a8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../ompi-svn_v1.0/orte/tools/orterun/main.c:13
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0457.php">Jeff Squyres: "Patches for the v1.0 branch"</a>
<li><strong>Previous message:</strong> <a href="0455.php">Galen Mark Shipman: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0458.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0458.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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
