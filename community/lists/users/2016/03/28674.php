<?
$subject_val = "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 12:25:38 2016" -->
<!-- isoreceived="20160310172538" -->
<!-- sent="Thu, 10 Mar 2016 17:25:27 +0000" -->
<!-- isosent="20160310172527" -->
<!-- name="BRADLEY, PETER C          PW" -->
<!-- email="peter.c.bradley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What causes the pingpong bandwidth &amp;quot;hump&amp;quot; on SM?" -->
<!-- id="E6B38372B5A4894D811264E60EFF51E82E7E84A8_at_UUSNWE1K.na.utcmail.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="[OMPI users] What causes the pingpong bandwidth &amp;quot;hump&amp;quot; on SM?" -->
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
<strong>From:</strong> BRADLEY, PETER C          PW (<em>peter.c.bradley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 12:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28675.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28673.php">Michael Di Domenico: "[OMPI users] locked memory and queue pairs"</a>
<li><strong>Maybe in reply to:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28675.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Reply:</strong> <a href="28675.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Reply:</strong> <a href="28676.php">Vincent Diepeveen: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is an academic exercise, obviously.  The curve shown comes from one pair of ranks running on the same node alternating between MPI_Send and MPI_Recv.  The most likely suspect is a cache effect, but rather than assuming, I was curious if there might be any other aspects of the implementation at work.
<br>
<p>Pete
<br>
<p><p><p>Pete,
<br>
<p>how did you measure the bandwidth ?
<br>
iirc, IMB benchmark does not reuse send and recv buffers, so the results
<br>
could be different.
<br>
also, you might want to use a logarithmic scale for the message size, so
<br>
information for small messages is easier to read.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, March 10, 2016, BRADLEY, PETER C PW &lt;peter.c.bradley_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;m curious what causes the hump in the pingpong bandwidth curve when
</span><br>
<span class="quotelev1">&gt; running on shared memory. Here&#226;&#128;&#153;s an example running on a fairly antiquated
</span><br>
<span class="quotelev1">&gt; single-socket 4 core laptop with linux (2.6.32 kernel). Is this a cache
</span><br>
<span class="quotelev1">&gt; effect? Something in OpenMPI itself, or a combination?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [image: Macintosh HD:Users:up:Pictures:bandwidth_onepair_onenode.png]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pete
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28675.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28673.php">Michael Di Domenico: "[OMPI users] locked memory and queue pairs"</a>
<li><strong>Maybe in reply to:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28675.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Reply:</strong> <a href="28675.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Reply:</strong> <a href="28676.php">Vincent Diepeveen: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
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
