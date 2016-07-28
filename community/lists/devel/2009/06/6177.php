<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 13:58:18 2009" -->
<!-- isoreceived="20090603175818" -->
<!-- sent="Wed, 03 Jun 2009 13:58:02 -0400" -->
<!-- isosent="20090603175802" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="200906031358.03117.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0D08E092-8A62-427D-91B5-512FF1BC74EE_at_sun.com" -->
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
<strong>Date:</strong> 2009-06-03 13:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6178.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6176.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
On Wednesday 03 June 2009 12:58:50 pm Iain Bason wrote:
<br>
<span class="quotelev2">&gt; &gt; no, that's not an issue. The comment is correct: For any Fortran
</span><br>
<span class="quotelev2">&gt; &gt; integer*kind we need to have _some_ C-representation as well, otherwise we
</span><br>
<span class="quotelev2">&gt; &gt; disregard the type (tm), see e.g. the old  and resolved ticket #1094.
</span><br>
<span class="quotelev2">&gt; &gt; The representation chosen is set in opal/util/arch.c and is
</span><br>
<span class="quotelev2">&gt; &gt; conclusive as far as I can tell...
</span><br>
<span class="quotelev1">&gt; Doesn't that mean that the comment is misleading?  I interpret it as
</span><br>
<span class="quotelev1">&gt; saying that a Fortran &quot;default integer&quot; is always the same as a C
</span><br>
<span class="quotelev1">&gt; &quot;int&quot;.  I believe that you are saying that it really means that *any*
</span><br>
<span class="quotelev1">&gt; kind of Fortran integer must be the same as one of C's integral types,
</span><br>
<span class="quotelev1">&gt; or OpenMPI won't support it at all.  Shouldn't the comment be clearer?
</span><br>
Yes, the comment (actually in opal/util/arch.h -- not arch.c) while being 
<br>
correct IMHO, one could clarify it.
<br>
Here we are talking about Fortran's INTEGER vs. C's int. Now, the comment 
<br>
should say:
<br>
<p>** The Fortran INTEGER is dismissed here, since there is no
<br>
** platform known to me, were Fortran INTEGER does not match any 
<br>
** of the C-integral types.
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
<li><strong>Next message:</strong> <a href="6178.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6176.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
