<?
$subject_val = "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 10 02:55:21 2011" -->
<!-- isoreceived="20110710065521" -->
<!-- sent="Sun, 10 Jul 2011 09:55:12 +0300" -->
<!-- isosent="20110710065512" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR" -->
<!-- id="4E194CD0.306_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E16D013.8290.443E871_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-10 02:55:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16878.php">Dmitry N. Mikushin: "[OMPI users] Error installing OpenMPI 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16876.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>In reply to:</strong> <a href="16856.php">yanyg_at_[hidden]: "[OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16891.php">yanyg_at_[hidden]: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>Reply:</strong> <a href="16891.php">yanyg_at_[hidden]: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Yiguang,
<br>
<p>On 08-Jul-11 4:38 PM, yanyg_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The message says :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [[17549,1],0][btl_openib_component.c:3224:handle_wc] from
</span><br>
<span class="quotelev1">&gt; gulftown to: gulftown error polling LP CQ with status LOCAL
</span><br>
<span class="quotelev1">&gt; LENGTH ERROR status number 1 for wr_id 492359816 opcode
</span><br>
<span class="quotelev1">&gt; 32767  vendor error 105 qp_idx 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is very arcane to me, the same test ran when only one MPI
</span><br>
<span class="quotelev1">&gt; process on each node, but when we switch to two MPI processes
</span><br>
<span class="quotelev1">&gt; on each node, then this error message comes up. Anything I could
</span><br>
<span class="quotelev1">&gt; do? Anything related to infiniband configuration, as guessed form
</span><br>
<span class="quotelev1">&gt; the string &quot;vendor error 105 qp_idx 3&quot;?
</span><br>
<p>What OMPI version are you using and what kind of HCAs do you have?
<br>
You can get details about HCA with &quot;ibv_devinfo&quot; command.
<br>
Also, can you post here all the OMPI command line parameters that
<br>
you use when you run your test?
<br>
<p>Thanks.
<br>
<p>-- YK
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16878.php">Dmitry N. Mikushin: "[OMPI users] Error installing OpenMPI 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16876.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>In reply to:</strong> <a href="16856.php">yanyg_at_[hidden]: "[OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16891.php">yanyg_at_[hidden]: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>Reply:</strong> <a href="16891.php">yanyg_at_[hidden]: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
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
