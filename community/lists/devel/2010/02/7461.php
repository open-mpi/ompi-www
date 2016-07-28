<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 08:01:34 2010" -->
<!-- isoreceived="20100219130134" -->
<!-- sent="Fri, 19 Feb 2010 08:01:27 -0500" -->
<!-- isosent="20100219130127" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669" -->
<!-- id="B7DF5F87-2607-4633-9593-1D338F6FD773_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201002190710.o1J7AXXa019594_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-19 08:01:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
<li><strong>Previous message:</strong> <a href="7460.php">Ralph Castain: "[OMPI devel] Modex-less launch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
<li><strong>Reply:</strong> <a href="7462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo George --
<br>
<p>This commit has a bunch of indenting changes, so at first blush, it's hard to tell exactly what it does.
<br>
<p>Can you give a short explanation of what this commit does?  
<br>
<p>Thanks!
<br>
<p><p>On Feb 19, 2010, at 2:10 AM, &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2010-02-19 02:10:32 EST (Fri, 19 Feb 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 22669
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22669">https://svn.open-mpi.org/trac/ompi/changeset/22669</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Unrestricted number of interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c |     6                                        
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_proc.c     |   290 ++++++++++++++++++++++-----------------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_proc.h     |     3                                        
</span><br>
<span class="quotelev1">&gt;    3 files changed, 165 insertions(+), 134 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c   2010-02-19 02:10:32 EST (Fri, 19 Feb 2010)
</span><br>
<span class="quotelev1">&gt; @@ -315,7 +315,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      /* send process identifier to remote endpoint */
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_proc_t* btl_proc = mca_btl_tcp_proc_local();
</span><br>
<span class="quotelev1">&gt; -    orte_process_name_t guid = btl_proc-&gt;proc_name;
</span><br>
<span class="quotelev1">&gt; +    orte_process_name_t guid = btl_proc-&gt;proc_ompi-&gt;proc_name;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ORTE_PROCESS_NAME_HTON(guid);
</span><br>
<span class="quotelev1">&gt;      if(mca_btl_tcp_endpoint_send_blocking(btl_endpoint, &amp;guid, sizeof(guid)) !=
</span><br>
<span class="quotelev1">&gt; @@ -479,7 +479,9 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      ORTE_PROCESS_NAME_NTOH(guid);
</span><br>
<span class="quotelev1">&gt;      /* compare this to the expected values */
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;btl_proc-&gt;proc_name, &amp;guid)) {
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL,
</span><br>
<span class="quotelev1">&gt; +                                                    &amp;btl_proc-&gt;proc_ompi-&gt;proc_name,
</span><br>
<span class="quotelev1">&gt; +                                                    &amp;guid)) {
</span><br>
<span class="quotelev1">&gt;          BTL_ERROR((&quot;received unexpected process identifier %s&quot;,
</span><br>
<span class="quotelev1">&gt;                     ORTE_NAME_PRINT(&amp;guid)));
</span><br>
<span class="quotelev1">&gt;          mca_btl_tcp_endpoint_close(btl_endpoint);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_proc.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_proc.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_proc.c       2010-02-19 02:10:32 EST (Fri, 19 Feb 2010)
</span><br>
<span class="quotelev1">&gt; @@ -2,7 +2,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2006 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt;   *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;   *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2008 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2010 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt;   *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt;   *                         reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev1">&gt; @@ -40,17 +40,17 @@
</span><br>
<span class="quotelev1">&gt;  static void mca_btl_tcp_proc_construct(mca_btl_tcp_proc_t* proc);
</span><br>
<span class="quotelev1">&gt;  static void mca_btl_tcp_proc_destruct(mca_btl_tcp_proc_t* proc);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca_btl_tcp_interface_t* local_interfaces[MAX_KERNEL_INTERFACES];
</span><br>
<span class="quotelev1">&gt; -mca_btl_tcp_interface_t* peer_interfaces[MAX_KERNEL_INTERFACES];
</span><br>
<span class="quotelev1">&gt; -int local_kindex_to_index[MAX_KERNEL_INTERFACE_INDEX];
</span><br>
<span class="quotelev1">&gt; -int peer_kindex_to_index[MAX_KERNEL_INTERFACE_INDEX];
</span><br>
<span class="quotelev1">&gt; -size_t num_local_interfaces;
</span><br>
<span class="quotelev1">&gt; -size_t num_peer_interfaces;
</span><br>
<span class="quotelev1">&gt; -unsigned int *best_assignment;
</span><br>
<span class="quotelev1">&gt; -int max_assignment_weight;
</span><br>
<span class="quotelev1">&gt; -int max_assignment_cardinality;
</span><br>
<span class="quotelev1">&gt; -enum mca_btl_tcp_connection_quality **weights;
</span><br>
<span class="quotelev1">&gt; -struct mca_btl_tcp_addr_t ***best_addr;
</span><br>
<span class="quotelev1">&gt; +static mca_btl_tcp_interface_t** local_interfaces = NULL;
</span><br>
<span class="quotelev1">&gt; +static int local_kindex_to_index[MAX_KERNEL_INTERFACE_INDEX];
</span><br>
<span class="quotelev1">&gt; +static size_t num_local_interfaces, max_local_interfaces;
</span><br>
<span class="quotelev1">&gt; +static mca_btl_tcp_interface_t** peer_interfaces = NULL;
</span><br>
<span class="quotelev1">&gt; +static size_t num_peer_interfaces, max_peer_interfaces;
</span><br>
<span class="quotelev1">&gt; +static int peer_kindex_to_index[MAX_KERNEL_INTERFACE_INDEX];
</span><br>
<span class="quotelev1">&gt; +static unsigned int *best_assignment;
</span><br>
<span class="quotelev1">&gt; +static int max_assignment_weight;
</span><br>
<span class="quotelev1">&gt; +static int max_assignment_cardinality;
</span><br>
<span class="quotelev1">&gt; +static enum mca_btl_tcp_connection_quality **weights;
</span><br>
<span class="quotelev1">&gt; +static struct mca_btl_tcp_addr_t ***best_addr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  OBJ_CLASS_INSTANCE( mca_btl_tcp_proc_t,
</span><br>
<span class="quotelev1">&gt;                      opal_list_item_t,
</span><br>
<span class="quotelev1">&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev1">&gt;      /* remove from list of all proc instances */
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_LOCK(&amp;mca_btl_tcp_component.tcp_lock);
</span><br>
<span class="quotelev1">&gt;      opal_hash_table_remove_value_uint64(&amp;mca_btl_tcp_component.tcp_procs,
</span><br>
<span class="quotelev1">&gt; -                                        orte_util_hash_name(&amp;tcp_proc-&gt;proc_name));
</span><br>
<span class="quotelev1">&gt; +                                        orte_util_hash_name(&amp;tcp_proc-&gt;proc_ompi-&gt;proc_name));
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_UNLOCK(&amp;mca_btl_tcp_component.tcp_lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      /* release resources */
</span><br>
<span class="quotelev1">&gt; @@ -113,7 +113,6 @@
</span><br>
<span class="quotelev1">&gt;      if(NULL == btl_proc)
</span><br>
<span class="quotelev1">&gt;          return NULL;
</span><br>
<span class="quotelev1">&gt;      btl_proc-&gt;proc_ompi = ompi_proc;
</span><br>
<span class="quotelev1">&gt; -    btl_proc-&gt;proc_name = ompi_proc-&gt;proc_name;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;      /* add to hash table of all proc instance */
</span><br>
<span class="quotelev1">&gt;      opal_hash_table_set_value_uint64(&amp;mca_btl_tcp_component.tcp_procs,
</span><br>
<span class="quotelev1">&gt; @@ -176,8 +175,6 @@
</span><br>
<span class="quotelev1">&gt;      int assignment_weight = 0;
</span><br>
<span class="quotelev1">&gt;      int assignment_cardinality = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      if(max_interfaces &lt; num_peer_interfaces) {
</span><br>
<span class="quotelev1">&gt;          max_interfaces = num_peer_interfaces;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -232,64 +229,34 @@
</span><br>
<span class="quotelev1">&gt;      interface-&gt;inuse = 0;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Note that this routine must be called with the lock on the process
</span><br>
<span class="quotelev1">&gt; - * already held.  Insert a btl instance into the proc array and assign
</span><br>
<span class="quotelev1">&gt; - * it an address.
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -int mca_btl_tcp_proc_insert( mca_btl_tcp_proc_t* btl_proc,
</span><br>
<span class="quotelev1">&gt; -                             mca_btl_base_endpoint_t* btl_endpoint )
</span><br>
<span class="quotelev1">&gt; +static mca_btl_tcp_interface_t** mca_btl_tcp_retrieve_local_interfaces(void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    size_t i, j;
</span><br>
<span class="quotelev1">&gt; -    struct sockaddr_storage endpoint_addr_ss, local_addr;
</span><br>
<span class="quotelev1">&gt; -    int idx, rc;
</span><br>
<span class="quotelev1">&gt; -    int *a = NULL;
</span><br>
<span class="quotelev1">&gt; -    unsigned int perm_size;
</span><br>
<span class="quotelev1">&gt; -    char **include;
</span><br>
<span class="quotelev1">&gt; -    char **exclude;
</span><br>
<span class="quotelev1">&gt; -    char **argv;
</span><br>
<span class="quotelev1">&gt; -    bool skip;
</span><br>
<span class="quotelev1">&gt; +    struct sockaddr_storage local_addr;
</span><br>
<span class="quotelev1">&gt;      char local_if_name[IF_NAMESIZE];
</span><br>
<span class="quotelev1">&gt; +    char **include, **exclude, **argv;
</span><br>
<span class="quotelev1">&gt; +    bool skip;
</span><br>
<span class="quotelev1">&gt; +    int idx;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    num_local_interfaces = 0;
</span><br>
<span class="quotelev1">&gt; -    num_peer_interfaces = 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#ifndef WORDS_BIGENDIAN
</span><br>
<span class="quotelev1">&gt; -    /* if we are little endian and our peer is not so lucky, then we
</span><br>
<span class="quotelev1">&gt; -       need to put all information sent to him in big endian (aka
</span><br>
<span class="quotelev1">&gt; -       Network Byte Order) and expect all information received to
</span><br>
<span class="quotelev1">&gt; -       be in NBO.  Since big endian machines always send and receive
</span><br>
<span class="quotelev1">&gt; -       in NBO, we don't care so much about that case. */
</span><br>
<span class="quotelev1">&gt; -    if (btl_proc-&gt;proc_ompi-&gt;proc_arch &amp; OPAL_ARCH_ISBIGENDIAN) {
</span><br>
<span class="quotelev1">&gt; -        btl_endpoint-&gt;endpoint_nbo = true;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* insert into endpoint array */
</span><br>
<span class="quotelev1">&gt; -    btl_endpoint-&gt;endpoint_proc = btl_proc;
</span><br>
<span class="quotelev1">&gt; -    btl_proc-&gt;proc_endpoints[btl_proc-&gt;proc_endpoint_count++] = btl_endpoint;
</span><br>
<span class="quotelev1">&gt; +    if( NULL != local_interfaces )
</span><br>
<span class="quotelev1">&gt; +        return local_interfaces;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    max_local_interfaces = MAX_KERNEL_INTERFACES;
</span><br>
<span class="quotelev1">&gt; +    num_local_interfaces = 0;
</span><br>
<span class="quotelev1">&gt; +    local_interfaces = (mca_btl_tcp_interface_t**)calloc( max_local_interfaces, sizeof(mca_btl_tcp_interface_t*) );
</span><br>
<span class="quotelev1">&gt; +    if( NULL == local_interfaces )
</span><br>
<span class="quotelev1">&gt; +        return NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      memset(local_kindex_to_index, -1, sizeof(int)*MAX_KERNEL_INTERFACE_INDEX);
</span><br>
<span class="quotelev1">&gt; -    memset(peer_kindex_to_index, -1, sizeof(int)*MAX_KERNEL_INTERFACE_INDEX);
</span><br>
<span class="quotelev1">&gt; -    memset(local_interfaces, 0, sizeof(local_interfaces));
</span><br>
<span class="quotelev1">&gt; -    memset(peer_interfaces, 0, sizeof(peer_interfaces));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      /* Collect up the list of included and excluded interfaces, if any */
</span><br>
<span class="quotelev1">&gt;      include = opal_argv_split(mca_btl_tcp_component.tcp_if_include,',');
</span><br>
<span class="quotelev1">&gt;      exclude = opal_argv_split(mca_btl_tcp_component.tcp_if_exclude,',');
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt; -     * the following two blocks shout CODE DUPLICATION. We are aware of
</span><br>
<span class="quotelev1">&gt; -     * the problem
</span><br>
<span class="quotelev1">&gt; -     */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /*
</span><br>
<span class="quotelev1">&gt;       * identify all kernel interfaces and the associated addresses of
</span><br>
<span class="quotelev1">&gt;       * the local node
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    for (idx = opal_ifbegin(); idx &gt;= 0; idx=opal_ifnext (idx)) {
</span><br>
<span class="quotelev1">&gt; +    for( idx = opal_ifbegin(); idx &gt;= 0; idx = opal_ifnext (idx) ) {
</span><br>
<span class="quotelev1">&gt;          int kindex, index;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          opal_ifindextoaddr (idx, (struct sockaddr*) &amp;local_addr, sizeof (local_addr));
</span><br>
<span class="quotelev1">&gt; @@ -310,10 +277,6 @@
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;                  argv++;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; -            if (true == skip) {
</span><br>
<span class="quotelev1">&gt; -                /* This interface is not part of the included set, so skip it */
</span><br>
<span class="quotelev1">&gt; -                continue;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          /* If we were given a list of excluded interfaces, then check to see if the
</span><br>
<span class="quotelev1">&gt; @@ -333,9 +296,10 @@
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;                  argv++;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; -            if(true == skip) {
</span><br>
<span class="quotelev1">&gt; -                continue;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        if (true == skip) {
</span><br>
<span class="quotelev1">&gt; +            /* This interface is not part of the requested set, so skip it */
</span><br>
<span class="quotelev1">&gt; +            continue;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          kindex = opal_ifindextokindex(idx);
</span><br>
<span class="quotelev1">&gt; @@ -345,48 +309,103 @@
</span><br>
<span class="quotelev1">&gt;          if(-1 == index) {
</span><br>
<span class="quotelev1">&gt;              index = num_local_interfaces++;
</span><br>
<span class="quotelev1">&gt;              local_kindex_to_index[kindex] = index;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if( num_local_interfaces == max_local_interfaces ) {
</span><br>
<span class="quotelev1">&gt; +                max_local_interfaces &lt;&lt;= 1;
</span><br>
<span class="quotelev1">&gt; +                local_interfaces = (mca_btl_tcp_interface_t**)realloc( local_interfaces,
</span><br>
<span class="quotelev1">&gt; +                                                                       max_local_interfaces * sizeof(mca_btl_tcp_interface_t*) );
</span><br>
<span class="quotelev1">&gt; +                if( NULL == local_interfaces )
</span><br>
<span class="quotelev1">&gt; +                    return NULL;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt;              local_interfaces[index] = (mca_btl_tcp_interface_t *) malloc(sizeof(mca_btl_tcp_interface_t));
</span><br>
<span class="quotelev1">&gt;              assert(NULL != local_interfaces[index]);
</span><br>
<span class="quotelev1">&gt;              mca_btl_tcp_initialise_interface(local_interfaces[index], kindex, index);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          switch(local_addr.ss_family) {
</span><br>
<span class="quotelev1">&gt; -            case AF_INET:
</span><br>
<span class="quotelev1">&gt; -                /* if AF is disabled, skip it completely */
</span><br>
<span class="quotelev1">&gt; -                if (4 == mca_btl_tcp_component.tcp_disable_family) {
</span><br>
<span class="quotelev1">&gt; -                    continue;
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; +        case AF_INET:
</span><br>
<span class="quotelev1">&gt; +            /* if AF is disabled, skip it completely */
</span><br>
<span class="quotelev1">&gt; +            if (4 == mca_btl_tcp_component.tcp_disable_family) {
</span><br>
<span class="quotelev1">&gt; +                continue;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -                local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_address =
</span><br>
<span class="quotelev1">&gt; -                    (struct sockaddr_storage*) malloc(sizeof(local_addr));
</span><br>
<span class="quotelev1">&gt; -                memcpy(local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; -                        &amp;local_addr, sizeof(local_addr));
</span><br>
<span class="quotelev1">&gt; -                opal_ifindextomask(idx,
</span><br>
<span class="quotelev1">&gt; -                        &amp;local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_netmask,
</span><br>
<span class="quotelev1">&gt; -                        sizeof(int));
</span><br>
<span class="quotelev1">&gt; -                break;
</span><br>
<span class="quotelev1">&gt; -            case AF_INET6:
</span><br>
<span class="quotelev1">&gt; -                /* if AF is disabled, skip it completely */
</span><br>
<span class="quotelev1">&gt; -                if (6 == mca_btl_tcp_component.tcp_disable_family) {
</span><br>
<span class="quotelev1">&gt; -                    continue;
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; +            local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_address =
</span><br>
<span class="quotelev1">&gt; +                (struct sockaddr_storage*) malloc(sizeof(local_addr));
</span><br>
<span class="quotelev1">&gt; +            memcpy(local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; +                   &amp;local_addr, sizeof(local_addr));
</span><br>
<span class="quotelev1">&gt; +            opal_ifindextomask(idx,
</span><br>
<span class="quotelev1">&gt; +                               &amp;local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv4_netmask,
</span><br>
<span class="quotelev1">&gt; +                               sizeof(int));
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +        case AF_INET6:
</span><br>
<span class="quotelev1">&gt; +            /* if AF is disabled, skip it completely */
</span><br>
<span class="quotelev1">&gt; +            if (6 == mca_btl_tcp_component.tcp_disable_family) {
</span><br>
<span class="quotelev1">&gt; +                continue;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -                local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_address
</span><br>
<span class="quotelev1">&gt; -                    = (struct sockaddr_storage*) malloc(sizeof(local_addr));
</span><br>
<span class="quotelev1">&gt; -                memcpy(local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_address,
</span><br>
<span class="quotelev1">&gt; -                        &amp;local_addr, sizeof(local_addr));
</span><br>
<span class="quotelev1">&gt; -                opal_ifindextomask(idx,
</span><br>
<span class="quotelev1">&gt; -                        &amp;local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_netmask,
</span><br>
<span class="quotelev1">&gt; -                        sizeof(int));
</span><br>
<span class="quotelev1">&gt; -                break;
</span><br>
<span class="quotelev1">&gt; -            default:
</span><br>
<span class="quotelev1">&gt; -                opal_output(0, &quot;unknown address family for tcp: %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; +            local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_address
</span><br>
<span class="quotelev1">&gt; +                = (struct sockaddr_storage*) malloc(sizeof(local_addr));
</span><br>
<span class="quotelev1">&gt; +            memcpy(local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_address,
</span><br>
<span class="quotelev1">&gt; +                   &amp;local_addr, sizeof(local_addr));
</span><br>
<span class="quotelev1">&gt; +            opal_ifindextomask(idx,
</span><br>
<span class="quotelev1">&gt; +                               &amp;local_interfaces[local_kindex_to_index[kindex]]-&gt;ipv6_netmask,
</span><br>
<span class="quotelev1">&gt; +                               sizeof(int));
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +        default:
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;unknown address family for tcp: %d\n&quot;,
</span><br>
<span class="quotelev1">&gt;                          local_addr.ss_family);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      opal_argv_free(include);
</span><br>
<span class="quotelev1">&gt;      opal_argv_free(exclude);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    return local_interfaces;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Note that this routine must be called with the lock on the process
</span><br>
<span class="quotelev1">&gt; + * already held.  Insert a btl instance into the proc array and assign
</span><br>
<span class="quotelev1">&gt; + * it an address.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +int mca_btl_tcp_proc_insert( mca_btl_tcp_proc_t* btl_proc,
</span><br>
<span class="quotelev1">&gt; +                             mca_btl_base_endpoint_t* btl_endpoint )
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    struct sockaddr_storage endpoint_addr_ss;
</span><br>
<span class="quotelev1">&gt; +    unsigned int perm_size;
</span><br>
<span class="quotelev1">&gt; +    int rc, *a = NULL;
</span><br>
<span class="quotelev1">&gt; +    size_t i, j;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifndef WORDS_BIGENDIAN
</span><br>
<span class="quotelev1">&gt; +    /* if we are little endian and our peer is not so lucky, then we
</span><br>
<span class="quotelev1">&gt; +       need to put all information sent to him in big endian (aka
</span><br>
<span class="quotelev1">&gt; +       Network Byte Order) and expect all information received to
</span><br>
<span class="quotelev1">&gt; +       be in NBO.  Since big endian machines always send and receive
</span><br>
<span class="quotelev1">&gt; +       in NBO, we don't care so much about that case. */
</span><br>
<span class="quotelev1">&gt; +    if (btl_proc-&gt;proc_ompi-&gt;proc_arch &amp; OPAL_ARCH_ISBIGENDIAN) {
</span><br>
<span class="quotelev1">&gt; +        btl_endpoint-&gt;endpoint_nbo = true;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* insert into endpoint array */
</span><br>
<span class="quotelev1">&gt; +    btl_endpoint-&gt;endpoint_proc = btl_proc;
</span><br>
<span class="quotelev1">&gt; +    btl_proc-&gt;proc_endpoints[btl_proc-&gt;proc_endpoint_count++] = btl_endpoint;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* sanity checks */
</span><br>
<span class="quotelev1">&gt; +    if( NULL == local_interfaces ) {
</span><br>
<span class="quotelev1">&gt; +        if( NULL == mca_btl_tcp_retrieve_local_interfaces() )
</span><br>
<span class="quotelev1">&gt; +            return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if( 0 == num_local_interfaces ) {
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERR_UNREACH;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if( NULL == peer_interfaces ) {
</span><br>
<span class="quotelev1">&gt; +        max_peer_interfaces = max_local_interfaces;
</span><br>
<span class="quotelev1">&gt; +        peer_interfaces = (mca_btl_tcp_interface_t**)malloc( max_peer_interfaces * sizeof(mca_btl_tcp_interface_t*) );
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    num_peer_interfaces = 0;
</span><br>
<span class="quotelev1">&gt; +    memset(peer_kindex_to_index, -1, sizeof(int)*MAX_KERNEL_INTERFACE_INDEX);
</span><br>
<span class="quotelev1">&gt; +    memset(peer_interfaces, 0, max_peer_interfaces * sizeof(mca_btl_tcp_interface_t*));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * identify all kernel interfaces and the associated addresses of
</span><br>
<span class="quotelev1">&gt;       * the peer
</span><br>
<span class="quotelev1">&gt; @@ -405,9 +424,16 @@
</span><br>
<span class="quotelev1">&gt;          if(-1 == index) {
</span><br>
<span class="quotelev1">&gt;              index = num_peer_interfaces++;
</span><br>
<span class="quotelev1">&gt;              peer_kindex_to_index[endpoint_addr-&gt;addr_ifkindex] = index;
</span><br>
<span class="quotelev1">&gt; +            if( num_peer_interfaces == max_peer_interfaces ) {
</span><br>
<span class="quotelev1">&gt; +                max_peer_interfaces &lt;&lt;= 1;
</span><br>
<span class="quotelev1">&gt; +                peer_interfaces = (mca_btl_tcp_interface_t**)realloc( peer_interfaces,
</span><br>
<span class="quotelev1">&gt; +                                                                      max_peer_interfaces * sizeof(mca_btl_tcp_interface_t*) );
</span><br>
<span class="quotelev1">&gt; +                if( NULL == peer_interfaces )
</span><br>
<span class="quotelev1">&gt; +                    return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt;              peer_interfaces[index] = (mca_btl_tcp_interface_t *) malloc(sizeof(mca_btl_tcp_interface_t));
</span><br>
<span class="quotelev1">&gt;              mca_btl_tcp_initialise_interface(peer_interfaces[index],
</span><br>
<span class="quotelev1">&gt; -                    endpoint_addr-&gt;addr_ifkindex, index);
</span><br>
<span class="quotelev1">&gt; +                                             endpoint_addr-&gt;addr_ifkindex, index);
</span><br>
<span class="quotelev1">&gt;          }      
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;          /*
</span><br>
<span class="quotelev1">&gt; @@ -419,25 +445,25 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          switch(endpoint_addr_ss.ss_family) {
</span><br>
<span class="quotelev1">&gt; -            case AF_INET:
</span><br>
<span class="quotelev1">&gt; -                peer_interfaces[index]-&gt;ipv4_address = (struct sockaddr_storage*) malloc(sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev1">&gt; -                peer_interfaces[index]-&gt;ipv4_endpoint_addr = endpoint_addr;
</span><br>
<span class="quotelev1">&gt; -                memcpy(peer_interfaces[index]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; -                        &amp;endpoint_addr_ss, sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev1">&gt; -                break;
</span><br>
<span class="quotelev1">&gt; -            case AF_INET6:
</span><br>
<span class="quotelev1">&gt; -                peer_interfaces[index]-&gt;ipv6_address = (struct sockaddr_storage*) malloc(sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev1">&gt; -                peer_interfaces[index]-&gt;ipv6_endpoint_addr = endpoint_addr;
</span><br>
<span class="quotelev1">&gt; -                memcpy(peer_interfaces[index]-&gt;ipv6_address,
</span><br>
<span class="quotelev1">&gt; -                        &amp;endpoint_addr_ss, sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev1">&gt; -                break;
</span><br>
<span class="quotelev1">&gt; -            default:
</span><br>
<span class="quotelev1">&gt; -                opal_output(0, &quot;unknown address family for tcp: %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                        local_addr.ss_family);
</span><br>
<span class="quotelev1">&gt; -                /*
</span><br>
<span class="quotelev1">&gt; -                 * return OMPI_UNREACH or some error, as this is not
</span><br>
<span class="quotelev1">&gt; -                 * good
</span><br>
<span class="quotelev1">&gt; -                 */
</span><br>
<span class="quotelev1">&gt; +        case AF_INET:
</span><br>
<span class="quotelev1">&gt; +            peer_interfaces[index]-&gt;ipv4_address = (struct sockaddr_storage*) malloc(sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev1">&gt; +            peer_interfaces[index]-&gt;ipv4_endpoint_addr = endpoint_addr;
</span><br>
<span class="quotelev1">&gt; +            memcpy(peer_interfaces[index]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; +                   &amp;endpoint_addr_ss, sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +        case AF_INET6:
</span><br>
<span class="quotelev1">&gt; +            peer_interfaces[index]-&gt;ipv6_address = (struct sockaddr_storage*) malloc(sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev1">&gt; +            peer_interfaces[index]-&gt;ipv6_endpoint_addr = endpoint_addr;
</span><br>
<span class="quotelev1">&gt; +            memcpy(peer_interfaces[index]-&gt;ipv6_address,
</span><br>
<span class="quotelev1">&gt; +                   &amp;endpoint_addr_ss, sizeof(endpoint_addr_ss));
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +        default:
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;unknown address family for tcp: %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                        endpoint_addr_ss.ss_family);
</span><br>
<span class="quotelev1">&gt; +            /*
</span><br>
<span class="quotelev1">&gt; +             * return OMPI_UNREACH or some error, as this is not
</span><br>
<span class="quotelev1">&gt; +             * good
</span><br>
<span class="quotelev1">&gt; +             */
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -451,17 +477,17 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      weights = (enum mca_btl_tcp_connection_quality**) malloc(perm_size
</span><br>
<span class="quotelev1">&gt; -            * sizeof(enum mca_btl_tcp_connection_quality*));
</span><br>
<span class="quotelev1">&gt; +                                                             * sizeof(enum mca_btl_tcp_connection_quality*));
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;      best_addr = (mca_btl_tcp_addr_t ***) malloc(perm_size
</span><br>
<span class="quotelev1">&gt; -            * sizeof(mca_btl_tcp_addr_t **));
</span><br>
<span class="quotelev1">&gt; +                                                * sizeof(mca_btl_tcp_addr_t **));
</span><br>
<span class="quotelev1">&gt;      for(i = 0; i &lt; perm_size; ++i) {
</span><br>
<span class="quotelev1">&gt;          weights[i] = (enum mca_btl_tcp_connection_quality*) malloc(perm_size *
</span><br>
<span class="quotelev1">&gt; -                sizeof(enum mca_btl_tcp_connection_quality));
</span><br>
<span class="quotelev1">&gt; +                                                                   sizeof(enum mca_btl_tcp_connection_quality));
</span><br>
<span class="quotelev1">&gt;          memset(weights[i], 0, perm_size * sizeof(enum mca_btl_tcp_connection_quality));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          best_addr[i] = (mca_btl_tcp_addr_t **) malloc(perm_size *
</span><br>
<span class="quotelev1">&gt; -                sizeof(mca_btl_tcp_addr_t *));
</span><br>
<span class="quotelev1">&gt; +                                                      sizeof(mca_btl_tcp_addr_t *));
</span><br>
<span class="quotelev1">&gt;          memset(best_addr[i], 0, perm_size * sizeof(mca_btl_tcp_addr_t *));
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; @@ -478,11 +504,11 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  /*  check for RFC1918 */
</span><br>
<span class="quotelev1">&gt;                  if(opal_net_addr_isipv4public((struct sockaddr*) local_interfaces[i]-&gt;ipv4_address)
</span><br>
<span class="quotelev1">&gt; -                        &amp;&amp; opal_net_addr_isipv4public((struct sockaddr*)
</span><br>
<span class="quotelev1">&gt; -                            peer_interfaces[j]-&gt;ipv4_address)) {
</span><br>
<span class="quotelev1">&gt; +                   &amp;&amp; opal_net_addr_isipv4public((struct sockaddr*)
</span><br>
<span class="quotelev1">&gt; +                                                 peer_interfaces[j]-&gt;ipv4_address)) {
</span><br>
<span class="quotelev1">&gt;                      if(opal_net_samenetwork((struct sockaddr*) local_interfaces[i]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; -                                (struct sockaddr*) peer_interfaces[j]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; -                                local_interfaces[i]-&gt;ipv4_netmask)) {
</span><br>
<span class="quotelev1">&gt; +                                            (struct sockaddr*) peer_interfaces[j]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; +                                            local_interfaces[i]-&gt;ipv4_netmask)) {
</span><br>
<span class="quotelev1">&gt;                          weights[i][j] = CQ_PUBLIC_SAME_NETWORK;
</span><br>
<span class="quotelev1">&gt;                      } else {
</span><br>
<span class="quotelev1">&gt;                          weights[i][j] = CQ_PUBLIC_DIFFERENT_NETWORK;
</span><br>
<span class="quotelev1">&gt; @@ -491,8 +517,8 @@
</span><br>
<span class="quotelev1">&gt;                      continue;
</span><br>
<span class="quotelev1">&gt;                  } else {
</span><br>
<span class="quotelev1">&gt;                      if(opal_net_samenetwork((struct sockaddr*) local_interfaces[i]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; -                                (struct sockaddr*) peer_interfaces[j]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; -                                local_interfaces[i]-&gt;ipv4_netmask)) {
</span><br>
<span class="quotelev1">&gt; +                                            (struct sockaddr*) peer_interfaces[j]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; +                                            local_interfaces[i]-&gt;ipv4_netmask)) {
</span><br>
<span class="quotelev1">&gt;                          weights[i][j] = CQ_PRIVATE_SAME_NETWORK;
</span><br>
<span class="quotelev1">&gt;                      } else {
</span><br>
<span class="quotelev1">&gt;                          weights[i][j] = CQ_PRIVATE_DIFFERENT_NETWORK;
</span><br>
<span class="quotelev1">&gt; @@ -507,8 +533,8 @@
</span><br>
<span class="quotelev1">&gt;              if(NULL != local_interfaces[i]-&gt;ipv6_address &amp;&amp;
</span><br>
<span class="quotelev1">&gt;                 NULL != peer_interfaces[j]-&gt;ipv6_address) {
</span><br>
<span class="quotelev1">&gt;                  if(opal_net_samenetwork((struct sockaddr*) local_interfaces[i]-&gt;ipv6_address,
</span><br>
<span class="quotelev1">&gt; -                            (struct sockaddr*) peer_interfaces[j]-&gt;ipv6_address,
</span><br>
<span class="quotelev1">&gt; -                            local_interfaces[i]-&gt;ipv6_netmask)) {
</span><br>
<span class="quotelev1">&gt; +                                        (struct sockaddr*) peer_interfaces[j]-&gt;ipv6_address,
</span><br>
<span class="quotelev1">&gt; +                                        local_interfaces[i]-&gt;ipv6_netmask)) {
</span><br>
<span class="quotelev1">&gt;                      weights[i][j] = CQ_PUBLIC_SAME_NETWORK;
</span><br>
<span class="quotelev1">&gt;                  } else {
</span><br>
<span class="quotelev1">&gt;                      weights[i][j] = CQ_PUBLIC_DIFFERENT_NETWORK;
</span><br>
<span class="quotelev1">&gt; @@ -539,9 +565,9 @@
</span><br>
<span class="quotelev1">&gt;      rc = OMPI_ERR_UNREACH;
</span><br>
<span class="quotelev1">&gt;      for(i = 0; i &lt; perm_size; ++i) {
</span><br>
<span class="quotelev1">&gt;          if(best_assignment[i] &gt; num_peer_interfaces
</span><br>
<span class="quotelev1">&gt; -                || weights[i][best_assignment[i]] == CQ_NO_CONNECTION
</span><br>
<span class="quotelev1">&gt; -                || peer_interfaces[best_assignment[i]]-&gt;inuse
</span><br>
<span class="quotelev1">&gt; -                || NULL == peer_interfaces[best_assignment[i]]) {
</span><br>
<span class="quotelev1">&gt; +           || weights[i][best_assignment[i]] == CQ_NO_CONNECTION
</span><br>
<span class="quotelev1">&gt; +           || peer_interfaces[best_assignment[i]]-&gt;inuse
</span><br>
<span class="quotelev1">&gt; +           || NULL == peer_interfaces[best_assignment[i]]) {
</span><br>
<span class="quotelev1">&gt;              continue;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          peer_interfaces[best_assignment[i]]-&gt;inuse++;
</span><br>
<span class="quotelev1">&gt; @@ -565,6 +591,9 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          free(peer_interfaces[i]);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    free(peer_interfaces);
</span><br>
<span class="quotelev1">&gt; +    peer_interfaces = NULL;
</span><br>
<span class="quotelev1">&gt; +    max_peer_interfaces = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      for(i = 0; i &lt; num_local_interfaces; ++i) {
</span><br>
<span class="quotelev1">&gt;          if(NULL != local_interfaces[i]-&gt;ipv4_address) {
</span><br>
<span class="quotelev1">&gt; @@ -575,6 +604,9 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          free(local_interfaces[i]);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    free(local_interfaces);
</span><br>
<span class="quotelev1">&gt; +    local_interfaces = NULL;
</span><br>
<span class="quotelev1">&gt; +    max_local_interfaces = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      free(weights);
</span><br>
<span class="quotelev1">&gt;      free(best_addr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_proc.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_proc.h       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_proc.h       2010-02-19 02:10:32 EST (Fri, 19 Feb 2010)
</span><br>
<span class="quotelev1">&gt; @@ -41,9 +41,6 @@
</span><br>
<span class="quotelev1">&gt;      ompi_proc_t *proc_ompi;                 
</span><br>
<span class="quotelev1">&gt;      /**&lt; pointer to corresponding ompi_proc_t */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    orte_process_name_t proc_name;          
</span><br>
<span class="quotelev1">&gt; -    /**&lt; globally unique identifier for the process */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      struct mca_btl_tcp_addr_t* proc_addrs;
</span><br>
<span class="quotelev1">&gt;      /**&lt; array of addresses exported by peer */
</span><br>
<span class="quotelev1">&gt; 
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
<li><strong>Previous message:</strong> <a href="7460.php">Ralph Castain: "[OMPI devel] Modex-less launch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
<li><strong>Reply:</strong> <a href="7462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
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
