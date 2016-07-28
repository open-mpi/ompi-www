<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 19 11:20:48 2006" -->
<!-- isoreceived="20060619152048" -->
<!-- sent="Mon, 19 Jun 2006 08:20:47 -0700" -->
<!-- isosent="20060619152047" -->
<!-- name="Owen Stampflee" -->
<!-- email="ostampflee_at_[hidden]" -->
<!-- subject="[OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband" -->
<!-- id="1150730448.2728.5.camel_at_beast.terraplex.com" -->
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
<strong>Date:</strong> 2006-06-19 11:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1447.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="1445.php">Gleb Natapov: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are currently trying to get OpenMPI 1.0.2 and OpenIB (1.0) running on
<br>
our Xserve G5 cluster running Linux 2.6.16 with no luck, the
<br>
ibv_*_pingpong tests work fine, opensm is started and the network is up.
<br>
<p>Here's the output:
<br>
Process 1 on node-192-168-111-249
<br>
Process 0 on node-192-168-111-248
<br>
[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 1 for wr_id 270995584 opcode -1286736
<br>
<p>[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270995868 opcode -1286736
<br>
<p>[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270996152 opcode -1286736
<br>
<p>[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270996436 opcode -1286736
<br>
<p>[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270996720 opcode -1286736
<br>
<p>[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270997004 opcode -1286736
<br>
<p>[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270997288 opcode -1286736
<br>
<p>[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270997572 opcode -1286736
<br>
<p>[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 271077504 opcode -1286736
<br>
<p>[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 271077788 opcode -1286736
<br>
<p>[0,1,1][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 271078072 opcode -1286736
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 9 for wr_id 270991488 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270995584 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270995868 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270996152 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270996436 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270996720 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270997004 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270997288 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 270997572 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 271077504 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 271077788 opcode -6639584
<br>
<p>[0,1,0][btl_openib_component.c:587:mca_btl_openib_component_progress]
<br>
error polling HP CQ with status 5 for wr_id 271078072 opcode -6639584
<br>
<p>mpirun: killing job...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1447.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="1445.php">Gleb Natapov: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
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
