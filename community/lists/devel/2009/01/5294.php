<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 11:42:44 2009" -->
<!-- isoreceived="20090123164244" -->
<!-- sent="Fri, 23 Jan 2009 11:42:00 -0500" -->
<!-- isosent="20090123164200" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="0B5C3EAB-71FD-4653-87F6-B2963B1E2DE6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.3.1.0901231507490.6206_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 11:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5295.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5293.php">Bogdan Costescu: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>In reply to:</strong> <a href="5292.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5295.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5295.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2009, at 10:07 AM, N.M. Maclaren wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm assuming what you're really referring to is the fact that there  
</span><br>
<span class="quotelev2">&gt;&gt; is  no currently binary compatibility between different MPI   
</span><br>
<span class="quotelev2">&gt;&gt; implementations (forgive me if my assumption is wrong).  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good Lord, no!!!!!  You don't know me, but that's NOT the sort of  
</span><br>
<span class="quotelev1">&gt; thing
</span><br>
<span class="quotelev1">&gt; I would refer to.
</span><br>
<p>Gotcha.
<br>
<p>FWIW, ABI is not necessarily a bad thing; it has its benefits and  
<br>
drawbacks (and enablers and limitations).  Some people want it and  
<br>
some people don't (most don't care, I think).  We'll see where that  
<br>
effort goes in the Forum and elsewhere.
<br>
<p><span class="quotelev1">&gt; The reason is that it is extremely likely to be supplied by an  
</span><br>
<span class="quotelev1">&gt; incorrect
</span><br>
<span class="quotelev1">&gt; program (e.g. by passing an uninitialised integer that should have  
</span><br>
<span class="quotelev1">&gt; been
</span><br>
<span class="quotelev1">&gt; set to MPI_COMM_WORLD).  When such a program is ported elsewhere (or  
</span><br>
<span class="quotelev1">&gt; even
</span><br>
<span class="quotelev1">&gt; when a new version of a compile moves code around), a program that has
</span><br>
<span class="quotelev1">&gt; been 'working' for ages breaks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could give you some amusing stories of the contents of location  
</span><br>
<span class="quotelev1">&gt; zero,
</span><br>
<span class="quotelev1">&gt; and how bitterly the owners of one system regretted having architected
</span><br>
<span class="quotelev1">&gt; that page zero was a page of zeroes, a decade down the line :-)
</span><br>
<p><p>Ah -- I actually thought that *wouldn't* be much of a problem for  
<br>
Fortran since the array indexing started at 1.
<br>
<p>OMPI's Fortran MPI handles are literally indexes into a densely-packed  
<br>
array in C, so we do start with 0 and go upwards.  Not much we can do  
<br>
about that at this point.  Well, to be truthful, we *could* change  
<br>
that -- say by adding some arbitrary value to every Fortran integer  
<br>
(e.g., make them negative, or add 20, or whatever).  But that would  
<br>
end up touching quite a bit of code in OMPI.
<br>
<p>FWIW, the F03 bindings for MPI may allow address-sized integers to be  
<br>
handles in Fortran.  In this case, MPI handles will likely take on  
<br>
exactly the same value that they are in C.  In OMPI's case, that's a C  
<br>
pointer, so the F03 value for MPI_COMM_WORLD will be some very large  
<br>
non-zero integer value. (standard disclaimers about future features/ 
<br>
functionality -- time will tell if this stuff plays out as expected)
<br>
<p>I see your point about accidental 0's, but I think I'd prefer that the  
<br>
F03 bindings solve this particular issue.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5295.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5293.php">Bogdan Costescu: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>In reply to:</strong> <a href="5292.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5295.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5295.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
