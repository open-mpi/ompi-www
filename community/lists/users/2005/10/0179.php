<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 11 20:02:44 2005" -->
<!-- isoreceived="20051012010244" -->
<!-- sent="Tue, 11 Oct 2005 20:02:36 -0500" -->
<!-- isosent="20051012010236" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Difficulties building 1.0rc2 on Tiger" -->
<!-- id="5CB8EA36-6F81-4504-84F0-4532ADE11311_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="988EF248-5523-4FB0-A117-FC964A0BE29D_at_rpi.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-11 20:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0180.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0178.php">Charles Williams: "[O-MPI users] Difficulties building 1.0rc2 on Tiger"</a>
<li><strong>In reply to:</strong> <a href="0178.php">Charles Williams: "[O-MPI users] Difficulties building 1.0rc2 on Tiger"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2005, at 1:10 PM, Charles Williams wrote:
<br>
<p><span class="quotelev1">&gt; I have successfully built several previous releases on my machine,  
</span><br>
<span class="quotelev1">&gt; but this last release exited with an error.  I am attaching the  
</span><br>
<span class="quotelev1">&gt; build and config logs, but as near as I can tell, the problem is a  
</span><br>
<span class="quotelev1">&gt; simple typo in the source file.  I was able to get things to build  
</span><br>
<span class="quotelev1">&gt; (although I haven't yet tested things) by simply changing the  
</span><br>
<span class="quotelev1">&gt; following line in openmpi-1.0rc2/orte/mca/pls/xgrid/src/ 
</span><br>
<span class="quotelev1">&gt; pls_xgrid_client.m:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Original line 254:  rc = orte_rmaps_base_mapped_node_query 
</span><br>
<span class="quotelev1">&gt; (&amp;mapping_list, &amp;nodes, jobid);
</span><br>
<span class="quotelev1">&gt; Changed line 254:  ret = orte_rmaps_base_mapped_node_query 
</span><br>
<span class="quotelev1">&gt; (&amp;mapping_list, &amp;nodes, jobid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if this is a reasonable change.  I don't have  
</span><br>
<span class="quotelev1">&gt; XGrid set up, so I wouldn't be able to test this anyway.
</span><br>
<p>Thanks for letting us know - Not sure how that slipped through for so  
<br>
long.  I've committed a change to fix this problem (and some problems  
<br>
with the operation of the XGrid starter).  Tonight's nightly builds  
<br>
and 1.0rc3 should have the fixes.
<br>
<p>Thanks again,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0180.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0178.php">Charles Williams: "[O-MPI users] Difficulties building 1.0rc2 on Tiger"</a>
<li><strong>In reply to:</strong> <a href="0178.php">Charles Williams: "[O-MPI users] Difficulties building 1.0rc2 on Tiger"</a>
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
