<?
$subject_val = "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 11:35:01 2009" -->
<!-- isoreceived="20090603153501" -->
<!-- sent="Wed, 03 Jun 2009 11:34:46 -0400" -->
<!-- isosent="20090603153446" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pb in configure script when using ifort with &amp;quot;-fast&amp;quot; +	link of opal_wrapper" -->
<!-- id="200906031134.46449.keller_at_ornl.gov" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="4A267AA5.5060809_at_ens2m.fr" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 11:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9521.php">Ashley Pittman: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9519.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9524.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9524.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9527.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Michel,
<br>
per the naming convention test in configure:
<br>
&nbsp;&nbsp;&nbsp;ifort -fast 
<br>
will turn on -xHOST -O3 -ipo -no-prec-div -static,
<br>
of which -ipo turns on interprocedural optimizations for multiple files.
<br>
Here the compiled object file does not contain the symbols searched for in the 
<br>
configure-tests.
<br>
<p>Looking into the simple test-case in configure and the options that one has to 
<br>
figure out the naming convention using compilation (-c), I don't see an other 
<br>
other than disabling -fast &amp; -ipo for intel-fortan compilers.
<br>
<p>Please check trunk in commit r21363.
<br>
<p><p>On Wednesday 03 June 2009 09:29:09 am DEVEL Michel wrote:
<br>
<span class="quotelev1">&gt; In fact I forgot to put back to '-fast -C' the FCFLAGS variable (from
</span><br>
<span class="quotelev1">&gt; '-O3 -C'). There is still an error (many opal_*_* subroutines not found
</span><br>
<span class="quotelev1">&gt; during the ipo step) at the same place, coming from the fact that
</span><br>
<span class="quotelev1">&gt; &quot;ld: attempted static link of dynamic object
</span><br>
<span class="quotelev1">&gt; `../../../opal/.libs/libopen-pal.so'
</span><br>
<span class="quotelev1">&gt; although I put --enable-static in the configure step...
</span><br>
<p><span class="quotelev1">&gt; Any idea of how to make the static libraries ?
</span><br>
<p>In order to statically link at least the intel-libraries, please add
<br>
&nbsp;&nbsp;-static-intel   (in previous intel compilers called -i-static)
<br>
to LDFLAGS
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9521.php">Ashley Pittman: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9519.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9524.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9524.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9527.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
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
