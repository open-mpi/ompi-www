<?
$subject_val = "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 14:30:04 2015" -->
<!-- isoreceived="20150629183004" -->
<!-- sent="Mon, 29 Jun 2015 20:29:44 +0200" -->
<!-- isosent="20150629182944" -->
<!-- name="Marc-Andre Hermanns" -->
<!-- email="m.a.hermanns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband" -->
<!-- id="55918E98.9030809_at_grs-sim.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150629152554.GD1384_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Marc-Andre Hermanns (<em>m.a.hermanns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 14:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27220.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27218.php">&#197;ke Sandgren: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27227.php">Thomas Jahns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p><span class="quotelev1">&gt; This is not a configuration issue. On 1.8.x and master we use two-sided
</span><br>
<span class="quotelev1">&gt; communication to emulation one-sided. Since we do not currently have
</span><br>
<span class="quotelev1">&gt; async progress this requires the target to call into MPI to progress RMA
</span><br>
<span class="quotelev1">&gt; communication.
</span><br>
<p>thanks for the clarification. Is there special handling for intra-node
<br>
locks (through shared memory?) or does the same restriction apply here
<br>
as well?
<br>
<p><span class="quotelev1">&gt; This will change in 2.x. I will be adding a new component that does
</span><br>
<span class="quotelev1">&gt; real RMA on supported networks (ib, gemini, aries). At some point we
</span><br>
<span class="quotelev1">&gt; will also have support for async progress which will enable
</span><br>
<span class="quotelev1">&gt; passive-target on other networks.
</span><br>
<p>That sounds great. :-D
<br>
<p>Cheers,
<br>
Marc-Andre
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Jun 28, 2015 at 11:19:43AM +0200, Marc-Andre Hermanns wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am currently investigating a microbenchmark with Open MPI 1.8.3 on
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband and was wondering whether Open MPI provides target-side
</span><br>
<span class="quotelev2">&gt;&gt; progress for incoming lock requests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems lock requests are only handled if the target calls into the
</span><br>
<span class="quotelev2">&gt;&gt; MPI API and I was wondering if that is a configuration issue (and I
</span><br>
<span class="quotelev2">&gt;&gt; have to set some runtime variable) or if it is the general case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Marc-Andre
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Marc-Andre Hermanns
</span><br>
<span class="quotelev2">&gt;&gt; J&#252;lich Aachen Research Alliance,
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing (JARA-HPC)
</span><br>
<span class="quotelev2">&gt;&gt; German Research School for Simulation Sciences GmbH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Schinkelstrasse 2
</span><br>
<span class="quotelev2">&gt;&gt; 52062 Aachen
</span><br>
<span class="quotelev2">&gt;&gt; Germany
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +49 2461 61 2509
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +49 241 80 6 99753
</span><br>
<span class="quotelev2">&gt;&gt; www.grs-sim.de/parallel
</span><br>
<span class="quotelev2">&gt;&gt; email: m.a.hermanns_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27206.php">http://www.open-mpi.org/community/lists/users/2015/06/27206.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27210.php">http://www.open-mpi.org/community/lists/users/2015/06/27210.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Marc-Andre Hermanns
J&#252;lich Aachen Research Alliance,
High Performance Computing (JARA-HPC)
German Research School for Simulation Sciences GmbH
Schinkelstrasse 2
52062 Aachen
Germany
Phone: +49 2461 61 2509
Fax: +49 241 80 6 99753
www.grs-sim.de/parallel
email: m.a.hermanns_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27219/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27220.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27218.php">&#197;ke Sandgren: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27227.php">Thomas Jahns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
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
