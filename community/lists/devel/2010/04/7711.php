<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 19:54:01 2010" -->
<!-- isoreceived="20100407235401" -->
<!-- sent="Wed, 07 Apr 2010 16:56:13 -0700" -->
<!-- isosent="20100407235613" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BBD1B9D.6030106_at_oracle.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BBBAFE2.6070904_at_docawk.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 19:56:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7712.php">luyang dong: "[OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>Previous message:</strong> <a href="7710.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>In reply to:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7722.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7722.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oliver Geisler wrote:
<br>
<p><span class="quotelev1">&gt;Using netpipe and comparing tcp and mpi communication I get the
</span><br>
<span class="quotelev1">&gt;following results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;TCP is much faster than MPI, approx. by factor 12
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Faster?  12x?  I don't understand the following:
<br>
<p><span class="quotelev1">&gt;e.g a packet size of 4096 bytes deliveres in
</span><br>
<span class="quotelev1">&gt;97.11 usec with NPtcp and
</span><br>
<span class="quotelev1">&gt;15338.98 usec with NPmpi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
This implies NPtcp is 160x faster than NPmpi.
<br>
<p><span class="quotelev1">&gt;or
</span><br>
<span class="quotelev1">&gt;packet size 262kb
</span><br>
<span class="quotelev1">&gt;0.05268801 sec NPtcp
</span><br>
<span class="quotelev1">&gt;0.00254560 sec NPmpi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
This implies NPtcp is 20x slower than NPmpi.
<br>
<p><span class="quotelev1">&gt;Further our benchmark started with &quot;--mca btl tcp,self&quot; runs with short
</span><br>
<span class="quotelev1">&gt;communication times, even using kernel 2.6.33.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there a way to see what type of communication is actually selected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can anybody imagine why shared memory leads to these problems?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Okay, so it's a shared-memory performance problem since:
<br>
<p>1) You get better performance when you exclude sm explicitly with &quot;--mca 
<br>
btl tcp,self&quot;.
<br>
2) You get better performance when you exclude sm by distributing one 
<br>
process per node (an observation you made relatively early in this thread).
<br>
3) TCP is faster than MPI (which is presumably using sm).
<br>
<p>Can you run a pingpong test as a function of message length for two 
<br>
processes in a way that demonstrates the problem?  For example, if 
<br>
you're comfortable with SKaMPI, just look at Pingpong_Send_Recv and 
<br>
let's see what performance looks like as a function of message length.  
<br>
Maybe this is a short-message-latency problem.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7712.php">luyang dong: "[OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>Previous message:</strong> <a href="7710.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>In reply to:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7722.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7722.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
