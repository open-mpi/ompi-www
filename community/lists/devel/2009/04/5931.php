<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 15:12:44 2009" -->
<!-- isoreceived="20090430191244" -->
<!-- sent="Thu, 30 Apr 2009 13:12:38 -0600" -->
<!-- isosent="20090430191238" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="71d2d8cc0904301212k47977c6qe653e62d3c170a92_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0904301211g1beeddch624dcffcbae4e5e9_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 15:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5932.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5932.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll file a ticket against it....oh joy!!! You all know how much I *love*
<br>
tickets!
<br>
<p><p>On Thu, Apr 30, 2009 at 1:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 30, 2009 at 12:55 PM, Brian W. Barrett &lt;brbarret_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 30 Apr 2009, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When we added the CM PML, we added a pml_max_contextid field to the PML
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; structure, which is the max size cid the PML can handle (because the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; matching interfaces don't allow 32 bits to be used for the cid.  At the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time, the max cid for OB1 was shrunk significantly, so that the header on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; short message would be packed tightly with no alignment padding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At the time, we believed 32k simultaneous communicators was plenty, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that CIDs were reused (we checked, I'm pretty sure).  It sounds like someone
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; removed the CID reuse code, which seems rather bad to me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes, we added the block algorithm. Not reusing a CID actually doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bite me as that dramatic, and I am still not sure and convinced about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that:-) We do not have an empty array or something like that, its just a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason for the block algorithm was that the performance of our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator creation code sucked, and the cid allocation was one portion of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that. We used to require *at least* 4 collective operations per communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creation at that time. We are now potentially down to 0, among others thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the block algorithm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, let me think about reusing entire blocks, its probably doable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just requires a little more bookkeeping...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  There have to be unused CIDs in Ralph's example - is there a way to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fallback out of the block algorithm when it can't find a new CID and find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one it can reuse?  Other than setting the multi-threaded case back on, that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remember that its not the communicator id allocation that is failing at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this point, so the question is do we have to 'validate' a cid with the pml
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before we declare it to be ok?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; well, that's only because the code's doing something it shouldn't.  Have a
</span><br>
<span class="quotelev2">&gt;&gt; look at comm_cid.c:185 - there's the check we added to the multi-threaded
</span><br>
<span class="quotelev2">&gt;&gt; case (which was the only case when we added it).  The cid generation should
</span><br>
<span class="quotelev2">&gt;&gt; never generate a number larger than mca_pml.pml_max_contextid. I'm actually
</span><br>
<span class="quotelev2">&gt;&gt; somewhat amazed this fails gracefully, as OB1 doesn't appear to check it got
</span><br>
<span class="quotelev2">&gt;&gt; a valid cid in add_comm, which it should probably do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, as an FYI: it doesn't fail gracefully. It just hangs...ick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the differences between v1.2 and v1.3, the max_contextid code
</span><br>
<span class="quotelev2">&gt;&gt; was already in v1.2 and OB1 was setting it to 32k.  So the cid blocking code
</span><br>
<span class="quotelev2">&gt;&gt; removed a rather critical feature and probably should be fixed or removed
</span><br>
<span class="quotelev2">&gt;&gt; for v1.3.  On Portals, I only get 8k cids, so not having reuse is a rather
</span><br>
<span class="quotelev2">&gt;&gt; large problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5931/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5932.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5932.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
