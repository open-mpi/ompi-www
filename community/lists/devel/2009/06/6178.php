<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 14:27:51 2009" -->
<!-- isoreceived="20090603182751" -->
<!-- sent="Wed, 03 Jun 2009 14:27:42 -0400" -->
<!-- isosent="20090603182742" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="12004196-398D-453E-8AD7-0CB96D902BBA_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0906031030g7b002b5ax2240084e80ea1ba1_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-06-03 14:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6179.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6177.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6179.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6179.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2009, at 1:30 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm not entirely sure what comment is being discussed.
</span><br>
<p>Jeff said:
<br>
<p><span class="quotelev1">&gt; I see the following comment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** The fortran integer is dismissed here, since there is no
</span><br>
<span class="quotelev1">&gt; ** platform known to me, were fortran and C-integer do not match
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can tell the intel compiler (and maybe others?) to compile  
</span><br>
<span class="quotelev1">&gt; fortran with double-sized integers and reals.  Are we disregarding  
</span><br>
<span class="quotelev1">&gt; this?  I.e., does this make this portion of the datatype  
</span><br>
<span class="quotelev1">&gt; heterogeneity detection incorrect?
</span><br>
<p>Rainer said:
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
<p>I said:
<br>
<p><span class="quotelev1">&gt; Doesn't that mean that the comment is misleading?  I interpret it as  
</span><br>
<span class="quotelev1">&gt; saying that a Fortran &quot;default integer&quot; is always the same as a C  
</span><br>
<span class="quotelev1">&gt; &quot;int&quot;.  I believe that you are saying that it really means that  
</span><br>
<span class="quotelev1">&gt; *any* kind of Fortran integer must be the same as one of C's  
</span><br>
<span class="quotelev1">&gt; integral types, or OpenMPI won't support it at all.  Shouldn't the  
</span><br>
<span class="quotelev1">&gt; comment be clearer?
</span><br>
<p>I believe that you are talking about a different comment:
<br>
<p><span class="quotelev1">&gt;     * RHC: technically, use of the ompi_ prefix is
</span><br>
<span class="quotelev1">&gt;     * an abstraction violation. However, this is actually
</span><br>
<span class="quotelev1">&gt;     * an error in our configure scripts that transcends
</span><br>
<span class="quotelev1">&gt;     * all the data types and eventually should be fixed.
</span><br>
<span class="quotelev1">&gt;     * The guilty part is f77_check.m4. Fixing it right
</span><br>
<span class="quotelev1">&gt;     * now is beyond a reasonable scope - this comment is
</span><br>
<span class="quotelev1">&gt;     * placed here to explain the abstraction break and
</span><br>
<span class="quotelev1">&gt;     * indicate that it will eventually be fixed
</span><br>
<p>I don't know whether anyone is using either of these comments to  
<br>
justify anything.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6179.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6177.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6179.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6179.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
