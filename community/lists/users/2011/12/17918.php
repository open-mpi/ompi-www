<?
$subject_val = "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 10:34:39 2011" -->
<!-- isoreceived="20111209153439" -->
<!-- sent="Fri, 9 Dec 2011 10:34:10 -0500" -->
<!-- isosent="20111209153410" -->
<!-- name="Patrik Jonsson" -->
<!-- email="code_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications" -->
<!-- id="CA+Py04DvhFoiu_JiEjbZNnaagJYQ3tGGaD2HbBoCgNYsjMKdvw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE22762.8000507_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications<br>
<strong>From:</strong> Patrik Jonsson (<em>code_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 10:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17919.php">Patrik Jonsson: "[OMPI users] mca_btl_sm_component_progress read an unknown type of header"</a>
<li><strong>Previous message:</strong> <a href="17917.php">Yiannis Papadopoulos: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>In reply to:</strong> <a href="17917.php">Yiannis Papadopoulos: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Yiannis,
<br>
<p>On Fri, Dec 9, 2011 at 10:21 AM, Yiannis Papadopoulos
<br>
&lt;giannis.papadopoulos_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Patrik Jonsson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing performance issues I don't understand in my multithreaded
</span><br>
<span class="quotelev2">&gt;&gt; MPI code, and I was hoping someone could shed some light on this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code structure is as follows: A computational domain is decomposed
</span><br>
<span class="quotelev2">&gt;&gt; into MPI tasks. Each MPI task has a &quot;master thread&quot; that receives
</span><br>
<span class="quotelev2">&gt;&gt; messages from the other tasks and puts those into a local, concurrent
</span><br>
<span class="quotelev2">&gt;&gt; queue. The tasks then have a few &quot;worker threads&quot; that processes the
</span><br>
<span class="quotelev2">&gt;&gt; incoming messages and when necessary sends them to other tasks. So for
</span><br>
<span class="quotelev2">&gt;&gt; each task, there is one thread doing receives and N (typically number
</span><br>
<span class="quotelev2">&gt;&gt; of cores-1) threads doing sends. All messages are nonblocking, so the
</span><br>
<span class="quotelev2">&gt;&gt; workers just post the sends and continue with computation, and the
</span><br>
<span class="quotelev2">&gt;&gt; master repeatedly does a number of test calls to check for incoming
</span><br>
<span class="quotelev2">&gt;&gt; messages (there are different flavors of these messages so it does
</span><br>
<span class="quotelev2">&gt;&gt; several tests).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When do you do the MPI_Test on the Isends? I have had performance issues in
</span><br>
<span class="quotelev1">&gt; a number of systems if I would use a single queue of MPI_Requests that would
</span><br>
<span class="quotelev1">&gt; keep Isends to different ranks and testing them one by one. It appears that
</span><br>
<span class="quotelev1">&gt; some messages are sent out more efficiently if you test them.
</span><br>
<p>There are 3 classes of messages that may arrive. The requests for each
<br>
are in a vector, and I use boost::mpi::test_some (which I assume just
<br>
calls MPI_Testsome) to test them in a round-robin fashion.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found that either using MPI_Testsome or having a map(key=rank, value=queue
</span><br>
<span class="quotelev1">&gt; of MPI_Requests) and testing for each key the first MPI_Request, resolved
</span><br>
<span class="quotelev1">&gt; this issue.
</span><br>
<p>In my case, I know that the overwhelming traffic volume is one kind of
<br>
message. What I ended up doing was to simply repeat the test for that
<br>
message immediately if the preceding test succeeded, up to 1000 times,
<br>
before again checking the other requests. This appears to enable the
<br>
task to keep up with the incoming traffic.
<br>
<p>I guess another possibility would be to have several slots for the
<br>
incoming messages. Right now I only post one irecv per source task. By
<br>
posting a couple, more messages would be able to come in without not
<br>
having a matching recv, and one test could match more of them. Since
<br>
that makes the logic more complicated, I didn't try that.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17919.php">Patrik Jonsson: "[OMPI users] mca_btl_sm_component_progress read an unknown type of header"</a>
<li><strong>Previous message:</strong> <a href="17917.php">Yiannis Papadopoulos: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>In reply to:</strong> <a href="17917.php">Yiannis Papadopoulos: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
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
