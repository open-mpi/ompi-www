<?
$subject_val = "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 26 10:36:56 2010" -->
<!-- isoreceived="20101026143656" -->
<!-- sent="Tue, 26 Oct 2010 08:36:41 -0600" -->
<!-- isosent="20101026143641" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib" -->
<!-- id="9EE3C3AB-35D7-4669-97B4-BAA4C80AA2FC_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1010261342440.1631_at_jeaugeys" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-26 10:36:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8630.php">Joshua Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8628.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="8628.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8639.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll take a look at fixing this the right way today.
<br>
<p>Since I wrote both the original autogen.sh that guaranteed static-components was ordered and PREFIX code, I had considered it to be a documented feature that there was strong otdering in the static-components list.  So personally, I'd consider it a bug in autogen.pl, but I think we can work around it.
<br>
<p>Brian
<br>
<p>On Oct 26, 2010, at 6:01 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 26 Oct 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think this is the right way to fix it.  Sorry!  :-(
</span><br>
<span class="quotelev1">&gt; I don't think it is the right way to do it either :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I say this because it worked somewhat by luck before, and now it's 
</span><br>
<span class="quotelev2">&gt;&gt; broken.  If we put in another &quot;it'll work because of a side effect of an 
</span><br>
<span class="quotelev2">&gt;&gt; unintentional characteristic of the build system&quot; hack, it'll just 
</span><br>
<span class="quotelev2">&gt;&gt; likely break again someday if/when we change the build system.
</span><br>
<span class="quotelev1">&gt; I completely agree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd prefer a more robust solution that won't break as a side-effect of 
</span><br>
<span class="quotelev2">&gt;&gt; the build system.
</span><br>
<span class="quotelev1">&gt; I'd prefer too, but it would require adding much more logic in the 
</span><br>
<span class="quotelev1">&gt; framework, including component sort with priority. And since no-one except 
</span><br>
<span class="quotelev1">&gt; me seems to care about this functionality, I'm fine with this patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More generally, I understand your demand for high quality patches that do 
</span><br>
<span class="quotelev1">&gt; things The Right Way. However, I feel it's sometimes exagerated, 
</span><br>
<span class="quotelev1">&gt; especially when talking about parts of the code that don't meet these high 
</span><br>
<span class="quotelev1">&gt; quality standards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the end, my feeling is that we don't replace very bad (broken) code 
</span><br>
<span class="quotelev1">&gt; with bad (working) code because we want to wait for a perfect (never 
</span><br>
<span class="quotelev1">&gt; happening) code. I don't think it's beneficial to the project.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8630.php">Joshua Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8628.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="8628.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8639.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
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
