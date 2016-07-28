<?
$subject_val = "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 22:18:08 2013" -->
<!-- isoreceived="20130820021808" -->
<!-- sent="Tue, 20 Aug 2013 12:18:04 +1000" -->
<!-- isosent="20130820021804" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)" -->
<!-- id="5212D1DC.8060403_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18DAA1F0-1A21-42BF-A8E2-93DF850F1F51_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-08-19 22:18:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>Previous message:</strong> <a href="12761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12716.php">Ralph Castain: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi Ralph,
<br>
<p>On 12/08/13 06:17, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 1. Slurm has no direct knowledge or visibility into the
</span><br>
<span class="quotelev1">&gt; application procs themselves when launched by mpirun. Slurm only
</span><br>
<span class="quotelev1">&gt; sees the ORTE daemons. I'm sure that Slurm rolls up all the
</span><br>
<span class="quotelev1">&gt; resources used by those daemons and their children, so the totals
</span><br>
<span class="quotelev1">&gt; should include them
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Since all Slurm can do is roll everything up, the resources
</span><br>
<span class="quotelev1">&gt; shown in sacct will include those used by the daemons and mpirun as
</span><br>
<span class="quotelev1">&gt; well as the application procs. Slurm doesn't include their daemons
</span><br>
<span class="quotelev1">&gt; or the slurmctld in their accounting. so the two numbers will be 
</span><br>
<span class="quotelev1">&gt; significantly different. If you are attempting to limit overall 
</span><br>
<span class="quotelev1">&gt; resource usage, you may need to leave some slack for the daemons
</span><br>
<span class="quotelev1">&gt; and mpirun.
</span><br>
<p>Thanks for that explanation, makes a lot of sense.
<br>
<p>In the end due to time pressure we decided to just do what we did with
<br>
Torque and patch Slurm to set RLIMIT_AS instead of RLIMIT_DATA for
<br>
jobs so no single sub-process can request more RAM than the job has
<br>
asked for.
<br>
<p>Works nicely and our users are used to it from Torque, we've not hit
<br>
any issues with it so far.
<br>
<p>In the long term I suspect the jobacct_gather/cgroup plugin will give
<br>
better numbers once it's had more work.
<br>
<p>All the best,
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
<p>iEYEARECAAYFAlIS0dwACgkQO2KABBYQAh9X7ACgkTPVIJx7xhqYSPeqb4/vC5+W
<br>
+XYAn2xETmiTnO7S2Hv9C93gCjs2R8Gw
<br>
=ypc1
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>Previous message:</strong> <a href="12761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12716.php">Ralph Castain: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
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
