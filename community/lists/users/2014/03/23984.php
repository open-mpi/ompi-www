<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 05:47:28 2014" -->
<!-- isoreceived="20140327094728" -->
<!-- sent="Thu, 27 Mar 2014 11:06:39 +0100" -->
<!-- isosent="20140327100639" -->
<!-- name="Thomas Heller" -->
<!-- email="thom.heller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="5333F82F.5070508_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140327091955.GB22802_at_neuromancer" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy waiting and oversubscriptions<br>
<strong>From:</strong> Thomas Heller (<em>thom.heller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 06:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23985.php">madhurima madhunapanthula: "[OMPI users] Hamster"</a>
<li><strong>Previous message:</strong> <a href="23983.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23983.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/27/2014 10:19 AM, Andreas Sch&#228;fer wrote:
<br>
<span class="quotelev1">&gt; On 14:26 Wed 26 Mar     , Ross Boylan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; [Main part is at the bottom]
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 2014-03-26 at 19:28 +0100, Andreas Sch&#228;fer wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you have a complex workflow with varying computational loads, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you might want to take a look at runtime systems which allow you to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; express this directly through their API, e.g. HPX[1]. HPX has proven to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run with high efficiency on a wide range of architectures, and with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multitude of different workloads.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the pointer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I might add that HPX can run on top of MPI, so you could gradually
</span><br>
<span class="quotelev1">&gt; migrate code towards it.
</span><br>
<p>Another note which is relevant to this discussion:
<br>
In HPX we actually do oversubscribe the nodes. There are worker threads 
<br>
which are supposed to do the actual computations, those are usually 
<br>
pinned to the actual CPU Cores (or hardware threads, depending on your 
<br>
machine and the way you want to do your thread pinning). On those worker 
<br>
threads, we then schedule (very lightweight) user level tasks which run 
<br>
the actual user code. You can have in the order of several million 
<br>
concurrent HPX-Threads (the user level tasks) running in an application 
<br>
per node.
<br>
In addition to those worker threads, we have dedicated Operating threads 
<br>
(only pinned to a certain socket or NUMA domain), which are responsible 
<br>
for doing the actual communication (This is however completely hidden 
<br>
behind our API, which supports truly asynchronous communication). In the 
<br>
case you have communication running over MPI or directly on top of 
<br>
(native) ibverbs, those threads do a busy wait on the actual sends and 
<br>
receives. The impact on performance is negligible here. But keep in mind 
<br>
that we put quite some effort in there in order to achieve that
<br>
<p>Cheers,
<br>
Thomas
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<p><pre>
-- 
Thomas Heller
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
Department Informatik - Lehrstuhl Rechnerarchitektur
Martensstr. 3
91058 Erlangen
Tel.: 09131/85-27018
Fax:  09131/85-27912
Email: thomas.heller_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23985.php">madhurima madhunapanthula: "[OMPI users] Hamster"</a>
<li><strong>Previous message:</strong> <a href="23983.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23983.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
