<?
$subject_val = "Re: [OMPI users] Problem mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 07:13:49 2014" -->
<!-- isoreceived="20140626111349" -->
<!-- sent="Thu, 26 Jun 2014 11:13:47 +0000" -->
<!-- isosent="20140626111347" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem mpi" -->
<!-- id="BF3261F0-C05B-449A-8D94-39BD26A17CFF_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CACrBbZG8vGZtujw6ZvqHKz7rzwqcN8M_LjRzybWxDpU9U2Yc4g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem mpi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-26 07:13:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24707.php">Jeff Squyres (jsquyres): "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>In reply to:</strong> <a href="24692.php">Diego Sa&#195;&#186;l Carri&#195;&#179; Carri&#195;&#179;: "[OMPI users] Problem mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like you have a problem with the physical layer of your InfiniBand.  You should run layer 0 diagnostics and/or contact your IB vendor for assistance.
<br>
<p><p>On Jun 24, 2014, at 4:48 AM, Diego Sa&#250;l Carri&#243; Carri&#243; &lt;diego.carrio_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have problems for a long time related with  mpirun. When I executed mpirun (with my program) I obtained the next error after a while:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mlx4: local QP operation err (QPN c00054, WQE index a0000, vendor syndrome 6f, opcode = 5e)
</span><br>
<span class="quotelev1">&gt; [[64826,1],0][btl_openib_component.c:3497:handle_wc] from foner109 to: foner111 error polling LP CQ with status LOCAL QP OPERATION ERROR status number 2 for wr_id af58a8 opcode 128  vendor error 111 qp_idx 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 51754 on
</span><br>
<span class="quotelev1">&gt; node foner109 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using a cluster (42 nodes, with 20 processors and 64 Gb RAM for each one). I want to use for example only 20 nodes, so I put:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; salloc -N20 --tasks-per-node=1 --cpus-per-task=20 -p thin(name of the node)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -pernode [my_program]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you help me to solve this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Diego
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24692.php">http://www.open-mpi.org/community/lists/users/2014/06/24692.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24707.php">Jeff Squyres (jsquyres): "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>In reply to:</strong> <a href="24692.php">Diego Sa&#195;&#186;l Carri&#195;&#179; Carri&#195;&#179;: "[OMPI users] Problem mpi"</a>
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
