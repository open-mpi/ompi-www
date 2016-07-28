<?
$subject_val = "Re: [OMPI devel] Data correctness checks in PML";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 09:44:01 2010" -->
<!-- isoreceived="20100107144401" -->
<!-- sent="Thu, 7 Jan 2010 07:43:52 -0700" -->
<!-- isosent="20100107144352" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Data correctness checks in PML" -->
<!-- id="EC624F1C-8198-4196-8E9D-D15DD3EF838F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100107124308.50094d43i5q3bxe4_at_mail.tu-chemnitz.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Data correctness checks in PML<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 09:43:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7283.php">Jeff Squyres: "[OMPI devel] RFC: silently allow component open() to fail"</a>
<li><strong>Previous message:</strong> <a href="7281.php">Sebastian Rinke: "[OMPI devel] Data correctness checks in PML"</a>
<li><strong>In reply to:</strong> <a href="7281.php">Sebastian Rinke: "[OMPI devel] Data correctness checks in PML"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a performance penalty (significant one) of course, but you can set -mca pml csum to do this.
<br>
<p>On Jan 7, 2010, at 4:43 AM, Sebastian Rinke wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm looking for a way to make Open MPI check the correctness of data in message
</span><br>
<span class="quotelev1">&gt; transfers. I.e. transmission errors in the data received should be detected and reported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to activate this checking?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sebastian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7283.php">Jeff Squyres: "[OMPI devel] RFC: silently allow component open() to fail"</a>
<li><strong>Previous message:</strong> <a href="7281.php">Sebastian Rinke: "[OMPI devel] Data correctness checks in PML"</a>
<li><strong>In reply to:</strong> <a href="7281.php">Sebastian Rinke: "[OMPI devel] Data correctness checks in PML"</a>
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
