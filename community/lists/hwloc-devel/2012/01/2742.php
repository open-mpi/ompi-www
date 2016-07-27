<?
$subject_val = "[hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 21:54:18 2012" -->
<!-- isoreceived="20120201025418" -->
<!-- sent="Tue, 31 Jan 2012 18:53:58 -0800" -->
<!-- isosent="20120201025358" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86" -->
<!-- id="4F28A946.9010907_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F2898B8.3000606_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 21:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2743.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2741.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>In reply to:</strong> <a href="2732.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 libtool broken on Solaris10-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2746.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>Reply:</strong> <a href="2746.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem I described below is ALSO present in hwloc-1.4
<br>
-Paul
<br>
<p>On 1/31/2012 5:43 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; When running &quot;make install&quot; for hwloc-1.3.1 on my Solaris-10/x86 
</span><br>
<span class="quotelev1">&gt; system I am seeing multiple messages like:
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: (cd 
</span><br>
<span class="quotelev2">&gt;&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343/INST/lib 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;&amp; { ln -s -f libhwloc.so.4.1.4 libhwloc.so.4 || { rm -f 
</span><br>
<span class="quotelev2">&gt;&gt; libhwloc.so.4 &amp;&amp; ln -s libhwloc.so.4.1.4 libhwloc.so.4; }; })
</span><br>
<span class="quotelev2">&gt;&gt; Usage: ln [-f] [-s] f1
</span><br>
<span class="quotelev2">&gt;&gt;        ln [-f] [-s] f1 f2
</span><br>
<span class="quotelev2">&gt;&gt;        ln [-f] [-s] f1 ... fn d1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is because &quot;ln -s -f&quot; is being run by libtool while &quot;ln&quot; on this 
</span><br>
<span class="quotelev1">&gt; platform is happy only with &quot;ln -f -s&quot;.
</span><br>
<span class="quotelev1">&gt; This sensitivity to argument order is sad, but true.
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
<li><strong>Next message:</strong> <a href="2743.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2741.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>In reply to:</strong> <a href="2732.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 libtool broken on Solaris10-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2746.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>Reply:</strong> <a href="2746.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
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
