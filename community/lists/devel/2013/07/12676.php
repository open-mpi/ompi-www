<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 05:36:09 2013" -->
<!-- isoreceived="20130723093609" -->
<!-- sent="Tue, 23 Jul 2013 09:34:15 +0000" -->
<!-- isosent="20130723093415" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A21FEFCC9_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 05:34:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12677.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12675.php">Christopher Samuel: "[OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12675.php">Christopher Samuel: "[OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12680.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12680.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12709.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Chris
<br>
<p>Funny you should mention this now. We identified and diagnosed the issue some time ago as a combination of SLURM's PMI1 implementation and some of, what I'll call, OMPI's topology requirements (probably not the right word.) Here's what is happening, in a nutshell, when you launch with srun:
<br>
<p>1. Each process pushes his endpoint data up to the PMI &quot;cloud&quot; via PMI put (I think it's about five or six puts, bottom line, O(1).)
<br>
2. Then executes a PMI commit and PMI barrier to ensure all other processes have finished committing their data to the &quot;cloud&quot;.
<br>
3.  Subsequent to this, each process executes O(N) (N is the number of procs in the job) PMI gets in order to get all of the endpoint data for every process regardless of whether or not the process communicates with that endpoint. 
<br>
<p>&quot;We&quot; (MLNX et al.) undertook an in-depth scaling study of this and identified several poorly scaling pieces with the worst offenders being:
<br>
<p>1. PMI Barrier scales worse than linear.
<br>
2. At scale, the PMI get phase starts to look quadratic.   
<br>
<p>The proposed solution that &quot;we&quot; (OMPI + SLURM) have come up with is to modify OMPI to support PMI2 and to use SLURM 2.6 which has support for PMI2 and is (allegedly) much more scalable than PMI1. Several folks in the combined communities are working hard, as we speak, trying to get this functional to see if it indeed makes a difference. Stay tuned, Chris. Hopefully we will have some data by the end of the week.  
<br>
<p>Best regards,
<br>
<p>Josh
<br>
<p><p>Joshua S. Ladd, PhD
<br>
HPC Algorithms Engineer
<br>
Mellanox Technologies 
<br>
<p>Email: joshual_at_[hidden]
<br>
Cell: +1 (865) 258 - 8898
<br>
<p><p><p><p><p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Christopher Samuel
<br>
Sent: Tuesday, July 23, 2013 3:06 AM
<br>
To: slurm-dev; Open MPI Developers
<br>
Subject: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun
<br>
<p>-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi there slurm-dev and OMPI devel lists,
<br>
<p>Bringing up a new IBM SandyBridge cluster I'm running a NAMD test case and noticed that if I run it with srun rather than mpirun it goes over 20% slower.  These are all launched from an sbatch script too.
<br>
<p>Slurm 2.6.0, RHEL 6.4 (latest kernel), FDR IB.
<br>
<p>Here are some timings as reported as the WallClock time by NAMD itself (so not including startup/tear down overhead from Slurm).
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
master) *except* for the srun / mpirun which is modified by copying the batch script and substituting mpirun for srun.
<br>
<p>When they are running I can see that for jobs launched with srun they are direct children of slurmstepd whereas when started with mpirun they are children of Open-MPI's orted (or mpirun on the launch node) which itself is a child of slurmstepd.
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
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12677.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12675.php">Christopher Samuel: "[OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12675.php">Christopher Samuel: "[OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12680.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12680.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12709.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
