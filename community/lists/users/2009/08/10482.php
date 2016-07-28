<?
$subject_val = "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile 	errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 12:10:59 2009" -->
<!-- isoreceived="20090825161059" -->
<!-- sent="Tue, 25 Aug 2009 21:40:55 +0530" -->
<!-- isosent="20090825161055" -->
<!-- name="Jayanta Roy" -->
<!-- email="jay.roys_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile 	errors" -->
<!-- id="f6a174940908250910r608b90a4p2c996fd88c777039_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="00b801ca2582$0f3cf5f0$2db6e1d0$_at_ucsd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile 	errors<br>
<strong>From:</strong> Jayanta Roy (<em>jay.roys_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-25 12:10:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10483.php">Jayanta Roy: "[OMPI users] explicit routing for multiple network interfaces"</a>
<li><strong>Previous message:</strong> <a href="10481.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10480.php">Jason Palmer: "[OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10484.php">Jason Palmer: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using Openmpi (version 1.2.2) for MPI data transfer using non-blocking
<br>
MPI calls like MPI_Isend, MPI_Irecv etc. I am using &quot;--mca
<br>
btl_tcp_if_include eth0,eth1&quot; to use both the eth link for data transfer
<br>
within 48 nodes.  Now I have added eth2 and eth3 links on the 32 compute
<br>
nodes. My aim is to share the high speed data within 32 compute nodes
<br>
through eth2 and eth3. But I can't include this as part of &quot;mca&quot; as the rest
<br>
of 16 nodes do not have these additional interfaces. In MPI/Openmp can one
<br>
specify explicit routing table within a set of nodes? Such that I can edit
<br>
/etc/host for additional hostname with these new interfaces and add these
<br>
hosts in the mpi hostfile.
<br>
<p>Regards,
<br>
Jayanta
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10482/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10483.php">Jayanta Roy: "[OMPI users] explicit routing for multiple network interfaces"</a>
<li><strong>Previous message:</strong> <a href="10481.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10480.php">Jason Palmer: "[OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10484.php">Jason Palmer: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
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
