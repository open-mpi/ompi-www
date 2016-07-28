<?
$subject_val = "[OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 19:58:24 2009" -->
<!-- isoreceived="20090604235824" -->
<!-- sent="Fri, 5 Jun 2009 09:58:20 +1000" -->
<!-- isosent="20090604235820" -->
<!-- name="Lars Andersson" -->
<!-- email="larsand_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&amp;quot;" -->
<!-- id="8acca4520906041658w7fd57447k265a885d759138de_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;<br>
<strong>From:</strong> Lars Andersson (<em>larsand_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 19:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9548.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a single machine	installation ?"</a>
<li><strong>Previous message:</strong> <a href="9546.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9551.php">jody: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Reply:</strong> <a href="9551.php">jody: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Maybe reply:</strong> <a href="9568.php">Lars Andersson: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; I've been trying to get overlapping computation and data transfer to
</span><br>
<span class="quotelev2">&gt;&gt; work, without much success so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this is so important to you, why do you insist in using Ethernet
</span><br>
<span class="quotelev1">&gt; and not a more HPC-oriented interconnect which can make progress in
</span><br>
<span class="quotelev1">&gt; the background ?
</span><br>
<p>We have a medium sized cluster connected using ethernet that works
<br>
pretty well for most of our workloads, and we don't have the resources
<br>
to simply buy whatever hardware would be more optimal.
<br>
<p>For most parts of our application, we either have huge data transfers
<br>
that can't benefit much from simultaneous computation/overlap, or
<br>
small, frequent message passing that works well with the busy-waiting
<br>
nature or Open MPI.
<br>
<p>However, we are now investigating a problem that would benefit from
<br>
(or at least be much easier to implement) if we were able to overlap
<br>
local computation with medium sized message transfers (1-10MB). In
<br>
short, the problem is having a master decoding image frames and
<br>
sending them around to a number of processing slaves, as well as
<br>
collecting resulting output for each frame from the slaves.
<br>
<p>Since my first post, I've been searching a bit more and found the
<br>
&quot;--enable-progress-threads&quot; Open MPI build option. I've tried it
<br>
(using Open MPI 1.3.2), but it doesn't seem to make any difference.
<br>
Should it?
<br>
<p><p>So, what is my best bet?
<br>
<p>1) Spawning a thread doing MPI_Wait() while doing the local work in
<br>
the main thread.
<br>
<p><p>2) Spawning a thread doing something like
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;while(!done)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usleep(1000);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for each request
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
MPI_Test();
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;What amount of sleep would you recommend here?
<br>
<p><p>3) Trying to intersperse my local computation with MPI_Test() calls?
<br>
<p><p><p>I don't really like solution 3 because most of the local work is being
<br>
done in external library code, which means it's going to be hard/ugly
<br>
to intersperse it with MPI calls.
<br>
<p>I'd really appreciate if someone with experience could comment on
<br>
this. I hope my problem is clear. How would you solve it?
<br>
<p>Thanks,
<br>
<p>Lars
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9548.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a single machine	installation ?"</a>
<li><strong>Previous message:</strong> <a href="9546.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9551.php">jody: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Reply:</strong> <a href="9551.php">jody: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Maybe reply:</strong> <a href="9568.php">Lars Andersson: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
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
