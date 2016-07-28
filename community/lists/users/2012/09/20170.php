<?
$subject_val = "Re: [OMPI users] problem with rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 07:47:42 2012" -->
<!-- isoreceived="20120910114742" -->
<!-- sent="Mon, 10 Sep 2012 13:34:10 +0200 (CEST)" -->
<!-- isosent="20120910113410" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile" -->
<!-- id="201209101134.q8ABYAsa023003_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-09-10 07:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20171.php">Siegmar Gross: "[OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20169.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe in reply to:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20181.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Reply:</strong> <a href="20181.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Reply:</strong> <a href="20184.php">Jeff Squyres: "Re: [OMPI users] problem with rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev2">&gt; &gt; are the following outputs helpful to find the error with
</span><br>
<span class="quotelev2">&gt; &gt; a rankfile on Solaris?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you can't bind on the new Solaris machine, then the rankfile
</span><br>
<span class="quotelev1">&gt; won't do you any good. It looks like we are getting the incorrect
</span><br>
<span class="quotelev1">&gt; number of cores on that machine - is it possible that it has
</span><br>
<span class="quotelev1">&gt; hardware threads, and doesn't report &quot;cores&quot;? Can you download
</span><br>
<span class="quotelev1">&gt; and run a copy of lstopo to check the output? You get that from
</span><br>
<span class="quotelev1">&gt; the hwloc folks:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/hwloc/v1.5/">http://www.open-mpi.org/software/hwloc/v1.5/</a>
</span><br>
<p>I downloaded and installed the package on our machines. Perhaps it is
<br>
easier to detect the error if you have more information. Therefore I
<br>
provide the different hardware architecures of all machines on which
<br>
a simple program breaks if I try to bind processes to sockets or cores.
<br>
<p>I tried the following five commands with &quot;h&quot; one of &quot;tyr&quot;, &quot;rs0&quot;,
<br>
&quot;linpc0&quot;, &quot;linpc1&quot;, &quot;linpc2&quot;, &quot;linpc4&quot;, &quot;sunpc0&quot;, &quot;sunpc1&quot;,
<br>
&quot;sunpc2&quot;, or &quot;sunpc4&quot; in a shell script file which I started on
<br>
my local machine (&quot;tyr&quot;). &quot;works on&quot; means that the small program
<br>
(MPI_Init, printf, MPI_Finalize) didn't break. I didn't check if
<br>
the layout of the processes was correct.
<br>
<p><p>mpiexec -report-bindings -np 4 -host h init_finalize
<br>
<p>works on:  tyr, rs0, linpc0, linpc1, linpc2, linpc4, sunpc0, sunpc1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sunpc2, sunpc4
<br>
breaks on: -
<br>
<p><p>mpiexec -report-bindings -np 4 -host h -bind-to-core -bycore init_finalize
<br>
<p>works on:  linpc2, sunpc1
<br>
breaks on: tyr, rs0, linpc0, linpc1, linpc4, sunpc0, sunpc2, sunpc4
<br>
<p><p>mpiexec -report-bindings -np 4 -host h -bind-to-core -bysocket init_finalize
<br>
<p>works on:  linpc2, sunpc1
<br>
breaks on: tyr, rs0, linpc0, linpc1, linpc4, sunpc0, sunpc2, sunpc4
<br>
<p><p>mpiexec -report-bindings -np 4 -host h -bind-to-socket -bycore init_finalize
<br>
<p>works on:  tyr, linpc1, linpc2, sunpc1, sunpc2
<br>
breaks on: rs0, linpc0, linpc4, sunpc0, sunpc4
<br>
<p><p>mpiexec -report-bindings -np 4 -host h -bind-to-socket -bysocket init_finalize
<br>
<p>works on:  tyr, linpc1, linpc2, sunpc1, sunpc2
<br>
breaks on: rs0, linpc0, linpc4, sunpc0, sunpc4
<br>
<p><p><p>&quot;lstopo&quot; shows the following hardware configurations for the above
<br>
machines. The first line always shows the installed architecture.
<br>
&quot;lstopo&quot; does a good job as far as I can see it.
<br>
<p>tyr:
<br>
<pre>
----
UltraSPARC-IIIi, 2 single core processors, no hardware threads
tyr fd1026 183 lstopo
Machine (4096MB)
  NUMANode L#0 (P#2 2048MB) + Socket L#0 + Core L#0 + PU L#0 (P#0)
  NUMANode L#1 (P#1 2048MB) + Socket L#1 + Core L#1 + PU L#1 (P#1)
tyr fd1026 116 psrinfo -pv
The physical processor has 1 virtual processor (0)
  UltraSPARC-IIIi (portid 0 impl 0x16 ver 0x34 clock 1600 MHz)
The physical processor has 1 virtual processor (1)
  UltraSPARC-IIIi (portid 1 impl 0x16 ver 0x34 clock 1600 MHz)
rs0, rs1:
---------
SPARC64-VII, 2 quad-core processors, 2 hardware threads / core
rs0 fd1026 105 lstopo
Machine (32GB) + NUMANode L#0 (P#1 32GB)
  Socket L#0
    Core L#0
      PU L#0 (P#0)
      PU L#1 (P#1)
    Core L#1
      PU L#2 (P#2)
      PU L#3 (P#3)
    Core L#2
      PU L#4 (P#4)
      PU L#5 (P#5)
    Core L#3
      PU L#6 (P#6)
      PU L#7 (P#7)
  Socket L#1
    Core L#4
      PU L#8 (P#8)
      PU L#9 (P#9)
    Core L#5
      PU L#10 (P#10)
      PU L#11 (P#11)
    Core L#6
      PU L#12 (P#12)
      PU L#13 (P#13)
    Core L#7
      PU L#14 (P#14)
      PU L#15 (P#15)
tyr fd1026 117 ssh rs0 psrinfo -pv
The physical processor has 8 virtual processors (0-7)
  SPARC64-VII (portid 1024 impl 0x7 ver 0x91 clock 2400 MHz)
The physical processor has 8 virtual processors (8-15)
  SPARC64-VII (portid 1032 impl 0x7 ver 0x91 clock 2400 MHz)
linpc0, linpc3:
---------------
AMD Athlon64 X2, 1 dual-core processor, no hardware threads
linpc0 fd1026 102 lstopo
Machine (4023MB) + Socket L#0
  L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0 (P#0)
  L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1 (P#1)
It is strange that openSuSE-Linux-12.1 thinks that two
dual-core processors are available although the machines
are only equipped with one processor.
linpc0 fd1026 104 cat /proc/cpuinfo  | grep -e processor -e &quot;cpu core&quot;
processor       : 0
cpu cores       : 2
processor       : 1
cpu cores       : 2
linpc1:
-------
Intel Xeon, 2 single core processors, no hardware threads
linpc1 fd1026 104  lstopo
Machine (3829MB)
  Socket L#0 + Core L#0 + PU L#0 (P#0)
  Socket L#1 + Core L#1 + PU L#1 (P#1)
tyr fd1026 118 ssh linpc1 cat /proc/cpuinfo | grep -e processor -e &quot;cpu core&quot;
processor       : 0
cpu cores       : 1
processor       : 1
cpu cores       : 1
linpc2:
-------
AMD Opteron 280, 2 dual-core processors, no hardware threads
linpc2 fd1026 103 lstopo
Machine (8190MB)
  NUMANode L#0 (P#0 4094MB) + Socket L#0
    L2 L#0 (1024KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0 (P#0)
    L2 L#1 (1024KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1 (P#1)
  NUMANode L#1 (P#1 4096MB) + Socket L#1
    L2 L#2 (1024KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU L#2 (P#2)
    L2 L#3 (1024KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU L#3 (P#3)
It is strange that openSuSE-Linux-12.1 thinks that four
dual-core processors are available although the machine
is only equipped with two processors.
linpc2 fd1026 104 cat /proc/cpuinfo | grep -e processor -e &quot;cpu core&quot;
processor       : 0
cpu cores       : 2
processor       : 1
cpu cores       : 2
processor       : 2
cpu cores       : 2
processor       : 3
cpu cores       : 2
linpc4:
-------
AMD Opteron 1218, 1 dual-core processors, no hardware threads
linpc4 fd1026 100 lstopo
Machine (4024MB) + Socket L#0
  L2 L#0 (1024KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0 (P#0)
  L2 L#1 (1024KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1 (P#1)
It is strange that openSuSE-Linux-12.1 thinks that two
dual-core processors are available although the machine
is only equipped with one processor.
tyr fd1026 230 ssh linpc4 cat /proc/cpuinfo | grep -e processor -e &quot;cpu core&quot;
processor       : 0
cpu cores       : 2
processor       : 1
cpu cores       : 2
sunpc0, sunpc3:
---------------
AMD Athlon64 X2, 1 dual-core processor, no hardware threads
sunpc0 fd1026 104 lstopo
Machine (4094MB) + NUMANode L#0 (P#0 4094MB) + Socket L#0
  Core L#0 + PU L#0 (P#0)
  Core L#1 + PU L#1 (P#1)
tyr fd1026 111 ssh sunpc0 psrinfo -pv
The physical processor has 2 virtual processors (0 1)
  x86 (chipid 0x0 AuthenticAMD family 15 model 43 step 1 clock 2000 MHz)
        AMD Athlon(tm) 64 X2 Dual Core Processor 3800+
sunpc1:
-------
AMD Opteron 280, 2 dual-core processors, no hardware threads
sunpc1 fd1026 104 lstopo
Machine (8191MB)
  NUMANode L#0 (P#1 4095MB) + Socket L#0
    Core L#0 + PU L#0 (P#0)
    Core L#1 + PU L#1 (P#1)
  NUMANode L#1 (P#2 4096MB) + Socket L#1
    Core L#2 + PU L#2 (P#2)
    Core L#3 + PU L#3 (P#3)
tyr fd1026 112 ssh sunpc1 psrinfo -pv
The physical processor has 2 virtual processors (0 1)
  x86 (chipid 0x0 AuthenticAMD family 15 model 33 step 2 clock 2411 MHz)
        Dual Core AMD Opteron(tm) Processor 280
The physical processor has 2 virtual processors (2 3)
  x86 (chipid 0x1 AuthenticAMD family 15 model 33 step 2 clock 2411 MHz)
        Dual Core AMD Opteron(tm) Processor 280
sunpc2:
-------
Intel Xeon, 2 single core processors, no hardware threads
sunpc2 fd1026 104 lstopo
Machine (3904MB) + NUMANode L#0 (P#0 3904MB)
  Socket L#0 + Core L#0 + PU L#0 (P#0)
  Socket L#1 + Core L#1 + PU L#1 (P#1)
tyr fd1026 114 ssh sunpc2 psrinfo -pv
The physical processor has 1 virtual processor (0)
  x86 (chipid 0x0 GenuineIntel family 15 model 2 step 9 clock 2791 MHz)
        Intel(r) Xeon(tm) CPU 2.80GHz
The physical processor has 1 virtual processor (1)
  x86 (chipid 0x3 GenuineIntel family 15 model 2 step 9 clock 2791 MHz)
        Intel(r) Xeon(tm) CPU 2.80GHz
sunpc4:
-------
AMD Opteron 1218, 1 dual-core processor, no hardware threads
sunpc4 fd1026 104 lstopo
Machine (4096MB) + NUMANode L#0 (P#0 4096MB) + Socket L#0
  Core L#0 + PU L#0 (P#0)
  Core L#1 + PU L#1 (P#1)
tyr fd1026 115 ssh sunpc4 psrinfo -pv
The physical processor has 2 virtual processors (0 1)
  x86 (chipid 0x0 AuthenticAMD family 15 model 67 step 2 clock 2613 MHz)
        Dual-Core AMD Opteron(tm) Processor 1218
Among others I got the following error messages (I can provide
the complete file if you are interested in it).
##################
##################
mpiexec -report-bindings -np 4 -host tyr -bind-to-core -bycore init_finalize
[tyr.informatik.hs-fulda.de:23208] [[30908,0],0] odls:default:fork binding child 
[[30908,1],2] to cpus 0004
--------------------------------------------------------------------------
An attempt to set processor affinity has failed - please check to
ensure that your system supports such functionality. If so, then
this is probably something that should be reported to the OMPI developers.
--------------------------------------------------------------------------
[tyr.informatik.hs-fulda.de:23208] [[30908,0],0] odls:default:fork binding child 
[[30908,1],0] to cpus 0001
[tyr.informatik.hs-fulda.de:23208] [[30908,0],0] odls:default:fork binding child 
[[30908,1],1] to cpus 0002
--------------------------------------------------------------------------
mpiexec was unable to start the specified application as it encountered an error
on node tyr.informatik.hs-fulda.de. More information may be available above.
--------------------------------------------------------------------------
4 total processes failed to start
 
 
##################
##################
mpiexec -report-bindings -np 4 -host tyr -bind-to-core -bysocket init_finalize
--------------------------------------------------------------------------
An invalid physical processor ID was returned when attempting to bind
an MPI process to a unique processor.
This usually means that you requested binding to more processors than
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
M).  Double check that you have enough unique processors for all the
MPI processes that you are launching on this host.
You job will now abort.
--------------------------------------------------------------------------
[tyr.informatik.hs-fulda.de:23215] [[30907,0],0] odls:default:fork binding child 
[[30907,1],0] to socket 0 cpus 0001
[tyr.informatik.hs-fulda.de:23215] [[30907,0],0] odls:default:fork binding child 
[[30907,1],1] to socket 1 cpus 0002
--------------------------------------------------------------------------
mpiexec was unable to start the specified application as it encountered an error
on node tyr.informatik.hs-fulda.de. More information may be available above.
--------------------------------------------------------------------------
4 total processes failed to start
 
 
##################
##################
mpiexec -report-bindings -np 4 -host rs0 -bind-to-core -bycore init_finalize
--------------------------------------------------------------------------
An attempt to set processor affinity has failed - please check to
ensure that your system supports such functionality. If so, then
this is probably something that should be reported to the OMPI developers.
--------------------------------------------------------------------------
[rs0.informatik.hs-fulda.de:05715] [[30936,0],1] odls:default:fork binding child 
[[30936,1],0] to cpus 0001
--------------------------------------------------------------------------
mpiexec was unable to start the specified application as it encountered an 
error:
Error name: Resource temporarily unavailable
Node: rs0
when attempting to start process rank 0.
--------------------------------------------------------------------------
4 total processes failed to start
 
 
##################
##################
mpiexec -report-bindings -np 4 -host rs0 -bind-to-core -bysocket init_finalize
--------------------------------------------------------------------------
An attempt to set processor affinity has failed - please check to
ensure that your system supports such functionality. If so, then
this is probably something that should be reported to the OMPI developers.
--------------------------------------------------------------------------
[rs0.informatik.hs-fulda.de:05743] [[30916,0],1] odls:default:fork binding child 
[[30916,1],0] to socket 0 cpus 0001
--------------------------------------------------------------------------
mpiexec was unable to start the specified application as it encountered an 
error:
Error name: Resource temporarily unavailable
Node: rs0
when attempting to start process rank 0.
--------------------------------------------------------------------------
4 total processes failed to start
 
 
##################
##################
mpiexec -report-bindings -np 4 -host rs0 -bind-to-socket -bycore init_finalize
--------------------------------------------------------------------------
An attempt to set processor affinity has failed - please check to
ensure that your system supports such functionality. If so, then
this is probably something that should be reported to the OMPI developers.
--------------------------------------------------------------------------
[rs0.informatik.hs-fulda.de:05771] [[30912,0],1] odls:default:fork binding child 
[[30912,1],0] to socket 0 cpus 0055
--------------------------------------------------------------------------
mpiexec was unable to start the specified application as it encountered an 
error:
Error name: Resource temporarily unavailable
Node: rs0
when attempting to start process rank 0.
--------------------------------------------------------------------------
4 total processes failed to start
 
 
##################
##################
mpiexec -report-bindings -np 4 -host rs0 -bind-to-socket -bysocket init_finalize
--------------------------------------------------------------------------
An attempt to set processor affinity has failed - please check to
ensure that your system supports such functionality. If so, then
this is probably something that should be reported to the OMPI developers.
--------------------------------------------------------------------------
[rs0.informatik.hs-fulda.de:05799] [[30924,0],1] odls:default:fork binding child 
[[30924,1],0] to socket 0 cpus 0055
--------------------------------------------------------------------------
mpiexec was unable to start the specified application as it encountered an 
error:
Error name: Resource temporarily unavailable
Node: rs0
when attempting to start process rank 0.
--------------------------------------------------------------------------
4 total processes failed to start
 
 
##################
##################
mpiexec -report-bindings -np 4 -host linpc0 -bind-to-core -bycore init_finalize
--------------------------------------------------------------------------
An attempt to set processor affinity has failed - please check to
ensure that your system supports such functionality. If so, then
this is probably something that should be reported to the OMPI developers.
--------------------------------------------------------------------------
[linpc0:02275] [[30964,0],1] odls:default:fork binding child [[30964,1],0] to 
cpus 0001
[linpc0:02275] [[30964,0],1] odls:default:fork binding child [[30964,1],1] to 
cpus 0002
[linpc0:02275] [[30964,0],1] odls:default:fork binding child [[30964,1],2] to 
cpus 0004
--------------------------------------------------------------------------
mpiexec was unable to start the specified application as it encountered an error
on node linpc0. More information may be available above.
--------------------------------------------------------------------------
4 total processes failed to start
 
 
##################
##################
mpiexec -report-bindings -np 4 -host linpc0 -bind-to-core -bysocket 
init_finalize
--------------------------------------------------------------------------
An invalid physical processor ID was returned when attempting to bind
an MPI process to a unique processor.
This usually means that you requested binding to more processors than
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
M).  Double check that you have enough unique processors for all the
MPI processes that you are launching on this host.
You job will now abort.
--------------------------------------------------------------------------
[linpc0:02326] [[30960,0],1] odls:default:fork binding child [[30960,1],0] to 
socket 0 cpus 0001
[linpc0:02326] [[30960,0],1] odls:default:fork binding child [[30960,1],1] to 
socket 0 cpus 0002
--------------------------------------------------------------------------
mpiexec was unable to start the specified application as it encountered an error
on node linpc0. More information may be available above.
--------------------------------------------------------------------------
4 total processes failed to start
 
 
##################
##################
mpiexec -report-bindings -np 4 -host linpc0 -bind-to-socket -bycore 
init_finalize
--------------------------------------------------------------------------
Unable to bind to socket 0 on node linpc0.
--------------------------------------------------------------------------
--------------------------------------------------------------------------
mpiexec was unable to start the specified application as it encountered an 
error:
Error name: Fatal
Node: linpc0
when attempting to start process rank 0.
--------------------------------------------------------------------------
4 total processes failed to start
 
 
##################
##################
mpiexec -report-bindings -np 4 -host linpc0 -bind-to-socket -bysocket 
init_finalize
--------------------------------------------------------------------------
Unable to bind to socket 0 on node linpc0.
--------------------------------------------------------------------------
--------------------------------------------------------------------------
mpiexec was unable to start the specified application as it encountered an 
error:
Error name: Fatal
Node: linpc0
when attempting to start process rank 0.
--------------------------------------------------------------------------
4 total processes failed to start
Hopefully this helps to track the error. Thank you very much
for your help in advance.
Kind regards
Siegmar
&gt; &gt; I wrapped long lines so that they
&gt; &gt; are easier to read. Have you had time to look at the
&gt; &gt; segmentation fault with a rankfile which I reported in my
&gt; &gt; last email (see below)?
&gt; 
&gt; I'm afraid not - been too busy lately. I'd suggest first focusing
&gt; on getting binding to work.
&gt; 
&gt; &gt; 
&gt; &gt; &quot;tyr&quot; is a two processor single core machine.
&gt; &gt; 
&gt; &gt; tyr fd1026 116 mpiexec -report-bindings -np 4 \
&gt; &gt;  -bind-to-socket -bycore rank_size
&gt; &gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
&gt; &gt;  fork binding child [[27298,1],0] to socket 0 cpus 0001
&gt; &gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
&gt; &gt;  fork binding child [[27298,1],1] to socket 1 cpus 0002
&gt; &gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
&gt; &gt;  fork binding child [[27298,1],2] to socket 0 cpus 0001
&gt; &gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
&gt; &gt;  fork binding child [[27298,1],3] to socket 1 cpus 0002
&gt; &gt; I'm process 0 of 4 ...
&gt; &gt; 
&gt; &gt; 
&gt; &gt; tyr fd1026 121 mpiexec -report-bindings -np 4 \
&gt; &gt; -bind-to-socket -bysocket rank_size
&gt; &gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
&gt; &gt;  fork binding child [[27380,1],0] to socket 0 cpus 0001
&gt; &gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
&gt; &gt;  fork binding child [[27380,1],1] to socket 1 cpus 0002
&gt; &gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
&gt; &gt;  fork binding child [[27380,1],2] to socket 0 cpus 0001
&gt; &gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
&gt; &gt;  fork binding child [[27380,1],3] to socket 1 cpus 0002
&gt; &gt; I'm process 0 of 4 ...
&gt; &gt; 
&gt; &gt; 
&gt; &gt; tyr fd1026 117 mpiexec -report-bindings -np 4 \
&gt; &gt;  -bind-to-core -bycore rank_size
&gt; &gt; [tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
&gt; &gt;  fork binding child [[27307,1],2] to cpus 0004
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; An attempt to set processor affinity has failed - please check to
&gt; &gt; ensure that your system supports such functionality. If so, then
&gt; &gt; this is probably something that should be reported to the OMPI
&gt; &gt;  developers.
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; [tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
&gt; &gt;  fork binding child [[27307,1],0] to cpus 0001
&gt; &gt; [tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
&gt; &gt;  fork binding child [[27307,1],1] to cpus 0002
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; mpiexec was unable to start the specified application
&gt; &gt;  as it encountered an error
&gt; &gt; on node tyr.informatik.hs-fulda.de. More information may be
&gt; &gt;  available above.
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; 4 total processes failed to start
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; tyr fd1026 118 mpiexec -report-bindings -np 4 \
&gt; &gt;  -bind-to-core -bysocket rank_size
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; An invalid physical processor ID was returned when attempting to
&gt; &gt;  bind
&gt; &gt; an MPI process to a unique processor.
&gt; &gt; 
&gt; &gt; This usually means that you requested binding to more processors
&gt; &gt;  than
&gt; &gt; 
&gt; &gt; exist (e.g., trying to bind N MPI processes to M processors,
&gt; &gt;  where N &gt;
&gt; &gt; M).  Double check that you have enough unique processors for
&gt; &gt;  all the
&gt; &gt; MPI processes that you are launching on this host.
&gt; &gt; 
&gt; &gt; You job will now abort.
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; [tyr.informatik.hs-fulda.de:18631] [[27347,0],0] odls:default:
&gt; &gt;  fork binding child [[27347,1],0] to socket 0 cpus 0001
&gt; &gt; [tyr.informatik.hs-fulda.de:18631] [[27347,0],0] odls:default:
&gt; &gt;  fork binding child [[27347,1],1] to socket 1 cpus 0002
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; mpiexec was unable to start the specified application as it
&gt; &gt;  encountered an error
&gt; &gt; on node tyr.informatik.hs-fulda.de. More information may be
&gt; &gt;  available above.
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; 4 total processes failed to start
&gt; &gt; tyr fd1026 119 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; &quot;linpc3&quot; and &quot;linpc4&quot; are two processor dual core machines.
&gt; &gt; 
&gt; &gt; linpc4 fd1026 102 mpiexec -report-bindings -host linpc3,linpc4 \
&gt; &gt; -np 4 -bind-to-core -bycore rank_size
&gt; &gt; [linpc4:16842] [[40914,0],0] odls:default:
&gt; &gt;  fork binding child [[40914,1],1] to cpus 0001
&gt; &gt; [linpc4:16842] [[40914,0],0] odls:default:
&gt; &gt;  fork binding child [[40914,1],3] to cpus 0002
&gt; &gt; [linpc3:31384] [[40914,0],1] odls:default:
&gt; &gt;  fork binding child [[40914,1],0] to cpus 0001
&gt; &gt; [linpc3:31384] [[40914,0],1] odls:default:
&gt; &gt;  fork binding child [[40914,1],2] to cpus 0002
&gt; &gt; I'm process 1 of 4 ...
&gt; &gt; 
&gt; &gt; 
&gt; &gt; linpc4 fd1026 102 mpiexec -report-bindings -host linpc3,linpc4 \
&gt; &gt;  -np 4 -bind-to-core -bysocket rank_size
&gt; &gt; [linpc4:16846] [[40918,0],0] odls:default:
&gt; &gt;  fork binding child [[40918,1],1] to socket 0 cpus 0001
&gt; &gt; [linpc4:16846] [[40918,0],0] odls:default:
&gt; &gt;  fork binding child [[40918,1],3] to socket 0 cpus 0002
&gt; &gt; [linpc3:31435] [[40918,0],1] odls:default:
&gt; &gt;  fork binding child [[40918,1],0] to socket 0 cpus 0001
&gt; &gt; [linpc3:31435] [[40918,0],1] odls:default:
&gt; &gt;  fork binding child [[40918,1],2] to socket 0 cpus 0002
&gt; &gt; I'm process 1 of 4 ...
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; linpc4 fd1026 104 mpiexec -report-bindings -host linpc3,linpc4 \
&gt; &gt;  -np 4 -bind-to-socket -bycore rank_size
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; Unable to bind to socket 0 on node linpc3.
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; Unable to bind to socket 0 on node linpc4.
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; mpiexec was unable to start the specified application as it
&gt; &gt;  encountered an error:
&gt; &gt; 
&gt; &gt; Error name: Fatal
&gt; &gt; Node: linpc4
&gt; &gt; 
&gt; &gt; when attempting to start process rank 1.
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; 4 total processes failed to start
&gt; &gt; linpc4 fd1026 105 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; linpc4 fd1026 105 mpiexec -report-bindings -host linpc3,linpc4 \
&gt; &gt;  -np 4 -bind-to-socket -bysocket rank_size
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; Unable to bind to socket 0 on node linpc4.
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; Unable to bind to socket 0 on node linpc3.
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; ------------------------------------------------------------------
&gt; &gt; mpiexec was unable to start the specified application as it
&gt; &gt;  encountered an error:
&gt; &gt; 
&gt; &gt; Error name: Fatal
&gt; &gt; Node: linpc4
&gt; &gt; 
&gt; &gt; when attempting to start process rank 1.
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt; 4 total processes failed to start
&gt; &gt; 
&gt; &gt; 
&gt; &gt; It's interesting that commands that work on Solaris fail on Linux
&gt; &gt; and vice versa.
&gt; &gt; 
&gt; &gt; 
&gt; &gt; Kind regards
&gt; &gt; 
&gt; &gt; Siegmar
&gt; &gt; 
&gt; &gt;&gt;&gt; I couldn't really say for certain - I don't see anything obviously
&gt; &gt;&gt;&gt; wrong with your syntax, and the code appears to be working or else
&gt; &gt;&gt;&gt; it would fail on the other nodes as well. The fact that it fails
&gt; &gt;&gt;&gt; solely on that machine seems suspect.
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; Set aside the rankfile for the moment and try to just bind to cores
&gt; &gt;&gt;&gt; on that machine, something like:
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; mpiexec --report-bindings -bind-to-core
&gt; &gt;&gt;&gt;  -host rs0.informatik.hs-fulda.de -n 2 rank_size
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; If that doesn't work, then the problem isn't with rankfile
&gt; &gt;&gt; 
&gt; &gt;&gt; It doesn't work but I found out something else as you can see below.
&gt; &gt;&gt; I get a segmentation fault for some rankfiles.
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; tyr small_prog 110 mpiexec --report-bindings -bind-to-core
&gt; &gt;&gt;  -host rs0.informatik.hs-fulda.de -n 2 rank_size
&gt; &gt;&gt; --------------------------------------------------------------------------
&gt; &gt;&gt; An attempt to set processor affinity has failed - please check to
&gt; &gt;&gt; ensure that your system supports such functionality. If so, then
&gt; &gt;&gt; this is probably something that should be reported to the OMPI developers.
&gt; &gt;&gt; --------------------------------------------------------------------------
&gt; &gt;&gt; [rs0.informatik.hs-fulda.de:14695] [[30561,0],1] odls:default:
&gt; &gt;&gt;  fork binding child [[30561,1],0] to cpus 0001
&gt; &gt;&gt; --------------------------------------------------------------------------
&gt; &gt;&gt; mpiexec was unable to start the specified application as it
&gt; &gt;&gt;  encountered an error:
&gt; &gt;&gt; 
&gt; &gt;&gt; Error name: Resource temporarily unavailable
&gt; &gt;&gt; Node: rs0.informatik.hs-fulda.de
&gt; &gt;&gt; 
&gt; &gt;&gt; when attempting to start process rank 0.
&gt; &gt;&gt; --------------------------------------------------------------------------
&gt; &gt;&gt; 2 total processes failed to start
&gt; &gt;&gt; tyr small_prog 111 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; Perhaps I have a hint for the error on Solaris Sparc. I use the
&gt; &gt;&gt; following rankfile to keep everything simple.
&gt; &gt;&gt; 
&gt; &gt;&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 1=linpc0.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 2=linpc1.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; #rank 3=linpc2.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 4=linpc3.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 5=linpc4.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 6=sunpc0.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 7=sunpc1.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 8=sunpc2.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 9=sunpc3.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 10=sunpc4.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; 
&gt; &gt;&gt; When I execute &quot;mpiexec -report-bindings -rf my_rankfile rank_size&quot;
&gt; &gt;&gt; on a Linux-x86_64 or Solaris-10-x86_64 machine everything works fine.
&gt; &gt;&gt; 
&gt; &gt;&gt; linpc4 small_prog 104 mpiexec -report-bindings -rf my_rankfile rank_size
&gt; &gt;&gt; [linpc4:08018] [[49482,0],0] odls:default:fork binding child
&gt; &gt;&gt;  [[49482,1],5] to slot_list 0:0
&gt; &gt;&gt; [linpc3:22030] [[49482,0],4] odls:default:fork binding child
&gt; &gt;&gt;  [[49482,1],4] to slot_list 0:0
&gt; &gt;&gt; [linpc0:12887] [[49482,0],2] odls:default:fork binding child
&gt; &gt;&gt;  [[49482,1],1] to slot_list 0:0
&gt; &gt;&gt; [linpc1:08323] [[49482,0],3] odls:default:fork binding child
&gt; &gt;&gt;  [[49482,1],2] to slot_list 0:0
&gt; &gt;&gt; [sunpc1:17786] [[49482,0],6] odls:default:fork binding child
&gt; &gt;&gt;  [[49482,1],7] to slot_list 0:0
&gt; &gt;&gt; [sunpc3.informatik.hs-fulda.de:08482] [[49482,0],8] odls:default:fork
&gt; &gt;&gt;  binding child [[49482,1],9] to slot_list 0:0
&gt; &gt;&gt; [sunpc0.informatik.hs-fulda.de:11568] [[49482,0],5] odls:default:fork
&gt; &gt;&gt;  binding child [[49482,1],6] to slot_list 0:0
&gt; &gt;&gt; [tyr.informatik.hs-fulda.de:21484] [[49482,0],1] odls:default:fork
&gt; &gt;&gt;  binding child [[49482,1],0] to slot_list 0:0
&gt; &gt;&gt; [sunpc2.informatik.hs-fulda.de:28638] [[49482,0],7] odls:default:fork
&gt; &gt;&gt;  binding child [[49482,1],8] to slot_list 0:0
&gt; &gt;&gt; ...
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; I get a segmentation fault when I run it on my local machine
&gt; &gt;&gt; (Solaris Sparc).
&gt; &gt;&gt; 
&gt; &gt;&gt; tyr small_prog 141 mpiexec -report-bindings -rf my_rankfile rank_size
&gt; &gt;&gt; [tyr.informatik.hs-fulda.de:21421] [[29113,0],0] ORTE_ERROR_LOG:
&gt; &gt;&gt;  Data unpack would read past end of buffer in file
&gt; &gt;&gt;  ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
&gt; &gt;&gt;  at line 927
&gt; &gt;&gt; [tyr:21421] *** Process received signal ***
&gt; &gt;&gt; [tyr:21421] Signal: Segmentation Fault (11)
&gt; &gt;&gt; [tyr:21421] Signal code: Address not mapped (1)
&gt; &gt;&gt; [tyr:21421] Failing at address: 5ba
&gt; &gt;&gt; 
/export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x15d3ec
&gt; &gt;&gt; /lib/libc.so.1:0xcad04
&gt; &gt;&gt; /lib/libc.so.1:0xbf3b4
&gt; &gt;&gt; /lib/libc.so.1:0xbf59c
&gt; &gt;&gt; /lib/libc.so.1:0x58bd0 [ Signal 11 (SEGV)]
&gt; &gt;&gt; /lib/libc.so.1:free+0x24
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
&gt; &gt;&gt;  orte_odls_base_default_construct_child_list+0x1234
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/openmpi/
&gt; &gt;&gt;  mca_odls_default.so:0x90b8
&gt; &gt;&gt; 
/export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x5e8d4
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
&gt; &gt;&gt;  orte_daemon_cmd_processor+0x328
&gt; &gt;&gt; 
/export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x12e324
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
&gt; &gt;&gt;  opal_event_base_loop+0x228
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
&gt; &gt;&gt;  opal_progress+0xec
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
&gt; &gt;&gt;  orte_plm_base_report_launched+0x1c4
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
&gt; &gt;&gt;  orte_plm_base_launch_apps+0x318
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/openmpi/mca_plm_rsh.so:
&gt; &gt;&gt;  orte_plm_rsh_launch+0xac4
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:orterun+0x16a8
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:main+0x24
&gt; &gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:_start+0xd8
&gt; &gt;&gt; [tyr:21421] *** End of error message ***
&gt; &gt;&gt; Segmentation fault
&gt; &gt;&gt; tyr small_prog 142 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; The funny thing is that I get a segmentation fault on the Linux
&gt; &gt;&gt; machine as well if I change my rankfile in the following way.
&gt; &gt;&gt; 
&gt; &gt;&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 1=linpc0.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; #rank 2=linpc1.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; #rank 3=linpc2.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; #rank 4=linpc3.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 5=linpc4.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 6=sunpc0.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; #rank 7=sunpc1.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; #rank 8=sunpc2.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; #rank 9=sunpc3.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; rank 10=sunpc4.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; linpc4 small_prog 107 mpiexec -report-bindings -rf my_rankfile rank_size
&gt; &gt;&gt; [linpc4:08402] [[65226,0],0] ORTE_ERROR_LOG: Data unpack would
&gt; &gt;&gt;  read past end of buffer in file 
&gt; &gt;&gt;  ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
&gt; &gt;&gt;  at line 927
&gt; &gt;&gt; [linpc4:08402] *** Process received signal ***
&gt; &gt;&gt; [linpc4:08402] Signal: Segmentation fault (11)
&gt; &gt;&gt; [linpc4:08402] Signal code: Address not mapped (1)
&gt; &gt;&gt; [linpc4:08402] Failing at address: 0x5f32fffc
&gt; &gt;&gt; [linpc4:08402] [ 0] [0xffffe410]
&gt; &gt;&gt; [linpc4:08402] [ 1] /usr/local/openmpi-1.6_32_cc/lib/openmpi/
&gt; &gt;&gt;  mca_odls_default.so(+0x4023) [0xf73ec023]
&gt; &gt;&gt; [linpc4:08402] [ 2] /usr/local/openmpi-1.6_32_cc/lib/
&gt; &gt;&gt;  libopen-rte.so.4(+0x42b91) [0xf7667b91]
&gt; &gt;&gt; [linpc4:08402] [ 3] /usr/local/openmpi-1.6_32_cc/lib/
&gt; &gt;&gt;  libopen-rte.so.4(orte_daemon_cmd_processor+0x313) [0xf76655c3]
&gt; &gt;&gt; [linpc4:08402] [ 4] /usr/local/openmpi-1.6_32_cc/lib/
&gt; &gt;&gt;  libopen-rte.so.4(+0x8f366) [0xf76b4366]
&gt; &gt;&gt; [linpc4:08402] [ 5] /usr/local/openmpi-1.6_32_cc/lib/
&gt; &gt;&gt;  libopen-rte.so.4(opal_event_base_loop+0x18c) [0xf76b46bc]
&gt; &gt;&gt; [linpc4:08402] [ 6] /usr/local/openmpi-1.6_32_cc/lib/
&gt; &gt;&gt;  libopen-rte.so.4(opal_event_loop+0x26) [0xf76b4526]
&gt; &gt;&gt; [linpc4:08402] [ 7] /usr/local/openmpi-1.6_32_cc/lib/
&gt; &gt;&gt;  libopen-rte.so.4(opal_progress+0xba) [0xf769303a]
&gt; &gt;&gt; [linpc4:08402] [ 8] /usr/local/openmpi-1.6_32_cc/lib/
&gt; &gt;&gt;  libopen-rte.so.4(orte_plm_base_report_launched+0x13f) [0xf767d62f]
&gt; &gt;&gt; [linpc4:08402] [ 9] /usr/local/openmpi-1.6_32_cc/lib/
&gt; &gt;&gt;  libopen-rte.so.4(orte_plm_base_launch_apps+0x1b7) [0xf767bf27]
&gt; &gt;&gt; [linpc4:08402] [10] /usr/local/openmpi-1.6_32_cc/lib/openmpi/
&gt; &gt;&gt;  mca_plm_rsh.so(orte_plm_rsh_launch+0xb2d) [0xf74228fd]
&gt; &gt;&gt; [linpc4:08402] [11] mpiexec(orterun+0x102f) [0x804e7bf]
&gt; &gt;&gt; [linpc4:08402] [12] mpiexec(main+0x13) [0x804c273]
&gt; &gt;&gt; [linpc4:08402] [13] /lib/libc.so.6(__libc_start_main+0xf3) [0xf745e003]
&gt; &gt;&gt; [linpc4:08402] *** End of error message ***
&gt; &gt;&gt; Segmentation fault
&gt; &gt;&gt; linpc4 small_prog 107 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; Hopefully this information helps to fix the problem.
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; Kind regards
&gt; &gt;&gt; 
&gt; &gt;&gt; Siegmar
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt;&gt; On Sep 5, 2012, at 5:50 AM, Siegmar Gross 
&gt; &gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Hi,
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; I'm new to rankfiles so that I played a little bit with different
&gt; &gt;&gt;&gt;&gt; options. I thought that the following entry would be similar to an
&gt; &gt;&gt;&gt;&gt; entry in an appfile and that MPI could place the process with rank 0
&gt; &gt;&gt;&gt;&gt; on any core of any processor.
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Unfortunately it's not allowed and I got an error. Can somebody add
&gt; &gt;&gt;&gt;&gt; the missing help to the file?
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; tyr small_prog 126 mpiexec -rf my_rankfile -report-bindings rank_size
&gt; &gt;&gt;&gt;&gt; 
--------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
&gt; &gt;&gt;&gt;&gt;   no-slot-list
&gt; &gt;&gt;&gt;&gt; from the file:
&gt; &gt;&gt;&gt;&gt;   help-rmaps_rank_file.txt
&gt; &gt;&gt;&gt;&gt; But I couldn't find that topic in the file.  Sorry!
&gt; &gt;&gt;&gt;&gt; 
--------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; As you can see below I could use a rankfile on my old local machine
&gt; &gt;&gt;&gt;&gt; (Sun Ultra 45) but not on our &quot;new&quot; one (Sun Server M4000). Today I
&gt; &gt;&gt;&gt;&gt; logged into the machine via ssh and tried the same command once more
&gt; &gt;&gt;&gt;&gt; as a local user without success. It's more or less the same error as
&gt; &gt;&gt;&gt;&gt; before when I tried to bind the process to a remote machine.
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; rs0 small_prog 118 mpiexec -rf my_rankfile -report-bindings rank_size
&gt; &gt;&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:13745] [[19734,0],0] odls:default:fork
&gt; &gt;&gt;&gt;&gt; binding child [[19734,1],0] to slot_list 0:0
&gt; &gt;&gt;&gt;&gt; 
--------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt; We were unable to successfully process/set the requested processor
&gt; &gt;&gt;&gt;&gt; affinity settings:
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Specified slot list: 0:0
&gt; &gt;&gt;&gt;&gt; Error: Cross-device link
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; This could mean that a non-existent processor was specified, or
&gt; &gt;&gt;&gt;&gt; that the specification had improper syntax.
&gt; &gt;&gt;&gt;&gt; 
--------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt; 
--------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt; mpiexec was unable to start the specified application as it encountered 
an 
&gt; &gt; error:
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Error name: No such file or directory
&gt; &gt;&gt;&gt;&gt; Node: rs0.informatik.hs-fulda.de
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; when attempting to start process rank 0.
&gt; &gt;&gt;&gt;&gt; 
--------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt; rs0 small_prog 119 
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; The application is available.
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; rs0 small_prog 119 which rank_size
&gt; &gt;&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/rank_size
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Is it a problem in the Open MPI implementation or in my rankfile?
&gt; &gt;&gt;&gt;&gt; How can I request which sockets and cores per socket are
&gt; &gt;&gt;&gt;&gt; available so that I can use correct values in my rankfile?
&gt; &gt;&gt;&gt;&gt; In lam-mpi I had a command &quot;lamnodes&quot; which I could use to get
&gt; &gt;&gt;&gt;&gt; such information. Thank you very much for any help in advance.
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Kind regards
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Siegmar
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt; Are *all* the machines Sparc? Or just the 3rd one (rs0)?
&gt; &gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt; Yes, both machines are Sparc. I tried first in a homogeneous
&gt; &gt;&gt;&gt;&gt;&gt; environment.
&gt; &gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt; tyr fd1026 106 psrinfo -v
&gt; &gt;&gt;&gt;&gt;&gt; Status of virtual processor 0 as of: 09/04/2012 07:32:14
&gt; &gt;&gt;&gt;&gt;&gt; on-line since 08/31/2012 15:44:42.
&gt; &gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 1600 MHz,
&gt; &gt;&gt;&gt;&gt;&gt;       and has a sparcv9 floating point processor.
&gt; &gt;&gt;&gt;&gt;&gt; Status of virtual processor 1 as of: 09/04/2012 07:32:14
&gt; &gt;&gt;&gt;&gt;&gt; on-line since 08/31/2012 15:44:39.
&gt; &gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 1600 MHz,
&gt; &gt;&gt;&gt;&gt;&gt;       and has a sparcv9 floating point processor.
&gt; &gt;&gt;&gt;&gt;&gt; tyr fd1026 107 
&gt; &gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt; My local machine (tyr) is a dual processor machine and the
&gt; &gt;&gt;&gt;&gt;&gt; other one is equipped with two quad-core processors each
&gt; &gt;&gt;&gt;&gt;&gt; capable of running two hardware threads.
&gt; &gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt; Kind regards
&gt; &gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt; Siegmar
&gt; &gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Sep 3, 2012, at 12:43 PM, Siegmar Gross 
&gt; &gt;&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the man page for &quot;mpiexec&quot; shows the following:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;       cat myrankfile
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;       rank 0=aa slot=1:0-2
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;       rank 1=bb slot=0:0,1
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;       rank 2=cc slot=1-2
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;       mpirun -H aa,bb,cc,dd -rf myrankfile ./a.out So that
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Rank 0 runs on node aa, bound to socket 1, cores 0-2.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Rank 2 runs on node cc, bound to cores 1 and 2.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Does it mean that the process with rank 0 should be bound to
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; core 0, 1, or 2 of socket 1?
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried to use a rankfile and have a problem. My rankfile contains
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the following lines.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 1=tyr.informatik.hs-fulda.de slot=1:0
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; #rank 2=rs0.informatik.hs-fulda.de slot=0:0
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Everything is fine if I use the file with just my local machine
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (the first two lines).
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 115 mpiexec -report-bindings -rf my_rankfile rank_size
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[9849,1],0] to slot_list 0:0
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[9849,1],1] to slot_list 1:0
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm process 0 of 2 available processes running on 
&gt; &gt;&gt;&gt;&gt;&gt; tyr.informatik.hs-fulda.de.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm process 1 of 2 available processes running on 
&gt; &gt;&gt;&gt;&gt;&gt; tyr.informatik.hs-fulda.de.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 116 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I can also change the socket number and the processes will be attached
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; to the correct cores. Unfortunately it doesn't work if I add one
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; other machine (third line).
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 112 mpiexec -report-bindings -rf my_rankfile rank_size
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; We were unable to successfully process/set the requested processor
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; affinity settings:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Specified slot list: 0:0
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Error: Cross-device link
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; This could mean that a non-existent processor was specified, or
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; that the specification had improper syntax.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],0] to slot_list 0:0
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],1] to slot_list 1:0
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:12047] [[10212,0],1]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],2] to slot_list 0:0
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; whose contact information is unknown in file
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../../openmpi-1.6/orte/mca/rml/oob/rml_oob_send.c at line 145
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] attempted to send
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; to [[10212,1],0]: tag 20
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] ORTE_ERROR_LOG:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; A message is attempting to be sent to a process whose contact
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; information is unknown in file
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; at line 2501
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec was unable to start the specified application as it
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; encountered an error:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Error name: Error 0
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Node: rs0.informatik.hs-fulda.de
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; when attempting to start process rank 2.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 113 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; The other machine has two 8 core processors.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 121 ssh rs0 psrinfo -v
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 0 as of: 09/03/2012 19:51:15
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; on-line since 07/26/2012 15:03:14.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 2400 MHz,
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;      and has a sparcv9 floating point processor.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 1 as of: 09/03/2012 19:51:15
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 15 as of: 09/03/2012 19:51:15
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; on-line since 07/26/2012 15:03:16.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 2400 MHz,
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;      and has a sparcv9 floating point processor.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 122 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Is it necessary to specify another option on the command line or
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; is my rankfile faulty? Thank you very much for any suggestions in
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; advance.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; 
&gt; &gt; 
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20171.php">Siegmar Gross: "[OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20169.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe in reply to:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20181.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Reply:</strong> <a href="20181.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Reply:</strong> <a href="20184.php">Jeff Squyres: "Re: [OMPI users] problem with rankfile"</a>
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
