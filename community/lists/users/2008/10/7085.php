<?
$subject_val = "Re: [OMPI users] Working with a CellBlade cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 13:52:27 2008" -->
<!-- isoreceived="20081023175227" -->
<!-- sent="Thu, 23 Oct 2008 19:52:21 +0200" -->
<!-- isosent="20081023175221" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Working with a CellBlade cluster" -->
<!-- id="453d39990810231052j490650cw49eaf560e8121ad4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF3BC8C801.E73C431E-ON852574EB.0046E0FF-852574EB.0047763C_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Working with a CellBlade cluster<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-23 13:52:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7086.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7084.php">SLIM H.A.: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>In reply to:</strong> <a href="7083.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7086.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7086.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to <a href="https://svn.open-mpi.org/trac/ompi/milestone/Open%20MPI%201.3">https://svn.open-mpi.org/trac/ompi/milestone/Open%20MPI%201.3</a> very
<br>
soon,
<br>
but you can download trunk version <a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a>  and check
<br>
if it works for you.
<br>
<p>how can you check mapping CPUs by OS , my cat /proc/cpuinfo shows very
<br>
little info
<br>
# cat /proc/cpuinfo
<br>
processor       : 0
<br>
cpu             : Cell Broadband Engine, altivec supported
<br>
clock           : 3200.000000MHz
<br>
revision        : 48.0 (pvr 0070 3000)
<br>
processor       : 1
<br>
cpu             : Cell Broadband Engine, altivec supported
<br>
clock           : 3200.000000MHz
<br>
revision        : 48.0 (pvr 0070 3000)
<br>
processor       : 2
<br>
cpu             : Cell Broadband Engine, altivec supported
<br>
clock           : 3200.000000MHz
<br>
revision        : 48.0 (pvr 0070 3000)
<br>
processor       : 3
<br>
cpu             : Cell Broadband Engine, altivec supported
<br>
clock           : 3200.000000MHz
<br>
revision        : 48.0 (pvr 0070 3000)
<br>
timebase        : 26666666
<br>
platform        : Cell
<br>
machine         : CHRP IBM,0793-1RZ
<br>
<p><p><p>On Thu, Oct 23, 2008 at 3:00 PM, Mi Yan &lt;miyan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi, Lenny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So rank file map will be supported in OpenMPI 1.3? I'm using OpenMPI1.2.6
</span><br>
<span class="quotelev1">&gt; and did not find parameter &quot;rmaps_rank_file_&quot;.
</span><br>
<span class="quotelev1">&gt; Do you have idea when OpenMPI 1.3 will be available? OpenMPI 1.3 has quite
</span><br>
<span class="quotelev1">&gt; a few features I'm looking for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Mi
</span><br>
<span class="quotelev1">&gt; [image: Inactive hide details for &quot;Lenny Verkhovsky&quot;
</span><br>
<span class="quotelev1">&gt; &lt;lenny.verkhovsky_at_[hidden]&gt;]&quot;Lenny Verkhovsky&quot; &lt;
</span><br>
<span class="quotelev1">&gt; lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *&quot;Lenny Verkhovsky&quot; &lt;lenny.verkhovsky_at_[hidden]&gt;*
</span><br>
<span class="quotelev1">&gt;             Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             10/23/2008 05:48 AM   Please respond to
</span><br>
<span class="quotelev1">&gt;             Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Working with a CellBlade cluster
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I understand you correctly the most suitable way to do it is by
</span><br>
<span class="quotelev1">&gt; paffinity that we have in Open MPI 1.3 and the trank.
</span><br>
<span class="quotelev1">&gt; how ever usually OS is distributing processes evenly between sockets by it
</span><br>
<span class="quotelev1">&gt; self.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There still no formal FAQ due to a multiple reasons but you can read how to
</span><br>
<span class="quotelev1">&gt; use it in the attached scratch ( there were few name changings of the
</span><br>
<span class="quotelev1">&gt; params, so check with ompi_info )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shared memory is used between processes that share same machine, and openib
</span><br>
<span class="quotelev1">&gt; is used between different machines ( hostnames ), no special mca params are
</span><br>
<span class="quotelev1">&gt; needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt; Lenny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   On Sun, Oct 19, 2008 at 10:32 AM, Gilbert Grosdidier &lt;*
</span><br>
<span class="quotelev1">&gt; grodid_at_[hidden]* &lt;grodid_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Working with a CellBlade cluster (QS22), the requirement is to have one
</span><br>
<span class="quotelev1">&gt;    instance of the executable running on each socket of the blade (there
</span><br>
<span class="quotelev1">&gt;    are 2
</span><br>
<span class="quotelev1">&gt;    sockets). The application is of the 'domain decomposition' type, and
</span><br>
<span class="quotelev1">&gt;    each
</span><br>
<span class="quotelev1">&gt;    instance is required to often send/receive data with both the remote
</span><br>
<span class="quotelev1">&gt;    blades and
</span><br>
<span class="quotelev1">&gt;    the neighbor socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Question is : which specification must be used for the mca btl
</span><br>
<span class="quotelev1">&gt;    component
</span><br>
<span class="quotelev1">&gt;    to force 1) shmem type messages when communicating with this neighbor
</span><br>
<span class="quotelev1">&gt;    socket,
</span><br>
<span class="quotelev1">&gt;    while 2) using openib to communicate with the remote blades ?
</span><br>
<span class="quotelev1">&gt;    Is '-mca btl sm,openib,self' suitable for this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Also, which debug flags could be used to crosscheck that the messages
</span><br>
<span class="quotelev1">&gt;    are
</span><br>
<span class="quotelev1">&gt;    _actually_ going thru the right channel for a given channel, please ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    We are currently using OpenMPI 1.2.5 shipped with RHEL5.2 (ppc64).
</span><br>
<span class="quotelev1">&gt;    Which version do you think is currently the most optimised for these
</span><br>
<span class="quotelev1">&gt;    processors and problem type ? Should we go towards OpenMPI 1.2.8
</span><br>
<span class="quotelev1">&gt;    instead ?
</span><br>
<span class="quotelev1">&gt;    Or even try some OpenMPI 1.3 nightly build ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks in advance for your help, Gilbert.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    users mailing list*
</span><br>
<span class="quotelev1">&gt;    **users_at_[hidden]* &lt;users_at_[hidden]&gt;*
</span><br>
<span class="quotelev1">&gt;    **<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *(See attached file: RANKS_FAQ.doc)*
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-7085/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-7085/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7086.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7084.php">SLIM H.A.: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>In reply to:</strong> <a href="7083.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7086.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7086.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
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
