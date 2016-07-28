<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 10:07:20 2009" -->
<!-- isoreceived="20090520140720" -->
<!-- sent="Wed, 20 May 2009 16:07:12 +0200" -->
<!-- isosent="20090520140712" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="200905201607.15884.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A13FE75.1040102_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] scaling problem with openmpi<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 10:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9404.php">Lippert, Ross: "[OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Previous message:</strong> <a href="9402.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 20 May 2009, Rolf Vandevaart wrote:
<br>
...
<br>
<span class="quotelev1">&gt; If I am understanding what is happening, it looks like the original
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall made use of three algorithms.  (You can look in
</span><br>
<span class="quotelev1">&gt; coll_tuned_decision_fixed.c)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If message size &lt; 200 or communicator size &gt; 12
</span><br>
<span class="quotelev1">&gt;    bruck
</span><br>
<span class="quotelev1">&gt; else if message size &lt; 3000
</span><br>
<span class="quotelev1">&gt;    basic linear
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;    pairwise
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<p>And 3000 was the observed threshold for bad behaviour so it seems very likely 
<br>
that &quot;basic linear&quot; was the culprit. My testing would suggest that &quot;pairwise&quot; 
<br>
was a good choice for ~3000 (but maybe bruck, as configured by Pavel, is good 
<br>
too).
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt; With the file Pavel has provided things have changed to the following.
</span><br>
<span class="quotelev1">&gt; (maybe someone can confirm)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If message size &lt; 8192
</span><br>
<span class="quotelev1">&gt;    bruck
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;    pairwise
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9403/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9404.php">Lippert, Ross: "[OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>Previous message:</strong> <a href="9402.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
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
