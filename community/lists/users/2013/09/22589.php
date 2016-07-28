<?
$subject_val = "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 04:12:23 2013" -->
<!-- isoreceived="20130903081223" -->
<!-- sent="Tue, 3 Sep 2013 10:05:17 +0200 (CEST)" -->
<!-- isosent="20130903080517" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097" -->
<!-- id="201309030805.r8385Hhl029867_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problems with rankfile in openmpi-1.9a1r29097" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 04:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22590.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22588.php">Ian Czekala: "[OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>Maybe in reply to:</strong> <a href="22585.php">Siegmar Gross: "[OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22590.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Okay, I have a fix for not specifying the number of procs when
</span><br>
<span class="quotelev1">&gt; using a rankfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the binding pattern, the problem is a syntax error in
</span><br>
<span class="quotelev1">&gt; your rankfile. You need a semi-colon instead of a comma to
</span><br>
<span class="quotelev1">&gt; separate the sockets for rank0:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=bend001 slot=0:0-1,1:0-1  =&gt; rank 0=bend001 slot=0:0-1;1:0-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is required because you use commas to list specific cores
</span><br>
<span class="quotelev1">&gt; - e.g., slot=0:0,1,4,6
</span><br>
...
<br>
<p>OK, you have changed syntax. Open MPI 1.6.x needs &quot;,&quot; and Open MPI
<br>
1.9.x needs &quot;;&quot;. Unfortunately my rankfiles still don't work as
<br>
expected (even if I add &quot;-np &lt;number&gt;&quot;, so that everything is specified
<br>
now). These are some of my rankfiles, which I use to show you different
<br>
errors.
<br>
<p>::::::::::::::
<br>
rf_linpc_semicolon
<br>
::::::::::::::
<br>
# Open MPI 1.7.x and newer needs &quot;;&quot; to separate sockets.
<br>
# mpiexec -report-bindings -rf rf_linpc_semicolon -np 1 hostname
<br>
rank 0=linpc1 slot=0:0-1;1:0-1
<br>
<p>::::::::::::::
<br>
rf_linpc_linpc_semicolon
<br>
::::::::::::::
<br>
# Open MPI 1.7.x and newer needs &quot;;&quot; to separate sockets.
<br>
# mpiexec -report-bindings -rf rf_linpc_linpc_semicolon -np 4 hostname
<br>
rank 0=linpc0 slot=0:0-1;1:0-1
<br>
rank 1=linpc1 slot=0:0-1
<br>
rank 2=linpc1 slot=1:0
<br>
rank 3=linpc1 slot=1:1
<br>
<p>::::::::::::::
<br>
rf_tyr_semicolon
<br>
::::::::::::::
<br>
# Open MPI 1.7.x and newer needs &quot;;&quot; to separate sockets.
<br>
# mpiexec -report-bindings -rf rf_tyr_semicolon -np 1 hostname
<br>
rank 0=tyr slot=0:0;1:0
<br>
tyr rankfiles 198 
<br>
<p><p>These are my results. &quot;linpc?&quot; use Open-SuSE Linux, &quot;sunpc?&quot; use
<br>
Solaris 10 x86_64, and &quot;tyr&quot; uses Solaris 10 sparc. &quot;linpc?&quot; and
<br>
&quot;sunpc?&quot; use identical hardware.
<br>
<p><p>tyr rankfiles 107 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r29097
<br>
<p><p>1) It seems that I can use the rankfile only on a node, which is
<br>
&nbsp;&nbsp;&nbsp;specified in the rankfile.
<br>
<p>linpc1 rankfiles 98 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_linpc_semicolon -np 1 hostname
<br>
[linpc1:12504] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;socket 0[core 1[hwt 0]], socket 1[core 2[hwt 0]],
<br>
&nbsp;&nbsp;socket 1[core 3[hwt 0]]: [B/B][B/B]
<br>
linpc1
<br>
linpc1 rankfiles 98 exit
<br>
<p><p>tyr rankfiles 125 ssh sunpc1
<br>
...
<br>
sunpc1 rankfiles 102 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_linpc_semicolon -np 1 hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
sunpc1 rankfiles 103 exit
<br>
<p><p>linpc0 rankfiles 93 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_linpc_semicolon -np 1 hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
linpc0 rankfiles 94 exit
<br>
<p><p>I can use the rankfile on any machine with Open MPI 1.6.x.
<br>
<p>tyr rankfiles 105 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.5a1r28554
<br>
<p>tyr rankfiles 106 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_linpc_semicolon -np 1 hostname
<br>
[tyr.informatik.hs-fulda.de:29380] Got an error!
<br>
[linpc1:12637] MCW rank 0 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
linpc1
<br>
<p>Semicolon isn't allowed.
<br>
<p><p>tyr rankfiles 107 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_linpc_comma -np 1 hostname
<br>
[linpc1:12704] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0,1,1:0,1)
<br>
linpc1
<br>
tyr rankfiles 108
<br>
<p><p>2) I cannot use two Linux machines with Open MPI 1.9.x.
<br>
<p>linpc1 rankfiles 105 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_linpc_linpc_semicolon -np 4 hostname
<br>
--------------------------------------------------------------------------
<br>
The rankfile that was used claimed that a host was either not
<br>
allocated or oversubscribed its slots.  Please review your rank-slot
<br>
assignments and your host allocation to ensure a proper match.  Also,
<br>
some systems may require using full hostnames, such as
<br>
&quot;host1.example.com&quot; (instead of just plain &quot;host1&quot;).
<br>
<p>&nbsp;&nbsp;Host: linpc0
<br>
--------------------------------------------------------------------------
<br>
linpc1 rankfiles 106 
<br>
<p><p>Perhaps this problem is a follow-up of the above problem.
<br>
<p><p>No problem with Open MPI 1.6.x.
<br>
&nbsp;&nbsp;&nbsp;
<br>
linpc1 rankfiles 106 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_linpc_linpc_comma -np 4 hostname
<br>
[linpc1:12975] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
[linpc1:12975] MCW rank 2 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
[linpc1:12975] MCW rank 3 bound to socket 1[core 1]:
<br>
&nbsp;&nbsp;[. .][. B] (slot list 1:1)
<br>
linpc1
<br>
linpc1
<br>
[linpc0:13855] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
linpc0
<br>
linpc1
<br>
linpc1 rankfiles 107 
<br>
<p><p>3) I have a problem on &quot;tyr&quot; (Solaris 10 sparc).
<br>
<p>tyr rankfiles 106 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_tyr_semicolon -np 1 hostname
<br>
[tyr.informatik.hs-fulda.de:29849] [[53951,0],0] ORTE_ERROR_LOG:
<br>
&nbsp;&nbsp;Not found in file
<br>
&nbsp;&nbsp;&nbsp;../../../../../openmpi-1.9a1r29097/orte/mca/rmaps/rank_file/rmaps_rank_file.c
<br>
&nbsp;&nbsp;&nbsp;at line 276
<br>
[tyr.informatik.hs-fulda.de:29849] [[53951,0],0] ORTE_ERROR_LOG:
<br>
&nbsp;&nbsp;Not found in file
<br>
&nbsp;&nbsp;../../../../openmpi-1.9a1r29097/orte/mca/rmaps/base/rmaps_base_map_job.c
<br>
&nbsp;&nbsp;at line 173
<br>
tyr rankfiles 107
<br>
<p><p>I get the following output, if I try the rankfile from a different machine
<br>
(also Solaris 10 sparc).
<br>
<p>rs0 rankfiles 104 mpiexec -report-bindings -rf rf_tyr_semicolon -np 1 hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
rs0 rankfiles 105 
<br>
<p><p><p>This time I have also a small problem with Open MPI 1.6.x.
<br>
<p>tyr rankfiles 134 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.5a1r28554
<br>
<p>tyr rankfiles 135 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_tyr_comma -np 1 hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p><p>tyr rankfiles 136 ssh rs0
<br>
...
<br>
rs0 rankfiles 104 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.5a1r28554
<br>
<p>rs0 rankfiles 105 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_tyr_comma -np 1 hostname
<br>
[tyr.informatik.hs-fulda.de:29770] MCW rank 0 bound to
<br>
&nbsp;&nbsp;socket 0[core 0] socket 1[core 0]: [B][B] (slot list 0:0,1:0)
<br>
tyr.informatik.hs-fulda.de
<br>
rs0 rankfiles 106 
<br>
<p><p>Why doesn't it work, if I'm logged in into the machine in the
<br>
rankfile, while it works, if I'm using the rankfile on a different
<br>
machine? Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On Sep 2, 2013, at 7:52 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It seems to run for me on CentOS, though I note that rank 0 isn't
</span><br>
<span class="quotelev1">&gt; bound to both sockets 0 and 1 as specified and I had to tell it how
</span><br>
<span class="quotelev1">&gt; many procs to run:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [rhc_at_bend001 svn-trunk]$  mpirun --report-bindings
</span><br>
<span class="quotelev2">&gt; &gt;   -rf rf -n 4 hostname
</span><br>
<span class="quotelev2">&gt; &gt; [bend001:13297] MCW rank 0 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev2">&gt; &gt; socket 0[core 1[hwt 0-1]]: [BB/BB/../../../..][../../../../../..]
</span><br>
<span class="quotelev2">&gt; &gt; bend001
</span><br>
<span class="quotelev2">&gt; &gt; [bend002:25899] MCW rank 3 bound to socket 1[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev2">&gt; &gt; [../../../../../..][../BB/../../../..]
</span><br>
<span class="quotelev2">&gt; &gt; bend002
</span><br>
<span class="quotelev2">&gt; &gt; [bend002:25899] MCW rank 1 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev2">&gt; &gt; socket 0[core 1[hwt 0-1]]: [BB/BB/../../../..][../../../../../..]
</span><br>
<span class="quotelev2">&gt; &gt; bend002
</span><br>
<span class="quotelev2">&gt; &gt; [bend002:25899] MCW rank 2 bound to socket 1[core 6[hwt 0-1]]:
</span><br>
<span class="quotelev2">&gt; &gt; [../../../../../..][BB/../../../../..]
</span><br>
<span class="quotelev2">&gt; &gt; bend002
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [rhc_at_bend001 svn-trunk]$ cat rf
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=bend001 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=bend002 slot=0:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=bend002 slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=bend002 slot=1:1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'll work on those issues, but don't know why you are getting
</span><br>
<span class="quotelev2">&gt; &gt; this &quot;not allocated&quot; error.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 2, 2013, at 7:10 AM, Siegmar Gross
</span><br>
<span class="quotelev2">&gt; &gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I installed openmpi-1.9a1r29097 on &quot;openSuSE Linux 12.1&quot;, &quot;Solaris 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in 64-bit mode.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Unfortunately I still have a problem with rankfiles. I reported the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems already in May. I show the problems with Linux, although I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have the same problems on all Solaris machines as well.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1 rankfiles 99 cat rf_linpc1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1 rankfiles 100 mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [linpc1:23413] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1 rankfiles 101 cat rf_ex_linpc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # mpiexec -report-bindings -rf rf_ex_linpc hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rank 0=linpc0 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rank 1=linpc1 slot=0:0-1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rank 2=linpc1 slot=1:0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rank 3=linpc1 slot=1:1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1 rankfiles 102 mpiexec -report-bindings -rf rf_ex_linpc hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The rankfile that was used claimed that a host was either not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; allocated or oversubscribed its slots.  Please review your rank-slot
</span><br>
<span class="quotelev3">&gt; &gt;&gt; assignments and your host allocation to ensure a proper match.  Also,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; some systems may require using full hostnames, such as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;host1.example.com&quot; (instead of just plain &quot;host1&quot;).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Host: linpc0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1 rankfiles 103 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't have these problems with openmpi-1.6.5a1r28554.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1 rankfiles 95 ompi_info | grep &quot;Open MPI:&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               Open MPI: 1.6.5a1r28554
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1 rankfiles 95 mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [linpc1:23583] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1 rankfiles 96 mpiexec -report-bindings -rf rf_ex_linpc hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [linpc1:23585] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [linpc1:23585] MCW rank 2 bound to socket 1[core 0]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [. .][B .] (slot list 1:0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [linpc1:23585] MCW rank 3 bound to socket 1[core 1]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [. .][. B] (slot list 1:1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [linpc0:10422] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would be grateful, if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; very much for any help in advance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Siegmar
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
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22590.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22588.php">Ian Czekala: "[OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>Maybe in reply to:</strong> <a href="22585.php">Siegmar Gross: "[OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22590.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
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
