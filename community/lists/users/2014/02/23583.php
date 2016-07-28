<?
$subject_val = "Re: [OMPI users] rankfiles in openmpi-1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 20:07:45 2014" -->
<!-- isoreceived="20140211010745" -->
<!-- sent="Mon, 10 Feb 2014 17:06:03 -0800" -->
<!-- isosent="20140211010603" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rankfiles in openmpi-1.7.4" -->
<!-- id="2B570AE9-E337-469C-BC37-F6BC33D5218F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201402092008.s19K81w5002452_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2014-02-10 20:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23584.php">tmishima_at_[hidden]: "[OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23582.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources"</a>
<li><strong>In reply to:</strong> <a href="23576.php">Siegmar Gross: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...afraid there isn't much I can offer here, Siegmar. For whatever reason, hwloc is indicating it cannot bind processes on that architecture.
<br>
<p><p>On Feb 9, 2014, at 12:08 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you very much for your reply. I have changed my rankfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=rs0 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=rs0 slot=1
</span><br>
<span class="quotelev1">&gt; rank 2=rs1 slot=0
</span><br>
<span class="quotelev1">&gt; rank 3=rs1 slot=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I get the following output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 108 mpiexec --report-bindings \
</span><br>
<span class="quotelev1">&gt;  --use-hwthread-cpus -np 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev1">&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev1">&gt; will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:        rs0
</span><br>
<span class="quotelev1">&gt;  Application name:  /usr/local/bin/hostname
</span><br>
<span class="quotelev1">&gt;  Error message:     hwloc indicates cpu binding cannot be enforced
</span><br>
<span class="quotelev1">&gt;  Location:          
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.7.4/orte/mca/odls/default/odls_default_module.c:499
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; rs0 openmpi_1.7.x_or_newer 109 
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
<span class="quotelev3">&gt;&gt;&gt; today I tested rankfiles once more. The good news first: openmpi-1.7.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now supports my Sun M4000 server with Sparc VII processors on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 104 mpiexec --report-bindings -np 4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --bind-to hwthread hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06051] MCW rank 1 bound to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 1[hwt 0]]: [../B./../..][../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06051] MCW rank 2 bound to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06051] MCW rank 3 bound to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 5[hwt 0]]: [../../../..][../B./../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06051] MCW rank 0 bound to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 105 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much for solving this problem. Unfortunately I still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have a problem with a rankfile. Contents of my rankfile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=rs0 slot=0:0-7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=rs0 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 2=rs1 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 3=rs1 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's your problem - you told us socket 0, cores 0-7. However, if
</span><br>
<span class="quotelev2">&gt;&gt; you look at your topology, you only have *4* cores in socket 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 105 mpiexec --report-bindings \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --use-hwthread-cpus -np 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06060] [[7659,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../openmpi-1.7.4/orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at line 283
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06060] [[7659,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../openmpi-1.7.4/orte/mca/rmaps/base/rmaps_base_map_job.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at line 284
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 106 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 110 mpiexec --report-bindings \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --display-allocation --mca rmaps_base_verbose_100 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --use-hwthread-cpus -np 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rs0: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rs1: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06074] [[7677,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../openmpi-1.7.4/orte/mca/rmaps/rank_file/rmaps_rank_file.c at 
</span><br>
<span class="quotelev1">&gt; line 283
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06074] [[7677,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../openmpi-1.7.4/orte/mca/rmaps/base/rmaps_base_map_job.c at line 
</span><br>
<span class="quotelev1">&gt; 284
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 111 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 111 mpiexec --report-bindings 
</span><br>
<span class="quotelev1">&gt; --display-allocation --mca ess_base_verbose 5 --use-hwthread-cpus -np 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Querying 
</span><br>
<span class="quotelev1">&gt; component [env]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Skipping 
</span><br>
<span class="quotelev1">&gt; component [env]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Querying 
</span><br>
<span class="quotelev1">&gt; component [hnp]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Query of 
</span><br>
<span class="quotelev1">&gt; component [hnp] set priority to 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Querying 
</span><br>
<span class="quotelev1">&gt; component [singleton]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Skipping 
</span><br>
<span class="quotelev1">&gt; component [singleton]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Querying 
</span><br>
<span class="quotelev1">&gt; component [tool]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Skipping 
</span><br>
<span class="quotelev1">&gt; component [tool]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] mca:base:select:(  ess) Selected 
</span><br>
<span class="quotelev1">&gt; component [hnp]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] [[INVALID],INVALID] Topology Info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] Type: Machine Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       total=33554432KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Backend=Solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSName=SunOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSRelease=5.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSVersion=Generic_150400-04
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Architecture=sun4u
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Cpuset:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Online:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Allowed: 0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind CPU proc:   TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind CPU thread: TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind MEM proc:   TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind MEM thread: TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Type: NUMANode Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               local=33554432KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               total=33554432KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Cpuset:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Online:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Allowed: 0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUType=sparcv9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUModel=SPARC64_VII
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Cpuset:  0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Online:  0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Allowed: 0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000030
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000030
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000030
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000020
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000020
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000020
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x000000c0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x000000c0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x000000c0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000040
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000040
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000040
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000080
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000080
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000080
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUType=sparcv9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUModel=SPARC64_VII
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Cpuset:  0x0000ff00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Online:  0x0000ff00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Allowed: 0x0000ff00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000c00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000c00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000c00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00003000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00003000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00003000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00001000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00001000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00001000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00002000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00002000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00002000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x0000c000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x0000c000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x0000c000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00004000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00004000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00004000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00008000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00008000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00008000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09657] mca:base:select:(  ess) Querying 
</span><br>
<span class="quotelev1">&gt; component [env]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09657] mca:base:select:(  ess) Query of 
</span><br>
<span class="quotelev1">&gt; component [env] set priority to 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09657] mca:base:select:(  ess) Selected 
</span><br>
<span class="quotelev1">&gt; component [env]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09657] ess:env set name to [[7673,0],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09657] [[7673,0],1] Topology Info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09657] Type: Machine Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       total=33554432KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Backend=Solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSName=SunOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSRelease=5.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSVersion=Generic_150400-04
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Architecture=sun4u
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Cpuset:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Online:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Allowed: 0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind CPU proc:   TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind CPU thread: TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind MEM proc:   TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind MEM thread: TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Type: NUMANode Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               local=33554432KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               total=33554432KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Cpuset:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Online:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Allowed: 0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUType=sparcv9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUModel=SPARC64_VII
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Cpuset:  0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Online:  0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Allowed: 0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000030
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000030
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000030
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000020
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000020
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000020
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x000000c0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x000000c0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x000000c0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000040
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000040
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000040
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000080
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000080
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000080
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUType=sparcv9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUModel=SPARC64_VII
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Cpuset:  0x0000ff00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Online:  0x0000ff00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Allowed: 0x0000ff00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000c00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000c00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000c00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00003000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00003000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00003000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00001000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00001000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00001000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00002000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00002000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00002000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x0000c000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x0000c000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x0000c000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00004000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00004000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00004000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00008000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00008000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00008000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rs0: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rs1: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] [[7673,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../openmpi-1.7.4/orte/mca/rmaps/rank_file/rmaps_rank_file.c at 
</span><br>
<span class="quotelev1">&gt; line 283
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06078] [[7673,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../openmpi-1.7.4/orte/mca/rmaps/base/rmaps_base_map_job.c at line 
</span><br>
<span class="quotelev1">&gt; 284
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09657] [[7673,0],1] setting up session dir with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       tmpdir: UNDEF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       host rs1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 112 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 113 mpiexec --report-bindings 
</span><br>
<span class="quotelev1">&gt; --display-allocation --mca plm_base_verbose 100 --use-hwthread-cpus 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 4 -rf rf_rs0_rs1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_register: 
</span><br>
<span class="quotelev1">&gt; registering plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_register: found 
</span><br>
<span class="quotelev1">&gt; loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_register: component 
</span><br>
<span class="quotelev1">&gt; rsh register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_open: opening plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: components_open: component rsh 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca:base:select: Auto-selecting plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca:base:select:(  plm) Querying 
</span><br>
<span class="quotelev1">&gt; component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[INVALID],INVALID] plm:rsh_lookup on 
</span><br>
<span class="quotelev1">&gt; agent ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca:base:select:(  plm) Query of 
</span><br>
<span class="quotelev1">&gt; component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca:base:select:(  plm) Selected 
</span><br>
<span class="quotelev1">&gt; component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] plm:base:set_hnp_name: initial bias 6088 
</span><br>
<span class="quotelev1">&gt; nodename hash 3909477186
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] plm:base:set_hnp_name: final jobfam 7567
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh_setup on agent ssh : 
</span><br>
<span class="quotelev1">&gt; rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:setup_job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:setup_vm creating 
</span><br>
<span class="quotelev1">&gt; map
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] setup:vm: working unmanaged 
</span><br>
<span class="quotelev1">&gt; allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] using rankfile rf_rs0_rs1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] checking node rs0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] ignoring myself
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] checking node rs1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:setup_vm add new 
</span><br>
<span class="quotelev1">&gt; daemon [[7567,0],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:setup_vm assigning 
</span><br>
<span class="quotelev1">&gt; new daemon [[7567,0],1] to node rs1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: local shell: 2 
</span><br>
<span class="quotelev1">&gt; (tcsh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: assuming same 
</span><br>
<span class="quotelev1">&gt; remote shell as local shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: remote shell: 2 
</span><br>
<span class="quotelev1">&gt; (tcsh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: final template 
</span><br>
<span class="quotelev1">&gt; argv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /usr/local/bin/ssh &lt;template&gt;  orted -mca orte_report_bindings 1 -mca 
</span><br>
<span class="quotelev1">&gt; ess env -mca orte_ess_jobid 495910912 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 2 -mca orte_hnp_uri 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;495910912.0;tcp://193.174.26.198,192.168.128.1,10.1.1.2:43810&quot; --tree-spawn 
</span><br>
<span class="quotelev1">&gt; --mca plm_base_verbose 100 -mca plm rsh -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rankfile rf_rs0_rs1 -mca hwloc_base_use_hwthreads_as_cpus 1 -mca 
</span><br>
<span class="quotelev1">&gt; orte_display_alloc 1 -mca hwloc_base_report_bindings 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh:launch daemon 0 not 
</span><br>
<span class="quotelev1">&gt; a child of mine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: adding node rs1 to 
</span><br>
<span class="quotelev1">&gt; launch list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: activating launch 
</span><br>
<span class="quotelev1">&gt; event
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: recording launch of 
</span><br>
<span class="quotelev1">&gt; daemon [[7567,0],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:rsh: executing: 
</span><br>
<span class="quotelev1">&gt; (/usr/local/bin/ssh) [/usr/local/bin/ssh rs1  orted -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_report_bindings 1 -mca ess env -mca orte_ess_jobid 495910912 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_hnp_uri &quot;495910912.0;tcp://193.174.26.198,192.168.128.1,10.1.1.2:43810&quot; 
</span><br>
<span class="quotelev1">&gt; --tree-spawn --mca plm_base_verbose 100 -mca plm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsh -mca orte_rankfile rf_rs0_rs1 -mca hwloc_base_use_hwthreads_as_cpus 1 
</span><br>
<span class="quotelev1">&gt; -mca orte_display_alloc 1 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_base_report_bindings 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_register: 
</span><br>
<span class="quotelev1">&gt; registering plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_register: found 
</span><br>
<span class="quotelev1">&gt; loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_register: component 
</span><br>
<span class="quotelev1">&gt; rsh register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_open: opening plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: components_open: component rsh 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca:base:select: Auto-selecting plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca:base:select:(  plm) Querying 
</span><br>
<span class="quotelev1">&gt; component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:rsh_lookup on agent ssh 
</span><br>
<span class="quotelev1">&gt; : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca:base:select:(  plm) Query of 
</span><br>
<span class="quotelev1">&gt; component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca:base:select:(  plm) Selected 
</span><br>
<span class="quotelev1">&gt; component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:rsh_setup on agent ssh : 
</span><br>
<span class="quotelev1">&gt; rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:orted_report_launch 
</span><br>
<span class="quotelev1">&gt; from daemon [[7567,0],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:orted_report_launch 
</span><br>
<span class="quotelev1">&gt; from daemon [[7567,0],1] on node rs1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] RECEIVED TOPOLOGY FROM NODE 
</span><br>
<span class="quotelev1">&gt; rs1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] Type: Machine Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       total=33554432KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Backend=Solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSName=SunOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSRelease=5.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSVersion=Generic_150400-04
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Architecture=sun4u
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Cpuset:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Online:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Allowed: 0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind CPU proc:   TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind CPU thread: TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind MEM proc:   TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind MEM thread: TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Type: NUMANode Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               local=33554432KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               total=33554432KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Cpuset:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Online:  0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Allowed: 0x0000ffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUType=sparcv9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUModel=SPARC64_VII
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Cpuset:  0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Online:  0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Allowed: 0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000030
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000030
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000030
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000020
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000020
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000020
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x000000c0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x000000c0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x000000c0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000040
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000040
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000040
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000080
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000080
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000080
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Type: Socket Number of child objects: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUType=sparcv9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUModel=SPARC64_VII
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Cpuset:  0x0000ff00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Online:  0x0000ff00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Allowed: 0x0000ff00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000c00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000c00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000c00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00003000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00003000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00003000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00001000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00001000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00001000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00002000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00002000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00002000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: Core Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x0000c000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x0000c000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x0000c000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00004000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00004000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00004000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00008000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00008000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00008000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] TOPOLOGY MATCHES - 
</span><br>
<span class="quotelev1">&gt; DISCARDING
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:orted_report_launch 
</span><br>
<span class="quotelev1">&gt; completed for daemon [[7567,0],1] at contact 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 495910912.1;tcp://193.174.26.199,192.168.128.2,10.1.1.2:37231
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rs0: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rs1: slots=2 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:rsh: remote spawn called
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:rsh: remote spawn - have 
</span><br>
<span class="quotelev1">&gt; no children!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../openmpi-1.7.4/orte/mca/rmaps/rank_file/rmaps_rank_file.c at 
</span><br>
<span class="quotelev1">&gt; line 283
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../openmpi-1.7.4/orte/mca/rmaps/base/rmaps_base_map_job.c at line 
</span><br>
<span class="quotelev1">&gt; 284
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:orted_cmd sending 
</span><br>
<span class="quotelev1">&gt; orted_exit commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] [[7567,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: close: component rsh closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:06088] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] [[7567,0],1] plm:base:receive stop comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: close: component rsh closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs1.informatik.hs-fulda.de:09721] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rs0 openmpi_1.7.x_or_newer 114 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I still have the problem that I get no output if I mix little and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; big endian machines, which works for openmpi-1.6.x.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi_1.7.x_or_newer 112 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rf rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi_1.7.x_or_newer 113 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi_1.7.x_or_newer 188 mpiexec -report-bindings 
</span><br>
<span class="quotelev1">&gt; --display-allocation --mca plm_base_verbose 100 -np 1 -rf 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: components_register: component rsh register 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: components_register: found loaded component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: components_register: component slurm register 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: components_open: component rsh open function 
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: components_open: component slurm open function 
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path 
</span><br>
<span class="quotelev1">&gt; NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca:base:select:(  plm) Query of component [rsh] set priority 
</span><br>
<span class="quotelev1">&gt; to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca:base:select:(  plm) Skipping component [slurm]. Query 
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: close: component slurm closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] plm:base:set_hnp_name: initial bias 20650 nodename hash 
</span><br>
<span class="quotelev1">&gt; 3902177415
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] plm:base:set_hnp_name: final jobfam 14523
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] setup:vm: working unmanaged allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] using rankfile rf_linpc_sunpc_tyr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] checking node linpc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] checking node linpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] ignoring myself
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] checking node sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] checking node tyr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm add new daemon [[14523,0],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm assigning new daemon 
</span><br>
<span class="quotelev1">&gt; [[14523,0],1] to node linpc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm add new daemon [[14523,0],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm assigning new daemon 
</span><br>
<span class="quotelev1">&gt; [[14523,0],2] to node sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm add new daemon [[14523,0],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:setup_vm assigning new daemon 
</span><br>
<span class="quotelev1">&gt; [[14523,0],3] to node tyr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: local shell: 2 (tcsh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: assuming same remote shell as local 
</span><br>
<span class="quotelev1">&gt; shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: remote shell: 2 (tcsh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /usr/local/bin/ssh &lt;template&gt;  orted -mca orte_report_bindings 1 -mca 
</span><br>
<span class="quotelev1">&gt; ess env -mca orte_ess_jobid 951779328 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 4 -mca orte_hnp_uri 
</span><br>
<span class="quotelev1">&gt; &quot;951779328.0;tcp://193.174.26.208:46876&quot; --tree-spawn 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca plm_base_verbose 100 -mca plm rsh -mca hwloc_base_report_bindings 1 
</span><br>
<span class="quotelev1">&gt; -mca orte_display_alloc 1 -mca orte_rankfile 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rf_linpc_sunpc_tyr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh:launch daemon 0 not a child of mine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: adding node linpc0 to launch list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: adding node sunpc1 to launch list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh:launch daemon 3 not a child of mine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: activating launch event
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: recording launch of daemon 
</span><br>
<span class="quotelev1">&gt; [[14523,0],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: recording launch of daemon 
</span><br>
<span class="quotelev1">&gt; [[14523,0],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: executing: (/usr/local/bin/ssh) 
</span><br>
<span class="quotelev1">&gt; [/usr/local/bin/ssh sunpc1  orted -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_report_bindings 1 -mca ess env -mca orte_ess_jobid 951779328 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid 2 -mca orte_ess_num_procs 4 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_hnp_uri &quot;951779328.0;tcp://193.174.26.208:46876&quot; --tree-spawn --mca 
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 100 -mca plm rsh -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_base_report_bindings 1 -mca orte_display_alloc 1 -mca orte_rankfile 
</span><br>
<span class="quotelev1">&gt; rf_linpc_sunpc_tyr]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:rsh: executing: (/usr/local/bin/ssh) 
</span><br>
<span class="quotelev1">&gt; [/usr/local/bin/ssh linpc0  orted -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_report_bindings 1 -mca ess env -mca orte_ess_jobid 951779328 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid 1 -mca orte_ess_num_procs 4 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_hnp_uri &quot;951779328.0;tcp://193.174.26.208:46876&quot; --tree-spawn --mca 
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 100 -mca plm rsh -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_base_report_bindings 1 -mca orte_display_alloc 1 -mca orte_rankfile 
</span><br>
<span class="quotelev1">&gt; rf_linpc_sunpc_tyr]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; X11 forwarding request failed on channel 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca: base: components_register: component rsh register 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca: base: components_open: component rsh open function 
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] [[14523,0],2] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca:base:select:(  plm) Query of component [rsh] set priority 
</span><br>
<span class="quotelev1">&gt; to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] [[14523,0],2] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] [[14523,0],2] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch from daemon 
</span><br>
<span class="quotelev1">&gt; [[14523,0],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch from daemon 
</span><br>
<span class="quotelev1">&gt; [[14523,0],2] on node sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch completed for 
</span><br>
<span class="quotelev1">&gt; daemon [[14523,0],2] at contact 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 951779328.2;tcp://193.174.26.210:33215
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] [[14523,0],2] plm:rsh: remote spawn called
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] [[14523,0],2] plm:rsh: remote spawn - have no children!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca: base: components_register: component rsh register 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca: base: components_open: component rsh open function 
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca:base:select:(  plm) Query of component [rsh] set priority 
</span><br>
<span class="quotelev1">&gt; to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch from daemon 
</span><br>
<span class="quotelev1">&gt; [[14523,0],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch from daemon 
</span><br>
<span class="quotelev1">&gt; [[14523,0],1] on node linpc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] RECEIVED TOPOLOGY FROM NODE linpc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] Type: Machine Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       total=8387048KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIProductName=&quot;Sun Ultra 40 Workstation&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIProductVersion=11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIBoardVendor=&quot;Sun Microsystems&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIBoardName=&quot;Sun Ultra 40 Workstation&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIBoardVersion=50
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIBoardAssetTag=
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIChassisVendor=&quot;Sun Microsystems&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIChassisType=17
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIChassisVersion=01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIChassisAssetTag=
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIBIOSVendor=&quot;Phoenix Technologies Ltd.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIBIOSVersion=&quot;1.70  &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMIBIOSDate=02/15/2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       DMISysVendor=&quot;Sun Microsystems&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Backend=Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSName=Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSRelease=3.1.10-1.16-desktop
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OSVersion=&quot;#1 SMP PREEMPT Wed Jun 27 05:21:40 UTC 2012 (d016078)&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Architecture=x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Cpuset:  0x0000000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Online:  0x0000000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Allowed: 0x0000000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind CPU proc:   TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind CPU thread: TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind MEM proc:   FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind MEM thread: TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Type: NUMANode Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               local=4192744KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               total=4192744KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Cpuset:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Online:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Allowed: 0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Type: Socket Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUModel=&quot;Dual Core AMD Opteron(tm) Processor 280&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Cpuset:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Online:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Allowed: 0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: L2Cache Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               size=1024KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               linesize=64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               ways=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: L1dCache Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       size=64KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       linesize=64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       ways=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Type: Core Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Cpuset:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Online:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Allowed: 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Type: PU Number of child 
</span><br>
<span class="quotelev1">&gt; objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Cpuset:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Online:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Allowed: 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: L2Cache Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               size=1024KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               linesize=64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               ways=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: L1dCache Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       size=64KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       linesize=64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       ways=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Type: Core Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Cpuset:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Online:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Allowed: 0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Type: PU Number of child 
</span><br>
<span class="quotelev1">&gt; objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Cpuset:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Online:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Allowed: 0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Type: Bridge Host-&gt;PCI Number of child objects: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       buses=0000:[00-03]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: PCI 10de:0053 Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=nVidia Corporation CK804 IDE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               busid=0000:00:06.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               class=0101(IDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIDevice=&quot;CK804 IDE&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: Block Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=sr0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: PCI 10de:0055 Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=nVidia Corporation CK804 Serial ATA 
</span><br>
<span class="quotelev1">&gt; Controller
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               busid=0000:00:07.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               class=0101(IDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIDevice=&quot;CK804 Serial ATA Controller&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: Block Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=sda
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: PCI 10de:0054 Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=nVidia Corporation CK804 Serial ATA 
</span><br>
<span class="quotelev1">&gt; Controller
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               busid=0000:00:08.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               class=0101(IDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIDevice=&quot;CK804 Serial ATA Controller&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: PCI 10de:029d Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=nVidia Corporation G71GL [Quadro FX 
</span><br>
<span class="quotelev1">&gt; 3500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               busid=0000:03:00.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               class=0300(VGA)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIDevice=&quot;G71GL [Quadro FX 3500]&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: GPU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=controlD64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: GPU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=card0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Type: NUMANode Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               local=4194304KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               total=4194304KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Cpuset:  0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Online:  0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Allowed: 0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Type: Socket Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       CPUModel=&quot;Dual Core AMD Opteron(tm) Processor 280&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Cpuset:  0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Online:  0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Allowed: 0x0000000c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: L2Cache Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               size=1024KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               linesize=64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               ways=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: L1dCache Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       size=64KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       linesize=64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       ways=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Type: Core Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Cpuset:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Online:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Allowed: 0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Type: PU Number of child 
</span><br>
<span class="quotelev1">&gt; objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Cpuset:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Online:  0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Allowed: 0x00000004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: L2Cache Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               size=1024KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               linesize=64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               ways=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cpuset:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Online:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Allowed: 0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Type: L1dCache Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       size=64KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       linesize=64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       ways=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cpuset:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Online:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Allowed: 0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Type: Core Number of child objects: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Cpuset:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Online:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Allowed: 0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Type: PU Number of child 
</span><br>
<span class="quotelev1">&gt; objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Cpuset:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Online:  0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Allowed: 0x00000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Type: Bridge Host-&gt;PCI Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       buses=0000:[80-82]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: PCI 10de:0054 Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=nVidia Corporation CK804 Serial ATA 
</span><br>
<span class="quotelev1">&gt; Controller
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               busid=0000:80:07.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               class=0101(IDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIDevice=&quot;CK804 Serial ATA Controller&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Type: PCI 10de:0055 Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Name=nVidia Corporation CK804 Serial ATA 
</span><br>
<span class="quotelev1">&gt; Controller
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               busid=0000:80:08.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               class=0101(IDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIVendor=&quot;nVidia Corporation&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               PCIDevice=&quot;CK804 Serial ATA Controller&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] NEW TOPOLOGY - ADDING
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_report_launch completed for 
</span><br>
<span class="quotelev1">&gt; daemon [[14523,0],1] at contact 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 951779328.1;tcp://193.174.26.214,192.168.1.1:57891
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:rsh: remote spawn called
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:rsh: local shell: 2 (tcsh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:rsh: assuming same remote shell as local 
</span><br>
<span class="quotelev1">&gt; shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:rsh: remote shell: 2 (tcsh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:rsh: final template argv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /usr/local/bin/ssh &lt;template&gt;  orted -mca orte_report_bindings 1 -mca 
</span><br>
<span class="quotelev1">&gt; ess env -mca orte_ess_jobid 951779328 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 4 -mca orte_parent_uri 
</span><br>
<span class="quotelev1">&gt; &quot;951779328.1;tcp://193.174.26.214,192.168.1.1:57891&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca orte_hnp_uri &quot;951779328.0;tcp://193.174.26.208:46876&quot; --mca 
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 100 -mca hwloc_base_report_bindings 1 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_display_alloc 1 -mca orte_rankfile rf_linpc_sunpc_tyr -mca plm rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:rsh: activating launch event
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:rsh: recording launch of daemon 
</span><br>
<span class="quotelev1">&gt; [[14523,0],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:rsh: executing: (/usr/local/bin/ssh) 
</span><br>
<span class="quotelev1">&gt; [/usr/local/bin/ssh tyr  orted -mca orte_report_bindings 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 -mca ess env -mca orte_ess_jobid 951779328 -mca orte_ess_vpid 3 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_num_procs 4 -mca orte_parent_uri 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;951779328.1;tcp://193.174.26.214,192.168.1.1:57891&quot; -mca orte_hnp_uri 
</span><br>
<span class="quotelev1">&gt; &quot;951779328.0;tcp://193.174.26.208:46876&quot; --mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_base_verbose 100 -mca hwloc_base_report_bindings 1 -mca 
</span><br>
<span class="quotelev1">&gt; orte_display_alloc 1 -mca orte_rankfile rf_linpc_sunpc_tyr -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm rsh --tree-spawn]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_register: 
</span><br>
<span class="quotelev1">&gt; registering plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_register: found 
</span><br>
<span class="quotelev1">&gt; loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_register: component 
</span><br>
<span class="quotelev1">&gt; rsh register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_open: opening plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: components_open: component rsh 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca:base:select: Auto-selecting plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca:base:select:(  plm) Querying 
</span><br>
<span class="quotelev1">&gt; component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] [[14523,0],3] plm:rsh_lookup on agent ssh 
</span><br>
<span class="quotelev1">&gt; : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca:base:select:(  plm) Query of 
</span><br>
<span class="quotelev1">&gt; component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca:base:select:(  plm) Selected 
</span><br>
<span class="quotelev1">&gt; component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] [[14523,0],3] plm:rsh_setup on agent ssh 
</span><br>
<span class="quotelev1">&gt; : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] [[14523,0],3] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] [[14523,0],3] plm:base:receive stop comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: close: component rsh closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:23227] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] daemon 3 failed with status 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] [[14523,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: close: component rsh closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:20650] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi_1.7.x_or_newer 189 [sunpc1:09408] [[14523,0],2] 
</span><br>
<span class="quotelev1">&gt; plm:base:receive stop comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca: base: close: component rsh closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:09408] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] [[14523,0],1] plm:base:receive stop comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca: base: close: component rsh closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:32306] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi_1.7.x_or_newer 189 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi_1.7.x_or_newer 189 mpiexec -report-bindings 
</span><br>
<span class="quotelev1">&gt; --display-allocation --mca rmaps_base_verbose_100 -np 1 -rf 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       linpc1: slots=1 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec was unable to find the specified executable file, and therefore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did not launch the job.  This error was first reported for process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0; it may have occurred for other processes as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NOTE: A common cause for this error is misspelling a mpiexec command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     line parameter option (remember that mpiexec interprets the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     unrecognized command line token as the executable).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node:       linpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Executable: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi_1.7.x_or_newer 190 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23583/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23584.php">tmishima_at_[hidden]: "[OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23582.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources"</a>
<li><strong>In reply to:</strong> <a href="23576.php">Siegmar Gross: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
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
