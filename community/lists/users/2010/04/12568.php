<?
$subject_val = "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 18:09:38 2010" -->
<!-- isoreceived="20100406220938" -->
<!-- sent="Tue, 06 Apr 2010 17:09:11 -0500" -->
<!-- isosent="20100406220911" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BBBB107.60702_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43966669-6409-47F1-BCDC-E5A364A9D23B_at_cisco.com" -->
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
<strong>From:</strong> Oliver Geisler (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 18:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12569.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Previous message:</strong> <a href="12567.php">David Turner: "[OMPI users] excluding hosts"</a>
<li><strong>In reply to:</strong> <a href="12564.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12560.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/6/2010 2:53 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try NetPIPE -- it has both MPI communication benchmarking and TCP benchmarking.  Then you can see if there is a noticable difference between TCP and MPI (there shouldn't be).  There's also a &quot;memcpy&quot; mode in netpipe, but it's not quite the same thing as shared memory message passing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Using netpipe and comparing tcp and mpi communication I get the
<br>
following results:
<br>
<p>TCP is much faster than MPI, approx. by factor 12
<br>
e.g a packet size of 4096 bytes deliveres in
<br>
97.11 usec with NPtcp and
<br>
15338.98 usec with NPmpi
<br>
or
<br>
packet size 262kb
<br>
0.05268801 sec NPtcp
<br>
0.00254560 sec NPmpi
<br>
<p>Further our benchmark started with &quot;--mca btl tcp,self&quot; runs with short
<br>
communication times, even using kernel 2.6.33.1
<br>
<p>Is there a way to see what type of communication is actually selected?
<br>
<p>Can anybody imagine why shared memory leads to these problems?
<br>
Kernel configuration?
<br>
<p><p>Thanks, Jeff, for insisting upon testing network performance.
<br>
Thanks all others, too ;-)
<br>
<p>oli
<br>
<p><p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12569.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Previous message:</strong> <a href="12567.php">David Turner: "[OMPI users] excluding hosts"</a>
<li><strong>In reply to:</strong> <a href="12564.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12560.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
