<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 19 10:06:59 2006" -->
<!-- isoreceived="20060619140659" -->
<!-- sent="Mon, 19 Jun 2006 07:06:54 -0700" -->
<!-- isosent="20060619140654" -->
<!-- name="Owen Stampflee" -->
<!-- email="ostampflee_at_[hidden]" -->
<!-- subject="[OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB" -->
<!-- id="1150726014.2608.6.camel_at_beast.terraplex.com" -->
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
<strong>Date:</strong> 2006-06-19 10:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1445.php">Gleb Natapov: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Previous message:</strong> <a href="1443.php">Tony Ladd: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1445.php">Gleb Natapov: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Reply:</strong> <a href="1445.php">Gleb Natapov: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Maybe reply:</strong> <a href="1494.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm currently working on getting OpenMPI + OpenIB 1.0 (might be an RC)
<br>
working on our 8 node Xserve G5 cluster running Linux kernel version
<br>
2.6.16 and get the following errors:
<br>
<p>Process 1 on node-192-168-111-249
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
<li><strong>Next message:</strong> <a href="1445.php">Gleb Natapov: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Previous message:</strong> <a href="1443.php">Tony Ladd: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1445.php">Gleb Natapov: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Reply:</strong> <a href="1445.php">Gleb Natapov: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Maybe reply:</strong> <a href="1494.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
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
