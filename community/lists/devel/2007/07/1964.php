<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 11:15:16 2007" -->
<!-- isoreceived="20070720151516" -->
<!-- sent="Fri, 20 Jul 2007 11:15:10 -0400" -->
<!-- isosent="20070720151510" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533" -->
<!-- id="E87CA2D2-FE9E-4751-BC00-4A9304F24B97_at_cs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-20 11:15:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1965.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Previous message:</strong> <a href="1963.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>In reply to:</strong> <a href="1959.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1966.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>Reply:</strong> <a href="1966.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem started with the compiler complaining about using a non  
<br>
initialized variable. When I looked into the code, I just planned to  
<br>
initialize it with some default value to make the compiler stop  
<br>
complaining. But then I realize that all the ifs between the moment  
<br>
where this buffer get initialized and the moment where it get freed,  
<br>
have to release it before calling return (error cases). So my choices  
<br>
were: either to add ifs around all these OBJ_RELEASE or to move the  
<br>
allocation outside the if, in such a way that everybody can safely  
<br>
release it. I choose the approach that have a minimum impact in  
<br>
number of lines of code (I'm not a fanatic of copy &amp; paste). It's  
<br>
definitively not a performance critical code, so one more memory  
<br>
allocation will have a zero impact.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 20, 2007, at 7:32 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I guess I really don't understand this change. How is it better that I
</span><br>
<span class="quotelev1">&gt; *always* malloc a buffer that I might never use, just so I can  
</span><br>
<span class="quotelev1">&gt; *always*
</span><br>
<span class="quotelev1">&gt; release it - versus *only* malloc'ing and releasing a buffer when I  
</span><br>
<span class="quotelev1">&gt; know I
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
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/orted/orted_main.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/orted/orted_main.c 2007-07-20 00:06:39 EDT (Fri, 20  
</span><br>
<span class="quotelev2">&gt;&gt; Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -391,8 +391,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* if we are not a seed, prep a return buffer to say we  
</span><br>
<span class="quotelev2">&gt;&gt; started okay */
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
<span class="quotelev2">&gt;&gt;          if (ORTE_SUCCESS != (ret = orte_ns.get_jobid_string 
</span><br>
<span class="quotelev2">&gt;&gt; (&amp;jobidstring,
</span><br>
<span class="quotelev2">&gt;&gt;                                           
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_info.my_name))) {
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
<span class="quotelev2">&gt;&gt;          opal_output(0, &quot;%s orted: up and running - waiting for  
</span><br>
<span class="quotelev2">&gt;&gt; commands!&quot;,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1965.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Previous message:</strong> <a href="1963.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>In reply to:</strong> <a href="1959.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1966.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>Reply:</strong> <a href="1966.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
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
