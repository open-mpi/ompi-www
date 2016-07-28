<?
$subject_val = "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 13:21:33 2015" -->
<!-- isoreceived="20150618172133" -->
<!-- sent="Thu, 18 Jun 2015 20:21:27 +0300" -->
<!-- isosent="20150618172127" -->
<!-- name="Daniel Letai" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="5582FE17.6030705_at_letai.org.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5uTddxVvV0qos4q_w=9TLmZPzS-oTRtwXf3UaYeTK5+rw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-06-18 13:21:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27159.php">Lane, William: "[OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27157.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="27157.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27168.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, will try it on Sunday (won't have access to the system till then)
<br>
<p>On 06/18/2015 04:36 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; This is really odd...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can run
</span><br>
<span class="quotelev1">&gt; ompi_info --all
</span><br>
<span class="quotelev1">&gt; and search coll_ml_priority
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it will display the current value and the origin
</span><br>
<span class="quotelev1">&gt; (e.g. default, system wide config, user config, cli, environment variable)
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
<span class="quotelev1">&gt;     No, that's the issue.
</span><br>
<span class="quotelev1">&gt;     I had to disable it to get things working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     That's why I included my config settings - I couldn't figure out
</span><br>
<span class="quotelev1">&gt;     which option enabled it, so I could remove it from the
</span><br>
<span class="quotelev1">&gt;     configuration...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 06/18/2015 02:43 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Daniel,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ML module is not ready for production and is disabled by default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Did you explicitly enable this module ?
</span><br>
<span class="quotelev2">&gt;&gt;     If yes, I encourage you to disable it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thursday, June 18, 2015, Daniel Letai &lt;dani_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','dani_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         given a simple hello.c:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt;         {
</span><br>
<span class="quotelev2">&gt;&gt;                 int size, rank, len;
</span><br>
<span class="quotelev2">&gt;&gt;                 char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_Get_processor_name(name, &amp;len);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 printf(&quot;%s: Process %d out of %d\n&quot;, name, rank, size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_Finalize();ffff
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         for n=1
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun -n 1 ./hello
</span><br>
<span class="quotelev2">&gt;&gt;         it works correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         for n&gt;1 it segfaults with signal 11
</span><br>
<span class="quotelev2">&gt;&gt;         used gdb to trace the problem to ml coll:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt;         0x00007ffff6750845 in ml_coll_hier_barrier_setup()
</span><br>
<span class="quotelev2">&gt;&gt;             from &lt;path to openmpi 1.8.5&gt;/lib/openmpi/mca_coll_ml.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         running with
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun -n 2 --mca coll ^ml ./hello
</span><br>
<span class="quotelev2">&gt;&gt;         works correctly
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         using mellanox ofed 2.3-2.0.5-rhel6.4-x86_64, if it's at all
</span><br>
<span class="quotelev2">&gt;&gt;         relevant.
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi 1.8.5 was built with following options:
</span><br>
<span class="quotelev2">&gt;&gt;         rpmbuild --rebuild --define 'configure_options
</span><br>
<span class="quotelev2">&gt;&gt;         --with-verbs=/usr --with-verbs-libdir=/usr/lib64 CC=gcc
</span><br>
<span class="quotelev2">&gt;&gt;         CXX=g++ FC=gfortran CFLAGS=&quot;-g -O3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt;         --enable-orterun-prefix-by-default --disable-debug
</span><br>
<span class="quotelev2">&gt;&gt;         --with-knem=/opt/knem-1.1.1.90mlnx --with-platform=optimized
</span><br>
<span class="quotelev2">&gt;&gt;         --without-mpi-param-check
</span><br>
<span class="quotelev2">&gt;&gt;         --with-contrib-vt-flags=--disable-iotrace
</span><br>
<span class="quotelev2">&gt;&gt;         --enable-builtin-atomics --enable-cxx-exceptions
</span><br>
<span class="quotelev2">&gt;&gt;         --enable-sparse-groups --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt;         --enable-memchecker --enable-btl-openib-failover
</span><br>
<span class="quotelev2">&gt;&gt;         --with-hwloc=internal --with-verbs --with-x --with-slurm
</span><br>
<span class="quotelev2">&gt;&gt;         --with-pmi=/opt/slurm --with-fca=/opt/mellanox/fca
</span><br>
<span class="quotelev2">&gt;&gt;         --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev2">&gt;&gt;         --with-hcoll=/opt/mellanox/hcoll' openmpi-1.8.5-1.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         gcc version 5.1.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/06/27154.php">http://www.open-mpi.org/community/lists/users/2015/06/27154.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/06/27155.php">http://www.open-mpi.org/community/lists/users/2015/06/27155.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27157.php">http://www.open-mpi.org/community/lists/users/2015/06/27157.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27159.php">Lane, William: "[OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27157.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="27157.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27168.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
