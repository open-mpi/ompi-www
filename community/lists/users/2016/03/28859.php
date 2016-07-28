<?
$subject_val = "Re: [OMPI users] Error running mpicc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 03:26:25 2016" -->
<!-- isoreceived="20160328072625" -->
<!-- sent="Mon, 28 Mar 2016 03:26:14 -0400" -->
<!-- isosent="20160328072614" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error running mpicc" -->
<!-- id="CAHXxYDjR=YWWArEz8CwgZ7nn8q9G7Fm9N0rwAGy8VPcbETNvfQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56F8D13C.3000703_at_rist.or.jp" -->
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
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-28 03:26:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28860.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28858.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>In reply to:</strong> <a href="28856.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28860.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28860.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles
<br>
<p>Per your suggestion, installing libnl3-devel does fixes the mpicc issue,
<br>
but there still seems to be another issue down the road: the generated
<br>
executable seems to hang. I have tried sm, tcp and openib BTLs, all with
<br>
the same result:
<br>
<p>[durga_at_smallMPI ~]$ mpirun -np 2 -H smallMPI,bigMPI -mca btl self,sm
<br>
./mpitest   &lt;--- Hangs
<br>
<p>The source code for the simple test is as follows:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int world_size, world_rank, name_len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char hostname[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(hostname, &amp;name_len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello world from processor %s, rank %d out of %d processors\n&quot;,
<br>
hostname, world_rank, world_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>What do I do now?
<br>
<p>Thanks
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p>On Mon, Mar 28, 2016 at 2:37 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Does this happen only with master ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what does
</span><br>
<span class="quotelev1">&gt; ldd mpicc
</span><br>
<span class="quotelev1">&gt; says ?
</span><br>
<span class="quotelev1">&gt; does it require both libnl and libnl3 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libnl3 is used by OpenMPI if libnl3-devel package is installed,
</span><br>
<span class="quotelev1">&gt; and this is not the case on your system
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a possible root cause is third party libs use libnl3, and the
</span><br>
<span class="quotelev1">&gt; reachable/netlink component
</span><br>
<span class="quotelev1">&gt; tries to use libnl, in this case, installing libnl3-devel should fix your
</span><br>
<span class="quotelev1">&gt; issue
</span><br>
<span class="quotelev1">&gt; /* you will need to re-configure after that */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; an other possible root cause is some third party libs use libnl and other
</span><br>
<span class="quotelev1">&gt; use libnl3,
</span><br>
<span class="quotelev1">&gt; and in this case, i am afraid there is no simple workaround.
</span><br>
<span class="quotelev1">&gt; if installing libnl3-devel did not solve your issue, you can give a try to
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/1014">https://github.com/open-mpi/ompi/pull/1014</a>
</span><br>
<span class="quotelev1">&gt; at least, it will abort with an error message that states which lib is
</span><br>
<span class="quotelev1">&gt; using libnl and which is using libnl3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am afraid the only option is to manually disable some components, so
</span><br>
<span class="quotelev1">&gt; only one flavor of lib nl is used.
</span><br>
<span class="quotelev1">&gt; that can be achieved by adding a .opal_ignore empty file in the dir of the
</span><br>
<span class="quotelev1">&gt; components you want to disable.
</span><br>
<span class="quotelev1">&gt; /* you will need to rerun autogen.pl after that */
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
<span class="quotelev1">&gt; On 3/28/2016 3:16 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The system in question is a CentOS 7 box, that has been running OpenMPI,
</span><br>
<span class="quotelev1">&gt; both the master branch and the 1.10.2 release happily until now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just now, in order to debug something, I recompiled with the following
</span><br>
<span class="quotelev1">&gt; options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./configure --enable-debug --enable-debug-symbols --disable-dlopen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The compilation and install was successful; however, mpicc now crashes
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpicc -Wall -Wextra -o mpitest mpitest.c
</span><br>
<span class="quotelev1">&gt; mpicc: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
</span><br>
<span class="quotelev1">&gt; Aborted (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Searching the mailing archive, I found two posts that describe similar
</span><br>
<span class="quotelev1">&gt; situations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/devel/2015/08/17812.php">https://www.open-mpi.org/community/lists/devel/2015/08/17812.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28016.php">http://www.open-mpi.org/community/lists/users/2015/11/28016.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the solution proposed in these, to disable verbs, is not
</span><br>
<span class="quotelev1">&gt; acceptable to me for the following reasons: I am trying to implement a new
</span><br>
<span class="quotelev1">&gt; BTL by reverse engineering the openib BTL. I am using a Qlogic HCA for this
</span><br>
<span class="quotelev1">&gt; purpose. (Please note that I cannot use PSM as I am writing code for a BTL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As there any more acceptable solutions for this? Here are the list of nl
</span><br>
<span class="quotelev1">&gt; libraries on my box:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ sudo yum list installed | grep libnl
</span><br>
<span class="quotelev1">&gt; libnl.x86_64                           1.1.4-3.el7
</span><br>
<span class="quotelev1">&gt; @anaconda
</span><br>
<span class="quotelev1">&gt; libnl-devel.x86_64                     1.1.4-3.el7
</span><br>
<span class="quotelev1">&gt; @anaconda
</span><br>
<span class="quotelev1">&gt; libnl3.x86_64                          3.2.21-10.el7
</span><br>
<span class="quotelev1">&gt; @base
</span><br>
<span class="quotelev1">&gt; libnl3-cli.x86_64                      3.2.21-10.el7
</span><br>
<span class="quotelev1">&gt; @base
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and uninstalling libnl3 is not an option either: it seems yum  wants to
</span><br>
<span class="quotelev1">&gt; uninstall around 100 odd other packages because of dependency which will
</span><br>
<span class="quotelev1">&gt; essentially render the machine unusable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Please help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28855.php">http://www.open-mpi.org/community/lists/users/2016/03/28855.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28856.php">http://www.open-mpi.org/community/lists/users/2016/03/28856.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28859/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28860.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28858.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>In reply to:</strong> <a href="28856.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28860.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28860.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
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
