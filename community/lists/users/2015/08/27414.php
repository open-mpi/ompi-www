<?
$subject_val = "[OMPI users] LAMA error - mpirun segfault";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  9 15:55:34 2015" -->
<!-- isoreceived="20150809195534" -->
<!-- sent="Sun, 9 Aug 2015 19:55:28 +0000" -->
<!-- isosent="20150809195528" -->
<!-- name="Nils Smeds" -->
<!-- email="nsmeds_at_[hidden]" -->
<!-- subject="[OMPI users] LAMA error - mpirun segfault" -->
<!-- id="1439150126.4050.77.camel_at_lenovo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] LAMA error - mpirun segfault<br>
<strong>From:</strong> Nils Smeds (<em>nsmeds_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-09 15:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27415.php">Ralph Castain: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>Previous message:</strong> <a href="27413.php">James Spencer: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27415.php">Ralph Castain: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>Reply:</strong> <a href="27415.php">Ralph Castain: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>Maybe reply:</strong> <a href="27416.php">Nils Smeds: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>

<br>
I am trying to experiment with MPI process binding and the LAMA package
<br>
looks very promising for my needs. However, I am having problems in
<br>
that I get what appears to be internal errors in LAMA.
<br>

<br>
From what I can tell my command line options are accepted gracefully,
<br>
but then when they are expected to be executed the application seg
<br>
-faults.
<br>

<br>
Has anyone seen similar issues? I have tried with Open-MPI 1.8.6 and
<br>
Open-MPI 1.8.8 with the same behaviour. I _think_ my command line
<br>
options are valid, and in any case I think it should generate an error
<br>
and not a crash if there were incorrect.
<br>

<br>
Command line to be used on host 0 (host_225):
<br>
mpirun -np 32 -report-bindings -display-map -mca orte_base_help_aggregate 0 \
<br>
&nbsp;-x MXM_RDMA_PORTS=mlx5_0:1 -mca btl_openib_if_include mlx5_0:1 \
<br>
&nbsp;--hostfile /home/lnsmeds/.lsbatch/1439148094.25601.hostfile \
<br>
&nbsp;--prefix /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local -x LD_LIBRARY_PATH \
<br>
&nbsp;--mca rmaps lama --mca rmaps_base_verbose 10 --mca rmaps_lama_map hcsnNb \
<br>
&nbsp;--mca rmaps_lama_bind 1N --mca rmaps_lama_ordering s --mca rmaps_lama_mppr 2:N,1:c  \
<br>
&nbsp;-x custom_mxm_tl=rc -x MXM_TLS=self,shm,rc -x MXM_RC_QP_LIMIT=-1 -x custom_fca=off -mca coll_fca_enable 0 \
<br>
&nbsp;-x custom_hcol=on  -mca coll_hcoll_enable 1 -x HCOLL_IB_IF_INCLUDE=mlx5_0:1 -x HCOLL_ENABLE_MCAST_ALL=1  \
<br>
&nbsp;-x custom_mxm=on -mca pml yalla  ./myapplication.exe  2&gt;&amp;1
<br>

<br>
Sun Aug  9 21:20:56 CEST 2015
<br>
[host_225:09102] mca: base: components_register: registering rmaps components
<br>
[host_225:09102] mca: base: components_register: found loaded component lama
<br>
[host_225:09102] mca:rmaps:lama: Priority   0
<br>
[host_225:09102] mca:rmaps:lama: Map   : hcsnNb
<br>
[host_225:09102] mca:rmaps:lama: Bind  : 1N
<br>
[host_225:09102] mca:rmaps:lama: MPPR  : 2:N,1:c
<br>
[host_225:09102] mca:rmaps:lama: Order : s
<br>
[host_225:09102] mca: base: components_register: component lama register function successful
<br>
[host_225:09102] [[18162,0],0] rmaps:base set policy with NULL
<br>
[host_225:09102] mca: base: components_open: opening rmaps components
<br>
[host_225:09102] mca: base: components_open: found loaded component lama
<br>
[host_225:09102] mca:rmaps:select: checking available component lama
<br>
[host_225:09102] mca:rmaps:select: Querying component [lama]
<br>
[host_225:09102] [[18162,0],0]: Final mapper priorities
<br>
[host_225:09102] 	Mapper: lama Priority: 0
<br>
[host_225:09102] mca:rmaps: mapping job [18162,1]
<br>
[host_225:09102] mca:rmaps: creating new map for job [18162,1]
<br>
[host_225:09102] mca:rmaps: nprocs 32
<br>
[host_225:09102] mca:rmaps[139] mapping not given - using bysocket
<br>
[host_225:09102] mca:rmaps:lama: Mapping job [18162,1]
<br>
[host_225:09102] mca:rmaps:lama: Revised Parameters -----
<br>
[host_225:09102] mca:rmaps:lama: Map   : hcsnNb
<br>
[host_225:09102] mca:rmaps:lama: Bind  : 1N
<br>
[host_225:09102] mca:rmaps:lama: MPPR  : 2:N,1:c
<br>
[host_225:09102] mca:rmaps:lama: Order : s
<br>
[host_225:09102] mca:rmaps:lama: ---------------------------------
<br>
[host_225:09102] mca:rmaps:lama: ----- Binding  : [1N]
<br>
[host_225:09102] mca:rmaps:lama: ----- Binding  :    1 x       NUMA
<br>
[host_225:09102] mca:rmaps:lama: ---------------------------------
<br>
[host_225:09102] mca:rmaps:lama: ----- Mapping  : [hcsnNb]
<br>
[host_225:09102] mca:rmaps:lama: ----- Mapping  : (0) Hw. Thread (8 vs 0)
<br>
[host_225:09102] mca:rmaps:lama: ----- Mapping  : (1)       Core (7 vs 1)
<br>
[host_225:09102] mca:rmaps:lama: ----- Mapping  : (2)     Socket (3 vs 2)
<br>
[host_225:09102] mca:rmaps:lama: ----- Mapping  : (3)    Machine (0 vs 3)
<br>
[host_225:09102] mca:rmaps:lama: ----- Mapping  : (4)       NUMA (2 vs 7)
<br>
[host_225:09102] mca:rmaps:lama: ----- Mapping  : (5)      Board (1 vs 8)
<br>
[host_225:09102] mca:rmaps:lama: ---------------------------------
<br>
[host_225:09102] mca:rmaps:lama: ----- MPPR     : [2:N,1:c]
<br>
[host_225:09102] mca:rmaps:lama: ----- MPPR     :    2 at       NUMA
<br>
[host_225:09102] mca:rmaps:lama: ----- MPPR     :    1 at       Core
<br>
[host_225:09102] mca:rmaps:lama: ---------------------------------
<br>
[host_225:09102] mca:rmaps:lama: ----- Ordering : [s]
<br>
[host_225:09102] mca:rmaps:lama: ----- Ordering : Sequential
<br>
[host_225:09102] mca:rmaps:lama: ---------------------------------
<br>
[host_225:09102] AVAILABLE NODES FOR MAPPING:
<br>
[host_225:09102]     node: host_225 daemon: 0
<br>
[host_225:09102]     node: host_229 daemon: 1
<br>
[host_225:09102]     node: host_140 daemon: 2
<br>
[host_225:09102]     node: host_342 daemon: 3
<br>
[host_225:09102] mca:rmaps:lama: ---------------------------------
<br>
[host_225:09102] mca:rmaps:lama: ----- Building the Max Tree...
<br>
[host_225:09102] mca:rmaps:lama: ---------------------------------
<br>
[host_225:09102] mca:rmaps:lama: ----- Converting Remote Tree: host_225
<br>
[host_225:09102] mca:rmaps:lama: ----- Converting Remote Tree: host_229
<br>
[host_225:09102] mca:rmaps:lama: ----- Converting Remote Tree: host_140
<br>
[host_225:09102] mca:rmaps:lama: ----- Converting Remote Tree: host_342
<br>
[host_225:09102] *** Process received signal ***
<br>
[host_225:09102] Signal: Segmentation fault (11)
<br>
[host_225:09102] Signal code: Address not mapped (1)
<br>
[host_225:09102] Failing at address: 0x60
<br>
[host_225:09102] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2b0ad199f710]
<br>
[host_225:09102] [ 1] /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/openmpi/mca_rmaps_lama.so(+0x7366)[0x2b0ad625b366]
<br>
[host_225:09102] [ 2] /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/openmpi/mca_rmaps_lama.so(+0x73c9)[0x2b0ad625b3c9]
<br>
[host_225:09102] [ 3] /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/openmpi/mca_rmaps_lama.so(rmaps_lama_build_max_tree+0x63f)[0x2b0ad625a7cf]
<br>
[host_225:09102] [ 4] /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/openmpi/mca_rmaps_lama.so(+0x3573)[0x2b0ad6257573]
<br>
[host_225:09102] [ 5] /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/openmpi/mca_rmaps_lama.so(+0x2d7b)[0x2b0ad6256d7b]
<br>
[host_225:09102] [ 6] /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/libopen-rte.so.7(orte_rmaps_base_map_job+0x6ad)[0x2b0ad078db0d]
<br>
[host_225:09102] [ 7] /hpc/base/mellanox/hpcx/exp/icc/ompi-mellanox-v1.8-local/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0xa19)[0x2b0ad0a3d489]
<br>
[host_225:09102] [ 8] mpirun[0x4064e9]
<br>
[host_225:09102] [ 9] mpirun[0x4040f4]
<br>
[host_225:09102] [10] /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b0ad1bccd1d]
<br>
[host_225:09102] [11] mpirun[0x404019]
<br>
[host_225:09102] *** End of error message ***
<br>
Sun Aug  9 21:20:56 CEST 2015
<br>

<br>

<br>
Post mortem with gdb on core file gives:
<br>

<br>
(gdb) info threads
<br>
&nbsp;&nbsp;2 Thread 0x2b0ad4963700 (LWP 9104)  0x00002b0ad1c8f5e3 in select () from /lib64/libc.so.6
<br>
* 1 Thread 0x2b0ad3734680 (LWP 9102)  opal_pointer_array_get_item (node=0x7987e0, obj=0x7579f0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-1.8.8/opal/class/opal_pointer_array.h:130
<br>
(gdb) where
<br>
#0  opal_pointer_array_get_item (node=0x7987e0, obj=0x7579f0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-1.8.8/opal/class/opal_pointer_array.h:130
<br>
#1  rmaps_lama_annotate_node_for_mppr (node=0x7987e0, obj=0x7579f0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_max_tree.c:377
<br>
#2  0x00002b0ad625b3c9 in rmaps_lama_annotate_node_for_mppr (node=0x7987e0, obj=0x7579f0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_max_tree.c:396
<br>
#3  0x00002b0ad625a7cf in rmaps_lama_build_max_tree (jdata=0x7987e0, node_list=0x7579f0, max_tree=0x1, is_homogeneous=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_max_tree.c:226
<br>
#4  0x00002b0ad6257573 in orte_rmaps_lama_map_core (jdata=0x7987e0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_module.c:662
<br>
#5  0x00002b0ad6256d7b in orte_rmaps_lama_map (jdata=0x7987e0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_module.c:308
<br>
#6  0x00002b0ad078db0d in orte_rmaps_base_map_job (fd=7964640, args=31216, cbdata=0x1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.8.8/orte/mca/rmaps/base/rmaps_base_map_job.c:370
<br>
#7  0x00002b0ad0a3d489 in event_process_active_single_queue (base=0x7987e0, flags=7698928)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../../openmpi-1.8.8/opal/mca/event/libevent2021/libevent/event.c:1367
<br>
#8  event_process_active (base=0x7987e0, flags=7698928)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../../openmpi-1.8.8/opal/mca/event/libevent2021/libevent/event.c:1437
<br>
#9  opal_libevent2021_event_base_loop (base=0x7987e0, flags=7698928)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../../openmpi-1.8.8/opal/mca/event/libevent2021/libevent/event.c:1647
<br>
#10 0x00000000004064e9 in orterun (argc=63, argv=0x7fffa5fc68b8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.8.8/orte/tools/orterun/orterun.c:1133
<br>
#11 0x00000000004040f4 in main (argc=63, argv=0x7fffa5fc68b8) at ../../../../../openmpi-1.8.8/orte/tools/orterun/main.c:13
<br>
(gdb) thread 2
<br>
[Switching to thread 2 (Thread 0x2b0ad4963700 (LWP 9104))]#0  0x00002b0ad1c8f5e3 in select () from /lib64/libc.so.6
<br>
(gdb) where
<br>
#0  0x00002b0ad1c8f5e3 in select () from /lib64/libc.so.6
<br>
#1  0x00002b0ad4555b12 in listen_thread (obj=0xd)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-1.8.8/orte/mca/oob/tcp/oob_tcp_listener.c:685
<br>
#2  0x00002b0ad19979d1 in start_thread () from /lib64/libpthread.so.0
<br>
#3  0x00002b0ad1c96b6d in clone () from /lib64/libc.so.6
<br>

<br>
(gdb) thread 1
<br>
(gdb) list 125,140
<br>
125	static inline void *opal_pointer_array_get_item(opal_pointer_array_t *table, 
<br>
126	                                                int element_index)
<br>
127	{
<br>
128	    void *p;
<br>
129	
<br>
130	    if( table-&gt;size &lt;= element_index ) {
<br>
131	        return NULL;
<br>
132	    }
<br>
133	    OPAL_THREAD_LOCK(&amp;(table-&gt;lock));
<br>
134	    p = table-&gt;addr[element_index];
<br>
135	    OPAL_THREAD_UNLOCK(&amp;(table-&gt;lock));
<br>
136	    return p;
<br>
137	}
<br>
138	
<br>
139	
<br>

<br>
(gdb) up
<br>
#1  rmaps_lama_annotate_node_for_mppr (node=0x7987e0, obj=0x7579f0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-1.8.8/orte/mca/rmaps/lama/rmaps_lama_max_tree.c:377
<br>
377	    mppr_accounting = (rmaps_lama_node_mppr_t*)opal_pointer_array_get_item(hwloc_userdata-&gt;node_mppr, node-&gt;index);
<br>
(gdb) list 370,390
<br>
370	        }
<br>
371	    }
<br>
372	
<br>
373	
<br>
374	    /*
<br>
375	     * Add node information if it is not already there
<br>
376	     */
<br>
377	    mppr_accounting = (rmaps_lama_node_mppr_t*)opal_pointer_array_get_item(hwloc_userdata-&gt;node_mppr, node-&gt;index);
<br>
378	    if( NULL == mppr_accounting ) {
<br>
379	        /*
<br>
380	         * Add MPPR accounting for this node associated with this object
<br>
381	         */
<br>
382	        rmaps_lama_convert_hwloc_key_to_lama_key(obj-&gt;type, obj-&gt;attr-&gt;cache.depth, &amp;lama_key);
<br>
383	
<br>
384	        mppr_accounting = (rmaps_lama_node_mppr_t*)malloc(sizeof(rmaps_lama_node_mppr_t));
<br>
385	        mppr_accounting-&gt;max = rmaps_lama_get_mppr_for_key(node, lama_key);
<br>
386	        mppr_accounting-&gt;cur =  0;
<br>
387	
<br>
388	        opal_pointer_array_set_item(hwloc_userdata-&gt;node_mppr, node-&gt;index, mppr_accounting);
<br>
389	    }
<br>
390	
<br>

<br>
(gdb) p hwloc_userdata-&gt;node_mppr
<br>
$1 = (opal_pointer_array_t *) 0x8
<br>
(gdb) p *hwloc_userdata-&gt;node_mppr
<br>
Cannot access memory at address 0x8
<br>
(gdb) p node-&gt;index
<br>
$2 = 0<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27415.php">Ralph Castain: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>Previous message:</strong> <a href="27413.php">James Spencer: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27415.php">Ralph Castain: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>Reply:</strong> <a href="27415.php">Ralph Castain: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>Maybe reply:</strong> <a href="27416.php">Nils Smeds: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
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
