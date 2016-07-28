<?
$subject_val = "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 15:16:36 2012" -->
<!-- isoreceived="20120222201636" -->
<!-- sent="Wed, 22 Feb 2012 12:16:23 -0800" -->
<!-- isosent="20120222201623" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux" -->
<!-- id="4F454D17.8070405_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F4494EC.6090006_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-22 15:16:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10566.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10564.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10556.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10570.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10570.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10581.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I have the beginning of a fix for this issue.
<br>
<p>I had not even noticed earlier that the error in event.h is from the C++ 
<br>
compiler, when compiling file.cxx in the c++ bindings.  That makes the 
<br>
vendor-specific addition of &quot;-library=stlport4&quot; to CXXFLAGS quite 
<br>
relevant to the problem/solution.
<br>
<p>It eventually occurred to me that when VT's sub-configure told me to add 
<br>
configure arguments, I could have used --with-contrib-vt-flags to pass 
<br>
that ONLY to VT and perhaps NOT mess with whatever karma was providing 
<br>
the definition of u_char.  However, when I tried that I was disappointed 
<br>
to find that the bit of configure logic that suggests/requires 
<br>
CXXFLAGS=-library=stlport4 (from ompi/contrib/vt/configure.m4) runs 
<br>
BEFORE the processing of --with-contrib-vt-flags.  So, that was a dead end.
<br>
<p>So, the next idea was to look for a fix specific to sltport.  I tried 
<br>
adding near the top of opal/event/event.h (after the WINDOWS equivalent):
<br>
<span class="quotelev1">&gt; #ifdef STLPORT
</span><br>
<span class="quotelev1">&gt; typedef unsigned char u_char;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<p>That managed to clear up the original problem w/ SS12.2.
<br>
With SS12.3, things also built fine.
<br>
This suggests the typedef is not &quot;conflicting&quot; with whatever other defn 
<br>
was present.
<br>
I think the &quot;safety&quot; of this needs to be examined more widely before 
<br>
this can be adopted.
<br>
My concern is that some system could &quot;typedef char u_char&quot; if it has 
<br>
char unsigned by default, leading to a conflict.
<br>
Now that would, I suppose, only be a problem if STLPORT is also defined.
<br>
So, maybe I am over thinking this.
<br>
<p>-Paul
<br>
<p>On 2/21/2012 11:10 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; More notes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tested ompi-1.5.4 and it has the same problem.  So, this is NOT a 
</span><br>
<span class="quotelev1">&gt; regression.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. has observed that Ubuntu is NOT a supported platform for the 
</span><br>
<span class="quotelev1">&gt; Solaris Studio compilers.
</span><br>
<span class="quotelev1">&gt; So, I've reproduced on a Scientific Linux 5.5 platform (Red Hat 
</span><br>
<span class="quotelev1">&gt; Enterprise Linux 5.5 clone, like CentOS) to be sure that was NOT the 
</span><br>
<span class="quotelev1">&gt; cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I configure for the SS12.x compilers, I've been passing  
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot;-library=stlport4&quot; as the VT sub-configure has informed me I 
</span><br>
<span class="quotelev1">&gt; should, due to something wrong the the default STL.  I tried dropping 
</span><br>
<span class="quotelev1">&gt; that from configure, and THE BUILD WAS SUCCESSFUL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, one has 2 choices:
</span><br>
<span class="quotelev1">&gt; + build w/ SS12.2 without VT
</span><br>
<span class="quotelev1">&gt; + update to SS12.3 and have VT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think there is sufficient reason to delay 1.5.5 for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/21/2012 4:39 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A few things to note:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) This is NOT a problem w/ the SS12.3 compilers on the same machine.
</span><br>
<span class="quotelev2">&gt;&gt; So, one could say &quot;upgrade your compiler&quot; (a free download) and not 
</span><br>
<span class="quotelev2">&gt;&gt; delay 1.5.5 for this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) This is ONLY a problem on Linux, and not on Solaris (both SS12.2 
</span><br>
<span class="quotelev2">&gt;&gt; and SS12.3 tested for x86, x86-64, Sparc/v9 and Sparc/v8plus)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) Testing the trunk I DON'T see the problem with either SS12.2 or 
</span><br>
<span class="quotelev2">&gt;&gt; SS12.3.
</span><br>
<span class="quotelev2">&gt;&gt; This is interesting, because it probably means that a u_char 
</span><br>
<span class="quotelev2">&gt;&gt; definition is SOMEWHERE in the headers (because libevent *is* getting 
</span><br>
<span class="quotelev2">&gt;&gt; built).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Whatever else may be done, I think this should be fixed &quot;properly&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (whatever that may equate to) for 1.6.
</span><br>
<span class="quotelev2">&gt;&gt; The way I see it now, it feels like OMPI is getting a definition of 
</span><br>
<span class="quotelev2">&gt;&gt; u_char only &quot;by accident&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/21/2012 12:16 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Building the v1.5 branch on Linux with the Solaris Studio 12.2 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers I see the following failure:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 797: Error: Type name expected 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 798: Error: Type name expected 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 1184: Error: &quot;,&quot; expected 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instead of &quot;*&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where line 1184 is a prototype containing &quot;u_char *&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As far as I can find, only several files below opal/event/ contain 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any use of &quot;u_char&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a typedef for u_char in hwloc, but no use that I could see.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To the best of my knowledge u_char is NOT defined by any standard, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and thus there is no particular header one can reliably find it in.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The alternatives, of course are &quot;unsigned char&quot; or &quot;uint8_t&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (defined in stdint.h).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had a look at the trunk and VISUALLY is appears the same problem 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exists in:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal/event/event.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal/mca/event/libevent2013/libevent/event.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, my testing is currently confined to the v1.5 branch in the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hopes of finally getting the next 1.5.5rc out the door.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10566.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10564.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10556.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10570.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10570.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10581.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
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
