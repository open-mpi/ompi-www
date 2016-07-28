<?
$subject_val = "[OMPI devel] mpirun does not honor rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 10:22:32 2014" -->
<!-- isoreceived="20141105152232" -->
<!-- sent="Wed, 05 Nov 2014 10:21:56 -0500" -->
<!-- isosent="20141105152156" -->
<!-- name="twurgl_at_[hidden]" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun does not honor rankfile" -->
<!-- id="y9bh9ydd65n.fsf_at_rds4020.akr.goodyear.com" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun does not honor rankfile<br>
<strong>From:</strong> <a href="mailto:twurgl_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20mpirun%20does%20not%20honor%20rankfile"><em>twurgl_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-11-05 10:21:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16200.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16198.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16220.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Reply:</strong> <a href="16220.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using openmpi v 1.8.3 and LSF 9.1.3.
<br>
<p>LSF creates a rankfile that looks like:
<br>
<p>RANK_FILE:
<br>
======================================================================
<br>
rank 0=mach1 slot=0
<br>
rank 1=mach1 slot=4
<br>
rank 2=mach1 slot=8
<br>
rank 3=mach1 slot=12
<br>
rank 4=mach1 slot=16
<br>
rank 5=mach1 slot=20
<br>
rank 6=mach1 slot=24
<br>
rank 7=mach1 slot=28
<br>
rank 8=mach1 slot=32
<br>
rank 9=mach1 slot=36
<br>
rank 10=mach1 slot=40
<br>
rank 11=mach1 slot=44
<br>
rank 12=mach1 slot=1
<br>
rank 13=mach1 slot=5
<br>
rank 14=mach1 slot=9
<br>
rank 15=mach1 slot=13
<br>
<p>which really are the cores I want to use, in order. 
<br>
<p>I logon to this machine and type (all on one line):
<br>
<p>/apps/share/openmpi/1.8.3.I1217913/bin/mpirun \
<br>
&nbsp;&nbsp;--mca orte_base_help_aggregate 0 \
<br>
&nbsp;&nbsp;-v -display-devel-allocation \
<br>
&nbsp;&nbsp;-display-devel-map \
<br>
&nbsp;&nbsp;--rankfile RANK_FILE \
<br>
&nbsp;&nbsp;--mca btl openib,tcp,sm,self \
<br>
&nbsp;&nbsp;--x LD_LIBRARY_PATH \
<br>
&nbsp;&nbsp;--np 16 \
<br>
&nbsp;&nbsp;my_executable \
<br>
&nbsp;&nbsp;-i model.i \
<br>
&nbsp;&nbsp;-l model.o
<br>
<p>And I get the following on the screen:
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mach1: slots=16 max_slots=0 slots_inuse=0 state=UP
<br>
=================================================================
<br>
&nbsp;Data for JOB [52387,1] offset 0
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: rank_file  Mapping policy: BYUSER  Ranking policy: SLOT
<br>
&nbsp;Binding policy: CPUSET  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0	New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: mach1	 	Launch id: -1	State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[52387,0],0]	Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 16	Slots in use: 16	Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 16	Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 16	Next node_rank: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 0	Node rank: 0	App rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 1	Node rank: 1	App rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 2	Node rank: 2	App rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 3	Node rank: 3	App rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 4	Node rank: 4	App rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 5	Node rank: 5	App rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 33
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],6]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 6	Node rank: 6	App rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],7]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 7	Node rank: 7	App rank: 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],8]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 8	Node rank: 8	App rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],9]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 9	Node rank: 9	App rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],10]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 10	Node rank: 10	App rank: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],11]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 11	Node rank: 11	App rank: 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],12]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 12	Node rank: 12	App rank: 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],13]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 13	Node rank: 13	App rank: 13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],14]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 14	Node rank: 14	App rank: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[52387,1],15]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 15	Node rank: 15	App rank: 15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: UNKNOWN	Bind location: (null)	Binding: 5
<br>
<p>And a numa-map of the node shows:
<br>
<p>&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5     N6     N7 ]
<br>
31044 my_executable         0    443.3M [ 443.3M     0      0      0      0      0      0      0  ]
<br>
31045 my_executable        16    459.7M [ 459.7M     0      0      0      0      0      0      0  ]
<br>
31046 my_executable        32    435.0M [     0  435.0M     0      0      0      0      0      0  ]
<br>
31047 my_executable         1    468.8M [     0      0  468.8M     0      0      0      0      0  ]
<br>
31048 my_executable        17    493.2M [     0      0  493.2M     0      0      0      0      0  ]
<br>
31049 my_executable        33    498.0M [     0      0      0  498.0M     0      0      0      0  ]
<br>
31050 my_executable         2    501.2M [     0      0      0      0  501.2M     0      0      0  ]
<br>
31051 my_executable        18    502.4M [     0      0      0      0  502.4M     0      0      0  ]
<br>
31052 my_executable        34    500.5M [     0      0      0      0      0  500.5M     0      0  ]
<br>
31053 my_executable         3    515.6M [     0      0      0      0      0      0  515.6M     0  ]
<br>
31054 my_executable        19    508.1M [     0      0      0      0      0      0  508.1M     0  ]
<br>
31055 my_executable        35    503.9M [     0      0      0      0      0      0      0  503.9M ]
<br>
31056 my_executable         4    502.1M [ 502.1M     0      0      0      0      0      0      0  ]
<br>
31057 my_executable        20    515.2M [ 515.2M     0      0      0      0      0      0      0  ]
<br>
31058 my_executable        36    508.1M [     0  508.1M     0      0      0      0      0      0  ]
<br>
31059 my_executable         5    446.7M [     0      0  446.7M     0      0      0      0      0  ]
<br>
<pre>
-- 
Why didn't mpirun honor the ranfile and put the processes on the correct cores in
the proper order?  It looks to me like mpirun doesn't like the rankfile...??
Thanks for any help.
Tom
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16200.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16198.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16220.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Reply:</strong> <a href="16220.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
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
