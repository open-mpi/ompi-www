<?
$subject_val = "Re: [OMPI devel] v1.5 .so version numbers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 22:29:25 2010" -->
<!-- isoreceived="20100608022925" -->
<!-- sent="Tue, 8 Jun 2010 02:29:16 +0000" -->
<!-- isosent="20100608022916" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 .so version numbers" -->
<!-- id="6F1004B9-0C2B-4657-9332-89A601D96429_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100605060814.GB7509_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 .so version numbers<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 22:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>Previous message:</strong> <a href="8061.php">George Bosilca: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>In reply to:</strong> <a href="8055.php">Ralf Wildenhues: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>Reply:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Totally insane ... but I was not talking about your rationale. ^^
<br>
<p>How did we ended up with the following situation:
<br>
<p>-libmca_common_sm_so_version=1:0:0
<br>
-libmca_common_mx_so_version=0:0:0
<br>
+libmca_common_sm_so_version=2:0:0
<br>
+libmca_common_mx_so_version=1:0:0
<br>
<p>Where the same type of component (common sm and mx here) have different version numbers?
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 5, 2010, at 06:08 , Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Thu, Jun 03, 2010 at 09:34:16PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; SHORT VERSION: We broke ABI from the 1.4 series to the v1.5 series.  I
</span><br>
<span class="quotelev2">&gt;&gt; propose changing all the libtool .so version numbers as shown below to
</span><br>
<span class="quotelev2">&gt;&gt; enforce that break.  Can someone sanity check this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks sane to me, with the details you have given.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>Previous message:</strong> <a href="8061.php">George Bosilca: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>In reply to:</strong> <a href="8055.php">Ralf Wildenhues: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>Reply:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI devel] v1.5 .so version numbers"</a>
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
