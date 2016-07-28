<?
$subject_val = "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 25 23:24:47 2012" -->
<!-- isoreceived="20120326032447" -->
<!-- sent="Mon, 26 Mar 2012 14:24:41 +1100" -->
<!-- isosent="20120326032441" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd: BGQ empty topology with MPI" -->
<!-- id="4F6FE179.50201_at_unimelb.edu.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F6EBE9E.7000803_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Fwd: BGQ empty topology with MPI<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-25 23:24:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2993.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2991.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2990.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2999.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 25/03/12 17:43, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; But it'd be good to understand what's going on in /sys on this
</span><br>
<span class="quotelev1">&gt; machine. And I still don't understand why MPI changes things here.
</span><br>
<p>My guess (looking at the BG/P CNK kernel code) is that /sys is not
<br>
present on a BG/Q compute node, only on its I/O nodes (which run a
<br>
Linux kernel), and so the code is only picking them up when the I/O is
<br>
being redirected via an I/O node (i.e. when MPI is in play).
<br>
<p>Now I'd have thought that would happen with or without MPI, but who
<br>
knows..
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk9v4XkACgkQO2KABBYQAh8QrwCdGVrp1OzExLnB9v696lqEO2yz
<br>
qKwAnivU+GJ2lXB5wzRBw1WlCkj0XeSy
<br>
=rgKS
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2993.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2991.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2990.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2999.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
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
