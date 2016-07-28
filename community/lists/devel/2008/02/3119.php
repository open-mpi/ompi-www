<?
$subject_val = "Re: [OMPI devel] More VT warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 14:08:26 2008" -->
<!-- isoreceived="20080201190826" -->
<!-- sent="Fri, 1 Feb 2008 20:08:17 +0100" -->
<!-- isosent="20080201190817" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] More VT warnings" -->
<!-- id="20080201190817.GB13860_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47A3362B.7090403_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] More VT warnings<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 14:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3120.php">Matthias Jurenz: "Re: [OMPI devel] More VT warnings"</a>
<li><strong>Previous message:</strong> <a href="3118.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3115.php">Tim Prins: "[OMPI devel] More VT warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3120.php">Matthias Jurenz: "Re: [OMPI devel] More VT warnings"</a>
<li><strong>Reply:</strong> <a href="3120.php">Matthias Jurenz: "Re: [OMPI devel] More VT warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Tim Prins wrote on Fri, Feb 01, 2008 at 04:09:31PM CET:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that this indicates that the file vt_metric_papi.c is being 
</span><br>
<span class="quotelev1">&gt; compiled *3* times. I am not using a parallel make here. Any ideas why 
</span><br>
<span class="quotelev1">&gt; it is compiling 3 times?
</span><br>
<p>The file is listed as source file to four different libraries, and
<br>
per-target CFLAGS are used for these.  Between one and four of these
<br>
libraries are actually built, depending on decisions done at configure
<br>
time.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3120.php">Matthias Jurenz: "Re: [OMPI devel] More VT warnings"</a>
<li><strong>Previous message:</strong> <a href="3118.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3115.php">Tim Prins: "[OMPI devel] More VT warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3120.php">Matthias Jurenz: "Re: [OMPI devel] More VT warnings"</a>
<li><strong>Reply:</strong> <a href="3120.php">Matthias Jurenz: "Re: [OMPI devel] More VT warnings"</a>
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
