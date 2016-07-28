<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 23:49:03 2010" -->
<!-- isoreceived="20100410034903" -->
<!-- sent="Fri, 09 Apr 2010 20:51:14 -0700" -->
<!-- isosent="20100410035114" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BBFF5B2.2060009_at_oracle.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BBF9536.9020600_at_docawk.org" -->
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
<strong>Date:</strong> 2010-04-09 23:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7724.php">Bogdan Costescu: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7722.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7722.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7724.php">Bogdan Costescu: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7724.php">Bogdan Costescu: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7726.php">Ashley Pittman: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oliver Geisler wrote:
<br>
<p><span class="quotelev1">&gt; This is the results of skampi pt2pt, first with shared memory allowed,
</span><br>
<span class="quotelev1">&gt; second shared memory excluded.
</span><br>
<p>Thanks for the data.  The TCP results are not very interesting... they 
<br>
look reasonable.
<br>
<p>The shared-memory data is rather straightforward:  results are just 
<br>
plain ridiculously bad.  The results for &quot;eager&quot; messages (messages 
<br>
shorter than 4Kbytes) are around 12 millisec.  The results for 
<br>
&quot;rendezvous&quot; messages (longer than 4 Kbytes, signal the receiver, wait 
<br>
for an acknowledgement, then send the message) are about 30 millisec.
<br>
<p>I was also curious about &quot;long-message bandwidth&quot;, but since SKaMPI is 
<br>
only going up to 16 Kbyte messages, we can't really tell.
<br>
<p>But, maybe all that is irrelevent.
<br>
<p>Why is shared-memory performance about four orders of magnitude slower 
<br>
than it should be?  The processes are communicating via memory that's 
<br>
shared by having the processes all mmap the same file into their address 
<br>
spaces.  Is it possible that with the newer kernels, operations to that 
<br>
shared file are going all the way out to disk?  Maybe you don't know the 
<br>
answer, but hopefully someone on this mail list can provide some insight.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7724.php">Bogdan Costescu: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7722.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7722.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7724.php">Bogdan Costescu: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7724.php">Bogdan Costescu: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7726.php">Ashley Pittman: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
