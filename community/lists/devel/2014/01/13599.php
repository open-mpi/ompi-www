<?
$subject_val = "[OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 21:22:54 2014" -->
<!-- isoreceived="20140109022254" -->
<!-- sent="Wed, 8 Jan 2014 18:22:52 -0800" -->
<!-- isosent="20140109022252" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris" -->
<!-- id="CAAvDA15AuxAAHqdPjou2VN1uzBCgPCX-sDOSWsa1nP5pjoZ+Cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 21:22:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13600.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Previous message:</strong> <a href="13598.php">Paul Hargrove: "[OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13601.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
<li><strong>Reply:</strong> <a href="13601.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As of 1.7.4rc2r30148 there appears to be a missing &quot;#include &lt;strings.h&gt;&quot;
<br>
in bcol_basesmuma_smcm.c.  Both the Solaris Studio compiler (output below)
<br>
and gcc agree on this point.
<br>
<p>&nbsp;&nbsp;CC       bcol_basesmuma_smcm.lo
<br>
&quot;/shared/OMPI/openmpi-1.7-latest-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc2r30148/ompi/mca/bcol/basesmuma/bcol_basesmuma_smcm.c&quot;,
<br>
line 253: warning: implicit function declaration: bzero
<br>
<p><p>-Paul
<br>
<pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13599/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13600.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Previous message:</strong> <a href="13598.php">Paul Hargrove: "[OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13601.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
<li><strong>Reply:</strong> <a href="13601.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
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
