<?
$subject_val = "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 15:16:10 2009" -->
<!-- isoreceived="20090327191610" -->
<!-- sent="Fri, 27 Mar 2009 12:15:38 -0700" -->
<!-- isosent="20090327191538" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]" -->
<!-- id="49CD25DA.7070400_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9D4E3B6D-F94D-4A20-AF70-D53C5870E3F3_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 15:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5722.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="5720.php">Jeff Squyres: "[OMPI devel] Critical bug notice"</a>
<li><strong>In reply to:</strong> <a href="5719.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5722.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Reply:</strong> <a href="5722.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Reply:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>You will need to update MPI_Test and MPI_Wait as well, which do not 
<br>
check that status != NULL. Is there an index of MPI functions by their 
<br>
parameter type, such as the set of functions that take an MPI_Status 
<br>
argument?
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Shaun,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the bug report. In general we like to check the arguments  
</span><br>
<span class="quotelev1">&gt; against NULL, in order to make sure we don't segfault. However, in  
</span><br>
<span class="quotelev1">&gt; this particular context we check against NULL but NULL is our  
</span><br>
<span class="quotelev1">&gt; MPI_STATUS_IGNORE. I think I will prefer a little bit more safer  
</span><br>
<span class="quotelev1">&gt; solution where we test against NULL just in case we will change the  
</span><br>
<span class="quotelev1">&gt; MPI_STATUS_IGNORE value. So instead of the (NULL == status) I will  
</span><br>
<span class="quotelev1">&gt; prefer ((NULL == status) &amp;&amp; (NULL != MPI_STATUS_IGNORE)). This way the  
</span><br>
<span class="quotelev1">&gt; compiler can optimize out the second test when MPI_STATUS_IGNORE is a  
</span><br>
<span class="quotelev1">&gt; NULL constant, and will keep it in case the MPI_STATUS_IGNORE became ! 
</span><br>
<span class="quotelev1">&gt; = NULL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2009, at 13:39 , Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request_get_status fails if the status parameter is passed
</span><br>
<span class="quotelev2">&gt;&gt; MPI_STATUS_IGNORE. A patch is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Shaun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009-03-26  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     * ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
</span><br>
<span class="quotelev2">&gt;&gt;     Do not fail if the status argument is NULL, because the
</span><br>
<span class="quotelev2">&gt;&gt;     application may pass MPI_STATUS_IGNORE for the status argument.
</span><br>
<span class="quotelev2">&gt;&gt; 2009-03-26  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	* ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
</span><br>
<span class="quotelev2">&gt;&gt; 	Do not fail if the status argument is NULL, because the
</span><br>
<span class="quotelev2">&gt;&gt; 	application may pass MPI_STATUS_IGNORE for the status argument.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mpi/c/request_get_status.c.orig	2008-11-04  
</span><br>
<span class="quotelev2">&gt;&gt; 12:56:27.000000000 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mpi/c/request_get_status.c	2009-03-26 14:00:00.807344000  
</span><br>
<span class="quotelev2">&gt;&gt; -0700
</span><br>
<span class="quotelev2">&gt;&gt; @@ -49,7 +49,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if( MPI_PARAM_CHECK ) {
</span><br>
<span class="quotelev2">&gt;&gt;         OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
</span><br>
<span class="quotelev2">&gt;&gt; -        if( (NULL == flag) || (NULL == status) ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (NULL == flag) {
</span><br>
<span class="quotelev2">&gt;&gt;             return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD,  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ERR_ARG, FUNC_NAME);
</span><br>
<span class="quotelev2">&gt;&gt;         } else if (NULL == request) {
</span><br>
<span class="quotelev2">&gt;&gt;             return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD,  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ERR_REQUEST,
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5722.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="5720.php">Jeff Squyres: "[OMPI devel] Critical bug notice"</a>
<li><strong>In reply to:</strong> <a href="5719.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5722.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Reply:</strong> <a href="5722.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Reply:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
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
