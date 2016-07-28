<?
$subject_val = "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 12:48:12 2008" -->
<!-- isoreceived="20080303174812" -->
<!-- sent="Mon, 03 Mar 2008 12:48:40 -0500" -->
<!-- isosent="20080303174840" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series" -->
<!-- id="60C5139B-D790-4952-B1A5-22484AD278BF_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="80D98E31-BFF2-48BB-9D55-C31E789BC7B6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series<br>
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 12:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3334.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="3332.php">Jeff Squyres: "[OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>In reply to:</strong> <a href="3332.php">Jeff Squyres: "[OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3335.php">Jeff Squyres: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>Reply:</strong> <a href="3335.php">Jeff Squyres: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately this adds an &quot;if&quot; to the critical path.
<br>
You should at least use OPAL_UNLIKELY..
<br>
<p><p>On Mar 3, 2008, at 12:28 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; The topic of the &quot;early completion&quot; behavior in OB1 for IB
</span><br>
<span class="quotelev1">&gt; optimizations has come up several times in the v1.2 series (it causes
</span><br>
<span class="quotelev1">&gt; problems in some scenarios).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - leave the default the way it is now (early completions enabled)
</span><br>
<span class="quotelev1">&gt; - add an MCA parameter for disabling early completions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I mention this now because I had a customer complain about it over the
</span><br>
<span class="quotelev1">&gt; weekend.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gleb and I propose the patch in <a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> 
</span><br>
<span class="quotelev1">&gt; ticket/1224
</span><br>
<span class="quotelev1">&gt;   for the v1.2 series.  The new OB1 MCA parameter
</span><br>
<span class="quotelev1">&gt; pml_ob1_use_early_completions defaults to 1 (preserving the same
</span><br>
<span class="quotelev1">&gt; behavior as the rest of the v1.2 series), but it can be set to 0 if
</span><br>
<span class="quotelev1">&gt; the early completions on IB are creating problems for specific
</span><br>
<span class="quotelev1">&gt; applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be good to get this functionality in a real release (e.g.,
</span><br>
<span class="quotelev1">&gt; v1.2.6).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this MCA parameter is not necessary for the upcoming v1.3
</span><br>
<span class="quotelev1">&gt; series because of changes in ob1 and the openib btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="3334.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="3332.php">Jeff Squyres: "[OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>In reply to:</strong> <a href="3332.php">Jeff Squyres: "[OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3335.php">Jeff Squyres: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>Reply:</strong> <a href="3335.php">Jeff Squyres: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
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
