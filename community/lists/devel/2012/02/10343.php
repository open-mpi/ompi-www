<?
$subject_val = "Re: [OMPI devel] 1.4.5rc5 has been released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 15:13:50 2012" -->
<!-- isoreceived="20120208201350" -->
<!-- sent="Wed, 08 Feb 2012 12:13:28 -0800" -->
<!-- isosent="20120208201328" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc5 has been released" -->
<!-- id="4F32D768.7060008_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F32C996.4060907_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc5 has been released<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 15:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10344.php">Barrett, Brian W: "[OMPI devel] Matched probe support"</a>
<li><strong>Previous message:</strong> <a href="10342.php">Jeff Squyres: "[OMPI devel] Autotools update"</a>
<li><strong>In reply to:</strong> <a href="10341.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/8/2012 11:14 AM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/8/2012 3:25 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + Building w/ Solaris Studio 12.2 or 12.3 on Linux x86-64, with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;-m32&quot; required setting LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt;&gt; Can the LD_LIBRARY_PATH be substituted with a rpath change in LDFLAGS 
</span><br>
<span class="quotelev2">&gt;&gt; of the build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry sent more specific instructions for that offlist, and I am 
</span><br>
<span class="quotelev1">&gt; testing now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I can confirm that both Solaris Studio 12.2 and 12.3 work with 
<br>
{C,CXX,F,FC}FLAGS=-m22 with the addition of LDFLAGS=&quot;-L/lib32 -R/lib32&quot; 
<br>
on the configure line, as suggested by Terry.
<br>
<p>I went to try 12 and 12.1 for good measure, but found that their C++ 
<br>
compilers choke on /usr/include/stdlib.h.
<br>
So, since the original error was a c++ one, I didn't pursue them any 
<br>
further.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10344.php">Barrett, Brian W: "[OMPI devel] Matched probe support"</a>
<li><strong>Previous message:</strong> <a href="10342.php">Jeff Squyres: "[OMPI devel] Autotools update"</a>
<li><strong>In reply to:</strong> <a href="10341.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
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
