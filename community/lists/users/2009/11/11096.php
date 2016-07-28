<?
$subject_val = "Re: [OMPI users] Programming Help needed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 18:11:33 2009" -->
<!-- isoreceived="20091106231133" -->
<!-- sent="Fri, 06 Nov 2009 18:11:29 -0500" -->
<!-- isosent="20091106231129" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Programming Help needed" -->
<!-- id="4AF4AD21.4090609_at_scinet.utoronto.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="428810f20911061444u5349f043x84e42cc59671e3c3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Programming Help needed<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 18:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11097.php">Tom Rosmond: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Previous message:</strong> <a href="11095.php">amjad ali: "[OMPI users] Programming Help needed"</a>
<li><strong>In reply to:</strong> <a href="11095.php">amjad ali: "[OMPI users] Programming Help needed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11097.php">Tom Rosmond: "Re: [OMPI users] Programming Help needed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Amjad:
<br>
<p><span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;  What I do is that I start non 
</span><br>
<span class="quotelev1">&gt; blocking MPI communication at the partition boundary faces (faces shared 
</span><br>
<span class="quotelev1">&gt; between any two processors) , and then start computing values on the 
</span><br>
<span class="quotelev1">&gt; internal/non-shared faces. When I complete this computation, I put 
</span><br>
<span class="quotelev1">&gt; WAITALL to ensure MPI communication completion. Then I do computation on 
</span><br>
<span class="quotelev1">&gt; the partition boundary faces (shared-ones). This way I try to hide the 
</span><br>
<span class="quotelev1">&gt; communication behind computation. Is it correct?
</span><br>
<p>As long as your numerical method allows you to do this (that is, you 
<br>
definitely don't need those boundary values to compute the internal 
<br>
values), then yes, this approach can hide some of the communication 
<br>
costs very effectively.  The way I'd program this if I were doing it 
<br>
from scratch would be to do the usual blocking approach (no one computes 
<br>
anything until all the faces are exchanged) first and get that working, 
<br>
then break up the computation step into internal and boundary 
<br>
computations and make sure it still works, and then change the messaging 
<br>
to isends/irecvs/waitalls, and make sure it still works, and only then 
<br>
interleave the two.
<br>
<p><span class="quotelev1">&gt; IMPORTANT: Secondly, if processor A shares 50 faces (on 50 or less 
</span><br>
<span class="quotelev1">&gt; elements) with an another processor B then it sends/recvs 50 different 
</span><br>
<span class="quotelev1">&gt; messages. So in general if a processors has X number of faces sharing 
</span><br>
<span class="quotelev1">&gt; with any number of other processors it sends/recvs that much messages. 
</span><br>
<span class="quotelev1">&gt; Is this way has &quot;very much reduced&quot; performance in comparison to the 
</span><br>
<span class="quotelev1">&gt; possibility that processor A will send/recv a single-bundle message 
</span><br>
<span class="quotelev1">&gt; (containg all 50-faces-data) to process B. Means that in general a 
</span><br>
<span class="quotelev1">&gt; processor will only send/recv that much messages as the number of 
</span><br>
<span class="quotelev1">&gt; processors neighbour to it.  It will send a single bundle/pack of 
</span><br>
<span class="quotelev1">&gt; messages to each neighbouring processor.
</span><br>
<span class="quotelev1">&gt; Is their &quot;quite a much difference&quot; between these two approaches?
</span><br>
<p>Your individual element faces that are being communicated are likely 
<br>
quite small.   It is quite generally the case that bundling many small 
<br>
messages into large messages can significantly improve performance, as 
<br>
you avoid incurring the repeated latency costs of sending many messages.
<br>
<p>As always, though, the answer is `it depends', and the only way to know 
<br>
is to try it both ways.   If you really do hide most of the 
<br>
communications cost with your non-blocking communications, then it may 
<br>
not matter too much.  In addition, if you don't know beforehand how much 
<br>
data you need to send/receive, then you'll need a handshaking step which 
<br>
introduces more synchronization and may actually hurt performance, or 
<br>
you'll have to use MPI2 one-sided communications.   On the other hand, 
<br>
if this shared boundary doesn't change through the simulation, you could 
<br>
just figure out at start-up time how big the messages will be between 
<br>
neighbours and use that as the basis for the usual two-sided messages.
<br>
<p>My experience is that there's an excellent chance you'll improve the 
<br>
performance by packing the little messages into fewer larger messages.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Jonathan
<br>
<pre>
-- 
Jonathan Dursi     &lt;ljdursi_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11097.php">Tom Rosmond: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Previous message:</strong> <a href="11095.php">amjad ali: "[OMPI users] Programming Help needed"</a>
<li><strong>In reply to:</strong> <a href="11095.php">amjad ali: "[OMPI users] Programming Help needed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11097.php">Tom Rosmond: "Re: [OMPI users] Programming Help needed"</a>
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
