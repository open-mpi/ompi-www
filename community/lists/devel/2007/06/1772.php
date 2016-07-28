<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 18:05:05 2007" -->
<!-- isoreceived="20070626220505" -->
<!-- sent="Tue, 26 Jun 2007 15:03:56 -0700" -->
<!-- isosent="20070626220356" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SCTP BTL Development for Open MPI" -->
<!-- id="46818D4C.90907_at_cs.ubc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="13FECB3E-E902-4681-87AE-BE2612008079_at_cs.utk.edu" -->
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
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 18:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1773.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1770.php">George Bosilca: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Karol,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We (the folks at UTK) implemented a SCTP BTL. It's not yet in the 
</span><br>
<span class="quotelev1">&gt; trunk, but it will get there shortly. Instead of starting from 
</span><br>
<span class="quotelev1">&gt; scratch, it might be a good idea to start directly from there.
</span><br>
Thanks for the reply. This BTL would definitely be worth taking a look 
<br>
at. Is there a preliminary copy of the source? If so, is there anyway I 
<br>
could obtain it?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To answer your question, the TCP BTL use a copy of the original iovec. 
</span><br>
<span class="quotelev1">&gt; After each write, this copy is modified in order to describe the next 
</span><br>
<span class="quotelev1">&gt; operation (i.e. some of the iovec removed and some pointers modified 
</span><br>
<span class="quotelev1">&gt; based on the return value of the write function).
</span><br>
I've seen this occurring in numerous gdb traces. I'm curious if anyone 
<br>
has tried expanding the array of iovec's to handle large messages over 
<br>
SCTP? Currently I'm copying the original iovec over and fragmenting the 
<br>
data portion if it is over a certain size. The new series of iovecs are 
<br>
then individually passed to writev(). There is probably a more elegant 
<br>
solution and one in which the original frag pointer has knowledge of 
<br>
what is going on.
<br>
<p><pre>
-- 
Karol Mroz
kmroz_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1773.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1770.php">George Bosilca: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
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
