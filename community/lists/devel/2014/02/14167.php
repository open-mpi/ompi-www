<?
$subject_val = "Re: [OMPI devel] RFC: new OMPI RTE define:";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 05:22:00 2014" -->
<!-- isoreceived="20140218102200" -->
<!-- sent="Tue, 18 Feb 2014 11:21:57 +0100" -->
<!-- isosent="20140218102157" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: new OMPI RTE define:" -->
<!-- id="5686AAB7-039A-4FB4-93BA-820BC79C5CE1_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D4DDEF9F-6402-45AB-8C07-98084257DE5C_at_bbarrett.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: new OMPI RTE define:<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-18 05:21:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14168.php">Adrian Reber: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Previous message:</strong> <a href="14166.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>In reply to:</strong> <a href="14165.php">Brian Barrett: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Reply:</strong> <a href="14170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I concur with Brian, you should not expect the runtime to provide a default event base, especially if you want some level of quality-of-service out of it. Moreover, with the soon-to-happen move of the BTLs down in OPAL this approach will definitively not be suitable.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Feb 18, 2014, at 07:03 , Brian Barrett &lt;brian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; And what will you do for RTE components that aren't ORTE?  This really isn't a feature of a run-time, so it doesn't seem like it should be part of the RTE interface...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 17, 2014, at 3:03 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: New OMPI_RTE_EVENT_BASE define
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: The usnic BTL needs to run some events asynchronously; the ORTE event base already exists and is running asynchronously in MPI processes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: in ompi/mca/rte/rte.h and rte_orte.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: COB Friday, 21 Feb 2014
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The WHY line described it pretty well: we want to run some things asynchronously in the usnic BTL and we don't really want to re-invent the wheel (or add yet another thread in each MPI process).  The ORTE event base is already there, there's already a thread servicing it, and Ralph tells me that it is safe to add our own events on to it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The patch below adds the new OMPI_RTE_EVENT_BASE #define.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/mca/rte/orte/rte_orte.h b/ompi/mca/rte/orte/rte_orte.h
</span><br>
<span class="quotelev2">&gt;&gt; index 3c88c6d..3ceadb8 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/rte/orte/rte_orte.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/rte/orte/rte_orte.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -142,6 +142,9 @@ typedef struct {
</span><br>
<span class="quotelev2">&gt;&gt; } ompi_orte_tracker_t;
</span><br>
<span class="quotelev2">&gt;&gt; OBJ_CLASS_DECLARATION(ompi_orte_tracker_t);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +/* define the event base that the RTE exports */
</span><br>
<span class="quotelev2">&gt;&gt; +#define OMPI_RTE_EVENT_BASE orte_event_base
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; END_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #endif /* MCA_OMPI_RTE_ORTE_H */
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/mca/rte/rte.h b/ompi/mca/rte/rte.h
</span><br>
<span class="quotelev2">&gt;&gt; index 69ad488..de10dff 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/rte/rte.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/rte/rte.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -150,7 +150,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; *        a. OMPI_DB_HOSTNAME
</span><br>
<span class="quotelev2">&gt;&gt; *        b. OMPI_DB_LOCALITY
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; - * (g) Communication support
</span><br>
<span class="quotelev2">&gt;&gt; + * (g) Asynchronous / event support
</span><br>
<span class="quotelev2">&gt;&gt; + *     1. OMPI_RTE_EVENT_BASE - the libevent base that executes in a
</span><br>
<span class="quotelev2">&gt;&gt; + *        separate thread
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -162,6 +164,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/dss/dss_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/mca/event/event.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Brian Barrett
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is an art . . . to flying. The knack lies in learning how to
</span><br>
<span class="quotelev1">&gt; throw yourself at the ground and miss.
</span><br>
<span class="quotelev1">&gt;     Douglas Adams, 'The Hitchhikers Guide to the Galaxy'
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
<li><strong>Next message:</strong> <a href="14168.php">Adrian Reber: "Re: [OMPI devel] OPAL_CRS_* meaning"</a>
<li><strong>Previous message:</strong> <a href="14166.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>In reply to:</strong> <a href="14165.php">Brian Barrett: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Reply:</strong> <a href="14170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
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
