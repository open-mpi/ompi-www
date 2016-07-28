<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 09:17:49 2007" -->
<!-- isoreceived="20071023131749" -->
<!-- sent="Tue, 23 Oct 2007 15:17:44 +0200" -->
<!-- isosent="20071023131744" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 100% CPU load without sm-btl" -->
<!-- id="471DF478.3000101_at_student.hpi.uni-potsdam.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220710230529r44afe1cdj266ee09689345adf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-23 09:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4280.php">George Bosilca: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Previous message:</strong> <a href="4278.php">Tim Mattox: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>In reply to:</strong> <a href="4278.php">Tim Mattox: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4280.php">George Bosilca: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Reply:</strong> <a href="4280.php">George Bosilca: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
thanks for answering. Unfortunately, I did try that, too. The point is
<br>
that i don't understand the ressource consumption. Even if the processor
<br>
is yielded, it still is busy waiting, wasting system resources which
<br>
could otherwise be used for actual work. Isn't there some way to
<br>
activate an interrupt mechanism, so that the wait/recv blocks the
<br>
thread, e.g. puts it to sleep, until notified?
<br>
<p>Murat
<br>
<p>Tim Mattox schrieb:
<br>
<span class="quotelev1">&gt; You should look at these two FAQ entries:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To get what you want, you need to force Open MPI to yield the processor rather
</span><br>
<span class="quotelev1">&gt; than be aggressively waiting for a message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/23/07, Murat Knecht &lt;murat.knecht_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; Testing a distributed system locally, I couldn't help but notice that a
</span><br>
<span class="quotelev2">&gt;&gt; blocking MPI_Recv causes 100% CPU load. I deactivated (at both compile-
</span><br>
<span class="quotelev2">&gt;&gt; and run-time) the shared memory bt-layer, and specified &quot;tcp, self&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; be used. Still one core busy. Even on a distributed system I intend to
</span><br>
<span class="quotelev2">&gt;&gt; perform work, while waiting for incoming requests. For this purpose
</span><br>
<span class="quotelev2">&gt;&gt; having one core busy waiting for requests is uncomfortable to say the
</span><br>
<span class="quotelev2">&gt;&gt; least. Does OpenMPI not use some blocking system call to a tcp port
</span><br>
<span class="quotelev2">&gt;&gt; internally? Since i deactivated the understandably costly shared-memory
</span><br>
<span class="quotelev2">&gt;&gt; waits, this seems weird to me.
</span><br>
<span class="quotelev2">&gt;&gt; Someone has an explanation or even better a fix / workaround / solution ?
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Murat
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4280.php">George Bosilca: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Previous message:</strong> <a href="4278.php">Tim Mattox: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>In reply to:</strong> <a href="4278.php">Tim Mattox: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4280.php">George Bosilca: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Reply:</strong> <a href="4280.php">George Bosilca: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
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
