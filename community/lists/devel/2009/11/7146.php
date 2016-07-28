<?
$subject_val = "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 17:14:26 2009" -->
<!-- isoreceived="20091124221426" -->
<!-- sent="Tue, 24 Nov 2009 17:14:08 -0500" -->
<!-- isosent="20091124221408" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport." -->
<!-- id="8F823CD4-7E18-4020-979B-EBD4EF6AFF2C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B0173CD.2010006_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 17:14:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7147.php">George Bosilca: "Re: [OMPI devel] progress threads"</a>
<li><strong>Previous message:</strong> <a href="7145.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>In reply to:</strong> <a href="7120.php">Vasily Philipov: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7156.php">Lenny Verkhovsky: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<li><strong>Reply:</strong> <a href="7156.php">Lenny Verkhovsky: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 16, 2009, at 10:46 AM, Vasily Philipov wrote:
<br>
<p><span class="quotelev1">&gt; Here is new patch for heterogeneous clusters supporting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Voltaire / IBM / Sun -- please review and test this patch.  You guys  
<br>
care about this stuff more than I do.  :-)
<br>
<p>My comments below.
<br>
<p><span class="quotelev1">&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/btl/openib/btl_openib.c	Fri Nov 06 12:00:16 2009 -0800
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/btl/openib/btl_openib.c	Mon Nov 16 17:41:48 2009 +0200
</span><br>
<span class="quotelev1">&gt; @@ -39,6 +39,8 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/runtime/ompi_cr.h&quot;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#include &quot;btl_openib_ini.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib_frag.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib_proc.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -287,6 +289,158 @@
</span><br>
<span class="quotelev1">&gt;     return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +const char*  
</span><br>
<span class="quotelev1">&gt; btl_openib_get_transport_name(mca_btl_openib_transport_type_t  
</span><br>
<span class="quotelev1">&gt; transport_type)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    switch(transport_type) {
</span><br>
<span class="quotelev1">&gt; +        case MCA_BTL_OPENIB_TRANSPORT_RDMAOE:
</span><br>
<span class="quotelev1">&gt; +            return &quot;MCA_BTL_OPENIB_TRANSPORT_RDMAOE&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        case MCA_BTL_OPENIB_TRANSPORT_IB:
</span><br>
<span class="quotelev1">&gt; +            return &quot;MCA_BTL_OPENIB_TRANSPORT_IB&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        case MCA_BTL_OPENIB_TRANSPORT_IWARP:
</span><br>
<span class="quotelev1">&gt; +            return &quot;MCA_BTL_OPENIB_TRANSPORT_IWARP&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        case MCA_BTL_OPENIB_TRANSPORT_UNKNOWN:
</span><br>
<span class="quotelev1">&gt; +        default:
</span><br>
<span class="quotelev1">&gt; +            return &quot;MCA_BTL_OPENIB_TRANSPORT_UNKNOWN&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<p>Do you want to make a char** array of these names rather than a  
<br>
function?  Doesn't really matter too much to me, but I thought I'd ask.
<br>
<p><span class="quotelev1">&gt; +mca_btl_openib_transport_type_t  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_get_transport_type(mca_btl_openib_module_t* openib_btl)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +#ifdef OMPI_HAVE_RDMAOE
</span><br>
<span class="quotelev1">&gt; +    switch(openib_btl-&gt;ib_port_attr.transport) {
</span><br>
<p>Are you 100% sure that all the other device drivers will fill in  
<br>
ib_port_attr.transport?  That's new in Mellanox's RDMAoE support, right?
<br>
<p><span class="quotelev1">&gt; +        case RDMA_TRANSPORT_IB:
</span><br>
<span class="quotelev1">&gt; +            return MCA_BTL_OPENIB_TRANSPORT_IB;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        case RDMA_TRANSPORT_IWARP:
</span><br>
<span class="quotelev1">&gt; +            return MCA_BTL_OPENIB_TRANSPORT_IWARP;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        case RDMA_TRANSPORT_RDMAOE:
</span><br>
<span class="quotelev1">&gt; +            return MCA_BTL_OPENIB_TRANSPORT_RDMAOE;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        default:
</span><br>
<span class="quotelev1">&gt; +            return MCA_BTL_OPENIB_TRANSPORT_UNKNOWN;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +#ifdef HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE
</span><br>
<span class="quotelev1">&gt; +    switch(openib_btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev1">&gt; +        case IBV_TRANSPORT_IB:
</span><br>
<span class="quotelev1">&gt; +            return MCA_BTL_OPENIB_TRANSPORT_IB;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        case IBV_TRANSPORT_IWARP:
</span><br>
<span class="quotelev1">&gt; +            return MCA_BTL_OPENIB_TRANSPORT_IWARP;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        case IBV_TRANSPORT_UNKNOWN:		
</span><br>
<span class="quotelev1">&gt; +        default:
</span><br>
<span class="quotelev1">&gt; +            return MCA_BTL_OPENIB_TRANSPORT_UNKNOWN;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +    return MCA_BTL_OPENIB_TRANSPORT_IB;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<p>Can you put in some comments explain the above logic -- i.e., the  
<br>
rules about how transport_type and transport (what horrible names :- 
<br>
( ) are filled in, and why you check them in the order that you check  
<br>
them?
<br>
<p><span class="quotelev1">&gt; +static int mca_btl_openib_tune_endpoint(mca_btl_openib_module_t*  
</span><br>
<span class="quotelev1">&gt; openib_btl,
</span><br>
<span class="quotelev1">&gt; +                                             
</span><br>
<span class="quotelev1">&gt; mca_btl_base_endpoint_t* endpoint)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int ret = OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    char* recv_qps = NULL;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    ompi_btl_openib_ini_values_t values;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if(mca_btl_openib_get_transport_type(openib_btl) != endpoint- 
</span><br>
<span class="quotelev2">&gt; &gt;rem_info.rem_transport_type) {
</span><br>
<span class="quotelev1">&gt; +        orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                &quot;conflicting transport types&quot;, true,
</span><br>
<span class="quotelev1">&gt; +                orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                        ibv_get_device_name(openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; +                        (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_id,
</span><br>
<span class="quotelev1">&gt; +                        (openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr).vendor_part_id,
</span><br>
<span class="quotelev1">&gt; +                         
</span><br>
<span class="quotelev1">&gt; btl_openib_get_transport_name 
</span><br>
<span class="quotelev1">&gt; (mca_btl_openib_get_transport_type(openib_btl)),
</span><br>
<span class="quotelev1">&gt; +                        endpoint-&gt;endpoint_proc-&gt;proc_ompi- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_hostname,
</span><br>
<span class="quotelev1">&gt; +                        endpoint-&gt;rem_info.rem_vendor_id,
</span><br>
<span class="quotelev1">&gt; +                        endpoint-&gt;rem_info.rem_vendor_part_id,
</span><br>
<span class="quotelev1">&gt; +                        btl_openib_get_transport_name(endpoint- 
</span><br>
<span class="quotelev2">&gt; &gt;rem_info.rem_transport_type));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERROR;
</span><br>
<p>I *love* the consistent use of show_help().  Bravo!  :-)
<br>
<p>Can you put in some comments about what exactly you're checking for?   
<br>
For example, I see that the abov elogic is checking for if the  
<br>
transport types are different.  How exactly would we get to this point  
<br>
if the transport types are different?  Wouldn't we simply not try to  
<br>
connect them?  I.e., why is this an *error* rather than a &quot;OMPI won't  
<br>
try to connect these endpoints&quot;?
<br>
<p><span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    memset(&amp;values, 0, sizeof(ompi_btl_openib_ini_values_t));
</span><br>
<span class="quotelev1">&gt; +    ret = ompi_btl_openib_ini_query(endpoint-&gt;rem_info.rem_vendor_id,
</span><br>
<span class="quotelev1">&gt; +                          endpoint-&gt;rem_info.rem_vendor_part_id,  
</span><br>
<span class="quotelev1">&gt; &amp;values);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (OMPI_SUCCESS != ret &amp;&amp; OMPI_ERR_NOT_FOUND != ret) {
</span><br>
<span class="quotelev1">&gt; +        orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                       &quot;error in device init&quot;, true,
</span><br>
<span class="quotelev1">&gt; +                       orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                       ibv_get_device_name(openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev));
</span><br>
<span class="quotelev1">&gt; +        return ret;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if(openib_btl-&gt;device-&gt;mtu &lt; endpoint-&gt;rem_info.rem_mtu) {
</span><br>
<span class="quotelev1">&gt; +        endpoint-&gt;rem_info.rem_mtu = openib_btl-&gt;device-&gt;mtu;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    endpoint-&gt;use_eager_rdma = openib_btl-&gt;device-&gt;use_eager_rdma &amp;
</span><br>
<span class="quotelev1">&gt; +                               endpoint-&gt;use_eager_rdma;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Receive queues checking */
</span><br>
<span class="quotelev1">&gt; +    switch(mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev1">&gt; +        case BTL_OPENIB_RQ_SOURCE_MCA:
</span><br>
<span class="quotelev1">&gt; +        case BTL_OPENIB_RQ_SOURCE_MAX:
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        case BTL_OPENIB_RQ_SOURCE_DEVICE_INI:
</span><br>
<span class="quotelev1">&gt; +            if(NULL != values.receive_queues) {
</span><br>
<span class="quotelev1">&gt; +                recv_qps = values.receive_queues;
</span><br>
<span class="quotelev1">&gt; +            } else {
</span><br>
<span class="quotelev1">&gt; +                recv_qps = mca_btl_openib_component.default_recv_qps;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if(0 != strcmp(mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt; +                                                         recv_qps)) {
</span><br>
<span class="quotelev1">&gt; +                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                               &quot;unsupported queues configuration&quot;,  
</span><br>
<span class="quotelev1">&gt; true,
</span><br>
<span class="quotelev1">&gt; +                               orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                               ibv_get_device_name(openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; +                               (openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr).vendor_id,
</span><br>
<span class="quotelev1">&gt; +                               (openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr).vendor_part_id,
</span><br>
<span class="quotelev1">&gt; +                                
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt; +                               endpoint-&gt;endpoint_proc-&gt;proc_ompi- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_hostname,
</span><br>
<span class="quotelev1">&gt; +                               endpoint-&gt;rem_info.rem_vendor_id,
</span><br>
<span class="quotelev1">&gt; +                               endpoint-&gt;rem_info.rem_vendor_part_id,
</span><br>
<span class="quotelev1">&gt; +                               recv_qps);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        case  BTL_OPENIB_RQ_SOURCE_DEFAULT:
</span><br>
<span class="quotelev1">&gt; +            if(NULL != values.receive_queues) {
</span><br>
<span class="quotelev1">&gt; +                if(0 !=  
</span><br>
<span class="quotelev1">&gt; strcmp(mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt; +                                                 
</span><br>
<span class="quotelev1">&gt; values.receive_queues)) {
</span><br>
<span class="quotelev1">&gt; +                     orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                               &quot;unsupported queues configuration&quot;,  
</span><br>
<span class="quotelev1">&gt; true,
</span><br>
<span class="quotelev1">&gt; +                               orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                               ibv_get_device_name(openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; +                               (openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr).vendor_id,
</span><br>
<span class="quotelev1">&gt; +                               (openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr).vendor_part_id,
</span><br>
<span class="quotelev1">&gt; +                                
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt; +                               endpoint-&gt;endpoint_proc-&gt;proc_ompi- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_hostname,
</span><br>
<span class="quotelev1">&gt; +                               endpoint-&gt;rem_info.rem_vendor_id,
</span><br>
<span class="quotelev1">&gt; +                               endpoint-&gt;rem_info.rem_vendor_part_id,
</span><br>
<span class="quotelev1">&gt; +                               values.receive_queues);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                    return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<p>For the latter two cases, is the point that if the rq string values  
<br>
are different, then we simply don't support?  (that's fine, I just  
<br>
want to understand -- some comments here would be helpful...)
<br>
<p><span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  *  add a proc to this btl module
</span><br>
<span class="quotelev1">&gt;  *    creates an endpoint that is setup on the
</span><br>
<span class="quotelev1">&gt; @@ -471,6 +625,10 @@
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +         if(OMPI_SUCCESS !=  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_tune_endpoint(openib_btl, endpoint)) {
</span><br>
<span class="quotelev1">&gt; +            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<p>Don't you need to release the endpoint and the lock before returning?
<br>
<p><span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         endpoint-&gt;index = opal_pointer_array_add(openib_btl-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;endpoints, (void*)endpoint);
</span><br>
<span class="quotelev1">&gt;         if( 0 &gt; endpoint-&gt;index ) {
</span><br>
<span class="quotelev1">&gt;             OBJ_RELEASE(endpoint);
</span><br>
<span class="quotelev1">&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/btl/openib/btl_openib.h	Fri Nov 06 12:00:16 2009 -0800
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/btl/openib/btl_openib.h	Mon Nov 16 17:41:48 2009 +0200
</span><br>
<span class="quotelev1">&gt; @@ -75,6 +75,13 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef enum {
</span><br>
<span class="quotelev1">&gt; +    MCA_BTL_OPENIB_TRANSPORT_UNKNOWN    = -1,
</span><br>
<p>Any particular reason to make this -1 instead of 0?
<br>
<p><span class="quotelev1">&gt; +    MCA_BTL_OPENIB_TRANSPORT_IB    = 0,
</span><br>
<span class="quotelev1">&gt; +    MCA_BTL_OPENIB_TRANSPORT_IWARP,
</span><br>
<span class="quotelev1">&gt; +    MCA_BTL_OPENIB_TRANSPORT_RDMAOE
</span><br>
<span class="quotelev1">&gt; +} mca_btl_openib_transport_type_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +typedef enum {
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_OPENIB_PP_QP,
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_OPENIB_SRQ_QP,
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_OPENIB_XRC_QP
</span><br>
<span class="quotelev1">&gt; @@ -254,6 +261,8 @@
</span><br>
<span class="quotelev1">&gt;     ompi_free_list_t recv_user_free;
</span><br>
<span class="quotelev1">&gt;     /**&lt; frags for coalesced massages */
</span><br>
<span class="quotelev1">&gt;     ompi_free_list_t send_free_coalesced;
</span><br>
<span class="quotelev1">&gt; +    /**&lt; Default receive queues */
</span><br>
<span class="quotelev1">&gt; +    char* default_recv_qps;
</span><br>
<span class="quotelev1">&gt; }; typedef struct mca_btl_openib_component_t  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MODULE_DECLSPEC extern mca_btl_openib_component_t  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component;
</span><br>
<span class="quotelev1">&gt; @@ -272,6 +281,12 @@
</span><br>
<span class="quotelev1">&gt;     uint16_t apm_lid;
</span><br>
<span class="quotelev1">&gt;     /** The MTU used by this port */
</span><br>
<span class="quotelev1">&gt;     uint8_t mtu;
</span><br>
<span class="quotelev1">&gt; +    /** vendor id define device type and tuning */
</span><br>
<span class="quotelev1">&gt; +    uint32_t vendor_id;
</span><br>
<span class="quotelev1">&gt; +    /** vendor part id define device type and tuning */
</span><br>
<span class="quotelev1">&gt; +    uint32_t vendor_part_id;
</span><br>
<span class="quotelev1">&gt; +    /** Transport type of remote port */
</span><br>
<span class="quotelev1">&gt; +    uint8_t transport_type;
</span><br>
<p>I see that the rq string is not sent in the modex message (i.e., this  
<br>
is not a new problem).  I think the assumption here is that when you  
<br>
look up and strcmp the rq strings, you assume that either the value is  
<br>
found in the ini file or the value is obtained from an MCA param that  
<br>
is uniform on all procs.
<br>
<p>But what if the value is not uniform for all procs?  (this is possible)
<br>
<p>I don't think you have to solve this problem in this patch, but could  
<br>
you put a comment in here somewhere indicating that this is a problem  
<br>
that we do not [yet] solve?  (mebbe this can be solved in ofacm...?)
<br>
<p><span class="quotelev1">&gt;     /** Dummy field used to calculate the real length */
</span><br>
<span class="quotelev1">&gt;     uint8_t end;
</span><br>
<span class="quotelev1">&gt; } mca_btl_openib_modex_message_t;
</span><br>
<span class="quotelev1">&gt; @@ -633,6 +648,18 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int mca_btl_openib_post_srr(mca_btl_openib_module_t* openib_btl,  
</span><br>
<span class="quotelev1">&gt; const int qp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * Get a transport name of btl by its transport type.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +const char*  
</span><br>
<span class="quotelev1">&gt; btl_openib_get_transport_name(mca_btl_openib_transport_type_t  
</span><br>
<span class="quotelev1">&gt; transport_type);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * Get a transport type of btl.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +mca_btl_openib_transport_type_t  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_get_transport_type(mca_btl_openib_module_t*  
</span><br>
<span class="quotelev1">&gt; openib_btl);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; static inline int qp_cq_prio(const int qp)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     if(0 == qp)
</span><br>
<span class="quotelev1">&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/btl/openib/btl_openib_component.c	Fri Nov 06 12:00:16  
</span><br>
<span class="quotelev1">&gt; 2009 -0800
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/btl/openib/btl_openib_component.c	Mon Nov 16 17:41:48  
</span><br>
<span class="quotelev1">&gt; 2009 +0200
</span><br>
<span class="quotelev1">&gt; @@ -143,6 +143,7 @@
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;mca_btl_openib_component.devices,  
</span><br>
<span class="quotelev1">&gt; opal_pointer_array_t);
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_component.devices_count = 0;
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_component.cpc_explicitly_defined = false;
</span><br>
<span class="quotelev1">&gt; +    mca_btl_openib_component.default_recv_qps = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* initialize objects */
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;mca_btl_openib_component.ib_procs, opal_list_t);
</span><br>
<span class="quotelev1">&gt; @@ -196,6 +197,10 @@
</span><br>
<span class="quotelev1">&gt;         free(mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != mca_btl_openib_component.default_recv_qps) {
</span><br>
<span class="quotelev1">&gt; +        free(mca_btl_openib_component.default_recv_qps);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -303,6 +308,16 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* Pack the modex common message struct.  */
</span><br>
<span class="quotelev1">&gt;         size = modex_message_size;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        (mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev2">&gt; &gt;port_info).vendor_id =
</span><br>
<span class="quotelev1">&gt; +            (mca_btl_openib_component.openib_btls[i]-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr).vendor_id;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        (mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev2">&gt; &gt;port_info).vendor_part_id =
</span><br>
<span class="quotelev1">&gt; +            (mca_btl_openib_component.openib_btls[i]-&gt;device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr).vendor_part_id;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        (mca_btl_openib_component.openib_btls[i]- 
</span><br>
<span class="quotelev2">&gt; &gt;port_info).transport_type =
</span><br>
<span class="quotelev1">&gt; +             
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_get_transport_type 
</span><br>
<span class="quotelev1">&gt; (mca_btl_openib_component.openib_btls[i]);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         memcpy(offset,
</span><br>
<span class="quotelev1">&gt;                &amp;(mca_btl_openib_component.openib_btls[i]-&gt;port_info),
</span><br>
<span class="quotelev1">&gt;                size);
</span><br>
<span class="quotelev1">&gt; @@ -1657,45 +1672,6 @@
</span><br>
<span class="quotelev1">&gt;         ibv_destroy_cq(cq);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* If the user specified btl_openib_receive_queues MCA param, it
</span><br>
<span class="quotelev1">&gt; -       overrides all device INI params */
</span><br>
<span class="quotelev1">&gt; -    if (BTL_OPENIB_RQ_SOURCE_MCA !=
</span><br>
<span class="quotelev1">&gt; -        mca_btl_openib_component.receive_queues_source &amp;&amp;
</span><br>
<span class="quotelev1">&gt; -        NULL != values.receive_queues) {
</span><br>
<span class="quotelev1">&gt; -        /* If a prior device's INI values set a different value for
</span><br>
<span class="quotelev1">&gt; -           receive_queues, this is unsupported (see
</span><br>
<span class="quotelev1">&gt; -           <a href="https://svn.open-mpi.org/trac/ompi/ticket/1285">https://svn.open-mpi.org/trac/ompi/ticket/1285</a>) */
</span><br>
<span class="quotelev1">&gt; -        if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev1">&gt; -            if (0 != strcmp(values.receive_queues,
</span><br>
<span class="quotelev1">&gt; -                             
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.receive_queues)) {
</span><br>
<span class="quotelev1">&gt; -                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                               &quot;conflicting receive_queues&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                               orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; -                               ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                               device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev1">&gt; -                               device-&gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev1">&gt; -                               values.receive_queues,
</span><br>
<span class="quotelev1">&gt; -                                
</span><br>
<span class="quotelev1">&gt; ibv_get_device_name(receive_queues_device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; -                               receive_queues_device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev1">&gt; -                               receive_queues_device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev1">&gt; -                                
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt; -                               opal_install_dirs.pkgdatadir);
</span><br>
<span class="quotelev1">&gt; -                ret = OMPI_ERR_RESOURCE_BUSY;
</span><br>
<span class="quotelev1">&gt; -                goto error;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -        } else {
</span><br>
<span class="quotelev1">&gt; -            if (NULL != mca_btl_openib_component.receive_queues) {
</span><br>
<span class="quotelev1">&gt; -                free(mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            receive_queues_device = device;
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_component.receive_queues =
</span><br>
<span class="quotelev1">&gt; -                strdup(values.receive_queues);
</span><br>
<span class="quotelev1">&gt; -            mca_btl_openib_component.receive_queues_source =
</span><br>
<span class="quotelev1">&gt; -                BTL_OPENIB_RQ_SOURCE_DEVICE_INI;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     /* Should we use RDMA for short / eager messages?  First check MCA
</span><br>
<span class="quotelev1">&gt;        param, then check INI file values. */
</span><br>
<span class="quotelev1">&gt;     if (mca_btl_openib_component.use_eager_rdma &gt;= 0) {
</span><br>
<span class="quotelev1">&gt; @@ -1795,6 +1771,45 @@
</span><br>
<span class="quotelev1">&gt;                            &quot;apm not enough ports&quot;, true);
</span><br>
<span class="quotelev1">&gt;             mca_btl_openib_component.apm_ports = 0;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* If the user specified btl_openib_receive_queues MCA  
</span><br>
<span class="quotelev1">&gt; param, it
</span><br>
<span class="quotelev1">&gt; +           overrides all device INI params */
</span><br>
<span class="quotelev1">&gt; +        if (BTL_OPENIB_RQ_SOURCE_MCA !=
</span><br>
<span class="quotelev1">&gt; +            mca_btl_openib_component.receive_queues_source &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +            NULL != values.receive_queues) {
</span><br>
<span class="quotelev1">&gt; +            /* If a prior device's INI values set a different value  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; +               receive_queues, this is unsupported (see
</span><br>
<span class="quotelev1">&gt; +               <a href="https://svn.open-mpi.org/trac/ompi/ticket/1285">https://svn.open-mpi.org/trac/ompi/ticket/1285</a>) */
</span><br>
<span class="quotelev1">&gt; +            if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
</span><br>
<span class="quotelev1">&gt; +                mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev1">&gt; +                if (0 != strcmp(values.receive_queues,
</span><br>
<span class="quotelev1">&gt; +                                 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.receive_queues)) {
</span><br>
<span class="quotelev1">&gt; +                    orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                                   &quot;conflicting receive_queues&quot;,  
</span><br>
<span class="quotelev1">&gt; true,
</span><br>
<span class="quotelev1">&gt; +                                   orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                                   ibv_get_device_name(device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; +                                   device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev1">&gt; +                                   device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev1">&gt; +                                   values.receive_queues,
</span><br>
<span class="quotelev1">&gt; +                                    
</span><br>
<span class="quotelev1">&gt; ibv_get_device_name(receive_queues_device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; +                                   receive_queues_device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev1">&gt; +                                   receive_queues_device- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev1">&gt; +                                    
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt; +                                   opal_install_dirs.pkgdatadir);
</span><br>
<span class="quotelev1">&gt; +                    ret = OMPI_ERR_RESOURCE_BUSY;
</span><br>
<span class="quotelev1">&gt; +                    goto error;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +            } else {
</span><br>
<span class="quotelev1">&gt; +                if (NULL !=  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.receive_queues) {
</span><br>
<span class="quotelev1">&gt; +                    free(mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                receive_queues_device = device;
</span><br>
<span class="quotelev1">&gt; +                mca_btl_openib_component.receive_queues =
</span><br>
<span class="quotelev1">&gt; +                    strdup(values.receive_queues);
</span><br>
<span class="quotelev1">&gt; +                mca_btl_openib_component.receive_queues_source =
</span><br>
<span class="quotelev1">&gt; +                    BTL_OPENIB_RQ_SOURCE_DEVICE_INI;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<p><p>Can you explain why you moved the above logic down further in the init  
<br>
sequence?  If something goes wrong and we abort, there's more to  
<br>
cleanup by the time we get all the way down here.  If there's a reason  
<br>
to move this stuff down, please put it in a comment.
<br>
<p>I love comments.  :-)
<br>
<p><span class="quotelev1">&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_endpoint.c
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/btl/openib/btl_openib_endpoint.c	Fri Nov 06 12:00:16  
</span><br>
<span class="quotelev1">&gt; 2009 -0800
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/btl/openib/btl_openib_endpoint.c	Mon Nov 16 17:41:48  
</span><br>
<span class="quotelev1">&gt; 2009 +0200
</span><br>
<span class="quotelev1">&gt; @@ -310,6 +310,11 @@
</span><br>
<span class="quotelev1">&gt;                 ep-&gt;rem_info.rem_subnet_id,
</span><br>
<span class="quotelev1">&gt;                 ep-&gt;rem_info.rem_mtu);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    ep-&gt;rem_info.rem_vendor_id = (remote_proc_info- 
</span><br>
<span class="quotelev2">&gt; &gt;pm_port_info).vendor_id;
</span><br>
<span class="quotelev1">&gt; +    ep-&gt;rem_info.rem_vendor_part_id = (remote_proc_info- 
</span><br>
<span class="quotelev2">&gt; &gt;pm_port_info).vendor_part_id;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    ep-&gt;rem_info.rem_transport_type = (remote_proc_info- 
</span><br>
<span class="quotelev2">&gt; &gt;pm_port_info).transport_type;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     for (qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
</span><br>
<span class="quotelev1">&gt;         endpoint_init_qp(ep, qp);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_endpoint.h
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/btl/openib/btl_openib_endpoint.h	Fri Nov 06 12:00:16  
</span><br>
<span class="quotelev1">&gt; 2009 -0800
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/btl/openib/btl_openib_endpoint.h	Mon Nov 16 17:41:48  
</span><br>
<span class="quotelev1">&gt; 2009 +0200
</span><br>
<span class="quotelev1">&gt; @@ -94,6 +94,12 @@
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_rem_qp_info_t *rem_qps;
</span><br>
<span class="quotelev1">&gt;     /* Remote xrc_srq info, used only with XRC connections */
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_rem_srq_info_t *rem_srqs;
</span><br>
<span class="quotelev1">&gt; +    /* Vendor id of remote HCA */
</span><br>
<span class="quotelev1">&gt; +    uint32_t rem_vendor_id;
</span><br>
<span class="quotelev1">&gt; +    /* Vendor part id of remote HCA */
</span><br>
<span class="quotelev1">&gt; +    uint32_t rem_vendor_part_id;
</span><br>
<span class="quotelev1">&gt; +    /* Transport type of remote port */
</span><br>
<span class="quotelev1">&gt; +    mca_btl_openib_transport_type_t rem_transport_type;
</span><br>
<span class="quotelev1">&gt; } mca_btl_openib_rem_info_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/btl/openib/btl_openib_mca.c	Fri Nov 06 12:00:16 2009  
</span><br>
<span class="quotelev1">&gt; -0800
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/btl/openib/btl_openib_mca.c	Mon Nov 16 17:41:48 2009  
</span><br>
<span class="quotelev1">&gt; +0200
</span><br>
<span class="quotelev1">&gt; @@ -10,7 +10,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2006-2008 Mellanox Technologies. All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2006-2009 Mellanox Technologies. All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All  
</span><br>
<span class="quotelev1">&gt; rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2006-2007 Voltaire All rights reserved.
</span><br>
<span class="quotelev1">&gt; @@ -526,6 +526,13 @@
</span><br>
<span class="quotelev1">&gt;             mid_qp_size,
</span><br>
<span class="quotelev1">&gt;             (uint32_t)mca_btl_openib_module.super.btl_eager_limit,
</span><br>
<span class="quotelev1">&gt;             (uint32_t)mca_btl_openib_module.super.btl_max_send_size);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mca_btl_openib_component.default_recv_qps = strdup(default_qps);
</span><br>
<span class="quotelev1">&gt; +    if(NULL == mca_btl_openib_component.default_recv_qps) {
</span><br>
<span class="quotelev1">&gt; +        BTL_ERROR((&quot;Unable to allocate memory for default receive  
</span><br>
<span class="quotelev1">&gt; queues string.\n&quot;));
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<p>...and you were doing so well with show_help() up above.  :-)
<br>
<p><span class="quotelev1">&gt;     CHECK(reg_string(&quot;receive_queues&quot;, NULL,
</span><br>
<span class="quotelev1">&gt;                      &quot;Colon-delimited, comma delimited list of  
</span><br>
<span class="quotelev1">&gt; receive queues: P,4096,8,6,4:P,32768,8,6,4&quot;,
</span><br>
<span class="quotelev1">&gt;                      default_qps,  
</span><br>
<span class="quotelev1">&gt; &amp;mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/help-mpi-btl-openib.txt
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Fri Nov 06  
</span><br>
<span class="quotelev1">&gt; 12:00:16 2009 -0800
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Mon Nov 16  
</span><br>
<span class="quotelev1">&gt; 17:41:48 2009 +0200
</span><br>
<span class="quotelev1">&gt; @@ -11,7 +11,7 @@
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2004-2006 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; #                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; -# Copyright (c) 2007-2008 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007-2009 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; @@ -590,3 +590,28 @@
</span><br>
<span class="quotelev1">&gt;   Local host: %s
</span><br>
<span class="quotelev1">&gt;   Value:      %s
</span><br>
<span class="quotelev1">&gt;   Message:    %s
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +[unsupported queues configuration]
</span><br>
<span class="quotelev1">&gt; +The remote and local queues were automatically configured for  
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev1">&gt; +devices and as result Open MPI failed to find optimal configuration.
</span><br>
<span class="quotelev1">&gt; +Please use MCA parameters in order define Open Fabrics queues  
</span><br>
<span class="quotelev1">&gt; configuration.
</span><br>
<p>What exactly does this message mean?  Is it displayed when the rq  
<br>
string values of two endpoints do not match?  If so, I suggest the  
<br>
following text:
<br>
<p>The Open MPI receive queue configuration for the OpenFabrics devices  
<br>
on two nodes are incompatible, meaning that MPI processes on two  
<br>
specific nodes were unable to communicate with each other.  This  
<br>
generally happens when you are using OpenFabrics devices from  
<br>
different vendors on the same network.  You should be able to use the  
<br>
mca_btl_openib_receive_queues MCA parameter to set a uniform receive  
<br>
queue configuration for all the devices in the MPI job, and therefore  
<br>
be able to run successfully.
<br>
<p>The message below indicates the *first* two processes in this MPI job  
<br>
that failed to connect to each other because of mismatched receive  
<br>
queue configuration:
<br>
<p><span class="quotelev1">&gt; +  Local host:       %s
</span><br>
<span class="quotelev1">&gt; +  Local adapter:    %s (vendor 0x%x, part ID %d)
</span><br>
<span class="quotelev1">&gt; +  Local queues:     %s
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Remote host:      %s
</span><br>
<span class="quotelev1">&gt; +  Remote adapter:   remote adapter (vendor 0x%x, part ID %d)
</span><br>
<p>Is the second &quot;remote adapter&quot; redundant?
<br>
<p><span class="quotelev1">&gt; +  Remote queues:    %s
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +[conflicting transport types]
</span><br>
<span class="quotelev1">&gt; +Open MPI detected two different OpenFabrics transport types in the  
</span><br>
<span class="quotelev1">&gt; same Infiniband network.
</span><br>
<span class="quotelev1">&gt; +Such mixed network trasport configuration is not supported by Open  
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<p>Pasha tried to explain this to me on IM, but I don't think I quite  
<br>
understand.  Does this happen when an IB port has the same subnet ID  
<br>
as an RDMAoE port, but they're actually on different networks?  (they  
<br>
*must* be on two different physical networks...)
<br>
<p><span class="quotelev1">&gt; +  Local host:            %s
</span><br>
<span class="quotelev1">&gt; +  Local adapter:         %s (vendor 0x%x, part ID %d)
</span><br>
<span class="quotelev1">&gt; +  Local transport type:  %s
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Remote host:           %s
</span><br>
<span class="quotelev1">&gt; +  Remote Adapter:        remote adapter (vendor 0x%x, part ID %d)
</span><br>
<p>Redundant &quot;recmote adapter&quot; comment.
<br>
<p><span class="quotelev1">&gt; +  Remote transport type: %s
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7147.php">George Bosilca: "Re: [OMPI devel] progress threads"</a>
<li><strong>Previous message:</strong> <a href="7145.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>In reply to:</strong> <a href="7120.php">Vasily Philipov: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7156.php">Lenny Verkhovsky: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<li><strong>Reply:</strong> <a href="7156.php">Lenny Verkhovsky: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
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
