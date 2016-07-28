<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 00:50:24 2014" -->
<!-- isoreceived="20140507045024" -->
<!-- sent="Tue, 6 May 2014 21:49:36 -0700" -->
<!-- isosent="20140507044936" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="28E55084-FE7C-4064-BF65-2B4E89B1DD88_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="962DB391-5ACC-4751-8E23-B2D624C83E6A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-05-07 00:49:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14697.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14695.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14695.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14697.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14697.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should have looked closer to see the numbers you posted, Chris - those include time for MPI wireup. So what you are seeing is that mpirun is much more efficient at exchanging the MPI endpoint info than PMI. I suspect that PMI2 is not much better as the primary reason for the difference is that mpriun sends blobs, while PMI requires that everything be encoded into strings and sent in little pieces.
<br>
<p>Hence, mpirun can exchange the endpoint info (the dreaded &quot;modex&quot; operation) much faster, and MPI_Init completes faster. Rest of the computation should be the same, so long compute apps will see the difference narrow considerably.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On May 6, 2014, at 9:45 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ah, interesting - my comments were in respect to startup time (specifically, MPI wireup)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 6, 2014, at 8:49 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 07/05/14 13:37, Moody, Adam T. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Chris,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Adam,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm interested in SLURM / OpenMPI startup numbers, but I haven't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done this testing myself.  We're stuck with an older version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM for various internal reasons, and I'm wondering whether it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; worth the effort to back port the PMI2 support.  Can you share some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the differences in times at different scales?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've not looked at startup times I'm afraid, this was time to
</span><br>
<span class="quotelev2">&gt;&gt; solution. We noticed it with Slurm when we first started using on
</span><br>
<span class="quotelev2">&gt;&gt; x86-64 for our NAMD tests (this from a posting to the list last year
</span><br>
<span class="quotelev2">&gt;&gt; when I raised the issue and were told PMI2 would be the solution):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Slurm 2.6.0, RHEL 6.4 (latest kernel), FDR IB.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are some timings as reported as the WallClock time by NAMD 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; itself (so not including startup/tear down overhead from Slurm).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run1/slurm-93744.out:WallClock: 695.079773  CPUTime: 695.079773 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run4/slurm-94011.out:WallClock: 723.907959  CPUTime: 723.907959 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run5/slurm-94013.out:WallClock: 726.156799  CPUTime: 726.156799 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run6/slurm-94017.out:WallClock: 724.828918  CPUTime: 724.828918
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Average of 692 seconds
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run2/slurm-93746.out:WallClock: 559.311035  CPUTime: 559.311035 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run3/slurm-93910.out:WallClock: 544.116333  CPUTime: 544.116333 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run7/slurm-94019.out:WallClock: 586.072693  CPUTime: 586.072693
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Average of 563 seconds.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So that's about 23% slower.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything is identical (they're all symlinks to the same golden 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master) *except* for the srun / mpirun which is modified by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copying the batch script and substituting mpirun for srun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - -- 
</span><br>
<span class="quotelev2">&gt;&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt;&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev2">&gt;&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; Version: GnuPG v1.4.14 (GNU/Linux)
</span><br>
<span class="quotelev2">&gt;&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; iEYEARECAAYFAlNprUUACgkQO2KABBYQAh9rLACfcZc4HR/u6G0bJejM3C/my7Nw
</span><br>
<span class="quotelev2">&gt;&gt; 8b4AnRasOMvKZjpjpyKkbplc6/Iq9qBK
</span><br>
<span class="quotelev2">&gt;&gt; =pqH9
</span><br>
<span class="quotelev2">&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14694.php">http://www.open-mpi.org/community/lists/devel/2014/05/14694.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14697.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14695.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14695.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14697.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14697.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
