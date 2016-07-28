<?
$subject_val = "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 19:39:35 2012" -->
<!-- isoreceived="20120222003935" -->
<!-- sent="Tue, 21 Feb 2012 16:39:22 -0800" -->
<!-- isosent="20120222003922" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux" -->
<!-- id="4F44393A.9000606_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F43FBA5.9060302_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 19:39:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10552.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10550.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10543.php">Paul H. Hargrove: "[OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10556.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10556.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few things to note:
<br>
<p>1) This is NOT a problem w/ the SS12.3 compilers on the same machine.
<br>
So, one could say &quot;upgrade your compiler&quot; (a free download) and not 
<br>
delay 1.5.5 for this issue.
<br>
<p>2) This is ONLY a problem on Linux, and not on Solaris (both SS12.2 and 
<br>
SS12.3 tested for x86, x86-64, Sparc/v9 and Sparc/v8plus)
<br>
<p>3) Testing the trunk I DON'T see the problem with either SS12.2 or SS12.3.
<br>
This is interesting, because it probably means that a u_char definition 
<br>
is SOMEWHERE in the headers (because libevent *is* getting built).
<br>
<p>Whatever else may be done, I think this should be fixed &quot;properly&quot; 
<br>
(whatever that may equate to) for 1.6.
<br>
The way I see it now, it feels like OMPI is getting a definition of 
<br>
u_char only &quot;by accident&quot;.
<br>
<p>-Paul
<br>
<p>On 2/21/2012 12:16 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Building the v1.5 branch on Linux with the Solaris Studio 12.2 
</span><br>
<span class="quotelev1">&gt; compilers I see the following failure:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 797: Error: Type name expected 
</span><br>
<span class="quotelev2">&gt;&gt; instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 798: Error: Type name expected 
</span><br>
<span class="quotelev2">&gt;&gt; instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 1184: Error: &quot;,&quot; expected instead 
</span><br>
<span class="quotelev2">&gt;&gt; of &quot;*&quot;.
</span><br>
<span class="quotelev1">&gt; Where line 1184 is a prototype containing &quot;u_char *&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I can find, only several files below opal/event/ contain any 
</span><br>
<span class="quotelev1">&gt; use of &quot;u_char&quot;.
</span><br>
<span class="quotelev1">&gt; There is a typedef for u_char in hwloc, but no use that I could see.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To the best of my knowledge u_char is NOT defined by any standard, and 
</span><br>
<span class="quotelev1">&gt; thus there is no particular header one can reliably find it in.
</span><br>
<span class="quotelev1">&gt; The alternatives, of course are &quot;unsigned char&quot; or &quot;uint8_t&quot; (defined 
</span><br>
<span class="quotelev1">&gt; in stdint.h).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had a look at the trunk and VISUALLY is appears the same problem 
</span><br>
<span class="quotelev1">&gt; exists in:
</span><br>
<span class="quotelev1">&gt;    opal/event/event.h
</span><br>
<span class="quotelev1">&gt;    opal/mca/event/libevent2013/libevent/event.h
</span><br>
<span class="quotelev1">&gt; However, my testing is currently confined to the v1.5 branch in the 
</span><br>
<span class="quotelev1">&gt; hopes of finally getting the next 1.5.5rc out the door.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. HargrovePHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10552.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10550.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10543.php">Paul H. Hargrove: "[OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10556.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10556.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
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
