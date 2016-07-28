<?
$subject_val = "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  7 02:56:04 2013" -->
<!-- isoreceived="20130807065604" -->
<!-- sent="Wed, 07 Aug 2013 16:55:56 +1000" -->
<!-- isosent="20130807065556" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)" -->
<!-- id="5201EF7C.5020107_at_unimelb.edu.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5201E6C1.2010704_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-07 02:55:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12706.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] Re: slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Previous message:</strong> <a href="12704.php">Christopher Samuel: "Re: [OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>In reply to:</strong> <a href="12703.php">Christopher Samuel: "[OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12716.php">Ralph Castain: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Reply:</strong> <a href="12716.php">Ralph Castain: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 07/08/13 16:19, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Anyone seen anything similar, or any ideas on what could be going
</span><br>
<span class="quotelev1">&gt; on?
</span><br>
<p>Sorry, this was with:
<br>
<p># ACCOUNTING
<br>
JobAcctGatherType=jobacct_gather/linux
<br>
JobAcctGatherFrequency=30
<br>
<p>Since those initial tests we've started enforcing memory limits (the
<br>
system is not yet in full production) and found that this causes jobs
<br>
to get killed.
<br>
<p>We tried the cgroups gathering method, but jobs still die with mpirun
<br>
and now the numbers don't seem to right for mpirun or srun either:
<br>
<p>mpirun (killed):
<br>
<p>[samuel_at_barcoo-test Mem]$ sacct -j 94564 -o JobID,MaxRSS,MaxVMSize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JobID     MaxRSS  MaxVMSize
<br>
- ------------ ---------- ----------
<br>
94564
<br>
94564.batch    -523362K          0
<br>
94564.0         394525K          0
<br>
<p>srun:
<br>
<p>[samuel_at_barcoo-test Mem]$ sacct -j 94565 -o JobID,MaxRSS,MaxVMSize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JobID     MaxRSS  MaxVMSize
<br>
- ------------ ---------- ----------
<br>
94565
<br>
94565.batch        998K          0
<br>
94565.0          88663K          0
<br>
<p><p>All the best,
<br>
Chris
<br>
- -- 
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
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlIB73wACgkQO2KABBYQAh+kwACfYnMbONcpxD2lsM5i4QDw5r93
<br>
KpMAn2hPUxMJ62u2gZIUGl5I0bQ6lllk
<br>
=jYrC
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12706.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] Re: slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Previous message:</strong> <a href="12704.php">Christopher Samuel: "Re: [OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>In reply to:</strong> <a href="12703.php">Christopher Samuel: "[OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12716.php">Ralph Castain: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Reply:</strong> <a href="12716.php">Ralph Castain: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
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
