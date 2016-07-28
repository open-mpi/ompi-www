<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 10:45:12 2005" -->
<!-- isoreceived="20050818154512" -->
<!-- sent="Thu, 18 Aug 2005 17:45:05 +0200" -->
<!-- isosent="20050818154505" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re:  OMPI 32bit on a 64bit Linux box" -->
<!-- id="200508181745.05280.Keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4304A1C4.8040600_at_lanl.gov" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-18 10:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0201.php">Tim S. Woodall: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0199.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0196.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0201.php">Tim S. Woodall: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0201.php">Tim S. Woodall: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0203.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
see the &quot;same&quot; (well probably not exactly same) thing here in Opteron with 
<br>
64bit (-g and so on), I get:
<br>
<p>#0  0x0000000040085160 in orte_sds_base_contact_universe () 
<br>
at ../../../../../orte/mca/sds/base/sds_base_interface.c:29
<br>
29          return orte_sds_base_module-&gt;contact_universe();
<br>
(gdb) where
<br>
#0  0x0000000040085160 in orte_sds_base_contact_universe () 
<br>
at ../../../../../orte/mca/sds/base/sds_base_interface.c:29
<br>
#1  0x0000000040063e95 in orte_init_stage1 () 
<br>
at ../../../orte/runtime/orte_init_stage1.c:185
<br>
#2  0x0000000040017e7d in orte_system_init () 
<br>
at ../../../orte/runtime/orte_system_init.c:38
<br>
#3  0x00000000400148f5 in orte_init () at ../../../orte/runtime/orte_init.c:46
<br>
#4  0x000000004000dfc7 in main (argc=4, argv=0x7fbfffe8a8) 
<br>
at ../../../../orte/tools/orterun/orterun.c:291
<br>
#5  0x0000002a95c0c017 in __libc_start_main () from /lib64/libc.so.6
<br>
#6  0x000000004000bf2a in _start ()
<br>
(gdb)                          
<br>
within mpirun
<br>
<p>orte_sds_base_module here is Null...
<br>
This is without persistent orted; Just mpirun...
<br>
<p>CU,
<br>
ray
<br>
<p><p>On Thursday 18 August 2005 16:57, Nathan DeBardeleben wrote:
<br>
<span class="quotelev1">&gt; FYI, this only happens when I let OMPI compile 64bit on Linux.  When I
</span><br>
<span class="quotelev1">&gt; throw in there CFLAGS=FFLAGS=CXXFLAGS=-m32 orted, my myriad of test
</span><br>
<span class="quotelev1">&gt; codes, mpirun, registry subscription codes, and JNI all work like a champ.
</span><br>
<span class="quotelev1">&gt; Something's wrong with the 64bit it appears to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Nathan
</span><br>
<span class="quotelev1">&gt; Correspondence
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim S. Woodall wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Nathan,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'll try to reproduce this sometime this week - but I'm pretty swamped.
</span><br>
<span class="quotelev2">&gt; &gt;Is Greg also seeing the same behavior?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;To expand on this further, orte_init() seg faults on both bluesteel
</span><br>
<span class="quotelev3">&gt; &gt;&gt;(32bit linux) and sparkplug (64bit linux) equally.  The required
</span><br>
<span class="quotelev3">&gt; &gt;&gt;condition is that orted must be running first (which of course we
</span><br>
<span class="quotelev3">&gt; &gt;&gt;require for our work - a persistent orte daemon and registry).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;[bluesteel]~/ptp &gt; ./dump_info
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Segmentation fault
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;[bluesteel]~/ptp &gt; gdb dump_info
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;GNU gdb 6.1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;GDB is free software, covered by the GNU General Public License, and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;you are
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;conditions.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;details.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;This GDB was configured as &quot;x86_64-suse-linux&quot;...Using host
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;libthread_db library &quot;/lib64/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;(gdb) run
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Starting program: /home/ndebard/ptp/dump_info
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;(gdb) where
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;#0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;#1  0x000000000045997d in orte_init_stage1 () at orte_init_stage1.c:419
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;#2  0x00000000004156a7 in orte_system_init () at orte_system_init.c:38
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;#3  0x00000000004151c7 in orte_init () at orte_init.c:46
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;#4  0x0000000000414cbb in main (argc=1, argv=0x7fbffff298) at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;dump_info.c:185
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;(gdb)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-- Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Correspondence
</span><br>
<span class="quotelev3">&gt; &gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Parallel Tools Team
</span><br>
<span class="quotelev3">&gt; &gt;&gt;High Performance Computing Environments
</span><br>
<span class="quotelev3">&gt; &gt;&gt;phone: 505-667-3428
</span><br>
<span class="quotelev3">&gt; &gt;&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Just to clarify:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;1: no orted started (meaning the MPIrun or registry programs will
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;start one by themselves) causes those programs to lock up.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;2: starting orted by hand (trying to get these programs to connect to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;a centralized one) causes the connecting programs to seg fault.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;-- Nathan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Correspondence
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Parallel Tools Team
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;High Performance Computing Environments
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;phone: 505-667-3428
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;So I dropped an .ompi_ignore into that directory, reconfigured, and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;compile worked (yay!).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;However, not a lot of progress: mpirun locks up, all my registry test
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;programs lock up as well.  If I start the orted by hand, then any of my
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;registry calling programs cause segfault:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;[sparkplug]~/ptp &gt; gdb sub_test
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;GNU gdb 6.1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;GDB is free software, covered by the GNU General Public License, and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;you are
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;conditions.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;details.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;This GDB was configured as &quot;x86_64-suse-linux&quot;...Using host
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;libthread_db library &quot;/lib64/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;(gdb) run
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;Starting program: /home/ndebard/ptp/sub_test
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;(gdb) where
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;#0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;#1  0x00000000004598a5 in orte_init_stage1 () at
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte_init_stage1.c:419 #2  0x00000000004155cf in orte_system_init ()
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; at orte_system_init.c:38 #3  0x00000000004150ef in orte_init () at
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte_init.c:46
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;#4  0x00000000004148a1 in main (argc=1, argv=0x7fbffff178) at
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;sub_test.c:60
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;(gdb)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Yes, I recompiled everything.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Here's an example of me trying something a little more complicated
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;(which I believe locks up for the same reason - something borked with
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;the registry interaction).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;[sparkplug]~/ompi-test &gt; bjssub -s 10000 -n 10 -i bash
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;Waiting for interactive job nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;(nodes 18 16 17 18 19 20 21 22 23 24 25)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;Starting interactive job.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;NODES=16,17,18,19,20,21,22,23,24,25
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;JOBID=18
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;so i got my nodes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; export OMPI_MCA_ptl_base_exclude=sm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; export
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;OMPI_MCA_pls_bproc_seed_priority=101
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;and set these envvars like we need to use Greg's bproc, without the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;2nd export the machine's load maxes and locks up.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; bpstat
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;Node(s)                            Status          Mode
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;User     Group   100-128                            down
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;---------- root     root    0-15
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;up              ---x------ vchandu  vchandu
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;16-25                              up              ---x------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;ndebard  ndebard
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;26-27                              up              ---x------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;root     root    28-30                              up
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;---x--x--x root     root    ndebard_at_sparkplug:~/ompi-test&gt; env | grep
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;NODES
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;NODES=16,17,18,19,20,21,22,23,24,25
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;yes, i really have the nodes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; mpicc -o test-mpi test-mpi.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;recompile for good measure
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; ls /tmp/openmpi-sessions-ndebard*
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;/bin/ls: /tmp/openmpi-sessions-ndebard*: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;proof that there's no left over old directory
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; mpirun -np 1 test-mpi
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;it never responds at this point - but I can kill it with ^C.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;mpirun: killing job...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;Killed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;-- Nathan
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Correspondence
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;Is this what Tim Prins was working on?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;On Aug 16, 2005, at 5:21 PM, Tim S. Woodall wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;I'm not sure why this is even building... Is someone working on this?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;I thought we had .ompi_ignore files in this directory.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;Tim
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;So I'm seeing all these nice emails about people developing on OMPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;today yet I can't get it to compile.  Am I out here in limbo on this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;or
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;are others in the same boat?  The errors I'm seeing are about some
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;bproc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;code calling undefined functions and they are linked again below.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;-- Nathan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;Correspondence
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;- Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;Parallel Tools Team
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;High Performance Computing Environments
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;phone: 505-667-3428
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;--------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Back from training and trying to test this but now OMPI doesn't
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;compile
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;at all:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-I../../../../include -I../../../.. -I../../../..
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-I../../../../include -I../../../../opal -I../../../../orte
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-I../../../../ompi -g -Wall -Wundef -Wno-long-long -Wsign-compare
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-Werror-implicit-function-declaration -fno-strict-aliasing -MT
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.lo -MD -MP -MF .deps/ras_lsf_bproc.Tpo -c
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.c -o ras_lsf_bproc.o
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.c: In function `orte_ras_lsf_bproc_node_insert':
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.c:32: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;`orte_ras_base_node_insert'
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.c: In function `orte_ras_lsf_bproc_node_query':
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.c:37: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;`orte_ras_base_node_query'
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;make[4]: *** [ras_lsf_bproc.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;make[4]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;`/home/ndebard/ompi/orte/mca/ras/lsf_bproc'
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;make[3]: Leaving directory `/home/ndebard/ompi/orte/mca/ras'
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;make[2]: Leaving directory `/home/ndebard/ompi/orte/mca'
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;make[1]: Leaving directory `/home/ndebard/ompi/orte'
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Clean SVN checkout this morning with configure:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;[sparkplug]~/ompi &gt; ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--without-threads --prefix=/home/ndebard/local/ompi
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--with-devel-headers
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-- Nathan
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Correspondence
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-- Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;This is now fixed in SVN.  You should no longer need the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--build=i586...  hack to compile 32 bit code on Opterons.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Brian
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Aug 12, 2005, at 3:17 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Aug 12, 2005, at 3:13 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;We've got a 64bit Linux (SUSE) box here.  For a variety of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; reasons (Java, JNI, linking in with OMPI libraries, etc which I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; won't get into)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I need to compile OMPI 32 bit (or get 64bit versions of a lot of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;other
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;libraries).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I get various compile errors when I try different things, but
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;first
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;let
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;me explain the system we have:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&lt;snip&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;This goes on and on and on actually.  And the 'is incompatible
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;i386:x86-64 output' looks to be repeated for every line before
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;error which actually caused the Make to bomb.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Any suggestions at all?  Surely someone must have tried to force
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;OMPI to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;build in 32bit mode on a 64bit machine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I don't think anyone has tried to build 32 bit on an Opteron,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which is the cause of the problems...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I think I know how to fix this, but won't happen until later in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the weekend.  I can't think of a good workaround until then. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Well, one possibility is to set the target like you were doing
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and disable ROMIO.  Actually, you'll also need to disable
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fortran 77.  So something like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;./configure [usual options] --build=i586-suse-linux --disable-io-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;romio --disable-f77
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;might just do the trick.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Brian Barrett
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Open MPI developer
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller             email: keller_at_[hidden]
  High Performance Computing         Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)          Fax: ++49 (0)711-678 7626
  Nobelstrasse 19,  R. O0.030        <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  70550 Stuttgart                      
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0201.php">Tim S. Woodall: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0199.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0196.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0201.php">Tim S. Woodall: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0201.php">Tim S. Woodall: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0203.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
