<?
$subject_val = "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 04:44:27 2009" -->
<!-- isoreceived="20090605084427" -->
<!-- sent="Fri, 5 Jun 2009 10:44:22 +0200" -->
<!-- isosent="20090605084422" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&amp;quot;" -->
<!-- id="9b0da5ce0906050144i11d84826r530a5ec930a4ad0b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8acca4520906041658w7fd57447k265a885d759138de_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-05 04:44:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9552.php">Jeff Squyres: "Re: [OMPI users] Best way to overlap computation and transfer using MPIover TCP/Ethernet?"</a>
<li><strong>Previous message:</strong> <a href="9550.php">Jeff Squyres: "Re: [OMPI users] What flags for configure for a single machineinstallation ?"</a>
<li><strong>In reply to:</strong> <a href="9547.php">Lars Andersson: "[OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9568.php">Lars Andersson: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am no expert here, and i don't know the specific
<br>
requirements for your problem,  but wouldn't it make sense to
<br>
have 2 &quot;master&quot; processes? One which deals out the jobs,
<br>
and one which collects the results?
<br>
<p>Jody
<br>
<p>On Fri, Jun 5, 2009 at 1:58 AM, Lars Andersson&lt;larsand_at_[hidden]&gt; wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; I've been trying to get overlapping computation and data transfer to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work, without much success so far.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If this is so important to you, why do you insist in using Ethernet
</span><br>
<span class="quotelev2">&gt;&gt; and not a more HPC-oriented interconnect which can make progress in
</span><br>
<span class="quotelev2">&gt;&gt; the background ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a medium sized cluster connected using ethernet that works
</span><br>
<span class="quotelev1">&gt; pretty well for most of our workloads, and we don't have the resources
</span><br>
<span class="quotelev1">&gt; to simply buy whatever hardware would be more optimal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For most parts of our application, we either have huge data transfers
</span><br>
<span class="quotelev1">&gt; that can't benefit much from simultaneous computation/overlap, or
</span><br>
<span class="quotelev1">&gt; small, frequent message passing that works well with the busy-waiting
</span><br>
<span class="quotelev1">&gt; nature or Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we are now investigating a problem that would benefit from
</span><br>
<span class="quotelev1">&gt; (or at least be much easier to implement) if we were able to overlap
</span><br>
<span class="quotelev1">&gt; local computation with medium sized message transfers (1-10MB). In
</span><br>
<span class="quotelev1">&gt; short, the problem is having a master decoding image frames and
</span><br>
<span class="quotelev1">&gt; sending them around to a number of processing slaves, as well as
</span><br>
<span class="quotelev1">&gt; collecting resulting output for each frame from the slaves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since my first post, I've been searching a bit more and found the
</span><br>
<span class="quotelev1">&gt; &quot;--enable-progress-threads&quot; Open MPI build option. I've tried it
</span><br>
<span class="quotelev1">&gt; (using Open MPI 1.3.2), but it doesn't seem to make any difference.
</span><br>
<span class="quotelev1">&gt; Should it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, what is my best bet?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Spawning a thread doing MPI_Wait() while doing the local work in
</span><br>
<span class="quotelev1">&gt; the main thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Spawning a thread doing something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;while(!done)
</span><br>
<span class="quotelev1">&gt; &#160; {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;usleep(1000);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;for each request
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; {
</span><br>
<span class="quotelev1">&gt; MPI_Test();
</span><br>
<span class="quotelev1">&gt; &#160; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; What amount of sleep would you recommend here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Trying to intersperse my local computation with MPI_Test() calls?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't really like solution 3 because most of the local work is being
</span><br>
<span class="quotelev1">&gt; done in external library code, which means it's going to be hard/ugly
</span><br>
<span class="quotelev1">&gt; to intersperse it with MPI calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd really appreciate if someone with experience could comment on
</span><br>
<span class="quotelev1">&gt; this. I hope my problem is clear. How would you solve it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lars
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9552.php">Jeff Squyres: "Re: [OMPI users] Best way to overlap computation and transfer using MPIover TCP/Ethernet?"</a>
<li><strong>Previous message:</strong> <a href="9550.php">Jeff Squyres: "Re: [OMPI users] What flags for configure for a single machineinstallation ?"</a>
<li><strong>In reply to:</strong> <a href="9547.php">Lars Andersson: "[OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9568.php">Lars Andersson: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
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
