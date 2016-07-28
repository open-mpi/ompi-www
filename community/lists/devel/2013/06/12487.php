<?
$subject_val = "[OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 24 09:22:13 2013" -->
<!-- isoreceived="20130624132213" -->
<!-- sent="Mon, 24 Jun 2013 15:22:03 +0200" -->
<!-- isosent="20130624132203" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup" -->
<!-- id="51C847FB.1050905_at_dkrz.de" -->
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
<strong>Subject:</strong> [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-24 09:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12488.php">George Bosilca: "Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<li><strong>Previous message:</strong> <a href="12486.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12488.php">George Bosilca: "Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<li><strong>Reply:</strong> <a href="12488.php">George Bosilca: "Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>the following code exposes a problem we are experiencing with our OpenMPI
<br>
1.6.[24] installations.
<br>
<p>My colleague Moritz Hanke isolated the problem to an interaction of
<br>
MPI_Type_create_struct with a previous MPI_Type_dup. When MPI_Type_dup on line
<br>
67 of the example is replaced with a straight assignment of MPI_INT to sends[0],
<br>
the problem goes away.
<br>
<p>We are using a patched version of OpenMPI which includes the changes from r28319.
<br>
<p>Regards, Thomas Jahns
<br>
<pre>
-- 
Thomas Jahns
DKRZ GmbH, Department: Application software
Deutsches Klimarechenzentrum
Bundesstra&#223;e 45a
D-20146 Hamburg
Phone: +49-40-460094-151
Fax: +49-40-460094-270
Email: Thomas Jahns &lt;jahns_at_[hidden]&gt;

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12487/openmpi_dup.c">openmpi_dup.c</a>
</ul>
<!-- attachment="openmpi_dup.c" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12487/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12488.php">George Bosilca: "Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<li><strong>Previous message:</strong> <a href="12486.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12488.php">George Bosilca: "Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<li><strong>Reply:</strong> <a href="12488.php">George Bosilca: "Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
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
