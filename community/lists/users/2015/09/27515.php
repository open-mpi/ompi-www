<?
$subject_val = "Re: [OMPI users] OpenMPI optimizations for intra-node process communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 00:28:32 2015" -->
<!-- isoreceived="20150901042832" -->
<!-- sent="Tue, 1 Sep 2015 00:28:31 -0400" -->
<!-- isosent="20150901042831" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI optimizations for intra-node process communication" -->
<!-- id="CA+ssbKVuBxEbFYfzz4emteX3P17KA92i1-KEysrNq2s6frByXw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55E52700.7030205_at_rist.or.jp" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-01 00:28:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27516.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Previous message:</strong> <a href="27514.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>In reply to:</strong> <a href="27514.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27516.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Reply:</strong> <a href="27516.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Gilles. Is there some documentation on vader btl and how I can
<br>
check which (sm or vader) is being used?
<br>
<p>On Tue, Sep 1, 2015 at 12:18 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Saliya,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI uses btl for point to point communication, and automatically
</span><br>
<span class="quotelev1">&gt; selects the best one per pair.
</span><br>
<span class="quotelev1">&gt; Typically, the openib or tcp btl is used for inter node communication, and
</span><br>
<span class="quotelev1">&gt; the sm or vader btl for
</span><br>
<span class="quotelev1">&gt; intra node.
</span><br>
<span class="quotelev1">&gt; note the vader btl uses the knem kernel module when available for even
</span><br>
<span class="quotelev1">&gt; more optimized configurations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/1/2015 5:59 AM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just trying to see if there are any optimizations (or options) in OpenMPI
</span><br>
<span class="quotelev1">&gt; to improve communication between intra node processes. For example do they
</span><br>
<span class="quotelev1">&gt; use something like shared memory?
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27513.php">http://www.open-mpi.org/community/lists/users/2015/08/27513.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27514.php">http://www.open-mpi.org/community/lists/users/2015/09/27514.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27515/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27516.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Previous message:</strong> <a href="27514.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>In reply to:</strong> <a href="27514.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27516.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Reply:</strong> <a href="27516.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
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
