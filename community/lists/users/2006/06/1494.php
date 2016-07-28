<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 09:56:05 2006" -->
<!-- isoreceived="20060629135605" -->
<!-- sent="Thu, 29 Jun 2006 09:56:07 -0400" -->
<!-- isosent="20060629135607" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9AC6_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB" -->
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
<strong>Date:</strong> 2006-06-29 09:56:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1495.php">Galen M. Shipman: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Previous message:</strong> <a href="1493.php">Patrick Jessee: "[OMPI users] error messages for btl components that aren't loaded"</a>
<li><strong>Maybe in reply to:</strong> <a href="1444.php">Owen Stampflee: "[OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1495.php">Galen M. Shipman: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Reply:</strong> <a href="1495.php">Galen M. Shipman: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Owen --
<br>
<p>Sorry, we all fell [way] behind on e-mail because many of us were at an
<br>
OMPI developer's meeting last week.  :-(
<br>
<p>In the interim, we have finally released Open MPI v1.1.  Could you give
<br>
this version a whirl and see if it fixes your problems?
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Owen Stampflee
</span><br>
<span class="quotelev1">&gt; Sent: Monday, June 19, 2006 3:19 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Kai Staats
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error Polling HP CQ Status on PPC64 
</span><br>
<span class="quotelev1">&gt; LInux with IB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ooops, thought I mentioned that, its 1.0.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Owen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 2006-06-19 at 17:08 +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt; What version of OpenMPI are you using?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jun 19, 2006 at 07:06:54AM -0700, Owen Stampflee wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm currently working on getting OpenMPI + OpenIB 1.0 
</span><br>
<span class="quotelev1">&gt; (might be an RC)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; working on our 8 node Xserve G5 cluster running Linux 
</span><br>
<span class="quotelev1">&gt; kernel version
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2.6.16 and get the following errors:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Process 1 on node-192-168-111-249
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Process 0 on node-192-168-111-248
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 1 for wr_id 270995584 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270995868 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270996152 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270996436 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270996720 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270997004 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270997288 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270997572 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 271077504 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 271077788 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 271078072 
</span><br>
<span class="quotelev1">&gt; opcode -1286736
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 9 for wr_id 270991488 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270995584 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270995868 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270996152 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270996436 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270996720 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270997004 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270997288 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 270997572 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 271077504 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 271077788 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling HP CQ with status 5 for wr_id 271078072 
</span><br>
<span class="quotelev1">&gt; opcode -6639584
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; !DSPAM:4496b112222547791312162!
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
<li><strong>Next message:</strong> <a href="1495.php">Galen M. Shipman: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Previous message:</strong> <a href="1493.php">Patrick Jessee: "[OMPI users] error messages for btl components that aren't loaded"</a>
<li><strong>Maybe in reply to:</strong> <a href="1444.php">Owen Stampflee: "[OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1495.php">Galen M. Shipman: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Reply:</strong> <a href="1495.php">Galen M. Shipman: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
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
