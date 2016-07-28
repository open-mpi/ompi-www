<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 16:04:41 2009" -->
<!-- isoreceived="20090303210441" -->
<!-- sent="Tue, 03 Mar 2009 13:04:14 -0800" -->
<!-- isosent="20090303210414" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="49AD9B4E.9050702_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2442F1A-E205-45EE-B1EC-0D6E041EB687_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] calling sendi earlier in the PML<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 16:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5569.php">Brian W. Barrett: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="5567.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5571.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5571.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; How about an MCA parameter to switch between this mechanism (early  
</span><br>
<span class="quotelev1">&gt; sendi) and the original behavior (late sendi)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the usual way that we resolve &quot;I want to do X / I want to do  
</span><br>
<span class="quotelev1">&gt; Y&quot; disputes.  :-)
</span><br>
<p>I see the smiley face, but am unsure how much of the message to apply it to.
<br>
<p>Assuming the MCA proposal is genuine (easy for implementor consensus? or 
<br>
easy for the user?  gee, lemme see, that's a tough choice...), I'll note 
<br>
that it's easy enough to do.  I've implemented the early-sendi-check by 
<br>
adding a function to ob1 to do the right thing.  So, I can call that 
<br>
function as soon as one enters the PML send.  The &quot;late sendi&quot; call is 
<br>
at a different call site.  So, one call site for &quot;early sendi&quot; and 
<br>
another for &quot;late sendi&quot;.  Easy to turn on/off.  We're not talking about 
<br>
many small codes changes pervading the source base.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5569.php">Brian W. Barrett: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="5567.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5571.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5571.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
