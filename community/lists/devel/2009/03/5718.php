<?
$subject_val = "[OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 13:40:24 2009" -->
<!-- isoreceived="20090327174024" -->
<!-- sent="Fri, 27 Mar 2009 10:39:51 -0700" -->
<!-- isosent="20090327173951" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]" -->
<!-- id="49CD0F67.8030907_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 13:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5719.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5719.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Reply:</strong> <a href="5719.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Request_get_status fails if the status parameter is passed
<br>
MPI_STATUS_IGNORE. A patch is attached.
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>2009-03-26  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do not fail if the status argument is NULL, because the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;application may pass MPI_STATUS_IGNORE for the status argument.
<br>
<p>
<p>
2009-03-26  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do not fail if the status argument is NULL, because the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;application may pass MPI_STATUS_IGNORE for the status argument.
<br>
<p>--- ompi/mpi/c/request_get_status.c.orig	2008-11-04 12:56:27.000000000 -0800
<br>
+++ ompi/mpi/c/request_get_status.c	2009-03-26 14:00:00.807344000 -0700
<br>
@@ -49,7 +49,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_PARAM_CHECK ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
<br>
-        if( (NULL == flag) || (NULL == status) ) {
<br>
+        if (NULL == flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_ARG, FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (NULL == request) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_REQUEST,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5719.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5719.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Reply:</strong> <a href="5719.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
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
