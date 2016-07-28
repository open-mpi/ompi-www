<?
$subject_val = "Re: [OMPI users] Mpirun --app option not working";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 17:32:58 2011" -->
<!-- isoreceived="20110209223258" -->
<!-- sent="Wed, 09 Feb 2011 17:32:48 -0500" -->
<!-- isosent="20110209223248" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun --app option not working" -->
<!-- id="4D531610.5030905_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F564C25DA8D2AC4091972A6CE1EEA00202A560F4_at_PUSMNEG2.pwemail.us" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 17:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15541.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>Previous message:</strong> <a href="15539.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>In reply to:</strong> <a href="15537.php">Sindhi, Waris             PW: "[OMPI users] Mpirun --app option not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15543.php">Ralph Castain: "Re: [OMPI users] Mpirun --app option not working"</a>
<li><strong>Reply:</strong> <a href="15543.php">Ralph Castain: "Re: [OMPI users] Mpirun --app option not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sindhi, Waris PW wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;     I am having trouble using the --app option with OpenMPI's mpirun
</span><br>
<span class="quotelev1">&gt; command. The MPI processes launched with the --app option get launched
</span><br>
<span class="quotelev1">&gt; on the linux node that mpirun command is executed on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same MPI executable works when specified on the command line using
</span><br>
<span class="quotelev1">&gt; the -np &lt;num-procs&gt; option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know what I am doing wrong ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bad launch :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; head-node % /usr/lib64/openmpi/1.4-gcc/bin/mpirun --host
</span><br>
<span class="quotelev1">&gt; node1,node1,node2,node2 --app appfile 
</span><br>
<span class="quotelev1">&gt; head-node :Hello world from 0
</span><br>
<span class="quotelev1">&gt; head-node :Hello world from 3
</span><br>
<span class="quotelev1">&gt; head-node :Hello world from 1
</span><br>
<span class="quotelev1">&gt; head-node :Hello world from 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good launch :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; head-node % /usr/lib64/openmpi/1.4-gcc/bin/mpirun --host
</span><br>
<span class="quotelev1">&gt; node1,node1,node2,node2 -np 4 mpiinit
</span><br>
<span class="quotelev1">&gt; node1 :Hello world from 0
</span><br>
<span class="quotelev1">&gt; node2 :Hello world from 2
</span><br>
<span class="quotelev1">&gt; node2 :Hello world from 3
</span><br>
<span class="quotelev1">&gt; node1 :Hello world from 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; head-node % cat appfile
</span><br>
<span class="quotelev1">&gt; -np 1 /home/user461/OPENMPI/mpiinit
</span><br>
<span class="quotelev1">&gt; -np 1 /home/user461/OPENMPI/mpiinit
</span><br>
<span class="quotelev1">&gt; -np 1 /home/user461/OPENMPI/mpiinit
</span><br>
<span class="quotelev1">&gt; -np 1 /home/user461/OPENMPI/mpiinit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; head-node % cat mpiinit.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rc, me;
</span><br>
<span class="quotelev1">&gt;     char pname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;     int plen;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(
</span><br>
<span class="quotelev1">&gt;        &amp;argc,
</span><br>
<span class="quotelev1">&gt;        &amp;argv
</span><br>
<span class="quotelev1">&gt;     );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     rc = MPI_Comm_rank(
</span><br>
<span class="quotelev1">&gt;             MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;             &amp;me
</span><br>
<span class="quotelev1">&gt;     );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (rc != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;        return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Get_processor_name(
</span><br>
<span class="quotelev1">&gt;        pname,
</span><br>
<span class="quotelev1">&gt;        &amp;plen
</span><br>
<span class="quotelev1">&gt;     );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%s:Hello world from %d\n&quot;, pname, me);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; head-node % /usr/lib64/openmpi/1.4-gcc/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI
</span><br>
<span class="quotelev1">&gt; mockbuild_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.4
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r22285
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Dec 08, 2009
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.4
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r22285
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Dec 08, 2009
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.4
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r22285
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Dec 08, 2009
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.4
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/lib64/openmpi/1.4-gcc
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: x86-004.build.bos.redhat.com
</span><br>
<span class="quotelev1">&gt;            Configured by: mockbuild
</span><br>
<span class="quotelev1">&gt;            Configured on: Tue Feb 23 12:39:24 EST 2010
</span><br>
<span class="quotelev1">&gt;           Configure host: x86-004.build.bos.redhat.com
</span><br>
<span class="quotelev1">&gt;                 Built by: mockbuild
</span><br>
<span class="quotelev1">&gt;                 Built on: Tue Feb 23 12:41:54 EST 2010
</span><br>
<span class="quotelev1">&gt;               Built host: x86-004.build.bos.redhat.com
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
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Waris Sindhi
</span><br>
<span class="quotelev1">&gt; High Performance Computing, TechApps
</span><br>
<span class="quotelev1">&gt; Pratt &amp; Whitney, UTC
</span><br>
<span class="quotelev1">&gt; (860)-565-8486
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p>Hi Waris
<br>
<p>I think the appfile syntax includes the hosts part (and anything
<br>
else you want to pass to mpiexec):
<br>
<p>-host node1 -np 1 /home/user461/OPENMPI/mpiinit
<br>
-host node2 -np 1 /home/user461/OPENMPI/mpiinit
<br>
...
<br>
<p>Then the mpiexec command just lists the appfile:
<br>
<p>mpiexec --app appfile
<br>
<p>It works for me here (with the caveat that I am
<br>
running under Torque/PBS).
<br>
<p><p>Also, 'man mpiexec' says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--app &lt;appfile&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provide an appfile, ignoring all other command line options.
<br>
<p>**
<br>
So, I suppose this means that all information passed to mpiexec must
<br>
be inside the appfile, anything else will be ignored.
<br>
This may explain why your 'bad launch' ran on the headnode,
<br>
which is probably the default machine.
<br>
(It would be great if the OpenMPI folks added a few examples there,
<br>
specially for people who run MIMD programs.  :) )
<br>
<p>But, you know, these are only my guesses, guesses, guesses ...
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15541.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>Previous message:</strong> <a href="15539.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>In reply to:</strong> <a href="15537.php">Sindhi, Waris             PW: "[OMPI users] Mpirun --app option not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15543.php">Ralph Castain: "Re: [OMPI users] Mpirun --app option not working"</a>
<li><strong>Reply:</strong> <a href="15543.php">Ralph Castain: "Re: [OMPI users] Mpirun --app option not working"</a>
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
