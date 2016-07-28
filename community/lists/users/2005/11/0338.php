<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 19:28:31 2005" -->
<!-- isoreceived="20051115002831" -->
<!-- sent="Mon, 14 Nov 2005 17:28:15 -0700" -->
<!-- isosent="20051115002815" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="op.sz899dl2ies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.sz8q9prqies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-14 19:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0339.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0337.php">George Bosilca: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0339.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0339.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0340.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 14 Nov 2005 10:38:03 -0700, Troy Telford  
<br>
&lt;ttelford_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My mvapi config is using the Mellanox IB Gold 1.8 IB software release.
</span><br>
<span class="quotelev1">&gt; Kernel 2.6.5-7.201 (SLES 9 SP2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I ran IMB using mvapi, I received the following error:
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error
</span><br>
<span class="quotelev1">&gt; in pod
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error
</span><br>
<span class="quotelev1">&gt; in pod
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error
</span><br>
<span class="quotelev1">&gt; in pod
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Execution (for the mvapi test) is started with:
</span><br>
<span class="quotelev1">&gt; mpirun --prefix $MPI_HOME --mca btl mvapi,self -np 8 -machinefile
</span><br>
<span class="quotelev1">&gt; $work_dir/node.gen1 $work_dir/IMB-MPI1
</span><br>
<p>A few clarifications:  here's the output, by program:
<br>
<p>Error when Executing Presta's 'com' test on MVAPI:
<br>
[0,1,1][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress]  
<br>
[0,1,0][btld
<br>
error in posting pending send
<br>
<p>Error for the 'allred' rest:
<br>
[btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error in  
<br>
posting pending send
<br>
[0,1,5][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in posting pending send
<br>
[0,1,1][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in posting pending send
<br>
[0,1,6][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in posting pending send
<br>
<p>For 'Globalop':
<br>
[0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in posting pending send
<br>
[n54:12267] *** An error occurred in MPI_Reduce
<br>
[n54:12267] *** on communicator MPI_COMM_WORLD
<br>
[n54:12267] *** MPI_ERR_OTHER: known error not in list
<br>
[n54:12267] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>For IMB:
<br>
[0,1,3][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress]
<br>
[0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in posting pending send
<br>
error in posting pending send
<br>
[0,1,3][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in posting pending send
<br>
<p>mvapi did run HPL successfully, but it hasn't finished running HPCC just  
<br>
yet.
<br>
<p>Also, I can say that I've been successful in running HPL and HPCC over GM  
<br>
(in fact, I've been able to run IMB, Presta, HPCC, and HPL with no issues  
<br>
using GM.  This pleases me)
<br>
<p>I've just finished a build of RC7, so I'll go give that a whirl and report.
<br>
<pre>
-- 
Troy Telford
Linux Networx
ttelford_at_[hidden]
(801) 649-1356
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0339.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0337.php">George Bosilca: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0339.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0339.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0340.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
