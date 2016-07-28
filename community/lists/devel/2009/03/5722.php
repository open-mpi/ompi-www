<?
$subject_val = "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 16:21:49 2009" -->
<!-- isoreceived="20090327202149" -->
<!-- sent="Fri, 27 Mar 2009 16:21:40 -0400" -->
<!-- isosent="20090327202140" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]" -->
<!-- id="D82D372D-642F-401F-B165-442CD70C0CA3_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49CD25DA.7070400_at_bcgsc.ca" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 16:21:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5723.php">Brad Benton: "[OMPI devel] Fwd: [Open MPI Announce] Critical bug notice"</a>
<li><strong>Previous message:</strong> <a href="5721.php">Shaun Jackman: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="5721.php">Shaun Jackman: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun,
<br>
<p>Not in Open MPI :) But there is a section in the MPI Standard that  
<br>
talk about the MPI_STATUS_IGNORE and make the list of functions that  
<br>
can deal with it.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 27, 2009, at 15:15 , Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will need to update MPI_Test and MPI_Wait as well, which do not  
</span><br>
<span class="quotelev1">&gt; check that status != NULL. Is there an index of MPI functions by  
</span><br>
<span class="quotelev1">&gt; their parameter type, such as the set of functions that take an  
</span><br>
<span class="quotelev1">&gt; MPI_Status argument?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Shaun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Shaun,
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the bug report. In general we like to check the  
</span><br>
<span class="quotelev2">&gt;&gt; arguments  against NULL, in order to make sure we don't segfault.  
</span><br>
<span class="quotelev2">&gt;&gt; However, in  this particular context we check against NULL but NULL  
</span><br>
<span class="quotelev2">&gt;&gt; is our  MPI_STATUS_IGNORE. I think I will prefer a little bit more  
</span><br>
<span class="quotelev2">&gt;&gt; safer  solution where we test against NULL just in case we will  
</span><br>
<span class="quotelev2">&gt;&gt; change the  MPI_STATUS_IGNORE value. So instead of the (NULL ==  
</span><br>
<span class="quotelev2">&gt;&gt; status) I will  prefer ((NULL == status) &amp;&amp; (NULL !=  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_STATUS_IGNORE)). This way the  compiler can optimize out the  
</span><br>
<span class="quotelev2">&gt;&gt; second test when MPI_STATUS_IGNORE is a  NULL constant, and will  
</span><br>
<span class="quotelev2">&gt;&gt; keep it in case the MPI_STATUS_IGNORE became ! = NULL.
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 27, 2009, at 13:39 , Shaun Jackman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Request_get_status fails if the status parameter is passed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_STATUS_IGNORE. A patch is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shaun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009-03-26  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Do not fail if the status argument is NULL, because the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    application may pass MPI_STATUS_IGNORE for the status argument.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009-03-26  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	* ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Do not fail if the status argument is NULL, because the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	application may pass MPI_STATUS_IGNORE for the status argument.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- ompi/mpi/c/request_get_status.c.orig	2008-11-04   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12:56:27.000000000 -0800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ ompi/mpi/c/request_get_status.c	2009-03-26 14:00:00.807344000   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -0700
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -49,7 +49,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if( MPI_PARAM_CHECK ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if( (NULL == flag) || (NULL == status) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (NULL == flag) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD,   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ERR_ARG, FUNC_NAME);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        } else if (NULL == request) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD,   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ERR_REQUEST,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5723.php">Brad Benton: "[OMPI devel] Fwd: [Open MPI Announce] Critical bug notice"</a>
<li><strong>Previous message:</strong> <a href="5721.php">Shaun Jackman: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="5721.php">Shaun Jackman: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
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
