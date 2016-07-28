<?
$subject_val = "Re: [OMPI users] Trouble with Sending Multiple messages to the Same Machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 15:16:52 2013" -->
<!-- isoreceived="20130618191652" -->
<!-- sent="Tue, 18 Jun 2013 15:16:43 -0400" -->
<!-- isosent="20130618191643" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with Sending Multiple messages to the Same Machine" -->
<!-- id="51C0B21B.8080004_at_ldeo.columbia.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1371575692.17628.YahooMailNeo_at_web161606.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with Sending Multiple messages to the Same Machine<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 15:16:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22126.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22124.php">Claire Williams: "[OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<li><strong>In reply to:</strong> <a href="22124.php">Claire Williams: "[OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22178.php">Iliev, Hristo: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/18/2013 01:14 PM, Claire Williams wrote:
<br>
<span class="quotelev1">&gt; Hi guys &#226;&#152;&#186;!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working with a simple &quot;Hello, World&quot; MPI program that has one master
</span><br>
<span class="quotelev1">&gt; and is sending one message to each worker, receives a message back from
</span><br>
<span class="quotelev1">&gt; each of the workers, and re-sends a new message. This unfortunately is
</span><br>
<span class="quotelev1">&gt; not working :(. When the master only sends one message to each worker,
</span><br>
<span class="quotelev1">&gt; and then receives it, it is working fine, but there are problems with
</span><br>
<span class="quotelev1">&gt; sending more than one message to each worker. When it happens, it prints
</span><br>
<span class="quotelev1">&gt; the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[401,1],0][../../../../../openmpi-1.6.3/ompi/mca/btl/tcp/btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.X.X failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm wondering how I can go about fixing this. This program is running
</span><br>
<span class="quotelev1">&gt; across multiple Linux nodes, by the way :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, I'm a girl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>... and so was Ada.
<br>
<p>&quot;connect() to 192.168.X.X failed: No route to host&quot;
<br>
suggests that your 192.168.X.X node cannot be
<br>
reached by a message sender.
<br>
Can you ping back and forth across every pair of nodes?
<br>
<p><a href="http://en.wikipedia.org/wiki/Women_in_computing">http://en.wikipedia.org/wiki/Women_in_computing</a>
<br>
<a href="http://anitaborg.org/news/profiles-of-technical-women/famous-women-in-computer-science/">http://anitaborg.org/news/profiles-of-technical-women/famous-women-in-computer-science/</a>
<br>
<a href="http://en.wikipedia.org/wiki/Ada_Lovelace">http://en.wikipedia.org/wiki/Ada_Lovelace</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22126.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22124.php">Claire Williams: "[OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<li><strong>In reply to:</strong> <a href="22124.php">Claire Williams: "[OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22178.php">Iliev, Hristo: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine"</a>
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
