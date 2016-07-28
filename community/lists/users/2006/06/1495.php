<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 10:21:21 2006" -->
<!-- isoreceived="20060629142121" -->
<!-- sent="Thu, 29 Jun 2006 08:21:18 -0600" -->
<!-- isosent="20060629142118" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB" -->
<!-- id="9868E0A7-2F70-499B-8E76-FC7C6C5B39B1_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9AC6_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 10:21:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1496.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Why does it suddenly not run?"</a>
<li><strong>Previous message:</strong> <a href="1494.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>In reply to:</strong> <a href="1494.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm currently working with Owen on this issue.. will continue my  
<br>
findings on list..
<br>
- Galen
<br>
<p>On Jun 29, 2006, at 7:56 AM, Jeff Squyres ((jsquyres)) wrote:
<br>
<p><span class="quotelev1">&gt; Owen --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, we all fell [way] behind on e-mail because many of us were  
</span><br>
<span class="quotelev1">&gt; at an
</span><br>
<span class="quotelev1">&gt; OMPI developer's meeting last week.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the interim, we have finally released Open MPI v1.1.  Could you  
</span><br>
<span class="quotelev1">&gt; give
</span><br>
<span class="quotelev1">&gt; this version a whirl and see if it fixes your problems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Owen Stampflee
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, June 19, 2006 3:19 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Kai Staats
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Error Polling HP CQ Status on PPC64
</span><br>
<span class="quotelev2">&gt;&gt; LInux with IB
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ooops, thought I mentioned that, its 1.0.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Owen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 2006-06-19 at 17:08 +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What version of OpenMPI are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jun 19, 2006 at 07:06:54AM -0700, Owen Stampflee wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm currently working on getting OpenMPI + OpenIB 1.0
</span><br>
<span class="quotelev2">&gt;&gt; (might be an RC)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; working on our 8 node Xserve G5 cluster running Linux
</span><br>
<span class="quotelev2">&gt;&gt; kernel version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2.6.16 and get the following errors:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 on node-192-168-111-249
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 on node-192-168-111-248
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 1 for wr_id 270995584
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270995868
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270996152
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270996436
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270996720
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270997004
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270997288
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270997572
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 271077504
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 271077788
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 271078072
</span><br>
<span class="quotelev2">&gt;&gt; opcode -1286736
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 9 for wr_id 270991488
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270995584
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270995868
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270996152
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270996436
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270996720
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270997004
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270997288
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 270997572
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 271077504
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 271077788
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error polling HP CQ with status 5 for wr_id 271078072
</span><br>
<span class="quotelev2">&gt;&gt; opcode -6639584
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !DSPAM:4496b112222547791312162!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1496.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Why does it suddenly not run?"</a>
<li><strong>Previous message:</strong> <a href="1494.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>In reply to:</strong> <a href="1494.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
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
