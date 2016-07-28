<?
$subject_val = "Re: [OMPI devel] Build issue: mpi_portable_platform.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 16:42:45 2010" -->
<!-- isoreceived="20100312214245" -->
<!-- sent="Fri, 12 Mar 2010 16:42:29 -0500" -->
<!-- isosent="20100312214229" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build issue: mpi_portable_platform.h" -->
<!-- id="201003121642.29182.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3AB28236-9AC5-41E0-A6E7-B7271BD87E90_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build issue: mpi_portable_platform.h<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 16:42:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7586.php">Joshua Hursey: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7584.php">Paul H. Hargrove: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7583.php">Joshua Hursey: "[OMPI devel] Build issue: mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7586.php">Joshua Hursey: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7586.php">Joshua Hursey: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
this is caused by moving mpi_portable_platform.h.in file in two steps from 
<br>
ompi/include to opal/include -- in order to be used by opal_info and 
<br>
orte_info.
<br>
<p>You need to autogen.sh again after svn up to at least r22789.
<br>
<p>Hope, this helps?
<br>
<p>Best regards,
<br>
RAiner
<br>
<p><p>On Friday 12 March 2010 04:17:41 pm Joshua Hursey wrote:
<br>
<span class="quotelev1">&gt; I noticed the following build error on the OMPI trunk (r22821) on IU's Odin
</span><br>
<span class="quotelev1">&gt;  machine: make[3]: *** No rule to make target `mpi_portable_platform.h',
</span><br>
<span class="quotelev1">&gt;  needed by `all-am'.  Stop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I took a quick pass through the svn commit log and did not see anything
</span><br>
<span class="quotelev1">&gt;  that would have broken this. Any thoughts on what could be causing this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7586.php">Joshua Hursey: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7584.php">Paul H. Hargrove: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7583.php">Joshua Hursey: "[OMPI devel] Build issue: mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7586.php">Joshua Hursey: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7586.php">Joshua Hursey: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
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
