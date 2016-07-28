<?
$subject_val = "[OMPI devel] Bug btl:tcp with grpcomm:hier";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 14:44:01 2011" -->
<!-- isoreceived="20110316184401" -->
<!-- sent="Wed, 16 Mar 2011 19:48:45 +0100" -->
<!-- isosent="20110316184845" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug btl:tcp with grpcomm:hier" -->
<!-- id="4D81060D.8080301_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Bug btl:tcp with grpcomm:hier<br>
<strong>From:</strong> Damien Guinier (<em>damien.guinier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 14:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9089.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9087.php">Mike Dubman: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9089.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Reply:</strong> <a href="9089.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>&nbsp;From my test, it is impossible to use &quot;btl:tcp&quot; with &quot;grpcomm:hier&quot;. 
<br>
The &quot;grpcomm:hier&quot; module is important because, &quot;srun&quot; launch protocol 
<br>
can't use any other &quot;grpcomm&quot; module.
<br>
You can reproduce this bug, by using &quot;btl:tcp&quot; and &quot;grpcomm:hier&quot; , when 
<br>
you create a ring(like: IMB sendrecv)
<br>
<p>$&gt;salloc -N 2 -n 4 mpirun --mca grpcomm hier --mca btl self,sm,tcp 
<br>
./IMB-MPI1 Sendrecv
<br>
salloc: Granted job allocation 2979
<br>
[cuzco95][[59536,1],2][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack] 
<br>
received unexpected process identifier [[59536,1],0]
<br>
[cuzco92][[59536,1],0][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack] 
<br>
received unexpected process identifier [[59536,1],2]
<br>
^C
<br>
$&gt;
<br>
<p>This error message show: &quot;btl:tcp&quot; have create a connection to a peer, 
<br>
but it not the good one ( peer identity is checked with the &quot;ack&quot;).
<br>
To create a connection between two peers with &quot;btl:tcp&quot;:
<br>
- Each peer broadcast theirs IP parameters with ompi_modex_send().
<br>
- IP parameters from selected peer is received with ompi_modex_recv().
<br>
<p>In fact, modex use &quot;orte_grpcomm.set_proc_attr()&quot; and 
<br>
&quot;orte_grpcomm.get_proc_attr()&quot; to exchange data. The problem is 
<br>
&quot;grpcomm:hier&quot; doesn't make difference between two peer on the same 
<br>
node. From my test the IP parameters, from the fist rank on the selected 
<br>
node, is always return.
<br>
<p><p>&quot;grpcomm:hier&quot; is restricted to &quot;btl:sm&quot; and &quot;btl:openib&quot; ?
<br>
<p><p>--------
<br>
<p>One easy solution to fix this problem, is to add rank information in the 
<br>
&quot;name&quot; variable on
<br>
-    ompi/runtime/ompi_module_exchange.c:ompi_modex_send()
<br>
-    ompi/runtime/ompi_module_exchange.c:ompi_modex_recv()
<br>
but I dislike it.
<br>
<p>Someone have a better solution ?
<br>
<p><p>thanks you
<br>
Damien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9089.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9087.php">Mike Dubman: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9089.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Reply:</strong> <a href="9089.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
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
