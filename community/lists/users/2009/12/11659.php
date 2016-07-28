<?
$subject_val = "[OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 30 05:13:31 2009" -->
<!-- isoreceived="20091230101331" -->
<!-- sent="Wed, 30 Dec 2009 11:13:25 +0100" -->
<!-- isosent="20091230101325" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1" -->
<!-- id="op.u5qxcn1thvmlko_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1<br>
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-30 05:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11660.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Previous message:</strong> <a href="11658.php">Nilesh Awate: "[OMPI users] does OpenMPI started deprecating udapl support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11660.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Reply:</strong> <a href="11660.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI list,
<br>
<p>I have used the dynamic rules for collectives to be able to select one  
<br>
specific algorithm. With the latest versions of openmpi this seems to be  
<br>
broken. Just enabling coll_tuned_use_dynamic_rules causes the code to  
<br>
segfault. However, I do not provide a file with rules, since I just want  
<br>
to modify the behavior of one routine.
<br>
<p>I have tried the below example code on openmpi 1.3.2, 1.3.3, 1.3.4, and  
<br>
1.4. It *works* on 1.3.2, 1.3.3, but segfaults on 1.3.4 and 1.4. I have  
<br>
confirmed this on Scientific Linux 5.2, and 5.4. I have also successfully  
<br>
reproduced the crash using version 1.4 running on debian etch. All running  
<br>
on amd64, compiled from source without other options to configure than  
<br>
--prefix. The crash occurs whether I use the intel 11.1 compiler (via env  
<br>
CC) or gcc. It also occurs no matter the btl is set to openib,self  
<br>
tcp,self sm,self or combinations of those. See below for ompi_info and  
<br>
other info. I have tried MPI_Alltoall, MPI_Alltoallv, and MPI_Allreduce  
<br>
which behave the same.
<br>
<p>#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank,size;
<br>
&nbsp;&nbsp;&nbsp;char *buffer, *buffer2;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;buffer=calloc(100*size,1);
<br>
&nbsp;&nbsp;&nbsp;buffer2=calloc(100*size,1);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Alltoall(buffer,100,MPI_BYTE,buffer2,100,MPI_BYTE,MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Demonstrated behaviour:
<br>
<p>$ ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI daniels_at_arthur Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r22285
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI release date: Dec 08, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r22285
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE release date: Dec 08, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r22285
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Dec 08, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix:  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install
<br>
&nbsp;&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: arthur
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: daniels
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Tue Dec 29 16:54:37 CET 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: arthur
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: daniels
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Tue Dec 29 17:04:36 CET 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: arthur
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FT Checkpoint support: no  (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: file (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sync (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: csum (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: linear (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4)
<br>
<p>$ mpicc -O2 -o bug_openmpi_1.4_test bug_openmpi_1.4_test.c
<br>
$ ldd ./bug_openmpi_1.4_test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt;  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0  
<br>
(0x00002b33fa57e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt;  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libopen-rte.so.0  
<br>
(0x00002b33fa821000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt;  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libopen-pal.so.0  
<br>
(0x00002b33faa6b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000032c7400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00000032cfe00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000032d4a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00000032c7000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00000032c7800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00000032c6c00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00000032c5c00000)
<br>
$ mpirun -mca btl tcp,self -mca coll_tuned_use_dynamic_rules 0 -np 8  
<br>
./bug_openmpi_1.4_test
<br>
$ mpirun -mca btl tcp,self -mca coll_tuned_use_dynamic_rules 1 -np 8  
<br>
./bug_openmpi_1.4_test
<br>
[girasole:27510] *** Process received signal ***
<br>
[girasole:27510] Signal: Segmentation fault (11)
<br>
[girasole:27510] Signal code:  (128)
<br>
[girasole:27510] Failing at address: (nil)
<br>
[girasole:27503] *** Process received signal ***
<br>
[girasole:27503] Signal: Segmentation fault (11)
<br>
[girasole:27503] Signal code:  (128)
<br>
[girasole:27503] Failing at address: (nil)
<br>
[girasole:27510] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
<br>
[girasole:27510] [ 1]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2ae2b29fbeb5]
<br>
[girasole:27510] [ 2]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2ae2b29fa8ca]
<br>
[girasole:27510] [ 3]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)  
<br>
[0x2ae2ae76bbff]
<br>
[girasole:27510] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
<br>
[girasole:27510] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)  
<br>
[0x32c6c1d8b4]
<br>
[girasole:27510] [ 6] ./bug_openmpi_1.4_test [0x400869]
<br>
[girasole:27510] *** End of error message ***
<br>
[girasole:27503] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
<br>
[girasole:27503] [ 1]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b534b1b6eb5]
<br>
[girasole:27503] [ 2]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b534b1b58ca]
<br>
[girasole:27503] [ 3]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)  
<br>
[0x2b5346f26bff]
<br>
[girasole:27503] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
<br>
[girasole:27503] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)  
<br>
[0x32c6c1d8b4]
<br>
[girasole:27503] [ 6] ./bug_openmpi_1.4_test [0x400869]
<br>
[girasole:27503] *** End of error message ***
<br>
[girasole:27505] *** Process received signal ***
<br>
[girasole:27505] Signal: Segmentation fault (11)
<br>
[girasole:27505] Signal code:  (128)
<br>
[girasole:27505] Failing at address: (nil)
<br>
[girasole:27509] *** Process received signal ***
<br>
[girasole:27509] Signal: Segmentation fault (11)
<br>
[girasole:27509] Signal code:  (128)
<br>
[girasole:27509] Failing at address: (nil)
<br>
[girasole:27505] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
<br>
[girasole:27505] [ 1]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2ab662aa0eb5]
<br>
[girasole:27505] [ 2]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2ab662a9f8ca]
<br>
[girasole:27505] [ 3]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)  
<br>
[0x2ab65e810bff]
<br>
[girasole:27505] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
<br>
[girasole:27505] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)  
<br>
[0x32c6c1d8b4]
<br>
[girasole:27505] [ 6] ./bug_openmpi_1.4_test [0x400869]
<br>
[girasole:27505] *** End of error message ***
<br>
[girasole:27507] *** Process received signal ***
<br>
[girasole:27507] Signal: Segmentation fault (11)
<br>
[girasole:27507] Signal code:  (128)
<br>
[girasole:27507] Failing at address: (nil)
<br>
[girasole:27509] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
<br>
[girasole:27509] [ 1]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b7dc1863eb5]
<br>
[girasole:27509] [ 2]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b7dc18628ca]
<br>
[girasole:27509] [ 3]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)  
<br>
[0x2b7dbd5d3bff]
<br>
[girasole:27509] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
<br>
[girasole:27509] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)  
<br>
[0x32c6c1d8b4]
<br>
[girasole:27509] [ 6] ./bug_openmpi_1.4_test [0x400869]
<br>
[girasole:27509] *** End of error message ***
<br>
[girasole:27507] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
<br>
[girasole:27507] [ 1]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b09eb873eb5]
<br>
[girasole:27507] [ 2]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b09eb8728ca]
<br>
[girasole:27507] [ 3]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)  
<br>
[0x2b09e75e3bff]
<br>
[girasole:27507] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
<br>
[girasole:27507] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)  
<br>
[0x32c6c1d8b4]
<br>
[girasole:27507] [ 6] ./bug_openmpi_1.4_test [0x400869]
<br>
[girasole:27507] *** End of error message ***
<br>
[girasole:27504] *** Process received signal ***
<br>
[girasole:27504] Signal: Segmentation fault (11)
<br>
[girasole:27504] Signal code:  (128)
<br>
[girasole:27504] Failing at address: (nil)
<br>
[girasole:27506] *** Process received signal ***
<br>
[girasole:27506] Signal: Segmentation fault (11)
<br>
[girasole:27506] Signal code:  (128)
<br>
[girasole:27506] Failing at address: (nil)
<br>
[girasole:27504] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
<br>
[girasole:27504] [ 1]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b6fde1afeb5]
<br>
[girasole:27504] [ 2]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b6fde1ae8ca]
<br>
[girasole:27504] [ 3]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)  
<br>
[0x2b6fd9f1fbff]
<br>
[girasole:27504] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
<br>
[girasole:27504] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)  
<br>
[0x32c6c1d8b4]
<br>
[girasole:27504] [ 6] ./bug_openmpi_1.4_test [0x400869]
<br>
[girasole:27504] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 7 with PID 27510 on node girasole exited  
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
[girasole:27506] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
<br>
[girasole:27506] [ 1]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b66f2908eb5]
<br>
[girasole:27506] [ 2]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b66f29078ca]
<br>
[girasole:27506] [ 3]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)  
<br>
[0x2b66ee678bff]
<br>
[girasole:27506] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
<br>
[girasole:27506] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)  
<br>
[0x32c6c1d8b4]
<br>
[girasole:27506] [ 6] ./bug_openmpi_1.4_test [0x400869]
<br>
[girasole:27506] *** End of error message ***
<br>
[girasole:27508] *** Process received signal ***
<br>
[girasole:27508] Signal: Segmentation fault (11)
<br>
[girasole:27508] Signal code:  (128)
<br>
[girasole:27508] Failing at address: (nil)
<br>
[girasole:27508] [ 0] /lib64/libpthread.so.0 [0x32c780de80]
<br>
[girasole:27508] [ 1]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b89b09a1eb5]
<br>
[girasole:27508] [ 2]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/openmpi/mca_coll_tuned.so  
<br>
[0x2b89b09a08ca]
<br>
[girasole:27508] [ 3]  
<br>
/home/daniels/src/MISC/openmpi-1.4/openmpi-1.4_install/lib/libmpi.so.0(MPI_Alltoall+0x15f)  
<br>
[0x2b89ac711bff]
<br>
[girasole:27508] [ 4] ./bug_openmpi_1.4_test(main+0x97) [0x4009b7]
<br>
[girasole:27508] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)  
<br>
[0x32c6c1d8b4]
<br>
[girasole:27508] [ 6] ./bug_openmpi_1.4_test [0x400869]
<br>
[girasole:27508] *** End of error message ***
<br>
<p><p>Best regards,
<br>
<p><pre>
-- 
Daniel Sp&#229;ngberg
Materialkemi
Uppsala Universitet
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11660.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Previous message:</strong> <a href="11658.php">Nilesh Awate: "[OMPI users] does OpenMPI started deprecating udapl support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11660.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
<li><strong>Reply:</strong> <a href="11660.php">Lenny Verkhovsky: "Re: [OMPI users] openmpi 1.4 broken -mca coll_tuned_use_dynamic_rules 1"</a>
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
