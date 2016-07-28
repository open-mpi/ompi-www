<?
$subject_val = "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  5 17:59:34 2013" -->
<!-- isoreceived="20130705215934" -->
<!-- sent="Fri, 5 Jul 2013 14:59:27 -0700" -->
<!-- isosent="20130705215927" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics" -->
<!-- id="E2AEDABC-4E43-41B7-9192-C7799467F324_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+OO3AW1-RrPxLDBzsBJcuDUESMMndQXD2Vo_dVuRa_-gC6b7w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-05 17:59:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22256.php">Michael Thomadakis: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Previous message:</strong> <a href="22254.php">Michael Thomadakis: "[OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>In reply to:</strong> <a href="22254.php">Michael Thomadakis: "[OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22256.php">Michael Thomadakis: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Reply:</strong> <a href="22256.php">Michael Thomadakis: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak for MVAPICH - you probably need to ask them about this scenario. OMPI will automatically select whatever available transport that can reach the intended process. This requires that each communicating pair of processes have access to at least one common transport.
<br>
<p>So if a process that is on a node with only 1G-E wants to communicate with another process, then the node where that other process is running must also have access to a compatible Ethernet interface (1G can talk to 10G, so they can have different capabilities) on that subnet (or on a subnet that knows how to route to the other one). If both nodes have 10G-E as well as 1G-E interfaces, then OMPI will automatically take the 10G interface as it is the faster of the two.
<br>
<p>Note this means that if a process is on a node that only has IB, and wants to communicate to a process on a node that only has 1G-E, then the two processes cannot communicate.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jul 5, 2013, at 2:34 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We area seriously considering deploying OpenMPI 1.6.5 for production (and 1.7.2 for testing) on HPC clusters which consists of nodes with different types of networking interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Interface selection
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are using OpenMPI 1.6.5 and was wondering how one would go about selecting at run time which networking interface to use for MPI communications in case that both IB, 10GigE and 1 GigE are present. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This issues arises in a cluster with nodes that are equipped with different types of interfaces:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some have both IB-QDR or FDR and 10- and 1-GigE. Others only have 10-GigE and 1-GigE and simply others only 1-GigE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) OpenMPI 1.6.5 level of support for Heterogeneous Fabric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can OpenMPI support running an MPI application using a mix of nodes with all of the above networking interface combinations ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   2.a) Can the same MPI code (SPMD or MPMD) have a subset of its ranks run on nodes with QDR IB and another subset on FDR IB simultaneously? These are Mellanox QDR and FDR HCAs. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mellanox mentioned to us that they support both QDR and FDR HCAs attached to the same IB subnet. Do you think MVAPICH2 will have any issue with this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.b) Can the same MPI code (SPMD or MPMD) have a subset of its ranks run on nodes with IB and another subset over 10GiGE simultaneously? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is imagine nodes I1, I2, ..., IN having say QDR HCAs and nodes G1, G2, GM having only 10GigE interfaces. Could we have the same MPI application run across both types of nodes? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or should there be say 2 communicators with one of them explicitly overlaid on a IB only subnet and the other on a 10GigE only subnet? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know if the above are not very clear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you much
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22255/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22256.php">Michael Thomadakis: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Previous message:</strong> <a href="22254.php">Michael Thomadakis: "[OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>In reply to:</strong> <a href="22254.php">Michael Thomadakis: "[OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22256.php">Michael Thomadakis: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Reply:</strong> <a href="22256.php">Michael Thomadakis: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
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
