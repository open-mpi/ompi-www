<?
$subject_val = "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 10:16:52 2013" -->
<!-- isoreceived="20130708141652" -->
<!-- sent="Mon, 8 Jul 2013 14:16:46 +0000" -->
<!-- isosent="20130708141646" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F273E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+OO3AV8JS2wmK3xVenJFU1hO8uP=Fghk9JDkEmHoc-LBkK3MQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 10:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Previous message:</strong> <a href="22271.php">Rolf vandeVaart: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22256.php">Michael Thomadakis: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI may have get confused if you end up having different receive queue specifications in your IB setup (in the &quot;openib&quot; Byte Transfer Layer (BTL) plugin that is used for point-to-point MPI communication transport in OMPI).  
<br>
<p>If Open MPI doesn't work out of the box for you in a job that utilizes both QDR and FDR, you may need to override some defaults so that all receives queues are the same in both QDR-enabled nodes and FDR-enabled nodes.
<br>
<p><p>On Jul 5, 2013, at 6:26 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry on the mvapich2 reference :) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All nodes are attached over a common 1GigE network. We wish ofcourse that if a node-pair is connected via a higher-speed fabric as well (IB FDR or 10GigE) then that this would be leveraged instead of the common 1GigE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One question: suppose that we use nodes having either FDR or QDR IB interfaces available, connected to one common IB fabric, all defined over a common IP subnet: Will OpenMPI have any problem with this? Can MPI communication take place over this type of hybrid IB fabric? We already have a sub-cluster with QDR HCAs and we are attaching it to IB fabric with FDR &quot;backbone&quot; and another cluster with FDR HCAs. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you think there may be some issue with this? The HCAs are FDR and QDR Mellanox devices and the switching is also over FDR Mellanox fabric. Mellanox claims that at the IB level this is doable (i.e., FDR link pairs talk to each other at FDR speeds and QDR link pairs at QDR).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess if we use the RC connection types then it does not matter to OpenMPI. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks ....
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 5, 2013 at 4:59 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I can't speak for MVAPICH - you probably need to ask them about this scenario. OMPI will automatically select whatever available transport that can reach the intended process. This requires that each communicating pair of processes have access to at least one common transport.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if a process that is on a node with only 1G-E wants to communicate with another process, then the node where that other process is running must also have access to a compatible Ethernet interface (1G can talk to 10G, so they can have different capabilities) on that subnet (or on a subnet that knows how to route to the other one). If both nodes have 10G-E as well as 1G-E interfaces, then OMPI will automatically take the 10G interface as it is the faster of the two.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note this means that if a process is on a node that only has IB, and wants to communicate to a process on a node that only has 1G-E, then the two processes cannot communicate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 5, 2013, at 2:34 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We area seriously considering deploying OpenMPI 1.6.5 for production (and 1.7.2 for testing) on HPC clusters which consists of nodes with different types of networking interfaces.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) Interface selection
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are using OpenMPI 1.6.5 and was wondering how one would go about selecting at run time which networking interface to use for MPI communications in case that both IB, 10GigE and 1 GigE are present. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This issues arises in a cluster with nodes that are equipped with different types of interfaces:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some have both IB-QDR or FDR and 10- and 1-GigE. Others only have 10-GigE and 1-GigE and simply others only 1-GigE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) OpenMPI 1.6.5 level of support for Heterogeneous Fabric
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can OpenMPI support running an MPI application using a mix of nodes with all of the above networking interface combinations ? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   2.a) Can the same MPI code (SPMD or MPMD) have a subset of its ranks run on nodes with QDR IB and another subset on FDR IB simultaneously? These are Mellanox QDR and FDR HCAs. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox mentioned to us that they support both QDR and FDR HCAs attached to the same IB subnet. Do you think MVAPICH2 will have any issue with this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2.b) Can the same MPI code (SPMD or MPMD) have a subset of its ranks run on nodes with IB and another subset over 10GiGE simultaneously? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is imagine nodes I1, I2, ..., IN having say QDR HCAs and nodes G1, G2, GM having only 10GigE interfaces. Could we have the same MPI application run across both types of nodes? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or should there be say 2 communicators with one of them explicitly overlaid on a IB only subnet and the other on a 10GigE only subnet? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if the above are not very clear.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you much
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Previous message:</strong> <a href="22271.php">Rolf vandeVaart: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22256.php">Michael Thomadakis: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
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
