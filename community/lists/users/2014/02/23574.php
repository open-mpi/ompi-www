<?
$subject_val = "Re: [OMPI users] rankfiles in openmpi-1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  9 12:11:42 2014" -->
<!-- isoreceived="20140209171142" -->
<!-- sent="Sun, 9 Feb 2014 09:10:10 -0800" -->
<!-- isosent="20140209171010" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rankfiles in openmpi-1.7.4" -->
<!-- id="B99B8590-81E2-4C09-9D2C-C442D8EAABEA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201402080733.s187Xnfs023253_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] rankfiles in openmpi-1.7.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-09 12:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23575.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23573.php">Siegmar Gross: "[OMPI users] rankfiles in openmpi-1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23573.php">Siegmar Gross: "[OMPI users] rankfiles in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23576.php">Siegmar Gross: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2014, at 11:33 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tested rankfiles once more. The good news first: openmpi-1.7.4
</span><br>
<span class="quotelev1">&gt; now supports my Sun M4000 server with Sparc VII processors on the
</span><br>
<span class="quotelev1">&gt; command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 104 mpiexec --report-bindings -np 4 \
</span><br>
<span class="quotelev1">&gt;  --bind-to hwthread hostname
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06051] MCW rank 1 bound to
</span><br>
<span class="quotelev1">&gt;  socket 0[core 1[hwt 0]]: [../B./../..][../../../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06051] MCW rank 2 bound to
</span><br>
<span class="quotelev1">&gt;  socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06051] MCW rank 3 bound to
</span><br>
<span class="quotelev1">&gt;  socket 1[core 5[hwt 0]]: [../../../..][../B./../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06051] MCW rank 0 bound to
</span><br>
<span class="quotelev1">&gt;  socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 105 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for solving this problem. Unfortunately I still
</span><br>
<span class="quotelev1">&gt; have a problem with a rankfile. Contents of my rankfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=rs0 slot=0:0-7
</span><br>
<span class="quotelev1">&gt; rank 1=rs0 slot=1
</span><br>
<span class="quotelev1">&gt; rank 2=rs1 slot=0
</span><br>
<span class="quotelev1">&gt; rank 3=rs1 slot=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Here's your problem - you told us socket 0, cores 0-7. However, if you look at your topology, you only have *4* cores in socket 0
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 105 mpiexec --report-bindings \
</span><br>
<span class="quotelev1">&gt;  --use-hwthread-cpus -np 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06060] [[7659,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt;  found in file
</span><br>
<span class="quotelev1">&gt;  .../openmpi-1.7.4/orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev1">&gt;  at line 283
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06060] [[7659,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt;  found in file
</span><br>
<span class="quotelev1">&gt;  .../openmpi-1.7.4/orte/mca/rmaps/base/rmaps_base_map_job.c
</span><br>
<span class="quotelev1">&gt;  at line 284
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 106 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 110 mpiexec --report-bindings \
</span><br>
<span class="quotelev1">&gt;  --display-allocation --mca rmaps_base_verbose_100 \
</span><br>
<span class="quotelev1">&gt;  --use-hwthread-cpus -np 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;        rs0: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt;        rs1: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06074] [[7677,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.7.4/orte/mca/rmaps/rank_file/rmaps_rank_file.c at line 283
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06074] [[7677,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7.4/orte/mca/rmaps/base/rmaps_base_map_job.c at line 284
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 111 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 111 mpiexec --report-bindings --display-allocation --mca ess_base_verbose 5 --use-hwthread-cpus -np 
</span><br>
<span class="quotelev1">&gt; 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Skipping component [env]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Querying component [hnp]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Query of component [hnp] set priority to 100
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Querying component [singleton]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Skipping component [singleton]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Querying component [tool]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Skipping component [tool]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Selected component [hnp]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] [[INVALID],INVALID] Topology Info:
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] Type: Machine Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;        Name=NULL
</span><br>
<span class="quotelev1">&gt;        total=33554432KB
</span><br>
<span class="quotelev1">&gt;        Backend=Solaris
</span><br>
<span class="quotelev1">&gt;        OSName=SunOS
</span><br>
<span class="quotelev1">&gt;        OSRelease=5.10
</span><br>
<span class="quotelev1">&gt;        OSVersion=Generic_150400-04
</span><br>
<span class="quotelev1">&gt;        Architecture=sun4u
</span><br>
<span class="quotelev1">&gt;        Cpuset:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;        Online:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;        Allowed: 0x0000ffff
</span><br>
<span class="quotelev1">&gt;        Bind CPU proc:   TRUE
</span><br>
<span class="quotelev1">&gt;        Bind CPU thread: TRUE
</span><br>
<span class="quotelev1">&gt;        Bind MEM proc:   TRUE
</span><br>
<span class="quotelev1">&gt;        Bind MEM thread: TRUE
</span><br>
<span class="quotelev1">&gt;        Type: NUMANode Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                Name=NULL
</span><br>
<span class="quotelev1">&gt;                local=33554432KB
</span><br>
<span class="quotelev1">&gt;                total=33554432KB
</span><br>
<span class="quotelev1">&gt;                Cpuset:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;                Online:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;                Allowed: 0x0000ffff
</span><br>
<span class="quotelev1">&gt;                Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev1">&gt;                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                        CPUType=sparcv9
</span><br>
<span class="quotelev1">&gt;                        CPUModel=SPARC64_VII
</span><br>
<span class="quotelev1">&gt;                        Cpuset:  0x000000ff
</span><br>
<span class="quotelev1">&gt;                        Online:  0x000000ff
</span><br>
<span class="quotelev1">&gt;                        Allowed: 0x000000ff
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000003
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000003
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000003
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000002
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x0000000c
</span><br>
<span class="quotelev1">&gt;                                Online:  0x0000000c
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x0000000c
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000004
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000008
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000030
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000030
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000030
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000010
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000010
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000010
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000020
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000020
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000020
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x000000c0
</span><br>
<span class="quotelev1">&gt;                                Online:  0x000000c0
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x000000c0
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000040
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000040
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000040
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000080
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000080
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000080
</span><br>
<span class="quotelev1">&gt;                Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev1">&gt;                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                        CPUType=sparcv9
</span><br>
<span class="quotelev1">&gt;                        CPUModel=SPARC64_VII
</span><br>
<span class="quotelev1">&gt;                        Cpuset:  0x0000ff00
</span><br>
<span class="quotelev1">&gt;                        Online:  0x0000ff00
</span><br>
<span class="quotelev1">&gt;                        Allowed: 0x0000ff00
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000300
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000300
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000300
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000100
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000100
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000100
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000200
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000200
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000200
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000c00
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000c00
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000c00
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000400
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000400
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000400
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000800
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000800
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000800
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00003000
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00003000
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00003000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00001000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00001000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00001000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00002000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00002000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00002000
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x0000c000
</span><br>
<span class="quotelev1">&gt;                                Online:  0x0000c000
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x0000c000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00004000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00004000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00004000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00008000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00008000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00008000
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09657] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09657] mca:base:select:(  ess) Query of component [env] set priority to 20
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09657] mca:base:select:(  ess) Selected component [env]
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09657] ess:env set name to [[7673,0],1]
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09657] [[7673,0],1] Topology Info:
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09657] Type: Machine Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;        Name=NULL
</span><br>
<span class="quotelev1">&gt;        total=33554432KB
</span><br>
<span class="quotelev1">&gt;        Backend=Solaris
</span><br>
<span class="quotelev1">&gt;        OSName=SunOS
</span><br>
<span class="quotelev1">&gt;        OSRelease=5.10
</span><br>
<span class="quotelev1">&gt;        OSVersion=Generic_150400-04
</span><br>
<span class="quotelev1">&gt;        Architecture=sun4u
</span><br>
<span class="quotelev1">&gt;        Cpuset:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;        Online:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;        Allowed: 0x0000ffff
</span><br>
<span class="quotelev1">&gt;        Bind CPU proc:   TRUE
</span><br>
<span class="quotelev1">&gt;        Bind CPU thread: TRUE
</span><br>
<span class="quotelev1">&gt;        Bind MEM proc:   TRUE
</span><br>
<span class="quotelev1">&gt;        Bind MEM thread: TRUE
</span><br>
<span class="quotelev1">&gt;        Type: NUMANode Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                Name=NULL
</span><br>
<span class="quotelev1">&gt;                local=33554432KB
</span><br>
<span class="quotelev1">&gt;                total=33554432KB
</span><br>
<span class="quotelev1">&gt;                Cpuset:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;                Online:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;                Allowed: 0x0000ffff
</span><br>
<span class="quotelev1">&gt;                Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev1">&gt;                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                        CPUType=sparcv9
</span><br>
<span class="quotelev1">&gt;                        CPUModel=SPARC64_VII
</span><br>
<span class="quotelev1">&gt;                        Cpuset:  0x000000ff
</span><br>
<span class="quotelev1">&gt;                        Online:  0x000000ff
</span><br>
<span class="quotelev1">&gt;                        Allowed: 0x000000ff
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000003
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000003
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000003
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000002
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x0000000c
</span><br>
<span class="quotelev1">&gt;                                Online:  0x0000000c
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x0000000c
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000004
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000008
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000030
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000030
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000030
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000010
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000010
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000010
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000020
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000020
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000020
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x000000c0
</span><br>
<span class="quotelev1">&gt;                                Online:  0x000000c0
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x000000c0
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000040
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000040
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000040
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000080
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000080
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000080
</span><br>
<span class="quotelev1">&gt;                Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev1">&gt;                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                        CPUType=sparcv9
</span><br>
<span class="quotelev1">&gt;                        CPUModel=SPARC64_VII
</span><br>
<span class="quotelev1">&gt;                        Cpuset:  0x0000ff00
</span><br>
<span class="quotelev1">&gt;                        Online:  0x0000ff00
</span><br>
<span class="quotelev1">&gt;                        Allowed: 0x0000ff00
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000300
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000300
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000300
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000100
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000100
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000100
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000200
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000200
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000200
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000c00
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000c00
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000c00
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000400
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000400
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000400
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000800
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000800
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000800
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00003000
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00003000
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00003000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00001000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00001000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00001000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00002000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00002000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00002000
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x0000c000
</span><br>
<span class="quotelev1">&gt;                                Online:  0x0000c000
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x0000c000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00004000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00004000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00004000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00008000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00008000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00008000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;        rs0: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt;        rs1: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] [[7673,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.7.4/orte/mca/rmaps/rank_file/rmaps_rank_file.c at line 283
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06078] [[7673,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7.4/orte/mca/rmaps/base/rmaps_base_map_job.c at line 284
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09657] [[7673,0],1] setting up session dir with
</span><br>
<span class="quotelev1">&gt;        tmpdir: UNDEF
</span><br>
<span class="quotelev1">&gt;        host rs1
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 112 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 113 mpiexec --report-bindings --display-allocation --mca plm_base_verbose 100 --use-hwthread-cpus 
</span><br>
<span class="quotelev1">&gt; -np 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] plm:base:set_hnp_name: initial bias 6088 nodename hash 3909477186
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] plm:base:set_hnp_name: final jobfam 7567
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:setup_job
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] setup:vm: working unmanaged allocation
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] using rankfile rf_rs0_rs1
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] checking node rs0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] ignoring myself
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] checking node rs1
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:setup_vm add new daemon [[7567,0],1]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:setup_vm assigning new daemon [[7567,0],1] to node rs1
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: local shell: 2 (tcsh)
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: remote shell: 2 (tcsh)
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt;        /usr/local/bin/ssh &lt;template&gt;  orted -mca orte_report_bindings 1 -mca ess env -mca orte_ess_jobid 495910912 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 2 -mca orte_hnp_uri 
</span><br>
<span class="quotelev1">&gt; &quot;495910912.0;tcp://193.174.26.198,192.168.128.1,10.1.1.2:43810&quot; --tree-spawn --mca plm_base_verbose 100 -mca plm rsh -mca 
</span><br>
<span class="quotelev1">&gt; orte_rankfile rf_rs0_rs1 -mca hwloc_base_use_hwthreads_as_cpus 1 -mca orte_display_alloc 1 -mca hwloc_base_report_bindings 1
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh:launch daemon 0 not a child of mine
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: adding node rs1 to launch list
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: activating launch event
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: recording launch of daemon [[7567,0],1]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: executing: (/usr/local/bin/ssh) [/usr/local/bin/ssh rs1  orted -mca 
</span><br>
<span class="quotelev1">&gt; orte_report_bindings 1 -mca ess env -mca orte_ess_jobid 495910912 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca 
</span><br>
<span class="quotelev1">&gt; orte_hnp_uri &quot;495910912.0;tcp://193.174.26.198,192.168.128.1,10.1.1.2:43810&quot; --tree-spawn --mca plm_base_verbose 100 -mca plm 
</span><br>
<span class="quotelev1">&gt; rsh -mca orte_rankfile rf_rs0_rs1 -mca hwloc_base_use_hwthreads_as_cpus 1 -mca orte_display_alloc 1 -mca 
</span><br>
<span class="quotelev1">&gt; hwloc_base_report_bindings 1]
</span><br>
<span class="quotelev1">&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev1">&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:orted_report_launch from daemon [[7567,0],1]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:orted_report_launch from daemon [[7567,0],1] on node rs1
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] RECEIVED TOPOLOGY FROM NODE rs1
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] Type: Machine Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;        Name=NULL
</span><br>
<span class="quotelev1">&gt;        total=33554432KB
</span><br>
<span class="quotelev1">&gt;        Backend=Solaris
</span><br>
<span class="quotelev1">&gt;        OSName=SunOS
</span><br>
<span class="quotelev1">&gt;        OSRelease=5.10
</span><br>
<span class="quotelev1">&gt;        OSVersion=Generic_150400-04
</span><br>
<span class="quotelev1">&gt;        Architecture=sun4u
</span><br>
<span class="quotelev1">&gt;        Cpuset:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;        Online:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;        Allowed: 0x0000ffff
</span><br>
<span class="quotelev1">&gt;        Bind CPU proc:   TRUE
</span><br>
<span class="quotelev1">&gt;        Bind CPU thread: TRUE
</span><br>
<span class="quotelev1">&gt;        Bind MEM proc:   TRUE
</span><br>
<span class="quotelev1">&gt;        Bind MEM thread: TRUE
</span><br>
<span class="quotelev1">&gt;        Type: NUMANode Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                Name=NULL
</span><br>
<span class="quotelev1">&gt;                local=33554432KB
</span><br>
<span class="quotelev1">&gt;                total=33554432KB
</span><br>
<span class="quotelev1">&gt;                Cpuset:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;                Online:  0x0000ffff
</span><br>
<span class="quotelev1">&gt;                Allowed: 0x0000ffff
</span><br>
<span class="quotelev1">&gt;                Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev1">&gt;                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                        CPUType=sparcv9
</span><br>
<span class="quotelev1">&gt;                        CPUModel=SPARC64_VII
</span><br>
<span class="quotelev1">&gt;                        Cpuset:  0x000000ff
</span><br>
<span class="quotelev1">&gt;                        Online:  0x000000ff
</span><br>
<span class="quotelev1">&gt;                        Allowed: 0x000000ff
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000003
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000003
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000003
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000002
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x0000000c
</span><br>
<span class="quotelev1">&gt;                                Online:  0x0000000c
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x0000000c
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000004
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000008
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000030
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000030
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000030
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000010
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000010
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000010
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000020
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000020
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000020
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x000000c0
</span><br>
<span class="quotelev1">&gt;                                Online:  0x000000c0
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x000000c0
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000040
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000040
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000040
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000080
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000080
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000080
</span><br>
<span class="quotelev1">&gt;                Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev1">&gt;                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                        CPUType=sparcv9
</span><br>
<span class="quotelev1">&gt;                        CPUModel=SPARC64_VII
</span><br>
<span class="quotelev1">&gt;                        Cpuset:  0x0000ff00
</span><br>
<span class="quotelev1">&gt;                        Online:  0x0000ff00
</span><br>
<span class="quotelev1">&gt;                        Allowed: 0x0000ff00
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000300
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000300
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000300
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000100
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000100
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000100
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000200
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000200
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000200
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000c00
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000c00
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000c00
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000400
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000400
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000400
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000800
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000800
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000800
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00003000
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00003000
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00003000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00001000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00001000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00001000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00002000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00002000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00002000
</span><br>
<span class="quotelev1">&gt;                        Type: Core Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x0000c000
</span><br>
<span class="quotelev1">&gt;                                Online:  0x0000c000
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x0000c000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00004000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00004000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00004000
</span><br>
<span class="quotelev1">&gt;                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00008000
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00008000
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00008000
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] TOPOLOGY MATCHES - DISCARDING
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:orted_report_launch completed for daemon [[7567,0],1] at contact 
</span><br>
<span class="quotelev1">&gt; 495910912.1;tcp://193.174.26.199,192.168.128.2,10.1.1.2:37231
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;        rs0: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt;        rs1: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:rsh: remote spawn called
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:rsh: remote spawn - have no children!
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.7.4/orte/mca/rmaps/rank_file/rmaps_rank_file.c at line 283
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7.4/orte/mca/rmaps/base/rmaps_base_map_job.c at line 284
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 114 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still have the problem that I get no output if I mix little and
</span><br>
<span class="quotelev1">&gt; big endian machines, which works for openmpi-1.6.x.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 112 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev1">&gt;  -rf rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 113 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 188 mpiexec -report-bindings --display-allocation --mca plm_base_verbose 100 -np 1 -rf 
</span><br>
<span class="quotelev1">&gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: components_register: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: components_register: component slurm register function successful
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] plm:base:set_hnp_name: initial bias 20650 nodename hash 3902177415
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] plm:base:set_hnp_name: final jobfam 14523
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_job
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] setup:vm: working unmanaged allocation
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] using rankfile rf_linpc_sunpc_tyr
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] checking node linpc0
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] checking node linpc1
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] ignoring myself
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] checking node sunpc1
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] checking node tyr
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm add new daemon [[14523,0],1]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm assigning new daemon [[14523,0],1] to node linpc0
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm add new daemon [[14523,0],2]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm assigning new daemon [[14523,0],2] to node sunpc1
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm add new daemon [[14523,0],3]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm assigning new daemon [[14523,0],3] to node tyr
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: local shell: 2 (tcsh)
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: remote shell: 2 (tcsh)
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt;        /usr/local/bin/ssh &lt;template&gt;  orted -mca orte_report_bindings 1 -mca ess env -mca orte_ess_jobid 951779328 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 4 -mca orte_hnp_uri &quot;951779328.0;tcp://193.174.26.208:46876&quot; --tree-spawn 
</span><br>
<span class="quotelev1">&gt; --mca plm_base_verbose 100 -mca plm rsh -mca hwloc_base_report_bindings 1 -mca orte_display_alloc 1 -mca orte_rankfile 
</span><br>
<span class="quotelev1">&gt; rf_linpc_sunpc_tyr
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh:launch daemon 0 not a child of mine
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: adding node linpc0 to launch list
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: adding node sunpc1 to launch list
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh:launch daemon 3 not a child of mine
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: activating launch event
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: recording launch of daemon [[14523,0],1]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: recording launch of daemon [[14523,0],2]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: executing: (/usr/local/bin/ssh) [/usr/local/bin/ssh sunpc1  orted -mca 
</span><br>
<span class="quotelev1">&gt; orte_report_bindings 1 -mca ess env -mca orte_ess_jobid 951779328 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 4 -mca 
</span><br>
<span class="quotelev1">&gt; orte_hnp_uri &quot;951779328.0;tcp://193.174.26.208:46876&quot; --tree-spawn --mca plm_base_verbose 100 -mca plm rsh -mca 
</span><br>
<span class="quotelev1">&gt; hwloc_base_report_bindings 1 -mca orte_display_alloc 1 -mca orte_rankfile rf_linpc_sunpc_tyr]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:rsh: executing: (/usr/local/bin/ssh) [/usr/local/bin/ssh linpc0  orted -mca 
</span><br>
<span class="quotelev1">&gt; orte_report_bindings 1 -mca ess env -mca orte_ess_jobid 951779328 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 4 -mca 
</span><br>
<span class="quotelev1">&gt; orte_hnp_uri &quot;951779328.0;tcp://193.174.26.208:46876&quot; --tree-spawn --mca plm_base_verbose 100 -mca plm rsh -mca 
</span><br>
<span class="quotelev1">&gt; hwloc_base_report_bindings 1 -mca orte_display_alloc 1 -mca orte_rankfile rf_linpc_sunpc_tyr]
</span><br>
<span class="quotelev1">&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev1">&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev1">&gt; X11 forwarding request failed on channel 0
</span><br>
<span class="quotelev1">&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev1">&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] [[14523,0],2] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] [[14523,0],2] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] [[14523,0],2] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch from daemon [[14523,0],2]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch from daemon [[14523,0],2] on node sunpc1
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch completed for daemon [[14523,0],2] at contact 
</span><br>
<span class="quotelev1">&gt; 951779328.2;tcp://193.174.26.210:33215
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] [[14523,0],2] plm:rsh: remote spawn called
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] [[14523,0],2] plm:rsh: remote spawn - have no children!
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch from daemon [[14523,0],1]
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch from daemon [[14523,0],1] on node linpc0
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] RECEIVED TOPOLOGY FROM NODE linpc0
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] Type: Machine Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;        Name=NULL
</span><br>
<span class="quotelev1">&gt;        total=8387048KB
</span><br>
<span class="quotelev1">&gt;        DMIProductName=&quot;Sun Ultra 40 Workstation&quot;
</span><br>
<span class="quotelev1">&gt;        DMIProductVersion=11
</span><br>
<span class="quotelev1">&gt;        DMIBoardVendor=&quot;Sun Microsystems&quot;
</span><br>
<span class="quotelev1">&gt;        DMIBoardName=&quot;Sun Ultra 40 Workstation&quot;
</span><br>
<span class="quotelev1">&gt;        DMIBoardVersion=50
</span><br>
<span class="quotelev1">&gt;        DMIBoardAssetTag=
</span><br>
<span class="quotelev1">&gt;        DMIChassisVendor=&quot;Sun Microsystems&quot;
</span><br>
<span class="quotelev1">&gt;        DMIChassisType=17
</span><br>
<span class="quotelev1">&gt;        DMIChassisVersion=01
</span><br>
<span class="quotelev1">&gt;        DMIChassisAssetTag=
</span><br>
<span class="quotelev1">&gt;        DMIBIOSVendor=&quot;Phoenix Technologies Ltd.&quot;
</span><br>
<span class="quotelev1">&gt;        DMIBIOSVersion=&quot;1.70  &quot;
</span><br>
<span class="quotelev1">&gt;        DMIBIOSDate=02/15/2008
</span><br>
<span class="quotelev1">&gt;        DMISysVendor=&quot;Sun Microsystems&quot;
</span><br>
<span class="quotelev1">&gt;        Backend=Linux
</span><br>
<span class="quotelev1">&gt;        OSName=Linux
</span><br>
<span class="quotelev1">&gt;        OSRelease=3.1.10-1.16-desktop
</span><br>
<span class="quotelev1">&gt;        OSVersion=&quot;#1 SMP PREEMPT Wed Jun 27 05:21:40 UTC 2012 (d016078)&quot;
</span><br>
<span class="quotelev1">&gt;        Architecture=x86_64
</span><br>
<span class="quotelev1">&gt;        Cpuset:  0x0000000f
</span><br>
<span class="quotelev1">&gt;        Online:  0x0000000f
</span><br>
<span class="quotelev1">&gt;        Allowed: 0x0000000f
</span><br>
<span class="quotelev1">&gt;        Bind CPU proc:   TRUE
</span><br>
<span class="quotelev1">&gt;        Bind CPU thread: TRUE
</span><br>
<span class="quotelev1">&gt;        Bind MEM proc:   FALSE
</span><br>
<span class="quotelev1">&gt;        Bind MEM thread: TRUE
</span><br>
<span class="quotelev1">&gt;        Type: NUMANode Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                Name=NULL
</span><br>
<span class="quotelev1">&gt;                local=4192744KB
</span><br>
<span class="quotelev1">&gt;                total=4192744KB
</span><br>
<span class="quotelev1">&gt;                Cpuset:  0x00000003
</span><br>
<span class="quotelev1">&gt;                Online:  0x00000003
</span><br>
<span class="quotelev1">&gt;                Allowed: 0x00000003
</span><br>
<span class="quotelev1">&gt;                Type: Socket Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                        CPUModel=&quot;Dual Core AMD Opteron(tm) Processor 280&quot;
</span><br>
<span class="quotelev1">&gt;                        Cpuset:  0x00000003
</span><br>
<span class="quotelev1">&gt;                        Online:  0x00000003
</span><br>
<span class="quotelev1">&gt;                        Allowed: 0x00000003
</span><br>
<span class="quotelev1">&gt;                        Type: L2Cache Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                size=1024KB
</span><br>
<span class="quotelev1">&gt;                                linesize=64
</span><br>
<span class="quotelev1">&gt;                                ways=16
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt;                                Type: L1dCache Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        size=64KB
</span><br>
<span class="quotelev1">&gt;                                        linesize=64
</span><br>
<span class="quotelev1">&gt;                                        ways=2
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt;                                        Type: Core Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                                Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                                Online:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                                Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt;                                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                                        Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                                        Online:  0x00000001
</span><br>
<span class="quotelev1">&gt;                                                        Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt;                        Type: L2Cache Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                size=1024KB
</span><br>
<span class="quotelev1">&gt;                                linesize=64
</span><br>
<span class="quotelev1">&gt;                                ways=16
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000002
</span><br>
<span class="quotelev1">&gt;                                Type: L1dCache Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        size=64KB
</span><br>
<span class="quotelev1">&gt;                                        linesize=64
</span><br>
<span class="quotelev1">&gt;                                        ways=2
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000002
</span><br>
<span class="quotelev1">&gt;                                        Type: Core Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                                Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                                Online:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                                Allowed: 0x00000002
</span><br>
<span class="quotelev1">&gt;                                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                                        Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                                        Online:  0x00000002
</span><br>
<span class="quotelev1">&gt;                                                        Allowed: 0x00000002
</span><br>
<span class="quotelev1">&gt;                Type: Bridge Host-&gt;PCI Number of child objects: 4
</span><br>
<span class="quotelev1">&gt;                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                        buses=0000:[00-03]
</span><br>
<span class="quotelev1">&gt;                        Type: PCI 10de:0053 Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                Name=nVidia Corporation CK804 IDE
</span><br>
<span class="quotelev1">&gt;                                busid=0000:00:06.0
</span><br>
<span class="quotelev1">&gt;                                class=0101(IDE)
</span><br>
<span class="quotelev1">&gt;                                PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev1">&gt;                                PCIDevice=&quot;CK804 IDE&quot;
</span><br>
<span class="quotelev1">&gt;                                Type: Block Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=sr0
</span><br>
<span class="quotelev1">&gt;                        Type: PCI 10de:0055 Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                Name=nVidia Corporation CK804 Serial ATA Controller
</span><br>
<span class="quotelev1">&gt;                                busid=0000:00:07.0
</span><br>
<span class="quotelev1">&gt;                                class=0101(IDE)
</span><br>
<span class="quotelev1">&gt;                                PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev1">&gt;                                PCIDevice=&quot;CK804 Serial ATA Controller&quot;
</span><br>
<span class="quotelev1">&gt;                                Type: Block Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=sda
</span><br>
<span class="quotelev1">&gt;                        Type: PCI 10de:0054 Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                Name=nVidia Corporation CK804 Serial ATA Controller
</span><br>
<span class="quotelev1">&gt;                                busid=0000:00:08.0
</span><br>
<span class="quotelev1">&gt;                                class=0101(IDE)
</span><br>
<span class="quotelev1">&gt;                                PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev1">&gt;                                PCIDevice=&quot;CK804 Serial ATA Controller&quot;
</span><br>
<span class="quotelev1">&gt;                        Type: PCI 10de:029d Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                                Name=nVidia Corporation G71GL [Quadro FX 3500]
</span><br>
<span class="quotelev1">&gt;                                busid=0000:03:00.0
</span><br>
<span class="quotelev1">&gt;                                class=0300(VGA)
</span><br>
<span class="quotelev1">&gt;                                PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev1">&gt;                                PCIDevice=&quot;G71GL [Quadro FX 3500]&quot;
</span><br>
<span class="quotelev1">&gt;                                Type: GPU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=controlD64
</span><br>
<span class="quotelev1">&gt;                                Type: GPU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                        Name=card0
</span><br>
<span class="quotelev1">&gt;        Type: NUMANode Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                Name=NULL
</span><br>
<span class="quotelev1">&gt;                local=4194304KB
</span><br>
<span class="quotelev1">&gt;                total=4194304KB
</span><br>
<span class="quotelev1">&gt;                Cpuset:  0x0000000c
</span><br>
<span class="quotelev1">&gt;                Online:  0x0000000c
</span><br>
<span class="quotelev1">&gt;                Allowed: 0x0000000c
</span><br>
<span class="quotelev1">&gt;                Type: Socket Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                        CPUModel=&quot;Dual Core AMD Opteron(tm) Processor 280&quot;
</span><br>
<span class="quotelev1">&gt;                        Cpuset:  0x0000000c
</span><br>
<span class="quotelev1">&gt;                        Online:  0x0000000c
</span><br>
<span class="quotelev1">&gt;                        Allowed: 0x0000000c
</span><br>
<span class="quotelev1">&gt;                        Type: L2Cache Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                size=1024KB
</span><br>
<span class="quotelev1">&gt;                                linesize=64
</span><br>
<span class="quotelev1">&gt;                                ways=16
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000004
</span><br>
<span class="quotelev1">&gt;                                Type: L1dCache Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        size=64KB
</span><br>
<span class="quotelev1">&gt;                                        linesize=64
</span><br>
<span class="quotelev1">&gt;                                        ways=2
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000004
</span><br>
<span class="quotelev1">&gt;                                        Type: Core Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                                Cpuset:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                                Online:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                                Allowed: 0x00000004
</span><br>
<span class="quotelev1">&gt;                                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                                        Cpuset:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                                        Online:  0x00000004
</span><br>
<span class="quotelev1">&gt;                                                        Allowed: 0x00000004
</span><br>
<span class="quotelev1">&gt;                        Type: L2Cache Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                size=1024KB
</span><br>
<span class="quotelev1">&gt;                                linesize=64
</span><br>
<span class="quotelev1">&gt;                                ways=16
</span><br>
<span class="quotelev1">&gt;                                Cpuset:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                Online:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                Allowed: 0x00000008
</span><br>
<span class="quotelev1">&gt;                                Type: L1dCache Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                        size=64KB
</span><br>
<span class="quotelev1">&gt;                                        linesize=64
</span><br>
<span class="quotelev1">&gt;                                        ways=2
</span><br>
<span class="quotelev1">&gt;                                        Cpuset:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                        Online:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                        Allowed: 0x00000008
</span><br>
<span class="quotelev1">&gt;                                        Type: Core Number of child objects: 1
</span><br>
<span class="quotelev1">&gt;                                                Name=NULL
</span><br>
<span class="quotelev1">&gt;                                                Cpuset:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                                Online:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                                Allowed: 0x00000008
</span><br>
<span class="quotelev1">&gt;                                                Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                                                        Cpuset:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                                        Online:  0x00000008
</span><br>
<span class="quotelev1">&gt;                                                        Allowed: 0x00000008
</span><br>
<span class="quotelev1">&gt;                Type: Bridge Host-&gt;PCI Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;                        Name=NULL
</span><br>
<span class="quotelev1">&gt;                        buses=0000:[80-82]
</span><br>
<span class="quotelev1">&gt;                        Type: PCI 10de:0054 Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                Name=nVidia Corporation CK804 Serial ATA Controller
</span><br>
<span class="quotelev1">&gt;                                busid=0000:80:07.0
</span><br>
<span class="quotelev1">&gt;                                class=0101(IDE)
</span><br>
<span class="quotelev1">&gt;                                PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev1">&gt;                                PCIDevice=&quot;CK804 Serial ATA Controller&quot;
</span><br>
<span class="quotelev1">&gt;                        Type: PCI 10de:0055 Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                                Name=nVidia Corporation CK804 Serial ATA Controller
</span><br>
<span class="quotelev1">&gt;                                busid=0000:80:08.0
</span><br>
<span class="quotelev1">&gt;                                class=0101(IDE)
</span><br>
<span class="quotelev1">&gt;                                PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev1">&gt;                                PCIDevice=&quot;CK804 Serial ATA Controller&quot;
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] NEW TOPOLOGY - ADDING
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch completed for daemon [[14523,0],1] at contact 
</span><br>
<span class="quotelev1">&gt; 951779328.1;tcp://193.174.26.214,192.168.1.1:57891
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:rsh: remote spawn called
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:rsh: local shell: 2 (tcsh)
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:rsh: remote shell: 2 (tcsh)
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt;        /usr/local/bin/ssh &lt;template&gt;  orted -mca orte_report_bindings 1 -mca ess env -mca orte_ess_jobid 951779328 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 4 -mca orte_parent_uri &quot;951779328.1;tcp://193.174.26.214,192.168.1.1:57891&quot; 
</span><br>
<span class="quotelev1">&gt; -mca orte_hnp_uri &quot;951779328.0;tcp://193.174.26.208:46876&quot; --mca plm_base_verbose 100 -mca hwloc_base_report_bindings 1 -mca 
</span><br>
<span class="quotelev1">&gt; orte_display_alloc 1 -mca orte_rankfile rf_linpc_sunpc_tyr -mca plm rsh
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:rsh: activating launch event
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:rsh: recording launch of daemon [[14523,0],3]
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:rsh: executing: (/usr/local/bin/ssh) [/usr/local/bin/ssh tyr  orted -mca orte_report_bindings 
</span><br>
<span class="quotelev1">&gt; 1 -mca ess env -mca orte_ess_jobid 951779328 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 4 -mca orte_parent_uri 
</span><br>
<span class="quotelev1">&gt; &quot;951779328.1;tcp://193.174.26.214,192.168.1.1:57891&quot; -mca orte_hnp_uri &quot;951779328.0;tcp://193.174.26.208:46876&quot; --mca 
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 100 -mca hwloc_base_report_bindings 1 -mca orte_display_alloc 1 -mca orte_rankfile rf_linpc_sunpc_tyr -mca 
</span><br>
<span class="quotelev1">&gt; plm rsh --tree-spawn]
</span><br>
<span class="quotelev1">&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev1">&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] [[14523,0],3] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] [[14523,0],3] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] [[14523,0],3] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] [[14523,0],3] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] daemon 3 failed with status 1
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] [[14523,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [linpc1:20650] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 189 [sunpc1:09408] [[14523,0],2] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [sunpc1:09408] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] [[14523,0],1] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [linpc0:32306] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 189 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 189 mpiexec -report-bindings --display-allocation --mca rmaps_base_verbose_100 -np 1 -rf 
</span><br>
<span class="quotelev1">&gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;        linpc1: slots=1 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to find the specified executable file, and therefore
</span><br>
<span class="quotelev1">&gt; did not launch the job.  This error was first reported for process
</span><br>
<span class="quotelev1">&gt; rank 0; it may have occurred for other processes as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: A common cause for this error is misspelling a mpiexec command
</span><br>
<span class="quotelev1">&gt;      line parameter option (remember that mpiexec interprets the first
</span><br>
<span class="quotelev1">&gt;      unrecognized command line token as the executable).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node:       linpc1
</span><br>
<span class="quotelev1">&gt; Executable: 1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 190 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23575.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23573.php">Siegmar Gross: "[OMPI users] rankfiles in openmpi-1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23573.php">Siegmar Gross: "[OMPI users] rankfiles in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23576.php">Siegmar Gross: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
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
