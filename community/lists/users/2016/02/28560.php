<?
$subject_val = "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 20 03:53:36 2016" -->
<!-- isoreceived="20160220085336" -->
<!-- sent="Sat, 20 Feb 2016 00:53:32 -0800" -->
<!-- isosent="20160220085332" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425" -->
<!-- id="70BBE8E7-E2C9-49FD-B343-92D0391B9B09_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56C82843.30901_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-20 03:53:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28561.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28559.php">Siegmar Gross: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>In reply to:</strong> <a href="28559.php">Siegmar Gross: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On  <a href="https://github.com/open-mpi/ompi/pull/1385">https://github.com/open-mpi/ompi/pull/1385</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1385">https://github.com/open-mpi/ompi/pull/1385</a>&gt; Gilles indicated he would update the patch and commit it on Monday
<br>
<p><p><span class="quotelev1">&gt; On Feb 20, 2016, at 12:48 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do you know, when fixes for the problems will be ready? They still exist
</span><br>
<span class="quotelev1">&gt; in the current version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr spawn 136 ompi_info | grep -e &quot;Open MPI repo revision&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev1">&gt;  Open MPI repo revision: v2.x-dev-1108-gaaf15d9
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr spawn 137 mpiexec -np 1 --host tyr,sunpc1 spawn_multiple_master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;  I create 3 slave processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23580] PMIX ERROR: UNPACK-PAST-END in file ../../../../../../openmpi-v2.x-dev-1108-gaaf15d9/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c at line 829
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23580] PMIX ERROR: UNPACK-PAST-END in file ../../../../../../openmpi-v2.x-dev-1108-gaaf15d9/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c at line 2176
</span><br>
<span class="quotelev1">&gt; [tyr:23587] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; [tyr:23587] *** reported by process [4198105089,0]
</span><br>
<span class="quotelev1">&gt; [tyr:23587] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [tyr:23587] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev1">&gt; [tyr:23587] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [tyr:23587] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; tyr spawn 138
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr spawn 115 ompi_info | grep -e &quot;Open MPI repo revision&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev1">&gt;  Open MPI repo revision: v2.x-dev-1108-gaaf15d9
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr spawn 116 mpiexec -np 1 --host tyr,sunpc1 spawn_multiple_master
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:28715] [[54797,0],0] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-v2.x-dev-1108-gaaf15d9/orte/mca/ess/hnp/ess_hnp_module.c at line 638
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal_pmix_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr spawn 117
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 01/15/16 08:03, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the fix is now being discussed at <a href="https://github.com/open-mpi/ompi/pull/1285">https://github.com/open-mpi/ompi/pull/1285</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the other error your reported (MPI_Comm_spawn hanging on an heterogeneous cluster) is
</span><br>
<span class="quotelev2">&gt;&gt; being discussed at <a href="https://github.com/open-mpi/ompi/pull/1292">https://github.com/open-mpi/ompi/pull/1292</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/14/2016 11:06 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've successfully built openmpi-v2.x-dev-958-g7e94425 on my machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (SUSE Linux Enterprise Server 12.0 x86_64) with gcc-5.2.0 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun C 5.13. Unfortunately I get a runtime error for all programs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if I use the Sun compiler. Most of my small works es expected with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the GNU compiler. I used the following command to build the package
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for cc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mkdir openmpi-v2.x-dev-958-g7e94425-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd openmpi-v2.x-dev-958-g7e94425-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../openmpi-v2.x-dev-958-g7e94425/configure \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --prefix=/usr/local/openmpi-2.0.0_64_cc \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --libdir=/usr/local/openmpi-2.0.0_64_cc/lib64 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0_66/bin \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-jdk-headers=/usr/local/jdk1.8.0_66/include \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  JAVA_HOME=/usr/local/jdk1.8.0_66 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LDFLAGS=&quot;-m64&quot; CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CFLAGS=&quot;-m64 -z noexecstack&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --without-verbs \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-wrapper-cflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-wrapper-ldflags=&quot;&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-debug \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki hello_1 120 ompi_info | egrep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Open MPI repo revision: v2.x-dev-958-g7e94425
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki hello_1 120 mpiexec -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_1_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec: symbol lookup error: /usr/local/openmpi-2.0.0_64_cc/lib64/libpmix.so.2: undefined symbol: __builtin_clz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki hello_1 121
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following error spawning a process and a different one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawning multiple processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki spawn 137 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I create 4 slave processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at line 186
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at line 186
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at line 186
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ompi_proc_complete_init failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki spawn 138 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_multiple_master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I create 3 slave processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24717] PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../openmpi-v2.x-dev-958-g7e94425/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c at line 829
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24717] PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../openmpi-v2.x-dev-958-g7e94425/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c at line 2176
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24721] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24721] *** reported by process [4281401345,0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24721] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24721] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24721] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24721] ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki spawn 139
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything works as expected for the following program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki spawn 139 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_intra_comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent process 0: I create 2 slave processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_COMM_WORLD ntasks:              1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    COMM_CHILD_PROCESSES ntasks_local:  1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    COMM_CHILD_PROCESSES ntasks_remote: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    COMM_ALL_PROCESSES ntasks:          2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mytid in COMM_ALL_PROCESSES:        0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child process 0 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_COMM_WORLD ntasks:              1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    COMM_ALL_PROCESSES ntasks:          2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mytid in COMM_ALL_PROCESSES:        1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki spawn 140
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would be grateful if somebody can fix the problem. Please let me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know if you need anything else. Thank you very much for any help in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28273.php">http://www.open-mpi.org/community/lists/users/2016/01/28273.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28283.php">http://www.open-mpi.org/community/lists/users/2016/01/28283.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28559.php">http://www.open-mpi.org/community/lists/users/2016/02/28559.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28560/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28561.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28559.php">Siegmar Gross: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>In reply to:</strong> <a href="28559.php">Siegmar Gross: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
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
