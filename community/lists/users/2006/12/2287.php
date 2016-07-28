<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  4 05:31:04 2006" -->
<!-- isoreceived="20061204103104" -->
<!-- sent="Mon, 4 Dec 2006 12:30:54 +0200" -->
<!-- isosent="20061204103054" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multiple LIDs" -->
<!-- id="20061204103054.GE29501_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1c16cdf90612031132r4a5d1e82s148aef225a4f9213_at_mail.gmail.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-04 05:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2288.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2286.php">Jens Klostermann: "Re: [OMPI users] password orted problem"</a>
<li><strong>In reply to:</strong> <a href="2284.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 04, 2006 at 01:02:48AM +0530, Chevchenkovic Chevchenkovic wrote:
<br>
<span class="quotelev1">&gt; Is it possible to control the LID where the send and recvs are
</span><br>
<span class="quotelev1">&gt; posted.. on either ends?
</span><br>
No, but you can control how much LIDs will be used from available LIDs.
<br>
This can be configured with &quot;btl_openib_max_lmc&quot; parameter.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/3/06, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Sun, Dec 03, 2006 at 07:03:33PM +0530, Chevchenkovic Chevchenkovic wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  I had this query. I hope some expert replies to it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have 2 nodes connected point-to-point using infiniband cable. There
</span><br>
<span class="quotelev3">&gt; &gt; &gt; are multiple LIDs for each of the end node ports.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    When I give an MPI_Send, Are the sends are posted on different LIDs
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on each of the end nodes OR they are they posted on the same LID?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Awaiting your reply,
</span><br>
<span class="quotelev2">&gt; &gt; It depend what version of Open MPI your are using. If you are using
</span><br>
<span class="quotelev2">&gt; &gt; trunk or v1.2 beta then all available LIDs are used in RR fashion. The early
</span><br>
<span class="quotelev2">&gt; &gt; versions don't support LMC.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2288.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2286.php">Jens Klostermann: "Re: [OMPI users] password orted problem"</a>
<li><strong>In reply to:</strong> <a href="2284.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
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
