<?
$subject_val = "Re: [OMPI devel] mpirun does not honor rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 11:08:58 2014" -->
<!-- isoreceived="20141106160858" -->
<!-- sent="Thu, 6 Nov 2014 08:08:53 -0800" -->
<!-- isosent="20141106160853" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun does not honor rankfile" -->
<!-- id="0FED79F7-D838-4DF9-AE90-3B955F1C45DC_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1415287273597.71720_at_goodyear.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 11:08:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16232.php">Dave Goodell (dgoodell): "Re: [OMPI devel] simple_spawn test fails using different set of	btls."</a>
<li><strong>Previous message:</strong> <a href="16230.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>In reply to:</strong> <a href="16229.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16233.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Reply:</strong> <a href="16233.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ugh&#133;.we used to have a switch for that purpose, but it became hard to manage the code. I could reimplement at some point, but it won&#146;t be in the immediate future.
<br>
<p>I gather the issue is that the system tools report physical numbering, and so you have to mentally translate to create the rankfile? Or is there an automated script you run to do the translation?
<br>
<p>In other words, is it possible to simplify the translation in the interim? Or is this a show-stopper for you?
<br>
<p><p><span class="quotelev1">&gt; On Nov 6, 2014, at 7:21 AM, Tom Wurgler &lt;twurgl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we used lstopo with a arg of &quot;--logical&quot; and the output showed the core numbering 0,1,2,3...47 instead of
</span><br>
<span class="quotelev1">&gt; 0,4,8,12 etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The multiplying by 4 you speak of falls apart when you get to the second socket as its physical numbers are
</span><br>
<span class="quotelev1">&gt; 1,5,9,13... and its logical is 12,13,14,15....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the question is can we get mpirun to honor the physical numbering?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks!
</span><br>
<span class="quotelev1">&gt; tom
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, November 5, 2014 6:30 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] mpirun does not honor rankfile
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I suspect the issue may be with physical vs logical numbering. As I said, we use logical numbering in the rankfile, not physical. So I&#146;m not entirely sure how to translate the cpumask in your final table into the numbering shown in your rankfile listings. Is the cpumask showing a physical core number?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ask because it sure looks like the logical numbering we use is getting multiplied by 4 to become the cpumask you show. If they logically number their cores by socket (i.e., core 0 is first core in first socket, core 1 is first core in second socket, etc.), then that would explain the output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2014, at 2:23 PM, Tom Wurgler &lt;twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, further investigation found this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I edit the rank file and change it like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; before:
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=mach1 slot=0
</span><br>
<span class="quotelev2">&gt;&gt; rank 1=mach1 slot=4
</span><br>
<span class="quotelev2">&gt;&gt; rank 2=mach1 slot=8
</span><br>
<span class="quotelev2">&gt;&gt; rank 3=mach1 slot=12
</span><br>
<span class="quotelev2">&gt;&gt; rank 4=mach1 slot=16
</span><br>
<span class="quotelev2">&gt;&gt; rank 5=mach1 slot=20
</span><br>
<span class="quotelev2">&gt;&gt; rank 6=mach1 slot=24
</span><br>
<span class="quotelev2">&gt;&gt; rank 7=mach1 slot=28
</span><br>
<span class="quotelev2">&gt;&gt; rank 8=mach1 slot=32
</span><br>
<span class="quotelev2">&gt;&gt; rank 9=mach1 slot=36
</span><br>
<span class="quotelev2">&gt;&gt; rank 10=mach1 slot=40
</span><br>
<span class="quotelev2">&gt;&gt; rank 11=mach1 slot=44
</span><br>
<span class="quotelev2">&gt;&gt; rank 12=mach1 slot=1
</span><br>
<span class="quotelev2">&gt;&gt; rank 13=mach1 slot=5
</span><br>
<span class="quotelev2">&gt;&gt; rank 14=mach1 slot=9
</span><br>
<span class="quotelev2">&gt;&gt; rank 15=mach1 slot=13
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; after:
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=mach1 slot=0
</span><br>
<span class="quotelev2">&gt;&gt; rank 1=mach1 slot=1
</span><br>
<span class="quotelev2">&gt;&gt; rank 2=mach1 slot=2
</span><br>
<span class="quotelev2">&gt;&gt; rank 3=mach1 slot=3
</span><br>
<span class="quotelev2">&gt;&gt; rank 4=mach1 slot=4
</span><br>
<span class="quotelev2">&gt;&gt; rank 5=mach1 slot=5
</span><br>
<span class="quotelev2">&gt;&gt; rank 6=mach1 slot=6
</span><br>
<span class="quotelev2">&gt;&gt; rank 7=mach1 slot=7
</span><br>
<span class="quotelev2">&gt;&gt; rank 8=mach1 slot=8
</span><br>
<span class="quotelev2">&gt;&gt; rank 9=mach1 slot=9
</span><br>
<span class="quotelev2">&gt;&gt; rank 10=mach1 slot=10
</span><br>
<span class="quotelev2">&gt;&gt; rank 11=mach1 slot=11
</span><br>
<span class="quotelev2">&gt;&gt; rank 12=mach1 slot=12
</span><br>
<span class="quotelev2">&gt;&gt; rank 13=mach1 slot=13
</span><br>
<span class="quotelev2">&gt;&gt; rank 14=mach1 slot=14
</span><br>
<span class="quotelev2">&gt;&gt; rank 15=mach1 slot=15
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It does what I expect:
</span><br>
<span class="quotelev2">&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5     N6     N7 ]
</span><br>
<span class="quotelev2">&gt;&gt; 12192 my_executable         0                   472.0M [ 472.0M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12193 my_executable         4                   358.0M [ 358.0M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12194 my_executable         8                   450.4M [ 450.4M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12195 my_executable        12                  439.1M [ 439.1M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12196 my_executable        16                  392.1M [ 392.1M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12197 my_executable        20                  420.6M [ 420.6M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12198 my_executable        24                  414.9M [     0  414.9M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12199 my_executable        28                  388.9M [     0  388.9M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12200 my_executable        32                  452.7M [     0  452.7M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12201 my_executable        36                  438.9M [     0  438.9M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12202 my_executable        40                  369.3M [     0  369.3M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12203 my_executable        44                  440.5M [     0  440.5M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12204 my_executable         1                   447.7M [     0      0  447.7M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12205 my_executable         5                   367.1M [     0      0  367.1M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12206 my_executable         9                   426.5M [     0      0  426.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 12207 my_executable        13                  414.2M [     0      0  414.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We use hwloc 1.4 to generate a layout of the cores etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So either LSF created the wrong rankfile (via my config errors, most likely) or mpirun can't deal with that rankfile.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can try the nightly tarball as well.  The hardware is 48 core AMD:  4 sockets, 2 Numa nodes per socket with 6 cores each.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; tom 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: devel &lt;devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc.openmpi_at_[hidden] &lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, November 5, 2014 4:27 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] mpirun does not honor rankfile
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#133;well, it seems to be working fine in 1.8.4rc1 (I only have 12 cores on my humble machine). However, I can&#146;t test any interactions with LSF, though that shouldn&#146;t be an issue:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -host bend001 -rf ./rankfile --report-bindings --display-devel-map hostname
</span><br>
<span class="quotelev2">&gt;&gt;  Data for JOB [60677,1] offset 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Mapper requested: NULL  Last mapper: rank_file  Mapping policy: BYUSER  Ranking policy: SLOT
</span><br>
<span class="quotelev2">&gt;&gt;  Binding policy: CPUSET  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;   Num new daemons: 0
</span><br>
<span class="quotelev2">&gt;&gt; New daemon starting vpid INVALID
</span><br>
<span class="quotelev2">&gt;&gt;   Num nodes: 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: bend001   Launch id: -1
</span><br>
<span class="quotelev2">&gt;&gt; State: 2
</span><br>
<span class="quotelev2">&gt;&gt;   Daemon: [[60677,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; Daemon launched: True
</span><br>
<span class="quotelev2">&gt;&gt;   Num slots: 12
</span><br>
<span class="quotelev2">&gt;&gt; Slots in use: 12   Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;   Num slots allocated: 12
</span><br>
<span class="quotelev2">&gt;&gt; Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt;   Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;   Num procs: 12
</span><br>
<span class="quotelev2">&gt;&gt; Next node_rank: 12
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 0   Node rank: 0
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 0,12
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],1]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 1   Node rank: 1
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 8,20
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],2]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 2   Node rank: 2
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 2
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 5,17
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],3]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 3   Node rank: 3
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 3
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 9,21
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],4]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 4   Node rank: 4
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 4
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 11,23
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],5]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 5   Node rank: 5
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 5
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 7,19
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],6]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 6   Node rank: 6
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 6
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 3,15
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],7]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 7   Node rank: 7
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 7
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 6,18
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],8]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 8   Node rank: 8
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 8
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 2,14
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],9]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 9   Node rank: 9
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 9
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 4,16
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],10]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 10   Node rank: 10
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 10
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 10,22
</span><br>
<span class="quotelev2">&gt;&gt;   Data for proc: [[60677,1],11]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev2">&gt;&gt; Local rank: 11   Node rank: 11
</span><br>
<span class="quotelev2">&gt;&gt; App rank: 11
</span><br>
<span class="quotelev2">&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev2">&gt;&gt;  Binding: 1,13
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 1 bound to socket 0[core 4[hwt 0-1]]: [../../../../BB/..][../../../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 2 bound to socket 1[core 8[hwt 0-1]]: [../../../../../..][../../BB/../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 3 bound to socket 1[core 10[hwt 0-1]]: [../../../../../..][../../../../BB/..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 4 bound to socket 1[core 11[hwt 0-1]]: [../../../../../..][../../../../../BB]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 5 bound to socket 1[core 9[hwt 0-1]]: [../../../../../..][../../../BB/../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 6 bound to socket 1[core 7[hwt 0-1]]: [../../../../../..][../BB/../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 7 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../..][../../../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 8 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../..][../../../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 9 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../..][../../../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 10 bound to socket 0[core 5[hwt 0-1]]: [../../../../../BB][../../../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 11 bound to socket 1[core 6[hwt 0-1]]: [../../../../../..][BB/../../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:24667] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../..][../../../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you try with the latest nightly 1.8 tarball?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a> &lt;<a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that it is also possible that hwloc isn&#146;t correctly identifying the cores here. Can you tell us something about the hardware? Do you have hardware threads enabled?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ask because the binding being reported by us is the cpu numbers as identified by hwloc - which may not be the same you are expecting from some hardware vendor&#146;s map. We are using logical processor assignments, not physical. You can use the &#151;report-bindings option to show the resulting map, as above.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 5, 2014, at 7:21 AM, twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using openmpi v 1.8.3 and LSF 9.1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LSF creates a rankfile that looks like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RANK_FILE:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=mach1 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=mach1 slot=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 2=mach1 slot=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 3=mach1 slot=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 4=mach1 slot=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 5=mach1 slot=20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 6=mach1 slot=24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 7=mach1 slot=28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 8=mach1 slot=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 9=mach1 slot=36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 10=mach1 slot=40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 11=mach1 slot=44
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 12=mach1 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 13=mach1 slot=5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 14=mach1 slot=9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 15=mach1 slot=13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which really are the cores I want to use, in order. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I logon to this machine and type (all on one line):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/share/openmpi/1.8.3.I1217913/bin/mpirun \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --mca orte_base_help_aggregate 0 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -v -display-devel-allocation \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -display-devel-map \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --rankfile RANK_FILE \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --mca btl openib,tcp,sm,self \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --x LD_LIBRARY_PATH \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --np 16 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  my_executable \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -i model.i \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -l model.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And I get the following on the screen:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mach1: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for JOB [52387,1] offset 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mapper requested: NULL  Last mapper: rank_file  Mapping policy: BYUSER  Ranking policy: SLOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Binding policy: CPUSET  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Num new daemons: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New daemon starting vpid INVALID
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Num nodes: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: mach1   Launch id: -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon: [[52387,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Num slots: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Slots in use: 16   Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Num slots allocated: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Num procs: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Next node_rank: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 0   Node rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 1   Node rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 2   Node rank: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 3   Node rank: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 4   Node rank: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 5   Node rank: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 33
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 6   Node rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 7   Node rank: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 8   Node rank: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 34
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 9   Node rank: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 10   Node rank: 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 11   Node rank: 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 35
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 12   Node rank: 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 13   Node rank: 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],14]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 14   Node rank: 14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for proc: [[52387,1],15]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local rank: 15   Node rank: 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; App rank: 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Locale: UNKNOWN   Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And a numa-map of the node shows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5     N6     N7 ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31044 my_executable         0    443.3M [ 443.3M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31045 my_executable        16    459.7M [ 459.7M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31046 my_executable        32    435.0M [     0  435.0M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31047 my_executable         1    468.8M [     0      0  468.8M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31048 my_executable        17    493.2M [     0      0  493.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31049 my_executable        33    498.0M [     0      0      0  498.0M     0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31050 my_executable         2    501.2M [     0      0      0      0  501.2M     0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31051 my_executable        18    502.4M [     0      0      0      0  502.4M     0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31052 my_executable        34    500.5M [     0      0      0      0      0  500.5M     0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31053 my_executable         3    515.6M [     0      0      0      0      0      0  515.6M     0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31054 my_executable        19    508.1M [     0      0      0      0      0      0  508.1M     0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31055 my_executable        35    503.9M [     0      0      0      0      0      0      0  503.9M ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31056 my_executable         4    502.1M [ 502.1M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31057 my_executable        20    515.2M [ 515.2M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31058 my_executable        36    508.1M [     0  508.1M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31059 my_executable         5    446.7M [     0      0  446.7M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why didn't mpirun honor the ranfile and put the processes on the correct cores in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the proper order?  It looks to me like mpirun doesn't like the rankfile...??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tom
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16199.php">http://www.open-mpi.org/community/lists/devel/2014/11/16199.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16199.php">http://www.open-mpi.org/community/lists/devel/2014/11/16199.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16221.php">http://www.open-mpi.org/community/lists/devel/2014/11/16221.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16221.php">http://www.open-mpi.org/community/lists/devel/2014/11/16221.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16229.php">http://www.open-mpi.org/community/lists/devel/2014/11/16229.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16229.php">http://www.open-mpi.org/community/lists/devel/2014/11/16229.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16232.php">Dave Goodell (dgoodell): "Re: [OMPI devel] simple_spawn test fails using different set of	btls."</a>
<li><strong>Previous message:</strong> <a href="16230.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>In reply to:</strong> <a href="16229.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16233.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Reply:</strong> <a href="16233.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
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
