<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 11:31:04 2007" -->
<!-- isoreceived="20070720153104" -->
<!-- sent="Fri, 20 Jul 2007 09:30:51 -0600" -->
<!-- isosent="20070720153051" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533" -->
<!-- id="C2C6314B.35A2%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E87CA2D2-FE9E-4751-BC00-4A9304F24B97_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-07-20 11:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1967.php">Terry D. Dontje: "[OMPI devel] Locking issue with OB1 PML"</a>
<li><strong>Previous message:</strong> <a href="1965.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>In reply to:</strong> <a href="1964.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - makes sense! Appreciate the explanation - should have looked more
<br>
closely that early in the morning before asking. Definitely a &quot;2-cups of
<br>
coffee&quot; question... :-)
<br>
<p><p>On 7/20/07 9:15 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The problem started with the compiler complaining about using a non
</span><br>
<span class="quotelev1">&gt; initialized variable. When I looked into the code, I just planned to
</span><br>
<span class="quotelev1">&gt; initialize it with some default value to make the compiler stop
</span><br>
<span class="quotelev1">&gt; complaining. But then I realize that all the ifs between the moment
</span><br>
<span class="quotelev1">&gt; where this buffer get initialized and the moment where it get freed,
</span><br>
<span class="quotelev1">&gt; have to release it before calling return (error cases). So my choices
</span><br>
<span class="quotelev1">&gt; were: either to add ifs around all these OBJ_RELEASE or to move the
</span><br>
<span class="quotelev1">&gt; allocation outside the if, in such a way that everybody can safely
</span><br>
<span class="quotelev1">&gt; release it. I choose the approach that have a minimum impact in
</span><br>
<span class="quotelev1">&gt; number of lines of code (I'm not a fanatic of copy &amp; paste). It's
</span><br>
<span class="quotelev1">&gt; definitively not a performance critical code, so one more memory
</span><br>
<span class="quotelev1">&gt; allocation will have a zero impact.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 20, 2007, at 7:32 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess I really don't understand this change. How is it better that I
</span><br>
<span class="quotelev2">&gt;&gt; *always* malloc a buffer that I might never use, just so I can
</span><br>
<span class="quotelev2">&gt;&gt; *always*
</span><br>
<span class="quotelev2">&gt;&gt; release it - versus *only* malloc'ing and releasing a buffer when I
</span><br>
<span class="quotelev2">&gt;&gt; know I
</span><br>
<span class="quotelev2">&gt;&gt; need it??
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't really care, but this seems kinda wasteful and I would like to
</span><br>
<span class="quotelev2">&gt;&gt; understand the benefit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/19/07 10:06 PM, &quot;bosilca_at_[hidden]&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-07-20 00:06:39 EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 15533
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15533">https://svn.open-mpi.org/trac/ompi/changeset/15533</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Always release the buffer (this imply the buffer has to be created
</span><br>
<span class="quotelev3">&gt;&gt;&gt; outside the special case).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/orte/orted/orted_main.c |     6 ++++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1 files changed, 4 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/orte/orted/orted_main.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/orte/orted/orted_main.c (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/orte/orted/orted_main.c 2007-07-20 00:06:39 EDT (Fri, 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jul 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -391,8 +391,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* if we are not a seed, prep a return buffer to say we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; started okay */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    buffer = OBJ_NEW(orte_buffer_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (!orte_process_info.seed) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        buffer = OBJ_NEW(orte_buffer_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if (ORTE_SUCCESS != (ret = orte_dss.pack(buffer, &amp;zero, 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_INT))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -459,6 +459,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if (ORTE_SUCCESS != (ret = orte_ns.get_jobid_string
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&amp;jobidstring,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_process_info.my_name))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              return ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -509,6 +510,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    ORTE_RML_NON_PERSISTENT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_daemon_recv_gate, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (ret != ORTE_SUCCESS &amp;&amp; ret != ORTE_ERR_NOT_IMPLEMENTED) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -547,8 +549,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              return ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        OBJ_RELEASE(buffer);  /* done with this */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    OBJ_RELEASE(buffer);  /* done with this */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          opal_output(0, &quot;%s orted: up and running - waiting for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commands!&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_NAME_PRINT(orte_process_info.my_name));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="1967.php">Terry D. Dontje: "[OMPI devel] Locking issue with OB1 PML"</a>
<li><strong>Previous message:</strong> <a href="1965.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>In reply to:</strong> <a href="1964.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
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
