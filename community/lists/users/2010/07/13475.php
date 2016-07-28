<?
$subject_val = "Re: [OMPI users] Open MPI, cannot get the results from workers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 05:20:49 2010" -->
<!-- isoreceived="20100706092049" -->
<!-- sent="Tue, 6 Jul 2010 11:20:42 +0200" -->
<!-- isosent="20100706092042" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI, cannot get the results from workers" -->
<!-- id="AANLkTinTlOt6arYCU_uyMhvIl_Gmkol2vgOrfSRhvZ08_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinm9UnhAjNPPEoMmZFh--MIYm1iy_L7Qx_8enqc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI, cannot get the results from workers<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 05:20:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13476.php">Jeff Squyres: "Re: [OMPI users] UDAPL 2.0 support"</a>
<li><strong>Previous message:</strong> <a href="13474.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>In reply to:</strong> <a href="13474.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I solved this problem in such a way that my master listens for
<br>
messages from everybody (MPI_ANY_SOURCE) and reacts to all tags
<br>
(MPI_ANY_TAG).
<br>
By looking at the status variable set by MPI_Recv, the master can find
<br>
out who sent the message (status.MPI_SOURCE) and what tag it has
<br>
(status.MPI_TAG)
<br>
and react accordingly
<br>
<p>Jody
<br>
<p>On Tue, Jul 6, 2010 at 7:41 AM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; if the master receives multiple results from the same worker, how does the
</span><br>
<span class="quotelev1">&gt; master know which result (and the associated tag) arrive first? what MPI
</span><br>
<span class="quotelev1">&gt; commands are you using exactly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 5, 2010 at 4:25 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When the master sends out the task, it assign a distinct task number ID
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; the task.
</span><br>
<span class="quotelev2">&gt;&gt; When the worker receive the task, it &#160;still use the task's assigned ID as
</span><br>
<span class="quotelev2">&gt;&gt; task tag to send it to master.
</span><br>
<span class="quotelev2">&gt;&gt; Any help is appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; July 5 2010
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: solarbikedz_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 5 Jul 2010 13:17:27 -0700
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Open MPI, cannot get the results from workers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; how does the master receive results from the workers? if a worker is
</span><br>
<span class="quotelev2">&gt;&gt; sending multiple task results, how does the master knows what the message
</span><br>
<span class="quotelev2">&gt;&gt; tags are ahead of time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Jul 4, 2010 at 10:26 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All :
</span><br>
<span class="quotelev2">&gt;&gt; I designed a master-worker framework, in which the master can schedule
</span><br>
<span class="quotelev2">&gt;&gt; multiple tasks (numTaskPerWorkerNode) to each worker and then collects
</span><br>
<span class="quotelev2">&gt;&gt; results from workers.
</span><br>
<span class="quotelev2">&gt;&gt; if the numTaskPerWorkerNode = 1, it works well.
</span><br>
<span class="quotelev2">&gt;&gt; But, if numTaskPerWorkerNode &gt; 1, the master cannot get the results from
</span><br>
<span class="quotelev2">&gt;&gt; workers.
</span><br>
<span class="quotelev2">&gt;&gt; But, the workers can get the tasks from master.
</span><br>
<span class="quotelev2">&gt;&gt; why ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have used different taskTag to distinguish the tasks, but still does not
</span><br>
<span class="quotelev2">&gt;&gt; work.
</span><br>
<span class="quotelev2">&gt;&gt; Any help is appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jack
</span><br>
<span class="quotelev2">&gt;&gt; July 4 &#160;2010
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt; The New Busy is not the too busy. Combine all your e-mail accounts with
</span><br>
<span class="quotelev2">&gt;&gt; Hotmail. Get busy.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Zhang
</span><br>
<span class="quotelev2">&gt;&gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt; The New Busy is not the old busy. Search, chat and e-mail from your inbox.
</span><br>
<span class="quotelev2">&gt;&gt; Get started.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13476.php">Jeff Squyres: "Re: [OMPI users] UDAPL 2.0 support"</a>
<li><strong>Previous message:</strong> <a href="13474.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>In reply to:</strong> <a href="13474.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
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
