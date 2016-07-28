<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 07:34:56 2007" -->
<!-- isoreceived="20070720113456" -->
<!-- sent="Fri, 20 Jul 2007 05:34:45 -0600" -->
<!-- isosent="20070720113445" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533" -->
<!-- id="C2C5F9F5.358A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2C5F96D.3589%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-20 07:34:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1961.php">Ralph Castain: "[OMPI devel] Name resolution"</a>
<li><strong>Previous message:</strong> <a href="1959.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>In reply to:</strong> <a href="1959.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1964.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies - I intended to address this solely to George and missed that
<br>
it replied to the list. Too early in the morning...
<br>
<p><p>On 7/20/07 5:32 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I guess I really don't understand this change. How is it better that I
</span><br>
<span class="quotelev1">&gt; *always* malloc a buffer that I might never use, just so I can *always*
</span><br>
<span class="quotelev1">&gt; release it - versus *only* malloc'ing and releasing a buffer when I know I
</span><br>
<span class="quotelev1">&gt; need it??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't really care, but this seems kinda wasteful and I would like to
</span><br>
<span class="quotelev1">&gt; understand the benefit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/19/07 10:06 PM, &quot;bosilca_at_[hidden]&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-07-20 00:06:39 EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 15533
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15533">https://svn.open-mpi.org/trac/ompi/changeset/15533</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Always release the buffer (this imply the buffer has to be created
</span><br>
<span class="quotelev2">&gt;&gt; outside the special case).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/orted/orted_main.c |     6 ++++--
</span><br>
<span class="quotelev2">&gt;&gt;    1 files changed, 4 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/orted/orted_main.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
=============================================================================&gt;&gt;
<br>
=
<br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/orted/orted_main.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/orted/orted_main.c 2007-07-20 00:06:39 EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -391,8 +391,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;      /* if we are not a seed, prep a return buffer to say we started okay */
</span><br>
<span class="quotelev2">&gt;&gt; +    buffer = OBJ_NEW(orte_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt;      if (!orte_process_info.seed) {
</span><br>
<span class="quotelev2">&gt;&gt; -        buffer = OBJ_NEW(orte_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt;          if (ORTE_SUCCESS != (ret = orte_dss.pack(buffer, &amp;zero, 1,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_INT))) {
</span><br>
<span class="quotelev2">&gt;&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt;              OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -459,6 +459,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;          if (ORTE_SUCCESS != (ret = orte_ns.get_jobid_string(&amp;jobidstring,
</span><br>
<span class="quotelev2">&gt;&gt;                                          orte_process_info.my_name))) {
</span><br>
<span class="quotelev2">&gt;&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt; +            OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev2">&gt;&gt;              return ret;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; @@ -509,6 +510,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                    ORTE_RML_NON_PERSISTENT,
</span><br>
<span class="quotelev2">&gt;&gt; orte_daemon_recv_gate, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;      if (ret != ORTE_SUCCESS &amp;&amp; ret != ORTE_ERR_NOT_IMPLEMENTED) {
</span><br>
<span class="quotelev2">&gt;&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt; +        OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev2">&gt;&gt;          return ret;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; @@ -547,8 +549,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;              OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev2">&gt;&gt;              return ret;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt; -        OBJ_RELEASE(buffer);  /* done with this */
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; +    OBJ_RELEASE(buffer);  /* done with this */
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;      if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev2">&gt;&gt;          opal_output(0, &quot;%s orted: up and running - waiting for commands!&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NAME_PRINT(orte_process_info.my_name));
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1961.php">Ralph Castain: "[OMPI devel] Name resolution"</a>
<li><strong>Previous message:</strong> <a href="1959.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>In reply to:</strong> <a href="1959.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1964.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
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
