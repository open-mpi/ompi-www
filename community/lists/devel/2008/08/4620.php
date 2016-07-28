<?
$subject_val = "[OMPI devel] Fwd: error on QCD run";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 12:02:38 2008" -->
<!-- isoreceived="20080828160238" -->
<!-- sent="Thu, 28 Aug 2008 10:02:29 -0600" -->
<!-- isosent="20080828160229" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: error on QCD run" -->
<!-- id="3AEE5B5B-9F63-476D-ACB6-EBA50EC4D3D7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="37F656CD-1A12-409B-A8D8-FDC5ADAD1B36_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: error on QCD run<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 12:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4621.php">Eugene Loh: "[OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4619.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>Does anyone have a suggestion as to what might be causing this? It's  
<br>
in 1.2.4 release, if that helps. We are trying to test the cluster, so  
<br>
it could be hardware problems - we just want to narrow it down if we  
<br>
can. Any debug suggestions would also be welcome.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Craig Idler &lt;cwi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: August 28, 2008 9:43:11 AM MDT
</span><br>
<span class="quotelev1">&gt; To: tlcc-install_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Trent D'Hooge &lt;tdhooge_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: error on QCD run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've seen the following error a couple of times now during a QCD  
</span><br>
<span class="quotelev1">&gt; multi-node run. Does this indicate a MPI driver issue or maybe a IB  
</span><br>
<span class="quotelev1">&gt; network problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Input file generated. Current time is: Thu Aug 28 00:38:47 2008 UTC
</span><br>
<span class="quotelev1">&gt; Starting executable preplat via &quot;mpirun -np 512 ./preplat&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,452][btl_openib_component.c:1338:btl_openib_component_progress]  
</span><br>
<span class="quotelev1">&gt; from loa126 to: loa119 error polling HP CQ with status LOCAL QP  
</span><br>
<span class="quotelev1">&gt; OPERATION ERROR s
</span><br>
<span class="quotelev1">&gt; tatus number 2 for wr_id 141710328 opcode -1
</span><br>
<span class="quotelev1">&gt; mlx4: local QP operation err (QPN 8800ae, WQE index bfab0000, vendor  
</span><br>
<span class="quotelev1">&gt; syndrome 6f, opcode = 5e)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 10676 on node loa031 exited  
</span><br>
<span class="quotelev1">&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 510 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; mpirun finished with code 36608
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any insight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Craig
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4621.php">Eugene Loh: "[OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4619.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
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
