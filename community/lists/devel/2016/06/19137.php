<?
$subject_val = "[OMPI devel]  Master: Segfault seen while running imb tests";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 03:34:14 2016" -->
<!-- isoreceived="20160628073414" -->
<!-- sent="Tue, 28 Jun 2016 13:03:31 +0530" -->
<!-- isosent="20160628073331" -->
<!-- name="Potnuri Bharat Teja" -->
<!-- email="bharat_at_[hidden]" -->
<!-- subject="[OMPI devel]  Master: Segfault seen while running imb tests" -->
<!-- id="20160628073330.GC11044_at_t5fpga-b1.asicdesigners.com" -->
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
<strong>Subject:</strong> [OMPI devel]  Master: Segfault seen while running imb tests<br>
<strong>From:</strong> Potnuri Bharat Teja (<em>bharat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-28 03:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19138.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Master: Segfault seen while running imb tests"</a>
<li><strong>Previous message:</strong> <a href="19136.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI summer dev meeting: last chance to fill out the doodle"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19138.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Master: Segfault seen while running imb tests"</a>
<li><strong>Reply:</strong> <a href="19138.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Master: Segfault seen while running imb tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
I am seeing the following segfault with openmpi-master.
<br>
<p><p>[root_at_maneybhanjang ~]# /usr/mpi/gcc/openmpi-2.0-dev/bin/mpirun
<br>
--allow-run-as-root --hostfile /root/mpd.hosts -np 8 --prefix
<br>
/usr/mpi/gcc/openmpi-2.0-dev/ --map-by node --display-allocation
<br>
--oversubscribe --mca btl openib,sm,self
<br>
/usr/mpi/gcc/openmpi-2.0-dev/tests/IMB/IMB-MPI1
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
maneybhanjang: flags=0x01 slots=8 max_slots=0 slots_inuse=0 state=UP
<br>
10.193.184.162: flags=0x03 slots=4 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
=================================================================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[maneybhanjang:28532] *** Process received signal ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[maneybhanjang:28532] Signal: Segmentation fault (11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[maneybhanjang:28532] Signal code: Invalid permissions (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[maneybhanjang:28532] Failing at address: 0x106ca70
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[maneybhanjang:28532] [ 0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/libpthread.so.0[0x3aea40f710]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[maneybhanjang:28532] [ 1] [0x106ca70]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[maneybhanjang:28532] *** End of error message ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[tonglu:02068] *** Process received signal ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[tonglu:02068] Signal: Segmentation fault (11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[tonglu:02068] Signal code: Invalid permissions (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[tonglu:02068] Failing at address: 0x2478500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[tonglu:02068] [ 0] /lib64/libpthread.so.0[0x3ef5c0f710]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[tonglu:02068] [ 1] [0x2478500]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[tonglu:02068] *** End of error message ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bash: line 1:  2068 Segmentation fault      (core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dumped) /usr/mpi/gcc/openmpi-2.0-dev/bin/orted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--hnp-topo-sig 0N:2S:0L3:4L2:8L1:8C:8H:x86_64 -mca ess
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;env&quot; -mca ess_base_jobid &quot;3921674240&quot; -mca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ess_base_vpid 1 -mca ess_base_num_procs &quot;2&quot; -mca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_hnp_uri
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;3921674240.0;usock;tcp://10.193.184.161,102.1.1.161,102.2.2.161:43160&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca btl &quot;openib,sm,self&quot; -mca plm &quot;rsh&quot; -mca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rmaps_base_mapping_policy &quot;node&quot; -mca orte_display_alloc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;1&quot; -mca rmaps_base_oversubscribe &quot;1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Segmentation fault (core dumped)
<br>
[root_at_maneybhanjang ~]# dmesg
<br>
mpirun[28532]: segfault at 106ca70 ip 000000000106ca70 sp 00007fffc00a7f28 error 15
<br>
<p>Segfault is seen on the other peer too.
<br>
[root_at_tonglu ~]# dmesg
<br>
orted[2068]: segfault at 2478500 ip 0000000002478500 sp 00007fff521c2e68 error 15
<br>
<p>gdb on coredump points me to orted/pmix/pmix_server_gen.c:80
<br>
Following is the Back trace.
<br>
[root_at_maneybhanjang ~]# gdb /usr/mpi/gcc/openmpi-2.0-dev/bin/mpirun core.28532
<br>
Program terminated with signal 11, Segmentation fault.
<br>
#0  0x000000000106ca70 in ?? ()
<br>
Missing separate debuginfos, use: debuginfo-install
<br>
glibc-2.12-1.149.el6.x86_64 libgcc-4.4.7-11.el6.x86_64
<br>
libudev-147-2.57.el6.x86_64
<br>
(gdb) bt
<br>
#0  0x000000000106ca70 in ?? ()
<br>
#1  0x00002b217f7a43aa in _client_conn (sd=-1, args=4,
<br>
cbdata=0x2b2188022260)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at orted/pmix/pmix_server_gen.c:80
<br>
#2  0x00002b217fad5a7c in event_process_active_single_queue
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(base=0xfcc730, flags=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at event.c:1370
<br>
#3  event_process_active (base=0xfcc730, flags=1) at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event.c:1440
<br>
#4  opal_libevent2022_event_base_loop (base=0xfcc730, flags=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at event.c:1644
<br>
#5  0x00000000004014d3 in orterun (argc=16, argv=0x7fffc00a81e8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at orterun.c:192
<br>
#6  0x0000000000400f04 in main (argc=16, argv=0x7fffc00a81e8) at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;main.c:13
<br>
(gdb) frame
<br>
#0  0x000000000106ca70 in ?? ()
<br>
(gdb) up
<br>
#1  0x00002b217f7a43aa in _client_conn (sd=-1, args=4,
<br>
cbdata=0x2b2188022260) at orted/pmix/pmix_server_gen.c:80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;80              cd-&gt;cbfunc(OPAL_SUCCESS, cd-&gt;cbdata);
<br>
<p><p>Here is the backtrace of peer machine, pointing to same line:
<br>
<p>[root_at_tonglu ~]# gdb /usr/mpi/gcc/openmpi-2.0-dev/bin/orted core.2068
<br>
Program terminated with signal 11, Segmentation fault.
<br>
#0  0x0000000002478500 in ?? ()
<br>
Missing separate debuginfos, use: debuginfo-install
<br>
glibc-2.12-1.149.el6.x86_64 libgcc-4.4.7-11.el6.x86_64
<br>
libudev-147-2.57.el6.x86_64 numactl-2.0.9-2.el6.x86_64
<br>
(gdb) bt
<br>
#0  0x0000000002478500 in ?? ()
<br>
#1  0x00002af4511433ba in _client_conn (sd=-1, args=4,
<br>
cbdata=0x2af458022260)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at orted/pmix/pmix_server_gen.c:80
<br>
#2  0x00002af451474cac in event_process_active_single_queue
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(base=0x2408e90, flags=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at event.c:1370
<br>
#3  event_process_active (base=0x2408e90, flags=1) at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event.c:1440
<br>
#4  opal_libevent2022_event_base_loop (base=0x2408e90, flags=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at event.c:1644
<br>
#5  0x00002af451123c57 in orte_daemon (argc=33,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv=0x7fff521c33d8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at orted/orted_main.c:859
<br>
#6  0x000000000040081a in main (argc=33,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv=0x7fff521c33d8) at orted.c:60
<br>
(gdb) frame
<br>
#0  0x0000000002478500 in ?? ()
<br>
(gdb) up
<br>
#1  0x00002af4511433ba in _client_conn (sd=-1, args=4,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cbdata=0x2af458022260)
<br>
&nbsp;at orted/pmix/pmix_server_gen.c:80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;80              cd-&gt;cbfunc(OPAL_SUCCESS, cd-&gt;cbdata);
<br>
<p>I am using the tot of openmpi-master :
<br>
commit 5795682aa56ce8f22e518462b22cfee49d407216
<br>
Merge: 5d32282 1bb7788
<br>
Author: Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
<br>
Date:   Mon Jun 27 12:59:20 2016 -0400
<br>
Merge pull request #1817 from shamisp/topic/oshmem_init
<br>
OSHMEM: Removing erroneous initialization check
<br>
<p>I am happy to provide any further information and would appreciate any suggestions regarding the issue.
<br>
<p>Thanks,
<br>
Bharat.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19138.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Master: Segfault seen while running imb tests"</a>
<li><strong>Previous message:</strong> <a href="19136.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI summer dev meeting: last chance to fill out the doodle"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19138.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Master: Segfault seen while running imb tests"</a>
<li><strong>Reply:</strong> <a href="19138.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Master: Segfault seen while running imb tests"</a>
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
