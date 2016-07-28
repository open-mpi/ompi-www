<?
$subject_val = "[hwloc-devel] hwloc-1.3.1 libtool broken on Solaris10-x86";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 20:43:38 2012" -->
<!-- isoreceived="20120201014338" -->
<!-- sent="Tue, 31 Jan 2012 17:43:20 -0800" -->
<!-- isosent="20120201014320" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.3.1 libtool broken on Solaris10-x86" -->
<!-- id="4F2898B8.3000606_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.3.1 libtool broken on Solaris10-x86<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 20:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2733.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2731.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 install failures on Solaris-10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2742.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>Reply:</strong> <a href="2742.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When running &quot;make install&quot; for hwloc-1.3.1 on my Solaris-10/x86 system 
<br>
I am seeing multiple messages like:
<br>
<span class="quotelev1">&gt; libtool: install: (cd 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343/INST/lib 
</span><br>
<span class="quotelev1">&gt; &amp;&amp; { ln -s -f libhwloc.so.4.1.4 libhwloc.so.4 || { rm -f libhwloc.so.4 
</span><br>
<span class="quotelev1">&gt; &amp;&amp; ln -s libhwloc.so.4.1.4 libhwloc.so.4; }; })
</span><br>
<span class="quotelev1">&gt; Usage: ln [-f] [-s] f1
</span><br>
<span class="quotelev1">&gt;        ln [-f] [-s] f1 f2
</span><br>
<span class="quotelev1">&gt;        ln [-f] [-s] f1 ... fn d1
</span><br>
<p>This is because &quot;ln -s -f&quot; is being run by libtool while &quot;ln&quot; on this 
<br>
platform is happy only with &quot;ln -f -s&quot;.
<br>
This sensitivity to argument order is sad, but true.
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
<li><strong>Next message:</strong> <a href="2733.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2731.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 install failures on Solaris-10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2742.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>Reply:</strong> <a href="2742.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
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
