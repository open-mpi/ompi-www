<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 09:39:27 2012" -->
<!-- isoreceived="20120216143927" -->
<!-- sent="Thu, 16 Feb 2012 15:39:20 +0100" -->
<!-- isosent="20120216143920" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201202161539.21405.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6D6BEF70-083D-452C-840A-463B99CA3524_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] poor btl sm latency<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 09:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10454.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10452.php">Jeff Squyres: "Re: [OMPI devel] svn.open-mpi.org unscheduled downtime"</a>
<li><strong>In reply to:</strong> <a href="10448.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10454.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10454.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10455.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The inconsistent results disappears when using the option '--cpus-per-proc 2'. 
<br>
I assume it has to do with the fact that each core shares the L1-instruction 
<br>
and L2-data cache with its neighboring core (see 
<br>
<a href="http://upload.wikimedia.org/wikipedia/commons/e/ec/AMD_Bulldozer_block_diagram_%288_core_CPU%29.PNG">http://upload.wikimedia.org/wikipedia/commons/e/ec/AMD_Bulldozer_block_diagram_%288_core_CPU%29.PNG</a>).
<br>
<p>However, the latencies are constant now but still too high:
<br>
<p>$ mpirun -np 2 --bind-to-core --cpus-per-proc 2 ./NPmpi_ompi1.5.5 -S -u 12 -n 
<br>
100000
<br>
Using synchronous sends
<br>
0: n029
<br>
1: n029
<br>
Using synchronous sends
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes 100000 times --&gt;      4.83 Mbps in       1.58 usec
<br>
&nbsp;&nbsp;1:       2 bytes 100000 times --&gt;      9.64 Mbps in       1.58 usec
<br>
&nbsp;&nbsp;2:       3 bytes 100000 times --&gt;     14.59 Mbps in       1.57 usec
<br>
&nbsp;&nbsp;3:       4 bytes 100000 times --&gt;     19.44 Mbps in       1.57 usec
<br>
&nbsp;&nbsp;4:       6 bytes 100000 times --&gt;     29.34 Mbps in       1.56 usec
<br>
&nbsp;&nbsp;5:       8 bytes 100000 times --&gt;     38.95 Mbps in       1.57 usec
<br>
&nbsp;&nbsp;6:      12 bytes 100000 times --&gt;     58.49 Mbps in       1.57 usec
<br>
<p>I updated the Open MPI installation to version 1.5.5rc2r25939 to have hwloc 
<br>
1.3.2.
<br>
<p>$ ompi_info | grep hwloc
<br>
MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.5.5)
<br>
MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.5.5)
<br>
MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.5.5)
<br>
<p><p>Here the output of lstopo from a single compute node. I'm wondering that the 
<br>
fact of L1/L2 sharing isn't visible - also not in the graphical output...
<br>
<p>$ lstopo --output-format console
<br>
Machine (64GB)
<br>
&nbsp;&nbsp;Socket L#0 (16GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 8190MB) + L3 L#0 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (2048KB) + L1 L#0 (16KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (2048KB) + L1 L#1 (16KB) + Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (2048KB) + L1 L#2 (16KB) + Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (2048KB) + L1 L#3 (16KB) + Core L#3 + PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (2048KB) + L1 L#4 (16KB) + Core L#4 + PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (2048KB) + L1 L#5 (16KB) + Core L#5 + PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (2048KB) + L1 L#6 (16KB) + Core L#6 + PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (2048KB) + L1 L#7 (16KB) + Core L#7 + PU L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1 8192MB) + L3 L#1 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (2048KB) + L1 L#8 (16KB) + Core L#8 + PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (2048KB) + L1 L#9 (16KB) + Core L#9 + PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (2048KB) + L1 L#10 (16KB) + Core L#10 + PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (2048KB) + L1 L#11 (16KB) + Core L#11 + PU L#11 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#12 (2048KB) + L1 L#12 (16KB) + Core L#12 + PU L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#13 (2048KB) + L1 L#13 (16KB) + Core L#13 + PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#14 (2048KB) + L1 L#14 (16KB) + Core L#14 + PU L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#15 (2048KB) + L1 L#15 (16KB) + Core L#15 + PU L#15 (P#15)
<br>
&nbsp;&nbsp;Socket L#1 (16GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#2 (P#2 8192MB) + L3 L#2 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#16 (2048KB) + L1 L#16 (16KB) + Core L#16 + PU L#16 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#17 (2048KB) + L1 L#17 (16KB) + Core L#17 + PU L#17 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#18 (2048KB) + L1 L#18 (16KB) + Core L#18 + PU L#18 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#19 (2048KB) + L1 L#19 (16KB) + Core L#19 + PU L#19 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#20 (2048KB) + L1 L#20 (16KB) + Core L#20 + PU L#20 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#21 (2048KB) + L1 L#21 (16KB) + Core L#21 + PU L#21 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#22 (2048KB) + L1 L#22 (16KB) + Core L#22 + PU L#22 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#23 (2048KB) + L1 L#23 (16KB) + Core L#23 + PU L#23 (P#23)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#3 (P#3 8192MB) + L3 L#3 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#24 (2048KB) + L1 L#24 (16KB) + Core L#24 + PU L#24 (P#24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#25 (2048KB) + L1 L#25 (16KB) + Core L#25 + PU L#25 (P#25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#26 (2048KB) + L1 L#26 (16KB) + Core L#26 + PU L#26 (P#26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#27 (2048KB) + L1 L#27 (16KB) + Core L#27 + PU L#27 (P#27)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#28 (2048KB) + L1 L#28 (16KB) + Core L#28 + PU L#28 (P#28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#29 (2048KB) + L1 L#29 (16KB) + Core L#29 + PU L#29 (P#29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#30 (2048KB) + L1 L#30 (16KB) + Core L#30 + PU L#30 (P#30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#31 (2048KB) + L1 L#31 (16KB) + Core L#31 + PU L#31 (P#31)
<br>
&nbsp;&nbsp;Socket L#2 (16GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#4 (P#4 8192MB) + L3 L#4 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#32 (2048KB) + L1 L#32 (16KB) + Core L#32 + PU L#32 (P#32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#33 (2048KB) + L1 L#33 (16KB) + Core L#33 + PU L#33 (P#33)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#34 (2048KB) + L1 L#34 (16KB) + Core L#34 + PU L#34 (P#34)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#35 (2048KB) + L1 L#35 (16KB) + Core L#35 + PU L#35 (P#35)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#36 (2048KB) + L1 L#36 (16KB) + Core L#36 + PU L#36 (P#36)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#37 (2048KB) + L1 L#37 (16KB) + Core L#37 + PU L#37 (P#37)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#38 (2048KB) + L1 L#38 (16KB) + Core L#38 + PU L#38 (P#38)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#39 (2048KB) + L1 L#39 (16KB) + Core L#39 + PU L#39 (P#39)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#5 (P#5 8192MB) + L3 L#5 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#40 (2048KB) + L1 L#40 (16KB) + Core L#40 + PU L#40 (P#40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#41 (2048KB) + L1 L#41 (16KB) + Core L#41 + PU L#41 (P#41)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#42 (2048KB) + L1 L#42 (16KB) + Core L#42 + PU L#42 (P#42)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#43 (2048KB) + L1 L#43 (16KB) + Core L#43 + PU L#43 (P#43)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#44 (2048KB) + L1 L#44 (16KB) + Core L#44 + PU L#44 (P#44)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#45 (2048KB) + L1 L#45 (16KB) + Core L#45 + PU L#45 (P#45)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#46 (2048KB) + L1 L#46 (16KB) + Core L#46 + PU L#46 (P#46)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#47 (2048KB) + L1 L#47 (16KB) + Core L#47 + PU L#47 (P#47)
<br>
&nbsp;&nbsp;Socket L#3 (16GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#6 (P#6 8192MB) + L3 L#6 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#48 (2048KB) + L1 L#48 (16KB) + Core L#48 + PU L#48 (P#48)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#49 (2048KB) + L1 L#49 (16KB) + Core L#49 + PU L#49 (P#49)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#50 (2048KB) + L1 L#50 (16KB) + Core L#50 + PU L#50 (P#50)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#51 (2048KB) + L1 L#51 (16KB) + Core L#51 + PU L#51 (P#51)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#52 (2048KB) + L1 L#52 (16KB) + Core L#52 + PU L#52 (P#52)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#53 (2048KB) + L1 L#53 (16KB) + Core L#53 + PU L#53 (P#53)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#54 (2048KB) + L1 L#54 (16KB) + Core L#54 + PU L#54 (P#54)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#55 (2048KB) + L1 L#55 (16KB) + Core L#55 + PU L#55 (P#55)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#7 (P#7 8192MB) + L3 L#7 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#56 (2048KB) + L1 L#56 (16KB) + Core L#56 + PU L#56 (P#56)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#57 (2048KB) + L1 L#57 (16KB) + Core L#57 + PU L#57 (P#57)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#58 (2048KB) + L1 L#58 (16KB) + Core L#58 + PU L#58 (P#58)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#59 (2048KB) + L1 L#59 (16KB) + Core L#59 + PU L#59 (P#59)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#60 (2048KB) + L1 L#60 (16KB) + Core L#60 + PU L#60 (P#60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#61 (2048KB) + L1 L#61 (16KB) + Core L#61 + PU L#61 (P#61)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#62 (2048KB) + L1 L#62 (16KB) + Core L#62 + PU L#62 (P#62)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#63 (2048KB) + L1 L#63 (16KB) + Core L#63 + PU L#63 (P#63)
<br>
<p>Matthias
<br>
<p>On Thursday 16 February 2012 13:33:16 Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Yowza.  With inconsistent results like that, it does sound like something
</span><br>
<span class="quotelev1">&gt; is going on in the hardware.  Unfortunately, I don't know much/anything
</span><br>
<span class="quotelev1">&gt; about AMDs (Cisco is an Intel shop).  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have (AMD's equivalent of) hyperthreading enabled, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the latest 1.5.5 nightly tarball, I have just upgraded the included
</span><br>
<span class="quotelev1">&gt; version of hwloc to be 1.3.2.  Maybe a good step would be to download
</span><br>
<span class="quotelev1">&gt; hwloc 1.3.2 and verify that lstopo is faithfully reporting the actual
</span><br>
<span class="quotelev1">&gt; topology of your system.  Can you do that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 16, 2012, at 7:06 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sorry for the confusion - the all2all is a classic pingpong which uses
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send/Recv with 0 byte messages.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; One thing I just noticed when using NetPIPE/MPI. Platform MPI results in
</span><br>
<span class="quotelev2">&gt; &gt; almost constant latencies for small messages (~0.89us), where I don't
</span><br>
<span class="quotelev2">&gt; &gt; know about process-binding in Platform MPI - I just used the defaults.
</span><br>
<span class="quotelev2">&gt; &gt; When using Open MPI (regardless of core/socket-binding) the results
</span><br>
<span class="quotelev2">&gt; &gt; differ from run to run:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; === FIRST RUN ===
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 --bind-to-socket ./NPmpi_ompi1.5.5  -S -u 12 -n 100000
</span><br>
<span class="quotelev2">&gt; &gt; Using synchronous sends
</span><br>
<span class="quotelev2">&gt; &gt; 1: n029
</span><br>
<span class="quotelev2">&gt; &gt; Using synchronous sends
</span><br>
<span class="quotelev2">&gt; &gt; 0: n029
</span><br>
<span class="quotelev2">&gt; &gt; Now starting the main loop
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  0:       1 bytes 100000 times --&gt;      4.66 Mbps in       1.64 usec
</span><br>
<span class="quotelev2">&gt; &gt;  1:       2 bytes 100000 times --&gt;      8.94 Mbps in       1.71 usec
</span><br>
<span class="quotelev2">&gt; &gt;  2:       3 bytes 100000 times --&gt;     13.65 Mbps in       1.68 usec
</span><br>
<span class="quotelev2">&gt; &gt;  3:       4 bytes 100000 times --&gt;     17.91 Mbps in       1.70 usec
</span><br>
<span class="quotelev2">&gt; &gt;  4:       6 bytes 100000 times --&gt;     29.04 Mbps in       1.58 usec
</span><br>
<span class="quotelev2">&gt; &gt;  5:       8 bytes 100000 times --&gt;     39.06 Mbps in       1.56 usec
</span><br>
<span class="quotelev2">&gt; &gt;  6:      12 bytes 100000 times --&gt;     57.58 Mbps in       1.59 usec
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; === SECOND RUN (~3s after the previous run) ===
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 --bind-to-socket ./NPmpi_ompi1.5.5  -S -u 12 -n 100000
</span><br>
<span class="quotelev2">&gt; &gt; Using synchronous sends
</span><br>
<span class="quotelev2">&gt; &gt; 1: n029
</span><br>
<span class="quotelev2">&gt; &gt; Using synchronous sends
</span><br>
<span class="quotelev2">&gt; &gt; 0: n029
</span><br>
<span class="quotelev2">&gt; &gt; Now starting the main loop
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  0:       1 bytes 100000 times --&gt;      5.73 Mbps in       1.33 usec
</span><br>
<span class="quotelev2">&gt; &gt;  1:       2 bytes 100000 times --&gt;     11.45 Mbps in       1.33 usec
</span><br>
<span class="quotelev2">&gt; &gt;  2:       3 bytes 100000 times --&gt;     17.13 Mbps in       1.34 usec
</span><br>
<span class="quotelev2">&gt; &gt;  3:       4 bytes 100000 times --&gt;     22.94 Mbps in       1.33 usec
</span><br>
<span class="quotelev2">&gt; &gt;  4:       6 bytes 100000 times --&gt;     34.39 Mbps in       1.33 usec
</span><br>
<span class="quotelev2">&gt; &gt;  5:       8 bytes 100000 times --&gt;     46.40 Mbps in       1.32 usec
</span><br>
<span class="quotelev2">&gt; &gt;  6:      12 bytes 100000 times --&gt;     68.92 Mbps in       1.33 usec
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; === THIRD RUN ===
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 --bind-to-socket ./NPmpi_ompi1.5.5  -S -u 12 -n 100000
</span><br>
<span class="quotelev2">&gt; &gt; Using synchronous sends
</span><br>
<span class="quotelev2">&gt; &gt; 0: n029
</span><br>
<span class="quotelev2">&gt; &gt; Using synchronous sends
</span><br>
<span class="quotelev2">&gt; &gt; 1: n029
</span><br>
<span class="quotelev2">&gt; &gt; Now starting the main loop
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  0:       1 bytes 100000 times --&gt;      3.50 Mbps in       2.18 usec
</span><br>
<span class="quotelev2">&gt; &gt;  1:       2 bytes 100000 times --&gt;      6.99 Mbps in       2.18 usec
</span><br>
<span class="quotelev2">&gt; &gt;  2:       3 bytes 100000 times --&gt;     10.48 Mbps in       2.18 usec
</span><br>
<span class="quotelev2">&gt; &gt;  3:       4 bytes 100000 times --&gt;     14.00 Mbps in       2.18 usec
</span><br>
<span class="quotelev2">&gt; &gt;  4:       6 bytes 100000 times --&gt;     20.98 Mbps in       2.18 usec
</span><br>
<span class="quotelev2">&gt; &gt;  5:       8 bytes 100000 times --&gt;     27.84 Mbps in       2.19 usec
</span><br>
<span class="quotelev2">&gt; &gt;  6:      12 bytes 100000 times --&gt;     41.99 Mbps in       2.18 usec
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; At first appearance, I assumed that some CPU power saving feature is
</span><br>
<span class="quotelev2">&gt; &gt; enabled. But the CPU frequency scaling is set to &quot;performance&quot; and there
</span><br>
<span class="quotelev2">&gt; &gt; is only one available frequency (2.2GHz).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any idea how this can happen?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wednesday 15 February 2012 19:29:38 Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Something is definitely wrong -- 1.4us is way too high for a 0 or 1 byte
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HRT ping pong.  What is this all2all benchmark, btw?  Is it measuring an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_ALLTOALL, or a pingpong?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FWIW, on an older Nehalem machine running NetPIPE/MPI, I'm getting about
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .27us latencies for short messages over sm and binding to socket.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 14, 2012, at 7:20 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I've built Open MPI 1.5.5rc1 (tarball from Web) with CFLAGS=-O3.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Unfortunately, also without any effect.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here some results with enabled binding reports:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpirun *--bind-to-core* --report-bindings -np 2 ./all2all_ompi1.5.5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61313] [[56788,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[56788,1],1] to cpus 0002
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61313] [[56788,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[56788,1],0] to cpus 0001
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; latency: 1.415us
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpirun *-mca maffinity hwloc --bind-to-core* --report-bindings -np 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./all2all_ompi1.5.5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61469] [[49736,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[49736,1],1] to cpus 0002
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61469] [[49736,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[49736,1],0] to cpus 0001
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; latency: 1.4us
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpirun *-mca maffinity first_use --bind-to-core* --report-bindings
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -np 2 ./all2all_ompi1.5.5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61508] [[49681,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[49681,1],1] to cpus 0002
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61508] [[49681,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[49681,1],0] to cpus 0001
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; latency: 1.4us
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpirun *--bind-to-socket* --report-bindings -np 2 ./all2all_ompi1.5.5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61337] [[56780,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[56780,1],1] to socket 0 cpus 0001
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61337] [[56780,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[56780,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; latency: 4.0us
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpirun *-mca maffinity hwloc --bind-to-socket* --report-bindings -np
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2 ./all2all_ompi1.5.5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61615] [[49914,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[49914,1],1] to socket 0 cpus 0001
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61615] [[49914,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[49914,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; latency: 4.0us
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpirun *-mca maffinity first_use --bind-to-socket* --report-bindings
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -np 2 ./all2all_ompi1.5.5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61639] [[49810,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[49810,1],1] to socket 0 cpus 0001
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [n043:61639] [[49810,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[49810,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; latency: 4.0us
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If socket-binding is enabled it seems that all ranks are bind to the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; very first core of one and the same socket. Is it intended? I expected
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that each rank gets its own socket (i.e. 2 ranks -&gt; 2 sockets)...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Monday 13 February 2012 22:36:50 Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Also, double check that you have an optimized build, not a debugging
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; build.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; SVN and HG checkouts default to debugging builds, which add in lots of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; latency.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Feb 13, 2012, at 10:22 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Few thoughts
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1. Bind to socket is broken in 1.5.4 - fixed in next release
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2. Add --report-bindings to cmd line and see where it thinks the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; procs are bound
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 3. Sounds lime memory may not be local - might be worth checking mem
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; binding.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Feb 13, 2012, at 7:07 AM, Matthias Jurenz &lt;matthias.jurenz_at_tu-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; dresden.de&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hi Sylvain,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; thanks for the quick response!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Here some results with enabled process binding. I hope I used the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; parameters correctly...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; bind two ranks to one socket:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 --bind-to-core ./all2all
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 -mca mpi_paffinity_alone 1 ./all2all
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; bind two ranks to two different sockets:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 --bind-to-socket ./all2all
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; All three runs resulted in similar bad latencies (~1.4us).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; :-(
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Monday 13 February 2012 12:43:22 sylvain.jeaugey_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Matthias,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; You might want to play with process binding to see if your problem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; is related to bad memory affinity.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Try to launch pingpong on two CPUs of the same socket, then on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; different sockets (i.e. bind each process to a core, and try
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; different configurations).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; De :    Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; A :     Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Date :  13/02/2012 12:12
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Objet : [OMPI devel] poor btl sm latency
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Envoy&#233; par :    devel-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; on our new AMD cluster (AMD Opteron 6274, 2,2GHz) we get very bad
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; latencies
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (~1.5us) when performing 0-byte p2p communication on one single
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node using the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI sm BTL. When using Platform MPI we get ~0.5us latencies
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; which is pretty good. The bandwidth results are similar for both
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI implementations
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (~3,3GB/s) - this is okay.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; One node has 64 cores and 64Gb RAM where it doesn't matter how many
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ranks allocated by the application. We get similar results with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; different number of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ranks.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; We are using Open MPI 1.5.4 which is built by gcc 4.3.4 without any
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; special
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; configure options except the installation prefix and the location
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; of the LSF
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; stuff.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; As mentioned at <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> we tried
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; to use /dev/shm instead of /tmp for the session directory, but it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; had no effect. Furthermore, we tried the current release candidate
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.5.5rc1 of Open MPI which
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; provides an option to use the SysV shared memory (-mca shmem sysv)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; - also this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; results in similar poor latencies.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10454.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10452.php">Jeff Squyres: "Re: [OMPI devel] svn.open-mpi.org unscheduled downtime"</a>
<li><strong>In reply to:</strong> <a href="10448.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10454.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10454.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10455.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
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
