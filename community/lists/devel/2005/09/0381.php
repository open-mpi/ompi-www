<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 19 13:42:44 2005" -->
<!-- isoreceived="20050919184244" -->
<!-- sent="Mon, 19 Sep 2005 12:42:40 -0600" -->
<!-- isosent="20050919184240" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re:  MPI question" -->
<!-- id="8246AAE6-4975-44B4-AFB7-E57390027F1F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0509190532470.12114_at_localhost" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-19 13:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0382.php">George Bosilca: "Re:  MPI question"</a>
<li><strong>Previous message:</strong> <a href="0380.php">George Bosilca: "Re:  MPI question"</a>
<li><strong>In reply to:</strong> <a href="0380.php">George Bosilca: "Re:  MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0382.php">George Bosilca: "Re:  MPI question"</a>
<li><strong>Reply:</strong> <a href="0382.php">George Bosilca: "Re:  MPI question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I found a bug in my code that was causing the problem. I was  
<br>
setting the first argument of MPI_Testsome() to the number of  
<br>
outstanding sends, rather than the total number of sends. It seems to  
<br>
be working now, though I notice that MPI_Testsome() always returns 1  
<br>
for count.
<br>
<p>Thanks for your help,
<br>
<p>Greg
<br>
<p>On Sep 19, 2005, at 3:52 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; MPI_Testsome return MPI_UNDEFINED only when in the set of requests  
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; are no more active requests. Basically at this point the array of  
</span><br>
<span class="quotelev1">&gt; requests
</span><br>
<span class="quotelev1">&gt; (in your example) should contain only MPI_REQUEST_NULL. I check the
</span><br>
<span class="quotelev1">&gt; different possibilities inside, and I'm pretty confident that we are
</span><br>
<span class="quotelev1">&gt; correct from the MPI standard point of view. I run your test  
</span><br>
<span class="quotelev1">&gt; example and
</span><br>
<span class="quotelev1">&gt; the behaviour was correct. Moreover, it never miss one request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you forward me your exact example to see what was wrong inside ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 19 Sep 2005, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Guys I'll take care of that. When I was working on the examples  
</span><br>
<span class="quotelev2">&gt;&gt; for the
</span><br>
<span class="quotelev2">&gt;&gt; tutorial here at Euro PVM I notice a similar problem with  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Waitsome.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, 18 Sep 2005, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes -- Tim, can you check?  Sounds like something in the request
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progress is not occurring correctly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 18, 2005, at 5:59 PM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, count is 2, but completed returns 1 on the first call and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -32766
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on the second call. Sounds like this may be a bug?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 17, 2005, at 8:11 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (composing this in an airport on Saturday; may not actually be  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; until Monday or so)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -32766 is Open MPI's value for MPI_UNDEFINED.  This is what is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; returned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when there are no active requests in the array that is passed to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_TESTSOME (see MPI-1.1:.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just to verify that this behavior isn't a bug, can you confirm  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; things:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - is count &gt; 1?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - if more than one request finished in that single call to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_TESTSOME
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where completed was returned with a value of 1 (e.g., multiple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; requests
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in your array turned into MPI_REQUEST_NULL), then this is a bug --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i.e., completed should return an accurate value.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 16, 2005, at 8:45 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Just for a change, I don't have a build problem!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, I have a question about the MPI_Testsome() call. I'm  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Testsome() to check the completion status of a number of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; outstanding ISend() requests. I'm doing something like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int outstanding;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; main()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      tids = (int *)malloc(sizeof(int) * count);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      stats = (MPI_Status *)malloc(sizeof(MPI_Status) * count);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      reqs = (MPI_Request *) malloc(sizeof(MPI_Request) * count)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      do_sends();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      outstanding = count;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      while (outstanding &gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          check_completed();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; do_sends()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      for (i = 0; i &lt; count; i++)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          MPI_ISend(buf, len, MPI_CHAR, i, 0, MPI_COMM_WORLD,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &amp;reqs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [i]);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; check_completed()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      int completed;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      if (MPI_Testsome(count, reqs, &amp;completed, tids, stats) !=
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_SUCCESS) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          printf(&quot;error in testsome\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          exit(1);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      outstanding -= completed;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The thing is, MPI_Testsome() returns with completed = 1 the first
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; time I call it, then completed = -32766 the second time I call  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it. It
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; always returns MPI_SUCCESS though.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does anyone know what's going on? Am I doing something dumb?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;We must accept finite disappointment, but we must never lose  
</span><br>
<span class="quotelev2">&gt;&gt; infinite
</span><br>
<span class="quotelev2">&gt;&gt; hope.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                   Martin Luther King
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt; hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                   Martin Luther King
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0382.php">George Bosilca: "Re:  MPI question"</a>
<li><strong>Previous message:</strong> <a href="0380.php">George Bosilca: "Re:  MPI question"</a>
<li><strong>In reply to:</strong> <a href="0380.php">George Bosilca: "Re:  MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0382.php">George Bosilca: "Re:  MPI question"</a>
<li><strong>Reply:</strong> <a href="0382.php">George Bosilca: "Re:  MPI question"</a>
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
