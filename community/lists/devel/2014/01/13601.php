<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 22:58:21 2014" -->
<!-- isoreceived="20140109035821" -->
<!-- sent="Wed, 8 Jan 2014 19:58:16 -0800" -->
<!-- isosent="20140109035816" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris" -->
<!-- id="7BBCD88E-ABBD-4CF8-B275-577D20E2D78D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15AuxAAHqdPjou2VN1uzBCgPCX-sDOSWsa1nP5pjoZ+Cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 22:58:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13602.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Previous message:</strong> <a href="13600.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13599.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul - fixed in trunk and cmr'd to 1.7.4
<br>
<p>On Jan 8, 2014, at 6:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As of 1.7.4rc2r30148 there appears to be a missing &quot;#include &lt;strings.h&gt;&quot; in bcol_basesmuma_smcm.c.  Both the Solaris Studio compiler (output below) and gcc agree on this point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CC       bcol_basesmuma_smcm.lo
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7-latest-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc2r30148/ompi/mca/bcol/basesmuma/bcol_basesmuma_smcm.c&quot;, line 253: warning: implicit function declaration: bzero
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13601/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13602.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Previous message:</strong> <a href="13600.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13599.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
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
