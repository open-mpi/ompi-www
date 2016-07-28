<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 07:32:41 2007" -->
<!-- isoreceived="20070720113241" -->
<!-- sent="Fri, 20 Jul 2007 05:32:29 -0600" -->
<!-- isosent="20070720113229" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533" -->
<!-- id="C2C5F96D.3589%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707200406.l6K46eVA005163_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-20 07:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1960.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>Previous message:</strong> <a href="1958.php">Jeff Squyres: "Re: [OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1960.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>Reply:</strong> <a href="1960.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>Reply:</strong> <a href="1964.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess I really don't understand this change. How is it better that I
<br>
*always* malloc a buffer that I might never use, just so I can *always*
<br>
release it - versus *only* malloc'ing and releasing a buffer when I know I
<br>
need it??
<br>
<p>I don't really care, but this seems kinda wasteful and I would like to
<br>
understand the benefit.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 7/19/07 10:06 PM, &quot;bosilca_at_[hidden]&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2007-07-20 00:06:39 EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15533
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15533">https://svn.open-mpi.org/trac/ompi/changeset/15533</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Always release the buffer (this imply the buffer has to be created
</span><br>
<span class="quotelev1">&gt; outside the special case).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/orte/orted/orted_main.c |     6 ++++--
</span><br>
<span class="quotelev1">&gt;    1 files changed, 4 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/orted/orted_main.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/orted/orted_main.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/orted/orted_main.c 2007-07-20 00:06:39 EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -391,8 +391,8 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      /* if we are not a seed, prep a return buffer to say we started okay */
</span><br>
<span class="quotelev1">&gt; +    buffer = OBJ_NEW(orte_buffer_t);
</span><br>
<span class="quotelev1">&gt;      if (!orte_process_info.seed) {
</span><br>
<span class="quotelev1">&gt; -        buffer = OBJ_NEW(orte_buffer_t);
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_dss.pack(buffer, &amp;zero, 1,
</span><br>
<span class="quotelev1">&gt; ORTE_INT))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;              OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt; @@ -459,6 +459,7 @@
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (ret = orte_ns.get_jobid_string(&amp;jobidstring,
</span><br>
<span class="quotelev1">&gt;                                          orte_process_info.my_name))) {
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +            OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;              return ret;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -509,6 +510,7 @@
</span><br>
<span class="quotelev1">&gt;                                    ORTE_RML_NON_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; orte_daemon_recv_gate, NULL);
</span><br>
<span class="quotelev1">&gt;      if (ret != ORTE_SUCCESS &amp;&amp; ret != ORTE_ERR_NOT_IMPLEMENTED) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;          return ret;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -547,8 +549,8 @@
</span><br>
<span class="quotelev1">&gt;              OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;              return ret;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -        OBJ_RELEASE(buffer);  /* done with this */
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    OBJ_RELEASE(buffer);  /* done with this */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev1">&gt;          opal_output(0, &quot;%s orted: up and running - waiting for commands!&quot;,
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(orte_process_info.my_name));
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1960.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>Previous message:</strong> <a href="1958.php">Jeff Squyres: "Re: [OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1960.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>Reply:</strong> <a href="1960.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>Reply:</strong> <a href="1964.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
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
