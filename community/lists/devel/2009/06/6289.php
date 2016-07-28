<?
$subject_val = "Re: [OMPI devel] connect management for multirail (Open-)MX";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 20 04:26:27 2009" -->
<!-- isoreceived="20090620082627" -->
<!-- sent="Sat, 20 Jun 2009 10:26:55 +0200" -->
<!-- isosent="20090620082655" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] connect management for multirail (Open-)MX" -->
<!-- id="4A3C9D4F.7090002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62B2C263-8240-46C7-A1FA-BC25AE49F92A_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] connect management for multirail (Open-)MX<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-20 04:26:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6290.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6288.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>In reply to:</strong> <a href="6261.php">George Bosilca: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Yes, in Open MPI the connections are usually created on demand. As far
</span><br>
<span class="quotelev1">&gt; as I know there are few devices that do not abide to this &quot;law&quot;, but
</span><br>
<span class="quotelev1">&gt; MX is not one of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be more precise on how the connections are established, if we say
</span><br>
<span class="quotelev1">&gt; that each node has two rails and we're doing a ping-pong, the first
</span><br>
<span class="quotelev1">&gt; message from p0 to p1 will connect the first NIC, and the second
</span><br>
<span class="quotelev1">&gt; message the second NIC (here I made the assumption that both network
</span><br>
<span class="quotelev1">&gt; are similar). Moreover in MX, the connection is not symmetric, so your
</span><br>
<span class="quotelev1">&gt; (1) and (2) might happens simultaneously.
</span><br>
<p>Ok. I still don't see why I couldn't reproduce the problem with MX when
<br>
the progression thread was disabled. But I found a way to work-around
<br>
the problem in Open-MX so we should be good now.
<br>
<p><span class="quotelev1">&gt; Does the code contain an MPI_Barrier ? If yes, this might be why you
</span><br>
<span class="quotelev1">&gt; see the sequence (1), (2), (3) and (4) ...
</span><br>
<p>It was hanging during startup in the Intel MPI Benchmarks. Looks like
<br>
MPI_Comm_split() in IMB_set_communicator() was causing the problem.
<br>
<p>thanks a lot
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6290.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6288.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>In reply to:</strong> <a href="6261.php">George Bosilca: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
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
