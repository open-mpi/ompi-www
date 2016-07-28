<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 12:34:44 2007" -->
<!-- isoreceived="20070718163444" -->
<!-- sent="Wed, 18 Jul 2007 18:29:28 +0200" -->
<!-- isosent="20070718162928" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?" -->
<!-- id="200707181829.28876.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F5496568-573C-47EA-BDE3-B65E7059E8E4_at_cisco.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 12:29:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1933.php">Rainer Keller: "Re: [OMPI devel] MPI_BOTTOM fixes: 1.2.4?"</a>
<li><strong>Previous message:</strong> <a href="1931.php">Jeff Squyres: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<li><strong>In reply to:</strong> <a href="1929.php">Jeff Squyres: "[OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>r14818 yes --- but there has otherwise not been any requests for this patch...
<br>
r15137 no, we agreed to put into 1.3
<br>
<p>Nevertheless, I posted a CMR for r14818, it does apply cleanly in 1.2-svn.
<br>
<p>Thanks,
<br>
Rainer
<br>
<p><p><p><p>On Wednesday 18 July 2007 17:46, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Rainer --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you want to get r14818 and r15137 into 1.2.4?  There's no CMR for
</span><br>
<span class="quotelev1">&gt; them.  Here's your commit messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r14818:
</span><br>
<span class="quotelev1">&gt;   - The optional Fortran datatypes may not be available
</span><br>
<span class="quotelev1">&gt;     Do not initialize them, if not.
</span><br>
<span class="quotelev1">&gt;     If initializing them, check for the correct C-equivalent type
</span><br>
<span class="quotelev1">&gt;     to copy from...
</span><br>
<span class="quotelev1">&gt;     Issue a warning, when a type (e.g. REAL*16) is not available to
</span><br>
<span class="quotelev1">&gt;     build the type (here COMPLEX*32).
</span><br>
<span class="quotelev1">&gt;     This fixes issues with ompi and pacx.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Works with intel-compiler and FCFLAGS=&quot;-i8 -r8&quot; on ia32.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r15137:
</span><br>
<span class="quotelev1">&gt; - Add the missing parts: add MPI_REAL2 to the end of the list
</span><br>
<span class="quotelev1">&gt;     of Fortran datatypes (mpif-common.h) and the list of registered
</span><br>
<span class="quotelev1">&gt;     datatypes: MOOG(REAL2).
</span><br>
<span class="quotelev1">&gt;     Configure and Compilation with ia32/gcc just finished, naturally
</span><br>
<span class="quotelev1">&gt;     without real2.
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1933.php">Rainer Keller: "Re: [OMPI devel] MPI_BOTTOM fixes: 1.2.4?"</a>
<li><strong>Previous message:</strong> <a href="1931.php">Jeff Squyres: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<li><strong>In reply to:</strong> <a href="1929.php">Jeff Squyres: "[OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<!-- nextthread="start" -->
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
