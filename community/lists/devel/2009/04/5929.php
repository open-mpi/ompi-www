<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 15:04:27 2009" -->
<!-- isoreceived="20090430190427" -->
<!-- sent="Thu, 30 Apr 2009 14:04:23 -0500" -->
<!-- isosent="20090430190423" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="49F9F637.8080202_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0904301446020.6970_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 15:04:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5928.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5927.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
so I agree that we need to fix that, and we'll get a fix for that as 
<br>
soon as possible. It still strikes me as wrong however to we have 
<br>
fundamentally different types on two layers for the same 'item'.
<br>
<p>I still think that going back to the original algorithm would be bad - 
<br>
especially for an application that creates such a large number of 
<br>
communicators potentially executed on a large number ( 1000s) of 
<br>
processors. I'll look into how to reuse an entire block of communicator 
<br>
cid respectively how to take the max_contextid into account.
<br>
<p>Edgar
<br>
<p>Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; On Thu, 30 Apr 2009, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When we added the CM PML, we added a pml_max_contextid field to the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PML structure, which is the max size cid the PML can handle (because 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the matching interfaces don't allow 32 bits to be used for the cid.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At the same time, the max cid for OB1 was shrunk significantly, so 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the header on a short message would be packed tightly with no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alignment padding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At the time, we believed 32k simultaneous communicators was plenty, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that CIDs were reused (we checked, I'm pretty sure).  It sounds 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like someone removed the CID reuse code, which seems rather bad to me. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes, we added the block algorithm. Not reusing a CID actually doesn't 
</span><br>
<span class="quotelev2">&gt;&gt; bite me as that dramatic, and I am still not sure and convinced about 
</span><br>
<span class="quotelev2">&gt;&gt; that:-) We do not have an empty array or something like that, its just 
</span><br>
<span class="quotelev2">&gt;&gt; a number.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason for the block algorithm was that the performance of our 
</span><br>
<span class="quotelev2">&gt;&gt; communicator creation code sucked, and the cid allocation was one 
</span><br>
<span class="quotelev2">&gt;&gt; portion of that. We used to require *at least* 4 collective operations 
</span><br>
<span class="quotelev2">&gt;&gt; per communicator creation at that time. We are now potentially down to 
</span><br>
<span class="quotelev2">&gt;&gt; 0, among others thanks to the block algorithm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, let me think about reusing entire blocks, its probably doable 
</span><br>
<span class="quotelev2">&gt;&gt; just requires a little more bookkeeping...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There have to be unused CIDs in Ralph's example - is there a way to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fallback out of the block algorithm when it can't find a new CID and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find one it can reuse?  Other than setting the multi-threaded case 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back on, that is?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; remember that its not the communicator id allocation that is failing 
</span><br>
<span class="quotelev2">&gt;&gt; at this point, so the question is do we have to 'validate' a cid with 
</span><br>
<span class="quotelev2">&gt;&gt; the pml before we declare it to be ok?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; well, that's only because the code's doing something it shouldn't.  Have 
</span><br>
<span class="quotelev1">&gt; a look at comm_cid.c:185 - there's the check we added to the 
</span><br>
<span class="quotelev1">&gt; multi-threaded case (which was the only case when we added it).  The cid 
</span><br>
<span class="quotelev1">&gt; generation should never generate a number larger than 
</span><br>
<span class="quotelev1">&gt; mca_pml.pml_max_contextid. I'm actually somewhat amazed this fails 
</span><br>
<span class="quotelev1">&gt; gracefully, as OB1 doesn't appear to check it got a valid cid in 
</span><br>
<span class="quotelev1">&gt; add_comm, which it should probably do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the differences between v1.2 and v1.3, the max_contextid code 
</span><br>
<span class="quotelev1">&gt; was already in v1.2 and OB1 was setting it to 32k.  So the cid blocking 
</span><br>
<span class="quotelev1">&gt; code removed a rather critical feature and probably should be fixed or 
</span><br>
<span class="quotelev1">&gt; removed for v1.3.  On Portals, I only get 8k cids, so not having reuse 
</span><br>
<span class="quotelev1">&gt; is a rather large problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5928.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5927.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
