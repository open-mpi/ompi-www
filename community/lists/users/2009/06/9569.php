<?
$subject_val = "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 20:53:07 2009" -->
<!-- isoreceived="20090609005307" -->
<!-- sent="Mon, 8 Jun 2009 17:52:56 -0700 (PDT)" -->
<!-- isosent="20090609005256" -->
<!-- name="shan axida" -->
<!-- email="axida2009_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&amp;quot;" -->
<!-- id="619356.59844.qm_at_web62007.mail.re1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8acca4520906081411t553f4261hedef49bf29bed93c_at_mail.gmail.com" -->
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
<strong>From:</strong> shan axida (<em>axida2009_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 20:52:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9570.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a	single	machine	installation ?"</a>
<li><strong>Previous message:</strong> <a href="9568.php">Lars Andersson: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>In reply to:</strong> <a href="9568.php">Lars Andersson: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
Would you please tell me how did you do the experiment by calling MPI_Test in
<br>
little more details? 
<br>
<p>Thanks!
<br>
<p><p><p><p><p>________________________________
<br>
From: Lars Andersson &lt;larsand_at_[hidden]&gt;
<br>
To: users_at_[hidden]
<br>
Sent: Tuesday, June 9, 2009 6:11:11 AM
<br>
Subject: Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;
<br>
<p>On Mon, Jun 8, 2009 at 11:07 PM, Lars Andersson&lt;larsand_at_[hidden]&gt; wrote:
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
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9569/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9570.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a	single	machine	installation ?"</a>
<li><strong>Previous message:</strong> <a href="9568.php">Lars Andersson: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>In reply to:</strong> <a href="9568.php">Lars Andersson: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
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
