<?
$subject_val = "Re: [OMPI devel] async thread in openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 23 10:28:19 2010" -->
<!-- isoreceived="20101223152819" -->
<!-- sent="Thu, 23 Dec 2010 10:28:11 -0500" -->
<!-- isosent="20101223152811" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] async thread in openib BTL" -->
<!-- id="69B01459-AA6E-4F49-88B0-FAC78348B064_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D12E2F3.2090302_at_oracle.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-23 10:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8819.php">Leif Lindholm: "[OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>Previous message:</strong> <a href="8817.php">Eugene Loh: "[OMPI devel] async thread in openib BTL"</a>
<li><strong>In reply to:</strong> <a href="8817.php">Eugene Loh: "[OMPI devel] async thread in openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8826.php">Jeff Squyres: "Re: [OMPI devel] async thread in openib BTL"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8826.php">Jeff Squyres: "Re: [OMPI devel] async thread in openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The async thread is used to handle asynchronous error/notification events, like port up/down, hca errors etc. 
<br>
So most of the time the thread sleeps, and in healthy network you not supposed to see any events.
<br>
<p>Regards,
<br>
<p>Pasha
<br>
<p>On Dec 23, 2010, at 12:49 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm starting to look at the openib BTL for the first time and am 
</span><br>
<span class="quotelev1">&gt; puzzled.  In btl_openib_async.c, it looks like an asynchronous thread is 
</span><br>
<span class="quotelev1">&gt; started.  During MPI_Init(), the main thread sends the async thread a 
</span><br>
<span class="quotelev1">&gt; file descriptor for each IB interface to be polled.  In MPI_Finalize(), 
</span><br>
<span class="quotelev1">&gt; the main thread asks the async thread to shut down.  Between MPI_Init() 
</span><br>
<span class="quotelev1">&gt; and MPI_Finalize(), I would think that the async thread would poll on 
</span><br>
<span class="quotelev1">&gt; the IB fd's and handle events that come up.  If I stick print statements 
</span><br>
<span class="quotelev1">&gt; into the async thread, however, I don't see any events come up on the IB 
</span><br>
<span class="quotelev1">&gt; fd's.  So, the async thread is useless.  Yes?  It starts up and shuts 
</span><br>
<span class="quotelev1">&gt; down, but never sees any events on the IB devices?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8819.php">Leif Lindholm: "[OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>Previous message:</strong> <a href="8817.php">Eugene Loh: "[OMPI devel] async thread in openib BTL"</a>
<li><strong>In reply to:</strong> <a href="8817.php">Eugene Loh: "[OMPI devel] async thread in openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8826.php">Jeff Squyres: "Re: [OMPI devel] async thread in openib BTL"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8826.php">Jeff Squyres: "Re: [OMPI devel] async thread in openib BTL"</a>
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
