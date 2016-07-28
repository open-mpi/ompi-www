<?
$subject_val = "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 12:51:32 2015" -->
<!-- isoreceived="20150625165132" -->
<!-- sent="Thu, 25 Jun 2015 16:51:29 +0000" -->
<!-- isosent="20150625165129" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="7CEF9A26-3E0B-4890-8904-C233553AA0DF_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="22E411A0-48CA-46F9-9062-D127A5435169_at_cisco.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-25 12:51:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17536.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17534.php">Jeff Squyres (jsquyres): "[OMPI devel] Pruning from the 2.x branch"</a>
<li><strong>In reply to:</strong> <a href="17533.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17536.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17536.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I read this thread - this issue is not related to the ML bootstrap itself, 
<br>
but the naming conflict between public functions in HCOLL and ML. 
<br>
<p>Did I get it right ?
<br>
<p>If this the case, we can work with Mellanox folks to resolve this conflict.
<br>
<p>Best,
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jun 25, 2015, at 10:34 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; Gilles --
&gt; 
&gt; Can you send a stack trace from one of these crashes?
&gt; 
&gt; I am *guessing* that the following is happening:
&gt; 
&gt; 1. coll selection begins
&gt; 2. coll ml is queried, and disqualifies itself (but is not dlclosed yet)
&gt; 3. coll hcol is queried, which ends up calling down into libhcol.  libhcol calls a coll_ml_* symbol (which is apparently in a different .o file in the library), but the linker has already resolved that coll_ml_* symbol in the coll ml DSO.  So the execution transfers back up into the coll ml DSO, and ... kaboom.
&gt; 
&gt; A simple stack trace will confirm this -- it should show execution going down into libhcol and then back up into coll ml.
&gt; 
&gt; 
&gt; 
&gt; 
&gt;&gt; On Jun 25, 2015, at 1:03 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt; Folks,
&gt;&gt; 
&gt;&gt; this is a followup on an issue reported by Daniel on the users mailing list :
&gt;&gt; OpenMPI is built with hcoll from Mellanox.
&gt;&gt; the coll ml module has default priority zero.
&gt;&gt; 
&gt;&gt; on my cluster, it works just fine
&gt;&gt; on Daniel's cluster, it crashes.
&gt;&gt; 
&gt;&gt; i was able to reproduce the crash by tweaking mca_base_component_path and ensure
&gt;&gt; the coll ml module is loaded first.
&gt;&gt; 
&gt;&gt; basically, i found two issues :
&gt;&gt; 1) libhcoll.so (vendor lib provided by Mellanox, i tested hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.2-x86_64) seems to include its own coll ml, since there are some *public* symbols that are common to this module (ml_open, ml_coll_hier_barrier_setup, ...)
&gt;&gt; 2) coll ml priority is zero, and even if the library is dlclose'd, it seems this is uneffective
&gt;&gt; (nothing changed in /proc/xxx/maps before and after dlclose)
&gt;&gt; 
&gt;&gt; 
&gt;&gt; there are two workarounds :
&gt;&gt; mpirun --mca coll ^ml
&gt;&gt; or
&gt;&gt; mpirun --mca coll ^hcoll ... (probably not what is needed though ...)
&gt;&gt; 
&gt;&gt; is it expected the library is not unloaded after dlclose ?
&gt;&gt; 
&gt;&gt; Mellanox folks,
&gt;&gt; can you please double check how libhcoll is built ?
&gt;&gt; i guess it would work if the ml_ symbols were private to the library.
&gt;&gt; if not, the only workaround is to mpirun --mca coll ^ml
&gt;&gt; otherwise, it might crash (if coll_ml is loaded before coll_hcoll, which is really system dependent)
&gt;&gt; 
&gt;&gt; Cheers,
&gt;&gt; 
&gt;&gt; Gilles
&gt;&gt; On 6/25/2015 10:46 AM, Gilles Gouaillardet wrote:
&gt;&gt;&gt; Daniel,
&gt;&gt;&gt; 
&gt;&gt;&gt; thanks for the logs.
&gt;&gt;&gt; 
&gt;&gt;&gt; an other workaround is to
&gt;&gt;&gt; mpirun --mca coll ^hcoll ...
&gt;&gt;&gt; 
&gt;&gt;&gt; i was able to reproduce the issue, and it surprisingly occurs only if the coll_ml module is loaded *before* the hcoll module.
&gt;&gt;&gt; /* this is not the case on my system, so i had to hack my mca_base_component_path in order to reproduce the issue */
&gt;&gt;&gt; 
&gt;&gt;&gt; as far as i understand, libhcoll is a proprietary software, so i cannot dig into it.
&gt;&gt;&gt; that being said, i noticed libhcoll defines some symbols (such as ml_coll_hier_barrier_setup) that are also defined by the coll_ml module, so it is likely hcoll coll_ml and openmpi coll_ml are not binary compatible hence the error.
&gt;&gt;&gt; 
&gt;&gt;&gt; i will dig a bit more and see if this is even supposed to happen (since coll_ml_priority is zero, why is the module still loaded ?)
&gt;&gt;&gt; 
&gt;&gt;&gt; as far as i am concerned, you *have to* mpirun --mca coll ^ml or update your user/system wide config file to blacklist the coll_ml module to ensure this is working.
&gt;&gt;&gt; 
&gt;&gt;&gt; Mike and Mellanox folks, could you please comment on that ?
&gt;&gt;&gt; 
&gt;&gt;&gt; Cheers,
&gt;&gt;&gt; 
&gt;&gt;&gt; Gilles
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; On 6/24/2015 5:23 PM, Daniel Letai wrote:
&gt;&gt;&gt;&gt; Gilles,
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Attached the two output logs.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt; Daniel
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; On 06/22/2015 08:08 AM, Gilles Gouaillardet wrote:
&gt;&gt;&gt;&gt;&gt; Daniel,
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; i double checked this and i cannot make any sense with these logs.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; if coll_ml_priority is zero, then i do not any way how ml_coll_hier_barrier_setup can be invoked.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; could you please run again with --mca coll_base_verbose 100
&gt;&gt;&gt;&gt;&gt; with and without --mca coll ^ml
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Cheers,
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Gilles
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; On 6/22/2015 12:08 AM, Gilles Gouaillardet wrote:
&gt;&gt;&gt;&gt;&gt;&gt; Daniel,
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; ok, thanks
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; it seems that even if priority is zero, some code gets executed
&gt;&gt;&gt;&gt;&gt;&gt; I will confirm this tomorrow and send you a patch to work around the issue if that if my guess is proven right
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; Gilles
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; On Sunday, June 21, 2015, Daniel Letai &lt;dani_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt; MCA coll: parameter &quot;coll_ml_priority&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; Not sure how to read this, but for any n&gt;1 mpirun only works with --mca coll ^ml
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; Thanks for helping
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; On 06/18/2015 04:36 PM, Gilles Gouaillardet wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is really odd...
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; you can run
&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_info --all 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; and search coll_ml_priority
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; it will display the current value and the origin
&gt;&gt;&gt;&gt;&gt;&gt;&gt; (e.g. default, system wide config, user config, cli, environment variable)
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gilles
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thursday, June 18, 2015, Daniel Letai &lt;dani_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt; No, that's the issue.
&gt;&gt;&gt;&gt;&gt;&gt;&gt; I had to disable it to get things working.
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; That's why I included my config settings - I couldn't figure out which option enabled it, so I could remove it from the configuration...
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 06/18/2015 02:43 PM, Gilles Gouaillardet wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daniel,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ML module is not ready for production and is disabled by default.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Did you explicitly enable this module ?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If yes, I encourage you to disable it
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gilles
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thursday, June 18, 2015, Daniel Letai &lt;dani_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; given a simple hello.c:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char* argv[])
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        int size, rank, len;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        char name[MPI_MAX_PROCESSOR_NAME];
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Init(&amp;argc, &amp;argv);
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Get_processor_name(name, &amp;len);
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        printf(&quot;%s: Process %d out of %d\n&quot;, name, rank, size);
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Finalize();ffff
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for n=1
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -n 1 ./hello
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it works correctly.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for n&gt;1 it segfaults with signal 11
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; used gdb to trace the problem to ml coll:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00007ffff6750845 in ml_coll_hier_barrier_setup()
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    from &lt;path to openmpi 1.8.5&gt;/lib/openmpi/mca_coll_ml.so
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; running with
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -n 2 --mca coll ^ml ./hello
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; works correctly
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using mellanox ofed 2.3-2.0.5-rhel6.4-x86_64, if it's at all relevant.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi 1.8.5 was built with following options:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rpmbuild --rebuild --define 'configure_options --with-verbs=/usr                                 --with-verbs-libdir=/usr/lib64 CC=gcc CXX=g++ FC=gfortran CFLAGS=&quot;-g -O3&quot; --enable-mpirun-prefix-by-default --enable-orterun-prefix-by-default --disable-debug --with-knem=/opt/knem-1.1.1.90mlnx --with-platform=optimized --without-mpi-param-check                                 --with-contrib-vt-flags=--disable-iotrace --enable-builtin-atomics --enable-cxx-exceptions --enable-sparse-groups --enable-mpi-thread-multiple --enable-memchecker --enable-btl-openib-failover --with-hwloc=internal --with-verbs --with-x --with-slurm --with-pmi=/opt/slurm --with-fca=/opt/mellanox/fca --with-mxm=/opt/mellanox/mxm --with-hcoll=/opt/mellanox/hcoll' openmpi-1.8.5-1.src.rpm
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc version 5.1.1
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks in advance
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27154.php">http://www.open-mpi.org/community/lists/users/2015/06/27154.php</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27155.php">http://www.open-mpi.org/community/lists/users/2015/06/27155.php</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: 
&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27157.php">http://www.open-mpi.org/community/lists/users/2015/06/27157.php</a>
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; Subscription: 
&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: 
&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27169.php">http://www.open-mpi.org/community/lists/users/2015/06/27169.php</a>
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Subscription: 
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Link to this post: 
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27170.php">http://www.open-mpi.org/community/lists/users/2015/06/27170.php</a>
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Subscription: 
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Link to this post: 
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27183.php">http://www.open-mpi.org/community/lists/users/2015/06/27183.php</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; 
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; 
&gt;&gt;&gt; Subscription: 
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; Link to this post: 
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17528.php">http://www.open-mpi.org/community/lists/devel/2015/06/17528.php</a>
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17529.php">http://www.open-mpi.org/community/lists/devel/2015/06/17529.php</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17533.php">http://www.open-mpi.org/community/lists/devel/2015/06/17533.php</a>
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17536.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17534.php">Jeff Squyres (jsquyres): "[OMPI devel] Pruning from the 2.x branch"</a>
<li><strong>In reply to:</strong> <a href="17533.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17536.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17536.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
