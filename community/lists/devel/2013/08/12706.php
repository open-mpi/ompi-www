<?
$subject_val = "Re: [OMPI devel] [slurm-dev] Re: slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  7 03:42:23 2013" -->
<!-- isoreceived="20130807074223" -->
<!-- sent="Wed, 07 Aug 2013 17:42:17 +1000" -->
<!-- isosent="20130807074217" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [slurm-dev] Re: slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)" -->
<!-- id="5201FA59.2060500_at_unimelb.edu.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5201F016.9030702_at_aalto.fi" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [slurm-dev] Re: slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-07 03:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12707.php">Jeff Squyres (jsquyres): "[OMPI devel] Reminder: scheduled maintenance is about 40 mins"</a>
<li><strong>Previous message:</strong> <a href="12705.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
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
<p>On 07/08/13 16:59, Janne Blomqvist wrote:
<br>
<p><span class="quotelev1">&gt; That is, the memory accounting is per task, and when launching
</span><br>
<span class="quotelev1">&gt; using mpirun the number of tasks does not correspond to the number
</span><br>
<span class="quotelev1">&gt; of MPI processes, but rather to the number of &quot;orted&quot; processes (1
</span><br>
<span class="quotelev1">&gt; per node).
</span><br>
<p>That appears to be correct, I am seeing 1 task in the batch and 68
<br>
tasks for orted when I use mpirun whilst I see 1 task in the batch and
<br>
1104 tasks as namd2 when I use srun.
<br>
<p>I could understand how that might result in Slurm (wrongly) thinking
<br>
that a single task is using more than its allowed memory per tasks,
<br>
but I'm not sure I understand how that could lead to Slurm thinking
<br>
the job is using vastly more memory than it actually is though.
<br>
<p><p>cheers,
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
<p>iEYEARECAAYFAlIB+lgACgkQO2KABBYQAh8uqgCdGuA03jCEdJVJE2dJGBHEJjb/
<br>
WY4An3em/48L25xq4Ui/GHijSJY2Oo6T
<br>
=Zk4G
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12707.php">Jeff Squyres (jsquyres): "[OMPI devel] Reminder: scheduled maintenance is about 40 mins"</a>
<li><strong>Previous message:</strong> <a href="12705.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
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
