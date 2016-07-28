<?
$subject_val = "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 12:57:03 2008" -->
<!-- isoreceived="20080303175703" -->
<!-- sent="Mon, 3 Mar 2008 12:56:54 -0500" -->
<!-- isosent="20080303175654" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series" -->
<!-- id="89570037-7741-4C1D-BB21-676B4AC3FF69_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="60C5139B-D790-4952-B1A5-22484AD278BF_at_ornl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 12:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3336.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<li><strong>Previous message:</strong> <a href="3334.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>In reply to:</strong> <a href="3333.php">Shipman, Galen M.: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2008, at 12:48 PM, Shipman, Galen M. wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately this adds an &quot;if&quot; to the critical path.
</span><br>
<span class="quotelev1">&gt; You should at least use OPAL_UNLIKELY..
</span><br>
<p>I could have sworn there was no OPAL_UNLIKELY in the 1.2 series, which  
<br>
is why I didn't add it.  But I just checked right now and I see that  
<br>
it's there.  Doh!  So I'll add 2 UNLIKELY's and one LIKELY to the  
<br>
patch and amend the ticket (i.e., default to &quot;will probably use early  
<br>
completion&quot;).
<br>
<p>Before adding the UN/LIKELY's, I ran the following tests:
<br>
<p>slightly older hardware (pre-woodcrest), netpipe 3.7.1, 1 byte sends:
<br>
<p>1.63us with patch, disabled (use_early_completion==0)
<br>
&nbsp;&nbsp;--&gt; saw lots of 1.6xus and 1.9xus results -- nothing in between
<br>
<p>1.54us with patch, enabled (use_early_completion==1)
<br>
&nbsp;&nbsp;--&gt; mostly 1.5x, 1.6x, 1.7xus	results	-- never 1.8x or higher
<br>
<p>Saw about same results with vanilla 1.2.5 (no patch) as with  
<br>
use_early_completion==1 -- in the noise difference.
<br>
<p>If someone else could verify these results, it would be great.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 3, 2008, at 12:28 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The topic of the &quot;early completion&quot; behavior in OB1 for IB
</span><br>
<span class="quotelev2">&gt;&gt; optimizations has come up several times in the v1.2 series (it causes
</span><br>
<span class="quotelev2">&gt;&gt; problems in some scenarios).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - leave the default the way it is now (early completions enabled)
</span><br>
<span class="quotelev2">&gt;&gt; - add an MCA parameter for disabling early completions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I mention this now because I had a customer complain about it over  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; weekend.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gleb and I propose the patch in <a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a>
</span><br>
<span class="quotelev2">&gt;&gt; ticket/1224
</span><br>
<span class="quotelev2">&gt;&gt;  for the v1.2 series.  The new OB1 MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt; pml_ob1_use_early_completions defaults to 1 (preserving the same
</span><br>
<span class="quotelev2">&gt;&gt; behavior as the rest of the v1.2 series), but it can be set to 0 if
</span><br>
<span class="quotelev2">&gt;&gt; the early completions on IB are creating problems for specific
</span><br>
<span class="quotelev2">&gt;&gt; applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be good to get this functionality in a real release (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.6).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that this MCA parameter is not necessary for the upcoming v1.3
</span><br>
<span class="quotelev2">&gt;&gt; series because of changes in ob1 and the openib btl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3336.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<li><strong>Previous message:</strong> <a href="3334.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>In reply to:</strong> <a href="3333.php">Shipman, Galen M.: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
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
