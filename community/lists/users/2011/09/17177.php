<?
$subject_val = "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 14:03:33 2011" -->
<!-- isoreceived="20110907180333" -->
<!-- sent="Wed, 07 Sep 2011 20:03:22 +0000" -->
<!-- isosent="20110907200322" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&amp;quot; (-26) instead of &amp;quot;Success&amp;quot;" -->
<!-- id="4E67CE0A.4000903_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BF477FD4-660A-4306-AC1D-68B5A84A6C7F_at_open-mpi.org" -->
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
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 16:03:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17178.php">Jeff Squyres: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Previous message:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17169.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17178.php">Jeff Squyres: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Reply:</strong> <a href="17178.php">Jeff Squyres: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/06/2011 06:11 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm...well, nothing definitive there, I'm afraid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All I can suggest is to remove/reduce the threading. Like I said, we aren't terribly thread safe at this time. I suspect you're stepping into one of those non-safe areas here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully will do better in later releases.
</span><br>
Hi again,
<br>
I made some improvements on this problem myself. It looks like is not a 
<br>
related to threading and/or race conditions but instead to the behavior 
<br>
of MPI_Finalize invoked by the spawned processes. Apparently despite the 
<br>
spawned processes all invoke MPI_Finalize, the processes remains alive 
<br>
blocked on a semaphore. Therefore by spawning more and more processes I 
<br>
end up having hundreds of processes and slowly filling up all the 
<br>
available file descriptors.
<br>
<p>I got this hint by running my code with mpich2. After a while I also get 
<br>
an error there related to file descriptors and since then it was easy to 
<br>
understand what was going on (you should made errors semantically more 
<br>
sound in open mpi).
<br>
<p>By the way, I solved the problem by invoking MPI_Comm_disconnect on the 
<br>
inter-communicator I receive from the spawning task (MPI_Finalize is not 
<br>
enough). This makes the spawned tasks to close the parent communicator 
<br>
and terminate.
<br>
<p>After this small change the system is more stable now and that specific 
<br>
error is gone. Unfortunately a different message showed up:
<br>
<p>[arch-moto][[530,1],0][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Bad file descriptor (9)
<br>
<p>This error doesn't make the program terminate.
<br>
<p>Some other times I get an hard error, which is:
<br>
[err] event_queue_remove: 0x7fb5fc008c58(fd 14) not on queue 8
<br>
[arch-moto][[14492,46],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() to 192.168.88.1 failed: Connection refused (111)
<br>
[arch-moto:09536] [[14492,0],0] ORTE_ERROR_LOG: A message is attempting 
<br>
to be sent to a process whose contact information is unknown in file 
<br>
rml_oob_send.c at line 145
<br>
[arch-moto:09536] [[14492,0],0] attempted to send to [[14492,1],0]: tag 6
<br>
[arch-moto:09536] [[14492,0],0] ORTE_ERROR_LOG: A message is attempting 
<br>
to be sent to a process whose contact information is unknown in file 
<br>
base/plm_base_receive.c at line 278
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 9538 on
<br>
node arch-moto exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>any hints from this?
<br>
<p>cheers, Simone
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 6, 2011, at 1:20 PM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 09/06/2011 04:58 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 6, 2011, at 12:49 PM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 09/06/2011 02:57 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Simone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just to clarify: is your application threaded? Could you please send the OMPI configure cmd you used?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yes, it is threaded. There are basically 3 threads, 1 for the outgoing messages (MPI_send), 1 for incoming messages (MPI_Iprobe / MPI_Recv) and one spawning.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am not sure what you mean with OMPI configure cmd I used... I simply do mpirun --np 1 ./executable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How was OMPI configured when it was installed? If you didn't install it, then provide the output of ompi_info - it will tell us.
</span><br>
<span class="quotelev2">&gt;&gt; [@arch-moto tasksys]$ ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;                  Package: Open MPI nobody_at_alderaan Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.5.3
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r24532
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI release date: Mar 16, 2011
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.5.3
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r24532
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE release date: Mar 16, 2011
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.5.3
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r24532
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL release date: Mar 16, 2011
</span><br>
<span class="quotelev2">&gt;&gt;             Ident string: 1.5.3
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /usr
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: alderaan
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: nobody
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Thu Jul  7 13:21:35 UTC 2011
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: alderaan
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: nobody
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Thu Jul  7 13:27:08 UTC 2011
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: alderaan
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev2">&gt;&gt;       C compiler version: 4.6.1
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs:
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt;&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev2">&gt;&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev2">&gt;&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: cm (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: cm (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: slave (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: rshd (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: slave (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA notifier: command (MCA v2.0, API v1.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.5.3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Adding the debug flags just changes the race condition. Interestingly, those values only impact the behavior of mpirun, so it looks like the race condition is occurring there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem is that the error is totally nondeterministic. Sometimes happens, others not but the error message gives me no clue where the error is coming from. Is is a problem of my code or internal MPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can't tell, but it is likely an impact of threading. Race conditions within threaded environments are common, and OMPI isn't particularly thread safe, especially when it comes to comm_spawn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cheers, Simone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 6, 2011, at 3:01 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am developing an MPI application which uses heavily MPI_Spawn. Usually everything works fine for the first hundred spawn but after a while the application exist with a curious message:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [arch-top:27712] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/grpcomm_base_modex.c at line 349
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [arch-top:27712] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file grpcomm_bad_module.c at line 518
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   ompi_proc_set_arch failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   --&gt;    Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** The MPI_Init_thread() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [arch-top:27712] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [arch-top:27714] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/grpcomm_base_modex.c at line 349
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [arch-top:27714] [[36904,165],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file grpcomm_bad_module.c at line 518
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** The MPI_Init_thread() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [arch-top:27714] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [arch-top:27226] 1 more process has sent help message help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [arch-top:27226] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Also using MPI_init instead of MPI_Init_thread does not help, the same error occurs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Strangely the error does not occur if I run the code enabling debug in (-mca plm_base_verbose 5 -mca rmaps_base_verbose 5).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am using OpenMPI 1.5.3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cheers, Simone
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17178.php">Jeff Squyres: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Previous message:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17169.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17178.php">Jeff Squyres: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>Reply:</strong> <a href="17178.php">Jeff Squyres: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
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
