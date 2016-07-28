<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 18 08:17:04 2005" -->
<!-- isoreceived="20050918131704" -->
<!-- sent="Sat, 17 Sep 2005 10:11:19 -0400" -->
<!-- isosent="20050917141119" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  MPI question" -->
<!-- id="ca395c2a4447b22e6cb974d8b29f0d62_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BC739E42-35AB-4A27-AF62-D98A9F54AF5D_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-09-17 09:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0377.php">Greg Watson: "Re:  MPI question"</a>
<li><strong>Previous message:</strong> <a href="0375.php">Brian Barrett: "Re:  Group_range_excl question"</a>
<li><strong>In reply to:</strong> <a href="0373.php">Greg Watson: "MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0377.php">Greg Watson: "Re:  MPI question"</a>
<li><strong>Reply:</strong> <a href="0377.php">Greg Watson: "Re:  MPI question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(composing this in an airport on Saturday; may not actually be sent 
<br>
until Monday or so)
<br>
<p>-32766 is Open MPI's value for MPI_UNDEFINED.  This is what is returned 
<br>
when there are no active requests in the array that is passed to 
<br>
MPI_TESTSOME (see MPI-1.1:.
<br>
<p>Just to verify that this behavior isn't a bug, can you confirm some 
<br>
things:
<br>
<p>- is count &gt; 1?
<br>
<p>- if more than one request finished in that single call to MPI_TESTSOME 
<br>
where completed was returned with a value of 1 (e.g., multiple requests 
<br>
in your array turned into MPI_REQUEST_NULL), then this is a bug -- 
<br>
i.e., completed should return an accurate value.
<br>
<p><p><p>On Sep 16, 2005, at 8:45 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Just for a change, I don't have a build problem!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I have a question about the MPI_Testsome() call. I'm using
</span><br>
<span class="quotelev1">&gt; MPI_Testsome() to check the completion status of a number of
</span><br>
<span class="quotelev1">&gt; outstanding ISend() requests. I'm doing something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int outstanding;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      tids = (int *)malloc(sizeof(int) * count);
</span><br>
<span class="quotelev1">&gt;      stats = (MPI_Status *)malloc(sizeof(MPI_Status) * count);
</span><br>
<span class="quotelev1">&gt;      reqs = (MPI_Request *) malloc(sizeof(MPI_Request) * count)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      do_sends();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      outstanding = count;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      while (outstanding &gt; 0)
</span><br>
<span class="quotelev1">&gt;          check_completed();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do_sends()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; count; i++)
</span><br>
<span class="quotelev1">&gt;          MPI_ISend(buf, len, MPI_CHAR, i, 0, MPI_COMM_WORLD, &amp;reqs[i]);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; check_completed()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      int completed;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (MPI_Testsome(count, reqs, &amp;completed, tids, stats) !=
</span><br>
<span class="quotelev1">&gt; MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;          printf(&quot;error in testsome\n&quot;);
</span><br>
<span class="quotelev1">&gt;          exit(1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      outstanding -= completed;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thing is, MPI_Testsome() returns with completed = 1 the first
</span><br>
<span class="quotelev1">&gt; time I call it, then completed = -32766 the second time I call it. It
</span><br>
<span class="quotelev1">&gt; always returns MPI_SUCCESS though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know what's going on? Am I doing something dumb?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
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
<li><strong>Next message:</strong> <a href="0377.php">Greg Watson: "Re:  MPI question"</a>
<li><strong>Previous message:</strong> <a href="0375.php">Brian Barrett: "Re:  Group_range_excl question"</a>
<li><strong>In reply to:</strong> <a href="0373.php">Greg Watson: "MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0377.php">Greg Watson: "Re:  MPI question"</a>
<li><strong>Reply:</strong> <a href="0377.php">Greg Watson: "Re:  MPI question"</a>
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
