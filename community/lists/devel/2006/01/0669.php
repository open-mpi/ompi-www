<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 11 09:37:53 2006" -->
<!-- isoreceived="20060111143753" -->
<!-- sent="Wed, 11 Jan 2006 07:37:48 -0700" -->
<!-- isosent="20060111143748" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  while-loop around opal_condition_wait" -->
<!-- id="43C5183C.7060508_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200601110905.47000.Keller_at_hlrs.de" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-11 09:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0670.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0668.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>In reply to:</strong> <a href="0667.php">Rainer Keller: "while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0670.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer Keller wrote:
<br>
<span class="quotelev1">&gt; Hello dear all,
</span><br>
<span class="quotelev1">&gt; I had a point on the tbd-list, that I would like to ask here:
</span><br>
<span class="quotelev1">&gt;  - Shouldn't we have a while-loop condition around every occurence
</span><br>
<span class="quotelev1">&gt;    of opal_condition_wait (spurious wake-ups)
</span><br>
<span class="quotelev1">&gt;    As we may do a pthread_cond_wait,
</span><br>
<span class="quotelev1">&gt;     e.g. in opal_free_list.h and OPAL_FREE_LIST_WAIT ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Occurrences:
</span><br>
<span class="quotelev1">&gt;       ompi/class/ompi_free_list.h
</span><br>
<span class="quotelev1">&gt;       opal/class/opal_free_list.h
</span><br>
<span class="quotelev1">&gt;       ompi/request/req_wait.c          /* Two Occurences: not a
</span><br>
<span class="quotelev1">&gt;                must, but... */
</span><br>
<span class="quotelev1">&gt;       orte/mca/gpr/proxy/gpr_proxy_compound_cmd.c
</span><br>
<span class="quotelev1">&gt;       orte/mca/iof/base/iof_base_flush.c:108
</span><br>
<span class="quotelev1">&gt;       orte/mca/pls/rsh/pls_rsh_module.c:892
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; May I check in the patch attached below?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I concur.
<br>
<p>Thanks,
<br>
Tim
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: ompi/class/ompi_free_list.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/class/ompi_free_list.h	(Revision 8667)
</span><br>
<span class="quotelev1">&gt; +++ ompi/class/ompi_free_list.h	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -126,22 +126,23 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -#define OMPI_FREE_LIST_WAIT(fl, item, rc)                                  \
</span><br>
<span class="quotelev1">&gt; -{                                                                          \
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_LOCK(&amp;((fl)-&gt;fl_lock));                                    \
</span><br>
<span class="quotelev1">&gt; -    item = opal_list_remove_first(&amp;((fl)-&gt;super));                         \
</span><br>
<span class="quotelev1">&gt; -    while(NULL == item) {                                                  \
</span><br>
<span class="quotelev1">&gt; -        if((fl)-&gt;fl_max_to_alloc &lt;= (fl)-&gt;fl_num_allocated) {              \
</span><br>
<span class="quotelev1">&gt; -            (fl)-&gt;fl_num_waiting++;                                        \
</span><br>
<span class="quotelev1">&gt; -            opal_condition_wait(&amp;((fl)-&gt;fl_condition), &amp;((fl)-&gt;fl_lock));  \
</span><br>
<span class="quotelev1">&gt; -            (fl)-&gt;fl_num_waiting--;                                        \
</span><br>
<span class="quotelev1">&gt; -        } else {                                                           \
</span><br>
<span class="quotelev1">&gt; -            ompi_free_list_grow((fl), (fl)-&gt;fl_num_per_alloc);             \
</span><br>
<span class="quotelev1">&gt; -        }                                                                  \
</span><br>
<span class="quotelev1">&gt; -        item = opal_list_remove_first(&amp;((fl)-&gt;super));                     \
</span><br>
<span class="quotelev1">&gt; -    }                                                                      \
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_UNLOCK(&amp;((fl)-&gt;fl_lock));                                  \
</span><br>
<span class="quotelev1">&gt; -    rc = (NULL == item) ?  OMPI_ERR_OUT_OF_RESOURCE : OMPI_SUCCESS;        \
</span><br>
<span class="quotelev1">&gt; +#define OMPI_FREE_LIST_WAIT(fl, item, rc)                                       \
</span><br>
<span class="quotelev1">&gt; +{                                                                               \
</span><br>
<span class="quotelev1">&gt; +    OPAL_THREAD_LOCK(&amp;((fl)-&gt;fl_lock));                                         \
</span><br>
<span class="quotelev1">&gt; +    item = opal_list_remove_first(&amp;((fl)-&gt;super));                              \
</span><br>
<span class="quotelev1">&gt; +    while(NULL == item) {                                                       \
</span><br>
<span class="quotelev1">&gt; +        if((fl)-&gt;fl_max_to_alloc &lt;= (fl)-&gt;fl_num_allocated) {                   \
</span><br>
<span class="quotelev1">&gt; +            (fl)-&gt;fl_num_waiting++;                                             \
</span><br>
<span class="quotelev1">&gt; +            while ((fl)-&gt;fl_max_to_alloc &lt;= (fl)-&gt;fl_num_allocated)             \
</span><br>
<span class="quotelev1">&gt; +                opal_condition_wait(&amp;((fl)-&gt;fl_condition), &amp;((fl)-&gt;fl_lock));   \
</span><br>
<span class="quotelev1">&gt; +            (fl)-&gt;fl_num_waiting--;                                             \
</span><br>
<span class="quotelev1">&gt; +        } else {                                                                \
</span><br>
<span class="quotelev1">&gt; +            ompi_free_list_grow((fl), (fl)-&gt;fl_num_per_alloc);                  \
</span><br>
<span class="quotelev1">&gt; +        }                                                                       \
</span><br>
<span class="quotelev1">&gt; +        item = opal_list_remove_first(&amp;((fl)-&gt;super));                          \
</span><br>
<span class="quotelev1">&gt; +    }                                                                           \
</span><br>
<span class="quotelev1">&gt; +    OPAL_THREAD_UNLOCK(&amp;((fl)-&gt;fl_lock));                                       \
</span><br>
<span class="quotelev1">&gt; +    rc = (NULL == item) ?  OMPI_ERR_OUT_OF_RESOURCE : OMPI_SUCCESS;             \
</span><br>
<span class="quotelev1">&gt;  } 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Index: opal/class/opal_free_list.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/class/opal_free_list.h	(Revision 8667)
</span><br>
<span class="quotelev1">&gt; +++ opal/class/opal_free_list.h	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -122,22 +122,23 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -#define OPAL_FREE_LIST_WAIT(fl, item, rc)                                  \
</span><br>
<span class="quotelev1">&gt; -{                                                                          \
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_LOCK(&amp;((fl)-&gt;fl_lock));                                    \
</span><br>
<span class="quotelev1">&gt; -    item = opal_list_remove_first(&amp;((fl)-&gt;super));                         \
</span><br>
<span class="quotelev1">&gt; -    while(NULL == item) {                                                  \
</span><br>
<span class="quotelev1">&gt; -        if((fl)-&gt;fl_max_to_alloc &lt;= (fl)-&gt;fl_num_allocated) {              \
</span><br>
<span class="quotelev1">&gt; -            (fl)-&gt;fl_num_waiting++;                                        \
</span><br>
<span class="quotelev1">&gt; -            opal_condition_wait(&amp;((fl)-&gt;fl_condition), &amp;((fl)-&gt;fl_lock));  \
</span><br>
<span class="quotelev1">&gt; -            (fl)-&gt;fl_num_waiting--;                                        \
</span><br>
<span class="quotelev1">&gt; -        } else {                                                           \
</span><br>
<span class="quotelev1">&gt; -            opal_free_list_grow((fl), (fl)-&gt;fl_num_per_alloc);             \
</span><br>
<span class="quotelev1">&gt; -        }                                                                  \
</span><br>
<span class="quotelev1">&gt; -        item = opal_list_remove_first(&amp;((fl)-&gt;super));                     \
</span><br>
<span class="quotelev1">&gt; -    }                                                                      \
</span><br>
<span class="quotelev1">&gt; -    OPAL_THREAD_UNLOCK(&amp;((fl)-&gt;fl_lock));                                  \
</span><br>
<span class="quotelev1">&gt; -    rc = (NULL == item) ?  OMPI_ERR_OUT_OF_RESOURCE : OMPI_SUCCESS;        \
</span><br>
<span class="quotelev1">&gt; +#define OPAL_FREE_LIST_WAIT(fl, item, rc)                                       \
</span><br>
<span class="quotelev1">&gt; +{                                                                               \
</span><br>
<span class="quotelev1">&gt; +    OPAL_THREAD_LOCK(&amp;((fl)-&gt;fl_lock));                                         \
</span><br>
<span class="quotelev1">&gt; +    item = opal_list_remove_first(&amp;((fl)-&gt;super));                              \
</span><br>
<span class="quotelev1">&gt; +    while(NULL == item) {                                                       \
</span><br>
<span class="quotelev1">&gt; +        if((fl)-&gt;fl_max_to_alloc &lt;= (fl)-&gt;fl_num_allocated) {                   \
</span><br>
<span class="quotelev1">&gt; +            (fl)-&gt;fl_num_waiting++;                                             \
</span><br>
<span class="quotelev1">&gt; +            while ((fl)-&gt;fl_max_to_alloc &lt;= (fl)-&gt;fl_num_allocated)             \
</span><br>
<span class="quotelev1">&gt; +                opal_condition_wait(&amp;((fl)-&gt;fl_condition), &amp;((fl)-&gt;fl_lock));   \
</span><br>
<span class="quotelev1">&gt; +            (fl)-&gt;fl_num_waiting--;                                             \
</span><br>
<span class="quotelev1">&gt; +        } else {                                                                \
</span><br>
<span class="quotelev1">&gt; +            opal_free_list_grow((fl), (fl)-&gt;fl_num_per_alloc);                  \
</span><br>
<span class="quotelev1">&gt; +        }                                                                       \
</span><br>
<span class="quotelev1">&gt; +        item = opal_list_remove_first(&amp;((fl)-&gt;super));                          \
</span><br>
<span class="quotelev1">&gt; +    }                                                                           \
</span><br>
<span class="quotelev1">&gt; +    OPAL_THREAD_UNLOCK(&amp;((fl)-&gt;fl_lock));                                       \
</span><br>
<span class="quotelev1">&gt; +    rc = (NULL == item) ?  OMPI_ERR_OUT_OF_RESOURCE : OMPI_SUCCESS;             \
</span><br>
<span class="quotelev1">&gt;  } 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Index: ompi/request/req_wait.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/request/req_wait.c	(Revision 8667)
</span><br>
<span class="quotelev1">&gt; +++ ompi/request/req_wait.c	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -66,7 +66,10 @@
</span><br>
<span class="quotelev1">&gt;      /* give up and sleep until completion */
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt;      ompi_request_waiting++;
</span><br>
<span class="quotelev1">&gt; -    do {
</span><br>
<span class="quotelev1">&gt; +    /*
</span><br>
<span class="quotelev1">&gt; +     * We will break out of while{} as soon as all requests have completed.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    while (1) {
</span><br>
<span class="quotelev1">&gt;          rptr = requests;
</span><br>
<span class="quotelev1">&gt;          num_requests_null_inactive = 0;
</span><br>
<span class="quotelev1">&gt;          for (i = 0; i &lt; count; i++, rptr++) {
</span><br>
<span class="quotelev1">&gt; @@ -87,10 +90,10 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          if(num_requests_null_inactive == count)
</span><br>
<span class="quotelev1">&gt;              break;
</span><br>
<span class="quotelev1">&gt; -        if (completed &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +        while (completed &lt; 0) {
</span><br>
<span class="quotelev1">&gt;              opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -    } while (completed &lt; 0);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;      ompi_request_waiting--;
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/gpr/proxy/gpr_proxy_compound_cmd.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/gpr/proxy/gpr_proxy_compound_cmd.c	(Revision 8667)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/gpr/proxy/gpr_proxy_compound_cmd.c	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -51,9 +51,12 @@
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_LOCK(&amp;orte_gpr_proxy_globals.wait_for_compound_mutex);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if (orte_gpr_proxy_globals.compound_cmd_mode) {
</span><br>
<span class="quotelev1">&gt; -	   orte_gpr_proxy_globals.compound_cmd_waiting++;
</span><br>
<span class="quotelev1">&gt; -	   opal_condition_wait(&amp;orte_gpr_proxy_globals.compound_cmd_condition, &amp;orte_gpr_proxy_globals.wait_for_compound_mutex);
</span><br>
<span class="quotelev1">&gt; -	   orte_gpr_proxy_globals.compound_cmd_waiting--;
</span><br>
<span class="quotelev1">&gt; +        orte_gpr_proxy_globals.compound_cmd_waiting++;
</span><br>
<span class="quotelev1">&gt; +        while (orte_gpr_proxy_globals.compound_cmd_mode) {
</span><br>
<span class="quotelev1">&gt; +            opal_condition_wait(&amp;orte_gpr_proxy_globals.compound_cmd_condition,
</span><br>
<span class="quotelev1">&gt; +                                &amp;orte_gpr_proxy_globals.wait_for_compound_mutex);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        orte_gpr_proxy_globals.compound_cmd_waiting--;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      orte_gpr_proxy_globals.compound_cmd_mode = true;
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/iof/base/iof_base_flush.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/iof/base/iof_base_flush.c	(Revision 8667)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/iof/base/iof_base_flush.c	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -105,7 +105,10 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          if(pending != 0) {
</span><br>
<span class="quotelev1">&gt;              if(opal_event_progress_thread() == false) {
</span><br>
<span class="quotelev1">&gt; -                opal_condition_wait(&amp;orte_iof_base.iof_condition, &amp;orte_iof_base.iof_lock);
</span><br>
<span class="quotelev1">&gt; +                while (opal_event_progress_thread() == false) {
</span><br>
<span class="quotelev1">&gt; +                    opal_condition_wait(&amp;orte_iof_base.iof_condition,
</span><br>
<span class="quotelev1">&gt; +                                        &amp;orte_iof_base.iof_lock);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt;              } else {
</span><br>
<span class="quotelev1">&gt;                  OPAL_THREAD_UNLOCK(&amp;orte_iof_base.iof_lock);
</span><br>
<span class="quotelev1">&gt;                  opal_event_loop(OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/pls/rsh/pls_rsh_module.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/pls/rsh/pls_rsh_module.c	(Revision 8667)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/pls/rsh/pls_rsh_module.c	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -889,9 +889,10 @@
</span><br>
<span class="quotelev1">&gt;                  rsh_daemon_info_t *daemon_info;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  OPAL_THREAD_LOCK(&amp;mca_pls_rsh_component.lock);
</span><br>
<span class="quotelev1">&gt; -                if (mca_pls_rsh_component.num_children++ &gt;=
</span><br>
<span class="quotelev1">&gt; +                while (mca_pls_rsh_component.num_children++ &gt;=
</span><br>
<span class="quotelev1">&gt;                      mca_pls_rsh_component.num_concurrent) {
</span><br>
<span class="quotelev1">&gt; -                    opal_condition_wait(&amp;mca_pls_rsh_component.cond, &amp;mca_pls_rsh_component.lock);
</span><br>
<span class="quotelev1">&gt; +                    opal_condition_wait(&amp;mca_pls_rsh_component.cond,
</span><br>
<span class="quotelev1">&gt; +                                        &amp;mca_pls_rsh_component.lock);
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;                  OPAL_THREAD_UNLOCK(&amp;mca_pls_rsh_component.lock);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="0670.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0668.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>In reply to:</strong> <a href="0667.php">Rainer Keller: "while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0670.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
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
