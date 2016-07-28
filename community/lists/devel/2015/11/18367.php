<?
$subject_val = "[OMPI devel] interfaces gone?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 12:13:08 2015" -->
<!-- isoreceived="20151112171308" -->
<!-- sent="Thu, 12 Nov 2015 11:13:03 -0600" -->
<!-- isosent="20151112171303" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] interfaces gone?" -->
<!-- id="5644C89F.80305_at_central.uh.edu" -->
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
<strong>Subject:</strong> [OMPI devel] interfaces gone?<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-12 12:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18368.php">Edgar Gabriel: "Re: [OMPI devel] interfaces gone?"</a>
<li><strong>Previous message:</strong> <a href="18366.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18368.php">Edgar Gabriel: "Re: [OMPI devel] interfaces gone?"</a>
<li><strong>Reply:</strong> <a href="18368.php">Edgar Gabriel: "Re: [OMPI devel] interfaces gone?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an interesting observation on master, for whatever reason the new 
<br>
non-blocking collective I/O interfaces don't seem to be generated 
<br>
anymore correctly. Does anybody have an idea what could cause that?
<br>
<p>/home/gabriel/ompi-tests/mpi2basic_tests/file/read_all.c:416: undefined 
<br>
reference to `MPI_File_iread_all'
<br>
/home/gabriel/ompi-tests/mpi2basic_tests/file/read_all.c:463: undefined 
<br>
reference to `MPI_File_iread_at_all'
<br>
/home/gabriel/ompi-tests/mpi2basic_tests/file/read_all.c:464: undefined 
<br>
reference to `MPI_File_iread_at_all'
<br>
write_all.o: In function `write_all_test':
<br>
/home/gabriel/ompi-tests/mpi2basic_tests/file/write_all.c:612: undefined 
<br>
reference to `MPI_File_iwrite_all'
<br>
/home/gabriel/ompi-tests/mpi2basic_tests/file/write_all.c:667: undefined 
<br>
reference to `MPI_File_iwrite_at_all'
<br>
/home/gabriel/ompi-tests/mpi2basic_tests/file/write_all.c:668: undefined 
<br>
reference to `MPI_File_iwrite_at_all'
<br>
<p><p>Thanks
<br>
Edgar
<br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18368.php">Edgar Gabriel: "Re: [OMPI devel] interfaces gone?"</a>
<li><strong>Previous message:</strong> <a href="18366.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18368.php">Edgar Gabriel: "Re: [OMPI devel] interfaces gone?"</a>
<li><strong>Reply:</strong> <a href="18368.php">Edgar Gabriel: "Re: [OMPI devel] interfaces gone?"</a>
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
