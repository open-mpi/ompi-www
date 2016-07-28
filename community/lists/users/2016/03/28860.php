<?
$subject_val = "Re: [OMPI users] Error running mpicc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 03:44:59 2016" -->
<!-- isoreceived="20160328074459" -->
<!-- sent="Mon, 28 Mar 2016 16:44:46 +0900" -->
<!-- isosent="20160328074446" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error running mpicc" -->
<!-- id="56F8E0EE.5070503_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDjR=YWWArEz8CwgZ7nn8q9G7Fm9N0rwAGy8VPcbETNvfQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-28 03:44:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28861.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28859.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>In reply to:</strong> <a href="28859.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28861.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28861.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28862.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
at first, does it hang when running on only one node ?
<br>
<p>when the hang occur, you can collect stack traces
<br>
(run pstack on mpitest)
<br>
to see where it hangs.
<br>
<p>since you configure'd with --disable-dlopen, it means your btl has been 
<br>
slurped into openmpi.
<br>
that means some parts of it are executed, and it could be responsible 
<br>
for the hang.
<br>
<p>note if you
<br>
mpirun --mca btl self,sm -np 2 ...
<br>
on two hosts, then it will never work since no btl can be used so mpi 
<br>
tasks can communicate.
<br>
<p>it seems something is wrong on master, i will check from now
<br>
<p>do smallMPI and bigMPI implies on host is little endian and the other is 
<br>
big endian ?
<br>
if yes, then you need to configure with --enable-heterogeneous
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/28/2016 4:26 PM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per your suggestion, installing libnl3-devel does fixes the mpicc 
</span><br>
<span class="quotelev1">&gt; issue, but there still seems to be another issue down the road: the 
</span><br>
<span class="quotelev1">&gt; generated executable seems to hang. I have tried sm, tcp and openib 
</span><br>
<span class="quotelev1">&gt; BTLs, all with the same result:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -H smallMPI,bigMPI -mca btl self,sm 
</span><br>
<span class="quotelev1">&gt; ./mpitest   &lt;--- Hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The source code for the simple test is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int world_size, world_rank, name_len;
</span><br>
<span class="quotelev1">&gt;     char hostname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d 
</span><br>
<span class="quotelev1">&gt; processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do I do now?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 28, 2016 at 2:37 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Does this happen only with master ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     what does
</span><br>
<span class="quotelev1">&gt;     ldd mpicc
</span><br>
<span class="quotelev1">&gt;     says ?
</span><br>
<span class="quotelev1">&gt;     does it require both libnl and libnl3 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     libnl3 is used by OpenMPI if libnl3-devel package is installed,
</span><br>
<span class="quotelev1">&gt;     and this is not the case on your system
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     a possible root cause is third party libs use libnl3, and the
</span><br>
<span class="quotelev1">&gt;     reachable/netlink component
</span><br>
<span class="quotelev1">&gt;     tries to use libnl, in this case, installing libnl3-devel should
</span><br>
<span class="quotelev1">&gt;     fix your issue
</span><br>
<span class="quotelev1">&gt;     /* you will need to re-configure after that */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     an other possible root cause is some third party libs use libnl
</span><br>
<span class="quotelev1">&gt;     and other use libnl3,
</span><br>
<span class="quotelev1">&gt;     and in this case, i am afraid there is no simple workaround.
</span><br>
<span class="quotelev1">&gt;     if installing libnl3-devel did not solve your issue, you can give
</span><br>
<span class="quotelev1">&gt;     a try to
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/pull/1014">https://github.com/open-mpi/ompi/pull/1014</a>
</span><br>
<span class="quotelev1">&gt;     at least, it will abort with an error message that states which
</span><br>
<span class="quotelev1">&gt;     lib is using libnl and which is using libnl3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i am afraid the only option is to manually disable some
</span><br>
<span class="quotelev1">&gt;     components, so only one flavor of lib nl is used.
</span><br>
<span class="quotelev1">&gt;     that can be achieved by adding a .opal_ignore empty file in the
</span><br>
<span class="quotelev1">&gt;     dir of the components you want to disable.
</span><br>
<span class="quotelev1">&gt;     /* you will need to rerun autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt; after that */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 3/28/2016 3:16 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The system in question is a CentOS 7 box, that has been running
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI, both the master branch and the 1.10.2 release happily
</span><br>
<span class="quotelev2">&gt;&gt;     until now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Just now, in order to debug something, I recompiled with the
</span><br>
<span class="quotelev2">&gt;&gt;     following options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     $ ./configure --enable-debug --enable-debug-symbols --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The compilation and install was successful; however, mpicc now
</span><br>
<span class="quotelev2">&gt;&gt;     crashes like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [durga_at_smallMPI ~]$ mpicc -Wall -Wextra -o mpitest mpitest.c
</span><br>
<span class="quotelev2">&gt;&gt;     mpicc: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
</span><br>
<span class="quotelev2">&gt;&gt;     Aborted (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Searching the mailing archive, I found two posts that describe
</span><br>
<span class="quotelev2">&gt;&gt;     similar situations:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://www.open-mpi.org/community/lists/devel/2015/08/17812.php">https://www.open-mpi.org/community/lists/devel/2015/08/17812.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/11/28016.php">http://www.open-mpi.org/community/lists/users/2015/11/28016.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     However, the solution proposed in these, to disable verbs, is not
</span><br>
<span class="quotelev2">&gt;&gt;     acceptable to me for the following reasons: I am trying to
</span><br>
<span class="quotelev2">&gt;&gt;     implement a new BTL by reverse engineering the openib BTL. I am
</span><br>
<span class="quotelev2">&gt;&gt;     using a Qlogic HCA for this purpose. (Please note that I cannot
</span><br>
<span class="quotelev2">&gt;&gt;     use PSM as I am writing code for a BTL)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     As there any more acceptable solutions for this? Here are the
</span><br>
<span class="quotelev2">&gt;&gt;     list of nl libraries on my box:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [durga_at_smallMPI ~]$ sudo yum list installed | grep libnl
</span><br>
<span class="quotelev2">&gt;&gt;     libnl.x86_64 1.1.4-3.el7                     @anaconda
</span><br>
<span class="quotelev2">&gt;&gt;     libnl-devel.x86_64 1.1.4-3.el7                     @anaconda
</span><br>
<span class="quotelev2">&gt;&gt;     libnl3.x86_64 3.2.21-10.el7                   @base
</span><br>
<span class="quotelev2">&gt;&gt;     libnl3-cli.x86_64 3.2.21-10.el7                   @base
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     and uninstalling libnl3 is not an option either: it seems yum 
</span><br>
<span class="quotelev2">&gt;&gt;     wants to uninstall around 100 odd other packages because of
</span><br>
<span class="quotelev2">&gt;&gt;     dependency which will essentially render the machine unusable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Please help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;     Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     We learn from history that we never learn from history.
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
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28855.php">http://www.open-mpi.org/community/lists/users/2016/03/28855.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/03/28856.php">http://www.open-mpi.org/community/lists/users/2016/03/28856.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28859.php">http://www.open-mpi.org/community/lists/users/2016/03/28859.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28860/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28861.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28859.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>In reply to:</strong> <a href="28859.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28861.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28861.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28862.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
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
