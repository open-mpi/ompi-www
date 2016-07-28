<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  8 17:32:17 2012" -->
<!-- isoreceived="20120308223217" -->
<!-- sent="Thu, 8 Mar 2012 17:32:12 -0500" -->
<!-- isosent="20120308223212" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119" -->
<!-- id="2F0DF0A3-8479-452E-922F-734FCD0F1A6C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201203082202.q28M2SUo002661_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-08 17:32:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10691.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<li><strong>Previous message:</strong> <a href="10689.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10691.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<li><strong>Reply:</strong> <a href="10691.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you add this to NEWS, please?
<br>
<p>Thanks.
<br>
<p><p><p>On Mar 8, 2012, at 5:02 PM, jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jjhursey
</span><br>
<span class="quotelev1">&gt; Date: 2012-03-08 17:02:28 EST (Thu, 08 Mar 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26119
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26119">https://svn.open-mpi.org/trac/ompi/changeset/26119</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Create an MCA parameter (ess_base_stream_buffering) that allows the user to override the system default for buffering of stdout/stderr streams. See 'man setvbuf' for more information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note: I am working on a system that buffered all output until the application fishished due to a default of 'fully buffered.' This makes debugging painful. This switch fixed the problem by allowing me to adjust the buffering.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/base.h             |     6 ++++++                                  
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/ess_base_open.c    |    10 ++++++++++                              
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/ess_base_std_app.c |    22 +++++++++++++++++++++-                  
</span><br>
<span class="quotelev1">&gt;   3 files changed, 37 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/base/base.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/base/base.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/base/base.h	2012-03-08 17:02:28 EST (Thu, 08 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2012      Oak Ridge National Labs.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -56,6 +57,11 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; ORTE_DECLSPEC extern int orte_ess_base_output;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * stdout/stderr buffering control parameter
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +ORTE_DECLSPEC extern int orte_ess_base_std_buffering;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; ORTE_DECLSPEC extern opal_list_t orte_ess_base_components_available;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/base/ess_base_open.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/base/ess_base_open.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/base/ess_base_open.c	2012-03-08 17:02:28 EST (Thu, 08 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2012      Oak Ridge National Labs.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -51,10 +52,19 @@
</span><br>
<span class="quotelev1">&gt;     NULL   /* ft_event */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; int orte_ess_base_output;
</span><br>
<span class="quotelev1">&gt; +int orte_ess_base_std_buffering = -1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; orte_ess_base_open(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int_name(&quot;ess_base&quot;,
</span><br>
<span class="quotelev1">&gt; +                                &quot;stream_buffering&quot;,
</span><br>
<span class="quotelev1">&gt; +                                &quot;Adjust buffering for stdout/stderr &quot;
</span><br>
<span class="quotelev1">&gt; +                                &quot;[-1 system default] [0 unbuffered] [1 line buffered] [2 fully buffered] &quot;
</span><br>
<span class="quotelev1">&gt; +                                &quot;(Default: -1)&quot;,
</span><br>
<span class="quotelev1">&gt; +                                false, false,
</span><br>
<span class="quotelev1">&gt; +                                -1, &amp;orte_ess_base_std_buffering);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     orte_ess_base_output = opal_output_open(NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;orte_ess_base_components_available, opal_list_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/base/ess_base_std_app.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/base/ess_base_std_app.c	2012-03-08 17:02:28 EST (Thu, 08 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev1">&gt;  *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2010-2011 Oak Ridge National Labs.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2010-2012 Oak Ridge National Labs.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -65,6 +65,26 @@
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt;     char *error = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    /*
</span><br>
<span class="quotelev1">&gt; +     * stdout/stderr buffering
</span><br>
<span class="quotelev1">&gt; +     * If the user requested to override the default setting then do
</span><br>
<span class="quotelev1">&gt; +     * as they wish.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    if( orte_ess_base_std_buffering &gt; -1 ) {
</span><br>
<span class="quotelev1">&gt; +        if( 0 == orte_ess_base_std_buffering ) {
</span><br>
<span class="quotelev1">&gt; +            setvbuf(stdout, NULL, _IONBF, 0);
</span><br>
<span class="quotelev1">&gt; +            setvbuf(stderr, NULL, _IONBF, 0);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        else if( 1 == orte_ess_base_std_buffering ) {
</span><br>
<span class="quotelev1">&gt; +            setvbuf(stdout, NULL, _IOLBF, 0);
</span><br>
<span class="quotelev1">&gt; +            setvbuf(stderr, NULL, _IOLBF, 0);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        else if( 2 == orte_ess_base_std_buffering ) {
</span><br>
<span class="quotelev1">&gt; +            setvbuf(stdout, NULL, _IOFBF, 0);
</span><br>
<span class="quotelev1">&gt; +            setvbuf(stderr, NULL, _IOFBF, 0);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* open the errmgr */
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (ret = orte_errmgr_base_open())) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10691.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<li><strong>Previous message:</strong> <a href="10689.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10691.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<li><strong>Reply:</strong> <a href="10691.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
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
