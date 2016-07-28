<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 15:59:14 2009" -->
<!-- isoreceived="20091007195914" -->
<!-- sent="Wed, 7 Oct 2009 15:58:58 -0400" -->
<!-- isosent="20091007195858" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066" -->
<!-- id="F2134739-B04A-45D0-941C-DFD5A06DD247_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200910071858.n97Iwxg7016262_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 15:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066"</a>
<li><strong>Previous message:</strong> <a href="6937.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066"</a>
<li><strong>Reply:</strong> <a href="6939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I'm intrigued by this commit. Here is how I read the patch:
<br>
<p>1. In most of the cases you added one opal_output on top of the  
<br>
already existing orte_show_help
<br>
<p>2. In some other cases you replaced meaningful messages such as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;mca_common_sm_mmap_init: orte_rml.recv failed from %d with  
<br>
errno=%d\n&quot;
<br>
&nbsp;&nbsp;&nbsp;with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Receive was less than posted size&quot;
<br>
<p>I don't think this makes things more clear or cleaner ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 7, 2009, at 14:58 , jsquyres_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2009-10-07 14:58:58 EDT (Wed, 07 Oct 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 22066
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22066">https://svn.open-mpi.org/trac/ompi/changeset/22066</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix CID 1384.  Also remove some opal_output(0,...)'s in favor of
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/common/sm/common_sm_mmap.c |    22 +++++++++++ 
</span><br>
<span class="quotelev1">&gt; +----------
</span><br>
<span class="quotelev1">&gt;   1 files changed, 12 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/common/sm/common_sm_mmap.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/common/sm/common_sm_mmap.c	2009-10-07 14:58:58  
</span><br>
<span class="quotelev1">&gt; EDT (Wed, 07 Oct 2009)
</span><br>
<span class="quotelev1">&gt; @@ -50,6 +50,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -223,15 +224,19 @@
</span><br>
<span class="quotelev1">&gt;         /* process initializing the file */
</span><br>
<span class="quotelev1">&gt;         fd = open(file_name, O_CREAT|O_RDWR, 0600);
</span><br>
<span class="quotelev1">&gt;         if (fd &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +            int err = errno;
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERROR_LOG(OMPI_ERR_IN_ERRNO);
</span><br>
<span class="quotelev1">&gt;             orte_show_help(&quot;help-mpi-common-sm.txt&quot;, &quot;sys call  
</span><br>
<span class="quotelev1">&gt; fail&quot;, 1,
</span><br>
<span class="quotelev1">&gt;                            orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt;                            &quot;open(2)&quot;, file_name,
</span><br>
<span class="quotelev1">&gt; -                           strerror(errno), errno);
</span><br>
<span class="quotelev1">&gt; +                           strerror(err), err);
</span><br>
<span class="quotelev1">&gt;         } else if (ftruncate(fd, size) != 0) {
</span><br>
<span class="quotelev1">&gt; +            int err = errno;
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERROR_LOG(OMPI_ERR_IN_ERRNO);
</span><br>
<span class="quotelev1">&gt;             orte_show_help(&quot;help-mpi-common-sm.txt&quot;, &quot;sys call  
</span><br>
<span class="quotelev1">&gt; fail&quot;, 1,
</span><br>
<span class="quotelev1">&gt;                            orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt;                            &quot;ftruncate(2)&quot;, &quot;&quot;,
</span><br>
<span class="quotelev1">&gt; -                           strerror(errno), errno);
</span><br>
<span class="quotelev1">&gt; +                           strerror(err), err);
</span><br>
<span class="quotelev1">&gt;             close(fd);
</span><br>
<span class="quotelev1">&gt;             unlink(file_name);
</span><br>
<span class="quotelev1">&gt;             fd = -1;
</span><br>
<span class="quotelev1">&gt; @@ -263,6 +268,7 @@
</span><br>
<span class="quotelev1">&gt;             rc = orte_rml.send(&amp;(procs[p]-&gt;proc_name), iov, 3,
</span><br>
<span class="quotelev1">&gt;                                OMPI_RML_TAG_SM_BACK_FILE_CREATED, 0);
</span><br>
<span class="quotelev1">&gt;             if (rc &lt; (ssize_t) (iov[0].iov_len + iov[1].iov_len + iov 
</span><br>
<span class="quotelev1">&gt; [2].iov_len)) {
</span><br>
<span class="quotelev1">&gt; +                ORTE_ERROR_LOG(OMPI_ERR_COMM_FAILURE);
</span><br>
<span class="quotelev1">&gt;                 opal_output(0, &quot;mca_common_sm_mmap_init: &quot;
</span><br>
<span class="quotelev1">&gt;                             &quot;orte_rml.send failed to %lu with errno= 
</span><br>
<span class="quotelev1">&gt; %d, ret=%d, iov_len sum=%d\n&quot;,
</span><br>
<span class="quotelev1">&gt;                             (unsigned long)p, errno,
</span><br>
<span class="quotelev1">&gt; @@ -312,11 +318,8 @@
</span><br>
<span class="quotelev1">&gt;                                     
</span><br>
<span class="quotelev1">&gt; OMPI_RML_TAG_SM_BACK_FILE_CREATED, 0);
</span><br>
<span class="quotelev1">&gt;                 opal_progress_event_users_decrement();
</span><br>
<span class="quotelev1">&gt;                 if (rc &lt; 0) {
</span><br>
<span class="quotelev1">&gt; -                    opal_output(0, &quot;mca_common_sm_mmap_init: &quot;
</span><br>
<span class="quotelev1">&gt; -                                &quot;orte_rml.recv failed from %d with  
</span><br>
<span class="quotelev1">&gt; errno=%d\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                                0, errno);
</span><br>
<span class="quotelev1">&gt; -                    munmap(map, size);
</span><br>
<span class="quotelev1">&gt; -                    /* fd wasn't opened here; no need to close/ 
</span><br>
<span class="quotelev1">&gt; reset */
</span><br>
<span class="quotelev1">&gt; +                    ORTE_ERROR_LOG(OMPI_ERR_RECV_LESS_THAN_POSTED);
</span><br>
<span class="quotelev1">&gt; +                    /* fd/map wasn't opened here; no need to close/ 
</span><br>
<span class="quotelev1">&gt; reset */
</span><br>
<span class="quotelev1">&gt;                     goto out;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -328,9 +331,8 @@
</span><br>
<span class="quotelev1">&gt;                 /* If not, put it on the pending list and try again */
</span><br>
<span class="quotelev1">&gt;                 rml_msg = OBJ_NEW(pending_rml_msg_t);
</span><br>
<span class="quotelev1">&gt;                 if (NULL == rml_msg) {
</span><br>
<span class="quotelev1">&gt; -                    opal_output(0, &quot;mca_common_sm_mmap_init: failed  
</span><br>
<span class="quotelev1">&gt; to create pending rml message&quot;);
</span><br>
<span class="quotelev1">&gt; -                    munmap(map, size);
</span><br>
<span class="quotelev1">&gt; -                    /* fd wasn't opened here; no need to close/ 
</span><br>
<span class="quotelev1">&gt; reset */
</span><br>
<span class="quotelev1">&gt; +                    ORTE_ERROR_LOG(OMPI_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt; +                    /* fd/map wasn't opened here; no need to close/ 
</span><br>
<span class="quotelev1">&gt; reset */
</span><br>
<span class="quotelev1">&gt;                     goto out;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 memcpy(rml_msg-&gt;file_name, filename_to_send,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066"</a>
<li><strong>Previous message:</strong> <a href="6937.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066"</a>
<li><strong>Reply:</strong> <a href="6939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066"</a>
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
