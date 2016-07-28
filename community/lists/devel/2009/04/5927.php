<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 14:55:34 2009" -->
<!-- isoreceived="20090430185534" -->
<!-- sent="Thu, 30 Apr 2009 14:55:30 -0400 (EDT)" -->
<!-- isosent="20090430185530" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="alpine.DEB.1.10.0904301446020.6970_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F9F1AB.7030108_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Inherent limit on #communicators?<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 14:55:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5928.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5926.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5926.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5929.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5929.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 30 Apr 2009, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When we added the CM PML, we added a pml_max_contextid field to the PML 
</span><br>
<span class="quotelev2">&gt;&gt; structure, which is the max size cid the PML can handle (because the 
</span><br>
<span class="quotelev2">&gt;&gt; matching interfaces don't allow 32 bits to be used for the cid.  At the 
</span><br>
<span class="quotelev2">&gt;&gt; same time, the max cid for OB1 was shrunk significantly, so that the header 
</span><br>
<span class="quotelev2">&gt;&gt; on a short message would be packed tightly with no alignment padding.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At the time, we believed 32k simultaneous communicators was plenty, and 
</span><br>
<span class="quotelev2">&gt;&gt; that CIDs were reused (we checked, I'm pretty sure).  It sounds like 
</span><br>
<span class="quotelev2">&gt;&gt; someone removed the CID reuse code, which seems rather bad to me. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes, we added the block algorithm. Not reusing a CID actually doesn't bite me 
</span><br>
<span class="quotelev1">&gt; as that dramatic, and I am still not sure and convinced about that:-) We do 
</span><br>
<span class="quotelev1">&gt; not have an empty array or something like that, its just a number.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason for the block algorithm was that the performance of our 
</span><br>
<span class="quotelev1">&gt; communicator creation code sucked, and the cid allocation was one portion of 
</span><br>
<span class="quotelev1">&gt; that. We used to require *at least* 4 collective operations per communicator 
</span><br>
<span class="quotelev1">&gt; creation at that time. We are now potentially down to 0, among others thanks 
</span><br>
<span class="quotelev1">&gt; to the block algorithm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, let me think about reusing entire blocks, its probably doable just 
</span><br>
<span class="quotelev1">&gt; requires a little more bookkeeping...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There have to be unused CIDs in Ralph's example - is there a way to 
</span><br>
<span class="quotelev2">&gt;&gt; fallback out of the block algorithm when it can't find a new CID and find 
</span><br>
<span class="quotelev2">&gt;&gt; one it can reuse?  Other than setting the multi-threaded case back on, that 
</span><br>
<span class="quotelev2">&gt;&gt; is?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; remember that its not the communicator id allocation that is failing at this 
</span><br>
<span class="quotelev1">&gt; point, so the question is do we have to 'validate' a cid with the pml before 
</span><br>
<span class="quotelev1">&gt; we declare it to be ok?
</span><br>
<p>well, that's only because the code's doing something it shouldn't.  Have a 
<br>
look at comm_cid.c:185 - there's the check we added to the multi-threaded 
<br>
case (which was the only case when we added it).  The cid generation 
<br>
should never generate a number larger than mca_pml.pml_max_contextid. 
<br>
I'm actually somewhat amazed this fails gracefully, as OB1 doesn't appear 
<br>
to check it got a valid cid in add_comm, which it should probably do.
<br>
<p>Looking at the differences between v1.2 and v1.3, the max_contextid code 
<br>
was already in v1.2 and OB1 was setting it to 32k.  So the cid blocking 
<br>
code removed a rather critical feature and probably should be fixed or 
<br>
removed for v1.3.  On Portals, I only get 8k cids, so not having reuse is 
<br>
a rather large problem.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5928.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5926.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5926.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5929.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5929.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
