<?
$subject_val = "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 26 08:02:55 2010" -->
<!-- isoreceived="20101026120255" -->
<!-- sent="Tue, 26 Oct 2010 14:01:39 +0200 (CEST)" -->
<!-- isosent="20101026120139" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib" -->
<!-- id="alpine.DEB.2.00.1010261342440.1631_at_jeaugeys" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="943FE11C-A76D-4552-B567-660B7FB50FE6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-26 08:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8629.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="8627.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="8627.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8629.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="8629.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 26 Oct 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I don't think this is the right way to fix it.  Sorry!  :-(
</span><br>
I don't think it is the right way to do it either :-)
<br>
<p><span class="quotelev1">&gt; I say this because it worked somewhat by luck before, and now it's 
</span><br>
<span class="quotelev1">&gt; broken.  If we put in another &quot;it'll work because of a side effect of an 
</span><br>
<span class="quotelev1">&gt; unintentional characteristic of the build system&quot; hack, it'll just 
</span><br>
<span class="quotelev1">&gt; likely break again someday if/when we change the build system.
</span><br>
I completely agree.
<br>
<p><span class="quotelev1">&gt; I'd prefer a more robust solution that won't break as a side-effect of 
</span><br>
<span class="quotelev1">&gt; the build system.
</span><br>
I'd prefer too, but it would require adding much more logic in the 
<br>
framework, including component sort with priority. And since no-one except 
<br>
me seems to care about this functionality, I'm fine with this patch.
<br>
<p>More generally, I understand your demand for high quality patches that do 
<br>
things The Right Way. However, I feel it's sometimes exagerated, 
<br>
especially when talking about parts of the code that don't meet these high 
<br>
quality standards.
<br>
<p>In the end, my feeling is that we don't replace very bad (broken) code 
<br>
with bad (working) code because we want to wait for a perfect (never 
<br>
happening) code. I don't think it's beneficial to the project.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8629.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="8627.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="8627.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8629.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="8629.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
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
