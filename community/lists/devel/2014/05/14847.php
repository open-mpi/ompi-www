<?
$subject_val = "[OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 02:27:45 2014" -->
<!-- isoreceived="20140527062745" -->
<!-- sent="Tue, 27 May 2014 15:27:42 +0900" -->
<!-- isosent="20140527062742" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="CAAkFZ5tVPRpmjaGYEWgH=H2BR2Ozc3kZkjeq7_5yn58zdfogjQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 02:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14848.php">Gilles Gouaillardet: "[OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Previous message:</strong> <a href="14846.php">Gilles Gouaillardet: "[OMPI devel] OMPI Opengrok config"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14867.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14867.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14875.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>currently, the dynamic/intercomm_create test from the ibm test suite output
<br>
the following messages :
<br>
<p>dpm_base_disconnect_init: error -12 in isend to process 1
<br>
<p>the root cause it task 0 tries to send messages to already exited tasks.
<br>
<p>one way of seeing things is that this is an application issue :
<br>
task 0 should have MPI_Comm_free'd all its communicator before calling
<br>
MPI_Comm_disconnect.
<br>
This can be achieved via the attached patch
<br>
<p>an other way of seeing things is that this is a bug in OpenMPI.
<br>
In this case, what would be the the right approach ?
<br>
- automatically free communicators (if needed) when MPI_Comm_disconnect is
<br>
invoked ?
<br>
- simply remove communicators (if needed) from ompi_mpi_communicators when
<br>
MPI_Comm_disconnect is invoked ?
<br>
&nbsp;&nbsp;/* this causes a memory leak, but the application can be seen as
<br>
responsible of it */
<br>
- other ?
<br>
<p>Thanks in advance for your feedback,
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14847/intercomm_create.patch">intercomm_create.patch</a>
</ul>
<!-- attachment="intercomm_create.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14848.php">Gilles Gouaillardet: "[OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Previous message:</strong> <a href="14846.php">Gilles Gouaillardet: "[OMPI devel] OMPI Opengrok config"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14867.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14867.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14875.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
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
