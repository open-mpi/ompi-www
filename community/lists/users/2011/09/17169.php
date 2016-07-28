<?
$subject_val = "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 14:11:34 2011" -->
<!-- isoreceived="20110906181134" -->
<!-- sent="Tue, 6 Sep 2011 12:11:27 -0600" -->
<!-- isosent="20110906181127" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&amp;quot; (-26) instead of &amp;quot;Success&amp;quot;" -->
<!-- id="BF477FD4-660A-4306-AC1D-68B5A84A6C7F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E66727B.90506_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 14:11:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17170.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.4/Intel XE make check failure (CentOS-5.6 x86_64) [FIXED]"</a>
<li><strong>Previous message:</strong> <a href="17168.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>In reply to:</strong> <a href="17168.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17177.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Reply:</strong> <a href="17177.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, nothing definitive there, I'm afraid.
<br>
<p>All I can suggest is to remove/reduce the threading. Like I said, we aren't terribly thread safe at this time. I suspect you're stepping into one of those non-safe areas here.
<br>
<p>Hopefully will do better in later releases.
<br>
<p>On Sep 6, 2011, at 1:20 PM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; On 09/06/2011 04:58 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 6, 2011, at 12:49 PM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 09/06/2011 02:57 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Simone
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just to clarify: is your application threaded? Could you please send the OMPI configure cmd you used?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes, it is threaded. There are basically 3 threads, 1 for the outgoing messages (MPI_send), 1 for incoming messages (MPI_Iprobe / MPI_Recv) and one spawning.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure what you mean with OMPI configure cmd I used... I simply do mpirun --np 1 ./executable
</span><br>
<span class="quotelev2">&gt;&gt; How was OMPI configured when it was installed? If you didn't install it, then provide the output of ompi_info - it will tell us.
</span><br>
<span class="quotelev1">&gt; [@arch-moto tasksys]$ ompi_info
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI nobody_at_alderaan Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.5.3
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r24532
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Mar 16, 2011
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.5.3
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r24532
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Mar 16, 2011
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.5.3
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r24532
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Mar 16, 2011
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.5.3
</span><br>
<span class="quotelev1">&gt;                  Prefix: /usr
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: alderaan
</span><br>
<span class="quotelev1">&gt;           Configured by: nobody
</span><br>
<span class="quotelev1">&gt;           Configured on: Thu Jul  7 13:21:35 UTC 2011
</span><br>
<span class="quotelev1">&gt;          Configure host: alderaan
</span><br>
<span class="quotelev1">&gt;                Built by: nobody
</span><br>
<span class="quotelev1">&gt;                Built on: Thu Jul  7 13:27:08 UTC 2011
</span><br>
<span class="quotelev1">&gt;              Built host: alderaan
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;  C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;      C compiler version: 4.6.1
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs:
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: yes
</span><br>
<span class="quotelev1">&gt;  MPI interface warnings: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;     Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;          MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;    MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;  MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;          MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;              MCA memory: linux (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: bfo (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: csum (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: cm (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: cm (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: radix (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: slave (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rshd (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slave (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;            MCA notifier: command (MCA v2.0, API v1.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt;            MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Adding the debug flags just changes the race condition. Interestingly, those values only impact the behavior of mpirun, so it looks like the race condition is occurring there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that the error is totally nondeterministic. Sometimes happens, others not but the error message gives me no clue where the error is coming from. Is is a problem of my code or internal MPI?
</span><br>
<span class="quotelev2">&gt;&gt; Can't tell, but it is likely an impact of threading. Race conditions within threaded environments are common, and OMPI isn't particularly thread safe, especially when it comes to comm_spawn.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cheers, Simone
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 6, 2011, at 3:01 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am developing an MPI application which uses heavily MPI_Spawn. Usually everything works fine for the first hundred spawn but after a while the application exist with a curious message:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [arch-top:27712] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/grpcomm_base_modex.c at line 349
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [arch-top:27712] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file grpcomm_bad_module.c at line 518
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  ompi_proc_set_arch failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  --&gt;   Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** The MPI_Init_thread() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [arch-top:27712] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [arch-top:27714] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/grpcomm_base_modex.c at line 349
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [arch-top:27714] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file grpcomm_bad_module.c at line 518
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** The MPI_Init_thread() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [arch-top:27714] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [arch-top:27226] 1 more process has sent help message help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [arch-top:27226] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Also using MPI_init instead of MPI_Init_thread does not help, the same error occurs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Strangely the error does not occur if I run the code enabling debug in (-mca plm_base_verbose 5 -mca rmaps_base_verbose 5).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am using OpenMPI 1.5.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cheers, Simone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17170.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.4/Intel XE make check failure (CentOS-5.6 x86_64) [FIXED]"</a>
<li><strong>Previous message:</strong> <a href="17168.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>In reply to:</strong> <a href="17168.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17177.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Reply:</strong> <a href="17177.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
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
