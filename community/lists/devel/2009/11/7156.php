<?
$subject_val = "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 29 02:59:51 2009" -->
<!-- isoreceived="20091129075951" -->
<!-- sent="Sun, 29 Nov 2009 09:59:45 +0200" -->
<!-- isosent="20091129075945" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport." -->
<!-- id="453d39990911282359k11333e3es43c28f04e5bed787_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8F823CD4-7E18-4020-979B-EBD4EF6AFF2C_at_cisco.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-29 02:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7157.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>Previous message:</strong> <a href="7155.php">George Bosilca: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>In reply to:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are currently out of heterogeneous cluster and can't really check this
<br>
patch.
<br>
Lenny.
<br>
<p>On Wed, Nov 25, 2009 at 12:14 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 16, 2009, at 10:46 AM, Vasily Philipov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Here is new patch for heterogeneous clusters supporting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Voltaire / IBM / Sun -- please review and test this patch.  You guys care
</span><br>
<span class="quotelev1">&gt; about this stuff more than I do.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My comments below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib.c  Fri Nov 06 12:00:16 2009 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib.c  Mon Nov 16 17:41:48 2009 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -39,6 +39,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/runtime/ompi_cr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;btl_openib_ini.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;btl_openib.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;btl_openib_frag.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;btl_openib_proc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -287,6 +289,158 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return rc;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +const char* btl_openib_get_transport_name(mca_btl_openib_transport_type_t
</span><br>
<span class="quotelev2">&gt;&gt; transport_type)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    switch(transport_type) {
</span><br>
<span class="quotelev2">&gt;&gt; +        case MCA_BTL_OPENIB_TRANSPORT_RDMAOE:
</span><br>
<span class="quotelev2">&gt;&gt; +            return &quot;MCA_BTL_OPENIB_TRANSPORT_RDMAOE&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case MCA_BTL_OPENIB_TRANSPORT_IB:
</span><br>
<span class="quotelev2">&gt;&gt; +            return &quot;MCA_BTL_OPENIB_TRANSPORT_IB&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case MCA_BTL_OPENIB_TRANSPORT_IWARP:
</span><br>
<span class="quotelev2">&gt;&gt; +            return &quot;MCA_BTL_OPENIB_TRANSPORT_IWARP&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case MCA_BTL_OPENIB_TRANSPORT_UNKNOWN:
</span><br>
<span class="quotelev2">&gt;&gt; +        default:
</span><br>
<span class="quotelev2">&gt;&gt; +            return &quot;MCA_BTL_OPENIB_TRANSPORT_UNKNOWN&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you want to make a char** array of these names rather than a function?
</span><br>
<span class="quotelev1">&gt;  Doesn't really matter too much to me, but I thought I'd ask.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +mca_btl_openib_transport_type_t
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_get_transport_type(mca_btl_openib_module_t* openib_btl)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef OMPI_HAVE_RDMAOE
</span><br>
<span class="quotelev2">&gt;&gt; +    switch(openib_btl-&gt;ib_port_attr.transport) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you 100% sure that all the other device drivers will fill in
</span><br>
<span class="quotelev1">&gt; ib_port_attr.transport?  That's new in Mellanox's RDMAoE support, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +        case RDMA_TRANSPORT_IB:
</span><br>
<span class="quotelev2">&gt;&gt; +            return MCA_BTL_OPENIB_TRANSPORT_IB;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case RDMA_TRANSPORT_IWARP:
</span><br>
<span class="quotelev2">&gt;&gt; +            return MCA_BTL_OPENIB_TRANSPORT_IWARP;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case RDMA_TRANSPORT_RDMAOE:
</span><br>
<span class="quotelev2">&gt;&gt; +            return MCA_BTL_OPENIB_TRANSPORT_RDMAOE;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        default:
</span><br>
<span class="quotelev2">&gt;&gt; +            return MCA_BTL_OPENIB_TRANSPORT_UNKNOWN;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE
</span><br>
<span class="quotelev2">&gt;&gt; +    switch(openib_btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev2">&gt;&gt; +        case IBV_TRANSPORT_IB:
</span><br>
<span class="quotelev2">&gt;&gt; +            return MCA_BTL_OPENIB_TRANSPORT_IB;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case IBV_TRANSPORT_IWARP:
</span><br>
<span class="quotelev2">&gt;&gt; +            return MCA_BTL_OPENIB_TRANSPORT_IWARP;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case IBV_TRANSPORT_UNKNOWN:
</span><br>
<span class="quotelev2">&gt;&gt; +        default:
</span><br>
<span class="quotelev2">&gt;&gt; +            return MCA_BTL_OPENIB_TRANSPORT_UNKNOWN;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +    return MCA_BTL_OPENIB_TRANSPORT_IB;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you put in some comments explain the above logic -- i.e., the rules
</span><br>
<span class="quotelev1">&gt; about how transport_type and transport (what horrible names :-( ) are filled
</span><br>
<span class="quotelev1">&gt; in, and why you check them in the order that you check them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +static int mca_btl_openib_tune_endpoint(mca_btl_openib_module_t*
</span><br>
<span class="quotelev2">&gt;&gt; openib_btl,
</span><br>
<span class="quotelev2">&gt;&gt; +                                            mca_btl_base_endpoint_t*
</span><br>
<span class="quotelev2">&gt;&gt; endpoint)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    int ret = OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    char* recv_qps = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    ompi_btl_openib_ini_values_t values;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if(mca_btl_openib_get_transport_type(openib_btl) !=
</span><br>
<span class="quotelev2">&gt;&gt; endpoint-&gt;rem_info.rem_transport_type) {
</span><br>
<span class="quotelev2">&gt;&gt; +        orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                &quot;conflicting transport types&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; +                orte_process_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt; +                        ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt;&gt; +                        (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                        (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  btl_openib_get_transport_name(mca_btl_openib_get_transport_type(openib_btl)),
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
</span><br>
<span class="quotelev2">&gt;&gt; +                        endpoint-&gt;rem_info.rem_vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                        endpoint-&gt;rem_info.rem_vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  btl_openib_get_transport_name(endpoint-&gt;rem_info.rem_transport_type));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I *love* the consistent use of show_help().  Bravo!  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you put in some comments about what exactly you're checking for?  For
</span><br>
<span class="quotelev1">&gt; example, I see that the abov elogic is checking for if the transport types
</span><br>
<span class="quotelev1">&gt; are different.  How exactly would we get to this point if the transport
</span><br>
<span class="quotelev1">&gt; types are different?  Wouldn't we simply not try to connect them?  I.e., why
</span><br>
<span class="quotelev1">&gt; is this an *error* rather than a &quot;OMPI won't try to connect these
</span><br>
<span class="quotelev1">&gt; endpoints&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    memset(&amp;values, 0, sizeof(ompi_btl_openib_ini_values_t));
</span><br>
<span class="quotelev2">&gt;&gt; +    ret = ompi_btl_openib_ini_query(endpoint-&gt;rem_info.rem_vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                          endpoint-&gt;rem_info.rem_vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;values);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (OMPI_SUCCESS != ret &amp;&amp; OMPI_ERR_NOT_FOUND != ret) {
</span><br>
<span class="quotelev2">&gt;&gt; +        orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                       &quot;error in device init&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; +                       orte_process_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt; +                       ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev));
</span><br>
<span class="quotelev2">&gt;&gt; +        return ret;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if(openib_btl-&gt;device-&gt;mtu &lt; endpoint-&gt;rem_info.rem_mtu) {
</span><br>
<span class="quotelev2">&gt;&gt; +        endpoint-&gt;rem_info.rem_mtu = openib_btl-&gt;device-&gt;mtu;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    endpoint-&gt;use_eager_rdma = openib_btl-&gt;device-&gt;use_eager_rdma &amp;
</span><br>
<span class="quotelev2">&gt;&gt; +                               endpoint-&gt;use_eager_rdma;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Receive queues checking */
</span><br>
<span class="quotelev2">&gt;&gt; +    switch(mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev2">&gt;&gt; +        case BTL_OPENIB_RQ_SOURCE_MCA:
</span><br>
<span class="quotelev2">&gt;&gt; +        case BTL_OPENIB_RQ_SOURCE_MAX:
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case BTL_OPENIB_RQ_SOURCE_DEVICE_INI:
</span><br>
<span class="quotelev2">&gt;&gt; +            if(NULL != values.receive_queues) {
</span><br>
<span class="quotelev2">&gt;&gt; +                recv_qps = values.receive_queues;
</span><br>
<span class="quotelev2">&gt;&gt; +            } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                recv_qps = mca_btl_openib_component.default_recv_qps;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            if(0 != strcmp(mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                         recv_qps)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                               &quot;unsupported queues configuration&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; +                               orte_process_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                               mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
</span><br>
<span class="quotelev2">&gt;&gt; +                               endpoint-&gt;rem_info.rem_vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                               endpoint-&gt;rem_info.rem_vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                               recv_qps);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        case  BTL_OPENIB_RQ_SOURCE_DEFAULT:
</span><br>
<span class="quotelev2">&gt;&gt; +            if(NULL != values.receive_queues) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if(0 != strcmp(mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                values.receive_queues)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                     orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                               &quot;unsupported queues configuration&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; +                               orte_process_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; (openib_btl-&gt;device-&gt;ib_dev_attr).vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                               mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; endpoint-&gt;endpoint_proc-&gt;proc_ompi-&gt;proc_hostname,
</span><br>
<span class="quotelev2">&gt;&gt; +                               endpoint-&gt;rem_info.rem_vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                               endpoint-&gt;rem_info.rem_vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                               values.receive_queues);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                    return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the latter two cases, is the point that if the rq string values are
</span><br>
<span class="quotelev1">&gt; different, then we simply don't support?  (that's fine, I just want to
</span><br>
<span class="quotelev1">&gt; understand -- some comments here would be helpful...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt;  *  add a proc to this btl module
</span><br>
<span class="quotelev2">&gt;&gt;  *    creates an endpoint that is setup on the
</span><br>
<span class="quotelev2">&gt;&gt; @@ -471,6 +625,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;            continue;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +         if(OMPI_SUCCESS != mca_btl_openib_tune_endpoint(openib_btl,
</span><br>
<span class="quotelev2">&gt;&gt; endpoint)) {
</span><br>
<span class="quotelev2">&gt;&gt; +            return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't you need to release the endpoint and the lock before returning?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +
</span><br>
<span class="quotelev2">&gt;&gt;        endpoint-&gt;index =
</span><br>
<span class="quotelev2">&gt;&gt; opal_pointer_array_add(openib_btl-&gt;device-&gt;endpoints, (void*)endpoint);
</span><br>
<span class="quotelev2">&gt;&gt;        if( 0 &gt; endpoint-&gt;index ) {
</span><br>
<span class="quotelev2">&gt;&gt;            OBJ_RELEASE(endpoint);
</span><br>
<span class="quotelev2">&gt;&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib.h  Fri Nov 06 12:00:16 2009 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib.h  Mon Nov 16 17:41:48 2009 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -75,6 +75,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; typedef enum {
</span><br>
<span class="quotelev2">&gt;&gt; +    MCA_BTL_OPENIB_TRANSPORT_UNKNOWN    = -1,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any particular reason to make this -1 instead of 0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +    MCA_BTL_OPENIB_TRANSPORT_IB    = 0,
</span><br>
<span class="quotelev2">&gt;&gt; +    MCA_BTL_OPENIB_TRANSPORT_IWARP,
</span><br>
<span class="quotelev2">&gt;&gt; +    MCA_BTL_OPENIB_TRANSPORT_RDMAOE
</span><br>
<span class="quotelev2">&gt;&gt; +} mca_btl_openib_transport_type_t;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +typedef enum {
</span><br>
<span class="quotelev2">&gt;&gt;    MCA_BTL_OPENIB_PP_QP,
</span><br>
<span class="quotelev2">&gt;&gt;    MCA_BTL_OPENIB_SRQ_QP,
</span><br>
<span class="quotelev2">&gt;&gt;    MCA_BTL_OPENIB_XRC_QP
</span><br>
<span class="quotelev2">&gt;&gt; @@ -254,6 +261,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;    ompi_free_list_t recv_user_free;
</span><br>
<span class="quotelev2">&gt;&gt;    /**&lt; frags for coalesced massages */
</span><br>
<span class="quotelev2">&gt;&gt;    ompi_free_list_t send_free_coalesced;
</span><br>
<span class="quotelev2">&gt;&gt; +    /**&lt; Default receive queues */
</span><br>
<span class="quotelev2">&gt;&gt; +    char* default_recv_qps;
</span><br>
<span class="quotelev2">&gt;&gt; }; typedef struct mca_btl_openib_component_t mca_btl_openib_component_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MODULE_DECLSPEC extern mca_btl_openib_component_t
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_component;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -272,6 +281,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;    uint16_t apm_lid;
</span><br>
<span class="quotelev2">&gt;&gt;    /** The MTU used by this port */
</span><br>
<span class="quotelev2">&gt;&gt;    uint8_t mtu;
</span><br>
<span class="quotelev2">&gt;&gt; +    /** vendor id define device type and tuning */
</span><br>
<span class="quotelev2">&gt;&gt; +    uint32_t vendor_id;
</span><br>
<span class="quotelev2">&gt;&gt; +    /** vendor part id define device type and tuning */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    uint32_t vendor_part_id;
</span><br>
<span class="quotelev2">&gt;&gt; +    /** Transport type of remote port */
</span><br>
<span class="quotelev2">&gt;&gt; +    uint8_t transport_type;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see that the rq string is not sent in the modex message (i.e., this is
</span><br>
<span class="quotelev1">&gt; not a new problem).  I think the assumption here is that when you look up
</span><br>
<span class="quotelev1">&gt; and strcmp the rq strings, you assume that either the value is found in the
</span><br>
<span class="quotelev1">&gt; ini file or the value is obtained from an MCA param that is uniform on all
</span><br>
<span class="quotelev1">&gt; procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But what if the value is not uniform for all procs?  (this is possible)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think you have to solve this problem in this patch, but could you
</span><br>
<span class="quotelev1">&gt; put a comment in here somewhere indicating that this is a problem that we do
</span><br>
<span class="quotelev1">&gt; not [yet] solve?  (mebbe this can be solved in ofacm...?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /** Dummy field used to calculate the real length */
</span><br>
<span class="quotelev2">&gt;&gt;    uint8_t end;
</span><br>
<span class="quotelev2">&gt;&gt; } mca_btl_openib_modex_message_t;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -633,6 +648,18 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int mca_btl_openib_post_srr(mca_btl_openib_module_t* openib_btl, const int
</span><br>
<span class="quotelev2">&gt;&gt; qp);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +/**
</span><br>
<span class="quotelev2">&gt;&gt; + * Get a transport name of btl by its transport type.
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +const char* btl_openib_get_transport_name(mca_btl_openib_transport_type_t
</span><br>
<span class="quotelev2">&gt;&gt; transport_type);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/**
</span><br>
<span class="quotelev2">&gt;&gt; + * Get a transport type of btl.
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +mca_btl_openib_transport_type_t
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_get_transport_type(mca_btl_openib_module_t* openib_btl);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; static inline int qp_cq_prio(const int qp)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    if(0 == qp)
</span><br>
<span class="quotelev2">&gt;&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib_component.c        Fri Nov 06
</span><br>
<span class="quotelev2">&gt;&gt; 12:00:16 2009 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib_component.c        Mon Nov 16
</span><br>
<span class="quotelev2">&gt;&gt; 17:41:48 2009 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -143,6 +143,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_CONSTRUCT(&amp;mca_btl_openib_component.devices, opal_pointer_array_t);
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_openib_component.devices_count = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_openib_component.cpc_explicitly_defined = false;
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_btl_openib_component.default_recv_qps = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* initialize objects */
</span><br>
<span class="quotelev2">&gt;&gt;    OBJ_CONSTRUCT(&amp;mca_btl_openib_component.ib_procs, opal_list_t);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -196,6 +197,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;        free(mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL != mca_btl_openib_component.default_recv_qps) {
</span><br>
<span class="quotelev2">&gt;&gt; +        free(mca_btl_openib_component.default_recv_qps);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    return rc;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -303,6 +308,16 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        /* Pack the modex common message struct.  */
</span><br>
<span class="quotelev2">&gt;&gt;        size = modex_message_size;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        (mca_btl_openib_component.openib_btls[i]-&gt;port_info).vendor_id =
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  (mca_btl_openib_component.openib_btls[i]-&gt;device-&gt;ib_dev_attr).vendor_id;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  (mca_btl_openib_component.openib_btls[i]-&gt;port_info).vendor_part_id =
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  (mca_btl_openib_component.openib_btls[i]-&gt;device-&gt;ib_dev_attr).vendor_part_id;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  (mca_btl_openib_component.openib_btls[i]-&gt;port_info).transport_type =
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  mca_btl_openib_get_transport_type(mca_btl_openib_component.openib_btls[i]);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;        memcpy(offset,
</span><br>
<span class="quotelev2">&gt;&gt;               &amp;(mca_btl_openib_component.openib_btls[i]-&gt;port_info),
</span><br>
<span class="quotelev2">&gt;&gt;               size);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1657,45 +1672,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;        ibv_destroy_cq(cq);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    /* If the user specified btl_openib_receive_queues MCA param, it
</span><br>
<span class="quotelev2">&gt;&gt; -       overrides all device INI params */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (BTL_OPENIB_RQ_SOURCE_MCA !=
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_openib_component.receive_queues_source &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; -        NULL != values.receive_queues) {
</span><br>
<span class="quotelev2">&gt;&gt; -        /* If a prior device's INI values set a different value for
</span><br>
<span class="quotelev2">&gt;&gt; -           receive_queues, this is unsupported (see
</span><br>
<span class="quotelev2">&gt;&gt; -           <a href="https://svn.open-mpi.org/trac/ompi/ticket/1285">https://svn.open-mpi.org/trac/ompi/ticket/1285</a>) */
</span><br>
<span class="quotelev2">&gt;&gt; -        if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
</span><br>
<span class="quotelev2">&gt;&gt; -            mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev2">&gt;&gt; -            if (0 != strcmp(values.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; -                            mca_btl_openib_component.receive_queues)) {
</span><br>
<span class="quotelev2">&gt;&gt; -                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                               &quot;conflicting receive_queues&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; -                               orte_process_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt; -                               ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt;&gt; -                               device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; -                               device-&gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; -                               values.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ibv_get_device_name(receive_queues_device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; receive_queues_device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; receive_queues_device-&gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; -                               mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; -                               opal_install_dirs.pkgdatadir);
</span><br>
<span class="quotelev2">&gt;&gt; -                ret = OMPI_ERR_RESOURCE_BUSY;
</span><br>
<span class="quotelev2">&gt;&gt; -                goto error;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        } else {
</span><br>
<span class="quotelev2">&gt;&gt; -            if (NULL != mca_btl_openib_component.receive_queues) {
</span><br>
<span class="quotelev2">&gt;&gt; -                free(mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -            receive_queues_device = device;
</span><br>
<span class="quotelev2">&gt;&gt; -            mca_btl_openib_component.receive_queues =
</span><br>
<span class="quotelev2">&gt;&gt; -                strdup(values.receive_queues);
</span><br>
<span class="quotelev2">&gt;&gt; -            mca_btl_openib_component.receive_queues_source =
</span><br>
<span class="quotelev2">&gt;&gt; -                BTL_OPENIB_RQ_SOURCE_DEVICE_INI;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;    /* Should we use RDMA for short / eager messages?  First check MCA
</span><br>
<span class="quotelev2">&gt;&gt;       param, then check INI file values. */
</span><br>
<span class="quotelev2">&gt;&gt;    if (mca_btl_openib_component.use_eager_rdma &gt;= 0) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1795,6 +1771,45 @@
</span><br>
<span class="quotelev2">&gt;&gt;                           &quot;apm not enough ports&quot;, true);
</span><br>
<span class="quotelev2">&gt;&gt;            mca_btl_openib_component.apm_ports = 0;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        /* If the user specified btl_openib_receive_queues MCA param, it
</span><br>
<span class="quotelev2">&gt;&gt; +           overrides all device INI params */
</span><br>
<span class="quotelev2">&gt;&gt; +        if (BTL_OPENIB_RQ_SOURCE_MCA !=
</span><br>
<span class="quotelev2">&gt;&gt; +            mca_btl_openib_component.receive_queues_source &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +            NULL != values.receive_queues) {
</span><br>
<span class="quotelev2">&gt;&gt; +            /* If a prior device's INI values set a different value for
</span><br>
<span class="quotelev2">&gt;&gt; +               receive_queues, this is unsupported (see
</span><br>
<span class="quotelev2">&gt;&gt; +               <a href="https://svn.open-mpi.org/trac/ompi/ticket/1285">https://svn.open-mpi.org/trac/ompi/ticket/1285</a>) */
</span><br>
<span class="quotelev2">&gt;&gt; +            if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
</span><br>
<span class="quotelev2">&gt;&gt; +                mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if (0 != strcmp(values.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; +                                mca_btl_openib_component.receive_queues))
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; +                    orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                   &quot;conflicting receive_queues&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; +                                   orte_process_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt; +                                   ibv_get_device_name(device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt;&gt; +                                   device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                                   device-&gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; +                                   values.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; ibv_get_device_name(receive_queues_device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; receive_queues_device-&gt;ib_dev_attr.vendor_id,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; receive_queues_device-&gt;ib_dev_attr.vendor_part_id,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; +                                   opal_install_dirs.pkgdatadir);
</span><br>
<span class="quotelev2">&gt;&gt; +                    ret = OMPI_ERR_RESOURCE_BUSY;
</span><br>
<span class="quotelev2">&gt;&gt; +                    goto error;
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +            } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                if (NULL != mca_btl_openib_component.receive_queues) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    free(mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +                receive_queues_device = device;
</span><br>
<span class="quotelev2">&gt;&gt; +                mca_btl_openib_component.receive_queues =
</span><br>
<span class="quotelev2">&gt;&gt; +                    strdup(values.receive_queues);
</span><br>
<span class="quotelev2">&gt;&gt; +                mca_btl_openib_component.receive_queues_source =
</span><br>
<span class="quotelev2">&gt;&gt; +                    BTL_OPENIB_RQ_SOURCE_DEVICE_INI;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt;        return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you explain why you moved the above logic down further in the init
</span><br>
<span class="quotelev1">&gt; sequence?  If something goes wrong and we abort, there's more to cleanup by
</span><br>
<span class="quotelev1">&gt; the time we get all the way down here.  If there's a reason to move this
</span><br>
<span class="quotelev1">&gt; stuff down, please put it in a comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I love comments.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_endpoint.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib_endpoint.c Fri Nov 06 12:00:16 2009
</span><br>
<span class="quotelev2">&gt;&gt; -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib_endpoint.c Mon Nov 16 17:41:48 2009
</span><br>
<span class="quotelev2">&gt;&gt; +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -310,6 +310,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;                ep-&gt;rem_info.rem_subnet_id,
</span><br>
<span class="quotelev2">&gt;&gt;                ep-&gt;rem_info.rem_mtu);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    ep-&gt;rem_info.rem_vendor_id =
</span><br>
<span class="quotelev2">&gt;&gt; (remote_proc_info-&gt;pm_port_info).vendor_id;
</span><br>
<span class="quotelev2">&gt;&gt; +    ep-&gt;rem_info.rem_vendor_part_id =
</span><br>
<span class="quotelev2">&gt;&gt; (remote_proc_info-&gt;pm_port_info).vendor_part_id;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    ep-&gt;rem_info.rem_transport_type =
</span><br>
<span class="quotelev2">&gt;&gt; (remote_proc_info-&gt;pm_port_info).transport_type;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    for (qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
</span><br>
<span class="quotelev2">&gt;&gt;        endpoint_init_qp(ep, qp);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_endpoint.h
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib_endpoint.h Fri Nov 06 12:00:16 2009
</span><br>
<span class="quotelev2">&gt;&gt; -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib_endpoint.h Mon Nov 16 17:41:48 2009
</span><br>
<span class="quotelev2">&gt;&gt; +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -94,6 +94,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_openib_rem_qp_info_t *rem_qps;
</span><br>
<span class="quotelev2">&gt;&gt;    /* Remote xrc_srq info, used only with XRC connections */
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_openib_rem_srq_info_t *rem_srqs;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Vendor id of remote HCA */
</span><br>
<span class="quotelev2">&gt;&gt; +    uint32_t rem_vendor_id;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Vendor part id of remote HCA */
</span><br>
<span class="quotelev2">&gt;&gt; +    uint32_t rem_vendor_part_id;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Transport type of remote port */
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_btl_openib_transport_type_t rem_transport_type;
</span><br>
<span class="quotelev2">&gt;&gt; } mca_btl_openib_rem_info_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib_mca.c      Fri Nov 06 12:00:16 2009
</span><br>
<span class="quotelev2">&gt;&gt; -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib_mca.c      Mon Nov 16 17:41:48 2009
</span><br>
<span class="quotelev2">&gt;&gt; +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -10,7 +10,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2006-2008 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2006-2009 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev2">&gt;&gt;  *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2007 Voltaire All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; @@ -526,6 +526,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;            mid_qp_size,
</span><br>
<span class="quotelev2">&gt;&gt;            (uint32_t)mca_btl_openib_module.super.btl_eager_limit,
</span><br>
<span class="quotelev2">&gt;&gt;            (uint32_t)mca_btl_openib_module.super.btl_max_send_size);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_btl_openib_component.default_recv_qps = strdup(default_qps);
</span><br>
<span class="quotelev2">&gt;&gt; +    if(NULL == mca_btl_openib_component.default_recv_qps) {
</span><br>
<span class="quotelev2">&gt;&gt; +        BTL_ERROR((&quot;Unable to allocate memory for default receive queues
</span><br>
<span class="quotelev2">&gt;&gt; string.\n&quot;));
</span><br>
<span class="quotelev2">&gt;&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...and you were doing so well with show_help() up above.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CHECK(reg_string(&quot;receive_queues&quot;, NULL,
</span><br>
<span class="quotelev2">&gt;&gt;                     &quot;Colon-delimited, comma delimited list of receive
</span><br>
<span class="quotelev2">&gt;&gt; queues: P,4096,8,6,4:P,32768,8,6,4&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                     default_qps, &amp;mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev2">&gt;&gt; diff -r 521e5f4b161a ompi/mca/btl/openib/help-mpi-btl-openib.txt
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/help-mpi-btl-openib.txt       Fri Nov 06
</span><br>
<span class="quotelev2">&gt;&gt; 12:00:16 2009 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/help-mpi-btl-openib.txt       Mon Nov 16
</span><br>
<span class="quotelev2">&gt;&gt; 17:41:48 2009 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -11,7 +11,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2004-2006 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt; #                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; -# Copyright (c) 2007-2008 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2007-2009 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; @@ -590,3 +590,28 @@
</span><br>
<span class="quotelev2">&gt;&gt;  Local host: %s
</span><br>
<span class="quotelev2">&gt;&gt;  Value:      %s
</span><br>
<span class="quotelev2">&gt;&gt;  Message:    %s
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +[unsupported queues configuration]
</span><br>
<span class="quotelev2">&gt;&gt; +The remote and local queues were automatically configured for different
</span><br>
<span class="quotelev2">&gt;&gt; +devices and as result Open MPI failed to find optimal configuration.
</span><br>
<span class="quotelev2">&gt;&gt; +Please use MCA parameters in order define Open Fabrics queues
</span><br>
<span class="quotelev2">&gt;&gt; configuration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What exactly does this message mean?  Is it displayed when the rq string
</span><br>
<span class="quotelev1">&gt; values of two endpoints do not match?  If so, I suggest the following text:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open MPI receive queue configuration for the OpenFabrics devices on two
</span><br>
<span class="quotelev1">&gt; nodes are incompatible, meaning that MPI processes on two specific nodes
</span><br>
<span class="quotelev1">&gt; were unable to communicate with each other.  This generally happens when you
</span><br>
<span class="quotelev1">&gt; are using OpenFabrics devices from different vendors on the same network.
</span><br>
<span class="quotelev1">&gt;  You should be able to use the mca_btl_openib_receive_queues MCA parameter
</span><br>
<span class="quotelev1">&gt; to set a uniform receive queue configuration for all the devices in the MPI
</span><br>
<span class="quotelev1">&gt; job, and therefore be able to run successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The message below indicates the *first* two processes in this MPI job that
</span><br>
<span class="quotelev1">&gt; failed to connect to each other because of mismatched receive queue
</span><br>
<span class="quotelev1">&gt; configuration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +  Local host:       %s
</span><br>
<span class="quotelev2">&gt;&gt; +  Local adapter:    %s (vendor 0x%x, part ID %d)
</span><br>
<span class="quotelev2">&gt;&gt; +  Local queues:     %s
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +  Remote host:      %s
</span><br>
<span class="quotelev2">&gt;&gt; +  Remote adapter:   remote adapter (vendor 0x%x, part ID %d)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the second &quot;remote adapter&quot; redundant?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +  Remote queues:    %s
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +[conflicting transport types]
</span><br>
<span class="quotelev2">&gt;&gt; +Open MPI detected two different OpenFabrics transport types in the same
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband network.
</span><br>
<span class="quotelev2">&gt;&gt; +Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha tried to explain this to me on IM, but I don't think I quite
</span><br>
<span class="quotelev1">&gt; understand.  Does this happen when an IB port has the same subnet ID as an
</span><br>
<span class="quotelev1">&gt; RDMAoE port, but they're actually on different networks?  (they *must* be on
</span><br>
<span class="quotelev1">&gt; two different physical networks...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +  Local host:            %s
</span><br>
<span class="quotelev2">&gt;&gt; +  Local adapter:         %s (vendor 0x%x, part ID %d)
</span><br>
<span class="quotelev2">&gt;&gt; +  Local transport type:  %s
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +  Remote host:           %s
</span><br>
<span class="quotelev2">&gt;&gt; +  Remote Adapter:        remote adapter (vendor 0x%x, part ID %d)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Redundant &quot;recmote adapter&quot; comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +  Remote transport type: %s
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7157.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>Previous message:</strong> <a href="7155.php">George Bosilca: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>In reply to:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
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
