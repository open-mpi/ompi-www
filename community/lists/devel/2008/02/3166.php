<?
$subject_val = "[OMPI devel] Datasize confusion in MPI_Write can lead to data los!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 11:50:27 2008" -->
<!-- isoreceived="20080208165027" -->
<!-- sent="Fri, 8 Feb 2008 17:50:37 +0000" -->
<!-- isosent="20080208175037" -->
<!-- name="Christoph Niethammer" -->
<!-- email="christoph.niethammer_at_[hidden]" -->
<!-- subject="[OMPI devel] Datasize confusion in MPI_Write can lead to data los!" -->
<!-- id="200802081750.44303.christoph.niethammer_at_web.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Datasize confusion in MPI_Write can lead to data los!<br>
<strong>From:</strong> Christoph Niethammer (<em>christoph.niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 12:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3167.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3165.php">Brian W. Barrett: "Re: [OMPI devel] 3rd party code contributions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3168.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Reply:</strong> <a href="3168.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I tested openMPI at HLRS for some time without detecting new problems in the 
<br>
implementation but now I recognized some awful ones with MPI_Write which can 
<br>
lead to data los:
<br>
<p>When creating a struct for a mixed datatype like
<br>
<p>struct {
<br>
&nbsp;&nbsp;short a;
<br>
&nbsp;&nbsp;int b;
<br>
}
<br>
<p>the C-compiler introduce a gap of 2 bytes in the data representation for this 
<br>
type due to the 4byte alignment of the integer on 32bit systems.
<br>
<p>If I now try to use MPI_File_write to write these data to a file and use 
<br>
MPI_SHORT_INT as mpi_datatype this leads to a data los.
<br>
<p>I located the problem at the combined use of &quot;write&quot; and MPI_Type_size in 
<br>
MPI_File_write.
<br>
So MPI_Type_size(MPI_SHORT_INT) returns 6 bytes where the struct uses 8 bytes 
<br>
in memory as there is a gap of 2 bytes. The write function in ad_write.c now 
<br>
leads to the los of the data because the gaps are not within the calculation 
<br>
of the complete data size to be written into the file.
<br>
<p>This problem occures also in the other io functions.
<br>
As far as I could find out the problem seems not to be present with derived 
<br>
data types.
<br>
<p>The question is now how to &quot;fix&quot;:
<br>
i) Either the MPI_Standard is not clear in this point and the data types 
<br>
MPI_SHORT_INT, MPI_DOUBLE_INT, ... should be forbidden to be used with 
<br>
structs of these types,
<br>
ii) Or the implementation of the MPI_Type_size function has to be modified to 
<br>
return the value of eg. true_ub which contains the correct value
<br>
iii) Or the MPI_File_write function has not to use the write function in 
<br>
the &quot;continues&quot; way on the data and should take care of the gaps.
<br>
<p>Regards 
<br>
<p>Christoph Niethammer
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3166/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3167.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3165.php">Brian W. Barrett: "Re: [OMPI devel] 3rd party code contributions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3168.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>Reply:</strong> <a href="3168.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
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
