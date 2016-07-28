<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 18 11:02:17 2005" -->
<!-- isoreceived="20050918160217" -->
<!-- sent="Sun, 18 Sep 2005 18:02:06 +0200" -->
<!-- isosent="20050918160206" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  MPI question" -->
<!-- id="9ed458e3a3cd3be5f1ce446784862681_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CFC5E95E-61DF-43CD-B57C-38658B6E12CE_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-18 11:02:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0379.php">George Bosilca: "Re:  MPI question"</a>
<li><strong>Previous message:</strong> <a href="0377.php">Greg Watson: "Re:  MPI question"</a>
<li><strong>In reply to:</strong> <a href="0377.php">Greg Watson: "Re:  MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0379.php">George Bosilca: "Re:  MPI question"</a>
<li><strong>Reply:</strong> <a href="0379.php">George Bosilca: "Re:  MPI question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes -- Tim, can you check?  Sounds like something in the request 
<br>
progress is not occurring correctly.
<br>
<p>Thanks!
<br>
<p><p>On Sep 18, 2005, at 5:59 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, count is 2, but completed returns 1 on the first call and -32766
</span><br>
<span class="quotelev1">&gt; on the second call. Sounds like this may be a bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2005, at 8:11 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (composing this in an airport on Saturday; may not actually be sent
</span><br>
<span class="quotelev2">&gt;&gt; until Monday or so)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -32766 is Open MPI's value for MPI_UNDEFINED.  This is what is
</span><br>
<span class="quotelev2">&gt;&gt; returned
</span><br>
<span class="quotelev2">&gt;&gt; when there are no active requests in the array that is passed to
</span><br>
<span class="quotelev2">&gt;&gt; MPI_TESTSOME (see MPI-1.1:.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to verify that this behavior isn't a bug, can you confirm some
</span><br>
<span class="quotelev2">&gt;&gt; things:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - is count &gt; 1?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - if more than one request finished in that single call to
</span><br>
<span class="quotelev2">&gt;&gt; MPI_TESTSOME
</span><br>
<span class="quotelev2">&gt;&gt; where completed was returned with a value of 1 (e.g., multiple
</span><br>
<span class="quotelev2">&gt;&gt; requests
</span><br>
<span class="quotelev2">&gt;&gt; in your array turned into MPI_REQUEST_NULL), then this is a bug --
</span><br>
<span class="quotelev2">&gt;&gt; i.e., completed should return an accurate value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 16, 2005, at 8:45 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just for a change, I don't have a build problem!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I have a question about the MPI_Testsome() call. I'm using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Testsome() to check the completion status of a number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; outstanding ISend() requests. I'm doing something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int outstanding;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      tids = (int *)malloc(sizeof(int) * count);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      stats = (MPI_Status *)malloc(sizeof(MPI_Status) * count);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      reqs = (MPI_Request *) malloc(sizeof(MPI_Request) * count)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      do_sends();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      outstanding = count;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      while (outstanding &gt; 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          check_completed();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do_sends()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      for (i = 0; i &lt; count; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_ISend(buf, len, MPI_CHAR, i, 0, MPI_COMM_WORLD, &amp;reqs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check_completed()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      int completed;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_Testsome(count, reqs, &amp;completed, tids, stats) !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_SUCCESS) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;error in testsome\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          exit(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      outstanding -= completed;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The thing is, MPI_Testsome() returns with completed = 1 the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time I call it, then completed = -32766 the second time I call it. It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always returns MPI_SUCCESS though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone know what's going on? Am I doing something dumb?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0379.php">George Bosilca: "Re:  MPI question"</a>
<li><strong>Previous message:</strong> <a href="0377.php">Greg Watson: "Re:  MPI question"</a>
<li><strong>In reply to:</strong> <a href="0377.php">Greg Watson: "Re:  MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0379.php">George Bosilca: "Re:  MPI question"</a>
<li><strong>Reply:</strong> <a href="0379.php">George Bosilca: "Re:  MPI question"</a>
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
