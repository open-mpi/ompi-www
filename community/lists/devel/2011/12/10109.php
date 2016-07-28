<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 05:36:19 2011" -->
<!-- isoreceived="20111214103619" -->
<!-- sent="Wed, 14 Dec 2011 11:36:10 +0100" -->
<!-- isosent="20111214103610" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627" -->
<!-- id="4EE87C1A.2020705_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201112132130.pBDLUsQw019257_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 05:36:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10110.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<li><strong>Previous message:</strong> <a href="10108.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10111.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<li><strong>Reply:</strong> <a href="10111.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>A .windows file seems still missing in opal/mca/shmem/windows/. Could 
<br>
you also svn add it (from the patch in shmem ticket)?
<br>
<p>It is not a source file, but rather a CMake required configuration file. 
<br>
Probably this change doesn't need another rc. :-) Thanks a lot.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-12-13 10:30 PM, bosilca_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2011-12-13 16:30:53 EST (Tue, 13 Dec 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25627
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25627">https://svn.open-mpi.org/trac/ompi/changeset/25627</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add and remove some of the files needed for the shmem patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;     branches/v1.5/ompi/mca/common/sm/common_sm.c
</span><br>
<span class="quotelev1">&gt;     branches/v1.5/ompi/mca/common/sm/common_sm.h
</span><br>
<span class="quotelev1">&gt;     branches/v1.5/ompi/mca/common/sm/common_sm_rml.c
</span><br>
<span class="quotelev1">&gt;     branches/v1.5/ompi/mca/common/sm/common_sm_rml.h
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;     branches/v1.5/ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev1">&gt;     branches/v1.5/ompi/mca/common/sm/common_sm_mmap.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: branches/v1.5/ompi/mca/common/sm/common_sm.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.5/ompi/mca/common/sm/common_sm.c	2011-12-13 16:30:53 EST (Tue, 13 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,387 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt; + *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; + *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2009 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev1">&gt; + *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2008-2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2010-2011 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * $HEADER$
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifdef HAVE_STRING_H
</span><br>
<span class="quotelev1">&gt; +#include&lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/align.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/runtime/opal_cr.h&quot;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mca/dpm/dpm.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mca/mpool/sm/mpool_sm.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;common_sm_rml.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* ASSUMING local process homogeneity with respect to all utilized shared memory
</span><br>
<span class="quotelev1">&gt; + * facilities. that is, if one local process deems a particular shared memory
</span><br>
<span class="quotelev1">&gt; + * facility acceptable, then ALL local processes should be able to utilize that
</span><br>
<span class="quotelev1">&gt; + * facility. as it stands, this is an important point because one process
</span><br>
<span class="quotelev1">&gt; + * dictates to all other local processes which common sm component will be
</span><br>
<span class="quotelev1">&gt; + * selected based on its own, local run-time test.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +OBJ_CLASS_INSTANCE(
</span><br>
<span class="quotelev1">&gt; +    mca_common_sm_module_t,
</span><br>
<span class="quotelev1">&gt; +    opal_object_t,
</span><br>
<span class="quotelev1">&gt; +    NULL,
</span><br>
<span class="quotelev1">&gt; +    NULL
</span><br>
<span class="quotelev1">&gt; +);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* list of RML messages that have arrived that have not yet been
</span><br>
<span class="quotelev1">&gt; + * consumed by the thread who is looking to complete its component
</span><br>
<span class="quotelev1">&gt; + * initialization based on the contents of the RML message.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +static opal_list_t pending_rml_msgs;
</span><br>
<span class="quotelev1">&gt; +/* flag indicating whether or not pending_rml_msgs has been initialized */
</span><br>
<span class="quotelev1">&gt; +static bool pending_rml_msgs_init = false;
</span><br>
<span class="quotelev1">&gt; +/* lock to protect multiple instances of mca_common_sm_init() from being
</span><br>
<span class="quotelev1">&gt; + * invoked simultaneously (because of RML usage).
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +static opal_mutex_t mutex;
</span><br>
<span class="quotelev1">&gt; +/* shared memory information used for initialization and setup. */
</span><br>
<span class="quotelev1">&gt; +static opal_shmem_ds_t shmem_ds;
</span><br>
<span class="quotelev1">&gt; +/* number of local processes */
</span><br>
<span class="quotelev1">&gt; +static size_t num_local_procs = 0;
</span><br>
<span class="quotelev1">&gt; +/* indicates whether or not i'm the lowest named process */
</span><br>
<span class="quotelev1">&gt; +static bool lowest_local_proc = false;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* ////////////////////////////////////////////////////////////////////////// */
</span><br>
<span class="quotelev1">&gt; +/* static utility functions */
</span><br>
<span class="quotelev1">&gt; +/* ////////////////////////////////////////////////////////////////////////// */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* ////////////////////////////////////////////////////////////////////////// */
</span><br>
<span class="quotelev1">&gt; +static mca_common_sm_module_t *
</span><br>
<span class="quotelev1">&gt; +attach_and_init(const char *file_name,
</span><br>
<span class="quotelev1">&gt; +                size_t size_ctl_structure,
</span><br>
<span class="quotelev1">&gt; +                size_t data_seg_alignment)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    mca_common_sm_module_t *map = NULL;
</span><br>
<span class="quotelev1">&gt; +    mca_common_sm_seg_header_t *seg = NULL;
</span><br>
<span class="quotelev1">&gt; +    unsigned char *addr = NULL;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* map the file and initialize segment state */
</span><br>
<span class="quotelev1">&gt; +    if (NULL == (seg = (mca_common_sm_seg_header_t *)
</span><br>
<span class="quotelev1">&gt; +                       opal_shmem_segment_attach(&amp;shmem_ds))) {
</span><br>
<span class="quotelev1">&gt; +        return NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_rmb();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* set up the map object */
</span><br>
<span class="quotelev1">&gt; +    if (NULL == (map = OBJ_NEW(mca_common_sm_module_t))) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(OMPI_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt; +        return NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* copy information: from ====&gt;  to */
</span><br>
<span class="quotelev1">&gt; +    opal_shmem_ds_copy(&amp;shmem_ds,&amp;map-&gt;shmem_ds);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* the first entry in the file is the control structure. the first
</span><br>
<span class="quotelev1">&gt; +     * entry in the control structure is an mca_common_sm_seg_header_t
</span><br>
<span class="quotelev1">&gt; +     * element
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    map-&gt;module_seg = seg;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    addr = ((unsigned char *)seg) + size_ctl_structure;
</span><br>
<span class="quotelev1">&gt; +    /* if we have a data segment (i.e., if 0 != data_seg_alignment),
</span><br>
<span class="quotelev1">&gt; +     * then make it the first aligned address after the control
</span><br>
<span class="quotelev1">&gt; +     * structure.  IF THIS HAPPENS, THIS IS A PROGRAMMING ERROR IN
</span><br>
<span class="quotelev1">&gt; +     * OPEN MPI!
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    if (0 != data_seg_alignment) {
</span><br>
<span class="quotelev1">&gt; +        addr = OPAL_ALIGN_PTR(addr, data_seg_alignment, unsigned char *);
</span><br>
<span class="quotelev1">&gt; +        /* is addr past end of the shared memory segment? */
</span><br>
<span class="quotelev1">&gt; +        if ((unsigned char *)seg + shmem_ds.seg_size&lt;  addr) {
</span><br>
<span class="quotelev1">&gt; +            orte_show_help(&quot;help-mpi-common-sm.txt&quot;, &quot;mmap too small&quot;, 1,
</span><br>
<span class="quotelev1">&gt; +                           orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                           (unsigned long)shmem_ds.seg_size,
</span><br>
<span class="quotelev1">&gt; +                           (unsigned long)size_ctl_structure,
</span><br>
<span class="quotelev1">&gt; +                           (unsigned long)data_seg_alignment);
</span><br>
<span class="quotelev1">&gt; +            return NULL;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    map-&gt;module_data_addr = addr;
</span><br>
<span class="quotelev1">&gt; +    map-&gt;module_seg_addr = (unsigned char *)seg;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* map object successfully initialized - we can safely increment
</span><br>
<span class="quotelev1">&gt; +     * seg_num_procs_attached_and_inited. this value is used by
</span><br>
<span class="quotelev1">&gt; +     * opal_shmem_unlink.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    (void)opal_atomic_add_size_t(&amp;map-&gt;module_seg-&gt;seg_num_procs_inited, 1);
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_wmb();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return map;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* ////////////////////////////////////////////////////////////////////////// */
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_module_t *
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_init(ompi_proc_t **procs,
</span><br>
<span class="quotelev1">&gt; +                   size_t num_procs,
</span><br>
<span class="quotelev1">&gt; +                   size_t size,
</span><br>
<span class="quotelev1">&gt; +                   char *file_name,
</span><br>
<span class="quotelev1">&gt; +                   size_t size_ctl_structure,
</span><br>
<span class="quotelev1">&gt; +                   size_t data_seg_alignment)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    mca_common_sm_module_t *map = NULL;
</span><br>
<span class="quotelev1">&gt; +    bool found_lowest = false;
</span><br>
<span class="quotelev1">&gt; +    size_t p;
</span><br>
<span class="quotelev1">&gt; +    size_t mem_offset;
</span><br>
<span class="quotelev1">&gt; +    ompi_proc_t *temp_proc;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    num_local_procs = 0;
</span><br>
<span class="quotelev1">&gt; +    lowest_local_proc = false;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* o reorder procs array to have all the local procs at the beginning.
</span><br>
<span class="quotelev1">&gt; +     * o look for the local proc with the lowest name.
</span><br>
<span class="quotelev1">&gt; +     * o determine the number of local procs.
</span><br>
<span class="quotelev1">&gt; +     * o ensure that procs[0] is the lowest named process.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    for (p = 0; p&lt;  num_procs; ++p) {
</span><br>
<span class="quotelev1">&gt; +        if (OPAL_PROC_ON_LOCAL_NODE(procs[p]-&gt;proc_flags)) {
</span><br>
<span class="quotelev1">&gt; +            /* if we don't have a lowest, save the first one */
</span><br>
<span class="quotelev1">&gt; +            if (!found_lowest) {
</span><br>
<span class="quotelev1">&gt; +                procs[0] = procs[p];
</span><br>
<span class="quotelev1">&gt; +                found_lowest = true;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            else {
</span><br>
<span class="quotelev1">&gt; +                /* save this proc */
</span><br>
<span class="quotelev1">&gt; +                procs[num_local_procs] = procs[p];
</span><br>
<span class="quotelev1">&gt; +                /* if we have a new lowest, swap it with position 0
</span><br>
<span class="quotelev1">&gt; +                 * so that procs[0] is always the lowest named proc
</span><br>
<span class="quotelev1">&gt; +                 */
</span><br>
<span class="quotelev1">&gt; +                if (orte_util_compare_name_fields(ORTE_NS_CMP_ALL,
</span><br>
<span class="quotelev1">&gt; +&amp;(procs[p]-&gt;proc_name),
</span><br>
<span class="quotelev1">&gt; +&amp;(procs[0]-&gt;proc_name))&lt;  0) {
</span><br>
<span class="quotelev1">&gt; +                    temp_proc = procs[0];
</span><br>
<span class="quotelev1">&gt; +                    procs[0] = procs[p];
</span><br>
<span class="quotelev1">&gt; +                    procs[num_local_procs] = temp_proc;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            /* regardless of the comparisons above, we found
</span><br>
<span class="quotelev1">&gt; +             * another proc on the local node, so increment
</span><br>
<span class="quotelev1">&gt; +             */
</span><br>
<span class="quotelev1">&gt; +            ++num_local_procs;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* if there is less than 2 local processes, there's nothing to do. */
</span><br>
<span class="quotelev1">&gt; +    if (num_local_procs&lt;  2) {
</span><br>
<span class="quotelev1">&gt; +        return NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* determine whether or not i am the lowest local process */
</span><br>
<span class="quotelev1">&gt; +    lowest_local_proc = (0 == orte_util_compare_name_fields(
</span><br>
<span class="quotelev1">&gt; +                                  ORTE_NS_CMP_ALL,
</span><br>
<span class="quotelev1">&gt; +                                  ORTE_PROC_MY_NAME,
</span><br>
<span class="quotelev1">&gt; +&amp;(procs[0]-&gt;proc_name)));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* lock here to prevent multiple threads from invoking this
</span><br>
<span class="quotelev1">&gt; +     * function simultaneously.  the critical section we're protecting
</span><br>
<span class="quotelev1">&gt; +     * is usage of the RML in this block.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    opal_mutex_lock(&amp;mutex);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (!pending_rml_msgs_init) {
</span><br>
<span class="quotelev1">&gt; +        OBJ_CONSTRUCT(&amp;(pending_rml_msgs), opal_list_t);
</span><br>
<span class="quotelev1">&gt; +        pending_rml_msgs_init = true;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    /* figure out if i am the lowest rank in the group.
</span><br>
<span class="quotelev1">&gt; +     * if so, i will create the shared memory backing store
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    if (lowest_local_proc) {
</span><br>
<span class="quotelev1">&gt; +        if (OPAL_SUCCESS == opal_shmem_segment_create(&amp;shmem_ds, file_name,
</span><br>
<span class="quotelev1">&gt; +                                                      size)) {
</span><br>
<span class="quotelev1">&gt; +            map = attach_and_init(file_name, size_ctl_structure,
</span><br>
<span class="quotelev1">&gt; +                                  data_seg_alignment);
</span><br>
<span class="quotelev1">&gt; +            if (NULL != map) {
</span><br>
<span class="quotelev1">&gt; +                mem_offset = map-&gt;module_data_addr -
</span><br>
<span class="quotelev1">&gt; +                             (unsigned char *)map-&gt;module_seg;
</span><br>
<span class="quotelev1">&gt; +                map-&gt;module_seg-&gt;seg_offset = mem_offset;
</span><br>
<span class="quotelev1">&gt; +                map-&gt;module_seg-&gt;seg_size = size - mem_offset;
</span><br>
<span class="quotelev1">&gt; +                opal_atomic_init(&amp;map-&gt;module_seg-&gt;seg_lock,
</span><br>
<span class="quotelev1">&gt; +                                 OPAL_ATOMIC_UNLOCKED);
</span><br>
<span class="quotelev1">&gt; +                map-&gt;module_seg-&gt;seg_inited = 0;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            else {
</span><br>
<span class="quotelev1">&gt; +                /* fail!
</span><br>
<span class="quotelev1">&gt; +                 * only invalidate the shmem_ds.  doing so will let the rest
</span><br>
<span class="quotelev1">&gt; +                 * of the local processes know that the lowest local rank
</span><br>
<span class="quotelev1">&gt; +                 * failed to properly initialize the shared memory segment, so
</span><br>
<span class="quotelev1">&gt; +                 * they should try to carry on without shared memory support
</span><br>
<span class="quotelev1">&gt; +                 */
</span><br>
<span class="quotelev1">&gt; +                 OPAL_SHMEM_DS_INVALIDATE(&amp;shmem_ds);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* send shmem info to the rest of the local procs. */
</span><br>
<span class="quotelev1">&gt; +    if (OMPI_SUCCESS != mca_common_sm_rml_info_bcast(
</span><br>
<span class="quotelev1">&gt; +&amp;shmem_ds, procs, num_local_procs,
</span><br>
<span class="quotelev1">&gt; +                            OMPI_RML_TAG_SM_BACK_FILE_CREATED,
</span><br>
<span class="quotelev1">&gt; +                            lowest_local_proc, file_name,
</span><br>
<span class="quotelev1">&gt; +&amp;(pending_rml_msgs))) {
</span><br>
<span class="quotelev1">&gt; +        goto out;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* are we dealing with a valid shmem_ds?  that is, did the lowest
</span><br>
<span class="quotelev1">&gt; +     * process successfully initialize the shared memory segment?
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_SHMEM_DS_IS_VALID(&amp;shmem_ds)) {
</span><br>
<span class="quotelev1">&gt; +        if (!lowest_local_proc) {
</span><br>
<span class="quotelev1">&gt; +            map = attach_and_init(file_name, size_ctl_structure,
</span><br>
<span class="quotelev1">&gt; +                                  data_seg_alignment);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        else {
</span><br>
<span class="quotelev1">&gt; +            /* wait until every other participating process has attached to the
</span><br>
<span class="quotelev1">&gt; +             * shared memory segment.
</span><br>
<span class="quotelev1">&gt; +             */
</span><br>
<span class="quotelev1">&gt; +            while (num_local_procs&gt;  map-&gt;module_seg-&gt;seg_num_procs_inited) {
</span><br>
<span class="quotelev1">&gt; +                opal_atomic_rmb();
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            opal_shmem_unlink(&amp;shmem_ds);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +out:
</span><br>
<span class="quotelev1">&gt; +    opal_mutex_unlock(&amp;mutex);
</span><br>
<span class="quotelev1">&gt; +    return map;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* ////////////////////////////////////////////////////////////////////////// */
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * this routine is the same as mca_common_sm_mmap_init() except that
</span><br>
<span class="quotelev1">&gt; + * it takes an (ompi_group_t *) parameter to specify the peers rather
</span><br>
<span class="quotelev1">&gt; + * than an array of procs.  unlike mca_common_sm_mmap_init(), the
</span><br>
<span class="quotelev1">&gt; + * group must contain *only* local peers, or this function will return
</span><br>
<span class="quotelev1">&gt; + * NULL and not create any shared memory segment.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_module_t *
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_init_group(ompi_group_t *group,
</span><br>
<span class="quotelev1">&gt; +                         size_t size,
</span><br>
<span class="quotelev1">&gt; +                         char *file_name,
</span><br>
<span class="quotelev1">&gt; +                         size_t size_ctl_structure,
</span><br>
<span class="quotelev1">&gt; +                         size_t data_seg_alignment)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    mca_common_sm_module_t *ret = NULL;
</span><br>
<span class="quotelev1">&gt; +    ompi_proc_t **procs = NULL;
</span><br>
<span class="quotelev1">&gt; +    size_t i;
</span><br>
<span class="quotelev1">&gt; +    size_t group_size;
</span><br>
<span class="quotelev1">&gt; +    ompi_proc_t *proc;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* if there is less than 2 procs, there's nothing to do */
</span><br>
<span class="quotelev1">&gt; +    if ((group_size = ompi_group_size(group))&lt;  2) {
</span><br>
<span class="quotelev1">&gt; +        goto out;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    else if (NULL == (procs = (ompi_proc_t **)
</span><br>
<span class="quotelev1">&gt; +                              malloc(sizeof(ompi_proc_t *) * group_size))) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(OMPI_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt; +        goto out;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    /* make sure that all the procs in the group are local */
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i&lt;  group_size; ++i) {
</span><br>
<span class="quotelev1">&gt; +        proc = ompi_group_peer_lookup(group, i);
</span><br>
<span class="quotelev1">&gt; +        if (!OPAL_PROC_ON_LOCAL_NODE(proc-&gt;proc_flags)) {
</span><br>
<span class="quotelev1">&gt; +            goto out;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        procs[i] = proc;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    /* let mca_common_sm_init take care of the rest ... */
</span><br>
<span class="quotelev1">&gt; +    ret = mca_common_sm_init(procs, group_size, size, file_name,
</span><br>
<span class="quotelev1">&gt; +                             size_ctl_structure, data_seg_alignment);
</span><br>
<span class="quotelev1">&gt; +out:
</span><br>
<span class="quotelev1">&gt; +    if (NULL != procs) {
</span><br>
<span class="quotelev1">&gt; +        free(procs);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* ////////////////////////////////////////////////////////////////////////// */
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + *  allocate memory from a previously allocated shared memory
</span><br>
<span class="quotelev1">&gt; + *  block.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *  @param size size of request, in bytes (IN)
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *  @retval addr virtual address
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +void *
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_seg_alloc(struct mca_mpool_base_module_t *mpool,
</span><br>
<span class="quotelev1">&gt; +                        size_t *size,
</span><br>
<span class="quotelev1">&gt; +                        mca_mpool_base_registration_t **registration)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    mca_mpool_sm_module_t *sm_module = (mca_mpool_sm_module_t *)mpool;
</span><br>
<span class="quotelev1">&gt; +    mca_common_sm_seg_header_t* seg = sm_module-&gt;sm_common_module-&gt;module_seg;
</span><br>
<span class="quotelev1">&gt; +    void *addr;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_lock(&amp;seg-&gt;seg_lock);
</span><br>
<span class="quotelev1">&gt; +    if (seg-&gt;seg_offset + *size&gt;  seg-&gt;seg_size) {
</span><br>
<span class="quotelev1">&gt; +        addr = NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    else {
</span><br>
<span class="quotelev1">&gt; +        size_t fixup;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* add base address to segment offset */
</span><br>
<span class="quotelev1">&gt; +        addr = sm_module-&gt;sm_common_module-&gt;module_data_addr + seg-&gt;seg_offset;
</span><br>
<span class="quotelev1">&gt; +        seg-&gt;seg_offset += *size;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* fix up seg_offset so next allocation is aligned on a
</span><br>
<span class="quotelev1">&gt; +         * sizeof(long) boundry.  Do it here so that we don't have to
</span><br>
<span class="quotelev1">&gt; +         * check before checking remaining size in buffer
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        if ((fixup = (seg-&gt;seg_offset&amp;  (sizeof(long) - 1)))&gt;  0) {
</span><br>
<span class="quotelev1">&gt; +            seg-&gt;seg_offset += sizeof(long) - fixup;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if (NULL != registration) {
</span><br>
<span class="quotelev1">&gt; +        *registration = NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_unlock(&amp;seg-&gt;seg_lock);
</span><br>
<span class="quotelev1">&gt; +    return addr;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* ////////////////////////////////////////////////////////////////////////// */
</span><br>
<span class="quotelev1">&gt; +int
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_fini(mca_common_sm_module_t *mca_common_sm_module)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int rc = OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (NULL != mca_common_sm_module-&gt;module_seg) {
</span><br>
<span class="quotelev1">&gt; +        if (OPAL_SUCCESS !=
</span><br>
<span class="quotelev1">&gt; +            opal_shmem_segment_detach(&amp;mca_common_sm_module-&gt;shmem_ds)) {
</span><br>
<span class="quotelev1">&gt; +            rc = OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return rc;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: branches/v1.5/ompi/mca/common/sm/common_sm.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.5/ompi/mca/common/sm/common_sm.h	2011-12-13 16:30:53 EST (Tue, 13 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,163 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt; + *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; + *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev1">&gt; + *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009-2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2010-2011 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * $HEADER$
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifndef _COMMON_SM_H_
</span><br>
<span class="quotelev1">&gt; +#define _COMMON_SM_H_
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/class/opal_object.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/mca/shmem/shmem.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mca/mpool/mpool.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/group/group.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mca/btl/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mca/btl/base/btl_base_error.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +struct mca_mpool_base_module_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +typedef struct mca_common_sm_seg_header_t {
</span><br>
<span class="quotelev1">&gt; +    /* lock to control atomic access */
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_lock_t seg_lock;
</span><br>
<span class="quotelev1">&gt; +    /* indicates whether or not the segment is ready for use */
</span><br>
<span class="quotelev1">&gt; +    volatile int32_t seg_inited;
</span><br>
<span class="quotelev1">&gt; +    /* number of local processes that are attached to the shared memory segment.
</span><br>
<span class="quotelev1">&gt; +     * this is primarily used as a way of determining whether or not it is safe
</span><br>
<span class="quotelev1">&gt; +     * to unlink the shared memory backing store. for example, once seg_att
</span><br>
<span class="quotelev1">&gt; +     * is equal to the number of local processes, then we can safely unlink.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    volatile size_t seg_num_procs_inited;
</span><br>
<span class="quotelev1">&gt; +    /* offset to next available memory location available for allocation */
</span><br>
<span class="quotelev1">&gt; +    size_t seg_offset;
</span><br>
<span class="quotelev1">&gt; +    /* total size of the segment */
</span><br>
<span class="quotelev1">&gt; +    size_t seg_size;
</span><br>
<span class="quotelev1">&gt; +} mca_common_sm_seg_header_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +typedef struct mca_common_sm_module_t {
</span><br>
<span class="quotelev1">&gt; +    /* double link list element */
</span><br>
<span class="quotelev1">&gt; +    opal_list_item_t module_item;
</span><br>
<span class="quotelev1">&gt; +    /* pointer to header embedded in the shared memory segment */
</span><br>
<span class="quotelev1">&gt; +    mca_common_sm_seg_header_t *module_seg;
</span><br>
<span class="quotelev1">&gt; +    /* base address of the segment */
</span><br>
<span class="quotelev1">&gt; +    unsigned char *module_seg_addr;
</span><br>
<span class="quotelev1">&gt; +    /* base address of data segment */
</span><br>
<span class="quotelev1">&gt; +    unsigned char *module_data_addr;
</span><br>
<span class="quotelev1">&gt; +    /* shared memory backing facility object that encapsulates shmem info */
</span><br>
<span class="quotelev1">&gt; +    opal_shmem_ds_t shmem_ds;
</span><br>
<span class="quotelev1">&gt; +} mca_common_sm_module_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +OBJ_CLASS_DECLARATION(mca_common_sm_module_t);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + *  This routine is used to set up a shared memory segment (whether
</span><br>
<span class="quotelev1">&gt; + *  it's an mmaped file or a SYSV IPC segment).  It is assumed that
</span><br>
<span class="quotelev1">&gt; + *  the shared memory segment does not exist before any of the current
</span><br>
<span class="quotelev1">&gt; + *  set of processes try and open it.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *  @param procs - array of (ompi_proc_t *)'s to create this shared
</span><br>
<span class="quotelev1">&gt; + *  memory segment for.  This array must be writable; it may be edited
</span><br>
<span class="quotelev1">&gt; + *  (in undefined ways) if the array contains procs that are not on
</span><br>
<span class="quotelev1">&gt; + *  this host.  It is assumed that the caller will simply free this
</span><br>
<span class="quotelev1">&gt; + *  array upon return.  (INOUT)
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *  @param num_procs - length of the procs array (IN)
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *  @param size - size of the segment, in bytes (IN)
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *  @param name - unique string identifier of this segment (IN)
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *  @param size_ctl_structure  size of the control structure at
</span><br>
<span class="quotelev1">&gt; + *                             the head of the segment. The control structure
</span><br>
<span class="quotelev1">&gt; + *                             is assumed to have mca_common_sm_seg_header_t
</span><br>
<span class="quotelev1">&gt; + *                             as its first segment (IN)
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *  @param data_set_alignment  alignment of the data segment.  this
</span><br>
<span class="quotelev1">&gt; + *                             follows the control structure.  If this
</span><br>
<span class="quotelev1">&gt; + *                             value if 0, then assume that there will
</span><br>
<span class="quotelev1">&gt; + *                             be no data segment following the control
</span><br>
<span class="quotelev1">&gt; + *                             structure. (IN)
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *  @returnvalue pointer to control structure at head of shared memory segment.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern mca_common_sm_module_t *
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_init(ompi_proc_t **procs,
</span><br>
<span class="quotelev1">&gt; +                   size_t num_procs,
</span><br>
<span class="quotelev1">&gt; +                   size_t size,
</span><br>
<span class="quotelev1">&gt; +                   char *file_name,
</span><br>
<span class="quotelev1">&gt; +                   size_t size_ctl_structure,
</span><br>
<span class="quotelev1">&gt; +                   size_t data_seg_alignment);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * This routine is used to set up a shared memory segment (whether
</span><br>
<span class="quotelev1">&gt; + * it's an mmaped file or a SYSV IPC segment).  It is assumed that
</span><br>
<span class="quotelev1">&gt; + * the shared memory segment does not exist before any of the current
</span><br>
<span class="quotelev1">&gt; + * set of processes try and open it.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * This routine is the same as mca_common_sm_mmap_init() except that
</span><br>
<span class="quotelev1">&gt; + * it takes an (ompi_group_t *) parameter to specify the peers rather
</span><br>
<span class="quotelev1">&gt; + * than an array of procs.  Unlike mca_common_sm_mmap_init(), the
</span><br>
<span class="quotelev1">&gt; + * group must contain *only* local peers, or this function will return
</span><br>
<span class="quotelev1">&gt; + * NULL and not create any shared memory segment.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern mca_common_sm_module_t *
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_init_group(ompi_group_t *group,
</span><br>
<span class="quotelev1">&gt; +                         size_t size,
</span><br>
<span class="quotelev1">&gt; +                         char *file_name,
</span><br>
<span class="quotelev1">&gt; +                         size_t size_ctl_structure,
</span><br>
<span class="quotelev1">&gt; +                         size_t data_seg_alignment);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * callback from the sm mpool
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern void *
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_seg_alloc(struct mca_mpool_base_module_t *mpool,
</span><br>
<span class="quotelev1">&gt; +                        size_t* size,
</span><br>
<span class="quotelev1">&gt; +                        mca_mpool_base_registration_t **registration);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * This function will release all local resources attached to the
</span><br>
<span class="quotelev1">&gt; + * shared memory segment. We assume that the operating system will
</span><br>
<span class="quotelev1">&gt; + * release the memory resources when the last process release it.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * @param mca_common_sm_module - instance that is shared between
</span><br>
<span class="quotelev1">&gt; + *                               components that use shared memory.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * @return OMPI_SUCCESS if everything was okay, otherwise return OMPI_ERROR.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern int
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_fini(mca_common_sm_module_t *mca_common_sm_module);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * instance that is shared between components that use shared memory.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern mca_common_sm_module_t *mca_common_sm_module;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +END_C_DECLS
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#endif /* _COMMON_SM_H_ */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deleted: branches/v1.5/ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deleted: branches/v1.5/ompi/mca/common/sm/common_sm_mmap.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: branches/v1.5/ompi/mca/common/sm/common_sm_rml.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.5/ompi/mca/common/sm/common_sm_rml.c	2011-12-13 16:30:53 EST (Tue, 13 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,154 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt; + *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2011 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; + *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2009 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev1">&gt; + *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2008-2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2010-2011 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * $HEADER$
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifdef HAVE_STRING_H
</span><br>
<span class="quotelev1">&gt; +#include&lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mca/dpm/dpm.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mca/common/sm/common_sm_rml.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +OBJ_CLASS_INSTANCE(
</span><br>
<span class="quotelev1">&gt; +    mca_common_sm_rml_pending_rml_msg_types_t,
</span><br>
<span class="quotelev1">&gt; +    opal_object_t,
</span><br>
<span class="quotelev1">&gt; +    NULL,
</span><br>
<span class="quotelev1">&gt; +    NULL
</span><br>
<span class="quotelev1">&gt; +);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* ////////////////////////////////////////////////////////////////////////// */
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * this routine assumes that sorted_procs is in the following state:
</span><br>
<span class="quotelev1">&gt; + *     o all the local procs at the beginning.
</span><br>
<span class="quotelev1">&gt; + *     o sorted_procs[0] is the lowest named process.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +int
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_rml_info_bcast(opal_shmem_ds_t *ds_buf,
</span><br>
<span class="quotelev1">&gt; +                             ompi_proc_t **procs,
</span><br>
<span class="quotelev1">&gt; +                             size_t num_procs,
</span><br>
<span class="quotelev1">&gt; +                             int tag,
</span><br>
<span class="quotelev1">&gt; +                             bool bcast_root,
</span><br>
<span class="quotelev1">&gt; +                             char *msg_id_str,
</span><br>
<span class="quotelev1">&gt; +                             opal_list_t *pending_rml_msgs)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int rc = OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    struct iovec iov[MCA_COMMON_SM_RML_MSG_LEN];
</span><br>
<span class="quotelev1">&gt; +    int iovrc;
</span><br>
<span class="quotelev1">&gt; +    size_t p;
</span><br>
<span class="quotelev1">&gt; +    char msg_id_str_to_tx[OPAL_PATH_MAX];
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    strncpy(msg_id_str_to_tx, msg_id_str, sizeof(msg_id_str_to_tx) - 1);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* let the first item be the queueing id name */
</span><br>
<span class="quotelev1">&gt; +    iov[0].iov_base = (ompi_iov_base_ptr_t)msg_id_str_to_tx;
</span><br>
<span class="quotelev1">&gt; +    iov[0].iov_len = sizeof(msg_id_str_to_tx);
</span><br>
<span class="quotelev1">&gt; +    iov[1].iov_base = (ompi_iov_base_ptr_t)ds_buf;
</span><br>
<span class="quotelev1">&gt; +    iov[1].iov_len = sizeof(opal_shmem_ds_t);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* figure out if i am the root proc in the group.
</span><br>
<span class="quotelev1">&gt; +     * if i am, bcast the message the rest of the local procs.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    if (bcast_root) {
</span><br>
<span class="quotelev1">&gt; +        opal_progress_event_users_increment();
</span><br>
<span class="quotelev1">&gt; +        /* first num_procs items should be local procs */
</span><br>
<span class="quotelev1">&gt; +        for (p = 1; p&lt;  num_procs; ++p) {
</span><br>
<span class="quotelev1">&gt; +            iovrc = orte_rml.send(&amp;(procs[p]-&gt;proc_name), iov,
</span><br>
<span class="quotelev1">&gt; +                                  MCA_COMMON_SM_RML_MSG_LEN, tag, 0);
</span><br>
<span class="quotelev1">&gt; +            if ((ssize_t)(iov[0].iov_len + iov[1].iov_len)&gt;  iovrc) {
</span><br>
<span class="quotelev1">&gt; +                ORTE_ERROR_LOG(ORTE_ERR_COMM_FAILURE);
</span><br>
<span class="quotelev1">&gt; +                opal_progress_event_users_decrement();
</span><br>
<span class="quotelev1">&gt; +                rc = OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +                goto out;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        opal_progress_event_users_decrement();
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    else { /* i am NOT the root (&quot;lowest&quot;) proc */
</span><br>
<span class="quotelev1">&gt; +        opal_list_item_t *item;
</span><br>
<span class="quotelev1">&gt; +        mca_common_sm_rml_pending_rml_msg_types_t *rml_msg;
</span><br>
<span class="quotelev1">&gt; +        /* because a component query can be performed simultaneously in multiple
</span><br>
<span class="quotelev1">&gt; +         * threads, the RML messages may arrive in any order.  so first check to
</span><br>
<span class="quotelev1">&gt; +         * see if we previously received a message for me.
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        for (item = opal_list_get_first(pending_rml_msgs);
</span><br>
<span class="quotelev1">&gt; +             opal_list_get_end(pending_rml_msgs) != item;
</span><br>
<span class="quotelev1">&gt; +             item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt; +            rml_msg = (mca_common_sm_rml_pending_rml_msg_types_t *)item;
</span><br>
<span class="quotelev1">&gt; +            /* was the message for me? */
</span><br>
<span class="quotelev1">&gt; +            if (0 == strcmp(rml_msg-&gt;msg_id_str, msg_id_str)) {
</span><br>
<span class="quotelev1">&gt; +                opal_list_remove_item(pending_rml_msgs, item);
</span><br>
<span class="quotelev1">&gt; +                /*                 from ==============&gt;  to */
</span><br>
<span class="quotelev1">&gt; +                opal_shmem_ds_copy(&amp;rml_msg-&gt;shmem_ds, ds_buf);
</span><br>
<span class="quotelev1">&gt; +                OBJ_RELEASE(item);
</span><br>
<span class="quotelev1">&gt; +                break;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        /* if we didn't find a message already waiting, block on receiving from
</span><br>
<span class="quotelev1">&gt; +         * the RML.
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        if (opal_list_get_end(pending_rml_msgs) == item) {
</span><br>
<span class="quotelev1">&gt; +            do {
</span><br>
<span class="quotelev1">&gt; +                /* bump up the libevent polling frequency while we're in this
</span><br>
<span class="quotelev1">&gt; +                 * RML recv, just to ensure we're checking libevent frequently.
</span><br>
<span class="quotelev1">&gt; +                 */
</span><br>
<span class="quotelev1">&gt; +                opal_progress_event_users_increment();
</span><br>
<span class="quotelev1">&gt; +                iovrc = orte_rml.recv(&amp;(procs[0]-&gt;proc_name), iov,
</span><br>
<span class="quotelev1">&gt; +                                      MCA_COMMON_SM_RML_MSG_LEN, tag, 0);
</span><br>
<span class="quotelev1">&gt; +                opal_progress_event_users_decrement();
</span><br>
<span class="quotelev1">&gt; +                if (iovrc&lt;  0) {
</span><br>
<span class="quotelev1">&gt; +                    ORTE_ERROR_LOG(ORTE_ERR_RECV_LESS_THAN_POSTED);
</span><br>
<span class="quotelev1">&gt; +                    rc = OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +                    goto out;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                /* was the message for me?  if so, we're done */
</span><br>
<span class="quotelev1">&gt; +                if (0 == strcmp(msg_id_str_to_tx, msg_id_str)) {
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                /* if not, put it on the pending list and try again */
</span><br>
<span class="quotelev1">&gt; +                if (NULL == (rml_msg =
</span><br>
<span class="quotelev1">&gt; +                            OBJ_NEW(mca_common_sm_rml_pending_rml_msg_types_t)))
</span><br>
<span class="quotelev1">&gt; +                {
</span><br>
<span class="quotelev1">&gt; +                    ORTE_ERROR_LOG(OMPI_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt; +                    rc = OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +                    goto out;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                /* not for me, so place on list */
</span><br>
<span class="quotelev1">&gt; +                /*                 from ========&gt;  to */
</span><br>
<span class="quotelev1">&gt; +                opal_shmem_ds_copy(ds_buf,&amp;rml_msg-&gt;shmem_ds);
</span><br>
<span class="quotelev1">&gt; +                memcpy(rml_msg-&gt;msg_id_str, msg_id_str_to_tx, OPAL_PATH_MAX);
</span><br>
<span class="quotelev1">&gt; +                opal_list_append(pending_rml_msgs,&amp;(rml_msg-&gt;super));
</span><br>
<span class="quotelev1">&gt; +            } while(1);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +out:
</span><br>
<span class="quotelev1">&gt; +    return rc;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: branches/v1.5/ompi/mca/common/sm/common_sm_rml.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.5/ompi/mca/common/sm/common_sm_rml.h	2011-12-13 16:30:53 EST (Tue, 13 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,65 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt; + *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; + *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev1">&gt; + *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009-2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2010-2011 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * $HEADER$
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifndef _COMMON_SM_RML_H_
</span><br>
<span class="quotelev1">&gt; +#define _COMMON_SM_RML_H_
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/class/opal_object.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/mca/shmem/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/mca/shmem/shmem.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mca/common/sm/common_sm.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define MCA_COMMON_SM_RML_MSG_LEN 2
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * items on the pending_rml_msgs list
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +typedef struct mca_common_sm_rml_pending_rml_msg_types_t {
</span><br>
<span class="quotelev1">&gt; +    opal_list_item_t super;
</span><br>
<span class="quotelev1">&gt; +    char msg_id_str[OPAL_PATH_MAX];
</span><br>
<span class="quotelev1">&gt; +    opal_shmem_ds_t shmem_ds;
</span><br>
<span class="quotelev1">&gt; +} mca_common_sm_rml_pending_rml_msg_types_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * routine used to send common sm initialization information to all local
</span><br>
<span class="quotelev1">&gt; + * processes in procs.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern int
</span><br>
<span class="quotelev1">&gt; +mca_common_sm_rml_info_bcast(opal_shmem_ds_t *ds_buf,
</span><br>
<span class="quotelev1">&gt; +                             ompi_proc_t **procs,
</span><br>
<span class="quotelev1">&gt; +                             size_t num_procs,
</span><br>
<span class="quotelev1">&gt; +                             int tag,
</span><br>
<span class="quotelev1">&gt; +                             bool bcast_root,
</span><br>
<span class="quotelev1">&gt; +                             char *msg_id_str,
</span><br>
<span class="quotelev1">&gt; +                             opal_list_t *pending_rml_msgs);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +END_C_DECLS
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#endif /* _COMMON_SM_RML_H_*/
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10110.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<li><strong>Previous message:</strong> <a href="10108.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10111.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<li><strong>Reply:</strong> <a href="10111.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
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
