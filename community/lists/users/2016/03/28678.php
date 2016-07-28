<?
$subject_val = "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 19:51:12 2016" -->
<!-- isoreceived="20160311005112" -->
<!-- sent="Fri, 11 Mar 2016 00:51:03 +0000" -->
<!-- isosent="20160311005103" -->
<!-- name="BRADLEY, PETER C          PW" -->
<!-- email="peter.c.bradley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What causes the pingpong bandwidth &amp;quot;hump&amp;quot; on SM?" -->
<!-- id="E6B38372B5A4894D811264E60EFF51E82E7E8B0A_at_UUSNWE1K.na.utcmail.com" -->
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
<strong>Date:</strong> 2016-03-10 19:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28679.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28677.php">&#195;&#137;ric Chamberland: "[OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Maybe in reply to:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff et al,
<br>
Thanks, exactly what I was looking for.
<br>
Pete
<br>
I think the information was scattered across a few posts, but the union of which is correct:
<br>
- it depends on the benchmark
<br>
- yes, L1/L2/L3 cache sizes can have a huge effect. I.e., once the buffer size gets bigger than the cache size, it takes more time to get the message from main RAM
<br>
&nbsp;&nbsp;--&gt; check the output from hwloc's &quot;lstopo&quot; tool to find your cache sizes
<br>
- the specific flavor of shared memory used also has a huge effect. The default is copy-in/copy-out, but other shared memory mechanisms are also available (e.g., Linux CMA, Linux KNEM, XPMEM)
<br>
Does that help?
<br>
<span class="quotelev1">&gt; On Mar 10, 2016, at 12:25 PM, BRADLEY, PETER C PW &lt;peter.c.bradley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is an academic exercise, obviously. The curve shown comes from one pair of ranks running on the same node alternating between MPI_Send and MPI_Recv. The most likely suspect is a cache effect, but rather than assuming, I was curious if there might be any other aspects of the implementation at work.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28674.php">http://www.open-mpi.org/community/lists/users/2016/03/28674.php</a>
</span><br>
<pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28679.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28677.php">&#195;&#137;ric Chamberland: "[OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Maybe in reply to:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
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
