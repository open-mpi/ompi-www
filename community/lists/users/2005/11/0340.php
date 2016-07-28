<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 20:09:52 2005" -->
<!-- isoreceived="20051115010952" -->
<!-- sent="Mon, 14 Nov 2005 18:09:48 -0700 (MST)" -->
<!-- isosent="20051115010948" -->
<!-- name="Timothy S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="18028.128.165.0.81.1132016988.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="op.sz899dl2ies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Timothy S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-14 20:09:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0341.php">Allan Menezes: "[O-MPI users] Hpl and TCP"</a>
<li><strong>Previous message:</strong> <a href="0339.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Troy,
<br>
<p>I've been able to reproduce this. Should have this
<br>
corrected shortly.
<br>
<p>Thanks,
<br>
Tim
<br>
<p><span class="quotelev1">&gt; On Mon, 14 Nov 2005 10:38:03 -0700, Troy Telford
</span><br>
<span class="quotelev1">&gt; &lt;ttelford_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My mvapi config is using the Mellanox IB Gold 1.8 IB software release.
</span><br>
<span class="quotelev2">&gt;&gt; Kernel 2.6.5-7.201 (SLES 9 SP2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I ran IMB using mvapi, I received the following error:
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress]
</span><br>
<span class="quotelev2">&gt;&gt; error
</span><br>
<span class="quotelev2">&gt;&gt; in pod
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,3][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress]
</span><br>
<span class="quotelev2">&gt;&gt; error
</span><br>
<span class="quotelev2">&gt;&gt; in pod
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress]
</span><br>
<span class="quotelev2">&gt;&gt; error
</span><br>
<span class="quotelev2">&gt;&gt; in pod
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Execution (for the mvapi test) is started with:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix $MPI_HOME --mca btl mvapi,self -np 8 -machinefile
</span><br>
<span class="quotelev2">&gt;&gt; $work_dir/node.gen1 $work_dir/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A few clarifications:  here's the output, by program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error when Executing Presta's 'com' test on MVAPI:
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress]
</span><br>
<span class="quotelev1">&gt; [0,1,0][btld
</span><br>
<span class="quotelev1">&gt; error in posting pending send
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error for the 'allred' rest:
</span><br>
<span class="quotelev1">&gt; [btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error in
</span><br>
<span class="quotelev1">&gt; posting pending send
</span><br>
<span class="quotelev1">&gt; [0,1,5][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error
</span><br>
<span class="quotelev1">&gt; in posting pending send
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error
</span><br>
<span class="quotelev1">&gt; in posting pending send
</span><br>
<span class="quotelev1">&gt; [0,1,6][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error
</span><br>
<span class="quotelev1">&gt; in posting pending send
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For 'Globalop':
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error
</span><br>
<span class="quotelev1">&gt; in posting pending send
</span><br>
<span class="quotelev1">&gt; [n54:12267] *** An error occurred in MPI_Reduce
</span><br>
<span class="quotelev1">&gt; [n54:12267] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n54:12267] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [n54:12267] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For IMB:
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress]
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error
</span><br>
<span class="quotelev1">&gt; in posting pending send
</span><br>
<span class="quotelev1">&gt; error in posting pending send
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error
</span><br>
<span class="quotelev1">&gt; in posting pending send
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mvapi did run HPL successfully, but it hasn't finished running HPCC just
</span><br>
<span class="quotelev1">&gt; yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I can say that I've been successful in running HPL and HPCC over GM
</span><br>
<span class="quotelev1">&gt; (in fact, I've been able to run IMB, Presta, HPCC, and HPL with no issues
</span><br>
<span class="quotelev1">&gt; using GM.  This pleases me)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've just finished a build of RC7, so I'll go give that a whirl and
</span><br>
<span class="quotelev1">&gt; report.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Troy Telford
</span><br>
<span class="quotelev1">&gt; Linux Networx
</span><br>
<span class="quotelev1">&gt; ttelford_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (801) 649-1356
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
<li><strong>Next message:</strong> <a href="0341.php">Allan Menezes: "[O-MPI users] Hpl and TCP"</a>
<li><strong>Previous message:</strong> <a href="0339.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
