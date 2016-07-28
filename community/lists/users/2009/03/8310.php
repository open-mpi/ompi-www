<?
$subject_val = "Re: [OMPI users] mlx4 error - looking for guidance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 03:30:44 2009" -->
<!-- isoreceived="20090305083044" -->
<!-- sent="Thu, 05 Mar 2009 10:30:36 +0200" -->
<!-- isosent="20090305083036" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mlx4 error - looking for guidance" -->
<!-- id="49AF8DAC.9090007_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453902.14984.qm_at_web80707.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mlx4 error - looking for guidance<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 03:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8311.php">Thomas Exner: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Previous message:</strong> <a href="8309.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8306.php">Jeff Layton: "[OMPI users] mlx4 error - looking for guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8332.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Reply:</strong> <a href="8332.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
Can you please provide more information about you HCA type (ibv_devinfo -v).
<br>
Do you see this error immediate during startup, or you get it during 
<br>
your run ?
<br>
<p>Thanks,
<br>
Pasha
<br>
<p>Jeff Layton wrote:
<br>
<span class="quotelev1">&gt; Evening everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running a CFD code on IB and I've encountered an error I'm not 
</span><br>
<span class="quotelev1">&gt; sure about and I'm looking for some guidance on where to start 
</span><br>
<span class="quotelev1">&gt; looking. Here's the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mlx4: local QP operation err (QPN 260092, WQE index 9a9e0000, vendor 
</span><br>
<span class="quotelev1">&gt; syndrome 6f, opcode = 5e)
</span><br>
<span class="quotelev1">&gt; [0,1,6][btl_openib_component.c:1392:btl_openib_component_progress] 
</span><br>
<span class="quotelev1">&gt; from compute-2-0.local to: compute-2-0.local erro
</span><br>
<span class="quotelev1">&gt; r polling HP CQ with status LOCAL QP OPERATION ERROR status number 2 
</span><br>
<span class="quotelev1">&gt; for wr_id 37742320 opcode 0
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 21220 on node 
</span><br>
<span class="quotelev1">&gt; compute-2-0.local exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 78 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is openmpi-1.2.9rc2 (sorry - need to upgrade to 1.3.0). The code 
</span><br>
<span class="quotelev1">&gt; works correctly for smaller cases, but when I run larger cases I get 
</span><br>
<span class="quotelev1">&gt; this error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm heading to bed but I'll check email tomorrow (so to sleep and run 
</span><br>
<span class="quotelev1">&gt; but it's been a long day).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIA!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8311.php">Thomas Exner: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Previous message:</strong> <a href="8309.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8306.php">Jeff Layton: "[OMPI users] mlx4 error - looking for guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8332.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Reply:</strong> <a href="8332.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
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
