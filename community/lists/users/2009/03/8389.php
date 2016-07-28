<?
$subject_val = "Re: [OMPI users] Latest SVN failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 16:32:56 2009" -->
<!-- isoreceived="20090310203256" -->
<!-- sent="Tue, 10 Mar 2009 16:32:35 -0400" -->
<!-- isosent="20090310203235" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest SVN failures" -->
<!-- id="F2FEA86A-331D-49BC-ABFA-118967FDCC53_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="86804C53-E98E-4E9F-9EC1-A1201CEFB3F7_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Latest SVN failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 16:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8390.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8388.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8388.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8390.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You *could* have a per-machine mca param config file that could be  
<br>
locally staged on each machine and setup with the exclude for whatever  
<br>
you need on *that* node.  Ugly, but it could work...?
<br>
<p><p>On Mar 10, 2009, at 4:26 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ick. We don't have a way currently to allow you to ignore an interface
</span><br>
<span class="quotelev1">&gt; on a node-by-node basis. If you do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca oob_tcp_if_exclude eth0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we will exclude that private Ethernet. The catch is that we will
</span><br>
<span class="quotelev1">&gt; exclude &quot;eth0&quot; on -every- node. On the two machines you note here,
</span><br>
<span class="quotelev1">&gt; that will still let us work - but I don't know if we will catch an
</span><br>
<span class="quotelev1">&gt; &quot;eth0&quot; on another node where we need it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you give it a try and see if it works?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2009, at 2:13 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Maybe I know why now but it's not pleasant, e.g. 2 machines in the
</span><br>
<span class="quotelev2">&gt; &gt; same
</span><br>
<span class="quotelev2">&gt; &gt; cluster have their ethernets such as:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Machine s0157
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; eth2      Link encap:Ethernet  HWaddr 00:1E:68:DA:74:A8
</span><br>
<span class="quotelev2">&gt; &gt;          BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;          RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;          TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;          RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev2">&gt; &gt;          Interrupt:233 Base address:0x6000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; eth3      Link encap:Ethernet  HWaddr 00:1E:68:DA:74:A9
</span><br>
<span class="quotelev2">&gt; &gt;          inet addr:10.173.128.13  Bcast:10.173.255.255  Mask:
</span><br>
<span class="quotelev2">&gt; &gt; 255.255.0.0
</span><br>
<span class="quotelev2">&gt; &gt;          inet6 addr: fe80::21e:68ff:feda:74a9/64 Scope:Link
</span><br>
<span class="quotelev2">&gt; &gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;          RX packets:43777910 errors:16 dropped:0 overruns:0 frame:16
</span><br>
<span class="quotelev2">&gt; &gt;          TX packets:21148848 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;          RX bytes:5780065692 (5512.3 Mb)  TX bytes:59140357016
</span><br>
<span class="quotelev2">&gt; &gt; (56400.6 Mb)
</span><br>
<span class="quotelev2">&gt; &gt;          Interrupt:50 Base address:0x8000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Machine s0158
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; eth0      Link encap:Ethernet  HWaddr 00:23:8B:42:10:A9
</span><br>
<span class="quotelev2">&gt; &gt;          inet addr:7.8.82.158  Bcast:7.8.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev2">&gt; &gt;          UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;          RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;          TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;          RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev2">&gt; &gt;          Interrupt:233 Base address:0x6000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; eth1      Link encap:Ethernet  HWaddr 00:23:8B:42:10:AA
</span><br>
<span class="quotelev2">&gt; &gt;          inet addr:10.173.128.14  Bcast:10.173.255.255  Mask:
</span><br>
<span class="quotelev2">&gt; &gt; 255.255.0.0
</span><br>
<span class="quotelev2">&gt; &gt;          inet6 addr: fe80::223:8bff:fe42:10aa/64 Scope:Link
</span><br>
<span class="quotelev2">&gt; &gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;          RX packets:39281716 errors:2 dropped:0 overruns:0 frame:2
</span><br>
<span class="quotelev2">&gt; &gt;          TX packets:2674296 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;          RX bytes:5879861483 (5607.4 Mb)  TX bytes:2406041840
</span><br>
<span class="quotelev2">&gt; &gt; (2294.5 Mb)
</span><br>
<span class="quotelev2">&gt; &gt;          Interrupt:50 Base address:0x8000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Apart from the eths being on different names (happens when
</span><br>
<span class="quotelev2">&gt; &gt; installing SuSE SLES 10 SP2)
</span><br>
<span class="quotelev2">&gt; &gt; on apparently similar machines, I notice theirs a private ethernet
</span><br>
<span class="quotelev2">&gt; &gt; on s0158 at IP
</span><br>
<span class="quotelev2">&gt; &gt; 7.8.82.158 - I guess this was used. How to exclude when the eth
</span><br>
<span class="quotelev2">&gt; &gt; names vary?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; DM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 10 Mar 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Not really. I've run much bigger jobs than this without problem, so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't think there is a fundamental issue here.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like the TCP fabric between the various nodes is breaking
</span><br>
<span class="quotelev3">&gt; &gt;&gt; down. I note in the enclosed messages that the problems are all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with comm between daemons 4 and 21. We keep trying to get through,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but failing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I can fix things so we don't endlessly loop when that happens
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (IIRC, I think we are already supposed to abort, but it appears
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that isn't working). But the real question is why the comm fails in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the first place.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 10, 2009, at 10:50 AM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Latest status - 1.4a1r20757 (yesterday);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the job now starts with a little output but quickly runs into
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; trouble with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a lot of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 'oob-tcp: Communication retries exceeded.  Can not communicate
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with peer '
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; errors?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; e.g.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [s0158:22513] [[41245,0],4]-[[41245,0],21] oob-tcp: Communication
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; retries exceeded.  Can not communicate with peer [s0158:22513]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[41245,0],4]-[[41245,0],21] oob-tcp: Communication retries
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; exceeded.  Can not communicate with peer [s0158:22513] [[41245,0],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 4]-[[41245,0],21] oob-tcp: Communication retries exceeded.  Can
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; not communicate with peer [s0158:22513] [[41245,0],4]-[[41245,0],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 21] oob-tcp: Communication retries exceeded.  Can not communicate
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with peer
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The nodes are O.K. ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Any ideas folks?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; DM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sat, 28 Feb 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I think I have this figured out - will fix on Monday. I'm not
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; sure why Jeff's conditions are all required, especially the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; second one. However, the fundamental problem is that we pull
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; information from two sources regarding the number of procs in the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; job when unpacking a buffer, and the two sources appear to be  
</span><br>
<span class="quotelev1">&gt; out-
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; of-sync with each other in certain scenarios.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The details are beyond the user list. I'll respond here again
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; once I get it fixed.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Feb 27, 2009, at 4:14 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Unfortunately, I think I have reproduced the problem as well --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; with SVN trunk HEAD (r20655):
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [15:12] svbu-mpi:~/mpi % mpirun --mca bogus foo --bynode -np 2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; uptime
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [svbu-mpi.cisco.com:24112] [[62779,0],0] ORTE_ERROR_LOG: Data
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; unpack failed in file base/odls_base_default_fns.c at line 566
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Notice that I'm not trying to run an MPI app -- it's just
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;uptime&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The following things seem to be necessary to make this error
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; occur for me:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1. --bynode
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2. set some mca parameter (any mca parameter)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 3. -np value less than the size of my slurm allocation
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If I remove any of those, it seems to run file
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Feb 27, 2009, at 5:05 PM, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; With further investigation, I have reproduced this problem.  I
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; think I was originally testing against a version that was not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; recent enough.  I do not see it with r20594 which is from
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; February 19.  So, something must have happened over the last 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; days.  I will try and narrow down the issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On 02/27/09 09:34, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I just tried trunk-1.4a1r20458 and I did not see this error,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; although my configuration was rather different.  I ran across
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 100 2-CPU sparc nodes, np=256, connected with TCP.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hopefully George's comment helps out with this issue.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; One other thought to see whether SGE has anything to do with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; this is create a hostfile and run it outside of SGE.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On 02/26/09 22:10, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FWIW: I tested the trunk tonight using both SLURM and rsh
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; launchers, and everything checks out fine. However, this is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; running under SGE and thus using qrsh, so it is possible the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SGE support is having a problem.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Perhaps one of the Sun OMPI developers can help here?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 26, 2009, at 7:21 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like the system doesn't know what nodes the procs
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are to be placed upon. Can you run this with --display- 
</span><br>
<span class="quotelev1">&gt; devel-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; map? That will tell us where the system thinks it is placing
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; things.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 26, 2009, at 3:41 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maybe it's my pine mailer.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is a NAMD run on 256 procs across 32 dual-socket quad-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; core AMD
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shangai nodes running a standard benchmark called stmv.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The basic error message, which occurs 31 times is like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0164:24296] [[64102,0],16] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file ../../../.././orte/mca/odls/base/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls_base_default_fns.c at line 595
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The mpirun command has long paths in it, sorry. It's
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; invoking a special binding
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; script which in turn lauches the NAMD run. This works on an
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; older SVN at
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; level 1.4a1r20123 (for 16,32,64,128 and 512 procs)but not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for this 256 proc run where
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the older SVN hangs indefinitely polling some completion
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (sm or openib). So, I was trying
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; later SVNs with this 256 proc run, hoping the error would
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; go away.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here's some of the invocation again. Hope you can read it:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; EAGER_SIZE=32767
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_btl_openib_use_eager_rdma=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_btl_openib_eager_limit=$EAGER_SIZE
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_btl_self_eager_limit=$EAGER_SIZE
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_btl_sm_eager_limit=$EAGER_SIZE
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and, unexpanded
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --prefix $PREFIX -np %PE% $MCA -x
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_openib_use_eager_rdma -x
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_openib_eager_limit -x
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_self_eager_limit -x
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_sm_eager_limit -machinefile $HOSTS $MPI_BINDER
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $NAMD2 stmv.namd
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and, expanded
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --prefix /tools/openmpi/1.4a1r20643_svn/connectx/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; intel64/10.1.015/openib/suse_sles_10/x86_64/opteron -np 256
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --mca btl sm,openib,self -x
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_openib_use_eager_rdma -x
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_openib_eager_limit -x
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_self_eager_limit -x
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_sm_eager_limit -machinefile /tmp/ 
</span><br>
<span class="quotelev1">&gt; 48292.1.all.q/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; newhosts /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_binder.MRL /ctmp8/mostyn/IMSC/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bench_intel_openmpi_I_shang2/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; intel-10.1.015_ofed_1.3.1_openmpi_1.4a1r20643_svn/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NAMD_2.6_Source/Linux-amd64-MPI/namd2 stmv.namd
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is all via Sun Grid Engine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The OS as indicated above is SuSE SLES 10 SP2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; DM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, 26 Feb 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm sorry, but I can't make any sense of this message.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Could you provide a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; little explanation of what you are doing, what the system
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; looks like, what is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; supposed to happen, etc? I can barely parse your cmd  
</span><br>
<span class="quotelev1">&gt; line...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 26, 2009, at 1:03 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Today's and yesterdays.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.4a1r20643_svn
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; + mpirun --prefix
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tools/openmpi/1.4a1r20643_svn/connectx/intel64/10.1.015/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib/suse_sles_10/x86_6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 4/opteron -np 256 --mca btl sm,openib,self -x
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_openib_use_eager_rdma -x OMPI_MCA_btl_ope
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nib_eager_limit -x OMPI_MCA_btl_self_eager_limit -x
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_btl_sm_eager_limit -machinefile /tmp/48
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 269.1.all.q/newhosts
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /ctmp8/mostyn/IMSC/bench_intel_openmpi_I_shang2/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_binder.MRL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /ctmp8/mostyn/IM
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SC/bench_intel_openmpi_I_shang2/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; intel-10.1.015_ofed_1.3.1_openmpi_1.4a1r20643_svn/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NAMD_2.6_Source/Li
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nux-amd64-MPI/namd2 stmv.namd
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0164:24296] [[64102,0],16] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0128:24439] [[64102,0],4] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls_
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; base_default_fns.c at line 595
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0156:29300] [[64102,0],12] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0168:20585] [[64102,0],20] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [s0181:19554] [[64102,0],28] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../.././orte/mca/odls/base/odls
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _base_default_fns.c at line 595
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Made with INTEL compilers 10.1.015.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mostyn
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8390.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8388.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8388.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8390.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
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
