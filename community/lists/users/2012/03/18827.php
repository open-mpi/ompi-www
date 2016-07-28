<?
$subject_val = "Re: [OMPI users] MPI_Waitall hangs and querying";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 11:40:19 2012" -->
<!-- isoreceived="20120321154019" -->
<!-- sent="Wed, 21 Mar 2012 11:40:12 -0400" -->
<!-- isosent="20120321154012" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Waitall hangs and querying" -->
<!-- id="D3540363-F1FF-4C2E-9245-F2E410A42EA2_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1A8179D9-8738-4CF5-AE10-54A451F56014_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Waitall hangs and querying<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-21 11:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18828.php">Júlio Hoffimann: "[OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18826.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>In reply to:</strong> <a href="18826.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will do,
<br>
<p>Right now I have asked the user to try rebuilding with the newest openmpi just to be safe.
<br>
<p>Interesting behavior rank0 the ib counters (using collctl) never gets a packet in, only packets out.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Mar 21, 2012, at 11:37 AM, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 21, 2012, at 11:34 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tcp with this code?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it matter enough for debugging runs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can we disable the psm mtl and use the verbs emulation on qlogic?  While the qlogic verbs isn't that great it is still much faster in my tests than tcp.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a particular reason to pick tcp?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really.  My only thought was that verbs over qlogic devices isn't the most stable stack around (they spend all their effort on PSM, not verbs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18828.php">Júlio Hoffimann: "[OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18826.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>In reply to:</strong> <a href="18826.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
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
