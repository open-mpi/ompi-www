<?
$subject_val = "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; +	link of opal_wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 12:53:22 2009" -->
<!-- isoreceived="20090603165322" -->
<!-- sent="Wed, 03 Jun 2009 12:53:13 -0400" -->
<!-- isosent="20090603165313" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pb in configure script when using ifort with	&amp;quot;-fast&amp;quot; +	link of opal_wrapper" -->
<!-- id="4A26AA79.3060903_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E873B061-9067-4CD2-81B6-430F20277288_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; +	link of opal_wrapper<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 12:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9527.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9525.php">Ralph Castain: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9524.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9527.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Michel, Jeff, Rainer, list
<br>
<p>I have AMD Opteron Shanghai, and Intel 10.1017.
<br>
I had trouble with the Intel -fast flag also.
<br>
<p>According to the ifort man page/help:
<br>
-fast  = -xT -O3 -ipo -no-prec-div -static
<br>
(Each compiler vendor has a different -fast, PGI is another thing.)
<br>
<p>Intel doesn't allow SSE-type optimization beyond W (SSE+SSE2)
<br>
for AMD processors (an old and contentious issue,
<br>
Google it form more info).
<br>
So, I changed -xT to -xW (the highest level allowed,
<br>
also recommended by AMD).
<br>
<p>I had trouble with ipo before (missing symbols during link),
<br>
so I reduced it to ip.
<br>
<p>Moreover, -static definitely cannot work with the Infiniband
<br>
and other tons of shared libraries, of course,
<br>
hence I simply removed it.
<br>
However, as suggested by Rainer,
<br>
-static-intel may be OK,
<br>
if all you want is to avoid sending the Intel LD_LIBRARY_PATH with your
<br>
mpiexec command.
<br>
(I haven't tried it, though.)
<br>
<p>The flags became: -xW -O3 -ip -no-prec-div
<br>
<p>I used the same flags for ifort (FFLAGS, FCFLAGS), icc (CFLAGS)
<br>
and icpc (CXXFLAGS),to build OpenMPI 1.3.2, and it works.
<br>
For &quot;Genuine Intel&quot; processors you can upgrade -xW to whatever is
<br>
appropriate.
<br>
<p>My $0.02.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Rainer and I are still iterating on the trunk solution (we moved to an 
</span><br>
<span class="quotelev1">&gt; hg branch just for convenience for the moment).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the Fortran flags aren't too important to OMPI.  We *only* use 
</span><br>
<span class="quotelev1">&gt; them in configure.  OMPI doesn't contain any Fortran 77 code at all, and 
</span><br>
<span class="quotelev1">&gt; the F90 module is extremely minimalistic (generally one-line subroutines 
</span><br>
<span class="quotelev1">&gt; to call the C counterpart).  So a workaround for the moment -- until we 
</span><br>
<span class="quotelev1">&gt; can figure out the problem -- might be to remove the -fast from the 
</span><br>
<span class="quotelev1">&gt; FFLAGS and FCFLAGS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 3, 2009, at 11:34 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Michel,
</span><br>
<span class="quotelev2">&gt;&gt; per the naming convention test in configure:
</span><br>
<span class="quotelev2">&gt;&gt;    ifort -fast
</span><br>
<span class="quotelev2">&gt;&gt; will turn on -xHOST -O3 -ipo -no-prec-div -static,
</span><br>
<span class="quotelev2">&gt;&gt; of which -ipo turns on interprocedural optimizations for multiple files.
</span><br>
<span class="quotelev2">&gt;&gt; Here the compiled object file does not contain the symbols searched 
</span><br>
<span class="quotelev2">&gt;&gt; for in the
</span><br>
<span class="quotelev2">&gt;&gt; configure-tests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking into the simple test-case in configure and the options that 
</span><br>
<span class="quotelev2">&gt;&gt; one has to
</span><br>
<span class="quotelev2">&gt;&gt; figure out the naming convention using compilation (-c), I don't see 
</span><br>
<span class="quotelev2">&gt;&gt; an other
</span><br>
<span class="quotelev2">&gt;&gt; other than disabling -fast &amp; -ipo for intel-fortan compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please check trunk in commit r21363.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 03 June 2009 09:29:09 am DEVEL Michel wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In fact I forgot to put back to '-fast -C' the FCFLAGS variable (from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; '-O3 -C'). There is still an error (many opal_*_* subroutines not found
</span><br>
<span class="quotelev3">&gt;&gt; &gt; during the ipo step) at the same place, coming from the fact that
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;ld: attempted static link of dynamic object
</span><br>
<span class="quotelev3">&gt;&gt; &gt; `../../../opal/.libs/libopen-pal.so'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; although I put --enable-static in the configure step...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any idea of how to make the static libraries ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order to statically link at least the intel-libraries, please add
</span><br>
<span class="quotelev2">&gt;&gt;   -static-intel   (in previous intel compilers called -i-static)
</span><br>
<span class="quotelev2">&gt;&gt; to LDFLAGS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev2">&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9527.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9525.php">Ralph Castain: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9524.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9527.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
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
