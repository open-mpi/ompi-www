<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  6 00:14:26 2013" -->
<!-- isoreceived="20130906041426" -->
<!-- sent="Fri, 06 Sep 2013 14:14:22 +1000" -->
<!-- isosent="20130906041422" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="5229569E.6030405_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A586E8D_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-06 00:14:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12873.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12871.php">Hjelm, Nathan T: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12871.php">Hjelm, Nathan T: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12873.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12873.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 06/09/13 00:23, Hjelm, Nathan T wrote:
<br>
<p><span class="quotelev1">&gt; I assume that process binding is enabled for both mpirun and srun?
</span><br>
<span class="quotelev1">&gt; If not that could account for a difference between the runtimes.
</span><br>
<p>You raise an interesting point, we have been doing that with:
<br>
<p>[samuel_at_barcoo ~]$ module show openmpi 2&gt;&amp;1 | grep binding
<br>
setenv           OMPI_MCA_orte_process_binding core
<br>
<p>However, modifying the test program confirms that variable is getting
<br>
propagated as expected with both mpirun and srun for 1.6.5 and the 1.7
<br>
snapshot. :-(
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
<p>iEYEARECAAYFAlIpVp4ACgkQO2KABBYQAh88rQCggOZkAjPV+/1PX2R9auuij+1M
<br>
jdsAn17nDCoubkdvCsLRKozqGEYWjOY1
<br>
=RaoK
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12873.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12871.php">Hjelm, Nathan T: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12871.php">Hjelm, Nathan T: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12873.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12873.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
