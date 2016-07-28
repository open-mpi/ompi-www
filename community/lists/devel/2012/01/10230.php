<?
$subject_val = "Re: [OMPI devel] 1.4.5rc2 test results";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 17:02:18 2012" -->
<!-- isoreceived="20120119220218" -->
<!-- sent="Thu, 19 Jan 2012 14:02:06 -0800" -->
<!-- isosent="20120119220206" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc2 test results" -->
<!-- id="4F1892DE.1060609_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F188C36.3080601_at_lbl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 17:02:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10231.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>Previous message:</strong> <a href="10229.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>In reply to:</strong> <a href="10229.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10248.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Reply:</strong> <a href="10248.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I neglected to mention that all FreeBSD and OpenBSD tests were conducted 
<br>
using GNU Make.
<br>
If I use /usr/bin/make (BSD make), then I encounter the same problem I 
<br>
reported against ompi-1.5.5rc1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2954">https://svn.open-mpi.org/trac/ompi/ticket/2954</a>
<br>
<p>Note that there is a patch (against 1.5.5rc1) attached to that ticket 
<br>
that may be sufficient to fix this.
<br>
<p>Oddly, NetBSD doesn't display the problem.  I don't know if there is 
<br>
something different happening with respect to the atomics that simply 
<br>
avoids the problem, or if NetBSD's version of Make may share the GNU 
<br>
Make behavior with respect to VPATH.
<br>
<p>-Paul
<br>
<p>On 1/19/2012 1:33 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a report on my findings with &quot;configure &amp;&amp; make all &amp;&amp; make 
</span><br>
<span class="quotelev1">&gt; install &amp;&amp; make check&quot; with ompi-1.4.5rc2.
</span><br>
<span class="quotelev1">&gt; All platforms built the &quot;self&quot;, &quot;sm&quot; and &quot;tcp&quot; btls.  I've noted where 
</span><br>
<span class="quotelev1">&gt; addition btl/mtl components were built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PASS with no special configure arguments (just --prefix and things 
</span><br>
<span class="quotelev1">&gt; like &quot;CFLAGS=-m64&quot; when appropriate).
</span><br>
<span class="quotelev1">&gt; This means GNU compilers were used in all cases.
</span><br>
<span class="quotelev1">&gt;     linux/x86 [including gm1, gm2 and elan]
</span><br>
<span class="quotelev1">&gt;     linux/x86-64 [including gm2, elan, ofud, openib and psm]
</span><br>
<span class="quotelev1">&gt;     linux/ia64 (SGI Altix)
</span><br>
<span class="quotelev1">&gt;     linux/ppc32
</span><br>
<span class="quotelev1">&gt;     linux/ppc64
</span><br>
<span class="quotelev1">&gt;     macos-10.4/x86
</span><br>
<span class="quotelev1">&gt;     macos-10.4/ppc
</span><br>
<span class="quotelev1">&gt;     macos-10.5/x86
</span><br>
<span class="quotelev1">&gt;     macos-10.5/ppc
</span><br>
<span class="quotelev1">&gt;     macos-10.6/x86
</span><br>
<span class="quotelev1">&gt;     solaris-11(snv_151a)/amd64 [including ofud, openib and dapl]
</span><br>
<span class="quotelev1">&gt;     freebsd-6.3-RELEASE/amd64
</span><br>
<span class="quotelev1">&gt;     freebsd-7.2-RELEASE/amd64
</span><br>
<span class="quotelev1">&gt;     freebsd-8.2-RELEASE/amd64
</span><br>
<span class="quotelev1">&gt;     freebsd-8.2-RELEASE/i386
</span><br>
<span class="quotelev1">&gt;     netbsd-5.0.2/i386
</span><br>
<span class="quotelev1">&gt;     netbsd-5.1/amd64
</span><br>
<span class="quotelev1">&gt;     netbsd-5.1/i386
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PASS with addition of --disable-io-romio
</span><br>
<span class="quotelev1">&gt;     openbsd-5.0/amd64
</span><br>
<span class="quotelev1">&gt;     openbsd-5.0/i386
</span><br>
<span class="quotelev1">&gt; This need do disable ROMIO is &quot;known&quot;, having been reported against 
</span><br>
<span class="quotelev1">&gt; 1.4.5rc1 (see 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10086.php">http://www.open-mpi.org/community/lists/devel/2011/12/10086.php</a> ) as 
</span><br>
<span class="quotelev1">&gt; well as against 1.4.3rc1 in the past (see 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8338.php">http://www.open-mpi.org/community/lists/devel/2010/08/8338.php</a> ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FAIL
</span><br>
<span class="quotelev1">&gt;     macos-10.3/ppc
</span><br>
<span class="quotelev1">&gt; Same problem as reported against 1.4.5rc1 in 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10086.php">http://www.open-mpi.org/community/lists/devel/2011/12/10086.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have additional Solaris platforms which I will report on later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li><strong>Next message:</strong> <a href="10231.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>Previous message:</strong> <a href="10229.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>In reply to:</strong> <a href="10229.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10248.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Reply:</strong> <a href="10248.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
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
