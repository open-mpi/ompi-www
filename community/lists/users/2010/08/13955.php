<?
$subject_val = "Re: [OMPI users] openib issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 07:19:50 2010" -->
<!-- isoreceived="20100810111950" -->
<!-- sent="Tue, 10 Aug 2010 14:19:45 +0300" -->
<!-- isosent="20100810111945" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib issues" -->
<!-- id="AANLkTik2NSL3qFhwJF6Qq=HX6sgZN6fcEyDFB2GKN9Y5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201008091622.45278.eg_at_fft.be" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-10 07:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13956.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<li><strong>Previous message:</strong> <a href="13954.php">Reuti: "[OMPI users] SGE integration when getting slots from different queues on one and the same host mismatch"</a>
<li><strong>In reply to:</strong> <a href="13940.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13956.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<li><strong>Reply:</strong> <a href="13956.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Eloi,
<br>
<p>What HCA card do you have ? Can you post code/instructions howto reproduce
<br>
it?
<br>
10x
<br>
Mike
<br>
<p>On Mon, Aug 9, 2010 at 5:22 PM, Eloi Gaudry &lt;eg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could someone have a look on these two different error messages ? I'd like
</span><br>
<span class="quotelev1">&gt; to know the reason(s) why they were displayed and their actual meaning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday 19 July 2010 16:38:57 Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've been working on a random segmentation fault that seems to occur
</span><br>
<span class="quotelev1">&gt; during
</span><br>
<span class="quotelev2">&gt; &gt; a collective communication when using the openib btl (see [OMPI users]
</span><br>
<span class="quotelev2">&gt; &gt; [openib] segfault when using openib btl).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; During my tests, I've come across different issues reported by
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI-1.4.2:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1/
</span><br>
<span class="quotelev2">&gt; &gt; [[12770,1],0][btl_openib_component.c:3227:handle_wc] from bn0103 to:
</span><br>
<span class="quotelev1">&gt; bn0122
</span><br>
<span class="quotelev2">&gt; &gt; error polling LP CQ with status LOCAL LENGTH ERROR status number 1 for
</span><br>
<span class="quotelev2">&gt; &gt; wr_id 560618664 opcode 1  vendor error 105 qp_idx 3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2/
</span><br>
<span class="quotelev2">&gt; &gt; [[992,1],6][btl_openib_component.c:3227:handle_wc] from pbn04 to: pbn05
</span><br>
<span class="quotelev2">&gt; &gt; error polling LP CQ with status REMOTE ACCESS ERROR status number 10 for
</span><br>
<span class="quotelev2">&gt; &gt; wr_id 162858496 opcode 1  vendor error 136 qp_idx
</span><br>
<span class="quotelev2">&gt; &gt; 0[[992,1],5][btl_openib_component.c:3227:handle_wc] from pbn05 to: pbn04
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status WORK REQUEST FLUSHED ERROR status number
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev2">&gt; &gt; for wr_id 485900928 opcode 0  vendor error 249 qp_idx 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; The OpenFabrics stack has reported a network error event.  Open MPI will
</span><br>
<span class="quotelev2">&gt; &gt; try to continue, but your job may end up failing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Local host:        p'&quot;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI process PID:   20743
</span><br>
<span class="quotelev2">&gt; &gt;   Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This error may indicate connectivity problems within the fabric; please
</span><br>
<span class="quotelev2">&gt; &gt; contact your system administrator.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd like to know what these two errors mean and where they come from.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt; &gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Free Field Technologies
</span><br>
<span class="quotelev1">&gt; Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
</span><br>
<span class="quotelev1">&gt; Company Phone:   +32 10 487 959
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13955/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13956.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<li><strong>Previous message:</strong> <a href="13954.php">Reuti: "[OMPI users] SGE integration when getting slots from different queues on one and the same host mismatch"</a>
<li><strong>In reply to:</strong> <a href="13940.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13956.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<li><strong>Reply:</strong> <a href="13956.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
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
