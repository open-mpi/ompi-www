<?
$subject_val = "[OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 03:05:06 2013" -->
<!-- isoreceived="20130723070506" -->
<!-- sent="Tue, 23 Jul 2013 17:04:58 +1000" -->
<!-- isosent="20130723070458" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="51EE2B1A.8080703_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 03:04:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12676.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12674.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28911 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12676.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12676.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12703.php">Christopher Samuel: "[OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi there slurm-dev and OMPI devel lists,
<br>
<p>Bringing up a new IBM SandyBridge cluster I'm running a NAMD test case
<br>
and noticed that if I run it with srun rather than mpirun it goes over
<br>
20% slower.  These are all launched from an sbatch script too.
<br>
<p>Slurm 2.6.0, RHEL 6.4 (latest kernel), FDR IB.
<br>
<p>Here are some timings as reported as the WallClock time by NAMD itself
<br>
(so not including startup/tear down overhead from Slurm).
<br>
<p>srun:
<br>
<p>run1/slurm-93744.out:WallClock: 695.079773  CPUTime: 695.079773
<br>
run4/slurm-94011.out:WallClock: 723.907959  CPUTime: 723.907959
<br>
run5/slurm-94013.out:WallClock: 726.156799  CPUTime: 726.156799
<br>
run6/slurm-94017.out:WallClock: 724.828918  CPUTime: 724.828918
<br>
<p>Average of 692 seconds
<br>
<p>mpirun:
<br>
<p>run2/slurm-93746.out:WallClock: 559.311035  CPUTime: 559.311035
<br>
run3/slurm-93910.out:WallClock: 544.116333  CPUTime: 544.116333
<br>
run7/slurm-94019.out:WallClock: 586.072693  CPUTime: 586.072693
<br>
<p>Average of 563 seconds.
<br>
<p>So that's about 23% slower.
<br>
<p>Everything is identical (they're all symlinks to the same golden
<br>
master) *except* for the srun / mpirun which is modified by copying
<br>
the batch script and substituting mpirun for srun.
<br>
<p>When they are running I can see that for jobs launched with srun they
<br>
are direct children of slurmstepd whereas when started with mpirun
<br>
they are children of Open-MPI's orted (or mpirun on the launch node)
<br>
which itself is a child of slurmstepd.
<br>
<p>Has anyone else seen anything like this, or got any ideas?
<br>
<p>cheers,
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
<p>iEYEARECAAYFAlHuKxoACgkQO2KABBYQAh8cYQCfT/YIFkyeDaNb/ksT2xk4W416
<br>
kycAoJfdZInLwy+nTIL7CzWapZZU20qm
<br>
=ZJ1B
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12676.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12674.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28911 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12676.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12676.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12703.php">Christopher Samuel: "[OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
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
