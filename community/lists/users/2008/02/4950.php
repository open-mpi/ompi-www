<?
$subject_val = "[OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  2 04:38:12 2008" -->
<!-- isoreceived="20080202093812" -->
<!-- sent="Sat, 2 Feb 2008 09:37:50 +0000 (GMT)" -->
<!-- isosent="20080202093750" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error" -->
<!-- id="Pine.GSO.4.53.0802020935040.16169_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.23.1201712425.10350.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error<br>
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-02 04:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4951.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4952.php">George Bosilca: "Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<li><strong>Reply:</strong> <a href="4952.php">George Bosilca: "Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In one of our big runs (512 cpus) the code fails and produces on a list
<br>
of nodes the following type of error:
<br>
<p>I have searched the FAQs but could not find an answer there.
<br>
There are difficulties getting the code to run because of its shear size
<br>
but there is no other indication of the problem.
<br>
<p>Does the following error message mean the some of the nodes have given up?
<br>
<p><p>mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error
<br>
([361eca8[m2234][0,1,283][m2317, 16][0,)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1Bad address,422(3)
<br>
][[
<br>
/ws/hpc-ct-7.1/builds/7.1.build-ct7.1-003c/ompi-ct7.1/ompi/mca/btl/tcp/btl_tcp_frag.c:114:mca_btl_tcp
<br>
_frag_send]
<br>
/ws/hpc-ct-7.1/builds/7.1.build-ct7.1-003c/ompi-ct7.1/ompi/mca/btl/tcp/btl_tcp_frag.c[m22
<br>
41][0,1,430][m2140[m2152][0,1,150][mca_btl_tcp_frag_send: writev error (3c759a8,
<br>
16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bad address(3)
<br>
<p><p>Lydia
<br>
<p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4951.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4952.php">George Bosilca: "Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<li><strong>Reply:</strong> <a href="4952.php">George Bosilca: "Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
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
