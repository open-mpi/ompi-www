<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 23:49:17 2014" -->
<!-- isoreceived="20140507034917" -->
<!-- sent="Tue, 6 May 2014 20:48:30 -0700" -->
<!-- isosent="20140507034830" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="FF87D207-D1BF-4D24-9444-06674722D2EB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="146586E3640BBF4D9507B00739F551A60B1F0804_at_PRDEXMBX-02.the-lab.llnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 23:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14694.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14692.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14692.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14694.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: we see varying reports about the scalability of Slurm, especially at large cluster sizes. Last I saw/tested, there is a quadratic term that begins to dominate above 2k nodes. Others swear it is better &lt;shrug&gt;. Guess I'd be cautious and definitely test things before investing in a move - I'm not convinced.
<br>
<p><p>On May 6, 2014, at 8:37 PM, Moody, Adam T. &lt;moody20_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Chris,
</span><br>
<span class="quotelev1">&gt; I'm interested in SLURM / OpenMPI startup numbers, but I haven't done this testing myself.  We're stuck with an older version of SLURM for various internal reasons, and I'm wondering whether it's worth the effort to back port the PMI2 support.  Can you share some of the differences in times at different scales?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Christopher Samuel [samuel_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 06, 2014 8:32 PM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/05/14 12:53, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have been seeing a lot of problems with the Slurm PMI-2 support
</span><br>
<span class="quotelev2">&gt;&gt; (not in OMPI - it's the code in Slurm that is having problems). At
</span><br>
<span class="quotelev2">&gt;&gt; this time, I'm unaware of any advantage in using PMI-2 over PMI-1
</span><br>
<span class="quotelev2">&gt;&gt; in Slurm - the scaling is equally poor, and PMI-2 does not supports
</span><br>
<span class="quotelev2">&gt;&gt; any additional functionality.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know that Cray PMI-2 has a definite advantage, so I'm proposing
</span><br>
<span class="quotelev2">&gt;&gt; that we turn PMI-2 &quot;off&quot; when under Slurm unless the user
</span><br>
<span class="quotelev2">&gt;&gt; specifically requests we use it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our local testing has shown that PMI-2 in 1.7.x gives a massive
</span><br>
<span class="quotelev1">&gt; improvement in scaling when starting jobs with srun over using srun
</span><br>
<span class="quotelev1">&gt; with OMPI 1.6.x and now that OMPI 1.8.x is out we're planning on
</span><br>
<span class="quotelev1">&gt; moving to using PMI2 with OMPI and srun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using mpirun gives good performance with OMPI 1.6.x but Slurm then
</span><br>
<span class="quotelev1">&gt; gets all its memory stats wrong and if you run with CR_Core_Memory in
</span><br>
<span class="quotelev1">&gt; Slurm you have a very high risk your job will get killed incorrectly.
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
<span class="quotelev1">&gt; Version: GnuPG v1.4.14 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlNpqUwACgkQO2KABBYQAh/igwCfQSB/v3tI37Rq4z5z/0xT/BYU
</span><br>
<span class="quotelev1">&gt; 6ToAn3Qt6tOt46LQD25eHhlx+3z/sjnQ
</span><br>
<span class="quotelev1">&gt; =LEHf
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14691.php">http://www.open-mpi.org/community/lists/devel/2014/05/14691.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14692.php">http://www.open-mpi.org/community/lists/devel/2014/05/14692.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14694.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14692.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14692.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14694.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
