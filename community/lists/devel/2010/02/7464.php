<?
$subject_val = "[OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 13:08:20 2010" -->
<!-- isoreceived="20100219180820" -->
<!-- sent="Fri, 19 Feb 2010 10:59:45 -0700" -->
<!-- isosent="20100219175945" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="ECC17F06-FD20-429D-AC0B-DF16A829993B_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Merge tmp fault recovery branch into trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-19 12:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7465.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>Previous message:</strong> <a href="7463.php">Lisandro Dalcin: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7473.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7473.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Merge a tmp branch for fault recovery development into the OMPI trunk
<br>
<p>WHY: Bring over work done by Josh and Ralph to extend OMPI's fault recovery capabilities
<br>
<p>WHERE: Impacts a number of ORTE files and a small number of OMPI files
<br>
<p>TIMEOUT: Barring objections and/or requests for delay, the weekend of Feb 27-28
<br>
<p>REFERENCE BRANCH: <a href="http://bitbucket.org/rhc/ompi-recos/overview/">http://bitbucket.org/rhc/ompi-recos/overview/</a>
<br>
<p>======================================================================
<br>
<p>BACKGROUND:
<br>
<p>Josh and Ralph have been working on a private branch off of the trunk on extended fault recovery procedures, mostly impacting ORTE. The new code optionally allows ORTE to recover from failed nodes, moving processes to other nodes in order to maintain operation. In addition, the code provides better support for recovering from individual process failures.
<br>
<p>Not all of the work done on the private branch will be brought over in this commit. Some of the MPI-specific code that allows recovery from process failure on-the-fly will be committed separately at a later date.
<br>
<p>This commit will include the infrastructure to support those advanced recovery operations. Among other things, this commit will introduce a new &quot;RecoS&quot; (Recovery Service/Strategy) framework to allow multiple strategies for responding to failures. The default module, called &quot;ignore&quot;, will stabilize the runtime environment for other RecoS components. In the absence of other RecoS components it will trigger the default behavior (abort the job) to be executed.
<br>
<p>This branch includes some configure modifications that allow a comma separated list of options to be passed to the '--with-ft' option. This allows us to enable any combination of 'cr' and 'recos' at build time, specifically so that the RecoS functionally can be enabled independently of the C/R functionality. Most of the changes outside of the ORTE layer are due to symbol cleanup resulting from this modification.
<br>
<p>For example, C/R specific code paths were previously incorrectly marked with:
<br>
#if OPAL_ENABLE_FT == 1
<br>
They are now marked as, where appropriate:
<br>
#if OPAL_ENABLE_FT_CR == 1
<br>
<p>Additionally, C/R specific components have modified configure.m4 files to change:
<br>
AS_IF([test &quot;$ompi_want_ft&quot; = &quot;0&quot;],
<br>
to:
<br>
AS_IF([test &quot;$ompi_want_ft_cr&quot; = &quot;0&quot;],
<br>
<p>We have created a public repo (reference branch, above) with the code to be merged into the trunk. Please feel free to check it out and test it.
<br>
<p>NOTE: the new recovery capability is only active if...
<br>
&nbsp;&nbsp;(a) you configure --with-ft=recos, and
<br>
&nbsp;&nbsp;(b) you set OMPI_MCA_recos_base_enable=1 to turn it on!
<br>
<p>Comments, suggestions, and corrections are welcome!
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7464/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7465.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>Previous message:</strong> <a href="7463.php">Lisandro Dalcin: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7473.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7473.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
