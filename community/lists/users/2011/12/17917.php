<?
$subject_val = "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 10:21:12 2011" -->
<!-- isoreceived="20111209152112" -->
<!-- sent="Fri, 09 Dec 2011 09:21:06 -0600" -->
<!-- isosent="20111209152106" -->
<!-- name="Yiannis Papadopoulos" -->
<!-- email="giannis.papadopoulos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications" -->
<!-- id="4EE22762.8000507_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+Py04APXmiPRKN2+xyi5HOiJs-Y3am2+-bfaKw5_js_AHkJsw_at_mail.gmail.com" -->
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
<strong>From:</strong> Yiannis Papadopoulos (<em>giannis.papadopoulos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 10:21:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17918.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Previous message:</strong> <a href="17916.php">Paul Kapinos: "Re: [OMPI users] Cofigure(?) problem building /1.5.3	on	ScientificLinux6.0"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17867.php">Patrik Jonsson: "[OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17918.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Reply:</strong> <a href="17918.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrik Jonsson wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm seeing performance issues I don't understand in my multithreaded
</span><br>
<span class="quotelev1">&gt; MPI code, and I was hoping someone could shed some light on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code structure is as follows: A computational domain is decomposed
</span><br>
<span class="quotelev1">&gt; into MPI tasks. Each MPI task has a &quot;master thread&quot; that receives
</span><br>
<span class="quotelev1">&gt; messages from the other tasks and puts those into a local, concurrent
</span><br>
<span class="quotelev1">&gt; queue. The tasks then have a few &quot;worker threads&quot; that processes the
</span><br>
<span class="quotelev1">&gt; incoming messages and when necessary sends them to other tasks. So for
</span><br>
<span class="quotelev1">&gt; each task, there is one thread doing receives and N (typically number
</span><br>
<span class="quotelev1">&gt; of cores-1) threads doing sends. All messages are nonblocking, so the
</span><br>
<span class="quotelev1">&gt; workers just post the sends and continue with computation, and the
</span><br>
<span class="quotelev1">&gt; master repeatedly does a number of test calls to check for incoming
</span><br>
<span class="quotelev1">&gt; messages (there are different flavors of these messages so it does
</span><br>
<span class="quotelev1">&gt; several tests).
</span><br>
When do you do the MPI_Test on the Isends? I have had performance issues in a 
<br>
number of systems if I would use a single queue of MPI_Requests that would keep 
<br>
Isends to different ranks and testing them one by one. It appears that some 
<br>
messages are sent out more efficiently if you test them.
<br>
<p>I found that either using MPI_Testsome or having a map(key=rank, value=queue of 
<br>
MPI_Requests) and testing for each key the first MPI_Request, resolved this issue.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17918.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Previous message:</strong> <a href="17916.php">Paul Kapinos: "Re: [OMPI users] Cofigure(?) problem building /1.5.3	on	ScientificLinux6.0"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17867.php">Patrik Jonsson: "[OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17918.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Reply:</strong> <a href="17918.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
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
