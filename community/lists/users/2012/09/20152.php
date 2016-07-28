<?
$subject_val = "Re: [OMPI users] problem with rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 08:48:23 2012" -->
<!-- isoreceived="20120907124823" -->
<!-- sent="Fri, 7 Sep 2012 14:41:34 +0200 (CEST)" -->
<!-- isosent="20120907124134" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile" -->
<!-- id="201209071241.q87CfY8P018738_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with rankfile" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with rankfile<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 08:41:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20153.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20151.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Maybe in reply to:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20153.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Reply:</strong> <a href="20153.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>are the following outputs helpful to find the error with
<br>
a rankfile on Solaris? I wrapped long lines so that they
<br>
are easier to read. Have you had time to look at the
<br>
segmentation fault with a rankfile which I reported in my
<br>
last email (see below)?
<br>
<p>&quot;tyr&quot; is a two processor single core machine.
<br>
<p>tyr fd1026 116 mpiexec -report-bindings -np 4 \
<br>
&nbsp;&nbsp;-bind-to-socket -bycore rank_size
<br>
[tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27298,1],0] to socket 0 cpus 0001
<br>
[tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27298,1],1] to socket 1 cpus 0002
<br>
[tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27298,1],2] to socket 0 cpus 0001
<br>
[tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27298,1],3] to socket 1 cpus 0002
<br>
I'm process 0 of 4 ...
<br>
<p><p>tyr fd1026 121 mpiexec -report-bindings -np 4 \
<br>
&nbsp;-bind-to-socket -bysocket rank_size
<br>
[tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27380,1],0] to socket 0 cpus 0001
<br>
[tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27380,1],1] to socket 1 cpus 0002
<br>
[tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27380,1],2] to socket 0 cpus 0001
<br>
[tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27380,1],3] to socket 1 cpus 0002
<br>
I'm process 0 of 4 ...
<br>
<p><p>tyr fd1026 117 mpiexec -report-bindings -np 4 \
<br>
&nbsp;&nbsp;-bind-to-core -bycore rank_size
<br>
[tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27307,1],2] to cpus 0004
<br>
------------------------------------------------------------------
<br>
An attempt to set processor affinity has failed - please check to
<br>
ensure that your system supports such functionality. If so, then
<br>
this is probably something that should be reported to the OMPI
<br>
&nbsp;&nbsp;developers.
<br>
------------------------------------------------------------------
<br>
[tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27307,1],0] to cpus 0001
<br>
[tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27307,1],1] to cpus 0002
<br>
------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application
<br>
&nbsp;&nbsp;as it encountered an error
<br>
on node tyr.informatik.hs-fulda.de. More information may be
<br>
&nbsp;&nbsp;available above.
<br>
------------------------------------------------------------------
<br>
4 total processes failed to start
<br>
<p><p><p>tyr fd1026 118 mpiexec -report-bindings -np 4 \
<br>
&nbsp;&nbsp;-bind-to-core -bysocket rank_size
<br>
------------------------------------------------------------------
<br>
An invalid physical processor ID was returned when attempting to
<br>
&nbsp;&nbsp;bind
<br>
an MPI process to a unique processor.
<br>
<p>This usually means that you requested binding to more processors
<br>
&nbsp;&nbsp;than
<br>
<p>exist (e.g., trying to bind N MPI processes to M processors,
<br>
&nbsp;&nbsp;where N &gt;
<br>
M).  Double check that you have enough unique processors for
<br>
&nbsp;&nbsp;all the
<br>
MPI processes that you are launching on this host.
<br>
<p>You job will now abort.
<br>
------------------------------------------------------------------
<br>
[tyr.informatik.hs-fulda.de:18631] [[27347,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27347,1],0] to socket 0 cpus 0001
<br>
[tyr.informatik.hs-fulda.de:18631] [[27347,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[27347,1],1] to socket 1 cpus 0002
<br>
------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it
<br>
&nbsp;&nbsp;encountered an error
<br>
on node tyr.informatik.hs-fulda.de. More information may be
<br>
&nbsp;&nbsp;available above.
<br>
------------------------------------------------------------------
<br>
4 total processes failed to start
<br>
tyr fd1026 119 
<br>
<p><p><p>&quot;linpc3&quot; and &quot;linpc4&quot; are two processor dual core machines.
<br>
<p>linpc4 fd1026 102 mpiexec -report-bindings -host linpc3,linpc4 \
<br>
&nbsp;-np 4 -bind-to-core -bycore rank_size
<br>
[linpc4:16842] [[40914,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[40914,1],1] to cpus 0001
<br>
[linpc4:16842] [[40914,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[40914,1],3] to cpus 0002
<br>
[linpc3:31384] [[40914,0],1] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[40914,1],0] to cpus 0001
<br>
[linpc3:31384] [[40914,0],1] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[40914,1],2] to cpus 0002
<br>
I'm process 1 of 4 ...
<br>
<p><p>linpc4 fd1026 102 mpiexec -report-bindings -host linpc3,linpc4 \
<br>
&nbsp;&nbsp;-np 4 -bind-to-core -bysocket rank_size
<br>
[linpc4:16846] [[40918,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[40918,1],1] to socket 0 cpus 0001
<br>
[linpc4:16846] [[40918,0],0] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[40918,1],3] to socket 0 cpus 0002
<br>
[linpc3:31435] [[40918,0],1] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[40918,1],0] to socket 0 cpus 0001
<br>
[linpc3:31435] [[40918,0],1] odls:default:
<br>
&nbsp;&nbsp;fork binding child [[40918,1],2] to socket 0 cpus 0002
<br>
I'm process 1 of 4 ...
<br>
<p><p><p><p>linpc4 fd1026 104 mpiexec -report-bindings -host linpc3,linpc4 \
<br>
&nbsp;&nbsp;-np 4 -bind-to-socket -bycore rank_size
<br>
------------------------------------------------------------------
<br>
Unable to bind to socket 0 on node linpc3.
<br>
------------------------------------------------------------------
<br>
------------------------------------------------------------------
<br>
Unable to bind to socket 0 on node linpc4.
<br>
------------------------------------------------------------------
<br>
------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it
<br>
&nbsp;&nbsp;encountered an error:
<br>
<p>Error name: Fatal
<br>
Node: linpc4
<br>
<p>when attempting to start process rank 1.
<br>
------------------------------------------------------------------
<br>
4 total processes failed to start
<br>
linpc4 fd1026 105 
<br>
<p><p>linpc4 fd1026 105 mpiexec -report-bindings -host linpc3,linpc4 \
<br>
&nbsp;&nbsp;-np 4 -bind-to-socket -bysocket rank_size
<br>
------------------------------------------------------------------
<br>
Unable to bind to socket 0 on node linpc4.
<br>
------------------------------------------------------------------
<br>
------------------------------------------------------------------
<br>
Unable to bind to socket 0 on node linpc3.
<br>
------------------------------------------------------------------
<br>
------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it
<br>
&nbsp;&nbsp;encountered an error:
<br>
<p>Error name: Fatal
<br>
Node: linpc4
<br>
<p>when attempting to start process rank 1.
<br>
--------------------------------------------------------------------------
<br>
4 total processes failed to start
<br>
<p><p>It's interesting that commands that work on Solaris fail on Linux
<br>
and vice versa.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><span class="quotelev2">&gt; &gt; I couldn't really say for certain - I don't see anything obviously
</span><br>
<span class="quotelev2">&gt; &gt; wrong with your syntax, and the code appears to be working or else
</span><br>
<span class="quotelev2">&gt; &gt; it would fail on the other nodes as well. The fact that it fails
</span><br>
<span class="quotelev2">&gt; &gt; solely on that machine seems suspect.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Set aside the rankfile for the moment and try to just bind to cores
</span><br>
<span class="quotelev2">&gt; &gt; on that machine, something like:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec --report-bindings -bind-to-core
</span><br>
<span class="quotelev2">&gt; &gt;   -host rs0.informatik.hs-fulda.de -n 2 rank_size
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If that doesn't work, then the problem isn't with rankfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't work but I found out something else as you can see below.
</span><br>
<span class="quotelev1">&gt; I get a segmentation fault for some rankfiles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 110 mpiexec --report-bindings -bind-to-core
</span><br>
<span class="quotelev1">&gt;   -host rs0.informatik.hs-fulda.de -n 2 rank_size
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An attempt to set processor affinity has failed - please check to
</span><br>
<span class="quotelev1">&gt; ensure that your system supports such functionality. If so, then
</span><br>
<span class="quotelev1">&gt; this is probably something that should be reported to the OMPI developers.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:14695] [[30561,0],1] odls:default:
</span><br>
<span class="quotelev1">&gt;   fork binding child [[30561,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev1">&gt;   encountered an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Resource temporarily unavailable
</span><br>
<span class="quotelev1">&gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes failed to start
</span><br>
<span class="quotelev1">&gt; tyr small_prog 111 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps I have a hint for the error on Solaris Sparc. I use the
</span><br>
<span class="quotelev1">&gt; following rankfile to keep everything simple.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=linpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 2=linpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; #rank 3=linpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 4=linpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 5=linpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 6=sunpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 7=sunpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 8=sunpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 9=sunpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 10=sunpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I execute &quot;mpiexec -report-bindings -rf my_rankfile rank_size&quot;
</span><br>
<span class="quotelev1">&gt; on a Linux-x86_64 or Solaris-10-x86_64 machine everything works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 104 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev1">&gt; [linpc4:08018] [[49482,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt;   [[49482,1],5] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [linpc3:22030] [[49482,0],4] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt;   [[49482,1],4] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [linpc0:12887] [[49482,0],2] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt;   [[49482,1],1] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [linpc1:08323] [[49482,0],3] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt;   [[49482,1],2] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [sunpc1:17786] [[49482,0],6] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt;   [[49482,1],7] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [sunpc3.informatik.hs-fulda.de:08482] [[49482,0],8] odls:default:fork
</span><br>
<span class="quotelev1">&gt;   binding child [[49482,1],9] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [sunpc0.informatik.hs-fulda.de:11568] [[49482,0],5] odls:default:fork
</span><br>
<span class="quotelev1">&gt;   binding child [[49482,1],6] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:21484] [[49482,0],1] odls:default:fork
</span><br>
<span class="quotelev1">&gt;   binding child [[49482,1],0] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [sunpc2.informatik.hs-fulda.de:28638] [[49482,0],7] odls:default:fork
</span><br>
<span class="quotelev1">&gt;   binding child [[49482,1],8] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a segmentation fault when I run it on my local machine
</span><br>
<span class="quotelev1">&gt; (Solaris Sparc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 141 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:21421] [[29113,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;   Data unpack would read past end of buffer in file
</span><br>
<span class="quotelev1">&gt;   ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt;   at line 927
</span><br>
<span class="quotelev1">&gt; [tyr:21421] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:21421] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt; [tyr:21421] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [tyr:21421] Failing at address: 5ba
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x15d3ec
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.1:0xcad04
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.1:0xbf3b4
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.1:0xbf59c
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.1:0x58bd0 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.1:free+0x24
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev1">&gt;   orte_odls_base_default_construct_child_list+0x1234
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;   mca_odls_default.so:0x90b8
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x5e8d4
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev1">&gt;   orte_daemon_cmd_processor+0x328
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x12e324
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev1">&gt;   opal_event_base_loop+0x228
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev1">&gt;   opal_progress+0xec
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev1">&gt;   orte_plm_base_report_launched+0x1c4
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev1">&gt;   orte_plm_base_launch_apps+0x318
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/openmpi/mca_plm_rsh.so:
</span><br>
<span class="quotelev1">&gt;   orte_plm_rsh_launch+0xac4
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:orterun+0x16a8
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:main+0x24
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:_start+0xd8
</span><br>
<span class="quotelev1">&gt; [tyr:21421] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; tyr small_prog 142 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The funny thing is that I get a segmentation fault on the Linux
</span><br>
<span class="quotelev1">&gt; machine as well if I change my rankfile in the following way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=linpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; #rank 2=linpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; #rank 3=linpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; #rank 4=linpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 5=linpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 6=sunpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; #rank 7=sunpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; #rank 8=sunpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; #rank 9=sunpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 10=sunpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 107 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [[65226,0],0] ORTE_ERROR_LOG: Data unpack would
</span><br>
<span class="quotelev1">&gt;   read past end of buffer in file 
</span><br>
<span class="quotelev1">&gt;   ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt;   at line 927
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] Failing at address: 0x5f32fffc
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [ 0] [0xffffe410]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [ 1] /usr/local/openmpi-1.6_32_cc/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;   mca_odls_default.so(+0x4023) [0xf73ec023]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [ 2] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev1">&gt;   libopen-rte.so.4(+0x42b91) [0xf7667b91]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [ 3] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev1">&gt;   libopen-rte.so.4(orte_daemon_cmd_processor+0x313) [0xf76655c3]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [ 4] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev1">&gt;   libopen-rte.so.4(+0x8f366) [0xf76b4366]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [ 5] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev1">&gt;   libopen-rte.so.4(opal_event_base_loop+0x18c) [0xf76b46bc]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [ 6] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev1">&gt;   libopen-rte.so.4(opal_event_loop+0x26) [0xf76b4526]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [ 7] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev1">&gt;   libopen-rte.so.4(opal_progress+0xba) [0xf769303a]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [ 8] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev1">&gt;   libopen-rte.so.4(orte_plm_base_report_launched+0x13f) [0xf767d62f]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [ 9] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev1">&gt;   libopen-rte.so.4(orte_plm_base_launch_apps+0x1b7) [0xf767bf27]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [10] /usr/local/openmpi-1.6_32_cc/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;   mca_plm_rsh.so(orte_plm_rsh_launch+0xb2d) [0xf74228fd]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [11] mpiexec(orterun+0x102f) [0x804e7bf]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [12] mpiexec(main+0x13) [0x804c273]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] [13] /lib/libc.so.6(__libc_start_main+0xf3) [0xf745e003]
</span><br>
<span class="quotelev1">&gt; [linpc4:08402] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 107 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully this information helps to fix the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 5, 2012, at 5:50 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm new to rankfiles so that I played a little bit with different
</span><br>
<span class="quotelev3">&gt; &gt; &gt; options. I thought that the following entry would be similar to an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; entry in an appfile and that MPI could place the process with rank 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on any core of any processor.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 0=tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately it's not allowed and I got an error. Can somebody add
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the missing help to the file?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 126 mpiexec -rf my_rankfile -report-bindings rank_size
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    no-slot-list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from the file:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    help-rmaps_rank_file.txt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But I couldn't find that topic in the file.  Sorry!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As you can see below I could use a rankfile on my old local machine
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (Sun Ultra 45) but not on our &quot;new&quot; one (Sun Server M4000). Today I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; logged into the machine via ssh and tried the same command once more
</span><br>
<span class="quotelev3">&gt; &gt; &gt; as a local user without success. It's more or less the same error as
</span><br>
<span class="quotelev3">&gt; &gt; &gt; before when I tried to bind the process to a remote machine.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rs0 small_prog 118 mpiexec -rf my_rankfile -report-bindings rank_size
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [rs0.informatik.hs-fulda.de:13745] [[19734,0],0] odls:default:fork
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  binding child [[19734,1],0] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev3">&gt; &gt; &gt; affinity settings:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Specified slot list: 0:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Error: Cross-device link
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that the specification had improper syntax.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpiexec was unable to start the specified application as it encountered an 
</span><br>
error:
<br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Error name: No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rs0 small_prog 119 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The application is available.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rs0 small_prog 119 which rank_size
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/fd1026/SunOS/sparc/bin/rank_size
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is it a problem in the Open MPI implementation or in my rankfile?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; How can I request which sockets and cores per socket are
</span><br>
<span class="quotelev3">&gt; &gt; &gt; available so that I can use correct values in my rankfile?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In lam-mpi I had a command &quot;lamnodes&quot; which I could use to get
</span><br>
<span class="quotelev3">&gt; &gt; &gt; such information. Thank you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Are *all* the machines Sparc? Or just the 3rd one (rs0)?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Yes, both machines are Sparc. I tried first in a homogeneous
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; environment.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr fd1026 106 psrinfo -v
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Status of virtual processor 0 as of: 09/04/2012 07:32:14
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  on-line since 08/31/2012 15:44:42.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  The sparcv9 processor operates at 1600 MHz,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;        and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Status of virtual processor 1 as of: 09/04/2012 07:32:14
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  on-line since 08/31/2012 15:44:39.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  The sparcv9 processor operates at 1600 MHz,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;        and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr fd1026 107 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; My local machine (tyr) is a dual processor machine and the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; other one is equipped with two quad-core processors each
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; capable of running two hardware threads.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On Sep 3, 2012, at 12:43 PM, Siegmar Gross 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; the man page for &quot;mpiexec&quot; shows the following:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;        cat myrankfile
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;        rank 0=aa slot=1:0-2
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;        rank 1=bb slot=0:0,1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;        rank 2=cc slot=1-2
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;        mpirun -H aa,bb,cc,dd -rf myrankfile ./a.out So that
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;      Rank 0 runs on node aa, bound to socket 1, cores 0-2.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;      Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;      Rank 2 runs on node cc, bound to cores 1 and 2.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Does it mean that the process with rank 0 should be bound to
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; core 0, 1, or 2 of socket 1?
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; I tried to use a rankfile and have a problem. My rankfile contains
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; the following lines.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; rank 1=tyr.informatik.hs-fulda.de slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; #rank 2=rs0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Everything is fine if I use the file with just my local machine
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; (the first two lines).
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; tyr small_prog 115 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; odls:default:fork binding child [[9849,1],0] to slot_list 0:0
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; odls:default:fork binding child [[9849,1],1] to slot_list 1:0
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; I'm process 0 of 2 available processes running on 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; I'm process 1 of 2 available processes running on 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; tyr small_prog 116 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; I can also change the socket number and the processes will be attached
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; to the correct cores. Unfortunately it doesn't work if I add one
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; other machine (third line).
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; tyr small_prog 112 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; affinity settings:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Specified slot list: 0:0
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Error: Cross-device link
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; that the specification had improper syntax.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],0] to slot_list 0:0
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],1] to slot_list 1:0
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:12047] [[10212,0],1]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],2] to slot_list 0:0
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; whose contact information is unknown in file
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; ../../../../../openmpi-1.6/orte/mca/rml/oob/rml_oob_send.c at line 145
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] attempted to send
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; to [[10212,1],0]: tag 20
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; A message is attempting to be sent to a process whose contact
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; information is unknown in file
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; at line 2501
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; encountered an error:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Error name: Error 0
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; when attempting to start process rank 2.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; tyr small_prog 113 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; The other machine has two 8 core processors.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; tyr small_prog 121 ssh rs0 psrinfo -v
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Status of virtual processor 0 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; on-line since 07/26/2012 15:03:14.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;       and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Status of virtual processor 1 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Status of virtual processor 15 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; on-line since 07/26/2012 15:03:16.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;       and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; tyr small_prog 122 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Is it necessary to specify another option on the command line or
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; is my rankfile faulty? Thank you very much for any suggestions in
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; advance.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20153.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20151.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Maybe in reply to:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20153.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Reply:</strong> <a href="20153.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
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
