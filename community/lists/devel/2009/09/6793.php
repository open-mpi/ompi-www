<?
$subject_val = "Re: [OMPI devel] libtool issue with crs/self";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  7 15:29:27 2009" -->
<!-- isoreceived="20090907192927" -->
<!-- sent="Mon, 7 Sep 2009 21:29:20 +0200" -->
<!-- isosent="20090907192920" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libtool issue with crs/self" -->
<!-- id="20090907192919.GH16584_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54825A94-6C0F-425F-B798-712E628160CD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libtool issue with crs/self<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-07 15:29:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6794.php">Chris Samuel: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6792.php">Nadia Derbey: "Re: [OMPI devel] version number issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6590.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>* Josh Hursey wrote on Wed, Aug 05, 2009 at 04:51:59PM CEST:
<br>
<span class="quotelev1">&gt; I noticed that the &quot;-fvisibility=hidden&quot; option when passed to
</span><br>
<span class="quotelev1">&gt; libltdl will cause it to fail in its configure test for:
</span><br>
<span class="quotelev1">&gt;  &quot;checking whether a program can dlopen itself&quot;
</span><br>
<span class="quotelev1">&gt; This is because the symbol they are trying to look for with dlsym()
</span><br>
<span class="quotelev1">&gt; is not postfixed with:
</span><br>
<span class="quotelev1">&gt;   __attribute__ ((visibility(&quot;default&quot;)))
</span><br>
<span class="quotelev1">&gt; If I do that, then the test passes correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure if this is a configure bug in Libtool or not.
</span><br>
<p>I've brought this up on the Libtool list:
<br>
&lt;<a href="http://thread.gmane.org/gmane.comp.gnu.libtool.patches/9446">http://thread.gmane.org/gmane.comp.gnu.libtool.patches/9446</a>&gt;
<br>
<p>Thanks,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6794.php">Chris Samuel: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6792.php">Nadia Derbey: "Re: [OMPI devel] version number issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6590.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
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
