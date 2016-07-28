<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 23:08:38 2006" -->
<!-- isoreceived="20060603030838" -->
<!-- sent="Fri, 2 Jun 2006 23:08:29 -0400" -->
<!-- isosent="20060603030829" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.0.2 and np &amp;gt;=64" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C80B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open MPI 1.0.2 and np &amp;gt;=64" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 23:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1376.php">Doug Roberts: "[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<li><strong>Previous message:</strong> <a href="1374.php">Frank: "[OMPI users] Mac OS X: sess_dir_finalize leave"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1325.php">Troy Telford: "[OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Troy and I talked about this one off-list as well and resolved the issue
<br>
as problems with his local IB fabric.  
<br>
<p>The moral of the lesson here is that Open MPI's error messages need to
<br>
be a bit more descriptive (in this case, they should have said, &quot;Help!
<br>
The sky is falling, the sky is falling!&quot;).
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Troy Telford
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 01, 2006 3:35 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Did you happen to have a chance to try to run the 1.0.3 or 1.1
</span><br>
<span class="quotelev2">&gt; &gt; nightly tarballs?  I'm 50/50 on whether we've fixed these issues
</span><br>
<span class="quotelev2">&gt; &gt; already.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, for ticket #40:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Open MPI 1.0.3 (nightly downloaded/built May 31st)
</span><br>
<span class="quotelev1">&gt; (This time using presta's 'laten', since the source code + 
</span><br>
<span class="quotelev1">&gt; comments is &lt;  
</span><br>
<span class="quotelev1">&gt; 1k lines of code)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One note:  There doesn't seem to be a specific number of 
</span><br>
<span class="quotelev1">&gt; nodes in which  
</span><br>
<span class="quotelev1">&gt; the error crops up.  It almost seems like a case of 
</span><br>
<span class="quotelev1">&gt; probability:  With -np  
</span><br>
<span class="quotelev1">&gt; 142, the test will succeed ~75% of the time.  Lower -np 
</span><br>
<span class="quotelev1">&gt; values result in  
</span><br>
<span class="quotelev1">&gt; higher success rates.  Larger values of -np increase the 
</span><br>
<span class="quotelev1">&gt; probability of  
</span><br>
<span class="quotelev1">&gt; failure.  -np 148 fails &gt; 90% of the time.  -np 128 works 
</span><br>
<span class="quotelev1">&gt; pretty much all  
</span><br>
<span class="quotelev1">&gt; the time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fiddling with the machinefile (to try to narrow it down to 
</span><br>
<span class="quotelev1">&gt; misbehaving  
</span><br>
<span class="quotelev1">&gt; hardware) -- for instance, using only a specific set of 
</span><br>
<span class="quotelev1">&gt; nodes, etc. had no  
</span><br>
<span class="quotelev1">&gt; effect;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On to the results:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_zartan1 tmp]# mpirun -v -prefix $MPIHOME -mca btl 
</span><br>
<span class="quotelev1">&gt; openib,sm,self -np  
</span><br>
<span class="quotelev1">&gt; 148 -machinefile machines /tmp/laten -o 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI Bidirectional latency test (Send/Recv)
</span><br>
<span class="quotelev1">&gt;               Processes    Max Latency (us)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 12 for wr_id 47120798794424 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 47121337969156 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 47121338002208 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 47121338035260 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 47121338068312 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 47121338101364 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 47121338134416 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 47121338167468 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 47121338200520 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 47121338233572 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:587:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 47121340387456 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use -np 145, (actually, any odd number of nodes; that 
</span><br>
<span class="quotelev1">&gt; may just be a  
</span><br>
<span class="quotelev1">&gt; case of running 'laten' incorrectly)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI Bidirectional latency test (Send/Recv)
</span><br>
<span class="quotelev1">&gt;               Processes    Max Latency (us)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt;                       2               8.249
</span><br>
<span class="quotelev1">&gt;                       4              15.795
</span><br>
<span class="quotelev1">&gt;                       8              21.803
</span><br>
<span class="quotelev1">&gt;                      16              23.353
</span><br>
<span class="quotelev1">&gt;                      32              21.601
</span><br>
<span class="quotelev1">&gt;                      64              31.900
</span><br>
<span class="quotelev1">&gt; [zartan75:06723] *** An error occurred in MPI_Group_incl
</span><br>
<span class="quotelev1">&gt; [zartan75:06723] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [zartan75:06723] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [zartan75:06723] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***and more of the same, with different nodes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***************************
</span><br>
<span class="quotelev1">&gt; With Open MPI 1.1:
</span><br>
<span class="quotelev1">&gt; mpirun -v -np 150 -prefix $MPIHOME -mca btl openib,sm,self 
</span><br>
<span class="quotelev1">&gt; -machinefile  
</span><br>
<span class="quotelev1">&gt; machines laten -o 10
</span><br>
<span class="quotelev1">&gt; MPI Bidirectional latency test (Send/Recv)
</span><br>
<span class="quotelev1">&gt;               Processes    Max Latency (us)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt;                       2              21.648
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 12 for wr_id 5775790 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 5865600 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 7954692 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 7967282 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 7979872 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 7992462 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 8005052 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 8017642 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 8030232 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 8042822 opcode 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,144][btl_openib_component.c:782:mca_btl_openib_component_
</span><br>
<span class="quotelev1">&gt; progress]  
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 8055412 opcode 0
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Troy Telford
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
<li><strong>Next message:</strong> <a href="1376.php">Doug Roberts: "[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<li><strong>Previous message:</strong> <a href="1374.php">Frank: "[OMPI users] Mac OS X: sess_dir_finalize leave"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1325.php">Troy Telford: "[OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
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
