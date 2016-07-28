<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 11:03:26 2007" -->
<!-- isoreceived="20070613150326" -->
<!-- sent="Wed, 13 Jun 2007 11:03:09 -0400" -->
<!-- isosent="20070613150309" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041" -->
<!-- id="03CFED81-B331-4497-A313-0385AD87B1EF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200706131247.l5DCldRp005378_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 11:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1675.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1673.php">Gleb Natapov: "[OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1675.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1675.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Gleb --
<br>
<p>Can you explain the rationale for this change?  Is there a reason why  
<br>
the bandwidths reported by the IBV API are not sufficient?  Are you  
<br>
trying to do creative things with multi-LID scenarios (perhaps QOS- 
<br>
like things)?  If so, this looks like a good idea, but I'm not sure  
<br>
that MCA params are the right vehicle for it.
<br>
<p>I'm not particularly fond of creating variable MCA parameters after  
<br>
the btl open call because they won't show up in ompi_info.  Should we  
<br>
do something else if you want to override bandwidths, perhaps  
<br>
something similar to the HCA params file?  If you recall, we made the  
<br>
HCA params stuff a file because of exactly this issue: we didn't want  
<br>
variable MCA parameters and we didn't want to have to make the user  
<br>
type out a potentially long set of complex MCA parameters that were  
<br>
dependent upon the exact environment that the user was running in.
<br>
<p><p><p>On Jun 13, 2007, at 8:47 AM, gleb_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: gleb
</span><br>
<span class="quotelev1">&gt; Date: 2007-06-13 08:47:38 EDT (Wed, 13 Jun 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15041
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15041">https://svn.open-mpi.org/trac/ompi/changeset/15041</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Allow to configure bandwidth and latency with finer granularity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Set bandwidth for all ports of mthca0:
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_bandwidth_mthca0 1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Set bandwidth for port 1 of mthca1:
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_bandwidth_mthca1:1 1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Set latency for port 2 lid 123 on mthca0:
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_latency_mthca0:2:123 20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib_component.c |    43 ++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    1 files changed, 43 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c	2007-06-13  
</span><br>
<span class="quotelev1">&gt; 08:47:38 EDT (Wed, 13 Jun 2007)
</span><br>
<span class="quotelev1">&gt; @@ -299,6 +299,14 @@
</span><br>
<span class="quotelev1">&gt;      openib_reg-&gt;mr = NULL;
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; +static inline int param_register_int(const char* param_name, int  
</span><br>
<span class="quotelev1">&gt; default_value)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int param_value = default_value;
</span><br>
<span class="quotelev1">&gt; +    int id = mca_base_param_register_int(&quot;btl&quot;, &quot;openib&quot;,  
</span><br>
<span class="quotelev1">&gt; param_name, NULL,
</span><br>
<span class="quotelev1">&gt; +            default_value);
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_lookup_int(id, &amp;param_value);
</span><br>
<span class="quotelev1">&gt; +    return param_value;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static int init_one_port(opal_list_t *btl_list,  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_hca_t *hca,
</span><br>
<span class="quotelev1">&gt;                           uint8_t port_num, uint16_t pkey_index,
</span><br>
<span class="quotelev1">&gt; @@ -331,6 +339,7 @@
</span><br>
<span class="quotelev1">&gt;      for(lid = ib_port_attr-&gt;lid;
</span><br>
<span class="quotelev1">&gt;              lid &lt; ib_port_attr-&gt;lid + lmc; lid++){
</span><br>
<span class="quotelev1">&gt;          for(i = 0; i &lt; mca_btl_openib_component.btls_per_lid; i++){
</span><br>
<span class="quotelev1">&gt; +            char param[40];
</span><br>
<span class="quotelev1">&gt;              openib_btl = malloc(sizeof(mca_btl_openib_module_t));
</span><br>
<span class="quotelev1">&gt;              if(NULL == openib_btl) {
</span><br>
<span class="quotelev1">&gt;                  BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__,  
</span><br>
<span class="quotelev1">&gt; __LINE__));
</span><br>
<span class="quotelev1">&gt; @@ -353,6 +362,40 @@
</span><br>
<span class="quotelev1">&gt;              openib_btl-&gt;ib_reg[MCA_BTL_TAG_BTL].cbfunc =  
</span><br>
<span class="quotelev1">&gt; btl_openib_control;
</span><br>
<span class="quotelev1">&gt;              openib_btl-&gt;ib_reg[MCA_BTL_TAG_BTL].cbdata = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +            /* Check bandwidth configured for this HCA */
</span><br>
<span class="quotelev1">&gt; +            sprintf(param, &quot;bandwidth_%s&quot;, ibv_get_device_name(hca- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev));
</span><br>
<span class="quotelev1">&gt; +            openib_btl-&gt;super.btl_bandwidth =
</span><br>
<span class="quotelev1">&gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;super.btl_bandwidth);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* Check bandwidth configured for this HCA/port */
</span><br>
<span class="quotelev1">&gt; +            sprintf(param, &quot;bandwidth_%s:%d&quot;, ibv_get_device_name 
</span><br>
<span class="quotelev1">&gt; (hca-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; +                    port_num);
</span><br>
<span class="quotelev1">&gt; +            openib_btl-&gt;super.btl_bandwidth =
</span><br>
<span class="quotelev1">&gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;super.btl_bandwidth);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* Check bandwidth configured for this HCA/port/LID */
</span><br>
<span class="quotelev1">&gt; +            sprintf(param, &quot;bandwidth_%s:%d:%d&quot;,
</span><br>
<span class="quotelev1">&gt; +                    ibv_get_device_name(hca-&gt;ib_dev), port_num, lid);
</span><br>
<span class="quotelev1">&gt; +            openib_btl-&gt;super.btl_bandwidth =
</span><br>
<span class="quotelev1">&gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;super.btl_bandwidth);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* Check latency configured for this HCA */
</span><br>
<span class="quotelev1">&gt; +            sprintf(param, &quot;latency_%s&quot;, ibv_get_device_name(hca- 
</span><br>
<span class="quotelev2">&gt; &gt;ib_dev));
</span><br>
<span class="quotelev1">&gt; +            openib_btl-&gt;super.btl_latency =
</span><br>
<span class="quotelev1">&gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;super.btl_latency);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* Check latency configured for this HCA/port */
</span><br>
<span class="quotelev1">&gt; +            sprintf(param, &quot;latency_%s:%d&quot;, ibv_get_device_name 
</span><br>
<span class="quotelev1">&gt; (hca-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; +                    port_num);
</span><br>
<span class="quotelev1">&gt; +            openib_btl-&gt;super.btl_latency =
</span><br>
<span class="quotelev1">&gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;super.btl_latency);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* Check latency configured for this HCA/port/LID */
</span><br>
<span class="quotelev1">&gt; +            sprintf(param, &quot;latency_%s:%d:%d&quot;, ibv_get_device_name 
</span><br>
<span class="quotelev1">&gt; (hca-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; +                    port_num, lid);
</span><br>
<span class="quotelev1">&gt; +            openib_btl-&gt;super.btl_latency =
</span><br>
<span class="quotelev1">&gt; +                param_register_int(param, openib_btl- 
</span><br>
<span class="quotelev2">&gt; &gt;super.btl_latency);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;              /* Auto-detect the port bandwidth */
</span><br>
<span class="quotelev1">&gt;              if (0 == openib_btl-&gt;super.btl_bandwidth) {
</span><br>
<span class="quotelev1">&gt;                  /* To calculate the bandwidth available on this port,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="1675.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1673.php">Gleb Natapov: "[OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1675.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1675.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
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
