<?
$subject_val = "Re: [OMPI users] Affinity settings for hyperthreading";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 18 09:45:32 2016" -->
<!-- isoreceived="20160718134532" -->
<!-- sent="Mon, 18 Jul 2016 06:45:19 -0700" -->
<!-- isosent="20160718134519" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Affinity settings for hyperthreading" -->
<!-- id="EC00D7B0-0AFD-4F52-A6D8-4870E6FD4DDE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAPqNE2Vut-3WrsPS_zq-yMFgcTcbSAEQaAvHFUrQk7tUKcEKBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Affinity settings for hyperthreading<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-18 09:45:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29677.php">John Hearns: "Re: [OMPI users] Affinity settings for hyperthreading"</a>
<li><strong>Previous message:</strong> <a href="29675.php">Thomas Jahns: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29674.php">John Hearns: "[OMPI users] Affinity settings for hyperthreading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29677.php">John Hearns: "Re: [OMPI users] Affinity settings for hyperthreading"</a>
<li><strong>Reply:</strong> <a href="29677.php">John Hearns: "Re: [OMPI users] Affinity settings for hyperthreading"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like you just want to bind procs to cores since each core is composed of 2 HTs. So a simple &#226;&#128;&#156;--map-by core --bind-to core&quot; should do the trick.
<br>
<p>FWIW: the affinity settings are controlled by the bind-to &lt;foo&gt; option. You can use &#226;&#128;&#156;mpirun -h&#226;&#128;&#157;  to get the list of supported options and a little explanation:
<br>
<p>--bind-to &lt;foo&gt;
<br>
Bind processes to the specified object, defaults to core. Supported options include slot, hwthread, core, l1cache, l2cache, l3cache, socket, numa, board, and none.
<br>
<p><a href="https://www.open-mpi.org/doc/current/man1/mpirun.1.php#sect9">https://www.open-mpi.org/doc/current/man1/mpirun.1.php#sect9</a> &lt;<a href="https://www.open-mpi.org/doc/current/man1/mpirun.1.php#sect9">https://www.open-mpi.org/doc/current/man1/mpirun.1.php#sect9</a>&gt;
<br>
<p><p><p><p><span class="quotelev1">&gt; On Jul 17, 2016, at 11:25 PM, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please can someone point me towards the affinity settings for:
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.10   used with Slurm version 15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some nodes with 2630-v4 processors.
</span><br>
<span class="quotelev1">&gt; So 10 cores per socket / 20 hyperthreads
</span><br>
<span class="quotelev1">&gt; Hyperthreading is enabled.
</span><br>
<span class="quotelev1">&gt; I would like to set affinity for 20 processes per node,
</span><br>
<span class="quotelev1">&gt; so that the processes are pinned to every second HT core - ie one process per physical thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sure this is quite easy...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thankyou
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29674.php">http://www.open-mpi.org/community/lists/users/2016/07/29674.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29676/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29677.php">John Hearns: "Re: [OMPI users] Affinity settings for hyperthreading"</a>
<li><strong>Previous message:</strong> <a href="29675.php">Thomas Jahns: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29674.php">John Hearns: "[OMPI users] Affinity settings for hyperthreading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29677.php">John Hearns: "Re: [OMPI users] Affinity settings for hyperthreading"</a>
<li><strong>Reply:</strong> <a href="29677.php">John Hearns: "Re: [OMPI users] Affinity settings for hyperthreading"</a>
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
