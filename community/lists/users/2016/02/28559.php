<?
$subject_val = "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 20 03:48:51 2016" -->
<!-- isoreceived="20160220084851" -->
<!-- sent="Sat, 20 Feb 2016 09:48:03 +0100" -->
<!-- isosent="20160220084803" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425" -->
<!-- id="56C82843.30901_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="569899D1.3000802_at_rist.or.jp" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-20 03:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28560.php">Ralph Castain: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Previous message:</strong> <a href="28558.php">George Bosilca: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28283.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28560.php">Ralph Castain: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Reply:</strong> <a href="28560.php">Ralph Castain: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>do you know, when fixes for the problems will be ready? They still exist
<br>
in the current version.
<br>
<p><p>tyr spawn 136 ompi_info | grep -e &quot;Open MPI repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;Open MPI repo revision: v2.x-dev-1108-gaaf15d9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
<p><p>tyr spawn 137 mpiexec -np 1 --host tyr,sunpc1 spawn_multiple_master
<br>
<p>Parent process 0 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 3 slave processes.
<br>
<p>[tyr.informatik.hs-fulda.de:23580] PMIX ERROR: UNPACK-PAST-END in file 
<br>
../../../../../../openmpi-v2.x-dev-1108-gaaf15d9/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c at line 829
<br>
[tyr.informatik.hs-fulda.de:23580] PMIX ERROR: UNPACK-PAST-END in file 
<br>
../../../../../../openmpi-v2.x-dev-1108-gaaf15d9/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c at line 2176
<br>
[tyr:23587] *** An error occurred in MPI_Comm_spawn_multiple
<br>
[tyr:23587] *** reported by process [4198105089,0]
<br>
[tyr:23587] *** on communicator MPI_COMM_WORLD
<br>
[tyr:23587] *** MPI_ERR_SPAWN: could not spawn processes
<br>
[tyr:23587] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[tyr:23587] ***    and potentially your MPI job)
<br>
tyr spawn 138
<br>
<p><p><p><p>tyr spawn 115 ompi_info | grep -e &quot;Open MPI repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;Open MPI repo revision: v2.x-dev-1108-gaaf15d9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
<p><p>tyr spawn 116 mpiexec -np 1 --host tyr,sunpc1 spawn_multiple_master
<br>
[tyr.informatik.hs-fulda.de:28715] [[54797,0],0] ORTE_ERROR_LOG: Not found in file 
<br>
../../../../../openmpi-v2.x-dev-1108-gaaf15d9/orte/mca/ess/hnp/ess_hnp_module.c at line 638
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;opal_pmix_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
tyr spawn 117
<br>
<p><p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p>On 01/15/16 08:03, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Siegmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the fix is now being discussed at <a href="https://github.com/open-mpi/ompi/pull/1285">https://github.com/open-mpi/ompi/pull/1285</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the other error your reported (MPI_Comm_spawn hanging on an heterogeneous cluster) is
</span><br>
<span class="quotelev1">&gt; being discussed at <a href="https://github.com/open-mpi/ompi/pull/1292">https://github.com/open-mpi/ompi/pull/1292</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/14/2016 11:06 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've successfully built openmpi-v2.x-dev-958-g7e94425 on my machine
</span><br>
<span class="quotelev2">&gt;&gt; (SUSE Linux Enterprise Server 12.0 x86_64) with gcc-5.2.0 and
</span><br>
<span class="quotelev2">&gt;&gt; Sun C 5.13. Unfortunately I get a runtime error for all programs
</span><br>
<span class="quotelev2">&gt;&gt; if I use the Sun compiler. Most of my small works es expected with
</span><br>
<span class="quotelev2">&gt;&gt; the GNU compiler. I used the following command to build the package
</span><br>
<span class="quotelev2">&gt;&gt; for cc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mkdir openmpi-v2.x-dev-958-g7e94425-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev2">&gt;&gt; cd openmpi-v2.x-dev-958-g7e94425-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-v2.x-dev-958-g7e94425/configure \
</span><br>
<span class="quotelev2">&gt;&gt;   --prefix=/usr/local/openmpi-2.0.0_64_cc \
</span><br>
<span class="quotelev2">&gt;&gt;   --libdir=/usr/local/openmpi-2.0.0_64_cc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0_66/bin \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-jdk-headers=/usr/local/jdk1.8.0_66/include \
</span><br>
<span class="quotelev2">&gt;&gt;   JAVA_HOME=/usr/local/jdk1.8.0_66 \
</span><br>
<span class="quotelev2">&gt;&gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CFLAGS=&quot;-m64 -z noexecstack&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;   --without-verbs \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-cflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-ldflags=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-debug \
</span><br>
<span class="quotelev2">&gt;&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki hello_1 120 ompi_info | egrep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI repo revision: v2.x-dev-958-g7e94425
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki hello_1 120 mpiexec -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec: symbol lookup error: /usr/local/openmpi-2.0.0_64_cc/lib64/libpmix.so.2: undefined symbol: __builtin_clz
</span><br>
<span class="quotelev2">&gt;&gt; loki hello_1 121
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error spawning a process and a different one
</span><br>
<span class="quotelev2">&gt;&gt; spawning multiple processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 137 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;   I create 4 slave processes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at line 186
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at line 186
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at line 186
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ompi_proc_complete_init failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 138 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;   I create 3 slave processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24717] PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../openmpi-v2.x-dev-958-g7e94425/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c at line 829
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24717] PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../openmpi-v2.x-dev-958-g7e94425/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c at line 2176
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24721] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24721] *** reported by process [4281401345,0]
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24721] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24721] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24721] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; [loki:24721] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 139
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Everything works as expected for the following program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 139 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_intra_comm
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0: I create 2 slave processes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_COMM_WORLD ntasks:              1
</span><br>
<span class="quotelev2">&gt;&gt;     COMM_CHILD_PROCESSES ntasks_local:  1
</span><br>
<span class="quotelev2">&gt;&gt;     COMM_CHILD_PROCESSES ntasks_remote: 1
</span><br>
<span class="quotelev2">&gt;&gt;     COMM_ALL_PROCESSES ntasks:          2
</span><br>
<span class="quotelev2">&gt;&gt;     mytid in COMM_ALL_PROCESSES:        0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Child process 0 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_COMM_WORLD ntasks:              1
</span><br>
<span class="quotelev2">&gt;&gt;     COMM_ALL_PROCESSES ntasks:          2
</span><br>
<span class="quotelev2">&gt;&gt;     mytid in COMM_ALL_PROCESSES:        1
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 140
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful if somebody can fix the problem. Please let me
</span><br>
<span class="quotelev2">&gt;&gt; know if you need anything else. Thank you very much for any help in
</span><br>
<span class="quotelev2">&gt;&gt; advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28273.php">http://www.open-mpi.org/community/lists/users/2016/01/28273.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28283.php">http://www.open-mpi.org/community/lists/users/2016/01/28283.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28560.php">Ralph Castain: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Previous message:</strong> <a href="28558.php">George Bosilca: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28283.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28560.php">Ralph Castain: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Reply:</strong> <a href="28560.php">Ralph Castain: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
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
