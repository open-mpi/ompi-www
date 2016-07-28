<?
$subject_val = "[OMPI devel] 1.4.5rc2 test results";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 16:33:53 2012" -->
<!-- isoreceived="20120119213353" -->
<!-- sent="Thu, 19 Jan 2012 13:33:42 -0800" -->
<!-- isosent="20120119213342" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc2 test results" -->
<!-- id="4F188C36.3080601_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95BA01C2-D3A1-4EDA-AD55-06542CBAF83E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc2 test results<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 16:33:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10230.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Previous message:</strong> <a href="10228.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10230.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Reply:</strong> <a href="10230.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is a report on my findings with &quot;configure &amp;&amp; make all &amp;&amp; make 
<br>
install &amp;&amp; make check&quot; with ompi-1.4.5rc2.
<br>
All platforms built the &quot;self&quot;, &quot;sm&quot; and &quot;tcp&quot; btls.  I've noted where 
<br>
addition btl/mtl components were built.
<br>
<p>PASS with no special configure arguments (just --prefix and things like 
<br>
&quot;CFLAGS=-m64&quot; when appropriate).
<br>
This means GNU compilers were used in all cases.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux/x86 [including gm1, gm2 and elan]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux/x86-64 [including gm2, elan, ofud, openib and psm]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux/ia64 (SGI Altix)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux/ppc32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux/ppc64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;macos-10.4/x86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;macos-10.4/ppc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;macos-10.5/x86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;macos-10.5/ppc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;macos-10.6/x86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solaris-11(snv_151a)/amd64 [including ofud, openib and dapl]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;freebsd-6.3-RELEASE/amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;freebsd-7.2-RELEASE/amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;freebsd-8.2-RELEASE/amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;freebsd-8.2-RELEASE/i386
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;netbsd-5.0.2/i386
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;netbsd-5.1/amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;netbsd-5.1/i386
<br>
<p>PASS with addition of --disable-io-romio
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openbsd-5.0/amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openbsd-5.0/i386
<br>
This need do disable ROMIO is &quot;known&quot;, having been reported against 
<br>
1.4.5rc1 (see 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2011/12/10086.php">http://www.open-mpi.org/community/lists/devel/2011/12/10086.php</a> ) as 
<br>
well as against 1.4.3rc1 in the past (see 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8338.php">http://www.open-mpi.org/community/lists/devel/2010/08/8338.php</a> ).
<br>
<p>FAIL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;macos-10.3/ppc
<br>
Same problem as reported against 1.4.5rc1 in 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2011/12/10086.php">http://www.open-mpi.org/community/lists/devel/2011/12/10086.php</a>
<br>
<p>I have additional Solaris platforms which I will report on later.
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
<li><strong>Next message:</strong> <a href="10230.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Previous message:</strong> <a href="10228.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10230.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Reply:</strong> <a href="10230.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
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
