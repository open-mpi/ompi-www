<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  1 13:27:23 2006" -->
<!-- isoreceived="20060801172723" -->
<!-- sent="Tue, 1 Aug 2006 13:27:19 -0400" -->
<!-- isosent="20060801172719" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Dual Core Laptop?" -->
<!-- id="f869b68c0608011027h3b22d38cgfbdbf9cf005dfc2f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="001001c6b58e$a7734250$804210ac_at_wenlongvm" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-01 13:27:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1709.php">Wen Long at UMCES/HPL: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<li><strong>Previous message:</strong> <a href="1707.php">Andrew Friedley: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<li><strong>In reply to:</strong> <a href="1705.php">Wen Long at UMCES/HPL: "[OMPI users] Open MPI on Dual Core Laptop?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1709.php">Wen Long at UMCES/HPL: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<li><strong>Reply:</strong> <a href="1709.php">Wen Long at UMCES/HPL: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you want to use MPI to chain a bunch of such laptops together (e.g. via
<br>
ethernet) or just for the cores to talk to each other? If the latter; you do
<br>
not need MPI. Your SMP operating system (e.g. Linux) will automatically
<br>
utilize both cores. The Linux 2.6 kernel also supports processor affinity
<br>
which will always schedule the kernel on a fixed core, avoiding cache
<br>
invalidation and stuff like that.
<br>
<p>Thanks
<br>
<p>Durga
<br>
<p><p>On 8/1/06, Wen Long at UMCES/HPL &lt;wenlong_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Any people have installed open MPI on a Dual Core desktop or laptop?
</span><br>
<span class="quotelev1">&gt; Such as Intel Centrino Duo ? or it is totally impossible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Wen
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1709.php">Wen Long at UMCES/HPL: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<li><strong>Previous message:</strong> <a href="1707.php">Andrew Friedley: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<li><strong>In reply to:</strong> <a href="1705.php">Wen Long at UMCES/HPL: "[OMPI users] Open MPI on Dual Core Laptop?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1709.php">Wen Long at UMCES/HPL: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<li><strong>Reply:</strong> <a href="1709.php">Wen Long at UMCES/HPL: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
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
