<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 09:03:52 2010" -->
<!-- isoreceived="20100219140352" -->
<!-- sent="Fri, 19 Feb 2010 09:03:41 -0500" -->
<!-- isosent="20100219140341" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669" -->
<!-- id="35DE929C-6A62-4870-BC6C-3B5810289B47_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B7DF5F87-2607-4633-9593-1D338F6FD773_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-19 09:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7463.php">Lisandro Dalcin: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7461.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
<li><strong>In reply to:</strong> <a href="7461.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit remove the limitation on the number of interfaces the TCP BTL support. It is related to ticket #2031.
<br>
<p>We had a hard limit MAX_KERNEL_INTERFACES, on the number of interfaces a proc can handle in the TCP BTL. Unfortunately, we didn't check to see if there were more available interfaces on a node, and as a result we segfault. A deeper problem, was there was a small change to never find the right interface is it wasn't in the MAX_KERNEL_INTERFACES first ones (as listed by the kernel). This patch basically remove this limitation, we now dynamically allocate the arrays where we store the info about the local and peer interfaces, and these array can dynamically grow as needed.
<br>
<p>While going through the code I realized the way we handle the connections discovery, more precisely the list of local interfaces, is suboptimal. For each peer, we scan all local interfaces. This can be done only once, and then we can just reuse the stored values, which I expect will slightly improve the connection time. The logic is in the code, but unfortunately I could find a clean way to release the storage array on close. If someone want to take over this part, please feel free. The only modification will be to move the 10 lines of code that clean the local_interfaces array somewhere in the btl_finalize function (and remove the static attribute from most of the storage arrays).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Feb 19, 2010, at 08:01 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Yo George --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This commit has a bunch of indenting changes, so at first blush, it's hard to tell exactly what it does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you give a short explanation of what this commit does?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 19, 2010, at 2:10 AM, &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2010-02-19 02:10:32 EST (Fri, 19 Feb 2010)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 22669
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22669">https://svn.open-mpi.org/trac/ompi/changeset/22669</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Unrestricted number of interfaces.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c |     6                                        
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_proc.c     |   290 ++++++++++++++++++++++-----------------
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_proc.h     |     3                                        
</span><br>
<span class="quotelev2">&gt;&gt;   3 files changed, 165 insertions(+), 134 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c   2010-02-19 02:10:32 EST (Fri, 19 Feb 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -315,7 +315,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     /* send process identifier to remote endpoint */
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_tcp_proc_t* btl_proc = mca_btl_tcp_proc_local();
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_process_name_t guid = btl_proc-&gt;proc_name;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_process_name_t guid = btl_proc-&gt;proc_ompi-&gt;proc_name;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     ORTE_PROCESS_NAME_HTON(guid);
</span><br>
<span class="quotelev2">&gt;&gt;     if(mca_btl_tcp_endpoint_send_blocking(btl_endpoint, &amp;guid, sizeof(guid)) !=
</span><br>
<span class="quotelev2">&gt;&gt; @@ -479,7 +479,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     ORTE_PROCESS_NAME_NTOH(guid);
</span><br>
<span class="quotelev2">&gt;&gt;     /* compare this to the expected values */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;btl_proc-&gt;proc_name, &amp;guid)) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                    &amp;btl_proc-&gt;proc_ompi-&gt;proc_name,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                    &amp;guid)) {
</span><br>
<span class="quotelev2">&gt;&gt;         BTL_ERROR((&quot;received unexpected process identifier %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                    ORTE_NAME_PRINT(&amp;guid)));
</span><br>
<span class="quotelev2">&gt;&gt;         mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_proc.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_proc.c       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_proc.c       2010-02-19 02:10:32 EST (Fri, 19 Feb 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2,7 +2,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2004-2006 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev2">&gt;&gt;  *                         University Research and Technology
</span><br>
<span class="quotelev2">&gt;&gt;  *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2004-2008 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2004-2010 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt;&gt;  *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt;&gt;  *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -40,17 +40,17 @@
</span><br>
<span class="quotelev2">&gt;&gt; static void mca_btl_tcp_proc_construct(mca_btl_tcp_proc_t* proc);
</span><br>
<span class="quotelev2">&gt;&gt; static void mca_btl_tcp_proc_destruct(mca_btl_tcp_proc_t* proc);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca_btl_tcp_interface_t* local_interfaces[MAX_KERNEL_INTERFACES];
</span><br>
<span class="quotelev2">&gt;&gt; -mca_btl_tcp_interface_t* peer_interfaces[MAX_KERNEL_INTERFACES];
</span><br>
<span class="quotelev2">&gt;&gt; -int local_kindex_to_index[MAX_KERNEL_INTERFACE_INDEX];
</span><br>
<span class="quotelev2">&gt;&gt; -int peer_kindex_to_index[MAX_KERNEL_INTERFACE_INDEX];
</span><br>
<span class="quotelev2">&gt;&gt; -size_t num_local_interfaces;
</span><br>
<span class="quotelev2">&gt;&gt; -size_t num_peer_interfaces;
</span><br>
<span class="quotelev2">&gt;&gt; -unsigned int *best_assignment;
</span><br>
<span class="quotelev2">&gt;&gt; -int max_assignment_weight;
</span><br>
<span class="quotelev2">&gt;&gt; -int max_assignment_cardinality;
</span><br>
<span class="quotelev2">&gt;&gt; -enum mca_btl_tcp_connection_quality **weights;
</span><br>
<span class="quotelev2">&gt;&gt; -struct mca_btl_tcp_addr_t ***best_addr;
</span><br>
<span class="quotelev2">&gt;&gt; +static mca_btl_tcp_interface_t** local_interfaces = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +static int local_kindex_to_index[MAX_KERNEL_INTERFACE_INDEX];
</span><br>
<span class="quotelev2">&gt;&gt; +static size_t num_local_interfaces, max_local_interfaces;
</span><br>
<span class="quotelev2">&gt;&gt; +static mca_btl_tcp_interface_t** peer_interfaces = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +static size_t num_peer_interfaces, max_peer_interfaces;
</span><br>
<span class="quotelev2">&gt;&gt; +static int peer_kindex_to_index[MAX_KERNEL_INTERFACE_INDEX];
</span><br>
<span class="quotelev2">&gt;&gt; +static unsigned int *best_assignment;
</span><br>
<span class="quotelev2">&gt;&gt; +static int max_assignment_weight;
</span><br>
<span class="quotelev2">&gt;&gt; +static int max_assignment_cardinality;
</span><br>
<span class="quotelev2">&gt;&gt; +static enum mca_btl_tcp_connection_quality **weights;
</span><br>
<span class="quotelev2">&gt;&gt; +static struct mca_btl_tcp_addr_t ***best_addr;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OBJ_CLASS_INSTANCE( mca_btl_tcp_proc_t,
</span><br>
<span class="quotelev2">&gt;&gt;                     opal_list_item_t,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     /* remove from list of all proc instances */
</span><br>
<span class="quotelev2">&gt;&gt;     OPAL_THREAD_LOCK(&amp;mca_btl_tcp_component.tcp_lock);
</span><br>
<span class="quotelev2">&gt;&gt;     opal_hash_table_remove_value_uint64(&amp;mca_btl_tcp_component.tcp_procs,
</span><br>
<span class="quotelev2">&gt;&gt; -                                        orte_util_hash_name(&amp;tcp_proc-&gt;proc_name));
</span><br>
<span class="quotelev2">&gt;&gt; +                                        orte_util_hash_name(&amp;tcp_proc-&gt;proc_ompi-&gt;proc_name));
</span><br>
<span class="quotelev2">&gt;&gt;     OPAL_THREAD_UNLOCK(&amp;mca_btl_tcp_component.tcp_lock);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* release resources */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -113,7 +113,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;     if(NULL == btl_proc)
</span><br>
<span class="quotelev2">&gt;&gt;         return NULL;
</span><br>
<span class="quotelev2">&gt;&gt;     btl_proc-&gt;proc_ompi = ompi_proc;
</span><br>
<span class="quotelev2">&gt;&gt; -    btl_proc-&gt;proc_name = ompi_proc-&gt;proc_name;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* add to hash table of all proc instance */
</span><br>
<span class="quotelev2">&gt;&gt;     opal_hash_table_set_value_uint64(&amp;mca_btl_tcp_component.tcp_procs,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -176,8 +175,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;     int assignment_weight = 0;
</span><br>
<span class="quotelev2">&gt;&gt;     int assignment_cardinality = 0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;     if(max_interfaces &lt; num_peer_interfaces) {
</span><br>
<span class="quotelev2">&gt;&gt;         max_interfaces = num_peer_interfaces;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -232,64 +229,34 @@
</span><br>
<span class="quotelev2">&gt;&gt;     interface-&gt;inuse = 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -/*
</span><br>
<span class="quotelev2">&gt;&gt; - * Note that this routine must be called with the lock on the process
</span><br>
<span class="quotelev2">&gt;&gt; - * already held.  Insert a btl instance into the proc array and assign
</span><br>
<span class="quotelev2">&gt;&gt; - * it an address.
</span><br>
<span class="quotelev2">&gt;&gt; - */
</span><br>
<span class="quotelev2">&gt;&gt; -int mca_btl_tcp_proc_insert( mca_btl_tcp_proc_t* btl_proc,
</span><br>
<span class="quotelev2">&gt;&gt; -                             mca_btl_base_endpoint_t* btl_endpoint )
</span><br>
<span class="quotelev2">&gt;&gt; +static mca_btl_tcp_interface_t** mca_btl_tcp_retrieve_local_interfaces(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -    size_t i, j;
</span><br>
<span class="quotelev2">&gt;&gt; -    struct sockaddr_storage endpoint_addr_ss, local_addr;
</span><br>
<span class="quotelev2">&gt;&gt; -    int idx, rc;
</span><br>
<span class="quotelev2">&gt;&gt; -    int *a = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; -    unsigned int perm_size;
</span><br>
<span class="quotelev2">&gt;&gt; -    char **include;
</span><br>
<span class="quotelev2">&gt;&gt; -    char **exclude;
</span><br>
<span class="quotelev2">&gt;&gt; -    char **argv;
</span><br>
<span class="quotelev2">&gt;&gt; -    bool skip;
</span><br>
<span class="quotelev2">&gt;&gt; +    struct sockaddr_storage local_addr;
</span><br>
<span class="quotelev2">&gt;&gt;     char local_if_name[IF_NAMESIZE];
</span><br>
<span class="quotelev2">&gt;&gt; +    char **include, **exclude, **argv;
</span><br>
<span class="quotelev2">&gt;&gt; +    bool skip;
</span><br>
<span class="quotelev2">&gt;&gt; +    int idx;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    num_local_interfaces = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    num_peer_interfaces = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -#ifndef WORDS_BIGENDIAN
</span><br>
<span class="quotelev2">&gt;&gt; -    /* if we are little endian and our peer is not so lucky, then we
</span><br>
<span class="quotelev2">&gt;&gt; -       need to put all information sent to him in big endian (aka
</span><br>
<span class="quotelev2">&gt;&gt; -       Network Byte Order) and expect all information received to
</span><br>
<span class="quotelev2">&gt;&gt; -       be in NBO.  Since big endian machines always send and receive
</span><br>
<span class="quotelev2">&gt;&gt; -       in NBO, we don't care so much about that case. */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (btl_proc-&gt;proc_ompi-&gt;proc_arch &amp; OPAL_ARCH_ISBIGENDIAN) {
</span><br>
<span class="quotelev2">&gt;&gt; -        btl_endpoint-&gt;endpoint_nbo = true;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* insert into endpoint array */
</span><br>
<span class="quotelev2">&gt;&gt; -    btl_endpoint-&gt;endpoint_proc = btl_proc;
</span><br>
<span class="quotelev2">&gt;&gt; -    btl_proc-&gt;proc_endpoints[btl_proc-&gt;proc_endpoint_count++] = btl_endpoint;
</span><br>
<span class="quotelev2">&gt;&gt; +    if( NULL != local_interfaces )
</span><br>
<span class="quotelev2">&gt;&gt; +        return local_interfaces;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    max_local_interfaces = MAX_KERNEL_INTERFACES;
</span><br>
<span class="quotelev2">&gt;&gt; +    num_local_interfaces = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +    local_interfaces = (mca_btl_tcp_interface_t**)calloc( max_local_interfaces, sizeof(mca_btl_tcp_interface_t*) );
</span><br>
<span class="quotelev2">&gt;&gt; +    if( NULL == local_interfaces )
</span><br>
<span class="quotelev2">&gt;&gt; +        return NULL;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     memset(local_kindex_to_index, -1, sizeof(int)*MAX_KERNEL_INTERFACE_INDEX);
</span><br>
<span class="quotelev2">&gt;&gt; -    memset(peer_kindex_to_index, -1, sizeof(int)*MAX_KERNEL_INTERFACE_INDEX);
</span><br>
<span class="quotelev2">&gt;&gt; -    memset(local_interfaces, 0, sizeof(local_interfaces));
</span><br>
<span class="quotelev2">&gt;&gt; -    memset(peer_interfaces, 0, sizeof(peer_interfaces));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* Collect up the list of included and excluded interfaces, if any */
</span><br>
<span class="quotelev2">&gt;&gt;     include = opal_argv_split(mca_btl_tcp_component.tcp_if_include,',');
</span><br>
<span class="quotelev2">&gt;&gt;     exclude = opal_argv_split(mca_btl_tcp_component.tcp_if_exclude,',');
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /*
</span><br>
<span class="quotelev2">&gt;&gt; -     * the following two blocks shout CODE DUPLICATION. We are aware of
</span><br>
<span class="quotelev2">&gt;&gt; -     * the problem
</span><br>
<span class="quotelev2">&gt;&gt; -     */
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /*
</span><br>
<span class="quotelev2">&gt;&gt;      * identify all kernel interfaces and the associated addresses of
</span><br>
<span class="quotelev2">&gt;&gt;      * the local node
</span><br>
<span class="quotelev2">&gt;&gt;      */
</span><br>
<span class="quotelev2">&gt;&gt; -    for (idx = opal_ifbegin(); idx &gt;= 0; idx=opal_ifnext (idx)) {
</span><br>
<span class="quotelev2">&gt;&gt; +    for( idx = opal_ifbegin(); idx &gt;= 0; idx = opal_ifnext (idx) ) {
</span><br>
<span class="quotelev2">&gt;&gt;         int kindex, index;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         opal_ifindextoaddr (idx, (struct sockaddr*) &amp;local_addr, sizeof (local_addr));
</span><br>
<span class="quotelev2">&gt;&gt; @@ -310,10 +277,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;                 argv++;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt; -            if (true == skip) {
</span><br>
<span class="quotelev2">&gt;&gt; -                /* This interface is not part of the included set, so skip it */
</span><br>
<span class="quotelev2">&gt;&gt; -                continue;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         /* If we were given a list of excluded interfaces, then check to see if the
</span><br>
<span class="quotelev2">&gt;&gt; @@ -333,9 +296,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;                 argv++;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt; -            if(true == skip) {
</span><br>
<span class="quotelev2">&gt;&gt; -                continue;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +        if (true == skip) {
</span><br>
<span class="quotelev2">&gt;&gt; +            /* This interface is not part of the requested set, so skip it */
</span><br>
<span class="quotelev2">&gt;&gt; +            continue;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         kindex = opal_ifindextokindex(idx);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -345,48 +309,103 @@
</span><br>
<span class="quotelev2">&gt;&gt;         if(-1 == index) {
</span><br>
<span class="quotelev2">&gt;&gt;             index = num_local_interfaces++;
</span><br>
<span class="quotelev2">&gt;&gt;             local_kindex_to_index[kindex] = index;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            if( num_local_interfaces == max_local_interfaces ) {
</span><br>
<span class="quotelev2">&gt;&gt; +                max_local_interfaces &lt;&lt;= 1;
</span><br>
<span class="quotelev2">&gt;&gt; +                local_interfaces = (mca_btl_tcp_interface_t**)realloc( local_interfaces,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                                       max_local_interfaces * sizeof(mca_btl_tcp_interface_t*) );
</span><br>
<span class="quotelev2">&gt;&gt; +                if( NULL == local_interfaces )
</span><br>
<span class="quotelev2">&gt;&gt; +                    return NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt;             local_interfaces[index] = (mca_btl_tcp_interface_t *) malloc(sizeof(mca_btl_tcp_interface_t));
</span><br>
<span class="quotelev2">&gt;&gt;             assert(NULL != local_interfaces[index]);
</span><br>
<span class="quotelev2">&gt;&gt;             mca_btl_tcp_initialise_interface(local_interfaces[index], kindex, index);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         switch(local_addr.ss_family) {
</span><br>
<span class="quotelev2">&gt;&gt; -            case AF_INET:
</span><br>
<span class="quotelev2">&gt;&gt; -                /* if AF is disabled, skip it completely */
</span><br>
<span class="quotelev2">&gt;&gt; -                if (4 == mca_btl_tcp_component.tcp_disable_family) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    continue;
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; +        case AF_INET:
</span><br>
<span class="quotelev2">&gt;&gt; +            /* if AF is disabled, skip it completely */
</span><br>
<span class="quotelev2">&gt;&gt; +            if (4 == mca_btl_tcp_component.tcp_disable_family) {
</span><br>
<span class="quotelev2">&gt;&gt; +                continue;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -                local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_address =
</span><br>
<span class="quotelev2">&gt;&gt; -                    (struct sockaddr_storage*) malloc(sizeof(local_addr));
</span><br>
<span class="quotelev2">&gt;&gt; -                memcpy(local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_address,
</span><br>
<span class="quotelev2">&gt;&gt; -                        &amp;local_addr, sizeof(local_addr));
</span><br>
<span class="quotelev2">&gt;&gt; -                opal_ifindextomask(idx,
</span><br>
<span class="quotelev2">&gt;&gt; -                        &amp;local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_netmask,
</span><br>
<span class="quotelev2">&gt;&gt; -                        sizeof(int));
</span><br>
<span class="quotelev2">&gt;&gt; -                break;
</span><br>
<span class="quotelev2">&gt;&gt; -            case AF_INET6:
</span><br>
<span class="quotelev2">&gt;&gt; -                /* if AF is disabled, skip it completely */
</span><br>
<span class="quotelev2">&gt;&gt; -                if (6 == mca_btl_tcp_component.tcp_disable_family) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    continue;
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; +            local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_address =
</span><br>
<span class="quotelev2">&gt;&gt; +                (struct sockaddr_storage*) malloc(sizeof(local_addr));
</span><br>
<span class="quotelev2">&gt;&gt; +            memcpy(local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_address,
</span><br>
<span class="quotelev2">&gt;&gt; +                   &amp;local_addr, sizeof(local_addr));
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_ifindextomask(idx,
</span><br>
<span class="quotelev2">&gt;&gt; +                               &amp;local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_netmask,
</span><br>
<span class="quotelev2">&gt;&gt; +                               sizeof(int));
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +        case AF_INET6:
</span><br>
<span class="quotelev2">&gt;&gt; +            /* if AF is disabled, skip it completely */
</span><br>
<span class="quotelev2">&gt;&gt; +            if (6 == mca_btl_tcp_component.tcp_disable_family) {
</span><br>
<span class="quotelev2">&gt;&gt; +                continue;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -                local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_address
</span><br>
<span class="quotelev2">&gt;&gt; -                    = (struct sockaddr_storage*) malloc(sizeof(local_addr));
</span><br>
<span class="quotelev2">&gt;&gt; -                memcpy(local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_address,
</span><br>
<span class="quotelev2">&gt;&gt; -                        &amp;local_addr, sizeof(local_addr));
</span><br>
<span class="quotelev2">&gt;&gt; -                opal_ifindextomask(idx,
</span><br>
<span class="quotelev2">&gt;&gt; -                        &amp;local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_netmask,
</span><br>
<span class="quotelev2">&gt;&gt; -                        sizeof(int));
</span><br>
<span class="quotelev2">&gt;&gt; -                break;
</span><br>
<span class="quotelev2">&gt;&gt; -            default:
</span><br>
<span class="quotelev2">&gt;&gt; -                opal_output(0, &quot;unknown address family for tcp: %d\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +            local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_address
</span><br>
<span class="quotelev2">&gt;&gt; +                = (struct sockaddr_storage*) malloc(sizeof(local_addr));
</span><br>
<span class="quotelev2">&gt;&gt; +            memcpy(local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_address,
</span><br>
<span class="quotelev2">&gt;&gt; +                   &amp;local_addr, sizeof(local_addr));
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_ifindextomask(idx,
</span><br>
<span class="quotelev2">&gt;&gt; +                               &amp;local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_netmask,
</span><br>
<span class="quotelev2">&gt;&gt; +                               sizeof(int));
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +        default:
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_output(0, &quot;unknown address family for tcp: %d\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                         local_addr.ss_family);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     opal_argv_free(include);
</span><br>
<span class="quotelev2">&gt;&gt;     opal_argv_free(exclude);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    return local_interfaces;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +/*
</span><br>
<span class="quotelev2">&gt;&gt; + * Note that this routine must be called with the lock on the process
</span><br>
<span class="quotelev2">&gt;&gt; + * already held.  Insert a btl instance into the proc array and assign
</span><br>
<span class="quotelev2">&gt;&gt; + * it an address.
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +int mca_btl_tcp_proc_insert( mca_btl_tcp_proc_t* btl_proc,
</span><br>
<span class="quotelev2">&gt;&gt; +                             mca_btl_base_endpoint_t* btl_endpoint )
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    struct sockaddr_storage endpoint_addr_ss;
</span><br>
<span class="quotelev2">&gt;&gt; +    unsigned int perm_size;
</span><br>
<span class="quotelev2">&gt;&gt; +    int rc, *a = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    size_t i, j;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#ifndef WORDS_BIGENDIAN
</span><br>
<span class="quotelev2">&gt;&gt; +    /* if we are little endian and our peer is not so lucky, then we
</span><br>
<span class="quotelev2">&gt;&gt; +       need to put all information sent to him in big endian (aka
</span><br>
<span class="quotelev2">&gt;&gt; +       Network Byte Order) and expect all information received to
</span><br>
<span class="quotelev2">&gt;&gt; +       be in NBO.  Since big endian machines always send and receive
</span><br>
<span class="quotelev2">&gt;&gt; +       in NBO, we don't care so much about that case. */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (btl_proc-&gt;proc_ompi-&gt;proc_arch &amp; OPAL_ARCH_ISBIGENDIAN) {
</span><br>
<span class="quotelev2">&gt;&gt; +        btl_endpoint-&gt;endpoint_nbo = true;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* insert into endpoint array */
</span><br>
<span class="quotelev2">&gt;&gt; +    btl_endpoint-&gt;endpoint_proc = btl_proc;
</span><br>
<span class="quotelev2">&gt;&gt; +    btl_proc-&gt;proc_endpoints[btl_proc-&gt;proc_endpoint_count++] = btl_endpoint;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* sanity checks */
</span><br>
<span class="quotelev2">&gt;&gt; +    if( NULL == local_interfaces ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if( NULL == mca_btl_tcp_retrieve_local_interfaces() )
</span><br>
<span class="quotelev2">&gt;&gt; +            return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    if( 0 == num_local_interfaces ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        return OMPI_ERR_UNREACH;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if( NULL == peer_interfaces ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        max_peer_interfaces = max_local_interfaces;
</span><br>
<span class="quotelev2">&gt;&gt; +        peer_interfaces = (mca_btl_tcp_interface_t**)malloc( max_peer_interfaces * sizeof(mca_btl_tcp_interface_t*) );
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    num_peer_interfaces = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +    memset(peer_kindex_to_index, -1, sizeof(int)*MAX_KERNEL_INTERFACE_INDEX);
</span><br>
<span class="quotelev2">&gt;&gt; +    memset(peer_interfaces, 0, max_peer_interfaces * sizeof(mca_btl_tcp_interface_t*));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     /*
</span><br>
<span class="quotelev2">&gt;&gt;      * identify all kernel interfaces and the associated addresses of
</span><br>
<span class="quotelev2">&gt;&gt;      * the peer
</span><br>
<span class="quotelev2">&gt;&gt; @@ -405,9 +424,16 @@
</span><br>
<span class="quotelev2">&gt;&gt;         if(-1 == index) {
</span><br>
<span class="quotelev2">&gt;&gt;             index = num_peer_interfaces++;
</span><br>
<span class="quotelev2">&gt;&gt;             peer_kindex_to_index[endpoint_addr-&gt;addr_ifkindex] = index;
</span><br>
<span class="quotelev2">&gt;&gt; +            if( num_peer_interfaces == max_peer_interfaces ) {
</span><br>
<span class="quotelev2">&gt;&gt; +                max_peer_interfaces &lt;&lt;= 1;
</span><br>
<span class="quotelev2">&gt;&gt; +                peer_interfaces = (mca_btl_tcp_interface_t**)realloc( peer_interfaces,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                                      max_peer_interfaces * sizeof(mca_btl_tcp_interface_t*) );
</span><br>
<span class="quotelev2">&gt;&gt; +                if( NULL == peer_interfaces )
</span><br>
<span class="quotelev2">&gt;&gt; +                    return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt;             peer_interfaces[index] = (mca_btl_tcp_interface_t *) malloc(sizeof(mca_btl_tcp_interface_t));
</span><br>
<span class="quotelev2">&gt;&gt;             mca_btl_tcp_initialise_interface(peer_interfaces[index],
</span><br>
<span class="quotelev2">&gt;&gt; -                    endpoint_addr-&gt;addr_ifkindex, index);
</span><br>
<span class="quotelev2">&gt;&gt; +                                             endpoint_addr-&gt;addr_ifkindex, index);
</span><br>
<span class="quotelev2">&gt;&gt;         }      
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         /*
</span><br>
<span class="quotelev2">&gt;&gt; @@ -419,25 +445,25 @@
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         switch(endpoint_addr_ss.ss_family) {
</span><br>
<span class="quotelev2">&gt;&gt; -            case AF_INET:
</span><br>
<span class="quotelev2">&gt;&gt; -                peer_interfaces[index]-&gt;ipv4_address = (struct sockaddr_storage*) malloc(sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev2">&gt;&gt; -                peer_interfaces[index]-&gt;ipv4_endpoint_addr = endpoint_addr;
</span><br>
<span class="quotelev2">&gt;&gt; -                memcpy(peer_interfaces[index]-&gt;ipv4_address,
</span><br>
<span class="quotelev2">&gt;&gt; -                        &amp;endpoint_addr_ss, sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev2">&gt;&gt; -                break;
</span><br>
<span class="quotelev2">&gt;&gt; -            case AF_INET6:
</span><br>
<span class="quotelev2">&gt;&gt; -                peer_interfaces[index]-&gt;ipv6_address = (struct sockaddr_storage*) malloc(sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev2">&gt;&gt; -                peer_interfaces[index]-&gt;ipv6_endpoint_addr = endpoint_addr;
</span><br>
<span class="quotelev2">&gt;&gt; -                memcpy(peer_interfaces[index]-&gt;ipv6_address,
</span><br>
<span class="quotelev2">&gt;&gt; -                        &amp;endpoint_addr_ss, sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev2">&gt;&gt; -                break;
</span><br>
<span class="quotelev2">&gt;&gt; -            default:
</span><br>
<span class="quotelev2">&gt;&gt; -                opal_output(0, &quot;unknown address family for tcp: %d\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                        local_addr.ss_family);
</span><br>
<span class="quotelev2">&gt;&gt; -                /*
</span><br>
<span class="quotelev2">&gt;&gt; -                 * return OMPI_UNREACH or some error, as this is not
</span><br>
<span class="quotelev2">&gt;&gt; -                 * good
</span><br>
<span class="quotelev2">&gt;&gt; -                 */
</span><br>
<span class="quotelev2">&gt;&gt; +        case AF_INET:
</span><br>
<span class="quotelev2">&gt;&gt; +            peer_interfaces[index]-&gt;ipv4_address = (struct sockaddr_storage*) malloc(sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev2">&gt;&gt; +            peer_interfaces[index]-&gt;ipv4_endpoint_addr = endpoint_addr;
</span><br>
<span class="quotelev2">&gt;&gt; +            memcpy(peer_interfaces[index]-&gt;ipv4_address,
</span><br>
<span class="quotelev2">&gt;&gt; +                   &amp;endpoint_addr_ss, sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +        case AF_INET6:
</span><br>
<span class="quotelev2">&gt;&gt; +            peer_interfaces[index]-&gt;ipv6_address = (struct sockaddr_storage*) malloc(sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev2">&gt;&gt; +            peer_interfaces[index]-&gt;ipv6_endpoint_addr = endpoint_addr;
</span><br>
<span class="quotelev2">&gt;&gt; +            memcpy(peer_interfaces[index]-&gt;ipv6_address,
</span><br>
<span class="quotelev2">&gt;&gt; +                   &amp;endpoint_addr_ss, sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +        default:
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_output(0, &quot;unknown address family for tcp: %d\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                        endpoint_addr_ss.ss_family);
</span><br>
<span class="quotelev2">&gt;&gt; +            /*
</span><br>
<span class="quotelev2">&gt;&gt; +             * return OMPI_UNREACH or some error, as this is not
</span><br>
<span class="quotelev2">&gt;&gt; +             * good
</span><br>
<span class="quotelev2">&gt;&gt; +             */
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -451,17 +477,17 @@
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     weights = (enum mca_btl_tcp_connection_quality**) malloc(perm_size
</span><br>
<span class="quotelev2">&gt;&gt; -            * sizeof(enum mca_btl_tcp_connection_quality*));
</span><br>
<span class="quotelev2">&gt;&gt; +                                                             * sizeof(enum mca_btl_tcp_connection_quality*));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     best_addr = (mca_btl_tcp_addr_t ***) malloc(perm_size
</span><br>
<span class="quotelev2">&gt;&gt; -            * sizeof(mca_btl_tcp_addr_t **));
</span><br>
<span class="quotelev2">&gt;&gt; +                                                * sizeof(mca_btl_tcp_addr_t **));
</span><br>
<span class="quotelev2">&gt;&gt;     for(i = 0; i &lt; perm_size; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt;         weights[i] = (enum mca_btl_tcp_connection_quality*) malloc(perm_size *
</span><br>
<span class="quotelev2">&gt;&gt; -                sizeof(enum mca_btl_tcp_connection_quality));
</span><br>
<span class="quotelev2">&gt;&gt; +                                                                   sizeof(enum mca_btl_tcp_connection_quality));
</span><br>
<span class="quotelev2">&gt;&gt;         memset(weights[i], 0, perm_size * sizeof(enum mca_btl_tcp_connection_quality));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         best_addr[i] = (mca_btl_tcp_addr_t **) malloc(perm_size *
</span><br>
<span class="quotelev2">&gt;&gt; -                sizeof(mca_btl_tcp_addr_t *));
</span><br>
<span class="quotelev2">&gt;&gt; +                                                      sizeof(mca_btl_tcp_addr_t *));
</span><br>
<span class="quotelev2">&gt;&gt;         memset(best_addr[i], 0, perm_size * sizeof(mca_btl_tcp_addr_t *));
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -478,11 +504,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                 /*  check for RFC1918 */
</span><br>
<span class="quotelev2">&gt;&gt;                 if(opal_net_addr_isipv4public((struct sockaddr*) local_interfaces[i]-&gt;ipv4_address)
</span><br>
<span class="quotelev2">&gt;&gt; -                        &amp;&amp; opal_net_addr_isipv4public((struct sockaddr*)
</span><br>
<span class="quotelev2">&gt;&gt; -                            peer_interfaces[j]-&gt;ipv4_address)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                   &amp;&amp; opal_net_addr_isipv4public((struct sockaddr*)
</span><br>
<span class="quotelev2">&gt;&gt; +                                                 peer_interfaces[j]-&gt;ipv4_address)) {
</span><br>
<span class="quotelev2">&gt;&gt;                     if(opal_net_samenetwork((struct sockaddr*) local_interfaces[i]-&gt;ipv4_address,
</span><br>
<span class="quotelev2">&gt;&gt; -                                (struct sockaddr*) peer_interfaces[j]-&gt;ipv4_address,
</span><br>
<span class="quotelev2">&gt;&gt; -                                local_interfaces[i]-&gt;ipv4_netmask)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                                            (struct sockaddr*) peer_interfaces[j]-&gt;ipv4_address,
</span><br>
<span class="quotelev2">&gt;&gt; +                                            local_interfaces[i]-&gt;ipv4_netmask)) {
</span><br>
<span class="quotelev2">&gt;&gt;                         weights[i][j] = CQ_PUBLIC_SAME_NETWORK;
</span><br>
<span class="quotelev2">&gt;&gt;                     } else {
</span><br>
<span class="quotelev2">&gt;&gt;                         weights[i][j] = CQ_PUBLIC_DIFFERENT_NETWORK;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -491,8 +517,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                     continue;
</span><br>
<span class="quotelev2">&gt;&gt;                 } else {
</span><br>
<span class="quotelev2">&gt;&gt;                     if(opal_net_samenetwork((struct sockaddr*) local_interfaces[i]-&gt;ipv4_address,
</span><br>
<span class="quotelev2">&gt;&gt; -                                (struct sockaddr*) peer_interfaces[j]-&gt;ipv4_address,
</span><br>
<span class="quotelev2">&gt;&gt; -                                local_interfaces[i]-&gt;ipv4_netmask)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                                            (struct sockaddr*) peer_interfaces[j]-&gt;ipv4_address,
</span><br>
<span class="quotelev2">&gt;&gt; +                                            local_interfaces[i]-&gt;ipv4_netmask)) {
</span><br>
<span class="quotelev2">&gt;&gt;                         weights[i][j] = CQ_PRIVATE_SAME_NETWORK;
</span><br>
<span class="quotelev2">&gt;&gt;                     } else {
</span><br>
<span class="quotelev2">&gt;&gt;                         weights[i][j] = CQ_PRIVATE_DIFFERENT_NETWORK;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -507,8 +533,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;             if(NULL != local_interfaces[i]-&gt;ipv6_address &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt;                NULL != peer_interfaces[j]-&gt;ipv6_address) {
</span><br>
<span class="quotelev2">&gt;&gt;                 if(opal_net_samenetwork((struct sockaddr*) local_interfaces[i]-&gt;ipv6_address,
</span><br>
<span class="quotelev2">&gt;&gt; -                            (struct sockaddr*) peer_interfaces[j]-&gt;ipv6_address,
</span><br>
<span class="quotelev2">&gt;&gt; -                            local_interfaces[i]-&gt;ipv6_netmask)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                                        (struct sockaddr*) peer_interfaces[j]-&gt;ipv6_address,
</span><br>
<span class="quotelev2">&gt;&gt; +                                        local_interfaces[i]-&gt;ipv6_netmask)) {
</span><br>
<span class="quotelev2">&gt;&gt;                     weights[i][j] = CQ_PUBLIC_SAME_NETWORK;
</span><br>
<span class="quotelev2">&gt;&gt;                 } else {
</span><br>
<span class="quotelev2">&gt;&gt;                     weights[i][j] = CQ_PUBLIC_DIFFERENT_NETWORK;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -539,9 +565,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;     rc = OMPI_ERR_UNREACH;
</span><br>
<span class="quotelev2">&gt;&gt;     for(i = 0; i &lt; perm_size; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt;         if(best_assignment[i] &gt; num_peer_interfaces
</span><br>
<span class="quotelev2">&gt;&gt; -                || weights[i][best_assignment[i]] == CQ_NO_CONNECTION
</span><br>
<span class="quotelev2">&gt;&gt; -                || peer_interfaces[best_assignment[i]]-&gt;inuse
</span><br>
<span class="quotelev2">&gt;&gt; -                || NULL == peer_interfaces[best_assignment[i]]) {
</span><br>
<span class="quotelev2">&gt;&gt; +           || weights[i][best_assignment[i]] == CQ_NO_CONNECTION
</span><br>
<span class="quotelev2">&gt;&gt; +           || peer_interfaces[best_assignment[i]]-&gt;inuse
</span><br>
<span class="quotelev2">&gt;&gt; +           || NULL == peer_interfaces[best_assignment[i]]) {
</span><br>
<span class="quotelev2">&gt;&gt;             continue;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         peer_interfaces[best_assignment[i]]-&gt;inuse++;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -565,6 +591,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         free(peer_interfaces[i]);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; +    free(peer_interfaces);
</span><br>
<span class="quotelev2">&gt;&gt; +    peer_interfaces = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    max_peer_interfaces = 0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     for(i = 0; i &lt; num_local_interfaces; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt;         if(NULL != local_interfaces[i]-&gt;ipv4_address) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -575,6 +604,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         free(local_interfaces[i]);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; +    free(local_interfaces);
</span><br>
<span class="quotelev2">&gt;&gt; +    local_interfaces = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    max_local_interfaces = 0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     free(weights);
</span><br>
<span class="quotelev2">&gt;&gt;     free(best_addr);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_proc.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_proc.h       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_proc.h       2010-02-19 02:10:32 EST (Fri, 19 Feb 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -41,9 +41,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_proc_t *proc_ompi;                 
</span><br>
<span class="quotelev2">&gt;&gt;     /**&lt; pointer to corresponding ompi_proc_t */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_process_name_t proc_name;          
</span><br>
<span class="quotelev2">&gt;&gt; -    /**&lt; globally unique identifier for the process */
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;     struct mca_btl_tcp_addr_t* proc_addrs;
</span><br>
<span class="quotelev2">&gt;&gt;     /**&lt; array of addresses exported by peer */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="7463.php">Lisandro Dalcin: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7461.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
<li><strong>In reply to:</strong> <a href="7461.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
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
