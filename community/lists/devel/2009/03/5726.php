<?
$subject_val = "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 21:24:01 2009" -->
<!-- isoreceived="20090328012401" -->
<!-- sent="Fri, 27 Mar 2009 21:23:25 -0400" -->
<!-- isosent="20090328012325" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]" -->
<!-- id="92F59F4F-C7C2-427A-B3EB-15E913DFF54A_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 21:23:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5727.php">Jeff Squyres: "Re: [OMPI devel] MCA component dependency"</a>
<li><strong>Previous message:</strong> <a href="5725.php">Paul H. Hargrove: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5721.php">Shaun Jackman: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, MPI_TEST* and MPI_WAIT* all check for MPI_STATUS[ES]_IGNORE at  
<br>
the lower layers.
<br>
<p>I believe that the correct fix for MPI_REQUEST_GET_STATUS should be  
<br>
the following, because checks for MPI_STATUS_IGNORE are performed  
<br>
later in the function:
<br>
<p>Index: ompi/mpi/c/request_get_status.c
<br>
===================================================================
<br>
--- ompi/mpi/c/request_get_status.c	(revision 20889)
<br>
+++ ompi/mpi/c/request_get_status.c	(working copy)
<br>
@@ -49,7 +49,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_PARAM_CHECK ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
<br>
-        if( (NULL == flag) || (NULL == status) ) {
<br>
+        if( (NULL == flag) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD,  
<br>
MPI_ERR_ARG, FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (NULL == request) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD,  
<br>
MPI_ERR_REQUEST,
<br>
<p>Thanks for the heads-up!
<br>
<p><p>On Mar 27, 2009, at 3:15 PM, Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will need to update MPI_Test and MPI_Wait as well, which do not
</span><br>
<span class="quotelev1">&gt; check that status != NULL. Is there an index of MPI functions by their
</span><br>
<span class="quotelev1">&gt; parameter type, such as the set of functions that take an MPI_Status
</span><br>
<span class="quotelev1">&gt; argument?
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
<span class="quotelev2">&gt; &gt; Shaun,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the bug report. In general we like to check the arguments
</span><br>
<span class="quotelev2">&gt; &gt; against NULL, in order to make sure we don't segfault. However, in
</span><br>
<span class="quotelev2">&gt; &gt; this particular context we check against NULL but NULL is our
</span><br>
<span class="quotelev2">&gt; &gt; MPI_STATUS_IGNORE. I think I will prefer a little bit more safer
</span><br>
<span class="quotelev2">&gt; &gt; solution where we test against NULL just in case we will change the
</span><br>
<span class="quotelev2">&gt; &gt; MPI_STATUS_IGNORE value. So instead of the (NULL == status) I will
</span><br>
<span class="quotelev2">&gt; &gt; prefer ((NULL == status) &amp;&amp; (NULL != MPI_STATUS_IGNORE)). This way  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; compiler can optimize out the second test when MPI_STATUS_IGNORE  
</span><br>
<span class="quotelev1">&gt; is a
</span><br>
<span class="quotelev2">&gt; &gt; NULL constant, and will keep it in case the MPI_STATUS_IGNORE  
</span><br>
<span class="quotelev1">&gt; became !
</span><br>
<span class="quotelev2">&gt; &gt; = NULL.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 27, 2009, at 13:39 , Shaun Jackman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Request_get_status fails if the status parameter is passed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_STATUS_IGNORE. A patch is attached.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Shaun
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2009-03-26  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     * ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Do not fail if the status argument is NULL, because the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     application may pass MPI_STATUS_IGNORE for the status argument.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2009-03-26  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      * ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Do not fail if the status argument is NULL, because the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      application may pass MPI_STATUS_IGNORE for the status  
</span><br>
<span class="quotelev1">&gt; argument.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- ompi/mpi/c/request_get_status.c.orig     2008-11-04
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 12:56:27.000000000 -0800
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ ompi/mpi/c/request_get_status.c  2009-03-26 14:00:00.807344000
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -0700
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -49,7 +49,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     if( MPI_PARAM_CHECK ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        if( (NULL == flag) || (NULL == status) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        if (NULL == flag) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_ERR_ARG, FUNC_NAME);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         } else if (NULL == request) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_ERR_REQUEST,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5727.php">Jeff Squyres: "Re: [OMPI devel] MCA component dependency"</a>
<li><strong>Previous message:</strong> <a href="5725.php">Paul H. Hargrove: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5721.php">Shaun Jackman: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- nextthread="start" -->
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
