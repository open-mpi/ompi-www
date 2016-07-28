<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 10:07:03 2011" -->
<!-- isoreceived="20111019140703" -->
<!-- sent="Wed, 19 Oct 2011 08:06:54 -0600" -->
<!-- isosent="20111019140654" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323" -->
<!-- id="AE709D60-FCF3-4BDD-8010-66D9D3AF4CA6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201110190351.p9J3psfh016800_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 10:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9844.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9842.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9844.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9844.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Maybe reply:</strong> <a href="9850.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are going to make such sweeping changes, could you please provide a little warning as per our usual methods? This broke several things which can be repaired, but would have been nice to know that we were going to make such a change.
<br>
<p>Thx
<br>
<p><p>On Oct 18, 2011, at 9:51 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2011-10-18 23:51:53 EDT (Tue, 18 Oct 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25323
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25323">https://svn.open-mpi.org/trac/ompi/changeset/25323</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Cleanup the error codes. Get rid of all the useless ones, and
</span><br>
<span class="quotelev1">&gt; mark the distinction between ORTE and OMPI errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/errhandler/errcode-internal.c |    32 ---------------                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/include/ompi/constants.h      |    80 +++++++++++++++++-----------------------
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/common/sm/common_sm_rml.c |     6 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/dr/pml_dr_sendreq.c   |     5 --                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mpiext/cr/c/quiesce_start.c   |     5 ++                                      
</span><br>
<span class="quotelev1">&gt;   5 files changed, 43 insertions(+), 85 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/errhandler/errcode-internal.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/errhandler/errcode-internal.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/errhandler/errcode-internal.c	2011-10-18 23:51:53 EDT (Tue, 18 Oct 2011)
</span><br>
<span class="quotelev1">&gt; @@ -3,7 +3,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt;  *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2007 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2011 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt;  *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev1">&gt; @@ -35,9 +35,6 @@
</span><br>
<span class="quotelev1">&gt; static ompi_errcode_intern_t ompi_err_temp_out_of_resource;
</span><br>
<span class="quotelev1">&gt; static ompi_errcode_intern_t ompi_err_resource_busy;
</span><br>
<span class="quotelev1">&gt; static ompi_errcode_intern_t ompi_err_bad_param;
</span><br>
<span class="quotelev1">&gt; -static ompi_errcode_intern_t ompi_err_recv_less_than_posted;
</span><br>
<span class="quotelev1">&gt; -static ompi_errcode_intern_t ompi_err_recv_more_than_posted;
</span><br>
<span class="quotelev1">&gt; -static ompi_errcode_intern_t ompi_err_no_match_yet;
</span><br>
<span class="quotelev1">&gt; static ompi_errcode_intern_t ompi_err_fatal;
</span><br>
<span class="quotelev1">&gt; static ompi_errcode_intern_t ompi_err_not_implemented;
</span><br>
<span class="quotelev1">&gt; static ompi_errcode_intern_t ompi_err_not_supported;
</span><br>
<span class="quotelev1">&gt; @@ -115,30 +112,6 @@
</span><br>
<span class="quotelev1">&gt;     opal_pointer_array_set_item(&amp;ompi_errcodes_intern, ompi_err_bad_param.index, 
</span><br>
<span class="quotelev1">&gt;                                 &amp;ompi_err_bad_param);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    OBJ_CONSTRUCT(&amp;ompi_err_recv_less_than_posted, ompi_errcode_intern_t);
</span><br>
<span class="quotelev1">&gt; -    ompi_err_recv_less_than_posted.code = OMPI_ERR_RECV_LESS_THAN_POSTED;
</span><br>
<span class="quotelev1">&gt; -    ompi_err_recv_less_than_posted.mpi_code = MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -    ompi_err_recv_less_than_posted.index = pos++;
</span><br>
<span class="quotelev1">&gt; -    strncpy(ompi_err_recv_less_than_posted.errstring, &quot;OMPI_ERR_RECV_LESS_THAN_POSTED&quot;, OMPI_MAX_ERROR_STRING);
</span><br>
<span class="quotelev1">&gt; -    opal_pointer_array_set_item(&amp;ompi_errcodes_intern, ompi_err_recv_less_than_posted.index, 
</span><br>
<span class="quotelev1">&gt; -                                &amp;ompi_err_recv_less_than_posted);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    OBJ_CONSTRUCT(&amp;ompi_err_recv_more_than_posted, ompi_errcode_intern_t);
</span><br>
<span class="quotelev1">&gt; -    ompi_err_recv_more_than_posted.code = OMPI_ERR_RECV_MORE_THAN_POSTED;
</span><br>
<span class="quotelev1">&gt; -    ompi_err_recv_more_than_posted.mpi_code = MPI_ERR_TRUNCATE;
</span><br>
<span class="quotelev1">&gt; -    ompi_err_recv_more_than_posted.index = pos++;
</span><br>
<span class="quotelev1">&gt; -    strncpy(ompi_err_recv_more_than_posted.errstring, &quot;OMPI_ERR_RECV_MORE_THAN_POSTED&quot;, OMPI_MAX_ERROR_STRING);
</span><br>
<span class="quotelev1">&gt; -    opal_pointer_array_set_item(&amp;ompi_errcodes_intern, ompi_err_recv_more_than_posted.index, 
</span><br>
<span class="quotelev1">&gt; -                                &amp;ompi_err_recv_more_than_posted);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    OBJ_CONSTRUCT(&amp;ompi_err_no_match_yet, ompi_errcode_intern_t);
</span><br>
<span class="quotelev1">&gt; -    ompi_err_no_match_yet.code = OMPI_ERR_NO_MATCH_YET;
</span><br>
<span class="quotelev1">&gt; -    ompi_err_no_match_yet.mpi_code = MPI_ERR_PENDING;
</span><br>
<span class="quotelev1">&gt; -    ompi_err_no_match_yet.index = pos++;
</span><br>
<span class="quotelev1">&gt; -    strncpy(ompi_err_no_match_yet.errstring, &quot;OMPI_ERR_NO_MATCH_YET&quot;, OMPI_MAX_ERROR_STRING);
</span><br>
<span class="quotelev1">&gt; -    opal_pointer_array_set_item(&amp;ompi_errcodes_intern, ompi_err_no_match_yet.index, 
</span><br>
<span class="quotelev1">&gt; -                                &amp;ompi_err_no_match_yet);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;ompi_err_fatal, ompi_errcode_intern_t);
</span><br>
<span class="quotelev1">&gt;     ompi_err_fatal.code = OMPI_ERR_FATAL;
</span><br>
<span class="quotelev1">&gt;     ompi_err_fatal.mpi_code = MPI_ERR_INTERN;
</span><br>
<span class="quotelev1">&gt; @@ -232,9 +205,6 @@
</span><br>
<span class="quotelev1">&gt;     OBJ_DESTRUCT(&amp;ompi_err_temp_out_of_resource);
</span><br>
<span class="quotelev1">&gt;     OBJ_DESTRUCT(&amp;ompi_err_resource_busy);
</span><br>
<span class="quotelev1">&gt;     OBJ_DESTRUCT(&amp;ompi_err_bad_param);
</span><br>
<span class="quotelev1">&gt; -    OBJ_DESTRUCT(&amp;ompi_err_recv_less_than_posted);
</span><br>
<span class="quotelev1">&gt; -    OBJ_DESTRUCT(&amp;ompi_err_recv_more_than_posted);
</span><br>
<span class="quotelev1">&gt; -    OBJ_DESTRUCT(&amp;ompi_err_no_match_yet);
</span><br>
<span class="quotelev1">&gt;     OBJ_DESTRUCT(&amp;ompi_err_fatal);
</span><br>
<span class="quotelev1">&gt;     OBJ_DESTRUCT(&amp;ompi_err_not_implemented);
</span><br>
<span class="quotelev1">&gt;     OBJ_DESTRUCT(&amp;ompi_err_not_supported);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/include/ompi/constants.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/include/ompi/constants.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/include/ompi/constants.h	2011-10-18 23:51:53 EDT (Tue, 18 Oct 2011)
</span><br>
<span class="quotelev1">&gt; @@ -19,61 +19,49 @@
</span><br>
<span class="quotelev1">&gt; #ifndef OMPI_CONSTANTS_H
</span><br>
<span class="quotelev1">&gt; #define OMPI_CONSTANTS_H
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#include &quot;orte/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#define OMPI_ERR_BASE   ORTE_ERR_MAX
</span><br>
<span class="quotelev1">&gt; +#define OMPI_ERR_BASE   OPAL_ERR_MAX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* error codes */
</span><br>
<span class="quotelev1">&gt; enum {
</span><br>
<span class="quotelev1">&gt;     /* Error codes inherited from ORTE/OPAL.  Still enum values so
</span><br>
<span class="quotelev1">&gt;        that we might get nice debugger help */
</span><br>
<span class="quotelev1">&gt; -    OMPI_SUCCESS                  = OPAL_SUCCESS,
</span><br>
<span class="quotelev1">&gt; +    OMPI_SUCCESS                    = OPAL_SUCCESS,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERROR                      = OPAL_ERROR,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_OUT_OF_RESOURCE        = OPAL_ERR_OUT_OF_RESOURCE,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_TEMP_OUT_OF_RESOURCE   = OPAL_ERR_TEMP_OUT_OF_RESOURCE,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_RESOURCE_BUSY          = OPAL_ERR_RESOURCE_BUSY,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_BAD_PARAM              = OPAL_ERR_BAD_PARAM,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_FATAL                  = OPAL_ERR_FATAL,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_NOT_IMPLEMENTED        = OPAL_ERR_NOT_IMPLEMENTED,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_NOT_SUPPORTED          = OPAL_ERR_NOT_SUPPORTED,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_INTERUPTED             = OPAL_ERR_INTERUPTED,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_WOULD_BLOCK            = OPAL_ERR_WOULD_BLOCK,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_IN_ERRNO               = OPAL_ERR_IN_ERRNO,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_UNREACH                = OPAL_ERR_UNREACH,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_NOT_FOUND              = OPAL_ERR_NOT_FOUND,
</span><br>
<span class="quotelev1">&gt; +    OMPI_EXISTS                     = OPAL_EXISTS, /* indicates that the specified object already exists */
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_TIMEOUT                = OPAL_ERR_TIMEOUT,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_NOT_AVAILABLE          = OPAL_ERR_NOT_AVAILABLE,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_PERM                   = OPAL_ERR_PERM,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_VALUE_OUT_OF_BOUNDS    = OPAL_ERR_VALUE_OUT_OF_BOUNDS,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_FILE_READ_FAILURE      = OPAL_ERR_FILE_READ_FAILURE,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_FILE_WRITE_FAILURE     = OPAL_ERR_FILE_WRITE_FAILURE,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_FILE_OPEN_FAILURE      = OPAL_ERR_FILE_OPEN_FAILURE,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_PACK_MISMATCH          = OPAL_ERR_PACK_MISMATCH,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_PACK_FAILURE           = OPAL_ERR_PACK_FAILURE,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_UNPACK_FAILURE         = OPAL_ERR_UNPACK_FAILURE,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_TYPE_MISMATCH          = OPAL_ERR_TYPE_MISMATCH,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_UNKNOWN_DATA_TYPE      = OPAL_ERR_UNKNOWN_DATA_TYPE,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_DATA_TYPE_REDEF        = OPAL_ERR_DATA_TYPE_REDEF,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_DATA_OVERWRITE_ATTEMPT = OPAL_ERR_DATA_OVERWRITE_ATTEMPT,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERROR                    = OPAL_ERROR,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_OUT_OF_RESOURCE      = OPAL_ERR_OUT_OF_RESOURCE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_TEMP_OUT_OF_RESOURCE = OPAL_ERR_TEMP_OUT_OF_RESOURCE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_RESOURCE_BUSY        = OPAL_ERR_RESOURCE_BUSY,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_BAD_PARAM            = OPAL_ERR_BAD_PARAM,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_FATAL                = OPAL_ERR_FATAL,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_NOT_IMPLEMENTED      = OPAL_ERR_NOT_IMPLEMENTED,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_NOT_SUPPORTED        = OPAL_ERR_NOT_SUPPORTED,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_INTERUPTED           = OPAL_ERR_INTERUPTED,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_WOULD_BLOCK          = OPAL_ERR_WOULD_BLOCK,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_IN_ERRNO             = OPAL_ERR_IN_ERRNO,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_UNREACH              = OPAL_ERR_UNREACH,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_NOT_FOUND            = OPAL_ERR_NOT_FOUND,
</span><br>
<span class="quotelev1">&gt; -    OMPI_EXISTS                   = OPAL_EXISTS, /* indicates that the specified object already exists */
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_TIMEOUT              = OPAL_ERR_TIMEOUT,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_NOT_AVAILABLE        = OPAL_ERR_NOT_AVAILABLE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_PERM                 = OPAL_ERR_PERM,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_VALUE_OUT_OF_BOUNDS  = OPAL_ERR_VALUE_OUT_OF_BOUNDS,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_FILE_READ_FAILURE    = OPAL_ERR_FILE_READ_FAILURE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_FILE_WRITE_FAILURE   = OPAL_ERR_FILE_WRITE_FAILURE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_FILE_OPEN_FAILURE    = OPAL_ERR_FILE_OPEN_FAILURE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_PACK_MISMATCH                  = OPAL_ERR_PACK_MISMATCH,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_PACK_FAILURE                   = OPAL_ERR_PACK_FAILURE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_UNPACK_FAILURE                 = OPAL_ERR_UNPACK_FAILURE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_UNPACK_INADEQUATE_SPACE        = ORTE_ERR_UNPACK_INADEQUATE_SPACE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_UNPACK_READ_PAST_END_OF_BUFFER = ORTE_ERR_UNPACK_READ_PAST_END_OF_BUFFER,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_TYPE_MISMATCH                  = OPAL_ERR_TYPE_MISMATCH,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_UNKNOWN_DATA_TYPE              = OPAL_ERR_UNKNOWN_DATA_TYPE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_DATA_TYPE_REDEF                = OPAL_ERR_DATA_TYPE_REDEF,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_DATA_OVERWRITE_ATTEMPT         = OPAL_ERR_DATA_OVERWRITE_ATTEMPT,
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_RECV_LESS_THAN_POSTED          = ORTE_ERR_RECV_LESS_THAN_POSTED,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_RECV_MORE_THAN_POSTED          = ORTE_ERR_RECV_MORE_THAN_POSTED,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_NO_MATCH_YET                   = ORTE_ERR_NO_MATCH_YET,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_BUFFER                         = OPAL_ERR_BUFFER,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_REQUEST                        = ORTE_ERR_REQUEST,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_NO_CONNECTION_ALLOWED          = ORTE_ERR_NO_CONNECTION_ALLOWED,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_CONNECTION_REFUSED             = ORTE_ERR_CONNECTION_REFUSED   ,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_CONNECTION_FAILED              = ORTE_ERR_CONNECTION_FAILED,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_COMM_FAILURE                   = ORTE_ERR_COMM_FAILURE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_COMPARE_FAILURE                = ORTE_ERR_COMPARE_FAILURE,
</span><br>
<span class="quotelev1">&gt; -    OMPI_ERR_COPY_FAILURE                   = ORTE_ERR_COPY_FAILURE
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_BUFFER                 = OPAL_ERR_BUFFER,
</span><br>
<span class="quotelev1">&gt; +    OMPI_ERR_REQUEST                = OMPI_ERR_BASE + 1
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#define OMPI_ERR_MAX                    (OMPI_ERR_BASE - 1)
</span><br>
<span class="quotelev1">&gt; +#define OMPI_ERR_MAX                    (OMPI_ERR_BASE + 2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #endif /* OMPI_CONSTANTS_H */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/common/sm/common_sm_rml.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/common/sm/common_sm_rml.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/common/sm/common_sm_rml.c	2011-10-18 23:51:53 EDT (Tue, 18 Oct 2011)
</span><br>
<span class="quotelev1">&gt; @@ -2,7 +2,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt;  *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2011 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt;  *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2009 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev1">&gt; @@ -82,7 +82,7 @@
</span><br>
<span class="quotelev1">&gt;             iovrc = orte_rml.send(&amp;(procs[p]-&gt;proc_name), iov,
</span><br>
<span class="quotelev1">&gt;                                   MCA_COMMON_SM_RML_MSG_LEN, tag, 0);
</span><br>
<span class="quotelev1">&gt;             if ((ssize_t)(iov[0].iov_len + iov[1].iov_len) &gt; iovrc) {
</span><br>
<span class="quotelev1">&gt; -                ORTE_ERROR_LOG(OMPI_ERR_COMM_FAILURE);
</span><br>
<span class="quotelev1">&gt; +                ORTE_ERROR_LOG(ORTE_ERR_COMM_FAILURE);
</span><br>
<span class="quotelev1">&gt;                 opal_progress_event_users_decrement();
</span><br>
<span class="quotelev1">&gt;                 rc = OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;                 goto out;
</span><br>
<span class="quotelev1">&gt; @@ -123,7 +123,7 @@
</span><br>
<span class="quotelev1">&gt;                                       MCA_COMMON_SM_RML_MSG_LEN, tag, 0);
</span><br>
<span class="quotelev1">&gt;                 opal_progress_event_users_decrement();
</span><br>
<span class="quotelev1">&gt;                 if (iovrc &lt; 0) {
</span><br>
<span class="quotelev1">&gt; -                    ORTE_ERROR_LOG(OMPI_ERR_RECV_LESS_THAN_POSTED);
</span><br>
<span class="quotelev1">&gt; +                    ORTE_ERROR_LOG(ORTE_ERR_RECV_LESS_THAN_POSTED);
</span><br>
<span class="quotelev1">&gt;                     rc = OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;                     goto out;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/dr/pml_dr_sendreq.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/dr/pml_dr_sendreq.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/dr/pml_dr_sendreq.c	2011-10-18 23:51:53 EDT (Tue, 18 Oct 2011)
</span><br>
<span class="quotelev1">&gt; @@ -2,7 +2,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt;  *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2007 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2011 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt;  *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev1">&gt; @@ -104,8 +104,6 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     switch(OPAL_SOS_GET_ERROR_CODE(status)) {
</span><br>
<span class="quotelev1">&gt;         case OMPI_ERR_UNREACH:
</span><br>
<span class="quotelev1">&gt; -        case OMPI_ERR_CONNECTION_FAILED:
</span><br>
<span class="quotelev1">&gt; -        case OMPI_ERR_CONNECTION_REFUSED:
</span><br>
<span class="quotelev1">&gt;             /**
</span><br>
<span class="quotelev1">&gt;              * peer is no longer reachable through this btl
</span><br>
<span class="quotelev1">&gt;              */
</span><br>
<span class="quotelev1">&gt; @@ -113,7 +111,6 @@
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         case OMPI_ERR_FATAL:
</span><br>
<span class="quotelev1">&gt; -        case OMPI_ERR_COMM_FAILURE:
</span><br>
<span class="quotelev1">&gt;             /**
</span><br>
<span class="quotelev1">&gt;              * btl is no longer available
</span><br>
<span class="quotelev1">&gt;              */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpiext/cr/c/quiesce_start.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpiext/cr/c/quiesce_start.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpiext/cr/c/quiesce_start.c	2011-10-18 23:51:53 EDT (Tue, 18 Oct 2011)
</span><br>
<span class="quotelev1">&gt; @@ -2,6 +2,9 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2010 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt;  *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2011      The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; + *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -205,6 +208,6 @@
</span><br>
<span class="quotelev1">&gt;         info_char = NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #endif
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
<li><strong>Next message:</strong> <a href="9844.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9842.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9844.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9844.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Maybe reply:</strong> <a href="9850.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
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
