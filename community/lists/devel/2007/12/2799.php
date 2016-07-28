<?
$subject_val = "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 20:16:19 2007" -->
<!-- isoreceived="20071212011619" -->
<!-- sent="Tue, 11 Dec 2007 20:16:07 -0500" -->
<!-- isosent="20071212011607" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's" -->
<!-- id="99FF924F-280D-4B87-BC95-D118D4C0C895_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071211235902.GA12801_at_opengridcomputing.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 20:16:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2800.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Previous message:</strong> <a href="2798.php">Jeff Squyres: "[OMPI devel] Fwd: Subversion and trac outage"</a>
<li><strong>In reply to:</strong> <a href="2797.php">Jon Mason: "[OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2800.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Reply:</strong> <a href="2800.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Reply:</strong> <a href="2802.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I don't think that we want to put knowledge of XRC in the OOB  
<br>
CPC (and vice versa).  That seems like an abstraction violation.
<br>
<p>I didn't like that XRC knowledge was put in the connect base either,  
<br>
but I was too busy to argue with it.  :-)
<br>
<p>Isn't there a better way somehow?  Perhaps we should have &quot;select&quot;  
<br>
call *all* the functions and accept back a priority.  The one with the  
<br>
highest priority then wins.  This is quite similar to much of the  
<br>
other selection logic in OMPI.
<br>
<p>Sidenote: Keep in mind that there are some changes coming to select  
<br>
CPCs on a per-endpoint basis (I can't look up the trac ticket right  
<br>
now...).  This makes things a little complicated -- do we need  
<br>
btl_openib_cpc_include and btl_openib_cpc_exclude MCA params to  
<br>
include/exclude CPCs (because you might need more than one CPC in a  
<br>
single job)?  That wouldn't be hard to do.
<br>
<p>But then what to do about if someone sets to use some XRC QPs and  
<br>
selects to use OOB or RDMA CM?  How do we catch this and print an  
<br>
error?  It doesn't seem right to put the &quot;if num_xrc_qps&gt;0&quot; check in  
<br>
every CPC.  What happens if you try to make an XRC QP when not using  
<br>
xoob?  Where is the error detected and what kind of error message do  
<br>
we print?
<br>
<p>Also, I'm not sure why the #if/#else is there for xoob (i.e., having  
<br>
empty/printf functions there when XRC support is compiled out) -- if  
<br>
xoob was disabled during compilation, then it simply should not be  
<br>
compiled and therefore not be there at all at run-time.  If a user  
<br>
selects the xoob CPC, then we should print a message from the base  
<br>
that that CPC doesn't exist in the installation.  Correspondingly, we  
<br>
can make an info MCA param in the btl openib that shows which CPCs are  
<br>
available (we already have this information -- it's easy enough to put  
<br>
this in an info MCA param).
<br>
<p><p>On Dec 11, 2007, at 6:59 PM, Jon Mason wrote:
<br>
<p><span class="quotelev1">&gt; Currently, alternate CMs cannot be called because
</span><br>
<span class="quotelev1">&gt; ompi_btl_openib_connect_base_open forces a choice of either oob or  
</span><br>
<span class="quotelev1">&gt; xoob
</span><br>
<span class="quotelev1">&gt; (and goes into an erroneous error path if you pick something else).
</span><br>
<span class="quotelev1">&gt; This patch reorganizes ompi_btl_openib_connect_base_open so that new
</span><br>
<span class="quotelev1">&gt; functions can easily be added.  New Open functions were added to oob
</span><br>
<span class="quotelev1">&gt; and xoob for the error handling.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested calling oob, xoob, and rdma_cm.  oob happily allows  
</span><br>
<span class="quotelev1">&gt; connections
</span><br>
<span class="quotelev1">&gt; to be established and throws no errors.  xoob fails because ompi does
</span><br>
<span class="quotelev1">&gt; not have it compiled in (and I have no connectx cards).  rdma_cm calls
</span><br>
<span class="quotelev1">&gt; the empty hooks and exits without connecting (thus throwing
</span><br>
<span class="quotelev1">&gt; non-connection errors).  All expected behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since this patch fixes the existing behavior, and is not necessarily
</span><br>
<span class="quotelev1">&gt; tied to my implementing of rdma_cm, I think it is acceptable to go in
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_base.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(revision  
</span><br>
<span class="quotelev1">&gt; 16937)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(working  
</span><br>
<span class="quotelev1">&gt; copy)
</span><br>
<span class="quotelev1">&gt; @@ -50,8 +50,8 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; int ompi_btl_openib_connect_base_open(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int i;
</span><br>
<span class="quotelev1">&gt; -    char **temp, *a, *b;
</span><br>
<span class="quotelev1">&gt; +    char **temp, *a, *b, *defval;
</span><br>
<span class="quotelev1">&gt; +    int i, ret = OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Make an MCA parameter to select which connect module to use */
</span><br>
<span class="quotelev1">&gt;     temp = NULL;
</span><br>
<span class="quotelev1">&gt; @@ -66,40 +66,23 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* For XRC qps we must to use XOOB connection manager */
</span><br>
<span class="quotelev1">&gt;     if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
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
<span class="quotelev1">&gt; +	defval = &quot;xoob&quot;;
</span><br>
<span class="quotelev1">&gt;     } else { /* For all others we should use OOB */
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
<span class="quotelev1">&gt; +	defval = &quot;oob&quot;;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +     
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; +			      &quot;connect&quot;, b, false, false, defval, &amp;param);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* Call the open function on all the connect modules */
</span><br>
<span class="quotelev1">&gt;     for (i = 0; NULL != all[i]; ++i) {
</span><br>
<span class="quotelev1">&gt; -        if (NULL != all[i]-&gt;bcf_open) {
</span><br>
<span class="quotelev1">&gt; -            all[i]-&gt;bcf_open();
</span><br>
<span class="quotelev1">&gt; +        if (0 == strcmp(all[i]-&gt;bcf_name, param)) {
</span><br>
<span class="quotelev1">&gt; +            ret = all[i]-&gt;bcf_open();
</span><br>
<span class="quotelev1">&gt; +	    break;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    return ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(revision  
</span><br>
<span class="quotelev1">&gt; 16937)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(working  
</span><br>
<span class="quotelev1">&gt; copy)
</span><br>
<span class="quotelev1">&gt; @@ -28,11 +28,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int ibcm_open(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -     
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; -                           &quot;btl_openib_connect_ibcm_foo&quot;,
</span><br>
<span class="quotelev1">&gt; -                           &quot;A dummy help message&quot;, false, false,
</span><br>
<span class="quotelev1">&gt; -                           17, NULL);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    printf(&quot;ibcm open\n&quot;);
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(revision  
</span><br>
<span class="quotelev1">&gt; 16937)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(working  
</span><br>
<span class="quotelev1">&gt; copy)
</span><br>
<span class="quotelev1">&gt; @@ -22,6 +22,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/ns/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -39,6 +41,7 @@
</span><br>
<span class="quotelev1">&gt;     ENDPOINT_CONNECT_ACK
</span><br>
<span class="quotelev1">&gt; } connect_message_type_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +static int oob_open(void);
</span><br>
<span class="quotelev1">&gt; static int oob_init(void);
</span><br>
<span class="quotelev1">&gt; static int oob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev1">&gt; static int oob_finalize(void);
</span><br>
<span class="quotelev1">&gt; @@ -67,8 +70,8 @@
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
<span class="quotelev1">&gt; @@ -78,6 +81,23 @@
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; + * Open function.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +static int oob_open(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
</span><br>
<span class="quotelev1">&gt; +            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                    &quot;SRQ or PP with wrong OOB&quot;, true,
</span><br>
<span class="quotelev1">&gt; +                    orte_system_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                    mca_btl_openib_component.num_srq_qps,
</span><br>
<span class="quotelev1">&gt; +                    mca_btl_openib_component.num_pp_qps);
</span><br>
<span class="quotelev1">&gt; +            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt;  * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev1">&gt;  * connection requests.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	 
</span><br>
<span class="quotelev1">&gt; (revision 16937)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	 
</span><br>
<span class="quotelev1">&gt; (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -28,11 +28,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int rdma_cm_open(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -     
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; -                           &quot;btl_openib_connect_rdma_cm_foo&quot;,
</span><br>
<span class="quotelev1">&gt; -                           &quot;A dummy help message&quot;, false, false,
</span><br>
<span class="quotelev1">&gt; -                           17, NULL);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    printf(&quot;rdma cm open\n&quot;);
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(revision  
</span><br>
<span class="quotelev1">&gt; 16937)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(working  
</span><br>
<span class="quotelev1">&gt; copy)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/ns/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -22,6 +24,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib_xrc.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +static int xoob_open(void);
</span><br>
<span class="quotelev1">&gt; static int xoob_init(void);
</span><br>
<span class="quotelev1">&gt; static int xoob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev1">&gt; static int xoob_finalize(void);
</span><br>
<span class="quotelev1">&gt; @@ -32,8 +35,8 @@
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
<span class="quotelev1">&gt; @@ -99,7 +102,24 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int init_rem_info(mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev1">&gt; static void free_rem_info(mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; + * Open function.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +static int xoob_open(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    if (mca_btl_openib_component.num_xrc_qps &lt;= 0) {
</span><br>
<span class="quotelev1">&gt; +            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                    &quot;XRC with wrong OOB&quot;, true,
</span><br>
<span class="quotelev1">&gt; +                    orte_system_info.nodename,
</span><br>
<span class="quotelev1">&gt; +                    mca_btl_openib_component.num_xrc_qps);
</span><br>
<span class="quotelev1">&gt; +            return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt;  * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev1">&gt;  * connection requests.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; @@ -834,6 +854,12 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; /* In case if the XRC was disabled during compilation we will print  
</span><br>
<span class="quotelev1">&gt; message and return error */
</span><br>
<span class="quotelev1">&gt; +static int xoob_open(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    printf(&quot;xoob open\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; static int xoob_init(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;xoob init\n&quot;);
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
<li><strong>Next message:</strong> <a href="2800.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Previous message:</strong> <a href="2798.php">Jeff Squyres: "[OMPI devel] Fwd: Subversion and trac outage"</a>
<li><strong>In reply to:</strong> <a href="2797.php">Jon Mason: "[OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2800.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Reply:</strong> <a href="2800.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Reply:</strong> <a href="2802.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
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
