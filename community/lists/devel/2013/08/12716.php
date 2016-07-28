<?
$subject_val = "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 11 16:17:17 2013" -->
<!-- isoreceived="20130811201717" -->
<!-- sent="Sun, 11 Aug 2013 13:17:13 -0700" -->
<!-- isosent="20130811201713" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)" -->
<!-- id="18DAA1F0-1A21-42BF-A8E2-93DF850F1F51_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5201EF7C.5020107_at_unimelb.edu.au" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-11 16:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12717.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12715.php">Ralph Castain: "Re: [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
<li><strong>In reply to:</strong> <a href="12705.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12762.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Reply:</strong> <a href="12762.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak to what you get from sacct, but I can say that things will definitely be different when launched directly via srun vs indirectly thru mpirun. The reason is that mpirun uses srun to launch the orte daemons, which then fork/exec all the application processes under them (as opposed to launching those app procs thru srun). This means two things:
<br>
<p>1. Slurm has no direct knowledge or visibility into the application procs themselves when launched by mpirun. Slurm only sees the ORTE daemons. I'm sure that Slurm rolls up all the resources used by those daemons and their children, so the totals should include them
<br>
<p>2. Since all Slurm can do is roll everything up, the resources shown in sacct will include those used by the daemons and mpirun as well as the application procs. Slurm doesn't include their daemons or the slurmctld in their accounting. so the two numbers will be significantly different. If you are attempting to limit overall resource usage, you may need to leave some slack for the daemons and mpirun.
<br>
<p>You should also see an extra &quot;step&quot; in the mpirun-launched job as mpirun itself generally takes the first step, and the launch of the daemons occupies a second step.
<br>
<p>As for the strange numbers you are seeing, it looks to me like you are hitting a mismatch of unsigned vs signed values. When adding them up, that could cause all kinds of erroneous behavior.
<br>
<p><p>On Aug 6, 2013, at 11:55 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/08/13 16:19, Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyone seen anything similar, or any ideas on what could be going
</span><br>
<span class="quotelev2">&gt;&gt; on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, this was with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # ACCOUNTING
</span><br>
<span class="quotelev1">&gt; JobAcctGatherType=jobacct_gather/linux
</span><br>
<span class="quotelev1">&gt; JobAcctGatherFrequency=30
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since those initial tests we've started enforcing memory limits (the
</span><br>
<span class="quotelev1">&gt; system is not yet in full production) and found that this causes jobs
</span><br>
<span class="quotelev1">&gt; to get killed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We tried the cgroups gathering method, but jobs still die with mpirun
</span><br>
<span class="quotelev1">&gt; and now the numbers don't seem to right for mpirun or srun either:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun (killed):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [samuel_at_barcoo-test Mem]$ sacct -j 94564 -o JobID,MaxRSS,MaxVMSize
</span><br>
<span class="quotelev1">&gt;       JobID     MaxRSS  MaxVMSize
</span><br>
<span class="quotelev1">&gt; - ------------ ---------- ----------
</span><br>
<span class="quotelev1">&gt; 94564
</span><br>
<span class="quotelev1">&gt; 94564.batch    -523362K          0
</span><br>
<span class="quotelev1">&gt; 94564.0         394525K          0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [samuel_at_barcoo-test Mem]$ sacct -j 94565 -o JobID,MaxRSS,MaxVMSize
</span><br>
<span class="quotelev1">&gt;       JobID     MaxRSS  MaxVMSize
</span><br>
<span class="quotelev1">&gt; - ------------ ---------- ----------
</span><br>
<span class="quotelev1">&gt; 94565
</span><br>
<span class="quotelev1">&gt; 94565.batch        998K          0
</span><br>
<span class="quotelev1">&gt; 94565.0          88663K          0
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; iEYEARECAAYFAlIB73wACgkQO2KABBYQAh+kwACfYnMbONcpxD2lsM5i4QDw5r93
</span><br>
<span class="quotelev1">&gt; KpMAn2hPUxMJ62u2gZIUGl5I0bQ6lllk
</span><br>
<span class="quotelev1">&gt; =jYrC
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
<li><strong>Next message:</strong> <a href="12717.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12715.php">Ralph Castain: "Re: [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
<li><strong>In reply to:</strong> <a href="12705.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12762.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Reply:</strong> <a href="12762.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
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
