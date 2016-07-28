<?
$subject_val = "[OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 06:51:17 2015" -->
<!-- isoreceived="20150618105117" -->
<!-- sent="Thu, 18 Jun 2015 13:51:10 +0300" -->
<!-- isosent="20150618105110" -->
<!-- name="Daniel Letai" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="[OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="5582A29E.7040604_at_letai.org.il" -->
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
<strong>Subject:</strong> [OMPI users] simple mpi hello world segfaults when coll ml not disabled<br>
<strong>From:</strong> Daniel Letai (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-18 06:51:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27155.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="27153.php">Ralph Castain: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27155.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="27155.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
given a simple hello.c:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size, rank, len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(name, &amp;len);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s: Process %d out of %d\n&quot;, name, rank, size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();ffff
<br>
}
<br>
<p>for n=1
<br>
mpirun -n 1 ./hello
<br>
it works correctly.
<br>
<p>for n&gt;1 it segfaults with signal 11
<br>
used gdb to trace the problem to ml coll:
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00007ffff6750845 in ml_coll_hier_barrier_setup()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from &lt;path to openmpi 1.8.5&gt;/lib/openmpi/mca_coll_ml.so
<br>
<p>running with
<br>
mpirun -n 2 --mca coll ^ml ./hello
<br>
works correctly
<br>
<p>using mellanox ofed 2.3-2.0.5-rhel6.4-x86_64, if it's at all relevant.
<br>
openmpi 1.8.5 was built with following options:
<br>
rpmbuild --rebuild --define 'configure_options --with-verbs=/usr 
<br>
--with-verbs-libdir=/usr/lib64 CC=gcc CXX=g++ FC=gfortran CFLAGS=&quot;-g 
<br>
-O3&quot; --enable-mpirun-prefix-by-default 
<br>
--enable-orterun-prefix-by-default --disable-debug 
<br>
--with-knem=/opt/knem-1.1.1.90mlnx --with-platform=optimized 
<br>
--without-mpi-param-check --with-contrib-vt-flags=--disable-iotrace 
<br>
--enable-builtin-atomics --enable-cxx-exceptions --enable-sparse-groups 
<br>
--enable-mpi-thread-multiple --enable-memchecker 
<br>
--enable-btl-openib-failover --with-hwloc=internal --with-verbs --with-x 
<br>
--with-slurm --with-pmi=/opt/slurm --with-fca=/opt/mellanox/fca 
<br>
--with-mxm=/opt/mellanox/mxm --with-hcoll=/opt/mellanox/hcoll' 
<br>
openmpi-1.8.5-1.src.rpm
<br>
<p>gcc version 5.1.1
<br>
<p>Thanks in advance
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27155.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="27153.php">Ralph Castain: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27155.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="27155.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
