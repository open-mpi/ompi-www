<?
$subject_val = "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  5 22:37:25 2013" -->
<!-- isoreceived="20130706023725" -->
<!-- sent="Fri, 5 Jul 2013 21:37:21 -0500" -->
<!-- isosent="20130706023721" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics" -->
<!-- id="CA+OO3AV4AjL-0wjB4B-tK5uvEVD0_+xEa41qEy+H+r=vP4d+Wg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2E6088BD-FB89-4DFB-B20F-B1A50EB0CB32_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-07-05 22:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22261.php">Ilias Miroslav: "[OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Previous message:</strong> <a href="22259.php">Ralph Castain: "Re: [OMPI users] checkpoint-restart of version 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="22257.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22272.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great ... thanks.   We will try it out as soon as the common backbone IB is
<br>
in place.
<br>
<p>cheers
<br>
Michael
<br>
<p><p><p>On Fri, Jul 5, 2013 at 6:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As long as the IB interfaces can communicate to each other, you should be
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 5, 2013, at 3:26 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry on the mvapich2 reference :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All nodes are attached over a common 1GigE network. We wish ofcourse that
</span><br>
<span class="quotelev1">&gt; if a node-pair is connected via a higher-speed fabric *as well* (IB FDR
</span><br>
<span class="quotelev1">&gt; or 10GigE) then that this would be leveraged instead of the common 1GigE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One question: suppose that we use nodes having either FDR or QDR IB
</span><br>
<span class="quotelev1">&gt; interfaces available, connected to one common IB fabric, all defined over a
</span><br>
<span class="quotelev1">&gt; common IP subnet: Will OpenMPI have any problem with this? Can MPI
</span><br>
<span class="quotelev1">&gt; communication take place over this type of hybrid IB fabric? We already
</span><br>
<span class="quotelev1">&gt; have a sub-cluster with QDR HCAs and we are attaching it to IB fabric with
</span><br>
<span class="quotelev1">&gt; FDR &quot;backbone&quot; and another cluster with FDR HCAs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you think there may be some issue with this? The HCAs are FDR and QDR
</span><br>
<span class="quotelev1">&gt; Mellanox devices and the switching is also over FDR Mellanox fabric.
</span><br>
<span class="quotelev1">&gt; Mellanox claims that at the IB level this is doable (i.e., FDR link pairs
</span><br>
<span class="quotelev1">&gt; talk to each other at FDR speeds and QDR link pairs at QDR).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess if we use the RC connection types then it does not matter to
</span><br>
<span class="quotelev1">&gt; OpenMPI.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't speak for MVAPICH - you probably need to ask them about this
</span><br>
<span class="quotelev2">&gt;&gt; scenario. OMPI will automatically select whatever available transport that
</span><br>
<span class="quotelev2">&gt;&gt; can reach the intended process. This requires that each communicating pair
</span><br>
<span class="quotelev2">&gt;&gt; of processes have access to at least one common transport.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So if a process that is on a node with only 1G-E wants to communicate
</span><br>
<span class="quotelev2">&gt;&gt; with another process, then the node where that other process is running
</span><br>
<span class="quotelev2">&gt;&gt; must also have access to a compatible Ethernet interface (1G can talk to
</span><br>
<span class="quotelev2">&gt;&gt; 10G, so they can have different capabilities) on that subnet (or on a
</span><br>
<span class="quotelev2">&gt;&gt; subnet that knows how to route to the other one). If both nodes have 10G-E
</span><br>
<span class="quotelev2">&gt;&gt; as well as 1G-E interfaces, then OMPI will automatically take the 10G
</span><br>
<span class="quotelev2">&gt;&gt; interface as it is the faster of the two.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note this means that if a process is on a node that only has IB, and
</span><br>
<span class="quotelev2">&gt;&gt; wants to communicate to a process on a node that only has 1G-E, then the
</span><br>
<span class="quotelev2">&gt;&gt; two processes cannot communicate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 5, 2013, at 2:34 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We area seriously considering deploying OpenMPI 1.6.5 for production (and
</span><br>
<span class="quotelev2">&gt;&gt; 1.7.2 for testing) on HPC clusters which consists of nodes with *different
</span><br>
<span class="quotelev2">&gt;&gt; types of networking interfaces*.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) Interface selection
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are using OpenMPI 1.6.5 and was wondering how one would go about
</span><br>
<span class="quotelev2">&gt;&gt; selecting* at run time* which networking interface to use for MPI
</span><br>
<span class="quotelev2">&gt;&gt; communications in case that both IB, 10GigE and 1 GigE are present.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This issues arises in a cluster with nodes that are equipped with
</span><br>
<span class="quotelev2">&gt;&gt; different types of interfaces:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Some *have both IB-QDR or FDR and 10- and 1-GigE. Others *only* have
</span><br>
<span class="quotelev2">&gt;&gt; 10-GigE and 1-GigE and simply others only 1-GigE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) OpenMPI 1.6.5 level of support for Heterogeneous Fabric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can OpenMPI support running an MPI application using a mix of nodes with
</span><br>
<span class="quotelev2">&gt;&gt; all of the above networking interface combinations ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   2.a) Can the same MPI code (SPMD or MPMD) have a subset of its ranks
</span><br>
<span class="quotelev2">&gt;&gt; run on nodes with QDR IB and another subset on FDR IB simultaneously? These
</span><br>
<span class="quotelev2">&gt;&gt; are Mellanox QDR and FDR HCAs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox mentioned to us that they support both QDR and FDR HCAs attached
</span><br>
<span class="quotelev2">&gt;&gt; to the same IB subnet. Do you think MVAPICH2 will have any issue with this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2.b) Can the same MPI code (SPMD or MPMD) have a subset of its ranks run
</span><br>
<span class="quotelev2">&gt;&gt; on nodes with IB and another subset over 10GiGE simultaneously?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is imagine nodes I1, I2, ..., IN having say QDR HCAs and nodes G1,
</span><br>
<span class="quotelev2">&gt;&gt; G2, GM having only 10GigE interfaces. Could we have the same MPI
</span><br>
<span class="quotelev2">&gt;&gt; application run across both types of nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or should there be say 2 communicators with one of them explicitly
</span><br>
<span class="quotelev2">&gt;&gt; overlaid on a IB only subnet and the other on a 10GigE only subnet?
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22260/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22261.php">Ilias Miroslav: "[OMPI users] OpenMPI 1.6.5 and IBM-AIX"</a>
<li><strong>Previous message:</strong> <a href="22259.php">Ralph Castain: "Re: [OMPI users] checkpoint-restart of version 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="22257.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22272.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
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
