<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 15:00:35 2009" -->
<!-- isoreceived="20090330190035" -->
<!-- sent="Mon, 30 Mar 2009 10:59:56 -0800" -->
<!-- isosent="20090330185956" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49D116AC.3010109_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49D10801.2060001_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 14:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5758.php">Jeff Squyres: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg faultrunning	OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5756.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5755.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5760.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick Geoffray wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why not?  The &quot;owning&quot; process can do the touch; then it'll be 
</span><br>
<span class="quotelev2">&gt;&gt; affinity'ed properly.  Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that's what I meant by forcing allocation. From the thread, it 
</span><br>
<span class="quotelev1">&gt; looked like nobody touched the pages of the mapped file. If it's 
</span><br>
<span class="quotelev1">&gt; already done, no need to write in the whole file.
</span><br>
<p>The shared area is used for two kinds of data structures:  FIFOs and 
<br>
fragments.  Fragments are first touched (written) by their senders.  
<br>
FIFOs are complicated data structures that used (up to 1.3.1) to be 
<br>
mapped all over the place -- parts local to sender and parts local to 
<br>
receiver.  Receivers would touch their part.  Once senders believed the 
<br>
receivers set their stuff up, the senders would initialize their parts.
<br>
<p>The stuff that occurs &quot;0.01%&quot; of the time that Jeff and Terry saw looked 
<br>
to me like a memory race condition.  That is, a receiver would 
<br>
initialize some memory and then publish a pointer.  A sender, upon 
<br>
seeing the pointer, would assume the corresponding memory was 
<br>
initialized.  But, there weren't a whole lot of memory barriers 
<br>
anywhere, and I've wondered whether the sender might see 
<br>
&quot;pre-initialized&quot; memory.  I just don't know.
<br>
<p>The stuff that occurs &quot;1%&quot; of the time (e.g., in MTT logs noted by Ralph 
<br>
recently) might be something else.
<br>
<p>Anyhow, the first touch should all be happening properly from an 
<br>
affinity point of view and the reason we want zerofill is so that that 
<br>
sender/receiver coordination happens properly (and there may be other 
<br>
ways of addressing that).  And, most of all, lots of mysteries remain.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5758.php">Jeff Squyres: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg faultrunning	OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5756.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5755.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5760.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
