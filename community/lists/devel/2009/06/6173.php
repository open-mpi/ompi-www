<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 12:58:58 2009" -->
<!-- isoreceived="20090603165858" -->
<!-- sent="Wed, 03 Jun 2009 12:58:50 -0400" -->
<!-- isosent="20090603165850" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="0D08E092-8A62-427D-91B5-512FF1BC74EE_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906021024.26158.keller_at_ornl.gov" -->
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
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 12:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6172.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6177.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2009, at 10:24 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; no, that's not an issue. The comment is correct: For any Fortran  
</span><br>
<span class="quotelev1">&gt; integer*kind
</span><br>
<span class="quotelev1">&gt; we need to have _some_ C-representation as well, otherwise we  
</span><br>
<span class="quotelev1">&gt; disregard the
</span><br>
<span class="quotelev1">&gt; type (tm), see e.g. the old  and resolved ticket #1094.
</span><br>
<span class="quotelev1">&gt; The representation chosen is set in opal/util/arch.c and is  
</span><br>
<span class="quotelev1">&gt; conclusive as far
</span><br>
<span class="quotelev1">&gt; as I can tell...
</span><br>
<p>Doesn't that mean that the comment is misleading?  I interpret it as  
<br>
saying that a Fortran &quot;default integer&quot; is always the same as a C  
<br>
&quot;int&quot;.  I believe that you are saying that it really means that *any*  
<br>
kind of Fortran integer must be the same as one of C's integral types,  
<br>
or OpenMPI won't support it at all.  Shouldn't the comment be clearer?
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6172.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6177.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
