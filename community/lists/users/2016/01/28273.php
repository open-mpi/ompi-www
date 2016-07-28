<?
$subject_val = "[OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 09:07:05 2016" -->
<!-- isoreceived="20160114140705" -->
<!-- sent="Thu, 14 Jan 2016 15:06:34 +0100" -->
<!-- isosent="20160114140634" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425" -->
<!-- id="5697AB6A.5000306_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-14 09:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28274.php">Siegmar Gross: "[OMPI users] runtime errors with openmpi-dev-3356-ge5cf2db"</a>
<li><strong>Previous message:</strong> <a href="28272.php">Siegmar Gross: "[OMPI users] runtime error with openmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28283.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Reply:</strong> <a href="28283.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've successfully built openmpi-v2.x-dev-958-g7e94425 on my machine
<br>
(SUSE Linux Enterprise Server 12.0 x86_64) with gcc-5.2.0 and
<br>
Sun C 5.13. Unfortunately I get a runtime error for all programs
<br>
if I use the Sun compiler. Most of my small works es expected with
<br>
the GNU compiler. I used the following command to build the package
<br>
for cc.
<br>
<p><p>mkdir openmpi-v2.x-dev-958-g7e94425-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
<br>
cd openmpi-v2.x-dev-958-g7e94425-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
<br>
<p>../openmpi-v2.x-dev-958-g7e94425/configure \
<br>
&nbsp;&nbsp;&nbsp;--prefix=/usr/local/openmpi-2.0.0_64_cc \
<br>
&nbsp;&nbsp;&nbsp;--libdir=/usr/local/openmpi-2.0.0_64_cc/lib64 \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0_66/bin \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0_66/include \
<br>
&nbsp;&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0_66 \
<br>
&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-m64 -z noexecstack&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
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
&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-ldflags=&quot;&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p><p>loki hello_1 120 ompi_info | egrep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;Open MPI repo revision: v2.x-dev-958-g7e94425
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
<p><p>loki hello_1 120 mpiexec -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_1_mpi
<br>
mpiexec: symbol lookup error: /usr/local/openmpi-2.0.0_64_cc/lib64/libpmix.so.2: undefined symbol: __builtin_clz
<br>
loki hello_1 121
<br>
<p><p><p>I get the following error spawning a process and a different one
<br>
spawning multiple processes.
<br>
<p><p>loki spawn 137 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>[loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file 
<br>
../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at line 186
<br>
[loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file 
<br>
../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at line 186
<br>
[loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file 
<br>
../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at line 186
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;ompi_proc_complete_init failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
--------------------------------------------------------------------------
<br>
...
<br>
<p><p><p><p>loki spawn 138 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_multiple_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;I create 3 slave processes.
<br>
<p>[loki:24717] PMIX ERROR: UNPACK-PAST-END in file 
<br>
../../../../../../openmpi-v2.x-dev-958-g7e94425/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c at line 829
<br>
[loki:24717] PMIX ERROR: UNPACK-PAST-END in file 
<br>
../../../../../../openmpi-v2.x-dev-958-g7e94425/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c at line 2176
<br>
[loki:24721] *** An error occurred in MPI_Comm_spawn_multiple
<br>
[loki:24721] *** reported by process [4281401345,0]
<br>
[loki:24721] *** on communicator MPI_COMM_WORLD
<br>
[loki:24721] *** MPI_ERR_SPAWN: could not spawn processes
<br>
[loki:24721] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[loki:24721] ***    and potentially your MPI job)
<br>
loki spawn 139
<br>
<p><p><p>Everything works as expected for the following program.
<br>
<p>loki spawn 139 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_intra_comm
<br>
Parent process 0: I create 2 slave processes
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_local:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_remote: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        0
<br>
<p>Child process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        1
<br>
loki spawn 140
<br>
<p><p><p>I would be grateful if somebody can fix the problem. Please let me
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
<li><strong>Next message:</strong> <a href="28274.php">Siegmar Gross: "[OMPI users] runtime errors with openmpi-dev-3356-ge5cf2db"</a>
<li><strong>Previous message:</strong> <a href="28272.php">Siegmar Gross: "[OMPI users] runtime error with openmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28283.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Reply:</strong> <a href="28283.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
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
