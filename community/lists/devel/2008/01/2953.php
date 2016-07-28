<?
$subject_val = "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 09:58:58 2008" -->
<!-- isoreceived="20080110145858" -->
<!-- sent="Thu, 10 Jan 2008 09:58:35 -0500" -->
<!-- isosent="20080110145835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement" -->
<!-- id="528E052C-570D-4DC9-8B89-B310D128D933_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080109233754.GB30920_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 09:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2954.php">Andreas Knüpfer: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Previous message:</strong> <a href="2952.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>In reply to:</strong> <a href="2950.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2956.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Reply:</strong> <a href="2956.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, I should point out that the modex CPC string list stuff is  
<br>
currently somewhat wasteful in the presence of multiple ports on a  
<br>
host.  This will definitely be bad at scale.  Specifically, we'll send  
<br>
around a CPC string in the openib modex for *each* port.  This may be  
<br>
repetitive (and wasteful at scale), especially if you have more than  
<br>
one port/NIC of the same type in each host.  This can cause the modex  
<br>
size to increase quite a bit.
<br>
<p>We wanted to get this new scheme *working* and then optimize the modex  
<br>
message string usage a bit.  Options for optimization include:
<br>
<p>1. list the cpc names only once in the modex message, each followed by  
<br>
an indexed list of which ports use them
<br>
<p>2. use a simple hashing function to eliminate the string names in the  
<br>
modex altogether -- and for extra bonus points, combine with #1 to  
<br>
only list the cpc's once
<br>
<p>3. ...?
<br>
<p>I'd say that this optimization is pretty important for v1.3 (but it  
<br>
shouldn't be hard to do).
<br>
<p><p>On Jan 9, 2008, at 6:37 PM, Jon Mason wrote:
<br>
<p><span class="quotelev1">&gt; The new cpc selection framework is now in place.  The patch below  
</span><br>
<span class="quotelev1">&gt; allows
</span><br>
<span class="quotelev1">&gt; for dynamic selection of cpc methods based on what is available.  It
</span><br>
<span class="quotelev1">&gt; also allows for inclusion/exclusions of methods.  It even futher  
</span><br>
<span class="quotelev1">&gt; allows
</span><br>
<span class="quotelev1">&gt; for modifying the priorities of certain cpc methods to better  
</span><br>
<span class="quotelev1">&gt; determine
</span><br>
<span class="quotelev1">&gt; the optimal cpc method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This patch also contains XRC compile time disablement (per Jeff's
</span><br>
<span class="quotelev1">&gt; patch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At a high level, the cpc selections works by walking through each cpc
</span><br>
<span class="quotelev1">&gt; and allowing it to test to see if it is permissable to run on this
</span><br>
<span class="quotelev1">&gt; mpirun.  It returns a priority if it is permissable or a -1 if not.   
</span><br>
<span class="quotelev1">&gt; All
</span><br>
<span class="quotelev1">&gt; of the cpc names and priorities are rolled into a string.  This string
</span><br>
<span class="quotelev1">&gt; is then encapsulated in a message and passed around all the ompi
</span><br>
<span class="quotelev1">&gt; processes.  Once received and unpacked, the list received is compared
</span><br>
<span class="quotelev1">&gt; to a local copy of the list.  The connection method is chosen by
</span><br>
<span class="quotelev1">&gt; comparing the lists passed around to all nodes via modex with the list
</span><br>
<span class="quotelev1">&gt; generated locally.  Any non-negative number is a potentially valid
</span><br>
<span class="quotelev1">&gt; connection method.  The method below of determining the optimal
</span><br>
<span class="quotelev1">&gt; connection method is to take the cross-section of the two lists.  The
</span><br>
<span class="quotelev1">&gt; highest single value (and the other side being non-negative) is  
</span><br>
<span class="quotelev1">&gt; selected
</span><br>
<span class="quotelev1">&gt; as the cpc method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test it out.  The tree can be found at
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/openib-cpc/">https://svn.open-mpi.org/svn/ompi/tmp-public/openib-cpc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This patch has been tested with IB and iWARP adapters on a 2 node  
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; (with it correctly choosing to use oob and happily ignoring iWARP
</span><br>
<span class="quotelev1">&gt; adapters).  It needs XRC testing and testing of larger node systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks to Jeff for all of his help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib_component.c	(revision 17101)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -155,30 +155,70 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; static int btl_openib_modex_send(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int         rc, i;
</span><br>
<span class="quotelev1">&gt; -    size_t      size;
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_port_info_t *ports = NULL;
</span><br>
<span class="quotelev1">&gt; +    int    rc, i;
</span><br>
<span class="quotelev1">&gt; +    char *message, *offset;
</span><br>
<span class="quotelev1">&gt; +    uint32_t size, size_save;
</span><br>
<span class="quotelev1">&gt; +    size_t msg_size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    size = mca_btl_openib_component.ib_num_btls * sizeof  
</span><br>
<span class="quotelev1">&gt; (mca_btl_openib_port_info_t);
</span><br>
<span class="quotelev1">&gt; -    if (size != 0) {
</span><br>
<span class="quotelev1">&gt; -        ports = (mca_btl_openib_port_info_t *)malloc (size);
</span><br>
<span class="quotelev1">&gt; -        if (NULL == ports) {
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__,  
</span><br>
<span class="quotelev1">&gt; __LINE__));
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +    /* The message is packed into 2 parts:
</span><br>
<span class="quotelev1">&gt; +     * 1. a uint32_t indicating the number of ports in the message
</span><br>
<span class="quotelev1">&gt; +     * 2. for each port:
</span><br>
<span class="quotelev1">&gt; +     *    a. the port data
</span><br>
<span class="quotelev1">&gt; +     *    b. a uint32_t indicating a string length
</span><br>
<span class="quotelev1">&gt; +     *    c. the string cpc list for that port, length specified by  
</span><br>
<span class="quotelev1">&gt; 2b.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    msg_size = sizeof(uint32_t) +  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.ib_num_btls * (sizeof(uint32_t) +  
</span><br>
<span class="quotelev1">&gt; sizeof(mca_btl_openib_port_info_t));
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt; mca_btl_openib_component.ib_num_btls; i++) {
</span><br>
<span class="quotelev1">&gt; +        msg_size += strlen(mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev2">&gt; &gt;port_info.cpclist);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        for (i = 0; i &lt; mca_btl_openib_component.ib_num_btls; i++) {
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_module_t *btl =  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.openib_btls[i];
</span><br>
<span class="quotelev1">&gt; -            ports[i] = btl-&gt;port_info;
</span><br>
<span class="quotelev1">&gt; +    if (0 == msg_size) {
</span><br>
<span class="quotelev1">&gt; +        return 0;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    message = malloc(msg_size);
</span><br>
<span class="quotelev1">&gt; +    if (NULL == message) {
</span><br>
<span class="quotelev1">&gt; +        BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__, __LINE__));
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Pack the number of ports */
</span><br>
<span class="quotelev1">&gt; +    size = mca_btl_openib_component.ib_num_btls;
</span><br>
<span class="quotelev1">&gt; #if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt; -            MCA_BTL_OPENIB_PORT_INFO_HTON(ports[i]);
</span><br>
<span class="quotelev1">&gt; +    size = htonl(size);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +    memcpy(message, &amp;size, sizeof(size));
</span><br>
<span class="quotelev1">&gt; +    offset = message + sizeof(size);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Pack each of the ports */
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt; mca_btl_openib_component.ib_num_btls; i++) {
</span><br>
<span class="quotelev1">&gt; +        /* Pack the port struct */
</span><br>
<span class="quotelev1">&gt; +        memcpy(offset, &amp;mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev2">&gt; &gt;port_info, sizeof(mca_btl_openib_port_info_t));
</span><br>
<span class="quotelev1">&gt; +#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt; +        MCA_BTL_OPENIB_PORT_INFO_HTON(*(mca_btl_openib_port_info_t  
</span><br>
<span class="quotelev1">&gt; *)offset);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +        offset += sizeof(mca_btl_openib_port_info_t);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* Pack the strlen of the cpclist */
</span><br>
<span class="quotelev1">&gt; +        size = size_save =
</span><br>
<span class="quotelev1">&gt; +            strlen(mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev2">&gt; &gt;port_info.cpclist);
</span><br>
<span class="quotelev1">&gt; +#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt; +        size = htonl(size);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +        memcpy(offset, &amp;size, sizeof(size));
</span><br>
<span class="quotelev1">&gt; +        offset += sizeof(size);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* Pack the string */
</span><br>
<span class="quotelev1">&gt; +        memcpy(offset,
</span><br>
<span class="quotelev1">&gt; +               mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev2">&gt; &gt;port_info.cpclist,
</span><br>
<span class="quotelev1">&gt; +               size_save);
</span><br>
<span class="quotelev1">&gt; +        offset += size_save;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    rc = ompi_modex_send  
</span><br>
<span class="quotelev1">&gt; (&amp;mca_btl_openib_component.super.btl_version, ports, size);
</span><br>
<span class="quotelev1">&gt; -    if (NULL != ports) {
</span><br>
<span class="quotelev1">&gt; -        free (ports);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    rc = ompi_modex_send(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; +                         message, msg_size);
</span><br>
<span class="quotelev1">&gt; +    free(message);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -357,6 +397,8 @@
</span><br>
<span class="quotelev1">&gt;             lid &lt; ib_port_attr-&gt;lid + lmc; lid++){
</span><br>
<span class="quotelev1">&gt;         for(i = 0; i &lt; mca_btl_openib_component.btls_per_lid; i++){
</span><br>
<span class="quotelev1">&gt;             char param[40];
</span><br>
<span class="quotelev1">&gt; +            int rc;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;             openib_btl = malloc(sizeof(mca_btl_openib_module_t));
</span><br>
<span class="quotelev1">&gt;             if(NULL == openib_btl) {
</span><br>
<span class="quotelev1">&gt;                 BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__,  
</span><br>
<span class="quotelev1">&gt; __LINE__));
</span><br>
<span class="quotelev1">&gt; @@ -383,6 +425,11 @@
</span><br>
<span class="quotelev1">&gt;                 openib_btl-&gt;port_info.lid = lid;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; +            rc = ompi_btl_openib_connect_base_query(&amp;openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;port_info.cpclist, hca);
</span><br>
<span class="quotelev1">&gt; +            if (rc != OMPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; +                continue;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;             openib_btl-&gt;ib_reg[MCA_BTL_TAG_BTL].cbfunc =  
</span><br>
<span class="quotelev1">&gt; btl_openib_control;
</span><br>
<span class="quotelev1">&gt;             openib_btl-&gt;ib_reg[MCA_BTL_TAG_BTL].cbdata = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -1295,10 +1342,6 @@
</span><br>
<span class="quotelev1">&gt;             return NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* Setup connect module */
</span><br>
<span class="quotelev1">&gt; -    if (OMPI_SUCCESS != ompi_btl_openib_connect_base_select()) {
</span><br>
<span class="quotelev1">&gt; -        return NULL;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt;     btl_openib_modex_send();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *num_btl_modules = mca_btl_openib_component.ib_num_btls;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib_proc.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib_proc.c	(revision 17101)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib_proc.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -100,17 +100,19 @@
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_proc_t* mca_btl_openib_proc_create(ompi_proc_t*  
</span><br>
<span class="quotelev1">&gt; ompi_proc)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_proc_t* module_proc = NULL;
</span><br>
<span class="quotelev1">&gt; -    size_t size;
</span><br>
<span class="quotelev1">&gt; +    size_t msg_size;
</span><br>
<span class="quotelev1">&gt; +    uint32_t size;
</span><br>
<span class="quotelev1">&gt; #if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt;     size_t i;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt; +    void *message;
</span><br>
<span class="quotelev1">&gt; +    char *offset;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Check if we have already created a IB proc
</span><br>
<span class="quotelev1">&gt;      * structure for this ompi process */
</span><br>
<span class="quotelev1">&gt;     module_proc = mca_btl_openib_proc_lookup_ompi(ompi_proc);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if(module_proc != NULL) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL != module_proc) {
</span><br>
<span class="quotelev1">&gt;         /* Gotcha! */
</span><br>
<span class="quotelev1">&gt;         return module_proc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; @@ -126,48 +128,67 @@
</span><br>
<span class="quotelev1">&gt;      * size) to represent the proc */
</span><br>
<span class="quotelev1">&gt;     module_proc-&gt;proc_guid = ompi_proc-&gt;proc_name;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     /* query for the peer address info */
</span><br>
<span class="quotelev1">&gt; -    rc = ompi_modex_recv(
</span><br>
<span class="quotelev1">&gt; -                                  
</span><br>
<span class="quotelev1">&gt; &amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; -                                 ompi_proc,
</span><br>
<span class="quotelev1">&gt; -                                 (void*)&amp;module_proc-&gt;proc_ports,
</span><br>
<span class="quotelev1">&gt; -                                 &amp;size
</span><br>
<span class="quotelev1">&gt; -                                 );
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if(OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; +    rc = ompi_modex_recv(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; +                         ompi_proc,
</span><br>
<span class="quotelev1">&gt; +                         &amp;message,
</span><br>
<span class="quotelev1">&gt; +                         &amp;msg_size);
</span><br>
<span class="quotelev1">&gt; +    if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;         BTL_ERROR((&quot;[%s:%d] ompi_modex_recv failed for peer %s&quot;,
</span><br>
<span class="quotelev1">&gt;                    __FILE__, __LINE__,
</span><br>
<span class="quotelev1">&gt;                    ORTE_NAME_PRINT(&amp;ompi_proc-&gt;proc_name)));
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(module_proc);
</span><br>
<span class="quotelev1">&gt;         return NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if((size % sizeof(mca_btl_openib_port_info_t)) != 0) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;[%s:%d] invalid module address for peer %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                   __FILE__, __LINE__,
</span><br>
<span class="quotelev1">&gt; -                   ORTE_NAME_PRINT(&amp;ompi_proc-&gt;proc_name)));
</span><br>
<span class="quotelev1">&gt; -        OBJ_RELEASE(module_proc);
</span><br>
<span class="quotelev1">&gt; +    if (0 == msg_size) {
</span><br>
<span class="quotelev1">&gt;         return NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    module_proc-&gt;proc_port_count = size/ 
</span><br>
<span class="quotelev1">&gt; sizeof(mca_btl_openib_port_info_t);
</span><br>
<span class="quotelev1">&gt; +    /* Message was packed in btl_openib_component.c; the format is
</span><br>
<span class="quotelev1">&gt; +       listed in a comment in that file */
</span><br>
<span class="quotelev1">&gt; +    /* Unpack the number of ports in the message */
</span><br>
<span class="quotelev1">&gt; +    offset = message;
</span><br>
<span class="quotelev1">&gt; +    memcpy(&amp;(module_proc-&gt;proc_port_count), offset,  
</span><br>
<span class="quotelev1">&gt; sizeof(uint32_t));
</span><br>
<span class="quotelev1">&gt; +#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt; +    module_proc-&gt;proc_port_count = ntohl(module_proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_port_count);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +    module_proc-&gt;proc_ports = (mca_btl_openib_port_info_t  
</span><br>
<span class="quotelev1">&gt; *)malloc(sizeof(mca_btl_openib_port_info_t) * module_proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_port_count);
</span><br>
<span class="quotelev1">&gt; +    offset += sizeof(uint32_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    /* Loop over unpacking all the ports */
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt; module_proc-&gt;proc_port_count; i++) {
</span><br>
<span class="quotelev1">&gt; +        /* Unpack the port */
</span><br>
<span class="quotelev1">&gt; +        memcpy(&amp;module_proc-&gt;proc_ports[i], offset,
</span><br>
<span class="quotelev1">&gt; +               sizeof(mca_btl_openib_port_info_t));
</span><br>
<span class="quotelev1">&gt; +#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt; +        MCA_BTL_OPENIB_PORT_INFO_NTOH(module_proc-&gt;proc_ports[i]);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +        offset += sizeof(mca_btl_openib_port_info_t);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* Unpack the string length */
</span><br>
<span class="quotelev1">&gt; +        memcpy(&amp;size, offset, sizeof(size));
</span><br>
<span class="quotelev1">&gt; +#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt; +        size = ntohl(size);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +        offset += sizeof(size);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* Unpack the string */
</span><br>
<span class="quotelev1">&gt; +        module_proc-&gt;proc_ports[i].cpclist = malloc(size + 1);
</span><br>
<span class="quotelev1">&gt; +        if (NULL == module_proc-&gt;proc_ports[i].cpclist) {
</span><br>
<span class="quotelev1">&gt; +            /* JMS some error */
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        memcpy(module_proc-&gt;proc_ports[i].cpclist, offset, size);
</span><br>
<span class="quotelev1">&gt; +        module_proc-&gt;proc_ports[i].cpclist[size] = '\0';
</span><br>
<span class="quotelev1">&gt; +        offset += size;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     if (0 == module_proc-&gt;proc_port_count) {
</span><br>
<span class="quotelev1">&gt;         module_proc-&gt;proc_endpoints = NULL;
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         module_proc-&gt;proc_endpoints = (mca_btl_base_endpoint_t**)
</span><br>
<span class="quotelev1">&gt;             malloc(module_proc-&gt;proc_port_count *  
</span><br>
<span class="quotelev1">&gt; sizeof(mca_btl_base_endpoint_t*));
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt; -    for(i=0; i &lt; module_proc-&gt;proc_port_count; ++i) {
</span><br>
<span class="quotelev1">&gt; -        MCA_BTL_OPENIB_PORT_INFO_NTOH(module_proc-&gt;proc_ports[i]);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if(NULL == module_proc-&gt;proc_endpoints) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL == module_proc-&gt;proc_endpoints) {
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(module_proc);
</span><br>
<span class="quotelev1">&gt;         return NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/connect.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/connect.h	(revision 17102)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/connect.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -62,16 +62,23 @@
</span><br>
<span class="quotelev1">&gt;  * main openib BTL will start sending out fragments that were queued
</span><br>
<span class="quotelev1">&gt;  * while the connection was establing, etc.).
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; #ifndef BTL_OPENIB_CONNECT_H
</span><br>
<span class="quotelev1">&gt; #define BTL_OPENIB_CONNECT_H
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#define BCF_MAX_NAME 64
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt; + * Must forward declare mca_btl_openib_hca_t; it's defined in
</span><br>
<span class="quotelev1">&gt; + * btl_openib.h, but that file includes this file.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +struct mca_btl_openib_hca_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt;  * Function to register MCA params in the connect functions
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -typedef int (*ompi_btl_openib_connect_base_func_open_t)(void);
</span><br>
<span class="quotelev1">&gt; +typedef void (*ompi_btl_openib_connect_base_func_open_t)(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Function to intialize the connection functions (i.e., it's been
</span><br>
<span class="quotelev1">&gt; @@ -86,12 +93,15 @@
</span><br>
<span class="quotelev1">&gt;     (struct mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt; + * Query the CPC to see if it wants to run on a specific HCA
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +typedef int (*ompi_btl_openib_connect_base_func_query_t)(struct  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_hca_t *hca);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt;  * Function to finalize the connection functions
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; typedef int (*ompi_btl_openib_connect_base_func_finalize_t)(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define BCF_MAX_NAME 64
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; struct ompi_btl_openib_connect_base_funcs_t {
</span><br>
<span class="quotelev1">&gt;     /** Name of this set of connection functions */
</span><br>
<span class="quotelev1">&gt;     char bcf_name[BCF_MAX_NAME];
</span><br>
<span class="quotelev1">&gt; @@ -105,8 +115,11 @@
</span><br>
<span class="quotelev1">&gt;     /** Connect function */
</span><br>
<span class="quotelev1">&gt;     ompi_btl_openib_connect_base_func_start_connect_t  
</span><br>
<span class="quotelev1">&gt; bcf_start_connect;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    /** Query function */
</span><br>
<span class="quotelev1">&gt; +    ompi_btl_openib_connect_base_func_query_t bcf_query;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /** Finalize function */
</span><br>
<span class="quotelev1">&gt; -    ompi_btl_openib_connect_base_func_open_t bcf_finalize;
</span><br>
<span class="quotelev1">&gt; +    ompi_btl_openib_connect_base_func_finalize_t bcf_finalize;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; typedef struct ompi_btl_openib_connect_base_funcs_t  
</span><br>
<span class="quotelev1">&gt; ompi_btl_openib_connect_base_funcs_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/base.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/base.h	(revision 17102)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/base.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -28,7 +28,8 @@
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Select function
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -int ompi_btl_openib_connect_base_select(void);
</span><br>
<span class="quotelev1">&gt; +int ompi_btl_openib_connect_base_select(char*, char*);
</span><br>
<span class="quotelev1">&gt; +int ompi_btl_openib_connect_base_query(char**,  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_hca_t*);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; END_C_DECLS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_base.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(revision  
</span><br>
<span class="quotelev1">&gt; 17102)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(working  
</span><br>
<span class="quotelev1">&gt; copy)
</span><br>
<span class="quotelev1">&gt; @@ -33,7 +33,9 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; static ompi_btl_openib_connect_base_funcs_t *all[] = {
</span><br>
<span class="quotelev1">&gt;     &amp;ompi_btl_openib_connect_oob,
</span><br>
<span class="quotelev1">&gt; +#if HAVE_XRC
</span><br>
<span class="quotelev1">&gt;     &amp;ompi_btl_openib_connect_xoob,
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;     &amp;ompi_btl_openib_connect_rdma_cm,
</span><br>
<span class="quotelev1">&gt;     &amp;ompi_btl_openib_connect_ibcm,
</span><br>
<span class="quotelev1">&gt;     NULL
</span><br>
<span class="quotelev1">&gt; @@ -42,7 +44,8 @@
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * MCA parameter value
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -static char *param = NULL;
</span><br>
<span class="quotelev1">&gt; +static char *cpc_include = NULL;
</span><br>
<span class="quotelev1">&gt; +static char *cpc_exclude = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Register MCA parameters
</span><br>
<span class="quotelev1">&gt; @@ -60,38 +63,26 @@
</span><br>
<span class="quotelev1">&gt;     a = opal_argv_join(temp, ',');
</span><br>
<span class="quotelev1">&gt;     opal_argv_free(temp);
</span><br>
<span class="quotelev1">&gt;     asprintf(&amp;b,
</span><br>
<span class="quotelev1">&gt; -             &quot;Method used to make OpenFabrics connections (valid  
</span><br>
<span class="quotelev1">&gt; values: %s)&quot;,
</span><br>
<span class="quotelev1">&gt; +             &quot;Method used to select OpenFabrics connections (valid  
</span><br>
<span class="quotelev1">&gt; values: %s)&quot;,
</span><br>
<span class="quotelev1">&gt;              a);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* For XRC qps we must to use XOOB connection manager */
</span><br>
<span class="quotelev1">&gt; -    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
</span><br>
<span class="quotelev1">&gt; -         
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; -                &quot;connect&quot;,
</span><br>
<span class="quotelev1">&gt; -                b, false, false,
</span><br>
<span class="quotelev1">&gt; -                &quot;xoob&quot;, &amp;param);
</span><br>
<span class="quotelev1">&gt; -        if (0 != strcmp(&quot;xoob&quot;, param)) {
</span><br>
<span class="quotelev1">&gt; -            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                    &quot;XRC with wrong OOB&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                    orte_system_info.nodename,
</span><br>
<span class="quotelev1">&gt; -                    mca_btl_openib_component.num_xrc_qps);
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    } else { /* For all others we should use OOB */
</span><br>
<span class="quotelev1">&gt; -         
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; -                &quot;connect&quot;,
</span><br>
<span class="quotelev1">&gt; -                b, false, false,
</span><br>
<span class="quotelev1">&gt; -                &quot;oob&quot;, &amp;param);
</span><br>
<span class="quotelev1">&gt; -        if (0 != strcmp(&quot;oob&quot;, param)) {
</span><br>
<span class="quotelev1">&gt; -            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                    &quot;SRQ or PP with wrong OOB&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                    orte_system_info.nodename,
</span><br>
<span class="quotelev1">&gt; -                    mca_btl_openib_component.num_srq_qps,
</span><br>
<span class="quotelev1">&gt; -                    mca_btl_openib_component.num_pp_qps);
</span><br>
<span class="quotelev1">&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +     
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; +                &quot;cpc_include&quot;, b, false, false, NULL, &amp;cpc_include);
</span><br>
<span class="quotelev1">&gt; +    free(a);
</span><br>
<span class="quotelev1">&gt; +    free(b);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* Call the open function on all the connect modules */
</span><br>
<span class="quotelev1">&gt; +    asprintf(&amp;b,
</span><br>
<span class="quotelev1">&gt; +             &quot;Method used to exclude OpenFabrics connections (valid  
</span><br>
<span class="quotelev1">&gt; values: %s)&quot;,
</span><br>
<span class="quotelev1">&gt; +             a);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +     
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; +                &quot;cpc_exclude&quot;, b, false, false, NULL, &amp;cpc_exclude);
</span><br>
<span class="quotelev1">&gt; +    free(a);
</span><br>
<span class="quotelev1">&gt; +    free(b);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Call the open function on all the connect modules so that they
</span><br>
<span class="quotelev1">&gt; +     * may setup any MCA params specific to the connection type
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt;     for (i = 0; NULL != all[i]; ++i) {
</span><br>
<span class="quotelev1">&gt;         if (NULL != all[i]-&gt;bcf_open) {
</span><br>
<span class="quotelev1">&gt;             all[i]-&gt;bcf_open();
</span><br>
<span class="quotelev1">&gt; @@ -101,33 +92,134 @@
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * The connection method is chosen by comparing the lists passed  
</span><br>
<span class="quotelev1">&gt; around
</span><br>
<span class="quotelev1">&gt; + * to all nodes via modex with the list generated locally.  Any
</span><br>
<span class="quotelev1">&gt; + * non-negative number is a potentially valid connection method.  The
</span><br>
<span class="quotelev1">&gt; + * method below of determining the optimal connection method is to  
</span><br>
<span class="quotelev1">&gt; take
</span><br>
<span class="quotelev1">&gt; + * the cross-section of the two lists.  The highest single value (and
</span><br>
<span class="quotelev1">&gt; + * the other side being non-negative) is selected as the cpc method.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +int ompi_btl_openib_connect_base_select(char *remotelist, char  
</span><br>
<span class="quotelev1">&gt; *locallist)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int i, j, max = -1;
</span><br>
<span class="quotelev1">&gt; +    char **localist_formatted, **remotelist_formatted;
</span><br>
<span class="quotelev1">&gt; +    char *name;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -int ompi_btl_openib_connect_base_select(void)
</span><br>
<span class="quotelev1">&gt; +    BTL_VERBOSE((&quot;remotelist = %s locallist = %s\n&quot;, remotelist,  
</span><br>
<span class="quotelev1">&gt; locallist));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    localist_formatted = opal_argv_split(locallist, ',');
</span><br>
<span class="quotelev1">&gt; +    remotelist_formatted = opal_argv_split(remotelist, ',');
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; NULL != localist_formatted[i] &amp;&amp; NULL !=  
</span><br>
<span class="quotelev1">&gt; localist_formatted[i+1]; i+=2) {
</span><br>
<span class="quotelev1">&gt; +        for (j = 0; NULL != remotelist_formatted[j] &amp;&amp; NULL !=  
</span><br>
<span class="quotelev1">&gt; remotelist_formatted[j+1]; j+=2) {
</span><br>
<span class="quotelev1">&gt; +            int local_val, remote_val;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            local_val = atoi(localist_formatted[i+1]);
</span><br>
<span class="quotelev1">&gt; +            remote_val = atoi(remotelist_formatted[j+1]);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if (0 == strcmp(localist_formatted[i],  
</span><br>
<span class="quotelev1">&gt; remotelist_formatted[j]) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                (-1 != local_val &amp;&amp; -1 != remote_val)) {
</span><br>
<span class="quotelev1">&gt; +                if (local_val &gt; max) {
</span><br>
<span class="quotelev1">&gt; +                    max = local_val;
</span><br>
<span class="quotelev1">&gt; +                    name = localist_formatted[i];
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                if (remote_val &gt; max) {
</span><br>
<span class="quotelev1">&gt; +                    max = remote_val;
</span><br>
<span class="quotelev1">&gt; +                    name = remotelist_formatted[j];
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (-1 == max) {
</span><br>
<span class="quotelev1">&gt; +        BTL_ERROR((&quot;Failed to find any working connections&quot;));
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; NULL != all[i]; i++) {
</span><br>
<span class="quotelev1">&gt; +        if (0 == strcmp(all[i]-&gt;bcf_name, name)) {
</span><br>
<span class="quotelev1">&gt; +            all[i]-&gt;bcf_init();
</span><br>
<span class="quotelev1">&gt; +            ompi_btl_openib_connect = *(all[i]);
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    BTL_VERBOSE((&quot;%s selected as transport\n&quot;, all[i]-&gt;bcf_name));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    opal_argv_free(localist_formatted);
</span><br>
<span class="quotelev1">&gt; +    opal_argv_free(remotelist_formatted);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline int cpc_specific_query(char ***cpclist,  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_hca_t *hca, int cpc_counter, bool *valid)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int i;
</span><br>
<span class="quotelev1">&gt; +    char *temp;
</span><br>
<span class="quotelev1">&gt; +    int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* Go through all the pseudo-components; if the  
</span><br>
<span class="quotelev1">&gt; btl_openib_connect
</span><br>
<span class="quotelev1">&gt; -       param is empty, then take the first one that returns
</span><br>
<span class="quotelev1">&gt; -       OMPI_SUCCESS from its init function.  If
</span><br>
<span class="quotelev1">&gt; -       btl_openib_connect_param is not empty, find that one and  
</span><br>
<span class="quotelev1">&gt; ensure
</span><br>
<span class="quotelev1">&gt; -       that its init function returns OMPI_SUCCESS. */
</span><br>
<span class="quotelev1">&gt; -    if (NULL != param &amp;&amp; '\0' == param[0]) {
</span><br>
<span class="quotelev1">&gt; -        param = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL == all[cpc_counter]-&gt;bcf_query) {
</span><br>
<span class="quotelev1">&gt; +        return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    rc = all[cpc_counter]-&gt;bcf_query(hca);
</span><br>
<span class="quotelev1">&gt; +    if (rc &gt; 0) {
</span><br>
<span class="quotelev1">&gt; +        *valid = 1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    asprintf(&amp;temp, &quot;%s,%d&quot;, all[cpc_counter]-&gt;bcf_name, rc);
</span><br>
<span class="quotelev1">&gt; +    opal_argv_append_nosize(cpclist, temp);
</span><br>
<span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +int ompi_btl_openib_connect_base_query(char **cpclist,  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_hca_t *hca)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int i, rc;
</span><br>
<span class="quotelev1">&gt; +    bool valid = 0;
</span><br>
<span class="quotelev1">&gt; +    char **cpclist_include, **cpclist_exclude, **namepriority_list  
</span><br>
<span class="quotelev1">&gt; = NULL;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    cpclist_include = opal_argv_split(cpc_include, ',');
</span><br>
<span class="quotelev1">&gt; +    cpclist_exclude = opal_argv_split(cpc_exclude, ',');
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Go through all the CMs to create a list of usable CPCs */
</span><br>
<span class="quotelev1">&gt;     for (i = 0; NULL != all[i]; ++i) {
</span><br>
<span class="quotelev1">&gt; -        if ((NULL != param &amp;&amp; 0 == strcmp(all[i]-&gt;bcf_name, param))  
</span><br>
<span class="quotelev1">&gt; ||
</span><br>
<span class="quotelev1">&gt; -            (NULL == param)) {
</span><br>
<span class="quotelev1">&gt; -            if (NULL != all[i]-&gt;bcf_init &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -                OMPI_SUCCESS == all[i]-&gt;bcf_init()) {
</span><br>
<span class="quotelev1">&gt; -                ompi_btl_openib_connect = *(all[i]);
</span><br>
<span class="quotelev1">&gt; -                break;
</span><br>
<span class="quotelev1">&gt; +        if (NULL != cpclist_include) {
</span><br>
<span class="quotelev1">&gt; +            int j;
</span><br>
<span class="quotelev1">&gt; +            for (j = 0; NULL != cpclist_include[j]; ++j) {
</span><br>
<span class="quotelev1">&gt; +                if (0 == strcmp(cpclist_include[j], all[i]- 
</span><br>
<span class="quotelev2">&gt; &gt;bcf_name)) {
</span><br>
<span class="quotelev1">&gt; +                    rc = cpc_specific_query(&amp;namepriority_list,  
</span><br>
<span class="quotelev1">&gt; hca, i, &amp;valid);
</span><br>
<span class="quotelev1">&gt; +                    if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev1">&gt; +                        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; +        } else if (NULL != cpclist_exclude) {
</span><br>
<span class="quotelev1">&gt; +            int j;
</span><br>
<span class="quotelev1">&gt; +            for (j = 0; NULL != cpclist_exclude[j]; ++j) {
</span><br>
<span class="quotelev1">&gt; +                if (0 != strcmp(cpclist_exclude[j], all[i]- 
</span><br>
<span class="quotelev2">&gt; &gt;bcf_name)) {
</span><br>
<span class="quotelev1">&gt; +                    rc = cpc_specific_query(&amp;namepriority_list,  
</span><br>
<span class="quotelev1">&gt; hca, i, &amp;valid);
</span><br>
<span class="quotelev1">&gt; +                    if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev1">&gt; +                        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            rc = cpc_specific_query(&amp;namepriority_list, hca, i,  
</span><br>
<span class="quotelev1">&gt; &amp;valid);
</span><br>
<span class="quotelev1">&gt; +            if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev1">&gt; +                return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    if (NULL == all[i]) {
</span><br>
<span class="quotelev1">&gt; -        /* JMS opal_show_help */
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (0 == valid) {
</span><br>
<span class="quotelev1">&gt; +        BTL_ERROR((&quot;Failed to find any valid connections for %s,  
</span><br>
<span class="quotelev1">&gt; not &quot;
</span><br>
<span class="quotelev1">&gt; +                   &quot;using it for this run&quot;,
</span><br>
<span class="quotelev1">&gt; +                   ibv_get_device_name(hca-&gt;ib_dev)));
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    *cpclist = opal_argv_join(namepriority_list, ',');
</span><br>
<span class="quotelev1">&gt; +    opal_argv_free(namepriority_list);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(revision  
</span><br>
<span class="quotelev1">&gt; 17102)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(working  
</span><br>
<span class="quotelev1">&gt; copy)
</span><br>
<span class="quotelev1">&gt; @@ -13,7 +13,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib_endpoint.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int ibcm_open(void);
</span><br>
<span class="quotelev1">&gt; +static void ibcm_open(void);
</span><br>
<span class="quotelev1">&gt; static int ibcm_init(void);
</span><br>
<span class="quotelev1">&gt; static int ibcm_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev1">&gt; static int ibcm_finalize(void);
</span><br>
<span class="quotelev1">&gt; @@ -23,17 +23,16 @@
</span><br>
<span class="quotelev1">&gt;     ibcm_open,
</span><br>
<span class="quotelev1">&gt;     ibcm_init,
</span><br>
<span class="quotelev1">&gt;     ibcm_connect,
</span><br>
<span class="quotelev1">&gt; +    NULL,
</span><br>
<span class="quotelev1">&gt;     ibcm_finalize,
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int ibcm_open(void)
</span><br>
<span class="quotelev1">&gt; +static void ibcm_open(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; -                           &quot;btl_openib_connect_ibcm_foo&quot;,
</span><br>
<span class="quotelev1">&gt; +                           &quot;connect_ibcm_foo&quot;,
</span><br>
<span class="quotelev1">&gt;                            &quot;A dummy help message&quot;, false, false,
</span><br>
<span class="quotelev1">&gt;                            17, NULL);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int ibcm_init(void)
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(revision  
</span><br>
<span class="quotelev1">&gt; 17102)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(working  
</span><br>
<span class="quotelev1">&gt; copy)
</span><br>
<span class="quotelev1">&gt; @@ -39,8 +39,12 @@
</span><br>
<span class="quotelev1">&gt;     ENDPOINT_CONNECT_ACK
</span><br>
<span class="quotelev1">&gt; } connect_message_type_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +static int oob_priority = 50;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static void oob_open(void);
</span><br>
<span class="quotelev1">&gt; static int oob_init(void);
</span><br>
<span class="quotelev1">&gt; static int oob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev1">&gt; +static int oob_query(mca_btl_openib_hca_t *hca);
</span><br>
<span class="quotelev1">&gt; static int oob_finalize(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int reply_start_connect(mca_btl_openib_endpoint_t *endpoint,
</span><br>
<span class="quotelev1">&gt; @@ -67,16 +71,33 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_oob = {
</span><br>
<span class="quotelev1">&gt;     &quot;oob&quot;,
</span><br>
<span class="quotelev1">&gt; -    /* No need for &quot;open */
</span><br>
<span class="quotelev1">&gt; -    NULL,
</span><br>
<span class="quotelev1">&gt; +    /* Open */
</span><br>
<span class="quotelev1">&gt; +    oob_open,
</span><br>
<span class="quotelev1">&gt;     /* Init */
</span><br>
<span class="quotelev1">&gt;     oob_init,
</span><br>
<span class="quotelev1">&gt;     /* Connect */
</span><br>
<span class="quotelev1">&gt;     oob_start_connect,
</span><br>
<span class="quotelev1">&gt; +    /* Query */
</span><br>
<span class="quotelev1">&gt; +    oob_query,
</span><br>
<span class="quotelev1">&gt;     /* Finalize */
</span><br>
<span class="quotelev1">&gt;     oob_finalize,
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/* Open - this functions sets up any oob specific commandline  
</span><br>
<span class="quotelev1">&gt; params */
</span><br>
<span class="quotelev1">&gt; +static void oob_open(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +     
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; +                           &quot;connect_oob_priority&quot;,
</span><br>
<span class="quotelev1">&gt; +                           &quot;The selection method priority for oob&quot;,
</span><br>
<span class="quotelev1">&gt; +                           false, false, oob_priority,  
</span><br>
<span class="quotelev1">&gt; &amp;oob_priority);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (oob_priority &gt; 100) {
</span><br>
<span class="quotelev1">&gt; +        oob_priority = 100;
</span><br>
<span class="quotelev1">&gt; +    } else if (oob_priority &lt; -1) {
</span><br>
<span class="quotelev1">&gt; +        oob_priority = -1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev1">&gt;  * connection requests.
</span><br>
<span class="quotelev1">&gt; @@ -118,6 +139,15 @@
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +static int oob_query(mca_btl_openib_hca_t *hca)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    if (IBV_TRANSPORT_IB == hca-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev1">&gt; +        return oob_priority;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return -1;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Finalize function.  Cleanup RML non-blocking receive.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	 
</span><br>
<span class="quotelev1">&gt; (revision 17102)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	 
</span><br>
<span class="quotelev1">&gt; (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -13,9 +13,10 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib_endpoint.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int rdma_cm_open(void);
</span><br>
<span class="quotelev1">&gt; +static void rdma_cm_open(void);
</span><br>
<span class="quotelev1">&gt; static int rdma_cm_init(void);
</span><br>
<span class="quotelev1">&gt; static int rdma_cm_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev1">&gt; +static int rdma_cm_query(mca_btl_openib_hca_t *hca);
</span><br>
<span class="quotelev1">&gt; static int rdma_cm_finalize(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_rdma_cm  
</span><br>
<span class="quotelev1">&gt; = {
</span><br>
<span class="quotelev1">&gt; @@ -23,17 +24,17 @@
</span><br>
<span class="quotelev1">&gt;     rdma_cm_open,
</span><br>
<span class="quotelev1">&gt;     rdma_cm_init,
</span><br>
<span class="quotelev1">&gt;     rdma_cm_connect,
</span><br>
<span class="quotelev1">&gt; +    rdma_cm_query,
</span><br>
<span class="quotelev1">&gt;     rdma_cm_finalize,
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int rdma_cm_open(void)
</span><br>
<span class="quotelev1">&gt; +/* Open - this functions sets up any rdma_cm specific commandline  
</span><br>
<span class="quotelev1">&gt; params */
</span><br>
<span class="quotelev1">&gt; +static void rdma_cm_open(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; -                           &quot;btl_openib_connect_rdma_cm_foo&quot;,
</span><br>
<span class="quotelev1">&gt; +                           &quot;connect_rdma_cm_foo&quot;,
</span><br>
<span class="quotelev1">&gt;                            &quot;A dummy help message&quot;, false, false,
</span><br>
<span class="quotelev1">&gt;                            17, NULL);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int rdma_cm_init(void)
</span><br>
<span class="quotelev1">&gt; @@ -48,6 +49,16 @@
</span><br>
<span class="quotelev1">&gt;     return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +static int rdma_cm_query(mca_btl_openib_hca_t *hca)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    if (IBV_TRANSPORT_IWARP == hca-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev1">&gt; +	/* Not currently supported */
</span><br>
<span class="quotelev1">&gt; +        return -1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return -1;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; static int rdma_cm_finalize(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;rdma cm finalize\n&quot;);
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(revision  
</span><br>
<span class="quotelev1">&gt; 17102)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(working  
</span><br>
<span class="quotelev1">&gt; copy)
</span><br>
<span class="quotelev1">&gt; @@ -22,8 +22,10 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib_xrc.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +static void xoob_open(void);
</span><br>
<span class="quotelev1">&gt; static int xoob_init(void);
</span><br>
<span class="quotelev1">&gt; static int xoob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev1">&gt; +static int xoob_query(mca_btl_openib_hca_t *hca);
</span><br>
<span class="quotelev1">&gt; static int xoob_finalize(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; @@ -32,18 +34,18 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_xoob = {
</span><br>
<span class="quotelev1">&gt;     &quot;xoob&quot;,
</span><br>
<span class="quotelev1">&gt; -    /* No need for &quot;open */
</span><br>
<span class="quotelev1">&gt; -    NULL,
</span><br>
<span class="quotelev1">&gt; +    /* Open */
</span><br>
<span class="quotelev1">&gt; +    xoob_open,
</span><br>
<span class="quotelev1">&gt;     /* Init */
</span><br>
<span class="quotelev1">&gt;     xoob_init,
</span><br>
<span class="quotelev1">&gt;     /* Connect */
</span><br>
<span class="quotelev1">&gt;     xoob_start_connect,
</span><br>
<span class="quotelev1">&gt; +    /* Query */
</span><br>
<span class="quotelev1">&gt; +    xoob_query,
</span><br>
<span class="quotelev1">&gt;     /* Finalize */
</span><br>
<span class="quotelev1">&gt;     xoob_finalize,
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#if HAVE_XRC
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; typedef enum {
</span><br>
<span class="quotelev1">&gt;     SEND,
</span><br>
<span class="quotelev1">&gt;     RECV
</span><br>
<span class="quotelev1">&gt; @@ -99,6 +101,24 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int init_rem_info(mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev1">&gt; static void free_rem_info(mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int xoob_priority = 60;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* Open - this functions sets up any xoob specific commandline  
</span><br>
<span class="quotelev1">&gt; params */
</span><br>
<span class="quotelev1">&gt; +static void xoob_open(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +     
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; +                           &quot;connect_xoob_priority&quot;,
</span><br>
<span class="quotelev1">&gt; +                           &quot;The selection method priority for xoob&quot;,
</span><br>
<span class="quotelev1">&gt; +                           false, false, xoob_priority,  
</span><br>
<span class="quotelev1">&gt; &amp;xoob_priority);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (xoob_priority &gt; 100) {
</span><br>
<span class="quotelev1">&gt; +        xoob_priority = 100;
</span><br>
<span class="quotelev1">&gt; +    } else if (xoob_priority &lt; -1) {
</span><br>
<span class="quotelev1">&gt; +        xoob_priority = -1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev1">&gt;  * connection requests.
</span><br>
<span class="quotelev1">&gt; @@ -173,6 +193,15 @@
</span><br>
<span class="quotelev1">&gt;     return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +static int xoob_query(btl_openib_hca_t *hca)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
</span><br>
<span class="quotelev1">&gt; +        return xoob_priority;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return -1;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Finalize function.  Cleanup RML non-blocking receive.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; @@ -836,24 +865,3 @@
</span><br>
<span class="quotelev1">&gt;         free(rem_info-&gt;rem_srqs);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -/* In case if the XRC was disabled during compilation we will print  
</span><br>
<span class="quotelev1">&gt; message and return error */
</span><br>
<span class="quotelev1">&gt; -static int xoob_init(void)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    printf(&quot;xoob init\n&quot;);
</span><br>
<span class="quotelev1">&gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static int xoob_start_connect(mca_btl_base_endpoint_t *e)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    printf(&quot;xoob start connect\n&quot;);
</span><br>
<span class="quotelev1">&gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static int xoob_finalize(void)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    printf(&quot;xoob finalize\n&quot;);
</span><br>
<span class="quotelev1">&gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib.c	(revision 17101)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -322,6 +322,15 @@
</span><br>
<span class="quotelev1">&gt;         /* check if the remote proc has a reachable subnet first */
</span><br>
<span class="quotelev1">&gt;         BTL_VERBOSE((&quot;got %d port_infos \n&quot;, ib_proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_port_count));
</span><br>
<span class="quotelev1">&gt;         for(j = 0; j &lt; (int) ib_proc-&gt;proc_port_count; j++){
</span><br>
<span class="quotelev1">&gt; +            int rc;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* Setup connect module */
</span><br>
<span class="quotelev1">&gt; +            rc = ompi_btl_openib_connect_base_select(ib_proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_ports[j].cpclist,
</span><br>
<span class="quotelev1">&gt; +                                                     openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;port_info.cpclist);
</span><br>
<span class="quotelev1">&gt; +            if (rc != OMPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; +                continue;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;             BTL_VERBOSE((&quot;got a subnet %016x\n&quot;,
</span><br>
<span class="quotelev1">&gt;                          ib_proc-&gt;proc_ports[j].subnet_id));
</span><br>
<span class="quotelev1">&gt;             if(ib_proc-&gt;proc_ports[j].subnet_id ==
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/configure.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/configure.m4	(revision 17101)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/configure.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -18,7 +18,15 @@
</span><br>
<span class="quotelev1">&gt; # $HEADER$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +# MCA_btl_openib_POST_CONFIG([should_build])
</span><br>
<span class="quotelev1">&gt; +# ------------------------------------------
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([MCA_btl_openib_POST_CONFIG], [
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test $1 -eq 0 -a &quot;$enable_dist&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +          [AC_MSG_ERROR([BTL openib is disabled but --enable-dist  
</span><br>
<span class="quotelev1">&gt; specifed.  This will result in a bad tarball.  Aborting configure.])])
</span><br>
<span class="quotelev1">&gt; +    AM_CONDITIONAL([MCA_btl_openib_have_xrc], [test $1 -eq 1 -a &quot;x 
</span><br>
<span class="quotelev1">&gt; $btl_openib_have_xrc&quot; = &quot;x1&quot; -a &quot;x$ompi_want_connectx_xrc&quot; = &quot;x1&quot;])
</span><br>
<span class="quotelev1">&gt; +])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; # MCA_btl_openib_CONFIG([action-if-can-compile],
</span><br>
<span class="quotelev1">&gt; #                      [action-if-cant-compile])
</span><br>
<span class="quotelev1">&gt; # ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib.h	(revision 17101)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -46,6 +46,8 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/btl/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define HAVE_XRC (defined(HAVE_IBV_OPEN_XRC_DOMAIN) &amp;&amp; (1 ==  
</span><br>
<span class="quotelev1">&gt; OMPI_ENABLE_CONNECTX_XRC_SUPPORT))
</span><br>
<span class="quotelev1">&gt; @@ -229,6 +231,7 @@
</span><br>
<span class="quotelev1">&gt; #if HAVE_XRC
</span><br>
<span class="quotelev1">&gt;     uint16_t lid; /* used only in xrc */
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; +    char *cpclist;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; typedef struct mca_btl_openib_port_info mca_btl_openib_port_info_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/Makefile.am	(revision 17101)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/Makefile.am	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -53,14 +53,18 @@
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_base.c \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_oob.c \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_oob.h \
</span><br>
<span class="quotelev1">&gt; -    connect/btl_openib_connect_xoob.c \
</span><br>
<span class="quotelev1">&gt; -    connect/btl_openib_connect_xoob.h \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_rdma_cm.c \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_rdma_cm.h \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_ibcm.c \
</span><br>
<span class="quotelev1">&gt;     connect/btl_openib_connect_ibcm.h \
</span><br>
<span class="quotelev1">&gt;     connect/connect.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +if MCA_btl_openib_have_xrc
</span><br>
<span class="quotelev1">&gt; +sources += \
</span><br>
<span class="quotelev1">&gt; +    connect/btl_openib_connect_xoob.c \
</span><br>
<span class="quotelev1">&gt; +    connect/btl_openib_connect_xoob.h
</span><br>
<span class="quotelev1">&gt; +endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; # Make the output library in this directory, and name it either
</span><br>
<span class="quotelev1">&gt; # mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
</span><br>
<span class="quotelev1">&gt; # (for static builds).
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2954.php">Andreas Knüpfer: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Previous message:</strong> <a href="2952.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>In reply to:</strong> <a href="2950.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2956.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Reply:</strong> <a href="2956.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
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
