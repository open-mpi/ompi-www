<?
$subject_val = "[OMPI devel] Using MTT to test the newly added SCTP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 12:15:35 2007" -->
<!-- isoreceived="20071129171535" -->
<!-- sent="Thu, 29 Nov 2007 09:13:33 -0800" -->
<!-- isosent="20071129171333" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="[OMPI devel] Using MTT to test the newly added SCTP BTL" -->
<!-- id="474EF33D.4000407_at_cs.ubc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7863BD30-49D1-42B6-AA13-980FD64D8C98_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Using MTT to test the newly added SCTP BTL<br>
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 12:13:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2684.php">Sajjad Tabib: "[OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>Previous message:</strong> <a href="2682.php">geetha r: "[OMPI devel] configure: error: Cannot support Fortran MPI_ADDRESS_KIND!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2690.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Reply:</strong> <a href="2690.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Good morning...
<br>
<p>So Brad Penoff and I would like begin MTT tests of the SCTP BTL, but due
<br>
to the presence of the .ompi_ignore file, the SCTP BTL source is not
<br>
included in nightly tarballs. I was curious if anyone would object to
<br>
our removing .ompi_ignore?
<br>
<p>I posted a similar message to MTT-Users and a couple concerns were
<br>
brought up which I will address below.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; One solution might be to remove the .ompi_ignore but to only enable  
</span><br>
<span class="quotelev1">&gt; the SCTP BTL when an explicit --with-sctp flag is given to configure  
</span><br>
<span class="quotelev1">&gt; (or something similar).  You might want to run this by the [OMPI]  
</span><br>
<span class="quotelev1">&gt; group first, but there's precedent for it, so I doubt anyone would  
</span><br>
<span class="quotelev1">&gt; object.
</span><br>
<p>The situation at present is that the SCTP BTL only builds on FreeBSD,
<br>
OSX and Linux and only if the SCTP is found to be in a standard place.
<br>
On Linux, for instance, you need to have installed the lksctp package in
<br>
order for the SCTP BTL to build. We also have a --with-sctp configure
<br>
option where you can specify the SCTP path should it not be in a
<br>
standard location. If SCTP does not exist on the system, then the BTL
<br>
will not build and more importantly, will not break the build of the
<br>
overall system.
<br>
<p>My question now, is it necessary for us to alter the above
<br>
behavior (as initially mentioned by Jeff), or is having the SCTP BTL
<br>
build iff SCTP is found sufficient?
<br>
<p>Thanks in advance for any advice on this matter.
<br>
<p>- --
<br>
Karol Mroz
<br>
kmroz_at_[hidden]
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.6 (GNU/Linux)
<br>
<p>iD8DBQFHTvM9uoug78g/Mz8RAubuAJ9g7BShXIaYJCetVA9OWOFIqtUDAgCdFU+6
<br>
2TF/mgeTaJr1hfB7AP3Evb4=
<br>
=+aH4
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2684.php">Sajjad Tabib: "[OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>Previous message:</strong> <a href="2682.php">geetha r: "[OMPI devel] configure: error: Cannot support Fortran MPI_ADDRESS_KIND!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2690.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Reply:</strong> <a href="2690.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
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
