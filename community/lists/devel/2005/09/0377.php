<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 18 10:59:37 2005" -->
<!-- isoreceived="20050918155937" -->
<!-- sent="Sun, 18 Sep 2005 09:59:50 -0600" -->
<!-- isosent="20050918155950" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re:  MPI question" -->
<!-- id="CFC5E95E-61DF-43CD-B57C-38658B6E12CE_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ca395c2a4447b22e6cb974d8b29f0d62_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-18 10:59:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0378.php">Jeff Squyres: "Re:  MPI question"</a>
<li><strong>Previous message:</strong> <a href="0376.php">Jeff Squyres: "Re:  MPI question"</a>
<li><strong>In reply to:</strong> <a href="0376.php">Jeff Squyres: "Re:  MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0378.php">Jeff Squyres: "Re:  MPI question"</a>
<li><strong>Reply:</strong> <a href="0378.php">Jeff Squyres: "Re:  MPI question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Yes, count is 2, but completed returns 1 on the first call and -32766  
<br>
on the second call. Sounds like this may be a bug?
<br>
<p>Greg
<br>
<p>On Sep 17, 2005, at 8:11 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; (composing this in an airport on Saturday; may not actually be sent
</span><br>
<span class="quotelev1">&gt; until Monday or so)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -32766 is Open MPI's value for MPI_UNDEFINED.  This is what is  
</span><br>
<span class="quotelev1">&gt; returned
</span><br>
<span class="quotelev1">&gt; when there are no active requests in the array that is passed to
</span><br>
<span class="quotelev1">&gt; MPI_TESTSOME (see MPI-1.1:.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to verify that this behavior isn't a bug, can you confirm some
</span><br>
<span class="quotelev1">&gt; things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - is count &gt; 1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - if more than one request finished in that single call to  
</span><br>
<span class="quotelev1">&gt; MPI_TESTSOME
</span><br>
<span class="quotelev1">&gt; where completed was returned with a value of 1 (e.g., multiple  
</span><br>
<span class="quotelev1">&gt; requests
</span><br>
<span class="quotelev1">&gt; in your array turned into MPI_REQUEST_NULL), then this is a bug --
</span><br>
<span class="quotelev1">&gt; i.e., completed should return an accurate value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 16, 2005, at 8:45 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just for a change, I don't have a build problem!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I have a question about the MPI_Testsome() call. I'm using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Testsome() to check the completion status of a number of
</span><br>
<span class="quotelev2">&gt;&gt; outstanding ISend() requests. I'm doing something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int outstanding;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; main()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;      tids = (int *)malloc(sizeof(int) * count);
</span><br>
<span class="quotelev2">&gt;&gt;      stats = (MPI_Status *)malloc(sizeof(MPI_Status) * count);
</span><br>
<span class="quotelev2">&gt;&gt;      reqs = (MPI_Request *) malloc(sizeof(MPI_Request) * count)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      do_sends();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      outstanding = count;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      while (outstanding &gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;          check_completed();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; do_sends()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;      for (i = 0; i &lt; count; i++)
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_ISend(buf, len, MPI_CHAR, i, 0, MPI_COMM_WORLD, &amp;reqs 
</span><br>
<span class="quotelev2">&gt;&gt; [i]);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; check_completed()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;      int completed;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      if (MPI_Testsome(count, reqs, &amp;completed, tids, stats) !=
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SUCCESS) {
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;error in testsome\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          exit(1);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;      outstanding -= completed;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The thing is, MPI_Testsome() returns with completed = 1 the first
</span><br>
<span class="quotelev2">&gt;&gt; time I call it, then completed = -32766 the second time I call it. It
</span><br>
<span class="quotelev2">&gt;&gt; always returns MPI_SUCCESS though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know what's going on? Am I doing something dumb?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="0378.php">Jeff Squyres: "Re:  MPI question"</a>
<li><strong>Previous message:</strong> <a href="0376.php">Jeff Squyres: "Re:  MPI question"</a>
<li><strong>In reply to:</strong> <a href="0376.php">Jeff Squyres: "Re:  MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0378.php">Jeff Squyres: "Re:  MPI question"</a>
<li><strong>Reply:</strong> <a href="0378.php">Jeff Squyres: "Re:  MPI question"</a>
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
