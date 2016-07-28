<?
$subject_val = "Re: [OMPI devel] async thread in openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 13:14:38 2011" -->
<!-- isoreceived="20110103181438" -->
<!-- sent="Mon, 3 Jan 2011 13:14:32 -0500" -->
<!-- isosent="20110103181432" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] async thread in openib BTL" -->
<!-- id="A257ACDA-7F9B-4650-8D96-CF851C901478_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69B01459-AA6E-4F49-88B0-FAC78348B064_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] async thread in openib BTL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 13:14:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8827.php">Eugene Loh: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="8825.php">Ralph Castain: "[OMPI devel] RFC: VM launch"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8818.php">Shamis, Pavel: "Re: [OMPI devel] async thread in openib BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition, it would be really, really nice if someone would consolidate the watching of these devices into other mechanisms.
<br>
<p>The idea here is that the error can be noticed asynchronously, so it can't be part of the main libevent fd-watching (which is only checked once in a while).  The async watcher needs to watch a lot of time.  But there's also the RDMA CM / IB CM fd watchers, too.  At a minimum, these could be combined.  They weren't combined at the time for expediency -- there's no real technical reason that can't be solved why they can't be merged.  While the cost of having 2 threads is pretty minimal, having 2 threads (or 3 or ... N threads) instead of 1 does take up a few resources.
<br>
<p>Pasha and I never got the time to unify this fd monitoring, and we've now moved on such that it's unlikely that we'll get the opportunity to do it.  It would be great if one of the vendors still working in the openib BTL could do this, someday.  :-)
<br>
<p>Additionally, with the new libevent work occurring, it could be possible to simply have a separate libevent base that handles all of these fds, which would be nice.
<br>
<p><p>On Dec 23, 2010, at 10:28 AM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; The async thread is used to handle asynchronous error/notification events, like port up/down, hca errors etc. 
</span><br>
<span class="quotelev1">&gt; So most of the time the thread sleeps, and in healthy network you not supposed to see any events.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 23, 2010, at 12:49 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm starting to look at the openib BTL for the first time and am 
</span><br>
<span class="quotelev2">&gt;&gt; puzzled.  In btl_openib_async.c, it looks like an asynchronous thread is 
</span><br>
<span class="quotelev2">&gt;&gt; started.  During MPI_Init(), the main thread sends the async thread a 
</span><br>
<span class="quotelev2">&gt;&gt; file descriptor for each IB interface to be polled.  In MPI_Finalize(), 
</span><br>
<span class="quotelev2">&gt;&gt; the main thread asks the async thread to shut down.  Between MPI_Init() 
</span><br>
<span class="quotelev2">&gt;&gt; and MPI_Finalize(), I would think that the async thread would poll on 
</span><br>
<span class="quotelev2">&gt;&gt; the IB fd's and handle events that come up.  If I stick print statements 
</span><br>
<span class="quotelev2">&gt;&gt; into the async thread, however, I don't see any events come up on the IB 
</span><br>
<span class="quotelev2">&gt;&gt; fd's.  So, the async thread is useless.  Yes?  It starts up and shuts 
</span><br>
<span class="quotelev2">&gt;&gt; down, but never sees any events on the IB devices?
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8827.php">Eugene Loh: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="8825.php">Ralph Castain: "[OMPI devel] RFC: VM launch"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8818.php">Shamis, Pavel: "Re: [OMPI devel] async thread in openib BTL"</a>
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
