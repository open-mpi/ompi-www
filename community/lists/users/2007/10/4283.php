<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 14:10:07 2007" -->
<!-- isoreceived="20071023181007" -->
<!-- sent="Tue, 23 Oct 2007 20:10:04 +0200" -->
<!-- isosent="20071023181004" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 100% CPU load without sm-btl" -->
<!-- id="471E38FC.60807_at_student.hpi.uni-potsdam.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23DC6B0D-F311-418E-99A7-CC8C4695EE1F_at_eecs.utk.edu" -->
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
<strong>From:</strong> Murat Knecht (<em>murat.knecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 14:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4284.php">Siamak Riahi: "[OMPI users] Number of processes and number of the cores."</a>
<li><strong>Previous message:</strong> <a href="4282.php">Andrew Friedley: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>In reply to:</strong> <a href="4280.php">George Bosilca: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good to know that I'm not just not finding the solution, there simply is
<br>
none.
<br>
The system is actually dedicated to the job. But the process may, while
<br>
working, receive a signal that alters the ongoing job. Like for example
<br>
a terminate signal or more data to be taken into consideration. That's
<br>
why I need to listen in parallel and a CPU core less troublesome.
<br>
Thanks,
<br>
Murat
<br>
<p><p>George Bosilca schrieb:
<br>
<span class="quotelev1">&gt; Currently there is no work around this issue. We consider(ed) that
</span><br>
<span class="quotelev1">&gt; when you run an MPI job the cluster is in dedicated mode, so a 100%
</span><br>
<span class="quotelev1">&gt; CPU consumption is acceptable. However, as we discussed at our last
</span><br>
<span class="quotelev1">&gt; meeting, there are others reasons to be able to yield the CPU until a
</span><br>
<span class="quotelev1">&gt; message arrives. Therefore, we plan to have a blocking mode in the
</span><br>
<span class="quotelev1">&gt; near future. The is no timeframe for this, but the discussions already
</span><br>
<span class="quotelev1">&gt; started (that is usually a good sign).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2007, at 9:17 AM, Murat Knecht wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; thanks for answering. Unfortunately, I did try that, too. The point
</span><br>
<span class="quotelev2">&gt;&gt; is that i don't understand the ressource consumption. Even if the
</span><br>
<span class="quotelev2">&gt;&gt; processor is yielded, it still is busy waiting, wasting system
</span><br>
<span class="quotelev2">&gt;&gt; resources which could otherwise be used for actual work. Isn't there
</span><br>
<span class="quotelev2">&gt;&gt; some way to activate an interrupt mechanism, so that the wait/recv
</span><br>
<span class="quotelev2">&gt;&gt; blocks the thread, e.g. puts it to sleep, until notified?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Murat
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox schrieb:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You should look at these two FAQ entries:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To get what you want, you need to force Open MPI to yield the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor rather than be aggressively waiting for a message. On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10/23/07, Murat Knecht &lt;murat.knecht_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, Testing a distributed system locally, I couldn't help but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; notice that a blocking MPI_Recv causes 100% CPU load. I deactivated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (at both compile- and run-time) the shared memory bt-layer, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specified &quot;tcp, self&quot; to be used. Still one core busy. Even on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; distributed system I intend to perform work, while waiting for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; incoming requests. For this purpose having one core busy waiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for requests is uncomfortable to say the least. Does OpenMPI not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use some blocking system call to a tcp port internally? Since i
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deactivated the understandably costly shared-memory waits, this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seems weird to me. Someone has an explanation or even better a fix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; / workaround / solution ? thanks, Murat
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4283/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4284.php">Siamak Riahi: "[OMPI users] Number of processes and number of the cores."</a>
<li><strong>Previous message:</strong> <a href="4282.php">Andrew Friedley: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>In reply to:</strong> <a href="4280.php">George Bosilca: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
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
