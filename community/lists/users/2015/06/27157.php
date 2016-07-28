<?
$subject_val = "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 09:36:12 2015" -->
<!-- isoreceived="20150618133612" -->
<!-- sent="Thu, 18 Jun 2015 22:36:11 +0900" -->
<!-- isosent="20150618133611" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="CAAkFZ5uTddxVvV0qos4q_w=9TLmZPzS-oTRtwXf3UaYeTK5+rw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5582BD2A.9070608_at_letai.org.il" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-18 09:36:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27158.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="27156.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="27156.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27158.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="27158.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="27168.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is really odd...
<br>
<p>you can run
<br>
ompi_info --all
<br>
and search coll_ml_priority
<br>
<p>it will display the current value and the origin
<br>
(e.g. default, system wide config, user config, cli, environment variable)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, June 18, 2015, Daniel Letai &lt;dani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  No, that's the issue.
</span><br>
<span class="quotelev1">&gt; I had to disable it to get things working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's why I included my config settings - I couldn't figure out which
</span><br>
<span class="quotelev1">&gt; option enabled it, so I could remove it from the configuration...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 06/18/2015 02:43 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ML module is not ready for production and is disabled by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Did you explicitly enable this module ?
</span><br>
<span class="quotelev1">&gt; If yes, I encourage you to disable it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, June 18, 2015, Daniel Letai &lt;dani_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','dani_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; given a simple hello.c:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;         int size, rank, len;
</span><br>
<span class="quotelev2">&gt;&gt;         char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Get_processor_name(name, &amp;len);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;%s: Process %d out of %d\n&quot;, name, rank, size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Finalize();ffff
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for n=1
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 1 ./hello
</span><br>
<span class="quotelev2">&gt;&gt; it works correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for n&gt;1 it segfaults with signal 11
</span><br>
<span class="quotelev2">&gt;&gt; used gdb to trace the problem to ml coll:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; 0x00007ffff6750845 in ml_coll_hier_barrier_setup()
</span><br>
<span class="quotelev2">&gt;&gt;     from &lt;path to openmpi 1.8.5&gt;/lib/openmpi/mca_coll_ml.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; running with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 2 --mca coll ^ml ./hello
</span><br>
<span class="quotelev2">&gt;&gt; works correctly
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; using mellanox ofed 2.3-2.0.5-rhel6.4-x86_64, if it's at all relevant.
</span><br>
<span class="quotelev2">&gt;&gt; openmpi 1.8.5 was built with following options:
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild --rebuild --define 'configure_options --with-verbs=/usr
</span><br>
<span class="quotelev2">&gt;&gt; --with-verbs-libdir=/usr/lib64 CC=gcc CXX=g++ FC=gfortran CFLAGS=&quot;-g -O3&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt; --disable-debug --with-knem=/opt/knem-1.1.1.90mlnx
</span><br>
<span class="quotelev2">&gt;&gt; --with-platform=optimized --without-mpi-param-check
</span><br>
<span class="quotelev2">&gt;&gt; --with-contrib-vt-flags=--disable-iotrace --enable-builtin-atomics
</span><br>
<span class="quotelev2">&gt;&gt; --enable-cxx-exceptions --enable-sparse-groups --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt; --enable-memchecker --enable-btl-openib-failover --with-hwloc=internal
</span><br>
<span class="quotelev2">&gt;&gt; --with-verbs --with-x --with-slurm --with-pmi=/opt/slurm
</span><br>
<span class="quotelev2">&gt;&gt; --with-fca=/opt/mellanox/fca --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev2">&gt;&gt; --with-hcoll=/opt/mellanox/hcoll' openmpi-1.8.5-1.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 5.1.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27154.php">http://www.open-mpi.org/community/lists/users/2015/06/27154.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27155.php">http://www.open-mpi.org/community/lists/users/2015/06/27155.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27158.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="27156.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="27156.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27158.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="27158.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="27168.php">Daniel Letai: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
