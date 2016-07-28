<?
$subject_val = "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 05:46:52 2015" -->
<!-- isoreceived="20150630094652" -->
<!-- sent="Tue, 30 Jun 2015 11:46:49 +0200" -->
<!-- isosent="20150630094649" -->
<!-- name="Marc-Andre Hermanns" -->
<!-- email="m.a.hermanns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband" -->
<!-- id="55926589.7070304_at_grs-sim.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55925DE8.8000006_at_dkrz.de" -->
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
<strong>Date:</strong> 2015-06-30 05:46:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27229.php">Saliya Ekanayake: "[OMPI users] Allgather Implementation Details"</a>
<li><strong>Previous message:</strong> <a href="27227.php">Thomas Jahns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>In reply to:</strong> <a href="27227.php">Thomas Jahns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Thomas,
<br>
<p>as far as I know MPI does _not_ guarantee asynchronous progress
<br>
(unlike OpenSHMEM) because it would require some implementations to
<br>
start a progress thread.
<br>
<p>Jeff has a nice blog post regarding this:
<br>
<a href="http://blogs.cisco.com/performance/mpi-progress">http://blogs.cisco.com/performance/mpi-progress</a>
<br>
<p>I was surprised to see this behavior in my microbenchmark as I thought
<br>
Infiband would provide good hardware support for rDMA (for some time)
<br>
and this issue was &quot;solved&quot; in the sense &quot;if you have a modern
<br>
network, don't worry about it&quot;.
<br>
<p>I don't think it's unique to Open MPI, as I noticed that MPICH-based
<br>
implementations seem to behave similarly (without have looked into
<br>
their actual sources). It seems the MVAPICH people are working heavily
<br>
on this, as I see their papers pop up once in a while on this topic,
<br>
though.
<br>
<p>Sadly, this was a showstopper for colleagues of mine checking out MPI
<br>
RMA for their algorithm implementation, as this progress-related
<br>
waiting time was just too high. We are looking into a p2p-based
<br>
solution now (although RMA would have been more elegant).
<br>
<p>Cheers,
<br>
Marc-Andre
<br>
<p>On 30.06.15 11:14, Thomas Jahns wrote:
<br>
<span class="quotelev1">&gt; On 06/29/15 17:25, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is not a configuration issue. On 1.8.x and master we use two-sided
</span><br>
<span class="quotelev2">&gt;&gt; communication to emulation one-sided. Since we do not currently have
</span><br>
<span class="quotelev2">&gt;&gt; async progress this requires the target to call into MPI to progress
</span><br>
<span class="quotelev2">&gt;&gt; RMA
</span><br>
<span class="quotelev2">&gt;&gt; communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will change in 2.x. I will be adding a new component that does
</span><br>
<span class="quotelev2">&gt;&gt; real RMA on supported networks (ib, gemini, aries). At some point we
</span><br>
<span class="quotelev2">&gt;&gt; will also have support for async progress which will enable
</span><br>
<span class="quotelev2">&gt;&gt; passive-target on other networks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But isn't aynch progress required for MPI 2.x conformance? The Open
</span><br>
<span class="quotelev1">&gt; MPI 1.6.5 headers I have #define MPI_VERSION to 2. The 1.8.4 headers I
</span><br>
<span class="quotelev1">&gt; have even define it to 3. Why isn't a background thread used on
</span><br>
<span class="quotelev1">&gt; platforms that don't have supported networks?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thomas
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27227.php">http://www.open-mpi.org/community/lists/users/2015/06/27227.php</a>
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27228/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27229.php">Saliya Ekanayake: "[OMPI users] Allgather Implementation Details"</a>
<li><strong>Previous message:</strong> <a href="27227.php">Thomas Jahns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>In reply to:</strong> <a href="27227.php">Thomas Jahns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- nextthread="start" -->
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
