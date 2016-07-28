<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 19:47:38 2009" -->
<!-- isoreceived="20090122004738" -->
<!-- sent="Wed, 21 Jan 2009 16:51:55 -0800" -->
<!-- isosent="20090122005155" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="4977C32B.5060801_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4977B42E.3090309_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 19:51:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5268.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5266.php">Ron Brightwell: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5265.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5250.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick Geoffray wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Possibly, you meant to ask how one does directed polling with a 
</span><br>
<span class="quotelev2">&gt;&gt; wildcard source MPI_ANY_SOURCE.  If that was your question, the 
</span><br>
<span class="quotelev2">&gt;&gt; answer is we punt.  We report failure to the ULP, which reverts to 
</span><br>
<span class="quotelev2">&gt;&gt; the standard code path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I meant ANY_SOURCE. If you poll only the queue that correspond 
</span><br>
<span class="quotelev1">&gt; to a posted receive, you only optimize micro-benchmarks, until they 
</span><br>
<span class="quotelev1">&gt; start using ANY_SOURCE.
</span><br>
<p>Right.
<br>
<p><span class="quotelev1">&gt; So, does recvi() is a one-time shot ? Ie do you poll the right queue 
</span><br>
<span class="quotelev1">&gt; only once and if it fails then you fall back on polling all queues ?
</span><br>
<p>You poll it &quot;some&quot;.  The BTL is granted some leeway in what 
<br>
&quot;immediately&quot; means.
<br>
<p><span class="quotelev1">&gt; If yes, then it's unobtrusive but I don't think it would help much.
</span><br>
<p>Well, check the RFC.  The data shows huge improvements in HPCC latency.
<br>
<p><span class="quotelev1">&gt; If you poll the right queue many times, then you have to decide when 
</span><br>
<span class="quotelev1">&gt; to fall back on polling all queues, and it's not trivial.
</span><br>
<p>It's not 100% satisfactory, but clearly OMPI (and every other MPI 
<br>
implementation and just about any major piece of HPC software) is trying 
<br>
to guess among all sorts of trade-offs.  Many of those trade-offs are 
<br>
user tunable -- hence, those pages and pages compiler options (pick your 
<br>
favorite compiler), build flags, MCA parameters, etc.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; How do you ensure you check all incoming queues from time to time to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prevent flow control (specially if the queues are small for scaling) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are a variety of choices here.  Further, I'm afraid we 
</span><br>
<span class="quotelev2">&gt;&gt; ultimately have to expose some of those choices to the user (MCA 
</span><br>
<span class="quotelev2">&gt;&gt; parameters or something).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the vast majority of cases, users don't know how to turn the knobs.
</span><br>
<p>Totally agree.  Exposing these choices to the users is ugly and 
<br>
expecting users to make such choices is ridiculous.  Though, for what 
<br>
it's worth:
<br>
<p>% ompi_info -a | wc -l
<br>
1037
<br>
%
<br>
<p>I actually agree with you a lot.  I do think that my RFC represents one 
<br>
step forward.  I'll see how quickly I can prototype and characterize a 
<br>
single-queue solution so we can judge alternatives more diligently.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5268.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5266.php">Ron Brightwell: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5265.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5250.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
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
