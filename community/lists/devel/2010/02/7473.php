<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 17:32:57 2010" -->
<!-- isoreceived="20100223223257" -->
<!-- sent="Tue, 23 Feb 2010 17:32:47 -0500" -->
<!-- isosent="20100223223247" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="07D78098-589D-440A-8BF8-CAD5E7A638D4_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ECC17F06-FD20-429D-AC0B-DF16A829993B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-23 17:32:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7474.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7472.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7464.php">Ralph Castain: "[OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7474.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7474.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, Josh,
<br>
<p>We have some comments about the API of the new framework, mostly clarifications needed to better understand how this new framework is supposed to be used. And a request for a deadline extension, to delay the code merge from the Recos branch in the trunk by a week.
<br>
<p>We have our own FT branch, with a totally different approach than what is described in your RFC. Unfortunately, it diverged from the trunk about a year ago, and merging back had proven to be a quite difficult task. Some of the functionality in the Recos framework is clearly beneficial for what we did, and has the potential to facilitate the porting of most of the features from our brach back in trunk. We would like the deadline extension in order to deeply analyze the impact of the Recos framework on our work, and see how we can fit everything together back in the trunk of Open MPI.
<br>
<p>Here are some comments about the code:
<br>
<p>1. The documentation in recos.h is not very clear. Most of the functions use only IN arguments, and are not supposed to return any values. We don't see how the functions are supposed to be used, and what is supposed to be their impact on the ORTE framework data.
<br>
<p>2. Why do we have all the char***? Why are they only declared as IN arguments?
<br>
<p>3. The orte_recos_base_process_fault_fn_t function use the node_list as an IN/OUT argument. Why? If the list is modified, then we have a scalability problem, as the list will have to be rebuilt before each call.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 19, 2010, at 12:59 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Merge a tmp branch for fault recovery development into the OMPI trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Bring over work done by Josh and Ralph to extend OMPI's fault recovery capabilities
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Impacts a number of ORTE files and a small number of OMPI files
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Barring objections and/or requests for delay, the weekend of Feb 27-28
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; REFERENCE BRANCH: <a href="http://bitbucket.org/rhc/ompi-recos/overview/">http://bitbucket.org/rhc/ompi-recos/overview/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BACKGROUND:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh and Ralph have been working on a private branch off of the trunk on extended fault recovery procedures, mostly impacting ORTE. The new code optionally allows ORTE to recover from failed nodes, moving processes to other nodes in order to maintain operation. In addition, the code provides better support for recovering from individual process failures.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not all of the work done on the private branch will be brought over in this commit. Some of the MPI-specific code that allows recovery from process failure on-the-fly will be committed separately at a later date.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This commit will include the infrastructure to support those advanced recovery operations. Among other things, this commit will introduce a new &quot;RecoS&quot; (Recovery Service/Strategy) framework to allow multiple strategies for responding to failures. The default module, called &quot;ignore&quot;, will stabilize the runtime environment for other RecoS components. In the absence of other RecoS components it will trigger the default behavior (abort the job) to be executed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This branch includes some configure modifications that allow a comma separated list of options to be passed to the '--with-ft' option. This allows us to enable any combination of 'cr' and 'recos' at build time, specifically so that the RecoS functionally can be enabled independently of the C/R functionality. Most of the changes outside of the ORTE layer are due to symbol cleanup resulting from this modification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, C/R specific code paths were previously incorrectly marked with:
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_FT == 1
</span><br>
<span class="quotelev1">&gt; They are now marked as, where appropriate:
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, C/R specific components have modified configure.m4 files to change:
</span><br>
<span class="quotelev1">&gt; AS_IF([test &quot;$ompi_want_ft&quot; = &quot;0&quot;],
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt; AS_IF([test &quot;$ompi_want_ft_cr&quot; = &quot;0&quot;],
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have created a public repo (reference branch, above) with the code to be merged into the trunk. Please feel free to check it out and test it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: the new recovery capability is only active if...
</span><br>
<span class="quotelev1">&gt;   (a) you configure --with-ft=recos, and
</span><br>
<span class="quotelev1">&gt;   (b) you set OMPI_MCA_recos_base_enable=1 to turn it on!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments, suggestions, and corrections are welcome!
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
<li><strong>Next message:</strong> <a href="7474.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7472.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7464.php">Ralph Castain: "[OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7474.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7474.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
