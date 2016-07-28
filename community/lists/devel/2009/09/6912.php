<?
$subject_val = "Re: [OMPI devel] OMPI 1.3.4 ETA ? (TLAs FTW)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 09:22:35 2009" -->
<!-- isoreceived="20090929132235" -->
<!-- sent="Tue, 29 Sep 2009 09:22:30 -0400" -->
<!-- isosent="20090929132230" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3.4 ETA ? (TLAs FTW)" -->
<!-- id="DF1377C3-C1DC-4C83-9C57-EAE3B4A67479_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AC0B119.7030303_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.3.4 ETA ? (TLAs FTW)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 09:22:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6913.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support ***REMINDER***"</a>
<li><strong>Previous message:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>In reply to:</strong> <a href="6902.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3.4 ETA ? (TLAs FTW)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, here's the v1.3.x bug report we review every week:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/report/14">https://svn.open-mpi.org/trac/ompi/report/14</a>
<br>
<p>I still have one &quot;blocker&quot; bug (coll sm) that seems to creep  
<br>
asymptotically close to completion but never seems to get all the way  
<br>
there.  :-(
<br>
<p><p>On Sep 28, 2009, at 8:50 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I am not one of the 1.3 release managers, but do serve as  
</span><br>
<span class="quotelev1">&gt; gatekeeper.
</span><br>
<span class="quotelev2">&gt; &gt; From what I see in the automated nightly tests, we are certainly no
</span><br>
<span class="quotelev2">&gt; &gt; earlier than 3-4 weeks from release.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lots of errors in the nightly tests, and no visible high-priority
</span><br>
<span class="quotelev2">&gt; &gt; effort under way to identify root causes and fix them. So it looks
</span><br>
<span class="quotelev2">&gt; &gt; like this will be a little while.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Well, I am working on identifying root causes for the Sun failures.
</span><br>
<span class="quotelev1">&gt; Definitely in regards to paffinity but I am working my way beyond  
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<span class="quotelev1">&gt; Though I might be invisible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 27, 2009, at 5:31 PM, Chris Samuel wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi folks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Just wondered if there was any idea of when OMPI 1.3.4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; might be released ?  I know the correct answer is &quot;when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it's ready&quot; (:-)) but was curious if there was any thoughts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on a timeframe ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The cpuset aware CPU affinity code would be very useful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to us to fix up some codes that sometimes get stuck sharing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cores with others free (presumably a kernel process scheduler
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bug)..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cheers!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev3">&gt; &gt;&gt; VPAC is a not-for-profit Registered Research Agency
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6913.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support ***REMINDER***"</a>
<li><strong>Previous message:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>In reply to:</strong> <a href="6902.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3.4 ETA ? (TLAs FTW)"</a>
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
