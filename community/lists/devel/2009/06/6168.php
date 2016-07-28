<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 10:24:38 2009" -->
<!-- isoreceived="20090602142438" -->
<!-- sent="Tue, 02 Jun 2009 10:24:25 -0400" -->
<!-- isosent="20090602142425" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="200906021024.26158.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B103710F-C42B-41A7-860A-41CC18E8BC31_at_cisco.com" -->
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
<strong>Date:</strong> 2009-06-02 10:24:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6169.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6167.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6167.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6169.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6169.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
no, that's not an issue. The comment is correct: For any Fortran integer*kind 
<br>
we need to have _some_ C-representation as well, otherwise we disregard the 
<br>
type (tm), see e.g. the old  and resolved ticket #1094.
<br>
The representation chosen is set in opal/util/arch.c and is conclusive as far 
<br>
as I can tell...
<br>
<p>We do however still have a buglet with FCFLAGS='-i8 -r16', but that's with our 
<br>
internal storage of [cdw]_f_to_c_index, so it's a different issue (ticket 
<br>
#1812).
<br>
<p>CU,
<br>
Rainer
<br>
<p>PS: I especially like the comment in opal/util/arch.c ;-):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* sizeof fortran logical
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* RHC: technically, use of the ompi_ prefix is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* an abstraction violation. However, this is actually
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* an error in our configure scripts that transcends
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* all the data types and eventually should be fixed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* The guilty part is f77_check.m4. Fixing it right
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* now is beyond a reasonable scope - this comment is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* placed here to explain the abstraction break and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* indicate that it will eventually be fixed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
<p><p><p>On Tuesday 02 June 2009 09:57:46 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 2, 2009, at 9:08 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Rainer -- is it safe for Ralph to move the arch.c stuff back up into
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OMPI, or will that conflict with your stuff?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, we use it.
</span><br>
<span class="quotelev2">&gt; &gt; Please leave it at the OPAL layer. We need a way to describe and
</span><br>
<span class="quotelev2">&gt; &gt; store the
</span><br>
<span class="quotelev2">&gt; &gt; remote architecture at the OPAL layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question about the fortran stuff in opal/util/arch.c...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the following comment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** The fortran integer is dismissed here, since there is no
</span><br>
<span class="quotelev1">&gt; ** platform known to me, were fortran and C-integer do not match
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can tell the intel compiler (and maybe others?) to compile fortran
</span><br>
<span class="quotelev1">&gt; with double-sized integers and reals.  Are we disregarding this?
</span><br>
<span class="quotelev1">&gt; I.e., does this make this portion of the datatype heterogeneity
</span><br>
<span class="quotelev1">&gt; detection incorrect?
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
<li><strong>Next message:</strong> <a href="6169.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6167.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6167.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6169.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6169.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
