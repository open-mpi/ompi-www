<?
$subject_val = "Re: [OMPI devel] Debug output issues on the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 09:07:32 2013" -->
<!-- isoreceived="20130430130732" -->
<!-- sent="Tue, 30 Apr 2013 13:07:26 +0000" -->
<!-- isosent="20130430130726" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Debug output issues on the trunk" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4B1CD298_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E1D4DFD-FCAB-4970-9E5A-0670573AC28B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Debug output issues on the trunk<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 09:07:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12328.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28417 - trunk/ompi/mca/vprotocol/base"</a>
<li><strong>Previous message:</strong> <a href="12326.php">Ralph Castain: "[OMPI devel] Debug output issues on the trunk"</a>
<li><strong>In reply to:</strong> <a href="12326.php">Ralph Castain: "[OMPI devel] Debug output issues on the trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
...I see Nathan raising his hand...
<br>
<p>:-)
<br>
<p>Is there a way we can get opal_output / OPAL_OUTPUT to give us some help when this happens?  E.g., output a warning that it's been given an invalid stream ID?  I know we declare -1 as a valid output (effectively to the bitbucket); is there a unique way to identify these not-updated streams vs. legitimately--1 (i.e., disabled) streams?
<br>
<p><p>On Apr 29, 2013, at 10:33 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been encountering problems where setting &quot;verbosity&quot; values doesn't result in any output. I finally tracked it down the not-too-recent overhaul of the MCA parameter system. At that time, the mca_component_open function was replaced with a framework_open function, and the &quot;verbose_output&quot; parameter was removed in favor of a default framework_output variable that exists in the framework object itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, when the change was made, the original verbose output variables (in many places) were not removed. Thus, everything compiles - but the verbosity parameter for that framework has no effect. I've now found/fixed four frameworks where this occurred - after wasting a ton of time and frustration :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if you are trying to get debug output in a debug build, and setting a verbosity yields no output, check the opal_output_verbose and OPAL_OUTPUT_VERBOSE calls to ensure they are looking at the framework_output channel and not the old one. Quite likely, it wasn't updated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meantime, I'm hoping to enlist help in slowly trolling thru all the frameworks and components to correct the situation. Volunteers are appreciated as this is going to take some time to fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12328.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28417 - trunk/ompi/mca/vprotocol/base"</a>
<li><strong>Previous message:</strong> <a href="12326.php">Ralph Castain: "[OMPI devel] Debug output issues on the trunk"</a>
<li><strong>In reply to:</strong> <a href="12326.php">Ralph Castain: "[OMPI devel] Debug output issues on the trunk"</a>
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
