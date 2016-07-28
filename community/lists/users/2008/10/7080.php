<?
$subject_val = "Re: [OMPI users] Working with a CellBlade cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 05:48:53 2008" -->
<!-- isoreceived="20081023094853" -->
<!-- sent="Thu, 23 Oct 2008 11:48:47 +0200" -->
<!-- isosent="20081023094847" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Working with a CellBlade cluster" -->
<!-- id="453d39990810230248n2aecf90ck3fc93d07cb8f28b5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.58.0810191007140.23339_at_lxplus252.cern.ch" -->
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
<strong>Date:</strong> 2008-10-23 05:48:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7081.php">Julien Devriendt: "[OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Previous message:</strong> <a href="7079.php">Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;): "[OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="7032.php">Gilbert Grosdidier: "[OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7082.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7082.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7083.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>If I understand you correctly the most suitable way to do it is by paffinity
<br>
that we have in Open MPI 1.3 and the trank.
<br>
how ever usually OS is distributing processes evenly between sockets by it
<br>
self.
<br>
<p>There still no formal FAQ due to a multiple reasons but you can read how to
<br>
use it in the attached scratch ( there were few name changings of the
<br>
params, so check with ompi_info )
<br>
<p>shared memory is used between processes that share same machine, and openib
<br>
is used between different machines ( hostnames ), no special mca params are
<br>
needed.
<br>
<p>Best Regards
<br>
Lenny,
<br>
<p><p><p><p>On Sun, Oct 19, 2008 at 10:32 AM, Gilbert Grosdidier &lt;grodid_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  Working with a CellBlade cluster (QS22), the requirement is to have one
</span><br>
<span class="quotelev1">&gt; instance of the executable running on each socket of the blade (there are 2
</span><br>
<span class="quotelev1">&gt; sockets). The application is of the 'domain decomposition' type, and each
</span><br>
<span class="quotelev1">&gt; instance is required to often send/receive data with both the remote blades
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; the neighbor socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Question is : which specification must be used for the mca btl component
</span><br>
<span class="quotelev1">&gt; to force 1) shmem type messages when communicating with this neighbor
</span><br>
<span class="quotelev1">&gt; socket,
</span><br>
<span class="quotelev1">&gt; while 2) using openib to communicate with the remote blades ?
</span><br>
<span class="quotelev1">&gt; Is '-mca btl sm,openib,self' suitable for this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Also, which debug flags could be used to crosscheck that the messages are
</span><br>
<span class="quotelev1">&gt; _actually_ going thru the right channel for a given channel, please ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  We are currently using OpenMPI 1.2.5 shipped with RHEL5.2 (ppc64).
</span><br>
<span class="quotelev1">&gt; Which version do you think is currently the most optimised for these
</span><br>
<span class="quotelev1">&gt; processors and problem type ? Should we go towards OpenMPI 1.2.8 instead ?
</span><br>
<span class="quotelev1">&gt; Or even try some OpenMPI 1.3 nightly build ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks in advance for your help,                  Gilbert.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/msword attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7080/RANKS_FAQ.doc">RANKS_FAQ.doc</a>
</ul>
<!-- attachment="RANKS_FAQ.doc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7081.php">Julien Devriendt: "[OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Previous message:</strong> <a href="7079.php">Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;): "[OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="7032.php">Gilbert Grosdidier: "[OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7082.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7082.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7083.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
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
