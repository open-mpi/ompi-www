<?
$subject_val = "Re: [OMPI users] Process Binding Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 10:14:30 2015" -->
<!-- isoreceived="20150313141430" -->
<!-- sent="Fri, 13 Mar 2015 10:14:24 -0400" -->
<!-- isosent="20150313141424" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process Binding Warning" -->
<!-- id="CA+ssbKUMBY_JTfLyHS5nuVWAKY=7Ch9D8TmLhdGFFTEZ2anVJA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7E065AF0-6CB3-44B3-B0B3-30737F6299FF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process Binding Warning<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-13 10:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26466.php">Ralph Castain: "Re: [OMPI users] Process Binding Warning"</a>
<li><strong>Previous message:</strong> <a href="26464.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26458.php">Ralph Castain: "Re: [OMPI users] Process Binding Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26466.php">Ralph Castain: "Re: [OMPI users] Process Binding Warning"</a>
<li><strong>Reply:</strong> <a href="26466.php">Ralph Castain: "Re: [OMPI users] Process Binding Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph. Do I need to specify where to find numactl-devel when
<br>
compiling OpenMPI?
<br>
<p>On Thu, Mar 12, 2015 at 7:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You are missing the numactl and numactl-devel packages on that compute
</span><br>
<span class="quotelev1">&gt; node, and so we cannot bind the memory to the same location as your proc.
</span><br>
<span class="quotelev1">&gt; As the warning indicates, it can impact performance but won't stop you from
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2015, at 12:51 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting the following binding warning and wonder if I am missing some
</span><br>
<span class="quotelev1">&gt; library or so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Node:  cn19ib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [cn19:09179] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 4[hwt 0]], socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/B/B/B/B/B][./././././.][./././././.][./././././.]
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26454.php">http://www.open-mpi.org/community/lists/users/2015/03/26454.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26458.php">http://www.open-mpi.org/community/lists/users/2015/03/26458.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26465/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26466.php">Ralph Castain: "Re: [OMPI users] Process Binding Warning"</a>
<li><strong>Previous message:</strong> <a href="26464.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26458.php">Ralph Castain: "Re: [OMPI users] Process Binding Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26466.php">Ralph Castain: "Re: [OMPI users] Process Binding Warning"</a>
<li><strong>Reply:</strong> <a href="26466.php">Ralph Castain: "Re: [OMPI users] Process Binding Warning"</a>
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
