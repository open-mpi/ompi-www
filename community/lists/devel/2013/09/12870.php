<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  5 10:19:23 2013" -->
<!-- isoreceived="20130905141923" -->
<!-- sent="Thu, 5 Sep 2013 07:19:19 -0700" -->
<!-- isosent="20130905141919" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="0180D8F3-4F61-4DDB-AD01-B8D69E930D47_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="522809EB.3040702_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-05 10:19:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12871.php">Hjelm, Nathan T: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12869.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12869.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12871.php">Hjelm, Nathan T: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12871.php">Hjelm, Nathan T: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, nothing significant there. Afraid I've exhausted my thoughts on why the difference might exist.
<br>
<p>Anyone else care to chime in?
<br>
<p>On Sep 4, 2013, at 9:34 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/09/13 12:50, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff and I were looking at a similar issue today and suddenly 
</span><br>
<span class="quotelev2">&gt;&gt; realized that the mappings were different - i.e., what ranks are
</span><br>
<span class="quotelev2">&gt;&gt; on what nodes differs depending on how you launch. You might want
</span><br>
<span class="quotelev2">&gt;&gt; to check if that's the issue here as well. Just launch the
</span><br>
<span class="quotelev2">&gt;&gt; attached program using mpirun vs srun and check to see if the maps
</span><br>
<span class="quotelev2">&gt;&gt; are the same or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Very interesting, the ranks to node mappings are identical in all
</span><br>
<span class="quotelev1">&gt; cases (mpirun and srun for 1.6.5 and my test 1.7.3 snapshot) but what
</span><br>
<span class="quotelev1">&gt; is different is as follows.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the 1.6.5 build I see mpirun report:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; number 0 universe size 64 universe envar 64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; whereas srun report:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; number 1 universe size 64 universe envar NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the 1.7.3 snapshot both report &quot;number 0&quot; so the only difference
</span><br>
<span class="quotelev1">&gt; there is that mpirun has:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; envar 64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; whereas srun has:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; envar NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are these differences significant?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm intrigued that the problem child (srun 1.6.5) is the only one
</span><br>
<span class="quotelev1">&gt; where number is 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlIoCesACgkQO2KABBYQAh+0NACeK9uyDk3UZerufAopuQRxhR/T
</span><br>
<span class="quotelev1">&gt; 4skAmwS/X+8jNOPlGt4H/t5yRK8vmMer
</span><br>
<span class="quotelev1">&gt; =8TGu
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12871.php">Hjelm, Nathan T: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12869.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12869.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12871.php">Hjelm, Nathan T: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12871.php">Hjelm, Nathan T: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
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
