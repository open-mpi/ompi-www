<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 20:05:39 2014" -->
<!-- isoreceived="20140509000539" -->
<!-- sent="Fri, 09 May 2014 10:05:35 +1000" -->
<!-- isosent="20140509000535" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="536C1BCF.10804_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG4F6z_Z7=vVTnsw3_uiC3vv9JbGyVquKiH+fwGH+w3+O6Yu=A_at_mail.gmail.com" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 20:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14765.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14763.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14760.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14733.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 09/05/14 00:16, Joshua Ladd wrote:
<br>
<p><span class="quotelev1">&gt; The necessary packages will be supported and available in community
</span><br>
<span class="quotelev1">&gt; OFED.
</span><br>
<p>We're constrained to what is in RHEL6 I'm afraid.
<br>
<p>This is because we have to run GPFS over IB to BG/Q from the same NSDs
<br>
that talk GPFS to all our Intel clusters.   We did try MOFED 2.x (in
<br>
connected mode) on a new Intel cluster during its bring up last year
<br>
which worked for MPI but stopped it talking to the NSDs.  Reverting to
<br>
vanilla RHEL6 fixed it.
<br>
<p>Not your problem though. :-)  As Ralph has said there is work on an
<br>
alternative solution that we will be able to use.
<br>
<p>Thanks!
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
Version: GnuPG v1.4.14 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlNsG88ACgkQO2KABBYQAh8+SwCfZWpViBFwuhlxqERXpbXbr8Eq
<br>
awwAnjj7NJ2/zUGBeZNT0UPwkmaGOaLR
<br>
=nPxl
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14765.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14763.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14760.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14733.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
