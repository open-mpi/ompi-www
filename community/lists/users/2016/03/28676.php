<?
$subject_val = "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 13:13:25 2016" -->
<!-- isoreceived="20160310181325" -->
<!-- sent="Thu, 10 Mar 2016 19:13:22 +0100 (CET)" -->
<!-- isosent="20160310181322" -->
<!-- name="Vincent Diepeveen" -->
<!-- email="diep_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What causes the pingpong bandwidth &amp;quot;hump&amp;quot; on SM?" -->
<!-- id="alpine.DEB.2.02.1603101902230.18624_at_xs9.xs4all.nl" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="E6B38372B5A4894D811264E60EFF51E82E7E84A8_at_UUSNWE1K.na.utcmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?<br>
<strong>From:</strong> Vincent Diepeveen (<em>diep_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 13:13:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28677.php">Éric Chamberland: "[OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28675.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>In reply to:</strong> <a href="28674.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28678.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 10 Mar 2016, BRADLEY, PETER C PW wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an academic exercise, obviously.&#160; The curve shown comes from one pair of ranks running on the same node alternating between MPI_Send and
</span><br>
<span class="quotelev1">&gt; MPI_Recv.&#160; The most likely suspect is a cache effect, but rather than assuming, I was curious if there might be any other aspects of the implementation
</span><br>
<span class="quotelev1">&gt; at work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pete
</span><br>
<p>Well with some more effort you can get all statistics from the processor 
<br>
on cache misses...
<br>
<p>Your graph doesn't show other effects though i suspect.
<br>
<p>A multiple of 5GB/s is a lot of bandwidth for a laptop right now. 
<br>
Please consider that each buffer gets copied as you ship a message so the 
<br>
actual bandwidth is a multiple of that 5GB/s.
<br>
<p>This test is all shipping it in a FIFO order (first in first out) - trashing the caches in short.
<br>
<p>Ping-pong isn't intended as a bandwidth test at all.
<br>
<p>It's a latency test. More useful to run on a supercomputer and figure out 
<br>
the time it takes to get to a remote node and back, and then it divides 
<br>
that by 2.
<br>
<p>I wrote a few tests some years ago to test the random latency of your RAM 
<br>
with all cores at the same time.
<br>
<p>Yet very few of those tests are busy with bandwidth. They care about 
<br>
number of of messages a second one can push through. So with latency.
<br>
<p>The network plays a larger role when run over multiple nodes, whereas 
<br>
here you just try to figure out how good your L2/L3 cache is on the CPU.
<br>
<p>Let me assure you - that L2/L3 cache works very well :)
<br>
<p><span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pete,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; how did you measure the bandwidth ?
</span><br>
<span class="quotelev1">&gt; iirc, IMB benchmark does not reuse send and recv buffers, so the results
</span><br>
<span class="quotelev1">&gt; could be different.
</span><br>
<span class="quotelev1">&gt; also, you might want to use a logarithmic scale for the message size, so
</span><br>
<span class="quotelev1">&gt; information for small messages is easier to read.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday, March 10, 2016, BRADLEY, PETER C PW &lt;peter.c.bradley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I&#226;&#128;&#153;m curious what causes the hump in the pingpong bandwidth curve when
</span><br>
<span class="quotelev2">&gt; &gt; running on shared memory. Here&#226;&#128;&#153;s an example running on a fairly antiquated
</span><br>
<span class="quotelev2">&gt; &gt; single-socket 4 core laptop with linux (2.6.32 kernel). Is this a cache
</span><br>
<span class="quotelev2">&gt; &gt; effect? Something in OpenMPI itself, or a combination?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [image: Macintosh HD:Users:up:Pictures:bandwidth_onepair_onenode.png]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Pete
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28677.php">Éric Chamberland: "[OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28675.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>In reply to:</strong> <a href="28674.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28678.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
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
