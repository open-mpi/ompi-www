<?
$subject_val = "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 12:04:59 2009" -->
<!-- isoreceived="20090603160459" -->
<!-- sent="Wed, 3 Jun 2009 12:04:52 -0400" -->
<!-- isosent="20090603160452" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pb in configure script when using ifort with &amp;quot;-fast&amp;quot; +	link of opal_wrapper" -->
<!-- id="E873B061-9067-4CD2-81B6-430F20277288_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906031134.46449.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 12:04:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9525.php">Ralph Castain: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9523.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9526.php">Gus Correa: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9526.php">Gus Correa: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer and I are still iterating on the trunk solution (we moved to an  
<br>
hg branch just for convenience for the moment).
<br>
<p>Note that the Fortran flags aren't too important to OMPI.  We *only*  
<br>
use them in configure.  OMPI doesn't contain any Fortran 77 code at  
<br>
all, and the F90 module is extremely minimalistic (generally one-line  
<br>
subroutines to call the C counterpart).  So a workaround for the  
<br>
moment -- until we can figure out the problem -- might be to remove  
<br>
the -fast from the FFLAGS and FCFLAGS.
<br>
<p>On Jun 3, 2009, at 11:34 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Dear Michel,
</span><br>
<span class="quotelev1">&gt; per the naming convention test in configure:
</span><br>
<span class="quotelev1">&gt;    ifort -fast
</span><br>
<span class="quotelev1">&gt; will turn on -xHOST -O3 -ipo -no-prec-div -static,
</span><br>
<span class="quotelev1">&gt; of which -ipo turns on interprocedural optimizations for multiple  
</span><br>
<span class="quotelev1">&gt; files.
</span><br>
<span class="quotelev1">&gt; Here the compiled object file does not contain the symbols searched  
</span><br>
<span class="quotelev1">&gt; for in the
</span><br>
<span class="quotelev1">&gt; configure-tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking into the simple test-case in configure and the options that  
</span><br>
<span class="quotelev1">&gt; one has to
</span><br>
<span class="quotelev1">&gt; figure out the naming convention using compilation (-c), I don't see  
</span><br>
<span class="quotelev1">&gt; an other
</span><br>
<span class="quotelev1">&gt; other than disabling -fast &amp; -ipo for intel-fortan compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please check trunk in commit r21363.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday 03 June 2009 09:29:09 am DEVEL Michel wrote:
</span><br>
<span class="quotelev2">&gt; &gt; In fact I forgot to put back to '-fast -C' the FCFLAGS variable  
</span><br>
<span class="quotelev1">&gt; (from
</span><br>
<span class="quotelev2">&gt; &gt; '-O3 -C'). There is still an error (many opal_*_* subroutines not  
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev2">&gt; &gt; during the ipo step) at the same place, coming from the fact that
</span><br>
<span class="quotelev2">&gt; &gt; &quot;ld: attempted static link of dynamic object
</span><br>
<span class="quotelev2">&gt; &gt; `../../../opal/.libs/libopen-pal.so'
</span><br>
<span class="quotelev2">&gt; &gt; although I put --enable-static in the configure step...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea of how to make the static libraries ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to statically link at least the intel-libraries, please add
</span><br>
<span class="quotelev1">&gt;   -static-intel   (in previous intel compilers called -i-static)
</span><br>
<span class="quotelev1">&gt; to LDFLAGS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9525.php">Ralph Castain: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9523.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9526.php">Gus Correa: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9526.php">Gus Correa: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; +	link of opal_wrapper"</a>
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
