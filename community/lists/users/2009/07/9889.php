<?
$subject_val = "Re: [OMPI users] enable-mpi-threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 03:35:20 2009" -->
<!-- isoreceived="20090709073520" -->
<!-- sent="Thu, 9 Jul 2009 10:35:15 +0300" -->
<!-- isosent="20090709073515" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] enable-mpi-threads" -->
<!-- id="453d39990907090035p5dd2487bia32662608deeca56_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="17957826.19311246505823441.JavaMail.root_at_mta.iut.ac.ir" -->
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
<strong>Subject:</strong> Re: [OMPI users] enable-mpi-threads<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 03:35:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9890.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9888.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9790.php">rahmani: "Re: [OMPI users] enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9890.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="9890.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, What kind of threads Open MPI supports ?
<br>
I found in the <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/README">https://svn.open-mpi.org/trac/ompi/browser/trunk/README</a> that
<br>
we support  MPI_THREAD_MULTIPLE,
<br>
and found few unclear mails about  MPI_THREAD_FUNNELED and
<br>
&nbsp;MPI_THREAD_SERIALIZED.
<br>
Also found nothing in FAQ :(.
<br>
Thanks,Lenny.
<br>
<p>On Thu, Jul 2, 2009 at 6:37 AM, rahmani &lt;m_rahmani56_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Very thanks for your discussion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 30, 2009 7:23:13 AM (GMT-0500) America/New_York
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2009, at 1:29 AM, rahmani wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I want install openmpi in a cluster with multicore processor.
</span><br>
<span class="quotelev2">&gt; &gt; Is it necessary to configure with --enable-mpi-threads option?
</span><br>
<span class="quotelev2">&gt; &gt; when this option should be used?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI's threading support is functional but not optimized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It depends on the problem you're trying to solve.  There's many ways
</span><br>
<span class="quotelev1">&gt; to write software, but two not-uncommon models for MPI applications are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Write the software such that MPI will launch one process for each
</span><br>
<span class="quotelev1">&gt; core.  You communicate between these processes via MPI communication
</span><br>
<span class="quotelev1">&gt; calls such as MPI_SEND, MPI_RECV, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Write the software that that MPI will launch one process per host,
</span><br>
<span class="quotelev1">&gt; and then spawn threads for all the cores on that host.  The threads
</span><br>
<span class="quotelev1">&gt; communicate with each other via typical threaded IPC mechanisms
</span><br>
<span class="quotelev1">&gt; (usually not MPI); MPI processes communicate across hosts via MPI
</span><br>
<span class="quotelev1">&gt; communication calls.  Sometimes MPI function calls are restricted to
</span><br>
<span class="quotelev1">&gt; one thread; sometimes they're invoked by any thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it really depends on how you want to write your software.  Make
</span><br>
<span class="quotelev1">&gt; sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9890.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9888.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9790.php">rahmani: "Re: [OMPI users] enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9890.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="9890.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
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
