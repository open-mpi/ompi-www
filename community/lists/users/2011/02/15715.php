<?
$subject_val = "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 00:11:51 2011" -->
<!-- isoreceived="20110224051151" -->
<!-- sent="Wed, 23 Feb 2011 21:10:52 -0800" -->
<!-- isosent="20110224051052" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3" -->
<!-- id="AANLkTi=DRU0hPyizPD++N=zMEN9nGULXp57KP99GGK_Y_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AB003ED847BEC24EBD9AA7508F69A9C404BF0ADA_at_lancelot.dsonet.corp.root" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 00:10:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15716.php">Vasiliy G Tolstov: "[OMPI users] multicast not available"</a>
<li><strong>Previous message:</strong> <a href="15714.php">Li Zuwei: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<li><strong>In reply to:</strong> <a href="15714.php">Li Zuwei: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15718.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrieron Windows XP SP3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How many cores does your processor has?
<br>
<p>On Wed, Feb 23, 2011 at 8:52 PM, Li Zuwei &lt;lzuwei_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Dear Users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm measuring barrier synchronization performance on the v1.5.1 build of
</span><br>
<span class="quotelev1">&gt; OpenMPI. I am currently trying to measure synchronization performance on a
</span><br>
<span class="quotelev1">&gt; single node, with 5 processes. I'm getting pretty weak results as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Testing procedure - initialize the timer at the start of the barrier, stop
</span><br>
<span class="quotelev1">&gt; the timer when the process break from the barrier. Cycle through N number of
</span><br>
<span class="quotelev1">&gt; times and calculate the average.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 Node 5 processes: 299.38ms
</span><br>
<span class="quotelev1">&gt; 1 Node 7 processes: 513.95ms
</span><br>
<span class="quotelev1">&gt; 1 Node 10 processes: 749.94ms
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wondering if this is the expected performance on a single nodes. I
</span><br>
<span class="quotelev1">&gt; presume Open MPI automatically uses Shared Memory for barrier
</span><br>
<span class="quotelev1">&gt; synchronization on a single node which I think should be able to provide
</span><br>
<span class="quotelev1">&gt; better performance when running on a single node. Is there a way to
</span><br>
<span class="quotelev1">&gt; determine what transport layer I am using and I would greatly appreciate
</span><br>
<span class="quotelev1">&gt; tips on how can I tune this performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Zuwei
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15715/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15716.php">Vasiliy G Tolstov: "[OMPI users] multicast not available"</a>
<li><strong>Previous message:</strong> <a href="15714.php">Li Zuwei: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<li><strong>In reply to:</strong> <a href="15714.php">Li Zuwei: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15718.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrieron Windows XP SP3"</a>
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
