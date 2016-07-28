<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 19 10:10:23 2006" -->
<!-- isoreceived="20060619141023" -->
<!-- sent="Mon, 19 Jun 2006 17:08:55 +0300" -->
<!-- isosent="20060619140855" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB" -->
<!-- id="20060619140855.GH6841_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1150726014.2608.6.camel_at_beast.terraplex.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-19 10:08:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1446.php">Owen Stampflee: "[OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband"</a>
<li><strong>Previous message:</strong> <a href="1444.php">Owen Stampflee: "[OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>In reply to:</strong> <a href="1444.php">Owen Stampflee: "[OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1450.php">Owen Stampflee: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Reply:</strong> <a href="1450.php">Owen Stampflee: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of OpenMPI are you using?
<br>
<p>On Mon, Jun 19, 2006 at 07:06:54AM -0700, Owen Stampflee wrote:
<br>
<span class="quotelev1">&gt; I'm currently working on getting OpenMPI + OpenIB 1.0 (might be an RC)
</span><br>
<span class="quotelev1">&gt; working on our 8 node Xserve G5 cluster running Linux kernel version
</span><br>
<span class="quotelev1">&gt; 2.6.16 and get the following errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 1 on node-192-168-111-249
</span><br>
<span class="quotelev1">&gt; Process 0 on node-192-168-111-248
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 1 for wr_id 270995584 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270995868 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270996152 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270996436 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270996720 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270997004 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270997288 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270997572 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 271077504 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 271077788 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 271078072 opcode -1286736
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 9 for wr_id 270991488 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270995584 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270995868 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270996152 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270996436 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270996720 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270997004 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270997288 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 270997572 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 271077504 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 271077788 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with status 5 for wr_id 271078072 opcode -6639584
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1446.php">Owen Stampflee: "[OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband"</a>
<li><strong>Previous message:</strong> <a href="1444.php">Owen Stampflee: "[OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>In reply to:</strong> <a href="1444.php">Owen Stampflee: "[OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1450.php">Owen Stampflee: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Reply:</strong> <a href="1450.php">Owen Stampflee: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
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
