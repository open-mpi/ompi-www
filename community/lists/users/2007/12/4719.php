<?
$subject_val = "[OMPI users] Fwd: R npRmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 16:08:33 2007" -->
<!-- isoreceived="20071218210833" -->
<!-- sent="Tue, 18 Dec 2007 16:08:27 -0500" -->
<!-- isosent="20071218210827" -->
<!-- name="Randy Heiland" -->
<!-- email="heiland_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: R npRmpi" -->
<!-- id="30D13157-B27B-4B11-BCFB-5C86B469E019_at_indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071218151346.ns6cmh8ogocwg0g8_at_webmail.iu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: R npRmpi<br>
<strong>From:</strong> Randy Heiland (<em>heiland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 16:08:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4720.php">Caird, Andrew J: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>Previous message:</strong> <a href="4718.php">Terry Frankcombe: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4720.php">Caird, Andrew J: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>Reply:</strong> <a href="4720.php">Caird, Andrew J: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>Reply:</strong> <a href="4721.php">Dirk Eddelbuettel: "Re: [OMPI users] Fwd: R npRmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The pkg in question is here:  <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/">http://www.stats.uwo.ca/faculty/yu/Rmpi/</a>
<br>
<p>The question is:  has anyone on this list got OpenMPI working for  
<br>
this pkg?  Any suggestions?
<br>
<p>thanks, Randy
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject: R npRmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Been looking into the npRmpi problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can get a segfault executing
</span><br>
<span class="quotelev2">&gt;&gt; mpi.spawn.Rslaves()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The documentation .html files under npRmpi contains the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;mpi.spawn.Rslaves to spawn R slaves on selected hosts. This is
</span><br>
<span class="quotelev1">&gt; a LAM-MPI specific function.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lamhosts()
</span><br>
<span class="quotelev1">&gt; sh: lamnodes: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The documentation for nearly all mpi.xxx.xxx calls send you to
</span><br>
<span class="quotelev1">&gt; www.lam-mpi.org for more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks for all the world this package depends on LAM-MPI which
</span><br>
<span class="quotelev1">&gt; is not installed on Quarry. I don't think pointing the build
</span><br>
<span class="quotelev1">&gt; at an OpenMPI install will help. The .c sources will compile
</span><br>
<span class="quotelev1">&gt; just fine but when R goes to use them it refers to LAM-MPI
</span><br>
<span class="quotelev1">&gt; dependent functions and behaves  badly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4719/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4720.php">Caird, Andrew J: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>Previous message:</strong> <a href="4718.php">Terry Frankcombe: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4720.php">Caird, Andrew J: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>Reply:</strong> <a href="4720.php">Caird, Andrew J: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>Reply:</strong> <a href="4721.php">Dirk Eddelbuettel: "Re: [OMPI users] Fwd: R npRmpi"</a>
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
