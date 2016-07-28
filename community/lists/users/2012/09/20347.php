<?
$subject_val = "Re: [OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 08:59:31 2012" -->
<!-- isoreceived="20120928125931" -->
<!-- sent="Fri, 28 Sep 2012 08:59:29 -0400" -->
<!-- isosent="20120928125929" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About MPI_TAG_UB" -->
<!-- id="CCBA3115-A523-456B-82FB-8896A394799F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5064DFB2.6040602_at_ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] About MPI_TAG_UB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-28 08:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20348.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20346.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="20344.php">S&#233;bastien Boisvert: "[OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20350.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20350.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2012, at 7:22 PM, S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; Without the virtual message router, I get messages like these:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<p>You're running out of registered memory.  Check out these FAQ items:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues">http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues</a>
<br>
<p>The second one tells you how to change your receive queue types; Open MPI defaults to 1 per-peer receive queue and several shared receive queues.  You might want to change to all shared receive queues.
<br>
<p><span class="quotelev1">&gt; The real message tag, the real source and the real destination are stored
</span><br>
<span class="quotelev1">&gt; in the MPI tag. I know, this is ugly, but it works. I can not store this
</span><br>
<span class="quotelev1">&gt; information in the message buffer because the buffer can be NULL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bits 0 to 7: tag (8 bits, values from 0 to 255, 256 possible values)
</span><br>
<span class="quotelev1">&gt; bits 8 to 19: true source (12 bits, values from 0 to 4095, 4096 possible values)
</span><br>
<span class="quotelev1">&gt; bits 20 to 31: true destination (12 bits, values from 0 to 4095, 4096 possible values)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without the virtual router, my code is compliant with the fact that 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_TAG_UB,...) is at least 32767 (my tags are &lt;= 255).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try jobs with 4096 processes with the virtual message router, I get the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_ERR_TAG: invalid tag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without the virtual message router I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Open-MPI 1.5.4, the upper bound is 17438272 (at least in our build). That explains MPI_ERR_TAG.
</span><br>
<p>+1 on what Hristo said -- remember that you get a pointer to an MPI_Aint.  So you need to dereference it to get the value back.
<br>
<p><span class="quotelev1">&gt; My 2 questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Is there a better way to store routing information ?
</span><br>
<p>Seems fine to me.  Just stay &lt;=INT_MAX and you should be fine.
<br>
<p><span class="quotelev1">&gt; 2. Can I create my own communicator and set its MPI_TAG_UB to whatever I want ?
</span><br>
<p>As Hristo said, no.  It's a limit in Open MPI.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20348.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20346.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="20344.php">S&#233;bastien Boisvert: "[OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20350.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20350.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
