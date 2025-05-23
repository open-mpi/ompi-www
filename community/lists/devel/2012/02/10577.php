<?
$subject_val = "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 23 06:18:41 2012" -->
<!-- isoreceived="20120223111841" -->
<!-- sent="Thu, 23 Feb 2012 06:18:32 -0500" -->
<!-- isosent="20120223111832" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux" -->
<!-- id="4F462088.2070603_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0A978669-695D-49A5-8C4E-226B465F3DE9_at_cisco.com" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-23 06:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10578.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10576.php">TERRY DONTJE: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10570.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10581.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/22/2012 8:53 PM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; Terry / Eugene --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you comment?
</span><br>
Sorry I cannot.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 22, 2012, at 3:16 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I have the beginning of a fix for this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had not even noticed earlier that the error in event.h is from the C++ compiler, when compiling file.cxx in the c++ bindings.  That makes the vendor-specific addition of &quot;-library=stlport4&quot; to CXXFLAGS quite relevant to the problem/solution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It eventually occurred to me that when VT's sub-configure told me to add configure arguments, I could have used --with-contrib-vt-flags to pass that ONLY to VT and perhaps NOT mess with whatever karma was providing the definition of u_char.  However, when I tried that I was disappointed to find that the bit of configure logic that suggests/requires CXXFLAGS=-library=stlport4 (from ompi/contrib/vt/configure.m4) runs BEFORE the processing of --with-contrib-vt-flags.  So, that was a dead end.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, the next idea was to look for a fix specific to sltport.  I tried adding near the top of opal/event/event.h (after the WINDOWS equivalent):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef STLPORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef unsigned char u_char;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; That managed to clear up the original problem w/ SS12.2.
</span><br>
<span class="quotelev2">&gt;&gt; With SS12.3, things also built fine.
</span><br>
<span class="quotelev2">&gt;&gt; This suggests the typedef is not &quot;conflicting&quot; with whatever other defn was present.
</span><br>
<span class="quotelev2">&gt;&gt; I think the &quot;safety&quot; of this needs to be examined more widely before this can be adopted.
</span><br>
<span class="quotelev2">&gt;&gt; My concern is that some system could &quot;typedef char u_char&quot; if it has char unsigned by default, leading to a conflict.
</span><br>
<span class="quotelev2">&gt;&gt; Now that would, I suppose, only be a problem if STLPORT is also defined.
</span><br>
<span class="quotelev2">&gt;&gt; So, maybe I am over thinking this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/21/2012 11:10 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More notes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tested ompi-1.5.4 and it has the same problem.  So, this is NOT a regression.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. has observed that Ubuntu is NOT a supported platform for the Solaris Studio compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I've reproduced on a Scientific Linux 5.5 platform (Red Hat Enterprise Linux 5.5 clone, like CentOS) to be sure that was NOT the cause.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I configure for the SS12.x compilers, I've been passing  CXXFLAGS=&quot;-library=stlport4&quot; as the VT sub-configure has informed me I should, due to something wrong the the default STL.  I tried dropping that from configure, and THE BUILD WAS SUCCESSFUL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, one has 2 choices:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + build w/ SS12.2 without VT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + update to SS12.3 and have VT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think there is sufficient reason to delay 1.5.5 for this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/21/2012 4:39 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A few things to note:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) This is NOT a problem w/ the SS12.3 compilers on the same machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, one could say &quot;upgrade your compiler&quot; (a free download) and not delay 1.5.5 for this issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) This is ONLY a problem on Linux, and not on Solaris (both SS12.2 and SS12.3 tested for x86, x86-64, Sparc/v9 and Sparc/v8plus)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) Testing the trunk I DON'T see the problem with either SS12.2 or SS12.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is interesting, because it probably means that a u_char definition is SOMEWHERE in the headers (because libevent *is* getting built).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Whatever else may be done, I think this should be fixed &quot;properly&quot; (whatever that may equate to) for 1.6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The way I see it now, it feels like OMPI is getting a definition of u_char only &quot;by accident&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2/21/2012 12:16 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Building the v1.5 branch on Linux with the Solaris Studio 12.2 compilers I see the following failure:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 797: Error: Type name expected instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 798: Error: Type name expected instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 1184: Error: &quot;,&quot; expected instead of &quot;*&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Where line 1184 is a prototype containing &quot;u_char *&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As far as I can find, only several files below opal/event/ contain any use of &quot;u_char&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There is a typedef for u_char in hwloc, but no use that I could see.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To the best of my knowledge u_char is NOT defined by any standard, and thus there is no particular header one can reliably find it in.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The alternatives, of course are &quot;unsigned char&quot; or &quot;uint8_t&quot; (defined in stdint.h).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I had a look at the trunk and VISUALLY is appears the same problem exists in:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    opal/event/event.h
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    opal/mca/event/libevent2013/libevent/event.h
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, my testing is currently confined to the v1.5 branch in the hopes of finally getting the next 1.5.5rc out the door.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10577/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10578.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10576.php">TERRY DONTJE: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10570.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10581.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
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
