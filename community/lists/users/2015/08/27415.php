<?
$subject_val = "Re: [OMPI users] LAMA error - mpirun segfault";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  9 19:05:32 2015" -->
<!-- isoreceived="20150809230532" -->
<!-- sent="Sun, 9 Aug 2015 16:05:29 -0700" -->
<!-- isosent="20150809230529" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LAMA error - mpirun segfault" -->
<!-- id="CAMD57ocr5WKew51cW0gY_FtyyEHaF0EUXreNb-2ydwsvDFm7Zg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1439150126.4050.77.camel_at_lenovo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LAMA error - mpirun segfault<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-09 19:05:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27416.php">Nils Smeds: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>Previous message:</strong> <a href="27414.php">Nils Smeds: "[OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>In reply to:</strong> <a href="27414.php">Nils Smeds: "[OMPI users] LAMA error - mpirun segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27416.php">Nils Smeds: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The LAMA mapper hasn't been maintained or tested in some time, and probably
<br>
should be removed from the tarball at this point. However, you can use the
<br>
other mappers to obtain pretty much any pattern. What are you trying to do?
<br>
<p><p>On Sun, Aug 9, 2015 at 12:55 PM, Nils Smeds &lt;nsmeds_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to experiment with MPI process binding and the LAMA package
</span><br>
<span class="quotelev1">&gt; looks very promising for my needs. However, I am having problems in
</span><br>
<span class="quotelev1">&gt; that I get what appears to be internal errors in LAMA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From what I can tell my command line options are accepted gracefully,
</span><br>
<span class="quotelev1">&gt; but then when they are expected to be executed the application seg
</span><br>
<span class="quotelev1">&gt; -faults.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone seen similar issues? I have tried with Open-MPI 1.8.6 and
</span><br>
<span class="quotelev1">&gt; Open-MPI 1.8.8 with the same behaviour. I _think_ my command line
</span><br>
<span class="quotelev1">&gt; options are valid, and in any case I think it should generate an error
</span><br>
<span class="quotelev1">&gt; and not a crash if there were incorrect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Command line to be used on host 0 (host_225):
</span><br>
<span class="quotelev1">&gt; mpirun -np 32 -report-bindings -display-map -mca orte_base_help_aggregate
</span><br>
<span class="quotelev1">&gt; 0 \
</span><br>
<span class="quotelev1">&gt;  -x MXM_RDMA_PORTS=mlx5_0:1 -mca btl_openib_if_include mlx5_0:1 \
</span><br>
<span class="quotelev1">&gt;  --hostfile /home/lnsmeds/.lsbatch/1439148094.25601.hostfile \
</span><br>
<span class="quotelev1">&gt;  --prefix /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local -x
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH \
</span><br>
<span class="quotelev1">&gt;  --mca rmaps lama --mca rmaps_base_verbose 10 --mca rmaps_lama_map hcsnNb \
</span><br>
<span class="quotelev1">&gt;  --mca rmaps_lama_bind 1N --mca rmaps_lama_ordering s --mca
</span><br>
<span class="quotelev1">&gt; rmaps_lama_mppr 2:N,1:c  \
</span><br>
<span class="quotelev1">&gt;  -x custom_mxm_tl=rc -x MXM_TLS=self,shm,rc -x MXM_RC_QP_LIMIT=-1 -x
</span><br>
<span class="quotelev1">&gt; custom_fca=off -mca coll_fca_enable 0 \
</span><br>
<span class="quotelev1">&gt;  -x custom_hcol=on  -mca coll_hcoll_enable 1 -x
</span><br>
<span class="quotelev1">&gt; HCOLL_IB_IF_INCLUDE=mlx5_0:1 -x HCOLL_ENABLE_MCAST_ALL=1  \
</span><br>
<span class="quotelev1">&gt;  -x custom_mxm=on -mca pml yalla  ./myapplication.exe  2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sun Aug  9 21:20:56 CEST 2015
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca: base: components_register: registering rmaps
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; lama
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: Priority   0
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: Map   : hcsnNb
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: Bind  : 1N
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: MPPR  : 2:N,1:c
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: Order : s
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca: base: components_register: component lama register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [[18162,0],0] rmaps:base set policy with NULL
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca: base: components_open: opening rmaps components
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca: base: components_open: found loaded component lama
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:select: checking available component lama
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:select: Querying component [lama]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [[18162,0],0]: Final mapper priorities
</span><br>
<span class="quotelev1">&gt; [host_225:09102]        Mapper: lama Priority: 0
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps: mapping job [18162,1]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps: creating new map for job [18162,1]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps: nprocs 32
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps[139] mapping not given - using bysocket
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: Mapping job [18162,1]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: Revised Parameters -----
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: Map   : hcsnNb
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: Bind  : 1N
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: MPPR  : 2:N,1:c
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: Order : s
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Binding  : [1N]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Binding  :    1 x       NUMA
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Mapping  : [hcsnNb]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Mapping  : (0) Hw. Thread (8 vs 0)
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Mapping  : (1)       Core (7 vs 1)
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Mapping  : (2)     Socket (3 vs 2)
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Mapping  : (3)    Machine (0 vs 3)
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Mapping  : (4)       NUMA (2 vs 7)
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Mapping  : (5)      Board (1 vs 8)
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- MPPR     : [2:N,1:c]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- MPPR     :    2 at       NUMA
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- MPPR     :    1 at       Core
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Ordering : [s]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Ordering : Sequential
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [host_225:09102] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev1">&gt; [host_225:09102]     node: host_225 daemon: 0
</span><br>
<span class="quotelev1">&gt; [host_225:09102]     node: host_229 daemon: 1
</span><br>
<span class="quotelev1">&gt; [host_225:09102]     node: host_140 daemon: 2
</span><br>
<span class="quotelev1">&gt; [host_225:09102]     node: host_342 daemon: 3
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Building the Max Tree...
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Converting Remote Tree: host_225
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Converting Remote Tree: host_229
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Converting Remote Tree: host_140
</span><br>
<span class="quotelev1">&gt; [host_225:09102] mca:rmaps:lama: ----- Converting Remote Tree: host_342
</span><br>
<span class="quotelev1">&gt; [host_225:09102] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [host_225:09102] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [host_225:09102] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [host_225:09102] Failing at address: 0x60
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2b0ad199f710]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/openmpi/mca_rmaps_lama.so(+0x7366)[0x2b0ad625b366]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [ 2]
</span><br>
<span class="quotelev1">&gt; /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/openmpi/mca_rmaps_lama.so(+0x73c9)[0x2b0ad625b3c9]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/openmpi/mca_rmaps_lama.so(rmaps_lama_build_max_tree+0x63f)[0x2b0ad625a7cf]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/openmpi/mca_rmaps_lama.so(+0x3573)[0x2b0ad6257573]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/openmpi/mca_rmaps_lama.so(+0x2d7b)[0x2b0ad6256d7b]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/libopen-rte.so.7(orte_rmaps_base_map_job+0x6ad)[0x2b0ad078db0d]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0xa19)[0x2b0ad0a3d489]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [ 8] mpirun[0x4064e9]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [ 9] mpirun[0x4040f4]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [10]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b0ad1bccd1d]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] [11] mpirun[0x404019]
</span><br>
<span class="quotelev1">&gt; [host_225:09102] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Sun Aug  9 21:20:56 CEST 2015
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Post mortem with gdb on core file gives:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) info threads
</span><br>
<span class="quotelev1">&gt;   2 Thread 0x2b0ad4963700 (LWP 9104)  0x00002b0ad1c8f5e3 in select () from
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; * 1 Thread 0x2b0ad3734680 (LWP 9102)  opal_pointer_array_get_item
</span><br>
<span class="quotelev1">&gt; (node=0x7987e0, obj=0x7579f0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../openmpi-1.8.8/opal/class/opal_pointer_array.h:130
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  opal_pointer_array_get_item (node=0x7987e0, obj=0x7579f0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../openmpi-1.8.8/opal/class/opal_pointer_array.h:130
</span><br>
<span class="quotelev1">&gt; #1  rmaps_lama_annotate_node_for_mppr (node=0x7987e0, obj=0x7579f0)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_max_tree.c:377
</span><br>
<span class="quotelev1">&gt; #2  0x00002b0ad625b3c9 in rmaps_lama_annotate_node_for_mppr
</span><br>
<span class="quotelev1">&gt; (node=0x7987e0, obj=0x7579f0)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_max_tree.c:396
</span><br>
<span class="quotelev1">&gt; #3  0x00002b0ad625a7cf in rmaps_lama_build_max_tree (jdata=0x7987e0,
</span><br>
<span class="quotelev1">&gt; node_list=0x7579f0, max_tree=0x1, is_homogeneous=0x0)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_max_tree.c:226
</span><br>
<span class="quotelev1">&gt; #4  0x00002b0ad6257573 in orte_rmaps_lama_map_core (jdata=0x7987e0)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_module.c:662
</span><br>
<span class="quotelev1">&gt; #5  0x00002b0ad6256d7b in orte_rmaps_lama_map (jdata=0x7987e0)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_module.c:308
</span><br>
<span class="quotelev1">&gt; #6  0x00002b0ad078db0d in orte_rmaps_base_map_job (fd=7964640, args=31216,
</span><br>
<span class="quotelev1">&gt; cbdata=0x1)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.8/orte/mca/rmaps/base/rmaps_base_map_job.c:370
</span><br>
<span class="quotelev1">&gt; #7  0x00002b0ad0a3d489 in event_process_active_single_queue
</span><br>
<span class="quotelev1">&gt; (base=0x7987e0, flags=7698928)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../../../openmpi-1.8.8/opal/mca/event/libevent2021/libevent/event.c:1367
</span><br>
<span class="quotelev1">&gt; #8  event_process_active (base=0x7987e0, flags=7698928)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../../../openmpi-1.8.8/opal/mca/event/libevent2021/libevent/event.c:1437
</span><br>
<span class="quotelev1">&gt; #9  opal_libevent2021_event_base_loop (base=0x7987e0, flags=7698928)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../../../openmpi-1.8.8/opal/mca/event/libevent2021/libevent/event.c:1647
</span><br>
<span class="quotelev1">&gt; #10 0x00000000004064e9 in orterun (argc=63, argv=0x7fffa5fc68b8)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-1.8.8/orte/tools/orterun/orterun.c:1133
</span><br>
<span class="quotelev1">&gt; #11 0x00000000004040f4 in main (argc=63, argv=0x7fffa5fc68b8) at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.8/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb) thread 2
</span><br>
<span class="quotelev1">&gt; [Switching to thread 2 (Thread 0x2b0ad4963700 (LWP 9104))]#0
</span><br>
<span class="quotelev1">&gt; 0x00002b0ad1c8f5e3 in select () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x00002b0ad1c8f5e3 in select () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002b0ad4555b12 in listen_thread (obj=0xd)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-1.8.8/orte/mca/oob/tcp/oob_tcp_listener.c:685
</span><br>
<span class="quotelev1">&gt; #2  0x00002b0ad19979d1 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002b0ad1c96b6d in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) thread 1
</span><br>
<span class="quotelev1">&gt; (gdb) list 125,140
</span><br>
<span class="quotelev1">&gt; 125     static inline void
</span><br>
<span class="quotelev1">&gt; *opal_pointer_array_get_item(opal_pointer_array_t *table,
</span><br>
<span class="quotelev1">&gt; 126                                                     int element_index)
</span><br>
<span class="quotelev1">&gt; 127     {
</span><br>
<span class="quotelev1">&gt; 128         void *p;
</span><br>
<span class="quotelev1">&gt; 129
</span><br>
<span class="quotelev1">&gt; 130         if( table-&gt;size &lt;= element_index ) {
</span><br>
<span class="quotelev1">&gt; 131             return NULL;
</span><br>
<span class="quotelev1">&gt; 132         }
</span><br>
<span class="quotelev1">&gt; 133         OPAL_THREAD_LOCK(&amp;(table-&gt;lock));
</span><br>
<span class="quotelev1">&gt; 134         p = table-&gt;addr[element_index];
</span><br>
<span class="quotelev1">&gt; 135         OPAL_THREAD_UNLOCK(&amp;(table-&gt;lock));
</span><br>
<span class="quotelev1">&gt; 136         return p;
</span><br>
<span class="quotelev1">&gt; 137     }
</span><br>
<span class="quotelev1">&gt; 138
</span><br>
<span class="quotelev1">&gt; 139
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #1  rmaps_lama_annotate_node_for_mppr (node=0x7987e0, obj=0x7579f0)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_max_tree.c:377
</span><br>
<span class="quotelev1">&gt; 377         mppr_accounting =
</span><br>
<span class="quotelev1">&gt; (rmaps_lama_node_mppr_t*)opal_pointer_array_get_item(hwloc_userdata-&gt;node_mppr,
</span><br>
<span class="quotelev1">&gt; node-&gt;index);
</span><br>
<span class="quotelev1">&gt; (gdb) list 370,390
</span><br>
<span class="quotelev1">&gt; 370             }
</span><br>
<span class="quotelev1">&gt; 371         }
</span><br>
<span class="quotelev1">&gt; 372
</span><br>
<span class="quotelev1">&gt; 373
</span><br>
<span class="quotelev1">&gt; 374         /*
</span><br>
<span class="quotelev1">&gt; 375          * Add node information if it is not already there
</span><br>
<span class="quotelev1">&gt; 376          */
</span><br>
<span class="quotelev1">&gt; 377         mppr_accounting =
</span><br>
<span class="quotelev1">&gt; (rmaps_lama_node_mppr_t*)opal_pointer_array_get_item(hwloc_userdata-&gt;node_mppr,
</span><br>
<span class="quotelev1">&gt; node-&gt;index);
</span><br>
<span class="quotelev1">&gt; 378         if( NULL == mppr_accounting ) {
</span><br>
<span class="quotelev1">&gt; 379             /*
</span><br>
<span class="quotelev1">&gt; 380              * Add MPPR accounting for this node associated with this
</span><br>
<span class="quotelev1">&gt; object
</span><br>
<span class="quotelev1">&gt; 381              */
</span><br>
<span class="quotelev1">&gt; 382             rmaps_lama_convert_hwloc_key_to_lama_key(obj-&gt;type,
</span><br>
<span class="quotelev1">&gt; obj-&gt;attr-&gt;cache.depth, &amp;lama_key);
</span><br>
<span class="quotelev1">&gt; 383
</span><br>
<span class="quotelev1">&gt; 384             mppr_accounting =
</span><br>
<span class="quotelev1">&gt; (rmaps_lama_node_mppr_t*)malloc(sizeof(rmaps_lama_node_mppr_t));
</span><br>
<span class="quotelev1">&gt; 385             mppr_accounting-&gt;max = rmaps_lama_get_mppr_for_key(node,
</span><br>
<span class="quotelev1">&gt; lama_key);
</span><br>
<span class="quotelev1">&gt; 386             mppr_accounting-&gt;cur =  0;
</span><br>
<span class="quotelev1">&gt; 387
</span><br>
<span class="quotelev1">&gt; 388             opal_pointer_array_set_item(hwloc_userdata-&gt;node_mppr,
</span><br>
<span class="quotelev1">&gt; node-&gt;index, mppr_accounting);
</span><br>
<span class="quotelev1">&gt; 389         }
</span><br>
<span class="quotelev1">&gt; 390
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) p hwloc_userdata-&gt;node_mppr
</span><br>
<span class="quotelev1">&gt; $1 = (opal_pointer_array_t *) 0x8
</span><br>
<span class="quotelev1">&gt; (gdb) p *hwloc_userdata-&gt;node_mppr
</span><br>
<span class="quotelev1">&gt; Cannot access memory at address 0x8
</span><br>
<span class="quotelev1">&gt; (gdb) p node-&gt;index
</span><br>
<span class="quotelev1">&gt; $2 = 0
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27414.php">http://www.open-mpi.org/community/lists/users/2015/08/27414.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27415/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27416.php">Nils Smeds: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>Previous message:</strong> <a href="27414.php">Nils Smeds: "[OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>In reply to:</strong> <a href="27414.php">Nils Smeds: "[OMPI users] LAMA error - mpirun segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27416.php">Nils Smeds: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
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
