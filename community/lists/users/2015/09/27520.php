<?
$subject_val = "Re: [OMPI users] OpenMPI optimizations for intra-node process communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 01:32:11 2015" -->
<!-- isoreceived="20150901053211" -->
<!-- sent="Tue, 1 Sep 2015 01:32:09 -0400" -->
<!-- isosent="20150901053209" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI optimizations for intra-node process communication" -->
<!-- id="CAMJJpkVGswdAvtAGRT8Y29rpg4RbpPMf5a89zqubkmE0xgQQNw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55E53255.2050508_at_rist.or.jp" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-01 01:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27521.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Previous message:</strong> <a href="27519.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>In reply to:</strong> <a href="27519.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27521.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Reply:</strong> <a href="27521.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The sm collective module has a priority of 0, which guarantees that it
<br>
never gets called. If you want to give it a try you should
<br>
set coll_sm_priority to any value over 30.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Sep 1, 2015 at 1:06 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Saliya,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl is a point to point thing only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; collectives are implemented by the coll mca
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the sm coll mca is optimized for shared memory, but support intra node
</span><br>
<span class="quotelev1">&gt; communicators only.
</span><br>
<span class="quotelev1">&gt; the ml and hierarch coll have some optimizations for intra node
</span><br>
<span class="quotelev1">&gt; communications.
</span><br>
<span class="quotelev1">&gt; as far as i know, none of these are used in production.
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
<span class="quotelev1">&gt; On 9/1/2015 1:57 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more question. I found this blog from Jeff [1] on vader and I got the
</span><br>
<span class="quotelev1">&gt; impression that it's used only for peer-to-peer communications and not for
</span><br>
<span class="quotelev1">&gt; collectives. Is this true or did I misunderstand?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy">http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 1, 2015 at 12:40 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can try
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_base_verbose 100 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or you can simply blacklist the btl you do *not* want to use, for example
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl ^sm
</span><br>
<span class="quotelev2">&gt;&gt; if you want to use vader
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can run
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --all | grep vader
</span><br>
<span class="quotelev2">&gt;&gt; to check the btl parameters,
</span><br>
<span class="quotelev2">&gt;&gt; of course, reading the source code is the best way to understand what the
</span><br>
<span class="quotelev2">&gt;&gt; vader btl can do and how
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/1/2015 1:28 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you Gilles. Is there some documentation on vader btl and how I can
</span><br>
<span class="quotelev2">&gt;&gt; check which (sm or vader) is being used?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 1, 2015 at 12:18 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles_at_[hidden]&gt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI uses btl for point to point communication, and automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; selects the best one per pair.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Typically, the openib or tcp btl is used for inter node communication,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the sm or vader btl for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intra node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; note the vader btl uses the knem kernel module when available for even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more optimized configurations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/1/2015 5:59 AM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just trying to see if there are any optimizations (or options) in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI to improve communication between intra node processes. For example
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do they use something like shared memory?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell 812-391-4914
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://saliya.org">http://saliya.org</a>&gt;<a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27513.php">http://www.open-mpi.org/community/lists/users/2015/08/27513.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Searchable archives:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27514.php">http://www.open-mpi.org/community/lists/users/2015/09/27514.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27514.php">http://www.open-mpi.org/community/lists/users/2015/09/27514.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://saliya.org">http://saliya.org</a>&gt;<a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27515.php">http://www.open-mpi.org/community/lists/users/2015/09/27515.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27516.php">http://www.open-mpi.org/community/lists/users/2015/09/27516.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27517.php">http://www.open-mpi.org/community/lists/users/2015/09/27517.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27519.php">http://www.open-mpi.org/community/lists/users/2015/09/27519.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27520/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27521.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Previous message:</strong> <a href="27519.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>In reply to:</strong> <a href="27519.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27521.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Reply:</strong> <a href="27521.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
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
