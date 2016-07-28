<?
$subject_val = "[OMPI users] Regression in MPI_File_close?!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 31 01:27:12 2016" -->
<!-- isoreceived="20160531052712" -->
<!-- sent="Tue, 31 May 2016 15:27:09 +1000" -->
<!-- isosent="20160531052709" -->
<!-- name="Cihan Altinay" -->
<!-- email="c.altinay_at_[hidden]" -->
<!-- subject="[OMPI users] Regression in MPI_File_close?!" -->
<!-- id="574D20AD.2080704_at_uq.edu.au" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Regression in MPI_File_close?!<br>
<strong>From:</strong> Cihan Altinay (<em>c.altinay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-31 01:27:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29334.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Previous message:</strong> <a href="29332.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29334.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="29334.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>I recently upgraded my distribution-supplied OpenMPI packages (debian) 
<br>
from 1.6.5 to 1.10.2 and the attached test is no longer guaranteed to 
<br>
produce the expected output.
<br>
In plain English what the test is doing is:
<br>
1) open a file in parallel (all on the same local ext3/4 filesystem),
<br>
2) use MPI_File_write_at() or MPI_File_write_shared() to write to it,
<br>
3) close the file using MPI_File_close(),
<br>
4) then check the file size (either by stat(), or by fseek+ftell)
<br>
<p>My reading of the standard is that MPI_File_close() is a collective 
<br>
operation so I should reliably get the correct file size in step 4. 
<br>
However, while this worked with version 1.6.5 and with Intel MPI this is 
<br>
no longer the case with the current OpenMPI version.
<br>
I was able to confirm the same behaviour on a fresh Ubuntu 16.0.4 
<br>
install in a VM.
<br>
The more ranks I use the more likely I get a wrong file size.
<br>
<p>Is there anything I'm missing or is this a regression?
<br>
<p>Thanks,
<br>
Cihan
<br>
<p><pre>
-- 
Cihan Altinay
Computer Scientist, Centre for Geoscience Computing
eResearch Analyst,  Queensland Cyber Infrastructure Foundation
The University of Queensland
T: +61 7 334 64118 / F: +61 7 334 64134

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29333/mpiiotest.c">mpiiotest.c</a>
</ul>
<!-- attachment="mpiiotest.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29334.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Previous message:</strong> <a href="29332.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29334.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="29334.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
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
