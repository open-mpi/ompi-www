<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 11:39:12 2007" -->
<!-- isoreceived="20070911153912" -->
<!-- sent="Tue, 11 Sep 2007 10:39:00 -0500" -->
<!-- isosent="20070911153900" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088" -->
<!-- id="46E6B694.1070408_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070911152821.GB28957_at_minantech.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-11 11:39:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2304.php">Jeff Squyres: "[OMPI devel] Coverity"</a>
<li><strong>Previous message:</strong> <a href="2302.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
<li><strong>In reply to:</strong> <a href="2300.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Tue, Sep 11, 2007 at 10:00:07AM -0500, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gleb,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in the scenario which you describe in the comment to the patch, what 
</span><br>
<span class="quotelev2">&gt;&gt; should happen is, that the communicator with the cid which started 
</span><br>
<span class="quotelev2">&gt;&gt; already the allreduce will basically 'hang' until the other processes 
</span><br>
<span class="quotelev2">&gt;&gt; 'allow' the lower cids to continue. It should basically be blocked in 
</span><br>
<span class="quotelev2">&gt;&gt; the allreduce.
</span><br>
<span class="quotelev1">&gt; Why? Two threads are allowed to run allreduce simultaneously for different
</span><br>
<span class="quotelev1">&gt; communicators. Are they?
</span><br>
<p>They are, but they might never agree on the cid. This is simply how the 
<br>
algorithm was designed originally -- which does not mean, that it has to 
<br>
remain this way, just to explain its behavior and the intent. See the 
<br>
design doc for that in ompi-docs in the January 2004 repository.
<br>
<p>Lets assume, that we have n procs with 2 threads, and both threads do a 
<br>
comm_create at the same time, input cid 1 and cid 2. N-1 processes let 
<br>
cid 1 start because that's the lower number. However, one process let 
<br>
cid 2 start because the other thread was late. What would happen in the 
<br>
algorithm is nobody responds to cid 2, so it would hang. As soon as the 
<br>
other thread with cid 1 enters the comm_create, it would be allowed to 
<br>
run, this operation would finish. The other threads would then allow cid 
<br>
2 to enter, the 'hanging' process would be released.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, here is something, where we might have problems with the sun 
</span><br>
<span class="quotelev2">&gt;&gt; thread tests (and we discussed that with Terry already): the cid 
</span><br>
<span class="quotelev2">&gt;&gt; allocation algorithm as implemented in Open MPI assumes ( -- this was/is 
</span><br>
<span class="quotelev2">&gt;&gt; my/our understanding of the standard --) that a communicator creation is 
</span><br>
<span class="quotelev2">&gt;&gt; a collective operation. This means, you can not have a comm_create and 
</span><br>
<span class="quotelev2">&gt;&gt; another allreduce of the same communicator running in different threads, 
</span><br>
<span class="quotelev2">&gt;&gt; because these allreduces will mix up and produce non-sense results. We 
</span><br>
<span class="quotelev2">&gt;&gt; fixed the case, if all collective operations are comm_creates, but if 
</span><br>
<span class="quotelev2">&gt;&gt; some of the threads are in a comm_create and some are in allreduce on 
</span><br>
<span class="quotelev2">&gt;&gt; the same communicator, it won't work.
</span><br>
<span class="quotelev1">&gt; Correct, but this is not what happens with mt_coll test. mt_coll calls
</span><br>
<span class="quotelev1">&gt; commdup on the same communicator in different threads concurrently, but
</span><br>
<span class="quotelev1">&gt; we handle this case inside ompi_comm_nextcid().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Sep 11, 2007 at 10:14:30AM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gleb,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This patch is not correct. The code preventing the registration of the same 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communicator twice is later in the code (same file in the function 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_comm_register_cid line 326). Once the function ompi_comm_register_cid 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I saw this code and the comment. The problem is not with the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator but with different communicators.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is called, we know that each communicator only handle one &quot;communicator 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; creation&quot; function at the same time. Therefore, we want to give priority to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the smallest com_id, which is what happens in the code you removed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code I removed was doing it wrongly. I.e the algorithm sometimes is executed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for different communicators simultaneously by different threads. Think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about the case where the function is running for cid 1 and then another
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread runs it for cid 0. cid 0 will proceed although the function is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executed on another CPU. And this is not something theoretical, that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is happening with sun's thread test suit mpi_coll test case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Without the condition in the ompi_comm_register_cid (each communicator only 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get registered once) your comment make sense. However, with the condition 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your patch allow a dead end situation, while 2 processes try to create 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communicators in multiple threads, and they will never succeed, simply 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because they will not order the creation based on the com_id.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the algorithm is really prone to deadlock in case it is concurrently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executed for several different communicators (I haven't check this),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then we may want to fix original code to really prevent two threads to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enter the function, but then I don't see the reason for all those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complications with ompi_comm_register_cid()/ompi_comm_unregister_cid()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The algorithm described here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://209.85.129.104/search?q=cache:5PV5MMRkBWkJ:ftp://info.mcs.anl.gov/pub/tech_reports/reports/P1382.pdf+MPI+communicator+dup+algorithm&amp;hl=en&amp;ct=clnk&amp;cd=2">http://209.85.129.104/search?q=cache:5PV5MMRkBWkJ:ftp://info.mcs.anl.gov/pub/tech_reports/reports/P1382.pdf+MPI+communicator+dup+algorithm&amp;hl=en&amp;ct=clnk&amp;cd=2</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in section 5.3 works without it and we can do something similar.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 11, 2007, at 9:23 AM, gleb_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Author: gleb
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: 2007-09-11 09:23:46 EDT (Tue, 11 Sep 2007)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; New Revision: 16088
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16088">https://svn.open-mpi.org/trac/ompi/changeset/16088</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The code tries to prevent itself from running for more then one 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; simultaneously, but is doing it incorrectly. If the function is running 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; already
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for one communicator and it is called from another thread for other 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with lower cid the check comm-&gt;c_contextid != ompi_comm_lowest_cid()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will fail and the function will be executed for two different 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicators by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; two threads simultaneously. There is nothing in the algorithm that prevent 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from been running simultaneously for different communicators as far as I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can see,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but ompi_comm_unregister_cid() assumes that it is always called for a 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with the lowest cid and this is not always the case. This patch removes 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lowest cid check and fix ompi_comm_register_cid() to properly remove cid 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the list.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    trunk/ompi/communicator/comm_cid.c |    24 ++++++++++++------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    1 files changed, 12 insertions(+), 12 deletions(-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Modified: trunk/ompi/communicator/comm_cid.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- trunk/ompi/communicator/comm_cid.c	(original)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ trunk/ompi/communicator/comm_cid.c	2007-09-11 09:23:46 EDT (Tue, 11 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sep 2007)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -11,6 +11,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   * Copyright (c) 2006-2007 University of Houston. All rights reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   * Copyright (c) 2007      Cisco, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + * Copyright (c) 2007      Voltaire All rights reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -170,15 +171,6 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               * This is the real algorithm described in the doc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            OPAL_THREAD_LOCK(&amp;ompi_cid_lock);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            if (comm-&gt;c_contextid != ompi_comm_lowest_cid() ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -                /* if not lowest cid, we do not continue, but sleep and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; try again */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -                OPAL_THREAD_UNLOCK(&amp;ompi_cid_lock);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -                continue;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            OPAL_THREAD_UNLOCK(&amp;ompi_cid_lock);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              for (i=start; i &lt; mca_pml.pml_max_contextid ; i++) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flag=ompi_pointer_array_test_and_set_item(&amp;ompi_mpi_communicators,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                                            i, comm);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -365,10 +357,18 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  static int ompi_comm_unregister_cid (uint32_t cid)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    ompi_comm_reg_t *regcom=NULL;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    opal_list_item_t 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *item=opal_list_remove_first(&amp;ompi_registered_comms);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    ompi_comm_reg_t *regcom;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    opal_list_item_t *item;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    regcom = (ompi_comm_reg_t *) item;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    for (item = opal_list_get_first(&amp;ompi_registered_comms);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +         item != opal_list_get_end(&amp;ompi_registered_comms);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +         item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        regcom = (ompi_comm_reg_t *)item;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        if(regcom-&gt;cid == cid) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +            opal_list_remove_item(&amp;ompi_registered_comms, item);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +            break;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      OBJ_RELEASE(regcom);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2304.php">Jeff Squyres: "[OMPI devel] Coverity"</a>
<li><strong>Previous message:</strong> <a href="2302.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
<li><strong>In reply to:</strong> <a href="2300.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
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
