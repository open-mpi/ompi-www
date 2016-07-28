<?
$subject_val = "[OMPI devel] Bug in opal sos changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 13:25:53 2010" -->
<!-- isoreceived="20100518172553" -->
<!-- sent="Tue, 18 May 2010 13:25:07 -0400" -->
<!-- isosent="20100518172507" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug in opal sos changes" -->
<!-- id="4BF2CD73.4020501_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] Bug in opal sos changes<br>
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 13:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7969.php">Jeff Squyres: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Previous message:</strong> <a href="7967.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7969.php">Jeff Squyres: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Reply:</strong> <a href="7969.php">Jeff Squyres: "Re: [OMPI devel] Bug in opal sos changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am getting SEGVs while running the IMB-MPI1 tests.  I believe the 
<br>
problem has to do with changes made to the group_init.c file last 
<br>
night.  The error occurs in the call to MPI_Comm_split. 
<br>
<p>&nbsp;There were 4 changes in the file that look like this:
<br>
OLD:
<br>
if (OMPI_ERROR == new_group-&gt;grp_f_to_c_index)
<br>
<p>NEW:
<br>
if (OMPI_SUCCESS != new_group-&gt;grp_f_to_c_index)
<br>
<p>If I change it back, things work.  I understand the idea of changing the 
<br>
logic, but maybe that does not apply in this case?    When running with 
<br>
np=2, the value of new_group-&gt;grp_f_to_c_index is 4, thereby not 
<br>
equaling OMPI_SUCCESS and we end up in an error condition which results 
<br>
in a null pointer later on.
<br>
<p>Am I the only that has run into this?
<br>
<p>Rolf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7969.php">Jeff Squyres: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Previous message:</strong> <a href="7967.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7969.php">Jeff Squyres: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Reply:</strong> <a href="7969.php">Jeff Squyres: "Re: [OMPI devel] Bug in opal sos changes"</a>
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
