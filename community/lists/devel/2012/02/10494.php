<?
$subject_val = "[OMPI devel] non-portable test operator in configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 04:11:51 2012" -->
<!-- isoreceived="20120220091151" -->
<!-- sent="Mon, 20 Feb 2012 01:11:35 -0800" -->
<!-- isosent="20120220091135" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] non-portable test operator in configure" -->
<!-- id="4F420E47.5070206_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] non-portable test operator in configure<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 04:11:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10495.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10493.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10496.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Reply:</strong> <a href="10496.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please note that &quot;==&quot; is NOT a portable binary operator for the &quot;test&quot; 
<br>
utility.
<br>
It is supported only by the bash built-in version of &quot;test&quot;.
<br>
The correct operator is a simple &quot;=&quot;.
<br>
<p>The following appear in the svn trunk
<br>
<p>./orte/config/orte_check_alps.m4:                   AS_IF([test 
<br>
&quot;$orte_check_alps_pmi_happy&quot; == &quot;yes&quot; -a &quot;$orte_without_full_support&quot; = 0],
<br>
./config/ompi_load_platform.m4:        if test &quot;$with_platform&quot; == &quot;&quot; ; then
<br>
<p>The $with_platform test breaks configure fairly early on at least 
<br>
Solaris 10.
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
<li><strong>Next message:</strong> <a href="10495.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10493.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10496.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Reply:</strong> <a href="10496.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
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
