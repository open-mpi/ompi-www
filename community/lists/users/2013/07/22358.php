<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 21 08:50:55 2013" -->
<!-- isoreceived="20130721125055" -->
<!-- sent="Sun, 21 Jul 2013 08:50:43 -0400" -->
<!-- isosent="20130721125043" -->
<!-- name="Kevin H. Hobbs" -->
<!-- email="hobbsk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="51EBD923.8000005_at_ohio.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BCDC5B59-6678-4679-B416-87DD359A5DD7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Kevin H. Hobbs (<em>hobbsk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-21 08:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22359.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>Previous message:</strong> <a href="22357.php">Saliya Ekanayake: "[OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<li><strong>In reply to:</strong> <a href="22356.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/20/2013 04:14 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Ah! That would indicate an issue with the external hwloc
</span><br>
<span class="quotelev1">&gt; package they provided, which is the big reason we don't
</span><br>
<span class="quotelev1">&gt; recommend installing from packages.
</span><br>
<p>I'll happily report the bug to the hwloc developers.
<br>
<p>I'll also add what we've found here to the bug on the Fedora
<br>
bugzilla.
<br>
<p>Is there anything more I can do on this list to figure out the
<br>
nature of the bug?
<br>
<p><span class="quotelev1">&gt; We have internal copies of hwloc and libevent that ensure (a)
</span><br>
<span class="quotelev1">&gt; they are at the proper level, and (b) they are configured
</span><br>
<span class="quotelev1">&gt; properly for OMPI's use.
</span><br>
<p>It does look like Fedora's hwloc is ahead of OMPI's.
<br>
<p>Fedora 18 has openmpi-1.6.3 and hwloc-1.4.2.
<br>
<p>The source of openmpi-1.6.5 has hwloc-1.3.2.
<br>
<p>How can I tell what the configuration differences are?
<br>
<p>The entire configure section of the .spec file in
<br>
hwloc-1.4.2-2.fc18.src.rpm is :
<br>
<p>&nbsp;&nbsp;%configure
<br>
&nbsp;&nbsp;%{__make} %{?_smp_mflags} V=1
<br>
<p>I don't see anything that looks like any hwloc configure options
<br>
are being set.
<br>
<p>How do I tell how OMPI configures it's bundled hwloc?
<br>
<p><span class="quotelev1">&gt; We've had that debate with the Fedora folks recently - they
</span><br>
<span class="quotelev1">&gt; won't take our advice,
</span><br>
<p>I admit to having a bias against bundled dependencies, but I
<br>
don't want to get in the middle of a debate.
<br>
<p><span class="quotelev1">&gt; so I'm afraid you'll just need to build from source to have
</span><br>
<span class="quotelev1">&gt; something usable.
</span><br>
<p>Yes, that solves my problem, but if I can I'd like to leave at
<br>
least a trail of breadcrumbs that the next person to encounter
<br>
the bug can follow.
<br>
<p>Better yet, I'd like to figure out the actual nature of the bug
<br>
and report it in the proper place.
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22358/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22359.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>Previous message:</strong> <a href="22357.php">Saliya Ekanayake: "[OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<li><strong>In reply to:</strong> <a href="22356.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
