<?
$subject_val = "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 02:10:49 2012" -->
<!-- isoreceived="20120222071049" -->
<!-- sent="Tue, 21 Feb 2012 23:10:36 -0800" -->
<!-- isosent="20120222071036" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux" -->
<!-- id="4F4494EC.6090006_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F44393A.9000606_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-22 02:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10557.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10555.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10551.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10565.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10565.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More notes:
<br>
<p>I've tested ompi-1.5.4 and it has the same problem.  So, this is NOT a 
<br>
regression.
<br>
<p>Terry D. has observed that Ubuntu is NOT a supported platform for the 
<br>
Solaris Studio compilers.
<br>
So, I've reproduced on a Scientific Linux 5.5 platform (Red Hat 
<br>
Enterprise Linux 5.5 clone, like CentOS) to be sure that was NOT the cause.
<br>
<p>When I configure for the SS12.x compilers, I've been passing  
<br>
CXXFLAGS=&quot;-library=stlport4&quot; as the VT sub-configure has informed me I 
<br>
should, due to something wrong the the default STL.  I tried dropping 
<br>
that from configure, and THE BUILD WAS SUCCESSFUL.
<br>
<p>So, one has 2 choices:
<br>
+ build w/ SS12.2 without VT
<br>
+ update to SS12.3 and have VT
<br>
<p>I don't think there is sufficient reason to delay 1.5.5 for this.
<br>
<p>-Paul
<br>
<p>On 2/21/2012 4:39 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; A few things to note:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) This is NOT a problem w/ the SS12.3 compilers on the same machine.
</span><br>
<span class="quotelev1">&gt; So, one could say &quot;upgrade your compiler&quot; (a free download) and not 
</span><br>
<span class="quotelev1">&gt; delay 1.5.5 for this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) This is ONLY a problem on Linux, and not on Solaris (both SS12.2 
</span><br>
<span class="quotelev1">&gt; and SS12.3 tested for x86, x86-64, Sparc/v9 and Sparc/v8plus)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Testing the trunk I DON'T see the problem with either SS12.2 or 
</span><br>
<span class="quotelev1">&gt; SS12.3.
</span><br>
<span class="quotelev1">&gt; This is interesting, because it probably means that a u_char 
</span><br>
<span class="quotelev1">&gt; definition is SOMEWHERE in the headers (because libevent *is* getting 
</span><br>
<span class="quotelev1">&gt; built).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whatever else may be done, I think this should be fixed &quot;properly&quot; 
</span><br>
<span class="quotelev1">&gt; (whatever that may equate to) for 1.6.
</span><br>
<span class="quotelev1">&gt; The way I see it now, it feels like OMPI is getting a definition of 
</span><br>
<span class="quotelev1">&gt; u_char only &quot;by accident&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/21/2012 12:16 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Building the v1.5 branch on Linux with the Solaris Studio 12.2 
</span><br>
<span class="quotelev2">&gt;&gt; compilers I see the following failure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 797: Error: Type name expected 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 798: Error: Type name expected 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 1184: Error: &quot;,&quot; expected 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead of &quot;*&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Where line 1184 is a prototype containing &quot;u_char *&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I can find, only several files below opal/event/ contain 
</span><br>
<span class="quotelev2">&gt;&gt; any use of &quot;u_char&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; There is a typedef for u_char in hwloc, but no use that I could see.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To the best of my knowledge u_char is NOT defined by any standard, 
</span><br>
<span class="quotelev2">&gt;&gt; and thus there is no particular header one can reliably find it in.
</span><br>
<span class="quotelev2">&gt;&gt; The alternatives, of course are &quot;unsigned char&quot; or &quot;uint8_t&quot; (defined 
</span><br>
<span class="quotelev2">&gt;&gt; in stdint.h).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had a look at the trunk and VISUALLY is appears the same problem 
</span><br>
<span class="quotelev2">&gt;&gt; exists in:
</span><br>
<span class="quotelev2">&gt;&gt;    opal/event/event.h
</span><br>
<span class="quotelev2">&gt;&gt;    opal/mca/event/libevent2013/libevent/event.h
</span><br>
<span class="quotelev2">&gt;&gt; However, my testing is currently confined to the v1.5 branch in the 
</span><br>
<span class="quotelev2">&gt;&gt; hopes of finally getting the next 1.5.5rc out the door.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="10557.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10555.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10551.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10565.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10565.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
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
