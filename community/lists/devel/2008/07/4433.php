<?
$subject_val = "Re: [OMPI devel] Large IMB test problems?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 17:23:15 2008" -->
<!-- isoreceived="20080724212315" -->
<!-- sent="Thu, 24 Jul 2008 23:22:56 +0200" -->
<!-- isosent="20080724212256" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Large IMB test problems?" -->
<!-- id="A704C1AD-89DA-4E4D-8DBA-F479C583A309_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7887B6FB-21F3-4A77-B188-3DAD9F215E0F_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Large IMB test problems?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-24 17:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4434.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Previous message:</strong> <a href="4432.php">Ralph Castain: "[OMPI devel] Large IMB test problems?"</a>
<li><strong>In reply to:</strong> <a href="4432.php">Ralph Castain: "[OMPI devel] Large IMB test problems?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>On our quest for better shared memory collective, we did some runs  
<br>
with 16 cores Intel machines. The SM worked as expected, as far as I  
<br>
can tell. Unfortunately we only have one such node, so we never tried  
<br>
more than 16 processes.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 24, 2008, at 11:13 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are trying to run some tests on a new cluster and are having a  
</span><br>
<span class="quotelev1">&gt; problem telling hardware, system software, and OMPI failures apart.  
</span><br>
<span class="quotelev1">&gt; This is a 16-ppn Opteron system running SLURM under RHEL (forget the  
</span><br>
<span class="quotelev1">&gt; precise version), with IB and OMPI 1.2.6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything launches just fine and seems to work okay. However, on  
</span><br>
<span class="quotelev1">&gt; large jobs (e.g., &gt;450 procs), the IMB tests fail and crash a bunch  
</span><br>
<span class="quotelev1">&gt; of the nodes on which they are running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else been able to test in 16+ ppn configurations? I'm  
</span><br>
<span class="quotelev1">&gt; wondering if we have an SM problem - perhaps inadequate backing file  
</span><br>
<span class="quotelev1">&gt; space or something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions on how to debug this or config options for higher  
</span><br>
<span class="quotelev1">&gt; ppn systems would be appreciated. We don't see this problem on  
</span><br>
<span class="quotelev1">&gt; anything with lesser ppn. I'm going to give it a try with 1.3 and  
</span><br>
<span class="quotelev1">&gt; see what happens there.
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4433/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4434.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Previous message:</strong> <a href="4432.php">Ralph Castain: "[OMPI devel] Large IMB test problems?"</a>
<li><strong>In reply to:</strong> <a href="4432.php">Ralph Castain: "[OMPI devel] Large IMB test problems?"</a>
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
