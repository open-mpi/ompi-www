<?
$subject_val = "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 17:37:38 2011" -->
<!-- isoreceived="20110316213738" -->
<!-- sent="Wed, 16 Mar 2011 17:37:33 -0400" -->
<!-- isosent="20110316213733" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug btl:tcp with grpcomm:hier" -->
<!-- id="0DD8324F-4C70-4542-8753-E33071C6DEC7_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2347B314-110B-4CDF-B065-DC626F965B1A_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 17:37:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9094.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9092.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>In reply to:</strong> <a href="9092.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9094.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Reply:</strong> <a href="9094.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just checked and IB does work correctly. But then I remembered that IB is different, the connection are peer based, so they don't happens during the modex exchange. The data is exchanged over RML messages, but outside the modex.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 16, 2011, at 17:28 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; In looking at this, perhaps you can help me understand something. The grpcomm hier modex is the same regardless of what info is given to it. So how is it that this works fine with IB, but not for the TCP btl? Are you relying on something in the modex to track data identity, but the IB btl doesn't?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2011, at 2:25 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually I think that Damien analysis is correct. On a 8 nodes cluster
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -npernode 1 -np 4 --mca grpcomm hier --mca btl self,sm,tcp ./IMB-MPI1 Sendrecv
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; does work, while 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -npernode 2 -np 4 --mca grpcomm hier --mca btl self,sm,tcp ./IMB-MPI1 Sendrecv
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't. As soon as I remove the grpcomm (aka use bad instead) everything works as expected.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just committed a patch (r24534) to the TCP BTL to output more information and here is what I get when I add --mca btl_base_verbose 100 to the mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [node02:01565] btl: tcp: attempting to connect() to [[14725,1],0] address 192.168.3.1 on port 1024
</span><br>
<span class="quotelev2">&gt;&gt; [node02:01565] btl: tcp: attempting to connect() to [[14725,1],1] address 192.168.3.1 on port 1024
</span><br>
<span class="quotelev2">&gt;&gt; [node01:31562] btl: tcp: attempting to connect() to [[14725,1],2] address 192.168.3.2 on port 1026
</span><br>
<span class="quotelev2">&gt;&gt; [node01:31561] btl: tcp: attempting to connect() to [[14725,1],2] address 192.168.3.2 on port 1026
</span><br>
<span class="quotelev2">&gt;&gt; [node01:31562] btl: tcp: attempting to connect() to [[14725,1],3] address 192.168.3.2 on port 1026
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;-npernode 2&quot; will place 2 processes per node, so the vpid 0 and 1 will be on node01 and vpid 2 and 3 will be on node02. Looking at the BTL TCP connection attempts one can clearly see that process 01565 on node02 think that both vpid 0 and 1 can be joined using address 192.168.3.1 on port 1024, which is obviously wrong.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As removing the grpcomm hier solves the problem, I would expect the issues is not in the TCP BTL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 16, 2011, at 15:16 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect something else is wrong - the grpcomm system never has any visibility as to what data goes into the modex, or how that data is used. In other words, if the tcp btl isn't providing adequate info, then it would fail regardless of which grpcomm module was in use. So your statement about the hier module not distinguishing between peers on the same node doesn't make sense - the hier module has no idea that a tcp btl even exists, let alone have anything to do with the modex data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might take a look at how the tcp btl is picking its sockets. The srun direct launch method may be setting envars that confuse it, perhaps causing the procs to all pick the same socket.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 16, 2011, at 12:48 PM, Damien Guinier wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From my test, it is impossible to use &quot;btl:tcp&quot; with &quot;grpcomm:hier&quot;. The &quot;grpcomm:hier&quot; module is important because, &quot;srun&quot; launch protocol can't use any other &quot;grpcomm&quot; module.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can reproduce this bug, by using &quot;btl:tcp&quot; and &quot;grpcomm:hier&quot; , when you create a ring(like: IMB sendrecv)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $&gt;salloc -N 2 -n 4 mpirun --mca grpcomm hier --mca btl self,sm,tcp ./IMB-MPI1 Sendrecv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; salloc: Granted job allocation 2979
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cuzco95][[59536,1],2][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected process identifier [[59536,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [cuzco92][[59536,1],0][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected process identifier [[59536,1],2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This error message show: &quot;btl:tcp&quot; have create a connection to a peer, but it not the good one ( peer identity is checked with the &quot;ack&quot;).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To create a connection between two peers with &quot;btl:tcp&quot;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Each peer broadcast theirs IP parameters with ompi_modex_send().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - IP parameters from selected peer is received with ompi_modex_recv().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In fact, modex use &quot;orte_grpcomm.set_proc_attr()&quot; and &quot;orte_grpcomm.get_proc_attr()&quot; to exchange data. The problem is &quot;grpcomm:hier&quot; doesn't make difference between two peer on the same node. From my test the IP parameters, from the fist rank on the selected node, is always return.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;grpcomm:hier&quot; is restricted to &quot;btl:sm&quot; and &quot;btl:openib&quot; ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; One easy solution to fix this problem, is to add rank information in the &quot;name&quot; variable on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    ompi/runtime/ompi_module_exchange.c:ompi_modex_send()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    ompi/runtime/ompi_module_exchange.c:ompi_modex_recv()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but I dislike it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Someone have a better solution ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Damien
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -- Thomas Jefferson, 1799
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p>&quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
<br>
&nbsp;&nbsp;-- Thomas Jefferson, 1799
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9094.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9092.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>In reply to:</strong> <a href="9092.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9094.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Reply:</strong> <a href="9094.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
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
