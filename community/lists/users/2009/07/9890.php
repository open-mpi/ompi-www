<?
$subject_val = "Re: [OMPI users] enable-mpi-threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 04:29:38 2009" -->
<!-- isoreceived="20090709082938" -->
<!-- sent="Thu, 9 Jul 2009 11:29:33 +0300" -->
<!-- isosent="20090709082933" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] enable-mpi-threads" -->
<!-- id="453d39990907090129rd6369b5jc161cd8145f284ea_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990907090035p5dd2487bia32662608deeca56_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-07-09 04:29:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9891.php">vipin kumar: "[OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="9889.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>In reply to:</strong> <a href="9889.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess this question was already before
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1367">https://svn.open-mpi.org/trac/ompi/ticket/1367</a>
<br>
On Thu, Jul 9, 2009 at 10:35 AM, Lenny Verkhovsky &lt;
<br>
lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; BTW, What kind of threads Open MPI supports ?
</span><br>
<span class="quotelev1">&gt; I found in the <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/READMEthat">https://svn.open-mpi.org/trac/ompi/browser/trunk/READMEthat</a> we support  MPI_THREAD_MULTIPLE,
</span><br>
<span class="quotelev1">&gt; and found few unclear mails about  MPI_THREAD_FUNNELED and
</span><br>
<span class="quotelev1">&gt;  MPI_THREAD_SERIALIZED.
</span><br>
<span class="quotelev1">&gt; Also found nothing in FAQ :(.
</span><br>
<span class="quotelev1">&gt; Thanks,Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 2, 2009 at 6:37 AM, rahmani &lt;m_rahmani56_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; Very thanks for your discussion
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, June 30, 2009 7:23:13 AM (GMT-0500) America/New_York
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 30, 2009, at 1:29 AM, rahmani wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I want install openmpi in a cluster with multicore processor.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is it necessary to configure with --enable-mpi-threads option?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; when this option should be used?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI's threading support is functional but not optimized.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It depends on the problem you're trying to solve.  There's many ways
</span><br>
<span class="quotelev2">&gt;&gt; to write software, but two not-uncommon models for MPI applications are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Write the software such that MPI will launch one process for each
</span><br>
<span class="quotelev2">&gt;&gt; core.  You communicate between these processes via MPI communication
</span><br>
<span class="quotelev2">&gt;&gt; calls such as MPI_SEND, MPI_RECV, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Write the software that that MPI will launch one process per host,
</span><br>
<span class="quotelev2">&gt;&gt; and then spawn threads for all the cores on that host.  The threads
</span><br>
<span class="quotelev2">&gt;&gt; communicate with each other via typical threaded IPC mechanisms
</span><br>
<span class="quotelev2">&gt;&gt; (usually not MPI); MPI processes communicate across hosts via MPI
</span><br>
<span class="quotelev2">&gt;&gt; communication calls.  Sometimes MPI function calls are restricted to
</span><br>
<span class="quotelev2">&gt;&gt; one thread; sometimes they're invoked by any thread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it really depends on how you want to write your software.  Make
</span><br>
<span class="quotelev2">&gt;&gt; sense?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9890/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9891.php">vipin kumar: "[OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="9889.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>In reply to:</strong> <a href="9889.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
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
