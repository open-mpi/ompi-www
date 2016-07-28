<?
$subject_val = "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 12:20:23 2010" -->
<!-- isoreceived="20100310172023" -->
<!-- sent="Wed, 10 Mar 2010 12:20:14 -0500" -->
<!-- isosent="20100310172014" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)" -->
<!-- id="F331336E-3B4E-4EAB-B3AE-620EEA1DA415_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2837F774-1D64-45D8-8855-F319159FC1E5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 12:20:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7575.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7573.php">Jeff Squyres: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>In reply to:</strong> <a href="7569.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7575.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Reply:</strong> <a href="7575.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was way too much information on this thread that I was looking for ;) And a lot of misunderstandings ...
<br>
<p>If we want to allow ORTE to be on his own thread, then we should clearly banish the progress_thread from this equation. I would prefer ORTE to be as separated from the rest of the MPI library as possible, and therefore avoid most of the locks and overheads on the MPI itself. Moving ORTE (as it only use TCP sockets) on it's own poll is the best looking approach, and this can be easily done once we upgrade out libevent to the 2.0.
<br>
<p>To be honest the progress thread was not the smartest idea we had. It makes the code more complex, and the added benefit is quite small. Again, once we move to the libevent-2 we will cleanup the code, and have a more consistent approach.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 8, 2010, at 10:11 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 8, 2010, at 6:43 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 7, 2010, at 8:13 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How about calling it --enable-opal-event-progress-thread, or even --enable-open-libevent-progress-thread?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why not add another 100+ characters to the name while we are at it? :-/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I didn't really think the length mattered here, since it's a configure argument.  There has been a *lot* of confusion over the name of this particular switch over the past few years, so I'm suggesting that a longer, more descriptive name might be a little better.  Just my $0.02...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I honestly don't think that is the source of the confusion. The revised name tells you exactly what that configure option does - it enables a thread at the opal layer that calls opal_progress. Period.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The confusion is over how that is used within the code, given that opal doesn't have any communication system (as George pointed out). So having an opal progress thread running will cause the event library to tick over, but that does....? It isn't directly tied to any existing subsystem, but rather cuts across any of them that are sitting on sockets/file descriptors etc. using the event library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you look at the other progress threads in the system (e.g., openib), you'll find that they don't use the event library to monitor their fd's - they poll them directly. So enabling the opal progress thread doesn't directly affect them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I would say let's leave the name alone, and change it if/when someone figures out how to utilize that capability.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The openib BTL can have up to 2 progress threads (!) -- the async verbs event notifier and the RDMA CM agent.  They really should be consolidated.  If there's infrastructure to consolidate them via opal or something else, then so much the better...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Agreed, though I think that is best done as a separate effort from this RFC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Agreed -- sorry, I wasn't clear.  I wasn't trying to propose that that work be added to this RFC; I was just trying to mention that there could be a good use for the work from this RFC if such infrastructure was provided.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe there was a concern over latency if all the BTLs are driven by one progress thread that sequentially runs across their respective file descriptors, but I may be remembering it incorrectly...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I believe the openib progress threads were written the they way they were (i.e., without any opal progress thread support) because, at least in the current setup, to get the opal progress thread support, you have to turn on all the heavyweight locks, etc.  These two progress threads now simply pthread_create() and do minimal locking between the main thread and themselves, without affecting the rest of the locking machinery in the code base.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not saying that's perfect (or even good); I'm just saying that that's the way it currently is.  Indeed, at a minimum, Pasha and I have long talked about merging these two progress threads into 1.  It would be even better if we could merge these two project threads into some other infrastructure.  But it's always been somewhat of a low priority; we've never gotten a round tuit...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7575.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7573.php">Jeff Squyres: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>In reply to:</strong> <a href="7569.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7575.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
<li><strong>Reply:</strong> <a href="7575.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads andENABLE*THREAD*(take 2)"</a>
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
