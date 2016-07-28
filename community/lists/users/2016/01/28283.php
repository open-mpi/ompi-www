<?
$subject_val = "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 02:03:49 2016" -->
<!-- isoreceived="20160115070349" -->
<!-- sent="Fri, 15 Jan 2016 16:03:45 +0900" -->
<!-- isosent="20160115070345" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425" -->
<!-- id="569899D1.3000802_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5697AB6A.5000306_at_informatik.hs-fulda.de" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-15 02:03:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28284.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28282.php">Gilles Gouaillardet: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>In reply to:</strong> <a href="28273.php">Siegmar Gross: "[OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28559.php">Siegmar Gross: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28559.php">Siegmar Gross: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>the fix is now being discussed at <a href="https://github.com/open-mpi/ompi/pull/1285">https://github.com/open-mpi/ompi/pull/1285</a>
<br>
<p>the other error your reported (MPI_Comm_spawn hanging on an 
<br>
heterogeneous cluster) is
<br>
being discussed at <a href="https://github.com/open-mpi/ompi/pull/1292">https://github.com/open-mpi/ompi/pull/1292</a>
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On 1/14/2016 11:06 PM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've successfully built openmpi-v2.x-dev-958-g7e94425 on my machine
</span><br>
<span class="quotelev1">&gt; (SUSE Linux Enterprise Server 12.0 x86_64) with gcc-5.2.0 and
</span><br>
<span class="quotelev1">&gt; Sun C 5.13. Unfortunately I get a runtime error for all programs
</span><br>
<span class="quotelev1">&gt; if I use the Sun compiler. Most of my small works es expected with
</span><br>
<span class="quotelev1">&gt; the GNU compiler. I used the following command to build the package
</span><br>
<span class="quotelev1">&gt; for cc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mkdir openmpi-v2.x-dev-958-g7e94425-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev1">&gt; cd openmpi-v2.x-dev-958-g7e94425-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-v2.x-dev-958-g7e94425/configure \
</span><br>
<span class="quotelev1">&gt;   --prefix=/usr/local/openmpi-2.0.0_64_cc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-2.0.0_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0_66/bin \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-headers=/usr/local/jdk1.8.0_66/include \
</span><br>
<span class="quotelev1">&gt;   JAVA_HOME=/usr/local/jdk1.8.0_66 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64 -z noexecstack&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; 
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-m64&quot; \
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
<span class="quotelev1">&gt;   --with-wrapper-cflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-ldflags=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki hello_1 120 ompi_info | egrep -e &quot;Open MPI repo revision:&quot; -e &quot;C 
</span><br>
<span class="quotelev1">&gt; compiler absolute:&quot;
</span><br>
<span class="quotelev1">&gt;   Open MPI repo revision: v2.x-dev-958-g7e94425
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki hello_1 120 mpiexec -np 3 --host loki --slot-list 0:0-5,1:0-5 
</span><br>
<span class="quotelev1">&gt; hello_1_mpi
</span><br>
<span class="quotelev1">&gt; mpiexec: symbol lookup error: 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-2.0.0_64_cc/lib64/libpmix.so.2: undefined symbol: 
</span><br>
<span class="quotelev1">&gt; __builtin_clz
</span><br>
<span class="quotelev1">&gt; loki hello_1 121
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error spawning a process and a different one
</span><br>
<span class="quotelev1">&gt; spawning multiple processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki spawn 137 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 
</span><br>
<span class="quotelev1">&gt; spawn_master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev1">&gt;   I create 4 slave processes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at 
</span><br>
<span class="quotelev1">&gt; line 186
</span><br>
<span class="quotelev1">&gt; [loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at 
</span><br>
<span class="quotelev1">&gt; line 186
</span><br>
<span class="quotelev1">&gt; [loki:24531] [[49263,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-v2.x-dev-958-g7e94425/orte/orted/pmix/pmix_server_fence.c at 
</span><br>
<span class="quotelev1">&gt; line 186
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_proc_complete_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki spawn 138 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 
</span><br>
<span class="quotelev1">&gt; spawn_multiple_master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev1">&gt;   I create 3 slave processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [loki:24717] PMIX ERROR: UNPACK-PAST-END in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-v2.x-dev-958-g7e94425/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c 
</span><br>
<span class="quotelev1">&gt; at line 829
</span><br>
<span class="quotelev1">&gt; [loki:24717] PMIX ERROR: UNPACK-PAST-END in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-v2.x-dev-958-g7e94425/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c 
</span><br>
<span class="quotelev1">&gt; at line 2176
</span><br>
<span class="quotelev1">&gt; [loki:24721] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; [loki:24721] *** reported by process [4281401345,0]
</span><br>
<span class="quotelev1">&gt; [loki:24721] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [loki:24721] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev1">&gt; [loki:24721] *** MPI_ERRORS_ARE_FATAL (processes in this communicator 
</span><br>
<span class="quotelev1">&gt; will now abort,
</span><br>
<span class="quotelev1">&gt; [loki:24721] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; loki spawn 139
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything works as expected for the following program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki spawn 139 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 
</span><br>
<span class="quotelev1">&gt; spawn_intra_comm
</span><br>
<span class="quotelev1">&gt; Parent process 0: I create 2 slave processes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev1">&gt;     MPI_COMM_WORLD ntasks:              1
</span><br>
<span class="quotelev1">&gt;     COMM_CHILD_PROCESSES ntasks_local:  1
</span><br>
<span class="quotelev1">&gt;     COMM_CHILD_PROCESSES ntasks_remote: 1
</span><br>
<span class="quotelev1">&gt;     COMM_ALL_PROCESSES ntasks:          2
</span><br>
<span class="quotelev1">&gt;     mytid in COMM_ALL_PROCESSES:        0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Child process 0 running on loki
</span><br>
<span class="quotelev1">&gt;     MPI_COMM_WORLD ntasks:              1
</span><br>
<span class="quotelev1">&gt;     COMM_ALL_PROCESSES ntasks:          2
</span><br>
<span class="quotelev1">&gt;     mytid in COMM_ALL_PROCESSES:        1
</span><br>
<span class="quotelev1">&gt; loki spawn 140
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problem. Please let me
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28273.php">http://www.open-mpi.org/community/lists/users/2016/01/28273.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28284.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28282.php">Gilles Gouaillardet: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>In reply to:</strong> <a href="28273.php">Siegmar Gross: "[OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28559.php">Siegmar Gross: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28559.php">Siegmar Gross: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
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
