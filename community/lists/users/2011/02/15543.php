<?
$subject_val = "Re: [OMPI users] Mpirun --app option not working";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 17:56:02 2011" -->
<!-- isoreceived="20110209225602" -->
<!-- sent="Wed, 9 Feb 2011 15:55:52 -0700" -->
<!-- isosent="20110209225552" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun --app option not working" -->
<!-- id="724669F2-3DD5-4605-BED5-5AEE4987EF81_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D531610.5030905_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun --app option not working<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 17:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15544.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15542.php">Jeff Squyres: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>In reply to:</strong> <a href="15540.php">Gus Correa: "Re: [OMPI users] Mpirun --app option not working"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus is correct - the -host option needs to be in the appfile
<br>
<p><p>On Feb 9, 2011, at 3:32 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Sindhi, Waris PW wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;    I am having trouble using the --app option with OpenMPI's mpirun
</span><br>
<span class="quotelev2">&gt;&gt; command. The MPI processes launched with the --app option get launched
</span><br>
<span class="quotelev2">&gt;&gt; on the linux node that mpirun command is executed on.
</span><br>
<span class="quotelev2">&gt;&gt; The same MPI executable works when specified on the command line using
</span><br>
<span class="quotelev2">&gt;&gt; the -np &lt;num-procs&gt; option.
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know what I am doing wrong ?
</span><br>
<span class="quotelev2">&gt;&gt; Bad launch :
</span><br>
<span class="quotelev2">&gt;&gt; head-node % /usr/lib64/openmpi/1.4-gcc/bin/mpirun --host
</span><br>
<span class="quotelev2">&gt;&gt; node1,node1,node2,node2 --app appfile head-node :Hello world from 0
</span><br>
<span class="quotelev2">&gt;&gt; head-node :Hello world from 3
</span><br>
<span class="quotelev2">&gt;&gt; head-node :Hello world from 1
</span><br>
<span class="quotelev2">&gt;&gt; head-node :Hello world from 2
</span><br>
<span class="quotelev2">&gt;&gt; Good launch :
</span><br>
<span class="quotelev2">&gt;&gt; head-node % /usr/lib64/openmpi/1.4-gcc/bin/mpirun --host
</span><br>
<span class="quotelev2">&gt;&gt; node1,node1,node2,node2 -np 4 mpiinit
</span><br>
<span class="quotelev2">&gt;&gt; node1 :Hello world from 0
</span><br>
<span class="quotelev2">&gt;&gt; node2 :Hello world from 2
</span><br>
<span class="quotelev2">&gt;&gt; node2 :Hello world from 3
</span><br>
<span class="quotelev2">&gt;&gt; node1 :Hello world from 1
</span><br>
<span class="quotelev2">&gt;&gt; head-node % cat appfile
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 /home/user461/OPENMPI/mpiinit
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 /home/user461/OPENMPI/mpiinit
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 /home/user461/OPENMPI/mpiinit
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 /home/user461/OPENMPI/mpiinit
</span><br>
<span class="quotelev2">&gt;&gt; head-node % cat mpiinit.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int rc, me;
</span><br>
<span class="quotelev2">&gt;&gt;    char pname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;    int plen;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(
</span><br>
<span class="quotelev2">&gt;&gt;       &amp;argc,
</span><br>
<span class="quotelev2">&gt;&gt;       &amp;argv
</span><br>
<span class="quotelev2">&gt;&gt;    );
</span><br>
<span class="quotelev2">&gt;&gt;    rc = MPI_Comm_rank(
</span><br>
<span class="quotelev2">&gt;&gt;            MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt;            &amp;me
</span><br>
<span class="quotelev2">&gt;&gt;    );
</span><br>
<span class="quotelev2">&gt;&gt;    if (rc != MPI_SUCCESS)
</span><br>
<span class="quotelev2">&gt;&gt;    {
</span><br>
<span class="quotelev2">&gt;&gt;       return rc;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Get_processor_name(
</span><br>
<span class="quotelev2">&gt;&gt;       pname,
</span><br>
<span class="quotelev2">&gt;&gt;       &amp;plen
</span><br>
<span class="quotelev2">&gt;&gt;    );
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;%s:Hello world from %d\n&quot;, pname, me);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;    return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; head-node % /usr/lib64/openmpi/1.4-gcc/bin/ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;                 Package: Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; mockbuild_at_[hidden] Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                Open MPI: 1.4
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI SVN revision: r22285
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI release date: Dec 08, 2009
</span><br>
<span class="quotelev2">&gt;&gt;                Open RTE: 1.4
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE SVN revision: r22285
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE release date: Dec 08, 2009
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL: 1.4
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL SVN revision: r22285
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL release date: Dec 08, 2009
</span><br>
<span class="quotelev2">&gt;&gt;            Ident string: 1.4
</span><br>
<span class="quotelev2">&gt;&gt;                  Prefix: /usr/lib64/openmpi/1.4-gcc
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;          Configure host: x86-004.build.bos.redhat.com
</span><br>
<span class="quotelev2">&gt;&gt;           Configured by: mockbuild
</span><br>
<span class="quotelev2">&gt;&gt;           Configured on: Tue Feb 23 12:39:24 EST 2010
</span><br>
<span class="quotelev2">&gt;&gt;          Configure host: x86-004.build.bos.redhat.com
</span><br>
<span class="quotelev2">&gt;&gt;                Built by: mockbuild
</span><br>
<span class="quotelev2">&gt;&gt;                Built on: Tue Feb 23 12:41:54 EST 2010
</span><br>
<span class="quotelev2">&gt;&gt;              Built host: x86-004.build.bos.redhat.com
</span><br>
<span class="quotelev2">&gt;&gt;              C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt;              C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;            C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;             C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;          C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;           Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;  Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;         libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt; mpirun default --prefix: yes
</span><br>
<span class="quotelev2">&gt;&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt;&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: csum (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: ofud (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: openib (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: gridengine (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: load_balance (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; Waris Sindhi
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing, TechApps
</span><br>
<span class="quotelev2">&gt;&gt; Pratt &amp; Whitney, UTC
</span><br>
<span class="quotelev2">&gt;&gt; (860)-565-8486
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
<span class="quotelev1">&gt; Hi Waris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the appfile syntax includes the hosts part (and anything
</span><br>
<span class="quotelev1">&gt; else you want to pass to mpiexec):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -host node1 -np 1 /home/user461/OPENMPI/mpiinit
</span><br>
<span class="quotelev1">&gt; -host node2 -np 1 /home/user461/OPENMPI/mpiinit
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then the mpiexec command just lists the appfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec --app appfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works for me here (with the caveat that I am
</span><br>
<span class="quotelev1">&gt; running under Torque/PBS).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, 'man mpiexec' says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       --app &lt;appfile&gt;
</span><br>
<span class="quotelev1">&gt;              Provide an appfile, ignoring all other command line options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; So, I suppose this means that all information passed to mpiexec must
</span><br>
<span class="quotelev1">&gt; be inside the appfile, anything else will be ignored.
</span><br>
<span class="quotelev1">&gt; This may explain why your 'bad launch' ran on the headnode,
</span><br>
<span class="quotelev1">&gt; which is probably the default machine.
</span><br>
<span class="quotelev1">&gt; (It would be great if the OpenMPI folks added a few examples there,
</span><br>
<span class="quotelev1">&gt; specially for people who run MIMD programs.  :) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, you know, these are only my guesses, guesses, guesses ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="15544.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15542.php">Jeff Squyres: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>In reply to:</strong> <a href="15540.php">Gus Correa: "Re: [OMPI users] Mpirun --app option not working"</a>
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
