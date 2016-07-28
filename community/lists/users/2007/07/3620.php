<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 13:10:50 2007" -->
<!-- isoreceived="20070710171050" -->
<!-- sent="Tue, 10 Jul 2007 18:08:24 +0100" -->
<!-- isosent="20070710170824" -->
<!-- name="Glenn Carver" -->
<!-- email="Glenn.Carver_at_[hidden]" -->
<!-- subject="[OMPI users] Connection to HNP lost" -->
<!-- id="p05111b0ac2b963effd38_at_[10.0.1.6]" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2453e2900707100923q18b49255m65295a2375b52471_at_mail.gmail.com" -->
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
<strong>From:</strong> Glenn Carver (<em>Glenn.Carver_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 13:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3621.php">Christopher D. Maestas: "[OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3619.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3617.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3622.php">Ralph H Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>Reply:</strong> <a href="3622.php">Ralph H Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'd be grateful if someone could explain the meaning of this error 
<br>
message to me and whether it indicates a hardware problem or 
<br>
application software issue:
<br>
<p>[node2:11881] OOB: Connection to HNP lost
<br>
[node1:09876] OOB: Connection to HNP lost
<br>
<p>I have a small cluster which until last week was just fine. 
<br>
Unfortunately we were hit by a sudden power dip which brought the 
<br>
cluster down and did significant damage to other servers (blew power 
<br>
supplies and disk).  Although the cluster machines and the Infiniband 
<br>
link is up and running jobs I am now getting these errors in user 
<br>
applications which we've never had before.
<br>
<p>The system messages file reports (for node2):
<br>
Jul  5 12:08:28 node1 genunix: [ID 408789 kern.notice] NOTICE: 
<br>
tavor0: fault cleared external to device; service available
<br>
Jul  5 12:08:28 node1 genunix: [ID 451854 kern.notice] NOTICE: 
<br>
tavor0: port 1 up
<br>
Jul  7 16:18:32 node1 genunix: [ID 408114 kern.info] 
<br>
/pci_at_1,0/pci1022,7450_at_2/pci15b3,5a46_at_1/pci15b3,5a44_at_0 (tavor0) online
<br>
Jul  7 16:18:32 node1 ib: [ID 842868 kern.info] IB device: daplt_at_0, daplt0
<br>
Jul  7 16:18:32 node1 genunix: [ID 936769 kern.info] daplt0 is /ib/daplt_at_0
<br>
Jul  7 16:18:32 node1 genunix: [ID 408114 kern.info] /ib/daplt_at_0 
<br>
(daplt0) online
<br>
Jul  7 16:18:32 node1 genunix: [ID 834635 kern.info] /ib/daplt_at_0 
<br>
(daplt0) multipath status: degraded, path 
<br>
/pci_at_1,0/pci1022,7450_at_2/pci15
<br>
b3,5a46_at_1/pci15b3,5a44_at_0 (tavor0) to target address: daplt,0 is 
<br>
online Load balancing: round-robin
<br>
<p>I wonder if this messages are indicative of a hardware problem, 
<br>
possibly on the Infiniband switch or the host adapters on the cluster 
<br>
machines.  The cluster software has not been altered but there have 
<br>
been small changes to the application codes. But I want to rule out 
<br>
hardware issues because of the power dip first.
<br>
<p>Anyone seen this message before and know whether to investigate 
<br>
hardware first?  I did check the archives but it didn't help. More 
<br>
info provided below.
<br>
<p>Any help appreciate, thanks.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Glenn
<br>
<p><pre>
--
Details:
Cluster uses mix of Sun's X4100/X4200 machines linked with Sun 
supplied Infiniband and host adapters. All machines are running 
Solaris 10_x86 (11/06) with latest kernel patches
Software is Sun Clustertools 7.
Node2 $ ifconfig ibd1
ibd1: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 2044 index 3
         inet 192.168.50.202 netmask ffffff00 broadcast 192.168.50.255
Node1 $ ifconfig ibd1
ibd1: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 2044 index 3
         inet 192.168.50.201 netmask ffffff00 broadcast 192.168.50.255
ompi_info -a
                 Open MPI: 1.2.1r14096-ct7b030r1838
    Open MPI SVN revision: 0
                 Open RTE: 1.2.1r14096-ct7b030r1838
    Open RTE SVN revision: 0
                     OPAL: 1.2.1r14096-ct7b030r1838
        OPAL SVN revision: 0
            MCA backtrace: printstack (MCA v1.0, API v1.0, Component v1.2.1)
            MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2.1)
            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.1)
                MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2.1)
            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
                MCA mpool: udapl (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
                  MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.1)
                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.1)
                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.1)
                   Prefix: /opt/SUNWhpc/HPC7.0
                   Bindir: /opt/SUNWhpc/HPC7.0/bin
                   Libdir: /opt/SUNWhpc/HPC7.0/lib
                   Incdir: /opt/SUNWhpc/HPC7.0/include
                Pkglibdir: /opt/SUNWhpc/HPC7.0/lib/openmpi
               Sysconfdir: /opt/SUNWhpc/HPC7.0/etc
  Configured architecture: i386-pc-solaris2.10
            Configured by: root
            Configured on: Fri Mar 30 13:40:12 EDT 2007
           Configure host: burpen-csx10-0
                 Built by: root
                 Built on: Fri Mar 30 13:57:25 EDT 2007
               Built host: burpen-csx10-0
               C bindings: yes
             C++ bindings: yes
       Fortran77 bindings: yes (all)
       Fortran90 bindings: yes
  Fortran90 bindings size: trivial
               C compiler: cc
      C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
              C char size: 1
              C bool size: 1
             C short size: 2
               C int size: 4
              C long size: 4
             C float size: 4
            C double size: 8
           C pointer size: 4
             C char align: 1
             C bool align: 1
              C int align: 4
            C float align: 4
           C double align: 4
             C++ compiler: CC
    C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
       Fortran77 compiler: f77
   Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
       Fortran90 compiler: f95
   Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
        Fort integer size: 4
        Fort logical size: 4
  Fort logical value true: 1
       Fort have integer1: yes
       Fort have integer2: yes
       Fort have integer4: yes
       Fort have integer8: yes
      Fort have integer16: no
          Fort have real4: yes
          Fort have real8: yes
         Fort have real16: no
       Fort have complex8: yes
      Fort have complex16: yes
      Fort have complex32: no
       Fort integer1 size: 1
       Fort integer2 size: 2
       Fort integer4 size: 4
       Fort integer8 size: 8
      Fort integer16 size: -1
           Fort real size: 4
          Fort real4 size: 4
          Fort real8 size: 8
         Fort real16 size: -1
       Fort dbl prec size: 4
           Fort cplx size: 4
       Fort dbl cplx size: 4
          Fort cplx8 size: 8
         Fort cplx16 size: 16
         Fort cplx32 size: -1
       Fort integer align: 4
      Fort integer1 align: 1
      Fort integer2 align: 2
      Fort integer4 align: 4
      Fort integer8 align: 4
     Fort integer16 align: -1
          Fort real align: 4
         Fort real4 align: 4
         Fort real8 align: 4
        Fort real16 align: -1
      Fort dbl prec align: 4
          Fort cplx align: 4
      Fort dbl cplx align: 4
         Fort cplx8 align: 4
        Fort cplx16 align: 4
        Fort cplx32 align: -1
              C profiling: yes
            C++ profiling: yes
      Fortran77 profiling: yes
      Fortran90 profiling: yes
           C++ exceptions: yes
           Thread support: no
             Build CFLAGS: -DNDEBUG -xtarget=opteron -xarch=sse2 -xprefetch
                           -xprefetch_level=2 -xvector=simd 
-xdepend=yes -xbuiltin=%all
                           -xO5
           Build CXXFLAGS: -DNDEBUG -xtarget=opteron -xarch=sse2 -xprefetch
                           -xprefetch_level=2 -xvector=simd 
-xdepend=yes -xbuiltin=%all
                           -xO5
             Build FFLAGS: -xtarget=opteron -xarch=sse2 -xprefetch 
-xprefetch_level=2
                           -xvector=simd -stackvar -xO5
            Build FCFLAGS: -xtarget=opteron -xarch=sse2 -xprefetch 
-xprefetch_level=2
                           -xvector=simd -stackvar -xO5
            Build LDFLAGS: -export-dynamic    -R/opt/mx/lib 
-R/opt/SUNWhpc/HPC7.0/lib
                           -R/opt/mx/lib/amd64 -R/opt/SUNWhpc/HPC7.0/lib/amd64
                           -R/opt/mx/lib -R/opt/SUNWhpc/HPC7.0/lib 
-R/opt/mx/lib/amd64
                           -R/opt/SUNWhpc/HPC7.0/lib/amd64 -R/opt/mx/lib
                           -R/opt/SUNWhpc/HPC7.0/lib -R/opt/mx/lib/amd64
                           -R/opt/SUNWhpc/HPC7.0/lib/amd64
               Build LIBS: -lsocket -lnsl  -lrt -lm
     Wrapper extra CFLAGS:
   Wrapper extra CXXFLAGS:
     Wrapper extra FFLAGS:
    Wrapper extra FCFLAGS:
    Wrapper extra LDFLAGS:     -R/opt/mx/lib -R/opt/SUNWhpc/HPC7.0/lib 
-R/opt/mx/lib/amd64
                           -R/opt/SUNWhpc/HPC7.0/lib/amd64
       Wrapper extra LIBS:      -lsocket -lnsl -lrt -lm -ldl
   Internal debug support: no
      MPI parameter check: runtime
Memory profiling support: no
Memory debugging support: no
          libltdl support: yes
    Heterogeneous support: yes
  mpirun default --prefix: yes
                  MCA mca: parameter &quot;mca_param_files&quot; (current value:
 
&quot;/home/tomcat/.openmpi/mca-params.conf:/opt/SUNWhpc/HPC7.0/etc/openmpi-mca-params.conf&quot;)
                           Path for MCA configuration files containing 
default parameter
                           values
                  MCA mca: parameter &quot;mca_component_path&quot; (current value:
 
&quot;/opt/SUNWhpc/HPC7.0/lib/openmpi:/home/tomcat/.openmpi/components&quot;)
                           Path where to look for Open MPI and ORTE components
                  MCA mca: parameter &quot;mca_verbose&quot; (current value: &lt;none&gt;)
                           Top-level verbosity parameter
                  MCA mca: parameter &quot;mca_component_show_load_errors&quot; 
(current value: &quot;0&quot;)
                           Whether to show errors for components that 
failed to load or
                           not
                  MCA mca: parameter &quot;mca_component_disable_dlopen&quot; 
(current value: &quot;0&quot;)
                           Whether to attempt to disable opening 
dynamic components or not
                  MCA mpi: parameter &quot;mpi_param_check&quot; (current value: &quot;1&quot;)
                           Whether you want MPI API parameters checked 
at run-time or not.
                           Possible values are 0 (no checking) and 1 
(perform checking at
                           run-time)
                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value: &quot;0&quot;)
                           Yield the processor when waiting for MPI 
communication (for MPI
                           processes, will default to 1 when 
oversubscribing nodes)
                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current value: &quot;-1&quot;)
                           How often to progress TCP communications (0 
= never, otherwise
                           specified in microseconds)
                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current 
value: &quot;0&quot;)
                           Whether MPI_FINALIZE shows all MPI handles 
that were not freed
                           or not
                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current value: &quot;0&quot;)
                           Whether to actually free MPI objects when 
their handles are
                           freed
                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current value: &quot;0&quot;)
                           Whether to show all MCA parameter value 
during MPI_INIT or not
                           (good for reproducability of MPI jobs)
                  MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; 
(current value: &lt;none&gt;)
                           If mpi_show_mca_params is true, setting 
this string to a valid
                           filename tells Open MPI to dump all the MCA 
parameter values
                           into a file suitable for reading via the 
mca_param_files
                           parameter (good for reproducability of MPI jobs)
                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value: &quot;0&quot;)
                           If nonzero, assume that this job is the only (set of)
                           process(es) running on each node and bind 
processes to
                           processors, starting with processor ID 0
                  MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; 
(current value: &quot;1&quot;)
                           If nonzero, save the string hostnames of 
all MPI peer processes
                           (mostly for error / debugging output 
messages).  This can add
                           quite a bit of memory usage to each MPI process.
                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value: &quot;0&quot;)
                           If nonzero, print out an identifying 
message when MPI_ABORT is
                           invoked (hostname, PID of the process that 
called MPI_ABORT) and
                           delay for that many seconds before exiting 
(a negative delay
                           value means to never abort).  This allows 
attaching of a
                           debugger before quitting the job.
                  MCA mpi: information &quot;mpi_abort_print_stack&quot; (value: &quot;0&quot;)
                           If nonzero, print out a stack trace when 
MPI_ABORT is invoked
                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value: &quot;0&quot;)
                           Whether to force MPI processes to create 
connections / warmup
                           with *all* peers during MPI_INIT (vs. 
making connections lazily
                           -- upon the first MPI traffic between each 
process peer pair)
                  MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current value: &quot;0&quot;)
                           Whether to force MPI processes to fully 
wire-up the OOB system
                           between MPI processes.
                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &quot;0&quot;)
                           Whether to use the &quot;leave pinned&quot; protocol 
or not.  Enabling
                           this setting can help bandwidth performance 
when repeatedly
                           sending and receiving large messages with 
the same buffers over
                           RDMA-based networks.
                  MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot; 
(current value: &quot;0&quot;)
                           Whether to use the &quot;leave pinned pipeline&quot; 
protocol or not.
                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
                           Top-level ORTE debug switch
                 MCA orte: parameter &quot;orte_no_daemonize&quot; (current value: &quot;0&quot;)
                           Whether to properly daemonize the ORTE daemons or not
                 MCA orte: parameter &quot;orte_base_user_debugger&quot; 
(current value: &quot;totalview
                           @mpirun@ -a @mpirun_args@ : fxp @mpirun@ -a 
@mpirun_args@&quot;)
                           Sequence of user-level debuggers to search 
for in orterun
                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current value: &quot;10&quot;)
                           Time to wait [in seconds] before giving up 
on aborting an ORTE
                           operation
                 MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;)
                           Request that critical timing loops be measured
                 MCA opal: parameter &quot;opal_signal&quot; (current value: &quot;6,10,8,11&quot;)
                           If a signal is received, display the stack 
trace frame
            MCA backtrace: parameter &quot;backtrace&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
backtrace framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
            MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current 
value: &quot;0&quot;)
                           Verbosity level for the backtrace framework 
(0 = no verbosity)
            MCA backtrace: parameter &quot;backtrace_printstack_priority&quot; 
(current value: &quot;0&quot;)
               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
memory framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
               MCA memory: parameter &quot;memory_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the memory framework (0 
= no verbosity)
            MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
paffinity framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
            MCA paffinity: parameter &quot;paffinity_solaris_priority&quot; 
(current value: &quot;10&quot;)
                           Priority of the solaris paffinity component
            MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
maffinity framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
            MCA maffinity: parameter &quot;maffinity_first_use_priority&quot; 
(current value: &quot;10&quot;)
                           Priority of the first_use maffinity component
                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
timer framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                MCA timer: parameter &quot;timer_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the timer framework (0 
= no verbosity)
                MCA timer: parameter &quot;timer_solaris_priority&quot; (current 
value: &quot;0&quot;)
            MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
allocator framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
            MCA allocator: parameter &quot;allocator_base_verbose&quot; (current 
value: &quot;0&quot;)
                           Verbosity level for the allocator framework 
(0 = no verbosity)
            MCA allocator: parameter &quot;allocator_basic_priority&quot; 
(current value: &quot;0&quot;)
            MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot; 
(current value: &quot;30&quot;)
            MCA allocator: parameter &quot;allocator_bucket_priority&quot; 
(current value: &quot;0&quot;)
                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
coll framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the coll framework (0 = 
no verbosity)
                 MCA coll: parameter &quot;coll_basic_priority&quot; (current value: &quot;10&quot;)
                           Priority of the basic coll component
                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current value: &quot;4&quot;)
                           Minimum number of processes in a 
communicator before using the
                           logarithmic algorithms
                 MCA coll: parameter &quot;coll_self_priority&quot; (current value: &quot;75&quot;)
                 MCA coll: parameter &quot;coll_sm_priority&quot; (current value: &quot;0&quot;)
                           Priority of the sm coll component
                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current 
value: &quot;4096&quot;)
                           Length of the control data -- should 
usually be either the
                           length of a cache line on most SMPs, or the 
size of a page on
                           machines that support direct memory 
affinity page placement (in
                           bytes)
                 MCA coll: parameter &quot;coll_sm_bootstrap_filename&quot; 
(current value:
                           &quot;shared_mem_sm_bootstrap&quot;)
                           Filename (in the Open MPI session 
directory) of the coll sm
                           component bootstrap rendezvous mmap file
                 MCA coll: parameter &quot;coll_sm_bootstrap_num_segments&quot; 
(current value: &quot;8&quot;)
                           Number of segments in the bootstrap file
                 MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current 
value: &quot;8192&quot;)
                           Fragment size (in bytes) used for passing 
data through shared
                           memory (will be rounded up to the nearest 
control_size size)
                 MCA coll: parameter &quot;coll_sm_mpool&quot; (current value: &quot;sm&quot;)
                           Name of the mpool component to use
                 MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot; 
(current value: &quot;2&quot;)
                           Number of &quot;in use&quot; flags, used to mark a 
message passing area
                           segment as currently being used or not 
(must be &gt;= 2 and &lt;=
                           comm_num_segments)
                 MCA coll: parameter &quot;coll_sm_comm_num_segments&quot; 
(current value: &quot;8&quot;)
                           Number of segments in each communicator's 
shared memory message
                           passing area (must be &gt;= 2, and must be a multiple of
                           comm_in_use_flags)
                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current value: &quot;4&quot;)
                           Degree of the tree for tree-based 
operations (must be =&gt; 1 and
                           &lt;= min(control_size, 255))
                 MCA coll: information 
&quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;160&quot;)
                           Amount of shared memory used in the shared 
memory bootstrap area
                           (in bytes)
                 MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current 
value: &quot;4&quot;)
                           Number of processes to use for the calculation of the
                           shared_mem_size MCA information parameter 
(must be =&gt; 2)
                 MCA coll: information &quot;coll_sm_shared_mem_used_data&quot; 
(value: &quot;548864&quot;)
                           Amount of shared memory used in the shared 
memory data area for
                           info_num_procs processes (in bytes)
                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current value: &quot;30&quot;)
                           Priority of the tuned coll component
                 MCA coll: parameter 
&quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot;
                           (current value: &quot;32768&quot;)
                           Size of communicator were we stop 
pre-allocating memory for the
                           fixed internal buffer used for message 
requests etc that is hung
                           off the communicator data segment. I.e. if 
you have a 100'000
                           nodes you might not want to pre-allocate 
200'000 request handle
                           slots per communicator instance!
                 MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot; 
(current value: &quot;4&quot;)
                           Inital fanout used in the tree topologies 
for each communicator.
                           This is only an initial guess, if a tuned 
collective needs a
                           different fanout for an operation, it build 
it dynamically. This
                           parameter is only for the first guess and 
might save a little
                           time
                 MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot; 
(current value: &quot;4&quot;)
                           Inital fanout used in the chain (fanout 
followed by pipeline)
                           topologies for each communicator. This is 
only an initial guess,
                           if a tuned collective needs a different 
fanout for an operation,
                           it build it dynamically. This parameter is 
only for the first
                           guess and might save a little time
                 MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot; 
(current value: &quot;0&quot;)
                           Switch used to decide if we use static 
(compiled/if statements)
                           or dynamic (built at runtime) decision function rules
                   MCA io: parameter &quot;io_base_freelist_initial_size&quot; 
(current value: &quot;16&quot;)
                           Initial MPI-2 IO request freelist size
                   MCA io: parameter &quot;io_base_freelist_max_size&quot; 
(current value: &quot;64&quot;)
                           Max size of the MPI-2 IO request freelist
                   MCA io: parameter &quot;io_base_freelist_increment&quot; 
(current value: &quot;16&quot;)
                           Increment size of the MPI-2 IO request freelist
                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
io framework (&lt;none&gt;
                           means &quot;use all components that can be found&quot;)
                   MCA io: parameter &quot;io_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the io framework (0 = 
no verbosity)
                   MCA io: parameter &quot;io_romio_priority&quot; (current value: &quot;10&quot;)
                           Priority of the io romio component
                   MCA io: parameter &quot;io_romio_delete_priority&quot; 
(current value: &quot;10&quot;)
                           Delete priority of the io romio component
                   MCA io: parameter 
&quot;io_romio_enable_parallel_optimizations&quot; (current
                           value: &quot;0&quot;)
                           Enable set of Open MPI-added options to 
improve collective file
                           i/o performance
                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
mpool framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the mpool framework (0 
= no verbosity)
                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current 
value: &quot;bucket&quot;)
                           Name of allocator component to use with sm mpool
                MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current 
value: &quot;536870912&quot;)
                           Maximum size of the sm mpool shared memory file
                MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current 
value: &quot;134217728&quot;)
                           Minimum size of the sm mpool shared memory file
                MCA mpool: parameter &quot;mpool_sm_per_peer_size&quot; (current 
value: &quot;33554432&quot;)
                           Size (in bytes) to allocate per local peer 
in the sm mpool
                           shared memory file, bounded by min_size and max_size
                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current value: &quot;0&quot;)
                MCA mpool: parameter &quot;mpool_udapl_priority&quot; (current value: &quot;0&quot;)
                MCA mpool: parameter &quot;mpool_base_use_mem_hooks&quot; 
(current value: &quot;0&quot;)
                           use memory hooks for deregistering freed memory
                MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current value: &quot;0&quot;)
                           (deprecated, use mpool_base_use_mem_hooks)
                  MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
pml framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the pml framework (0 = 
no verbosity)
                  MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current value: &quot;4&quot;)
                           Initial size of request free lists
                  MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current 
value: &quot;-1&quot;)
                           Maximum size of request free lists
                  MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current 
value: &quot;64&quot;)
                           Number of elements to add when growing 
request free lists
                  MCA pml: parameter &quot;pml_cm_priority&quot; (current value: &quot;30&quot;)
                           CM PML selection priority
                  MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current 
value: &quot;4&quot;)
                  MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current 
value: &quot;-1&quot;)
                  MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current 
value: &quot;64&quot;)
                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current value: &quot;20&quot;)
                  MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current 
value: &quot;131072&quot;)
                  MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot; 
(current value: &quot;3&quot;)
                  MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot; 
(current value: &quot;4&quot;)
                  MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
bml framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA bml: parameter &quot;bml_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the bml framework (0 = 
no verbosity)
                  MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot; 
(current value: &quot;1&quot;)
                           Show error message when procs are unreachable
                  MCA bml: parameter &quot;bml_r2_priority&quot; (current value: &quot;0&quot;)
               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
rcache framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the rcache framework (0 
= no verbosity)
               MCA rcache: parameter &quot;rcache_rb_priority&quot; (current value: &quot;0&quot;)
               MCA rcache: parameter &quot;rcache_vma_mru_len&quot; (current value: &quot;256&quot;)
                           The maximum size IN ENTRIES of the MRU 
(most recently used)
                           rcache list
               MCA rcache: parameter &quot;rcache_vma_mru_size&quot; (current 
value: &quot;1073741824&quot;)
                           The maximum size IN BYTES of the MRU (most 
recently used) rcache
                           list
               MCA rcache: parameter &quot;rcache_vma_priority&quot; (current value: &quot;0&quot;)
                  MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
                           If btl_base_debug is 1 standard debug is 
output, if &gt; 1 verbose
                           debug is output
                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
btl framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the btl framework (0 = 
no verbosity)
                  MCA btl: parameter &quot;btl_self_free_list_num&quot; (current 
value: &quot;0&quot;)
                           Number of fragments by default
                  MCA btl: parameter &quot;btl_self_free_list_max&quot; (current 
value: &quot;-1&quot;)
                           Maximum number of fragments
                  MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current 
value: &quot;32&quot;)
                           Increment by this number of fragments
                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current 
value: &quot;131072&quot;)
                           Eager size fragmeng (before the rendez-vous ptotocol)
                  MCA btl: parameter &quot;btl_self_min_send_size&quot; (current 
value: &quot;262144&quot;)
                           Minimum fragment size after the rendez-vous
                  MCA btl: parameter &quot;btl_self_max_send_size&quot; (current 
value: &quot;262144&quot;)
                           Maximum fragment size after the rendez-vous
                  MCA btl: parameter &quot;btl_self_min_rdma_size&quot; (current value:
                           &quot;2147483647&quot;)
                           Maximum fragment size for the RDMA transfer
                  MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current value:
                           &quot;2147483647&quot;)
                           Maximum fragment size for the RDMA transfer
                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current 
value: &quot;65536&quot;)
                           Device exclusivity
                  MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;10&quot;)
                           Active behavior flags
                  MCA btl: parameter &quot;btl_self_priority&quot; (current value: &quot;0&quot;)
                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &quot;8&quot;)
                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current 
value: &quot;-1&quot;)
                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current 
value: &quot;64&quot;)
                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current 
value: &quot;65535&quot;)
                  MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &quot;100&quot;)
                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &quot;-1&quot;)
                  MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current 
value: &quot;2&quot;)
                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;)
                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current 
value: &quot;4096&quot;)
                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current 
value: &quot;32768&quot;)
                  MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot; 
(current value: &quot;128&quot;)
                  MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot; 
(current value: &quot;120&quot;)
                  MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &quot;0&quot;)
                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current 
value: &lt;none&gt;)
                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;lo&quot;)
                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current 
value: &quot;8&quot;)
                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current 
value: &quot;-1&quot;)
                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current 
value: &quot;32&quot;)
                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
                  MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current 
value: &quot;30720&quot;)
                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;0&quot;)
                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current 
value: &quot;65536&quot;)
                  MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current 
value: &quot;65536&quot;)
                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current 
value: &quot;131072&quot;)
                  MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current 
value: &quot;131072&quot;)
                  MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current 
value: &quot;2147483647&quot;)
                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;122&quot;)
                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
                  MCA btl: parameter &quot;btl_udapl_free_list_num&quot; 
(current value: &quot;8&quot;)
                           Initial size of free lists (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_free_list_max&quot; 
(current value: &quot;-1&quot;)
                           Maximum size of free lists (-1 = infinite, 
otherwise must be &gt;=
                           1).
                  MCA btl: parameter &quot;btl_udapl_free_list_inc&quot; 
(current value: &quot;8&quot;)
                           Increment size of free lists (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_mpool&quot; (current value: &quot;udapl&quot;)
                           Name of the memory pool to be used.
                  MCA btl: parameter &quot;btl_udapl_max_modules&quot; (current 
value: &quot;8&quot;)
                           Maximum number of supported HCAs.
                  MCA btl: parameter &quot;btl_udapl_num_recvs&quot; (current value: &quot;8&quot;)
                           Total number of receive buffers to keep 
posted per endpoint
                           (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_num_sends&quot; (current value: &quot;7&quot;)
                           Maximum number of sends to post on an 
endpoint (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_sr_win&quot; (current value: &quot;4&quot;)
                           Window size at which point an explicit 
credit message will be
                           generated (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_eager_rdma_num&quot; 
(current value: &quot;32&quot;)
                           Number of RDMA buffers to allocate for 
small messages (must be
                           &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_max_eager_rdma_peers&quot; 
(current value:
                           &quot;16&quot;)
                           Maximum number of peers allowed to use RDMA 
for short messages
                           (independently RDMA will still be used for 
large messages, (must
                           be &gt;= 0; if zero then RDMA will not be used for short
                           messages).
                  MCA btl: parameter &quot;btl_udapl_eager_rdma_win&quot; 
(current value: &quot;28&quot;)
                           Window size at which point an explicit 
credit message will be
                           generated (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_timeout&quot; (current 
value: &quot;10000000&quot;)
                           Connection timeout, in microseconds.
                  MCA btl: parameter &quot;btl_udapl_conn_priv_data&quot; 
(current value: &quot;1&quot;)
                           Use connect private data to establish 
connections (not supported
                           by all uDAPL implementations).
                  MCA btl: parameter &quot;btl_udapl_async_events&quot; (current 
value: &quot;100000000&quot;)
                           The asynchronous event queue will only be 
checked after entering
                           progress this number of times.
                  MCA btl: parameter &quot;btl_udapl_buffer_alignment&quot; 
(current value: &quot;256&quot;)
                           Preferred communication buffer alignment, 
in bytes (must be &gt;=
                           1).
                  MCA btl: parameter &quot;btl_udapl_async_evd_qlen&quot; 
(current value: &quot;256&quot;)
                           The asynchronous event dispatcher queue length.
                  MCA btl: parameter &quot;btl_udapl_conn_evd_qlen&quot; 
(current value: &quot;256&quot;)
                           The connection event dispatcher queue 
length is a function of
                           the number of connections expected.
                  MCA btl: parameter &quot;btl_udapl_dto_evd_qlen&quot; (current 
value: &quot;256&quot;)
                           The data transfer operation event 
dispatcher queue length is a
                           function of the number of connections as 
well as the maximum
                           number of outstanding data transfer operations.
                  MCA btl: parameter &quot;btl_udapl_max_request_dtos&quot; 
(current value: &quot;76&quot;)
                           Maximum number of outstanding submitted 
sends and rdma
                           operations per endpoint, (see Section 6.6.6 
of uDAPL Spec.).
                  MCA btl: parameter &quot;btl_udapl_max_recv_dtos&quot; 
(current value: &quot;8&quot;)
                           Maximum number of outstanding submitted 
receive operations per
                           endpoint, (see Section 6.6.6 of uDAPL Spec.).
                  MCA btl: parameter &quot;btl_udapl_exclusivity&quot; (current 
value: &quot;1014&quot;)
                           uDAPL BTL exclusivity (must be &gt;= 0).
                  MCA btl: parameter &quot;btl_udapl_eager_limit&quot; (current 
value: &quot;8192&quot;)
                           Eager send limit, in bytes (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_min_send_size&quot; 
(current value: &quot;16384&quot;)
                           Minimum send size, in bytes (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_max_send_size&quot; 
(current value: &quot;65536&quot;)
                           Maximum send size, in bytes (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_min_rdma_size&quot; 
(current value: &quot;524288&quot;)
                           Minimum RDMA size, in bytes (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_max_rdma_size&quot; 
(current value: &quot;131072&quot;)
                           Maximum RDMA size, in bytes (must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_flags&quot; (current value: &quot;2&quot;)
                           BTL flags, added together: PUT=2 (cannot be 0).
                  MCA btl: parameter &quot;btl_udapl_bandwidth&quot; (current 
value: &quot;225&quot;)
                           Approximate maximum bandwidth of network 
(must be &gt;= 1).
                  MCA btl: parameter &quot;btl_udapl_priority&quot; (current value: &quot;0&quot;)
                  MCA btl: parameter &quot;btl_base_include&quot; (current value: &lt;none&gt;)
                  MCA btl: parameter &quot;btl_base_exclude&quot; (current value: &lt;none&gt;)
                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot; 
(current value: &quot;0&quot;)
                           This parameter is used to turn on warning 
messages when certain
                           NICs are not used
                  MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
mtl framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the mtl framework (0 = 
no verbosity)
                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
topo framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA topo: parameter &quot;topo_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the topo framework (0 = 
no verbosity)
                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
osc framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA osc: parameter &quot;osc_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the osc framework (0 = 
no verbosity)
                  MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current value: &quot;0&quot;)
                           Enable optimizations available only if 
MPI_LOCK is not used.
                  MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current 
value: &quot;16384&quot;)
                           Max size of eagerly sent data
                  MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current value: &quot;0&quot;)
               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
errmgr framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
               MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current value: &quot;0&quot;)
               MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current value: &quot;0&quot;)
               MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current value: &quot;0&quot;)
               MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current 
value: &quot;0&quot;)
               MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current value: &quot;0&quot;)
               MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current 
value: &quot;0&quot;)
                  MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current 
value: &quot;2147483647&quot;)
                  MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current value: &quot;512&quot;)
                  MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
gpr framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA gpr: parameter &quot;gpr_null_priority&quot; (current value: &quot;0&quot;)
                  MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current value: &quot;0&quot;)
                  MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current value: &quot;0&quot;)
                  MCA gpr: parameter &quot;gpr_replica_debug&quot; (current value: &quot;0&quot;)
                  MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current value: &quot;0&quot;)
                  MCA gpr: parameter &quot;gpr_replica_priority&quot; (current value: &quot;0&quot;)
                  MCA iof: parameter &quot;iof_base_window_size&quot; (current 
value: &quot;4096&quot;)
                  MCA iof: parameter &quot;iof_base_service&quot; (current value: &quot;0.0.0&quot;)
                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
iof framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA iof: parameter &quot;iof_proxy_debug&quot; (current value: &quot;1&quot;)
                  MCA iof: parameter &quot;iof_proxy_priority&quot; (current value: &quot;0&quot;)
                  MCA iof: parameter &quot;iof_svc_debug&quot; (current value: &quot;1&quot;)
                  MCA iof: parameter &quot;iof_svc_priority&quot; (current value: &quot;0&quot;)
                   MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
ns framework (&lt;none&gt;
                           means &quot;use all components that can be found&quot;)
                   MCA ns: parameter &quot;ns_proxy_debug&quot; (current value: &quot;0&quot;)
                   MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current 
value: &quot;2147483647&quot;)
                   MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current value: &quot;512&quot;)
                   MCA ns: parameter &quot;ns_proxy_priority&quot; (current value: &quot;0&quot;)
                   MCA ns: parameter &quot;ns_replica_debug&quot; (current value: &quot;0&quot;)
                   MCA ns: parameter &quot;ns_replica_isolate&quot; (current value: &quot;0&quot;)
                   MCA ns: parameter &quot;ns_replica_maxsize&quot; (current 
value: &quot;2147483647&quot;)
                   MCA ns: parameter &quot;ns_replica_blocksize&quot; (current 
value: &quot;512&quot;)
                   MCA ns: parameter &quot;ns_replica_priority&quot; (current value: &quot;0&quot;)
                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
oob framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA oob: parameter &quot;oob_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the oob framework (0 = 
no verbosity)
                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: &quot;-1&quot;)
                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current 
value: &quot;60&quot;)
                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;)
                  MCA oob: parameter &quot;oob_tcp_include&quot; (current value: &lt;none&gt;)
                  MCA oob: parameter &quot;oob_tcp_exclude&quot; (current value: &lt;none&gt;)
                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
                  MCA oob: parameter &quot;oob_tcp_connect_timeout&quot; 
(current value: &quot;600&quot;)
                           connect() timeout in seconds, before trying 
next interface
                  MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current 
value: &quot;1&quot;)
                           Enable (1) /Disable (0)  random sleep for 
connection wireup
                  MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current 
value: &quot;event&quot;)
                           Mode for HNP to accept incoming connections: event,
                           listen_thread
                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot; 
(current value:
                           &quot;10&quot;)
                           High water mark for queued accepted socket list size
                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_time&quot; 
(current value:
                           &quot;10&quot;)
                           Maximum amount of time (in milliseconds) to 
wait between
                           processing accepted socket list
                  MCA oob: parameter &quot;oob_tcp_accept_spin_count&quot; 
(current value: &quot;10&quot;)
                           Number of times to let accept return 
EWOULDBLOCK before updating
                           accepted socket list
                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current value: &quot;0&quot;)
                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
                  MCA ras: parameter &quot;ras_dash_host_priority&quot; (current 
value: &quot;5&quot;)
                           Selection priority for the dash_host RAS component
                  MCA ras: parameter &quot;ras_gridengine_debug&quot; (current value: &quot;0&quot;)
                           Enable debugging output for the gridengine 
ras component
                  MCA ras: parameter &quot;ras_gridengine_priority&quot; 
(current value: &quot;100&quot;)
                           Priority of the gridengine ras component
                  MCA ras: parameter &quot;ras_gridengine_verbose&quot; (current 
value: &quot;0&quot;)
                           Enable verbose output for the gridengine 
ras component
                  MCA ras: parameter &quot;ras_gridengine_show_jobid&quot; 
(current value: &quot;0&quot;)
                           Show the JOB_ID of the Grid Engine job
                  MCA ras: parameter &quot;ras_localhost_priority&quot; (current 
value: &quot;0&quot;)
                           Selection priority for the localhost RAS component
                  MCA ras: parameter &quot;ras_tm_priority&quot; (current value: &quot;100&quot;)
                           Priority of the tm ras component
                  MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
                  MCA rds: parameter &quot;rds_hostfile_debug&quot; (current value: &quot;0&quot;)
                           Toggle debug output for hostfile RDS component
                  MCA rds: parameter &quot;rds_hostfile_path&quot; (current value:
                           &quot;/opt/SUNWhpc/HPC7.0/etc/openmpi-default-hostfile&quot;)
                           ORTE Host filename
                  MCA rds: parameter &quot;rds_hostfile_priority&quot; (current 
value: &quot;0&quot;)
                  MCA rds: parameter &quot;rds_proxy_priority&quot; (current value: &quot;0&quot;)
                  MCA rds: parameter &quot;rds_resfile_debug&quot; (current value: &quot;0&quot;)
                           Toggle debug output for resfile RDS component
                  MCA rds: parameter &quot;rds_resfile_name&quot; (current value: &lt;none&gt;)
                           ORTE Resource filename
                  MCA rds: parameter &quot;rds_resfile_priority&quot; (current value: &quot;0&quot;)
                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the rmaps framework
                MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; 
(current value:
                           &quot;unspec&quot;)
                           Scheduling Policy for RMAPS. [slot | node]
                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current value: &quot;0&quot;)
                           Launch one ppn as directed
                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current 
value: &quot;-1&quot;)
                           Launch n procs/node
                MCA rmaps: parameter &quot;rmaps_base_schedule_local&quot; 
(current value: &quot;1&quot;)
                           If nonzero, allow scheduling MPI 
applications on the same node
                           as mpirun (default).  If zero, do not 
schedule any MPI
                           applications on the same node as mpirun
                MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot; 
(current value: &quot;0&quot;)
                           If nonzero, then do not allow 
oversubscription of nodes - mpirun
                           will return an error if there aren't enough 
nodes to launch all
                           processes without oversubscribing
                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
rmaps framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                MCA rmaps: parameter &quot;rmaps_round_robin_debug&quot; 
(current value: &quot;1&quot;)
                           Toggle debug output for Round Robin RMAPS component
                MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot; 
(current value: &quot;1&quot;)
                           Selection priority for Round Robin RMAPS component
                 MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
rmgr framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current value: &quot;0&quot;)
                 MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current value: &quot;0&quot;)
                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
rml framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA rml: parameter &quot;rml_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the rml framework (0 = 
no verbosity)
                  MCA rml: parameter &quot;rml_oob_priority&quot; (current value: &quot;0&quot;)
                  MCA pls: parameter &quot;pls_base_reuse_daemons&quot; (current 
value: &quot;0&quot;)
                           If nonzero, reuse daemons to launch 
dynamically spawned
                           processes.  If zero, do not reuse daemons (default)
                  MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
pls framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA pls: parameter &quot;pls_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the pls framework (0 = 
no verbosity)
                  MCA pls: parameter &quot;pls_gridengine_debug&quot; (current value: &quot;0&quot;)
                           Enable debugging of gridengine pls component
                  MCA pls: parameter &quot;pls_gridengine_verbose&quot; (current 
value: &quot;0&quot;)
                           Enable verbose output of the gridengine 
qrsh -inherit command
                  MCA pls: parameter &quot;pls_gridengine_priority&quot; 
(current value: &quot;100&quot;)
                           Priority of the gridengine pls component
                  MCA pls: parameter &quot;pls_gridengine_orted&quot; (current 
value: &quot;orted&quot;)
                           The command name that the gridengine pls 
component will invoke
                           for the ORTE daemon
                  MCA pls: parameter &quot;pls_proxy_priority&quot; (current value: &quot;0&quot;)
                  MCA pls: parameter &quot;pls_rsh_debug&quot; (current value: &quot;0&quot;)
                           Whether or not to enable debugging output 
for the rsh pls
                           component (0 or 1)
                  MCA pls: parameter &quot;pls_rsh_num_concurrent&quot; (current 
value: &quot;128&quot;)
                           How many pls_rsh_agent instances to invoke 
concurrently (must be
                           &gt; 0)
                  MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current value: &quot;0&quot;)
                           Force the launcher to always use rsh, even 
for local daemons
                  MCA pls: parameter &quot;pls_rsh_orted&quot; (current value: &quot;orted&quot;)
                           The command name that the rsh pls component 
will invoke for the
                           ORTE daemon
                  MCA pls: parameter &quot;pls_rsh_priority&quot; (current value: &quot;10&quot;)
                           Priority of the rsh pls component
                  MCA pls: parameter &quot;pls_rsh_delay&quot; (current value: &quot;1&quot;)
                           Delay (in seconds) between invocations of 
the remote agent, but
                           only used when the &quot;debug&quot; MCA parameter is 
true, or the
                           top-level MCA debugging is enabled 
(otherwise this value is
                           ignored)
                  MCA pls: parameter &quot;pls_rsh_reap&quot; (current value: &quot;1&quot;)
                           If set to 1, wait for all the processes to 
complete before
                           exiting.  Otherwise, quit immediately -- 
without waiting for
                           confirmation that all other processes in the job have
                           completed.
                  MCA pls: parameter &quot;pls_rsh_assume_same_shell&quot; 
(current value: &quot;1&quot;)
                           If set to 1, assume that the shell on the 
remote node is the
                           same as the shell on the local node. 
Otherwise, probe for what
                           the remote shell.
                  MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: 
&quot;ssh : rsh&quot;)
                           The command used to launch executables on 
remote nodes
                           (typically either &quot;ssh&quot; or &quot;rsh&quot;)
                  MCA pls: parameter &quot;pls_tm_debug&quot; (current value: &quot;0&quot;)
                           Enable debugging of the TM pls
                  MCA pls: parameter &quot;pls_tm_verbose&quot; (current value: &quot;0&quot;)
                           Enable verbose output of the TM pls
                  MCA pls: parameter &quot;pls_tm_priority&quot; (current value: &quot;75&quot;)
                           Default selection priority
                  MCA pls: parameter &quot;pls_tm_orted&quot; (current value: &quot;orted&quot;)
                           Command to use to start proxy orted
                  MCA pls: parameter &quot;pls_tm_want_path_check&quot; (current 
value: &quot;1&quot;)
                           Whether the launching process should check 
for the pls_tm_orted
                           executable in the PATH before launching 
(the TM API does not
                           give an idication of failure; this is a somewhat-lame
                           workaround; non-zero values enable this check)
                  MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
                           Default selection set of components for the 
sds framework
                           (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA sds: parameter &quot;sds_base_verbose&quot; (current value: &quot;0&quot;)
                           Verbosity level for the sds framework (0 = 
no verbosity)
                  MCA sds: parameter &quot;sds_env_priority&quot; (current value: &quot;0&quot;)
                  MCA sds: parameter &quot;sds_pipe_priority&quot; (current value: &quot;0&quot;)
                  MCA sds: parameter &quot;sds_seed_priority&quot; (current value: &quot;0&quot;)
                  MCA sds: parameter &quot;sds_singleton_priority&quot; (current 
value: &quot;0&quot;)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3621.php">Christopher D. Maestas: "[OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3619.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3617.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3622.php">Ralph H Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>Reply:</strong> <a href="3622.php">Ralph H Castain: "Re: [OMPI users] Connection to HNP lost"</a>
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
