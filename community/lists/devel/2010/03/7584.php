<?
$subject_val = "Re: [OMPI devel] Build issue: mpi_portable_platform.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 16:38:54 2010" -->
<!-- isoreceived="20100312213854" -->
<!-- sent="Fri, 12 Mar 2010 13:38:43 -0800" -->
<!-- isosent="20100312213843" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build issue: mpi_portable_platform.h" -->
<!-- id="4B9AB463.50502_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 16:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7585.php">Rainer Keller: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7583.php">Joshua Hursey: "[OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7583.php">Joshua Hursey: "[OMPI devel] Build issue: mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7585.php">Rainer Keller: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
&nbsp;&nbsp;In r22619 mpi_portable_platform.h.in was replaced by 
<br>
mpi_portable_platform.h and Makefile.am changed accordingly.
<br>
&nbsp;&nbsp;So, my best guess is that you might just need to rerun autogen.sh or 
<br>
that your checkout is somehow missing mpi_portable_platform.h
<br>
-Paul
<br>
<p>Joshua Hursey wrote:
<br>
<span class="quotelev1">&gt; I noticed the following build error on the OMPI trunk (r22821) on IU's Odin machine:
</span><br>
<span class="quotelev1">&gt;   make[3]: *** No rule to make target `mpi_portable_platform.h', needed by `all-am'.  Stop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I took a quick pass through the svn commit log and did not see anything that would have broken this. Any thoughts on what could be causing this?
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
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7585.php">Rainer Keller: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7583.php">Joshua Hursey: "[OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7583.php">Joshua Hursey: "[OMPI devel] Build issue: mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7585.php">Rainer Keller: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
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
