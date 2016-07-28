<?
$subject_val = "[OMPI users] OpenIB problem: error polling HP CQ...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 03:50:53 2008" -->
<!-- isoreceived="20080529075053" -->
<!-- sent="Thu, 29 May 2008 01:50:39 -0600" -->
<!-- isosent="20080529075039" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="[OMPI users] OpenIB problem: error polling HP CQ..." -->
<!-- id="d105ee120805290050j63a8efe6h4f454bd0087b08a0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenIB problem: error polling HP CQ...<br>
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 03:50:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5747.php">Lee Amy: "[OMPI users] Help: Program Terminated"</a>
<li><strong>Previous message:</strong> <a href="5745.php">twurgl_at_[hidden]: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5809.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5809.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a program which uses MPI::Comm::Spawn to start processes on
<br>
compute nodes (c0-0, c0-1, etc).  The communication between the
<br>
compute nodes consists of ISend and IRecv pairs, while communication
<br>
between the compute nodes consists of gather and bcast operations.
<br>
After executing ~80 successful loops (gather/bcast pairs), I get this
<br>
error message from the head node process during a gather call:
<br>
<p>[0,1,0][btl_openib_component.c:1332:btl_openib_component_progress]
<br>
from headnode.local to: c0-0 error polling HP CQ with status WORK
<br>
REQUEST FLUSHED ERROR status number 5 for wr_id 18504944 opcode 1
<br>
<p>The relevant environment variables:
<br>
OMPI_MCA_btl_openib_rd_num=128
<br>
OMPI_MCA_btl_openib_verbose=1
<br>
OMPI_MCA_btl_base_verbose=1
<br>
OMPI_MCA_btl_openib_rd_low=75
<br>
OMPI_MCA_btl_base_debug=1
<br>
OMPI_MCA_btl_openib_warn_no_hca_params_found=0
<br>
OMPI_MCA_btl_openib_warn_default_gid_prefix=0
<br>
OMPI_MCA_btl=self,openib
<br>
<p>If rd_low and rd_num are left at their default values, the program
<br>
simply hangs in the gather call after about 20 iterations (a gather
<br>
and a bcast).
<br>
<p>Can anyone shed any light on what this error message means or what
<br>
might be done about it?
<br>
<p>Thanks,
<br>
mch
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5747.php">Lee Amy: "[OMPI users] Help: Program Terminated"</a>
<li><strong>Previous message:</strong> <a href="5745.php">twurgl_at_[hidden]: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5809.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5809.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
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
