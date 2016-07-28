<?
$subject_val = "Re: [MTT devel] MTT on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 11:59:12 2009" -->
<!-- isoreceived="20090311155912" -->
<!-- sent="Wed, 11 Mar 2009 11:59:04 -0400" -->
<!-- isosent="20090311155904" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT on Windows" -->
<!-- id="961D500B-91D4-4CA6-AA4F-9998DBB9C105_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B7DDA6.4070302_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT on Windows<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 11:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0331.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0329.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0329.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0331.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0331.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2009, at 11:49 AM, Shiqing Fan wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I mention it because you're modifying LD_LIBRARY_PATH above -- so  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev2">&gt; &gt; should restore it when you're done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aha, yes, you're right. The portion of modifying LD_LIBRARY_PATH  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; also be removed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If you don't need it for cmake, then ya, go ahead and remove it.  We  
<br>
do need it on the GNU side.
<br>
<p><span class="quotelev2">&gt; &gt; Gotcha.  So if our Cmake system is only targeted at windows, then I
</span><br>
<span class="quotelev2">&gt; &gt; think OMPI.pm can make the determination automatically to call the
</span><br>
<span class="quotelev2">&gt; &gt; GNU_Install or Cmake version.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps the _do_step stuff should be factored out into a  
</span><br>
<span class="quotelev1">&gt; separate .pm
</span><br>
<span class="quotelev2">&gt; &gt; so that you don't have to duplicate all that code between
</span><br>
<span class="quotelev2">&gt; &gt; GNU_Install.pm and Cmake.pm...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that might be the easiest and best solution so far. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Cool.
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
<li><strong>Next message:</strong> <a href="0331.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0329.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0329.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0331.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0331.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
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
