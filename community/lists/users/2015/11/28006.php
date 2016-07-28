<?
$subject_val = "Re: [OMPI users] Setting bind-to none as default via environment?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 12:58:16 2015" -->
<!-- isoreceived="20151105175816" -->
<!-- sent="Thu, 5 Nov 2015 18:57:53 +0100" -->
<!-- isosent="20151105175753" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting bind-to none as default via environment?" -->
<!-- id="CAAbhqc7ebV-t8yfC2K2BY=Jx77ftOZojFhi6Hjhm-wc9Q4fMsQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8737wknxlm.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting bind-to none as default via environment?<br>
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 12:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28007.php">Dave Love: "Re: [OMPI users] Open MPI CPU Binding Related Questions."</a>
<li><strong>Previous message:</strong> <a href="28005.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="28005.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28088.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="28088.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2015-11-05 18:51 GMT+01:00 Dave Love &lt;d.love_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Nick Papior &lt;nickpapior_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is what I do to successfully get the best performance for my
</span><br>
<span class="quotelev2">&gt; &gt; application using OpenMP and OpenMPI:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (note this is for 8 cores per socket)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -x OMP_PROC_BIND=true --report-bindings -x OMP_NUM_THREADS=8
</span><br>
<span class="quotelev2">&gt; &gt; --map-by ppr:1:socket:pe=8 &lt;exec&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It assigns 8 cores per MPI processor separated by sockets, each MPI
</span><br>
<span class="quotelev2">&gt; &gt; processor gets 8 threads and I bind the OpenMP threads for affinity. This
</span><br>
<span class="quotelev2">&gt; &gt; is for OpenMPI &gt;= 1.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume there's a good reason, since it's the default, but what makes
</span><br>
<span class="quotelev1">&gt; binding to sockets better than to a lower level (if there is a relevant
</span><br>
<span class="quotelev1">&gt; lower level)?  The latency and bandwidth may be significantly different
</span><br>
<span class="quotelev1">&gt; between different localities on the same socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sure, I guess you should use numa to check how the latency/distance is for
<br>
the other processors to not select a _bad_ node?
<br>
I am not sure.
<br>
I can see difficulties in my above post for huge numa nodes, but for 8-10
<br>
cores per socket it is pretty good. But it is easy to use ;)
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28005.php">http://www.open-mpi.org/community/lists/users/2015/11/28005.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28006/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28007.php">Dave Love: "Re: [OMPI users] Open MPI CPU Binding Related Questions."</a>
<li><strong>Previous message:</strong> <a href="28005.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="28005.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28088.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="28088.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
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
