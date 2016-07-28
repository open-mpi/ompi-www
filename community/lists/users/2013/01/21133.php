<?
$subject_val = "Re: [OMPI users] help me understand these error msgs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 10:46:48 2013" -->
<!-- isoreceived="20130116154648" -->
<!-- sent="Wed, 16 Jan 2013 07:46:41 -0800" -->
<!-- isosent="20130116154641" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help me understand these error msgs" -->
<!-- id="5FBFBDC0-C5F8-4892-B52B-8EB1932C06F2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20130116164110.69054210.pegasus_at_nerv.eu.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] help me understand these error msgs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 10:46:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21134.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21132.php">Jure Pe&#196;&#141;ar: "[OMPI users] help me understand these error msgs"</a>
<li><strong>In reply to:</strong> <a href="21132.php">Jure Pe&#196;&#141;ar: "[OMPI users] help me understand these error msgs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21146.php">Jure Pečar: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Reply:</strong> <a href="21146.php">Jure Pečar: "Re: [OMPI users] help me understand these error msgs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 16, 2013, at 7:41 AM, Jure Pe&#196;&#141;ar &lt;pegasus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a large fortran code processing data (weather forecast). It runs ok with smaller dataset, but on larger dataset I get some errors I've never seen before:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node061:05144] [[55141,0],11]-&gt;[[55141,0],0] mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9) [sd = 9]
</span><br>
<span class="quotelev1">&gt; [node061:05144] [[55141,0],11] routed:binomial: Connection to lifeline [[55141,0],0] lost
</span><br>
<p>This one means that a backend node lost its connection to mpirun. We use a TCP socket between the daemon on a node and mpirun to launch the processes and to detect if/when that node fails for some reason.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node084:7.0.Non-fatal temporary exhaustion of send tid dma descriptors
</span><br>
<span class="quotelev1">&gt; (elapsed=43.788s, source LID=0x49/context=11, count=1) (err=0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using QLogic software version 7.1.0.0.58 (ofed 1.5.4.1, open-mpi 1.4.3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm starting this program with mpirun -mca btl openib,sm,self so I don't really understand what tcp has to do in the first error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also I traced second error message to psm code, but it appears even if i add -mca mtl ^psm to my mpirun arguments. Why?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jure Pe&#196;&#141;ar
</span><br>
<span class="quotelev1">&gt; <a href="http://jure.pecar.org">http://jure.pecar.org</a>
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
<li><strong>Next message:</strong> <a href="21134.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21132.php">Jure Pe&#196;&#141;ar: "[OMPI users] help me understand these error msgs"</a>
<li><strong>In reply to:</strong> <a href="21132.php">Jure Pe&#196;&#141;ar: "[OMPI users] help me understand these error msgs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21146.php">Jure Pečar: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Reply:</strong> <a href="21146.php">Jure Pečar: "Re: [OMPI users] help me understand these error msgs"</a>
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
