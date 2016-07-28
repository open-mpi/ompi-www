<?
$subject_val = "Re: [OMPI devel] RFC: MCA system revamp phase 1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 17:50:06 2013" -->
<!-- isoreceived="20130326215006" -->
<!-- sent="Tue, 26 Mar 2013 21:50:01 +0000" -->
<!-- isosent="20130326215001" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: MCA system revamp phase 1" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC7EAA_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130320192901.GA65781_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: MCA system revamp phase 1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 17:50:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12225.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<li><strong>Previous message:</strong> <a href="12223.php">Jeff Squyres (jsquyres): "[OMPI devel] Git SVN mirror not updating"</a>
<li><strong>In reply to:</strong> <a href="12207.php">Nathan Hjelm: "[OMPI devel] RFC: MCA system revamp phase 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bump.  Reminder to everyone that this RFC expires tomorrow.  
<br>
<p>It's a big change.
<br>
<p><p><p>On Mar 20, 2013, at 3:29 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What: This is the first of a series of changes intended to update the
</span><br>
<span class="quotelev1">&gt; MCA parameter and frameworks/components systems. The specific
</span><br>
<span class="quotelev1">&gt; changes in this RFC are itemized below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where: Just about the entire code base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: To support the MPI-3 MPI_T_* tools interface. Also, a
</span><br>
<span class="quotelev1">&gt; cleanup/revamp of the MCA param system has been on to to-do list
</span><br>
<span class="quotelev1">&gt; for a long, long time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Timeout: One week from today at 3pm US Mountain time (see below!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More detail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This RFC contains the following changes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA Variable System (aka &quot;MCA param system&quot;):
</span><br>
<span class="quotelev1">&gt; - Replaces the MCA parameter system. A &quot;shim&quot; layer will be provided
</span><br>
<span class="quotelev1">&gt; in the trunk (for a time) and v1.7 (for the duration of the series).
</span><br>
<span class="quotelev1">&gt; - All calls to mca_base_param_* have been changed to mca_base_var_*.
</span><br>
<span class="quotelev1">&gt; - Support for an override variable file
</span><br>
<span class="quotelev1">&gt; &quot;openmpi-mca-params-override.conf&quot; with values that cannot
</span><br>
<span class="quotelev1">&gt; otherwise be reset.
</span><br>
<span class="quotelev1">&gt; - Support for enumerated integer values. For examples, please look at
</span><br>
<span class="quotelev1">&gt; ompi/mca/coll/tuned .
</span><br>
<span class="quotelev1">&gt; - All components have been updated to the new system.
</span><br>
<span class="quotelev1">&gt; - ompi_info output generation has been updated to the new MCA
</span><br>
<span class="quotelev1">&gt; variable system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA Framework System:
</span><br>
<span class="quotelev1">&gt; - Formalizes the framework interface. Frameworks can now provide
</span><br>
<span class="quotelev1">&gt; functions for variable registration, open, and close. 
</span><br>
<span class="quotelev1">&gt; - Three functions are provided to interface with frameworks:
</span><br>
<span class="quotelev1">&gt; mca_base_framework_register (registers MCA variables for the
</span><br>
<span class="quotelev1">&gt; framework itself), mca_base_framework_open,
</span><br>
<span class="quotelev1">&gt; mca_base_framework_close.
</span><br>
<span class="quotelev1">&gt; - Declare your framework with MCA_BASE_FRAMEWORK_DECLARE (see
</span><br>
<span class="quotelev1">&gt; mca_base_framework.h) 
</span><br>
<span class="quotelev1">&gt; - All frameworks have been updated to the new system.
</span><br>
<span class="quotelev1">&gt; - All frameworks MUST conform to the new interface. This may
</span><br>
<span class="quotelev1">&gt; include 1.7 frameworks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The work can be found @ github (&quot;svn-commit&quot; branch):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://github.com/hjelmn/ompi-mca-var">http://github.com/hjelmn/ompi-mca-var</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Commits of interest:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/ac96dfaa08f1119ba17e55ad7ef35b0448801033">https://github.com/hjelmn/ompi-mca-var/commit/ac96dfaa08f1119ba17e55ad7ef35b0448801033</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/6450f9a5d5b080528ba8603ca6338d302bca5dc8">https://github.com/hjelmn/ompi-mca-var/commit/6450f9a5d5b080528ba8603ca6338d302bca5dc8</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/73e621b3684b1cbaee56a65b46a855af8ca76808">https://github.com/hjelmn/ompi-mca-var/commit/73e621b3684b1cbaee56a65b46a855af8ca76808</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/e44d6aaa4709883c8644a02e8379a56f0b637850">https://github.com/hjelmn/ompi-mca-var/commit/e44d6aaa4709883c8644a02e8379a56f0b637850</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/8577ab48be59b418f482ffdc2a2ea719895d8ad6">https://github.com/hjelmn/ompi-mca-var/commit/8577ab48be59b418f482ffdc2a2ea719895d8ad6</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/50a0874fbf4907c2e16c799e013e3499c9458503">https://github.com/hjelmn/ompi-mca-var/commit/50a0874fbf4907c2e16c799e013e3499c9458503</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/be525bef85f89078df164807df09b70daedbb23a">https://github.com/hjelmn/ompi-mca-var/commit/be525bef85f89078df164807df09b70daedbb23a</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A diff compared to the SVN HEAD is attached; it's currently around 74k
</span><br>
<span class="quotelev1">&gt; lines (!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It may take some time to understand the impacts on your components and
</span><br>
<span class="quotelev1">&gt; frameworks. That said, these changes *are* coming and there will be
</span><br>
<span class="quotelev1">&gt; time to fix issues on the trunk before these updates are CMRed to 1.7.
</span><br>
<span class="quotelev1">&gt; So I am setting the timeout for a week from today at 3:00 PM US
</span><br>
<span class="quotelev1">&gt; Mountain Daylight time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Because the commit is so invasive, I will be asking for quiet time
</span><br>
<span class="quotelev1">&gt; *** while I commit the changes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know if there is anything that should be done to improve
</span><br>
<span class="quotelev1">&gt; documentation. I will use git svn dcommit (the master repository is
</span><br>
<span class="quotelev1">&gt; git-svn) to push the 8 commits found on the svn-commit branch. I can
</span><br>
<span class="quotelev1">&gt; break it into more commits if there are any objections. I will then
</span><br>
<span class="quotelev1">&gt; remove the .gitignore file (any any other files not relevant to svn).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Questions? Comments? Hate mail?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; &lt;mca_revamp.patch.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12225.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<li><strong>Previous message:</strong> <a href="12223.php">Jeff Squyres (jsquyres): "[OMPI devel] Git SVN mirror not updating"</a>
<li><strong>In reply to:</strong> <a href="12207.php">Nathan Hjelm: "[OMPI devel] RFC: MCA system revamp phase 1"</a>
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
