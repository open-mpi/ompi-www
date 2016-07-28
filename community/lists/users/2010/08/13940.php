<?
$subject_val = "Re: [OMPI users] openib issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 10:23:38 2010" -->
<!-- isoreceived="20100809142338" -->
<!-- sent="Mon, 9 Aug 2010 16:22:45 +0200" -->
<!-- isosent="20100809142245" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib issues" -->
<!-- id="201008091622.45278.eg_at_fft.be" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201007191638.57698.eg_at_fft.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib issues<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 10:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13941.php">Ralph Castain: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13939.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13701.php">Eloi Gaudry: "[OMPI users] openib issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13955.php">Mike Dubman: "Re: [OMPI users] openib issues"</a>
<li><strong>Reply:</strong> <a href="13955.php">Mike Dubman: "Re: [OMPI users] openib issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Could someone have a look on these two different error messages ? I'd like to know the reason(s) why they were displayed and their actual meaning.
<br>
<p>Thanks,
<br>
Eloi
<br>
<p>On Monday 19 July 2010 16:38:57 Eloi Gaudry wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been working on a random segmentation fault that seems to occur during
</span><br>
<span class="quotelev1">&gt; a collective communication when using the openib btl (see [OMPI users]
</span><br>
<span class="quotelev1">&gt; [openib] segfault when using openib btl).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; During my tests, I've come across different issues reported by
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.4.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1/
</span><br>
<span class="quotelev1">&gt; [[12770,1],0][btl_openib_component.c:3227:handle_wc] from bn0103 to: bn0122
</span><br>
<span class="quotelev1">&gt; error polling LP CQ with status LOCAL LENGTH ERROR status number 1 for
</span><br>
<span class="quotelev1">&gt; wr_id 560618664 opcode 1  vendor error 105 qp_idx 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2/
</span><br>
<span class="quotelev1">&gt; [[992,1],6][btl_openib_component.c:3227:handle_wc] from pbn04 to: pbn05
</span><br>
<span class="quotelev1">&gt; error polling LP CQ with status REMOTE ACCESS ERROR status number 10 for
</span><br>
<span class="quotelev1">&gt; wr_id 162858496 opcode 1  vendor error 136 qp_idx
</span><br>
<span class="quotelev1">&gt; 0[[992,1],5][btl_openib_component.c:3227:handle_wc] from pbn05 to: pbn04
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status WORK REQUEST FLUSHED ERROR status number 5
</span><br>
<span class="quotelev1">&gt; for wr_id 485900928 opcode 0  vendor error 249 qp_idx 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics stack has reported a network error event.  Open MPI will
</span><br>
<span class="quotelev1">&gt; try to continue, but your job may end up failing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:        p'&quot;
</span><br>
<span class="quotelev1">&gt;   MPI process PID:   20743
</span><br>
<span class="quotelev1">&gt;   Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error may indicate connectivity problems within the fabric; please
</span><br>
<span class="quotelev1">&gt; contact your system administrator.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to know what these two errors mean and where they come from.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
Company Phone:   +32 10 487 959
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13941.php">Ralph Castain: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13939.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13701.php">Eloi Gaudry: "[OMPI users] openib issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13955.php">Mike Dubman: "Re: [OMPI users] openib issues"</a>
<li><strong>Reply:</strong> <a href="13955.php">Mike Dubman: "Re: [OMPI users] openib issues"</a>
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
