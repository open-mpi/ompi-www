<?
$subject_val = "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 05:13:51 2007" -->
<!-- isoreceived="20071212101351" -->
<!-- sent="Wed, 12 Dec 2007 12:13:42 +0200" -->
<!-- isosent="20071212101342" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's" -->
<!-- id="475FB456.2020209_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="99FF924F-280D-4B87-BC95-D118D4C0C895_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 05:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2801.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Previous message:</strong> <a href="2799.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>In reply to:</strong> <a href="2799.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2801.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Reply:</strong> <a href="2801.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hmm.  I don't think that we want to put knowledge of XRC in the OOB  
</span><br>
<span class="quotelev1">&gt; CPC (and vice versa).  That seems like an abstraction violation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't like that XRC knowledge was put in the connect base either,  
</span><br>
<span class="quotelev1">&gt; but I was too busy to argue with it.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isn't there a better way somehow?  Perhaps we should have &quot;select&quot;  
</span><br>
<span class="quotelev1">&gt; call *all* the functions and accept back a priority.  The one with the  
</span><br>
<span class="quotelev1">&gt; highest priority then wins.  This is quite similar to much of the  
</span><br>
<span class="quotelev1">&gt; other selection logic in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sidenote: Keep in mind that there are some changes coming to select  
</span><br>
<span class="quotelev1">&gt; CPCs on a per-endpoint basis (I can't look up the trac ticket right  
</span><br>
<span class="quotelev1">&gt; now...).  This makes things a little complicated -- do we need  
</span><br>
<span class="quotelev1">&gt; btl_openib_cpc_include and btl_openib_cpc_exclude MCA params to  
</span><br>
<span class="quotelev1">&gt; include/exclude CPCs (because you might need more than one CPC in a  
</span><br>
<span class="quotelev1">&gt; single job)?  That wouldn't be hard to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But then what to do about if someone sets to use some XRC QPs and  
</span><br>
<span class="quotelev1">&gt; selects to use OOB or RDMA CM?  
</span><br>
Error message will be reported , that for using XRC you _must_ select xoob.
<br>
<span class="quotelev1">&gt; How do we catch this and print an  
</span><br>
<span class="quotelev1">&gt; error?  It doesn't seem right to put the &quot;if num_xrc_qps&gt;0&quot; check in  
</span><br>
<span class="quotelev1">&gt; every CPC.  What happens if you try to make an XRC QP when not using  
</span><br>
<span class="quotelev1">&gt; xoob?  
</span><br>
<p><span class="quotelev1">&gt; Where is the error detected and what kind of error message do  
</span><br>
<span class="quotelev1">&gt; we print?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I would like to remind 2 things:
<br>
1. XRC little bit change QP logic. We creates one XRC qp for send and 
<br>
one for recv. As result
<br>
it require absolutely different oob mechanism.
<br>
2. Current implementation doesn't allow to run with XRC  + RC (or srq) 
<br>
and I don't think that we need such mixed configuration
<br>
support at all.
<br>
<p>So as results the the XRC may work only with XOOB. If you will try to 
<br>
run it with oob error message will be reported.
<br>
As well if you will try to run !(XRC) with XOOB error message will be 
<br>
reported too.
<br>
<p>The check is located in ompi_btl_openib_connect_base_open.
<br>
<p>The original code in the function used oob as default connection method. 
<br>
I changed it to check
<br>
in which mode we are running (xrc enabled/disabled) and make xoob 
<br>
default connection manager for xrc mode
<br>
and oob make default for not xrc mode.
<br>
<p>I  not sure that oob cpc is the best place for the logic.
<br>
also I don't think that the &quot;select + priority&quot; solution will resolve 
<br>
the dependences problem:
<br>
XRC enabled -&gt; xoob
<br>
XRC disabled -&gt; oob , cm.
<br>
<p>We may push the logic outside of cpc  and pass to 
<br>
ompi_btl_openib_connect_base_open()
<br>
witch connection manger we want to use. I guess that the change also 
<br>
will be usefull for future &quot;CPCs on a per-endpoint basis&quot; changes.
<br>
<p><span class="quotelev1">&gt; Also, I'm not sure why the #if/#else is there for xoob (i.e., having  
</span><br>
<span class="quotelev1">&gt; empty/printf functions there when XRC support is compiled out) -- if  
</span><br>
<span class="quotelev1">&gt; xoob was disabled during compilation, then it simply should not be  
</span><br>
<span class="quotelev1">&gt; compiled and therefore not be there at all at run-time.  If a user  
</span><br>
<span class="quotelev1">&gt; selects the xoob CPC, then we should print a message from the base  
</span><br>
<span class="quotelev1">&gt; that that CPC doesn't exist in the installation.  Correspondingly, we  
</span><br>
<span class="quotelev1">&gt; can make an info MCA param in the btl openib that shows which CPCs are  
</span><br>
<span class="quotelev1">&gt; available (we already have this information -- it's easy enough to put  
</span><br>
<span class="quotelev1">&gt; this in an info MCA param).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Sounds reasonable for me.
<br>
<p>Pasha.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2007, at 6:59 PM, Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Currently, alternate CMs cannot be called because
</span><br>
<span class="quotelev2">&gt;&gt; ompi_btl_openib_connect_base_open forces a choice of either oob or  
</span><br>
<span class="quotelev2">&gt;&gt; xoob
</span><br>
<span class="quotelev2">&gt;&gt; (and goes into an erroneous error path if you pick something else).
</span><br>
<span class="quotelev2">&gt;&gt; This patch reorganizes ompi_btl_openib_connect_base_open so that new
</span><br>
<span class="quotelev2">&gt;&gt; functions can easily be added.  New Open functions were added to oob
</span><br>
<span class="quotelev2">&gt;&gt; and xoob for the error handling.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tested calling oob, xoob, and rdma_cm.  oob happily allows  
</span><br>
<span class="quotelev2">&gt;&gt; connections
</span><br>
<span class="quotelev2">&gt;&gt; to be established and throws no errors.  xoob fails because ompi does
</span><br>
<span class="quotelev2">&gt;&gt; not have it compiled in (and I have no connectx cards).  rdma_cm calls
</span><br>
<span class="quotelev2">&gt;&gt; the empty hooks and exits without connecting (thus throwing
</span><br>
<span class="quotelev2">&gt;&gt; non-connection errors).  All expected behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since this patch fixes the existing behavior, and is not necessarily
</span><br>
<span class="quotelev2">&gt;&gt; tied to my implementing of rdma_cm, I think it is acceptable to go in
</span><br>
<span class="quotelev2">&gt;&gt; now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_base.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(revision  
</span><br>
<span class="quotelev2">&gt;&gt; 16937)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(working  
</span><br>
<span class="quotelev2">&gt;&gt; copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -50,8 +50,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt; int ompi_btl_openib_connect_base_open(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -    int i;
</span><br>
<span class="quotelev2">&gt;&gt; -    char **temp, *a, *b;
</span><br>
<span class="quotelev2">&gt;&gt; +    char **temp, *a, *b, *defval;
</span><br>
<span class="quotelev2">&gt;&gt; +    int i, ret = OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /* Make an MCA parameter to select which connect module to use */
</span><br>
<span class="quotelev2">&gt;&gt;     temp = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -66,40 +66,23 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /* For XRC qps we must to use XOOB connection manager */
</span><br>
<span class="quotelev2">&gt;&gt;     if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt; -         
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt;&gt; -                &quot;connect&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                b, false, false,
</span><br>
<span class="quotelev2">&gt;&gt; -                &quot;xoob&quot;, &amp;param);
</span><br>
<span class="quotelev2">&gt;&gt; -        if (0 != strcmp(&quot;xoob&quot;, param)) {
</span><br>
<span class="quotelev2">&gt;&gt; -            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                    &quot;XRC with wrong OOB&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; -                    orte_system_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt; -                    mca_btl_openib_component.num_xrc_qps);
</span><br>
<span class="quotelev2">&gt;&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; +	defval = &quot;xoob&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;     } else { /* For all others we should use OOB */
</span><br>
<span class="quotelev2">&gt;&gt; -         
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt;&gt; -                &quot;connect&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                b, false, false,
</span><br>
<span class="quotelev2">&gt;&gt; -                &quot;oob&quot;, &amp;param);
</span><br>
<span class="quotelev2">&gt;&gt; -        if (0 != strcmp(&quot;oob&quot;, param)) {
</span><br>
<span class="quotelev2">&gt;&gt; -            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                    &quot;SRQ or PP with wrong OOB&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; -                    orte_system_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt; -                    mca_btl_openib_component.num_srq_qps,
</span><br>
<span class="quotelev2">&gt;&gt; -                    mca_btl_openib_component.num_pp_qps);
</span><br>
<span class="quotelev2">&gt;&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; +	defval = &quot;oob&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +     
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt;&gt; +			      &quot;connect&quot;, b, false, false, defval, &amp;param);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     /* Call the open function on all the connect modules */
</span><br>
<span class="quotelev2">&gt;&gt;     for (i = 0; NULL != all[i]; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt; -        if (NULL != all[i]-&gt;bcf_open) {
</span><br>
<span class="quotelev2">&gt;&gt; -            all[i]-&gt;bcf_open();
</span><br>
<span class="quotelev2">&gt;&gt; +        if (0 == strcmp(all[i]-&gt;bcf_name, param)) {
</span><br>
<span class="quotelev2">&gt;&gt; +            ret = all[i]-&gt;bcf_open();
</span><br>
<span class="quotelev2">&gt;&gt; +	    break;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(revision  
</span><br>
<span class="quotelev2">&gt;&gt; 16937)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(working  
</span><br>
<span class="quotelev2">&gt;&gt; copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,11 +28,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static int ibcm_open(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -     
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt;&gt; -                           &quot;btl_openib_connect_ibcm_foo&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                           &quot;A dummy help message&quot;, false, false,
</span><br>
<span class="quotelev2">&gt;&gt; -                           17, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +    printf(&quot;ibcm open\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(revision  
</span><br>
<span class="quotelev2">&gt;&gt; 16937)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(working  
</span><br>
<span class="quotelev2">&gt;&gt; copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -22,6 +22,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/ns/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -39,6 +41,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     ENDPOINT_CONNECT_ACK
</span><br>
<span class="quotelev2">&gt;&gt; } connect_message_type_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +static int oob_open(void);
</span><br>
<span class="quotelev2">&gt;&gt; static int oob_init(void);
</span><br>
<span class="quotelev2">&gt;&gt; static int oob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev2">&gt;&gt; static int oob_finalize(void);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -67,8 +70,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt; ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_oob = {
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;oob&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -    /* No need for &quot;open */
</span><br>
<span class="quotelev2">&gt;&gt; -    NULL,
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Open */
</span><br>
<span class="quotelev2">&gt;&gt; +    oob_open,
</span><br>
<span class="quotelev2">&gt;&gt;     /* Init */
</span><br>
<span class="quotelev2">&gt;&gt;     oob_init,
</span><br>
<span class="quotelev2">&gt;&gt;     /* Connect */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -78,6 +81,23 @@
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; + * Open function.
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +static int oob_open(void)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                    &quot;SRQ or PP with wrong OOB&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; +                    orte_system_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt; +                    mca_btl_openib_component.num_srq_qps,
</span><br>
<span class="quotelev2">&gt;&gt; +                    mca_btl_openib_component.num_pp_qps);
</span><br>
<span class="quotelev2">&gt;&gt; +            return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/*
</span><br>
<span class="quotelev2">&gt;&gt;  * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev2">&gt;&gt;  * connection requests.
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	 
</span><br>
<span class="quotelev2">&gt;&gt; (revision 16937)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	 
</span><br>
<span class="quotelev2">&gt;&gt; (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,11 +28,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static int rdma_cm_open(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -     
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt;&gt; -                           &quot;btl_openib_connect_rdma_cm_foo&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                           &quot;A dummy help message&quot;, false, false,
</span><br>
<span class="quotelev2">&gt;&gt; -                           17, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +    printf(&quot;rdma cm open\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(revision  
</span><br>
<span class="quotelev2">&gt;&gt; 16937)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(working  
</span><br>
<span class="quotelev2">&gt;&gt; copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -10,6 +10,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/ns/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -22,6 +24,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;btl_openib_xrc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +static int xoob_open(void);
</span><br>
<span class="quotelev2">&gt;&gt; static int xoob_init(void);
</span><br>
<span class="quotelev2">&gt;&gt; static int xoob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev2">&gt;&gt; static int xoob_finalize(void);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -32,8 +35,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt; ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_xoob = {
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;xoob&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -    /* No need for &quot;open */
</span><br>
<span class="quotelev2">&gt;&gt; -    NULL,
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Open */
</span><br>
<span class="quotelev2">&gt;&gt; +    xoob_open,
</span><br>
<span class="quotelev2">&gt;&gt;     /* Init */
</span><br>
<span class="quotelev2">&gt;&gt;     xoob_init,
</span><br>
<span class="quotelev2">&gt;&gt;     /* Connect */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -99,7 +102,24 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static int init_rem_info(mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev2">&gt;&gt; static void free_rem_info(mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; + * Open function.
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +static int xoob_open(void)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    if (mca_btl_openib_component.num_xrc_qps &lt;= 0) {
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                    &quot;XRC with wrong OOB&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt; +                    orte_system_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt; +                    mca_btl_openib_component.num_xrc_qps);
</span><br>
<span class="quotelev2">&gt;&gt; +            return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/*
</span><br>
<span class="quotelev2">&gt;&gt;  * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev2">&gt;&gt;  * connection requests.
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -834,6 +854,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt; /* In case if the XRC was disabled during compilation we will print  
</span><br>
<span class="quotelev2">&gt;&gt; message and return error */
</span><br>
<span class="quotelev2">&gt;&gt; +static int xoob_open(void)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    printf(&quot;xoob open\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; static int xoob_init(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;xoob init\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2801.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Previous message:</strong> <a href="2799.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>In reply to:</strong> <a href="2799.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2801.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Reply:</strong> <a href="2801.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
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
