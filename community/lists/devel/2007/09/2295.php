<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 10:14:37 2007" -->
<!-- isoreceived="20070911141437" -->
<!-- sent="Tue, 11 Sep 2007 10:14:30 -0400" -->
<!-- isosent="20070911141430" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088" -->
<!-- id="60F27BDC-7DB1-4FD7-A54A-D499699F2CB1_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200709111323.l8BDNlZn026881_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-09-11 10:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2296.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
<li><strong>Previous message:</strong> <a href="2294.php">Aurelien Bouteiller: "Re: [OMPI devel] Adding a new component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2296.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
<li><strong>Reply:</strong> <a href="2296.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb,
<br>
<p>This patch is not correct. The code preventing the registration of  
<br>
the same communicator twice is later in the code (same file in the  
<br>
function ompi_comm_register_cid line 326). Once the function  
<br>
ompi_comm_register_cid is called, we know that each communicator only  
<br>
handle one &quot;communicator creation&quot; function at the same time.  
<br>
Therefore, we want to give priority to the smallest com_id, which is  
<br>
what happens in the code you removed.
<br>
<p>Without the condition in the ompi_comm_register_cid (each  
<br>
communicator only get registered once) your comment make sense.  
<br>
However, with the condition your patch allow a dead end situation,  
<br>
while 2 processes try to create communicators in multiple threads,  
<br>
and they will never succeed, simply because they will not order the  
<br>
creation based on the com_id.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><p>On Sep 11, 2007, at 9:23 AM, gleb_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: gleb
</span><br>
<span class="quotelev1">&gt; Date: 2007-09-11 09:23:46 EDT (Tue, 11 Sep 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16088
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16088">https://svn.open-mpi.org/trac/ompi/changeset/16088</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; The code tries to prevent itself from running for more then one  
</span><br>
<span class="quotelev1">&gt; communicator
</span><br>
<span class="quotelev1">&gt; simultaneously, but is doing it incorrectly. If the function is  
</span><br>
<span class="quotelev1">&gt; running already
</span><br>
<span class="quotelev1">&gt; for one communicator and it is called from another thread for other  
</span><br>
<span class="quotelev1">&gt; communicator
</span><br>
<span class="quotelev1">&gt; with lower cid the check comm-&gt;c_contextid != ompi_comm_lowest_cid()
</span><br>
<span class="quotelev1">&gt; will fail and the function will be executed for two different  
</span><br>
<span class="quotelev1">&gt; communicators by
</span><br>
<span class="quotelev1">&gt; two threads simultaneously. There is nothing in the algorithm that  
</span><br>
<span class="quotelev1">&gt; prevent it
</span><br>
<span class="quotelev1">&gt; from been running simultaneously for different communicators as far  
</span><br>
<span class="quotelev1">&gt; as I can see,
</span><br>
<span class="quotelev1">&gt; but ompi_comm_unregister_cid() assumes that it is always called for  
</span><br>
<span class="quotelev1">&gt; a communicator
</span><br>
<span class="quotelev1">&gt; with the lowest cid and this is not always the case. This patch  
</span><br>
<span class="quotelev1">&gt; removes bogus
</span><br>
<span class="quotelev1">&gt; lowest cid check and fix ompi_comm_register_cid() to properly  
</span><br>
<span class="quotelev1">&gt; remove cid from
</span><br>
<span class="quotelev1">&gt; the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/communicator/comm_cid.c |    24 ++++++++++++------------
</span><br>
<span class="quotelev1">&gt;    1 files changed, 12 insertions(+), 12 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/communicator/comm_cid.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/communicator/comm_cid.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/communicator/comm_cid.c	2007-09-11 09:23:46 EDT  
</span><br>
<span class="quotelev1">&gt; (Tue, 11 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -11,6 +11,7 @@
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2006-2007 University of Houston. All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2007      Cisco, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Voltaire All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -170,15 +171,6 @@
</span><br>
<span class="quotelev1">&gt;               * This is the real algorithm described in the doc
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_LOCK(&amp;ompi_cid_lock);
</span><br>
<span class="quotelev1">&gt; -            if (comm-&gt;c_contextid != ompi_comm_lowest_cid() ) {
</span><br>
<span class="quotelev1">&gt; -                /* if not lowest cid, we do not continue, but  
</span><br>
<span class="quotelev1">&gt; sleep and try again */
</span><br>
<span class="quotelev1">&gt; -                OPAL_THREAD_UNLOCK(&amp;ompi_cid_lock);
</span><br>
<span class="quotelev1">&gt; -                continue;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            OPAL_THREAD_UNLOCK(&amp;ompi_cid_lock);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;              for (i=start; i &lt; mca_pml.pml_max_contextid ; i++) {
</span><br>
<span class="quotelev1">&gt;                  flag=ompi_pointer_array_test_and_set_item 
</span><br>
<span class="quotelev1">&gt; (&amp;ompi_mpi_communicators,
</span><br>
<span class="quotelev1">&gt;                                                            i, comm);
</span><br>
<span class="quotelev1">&gt; @@ -365,10 +357,18 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static int ompi_comm_unregister_cid (uint32_t cid)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    ompi_comm_reg_t *regcom=NULL;
</span><br>
<span class="quotelev1">&gt; -    opal_list_item_t *item=opal_list_remove_first 
</span><br>
<span class="quotelev1">&gt; (&amp;ompi_registered_comms);
</span><br>
<span class="quotelev1">&gt; +    ompi_comm_reg_t *regcom;
</span><br>
<span class="quotelev1">&gt; +    opal_list_item_t *item;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    regcom = (ompi_comm_reg_t *) item;
</span><br>
<span class="quotelev1">&gt; +    for (item = opal_list_get_first(&amp;ompi_registered_comms);
</span><br>
<span class="quotelev1">&gt; +         item != opal_list_get_end(&amp;ompi_registered_comms);
</span><br>
<span class="quotelev1">&gt; +         item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt; +        regcom = (ompi_comm_reg_t *)item;
</span><br>
<span class="quotelev1">&gt; +        if(regcom-&gt;cid == cid) {
</span><br>
<span class="quotelev1">&gt; +            opal_list_remove_item(&amp;ompi_registered_comms, item);
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;      OBJ_RELEASE(regcom);
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2295/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2296.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
<li><strong>Previous message:</strong> <a href="2294.php">Aurelien Bouteiller: "Re: [OMPI devel] Adding a new component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2296.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
<li><strong>Reply:</strong> <a href="2296.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
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
