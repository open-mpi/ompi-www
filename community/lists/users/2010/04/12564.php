<?
$subject_val = "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 15:53:08 2010" -->
<!-- isoreceived="20100406195308" -->
<!-- sent="Tue, 6 Apr 2010 15:53:03 -0400" -->
<!-- isosent="20100406195303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="43966669-6409-47F1-BCDC-E5A364A9D23B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BB4FF55.8060104_at_docawk.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 15:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12565.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12563.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="12517.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12568.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="12568.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2010, at 4:17 PM, Oliver Geisler wrote:
<br>
<p><span class="quotelev2">&gt; &gt; However, reading through your initial description on Tuesday, none of these
</span><br>
<span class="quotelev2">&gt; &gt; fit: You want to actually measure the kernel time on TCP communication costs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since the problem occurs also on node only configuration and mca-option
</span><br>
<span class="quotelev1">&gt; btl = self,sm,tcp is used, I doubt it has to do with TCP communication.
</span><br>
<p>I'm not sure what to make of this remark.  Why would the raw performance of TCP be irrelevant?  Open MPI uses TCP over ethernet, so it can't be faster than TCP.  More specifically: if something is making TCP slow, the MPI will be slow as well.  From the times you've listed, it almost sounds like you're getting a lot of TCP drops and retransmits (the lengthy times could be timeouts).  Can you check your NIC / switch hardware to see if you're getting drops?
<br>
<p>Also, you should probably test raw ping-pong performance:
<br>
<p>a) between 2 MPI processes on the same node.  E.g.:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 2 --mca btl sm,self _your_favorite_benchmark_
<br>
<p>&nbsp;&nbsp;&nbsp;This will test shared memory latency/bandwidth/whatever of MPI on that node.
<br>
<p>b) between 2 MPI processes on different nodes
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 2 --host cluster-06,cluster-07 --mca btl tcp,self _your_favorite_benchmark_
<br>
<p>&nbsp;&nbsp;&nbsp;This will test TCP latency/bandwidth/whatever of MPI on that node.
<br>
<p>Try NetPIPE -- it has both MPI communication benchmarking and TCP benchmarking.  Then you can see if there is a noticable difference between TCP and MPI (there shouldn't be).  There's also a &quot;memcpy&quot; mode in netpipe, but it's not quite the same thing as shared memory message passing.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="12565.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12563.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="12517.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12568.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="12568.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
