<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 11:25:07 2007" -->
<!-- isoreceived="20070613152507" -->
<!-- sent="Wed, 13 Jun 2007 18:25:00 +0300" -->
<!-- isosent="20070613152500" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041" -->
<!-- id="20070613152500.GA6519_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="03CFED81-B331-4497-A313-0385AD87B1EF_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 11:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1676.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1674.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1674.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1676.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1676.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 13, 2007 at 11:03:09AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hey Gleb --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you explain the rationale for this change?  Is there a reason why  
</span><br>
<span class="quotelev1">&gt; the bandwidths reported by the IBV API are not sufficient?  Are you  
</span><br>
<span class="quotelev1">&gt; trying to do creative things with multi-LID scenarios (perhaps QOS- 
</span><br>
<span class="quotelev1">&gt; like things)?  If so, this looks like a good idea, but I'm not sure  
</span><br>
<span class="quotelev1">&gt; that MCA params are the right vehicle for it.
</span><br>
Sometimes HCA bandwidth depend on PCI-E slot it resides in. I have a
<br>
setup here with 4 HCA 2 of them have bandwidth of 1500 and other 2 1150.
<br>
In multi-lid setup I want to do more fancy things. Like, for instance,
<br>
create fast path only for base lid and have its latency value to be
<br>
lower to send all eager traffic to it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not particularly fond of creating variable MCA parameters after  
</span><br>
<span class="quotelev1">&gt; the btl open call because they won't show up in ompi_info.  Should we  
</span><br>
<span class="quotelev1">&gt; do something else if you want to override bandwidths, perhaps  
</span><br>
<span class="quotelev1">&gt; something similar to the HCA params file?  If you recall, we made the  
</span><br>
<span class="quotelev1">&gt; HCA params stuff a file because of exactly this issue: we didn't want  
</span><br>
<span class="quotelev1">&gt; variable MCA parameters and we didn't want to have to make the user  
</span><br>
<span class="quotelev1">&gt; type out a potentially long set of complex MCA parameters that were  
</span><br>
<span class="quotelev1">&gt; dependent upon the exact environment that the user was running in.
</span><br>
I modeled this after TCP BTL so blame George :) I actually like this
<br>
notation, but obviously it has its shortcomings. I am open to other ideas
<br>
if they can be implemented in a short time frame.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2007, at 8:47 AM, gleb_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: gleb
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2007-06-13 08:47:38 EDT (Wed, 13 Jun 2007)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 15041
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15041">https://svn.open-mpi.org/trac/ompi/changeset/15041</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Allow to configure bandwidth and latency with finer granularity.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Set bandwidth for all ports of mthca0:
</span><br>
<span class="quotelev2">&gt; &gt; --mca btl_openib_bandwidth_mthca0 1000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Set bandwidth for port 1 of mthca1:
</span><br>
<span class="quotelev2">&gt; &gt; --mca btl_openib_bandwidth_mthca1:1 1000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Set latency for port 2 lid 123 on mthca0:
</span><br>
<span class="quotelev2">&gt; &gt; --mca btl_openib_latency_mthca0:2:123 20
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/btl/openib/btl_openib_component.c |    43 ++++++++ 
</span><br>
<span class="quotelev2">&gt; &gt; ++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 43 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt; &gt; ====================================================================== 
</span><br>
<span class="quotelev2">&gt; &gt; ========
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c	(original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c	2007-06-13  
</span><br>
<span class="quotelev2">&gt; &gt; 08:47:38 EDT (Wed, 13 Jun 2007)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -299,6 +299,14 @@
</span><br>
<span class="quotelev2">&gt; &gt;      openib_reg-&gt;mr = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; +static inline int param_register_int(const char* param_name, int  
</span><br>
<span class="quotelev2">&gt; &gt; default_value)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    int param_value = default_value;
</span><br>
<span class="quotelev2">&gt; &gt; +    int id = mca_base_param_register_int(&quot;btl&quot;, &quot;openib&quot;,  
</span><br>
<span class="quotelev2">&gt; &gt; param_name, NULL,
</span><br>
<span class="quotelev2">&gt; &gt; +            default_value);
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_base_param_lookup_int(id, &amp;param_value);
</span><br>
<span class="quotelev2">&gt; &gt; +    return param_value;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  static int init_one_port(opal_list_t *btl_list,  
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_openib_hca_t *hca,
</span><br>
<span class="quotelev2">&gt; &gt;                           uint8_t port_num, uint16_t pkey_index,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -331,6 +339,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      for(lid = ib_port_attr-&gt;lid;
</span><br>
<span class="quotelev2">&gt; &gt;              lid &lt; ib_port_attr-&gt;lid + lmc; lid++){
</span><br>
<span class="quotelev2">&gt; &gt;          for(i = 0; i &lt; mca_btl_openib_component.btls_per_lid; i++){
</span><br>
<span class="quotelev2">&gt; &gt; +            char param[40];
</span><br>
<span class="quotelev2">&gt; &gt;              openib_btl = malloc(sizeof(mca_btl_openib_module_t));
</span><br>
<span class="quotelev2">&gt; &gt;              if(NULL == openib_btl) {
</span><br>
<span class="quotelev2">&gt; &gt;                  BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__,  
</span><br>
<span class="quotelev2">&gt; &gt; __LINE__));
</span><br>
<span class="quotelev2">&gt; &gt; @@ -353,6 +362,40 @@
</span><br>
<span class="quotelev2">&gt; &gt;              openib_btl-&gt;ib_reg[MCA_BTL_TAG_BTL].cbfunc =  
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_control;
</span><br>
<span class="quotelev2">&gt; &gt;              openib_btl-&gt;ib_reg[MCA_BTL_TAG_BTL].cbdata = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +            /* Check bandwidth configured for this HCA */
</span><br>
<span class="quotelev2">&gt; &gt; +            sprintf(param, &quot;bandwidth_%s&quot;, ibv_get_device_name(hca- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;ib_dev));
</span><br>
<span class="quotelev2">&gt; &gt; +            openib_btl-&gt;super.btl_bandwidth =
</span><br>
<span class="quotelev2">&gt; &gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;super.btl_bandwidth);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            /* Check bandwidth configured for this HCA/port */
</span><br>
<span class="quotelev2">&gt; &gt; +            sprintf(param, &quot;bandwidth_%s:%d&quot;, ibv_get_device_name 
</span><br>
<span class="quotelev2">&gt; &gt; (hca-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt; &gt; +                    port_num);
</span><br>
<span class="quotelev2">&gt; &gt; +            openib_btl-&gt;super.btl_bandwidth =
</span><br>
<span class="quotelev2">&gt; &gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;super.btl_bandwidth);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            /* Check bandwidth configured for this HCA/port/LID */
</span><br>
<span class="quotelev2">&gt; &gt; +            sprintf(param, &quot;bandwidth_%s:%d:%d&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                    ibv_get_device_name(hca-&gt;ib_dev), port_num, lid);
</span><br>
<span class="quotelev2">&gt; &gt; +            openib_btl-&gt;super.btl_bandwidth =
</span><br>
<span class="quotelev2">&gt; &gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;super.btl_bandwidth);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            /* Check latency configured for this HCA */
</span><br>
<span class="quotelev2">&gt; &gt; +            sprintf(param, &quot;latency_%s&quot;, ibv_get_device_name(hca- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;ib_dev));
</span><br>
<span class="quotelev2">&gt; &gt; +            openib_btl-&gt;super.btl_latency =
</span><br>
<span class="quotelev2">&gt; &gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;super.btl_latency);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            /* Check latency configured for this HCA/port */
</span><br>
<span class="quotelev2">&gt; &gt; +            sprintf(param, &quot;latency_%s:%d&quot;, ibv_get_device_name 
</span><br>
<span class="quotelev2">&gt; &gt; (hca-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt; &gt; +                    port_num);
</span><br>
<span class="quotelev2">&gt; &gt; +            openib_btl-&gt;super.btl_latency =
</span><br>
<span class="quotelev2">&gt; &gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;super.btl_latency);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +            /* Check latency configured for this HCA/port/LID */
</span><br>
<span class="quotelev2">&gt; &gt; +            sprintf(param, &quot;latency_%s:%d:%d&quot;, ibv_get_device_name 
</span><br>
<span class="quotelev2">&gt; &gt; (hca-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt; &gt; +                    port_num, lid);
</span><br>
<span class="quotelev2">&gt; &gt; +            openib_btl-&gt;super.btl_latency =
</span><br>
<span class="quotelev2">&gt; &gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;super.btl_latency);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;              /* Auto-detect the port bandwidth */
</span><br>
<span class="quotelev2">&gt; &gt;              if (0 == openib_btl-&gt;super.btl_bandwidth) {
</span><br>
<span class="quotelev2">&gt; &gt;                  /* To calculate the bandwidth available on this port,
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1676.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1674.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1674.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1676.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1676.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
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
