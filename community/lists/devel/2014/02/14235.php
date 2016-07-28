<?
$subject_val = "Re: [OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in	MPI_Waitany and	MPI_Testany";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 17:30:27 2014" -->
<!-- isoreceived="20140226223027" -->
<!-- sent="Wed, 26 Feb 2014 22:30:26 +0000" -->
<!-- isosent="20140226223026" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in	MPI_Waitany and	MPI_Testany" -->
<!-- id="D7EEEBCF-BFD2-4837-AB44-3B617F6A5FB2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140226232531.133711vd1cpgwov4_at_webmail.dsic.upv.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in	MPI_Waitany and	MPI_Testany<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 17:30:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14236.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI_RML_TAG_SHMEM"</a>
<li><strong>Previous message:</strong> <a href="14234.php">Oscar Vega-Gisbert: "[OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in MPI_Waitany and	MPI_Testany"</a>
<li><strong>In reply to:</strong> <a href="14234.php">Oscar Vega-Gisbert: "[OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in MPI_Waitany and	MPI_Testany"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, please -- let's track this so that it doesn't get forgotten.  Mark it as critical for 1.8.  It's too late for 1.7.5, sorry.  :-(
<br>
<p><p>On Feb 26, 2014, at 2:25 PM, Oscar Vega-Gisbert &lt;ovega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In Java bindings I can't use MPI_STATUS_IGNORE in MPI_Waitany nor MPI_Testany. I must use a MPI_Status in order to avoid a SIGSEGV error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I searched for this issue but I don't found any error report.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I report a bug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Oscar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This message was sent using IMP, the Internet Messaging Program.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14236.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI_RML_TAG_SHMEM"</a>
<li><strong>Previous message:</strong> <a href="14234.php">Oscar Vega-Gisbert: "[OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in MPI_Waitany and	MPI_Testany"</a>
<li><strong>In reply to:</strong> <a href="14234.php">Oscar Vega-Gisbert: "[OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in MPI_Waitany and	MPI_Testany"</a>
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
