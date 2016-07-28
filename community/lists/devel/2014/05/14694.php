<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 23:49:28 2014" -->
<!-- isoreceived="20140507034928" -->
<!-- sent="Wed, 07 May 2014 13:49:25 +1000" -->
<!-- isosent="20140507034925" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="5369AD45.70107_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 23:49:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14695.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14693.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14692.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14695.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14695.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 07/05/14 13:37, Moody, Adam T. wrote:
<br>
<p><span class="quotelev1">&gt; Hi Chris,
</span><br>
<p>Hi Adam,
<br>
<p><span class="quotelev1">&gt; I'm interested in SLURM / OpenMPI startup numbers, but I haven't
</span><br>
<span class="quotelev1">&gt; done this testing myself.  We're stuck with an older version of
</span><br>
<span class="quotelev1">&gt; SLURM for various internal reasons, and I'm wondering whether it's
</span><br>
<span class="quotelev1">&gt; worth the effort to back port the PMI2 support.  Can you share some
</span><br>
<span class="quotelev1">&gt; of the differences in times at different scales?
</span><br>
<p>We've not looked at startup times I'm afraid, this was time to
<br>
solution. We noticed it with Slurm when we first started using on
<br>
x86-64 for our NAMD tests (this from a posting to the list last year
<br>
when I raised the issue and were told PMI2 would be the solution):
<br>
<p><span class="quotelev1">&gt; Slurm 2.6.0, RHEL 6.4 (latest kernel), FDR IB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are some timings as reported as the WallClock time by NAMD 
</span><br>
<span class="quotelev1">&gt; itself (so not including startup/tear down overhead from Slurm).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; run1/slurm-93744.out:WallClock: 695.079773  CPUTime: 695.079773 
</span><br>
<span class="quotelev1">&gt; run4/slurm-94011.out:WallClock: 723.907959  CPUTime: 723.907959 
</span><br>
<span class="quotelev1">&gt; run5/slurm-94013.out:WallClock: 726.156799  CPUTime: 726.156799 
</span><br>
<span class="quotelev1">&gt; run6/slurm-94017.out:WallClock: 724.828918  CPUTime: 724.828918
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Average of 692 seconds
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; run2/slurm-93746.out:WallClock: 559.311035  CPUTime: 559.311035 
</span><br>
<span class="quotelev1">&gt; run3/slurm-93910.out:WallClock: 544.116333  CPUTime: 544.116333 
</span><br>
<span class="quotelev1">&gt; run7/slurm-94019.out:WallClock: 586.072693  CPUTime: 586.072693
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Average of 563 seconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So that's about 23% slower.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything is identical (they're all symlinks to the same golden 
</span><br>
<span class="quotelev1">&gt; master) *except* for the srun / mpirun which is modified by
</span><br>
<span class="quotelev1">&gt; copying the batch script and substituting mpirun for srun.
</span><br>
<p><p><p>- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.14 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlNprUUACgkQO2KABBYQAh9rLACfcZc4HR/u6G0bJejM3C/my7Nw
<br>
8b4AnRasOMvKZjpjpyKkbplc6/Iq9qBK
<br>
=pqH9
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14695.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14693.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14692.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14695.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14695.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
