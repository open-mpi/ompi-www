<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 13:20:35 2009" -->
<!-- isoreceived="20090123182035" -->
<!-- sent="23 Jan 2009 18:20:30 +0000" -->
<!-- isosent="20090123182030" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="Prayer.1.3.1.0901231820300.14818_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0B5C3EAB-71FD-4653-87F6-B2963B1E2DE6_at_cisco.com" -->
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
<strong>Date:</strong> 2009-01-23 13:20:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5294.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5294.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23 2009, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;FWIW, ABI is not necessarily a bad thing; it has its benefits and  
</span><br>
<span class="quotelev1">&gt;drawbacks (and enablers and limitations).  Some people want it and  
</span><br>
<span class="quotelev1">&gt;some people don't (most don't care, I think).  We'll see where that  
</span><br>
<span class="quotelev1">&gt;effort goes in the Forum and elsewhere.
</span><br>
<p>Right.  But, as someone with experience of trying to design portable ABIs,
<br>
it requires more knowledge and skill than the typical person tackling the
<br>
job knows even exists ....
<br>
<p>Luckily, at present, there is virtually no variation between systems, but
<br>
you can imagine what the task was like in the days of the CDC 6600, ICL
<br>
1900, different PDPs, System/370, Burroughs, Univac, Old Uncle Tom Cobbley
<br>
and all.  The success rate was zilch, which at least stopped people from
<br>
perpetrating 'portable' ABIs that didn't work on the next generation of
<br>
systems - which is where we are today!
<br>
<p><span class="quotelev1">&gt;FWIW, the F03 bindings for MPI may allow address-sized integers to be  
</span><br>
<span class="quotelev1">&gt;handles in Fortran.  In this case, MPI handles will likely take on  
</span><br>
<span class="quotelev1">&gt;exactly the same value that they are in C.  In OMPI's case, that's a C  
</span><br>
<span class="quotelev1">&gt;pointer, so the F03 value for MPI_COMM_WORLD will be some very large  
</span><br>
<span class="quotelev1">&gt;non-zero integer value. (standard disclaimers about future features/ 
</span><br>
<span class="quotelev1">&gt;functionality -- time will tell if this stuff plays out as expected)
</span><br>
<p>That would solve this particular problem, if it is what I think it is.
<br>
A private Email made me realise that he was probably passing the Fortran
<br>
MPI_COMM_WORLD to NetCDF4 for use as a communicator - and, unless NetCDF
<br>
is much better quality than when I last looked at it, I will bet that
<br>
its Fortran interface is just a thin wrapper.  You can guess the rest :-)
<br>
<p><span class="quotelev1">&gt;I see your point about accidental 0's, but I think I'd prefer that the  
</span><br>
<span class="quotelev1">&gt;F03 bindings solve this particular issue.
</span><br>
<p>Starting from where you are now, yes, but it is ALWAYS a mistake to use
<br>
small integers (especially zero) for opaque values.  Expose them or make
<br>
then genuinely opaque.
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
<li><strong>Next message:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5294.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5294.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
