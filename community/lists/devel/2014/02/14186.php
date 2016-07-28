<?
$subject_val = "Re: [OMPI devel] RFC: optimize probe in ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 19 14:29:22 2014" -->
<!-- isoreceived="20140219192922" -->
<!-- sent="Wed, 19 Feb 2014 11:29:12 -0800" -->
<!-- isosent="20140219192912" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: optimize probe in ob1" -->
<!-- id="CAAvDA17JtPwcb0eozL4vtK-VGo-15FWgcxwN0vzdCeH28iN3pQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3B228841-7038-4CC5-9BCD-4E5F4B899A0F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: optimize probe in ob1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-19 14:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14187.php">Brice Goglin: "[OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
<li><strong>Previous message:</strong> <a href="14185.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 19, 2014 at 8:37 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Feb 19, 2014, at 6:36 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is one minor thing I would suggest to change. In your patch
</span><br>
<span class="quotelev1">&gt; in_unexpected_list is defined as a bool, which translates to an int on most
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This statement isn't true.  sizeof(bool)==1 on my Mac and on our x86_64
</span><br>
<span class="quotelev1">&gt; Linux cluster at Cisco.  I only mention it because this seems to be a
</span><br>
<span class="quotelev1">&gt; common myth for some reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>On x86 or x86-64 with Linux, Mac OSX, Solaris or {Net,Open,Free}BSD
<br>
sizeof(_Bool) is 1.  Same on PPC32 and PPC64 with Linux and Mac OSX.  [I
<br>
grepped a heap of recent configure output to be sure].
<br>
<p>I do agree, however, that if you are explicitly packing a structure you
<br>
should use uint8_t.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14186/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14187.php">Brice Goglin: "[OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
<li><strong>Previous message:</strong> <a href="14185.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
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
