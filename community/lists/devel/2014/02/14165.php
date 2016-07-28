<?
$subject_val = "Re: [OMPI devel] RFC: new OMPI RTE define:";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 01:03:51 2014" -->
<!-- isoreceived="20140218060351" -->
<!-- sent="Mon, 17 Feb 2014 23:03:55 -0700" -->
<!-- isosent="20140218060355" -->
<!-- name="Brian Barrett" -->
<!-- email="brian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: new OMPI RTE define:" -->
<!-- id="D4DDEF9F-6402-45AB-8C07-98084257DE5C_at_bbarrett.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="57F6166C-AB1D-4FDE-9332-FBFEF1B04FED_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-18 01:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14166.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14164.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>In reply to:</strong> <a href="14164.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: new OMPI RTE define:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14167.php">George Bosilca: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Reply:</strong> <a href="14167.php">George Bosilca: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And what will you do for RTE components that aren't ORTE?  This really isn't a feature of a run-time, so it doesn't seem like it should be part of the RTE interface...
<br>
<p>Brian
<br>
<p>On Feb 17, 2014, at 3:03 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: New OMPI_RTE_EVENT_BASE define
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: The usnic BTL needs to run some events asynchronously; the ORTE event base already exists and is running asynchronously in MPI processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: in ompi/mca/rte/rte.h and rte_orte.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: COB Friday, 21 Feb 2014
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The WHY line described it pretty well: we want to run some things asynchronously in the usnic BTL and we don't really want to re-invent the wheel (or add yet another thread in each MPI process).  The ORTE event base is already there, there's already a thread servicing it, and Ralph tells me that it is safe to add our own events on to it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch below adds the new OMPI_RTE_EVENT_BASE #define.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/rte/orte/rte_orte.h b/ompi/mca/rte/orte/rte_orte.h
</span><br>
<span class="quotelev1">&gt; index 3c88c6d..3ceadb8 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/rte/orte/rte_orte.h
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/rte/orte/rte_orte.h
</span><br>
<span class="quotelev1">&gt; @@ -142,6 +142,9 @@ typedef struct {
</span><br>
<span class="quotelev1">&gt; } ompi_orte_tracker_t;
</span><br>
<span class="quotelev1">&gt; OBJ_CLASS_DECLARATION(ompi_orte_tracker_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +/* define the event base that the RTE exports */
</span><br>
<span class="quotelev1">&gt; +#define OMPI_RTE_EVENT_BASE orte_event_base
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; END_C_DECLS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #endif /* MCA_OMPI_RTE_ORTE_H */
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/rte/rte.h b/ompi/mca/rte/rte.h
</span><br>
<span class="quotelev1">&gt; index 69ad488..de10dff 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/rte/rte.h
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/rte/rte.h
</span><br>
<span class="quotelev1">&gt; @@ -150,7 +150,9 @@
</span><br>
<span class="quotelev1">&gt;  *        a. OMPI_DB_HOSTNAME
</span><br>
<span class="quotelev1">&gt;  *        b. OMPI_DB_LOCALITY
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt; - * (g) Communication support
</span><br>
<span class="quotelev1">&gt; + * (g) Asynchronous / event support
</span><br>
<span class="quotelev1">&gt; + *     1. OMPI_RTE_EVENT_BASE - the libevent base that executes in a
</span><br>
<span class="quotelev1">&gt; + *        separate thread
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -162,6 +164,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/dss/dss_types.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/mca/event/event.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
 Brian Barrett
 There is an art . . . to flying. The knack lies in learning how to
 throw yourself at the ground and miss.
     Douglas Adams, 'The Hitchhikers Guide to the Galaxy'
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14166.php">Adrian Reber: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14164.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>In reply to:</strong> <a href="14164.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: new OMPI RTE define:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14167.php">George Bosilca: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Reply:</strong> <a href="14167.php">George Bosilca: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
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
