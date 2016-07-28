<?
$subject_val = "Re: [OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 10:00:21 2012" -->
<!-- isoreceived="20120928140021" -->
<!-- sent="Fri, 28 Sep 2012 10:00:18 -0400" -->
<!-- isosent="20120928140018" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About MPI_TAG_UB" -->
<!-- id="CFD04347-4FAA-4C5D-A9CB-BC3C765CD333_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5065AB28.90707_at_ulaval.ca" -->
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
<strong>Date:</strong> 2012-09-28 10:00:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20352.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20350.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20350.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20353.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20353.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2012, at 9:50 AM, S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; I did not know about shared queues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does not run out of memory. ;-)
</span><br>
<p>It runs out of *registered* memory, which could be far less than your actual RAM.  Check this FAQ item in particular:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
<p><span class="quotelev1">&gt; But the latency is not very good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** Test 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_max_send_size 4096 \
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_eager_limit 4096 \
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_rndv_eager_limit 4096 \
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_receive_queues S,4096,2048,1024,32 \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get 1.5 milliseconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  =&gt; <a href="https://gist.github.com/3799889">https://gist.github.com/3799889</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** Test 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_receive_queues S,65536,256,128,32 \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get around 1.5 milliseconds too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  =&gt; <a href="https://gist.github.com/3799940">https://gist.github.com/3799940</a>
</span><br>
<p>Are you saying 1.5us is bad?  That's actually not bad at all.  On the most modern hardware with a bunch of software tuning, you can probably get closer to 1us.
<br>
<p><span class="quotelev1">&gt; With my virtual router I am sure I can get something around 270 microseconds.
</span><br>
<p>OTOH, that's pretty bad.  :-)
<br>
<p>I'm not sure why it would be so bad -- are you hammering the virtual router with small incoming messages?  You might need to do a little profiling to see where the bottlenecks are.
<br>
<p><span class="quotelev1">&gt; Just out of curiosity, does Open-MPI utilize heavily negative values
</span><br>
<span class="quotelev1">&gt; internally for user-provided MPI tags ?
</span><br>
<p>I know offhand we use them for collectives.  Something is tickling my brain that we use them for other things, too (CID allocation, perhaps?), but I don't remember offhand.
<br>
<p>I'm just saying: YMMV.  Buyer be warned.  And all that. :-)
<br>
<p><span class="quotelev1">&gt; If the negative tags are internal to Open-MPI, my code will not touch
</span><br>
<span class="quotelev1">&gt; these private variables, right ?
</span><br>
<p>It's not a variable that's the issue.  If you do a receive for tag -3 and OMPI sends an internal control message with tag -3, you might receive it instead of OMPI's core.  And that would be Bad.
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
<li><strong>Next message:</strong> <a href="20352.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20350.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20350.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20353.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20353.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
