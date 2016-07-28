<?
$subject_val = "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 28 21:54:42 2008" -->
<!-- isoreceived="20081229025442" -->
<!-- sent="Mon, 29 Dec 2008 03:54:37 +0100 (CET)" -->
<!-- isosent="20081229025437" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI, transfer data from multiple sources to one destination" -->
<!-- id="45720.210.9.136.160.1230519277.squirrel_at_webmail.chalmers.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU149-W170BC60F18C4C2E0A14AE3CBE60_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI, transfer data from multiple sources to one destination<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-28 21:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7615.php">Sangamesh B: "[OMPI users] HP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>Previous message:</strong> <a href="7613.php">Win Than Aung: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>In reply to:</strong> <a href="7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7616.php">Biagio Lucini: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like you may like to read about MPI_ANY_SOURCE as the source for
<br>
MPI_Recv.  Using MPI_Probe, with MPI_ANY_SOURCE, may also be a solution.
<br>
<p><span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to transfer data from multiple sources to one destination.
</span><br>
<span class="quotelev1">&gt; The requirement is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) The sources and destination nodes may work asynchronously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) Each source node generates data package in their own paces.
</span><br>
<span class="quotelev1">&gt;     And, there may be many packages to send. Whenever, a data package
</span><br>
<span class="quotelev1">&gt;     is generated , it should be sent to the desination node at once.
</span><br>
<span class="quotelev1">&gt;     And then, the source node continue to work on generating the next
</span><br>
<span class="quotelev1">&gt;     package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (3) There is only one destination node , which must receive all data
</span><br>
<span class="quotelev1">&gt;     package generated from the source nodes.
</span><br>
<span class="quotelev1">&gt;     Because the source and destination nodes may work asynchronously,
</span><br>
<span class="quotelev1">&gt;     the destination node should not wait for a specific source node until
</span><br>
<span class="quotelev1">&gt;     the source node sends out its data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The destination node should be able to receive data package
</span><br>
<span class="quotelev1">&gt;     from anyone source node whenever the data package is available in a
</span><br>
<span class="quotelev1">&gt;     source node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What MPI function should be used to implement the protocol above ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use MPI_Send/Recv, they are blocking function. The destination
</span><br>
<span class="quotelev1">&gt; node have to wait for one node until its data is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The communication overhead is too high.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use MPI_Bsend, the destination node has to use MPI_Recv to ,
</span><br>
<span class="quotelev1">&gt; a Blocking receive for a message .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This can make the destination node wait for only one source node and
</span><br>
<span class="quotelev1">&gt; actually other source nodes may have data avaiable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help or comment is appreciated !!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dec. 28 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________
</span><br>
<span class="quotelev1">&gt; It?s the same Hotmail&#174;. If by ?same? you mean up to 70% faster.
</span><br>
<span class="quotelev1">&gt; <a href="http://windowslive.com/online/hotmail?ocid=TXT_TAGLM_WL_hotmail_acq_broad1_122008">http://windowslive.com/online/hotmail?ocid=TXT_TAGLM_WL_hotmail_acq_broad1_122008</a>_______________________________________________
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
<li><strong>Next message:</strong> <a href="7615.php">Sangamesh B: "[OMPI users] HP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>Previous message:</strong> <a href="7613.php">Win Than Aung: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>In reply to:</strong> <a href="7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7616.php">Biagio Lucini: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
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
