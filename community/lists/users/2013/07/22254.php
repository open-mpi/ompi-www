<?
$subject_val = "[OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  5 17:34:52 2013" -->
<!-- isoreceived="20130705213452" -->
<!-- sent="Fri, 5 Jul 2013 16:34:47 -0500" -->
<!-- isosent="20130705213447" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="[OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics" -->
<!-- id="CA+OO3AW1-RrPxLDBzsBJcuDUESMMndQXD2Vo_dVuRa_-gC6b7w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics<br>
<strong>From:</strong> Michael Thomadakis (<em>drmichaelt7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-05 17:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22255.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Previous message:</strong> <a href="22253.php">Ben: "[OMPI users] using the xrc queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22255.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Reply:</strong> <a href="22255.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OpenMPI
<br>
<p>We area seriously considering deploying OpenMPI 1.6.5 for production (and
<br>
1.7.2 for testing) on HPC clusters which consists of nodes with *different
<br>
types of networking interfaces*.
<br>
<p><p>1) Interface selection
<br>
<p>We are using OpenMPI 1.6.5 and was wondering how one would go about
<br>
selecting* at run time* which networking interface to use for MPI
<br>
communications in case that both IB, 10GigE and 1 GigE are present.
<br>
<p>This issues arises in a cluster with nodes that are equipped with different
<br>
types of interfaces:
<br>
<p>*Some *have both IB-QDR or FDR and 10- and 1-GigE. Others *only* have
<br>
10-GigE and 1-GigE and simply others only 1-GigE.
<br>
<p><p>2) OpenMPI 1.6.5 level of support for Heterogeneous Fabric
<br>
<p>Can OpenMPI support running an MPI application using a mix of nodes with
<br>
all of the above networking interface combinations ?
<br>
<p>&nbsp;&nbsp;2.a) Can the same MPI code (SPMD or MPMD) have a subset of its ranks run
<br>
on nodes with QDR IB and another subset on FDR IB simultaneously? These are
<br>
Mellanox QDR and FDR HCAs.
<br>
<p>Mellanox mentioned to us that they support both QDR and FDR HCAs attached
<br>
to the same IB subnet. Do you think MVAPICH2 will have any issue with this?
<br>
<p>2.b) Can the same MPI code (SPMD or MPMD) have a subset of its ranks run on
<br>
nodes with IB and another subset over 10GiGE simultaneously?
<br>
<p>That is imagine nodes I1, I2, ..., IN having say QDR HCAs and nodes G1, G2,
<br>
GM having only 10GigE interfaces. Could we have the same MPI application
<br>
run across both types of nodes?
<br>
<p>Or should there be say 2 communicators with one of them explicitly overlaid
<br>
on a IB only subnet and the other on a 10GigE only subnet?
<br>
<p><p>Please let me know if the above are not very clear.
<br>
<p>Thank you much
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22254/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22255.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Previous message:</strong> <a href="22253.php">Ben: "[OMPI users] using the xrc queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22255.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Reply:</strong> <a href="22255.php">Ralph Castain: "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
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
