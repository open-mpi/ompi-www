<?
$subject_val = "Re: [OMPI users] how to specify the maximum size of the momory allocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 09:14:46 2016" -->
<!-- isoreceived="20160223141446" -->
<!-- sent="Tue, 23 Feb 2016 08:14:44 -0600" -->
<!-- isosent="20160223141444" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to specify the maximum size of the momory allocation?" -->
<!-- id="CAMD57ofC9GEvb18tsyadpPDjern=FdGvM_7e119HuWkb9Rf8aQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DUB125-W45CB1D0C04023D99E8002497A40_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to specify the maximum size of the momory allocation?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-23 09:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28569.php">Walt Brainerd: "[OMPI users] Help on Windows"</a>
<li><strong>Previous message:</strong> <a href="28567.php">Ibrahim Ikhlawi: "[OMPI users] how to specify the maximum size of the momory allocation?"</a>
<li><strong>In reply to:</strong> <a href="28567.php">Ibrahim Ikhlawi: "[OMPI users] how to specify the maximum size of the momory allocation?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried &quot;mpirun -np N .... java -Xmxn myapp&quot;? Once we see a non-OMPI
<br>
cmd line option (e.g., &quot;java&quot;), we should stop checking those options
<br>
<p><p>On Tue, Feb 23, 2016 at 7:51 AM, Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hallo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run my code for a big number of data with Java OpenMPI, I get the
</span><br>
<span class="quotelev1">&gt; error &quot;java.lang.OutOfMemoryError&quot;, even if I run that on a server with
</span><br>
<span class="quotelev1">&gt; 64GB RAM. Also I need to maximize the size of the memory allocation.
</span><br>
<span class="quotelev1">&gt; With java I can do that by adding -Xmxn (write man java), but when I run
</span><br>
<span class="quotelev1">&gt; my code I write mpirun -np ... and not java ... . therefore  when I use the
</span><br>
<span class="quotelev1">&gt; same command (-Xmxn) with mpirun, I get the error &quot;unknown option -Xmx512m&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So how can I maximize that with OpenMPI? Or is there any other way to do
</span><br>
<span class="quotelev1">&gt; that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Ibrahim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28567.php">http://www.open-mpi.org/community/lists/users/2016/02/28567.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28568/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28569.php">Walt Brainerd: "[OMPI users] Help on Windows"</a>
<li><strong>Previous message:</strong> <a href="28567.php">Ibrahim Ikhlawi: "[OMPI users] how to specify the maximum size of the momory allocation?"</a>
<li><strong>In reply to:</strong> <a href="28567.php">Ibrahim Ikhlawi: "[OMPI users] how to specify the maximum size of the momory allocation?"</a>
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
