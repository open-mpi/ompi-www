<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 09:17:08 2009" -->
<!-- isoreceived="20090604131708" -->
<!-- sent="Thu, 04 Jun 2009 09:16:53 -0400" -->
<!-- isosent="20090604131653" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="200906040916.53713.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="12004196-398D-453E-8AD7-0CB96D902BBA_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal / fortran / Flogical<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 09:16:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6180.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6178.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6178.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6180.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6180.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Iain,
<br>
OK, let's go back to the initial question, Jeff's comment ,-)
<br>
I was referring to:
<br>
<p>arch.h:53:** The fortran integer is dismissed here, since there is no
<br>
arch.h:54:** platform known to me, were fortran and C-integer do not match
<br>
<span class="quotelev1">&gt; You can tell the intel compiler (and maybe others?) to compile
</span><br>
<span class="quotelev1">&gt; fortran with double-sized integers and reals.  Are we disregarding
</span><br>
<span class="quotelev1">&gt; this?  I.e., does this make this portion of the datatype
</span><br>
<span class="quotelev1">&gt; heterogeneity detection incorrect?
</span><br>
<p>IMHO the comment is correct. Let me rephrase my last email to be more exact:
<br>
Within architectural representation, we disregard representation of Fortran 
<br>
INTEGER, as there needs to be some equivalent C integral type in order to 
<br>
support it.
<br>
<p><p>Please note, that other INTEGER* types (star-notation, probably the source of 
<br>
confusion in the first answer) may not be supported in Open MPI, as there is 
<br>
no C representation, e.g. on Linux x86-64:
<br>
checking if Fortran 77 compiler supports INTEGER*16... yes
<br>
checking size of Fortran 77 INTEGER*16... 16
<br>
checking for C type corresponding to INTEGER*16... not found
<br>
configure: WARNING: *** Did not find corresponding C type
<br>
<p>Other types may have different alignment requirements,
<br>
e.g. on Linux x86-64 using icc:
<br>
checking size of short... 2
<br>
checking alignment of short... 2
<br>
&nbsp;&nbsp;&nbsp;while
<br>
checking size of Fortran 77 INTEGER*2... 2
<br>
checking for C type corresponding to INTEGER*2... short
<br>
checking alignment of Fortran INTEGER*2... 16
<br>
<p><p>Do You have a suggestion to clarify the comment?
<br>
<p><p>With best regards,
<br>
Rainer
<br>
<p><p><p><p><p>On Wednesday 03 June 2009 02:27:42 pm Iain Bason wrote:
<br>
<span class="quotelev1">&gt; On Jun 3, 2009, at 1:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm not entirely sure what comment is being discussed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff said:
</span><br>
<span class="quotelev2">&gt; &gt; I see the following comment:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** The fortran integer is dismissed here, since there is no
</span><br>
<span class="quotelev2">&gt; &gt; ** platform known to me, were fortran and C-integer do not match
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can tell the intel compiler (and maybe others?) to compile
</span><br>
<span class="quotelev2">&gt; &gt; fortran with double-sized integers and reals.  Are we disregarding
</span><br>
<span class="quotelev2">&gt; &gt; this?  I.e., does this make this portion of the datatype
</span><br>
<span class="quotelev2">&gt; &gt; heterogeneity detection incorrect?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rainer said:
</span><br>
<span class="quotelev2">&gt; &gt; no, that's not an issue. The comment is correct: For any Fortran
</span><br>
<span class="quotelev2">&gt; &gt; integer*kind
</span><br>
<span class="quotelev2">&gt; &gt; we need to have _some_ C-representation as well, otherwise we
</span><br>
<span class="quotelev2">&gt; &gt; disregard the
</span><br>
<span class="quotelev2">&gt; &gt; type (tm), see e.g. the old  and resolved ticket #1094.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I said:
</span><br>
<span class="quotelev2">&gt; &gt; Doesn't that mean that the comment is misleading?  I interpret it as
</span><br>
<span class="quotelev2">&gt; &gt; saying that a Fortran &quot;default integer&quot; is always the same as a C
</span><br>
<span class="quotelev2">&gt; &gt; &quot;int&quot;.  I believe that you are saying that it really means that
</span><br>
<span class="quotelev2">&gt; &gt; *any* kind of Fortran integer must be the same as one of C's
</span><br>
<span class="quotelev2">&gt; &gt; integral types, or OpenMPI won't support it at all.  Shouldn't the
</span><br>
<span class="quotelev2">&gt; &gt; comment be clearer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that you are talking about a different comment:
</span><br>
<span class="quotelev2">&gt; &gt;     * RHC: technically, use of the ompi_ prefix is
</span><br>
<span class="quotelev2">&gt; &gt;     * an abstraction violation. However, this is actually
</span><br>
<span class="quotelev2">&gt; &gt;     * an error in our configure scripts that transcends
</span><br>
<span class="quotelev2">&gt; &gt;     * all the data types and eventually should be fixed.
</span><br>
<span class="quotelev2">&gt; &gt;     * The guilty part is f77_check.m4. Fixing it right
</span><br>
<span class="quotelev2">&gt; &gt;     * now is beyond a reasonable scope - this comment is
</span><br>
<span class="quotelev2">&gt; &gt;     * placed here to explain the abstraction break and
</span><br>
<span class="quotelev2">&gt; &gt;     * indicate that it will eventually be fixed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know whether anyone is using either of these comments to
</span><br>
<span class="quotelev1">&gt; justify anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="6180.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6178.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6178.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6180.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6180.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
