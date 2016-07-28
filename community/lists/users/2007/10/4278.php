<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 08:29:38 2007" -->
<!-- isoreceived="20071023122938" -->
<!-- sent="Tue, 23 Oct 2007 08:29:34 -0400" -->
<!-- isosent="20071023122934" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 100% CPU load without sm-btl" -->
<!-- id="ea86ce220710230529r44afe1cdj266ee09689345adf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="471DD473.2020700_at_student.hpi.uni-potsdam.de" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 08:29:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4279.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Previous message:</strong> <a href="4277.php">Murat Knecht: "[OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>In reply to:</strong> <a href="4277.php">Murat Knecht: "[OMPI users] 100% CPU load without sm-btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4279.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Reply:</strong> <a href="4279.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should look at these two FAQ entries:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>
<br>
<p>To get what you want, you need to force Open MPI to yield the processor rather
<br>
than be aggressively waiting for a message.
<br>
<p>On 10/23/07, Murat Knecht &lt;murat.knecht_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Testing a distributed system locally, I couldn't help but notice that a
</span><br>
<span class="quotelev1">&gt; blocking MPI_Recv causes 100% CPU load. I deactivated (at both compile-
</span><br>
<span class="quotelev1">&gt; and run-time) the shared memory bt-layer, and specified &quot;tcp, self&quot; to
</span><br>
<span class="quotelev1">&gt; be used. Still one core busy. Even on a distributed system I intend to
</span><br>
<span class="quotelev1">&gt; perform work, while waiting for incoming requests. For this purpose
</span><br>
<span class="quotelev1">&gt; having one core busy waiting for requests is uncomfortable to say the
</span><br>
<span class="quotelev1">&gt; least. Does OpenMPI not use some blocking system call to a tcp port
</span><br>
<span class="quotelev1">&gt; internally? Since i deactivated the understandably costly shared-memory
</span><br>
<span class="quotelev1">&gt; waits, this seems weird to me.
</span><br>
<span class="quotelev1">&gt; Someone has an explanation or even better a fix / workaround / solution ?
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Murat
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
<p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4279.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Previous message:</strong> <a href="4277.php">Murat Knecht: "[OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>In reply to:</strong> <a href="4277.php">Murat Knecht: "[OMPI users] 100% CPU load without sm-btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4279.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Reply:</strong> <a href="4279.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
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
