<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 12:38:17 2005" -->
<!-- isoreceived="20051114173817" -->
<!-- sent="Mon, 14 Nov 2005 10:38:03 -0700" -->
<!-- isosent="20051114173803" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="op.sz8q9prqies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.sz8op2zmies9li_at_rygel.lnxi.com" -->
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
<strong>Date:</strong> 2005-11-14 12:38:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0335.php">Daryl W. Grunau: "[O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0333.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0333.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thus far, it appears that moving to MX 1.1.0 didn't change the error  
<br>
message I've been getting about parts being 'not implemented.'
<br>
<p>I also re-provisioned four of the IB nodes (leaving me with 3 four-node  
<br>
clusters:  One using mvapi, one using openib, and one using myrinet)
<br>
<p>My mvapi config is using the Mellanox IB Gold 1.8 IB software release.   
<br>
Kernel 2.6.5-7.201 (SLES 9 SP2)
<br>
<p>When I ran IMB using mvapi, I received the following error:
<br>
***
<br>
[0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in pod
<br>
[0,1,3][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in pod
<br>
[0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in pod
<br>
***
<br>
<p>Execution (for the mvapi test) is started with:
<br>
mpirun --prefix $MPI_HOME --mca btl mvapi,self -np 8 -machinefile  
<br>
$work_dir/node.gen1 $work_dir/IMB-MPI1
<br>
<p>All tests were run on RC6.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0335.php">Daryl W. Grunau: "[O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0333.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0333.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
