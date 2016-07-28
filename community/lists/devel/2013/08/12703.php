<?
$subject_val = "[OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  7 02:18:48 2013" -->
<!-- isoreceived="20130807061848" -->
<!-- sent="Wed, 07 Aug 2013 16:18:41 +1000" -->
<!-- isosent="20130807061841" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)" -->
<!-- id="5201E6C1.2010704_at_unimelb.edu.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="51EE2B1A.8080703_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> [OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-07 02:18:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12704.php">Christopher Samuel: "Re: [OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Previous message:</strong> <a href="12702.php">David Goodell (dgoodell): "Re: [OMPI devel] OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12675.php">Christopher Samuel: "[OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12704.php">Christopher Samuel: "Re: [OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Reply:</strong> <a href="12704.php">Christopher Samuel: "Re: [OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Reply:</strong> <a href="12705.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 23/07/13 17:06, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Bringing up a new IBM SandyBridge cluster I'm running a NAMD test 
</span><br>
<span class="quotelev1">&gt; case and noticed that if I run it with srun rather than mpirun it 
</span><br>
<span class="quotelev1">&gt; goes over 20% slower.
</span><br>
<p>Following on from this issue, we've found that whilst mpirun gives
<br>
acceptable performance the memory accounting doesn't appear to be correct.
<br>
<p>Anyone seen anything similar, or any ideas on what could be going on?
<br>
<p>Here are two identical NAMD jobs running over 69 nodes using 16 nodes
<br>
per core, this one launched with mpirun (Open-MPI 1.6.5):
<br>
<p><p>==&gt; slurm-94491.out &lt;==
<br>
WallClock: 101.176193  CPUTime: 101.176193  Memory: 1268.554688 MB
<br>
End of program
<br>
<p>[samuel_at_barcoo-test Mem]$ sacct -j 94491 -o JobID,MaxRSS,MaxVMSize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JobID     MaxRSS  MaxVMSize
<br>
- ------------ ---------- ----------
<br>
94491
<br>
94491.batch    6504068K  11167820K
<br>
94491.0        5952048K   9028060K
<br>
<p><p>This one launched with srun (about 60% slower):
<br>
<p>==&gt; slurm-94505.out &lt;==
<br>
WallClock: 163.314163  CPUTime: 163.314163  Memory: 1253.511719 MB
<br>
End of program
<br>
<p>[samuel_at_barcoo-test Mem]$ sacct -j 94505 -o JobID,MaxRSS,MaxVMSize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JobID     MaxRSS  MaxVMSize
<br>
- ------------ ---------- ----------
<br>
94505
<br>
94505.batch       7248K   1582692K
<br>
94505.0        1022744K   1307112K
<br>
<p><p><p>cheers!
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
<p>iEYEARECAAYFAlIB5sEACgkQO2KABBYQAh9QMQCfQ57w0YqVDwgyGRqUe3dSvQDj
<br>
e9cAnRRx/kDNUNqUCuFGY87mXf2fMOr+
<br>
=JUPK
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12704.php">Christopher Samuel: "Re: [OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Previous message:</strong> <a href="12702.php">David Goodell (dgoodell): "Re: [OMPI devel] OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12675.php">Christopher Samuel: "[OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12704.php">Christopher Samuel: "Re: [OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Reply:</strong> <a href="12704.php">Christopher Samuel: "Re: [OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Reply:</strong> <a href="12705.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
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
