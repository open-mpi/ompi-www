<?
$subject_val = "Re: [OMPI devel] mpirun does not honor rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 17:23:27 2014" -->
<!-- isoreceived="20141105222327" -->
<!-- sent="Wed, 5 Nov 2014 22:23:24 +0000" -->
<!-- isosent="20141105222324" -->
<!-- name="Tom Wurgler" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun does not honor rankfile" -->
<!-- id="1415226203783.29228_at_goodyear.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="39CA5379-9596-4EB7-8970-8B3365B9C8A7_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun does not honor rankfile<br>
<strong>From:</strong> Tom Wurgler (<em>twurgl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 17:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16222.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Previous message:</strong> <a href="16220.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>In reply to:</strong> <a href="16220.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16222.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Reply:</strong> <a href="16222.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, further investigation found this:
<br>
<p><p>If I edit the rank file and change it like this:
<br>
<p><p>before:
<br>
<p>rank 0=mach1 slot=0
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
<p><p>after:
<br>
<p>rank 0=mach1 slot=0
<br>
rank 1=mach1 slot=1
<br>
rank 2=mach1 slot=2
<br>
rank 3=mach1 slot=3
<br>
rank 4=mach1 slot=4
<br>
rank 5=mach1 slot=5
<br>
rank 6=mach1 slot=6
<br>
rank 7=mach1 slot=7
<br>
rank 8=mach1 slot=8
<br>
rank 9=mach1 slot=9
<br>
rank 10=mach1 slot=10
<br>
rank 11=mach1 slot=11
<br>
rank 12=mach1 slot=12
<br>
rank 13=mach1 slot=13
<br>
rank 14=mach1 slot=14
<br>
rank 15=mach1 slot=15
<br>
<p><p>It does what I expect:
<br>
<p>&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5     N6     N7 ]
<br>
12192 my_executable         0                   472.0M [ 472.0M     0      0      0      0      0      0      0  ]
<br>
12193 my_executable         4                   358.0M [ 358.0M     0      0      0      0      0      0      0  ]
<br>
12194 my_executable         8                   450.4M [ 450.4M     0      0      0      0      0      0      0  ]
<br>
12195 my_executable        12                  439.1M [ 439.1M     0      0      0      0      0      0      0  ]
<br>
12196 my_executable        16                  392.1M [ 392.1M     0      0      0      0      0      0      0  ]
<br>
12197 my_executable        20                  420.6M [ 420.6M     0      0      0      0      0      0      0  ]
<br>
12198 my_executable        24                  414.9M [     0  414.9M     0      0      0      0      0      0  ]
<br>
12199 my_executable        28                  388.9M [     0  388.9M     0      0      0      0      0      0  ]
<br>
12200 my_executable        32                  452.7M [     0  452.7M     0      0      0      0      0      0  ]
<br>
12201 my_executable        36                  438.9M [     0  438.9M     0      0      0      0      0      0  ]
<br>
12202 my_executable        40                  369.3M [     0  369.3M     0      0      0      0      0      0  ]
<br>
12203 my_executable        44                  440.5M [     0  440.5M     0      0      0      0      0      0  ]
<br>
12204 my_executable         1                   447.7M [     0      0  447.7M     0      0      0      0      0  ]
<br>
12205 my_executable         5                   367.1M [     0      0  367.1M     0      0      0      0      0  ]
<br>
12206 my_executable         9                   426.5M [     0      0  426.5M     0      0      0      0      0  ]
<br>
12207 my_executable        13                  414.2M [     0      0  414.2M     0      0      0      0      0  ]
<br>
<p><p>We use hwloc 1.4 to generate a layout of the cores etc.
<br>
<p><p>So either LSF created the wrong rankfile (via my config errors, most likely) or mpirun can't deal with that rankfile.
<br>
<p><p>I can try the nightly tarball as well.  The hardware is 48 core AMD:  4 sockets, 2 Numa nodes per socket with 6 cores each.
<br>
<p><p>thanks
<br>
<p>tom
<br>
<p><p><p><p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
<br>
Sent: Wednesday, November 5, 2014 4:27 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] mpirun does not honor rankfile
<br>
<p>Hmmm&#133;well, it seems to be working fine in 1.8.4rc1 (I only have 12 cores on my humble machine). However, I can&#146;t test any interactions with LSF, though that shouldn&#146;t be an issue:
<br>
<p>$ mpirun -host bend001 -rf ./rankfile --report-bindings --display-devel-map hostname
<br>
&nbsp;Data for JOB [60677,1] offset 0
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: rank_file  Mapping policy: BYUSER  Ranking policy: SLOT
<br>
&nbsp;Binding policy: CPUSET  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
<br>
&nbsp;&nbsp;Num new daemons: 0 New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: bend001 Launch id: -1 State: 2
<br>
&nbsp;&nbsp;Daemon: [[60677,0],0] Daemon launched: True
<br>
&nbsp;&nbsp;Num slots: 12 Slots in use: 12 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;Num slots allocated: 12 Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 12 Next node_rank: 12
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],0]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 0 Node rank: 0 App rank: 0
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 0,12
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],1]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 1 Node rank: 1 App rank: 1
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 8,20
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],2]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 2 Node rank: 2 App rank: 2
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 5,17
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],3]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 3 Node rank: 3 App rank: 3
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 9,21
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],4]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 4 Node rank: 4 App rank: 4
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 11,23
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],5]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 5 Node rank: 5 App rank: 5
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 7,19
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],6]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 6 Node rank: 6 App rank: 6
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 3,15
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],7]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 7 Node rank: 7 App rank: 7
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 6,18
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],8]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 8 Node rank: 8 App rank: 8
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 2,14
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],9]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 9 Node rank: 9 App rank: 9
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 4,16
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],10]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 10 Node rank: 10 App rank: 10
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 10,22
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],11]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 11 Node rank: 11 App rank: 11
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 1,13
<br>
[bend001:24667] MCW rank 1 bound to socket 0[core 4[hwt 0-1]]: [../../../../BB/..][../../../../../..]
<br>
[bend001:24667] MCW rank 2 bound to socket 1[core 8[hwt 0-1]]: [../../../../../..][../../BB/../../..]
<br>
[bend001:24667] MCW rank 3 bound to socket 1[core 10[hwt 0-1]]: [../../../../../..][../../../../BB/..]
<br>
[bend001:24667] MCW rank 4 bound to socket 1[core 11[hwt 0-1]]: [../../../../../..][../../../../../BB]
<br>
[bend001:24667] MCW rank 5 bound to socket 1[core 9[hwt 0-1]]: [../../../../../..][../../../BB/../..]
<br>
[bend001:24667] MCW rank 6 bound to socket 1[core 7[hwt 0-1]]: [../../../../../..][../BB/../../../..]
<br>
[bend001:24667] MCW rank 7 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../..][../../../../../..]
<br>
[bend001:24667] MCW rank 8 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../..][../../../../../..]
<br>
[bend001:24667] MCW rank 9 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../..][../../../../../..]
<br>
[bend001:24667] MCW rank 10 bound to socket 0[core 5[hwt 0-1]]: [../../../../../BB][../../../../../..]
<br>
[bend001:24667] MCW rank 11 bound to socket 1[core 6[hwt 0-1]]: [../../../../../..][BB/../../../../..]
<br>
[bend001:24667] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../..][../../../../../..]
<br>
<p>Can you try with the latest nightly 1.8 tarball?
<br>
<p><a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
<br>
<p>Note that it is also possible that hwloc isn&#146;t correctly identifying the cores here. Can you tell us something about the hardware? Do you have hardware threads enabled?
<br>
<p>I ask because the binding being reported by us is the cpu numbers as identified by hwloc - which may not be the same you are expecting from some hardware vendor&#146;s map. We are using logical processor assignments, not physical. You can use the &#151;report-bindings option to show the resulting map, as above.
<br>
<p><p><p>On Nov 5, 2014, at 7:21 AM, twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt; wrote:
<br>
<p>I am using openmpi v 1.8.3 and LSF 9.1.3.
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
&nbsp;--mca orte_base_help_aggregate 0 \
<br>
&nbsp;-v -display-devel-allocation \
<br>
&nbsp;-display-devel-map \
<br>
&nbsp;--rankfile RANK_FILE \
<br>
&nbsp;--mca btl openib,tcp,sm,self \
<br>
&nbsp;--x LD_LIBRARY_PATH \
<br>
&nbsp;--np 16 \
<br>
&nbsp;my_executable \
<br>
&nbsp;-i model.i \
<br>
&nbsp;-l model.o
<br>
<p>And I get the following on the screen:
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
mach1: slots=16 max_slots=0 slots_inuse=0 state=UP
<br>
=================================================================
<br>
Data for JOB [52387,1] offset 0
<br>
<p>Mapper requested: NULL  Last mapper: rank_file  Mapping policy: BYUSER  Ranking policy: SLOT
<br>
Binding policy: CPUSET  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
<br>
Num new daemons: 0 New daemon starting vpid INVALID
<br>
Num nodes: 1
<br>
<p>Data for node: mach1 Launch id: -1 State: 2
<br>
Daemon: [[52387,0],0] Daemon launched: True
<br>
Num slots: 16 Slots in use: 16 Oversubscribed: FALSE
<br>
Num slots allocated: 16 Max slots: 0
<br>
Username on node: NULL
<br>
Num procs: 16 Next node_rank: 16
<br>
Data for proc: [[52387,1],0]
<br>
Pid: 0 Local rank: 0 Node rank: 0 App rank: 0
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 0
<br>
Data for proc: [[52387,1],1]
<br>
Pid: 0 Local rank: 1 Node rank: 1 App rank: 1
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 16
<br>
Data for proc: [[52387,1],2]
<br>
Pid: 0 Local rank: 2 Node rank: 2 App rank: 2
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 32
<br>
Data for proc: [[52387,1],3]
<br>
Pid: 0 Local rank: 3 Node rank: 3 App rank: 3
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 1
<br>
Data for proc: [[52387,1],4]
<br>
Pid: 0 Local rank: 4 Node rank: 4 App rank: 4
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 17
<br>
Data for proc: [[52387,1],5]
<br>
Pid: 0 Local rank: 5 Node rank: 5 App rank: 5
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 33
<br>
Data for proc: [[52387,1],6]
<br>
Pid: 0 Local rank: 6 Node rank: 6 App rank: 6
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 2
<br>
Data for proc: [[52387,1],7]
<br>
Pid: 0 Local rank: 7 Node rank: 7 App rank: 7
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 18
<br>
Data for proc: [[52387,1],8]
<br>
Pid: 0 Local rank: 8 Node rank: 8 App rank: 8
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 34
<br>
Data for proc: [[52387,1],9]
<br>
Pid: 0 Local rank: 9 Node rank: 9 App rank: 9
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 3
<br>
Data for proc: [[52387,1],10]
<br>
Pid: 0 Local rank: 10 Node rank: 10 App rank: 10
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 19
<br>
Data for proc: [[52387,1],11]
<br>
Pid: 0 Local rank: 11 Node rank: 11 App rank: 11
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 35
<br>
Data for proc: [[52387,1],12]
<br>
Pid: 0 Local rank: 12 Node rank: 12 App rank: 12
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 4
<br>
Data for proc: [[52387,1],13]
<br>
Pid: 0 Local rank: 13 Node rank: 13 App rank: 13
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 20
<br>
Data for proc: [[52387,1],14]
<br>
Pid: 0 Local rank: 14 Node rank: 14 App rank: 14
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 36
<br>
Data for proc: [[52387,1],15]
<br>
Pid: 0 Local rank: 15 Node rank: 15 App rank: 15
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN Bind location: (null) Binding: 5
<br>
<p>And a numa-map of the node shows:
<br>
<p>&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5     N6     N7 ]
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
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16199.php">http://www.open-mpi.org/community/lists/devel/2014/11/16199.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16222.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Previous message:</strong> <a href="16220.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>In reply to:</strong> <a href="16220.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16222.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Reply:</strong> <a href="16222.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
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
