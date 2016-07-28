<?
$subject_val = "Re: [OMPI devel] VT vs Oracle compilers in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 20:38:32 2012" -->
<!-- isoreceived="20120825003832" -->
<!-- sent="Fri, 24 Aug 2012 17:38:24 -0700" -->
<!-- isosent="20120825003824" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT vs Oracle compilers in trunk" -->
<!-- id="AD627C84-3EA6-401E-A54E-62945CFAF8B0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA169UDeaNngh6AOypaeTt_ABsAGipExBisrNOOAMFEfiSA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT vs Oracle compilers in trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 20:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11448.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11446.php">Paul Hargrove: "[OMPI devel] VT vs Oracle compilers in trunk"</a>
<li><strong>In reply to:</strong> <a href="11446.php">Paul Hargrove: "[OMPI devel] VT vs Oracle compilers in trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks that way to me!
<br>
<p>On Aug 24, 2012, at 5:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While trying to reproduce the &quot;r27078 and OMPI build&quot; problem w/ the Oracle compilers, I hit the following unrelated problem instead:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in otfaux
</span><br>
<span class="quotelev1">&gt; make[9]: Entering directory `/shared/OMPI/openmpi-trunk-solaris11-x64-ib-ss12u3/BLD/ompi/contrib/vt/vt/extlib/otf/tools/otfaux'
</span><br>
<span class="quotelev1">&gt;   CXX      otfaux.o
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-trunk-solaris11-x64-ib-ss12u3/openmpi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfaux/otfaux.cpp&quot;, line 834: Error: The function &quot;rint&quot; must have a prototype.
</span><br>
<span class="quotelev1">&gt; 1 Error(s) detected.
</span><br>
<span class="quotelev1">&gt; make[9]: *** [otfaux.o] Error 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The fix should be a simple matter of adding &quot;#include &lt;math.h&gt;&quot; somewhere, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11447/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11448.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11446.php">Paul Hargrove: "[OMPI devel] VT vs Oracle compilers in trunk"</a>
<li><strong>In reply to:</strong> <a href="11446.php">Paul Hargrove: "[OMPI devel] VT vs Oracle compilers in trunk"</a>
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
