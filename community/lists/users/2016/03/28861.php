<?
$subject_val = "Re: [OMPI users] Error running mpicc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 04:23:28 2016" -->
<!-- isoreceived="20160328082328" -->
<!-- sent="Mon, 28 Mar 2016 17:23:16 +0900" -->
<!-- isosent="20160328082316" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error running mpicc" -->
<!-- id="56F8E9F4.8010602_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56F8E0EE.5070503_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error running mpicc<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-28 04:23:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28862.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28860.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>In reply to:</strong> <a href="28860.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28862.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
if you are running with master, i recommend you
<br>
mpirun --mca mpi_add_procs_cutoff 1024 ...
<br>
<p>in order to avoid the crash i just reported at 
<br>
<a href="https://github.com/open-mpi/ompi/issues/1501">https://github.com/open-mpi/ompi/issues/1501</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/28/2016 4:44 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; at first, does it hang when running on only one node ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when the hang occur, you can collect stack traces
</span><br>
<span class="quotelev1">&gt; (run pstack on mpitest)
</span><br>
<span class="quotelev1">&gt; to see where it hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; since you configure'd with --disable-dlopen, it means your btl has 
</span><br>
<span class="quotelev1">&gt; been slurped into openmpi.
</span><br>
<span class="quotelev1">&gt; that means some parts of it are executed, and it could be responsible 
</span><br>
<span class="quotelev1">&gt; for the hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note if you
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl self,sm -np 2 ...
</span><br>
<span class="quotelev1">&gt; on two hosts, then it will never work since no btl can be used so mpi 
</span><br>
<span class="quotelev1">&gt; tasks can communicate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it seems something is wrong on master, i will check from now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do smallMPI and bigMPI implies on host is little endian and the other 
</span><br>
<span class="quotelev1">&gt; is big endian ?
</span><br>
<span class="quotelev1">&gt; if yes, then you need to configure with --enable-heterogeneous
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
<span class="quotelev1">&gt; On 3/28/2016 4:26 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per your suggestion, installing libnl3-devel does fixes the mpicc 
</span><br>
<span class="quotelev2">&gt;&gt; issue, but there still seems to be another issue down the road: the 
</span><br>
<span class="quotelev2">&gt;&gt; generated executable seems to hang. I have tried sm, tcp and openib 
</span><br>
<span class="quotelev2">&gt;&gt; BTLs, all with the same result:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -H smallMPI,bigMPI -mca btl self,sm 
</span><br>
<span class="quotelev2">&gt;&gt; ./mpitest   &lt;--- Hangs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The source code for the simple test is as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int world_size, world_rank, name_len;
</span><br>
<span class="quotelev2">&gt;&gt;     char hostname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d 
</span><br>
<span class="quotelev2">&gt;&gt; processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do I do now?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Mar 28, 2016 at 2:37 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Does this happen only with master ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     what does
</span><br>
<span class="quotelev2">&gt;&gt;     ldd mpicc
</span><br>
<span class="quotelev2">&gt;&gt;     says ?
</span><br>
<span class="quotelev2">&gt;&gt;     does it require both libnl and libnl3 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     libnl3 is used by OpenMPI if libnl3-devel package is installed,
</span><br>
<span class="quotelev2">&gt;&gt;     and this is not the case on your system
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     a possible root cause is third party libs use libnl3, and the
</span><br>
<span class="quotelev2">&gt;&gt;     reachable/netlink component
</span><br>
<span class="quotelev2">&gt;&gt;     tries to use libnl, in this case, installing libnl3-devel should
</span><br>
<span class="quotelev2">&gt;&gt;     fix your issue
</span><br>
<span class="quotelev2">&gt;&gt;     /* you will need to re-configure after that */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     an other possible root cause is some third party libs use libnl
</span><br>
<span class="quotelev2">&gt;&gt;     and other use libnl3,
</span><br>
<span class="quotelev2">&gt;&gt;     and in this case, i am afraid there is no simple workaround.
</span><br>
<span class="quotelev2">&gt;&gt;     if installing libnl3-devel did not solve your issue, you can give
</span><br>
<span class="quotelev2">&gt;&gt;     a try to
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://github.com/open-mpi/ompi/pull/1014">https://github.com/open-mpi/ompi/pull/1014</a>
</span><br>
<span class="quotelev2">&gt;&gt;     at least, it will abort with an error message that states which
</span><br>
<span class="quotelev2">&gt;&gt;     lib is using libnl and which is using libnl3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     i am afraid the only option is to manually disable some
</span><br>
<span class="quotelev2">&gt;&gt;     components, so only one flavor of lib nl is used.
</span><br>
<span class="quotelev2">&gt;&gt;     that can be achieved by adding a .opal_ignore empty file in the
</span><br>
<span class="quotelev2">&gt;&gt;     dir of the components you want to disable.
</span><br>
<span class="quotelev2">&gt;&gt;     /* you will need to rerun autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt; after
</span><br>
<span class="quotelev2">&gt;&gt;     that */
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
<span class="quotelev2">&gt;&gt;     On 3/28/2016 3:16 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hello all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The system in question is a CentOS 7 box, that has been running
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     OpenMPI, both the master branch and the 1.10.2 release happily
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     until now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Just now, in order to debug something, I recompiled with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     following options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $ ./configure --enable-debug --enable-debug-symbols --disable-dlopen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The compilation and install was successful; however, mpicc now
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     crashes like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [durga_at_smallMPI ~]$ mpicc -Wall -Wextra -o mpitest mpitest.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpicc: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Aborted (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Searching the mailing archive, I found two posts that describe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     similar situations:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="https://www.open-mpi.org/community/lists/devel/2015/08/17812.php">https://www.open-mpi.org/community/lists/devel/2015/08/17812.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/11/28016.php">http://www.open-mpi.org/community/lists/users/2015/11/28016.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     However, the solution proposed in these, to disable verbs, is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     not acceptable to me for the following reasons: I am trying to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     implement a new BTL by reverse engineering the openib BTL. I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     using a Qlogic HCA for this purpose. (Please note that I cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     use PSM as I am writing code for a BTL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     As there any more acceptable solutions for this? Here are the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     list of nl libraries on my box:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [durga_at_smallMPI ~]$ sudo yum list installed | grep libnl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libnl.x86_64 1.1.4-3.el7                     @anaconda
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libnl-devel.x86_64 1.1.4-3.el7                     @anaconda
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libnl3.x86_64 3.2.21-10.el7                   @base
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libnl3-cli.x86_64 3.2.21-10.el7                   @base
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and uninstalling libnl3 is not an option either: it seems yum 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     wants to uninstall around 100 odd other packages because of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     dependency which will essentially render the machine unusable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Please help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     We learn from history that we never learn from history.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28855.php">http://www.open-mpi.org/community/lists/users/2016/03/28855.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/03/28856.php">http://www.open-mpi.org/community/lists/users/2016/03/28856.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28859.php">http://www.open-mpi.org/community/lists/users/2016/03/28859.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28860.php">http://www.open-mpi.org/community/lists/users/2016/03/28860.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28861/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28862.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28860.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>In reply to:</strong> <a href="28860.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28862.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
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
