<?
$subject_val = "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 15:16:23 2011" -->
<!-- isoreceived="20110316191623" -->
<!-- sent="Wed, 16 Mar 2011 13:16:13 -0600" -->
<!-- isosent="20110316191613" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug btl:tcp with grpcomm:hier" -->
<!-- id="85E06A3E-2DD8-4FAC-9076-50DC0DB2E335_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D81060D.8080301_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug btl:tcp with grpcomm:hier<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 15:16:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9090.php">George Bosilca: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9088.php">Damien Guinier: "[OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>In reply to:</strong> <a href="9088.php">Damien Guinier: "[OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9090.php">George Bosilca: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Reply:</strong> <a href="9090.php">George Bosilca: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect something else is wrong - the grpcomm system never has any visibility as to what data goes into the modex, or how that data is used. In other words, if the tcp btl isn't providing adequate info, then it would fail regardless of which grpcomm module was in use. So your statement about the hier module not distinguishing between peers on the same node doesn't make sense - the hier module has no idea that a tcp btl even exists, let alone have anything to do with the modex data.
<br>
<p>You might take a look at how the tcp btl is picking its sockets. The srun direct launch method may be setting envars that confuse it, perhaps causing the procs to all pick the same socket.
<br>
<p><p>On Mar 16, 2011, at 12:48 PM, Damien Guinier wrote:
<br>
<p><span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From my test, it is impossible to use &quot;btl:tcp&quot; with &quot;grpcomm:hier&quot;. The &quot;grpcomm:hier&quot; module is important because, &quot;srun&quot; launch protocol can't use any other &quot;grpcomm&quot; module.
</span><br>
<span class="quotelev1">&gt; You can reproduce this bug, by using &quot;btl:tcp&quot; and &quot;grpcomm:hier&quot; , when you create a ring(like: IMB sendrecv)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt;salloc -N 2 -n 4 mpirun --mca grpcomm hier --mca btl self,sm,tcp ./IMB-MPI1 Sendrecv
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 2979
</span><br>
<span class="quotelev1">&gt; [cuzco95][[59536,1],2][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected process identifier [[59536,1],0]
</span><br>
<span class="quotelev1">&gt; [cuzco92][[59536,1],0][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected process identifier [[59536,1],2]
</span><br>
<span class="quotelev1">&gt; ^C
</span><br>
<span class="quotelev1">&gt; $&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error message show: &quot;btl:tcp&quot; have create a connection to a peer, but it not the good one ( peer identity is checked with the &quot;ack&quot;).
</span><br>
<span class="quotelev1">&gt; To create a connection between two peers with &quot;btl:tcp&quot;:
</span><br>
<span class="quotelev1">&gt; - Each peer broadcast theirs IP parameters with ompi_modex_send().
</span><br>
<span class="quotelev1">&gt; - IP parameters from selected peer is received with ompi_modex_recv().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In fact, modex use &quot;orte_grpcomm.set_proc_attr()&quot; and &quot;orte_grpcomm.get_proc_attr()&quot; to exchange data. The problem is &quot;grpcomm:hier&quot; doesn't make difference between two peer on the same node. From my test the IP parameters, from the fist rank on the selected node, is always return.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;grpcomm:hier&quot; is restricted to &quot;btl:sm&quot; and &quot;btl:openib&quot; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One easy solution to fix this problem, is to add rank information in the &quot;name&quot; variable on
</span><br>
<span class="quotelev1">&gt; -    ompi/runtime/ompi_module_exchange.c:ompi_modex_send()
</span><br>
<span class="quotelev1">&gt; -    ompi/runtime/ompi_module_exchange.c:ompi_modex_recv()
</span><br>
<span class="quotelev1">&gt; but I dislike it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone have a better solution ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks you
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9090.php">George Bosilca: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9088.php">Damien Guinier: "[OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>In reply to:</strong> <a href="9088.php">Damien Guinier: "[OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9090.php">George Bosilca: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Reply:</strong> <a href="9090.php">George Bosilca: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
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
