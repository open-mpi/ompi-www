<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 16 19:45:07 2005" -->
<!-- isoreceived="20050917004507" -->
<!-- sent="Fri, 16 Sep 2005 18:45:24 -0600" -->
<!-- isosent="20050917004524" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="MPI question" -->
<!-- id="BC739E42-35AB-4A27-AF62-D98A9F54AF5D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2005-09-16 19:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0374.php">Rainer Keller: "Re:  Group_range_excl question"</a>
<li><strong>Previous message:</strong> <a href="0372.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0376.php">Jeff Squyres: "Re:  MPI question"</a>
<li><strong>Reply:</strong> <a href="0376.php">Jeff Squyres: "Re:  MPI question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just for a change, I don't have a build problem!
<br>
<p>However, I have a question about the MPI_Testsome() call. I'm using  
<br>
MPI_Testsome() to check the completion status of a number of  
<br>
outstanding ISend() requests. I'm doing something like this:
<br>
<p>int outstanding;
<br>
<p>main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tids = (int *)malloc(sizeof(int) * count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stats = (MPI_Status *)malloc(sizeof(MPI_Status) * count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reqs = (MPI_Request *) malloc(sizeof(MPI_Request) * count)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do_sends();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outstanding = count;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (outstanding &gt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_completed();
<br>
}
<br>
<p>do_sends()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; count; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ISend(buf, len, MPI_CHAR, i, 0, MPI_COMM_WORLD, &amp;reqs[i]);
<br>
}
<br>
<p>check_completed()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int completed;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_Testsome(count, reqs, &amp;completed, tids, stats) !=  
<br>
MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;error in testsome\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outstanding -= completed;
<br>
}
<br>
<p>The thing is, MPI_Testsome() returns with completed = 1 the first  
<br>
time I call it, then completed = -32766 the second time I call it. It  
<br>
always returns MPI_SUCCESS though.
<br>
<p>Does anyone know what's going on? Am I doing something dumb?
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0374.php">Rainer Keller: "Re:  Group_range_excl question"</a>
<li><strong>Previous message:</strong> <a href="0372.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0376.php">Jeff Squyres: "Re:  MPI question"</a>
<li><strong>Reply:</strong> <a href="0376.php">Jeff Squyres: "Re:  MPI question"</a>
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
