<?
$subject_val = "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 11:55:40 2008" -->
<!-- isoreceived="20080110165540" -->
<!-- sent="Thu, 10 Jan 2008 10:55:34 -0600" -->
<!-- isosent="20080110165534" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement" -->
<!-- id="20080110165534.GF30920_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="528E052C-570D-4DC9-8B89-B310D128D933_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 11:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2957.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Previous message:</strong> <a href="2955.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>In reply to:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2958.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Reply:</strong> <a href="2958.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 10, 2008 at 09:58:35AM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; BTW, I should point out that the modex CPC string list stuff is  
</span><br>
<span class="quotelev1">&gt; currently somewhat wasteful in the presence of multiple ports on a  
</span><br>
<span class="quotelev1">&gt; host.  This will definitely be bad at scale.  Specifically, we'll send  
</span><br>
<span class="quotelev1">&gt; around a CPC string in the openib modex for *each* port.  This may be  
</span><br>
<span class="quotelev1">&gt; repetitive (and wasteful at scale), especially if you have more than  
</span><br>
<span class="quotelev1">&gt; one port/NIC of the same type in each host.  This can cause the modex  
</span><br>
<span class="quotelev1">&gt; size to increase quite a bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>While the message sent via modex is now longer, the number of messages
<br>
sent is the same.  So I would argue that this is only slight less
<br>
optimal than the current implementation.  
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; We wanted to get this new scheme *working* and then optimize the modex  
</span><br>
<span class="quotelev1">&gt; message string usage a bit.  Options for optimization include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. list the cpc names only once in the modex message, each followed by  
</span><br>
<span class="quotelev1">&gt; an indexed list of which ports use them
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. use a simple hashing function to eliminate the string names in the  
</span><br>
<span class="quotelev1">&gt; modex altogether -- and for extra bonus points, combine with #1 to  
</span><br>
<span class="quotelev1">&gt; only list the cpc's once
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. ...?
</span><br>
<p>4. Profit!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd say that this optimization is pretty important for v1.3 (but it  
</span><br>
<span class="quotelev1">&gt; shouldn't be hard to do).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2008, at 6:37 PM, Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The new cpc selection framework is now in place.  The patch below  
</span><br>
<span class="quotelev2">&gt; &gt; allows
</span><br>
<span class="quotelev2">&gt; &gt; for dynamic selection of cpc methods based on what is available.  It
</span><br>
<span class="quotelev2">&gt; &gt; also allows for inclusion/exclusions of methods.  It even futher  
</span><br>
<span class="quotelev2">&gt; &gt; allows
</span><br>
<span class="quotelev2">&gt; &gt; for modifying the priorities of certain cpc methods to better  
</span><br>
<span class="quotelev2">&gt; &gt; determine
</span><br>
<span class="quotelev2">&gt; &gt; the optimal cpc method.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This patch also contains XRC compile time disablement (per Jeff's
</span><br>
<span class="quotelev2">&gt; &gt; patch).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At a high level, the cpc selections works by walking through each cpc
</span><br>
<span class="quotelev2">&gt; &gt; and allowing it to test to see if it is permissable to run on this
</span><br>
<span class="quotelev2">&gt; &gt; mpirun.  It returns a priority if it is permissable or a -1 if not.   
</span><br>
<span class="quotelev2">&gt; &gt; All
</span><br>
<span class="quotelev2">&gt; &gt; of the cpc names and priorities are rolled into a string.  This string
</span><br>
<span class="quotelev2">&gt; &gt; is then encapsulated in a message and passed around all the ompi
</span><br>
<span class="quotelev2">&gt; &gt; processes.  Once received and unpacked, the list received is compared
</span><br>
<span class="quotelev2">&gt; &gt; to a local copy of the list.  The connection method is chosen by
</span><br>
<span class="quotelev2">&gt; &gt; comparing the lists passed around to all nodes via modex with the list
</span><br>
<span class="quotelev2">&gt; &gt; generated locally.  Any non-negative number is a potentially valid
</span><br>
<span class="quotelev2">&gt; &gt; connection method.  The method below of determining the optimal
</span><br>
<span class="quotelev2">&gt; &gt; connection method is to take the cross-section of the two lists.  The
</span><br>
<span class="quotelev2">&gt; &gt; highest single value (and the other side being non-negative) is  
</span><br>
<span class="quotelev2">&gt; &gt; selected
</span><br>
<span class="quotelev2">&gt; &gt; as the cpc method.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please test it out.  The tree can be found at
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/openib-cpc/">https://svn.open-mpi.org/svn/ompi/tmp-public/openib-cpc/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This patch has been tested with IB and iWARP adapters on a 2 node  
</span><br>
<span class="quotelev2">&gt; &gt; system
</span><br>
<span class="quotelev2">&gt; &gt; (with it correctly choosing to use oob and happily ignoring iWARP
</span><br>
<span class="quotelev2">&gt; &gt; adapters).  It needs XRC testing and testing of larger node systems.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Many thanks to Jeff for all of his help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Jon
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/btl_openib_component.c	(revision 17101)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -155,30 +155,70 @@
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; static int btl_openib_modex_send(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int         rc, i;
</span><br>
<span class="quotelev2">&gt; &gt; -    size_t      size;
</span><br>
<span class="quotelev2">&gt; &gt; -    mca_btl_openib_port_info_t *ports = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +    int    rc, i;
</span><br>
<span class="quotelev2">&gt; &gt; +    char *message, *offset;
</span><br>
<span class="quotelev2">&gt; &gt; +    uint32_t size, size_save;
</span><br>
<span class="quotelev2">&gt; &gt; +    size_t msg_size;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    size = mca_btl_openib_component.ib_num_btls * sizeof  
</span><br>
<span class="quotelev2">&gt; &gt; (mca_btl_openib_port_info_t);
</span><br>
<span class="quotelev2">&gt; &gt; -    if (size != 0) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ports = (mca_btl_openib_port_info_t *)malloc (size);
</span><br>
<span class="quotelev2">&gt; &gt; -        if (NULL == ports) {
</span><br>
<span class="quotelev2">&gt; &gt; -            BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__,  
</span><br>
<span class="quotelev2">&gt; &gt; __LINE__));
</span><br>
<span class="quotelev2">&gt; &gt; -            return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; +    /* The message is packed into 2 parts:
</span><br>
<span class="quotelev2">&gt; &gt; +     * 1. a uint32_t indicating the number of ports in the message
</span><br>
<span class="quotelev2">&gt; &gt; +     * 2. for each port:
</span><br>
<span class="quotelev2">&gt; &gt; +     *    a. the port data
</span><br>
<span class="quotelev2">&gt; &gt; +     *    b. a uint32_t indicating a string length
</span><br>
<span class="quotelev2">&gt; &gt; +     *    c. the string cpc list for that port, length specified by  
</span><br>
<span class="quotelev2">&gt; &gt; 2b.
</span><br>
<span class="quotelev2">&gt; &gt; +     */
</span><br>
<span class="quotelev2">&gt; &gt; +    msg_size = sizeof(uint32_t) +  
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_openib_component.ib_num_btls * (sizeof(uint32_t) +  
</span><br>
<span class="quotelev2">&gt; &gt; sizeof(mca_btl_openib_port_info_t));
</span><br>
<span class="quotelev2">&gt; &gt; +    for (i = 0; i &lt; mca_btl_openib_component.ib_num_btls; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; +        msg_size += strlen(mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;port_info.cpclist);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -        for (i = 0; i &lt; mca_btl_openib_component.ib_num_btls; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; -            mca_btl_openib_module_t *btl =  
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_openib_component.openib_btls[i];
</span><br>
<span class="quotelev2">&gt; &gt; -            ports[i] = btl-&gt;port_info;
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 == msg_size) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return 0;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    message = malloc(msg_size);
</span><br>
<span class="quotelev2">&gt; &gt; +    if (NULL == message) {
</span><br>
<span class="quotelev2">&gt; &gt; +        BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__, __LINE__));
</span><br>
<span class="quotelev2">&gt; &gt; +        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Pack the number of ports */
</span><br>
<span class="quotelev2">&gt; &gt; +    size = mca_btl_openib_component.ib_num_btls;
</span><br>
<span class="quotelev2">&gt; &gt; #if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; -            MCA_BTL_OPENIB_PORT_INFO_HTON(ports[i]);
</span><br>
<span class="quotelev2">&gt; &gt; +    size = htonl(size);
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; +    memcpy(message, &amp;size, sizeof(size));
</span><br>
<span class="quotelev2">&gt; &gt; +    offset = message + sizeof(size);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Pack each of the ports */
</span><br>
<span class="quotelev2">&gt; &gt; +    for (i = 0; i &lt; mca_btl_openib_component.ib_num_btls; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; +        /* Pack the port struct */
</span><br>
<span class="quotelev2">&gt; &gt; +        memcpy(offset, &amp;mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;port_info, sizeof(mca_btl_openib_port_info_t));
</span><br>
<span class="quotelev2">&gt; &gt; +#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; +        MCA_BTL_OPENIB_PORT_INFO_HTON(*(mca_btl_openib_port_info_t  
</span><br>
<span class="quotelev2">&gt; &gt; *)offset);
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +        offset += sizeof(mca_btl_openib_port_info_t);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        /* Pack the strlen of the cpclist */
</span><br>
<span class="quotelev2">&gt; &gt; +        size = size_save =
</span><br>
<span class="quotelev2">&gt; &gt; +            strlen(mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;port_info.cpclist);
</span><br>
<span class="quotelev2">&gt; &gt; +#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; +        size = htonl(size);
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +        memcpy(offset, &amp;size, sizeof(size));
</span><br>
<span class="quotelev2">&gt; &gt; +        offset += sizeof(size);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        /* Pack the string */
</span><br>
<span class="quotelev2">&gt; &gt; +        memcpy(offset,
</span><br>
<span class="quotelev2">&gt; &gt; +               mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;port_info.cpclist,
</span><br>
<span class="quotelev2">&gt; &gt; +               size_save);
</span><br>
<span class="quotelev2">&gt; &gt; +        offset += size_save;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -    rc = ompi_modex_send  
</span><br>
<span class="quotelev2">&gt; &gt; (&amp;mca_btl_openib_component.super.btl_version, ports, size);
</span><br>
<span class="quotelev2">&gt; &gt; -    if (NULL != ports) {
</span><br>
<span class="quotelev2">&gt; &gt; -        free (ports);
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    rc = ompi_modex_send(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; +                         message, msg_size);
</span><br>
<span class="quotelev2">&gt; &gt; +    free(message);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     return rc;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -357,6 +397,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;             lid &lt; ib_port_attr-&gt;lid + lmc; lid++){
</span><br>
<span class="quotelev2">&gt; &gt;         for(i = 0; i &lt; mca_btl_openib_component.btls_per_lid; i++){
</span><br>
<span class="quotelev2">&gt; &gt;             char param[40];
</span><br>
<span class="quotelev2">&gt; &gt; +            int rc;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;             openib_btl = malloc(sizeof(mca_btl_openib_module_t));
</span><br>
<span class="quotelev2">&gt; &gt;             if(NULL == openib_btl) {
</span><br>
<span class="quotelev2">&gt; &gt;                 BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__,  
</span><br>
<span class="quotelev2">&gt; &gt; __LINE__));
</span><br>
<span class="quotelev2">&gt; &gt; @@ -383,6 +425,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;                 openib_btl-&gt;port_info.lid = lid;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt; +            rc = ompi_btl_openib_connect_base_query(&amp;openib_btl- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;port_info.cpclist, hca);
</span><br>
<span class="quotelev2">&gt; &gt; +            if (rc != OMPI_SUCCESS) {
</span><br>
<span class="quotelev2">&gt; &gt; +                continue;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;             openib_btl-&gt;ib_reg[MCA_BTL_TAG_BTL].cbfunc =  
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_control;
</span><br>
<span class="quotelev2">&gt; &gt;             openib_btl-&gt;ib_reg[MCA_BTL_TAG_BTL].cbdata = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1295,10 +1342,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;             return NULL;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    /* Setup connect module */
</span><br>
<span class="quotelev2">&gt; &gt; -    if (OMPI_SUCCESS != ompi_btl_openib_connect_base_select()) {
</span><br>
<span class="quotelev2">&gt; &gt; -        return NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt;     btl_openib_modex_send();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     *num_btl_modules = mca_btl_openib_component.ib_num_btls;
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/btl_openib_proc.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/btl_openib_proc.c	(revision 17101)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/btl_openib_proc.c	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -100,17 +100,19 @@
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_openib_proc_t* mca_btl_openib_proc_create(ompi_proc_t*  
</span><br>
<span class="quotelev2">&gt; &gt; ompi_proc)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     mca_btl_openib_proc_t* module_proc = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -    size_t size;
</span><br>
<span class="quotelev2">&gt; &gt; +    size_t msg_size;
</span><br>
<span class="quotelev2">&gt; &gt; +    uint32_t size;
</span><br>
<span class="quotelev2">&gt; &gt; #if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt;     size_t i;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;     int rc;
</span><br>
<span class="quotelev2">&gt; &gt; +    void *message;
</span><br>
<span class="quotelev2">&gt; &gt; +    char *offset;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Check if we have already created a IB proc
</span><br>
<span class="quotelev2">&gt; &gt;      * structure for this ompi process */
</span><br>
<span class="quotelev2">&gt; &gt;     module_proc = mca_btl_openib_proc_lookup_ompi(ompi_proc);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if(module_proc != NULL) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (NULL != module_proc) {
</span><br>
<span class="quotelev2">&gt; &gt;         /* Gotcha! */
</span><br>
<span class="quotelev2">&gt; &gt;         return module_proc;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -126,48 +128,67 @@
</span><br>
<span class="quotelev2">&gt; &gt;      * size) to represent the proc */
</span><br>
<span class="quotelev2">&gt; &gt;     module_proc-&gt;proc_guid = ompi_proc-&gt;proc_name;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     /* query for the peer address info */
</span><br>
<span class="quotelev2">&gt; &gt; -    rc = ompi_modex_recv(
</span><br>
<span class="quotelev2">&gt; &gt; -                                  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; -                                 ompi_proc,
</span><br>
<span class="quotelev2">&gt; &gt; -                                 (void*)&amp;module_proc-&gt;proc_ports,
</span><br>
<span class="quotelev2">&gt; &gt; -                                 &amp;size
</span><br>
<span class="quotelev2">&gt; &gt; -                                 );
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if(OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev2">&gt; &gt; +    rc = ompi_modex_recv(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; +                         ompi_proc,
</span><br>
<span class="quotelev2">&gt; &gt; +                         &amp;message,
</span><br>
<span class="quotelev2">&gt; &gt; +                         &amp;msg_size);
</span><br>
<span class="quotelev2">&gt; &gt; +    if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev2">&gt; &gt;         BTL_ERROR((&quot;[%s:%d] ompi_modex_recv failed for peer %s&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                    __FILE__, __LINE__,
</span><br>
<span class="quotelev2">&gt; &gt;                    ORTE_NAME_PRINT(&amp;ompi_proc-&gt;proc_name)));
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_RELEASE(module_proc);
</span><br>
<span class="quotelev2">&gt; &gt;         return NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if((size % sizeof(mca_btl_openib_port_info_t)) != 0) {
</span><br>
<span class="quotelev2">&gt; &gt; -        BTL_ERROR((&quot;[%s:%d] invalid module address for peer %s&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                   __FILE__, __LINE__,
</span><br>
<span class="quotelev2">&gt; &gt; -                   ORTE_NAME_PRINT(&amp;ompi_proc-&gt;proc_name)));
</span><br>
<span class="quotelev2">&gt; &gt; -        OBJ_RELEASE(module_proc);
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 == msg_size) {
</span><br>
<span class="quotelev2">&gt; &gt;         return NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    module_proc-&gt;proc_port_count = size/ 
</span><br>
<span class="quotelev2">&gt; &gt; sizeof(mca_btl_openib_port_info_t);
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Message was packed in btl_openib_component.c; the format is
</span><br>
<span class="quotelev2">&gt; &gt; +       listed in a comment in that file */
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Unpack the number of ports in the message */
</span><br>
<span class="quotelev2">&gt; &gt; +    offset = message;
</span><br>
<span class="quotelev2">&gt; &gt; +    memcpy(&amp;(module_proc-&gt;proc_port_count), offset,  
</span><br>
<span class="quotelev2">&gt; &gt; sizeof(uint32_t));
</span><br>
<span class="quotelev2">&gt; &gt; +#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; +    module_proc-&gt;proc_port_count = ntohl(module_proc- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;proc_port_count);
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +    module_proc-&gt;proc_ports = (mca_btl_openib_port_info_t  
</span><br>
<span class="quotelev2">&gt; &gt; *)malloc(sizeof(mca_btl_openib_port_info_t) * module_proc- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;proc_port_count);
</span><br>
<span class="quotelev2">&gt; &gt; +    offset += sizeof(uint32_t);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Loop over unpacking all the ports */
</span><br>
<span class="quotelev2">&gt; &gt; +    for (i = 0; i &lt; module_proc-&gt;proc_port_count; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; +        /* Unpack the port */
</span><br>
<span class="quotelev2">&gt; &gt; +        memcpy(&amp;module_proc-&gt;proc_ports[i], offset,
</span><br>
<span class="quotelev2">&gt; &gt; +               sizeof(mca_btl_openib_port_info_t));
</span><br>
<span class="quotelev2">&gt; &gt; +#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; +        MCA_BTL_OPENIB_PORT_INFO_NTOH(module_proc-&gt;proc_ports[i]);
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +        offset += sizeof(mca_btl_openib_port_info_t);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        /* Unpack the string length */
</span><br>
<span class="quotelev2">&gt; &gt; +        memcpy(&amp;size, offset, sizeof(size));
</span><br>
<span class="quotelev2">&gt; &gt; +#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; +        size = ntohl(size);
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +        offset += sizeof(size);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        /* Unpack the string */
</span><br>
<span class="quotelev2">&gt; &gt; +        module_proc-&gt;proc_ports[i].cpclist = malloc(size + 1);
</span><br>
<span class="quotelev2">&gt; &gt; +        if (NULL == module_proc-&gt;proc_ports[i].cpclist) {
</span><br>
<span class="quotelev2">&gt; &gt; +            /* JMS some error */
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +        memcpy(module_proc-&gt;proc_ports[i].cpclist, offset, size);
</span><br>
<span class="quotelev2">&gt; &gt; +        module_proc-&gt;proc_ports[i].cpclist[size] = '\0';
</span><br>
<span class="quotelev2">&gt; &gt; +        offset += size;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 == module_proc-&gt;proc_port_count) {
</span><br>
<span class="quotelev2">&gt; &gt;         module_proc-&gt;proc_endpoints = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     } else {
</span><br>
<span class="quotelev2">&gt; &gt;         module_proc-&gt;proc_endpoints = (mca_btl_base_endpoint_t**)
</span><br>
<span class="quotelev2">&gt; &gt;             malloc(module_proc-&gt;proc_port_count *  
</span><br>
<span class="quotelev2">&gt; &gt; sizeof(mca_btl_base_endpoint_t*));
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt; &gt; -    for(i=0; i &lt; module_proc-&gt;proc_port_count; ++i) {
</span><br>
<span class="quotelev2">&gt; &gt; -        MCA_BTL_OPENIB_PORT_INFO_NTOH(module_proc-&gt;proc_ports[i]);
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if(NULL == module_proc-&gt;proc_endpoints) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (NULL == module_proc-&gt;proc_endpoints) {
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_RELEASE(module_proc);
</span><br>
<span class="quotelev2">&gt; &gt;         return NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/connect/connect.h
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/connect/connect.h	(revision 17102)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/connect/connect.h	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -62,16 +62,23 @@
</span><br>
<span class="quotelev2">&gt; &gt;  * main openib BTL will start sending out fragments that were queued
</span><br>
<span class="quotelev2">&gt; &gt;  * while the connection was establing, etc.).
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; #ifndef BTL_OPENIB_CONNECT_H
</span><br>
<span class="quotelev2">&gt; &gt; #define BTL_OPENIB_CONNECT_H
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#define BCF_MAX_NAME 64
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; /**
</span><br>
<span class="quotelev2">&gt; &gt; + * Must forward declare mca_btl_openib_hca_t; it's defined in
</span><br>
<span class="quotelev2">&gt; &gt; + * btl_openib.h, but that file includes this file.
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +struct mca_btl_openib_hca_t;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/**
</span><br>
<span class="quotelev2">&gt; &gt;  * Function to register MCA params in the connect functions
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; -typedef int (*ompi_btl_openib_connect_base_func_open_t)(void);
</span><br>
<span class="quotelev2">&gt; &gt; +typedef void (*ompi_btl_openib_connect_base_func_open_t)(void);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /**
</span><br>
<span class="quotelev2">&gt; &gt;  * Function to intialize the connection functions (i.e., it's been
</span><br>
<span class="quotelev2">&gt; &gt; @@ -86,12 +93,15 @@
</span><br>
<span class="quotelev2">&gt; &gt;     (struct mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /**
</span><br>
<span class="quotelev2">&gt; &gt; + * Query the CPC to see if it wants to run on a specific HCA
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +typedef int (*ompi_btl_openib_connect_base_func_query_t)(struct  
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_openib_hca_t *hca);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/**
</span><br>
<span class="quotelev2">&gt; &gt;  * Function to finalize the connection functions
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; typedef int (*ompi_btl_openib_connect_base_func_finalize_t)(void);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -#define BCF_MAX_NAME 64
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; struct ompi_btl_openib_connect_base_funcs_t {
</span><br>
<span class="quotelev2">&gt; &gt;     /** Name of this set of connection functions */
</span><br>
<span class="quotelev2">&gt; &gt;     char bcf_name[BCF_MAX_NAME];
</span><br>
<span class="quotelev2">&gt; &gt; @@ -105,8 +115,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;     /** Connect function */
</span><br>
<span class="quotelev2">&gt; &gt;     ompi_btl_openib_connect_base_func_start_connect_t  
</span><br>
<span class="quotelev2">&gt; &gt; bcf_start_connect;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    /** Query function */
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_btl_openib_connect_base_func_query_t bcf_query;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     /** Finalize function */
</span><br>
<span class="quotelev2">&gt; &gt; -    ompi_btl_openib_connect_base_func_open_t bcf_finalize;
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_btl_openib_connect_base_func_finalize_t bcf_finalize;
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt; typedef struct ompi_btl_openib_connect_base_funcs_t  
</span><br>
<span class="quotelev2">&gt; &gt; ompi_btl_openib_connect_base_funcs_t;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/connect/base.h
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/connect/base.h	(revision 17102)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/connect/base.h	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -28,7 +28,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * Select function
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; -int ompi_btl_openib_connect_base_select(void);
</span><br>
<span class="quotelev2">&gt; &gt; +int ompi_btl_openib_connect_base_select(char*, char*);
</span><br>
<span class="quotelev2">&gt; &gt; +int ompi_btl_openib_connect_base_query(char**,  
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_openib_hca_t*);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; END_C_DECLS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_base.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(revision  
</span><br>
<span class="quotelev2">&gt; &gt; 17102)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(working  
</span><br>
<span class="quotelev2">&gt; &gt; copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -33,7 +33,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; static ompi_btl_openib_connect_base_funcs_t *all[] = {
</span><br>
<span class="quotelev2">&gt; &gt;     &amp;ompi_btl_openib_connect_oob,
</span><br>
<span class="quotelev2">&gt; &gt; +#if HAVE_XRC
</span><br>
<span class="quotelev2">&gt; &gt;     &amp;ompi_btl_openib_connect_xoob,
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt;     &amp;ompi_btl_openib_connect_rdma_cm,
</span><br>
<span class="quotelev2">&gt; &gt;     &amp;ompi_btl_openib_connect_ibcm,
</span><br>
<span class="quotelev2">&gt; &gt;     NULL
</span><br>
<span class="quotelev2">&gt; &gt; @@ -42,7 +44,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * MCA parameter value
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; -static char *param = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +static char *cpc_include = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +static char *cpc_exclude = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * Register MCA parameters
</span><br>
<span class="quotelev2">&gt; &gt; @@ -60,38 +63,26 @@
</span><br>
<span class="quotelev2">&gt; &gt;     a = opal_argv_join(temp, ',');
</span><br>
<span class="quotelev2">&gt; &gt;     opal_argv_free(temp);
</span><br>
<span class="quotelev2">&gt; &gt;     asprintf(&amp;b,
</span><br>
<span class="quotelev2">&gt; &gt; -             &quot;Method used to make OpenFabrics connections (valid  
</span><br>
<span class="quotelev2">&gt; &gt; values: %s)&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +             &quot;Method used to select OpenFabrics connections (valid  
</span><br>
<span class="quotelev2">&gt; &gt; values: %s)&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;              a);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    /* For XRC qps we must to use XOOB connection manager */
</span><br>
<span class="quotelev2">&gt; &gt; -    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt; -         
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; -                &quot;connect&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                b, false, false,
</span><br>
<span class="quotelev2">&gt; &gt; -                &quot;xoob&quot;, &amp;param);
</span><br>
<span class="quotelev2">&gt; &gt; -        if (0 != strcmp(&quot;xoob&quot;, param)) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                    &quot;XRC with wrong OOB&quot;, true,
</span><br>
<span class="quotelev2">&gt; &gt; -                    orte_system_info.nodename,
</span><br>
<span class="quotelev2">&gt; &gt; -                    mca_btl_openib_component.num_xrc_qps);
</span><br>
<span class="quotelev2">&gt; &gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    } else { /* For all others we should use OOB */
</span><br>
<span class="quotelev2">&gt; &gt; -         
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; -                &quot;connect&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                b, false, false,
</span><br>
<span class="quotelev2">&gt; &gt; -                &quot;oob&quot;, &amp;param);
</span><br>
<span class="quotelev2">&gt; &gt; -        if (0 != strcmp(&quot;oob&quot;, param)) {
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                    &quot;SRQ or PP with wrong OOB&quot;, true,
</span><br>
<span class="quotelev2">&gt; &gt; -                    orte_system_info.nodename,
</span><br>
<span class="quotelev2">&gt; &gt; -                    mca_btl_openib_component.num_srq_qps,
</span><br>
<span class="quotelev2">&gt; &gt; -                    mca_btl_openib_component.num_pp_qps);
</span><br>
<span class="quotelev2">&gt; &gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +     
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; +                &quot;cpc_include&quot;, b, false, false, NULL, &amp;cpc_include);
</span><br>
<span class="quotelev2">&gt; &gt; +    free(a);
</span><br>
<span class="quotelev2">&gt; &gt; +    free(b);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    /* Call the open function on all the connect modules */
</span><br>
<span class="quotelev2">&gt; &gt; +    asprintf(&amp;b,
</span><br>
<span class="quotelev2">&gt; &gt; +             &quot;Method used to exclude OpenFabrics connections (valid  
</span><br>
<span class="quotelev2">&gt; &gt; values: %s)&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +             a);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +     
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; +                &quot;cpc_exclude&quot;, b, false, false, NULL, &amp;cpc_exclude);
</span><br>
<span class="quotelev2">&gt; &gt; +    free(a);
</span><br>
<span class="quotelev2">&gt; &gt; +    free(b);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Call the open function on all the connect modules so that they
</span><br>
<span class="quotelev2">&gt; &gt; +     * may setup any MCA params specific to the connection type
</span><br>
<span class="quotelev2">&gt; &gt; +     */
</span><br>
<span class="quotelev2">&gt; &gt;     for (i = 0; NULL != all[i]; ++i) {
</span><br>
<span class="quotelev2">&gt; &gt;         if (NULL != all[i]-&gt;bcf_open) {
</span><br>
<span class="quotelev2">&gt; &gt;             all[i]-&gt;bcf_open();
</span><br>
<span class="quotelev2">&gt; &gt; @@ -101,33 +92,134 @@
</span><br>
<span class="quotelev2">&gt; &gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +/*
</span><br>
<span class="quotelev2">&gt; &gt; + * The connection method is chosen by comparing the lists passed  
</span><br>
<span class="quotelev2">&gt; &gt; around
</span><br>
<span class="quotelev2">&gt; &gt; + * to all nodes via modex with the list generated locally.  Any
</span><br>
<span class="quotelev2">&gt; &gt; + * non-negative number is a potentially valid connection method.  The
</span><br>
<span class="quotelev2">&gt; &gt; + * method below of determining the optimal connection method is to  
</span><br>
<span class="quotelev2">&gt; &gt; take
</span><br>
<span class="quotelev2">&gt; &gt; + * the cross-section of the two lists.  The highest single value (and
</span><br>
<span class="quotelev2">&gt; &gt; + * the other side being non-negative) is selected as the cpc method.
</span><br>
<span class="quotelev2">&gt; &gt; + */
</span><br>
<span class="quotelev2">&gt; &gt; +int ompi_btl_openib_connect_base_select(char *remotelist, char  
</span><br>
<span class="quotelev2">&gt; &gt; *locallist)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    int i, j, max = -1;
</span><br>
<span class="quotelev2">&gt; &gt; +    char **localist_formatted, **remotelist_formatted;
</span><br>
<span class="quotelev2">&gt; &gt; +    char *name;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -int ompi_btl_openib_connect_base_select(void)
</span><br>
<span class="quotelev2">&gt; &gt; +    BTL_VERBOSE((&quot;remotelist = %s locallist = %s\n&quot;, remotelist,  
</span><br>
<span class="quotelev2">&gt; &gt; locallist));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    localist_formatted = opal_argv_split(locallist, ',');
</span><br>
<span class="quotelev2">&gt; &gt; +    remotelist_formatted = opal_argv_split(remotelist, ',');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    for (i = 0; NULL != localist_formatted[i] &amp;&amp; NULL !=  
</span><br>
<span class="quotelev2">&gt; &gt; localist_formatted[i+1]; i+=2) {
</span><br>
<span class="quotelev2">&gt; &gt; +        for (j = 0; NULL != remotelist_formatted[j] &amp;&amp; NULL !=  
</span><br>
<span class="quotelev2">&gt; &gt; remotelist_formatted[j+1]; j+=2) {
</span><br>
<span class="quotelev2">&gt; &gt; +            int local_val, remote_val;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            local_val = atoi(localist_formatted[i+1]);
</span><br>
<span class="quotelev2">&gt; &gt; +            remote_val = atoi(remotelist_formatted[j+1]);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            if (0 == strcmp(localist_formatted[i],  
</span><br>
<span class="quotelev2">&gt; &gt; remotelist_formatted[j]) &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; +                (-1 != local_val &amp;&amp; -1 != remote_val)) {
</span><br>
<span class="quotelev2">&gt; &gt; +                if (local_val &gt; max) {
</span><br>
<span class="quotelev2">&gt; &gt; +                    max = local_val;
</span><br>
<span class="quotelev2">&gt; &gt; +                    name = localist_formatted[i];
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +                if (remote_val &gt; max) {
</span><br>
<span class="quotelev2">&gt; &gt; +                    max = remote_val;
</span><br>
<span class="quotelev2">&gt; &gt; +                    name = remotelist_formatted[j];
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (-1 == max) {
</span><br>
<span class="quotelev2">&gt; &gt; +        BTL_ERROR((&quot;Failed to find any working connections&quot;));
</span><br>
<span class="quotelev2">&gt; &gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    for (i = 0; NULL != all[i]; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; +        if (0 == strcmp(all[i]-&gt;bcf_name, name)) {
</span><br>
<span class="quotelev2">&gt; &gt; +            all[i]-&gt;bcf_init();
</span><br>
<span class="quotelev2">&gt; &gt; +            ompi_btl_openib_connect = *(all[i]);
</span><br>
<span class="quotelev2">&gt; &gt; +            break;
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    BTL_VERBOSE((&quot;%s selected as transport\n&quot;, all[i]-&gt;bcf_name));
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_argv_free(localist_formatted);
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_argv_free(remotelist_formatted);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static inline int cpc_specific_query(char ***cpclist,  
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_openib_hca_t *hca, int cpc_counter, bool *valid)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    int i;
</span><br>
<span class="quotelev2">&gt; &gt; +    char *temp;
</span><br>
<span class="quotelev2">&gt; &gt; +    int rc;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    /* Go through all the pseudo-components; if the  
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect
</span><br>
<span class="quotelev2">&gt; &gt; -       param is empty, then take the first one that returns
</span><br>
<span class="quotelev2">&gt; &gt; -       OMPI_SUCCESS from its init function.  If
</span><br>
<span class="quotelev2">&gt; &gt; -       btl_openib_connect_param is not empty, find that one and  
</span><br>
<span class="quotelev2">&gt; &gt; ensure
</span><br>
<span class="quotelev2">&gt; &gt; -       that its init function returns OMPI_SUCCESS. */
</span><br>
<span class="quotelev2">&gt; &gt; -    if (NULL != param &amp;&amp; '\0' == param[0]) {
</span><br>
<span class="quotelev2">&gt; &gt; -        param = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +    if (NULL == all[cpc_counter]-&gt;bcf_query) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    rc = all[cpc_counter]-&gt;bcf_query(hca);
</span><br>
<span class="quotelev2">&gt; &gt; +    if (rc &gt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt; +        *valid = 1;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    asprintf(&amp;temp, &quot;%s,%d&quot;, all[cpc_counter]-&gt;bcf_name, rc);
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_argv_append_nosize(cpclist, temp);
</span><br>
<span class="quotelev2">&gt; &gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +int ompi_btl_openib_connect_base_query(char **cpclist,  
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_openib_hca_t *hca)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    int i, rc;
</span><br>
<span class="quotelev2">&gt; &gt; +    bool valid = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +    char **cpclist_include, **cpclist_exclude, **namepriority_list  
</span><br>
<span class="quotelev2">&gt; &gt; = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    cpclist_include = opal_argv_split(cpc_include, ',');
</span><br>
<span class="quotelev2">&gt; &gt; +    cpclist_exclude = opal_argv_split(cpc_exclude, ',');
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Go through all the CMs to create a list of usable CPCs */
</span><br>
<span class="quotelev2">&gt; &gt;     for (i = 0; NULL != all[i]; ++i) {
</span><br>
<span class="quotelev2">&gt; &gt; -        if ((NULL != param &amp;&amp; 0 == strcmp(all[i]-&gt;bcf_name, param))  
</span><br>
<span class="quotelev2">&gt; &gt; ||
</span><br>
<span class="quotelev2">&gt; &gt; -            (NULL == param)) {
</span><br>
<span class="quotelev2">&gt; &gt; -            if (NULL != all[i]-&gt;bcf_init &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; -                OMPI_SUCCESS == all[i]-&gt;bcf_init()) {
</span><br>
<span class="quotelev2">&gt; &gt; -                ompi_btl_openib_connect = *(all[i]);
</span><br>
<span class="quotelev2">&gt; &gt; -                break;
</span><br>
<span class="quotelev2">&gt; &gt; +        if (NULL != cpclist_include) {
</span><br>
<span class="quotelev2">&gt; &gt; +            int j;
</span><br>
<span class="quotelev2">&gt; &gt; +            for (j = 0; NULL != cpclist_include[j]; ++j) {
</span><br>
<span class="quotelev2">&gt; &gt; +                if (0 == strcmp(cpclist_include[j], all[i]- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;bcf_name)) {
</span><br>
<span class="quotelev2">&gt; &gt; +                    rc = cpc_specific_query(&amp;namepriority_list,  
</span><br>
<span class="quotelev2">&gt; &gt; hca, i, &amp;valid);
</span><br>
<span class="quotelev2">&gt; &gt; +                    if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev2">&gt; &gt; +                        return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt; +                    }
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; +        } else if (NULL != cpclist_exclude) {
</span><br>
<span class="quotelev2">&gt; &gt; +            int j;
</span><br>
<span class="quotelev2">&gt; &gt; +            for (j = 0; NULL != cpclist_exclude[j]; ++j) {
</span><br>
<span class="quotelev2">&gt; &gt; +                if (0 != strcmp(cpclist_exclude[j], all[i]- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;bcf_name)) {
</span><br>
<span class="quotelev2">&gt; &gt; +                    rc = cpc_specific_query(&amp;namepriority_list,  
</span><br>
<span class="quotelev2">&gt; &gt; hca, i, &amp;valid);
</span><br>
<span class="quotelev2">&gt; &gt; +                    if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev2">&gt; &gt; +                        return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt; +                    }
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +        } else {
</span><br>
<span class="quotelev2">&gt; &gt; +            rc = cpc_specific_query(&amp;namepriority_list, hca, i,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;valid);
</span><br>
<span class="quotelev2">&gt; &gt; +            if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev2">&gt; &gt; +                return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -    if (NULL == all[i]) {
</span><br>
<span class="quotelev2">&gt; &gt; -        /* JMS opal_show_help */
</span><br>
<span class="quotelev2">&gt; &gt; -        return OMPI_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (0 == valid) {
</span><br>
<span class="quotelev2">&gt; &gt; +        BTL_ERROR((&quot;Failed to find any valid connections for %s,  
</span><br>
<span class="quotelev2">&gt; &gt; not &quot;
</span><br>
<span class="quotelev2">&gt; &gt; +                   &quot;using it for this run&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                   ibv_get_device_name(hca-&gt;ib_dev)));
</span><br>
<span class="quotelev2">&gt; &gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    *cpclist = opal_argv_join(namepriority_list, ',');
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_argv_free(namepriority_list);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(revision  
</span><br>
<span class="quotelev2">&gt; &gt; 17102)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(working  
</span><br>
<span class="quotelev2">&gt; &gt; copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -13,7 +13,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;btl_openib_endpoint.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -static int ibcm_open(void);
</span><br>
<span class="quotelev2">&gt; &gt; +static void ibcm_open(void);
</span><br>
<span class="quotelev2">&gt; &gt; static int ibcm_init(void);
</span><br>
<span class="quotelev2">&gt; &gt; static int ibcm_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev2">&gt; &gt; static int ibcm_finalize(void);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -23,17 +23,16 @@
</span><br>
<span class="quotelev2">&gt; &gt;     ibcm_open,
</span><br>
<span class="quotelev2">&gt; &gt;     ibcm_init,
</span><br>
<span class="quotelev2">&gt; &gt;     ibcm_connect,
</span><br>
<span class="quotelev2">&gt; &gt; +    NULL,
</span><br>
<span class="quotelev2">&gt; &gt;     ibcm_finalize,
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -static int ibcm_open(void)
</span><br>
<span class="quotelev2">&gt; &gt; +static void ibcm_open(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;      
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; -                           &quot;btl_openib_connect_ibcm_foo&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                           &quot;connect_ibcm_foo&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                            &quot;A dummy help message&quot;, false, false,
</span><br>
<span class="quotelev2">&gt; &gt;                            17, NULL);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int ibcm_init(void)
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(revision  
</span><br>
<span class="quotelev2">&gt; &gt; 17102)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(working  
</span><br>
<span class="quotelev2">&gt; &gt; copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -39,8 +39,12 @@
</span><br>
<span class="quotelev2">&gt; &gt;     ENDPOINT_CONNECT_ACK
</span><br>
<span class="quotelev2">&gt; &gt; } connect_message_type_t;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +static int oob_priority = 50;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static void oob_open(void);
</span><br>
<span class="quotelev2">&gt; &gt; static int oob_init(void);
</span><br>
<span class="quotelev2">&gt; &gt; static int oob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev2">&gt; &gt; +static int oob_query(mca_btl_openib_hca_t *hca);
</span><br>
<span class="quotelev2">&gt; &gt; static int oob_finalize(void);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int reply_start_connect(mca_btl_openib_endpoint_t *endpoint,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -67,16 +71,33 @@
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_oob = {
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;oob&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -    /* No need for &quot;open */
</span><br>
<span class="quotelev2">&gt; &gt; -    NULL,
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Open */
</span><br>
<span class="quotelev2">&gt; &gt; +    oob_open,
</span><br>
<span class="quotelev2">&gt; &gt;     /* Init */
</span><br>
<span class="quotelev2">&gt; &gt;     oob_init,
</span><br>
<span class="quotelev2">&gt; &gt;     /* Connect */
</span><br>
<span class="quotelev2">&gt; &gt;     oob_start_connect,
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Query */
</span><br>
<span class="quotelev2">&gt; &gt; +    oob_query,
</span><br>
<span class="quotelev2">&gt; &gt;     /* Finalize */
</span><br>
<span class="quotelev2">&gt; &gt;     oob_finalize,
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +/* Open - this functions sets up any oob specific commandline  
</span><br>
<span class="quotelev2">&gt; &gt; params */
</span><br>
<span class="quotelev2">&gt; &gt; +static void oob_open(void)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +     
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; +                           &quot;connect_oob_priority&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                           &quot;The selection method priority for oob&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                           false, false, oob_priority,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;oob_priority);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (oob_priority &gt; 100) {
</span><br>
<span class="quotelev2">&gt; &gt; +        oob_priority = 100;
</span><br>
<span class="quotelev2">&gt; &gt; +    } else if (oob_priority &lt; -1) {
</span><br>
<span class="quotelev2">&gt; &gt; +        oob_priority = -1;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev2">&gt; &gt;  * connection requests.
</span><br>
<span class="quotelev2">&gt; &gt; @@ -118,6 +139,15 @@
</span><br>
<span class="quotelev2">&gt; &gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +static int oob_query(mca_btl_openib_hca_t *hca)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    if (IBV_TRANSPORT_IB == hca-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return oob_priority;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return -1;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * Finalize function.  Cleanup RML non-blocking receive.
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	 
</span><br>
<span class="quotelev2">&gt; &gt; (revision 17102)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	 
</span><br>
<span class="quotelev2">&gt; &gt; (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -13,9 +13,10 @@
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;btl_openib_endpoint.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -static int rdma_cm_open(void);
</span><br>
<span class="quotelev2">&gt; &gt; +static void rdma_cm_open(void);
</span><br>
<span class="quotelev2">&gt; &gt; static int rdma_cm_init(void);
</span><br>
<span class="quotelev2">&gt; &gt; static int rdma_cm_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev2">&gt; &gt; +static int rdma_cm_query(mca_btl_openib_hca_t *hca);
</span><br>
<span class="quotelev2">&gt; &gt; static int rdma_cm_finalize(void);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_rdma_cm  
</span><br>
<span class="quotelev2">&gt; &gt; = {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -23,17 +24,17 @@
</span><br>
<span class="quotelev2">&gt; &gt;     rdma_cm_open,
</span><br>
<span class="quotelev2">&gt; &gt;     rdma_cm_init,
</span><br>
<span class="quotelev2">&gt; &gt;     rdma_cm_connect,
</span><br>
<span class="quotelev2">&gt; &gt; +    rdma_cm_query,
</span><br>
<span class="quotelev2">&gt; &gt;     rdma_cm_finalize,
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -static int rdma_cm_open(void)
</span><br>
<span class="quotelev2">&gt; &gt; +/* Open - this functions sets up any rdma_cm specific commandline  
</span><br>
<span class="quotelev2">&gt; &gt; params */
</span><br>
<span class="quotelev2">&gt; &gt; +static void rdma_cm_open(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;      
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; -                           &quot;btl_openib_connect_rdma_cm_foo&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                           &quot;connect_rdma_cm_foo&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                            &quot;A dummy help message&quot;, false, false,
</span><br>
<span class="quotelev2">&gt; &gt;                            17, NULL);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int rdma_cm_init(void)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -48,6 +49,16 @@
</span><br>
<span class="quotelev2">&gt; &gt;     return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +static int rdma_cm_query(mca_btl_openib_hca_t *hca)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    if (IBV_TRANSPORT_IWARP == hca-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev2">&gt; &gt; +	/* Not currently supported */
</span><br>
<span class="quotelev2">&gt; &gt; +        return -1;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return -1;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; static int rdma_cm_finalize(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;rdma cm finalize\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(revision  
</span><br>
<span class="quotelev2">&gt; &gt; 17102)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(working  
</span><br>
<span class="quotelev2">&gt; &gt; copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -22,8 +22,10 @@
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;btl_openib_xrc.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +static void xoob_open(void);
</span><br>
<span class="quotelev2">&gt; &gt; static int xoob_init(void);
</span><br>
<span class="quotelev2">&gt; &gt; static int xoob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev2">&gt; &gt; +static int xoob_query(mca_btl_openib_hca_t *hca);
</span><br>
<span class="quotelev2">&gt; &gt; static int xoob_finalize(void);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt; @@ -32,18 +34,18 @@
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_xoob = {
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;xoob&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -    /* No need for &quot;open */
</span><br>
<span class="quotelev2">&gt; &gt; -    NULL,
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Open */
</span><br>
<span class="quotelev2">&gt; &gt; +    xoob_open,
</span><br>
<span class="quotelev2">&gt; &gt;     /* Init */
</span><br>
<span class="quotelev2">&gt; &gt;     xoob_init,
</span><br>
<span class="quotelev2">&gt; &gt;     /* Connect */
</span><br>
<span class="quotelev2">&gt; &gt;     xoob_start_connect,
</span><br>
<span class="quotelev2">&gt; &gt; +    /* Query */
</span><br>
<span class="quotelev2">&gt; &gt; +    xoob_query,
</span><br>
<span class="quotelev2">&gt; &gt;     /* Finalize */
</span><br>
<span class="quotelev2">&gt; &gt;     xoob_finalize,
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -#if HAVE_XRC
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; typedef enum {
</span><br>
<span class="quotelev2">&gt; &gt;     SEND,
</span><br>
<span class="quotelev2">&gt; &gt;     RECV
</span><br>
<span class="quotelev2">&gt; &gt; @@ -99,6 +101,24 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int init_rem_info(mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev2">&gt; &gt; static void free_rem_info(mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +static int xoob_priority = 60;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/* Open - this functions sets up any xoob specific commandline  
</span><br>
<span class="quotelev2">&gt; &gt; params */
</span><br>
<span class="quotelev2">&gt; &gt; +static void xoob_open(void)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +     
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt; &gt; +                           &quot;connect_xoob_priority&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                           &quot;The selection method priority for xoob&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                           false, false, xoob_priority,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;xoob_priority);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (xoob_priority &gt; 100) {
</span><br>
<span class="quotelev2">&gt; &gt; +        xoob_priority = 100;
</span><br>
<span class="quotelev2">&gt; &gt; +    } else if (xoob_priority &lt; -1) {
</span><br>
<span class="quotelev2">&gt; &gt; +        xoob_priority = -1;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev2">&gt; &gt;  * connection requests.
</span><br>
<span class="quotelev2">&gt; &gt; @@ -173,6 +193,15 @@
</span><br>
<span class="quotelev2">&gt; &gt;     return rc;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +static int xoob_query(btl_openib_hca_t *hca)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return xoob_priority;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return -1;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * Finalize function.  Cleanup RML non-blocking receive.
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; @@ -836,24 +865,3 @@
</span><br>
<span class="quotelev2">&gt; &gt;         free(rem_info-&gt;rem_srqs);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -#else
</span><br>
<span class="quotelev2">&gt; &gt; -/* In case if the XRC was disabled during compilation we will print  
</span><br>
<span class="quotelev2">&gt; &gt; message and return error */
</span><br>
<span class="quotelev2">&gt; &gt; -static int xoob_init(void)
</span><br>
<span class="quotelev2">&gt; &gt; -{
</span><br>
<span class="quotelev2">&gt; &gt; -    printf(&quot;xoob init\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev2">&gt; &gt; -}
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -static int xoob_start_connect(mca_btl_base_endpoint_t *e)
</span><br>
<span class="quotelev2">&gt; &gt; -{
</span><br>
<span class="quotelev2">&gt; &gt; -    printf(&quot;xoob start connect\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev2">&gt; &gt; -}
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -static int xoob_finalize(void)
</span><br>
<span class="quotelev2">&gt; &gt; -{
</span><br>
<span class="quotelev2">&gt; &gt; -    printf(&quot;xoob finalize\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; -    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev2">&gt; &gt; -}
</span><br>
<span class="quotelev2">&gt; &gt; -#endif
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/btl_openib.c	(revision 17101)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/btl_openib.c	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -322,6 +322,15 @@
</span><br>
<span class="quotelev2">&gt; &gt;         /* check if the remote proc has a reachable subnet first */
</span><br>
<span class="quotelev2">&gt; &gt;         BTL_VERBOSE((&quot;got %d port_infos \n&quot;, ib_proc- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;proc_port_count));
</span><br>
<span class="quotelev2">&gt; &gt;         for(j = 0; j &lt; (int) ib_proc-&gt;proc_port_count; j++){
</span><br>
<span class="quotelev2">&gt; &gt; +            int rc;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            /* Setup connect module */
</span><br>
<span class="quotelev2">&gt; &gt; +            rc = ompi_btl_openib_connect_base_select(ib_proc- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;proc_ports[j].cpclist,
</span><br>
<span class="quotelev2">&gt; &gt; +                                                     openib_btl- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;port_info.cpclist);
</span><br>
<span class="quotelev2">&gt; &gt; +            if (rc != OMPI_SUCCESS) {
</span><br>
<span class="quotelev2">&gt; &gt; +                continue;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;             BTL_VERBOSE((&quot;got a subnet %016x\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                          ib_proc-&gt;proc_ports[j].subnet_id));
</span><br>
<span class="quotelev2">&gt; &gt;             if(ib_proc-&gt;proc_ports[j].subnet_id ==
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/configure.m4
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/configure.m4	(revision 17101)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/configure.m4	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -18,7 +18,15 @@
</span><br>
<span class="quotelev2">&gt; &gt; # $HEADER$
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +# MCA_btl_openib_POST_CONFIG([should_build])
</span><br>
<span class="quotelev2">&gt; &gt; +# ------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; +AC_DEFUN([MCA_btl_openib_POST_CONFIG], [
</span><br>
<span class="quotelev2">&gt; &gt; +    AS_IF([test $1 -eq 0 -a &quot;$enable_dist&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt; &gt; +          [AC_MSG_ERROR([BTL openib is disabled but --enable-dist  
</span><br>
<span class="quotelev2">&gt; &gt; specifed.  This will result in a bad tarball.  Aborting configure.])])
</span><br>
<span class="quotelev2">&gt; &gt; +    AM_CONDITIONAL([MCA_btl_openib_have_xrc], [test $1 -eq 1 -a &quot;x 
</span><br>
<span class="quotelev2">&gt; &gt; $btl_openib_have_xrc&quot; = &quot;x1&quot; -a &quot;x$ompi_want_connectx_xrc&quot; = &quot;x1&quot;])
</span><br>
<span class="quotelev2">&gt; &gt; +])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; # MCA_btl_openib_CONFIG([action-if-can-compile],
</span><br>
<span class="quotelev2">&gt; &gt; #                      [action-if-cant-compile])
</span><br>
<span class="quotelev2">&gt; &gt; # ------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/btl_openib.h	(revision 17101)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/btl_openib.h	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -46,6 +46,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;ompi/mca/btl/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define HAVE_XRC (defined(HAVE_IBV_OPEN_XRC_DOMAIN) &amp;&amp; (1 ==  
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_ENABLE_CONNECTX_XRC_SUPPORT))
</span><br>
<span class="quotelev2">&gt; &gt; @@ -229,6 +231,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; #if HAVE_XRC
</span><br>
<span class="quotelev2">&gt; &gt;     uint16_t lid; /* used only in xrc */
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt; +    char *cpclist;
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt; typedef struct mca_btl_openib_port_info mca_btl_openib_port_info_t;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/Makefile.am	(revision 17101)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/Makefile.am	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -53,14 +53,18 @@
</span><br>
<span class="quotelev2">&gt; &gt;     connect/btl_openib_connect_base.c \
</span><br>
<span class="quotelev2">&gt; &gt;     connect/btl_openib_connect_oob.c \
</span><br>
<span class="quotelev2">&gt; &gt;     connect/btl_openib_connect_oob.h \
</span><br>
<span class="quotelev2">&gt; &gt; -    connect/btl_openib_connect_xoob.c \
</span><br>
<span class="quotelev2">&gt; &gt; -    connect/btl_openib_connect_xoob.h \
</span><br>
<span class="quotelev2">&gt; &gt;     connect/btl_openib_connect_rdma_cm.c \
</span><br>
<span class="quotelev2">&gt; &gt;     connect/btl_openib_connect_rdma_cm.h \
</span><br>
<span class="quotelev2">&gt; &gt;     connect/btl_openib_connect_ibcm.c \
</span><br>
<span class="quotelev2">&gt; &gt;     connect/btl_openib_connect_ibcm.h \
</span><br>
<span class="quotelev2">&gt; &gt;     connect/connect.h
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +if MCA_btl_openib_have_xrc
</span><br>
<span class="quotelev2">&gt; &gt; +sources += \
</span><br>
<span class="quotelev2">&gt; &gt; +    connect/btl_openib_connect_xoob.c \
</span><br>
<span class="quotelev2">&gt; &gt; +    connect/btl_openib_connect_xoob.h
</span><br>
<span class="quotelev2">&gt; &gt; +endif
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; # Make the output library in this directory, and name it either
</span><br>
<span class="quotelev2">&gt; &gt; # mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
</span><br>
<span class="quotelev2">&gt; &gt; # (for static builds).
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="2957.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Previous message:</strong> <a href="2955.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>In reply to:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2958.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Reply:</strong> <a href="2958.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
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
