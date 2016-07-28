<?
$subject_val = "Re: [OMPI devel] 1.4.5rc2 test results";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 24 10:39:54 2012" -->
<!-- isoreceived="20120124153954" -->
<!-- sent="Tue, 24 Jan 2012 10:39:48 -0500" -->
<!-- isosent="20120124153948" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc2 test results" -->
<!-- id="C5B772AD-405E-4264-99CA-729DBCEC102B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F1892DE.1060609_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc2 test results<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-24 10:39:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10249.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Previous message:</strong> <a href="10247.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>In reply to:</strong> <a href="10230.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10249.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Reply:</strong> <a href="10249.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul -- *Many* thanks for all of this; sorry for the slow followup.
<br>
<p>I've green lighted the 1.5 patch for netbsd (I think we need a corresponding fix posted for v1.4), and asked Terry to act on your Solaris comments.
<br>
<p>We'll talk today on the call about what to do with OS X 10.3/ppc and opensbd ROMIO issues.  
<br>
<p><p>On Jan 19, 2012, at 5:02 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I neglected to mention that all FreeBSD and OpenBSD tests were conducted using GNU Make.
</span><br>
<span class="quotelev1">&gt; If I use /usr/bin/make (BSD make), then I encounter the same problem I reported against ompi-1.5.5rc1:
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2954">https://svn.open-mpi.org/trac/ompi/ticket/2954</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that there is a patch (against 1.5.5rc1) attached to that ticket that may be sufficient to fix this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oddly, NetBSD doesn't display the problem.  I don't know if there is something different happening with respect to the atomics that simply avoids the problem, or if NetBSD's version of Make may share the GNU Make behavior with respect to VPATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/19/2012 1:33 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is a report on my findings with &quot;configure &amp;&amp; make all &amp;&amp; make install &amp;&amp; make check&quot; with ompi-1.4.5rc2.
</span><br>
<span class="quotelev2">&gt;&gt; All platforms built the &quot;self&quot;, &quot;sm&quot; and &quot;tcp&quot; btls.  I've noted where addition btl/mtl components were built.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PASS with no special configure arguments (just --prefix and things like &quot;CFLAGS=-m64&quot; when appropriate).
</span><br>
<span class="quotelev2">&gt;&gt; This means GNU compilers were used in all cases.
</span><br>
<span class="quotelev2">&gt;&gt;    linux/x86 [including gm1, gm2 and elan]
</span><br>
<span class="quotelev2">&gt;&gt;    linux/x86-64 [including gm2, elan, ofud, openib and psm]
</span><br>
<span class="quotelev2">&gt;&gt;    linux/ia64 (SGI Altix)
</span><br>
<span class="quotelev2">&gt;&gt;    linux/ppc32
</span><br>
<span class="quotelev2">&gt;&gt;    linux/ppc64
</span><br>
<span class="quotelev2">&gt;&gt;    macos-10.4/x86
</span><br>
<span class="quotelev2">&gt;&gt;    macos-10.4/ppc
</span><br>
<span class="quotelev2">&gt;&gt;    macos-10.5/x86
</span><br>
<span class="quotelev2">&gt;&gt;    macos-10.5/ppc
</span><br>
<span class="quotelev2">&gt;&gt;    macos-10.6/x86
</span><br>
<span class="quotelev2">&gt;&gt;    solaris-11(snv_151a)/amd64 [including ofud, openib and dapl]
</span><br>
<span class="quotelev2">&gt;&gt;    freebsd-6.3-RELEASE/amd64
</span><br>
<span class="quotelev2">&gt;&gt;    freebsd-7.2-RELEASE/amd64
</span><br>
<span class="quotelev2">&gt;&gt;    freebsd-8.2-RELEASE/amd64
</span><br>
<span class="quotelev2">&gt;&gt;    freebsd-8.2-RELEASE/i386
</span><br>
<span class="quotelev2">&gt;&gt;    netbsd-5.0.2/i386
</span><br>
<span class="quotelev2">&gt;&gt;    netbsd-5.1/amd64
</span><br>
<span class="quotelev2">&gt;&gt;    netbsd-5.1/i386
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PASS with addition of --disable-io-romio
</span><br>
<span class="quotelev2">&gt;&gt;    openbsd-5.0/amd64
</span><br>
<span class="quotelev2">&gt;&gt;    openbsd-5.0/i386
</span><br>
<span class="quotelev2">&gt;&gt; This need do disable ROMIO is &quot;known&quot;, having been reported against 1.4.5rc1 (see <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10086.php">http://www.open-mpi.org/community/lists/devel/2011/12/10086.php</a> ) as well as against 1.4.3rc1 in the past (see <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8338.php">http://www.open-mpi.org/community/lists/devel/2010/08/8338.php</a> ).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FAIL
</span><br>
<span class="quotelev2">&gt;&gt;    macos-10.3/ppc
</span><br>
<span class="quotelev2">&gt;&gt; Same problem as reported against 1.4.5rc1 in <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10086.php">http://www.open-mpi.org/community/lists/devel/2011/12/10086.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have additional Solaris platforms which I will report on later.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10249.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Previous message:</strong> <a href="10247.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>In reply to:</strong> <a href="10230.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10249.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Reply:</strong> <a href="10249.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
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
