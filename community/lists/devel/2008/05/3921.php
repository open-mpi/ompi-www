<?
$subject_val = "Re: [OMPI devel] openib btl code review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 08:46:40 2008" -->
<!-- isoreceived="20080515124640" -->
<!-- sent="Thu, 15 May 2008 15:46:30 +0300" -->
<!-- isosent="20080515124630" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl code review" -->
<!-- id="20080515124629.GN21806_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C1A663F4-8AF8-47F9-921D-40998AB0B80A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl code review<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-15 08:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3922.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Previous message:</strong> <a href="3920.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>In reply to:</strong> <a href="3920.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3922.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Reply:</strong> <a href="3922.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 15, 2008 at 08:14:29AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Pasha tells me he'll be able to review the patch next week, so I'll  
</span><br>
<span class="quotelev1">&gt; wait to commit until then.  I added the patch to the ticket, just so  
</span><br>
<span class="quotelev1">&gt; that it doesn't get lost.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any other reviewers would be welcome...  :-)
</span><br>
I'll look at it next week too.
<br>
<p><span class="quotelev2">&gt; &gt; The attached patch does the following (Jon wrote part of this, too):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - some random style cleanup
</span><br>
<span class="quotelev2">&gt; &gt; - fix a few minor memory leaks
</span><br>
<span class="quotelev2">&gt; &gt; - adapt _ini.c to accept the &quot;receive_queues&quot; field in the file
</span><br>
<span class="quotelev2">&gt; &gt; - move 90% of _setup_qps() from _ini.c to _component.c
</span><br>
<span class="quotelev2">&gt; &gt; - move what was left of _setup_qps() into the main  
</span><br>
<span class="quotelev2">&gt; &gt; _register_mca_params() function
</span><br>
<span class="quotelev2">&gt; &gt; - adapt init_one_hca() to detect conflicting receive_queues values  
</span><br>
<span class="quotelev2">&gt; &gt; from the INI file
</span><br>
<span class="quotelev2">&gt; &gt; - after the _component.c loop calling init_one_hca():
</span><br>
<span class="quotelev2">&gt; &gt;  - call setup_qps() to parse the final receive_queues string value
</span><br>
<span class="quotelev2">&gt; &gt;  - traverse all resulting btls and initialize their HCAs (if they  
</span><br>
<span class="quotelev2">&gt; &gt; weren't already): setup some lists and call prepare_hca_for_use()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
It is better to have separate patch (and commit) for each of these items.
<br>
Doing review and dialing with bugs is much easier this way.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3922.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Previous message:</strong> <a href="3920.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>In reply to:</strong> <a href="3920.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3922.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Reply:</strong> <a href="3922.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
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
