<?
$subject_val = "Re: [OMPI users] OpenMPI optimizations for intra-node process communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 00:18:14 2015" -->
<!-- isoreceived="20150901041814" -->
<!-- sent="Tue, 1 Sep 2015 13:18:08 +0900" -->
<!-- isosent="20150901041808" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI optimizations for intra-node process communication" -->
<!-- id="55E52700.7030205_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+ssbKVRk3uHKwv+LkKhRA2oe+8p4GQwkK64mA3rBYaXXvX0+Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI optimizations for intra-node process communication<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-01 00:18:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27515.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27513.php">Saliya Ekanayake: "[OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27513.php">Saliya Ekanayake: "[OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27515.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Reply:</strong> <a href="27515.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Saliya,
<br>
<p>OpenMPI uses btl for point to point communication, and automatically 
<br>
selects the best one per pair.
<br>
Typically, the openib or tcp btl is used for inter node communication, 
<br>
and the sm or vader btl for
<br>
intra node.
<br>
note the vader btl uses the knem kernel module when available for even 
<br>
more optimized configurations.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/1/2015 5:59 AM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just trying to see if there are any optimizations (or options) in 
</span><br>
<span class="quotelev1">&gt; OpenMPI to improve communication between intra node processes. For 
</span><br>
<span class="quotelev1">&gt; example do they use something like shared memory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27513.php">http://www.open-mpi.org/community/lists/users/2015/08/27513.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27514/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27515.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27513.php">Saliya Ekanayake: "[OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27513.php">Saliya Ekanayake: "[OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27515.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Reply:</strong> <a href="27515.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
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
