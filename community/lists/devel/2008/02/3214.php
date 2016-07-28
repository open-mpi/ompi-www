<?
$subject_val = "Re: [OMPI devel] more memchecker q's";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 13:00:47 2008" -->
<!-- isoreceived="20080212180047" -->
<!-- sent="Tue, 12 Feb 2008 19:00:34 +0100" -->
<!-- isosent="20080212180034" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] more memchecker q's" -->
<!-- id="47B1DEC2.6070203_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FDB49640-9641-4EC2-9195-631C2BE96D2E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] more memchecker q's<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 13:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3215.php">Jeff Squyres: "Re: [OMPI devel] more memchecker q's"</a>
<li><strong>Previous message:</strong> <a href="3213.php">Jeff Squyres: "Re: [OMPI devel] more vt woes"</a>
<li><strong>In reply to:</strong> <a href="3210.php">Jeff Squyres: "[OMPI devel] more memchecker q's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3215.php">Jeff Squyres: "Re: [OMPI devel] more memchecker q's"</a>
<li><strong>Reply:</strong> <a href="3215.php">Jeff Squyres: "Re: [OMPI devel] more memchecker q's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Sorry for that, I didn't know it before. Now it's fixed. Thanks a lot. :)
<br>
<p><p>Shiqing
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Why is memchecker.h included like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      #include &quot;ompi/include/ompi/memchecker.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't it be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      #include &quot;ompi/memchecker.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using the former will work in an SVN checkout, but won't work in a -- 
</span><br>
<span class="quotelev1">&gt; with-devel-headers installation (the latter should).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can this be fixed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                     
<a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing            Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
POSTAL:Nobelstrasse 19                email: fan_at_[hidden]     
ACTUAL:Allmandring 30
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3215.php">Jeff Squyres: "Re: [OMPI devel] more memchecker q's"</a>
<li><strong>Previous message:</strong> <a href="3213.php">Jeff Squyres: "Re: [OMPI devel] more vt woes"</a>
<li><strong>In reply to:</strong> <a href="3210.php">Jeff Squyres: "[OMPI devel] more memchecker q's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3215.php">Jeff Squyres: "Re: [OMPI devel] more memchecker q's"</a>
<li><strong>Reply:</strong> <a href="3215.php">Jeff Squyres: "Re: [OMPI devel] more memchecker q's"</a>
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
