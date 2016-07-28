<?
$subject_val = "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 08:09:56 2007" -->
<!-- isoreceived="20071212130956" -->
<!-- sent="Wed, 12 Dec 2007 08:09:41 -0500" -->
<!-- isosent="20071212130941" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's" -->
<!-- id="97C0E970-D0CA-4864-937E-C5956A8F4792_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="475FB456.2020209_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2007-12-12 08:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2802.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2800.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>In reply to:</strong> <a href="2800.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2802.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2007, at 5:13 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Hmm.  I don't think that we want to put knowledge of XRC in the OOB
</span><br>
<span class="quotelev2">&gt;&gt; CPC (and vice versa).  That seems like an abstraction violation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I didn't like that XRC knowledge was put in the connect base either,
</span><br>
<span class="quotelev2">&gt;&gt; but I was too busy to argue with it.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Isn't there a better way somehow?  Perhaps we should have &quot;select&quot;
</span><br>
<span class="quotelev2">&gt;&gt; call *all* the functions and accept back a priority.  The one with  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; highest priority then wins.  This is quite similar to much of the
</span><br>
<span class="quotelev2">&gt;&gt; other selection logic in OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sidenote: Keep in mind that there are some changes coming to select
</span><br>
<span class="quotelev2">&gt;&gt; CPCs on a per-endpoint basis (I can't look up the trac ticket right
</span><br>
<span class="quotelev2">&gt;&gt; now...).  This makes things a little complicated -- do we need
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_cpc_include and btl_openib_cpc_exclude MCA params to
</span><br>
<span class="quotelev2">&gt;&gt; include/exclude CPCs (because you might need more than one CPC in a
</span><br>
<span class="quotelev2">&gt;&gt; single job)?  That wouldn't be hard to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But then what to do about if someone sets to use some XRC QPs and
</span><br>
<span class="quotelev2">&gt;&gt; selects to use OOB or RDMA CM?
</span><br>
<span class="quotelev1">&gt; Error message will be reported , that for using XRC you _must_  
</span><br>
<span class="quotelev1">&gt; select xoob.
</span><br>
<p>I understand that that is what it does today; I was asking my somewhat- 
<br>
rhetorical question with the above text in mind (that we remove the  
<br>
abstraction violations -- remove knowledge of XRC from the OOB CPC,  
<br>
etc.).
<br>
<p><span class="quotelev2">&gt;&gt; How do we catch this and print an
</span><br>
<span class="quotelev2">&gt;&gt; error?  It doesn't seem right to put the &quot;if num_xrc_qps&gt;0&quot; check in
</span><br>
<span class="quotelev2">&gt;&gt; every CPC.  What happens if you try to make an XRC QP when not using
</span><br>
<span class="quotelev2">&gt;&gt; xoob?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where is the error detected and what kind of error message do
</span><br>
<span class="quotelev2">&gt;&gt; we print?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I would like to remind 2 things:
</span><br>
<span class="quotelev1">&gt; 1. XRC little bit change QP logic. We creates one XRC qp for send and
</span><br>
<span class="quotelev1">&gt; one for recv. As result
</span><br>
<span class="quotelev1">&gt; it require absolutely different oob mechanism.
</span><br>
<span class="quotelev1">&gt; 2. Current implementation doesn't allow to run with XRC  + RC (or srq)
</span><br>
<span class="quotelev1">&gt; and I don't think that we need such mixed configuration
</span><br>
<span class="quotelev1">&gt; support at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So as results the the XRC may work only with XOOB. If you will try to
</span><br>
<span class="quotelev1">&gt; run it with oob error message will be reported.
</span><br>
<span class="quotelev1">&gt; As well if you will try to run !(XRC) with XOOB error message will be
</span><br>
<span class="quotelev1">&gt; reported too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The check is located in ompi_btl_openib_connect_base_open.
</span><br>
<p>I understand all of that.  I think the question is if there is a way  
<br>
to de-centralize these checks such that the XOOB CPC can be the one  
<br>
that figures this stuff out (for example) rather than having to put  
<br>
this in the base.
<br>
<p><span class="quotelev1">&gt; The original code in the function used oob as default connection  
</span><br>
<span class="quotelev1">&gt; method.
</span><br>
<span class="quotelev1">&gt; I changed it to check
</span><br>
<span class="quotelev1">&gt; in which mode we are running (xrc enabled/disabled) and make xoob
</span><br>
<span class="quotelev1">&gt; default connection manager for xrc mode
</span><br>
<span class="quotelev1">&gt; and oob make default for not xrc mode.
</span><br>
<p>Right -- this is problematic for adding IBCM and RDMA CM; that's Jon's  
<br>
point.
<br>
<p><span class="quotelev1">&gt; I  not sure that oob cpc is the best place for the logic.
</span><br>
<span class="quotelev1">&gt; also I don't think that the &quot;select + priority&quot; solution will resolve
</span><br>
<span class="quotelev1">&gt; the dependences problem:
</span><br>
<span class="quotelev1">&gt; XRC enabled -&gt; xoob
</span><br>
<span class="quotelev1">&gt; XRC disabled -&gt; oob , cm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We may push the logic outside of cpc  and pass to
</span><br>
<span class="quotelev1">&gt; ompi_btl_openib_connect_base_open()
</span><br>
<span class="quotelev1">&gt; witch connection manger we want to use. I guess that the change also
</span><br>
<span class="quotelev1">&gt; will be usefull for future &quot;CPCs on a per-endpoint basis&quot; changes.
</span><br>
<p>&nbsp;From an abstraction point of view, it would be nice to get all this  
<br>
CPC-specific information out of the base and into the CPCs that they  
<br>
belong to.
<br>
<p><span class="quotelev2">&gt;&gt; Also, I'm not sure why the #if/#else is there for xoob (i.e., having
</span><br>
<span class="quotelev2">&gt;&gt; empty/printf functions there when XRC support is compiled out) -- if
</span><br>
<span class="quotelev2">&gt;&gt; xoob was disabled during compilation, then it simply should not be
</span><br>
<span class="quotelev2">&gt;&gt; compiled and therefore not be there at all at run-time.  If a user
</span><br>
<span class="quotelev2">&gt;&gt; selects the xoob CPC, then we should print a message from the base
</span><br>
<span class="quotelev2">&gt;&gt; that that CPC doesn't exist in the installation.  Correspondingly, we
</span><br>
<span class="quotelev2">&gt;&gt; can make an info MCA param in the btl openib that shows which CPCs  
</span><br>
<span class="quotelev2">&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt; available (we already have this information -- it's easy enough to  
</span><br>
<span class="quotelev2">&gt;&gt; put
</span><br>
<span class="quotelev2">&gt;&gt; this in an info MCA param).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sounds reasonable for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2007, at 6:59 PM, Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently, alternate CMs cannot be called because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_btl_openib_connect_base_open forces a choice of either oob or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xoob
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and goes into an erroneous error path if you pick something else).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This patch reorganizes ompi_btl_openib_connect_base_open so that new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions can easily be added.  New Open functions were added to oob
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and xoob for the error handling.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tested calling oob, xoob, and rdma_cm.  oob happily allows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connections
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be established and throws no errors.  xoob fails because ompi  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not have it compiled in (and I have no connectx cards).  rdma_cm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the empty hooks and exits without connecting (thus throwing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-connection errors).  All expected behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since this patch fixes the existing behavior, and is not necessarily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tied to my implementing of rdma_cm, I think it is acceptable to go  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_base.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(revision
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16937)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -50,8 +50,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int ompi_btl_openib_connect_base_open(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    int i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    char **temp, *a, *b;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    char **temp, *a, *b, *defval;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int i, ret = OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* Make an MCA parameter to select which connect module to use */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    temp = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -66,40 +66,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* For XRC qps we must to use XOOB connection manager */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_param_reg_string 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                &quot;connect&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                b, false, false,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                &quot;xoob&quot;, &amp;param);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if (0 != strcmp(&quot;xoob&quot;, param)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    &quot;XRC with wrong OOB&quot;, true,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    orte_system_info.nodename,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    mca_btl_openib_component.num_xrc_qps);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	defval = &quot;xoob&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    } else { /* For all others we should use OOB */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_param_reg_string 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                &quot;connect&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                b, false, false,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                &quot;oob&quot;, &amp;param);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if (0 != strcmp(&quot;oob&quot;, param)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    &quot;SRQ or PP with wrong OOB&quot;, true,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    orte_system_info.nodename,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    mca_btl_openib_component.num_srq_qps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    mca_btl_openib_component.num_pp_qps);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	defval = &quot;oob&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_param_reg_string 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +			      &quot;connect&quot;, b, false, false, defval, &amp;param);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* Call the open function on all the connect modules */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    for (i = 0; NULL != all[i]; ++i) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if (NULL != all[i]-&gt;bcf_open) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            all[i]-&gt;bcf_open();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (0 == strcmp(all[i]-&gt;bcf_name, param)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ret = all[i]-&gt;bcf_open();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(revision
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16937)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -28,11 +28,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int ibcm_open(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                           &quot;btl_openib_connect_ibcm_foo&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                           &quot;A dummy help message&quot;, false, false,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                           17, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    printf(&quot;ibcm open\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(revision
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16937)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -22,6 +22,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/mca/ns/base/base.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -39,6 +41,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ENDPOINT_CONNECT_ACK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } connect_message_type_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int oob_open(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int oob_init(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int oob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int oob_finalize(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -67,8 +70,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_oob = {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &quot;oob&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* No need for &quot;open */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    NULL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* Open */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    oob_open,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* Init */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    oob_init,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* Connect */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -78,6 +81,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * Open function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int oob_open(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    &quot;SRQ or PP with wrong OOB&quot;, true,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    orte_system_info.nodename,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    mca_btl_openib_component.num_srq_qps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    mca_btl_openib_component.num_pp_qps);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * connection requests.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (revision 16937)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -28,11 +28,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int rdma_cm_open(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                           &quot;btl_openib_connect_rdma_cm_foo&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                           &quot;A dummy help message&quot;, false, false,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                           17, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    printf(&quot;rdma cm open\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(revision
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16937)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -10,6 +10,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/mca/ns/base/base.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -22,6 +24,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;btl_openib_xrc.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int xoob_open(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int xoob_init(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int xoob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int xoob_finalize(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -32,8 +35,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_xoob  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &quot;xoob&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* No need for &quot;open */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    NULL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* Open */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    xoob_open,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* Init */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    xoob_init,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* Connect */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -99,7 +102,24 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int init_rem_info(mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static void free_rem_info(mca_btl_openib_rem_info_t *rem_info);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * Open function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int xoob_open(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (mca_btl_openib_component.num_xrc_qps &lt;= 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    &quot;XRC with wrong OOB&quot;, true,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    orte_system_info.nodename,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    mca_btl_openib_component.num_xrc_qps);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Init function.  Post non-blocking RML receive to accept incoming
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * connection requests.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -834,6 +854,12 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* In case if the XRC was disabled during compilation we will print
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message and return error */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int xoob_open(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    printf(&quot;xoob open\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return OMPI_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int xoob_init(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;xoob init\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2802.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2800.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>In reply to:</strong> <a href="2800.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2802.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
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
