<?
$subject_val = "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 17 15:01:13 2014" -->
<!-- isoreceived="20140217200113" -->
<!-- sent="Mon, 17 Feb 2014 12:00:28 -0800" -->
<!-- isosent="20140217200028" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process" -->
<!-- id="59315082-DADE-4E1A-AEFE-44ABA8C286BE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140217193923.GR24474_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-17 15:00:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14162.php">Josh Hursey: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Previous message:</strong> <a href="14160.php">Adrian Reber: "[OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>In reply to:</strong> <a href="14160.php">Adrian Reber: "[OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14163.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Reply:</strong> <a href="14163.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great - looks fine to me!!
<br>
<p><p>On Feb 17, 2014, at 11:39 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have prepared a patch I would like to commit which adds to code to
</span><br>
<span class="quotelev1">&gt; actually checkpoint a process. Thanks for the pointers about the string
</span><br>
<span class="quotelev1">&gt; variables I tried to do implement it correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CRIU currently has problems with the new OOB usock but I will contact
</span><br>
<span class="quotelev1">&gt; the CRIU developers about this error. Using tcp, checkpointing works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CRIU also has problems with --np &gt; 1, but I am sure this can also be
</span><br>
<span class="quotelev1">&gt; resolved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch is at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14162.php">Josh Hursey: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Previous message:</strong> <a href="14160.php">Adrian Reber: "[OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>In reply to:</strong> <a href="14160.php">Adrian Reber: "[OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14163.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Reply:</strong> <a href="14163.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
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
