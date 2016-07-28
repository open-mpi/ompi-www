<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 10 18:04:11 2007" -->
<!-- isoreceived="20070610220411" -->
<!-- sent="Sun, 10 Jun 2007 16:04:02 -0600" -->
<!-- isosent="20070610220402" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems" -->
<!-- id="C291D172.3013%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="466C655F.8080706_at_physik.uni-halle.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-10 18:04:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1652.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1650.php">Markus Daene: "[OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>In reply to:</strong> <a href="1650.php">Markus Daene: "[OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1652.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Reply:</strong> <a href="1652.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Reply:</strong> <a href="1724.php">Markus Daene: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Markus
<br>
<p>There are two MCA params that can help you, I believe:
<br>
<p>1. You to set the maximum size of the shared memory file with
<br>
<p>-mca mpool_sm_max_size xxx
<br>
<p>where xxx is the maximum memory file you want, expressed in bytes. The
<br>
default value I see is 512MBytes.
<br>
<p>2. You can set the size/peer of the file, again in bytes:
<br>
<p>-mca mpool_sm_per_peer_size xxx
<br>
<p>This will allocate a file that is xxx * num_procs_on_the_node on each node,
<br>
up to the maximum file size (either the 512MB default or whatever you
<br>
specified using the previous param). This defaults to 32MBytes/proc.
<br>
<p><p>I see that there is also a minimum (total, not per-proc) file size that
<br>
defaults to 128MBytes. If that is still too large, you can adjust it using
<br>
<p>-mca mpool_sm_min_size yyy
<br>
<p><p>Hope that helps
<br>
Ralph
<br>
<p><p><p>On 6/10/07 2:55 PM, &quot;Markus Daene&quot; &lt;markus.daene_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope I am in the correct mailing list with my problem.
</span><br>
<span class="quotelev1">&gt; I try to run openmpi with the gridengine(6.0u10, 6.1). Therefore I
</span><br>
<span class="quotelev1">&gt; compiled openmpi (1.2.2),
</span><br>
<span class="quotelev1">&gt; which has the gridengine support included, I have checked it with ompi_info.
</span><br>
<span class="quotelev1">&gt; In principle, openmpi runs well.
</span><br>
<span class="quotelev1">&gt; The gridengine is configured such that the user has to specify the
</span><br>
<span class="quotelev1">&gt; memory consumption
</span><br>
<span class="quotelev1">&gt; via the h_vmem option. Then I noticed that with a larger number of
</span><br>
<span class="quotelev1">&gt; processes the job
</span><br>
<span class="quotelev1">&gt; is killed by the gridengine because of taking too much memory.
</span><br>
<span class="quotelev1">&gt; To take a closer look on that, I wrote a small and simple (Fortran) MPI
</span><br>
<span class="quotelev1">&gt; program which has just a MPI_Init
</span><br>
<span class="quotelev1">&gt; and a (static) array, in my case of 50MB, then the programm goes into a
</span><br>
<span class="quotelev1">&gt; (infinite) loop, because it
</span><br>
<span class="quotelev1">&gt; takes some time until the gridengine reports the maxvmem.
</span><br>
<span class="quotelev1">&gt; I found, that if the processes run all on different nodes, there is only
</span><br>
<span class="quotelev1">&gt; a offset per process, at least
</span><br>
<span class="quotelev1">&gt; a linear scaling. But it becomes worse when the jobs run on one node.
</span><br>
<span class="quotelev1">&gt; There it seems to be a quadratic
</span><br>
<span class="quotelev1">&gt; scaling with the offset, in my case about 30M. I made a list of the
</span><br>
<span class="quotelev1">&gt; virtual memory reported by the
</span><br>
<span class="quotelev1">&gt; gridengine, I was running on a 16 processor node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #N proc    virt. Mem[MB]
</span><br>
<span class="quotelev1">&gt; 1          182
</span><br>
<span class="quotelev1">&gt; 2          468
</span><br>
<span class="quotelev1">&gt; 3          825
</span><br>
<span class="quotelev1">&gt; 4          1065
</span><br>
<span class="quotelev1">&gt; 5          1001
</span><br>
<span class="quotelev1">&gt; 6          1378
</span><br>
<span class="quotelev1">&gt; 7          1817
</span><br>
<span class="quotelev1">&gt; 8          2303
</span><br>
<span class="quotelev1">&gt; 12         4927
</span><br>
<span class="quotelev1">&gt; 16         8559
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the pure program should need N*50MB, for 16 it is only 800M, but it
</span><br>
<span class="quotelev1">&gt; takes 10 times more, &gt;7GB!!!
</span><br>
<span class="quotelev1">&gt; Of course, the gridengine will kills the job is this overtaking is not
</span><br>
<span class="quotelev1">&gt; taken into accout,
</span><br>
<span class="quotelev1">&gt; because of too much virtual memory consumption. The momory consumtion is
</span><br>
<span class="quotelev1">&gt; not related to the grid engine,
</span><br>
<span class="quotelev1">&gt; it is the same if I run from the command line.
</span><br>
<span class="quotelev1">&gt; I guess it might be related to the 'sm' component of the btl.
</span><br>
<span class="quotelev1">&gt; Is it possible to avoid the quadratic scaling?
</span><br>
<span class="quotelev1">&gt; Of course I could use the vapi/tcp component only like
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl mvapi  -np 16 ./my_test_program
</span><br>
<span class="quotelev1">&gt; in this case the virtual memory is fine, but it will not be what one
</span><br>
<span class="quotelev1">&gt; wants on a smp node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then it becomes ever worse:
</span><br>
<span class="quotelev1">&gt; openmpi nicely report the (max./act.) used virtual memory to the grid
</span><br>
<span class="quotelev1">&gt; engine as sum of all processes.
</span><br>
<span class="quotelev1">&gt; This value is the compared with the one the user has specified with the
</span><br>
<span class="quotelev1">&gt; h_vmem option, but the
</span><br>
<span class="quotelev1">&gt; gridengine takes this value per process for the allocation of the job
</span><br>
<span class="quotelev1">&gt; (works) and does not multiply
</span><br>
<span class="quotelev1">&gt; this with the number of processes. Maybe one should report this to the
</span><br>
<span class="quotelev1">&gt; gridenging mailing list, but it
</span><br>
<span class="quotelev1">&gt; could be related as well for the openmpi interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The last thing I noticed:
</span><br>
<span class="quotelev1">&gt; It seems that if the v_mem option for gridengine jobs is specified like
</span><br>
<span class="quotelev1">&gt; '2.0G' my test job was
</span><br>
<span class="quotelev1">&gt; immedialtely killed; but when I specify '2000M' (which is obviously
</span><br>
<span class="quotelev1">&gt; less) it work. The gridengine
</span><br>
<span class="quotelev1">&gt; puts the job allways on the correct node as requested, but I think there
</span><br>
<span class="quotelev1">&gt; is might be a problem in
</span><br>
<span class="quotelev1">&gt; the openmpi interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be nice if someone could give some hints how to avoid the
</span><br>
<span class="quotelev1">&gt; quadratic scaling or maybe to think
</span><br>
<span class="quotelev1">&gt; if this is really neccessary in openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Markus Daene
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my compiling options:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/not_important --enable-static
</span><br>
<span class="quotelev1">&gt; --with-f90-size=medium --with-f90-max-array-dim=7  --with-mpi-para
</span><br>
<span class="quotelev1">&gt; m-check=always --enable-cxx-exceptions --with-mvapi
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl-tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info output:
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.2
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.2
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usrurz/openmpi/1.2.2/pathscale_3.0
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Jun  4 16:04:38 CEST 2007
</span><br>
<span class="quotelev1">&gt;           Configure host: GE1N01
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Jun  4 16:09:37 CEST 2007
</span><br>
<span class="quotelev1">&gt;               Built host: GE1N01
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: pathcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usrurz/pathscale/bin/pathcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: pathCC
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usrurz/pathscale/bin/pathCC
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: pathf90
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usrurz/pathscale/bin/pathf90
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: pathf90
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usrurz/pathscale/bin/pathf90
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: always
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: mvapi (MCA v1.0, API v1.0.1, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Markus Daene
</span><br>
<span class="quotelev1">&gt; Martin Luther University Halle-Wittenberg
</span><br>
<span class="quotelev1">&gt; Naturwissenschaftliche Fakultaet II
</span><br>
<span class="quotelev1">&gt; Institute of Physics
</span><br>
<span class="quotelev1">&gt; Von Seckendorff-Platz 1 (room 1.28)
</span><br>
<span class="quotelev1">&gt; 06120 Halle
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1652.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1650.php">Markus Daene: "[OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>In reply to:</strong> <a href="1650.php">Markus Daene: "[OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1652.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Reply:</strong> <a href="1652.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Reply:</strong> <a href="1724.php">Markus Daene: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
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
