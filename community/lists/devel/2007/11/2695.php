<?
$subject_val = "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 18:53:32 2007" -->
<!-- isoreceived="20071130235332" -->
<!-- sent="Fri, 30 Nov 2007 15:51:23 -0800" -->
<!-- isosent="20071130235123" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using MTT to test the newly added SCTP BTL" -->
<!-- id="4750A1FB.3080403_at_cs.ubc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F1E4EE28-4C44-4A5A-8359-D7F7A269E699_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using MTT to test the newly added SCTP BTL<br>
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-30 18:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2696.php">George Bosilca: "Re: [OMPI devel] Another patch for v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="2694.php">Jeff Squyres: "[OMPI devel] Another patch for v1.2.5"</a>
<li><strong>In reply to:</strong> <a href="2690.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2697.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2697.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2731.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi, Jeff... thanks for getting back to me.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 29, 2007, at 12:13 PM, Karol Mroz wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One solution might be to remove the .ompi_ignore but to only enable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the SCTP BTL when an explicit --with-sctp flag is given to configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (or something similar).  You might want to run this by the [OMPI]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; group first, but there's precedent for it, so I doubt anyone would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; object.
</span><br>
<span class="quotelev2">&gt;&gt; The situation at present is that the SCTP BTL only builds on FreeBSD,
</span><br>
<span class="quotelev2">&gt;&gt; OSX and Linux and only if the SCTP is found to be in a standard place.
</span><br>
<span class="quotelev2">&gt;&gt; On Linux, for instance, you need to have installed the lksctp  
</span><br>
<span class="quotelev2">&gt;&gt; package in
</span><br>
<span class="quotelev2">&gt;&gt; order for the SCTP BTL to build. We also have a --with-sctp configure
</span><br>
<span class="quotelev2">&gt;&gt; option where you can specify the SCTP path should it not be in a
</span><br>
<span class="quotelev2">&gt;&gt; standard location. If SCTP does not exist on the system, then the BTL
</span><br>
<span class="quotelev2">&gt;&gt; will not build and more importantly, will not break the build of the
</span><br>
<span class="quotelev2">&gt;&gt; overall system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this SCTL lksctp package installed by default on any Linux?  OS X?   
</span><br>
<span class="quotelev1">&gt; Solaris?
</span><br>
<p>The lksctp package is not installed by default on any Linux distribution
<br>
that I'm aware of. For OSX, SCTP support is provided via the SCTP
<br>
Network Kernel Extension (<a href="http://sctp.fh-muenster.de/sctp-nke.html">http://sctp.fh-muenster.de/sctp-nke.html</a>) and
<br>
this too is not installed by default. Solaris does have SCTP support by
<br>
default, but we currently do not build on Solaris systems regardless.
<br>
<p><span class="quotelev2">&gt;&gt; My question now, is it necessary for us to alter the above
</span><br>
<span class="quotelev2">&gt;&gt; behavior (as initially mentioned by Jeff), or is having the SCTP BTL
</span><br>
<span class="quotelev2">&gt;&gt; build iff SCTP is found sufficient?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the only thing that matters is what the current default  
</span><br>
<span class="quotelev1">&gt; behavior is -- if the .ompi_ignore is removed, will it hose anyone  
</span><br>
<span class="quotelev1">&gt; unexpectedly?  I.e., if they build and run today and it works, then  
</span><br>
<span class="quotelev1">&gt; the .ompi_ignore is removed and you build and run... and it doesn't  
</span><br>
<span class="quotelev1">&gt; work.  That my only real concern.
</span><br>
<p>Removal of .ompi_ignore should not create build problems for anyone who
<br>
is running without some form of SCTP support. To test this claim, we
<br>
built Open MPI with .ompi_ignore removed and no SCTP support on both an
<br>
ubuntu linux and an OSX machine. Both builds succeeded without any problem.
<br>
<p>A couple other questions we had, and this references an email from a
<br>
while back, deals with SCTP BTL exclusivity. I will link the relevant
<br>
message below and any advice would be appreciated:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2007/11/2609.php">http://www.open-mpi.org/community/lists/devel/2007/11/2609.php</a>
<br>
<p>Thanks.
<br>
<p>- --
<br>
Karol Mroz
<br>
kmroz_at_[hidden]
<br>
<p><p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.6 (GNU/Linux)
<br>
<p>iD8DBQFHUKH7uoug78g/Mz8RAmuuAKCF2FHDkfwsv4G6Pc1f05Ya9CFHLwCfQJT1
<br>
UJb17w+fhxL6abtOwLKX4nE=
<br>
=QSsm
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2696.php">George Bosilca: "Re: [OMPI devel] Another patch for v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="2694.php">Jeff Squyres: "[OMPI devel] Another patch for v1.2.5"</a>
<li><strong>In reply to:</strong> <a href="2690.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2697.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2697.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2731.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
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
