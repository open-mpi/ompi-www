<?
$subject_val = "Re: [OMPI users] Program hangs in mpi_bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 15:39:24 2011" -->
<!-- isoreceived="20111130203924" -->
<!-- sent="Wed, 30 Nov 2011 12:39:10 -0800" -->
<!-- isosent="20111130203910" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs in mpi_bcast" -->
<!-- id="1322685550.4347.8.camel_at_cedar.reachone.com" -->
<!-- inreplyto="14987096-5FCC-44A2-B67B-4B0C75970276_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program hangs in mpi_bcast<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 15:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17875.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17873.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17872.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17875.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Reply:</strong> <a href="17875.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I'm afraid trying to produce a reproducer of this problem wouldn't be
<br>
worth the effort.  It is a legacy code that I wasn't involved in
<br>
developing and will soon be discarded, so I can't justify spending time
<br>
trying to understand its behavior better.  The bottom line is that it
<br>
works correctly with the small 'sync' value, and because it isn't very
<br>
expensive to run, that is enough for us.
<br>
<p>T. Rosmond
<br>
<p><p>On Wed, 2011-11-30 at 15:29 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Yes, but I'd like to see a reproducer that requires setting the sync_barrier_before=5.  Your reproducers allowed much higher values, IIRC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm curious to know what makes that code require such a low value (i.e., 5)...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 30, 2011, at 1:50 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FWIW: we already have a reproducer from prior work I did chasing this down a couple of years ago. See orte/test/mpi/bcast_loop.c
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 29, 2011, at 9:35 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That's quite weird/surprising that you would need to set it down to *5* -- that's really low.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you share a simple reproducer code, perchance?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 15, 2011, at 11:49 AM, Tom Rosmond wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks for the advice.  I have to set 'coll_sync_barrier_before=5' to do
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the job.  This is a big change from the default value (1000), so our
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; application seems to be a pretty extreme case.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; T. Rosmond
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mon, 2011-11-14 at 16:17 -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Yes, this is well documented - may be on the FAQ, but certainly has been in the user list multiple times.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The problem is that one process falls behind, which causes it to begin accumulating &quot;unexpected messages&quot; in its queue. This causes the matching logic to run a little slower, thus making the process fall further and further behind. Eventually, things hang because everyone is sitting in bcast waiting for the slow proc to catch up, but it's queue is saturated and it can't.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The solution is to do exactly what you describe - add some barriers to force the slow process to catch up. This happened enough that we even added support for it in OMPI itself so you don't have to modify your code. Look at the following from &quot;ompi_info --param coll sync&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;              MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                        Verbosity level for the coll framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;              MCA coll: parameter &quot;coll_sync_priority&quot; (current value: &lt;50&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                        Priority of the sync coll component; only relevant if barrier_before or barrier_after is &gt; 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;             MCA coll: parameter &quot;coll_sync_barrier_before&quot; (current value: &lt;1000&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                        Do a synchronization before each Nth collective
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;              MCA coll: parameter &quot;coll_sync_barrier_after&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                        Do a synchronization after each Nth collective
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Take your pick - inserting a barrier before or after doesn't seem to make a lot of difference, but most people use &quot;before&quot;. Try different values until you get something that works for you.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Nov 14, 2011, at 3:10 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; A colleague and I have been running a large F90 application that does an
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; enormous number of mpi_bcast calls during execution.  I deny any
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; responsibility for the design of the code and why it needs these calls,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; but it is what we have inherited and have to work with.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Recently we ported the code to an 8 node, 6 processor/node NUMA system
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (lstopo output attached) running Debian linux 6.0.3 with Open_MPI 1.5.3,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and began having trouble with mysterious 'hangs' in the program inside
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the mpi_bcast calls.  The hangs were always in the same calls, but not
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; necessarily at the same time during integration.  We originally didn't
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; have NUMA support, so reinstalled with libnuma support added, but the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; problem persisted.  Finally, just as a wild guess, we inserted
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 'mpi_barrier' calls just before the 'mpi_bcast' calls, and the program
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; now runs without problems.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I believe conventional wisdom is that properly formulated MPI programs
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; should run correctly without barriers, so do you have any thoughts on
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; why we found it necessary to add them?  The code has run correctly on
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; other architectures, i.g. Crayxe6, so I don't think there is a bug
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; anywhere.  My only explanation is that some internal resource gets
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; exhausted because of the large number of 'mpi_bcast' calls in rapid
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; succession, and the barrier calls force synchronization which allows the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; resource to be restored.  Does this make sense?  I'd appreciate any
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; comments and advice you can provide.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I have attached compressed copies of config.log and ompi_info for the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; system.  The program is built with ifort 12.0 and typically runs with 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun -np 36 -bycore -bind-to-core program.exe
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; We have run both interactively and with PBS, but that doesn't seem to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; make any difference in program behavior.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; T. Rosmond
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;lstopo_out.txt&gt;&lt;config.log.bz2&gt;&lt;ompi_info.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17875.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17873.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17872.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17875.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Reply:</strong> <a href="17875.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
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
