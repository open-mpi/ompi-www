<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 09:52:53 2009" -->
<!-- isoreceived="20090604135253" -->
<!-- sent="Thu, 4 Jun 2009 09:52:45 -0400" -->
<!-- isosent="20090604135245" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="B968C600-D647-4796-8A61-781AEFDB2DE7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906040916.53713.keller_at_ornl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 09:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6181.php">Eugene Loh: "[OMPI devel] svn up on FAQ"</a>
<li><strong>Previous message:</strong> <a href="6179.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6179.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6177.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2009, at 9:16 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; arch.h:53:** The fortran integer is dismissed here, since there is no
</span><br>
<span class="quotelev1">&gt; arch.h:54:** platform known to me, were fortran and C-integer do not  
</span><br>
<span class="quotelev1">&gt; match
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
<span class="quotelev1">&gt; IMHO the comment is correct. Let me rephrase my last email to be  
</span><br>
<span class="quotelev1">&gt; more exact:
</span><br>
<span class="quotelev1">&gt; Within architectural representation, we disregard representation of  
</span><br>
<span class="quotelev1">&gt; Fortran
</span><br>
<span class="quotelev1">&gt; INTEGER, as there needs to be some equivalent C integral type in  
</span><br>
<span class="quotelev1">&gt; order to
</span><br>
<span class="quotelev1">&gt; support it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I understand your explanation, but I don't think you're saying the  
<br>
same thing as that comment.  The comment is wrong, or perhaps it is  
<br>
misleading/imprecise: one possible interpretation of the current  
<br>
comment text is that it implies that there is no platform where  
<br>
fortran INTEGER and C int are not the same representation -- and that  
<br>
is wrong.
<br>
<p>What I think you're saying is that that is not how the comment is  
<br>
intended; that it is intended to say &quot;we only support fortran integer  
<br>
datatypes that have corresponding C integer datatypes.&quot;  In which case  
<br>
we should say *that*, not the misleading/imprecise comment that is  
<br>
there now.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6181.php">Eugene Loh: "[OMPI devel] svn up on FAQ"</a>
<li><strong>Previous message:</strong> <a href="6179.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6179.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6177.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
