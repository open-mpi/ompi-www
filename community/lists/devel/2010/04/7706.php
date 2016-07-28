<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 18:09:14 2010" -->
<!-- isoreceived="20100406220914" -->
<!-- sent="Tue, 6 Apr 2010 18:09:09 -0400" -->
<!-- isosent="20100406220909" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="24D0A21E-5C04-4B36-8D2D-1BF9E17B5072_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 18:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7707.php">Jeff Squyres: "Re: [OMPI devel] adding ping-pong test to examples directory?"</a>
<li><strong>Previous message:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7708.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7708.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2010, at 6:04 PM, Oliver Geisler wrote:
<br>
<p><span class="quotelev1">&gt; Using netpipe and comparing tcp and mpi communication I get the
</span><br>
<span class="quotelev1">&gt; following results:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TCP is much faster than MPI, approx. by factor 12
</span><br>
<span class="quotelev1">&gt; e.g a packet size of 4096 bytes deliveres in
</span><br>
<span class="quotelev1">&gt; 97.11 usec with NPtcp and
</span><br>
<span class="quotelev1">&gt; 15338.98 usec with NPmpi
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; packet size 262kb
</span><br>
<span class="quotelev1">&gt; 0.05268801 sec NPtcp
</span><br>
<span class="quotelev1">&gt; 0.00254560 sec NPmpi
</span><br>
<p>Well that's not good (for us).  :-\
<br>
<p><span class="quotelev1">&gt; Further our benchmark started with &quot;--mca btl tcp,self&quot; runs with short
</span><br>
<span class="quotelev1">&gt; communication times, even using kernel 2.6.33.1
</span><br>
<p>I'm not sure what this statement means (^^).  Can you explain?
<br>
<p><span class="quotelev1">&gt; Is there a way to see what type of communication is actually selected?
</span><br>
<p>If you &quot;--mca btl tcp,self&quot; is used, then TCP sockets are used for non-self communications (i.e., communications with peer MPI processes, regardless of location).
<br>
<p><span class="quotelev1">&gt; Can anybody imagine why shared memory leads to these problems?
</span><br>
<p>I'm not sure I understand this -- if &quot;--mca btl tcp,self&quot;, shared memory is not used...?
<br>
<p>....re-reading your email, I'm wondering: did you run the NPmpi process with &quot;--mca btl tcp,sm,self&quot; (or no --mca btl param)?  That might explain some of my confusion, above.
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
<li><strong>Next message:</strong> <a href="7707.php">Jeff Squyres: "Re: [OMPI devel] adding ping-pong test to examples directory?"</a>
<li><strong>Previous message:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7705.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7708.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7708.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
