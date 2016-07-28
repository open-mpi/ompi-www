<?
$subject_val = "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 11:25:55 2015" -->
<!-- isoreceived="20150629152555" -->
<!-- sent="Mon, 29 Jun 2015 09:25:54 -0600" -->
<!-- isosent="20150629152554" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband" -->
<!-- id="20150629152554.GD1384_at_pn1246003.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="558FBC2F.9080501_at_grs-sim.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 11:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27211.php">Åke Sandgren: "[OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Previous message:</strong> <a href="27209.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27206.php">Marc-Andre Hermanns: "[OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27219.php">Marc-Andre Hermanns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Reply:</strong> <a href="27219.php">Marc-Andre Hermanns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Reply:</strong> <a href="27227.php">Thomas Jahns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not a configuration issue. On 1.8.x and master we use two-sided
<br>
communication to emulation one-sided. Since we do not currently have
<br>
async progress this requires the target to call into MPI to progress RMA
<br>
communication.
<br>
<p>This will change in 2.x. I will be adding a new component that does
<br>
real RMA on supported networks (ib, gemini, aries). At some point we
<br>
will also have support for async progress which will enable
<br>
passive-target on other networks.
<br>
<p>-Nathan
<br>
<p>On Sun, Jun 28, 2015 at 11:19:43AM +0200, Marc-Andre Hermanns wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am currently investigating a microbenchmark with Open MPI 1.8.3 on
</span><br>
<span class="quotelev1">&gt; Infiniband and was wondering whether Open MPI provides target-side
</span><br>
<span class="quotelev1">&gt; progress for incoming lock requests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems lock requests are only handled if the target calls into the
</span><br>
<span class="quotelev1">&gt; MPI API and I was wondering if that is a configuration issue (and I
</span><br>
<span class="quotelev1">&gt; have to set some runtime variable) or if it is the general case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Marc-Andre
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Marc-Andre Hermanns
</span><br>
<span class="quotelev1">&gt; J&#252;lich Aachen Research Alliance,
</span><br>
<span class="quotelev1">&gt; High Performance Computing (JARA-HPC)
</span><br>
<span class="quotelev1">&gt; German Research School for Simulation Sciences GmbH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Schinkelstrasse 2
</span><br>
<span class="quotelev1">&gt; 52062 Aachen
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone: +49 2461 61 2509
</span><br>
<span class="quotelev1">&gt; Fax: +49 241 80 6 99753
</span><br>
<span class="quotelev1">&gt; www.grs-sim.de/parallel
</span><br>
<span class="quotelev1">&gt; email: m.a.hermanns_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27206.php">http://www.open-mpi.org/community/lists/users/2015/06/27206.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27211.php">Åke Sandgren: "[OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Previous message:</strong> <a href="27209.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27206.php">Marc-Andre Hermanns: "[OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27219.php">Marc-Andre Hermanns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Reply:</strong> <a href="27219.php">Marc-Andre Hermanns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Reply:</strong> <a href="27227.php">Thomas Jahns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
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
