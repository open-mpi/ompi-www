<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  8 17:59:31 2012" -->
<!-- isoreceived="20120308225931" -->
<!-- sent="Thu, 8 Mar 2012 16:59:26 -0600" -->
<!-- isosent="20120308225926" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119" -->
<!-- id="CAANzjEn-76EhRuqEdBT=HXYLEy95p7zs-5WEwXEbS02ONsehTw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2F0DF0A3-8479-452E-922F-734FCD0F1A6C_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-08 17:59:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10692.php">Alex Margolin: "[OMPI devel] MCA BTL Fragment lists"</a>
<li><strong>Previous message:</strong> <a href="10690.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<li><strong>In reply to:</strong> <a href="10690.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reminder. I forget about updating the news. Fixed in r26120.
<br>
<p>-- Josh
<br>
<p>On Thu, Mar 8, 2012 at 4:32 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can you add this to NEWS, please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 8, 2012, at 5:02 PM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: jjhursey
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2012-03-08 17:02:28 EST (Thu, 08 Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 26119
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26119">https://svn.open-mpi.org/trac/ompi/changeset/26119</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Create an MCA parameter (ess_base_stream_buffering) that allows the user
</span><br>
<span class="quotelev1">&gt; to override the system default for buffering of stdout/stderr streams. See
</span><br>
<span class="quotelev1">&gt; 'man setvbuf' for more information.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note: I am working on a system that buffered all output until the
</span><br>
<span class="quotelev1">&gt; application fishished due to a default of 'fully buffered.' This makes
</span><br>
<span class="quotelev1">&gt; debugging painful. This switch fixed the problem by allowing me to adjust
</span><br>
<span class="quotelev1">&gt; the buffering.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/ess/base/base.h             |     6 ++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/ess/base/ess_base_open.c    |    10 ++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/mca/ess/base/ess_base_std_app.c |    22
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++-
</span><br>
<span class="quotelev2">&gt; &gt;   3 files changed, 37 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/ess/base/base.h
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/ess/base/base.h    (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/ess/base/base.h    2012-03-08 17:02:28 EST (Thu, 08
</span><br>
<span class="quotelev1">&gt; Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt;  *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2011      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2012      Oak Ridge National Labs.  All rights
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt;  *
</span><br>
<span class="quotelev2">&gt; &gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; @@ -56,6 +57,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_DECLSPEC extern int orte_ess_base_output;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * stdout/stderr buffering control parameter
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +ORTE_DECLSPEC extern int orte_ess_base_std_buffering;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_DECLSPEC extern opal_list_t orte_ess_base_components_available;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/ess/base/ess_base_open.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/ess/base/ess_base_open.c   (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/ess/base/ess_base_open.c   2012-03-08 17:02:28 EST
</span><br>
<span class="quotelev1">&gt; (Thu, 08 Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt;  *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2011 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2012      Oak Ridge National Labs.  All rights
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt;  *
</span><br>
<span class="quotelev2">&gt; &gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; @@ -51,10 +52,19 @@
</span><br>
<span class="quotelev2">&gt; &gt;     NULL   /* ft_event */
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt; int orte_ess_base_output;
</span><br>
<span class="quotelev2">&gt; &gt; +int orte_ess_base_std_buffering = -1;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int
</span><br>
<span class="quotelev2">&gt; &gt; orte_ess_base_open(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_base_param_reg_int_name(&quot;ess_base&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                                &quot;stream_buffering&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                                &quot;Adjust buffering for stdout/stderr &quot;
</span><br>
<span class="quotelev2">&gt; &gt; +                                &quot;[-1 system default] [0 unbuffered] [1
</span><br>
<span class="quotelev1">&gt; line buffered] [2 fully buffered] &quot;
</span><br>
<span class="quotelev2">&gt; &gt; +                                &quot;(Default: -1)&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                                false, false,
</span><br>
<span class="quotelev2">&gt; &gt; +                                -1, &amp;orte_ess_base_std_buffering);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     orte_ess_base_output = opal_output_open(NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     OBJ_CONSTRUCT(&amp;orte_ess_base_components_available, opal_list_t);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/mca/ess/base/ess_base_std_app.c        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/mca/ess/base/ess_base_std_app.c        2012-03-08
</span><br>
<span class="quotelev1">&gt; 17:02:28 EST (Thu, 08 Mar 2012)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt;  *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; - * Copyright (c) 2010-2011 Oak Ridge National Labs.  All rights
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2010-2012 Oak Ridge National Labs.  All rights
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt;  *
</span><br>
<span class="quotelev2">&gt; &gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; @@ -65,6 +65,26 @@
</span><br>
<span class="quotelev2">&gt; &gt;     int ret;
</span><br>
<span class="quotelev2">&gt; &gt;     char *error = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    /*
</span><br>
<span class="quotelev2">&gt; &gt; +     * stdout/stderr buffering
</span><br>
<span class="quotelev2">&gt; &gt; +     * If the user requested to override the default setting then do
</span><br>
<span class="quotelev2">&gt; &gt; +     * as they wish.
</span><br>
<span class="quotelev2">&gt; &gt; +     */
</span><br>
<span class="quotelev2">&gt; &gt; +    if( orte_ess_base_std_buffering &gt; -1 ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if( 0 == orte_ess_base_std_buffering ) {
</span><br>
<span class="quotelev2">&gt; &gt; +            setvbuf(stdout, NULL, _IONBF, 0);
</span><br>
<span class="quotelev2">&gt; &gt; +            setvbuf(stderr, NULL, _IONBF, 0);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +        else if( 1 == orte_ess_base_std_buffering ) {
</span><br>
<span class="quotelev2">&gt; &gt; +            setvbuf(stdout, NULL, _IOLBF, 0);
</span><br>
<span class="quotelev2">&gt; &gt; +            setvbuf(stderr, NULL, _IOLBF, 0);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +        else if( 2 == orte_ess_base_std_buffering ) {
</span><br>
<span class="quotelev2">&gt; &gt; +            setvbuf(stdout, NULL, _IOFBF, 0);
</span><br>
<span class="quotelev2">&gt; &gt; +            setvbuf(stderr, NULL, _IOFBF, 0);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     /* open the errmgr */
</span><br>
<span class="quotelev2">&gt; &gt;     if (ORTE_SUCCESS != (ret = orte_errmgr_base_open())) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10691/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10692.php">Alex Margolin: "[OMPI devel] MCA BTL Fragment lists"</a>
<li><strong>Previous message:</strong> <a href="10690.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<li><strong>In reply to:</strong> <a href="10690.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
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
