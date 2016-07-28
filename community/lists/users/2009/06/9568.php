<?
$subject_val = "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 17:11:17 2009" -->
<!-- isoreceived="20090608211117" -->
<!-- sent="Mon, 8 Jun 2009 23:11:11 +0200" -->
<!-- isosent="20090608211111" -->
<!-- name="Lars Andersson" -->
<!-- email="larsand_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&amp;quot;" -->
<!-- id="8acca4520906081411t553f4261hedef49bf29bed93c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8acca4520906081407w34f01816ra257f6ef0b7814b0_at_mail.gmail.com" -->
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
<strong>From:</strong> Lars Andersson (<em>larsand_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 17:11:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9569.php">shan axida: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Previous message:</strong> <a href="9567.php">George Bosilca: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Maybe in reply to:</strong> <a href="9547.php">Lars Andersson: "[OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9569.php">shan axida: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Reply:</strong> <a href="9569.php">shan axida: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jun 8, 2009 at 11:07 PM, Lars Andersson&lt;larsand_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'd say that your own workaround here is to intersperse MPI_TEST's
</span><br>
<span class="quotelev1">&gt; periodically. This will trigger OMPI's pipelined protocol for large
</span><br>
<span class="quotelev1">&gt; messages, and should allow partial bursts of progress while you're
</span><br>
<span class="quotelev1">&gt; assumedly off doing useful work. If this is difficult because the
</span><br>
<span class="quotelev1">&gt; work is being done in library code that you can't change, then perhaps
</span><br>
<span class="quotelev1">&gt; a pre-spawned &quot;work&quot; through could be used to call MPI_TEST
</span><br>
<span class="quotelev1">&gt; periodically. That way, it won't steal huge ammounts of CPU cycles
</span><br>
<span class="quotelev1">&gt; (like MPI_WAIT would). You still might get some cache thrashing,
</span><br>
<span class="quotelev1">&gt; context switching, etc. -- YMMV.
</span><br>
<p>Thanks Jeff, it's good to hear that this is a valid workaround. I've
<br>
done a few small experiments, and by calling MPI_Test in a while loop
<br>
with an usleep(1000) I'm able to get almost full bandwidth for large
<br>
messages with less than 5% CPU utilization.
<br>
<p>/Lars
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9569.php">shan axida: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Previous message:</strong> <a href="9567.php">George Bosilca: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Maybe in reply to:</strong> <a href="9547.php">Lars Andersson: "[OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9569.php">shan axida: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Reply:</strong> <a href="9569.php">shan axida: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
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
