<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 19 15:18:36 2006" -->
<!-- isoreceived="20060619191836" -->
<!-- sent="Mon, 19 Jun 2006 12:18:32 -0700" -->
<!-- isosent="20060619191832" -->
<!-- name="Owen Stampflee" -->
<!-- email="ostampflee_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB" -->
<!-- id="1150744713.2728.11.camel_at_beast.terraplex.com" -->
<!-- inreplyto="20060619140855.GH6841_at_minantech.com" -->
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
<strong>From:</strong> Owen Stampflee (<em>ostampflee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-19 15:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1451.php">Reuti: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>Previous message:</strong> <a href="1449.php">Michael Kluskens: "[OMPI users] auto detect hosts"</a>
<li><strong>In reply to:</strong> <a href="1445.php">Gleb Natapov: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1494.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ooops, thought I mentioned that, its 1.0.2.
<br>
<p>Cheers,
<br>
Owen
<br>
<p>On Mon, 2006-06-19 at 17:08 +0300, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; What version of OpenMPI are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 19, 2006 at 07:06:54AM -0700, Owen Stampflee wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm currently working on getting OpenMPI + OpenIB 1.0 (might be an RC)
</span><br>
<span class="quotelev2">&gt; &gt; working on our 8 node Xserve G5 cluster running Linux kernel version
</span><br>
<span class="quotelev2">&gt; &gt; 2.6.16 and get the following errors:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 on node-192-168-111-249
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 on node-192-168-111-248
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 1 for wr_id 270995584 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270995868 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270996152 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270996436 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270996720 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270997004 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270997288 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270997572 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 271077504 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 271077788 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 271078072 opcode -1286736
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 9 for wr_id 270991488 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270995584 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270995868 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270996152 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270996436 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270996720 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270997004 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270997288 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 270997572 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 271077504 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 271077788 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; error polling HP CQ with status 5 for wr_id 271078072 opcode -6639584
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<span class="quotelev1">&gt; !DSPAM:4496b112222547791312162!
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1451.php">Reuti: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>Previous message:</strong> <a href="1449.php">Michael Kluskens: "[OMPI users] auto detect hosts"</a>
<li><strong>In reply to:</strong> <a href="1445.php">Gleb Natapov: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1494.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
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
