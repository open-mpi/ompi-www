<?
$subject_val = "[OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 07:57:54 2016" -->
<!-- isoreceived="20160106125754" -->
<!-- sent="Wed, 6 Jan 2016 13:57:20 +0100" -->
<!-- isosent="20160106125720" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b" -->
<!-- id="568D0F30.9070800_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 07:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28216.php">Palmer, Bruce J: "[OMPI users] Put/Get semantics"</a>
<li><strong>Previous message:</strong> <a href="28214.php">Rob Latham: "Re: [OMPI users] [mpich-discuss] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28235.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<li><strong>Reply:</strong> <a href="28235.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've successfully built openmpi-v2.x-dev-950-g995993b on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-5.1.0 and Sun C 5.13. Unfortunately I get errors
<br>
running some small test programs. All programs work as expected
<br>
using my gcc or cc version of openmpi-v1.10.1-138-g0e3b111. I get
<br>
similar errors for the master openmpi-dev-3329-ge4bdad0.
<br>
I used the following commands to build the package for gcc.
<br>
<p><p>mkdir openmpi-v2.x-dev-950-g995993b-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
<br>
cd openmpi-v2.x-dev-950-g995993b-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
<br>
<p>../openmpi-v2.x-dev-950-g995993b/configure \
<br>
&nbsp;&nbsp;&nbsp;--prefix=/usr/local/openmpi-2.0.0_64_gcc \
<br>
&nbsp;&nbsp;&nbsp;--libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64 \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
rm -r /usr/local/openmpi-2.0.0_64_gcc.old
<br>
mv /usr/local/openmpi-2.0.0_64_gcc /usr/local/openmpi-2.0.0_64_gcc.old
<br>
make install |&amp; tee log.make-install.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
make check |&amp; tee log.make-check.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p><p>A simple &quot;hello world&quot; or &quot;matrix multiplication&quot; program works with
<br>
my gcc version but breaks with my cc version as you can see at the
<br>
bottom. Spawning processes breaks with both versions.
<br>
<p><p>tyr spawn 128 mpiexec -np 1 --hetero-nodes --host tyr,sunpc1,linpc1,tyr spawn_multiple_master
<br>
<p>Parent process 0 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 3 slave processes.
<br>
<p>[tyr.informatik.hs-fulda.de:22370] PMIX ERROR: UNPACK-PAST-END in file ../../../../../../openmpi-v2.x-dev-950-g995993b/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c at line 829
<br>
[tyr.informatik.hs-fulda.de:22370] PMIX ERROR: UNPACK-PAST-END in file ../../../../../../openmpi-v2.x-dev-950-g995993b/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c at line 2176
<br>
[tyr:22378] *** An error occurred in MPI_Comm_spawn_multiple
<br>
[tyr:22378] *** reported by process [4047765505,0]
<br>
[tyr:22378] *** on communicator MPI_COMM_WORLD
<br>
[tyr:22378] *** MPI_ERR_SPAWN: could not spawn processes
<br>
[tyr:22378] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[tyr:22378] ***    and potentially your MPI job)
<br>
tyr spawn 129
<br>
<p><p><p><p><p>tyr spawn 151 mpiexec -np 1 --hetero-nodes --host sunpc1,linpc1,linpc1 spawn_intra_comm
<br>
Parent process 0: I create 2 slave processes
<br>
<p>Parent process 0 running on sunpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_local:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_remote: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        0
<br>
<p>Child process 1 running on linpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        2
<br>
<p>Child process 0 running on linpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        1
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 16203 on node sunpc1 exited on signal 13 (Broken Pipe).
<br>
--------------------------------------------------------------------------
<br>
tyr spawn 152
<br>
<p><p><p>I don't see a broken pipe, if a change the sequence of sunpc1 and
<br>
linpc1.
<br>
<p>tyr spawn 146 mpiexec -np 1 --hetero-nodes --host linpc1,sunpc1,sunpc1 spawn_intra_comm
<br>
Parent process 0: I create 2 slave processes
<br>
<p>Child process 1 running on sunpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        2
<br>
<p>Child process 0 running on sunpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        1
<br>
<p>Parent process 0 running on linpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_local:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_remote: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        0
<br>
<p><p><p>The process doesn't return and uses about 50% cpu time (1 of 2
<br>
processors), if I combine a x86_64 processor (sunpc1, linpc1) with
<br>
a Sparc processor (tyr).
<br>
<p>tyr spawn 147 mpiexec -np 1 --hetero-nodes --host linpc1,tyr,tyr spawn_intra_comm
<br>
Parent process 0: I create 2 slave processes
<br>
^CKilled by signal 2.
<br>
<p>tyr spawn 148 mpiexec -np 1 --hetero-nodes --host sunpc1,tyr,tyr spawn_intra_comm
<br>
Parent process 0: I create 2 slave processes
<br>
^CKilled by signal 2.
<br>
tyr spawn 149
<br>
<p><p><p><p><p><p><p>The following programs break only with my Sun C 5.13 version.
<br>
<p><p>tyr hello_1 114 mpiexec -np 4 --hetero-nodes --host tyr,sunpc1,linpc1 hello_1_mpi
<br>
[tyr.informatik.hs-fulda.de:21472] [[62918,0],0] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-v2.x-dev-950-g995993b/orte/mca/ess/hnp/ess_hnp_module.c at line 638
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
tyr hello_1 115
<br>
<p><p><p><p><p>tyr java 118 mpiexec -np 4 --hetero-nodes --host tyr,sunpc1,linpc1 java MatMultWithAnyProc2DarrayIn1DarrayMain
<br>
[tyr.informatik.hs-fulda.de:21508] [[61986,0],0] ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-v2.x-dev-950-g995993b/orte/mca/ess/hnp/ess_hnp_module.c at line 638
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
tyr java 119
<br>
<p><p><p>I would be grateful if somebody can fix the problems. Please let me
<br>
know if you need anything else. Thank you very much for any help in
<br>
advance.
<br>
<p><p>Best regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28216.php">Palmer, Bruce J: "[OMPI users] Put/Get semantics"</a>
<li><strong>Previous message:</strong> <a href="28214.php">Rob Latham: "Re: [OMPI users] [mpich-discuss] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28235.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<li><strong>Reply:</strong> <a href="28235.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
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
