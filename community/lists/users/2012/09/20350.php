<?
$subject_val = "Re: [OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 09:50:01 2012" -->
<!-- isoreceived="20120928135001" -->
<!-- sent="Fri, 28 Sep 2012 09:50:32 -0400" -->
<!-- isosent="20120928135032" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About MPI_TAG_UB" -->
<!-- id="5065AB28.90707_at_ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CCBA3115-A523-456B-82FB-8896A394799F_at_cisco.com" -->
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
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-28 09:50:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20351.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20349.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20347.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20351.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20351.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I did not know about shared queues.
<br>
<p>It does not run out of memory. ;-)
<br>
<p>But the latency is not very good.
<br>
<p><p>** Test 1
<br>
<p>--mca btl_openib_max_send_size 4096 \
<br>
--mca btl_openib_eager_limit 4096 \
<br>
--mca btl_openib_rndv_eager_limit 4096 \
<br>
--mca btl_openib_receive_queues S,4096,2048,1024,32 \
<br>
<p>I get 1.5 milliseconds.
<br>
<p>&nbsp;&nbsp;=&gt; <a href="https://gist.github.com/3799889">https://gist.github.com/3799889</a>
<br>
<p><p>** Test 2
<br>
<p>--mca btl_openib_receive_queues S,65536,256,128,32 \
<br>
<p>I get around 1.5 milliseconds too.
<br>
<p>&nbsp;&nbsp;=&gt; <a href="https://gist.github.com/3799940">https://gist.github.com/3799940</a>
<br>
<p><p>With my virtual router I am sure I can get something around 270 microseconds.
<br>
<p><p>Just out of curiosity, does Open-MPI utilize heavily negative values
<br>
internally for user-provided MPI tags ?
<br>
<p>If the negative tags are internal to Open-MPI, my code will not touch
<br>
these private variables, right ?
<br>
<p>S&#233;bastien
<br>
<p>On 28/09/12 08:59 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 27, 2012, at 7:22 PM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Without the virtual message router, I get messages like these:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're running out of registered memory.  Check out these FAQ items:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues">http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The second one tells you how to change your receive queue types; Open MPI defaults to 1 per-peer receive queue and several shared receive queues.  You might want to change to all shared receive queues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The real message tag, the real source and the real destination are stored
</span><br>
<span class="quotelev2">&gt;&gt; in the MPI tag. I know, this is ugly, but it works. I can not store this
</span><br>
<span class="quotelev2">&gt;&gt; information in the message buffer because the buffer can be NULL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bits 0 to 7: tag (8 bits, values from 0 to 255, 256 possible values)
</span><br>
<span class="quotelev2">&gt;&gt; bits 8 to 19: true source (12 bits, values from 0 to 4095, 4096 possible values)
</span><br>
<span class="quotelev2">&gt;&gt; bits 20 to 31: true destination (12 bits, values from 0 to 4095, 4096 possible values)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without the virtual router, my code is compliant with the fact that 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_TAG_UB,...) is at least 32767 (my tags are &lt;= 255).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I try jobs with 4096 processes with the virtual message router, I get the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_ERR_TAG: invalid tag.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without the virtual message router I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With Open-MPI 1.5.4, the upper bound is 17438272 (at least in our build). That explains MPI_ERR_TAG.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1 on what Hristo said -- remember that you get a pointer to an MPI_Aint.  So you need to dereference it to get the value back.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My 2 questions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Is there a better way to store routing information ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems fine to me.  Just stay &lt;=INT_MAX and you should be fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Can I create my own communicator and set its MPI_TAG_UB to whatever I want ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Hristo said, no.  It's a limit in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20351.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20349.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20347.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20351.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20351.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
