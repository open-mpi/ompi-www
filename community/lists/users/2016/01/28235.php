<?
$subject_val = "Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 00:57:04 2016" -->
<!-- isoreceived="20160107055704" -->
<!-- sent="Thu, 7 Jan 2016 14:57:00 +0900" -->
<!-- isosent="20160107055700" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b" -->
<!-- id="568DFE2C.3010304_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="568D0F30.9070800_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-07 00:57:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28236.php">Siegmar Gross: "[OMPI users] warnings building openmpi-v2.x-dev-950-g995993b"</a>
<li><strong>Previous message:</strong> <a href="28234.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28215.php">Siegmar Gross: "[OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>thanks for the report
<br>
<p>about the issue with Sun compiler and helloworld, the root cause is an 
<br>
incorrect packaging and a fix is available at 
<br>
<a href="https://github.com/open-mpi/ompi/pull/1285">https://github.com/open-mpi/ompi/pull/1285</a>
<br>
<p>(note the issue only occurs when building from a tarball)
<br>
<p>i will have a look at the other issues
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 1/6/2016 9:57 PM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've successfully built openmpi-v2.x-dev-950-g995993b on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with gcc-5.1.0 and Sun C 5.13. Unfortunately I get errors
</span><br>
<span class="quotelev1">&gt; running some small test programs. All programs work as expected
</span><br>
<span class="quotelev1">&gt; using my gcc or cc version of openmpi-v1.10.1-138-g0e3b111. I get
</span><br>
<span class="quotelev1">&gt; similar errors for the master openmpi-dev-3329-ge4bdad0.
</span><br>
<span class="quotelev1">&gt; I used the following commands to build the package for gcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mkdir openmpi-v2.x-dev-950-g995993b-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt; cd openmpi-v2.x-dev-950-g995993b-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-v2.x-dev-950-g995993b/configure \
</span><br>
<span class="quotelev1">&gt;   --prefix=/usr/local/openmpi-2.0.0_64_gcc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; rm -r /usr/local/openmpi-2.0.0_64_gcc.old
</span><br>
<span class="quotelev1">&gt; mv /usr/local/openmpi-2.0.0_64_gcc /usr/local/openmpi-2.0.0_64_gcc.old
</span><br>
<span class="quotelev1">&gt; make install |&amp; tee log.make-install.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; make check |&amp; tee log.make-check.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A simple &quot;hello world&quot; or &quot;matrix multiplication&quot; program works with
</span><br>
<span class="quotelev1">&gt; my gcc version but breaks with my cc version as you can see at the
</span><br>
<span class="quotelev1">&gt; bottom. Spawning processes breaks with both versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr spawn 128 mpiexec -np 1 --hetero-nodes --host 
</span><br>
<span class="quotelev1">&gt; tyr,sunpc1,linpc1,tyr spawn_multiple_master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;   I create 3 slave processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:22370] PMIX ERROR: UNPACK-PAST-END in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-v2.x-dev-950-g995993b/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c 
</span><br>
<span class="quotelev1">&gt; at line 829
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:22370] PMIX ERROR: UNPACK-PAST-END in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-v2.x-dev-950-g995993b/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c 
</span><br>
<span class="quotelev1">&gt; at line 2176
</span><br>
<span class="quotelev1">&gt; [tyr:22378] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; [tyr:22378] *** reported by process [4047765505,0]
</span><br>
<span class="quotelev1">&gt; [tyr:22378] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [tyr:22378] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev1">&gt; [tyr:22378] *** MPI_ERRORS_ARE_FATAL (processes in this communicator 
</span><br>
<span class="quotelev1">&gt; will now abort,
</span><br>
<span class="quotelev1">&gt; [tyr:22378] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; tyr spawn 129
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr spawn 151 mpiexec -np 1 --hetero-nodes --host sunpc1,linpc1,linpc1 
</span><br>
<span class="quotelev1">&gt; spawn_intra_comm
</span><br>
<span class="quotelev1">&gt; Parent process 0: I create 2 slave processes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on sunpc1
</span><br>
<span class="quotelev1">&gt;     MPI_COMM_WORLD ntasks:              1
</span><br>
<span class="quotelev1">&gt;     COMM_CHILD_PROCESSES ntasks_local:  1
</span><br>
<span class="quotelev1">&gt;     COMM_CHILD_PROCESSES ntasks_remote: 2
</span><br>
<span class="quotelev1">&gt;     COMM_ALL_PROCESSES ntasks:          3
</span><br>
<span class="quotelev1">&gt;     mytid in COMM_ALL_PROCESSES:        0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Child process 1 running on linpc1
</span><br>
<span class="quotelev1">&gt;     MPI_COMM_WORLD ntasks:              2
</span><br>
<span class="quotelev1">&gt;     COMM_ALL_PROCESSES ntasks:          3
</span><br>
<span class="quotelev1">&gt;     mytid in COMM_ALL_PROCESSES:        2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Child process 0 running on linpc1
</span><br>
<span class="quotelev1">&gt;     MPI_COMM_WORLD ntasks:              2
</span><br>
<span class="quotelev1">&gt;     COMM_ALL_PROCESSES ntasks:          3
</span><br>
<span class="quotelev1">&gt;     mytid in COMM_ALL_PROCESSES:        1
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 16203 on node sunpc1 
</span><br>
<span class="quotelev1">&gt; exited on signal 13 (Broken Pipe).
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr spawn 152
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see a broken pipe, if a change the sequence of sunpc1 and
</span><br>
<span class="quotelev1">&gt; linpc1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr spawn 146 mpiexec -np 1 --hetero-nodes --host linpc1,sunpc1,sunpc1 
</span><br>
<span class="quotelev1">&gt; spawn_intra_comm
</span><br>
<span class="quotelev1">&gt; Parent process 0: I create 2 slave processes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Child process 1 running on sunpc1
</span><br>
<span class="quotelev1">&gt;     MPI_COMM_WORLD ntasks:              2
</span><br>
<span class="quotelev1">&gt;     COMM_ALL_PROCESSES ntasks:          3
</span><br>
<span class="quotelev1">&gt;     mytid in COMM_ALL_PROCESSES:        2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Child process 0 running on sunpc1
</span><br>
<span class="quotelev1">&gt;     MPI_COMM_WORLD ntasks:              2
</span><br>
<span class="quotelev1">&gt;     COMM_ALL_PROCESSES ntasks:          3
</span><br>
<span class="quotelev1">&gt;     mytid in COMM_ALL_PROCESSES:        1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on linpc1
</span><br>
<span class="quotelev1">&gt;     MPI_COMM_WORLD ntasks:              1
</span><br>
<span class="quotelev1">&gt;     COMM_CHILD_PROCESSES ntasks_local:  1
</span><br>
<span class="quotelev1">&gt;     COMM_CHILD_PROCESSES ntasks_remote: 2
</span><br>
<span class="quotelev1">&gt;     COMM_ALL_PROCESSES ntasks:          3
</span><br>
<span class="quotelev1">&gt;     mytid in COMM_ALL_PROCESSES:        0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The process doesn't return and uses about 50% cpu time (1 of 2
</span><br>
<span class="quotelev1">&gt; processors), if I combine a x86_64 processor (sunpc1, linpc1) with
</span><br>
<span class="quotelev1">&gt; a Sparc processor (tyr).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr spawn 147 mpiexec -np 1 --hetero-nodes --host linpc1,tyr,tyr 
</span><br>
<span class="quotelev1">&gt; spawn_intra_comm
</span><br>
<span class="quotelev1">&gt; Parent process 0: I create 2 slave processes
</span><br>
<span class="quotelev1">&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr spawn 148 mpiexec -np 1 --hetero-nodes --host sunpc1,tyr,tyr 
</span><br>
<span class="quotelev1">&gt; spawn_intra_comm
</span><br>
<span class="quotelev1">&gt; Parent process 0: I create 2 slave processes
</span><br>
<span class="quotelev1">&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev1">&gt; tyr spawn 149
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following programs break only with my Sun C 5.13 version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr hello_1 114 mpiexec -np 4 --hetero-nodes --host tyr,sunpc1,linpc1 
</span><br>
<span class="quotelev1">&gt; hello_1_mpi
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:21472] [[62918,0],0] ORTE_ERROR_LOG: Not 
</span><br>
<span class="quotelev1">&gt; found in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v2.x-dev-950-g995993b/orte/mca/ess/hnp/ess_hnp_module.c 
</span><br>
<span class="quotelev1">&gt; at line 638
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;   opal_pmix_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr hello_1 115
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 118 mpiexec -np 4 --hetero-nodes --host tyr,sunpc1,linpc1 
</span><br>
<span class="quotelev1">&gt; java MatMultWithAnyProc2DarrayIn1DarrayMain
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:21508] [[61986,0],0] ORTE_ERROR_LOG: Not 
</span><br>
<span class="quotelev1">&gt; found in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v2.x-dev-950-g995993b/orte/mca/ess/hnp/ess_hnp_module.c 
</span><br>
<span class="quotelev1">&gt; at line 638
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;   opal_pmix_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 119
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problems. Please let me
</span><br>
<span class="quotelev1">&gt; know if you need anything else. Thank you very much for any help in
</span><br>
<span class="quotelev1">&gt; advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28215.php">http://www.open-mpi.org/community/lists/users/2016/01/28215.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28236.php">Siegmar Gross: "[OMPI users] warnings building openmpi-v2.x-dev-950-g995993b"</a>
<li><strong>Previous message:</strong> <a href="28234.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28215.php">Siegmar Gross: "[OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
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
