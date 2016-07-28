<?
$subject_val = "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 30 09:17:23 2009" -->
<!-- isoreceived="20091230141723" -->
<!-- sent="Wed, 30 Dec 2009 16:17:17 +0200" -->
<!-- isosent="20091230141717" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1" -->
<!-- id="453d39990912300617w74575550hae002af00d67e7ba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="op.u5qxcn1thvmlko_at_girasole.cluster.mkem.uu.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-30 09:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7270.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Previous message:</strong> <a href="7268.php">Joshua Hursey: "[OMPI devel] Fwd: [osl-staff] [all-osl-users] OSL systems maintenance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7270.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Maybe reply:</strong> <a href="7270.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the a knowing issue,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2087">https://svn.open-mpi.org/trac/ompi/ticket/2087</a>
<br>
Maybe it's priority should be raised up.
<br>
Lenny.
<br>
<p>On Wed, Dec 30, 2009 at 12:13 PM, Daniel Sp&#229;ngberg &lt;daniels_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have used the dynamic rules for collectives to be able to select one
</span><br>
<span class="quotelev1">&gt; specific algorithm. With the latest versions of openmpi this seems to be
</span><br>
<span class="quotelev1">&gt; broken. Just enabling coll_tuned_use_dynamic_rules causes the code to
</span><br>
<span class="quotelev1">&gt; segfault. However, I do not provide a file with rules, since I just want to
</span><br>
<span class="quotelev1">&gt; modify the behavior of one routine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried the below example code on openmpi 1.3.2, 1.3.3, 1.3.4, and
</span><br>
<span class="quotelev1">&gt; 1.4. It *works* on 1.3.2, 1.3.3, but segfaults on 1.3.4 and 1.4. I have
</span><br>
<span class="quotelev1">&gt; confirmed this on Scientific Linux 5.2, and 5.4. I have also successfully
</span><br>
<span class="quotelev1">&gt; reproduced the crash using version 1.4 running on debian etch. All running
</span><br>
<span class="quotelev1">&gt; on amd64, compiled from source without other options to configure than
</span><br>
<span class="quotelev1">&gt; --prefix. The crash occurs whether I use the intel 11.1 compiler (via env
</span><br>
<span class="quotelev1">&gt; CC) or gcc. It also occurs no matter the btl is set to openib,self tcp,self
</span><br>
<span class="quotelev1">&gt; sm,self or combinations of those. See below for ompi_info and other info. I
</span><br>
<span class="quotelev1">&gt; have tried MPI_Alltoall, MPI_Alltoallv, and MPI_Allreduce which behave the
</span><br>
<span class="quotelev1">&gt; same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int rank,size;
</span><br>
<span class="quotelev1">&gt;  char *buffer, *buffer2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  buffer=calloc(100*size,1);
</span><br>
<span class="quotelev1">&gt;  buffer2=calloc(100*size,1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Alltoall(buffer,100,MPI_BYTE,buffer2,100,MPI_BYTE,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Demonstrated behaviour:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ompi_info
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI daniels_at_arthur Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.4
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r22285
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Dec 08, 2009
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.4
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r22285
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Dec 08, 2009
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.4
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r22285
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Dec 08, 2009
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.4
</span><br>
<span class="quotelev1">&gt;                  Prefix:
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: arthur
</span><br>
<span class="quotelev1">&gt;           Configured by: daniels
</span><br>
<span class="quotelev1">&gt;           Configured on: Tue Dec 29 16:54:37 CET 2009
</span><br>
<span class="quotelev1">&gt;          Configure host: arthur
</span><br>
<span class="quotelev1">&gt;                Built by: daniels
</span><br>
<span class="quotelev1">&gt;                Built on: Tue Dec 29 17:04:36 CET 2009
</span><br>
<span class="quotelev1">&gt;              Built host: arthur
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /usr/bin/gfortran
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
<span class="quotelev1">&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
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
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: csum (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -O2 -o bug_openmpi_1.4_test bug_openmpi_1.4_test.c
</span><br>
<span class="quotelev1">&gt; $ ldd ./bug_openmpi_1.4_test
</span><br>
<span class="quotelev1">&gt;        libmpi.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (0x00002b33fa57e000)
</span><br>
<span class="quotelev1">&gt;        libopen-rte.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; (0x00002b33fa821000)
</span><br>
<span class="quotelev1">&gt;        libopen-pal.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (0x00002b33faa6b000)
</span><br>
<span class="quotelev1">&gt;        libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000032c7400000)
</span><br>
<span class="quotelev1">&gt;        libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00000032cfe00000)
</span><br>
<span class="quotelev1">&gt;        libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000032d4a00000)
</span><br>
<span class="quotelev1">&gt;        libm.so.6 =&gt; /lib64/libm.so.6 (0x00000032c7000000)
</span><br>
<span class="quotelev1">&gt;        libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00000032c7800000)
</span><br>
<span class="quotelev1">&gt;        libc.so.6 =&gt; /lib64/libc.so.6 (0x00000032c6c00000)
</span><br>
<span class="quotelev1">&gt;        /lib64/ld-linux-x86-64.so.2 (0x00000032c5c00000)
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl tcp,self -mca coll_tuned_use_dynamic_rules 0 -np 8
</span><br>
<span class="quotelev1">&gt; ./bug_openmpi_1.4_test
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl tcp,self -mca coll_tuned_use_dynamic_rules 1 -np 8
</span><br>
<span class="quotelev1">&gt; ./bug_openmpi_1.4_test
</span><br>
<span class="quotelev1">&gt; [girasole:27510] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [girasole:27510] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [girasole:27510] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [girasole:27510] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [girasole:27503] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [girasole:27503] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [girasole:27503] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [girasole:27503] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [girasole:27510] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
</span><br>
<span class="quotelev1">&gt; [girasole:27510] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2ae2b29fbeb5]
</span><br>
<span class="quotelev1">&gt; [girasole:27510] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2ae2b29fa8ca]
</span><br>
<span class="quotelev1">&gt; [girasole:27510] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)
</span><br>
<span class="quotelev1">&gt; [0x2ae2ae76bbff]
</span><br>
<span class="quotelev1">&gt; [girasole:27510] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
</span><br>
<span class="quotelev1">&gt; [girasole:27510] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x32c6c1d8b4]
</span><br>
<span class="quotelev1">&gt; [girasole:27510] [ 6] ./bug_openmpi_1.4_test [0x400869]
</span><br>
<span class="quotelev1">&gt; [girasole:27510] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [girasole:27503] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
</span><br>
<span class="quotelev1">&gt; [girasole:27503] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b534b1b6eb5]
</span><br>
<span class="quotelev1">&gt; [girasole:27503] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b534b1b58ca]
</span><br>
<span class="quotelev1">&gt; [girasole:27503] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)
</span><br>
<span class="quotelev1">&gt; [0x2b5346f26bff]
</span><br>
<span class="quotelev1">&gt; [girasole:27503] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
</span><br>
<span class="quotelev1">&gt; [girasole:27503] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x32c6c1d8b4]
</span><br>
<span class="quotelev1">&gt; [girasole:27503] [ 6] ./bug_openmpi_1.4_test [0x400869]
</span><br>
<span class="quotelev1">&gt; [girasole:27503] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [girasole:27505] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [girasole:27505] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [girasole:27505] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [girasole:27505] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [girasole:27509] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [girasole:27509] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [girasole:27509] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [girasole:27509] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [girasole:27505] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
</span><br>
<span class="quotelev1">&gt; [girasole:27505] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2ab662aa0eb5]
</span><br>
<span class="quotelev1">&gt; [girasole:27505] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2ab662a9f8ca]
</span><br>
<span class="quotelev1">&gt; [girasole:27505] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)
</span><br>
<span class="quotelev1">&gt; [0x2ab65e810bff]
</span><br>
<span class="quotelev1">&gt; [girasole:27505] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
</span><br>
<span class="quotelev1">&gt; [girasole:27505] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x32c6c1d8b4]
</span><br>
<span class="quotelev1">&gt; [girasole:27505] [ 6] ./bug_openmpi_1.4_test [0x400869]
</span><br>
<span class="quotelev1">&gt; [girasole:27505] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [girasole:27507] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [girasole:27507] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [girasole:27507] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [girasole:27507] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [girasole:27509] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
</span><br>
<span class="quotelev1">&gt; [girasole:27509] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b7dc1863eb5]
</span><br>
<span class="quotelev1">&gt; [girasole:27509] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b7dc18628ca]
</span><br>
<span class="quotelev1">&gt; [girasole:27509] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)
</span><br>
<span class="quotelev1">&gt; [0x2b7dbd5d3bff]
</span><br>
<span class="quotelev1">&gt; [girasole:27509] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
</span><br>
<span class="quotelev1">&gt; [girasole:27509] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x32c6c1d8b4]
</span><br>
<span class="quotelev1">&gt; [girasole:27509] [ 6] ./bug_openmpi_1.4_test [0x400869]
</span><br>
<span class="quotelev1">&gt; [girasole:27509] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [girasole:27507] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
</span><br>
<span class="quotelev1">&gt; [girasole:27507] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b09eb873eb5]
</span><br>
<span class="quotelev1">&gt; [girasole:27507] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b09eb8728ca]
</span><br>
<span class="quotelev1">&gt; [girasole:27507] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)
</span><br>
<span class="quotelev1">&gt; [0x2b09e75e3bff]
</span><br>
<span class="quotelev1">&gt; [girasole:27507] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
</span><br>
<span class="quotelev1">&gt; [girasole:27507] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x32c6c1d8b4]
</span><br>
<span class="quotelev1">&gt; [girasole:27507] [ 6] ./bug_openmpi_1.4_test [0x400869]
</span><br>
<span class="quotelev1">&gt; [girasole:27507] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [girasole:27504] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [girasole:27504] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [girasole:27504] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [girasole:27504] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [girasole:27506] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [girasole:27506] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [girasole:27506] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [girasole:27506] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [girasole:27504] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
</span><br>
<span class="quotelev1">&gt; [girasole:27504] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b6fde1afeb5]
</span><br>
<span class="quotelev1">&gt; [girasole:27504] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b6fde1ae8ca]
</span><br>
<span class="quotelev1">&gt; [girasole:27504] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)
</span><br>
<span class="quotelev1">&gt; [0x2b6fd9f1fbff]
</span><br>
<span class="quotelev1">&gt; [girasole:27504] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
</span><br>
<span class="quotelev1">&gt; [girasole:27504] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x32c6c1d8b4]
</span><br>
<span class="quotelev1">&gt; [girasole:27504] [ 6] ./bug_openmpi_1.4_test [0x400869]
</span><br>
<span class="quotelev1">&gt; [girasole:27504] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 7 with PID 27510 on node girasole exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [girasole:27506] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
</span><br>
<span class="quotelev1">&gt; [girasole:27506] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b66f2908eb5]
</span><br>
<span class="quotelev1">&gt; [girasole:27506] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b66f29078ca]
</span><br>
<span class="quotelev1">&gt; [girasole:27506] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)
</span><br>
<span class="quotelev1">&gt; [0x2b66ee678bff]
</span><br>
<span class="quotelev1">&gt; [girasole:27506] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
</span><br>
<span class="quotelev1">&gt; [girasole:27506] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x32c6c1d8b4]
</span><br>
<span class="quotelev1">&gt; [girasole:27506] [ 6] ./bug_openmpi_1.4_test [0x400869]
</span><br>
<span class="quotelev1">&gt; [girasole:27506] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [girasole:27508] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [girasole:27508] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [girasole:27508] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [girasole:27508] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [girasole:27508] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
</span><br>
<span class="quotelev1">&gt; [girasole:27508] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b89b09a1eb5]
</span><br>
<span class="quotelev1">&gt; [girasole:27508] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b89b09a08ca]
</span><br>
<span class="quotelev1">&gt; [girasole:27508] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)
</span><br>
<span class="quotelev1">&gt; [0x2b89ac711bff]
</span><br>
<span class="quotelev1">&gt; [girasole:27508] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
</span><br>
<span class="quotelev1">&gt; [girasole:27508] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x32c6c1d8b4]
</span><br>
<span class="quotelev1">&gt; [girasole:27508] [ 6] ./bug_openmpi_1.4_test [0x400869]
</span><br>
<span class="quotelev1">&gt; [girasole:27508] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev1">&gt; Materialkemi
</span><br>
<span class="quotelev1">&gt; Uppsala Universitet
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7270.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Previous message:</strong> <a href="7268.php">Joshua Hursey: "[OMPI devel] Fwd: [osl-staff] [all-osl-users] OSL systems maintenance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7270.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Maybe reply:</strong> <a href="7270.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
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
