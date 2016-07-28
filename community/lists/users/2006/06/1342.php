<?
$subject_val = "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  1 15:35:06 2006" -->
<!-- isoreceived="20060601193506" -->
<!-- sent="Thu, 01 Jun 2006 13:34:59 -0600" -->
<!-- isosent="20060601193459" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.0.2 and np &amp;gt;=64" -->
<!-- id="op.tahfclcmies9li_at_rygel.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6A04F65C-A9EC-40B0-A49F-B8BFB0845563_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-06-01 15:34:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1343.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Previous message:</strong> <a href="1341.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Few more questions"</a>
<li><strong>In reply to:</strong> <a href="../../2006/05/1339.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1344.php">Troy Telford: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Did you happen to have a chance to try to run the 1.0.3 or 1.1
</span><br>
<span class="quotelev1">&gt; nightly tarballs?  I'm 50/50 on whether we've fixed these issues
</span><br>
<span class="quotelev1">&gt; already.
</span><br>
<p>OK, for ticket #40:
<br>
<p>With Open MPI 1.0.3 (nightly downloaded/built May 31st)
<br>
(This time using presta's 'laten', since the source code + comments is &lt;  
<br>
1k lines of code)
<br>
<p>One note:  There doesn't seem to be a specific number of nodes in which  
<br>
the error crops up.  It almost seems like a case of probability:  With -np  
<br>
142, the test will succeed ~75% of the time.  Lower -np values result in  
<br>
higher success rates.  Larger values of -np increase the probability of  
<br>
failure.  -np 148 fails &gt; 90% of the time.  -np 128 works pretty much all  
<br>
the time.
<br>
<p>Fiddling with the machinefile (to try to narrow it down to misbehaving  
<br>
hardware) -- for instance, using only a specific set of nodes, etc. had no  
<br>
effect;
<br>
<p>On to the results:
<br>
<p>[root_at_zartan1 tmp]# mpirun -v -prefix $MPIHOME -mca btl openib,sm,self -np  
<br>
148 -machinefile machines /tmp/laten -o 10
<br>
<p>MPI Bidirectional latency test (Send/Recv)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processes    Max Latency (us)
<br>
------------------------------------------
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 12 for wr_id 47120798794424 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 47121337969156 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 47121338002208 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 47121338035260 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 47121338068312 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 47121338101364 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 47121338134416 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 47121338167468 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 47121338200520 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 47121338233572 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:587:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 47121340387456 opcode 0
<br>
<p>If I use -np 145, (actually, any odd number of nodes; that may just be a  
<br>
case of running 'laten' incorrectly)
<br>
<p>MPI Bidirectional latency test (Send/Recv)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processes    Max Latency (us)
<br>
------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2               8.249
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4              15.795
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8              21.803
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16              23.353
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32              21.601
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64              31.900
<br>
[zartan75:06723] *** An error occurred in MPI_Group_incl
<br>
[zartan75:06723] *** on communicator MPI_COMM_WORLD
<br>
[zartan75:06723] *** MPI_ERR_RANK: invalid rank
<br>
[zartan75:06723] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>***and more of the same, with different nodes)
<br>
<p>1 additional process aborted (not shown)
<br>
<p>***************************
<br>
With Open MPI 1.1:
<br>
mpirun -v -np 150 -prefix $MPIHOME -mca btl openib,sm,self -machinefile  
<br>
machines laten -o 10
<br>
MPI Bidirectional latency test (Send/Recv)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processes    Max Latency (us)
<br>
------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2              21.648
<br>
[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 12 for wr_id 5775790 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 5865600 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 7954692 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 7967282 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 7979872 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 7992462 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 8005052 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 8017642 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 8030232 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 8042822 opcode 0
<br>
<p>[0,1,144][btl_openib_component.c:782:mca_btl_openib_component_progress]  
<br>
error polling HP CQ with status 5 for wr_id 8055412 opcode 0
<br>
<pre>
--
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1343.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Previous message:</strong> <a href="1341.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Few more questions"</a>
<li><strong>In reply to:</strong> <a href="../../2006/05/1339.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1344.php">Troy Telford: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
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
