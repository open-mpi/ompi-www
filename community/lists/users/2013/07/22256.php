<?
$subject_val = "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  5 18:26:39 2013" -->
<!-- isoreceived="20130705222639" -->
<!-- sent="Fri, 5 Jul 2013 17:26:34 -0500" -->
<!-- isosent="20130705222634" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics" -->
<!-- id="CA+OO3AV8JS2wmK3xVenJFU1hO8uP=Fghk9JDkEmHoc-LBkK3MQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E2AEDABC-4E43-41B7-9192-C7799467F324_at_open-mpi.org" -->
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
<strong>From:</strong> Michael Thomadakis (<em>drmichaelt7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-05 18:26:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22257.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Previous message:</strong> <a href="22255.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>In reply to:</strong> <a href="22255.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22257.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Reply:</strong> <a href="22257.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Reply:</strong> <a href="22272.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry on the mvapich2 reference :)
<br>
<p>All nodes are attached over a common 1GigE network. We wish ofcourse that
<br>
if a node-pair is connected via a higher-speed fabric *as well* (IB FDR or
<br>
10GigE) then that this would be leveraged instead of the common 1GigE.
<br>
<p>One question: suppose that we use nodes having either FDR or QDR IB
<br>
interfaces available, connected to one common IB fabric, all defined over a
<br>
common IP subnet: Will OpenMPI have any problem with this? Can MPI
<br>
communication take place over this type of hybrid IB fabric? We already
<br>
have a sub-cluster with QDR HCAs and we are attaching it to IB fabric with
<br>
FDR &quot;backbone&quot; and another cluster with FDR HCAs.
<br>
<p>Do you think there may be some issue with this? The HCAs are FDR and QDR
<br>
Mellanox devices and the switching is also over FDR Mellanox fabric.
<br>
Mellanox claims that at the IB level this is doable (i.e., FDR link pairs
<br>
talk to each other at FDR speeds and QDR link pairs at QDR).
<br>
<p>I guess if we use the RC connection types then it does not matter to
<br>
OpenMPI.
<br>
<p>thanks ....
<br>
Michael
<br>
<p><p><p><p>On Fri, Jul 5, 2013 at 4:59 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I can't speak for MVAPICH - you probably need to ask them about this
</span><br>
<span class="quotelev1">&gt; scenario. OMPI will automatically select whatever available transport that
</span><br>
<span class="quotelev1">&gt; can reach the intended process. This requires that each communicating pair
</span><br>
<span class="quotelev1">&gt; of processes have access to at least one common transport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if a process that is on a node with only 1G-E wants to communicate with
</span><br>
<span class="quotelev1">&gt; another process, then the node where that other process is running must
</span><br>
<span class="quotelev1">&gt; also have access to a compatible Ethernet interface (1G can talk to 10G, so
</span><br>
<span class="quotelev1">&gt; they can have different capabilities) on that subnet (or on a subnet that
</span><br>
<span class="quotelev1">&gt; knows how to route to the other one). If both nodes have 10G-E as well as
</span><br>
<span class="quotelev1">&gt; 1G-E interfaces, then OMPI will automatically take the 10G interface as it
</span><br>
<span class="quotelev1">&gt; is the faster of the two.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note this means that if a process is on a node that only has IB, and wants
</span><br>
<span class="quotelev1">&gt; to communicate to a process on a node that only has 1G-E, then the two
</span><br>
<span class="quotelev1">&gt; processes cannot communicate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 5, 2013, at 2:34 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We area seriously considering deploying OpenMPI 1.6.5 for production (and
</span><br>
<span class="quotelev1">&gt; 1.7.2 for testing) on HPC clusters which consists of nodes with *different
</span><br>
<span class="quotelev1">&gt; types of networking interfaces*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Interface selection
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are using OpenMPI 1.6.5 and was wondering how one would go about
</span><br>
<span class="quotelev1">&gt; selecting* at run time* which networking interface to use for MPI
</span><br>
<span class="quotelev1">&gt; communications in case that both IB, 10GigE and 1 GigE are present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This issues arises in a cluster with nodes that are equipped with
</span><br>
<span class="quotelev1">&gt; different types of interfaces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Some *have both IB-QDR or FDR and 10- and 1-GigE. Others *only* have
</span><br>
<span class="quotelev1">&gt; 10-GigE and 1-GigE and simply others only 1-GigE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) OpenMPI 1.6.5 level of support for Heterogeneous Fabric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can OpenMPI support running an MPI application using a mix of nodes with
</span><br>
<span class="quotelev1">&gt; all of the above networking interface combinations ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   2.a) Can the same MPI code (SPMD or MPMD) have a subset of its ranks run
</span><br>
<span class="quotelev1">&gt; on nodes with QDR IB and another subset on FDR IB simultaneously? These are
</span><br>
<span class="quotelev1">&gt; Mellanox QDR and FDR HCAs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mellanox mentioned to us that they support both QDR and FDR HCAs attached
</span><br>
<span class="quotelev1">&gt; to the same IB subnet. Do you think MVAPICH2 will have any issue with this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.b) Can the same MPI code (SPMD or MPMD) have a subset of its ranks run
</span><br>
<span class="quotelev1">&gt; on nodes with IB and another subset over 10GiGE simultaneously?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is imagine nodes I1, I2, ..., IN having say QDR HCAs and nodes G1,
</span><br>
<span class="quotelev1">&gt; G2, GM having only 10GigE interfaces. Could we have the same MPI
</span><br>
<span class="quotelev1">&gt; application run across both types of nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or should there be say 2 communicators with one of them explicitly
</span><br>
<span class="quotelev1">&gt; overlaid on a IB only subnet and the other on a 10GigE only subnet?
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22257.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Previous message:</strong> <a href="22255.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>In reply to:</strong> <a href="22255.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22257.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Reply:</strong> <a href="22257.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Reply:</strong> <a href="22272.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
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
