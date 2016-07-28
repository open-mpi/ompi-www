<?
$subject_val = "Re: [OMPI users] problem with rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 16:01:22 2012" -->
<!-- isoreceived="20120910200122" -->
<!-- sent="Mon, 10 Sep 2012 16:01:19 -0400" -->
<!-- isosent="20120910200119" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile" -->
<!-- id="D29AC8C4-88DE-4FF6-88CF-2716E94D9EDB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209101134.q8ABYAsa023003_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 16:01:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20185.php">Brooks Davis: "[OMPI users] test for sctp on FreeBSD too narrow"</a>
<li><strong>Previous message:</strong> <a href="20183.php">Jeff Squyres: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20170.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We actually include hwloc v1.3.2 in the OMPI v1.6 series.
<br>
<p>Can you download and try that on your machines?  
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/hwloc/v1.3/">http://www.open-mpi.org/software/hwloc/v1.3/</a>
<br>
<p>In particular try the hwloc-bind executable (outside of OMPI), and see if binding works properly on your machines.  I typically run a test script when I'm testing binding:
<br>
<p>------
<br>
[12:59] svbu-mpi059:~/mpi % lstopo --no-io
<br>
Machine (64GB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 32GB) + Socket L#0 + L3 L#0 (20MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#8 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#9 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#10 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#11 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#12 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#13 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#14 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#15 (P#23)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (256KB) + L1 L#8 (32KB) + Core L#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#16 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#17 (P#24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (256KB) + L1 L#9 (32KB) + Core L#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#18 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#19 (P#25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (256KB) + L1 L#10 (32KB) + Core L#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#20 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#21 (P#26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (256KB) + L1 L#11 (32KB) + Core L#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#22 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#23 (P#27)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#12 (256KB) + L1 L#12 (32KB) + Core L#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#24 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#25 (P#28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#13 (256KB) + L1 L#13 (32KB) + Core L#13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#26 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#27 (P#29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#14 (256KB) + L1 L#14 (32KB) + Core L#14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#28 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#29 (P#30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#15 (256KB) + L1 L#15 (32KB) + Core L#15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#30 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#31 (P#31)
<br>
[12:59] svbu-mpi059:~/mpi % hwloc-bind socket:1.core:5 -l ./report-bindings.sh
<br>
MCW rank  (svbu-mpi059): Socket:1.Core:5.PU:13 Socket:1.Core:5.PU:29
<br>
[13:00] svbu-mpi059:~/mpi % cat report-bindings.sh
<br>
#!/bin/sh
<br>
<p>bitmap=`hwloc-bind --get -p`
<br>
friendly=`hwloc-calc -p -H socket.core.pu $bitmap`
<br>
<p>echo &quot;MCW rank $OMPI_COMM_WORLD_RANK (`hostname`): $friendly&quot;
<br>
exit 0
<br>
[13:00] svbu-mpi059:~/mpi % 
<br>
-----
<br>
<p>Try just running hwloc-bind and binding yourself to some logical location, and run my report-bindings.sh script, and see if the physical indexes that it outputs are correct.
<br>
<p><p><p>On Sep 10, 2012, at 7:34 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are the following outputs helpful to find the error with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a rankfile on Solaris?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you can't bind on the new Solaris machine, then the rankfile
</span><br>
<span class="quotelev2">&gt;&gt; won't do you any good. It looks like we are getting the incorrect
</span><br>
<span class="quotelev2">&gt;&gt; number of cores on that machine - is it possible that it has
</span><br>
<span class="quotelev2">&gt;&gt; hardware threads, and doesn't report &quot;cores&quot;? Can you download
</span><br>
<span class="quotelev2">&gt;&gt; and run a copy of lstopo to check the output? You get that from
</span><br>
<span class="quotelev2">&gt;&gt; the hwloc folks:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/hwloc/v1.5/">http://www.open-mpi.org/software/hwloc/v1.5/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I downloaded and installed the package on our machines. Perhaps it is
</span><br>
<span class="quotelev1">&gt; easier to detect the error if you have more information. Therefore I
</span><br>
<span class="quotelev1">&gt; provide the different hardware architecures of all machines on which
</span><br>
<span class="quotelev1">&gt; a simple program breaks if I try to bind processes to sockets or cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried the following five commands with &quot;h&quot; one of &quot;tyr&quot;, &quot;rs0&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;linpc0&quot;, &quot;linpc1&quot;, &quot;linpc2&quot;, &quot;linpc4&quot;, &quot;sunpc0&quot;, &quot;sunpc1&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;sunpc2&quot;, or &quot;sunpc4&quot; in a shell script file which I started on
</span><br>
<span class="quotelev1">&gt; my local machine (&quot;tyr&quot;). &quot;works on&quot; means that the small program
</span><br>
<span class="quotelev1">&gt; (MPI_Init, printf, MPI_Finalize) didn't break. I didn't check if
</span><br>
<span class="quotelev1">&gt; the layout of the processes was correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host h init_finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; works on:  tyr, rs0, linpc0, linpc1, linpc2, linpc4, sunpc0, sunpc1,
</span><br>
<span class="quotelev1">&gt;           sunpc2, sunpc4
</span><br>
<span class="quotelev1">&gt; breaks on: -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host h -bind-to-core -bycore init_finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; works on:  linpc2, sunpc1
</span><br>
<span class="quotelev1">&gt; breaks on: tyr, rs0, linpc0, linpc1, linpc4, sunpc0, sunpc2, sunpc4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host h -bind-to-core -bysocket init_finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; works on:  linpc2, sunpc1
</span><br>
<span class="quotelev1">&gt; breaks on: tyr, rs0, linpc0, linpc1, linpc4, sunpc0, sunpc2, sunpc4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host h -bind-to-socket -bycore init_finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; works on:  tyr, linpc1, linpc2, sunpc1, sunpc2
</span><br>
<span class="quotelev1">&gt; breaks on: rs0, linpc0, linpc4, sunpc0, sunpc4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host h -bind-to-socket -bysocket init_finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; works on:  tyr, linpc1, linpc2, sunpc1, sunpc2
</span><br>
<span class="quotelev1">&gt; breaks on: rs0, linpc0, linpc4, sunpc0, sunpc4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;lstopo&quot; shows the following hardware configurations for the above
</span><br>
<span class="quotelev1">&gt; machines. The first line always shows the installed architecture.
</span><br>
<span class="quotelev1">&gt; &quot;lstopo&quot; does a good job as far as I can see it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr:
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; UltraSPARC-IIIi, 2 single core processors, no hardware threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 183 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (4096MB)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#0 (P#2 2048MB) + Socket L#0 + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#1 (P#1 2048MB) + Socket L#1 + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 116 psrinfo -pv
</span><br>
<span class="quotelev1">&gt; The physical processor has 1 virtual processor (0)
</span><br>
<span class="quotelev1">&gt;  UltraSPARC-IIIi (portid 0 impl 0x16 ver 0x34 clock 1600 MHz)
</span><br>
<span class="quotelev1">&gt; The physical processor has 1 virtual processor (1)
</span><br>
<span class="quotelev1">&gt;  UltraSPARC-IIIi (portid 1 impl 0x16 ver 0x34 clock 1600 MHz)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0, rs1:
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SPARC64-VII, 2 quad-core processors, 2 hardware threads / core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 105 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (32GB) + NUMANode L#0 (P#1 32GB)
</span><br>
<span class="quotelev1">&gt;  Socket L#0
</span><br>
<span class="quotelev1">&gt;    Core L#0
</span><br>
<span class="quotelev1">&gt;      PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;      PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;    Core L#1
</span><br>
<span class="quotelev1">&gt;      PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;      PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;    Core L#2
</span><br>
<span class="quotelev1">&gt;      PU L#4 (P#4)
</span><br>
<span class="quotelev1">&gt;      PU L#5 (P#5)
</span><br>
<span class="quotelev1">&gt;    Core L#3
</span><br>
<span class="quotelev1">&gt;      PU L#6 (P#6)
</span><br>
<span class="quotelev1">&gt;      PU L#7 (P#7)
</span><br>
<span class="quotelev1">&gt;  Socket L#1
</span><br>
<span class="quotelev1">&gt;    Core L#4
</span><br>
<span class="quotelev1">&gt;      PU L#8 (P#8)
</span><br>
<span class="quotelev1">&gt;      PU L#9 (P#9)
</span><br>
<span class="quotelev1">&gt;    Core L#5
</span><br>
<span class="quotelev1">&gt;      PU L#10 (P#10)
</span><br>
<span class="quotelev1">&gt;      PU L#11 (P#11)
</span><br>
<span class="quotelev1">&gt;    Core L#6
</span><br>
<span class="quotelev1">&gt;      PU L#12 (P#12)
</span><br>
<span class="quotelev1">&gt;      PU L#13 (P#13)
</span><br>
<span class="quotelev1">&gt;    Core L#7
</span><br>
<span class="quotelev1">&gt;      PU L#14 (P#14)
</span><br>
<span class="quotelev1">&gt;      PU L#15 (P#15)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 117 ssh rs0 psrinfo -pv
</span><br>
<span class="quotelev1">&gt; The physical processor has 8 virtual processors (0-7)
</span><br>
<span class="quotelev1">&gt;  SPARC64-VII (portid 1024 impl 0x7 ver 0x91 clock 2400 MHz)
</span><br>
<span class="quotelev1">&gt; The physical processor has 8 virtual processors (8-15)
</span><br>
<span class="quotelev1">&gt;  SPARC64-VII (portid 1032 impl 0x7 ver 0x91 clock 2400 MHz)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc0, linpc3:
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AMD Athlon64 X2, 1 dual-core processor, no hardware threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc0 fd1026 102 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (4023MB) + Socket L#0
</span><br>
<span class="quotelev1">&gt;  L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;  L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is strange that openSuSE-Linux-12.1 thinks that two
</span><br>
<span class="quotelev1">&gt; dual-core processors are available although the machines
</span><br>
<span class="quotelev1">&gt; are only equipped with one processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc0 fd1026 104 cat /proc/cpuinfo  | grep -e processor -e &quot;cpu core&quot;
</span><br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; processor       : 1
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1:
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel Xeon, 2 single core processors, no hardware threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 fd1026 104  lstopo
</span><br>
<span class="quotelev1">&gt; Machine (3829MB)
</span><br>
<span class="quotelev1">&gt;  Socket L#0 + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;  Socket L#1 + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 118 ssh linpc1 cat /proc/cpuinfo | grep -e processor -e &quot;cpu core&quot;
</span><br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 1
</span><br>
<span class="quotelev1">&gt; processor       : 1
</span><br>
<span class="quotelev1">&gt; cpu cores       : 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc2:
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AMD Opteron 280, 2 dual-core processors, no hardware threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc2 fd1026 103 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (8190MB)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#0 (P#0 4094MB) + Socket L#0
</span><br>
<span class="quotelev1">&gt;    L2 L#0 (1024KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;    L2 L#1 (1024KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#1 (P#1 4096MB) + Socket L#1
</span><br>
<span class="quotelev1">&gt;    L2 L#2 (1024KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;    L2 L#3 (1024KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is strange that openSuSE-Linux-12.1 thinks that four
</span><br>
<span class="quotelev1">&gt; dual-core processors are available although the machine
</span><br>
<span class="quotelev1">&gt; is only equipped with two processors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc2 fd1026 104 cat /proc/cpuinfo | grep -e processor -e &quot;cpu core&quot;
</span><br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; processor       : 1
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; processor       : 2
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; processor       : 3
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc4:
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AMD Opteron 1218, 1 dual-core processors, no hardware threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc4 fd1026 100 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (4024MB) + Socket L#0
</span><br>
<span class="quotelev1">&gt;  L2 L#0 (1024KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;  L2 L#1 (1024KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is strange that openSuSE-Linux-12.1 thinks that two
</span><br>
<span class="quotelev1">&gt; dual-core processors are available although the machine
</span><br>
<span class="quotelev1">&gt; is only equipped with one processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 230 ssh linpc4 cat /proc/cpuinfo | grep -e processor -e &quot;cpu core&quot;
</span><br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; processor       : 1
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc0, sunpc3:
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AMD Athlon64 X2, 1 dual-core processor, no hardware threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc0 fd1026 104 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (4094MB) + NUMANode L#0 (P#0 4094MB) + Socket L#0
</span><br>
<span class="quotelev1">&gt;  Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;  Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 111 ssh sunpc0 psrinfo -pv
</span><br>
<span class="quotelev1">&gt; The physical processor has 2 virtual processors (0 1)
</span><br>
<span class="quotelev1">&gt;  x86 (chipid 0x0 AuthenticAMD family 15 model 43 step 1 clock 2000 MHz)
</span><br>
<span class="quotelev1">&gt;        AMD Athlon(tm) 64 X2 Dual Core Processor 3800+
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1:
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AMD Opteron 280, 2 dual-core processors, no hardware threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 104 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (8191MB)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#0 (P#1 4095MB) + Socket L#0
</span><br>
<span class="quotelev1">&gt;    Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;    Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#1 (P#2 4096MB) + Socket L#1
</span><br>
<span class="quotelev1">&gt;    Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;    Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 112 ssh sunpc1 psrinfo -pv
</span><br>
<span class="quotelev1">&gt; The physical processor has 2 virtual processors (0 1)
</span><br>
<span class="quotelev1">&gt;  x86 (chipid 0x0 AuthenticAMD family 15 model 33 step 2 clock 2411 MHz)
</span><br>
<span class="quotelev1">&gt;        Dual Core AMD Opteron(tm) Processor 280
</span><br>
<span class="quotelev1">&gt; The physical processor has 2 virtual processors (2 3)
</span><br>
<span class="quotelev1">&gt;  x86 (chipid 0x1 AuthenticAMD family 15 model 33 step 2 clock 2411 MHz)
</span><br>
<span class="quotelev1">&gt;        Dual Core AMD Opteron(tm) Processor 280
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc2:
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel Xeon, 2 single core processors, no hardware threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc2 fd1026 104 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (3904MB) + NUMANode L#0 (P#0 3904MB)
</span><br>
<span class="quotelev1">&gt;  Socket L#0 + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;  Socket L#1 + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 114 ssh sunpc2 psrinfo -pv
</span><br>
<span class="quotelev1">&gt; The physical processor has 1 virtual processor (0)
</span><br>
<span class="quotelev1">&gt;  x86 (chipid 0x0 GenuineIntel family 15 model 2 step 9 clock 2791 MHz)
</span><br>
<span class="quotelev1">&gt;        Intel(r) Xeon(tm) CPU 2.80GHz
</span><br>
<span class="quotelev1">&gt; The physical processor has 1 virtual processor (1)
</span><br>
<span class="quotelev1">&gt;  x86 (chipid 0x3 GenuineIntel family 15 model 2 step 9 clock 2791 MHz)
</span><br>
<span class="quotelev1">&gt;        Intel(r) Xeon(tm) CPU 2.80GHz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc4:
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AMD Opteron 1218, 1 dual-core processor, no hardware threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc4 fd1026 104 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (4096MB) + NUMANode L#0 (P#0 4096MB) + Socket L#0
</span><br>
<span class="quotelev1">&gt;  Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;  Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 115 ssh sunpc4 psrinfo -pv
</span><br>
<span class="quotelev1">&gt; The physical processor has 2 virtual processors (0 1)
</span><br>
<span class="quotelev1">&gt;  x86 (chipid 0x0 AuthenticAMD family 15 model 67 step 2 clock 2613 MHz)
</span><br>
<span class="quotelev1">&gt;        Dual-Core AMD Opteron(tm) Processor 1218
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Among others I got the following error messages (I can provide
</span><br>
<span class="quotelev1">&gt; the complete file if you are interested in it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host tyr -bind-to-core -bycore init_finalize
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23208] [[30908,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev1">&gt; [[30908,1],2] to cpus 0004
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
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23208] [[30908,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev1">&gt; [[30908,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23208] [[30908,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev1">&gt; [[30908,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered an error
</span><br>
<span class="quotelev1">&gt; on node tyr.informatik.hs-fulda.de. More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host tyr -bind-to-core -bysocket init_finalize
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev1">&gt; an MPI process to a unique processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev1">&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev1">&gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev1">&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You job will now abort.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23215] [[30907,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev1">&gt; [[30907,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23215] [[30907,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev1">&gt; [[30907,1],1] to socket 1 cpus 0002
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered an error
</span><br>
<span class="quotelev1">&gt; on node tyr.informatik.hs-fulda.de. More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host rs0 -bind-to-core -bycore init_finalize
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
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:05715] [[30936,0],1] odls:default:fork binding child 
</span><br>
<span class="quotelev1">&gt; [[30936,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered an 
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Resource temporarily unavailable
</span><br>
<span class="quotelev1">&gt; Node: rs0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host rs0 -bind-to-core -bysocket init_finalize
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
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:05743] [[30916,0],1] odls:default:fork binding child 
</span><br>
<span class="quotelev1">&gt; [[30916,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered an 
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Resource temporarily unavailable
</span><br>
<span class="quotelev1">&gt; Node: rs0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host rs0 -bind-to-socket -bycore init_finalize
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
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:05771] [[30912,0],1] odls:default:fork binding child 
</span><br>
<span class="quotelev1">&gt; [[30912,1],0] to socket 0 cpus 0055
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered an 
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Resource temporarily unavailable
</span><br>
<span class="quotelev1">&gt; Node: rs0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host rs0 -bind-to-socket -bysocket init_finalize
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
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:05799] [[30924,0],1] odls:default:fork binding child 
</span><br>
<span class="quotelev1">&gt; [[30924,1],0] to socket 0 cpus 0055
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered an 
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Resource temporarily unavailable
</span><br>
<span class="quotelev1">&gt; Node: rs0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host linpc0 -bind-to-core -bycore init_finalize
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
<span class="quotelev1">&gt; [linpc0:02275] [[30964,0],1] odls:default:fork binding child [[30964,1],0] to 
</span><br>
<span class="quotelev1">&gt; cpus 0001
</span><br>
<span class="quotelev1">&gt; [linpc0:02275] [[30964,0],1] odls:default:fork binding child [[30964,1],1] to 
</span><br>
<span class="quotelev1">&gt; cpus 0002
</span><br>
<span class="quotelev1">&gt; [linpc0:02275] [[30964,0],1] odls:default:fork binding child [[30964,1],2] to 
</span><br>
<span class="quotelev1">&gt; cpus 0004
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered an error
</span><br>
<span class="quotelev1">&gt; on node linpc0. More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host linpc0 -bind-to-core -bysocket 
</span><br>
<span class="quotelev1">&gt; init_finalize
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev1">&gt; an MPI process to a unique processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev1">&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev1">&gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev1">&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You job will now abort.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [linpc0:02326] [[30960,0],1] odls:default:fork binding child [[30960,1],0] to 
</span><br>
<span class="quotelev1">&gt; socket 0 cpus 0001
</span><br>
<span class="quotelev1">&gt; [linpc0:02326] [[30960,0],1] odls:default:fork binding child [[30960,1],1] to 
</span><br>
<span class="quotelev1">&gt; socket 0 cpus 0002
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered an error
</span><br>
<span class="quotelev1">&gt; on node linpc0. More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host linpc0 -bind-to-socket -bycore 
</span><br>
<span class="quotelev1">&gt; init_finalize
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unable to bind to socket 0 on node linpc0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered an 
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Fatal
</span><br>
<span class="quotelev1">&gt; Node: linpc0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; ##################
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -host linpc0 -bind-to-socket -bysocket 
</span><br>
<span class="quotelev1">&gt; init_finalize
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unable to bind to socket 0 on node linpc0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered an 
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Fatal
</span><br>
<span class="quotelev1">&gt; Node: linpc0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully this helps to track the error. Thank you very much
</span><br>
<span class="quotelev1">&gt; for your help in advance.
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
<span class="quotelev3">&gt;&gt;&gt; I wrapped long lines so that they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are easier to read. Have you had time to look at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segmentation fault with a rankfile which I reported in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; last email (see below)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid not - been too busy lately. I'd suggest first focusing
</span><br>
<span class="quotelev2">&gt;&gt; on getting binding to work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;tyr&quot; is a two processor single core machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 116 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bind-to-socket -bycore rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27298,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27298,1],1] to socket 1 cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27298,1],2] to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27298,1],3] to socket 1 cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm process 0 of 4 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 121 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bind-to-socket -bysocket rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27380,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27380,1],1] to socket 1 cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27380,1],2] to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27380,1],3] to socket 1 cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm process 0 of 4 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 117 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bind-to-core -bycore rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27307,1],2] to cpus 0004
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An attempt to set processor affinity has failed - please check to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ensure that your system supports such functionality. If so, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is probably something that should be reported to the OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27307,1],0] to cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27307,1],1] to cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec was unable to start the specified application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as it encountered an error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on node tyr.informatik.hs-fulda.de. More information may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 118 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bind-to-core -bysocket rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An invalid physical processor ID was returned when attempting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an MPI process to a unique processor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This usually means that you requested binding to more processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where N &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M).  Double check that you have enough unique processors for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18631] [[27347,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27347,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:18631] [[27347,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[27347,1],1] to socket 1 cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; encountered an error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on node tyr.informatik.hs-fulda.de. More information may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 119 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;linpc3&quot; and &quot;linpc4&quot; are two processor dual core machines.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 fd1026 102 mpiexec -report-bindings -host linpc3,linpc4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 4 -bind-to-core -bycore rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:16842] [[40914,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[40914,1],1] to cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:16842] [[40914,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[40914,1],3] to cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc3:31384] [[40914,0],1] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[40914,1],0] to cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc3:31384] [[40914,0],1] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[40914,1],2] to cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm process 1 of 4 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 fd1026 102 mpiexec -report-bindings -host linpc3,linpc4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 4 -bind-to-core -bysocket rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:16846] [[40918,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[40918,1],1] to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:16846] [[40918,0],0] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[40918,1],3] to socket 0 cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc3:31435] [[40918,0],1] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[40918,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc3:31435] [[40918,0],1] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork binding child [[40918,1],2] to socket 0 cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm process 1 of 4 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 fd1026 104 mpiexec -report-bindings -host linpc3,linpc4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 4 -bind-to-socket -bycore rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unable to bind to socket 0 on node linpc3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unable to bind to socket 0 on node linpc4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; encountered an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error name: Fatal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node: linpc4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when attempting to start process rank 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 fd1026 105 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 fd1026 105 mpiexec -report-bindings -host linpc3,linpc4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 4 -bind-to-socket -bysocket rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unable to bind to socket 0 on node linpc4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unable to bind to socket 0 on node linpc3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; encountered an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error name: Fatal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node: linpc4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when attempting to start process rank 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's interesting that commands that work on Solaris fail on Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and vice versa.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I couldn't really say for certain - I don't see anything obviously
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrong with your syntax, and the code appears to be working or else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it would fail on the other nodes as well. The fact that it fails
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; solely on that machine seems suspect.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Set aside the rankfile for the moment and try to just bind to cores
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on that machine, something like:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec --report-bindings -bind-to-core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -host rs0.informatik.hs-fulda.de -n 2 rank_size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If that doesn't work, then the problem isn't with rankfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It doesn't work but I found out something else as you can see below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get a segmentation fault for some rankfiles.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr small_prog 110 mpiexec --report-bindings -bind-to-core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -host rs0.informatik.hs-fulda.de -n 2 rank_size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; An attempt to set processor affinity has failed - please check to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ensure that your system supports such functionality. If so, then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is probably something that should be reported to the OMPI developers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:14695] [[30561,0],1] odls:default:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fork binding child [[30561,1],0] to cpus 0001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; encountered an error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Error name: Resource temporarily unavailable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 total processes failed to start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr small_prog 111 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps I have a hint for the error on Solaris Sparc. I use the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following rankfile to keep everything simple.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 1=linpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 2=linpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #rank 3=linpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 4=linpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 5=linpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 6=sunpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 7=sunpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 8=sunpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 9=sunpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 10=sunpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I execute &quot;mpiexec -report-bindings -rf my_rankfile rank_size&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on a Linux-x86_64 or Solaris-10-x86_64 machine everything works fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 small_prog 104 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08018] [[49482,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[49482,1],5] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc3:22030] [[49482,0],4] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[49482,1],4] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc0:12887] [[49482,0],2] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[49482,1],1] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:08323] [[49482,0],3] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[49482,1],2] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:17786] [[49482,0],6] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[49482,1],7] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc3.informatik.hs-fulda.de:08482] [[49482,0],8] odls:default:fork
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; binding child [[49482,1],9] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc0.informatik.hs-fulda.de:11568] [[49482,0],5] odls:default:fork
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; binding child [[49482,1],6] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:21484] [[49482,0],1] odls:default:fork
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; binding child [[49482,1],0] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc2.informatik.hs-fulda.de:28638] [[49482,0],7] odls:default:fork
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; binding child [[49482,1],8] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get a segmentation fault when I run it on my local machine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Solaris Sparc).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr small_prog 141 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:21421] [[29113,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data unpack would read past end of buffer in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at line 927
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:21421] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:21421] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:21421] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:21421] Failing at address: 5ba
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x15d3ec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib/libc.so.1:0xcad04
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib/libc.so.1:0xbf3b4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib/libc.so.1:0xbf59c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib/libc.so.1:0x58bd0 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib/libc.so.1:free+0x24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_odls_base_default_construct_child_list+0x1234
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/openmpi/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_odls_default.so:0x90b8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x5e8d4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_daemon_cmd_processor+0x328
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x12e324
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_event_base_loop+0x228
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_progress+0xec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_plm_base_report_launched+0x1c4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_plm_base_launch_apps+0x318
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/openmpi/mca_plm_rsh.so:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_plm_rsh_launch+0xac4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:orterun+0x16a8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:main+0x24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:_start+0xd8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr:21421] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr small_prog 142 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The funny thing is that I get a segmentation fault on the Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine as well if I change my rankfile in the following way.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 1=linpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #rank 2=linpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #rank 3=linpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #rank 4=linpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 5=linpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 6=sunpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #rank 7=sunpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #rank 8=sunpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #rank 9=sunpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 10=sunpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 small_prog 107 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [[65226,0],0] ORTE_ERROR_LOG: Data unpack would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; read past end of buffer in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at line 927
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] Failing at address: 0x5f32fffc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [ 0] [0xffffe410]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [ 1] /usr/local/openmpi-1.6_32_cc/lib/openmpi/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_odls_default.so(+0x4023) [0xf73ec023]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [ 2] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libopen-rte.so.4(+0x42b91) [0xf7667b91]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [ 3] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libopen-rte.so.4(orte_daemon_cmd_processor+0x313) [0xf76655c3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [ 4] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libopen-rte.so.4(+0x8f366) [0xf76b4366]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [ 5] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libopen-rte.so.4(opal_event_base_loop+0x18c) [0xf76b46bc]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [ 6] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libopen-rte.so.4(opal_event_loop+0x26) [0xf76b4526]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [ 7] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libopen-rte.so.4(opal_progress+0xba) [0xf769303a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [ 8] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libopen-rte.so.4(orte_plm_base_report_launched+0x13f) [0xf767d62f]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [ 9] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libopen-rte.so.4(orte_plm_base_launch_apps+0x1b7) [0xf767bf27]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [10] /usr/local/openmpi-1.6_32_cc/lib/openmpi/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_plm_rsh.so(orte_plm_rsh_launch+0xb2d) [0xf74228fd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [11] mpiexec(orterun+0x102f) [0x804e7bf]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [12] mpiexec(main+0x13) [0x804c273]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] [13] /lib/libc.so.6(__libc_start_main+0xf3) [0xf745e003]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc4:08402] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 small_prog 107 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hopefully this information helps to fix the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 5, 2012, at 5:50 AM, Siegmar Gross 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm new to rankfiles so that I played a little bit with different
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; options. I thought that the following entry would be similar to an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; entry in an appfile and that MPI could place the process with rank 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on any core of any processor.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately it's not allowed and I got an error. Can somebody add
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the missing help to the file?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 126 mpiexec -rf my_rankfile -report-bindings rank_size
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  no-slot-list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from the file:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  help-rmaps_rank_file.txt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But I couldn't find that topic in the file.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As you can see below I could use a rankfile on my old local machine
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (Sun Ultra 45) but not on our &quot;new&quot; one (Sun Server M4000). Today I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; logged into the machine via ssh and tried the same command once more
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; as a local user without success. It's more or less the same error as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; before when I tried to bind the process to a remote machine.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rs0 small_prog 118 mpiexec -rf my_rankfile -report-bindings rank_size
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:13745] [[19734,0],0] odls:default:fork
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; binding child [[19734,1],0] to slot_list 0:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; affinity settings:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Specified slot list: 0:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Error: Cross-device link
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that the specification had improper syntax.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpiexec was unable to start the specified application as it encountered 
</span><br>
<span class="quotelev1">&gt; an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Error name: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rs0 small_prog 119 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The application is available.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rs0 small_prog 119 which rank_size
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/rank_size
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is it a problem in the Open MPI implementation or in my rankfile?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; How can I request which sockets and cores per socket are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; available so that I can use correct values in my rankfile?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In lam-mpi I had a command &quot;lamnodes&quot; which I could use to get
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; such information. Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are *all* the machines Sparc? Or just the 3rd one (rs0)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes, both machines are Sparc. I tried first in a homogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 106 psrinfo -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 0 as of: 09/04/2012 07:32:14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on-line since 08/31/2012 15:44:42.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 1600 MHz,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;      and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 1 as of: 09/04/2012 07:32:14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on-line since 08/31/2012 15:44:39.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 1600 MHz,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;      and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 107 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; My local machine (tyr) is a dual processor machine and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; other one is equipped with two quad-core processors each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; capable of running two hardware threads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 3, 2012, at 12:43 PM, Siegmar Gross 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the man page for &quot;mpiexec&quot; shows the following:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      cat myrankfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      rank 0=aa slot=1:0-2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      rank 1=bb slot=0:0,1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      rank 2=cc slot=1-2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      mpirun -H aa,bb,cc,dd -rf myrankfile ./a.out So that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Rank 0 runs on node aa, bound to socket 1, cores 0-2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Rank 2 runs on node cc, bound to cores 1 and 2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does it mean that the process with rank 0 should be bound to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; core 0, 1, or 2 of socket 1?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried to use a rankfile and have a problem. My rankfile contains
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the following lines.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 1=tyr.informatik.hs-fulda.de slot=1:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #rank 2=rs0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Everything is fine if I use the file with just my local machine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (the first two lines).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 115 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[9849,1],0] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[9849,1],1] to slot_list 1:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm process 0 of 2 available processes running on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm process 1 of 2 available processes running on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 116 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can also change the socket number and the processes will be attached
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to the correct cores. Unfortunately it doesn't work if I add one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; other machine (third line).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 112 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; affinity settings:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Specified slot list: 0:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Error: Cross-device link
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that the specification had improper syntax.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],0] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],1] to slot_list 1:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:12047] [[10212,0],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],2] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; whose contact information is unknown in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../../openmpi-1.6/orte/mca/rml/oob/rml_oob_send.c at line 145
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] attempted to send
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to [[10212,1],0]: tag 20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A message is attempting to be sent to a process whose contact
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; information is unknown in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at line 2501
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; encountered an error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Error name: Error 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; when attempting to start process rank 2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 113 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The other machine has two 8 core processors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 121 ssh rs0 psrinfo -v
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 0 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on-line since 07/26/2012 15:03:14.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 1 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 15 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on-line since 07/26/2012 15:03:16.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 122 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is it necessary to specify another option on the command line or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is my rankfile faulty? Thank you very much for any suggestions in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20185.php">Brooks Davis: "[OMPI users] test for sctp on FreeBSD too narrow"</a>
<li><strong>Previous message:</strong> <a href="20183.php">Jeff Squyres: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20170.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
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
