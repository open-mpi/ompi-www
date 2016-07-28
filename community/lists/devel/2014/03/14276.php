<?
$subject_val = "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 11:45:06 2014" -->
<!-- isoreceived="20140303164506" -->
<!-- sent="Mon, 3 Mar 2014 16:45:04 +0000" -->
<!-- isosent="20140303164504" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A8715E8_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17+YYZ8vqZ9heGy5biVYS53GoHOO6Vn1xtNX1rZmBTvcA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 11:45:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14277.php">Ralph Castain: "[OMPI devel] Change in default MCA parameter value"</a>
<li><strong>Previous message:</strong> <a href="14275.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>In reply to:</strong> <a href="14258.php">Paul Hargrove: "[OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I see whats happening. That component is calling a gcc specific memory barrier. I will replace it with the appropriate opal_atomic call.
<br>
<p>-Nathan
<br>
<p>On Sunday, March 02, 2014 5:12 PM, devel [devel-bounces_at_[hidden]] on behalf of Paul Hargrove [phhargrove_at_[hidden]] wrote:
<br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With many testers still running at this time, the first to complete is a failure report.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From a FreBSD-6/amd64 platform:
</span><br>
<span class="quotelev1">&gt;   CCLD     otfmerge-mpi
</span><br>
<span class="quotelev1">&gt; /data/home/hargrove/OMPI/openmpi-1.7.5rc1-freebsd6-amd64/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.a(osc_sm
</span><br>
<span class="quotelev1">&gt; _passive_target.o)(.text+0x18b): In function `lk_fetch32':
</span><br>
<span class="quotelev1">&gt; /data/home/hargrove/OMPI/openmpi-1.7.5rc1-freebsd6-amd64/openmpi-1.7.5rc1/ompi/mca/osc/sm/:51: undefined reference to `__sync_synchronize'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Keep in mind that with 99% certainty this has NOTHING to do with VT.  It just happens thatotfmerge-mpi is the first executable linked with libmpi.  Rather the fault lies with the __sync_synchronize call in osc_sm_passive_target.c.  The __sync_synchronize() call is not only gcc-specific, but didn't exist prior to about gcc-4.1.  Surely there must be a opal call that should be used here instead?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no reason to think this is specific to FreeBSD-6, but rather the use of a gcc older than the addition of __sync_syncronize() seems the most likely key to exposing the problem.  I suspect that as my non-gcc testers complete (esp. PGI and Sun) this same issue will arise there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Mar 1, 2014 at 6:13 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; In the usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please subject this to your best tests as we hope to roll this (plus bug fixes) to 1.8.0 at the end of the month. This includes the new OSHMEM support, plus a completely updated MPI-3 compliant one-sided implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scheduled release date: Mar 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14277.php">Ralph Castain: "[OMPI devel] Change in default MCA parameter value"</a>
<li><strong>Previous message:</strong> <a href="14275.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>In reply to:</strong> <a href="14258.php">Paul Hargrove: "[OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
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
