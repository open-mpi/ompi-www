<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 23:37:54 2014" -->
<!-- isoreceived="20140507033754" -->
<!-- sent="Wed, 7 May 2014 03:37:52 +0000" -->
<!-- isosent="20140507033752" -->
<!-- name="Moody, Adam T." -->
<!-- email="moody20_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="146586E3640BBF4D9507B00739F551A60B1F0804_at_PRDEXMBX-02.the-lab.llnl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5369A94C.1000801_at_unimelb.edu.au" -->
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
<strong>From:</strong> Moody, Adam T. (<em>moody20_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 23:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14693.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14691.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14691.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14693.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14693.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14694.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris,
I'm interested in SLURM / OpenMPI startup numbers, but I haven't done this testing myself.  We're stuck with an older version of SLURM for various internal reasons, and I'm wondering whether it's worth the effort to back port the PMI2 support.  Can you share some of the differences in times at different scales?
Thanks,
-Adam
________________________________________
From: devel [devel-bounces_at_[hidden]] on behalf of Christopher Samuel [samuel_at_[hidden]]
Sent: Tuesday, May 06, 2014 8:32 PM
To: devel_at_[hidden]
Subject: Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested

-----BEGIN PGP SIGNED MESSAGE-----
Hash: SHA1

On 07/05/14 12:53, Ralph Castain wrote:

&gt; We have been seeing a lot of problems with the Slurm PMI-2 support
&gt; (not in OMPI - it's the code in Slurm that is having problems). At
&gt; this time, I'm unaware of any advantage in using PMI-2 over PMI-1
&gt; in Slurm - the scaling is equally poor, and PMI-2 does not supports
&gt; any additional functionality.
&gt;
&gt; I know that Cray PMI-2 has a definite advantage, so I'm proposing
&gt; that we turn PMI-2 &quot;off&quot; when under Slurm unless the user
&gt; specifically requests we use it.

Our local testing has shown that PMI-2 in 1.7.x gives a massive
improvement in scaling when starting jobs with srun over using srun
with OMPI 1.6.x and now that OMPI 1.8.x is out we're planning on
moving to using PMI2 with OMPI and srun.

Using mpirun gives good performance with OMPI 1.6.x but Slurm then
gets all its memory stats wrong and if you run with CR_Core_Memory in
Slurm you have a very high risk your job will get killed incorrectly.

All the best,
Chris
- --
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>

-----BEGIN PGP SIGNATURE-----
Version: GnuPG v1.4.14 (GNU/Linux)
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>

iEYEARECAAYFAlNpqUwACgkQO2KABBYQAh/igwCfQSB/v3tI37Rq4z5z/0xT/BYU
6ToAn3Qt6tOt46LQD25eHhlx+3z/sjnQ
=LEHf
-----END PGP SIGNATURE-----
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14691.php">http://www.open-mpi.org/community/lists/devel/2014/05/14691.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14693.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14691.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14691.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14693.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14693.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14694.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
