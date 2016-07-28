<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21543";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 27 05:46:25 2009" -->
<!-- isoreceived="20090627094625" -->
<!-- sent="Sat, 27 Jun 2009 03:46:10 -0600" -->
<!-- isosent="20090627094610" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21543" -->
<!-- id="D115A59A-20F4-4A05-99DB-D809B23E2B4F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906262032.n5QKWVQf027980_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21543<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-27 05:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6363.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<li><strong>Previous message:</strong> <a href="6361.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George
<br>
<p>I'm not suggesting we do anything about this immediately. However,  
<br>
this does break heterogeneous operations, such as when we mix 32 and  
<br>
64-bit apps, or when ORTE is built 32-bit but someone runs a 64-bit app.
<br>
<p>The problem is that the very next step after grpcomm.modex in MPI_Init  
<br>
is to set the arch for all the procs. In hetero scenarios, this relies  
<br>
on having the archs updated via the returned modex values.  
<br>
Unfortunately, those values will not necessarily have been updated yet  
<br>
using this new code. You only block on a modex_recv call.
<br>
<p>So it is now a race condition as to whether or not you get the correct  
<br>
arch, and hence the correct datatype convertor, for your peers.
<br>
<p>This won't hurt us here, but I know that at least at one time Sun  
<br>
distributed 32-bit ORTE libs while supporting 64-bit apps. The problem  
<br>
then is that the arch we start with is that seen by ORTE, not the arch  
<br>
as seen by the 64-bit MPI proc. Thus, I believe this is going to be a  
<br>
more immediate problem for Sun.
<br>
<p>Terry (or any of you Sun folks): do you still do that, and am I  
<br>
correct in my assessment that this is a problem for Sun?
<br>
<p>Since we setup the BTL's right after the arch, I would have suggested  
<br>
we simply reverse that order, but at least some of the BTL's (a) copy  
<br>
that data, and (b) IIRC, may have some dependencies on knowing the  
<br>
remote arch during their setup.
<br>
<p>Any thoughts on how you could revise this to solve that problem?
<br>
<p>I'm also curious how much this really buys us since we do, after all,  
<br>
immediately turn around and setup the BTL's, which means they all call  
<br>
modex_recv pretty quickly - though I admit you could get a little  
<br>
progress in the interim. I'm just curious as to how far you really get  
<br>
before hitting the block anyway.
<br>
<p>Ralph
<br>
<p>On Jun 26, 2009, at 2:32 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-06-26 16:32:31 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21543
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21543">https://svn.open-mpi.org/trac/ompi/changeset/21543</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; BAD grpcomm now has the ability to execute the modex offline. The  
</span><br>
<span class="quotelev1">&gt; MPI process
</span><br>
<span class="quotelev1">&gt; prepare the send buffer, and post the collective order to the local  
</span><br>
<span class="quotelev1">&gt; daemon. It
</span><br>
<span class="quotelev1">&gt; then register the callback and return fromthe modex exchange. It  
</span><br>
<span class="quotelev1">&gt; will only
</span><br>
<span class="quotelev1">&gt; wait for this modex completion when the modex_recv is called.  
</span><br>
<span class="quotelev1">&gt; Meanwhile, the
</span><br>
<span class="quotelev1">&gt; daemon will do the allgather.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/bad/grpcomm_bad_module.c |   110 +++++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   1 files changed, 108 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/grpcomm/bad/grpcomm_bad_module.c
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
<span class="quotelev1">&gt; --- trunk/orte/mca/grpcomm/bad/grpcomm_bad_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/grpcomm/bad/grpcomm_bad_module.c	2009-06-26  
</span><br>
<span class="quotelev1">&gt; 16:32:31 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev1">&gt; @@ -52,6 +52,9 @@
</span><br>
<span class="quotelev1">&gt; static int barrier(void);
</span><br>
<span class="quotelev1">&gt; static int onesided_barrier(void);
</span><br>
<span class="quotelev1">&gt; static int modex(opal_list_t *procs);
</span><br>
<span class="quotelev1">&gt; +static int orte_grpcomm_bad_get_proc_attr(const orte_process_name_t  
</span><br>
<span class="quotelev1">&gt; proc,
</span><br>
<span class="quotelev1">&gt; +                                          const char *  
</span><br>
<span class="quotelev1">&gt; attribute_name, void **val,
</span><br>
<span class="quotelev1">&gt; +                                          size_t *size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Module def */
</span><br>
<span class="quotelev1">&gt; orte_grpcomm_base_module_t orte_grpcomm_bad_module = {
</span><br>
<span class="quotelev1">&gt; @@ -63,7 +66,7 @@
</span><br>
<span class="quotelev1">&gt;     barrier,
</span><br>
<span class="quotelev1">&gt;     onesided_barrier,
</span><br>
<span class="quotelev1">&gt;     orte_grpcomm_base_set_proc_attr,
</span><br>
<span class="quotelev1">&gt; -    orte_grpcomm_base_get_proc_attr,
</span><br>
<span class="quotelev1">&gt; +    orte_grpcomm_bad_get_proc_attr,
</span><br>
<span class="quotelev1">&gt;     modex,
</span><br>
<span class="quotelev1">&gt;     orte_grpcomm_base_purge_proc_attrs
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; @@ -488,8 +491,37 @@
</span><br>
<span class="quotelev1">&gt;     return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +static int
</span><br>
<span class="quotelev1">&gt; +orte_grpcomm_bad_get_proc_attr(const orte_process_name_t proc,
</span><br>
<span class="quotelev1">&gt; +                               const char * attribute_name, void  
</span><br>
<span class="quotelev1">&gt; **val,
</span><br>
<span class="quotelev1">&gt; +                               size_t *size)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    if( false == allgather_complete ) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_PROGRESSED_WAIT(allgather_complete, 0, 1);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return orte_grpcomm_base_get_proc_attr(proc, attribute_name,  
</span><br>
<span class="quotelev1">&gt; val, size);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /***   MODEX SECTION ***/
</span><br>
<span class="quotelev1">&gt; +static void allgather_recv_modex(int status, orte_process_name_t*  
</span><br>
<span class="quotelev1">&gt; sender,
</span><br>
<span class="quotelev1">&gt; +                                 opal_buffer_t *buffer,
</span><br>
<span class="quotelev1">&gt; +                                 orte_rml_tag_t tag, void *cbdata)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_buffer_t *allgather_buf = (opal_buffer_t*)cbdata;
</span><br>
<span class="quotelev1">&gt; +    int rc;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    OPAL_OUTPUT_VERBOSE((1, orte_grpcomm_base_output,
</span><br>
<span class="quotelev1">&gt; +                         &quot;%s grpcomm:bad modex received&quot;,
</span><br>
<span class="quotelev1">&gt; +                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if( ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_grpcomm_base_modex_unpack(buffer, true)) ) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    OBJ_RELEASE(allgather_buf);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    allgather_complete = true;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; static int modex(opal_list_t *procs)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt; @@ -499,9 +531,83 @@
</span><br>
<span class="quotelev1">&gt;                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (NULL == procs) {
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_grpcomm_base_peer_modex(true))) {
</span><br>
<span class="quotelev1">&gt; +        /* The modex will be realized in the background by the  
</span><br>
<span class="quotelev1">&gt; daemons. The processes will
</span><br>
<span class="quotelev1">&gt; +         * only be informed when all data has been collected from  
</span><br>
<span class="quotelev1">&gt; all processes. The get_attr
</span><br>
<span class="quotelev1">&gt; +         * will realize the blocking, it will not return until the  
</span><br>
<span class="quotelev1">&gt; data has been rteceived.
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        opal_buffer_t *buf, *rbuf;
</span><br>
<span class="quotelev1">&gt; +        orte_grpcomm_coll_t coll_type = ORTE_GRPCOMM_ALLGATHER;
</span><br>
<span class="quotelev1">&gt; +        bool modex_reqd = true;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        OPAL_OUTPUT_VERBOSE((1, orte_grpcomm_base_output,
</span><br>
<span class="quotelev1">&gt; +                             &quot;%s grpcomm:bad:peer:modex: performing  
</span><br>
<span class="quotelev1">&gt; modex&quot;,
</span><br>
<span class="quotelev1">&gt; +                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* setup the buffer that will actually be sent */
</span><br>
<span class="quotelev1">&gt; +        buf  = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; +        rbuf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* tell the daemon we are doing an allgather */
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc = opal_dss.pack(buf, &amp;coll_type, 1,  
</span><br>
<span class="quotelev1">&gt; ORTE_GRPCOMM_COLL_T))) {
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +            return rc;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* put our process name in the buffer so it can be unpacked  
</span><br>
<span class="quotelev1">&gt; later */
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc = opal_dss.pack(buf,  
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_NAME, 1, ORTE_NAME))) {
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +            goto cleanup;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc = opal_dss.pack(buf,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_process_info.arch, 1, OPAL_UINT32))) {
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +            goto cleanup;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* pack the entries we have received */
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_grpcomm_base_pack_modex_entries(buf, &amp;modex_reqd))) {
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +            goto cleanup;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        OPAL_OUTPUT_VERBOSE((2, orte_grpcomm_base_output,
</span><br>
<span class="quotelev1">&gt; +                             &quot;%s grpcomm:bad:peer:modex: executing  
</span><br>
<span class="quotelev1">&gt; non-blocking allgather&quot;,
</span><br>
<span class="quotelev1">&gt; +                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* send to local daemon */
</span><br>
<span class="quotelev1">&gt; +        if (0 &gt; (rc = orte_rml.send_buffer(ORTE_PROC_MY_DAEMON,  
</span><br>
<span class="quotelev1">&gt; buf, ORTE_RML_TAG_DAEMON_COLLECTIVE, 0))) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +            return rc;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        OPAL_OUTPUT_VERBOSE((2, orte_grpcomm_base_output,
</span><br>
<span class="quotelev1">&gt; +                             &quot;%s grpcomm:bad allgather buffer sent&quot;,
</span><br>
<span class="quotelev1">&gt; +                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* now receive the final result. Be sure to do this in
</span><br>
<span class="quotelev1">&gt; +         * a manner that allows us to return without being in a recv!
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        allgather_complete = false;
</span><br>
<span class="quotelev1">&gt; +        rc = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_ALLGATHER,
</span><br>
<span class="quotelev1">&gt; +                                     ORTE_RML_NON_PERSISTENT,  
</span><br>
<span class="quotelev1">&gt; allgather_recv_modex, (void*)rbuf);
</span><br>
<span class="quotelev1">&gt; +        if (rc != ORTE_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +            return rc;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        rbuf = NULL;  /* make sure we don't release it yet */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        OPAL_OUTPUT_VERBOSE((1, orte_grpcomm_base_output,
</span><br>
<span class="quotelev1">&gt; +                             &quot;%s grpcomm:bad: modex posted&quot;,
</span><br>
<span class="quotelev1">&gt; +                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt; + cleanup:
</span><br>
<span class="quotelev1">&gt; +        if( NULL != buf ) {
</span><br>
<span class="quotelev1">&gt; +            OBJ_RELEASE(buf);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        if( NULL != rbuf ) {
</span><br>
<span class="quotelev1">&gt; +            OBJ_RELEASE(rbuf);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        return rc;
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_grpcomm_base_full_modex(procs, true))) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(rc);
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
<li><strong>Next message:</strong> <a href="6363.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<li><strong>Previous message:</strong> <a href="6361.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
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
