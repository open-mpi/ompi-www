<?
$subject_val = "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 08:44:32 2015" -->
<!-- isoreceived="20150618124432" -->
<!-- sent="Thu, 18 Jun 2015 15:44:26 +0300" -->
<!-- isosent="20150618124426" -->
<!-- name="Daniel Letai" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="5582BD2A.9070608_at_letai.org.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5uSUnu4Qd6Rs8b=XAp5mm4EV0v3SkSZLSY_sC=K1f-w+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled<br>
<strong>From:</strong> Daniel Letai (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-18 08:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27157.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="27155.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="27155.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27157.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="27157.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, that's the issue.
<br>
I had to disable it to get things working.
<br>
<p>That's why I included my config settings - I couldn't figure out which 
<br>
option enabled it, so I could remove it from the configuration...
<br>
<p>On 06/18/2015 02:43 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Daniel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ML module is not ready for production and is disabled by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you explicitly enable this module ?
</span><br>
<span class="quotelev1">&gt; If yes, I encourage you to disable it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, June 18, 2015, Daniel Letai &lt;dani_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     given a simple hello.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;             int size, rank, len;
</span><br>
<span class="quotelev1">&gt;             char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;             MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;             MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;             MPI_Get_processor_name(name, &amp;len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             printf(&quot;%s: Process %d out of %d\n&quot;, name, rank, size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MPI_Finalize();ffff
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for n=1
</span><br>
<span class="quotelev1">&gt;     mpirun -n 1 ./hello
</span><br>
<span class="quotelev1">&gt;     it works correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for n&gt;1 it segfaults with signal 11
</span><br>
<span class="quotelev1">&gt;     used gdb to trace the problem to ml coll:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt;     0x00007ffff6750845 in ml_coll_hier_barrier_setup()
</span><br>
<span class="quotelev1">&gt;         from &lt;path to openmpi 1.8.5&gt;/lib/openmpi/mca_coll_ml.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     running with
</span><br>
<span class="quotelev1">&gt;     mpirun -n 2 --mca coll ^ml ./hello
</span><br>
<span class="quotelev1">&gt;     works correctly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     using mellanox ofed 2.3-2.0.5-rhel6.4-x86_64, if it's at all relevant.
</span><br>
<span class="quotelev1">&gt;     openmpi 1.8.5 was built with following options:
</span><br>
<span class="quotelev1">&gt;     rpmbuild --rebuild --define 'configure_options --with-verbs=/usr
</span><br>
<span class="quotelev1">&gt;     --with-verbs-libdir=/usr/lib64 CC=gcc CXX=g++ FC=gfortran
</span><br>
<span class="quotelev1">&gt;     CFLAGS=&quot;-g -O3&quot; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;     --enable-orterun-prefix-by-default --disable-debug
</span><br>
<span class="quotelev1">&gt;     --with-knem=/opt/knem-1.1.1.90mlnx --with-platform=optimized
</span><br>
<span class="quotelev1">&gt;     --without-mpi-param-check
</span><br>
<span class="quotelev1">&gt;     --with-contrib-vt-flags=--disable-iotrace --enable-builtin-atomics
</span><br>
<span class="quotelev1">&gt;     --enable-cxx-exceptions --enable-sparse-groups
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-thread-multiple --enable-memchecker
</span><br>
<span class="quotelev1">&gt;     --enable-btl-openib-failover --with-hwloc=internal --with-verbs
</span><br>
<span class="quotelev1">&gt;     --with-x --with-slurm --with-pmi=/opt/slurm
</span><br>
<span class="quotelev1">&gt;     --with-fca=/opt/mellanox/fca --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt;     --with-hcoll=/opt/mellanox/hcoll' openmpi-1.8.5-1.src.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     gcc version 5.1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks in advance
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/06/27154.php">http://www.open-mpi.org/community/lists/users/2015/06/27154.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27155.php">http://www.open-mpi.org/community/lists/users/2015/06/27155.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27157.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="27155.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="27155.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27157.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="27157.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
