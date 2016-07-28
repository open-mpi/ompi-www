<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 10:41:18 2014" -->
<!-- isoreceived="20140716144118" -->
<!-- sent="Wed, 16 Jul 2014 07:33:23 -0700" -->
<!-- isosent="20140716143323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="5E9EAC1A-398C-4AE5-B8E1-F166E76F0E6D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140716142644.GN1506_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 10:33:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15170.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15168.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15166.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15167.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That sounds right. I don't know if this would still be required with the destructor, but we could also:
<br>
<p>* add an OBJ_CLASS_DEREGISTER and require that all instantiations be matched by deregister at close of the framework/component that instanced it. Of course, that requires that we protect the class system against someone releasing/deconstructing an object after the class was deregistered since we don't know who might be using that class outside of where it was created.
<br>
<p>* ensure each framework/component &quot;deregisters&quot; every declared MCA param when finalizing/closing
<br>
<p>* ensure every framework close gets called, and that every framework properly closes all its components. We especially need to ensure that components that were opened but not selected get closed!
<br>
<p>I'm willing to do my part of the above (I know the third one needs to be done in ORTE)
<br>
Ralph
<br>
<p>On Jul 16, 2014, at 7:26 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A number of issues have been raised as part of this discussion. Here is
</span><br>
<span class="quotelev1">&gt; what I have seen so far:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - contructor/destructor order not garaunteed: From an opal perspective
</span><br>
<span class="quotelev1">&gt;   this should not be a problem. Most components are unloaded by
</span><br>
<span class="quotelev1">&gt;   opal_finalize () not opal_finalize_util (). So opal components
</span><br>
<span class="quotelev1">&gt;   opal should already be finalized by the time the destructor is called
</span><br>
<span class="quotelev1">&gt;   (or we can finalize them in the destructor if necessary).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - portability: All the compilers most of us care about: gcc, intel,
</span><br>
<span class="quotelev1">&gt;   clang. The exceptions appear to be xlc and pgi. For these compilers
</span><br>
<span class="quotelev1">&gt;   we can fall back on Ralph's solution and just leak if
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize () is not called after MPI_T_Finalize (). Attached is an
</span><br>
<span class="quotelev1">&gt;   implementation that does that (needs some adjustment).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15166.php">http://www.open-mpi.org/community/lists/devel/2014/07/15166.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15170.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15168.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15166.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15167.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
