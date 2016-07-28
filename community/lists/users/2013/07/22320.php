<?
$subject_val = "Re: [OMPI users] knem/openmpi performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 15 03:43:26 2013" -->
<!-- isoreceived="20130715074326" -->
<!-- sent="Mon, 15 Jul 2013 09:43:18 +0200" -->
<!-- isosent="20130715074318" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem/openmpi performance?" -->
<!-- id="05f04d27-302e-45eb-af08-7c463082b1b1_at_HUB1.rwth-ad.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F7152DA_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem/openmpi performance?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-15 03:43:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22321.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22319.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22321.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22321.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22331.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/12/13 12:55, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; FWIW: a long time ago (read: many Open MPI / knem versions ago),
</span><br>
<span class="quotelev1">&gt; I did a few benchmarks with knem vs. no knem Open MPI installations.
</span><br>
<span class="quotelev1">&gt; IIRC, I used the typical suspects like NetPIPE, the NPBs, etc.
</span><br>
<span class="quotelev1">&gt; There was a modest performance improvement (I don't remember the numbers offhand);
</span><br>
<span class="quotelev1">&gt; it was a smaller improvement than I had hoped for
</span><br>
<span class="quotelev1">&gt; -- particularly in point-to-point message passing latency (e.g., via NetPIPE).
</span><br>
<p>Jeff, I would turn the question the other way around:
<br>
<p>- are there any penalties when using KNEM?
<br>
<p>We have a couple of Really Big Nodes (128 cores) with non-huge memory bandwidth 
<br>
(because coupled of 4x standalone nodes with 4 sockets each). So cutting the 
<br>
bandwidth in halves on these nodes sound like Very Good Thing.
<br>
<p>But otherwise we've 1500+ nodes with 2 sockets and 24GB memory only and we do 
<br>
not wanna to disturb the production on these nodes.... (and different MPI 
<br>
versions for different nodes are doofy).
<br>
<p>Best
<br>
<p>Paul
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22320/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22321.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22319.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22321.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22321.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22331.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
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
