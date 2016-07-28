<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 10:07:54 2009" -->
<!-- isoreceived="20090123150754" -->
<!-- sent="23 Jan 2009 15:07:49 +0000" -->
<!-- isosent="20090123150749" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="Prayer.1.3.1.0901231507490.6206_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D462F74-1E90-4FAA-B0A7-1FE5041F5E07_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran 90 Interface<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 10:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5293.php">Bogdan Costescu: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>Previous message:</strong> <a href="5291.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5291.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5294.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5294.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23 2009, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No.  Open MPI's Fortran MPI_COMM_WORLD is pretty much hard-wired to 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's a mistake.  But probably non-trivial to fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Could you explain what you meant by that?  There is no &quot;fix&quot;; Open  
</span><br>
<span class="quotelev1">&gt;MPI's Fortran MPI_COMM_WORLD has always been 0.  More specifically,  
</span><br>
<span class="quotelev1">&gt;there is no coordination of the value of MPI_COMM_WORLD between MPI  
</span><br>
<span class="quotelev1">&gt;implementations, unless some choose to emulate MPICH (or MPICH2 --  
</span><br>
<span class="quotelev1">&gt;because they're different).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm assuming what you're really referring to is the fact that there is  
</span><br>
<span class="quotelev1">&gt;no currently binary compatibility between different MPI  
</span><br>
<span class="quotelev1">&gt;implementations (forgive me if my assumption is wrong).  ...
</span><br>
<p>Good Lord, no!!!!!  You don't know me, but that's NOT the sort of thing
<br>
I would refer to.
<br>
<p>The reason is that it is extremely likely to be supplied by an incorrect
<br>
program (e.g. by passing an uninitialised integer that should have been
<br>
set to MPI_COMM_WORLD).  When such a program is ported elsewhere (or even
<br>
when a new version of a compile moves code around), a program that has
<br>
been 'working' for ages breaks.
<br>
<p>I could give you some amusing stories of the contents of location zero,
<br>
and how bitterly the owners of one system regretted having architected
<br>
that page zero was a page of zeroes, a decade down the line :-)
<br>
<p><p>Regards,
<br>
Nick Maclaren,
<br>
University of Cambridge Computing Service,
<br>
New Museums Site, Pembroke Street, Cambridge CB2 3QH, England.
<br>
Email:  nmm1_at_[hidden]
<br>
Tel.:  +44 1223 334761    Fax:  +44 1223 334679
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5293.php">Bogdan Costescu: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>Previous message:</strong> <a href="5291.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5291.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5294.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5294.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
