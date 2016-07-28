<?
$subject_val = "[OMPI devel] Debug output issues on the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 22:33:42 2013" -->
<!-- isoreceived="20130430023342" -->
<!-- sent="Mon, 29 Apr 2013 19:33:30 -0700" -->
<!-- isosent="20130430023330" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Debug output issues on the trunk" -->
<!-- id="1E1D4DFD-FCAB-4970-9E5A-0670573AC28B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Debug output issues on the trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-29 22:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Debug output issues on the trunk"</a>
<li><strong>Previous message:</strong> <a href="12325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Debug output issues on the trunk"</a>
<li><strong>Reply:</strong> <a href="12327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Debug output issues on the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I've been encountering problems where setting &quot;verbosity&quot; values doesn't result in any output. I finally tracked it down the not-too-recent overhaul of the MCA parameter system. At that time, the mca_component_open function was replaced with a framework_open function, and the &quot;verbose_output&quot; parameter was removed in favor of a default framework_output variable that exists in the framework object itself.
<br>
<p>Unfortunately, when the change was made, the original verbose output variables (in many places) were not removed. Thus, everything compiles - but the verbosity parameter for that framework has no effect. I've now found/fixed four frameworks where this occurred - after wasting a ton of time and frustration :-(
<br>
<p>So if you are trying to get debug output in a debug build, and setting a verbosity yields no output, check the opal_output_verbose and OPAL_OUTPUT_VERBOSE calls to ensure they are looking at the framework_output channel and not the old one. Quite likely, it wasn't updated.
<br>
<p>Meantime, I'm hoping to enlist help in slowly trolling thru all the frameworks and components to correct the situation. Volunteers are appreciated as this is going to take some time to fix.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Debug output issues on the trunk"</a>
<li><strong>Previous message:</strong> <a href="12325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Debug output issues on the trunk"</a>
<li><strong>Reply:</strong> <a href="12327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Debug output issues on the trunk"</a>
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
