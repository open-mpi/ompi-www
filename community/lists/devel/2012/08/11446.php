<?
$subject_val = "[OMPI devel] VT vs Oracle compilers in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 20:25:10 2012" -->
<!-- isoreceived="20120825002510" -->
<!-- sent="Fri, 24 Aug 2012 17:25:04 -0700" -->
<!-- isosent="20120825002504" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] VT vs Oracle compilers in trunk" -->
<!-- id="CAAvDA169UDeaNngh6AOypaeTt_ABsAGipExBisrNOOAMFEfiSA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] VT vs Oracle compilers in trunk<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 20:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11447.php">Ralph Castain: "Re: [OMPI devel] VT vs Oracle compilers in trunk"</a>
<li><strong>Previous message:</strong> <a href="11445.php">Larry Baker: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11447.php">Ralph Castain: "Re: [OMPI devel] VT vs Oracle compilers in trunk"</a>
<li><strong>Reply:</strong> <a href="11447.php">Ralph Castain: "Re: [OMPI devel] VT vs Oracle compilers in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While trying to reproduce the &quot;r27078 and OMPI build&quot; problem w/ the Oracle
<br>
compilers, I hit the following unrelated problem instead:
<br>
<p>Making all in otfaux
<br>
<span class="quotelev1">&gt; make[9]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/shared/OMPI/openmpi-trunk-solaris11-x64-ib-ss12u3/BLD/ompi/contrib/vt/vt/extlib/otf/tools/otfaux'
</span><br>
<span class="quotelev1">&gt;   CXX      otfaux.o
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-trunk-solaris11-x64-ib-ss12u3/openmpi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfaux/otfaux.cpp&quot;,
</span><br>
<span class="quotelev1">&gt; line 834: Error: The function &quot;rint&quot; must have a prototype.
</span><br>
<span class="quotelev1">&gt; 1 Error(s) detected.
</span><br>
<span class="quotelev1">&gt; make[9]: *** [otfaux.o] Error 2
</span><br>
<p><p><p>The fix should be a simple matter of adding &quot;#include &lt;math.h&gt;&quot; somewhere,
<br>
right?
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11446/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11447.php">Ralph Castain: "Re: [OMPI devel] VT vs Oracle compilers in trunk"</a>
<li><strong>Previous message:</strong> <a href="11445.php">Larry Baker: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11447.php">Ralph Castain: "Re: [OMPI devel] VT vs Oracle compilers in trunk"</a>
<li><strong>Reply:</strong> <a href="11447.php">Ralph Castain: "Re: [OMPI devel] VT vs Oracle compilers in trunk"</a>
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
