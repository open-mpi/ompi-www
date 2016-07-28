<?
$subject_val = "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 21:46:49 2015" -->
<!-- isoreceived="20150625014649" -->
<!-- sent="Thu, 25 Jun 2015 10:46:42 +0900" -->
<!-- isosent="20150625014642" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="558B5D82.6020805_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="558A68EA.5020907_at_letai.org.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-24 21:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17529.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17527.php">Devendar Bureddy: "[OMPI devel] mpich test ini file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17529.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17529.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel,
<br>
<p>thanks for the logs.
<br>
<p>an other workaround is to
<br>
mpirun --mca coll ^hcoll ...
<br>
<p>i was able to reproduce the issue, and it surprisingly occurs only if 
<br>
the coll_ml module is loaded *before* the hcoll module.
<br>
/* this is not the case on my system, so i had to hack my 
<br>
mca_base_component_path in order to reproduce the issue */
<br>
<p>as far as i understand, libhcoll is a proprietary software, so i cannot 
<br>
dig into it.
<br>
that being said, i noticed libhcoll defines some symbols (such as 
<br>
ml_coll_hier_barrier_setup) that are also defined by the coll_ml module, 
<br>
so it is likely hcoll coll_ml and openmpi coll_ml are not binary 
<br>
compatible hence the error.
<br>
<p>i will dig a bit more and see if this is even supposed to happen (since 
<br>
coll_ml_priority is zero, why is the module still loaded ?)
<br>
<p>as far as i am concerned, you *have to* mpirun --mca coll ^ml or update 
<br>
your user/system wide config file to blacklist the coll_ml module to 
<br>
ensure this is working.
<br>
<p>Mike and Mellanox folks, could you please comment on that ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On 6/24/2015 5:23 PM, Daniel Letai wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached the two output logs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 06/22/2015 08:08 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Daniel,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i double checked this and i cannot make any sense with these logs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if coll_ml_priority is zero, then i do not any way how 
</span><br>
<span class="quotelev2">&gt;&gt; ml_coll_hier_barrier_setup can be invoked.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you please run again with --mca coll_base_verbose 100
</span><br>
<span class="quotelev2">&gt;&gt; with and without --mca coll ^ml
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 6/22/2015 12:08 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daniel,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ok, thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it seems that even if priority is zero, some code gets executed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will confirm this tomorrow and send you a patch to work around the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue if that if my guess is proven right
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sunday, June 21, 2015, Daniel Letai &lt;dani_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:dani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MCA coll: parameter &quot;coll_ml_priority&quot; (current value: &quot;0&quot;, data
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Not sure how to read this, but for any n&gt;1 mpirun only works
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     with --mca coll ^ml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thanks for helping
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On 06/18/2015 04:36 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     This is really odd...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     you can run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ompi_info --all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     and search coll_ml_priority
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     it will display the current value and the origin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (e.g. default, system wide config, user config, cli,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     environment variable)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On Thursday, June 18, 2015, Daniel Letai &lt;dani_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','dani_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         No, that's the issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         I had to disable it to get things working.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         That's why I included my config settings - I couldn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         figure out which option enabled it, so I could remove it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         from the configuration...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         On 06/18/2015 02:43 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Daniel,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         ML module is not ready for production and is disabled by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         default.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Did you explicitly enable this module ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         If yes, I encourage you to disable it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         On Thursday, June 18, 2015, Daniel Letai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         &lt;dani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             given a simple hello.c:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     int size, rank, len;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Get_processor_name(name, &amp;len);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     printf(&quot;%s: Process %d out of %d\n&quot;, name,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             rank, size);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Finalize();ffff
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             for n=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             mpirun -n 1 ./hello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             it works correctly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             for n&gt;1 it segfaults with signal 11
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             used gdb to trace the problem to ml coll:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             0x00007ffff6750845 in ml_coll_hier_barrier_setup()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 from &lt;path to openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             1.8.5&gt;/lib/openmpi/mca_coll_ml.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             running with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             mpirun -n 2 --mca coll ^ml ./hello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             works correctly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             using mellanox ofed 2.3-2.0.5-rhel6.4-x86_64, if it's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             at all relevant.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             openmpi 1.8.5 was built with following options:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             rpmbuild --rebuild --define 'configure_options
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --with-verbs=/usr --with-verbs-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             CC=gcc CXX=g++ FC=gfortran CFLAGS=&quot;-g -O3&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --enable-orterun-prefix-by-default --disable-debug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --with-knem=/opt/knem-1.1.1.90mlnx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --with-platform=optimized --without-mpi-param-check
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --with-contrib-vt-flags=--disable-iotrace
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --enable-builtin-atomics --enable-cxx-exceptions
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --enable-sparse-groups --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --enable-memchecker --enable-btl-openib-failover
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --with-hwloc=internal --with-verbs --with-x
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --with-slurm --with-pmi=/opt/slurm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --with-fca=/opt/mellanox/fca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             --with-hcoll=/opt/mellanox/hcoll' openmpi-1.8.5-1.src.rpm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             gcc version 5.1.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Thanks in advance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2015/06/27154.php">http://www.open-mpi.org/community/lists/users/2015/06/27154.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/06/27155.php">http://www.open-mpi.org/community/lists/users/2015/06/27155.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users_at_[hidden]  &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/06/27157.php">http://www.open-mpi.org/community/lists/users/2015/06/27157.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/06/27169.php">http://www.open-mpi.org/community/lists/users/2015/06/27169.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/06/27170.php">http://www.open-mpi.org/community/lists/users/2015/06/27170.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27183.php">http://www.open-mpi.org/community/lists/users/2015/06/27183.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17528/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17529.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17527.php">Devendar Bureddy: "[OMPI devel] mpich test ini file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17529.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17529.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
