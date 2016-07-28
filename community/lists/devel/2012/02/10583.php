<?
$subject_val = "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 23 12:47:40 2012" -->
<!-- isoreceived="20120223174740" -->
<!-- sent="Thu, 23 Feb 2012 12:47:35 -0500" -->
<!-- isosent="20120223174735" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux" -->
<!-- id="654D76B1-CF72-47D6-B590-1BB63B16F07E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F467B33.2030201_at_lbl.gov" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-23 12:47:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10584.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10582.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10582.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10584.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10584.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool; thanks for setting this straight.
<br>
<p>Doesn't change the outcome, though -- I updated the README (i.e., something like &quot;update your Solaris Studio install!&quot;).  We have similar statements about other broken/buggy compilers.
<br>
<p><p>On Feb 23, 2012, at 12:45 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Just a Minor correction.  Instead of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The C++ part of the build (VT) is deep within the OMPI build; it works fine with the C compiler all the way up until that point
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The correct facts are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The C++ part of the VT build requires CXXFLAGS=-library=stlport4 when using the SS12 compilers.
</span><br>
<span class="quotelev1">&gt; - Addition of that flag leads to the reported error when compiling ompi/mpi/cxx/file.cc (NOT in VT)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/23/2012 7:23 AM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Terry and I talked about this on the phone.  Supporting facts (some of these are repeated from Paul's prior posts):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - This happens with the C++ SS 12.2 compiler on supported Linux platforms
</span><br>
<span class="quotelev2">&gt;&gt; - The C++ part of the build (VT) is deep within the OMPI build; it works fine with the C compiler all the way up until that point
</span><br>
<span class="quotelev2">&gt;&gt; - /usr/include/sys/types.h typedefs u_char, and is directly included in event.h
</span><br>
<span class="quotelev2">&gt;&gt; - So SS 12.2/C++ is somehow mucking up&lt;sys/types.h&gt;  to make that typedef not be available
</span><br>
<span class="quotelev2">&gt;&gt; - The upgrade from 12.2 to 12.3 is a free download
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This feels like a SS 12.2 C++ compiler bug to me.  And it's free to upgrade to a version that does not have this problem.  Hence, this has become a README note.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The road to v1.5.5 just got a little shorter.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 22, 2012, at 3:16 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I have the beginning of a fix for this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had not even noticed earlier that the error in event.h is from the C++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler, when compiling file.cxx in the c++ bindings.  That makes the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor-specific addition of &quot;-library=stlport4&quot; to CXXFLAGS quite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relevant to the problem/solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It eventually occurred to me that when VT's sub-configure told me to add
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure arguments, I could have used --with-contrib-vt-flags to pass
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that ONLY to VT and perhaps NOT mess with whatever karma was providing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the definition of u_char.  However, when I tried that I was disappointed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to find that the bit of configure logic that suggests/requires
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXXFLAGS=-library=stlport4 (from ompi/contrib/vt/configure.m4) runs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BEFORE the processing of --with-contrib-vt-flags.  So, that was a dead end.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, the next idea was to look for a fix specific to sltport.  I tried
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adding near the top of opal/event/event.h (after the WINDOWS equivalent):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #ifdef STLPORT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; typedef unsigned char u_char;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That managed to clear up the original problem w/ SS12.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With SS12.3, things also built fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This suggests the typedef is not &quot;conflicting&quot; with whatever other defn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was present.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the &quot;safety&quot; of this needs to be examined more widely before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this can be adopted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My concern is that some system could &quot;typedef char u_char&quot; if it has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; char unsigned by default, leading to a conflict.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now that would, I suppose, only be a problem if STLPORT is also defined.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, maybe I am over thinking this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/21/2012 11:10 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; More notes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've tested ompi-1.5.4 and it has the same problem.  So, this is NOT a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regression.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Terry D. has observed that Ubuntu is NOT a supported platform for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Solaris Studio compilers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, I've reproduced on a Scientific Linux 5.5 platform (Red Hat
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Enterprise Linux 5.5 clone, like CentOS) to be sure that was NOT the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cause.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I configure for the SS12.x compilers, I've been passing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CXXFLAGS=&quot;-library=stlport4&quot; as the VT sub-configure has informed me I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should, due to something wrong the the default STL.  I tried dropping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that from configure, and THE BUILD WAS SUCCESSFUL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, one has 2 choices:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + build w/ SS12.2 without VT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + update to SS12.3 and have VT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't think there is sufficient reason to delay 1.5.5 for this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2/21/2012 4:39 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A few things to note:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1) This is NOT a problem w/ the SS12.3 compilers on the same machine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, one could say &quot;upgrade your compiler&quot; (a free download) and not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; delay 1.5.5 for this issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) This is ONLY a problem on Linux, and not on Solaris (both SS12.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and SS12.3 tested for x86, x86-64, Sparc/v9 and Sparc/v8plus)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3) Testing the trunk I DON'T see the problem with either SS12.2 or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SS12.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is interesting, because it probably means that a u_char
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; definition is SOMEWHERE in the headers (because libevent *is* getting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; built).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Whatever else may be done, I think this should be fixed &quot;properly&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (whatever that may equate to) for 1.6.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The way I see it now, it feels like OMPI is getting a definition of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; u_char only &quot;by accident&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2/21/2012 12:16 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Building the v1.5 branch on Linux with the Solaris Studio 12.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compilers I see the following failure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 797: Error: Type name expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 798: Error: Type name expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 1184: Error: &quot;,&quot; expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; instead of &quot;*&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Where line 1184 is a prototype containing &quot;u_char *&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As far as I can find, only several files below opal/event/ contain
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; any use of &quot;u_char&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There is a typedef for u_char in hwloc, but no use that I could see.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To the best of my knowledge u_char is NOT defined by any standard,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and thus there is no particular header one can reliably find it in.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The alternatives, of course are &quot;unsigned char&quot; or &quot;uint8_t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (defined in stdint.h).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I had a look at the trunk and VISUALLY is appears the same problem
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exists in:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    opal/event/event.h
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    opal/mca/event/libevent2013/libevent/event.h
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, my testing is currently confined to the v1.5 branch in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hopes of finally getting the next 1.5.5rc out the door.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10584.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10582.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10582.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10584.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10584.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
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
