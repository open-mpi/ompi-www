<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 09:57:51 2009" -->
<!-- isoreceived="20090602135751" -->
<!-- sent="Tue, 2 Jun 2009 09:57:46 -0400" -->
<!-- isosent="20090602135746" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="B103710F-C42B-41A7-860A-41CC18E8BC31_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906020908.20513.keller_at_ornl.gov" -->
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
<strong>Date:</strong> 2009-06-02 09:57:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6166.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6166.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2009, at 9:08 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Rainer -- is it safe for Ralph to move the arch.c stuff back up into
</span><br>
<span class="quotelev2">&gt; &gt; OMPI, or will that conflict with your stuff?
</span><br>
<span class="quotelev1">&gt; Yes, we use it.
</span><br>
<span class="quotelev1">&gt; Please leave it at the OPAL layer. We need a way to describe and  
</span><br>
<span class="quotelev1">&gt; store the
</span><br>
<span class="quotelev1">&gt; remote architecture at the OPAL layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Question about the fortran stuff in opal/util/arch.c...
<br>
<p>I see the following comment:
<br>
<p>** The fortran integer is dismissed here, since there is no
<br>
** platform known to me, were fortran and C-integer do not match
<br>
<p>You can tell the intel compiler (and maybe others?) to compile fortran  
<br>
with double-sized integers and reals.  Are we disregarding this?   
<br>
I.e., does this make this portion of the datatype heterogeneity  
<br>
detection incorrect?
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
<li><strong>Next message:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6166.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6166.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
