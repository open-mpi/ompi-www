<?
$subject_val = "[OMPI devel] RFC: MCA system revamp phase 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 20 15:29:08 2013" -->
<!-- isoreceived="20130320192908" -->
<!-- sent="Wed, 20 Mar 2013 13:29:01 -0600" -->
<!-- isosent="20130320192901" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: MCA system revamp phase 1" -->
<!-- id="20130320192901.GA65781_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: MCA system revamp phase 1<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-20 15:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12208.php">Sebastian Rinke: "[OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Previous message:</strong> <a href="12206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: MCA system revamp phase 1"</a>
<li><strong>Reply:</strong> <a href="12224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: MCA system revamp phase 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: This is the first of a series of changes intended to update the
<br>
MCA parameter and frameworks/components systems. The specific
<br>
changes in this RFC are itemized below.
<br>
<p>Where: Just about the entire code base.
<br>
<p>Why: To support the MPI-3 MPI_T_* tools interface. Also, a
<br>
cleanup/revamp of the MCA param system has been on to to-do list
<br>
for a long, long time.
<br>
<p>Timeout: One week from today at 3pm US Mountain time (see below!).
<br>
<p>--------
<br>
<p>More detail:
<br>
<p>This RFC contains the following changes:
<br>
<p>MCA Variable System (aka &quot;MCA param system&quot;):
<br>
- Replaces the MCA parameter system. A &quot;shim&quot; layer will be provided
<br>
in the trunk (for a time) and v1.7 (for the duration of the series).
<br>
- All calls to mca_base_param_* have been changed to mca_base_var_*.
<br>
- Support for an override variable file
<br>
&quot;openmpi-mca-params-override.conf&quot; with values that cannot
<br>
otherwise be reset.
<br>
- Support for enumerated integer values. For examples, please look at
<br>
ompi/mca/coll/tuned .
<br>
- All components have been updated to the new system.
<br>
- ompi_info output generation has been updated to the new MCA
<br>
variable system.
<br>
<p>MCA Framework System:
<br>
- Formalizes the framework interface. Frameworks can now provide
<br>
functions for variable registration, open, and close. 
<br>
- Three functions are provided to interface with frameworks:
<br>
mca_base_framework_register (registers MCA variables for the
<br>
framework itself), mca_base_framework_open,
<br>
mca_base_framework_close.
<br>
- Declare your framework with MCA_BASE_FRAMEWORK_DECLARE (see
<br>
mca_base_framework.h) 
<br>
- All frameworks have been updated to the new system.
<br>
- All frameworks MUST conform to the new interface. This may
<br>
include 1.7 frameworks!
<br>
<p>The work can be found @ github (&quot;svn-commit&quot; branch):
<br>
<p><a href="http://github.com/hjelmn/ompi-mca-var">http://github.com/hjelmn/ompi-mca-var</a>
<br>
<p>Commits of interest:
<br>
<a href="https://github.com/hjelmn/ompi-mca-var/commit/ac96dfaa08f1119ba17e55ad7ef35b0448801033">https://github.com/hjelmn/ompi-mca-var/commit/ac96dfaa08f1119ba17e55ad7ef35b0448801033</a>
<br>
<a href="https://github.com/hjelmn/ompi-mca-var/commit/6450f9a5d5b080528ba8603ca6338d302bca5dc8">https://github.com/hjelmn/ompi-mca-var/commit/6450f9a5d5b080528ba8603ca6338d302bca5dc8</a>
<br>
<a href="https://github.com/hjelmn/ompi-mca-var/commit/73e621b3684b1cbaee56a65b46a855af8ca76808">https://github.com/hjelmn/ompi-mca-var/commit/73e621b3684b1cbaee56a65b46a855af8ca76808</a>
<br>
<a href="https://github.com/hjelmn/ompi-mca-var/commit/e44d6aaa4709883c8644a02e8379a56f0b637850">https://github.com/hjelmn/ompi-mca-var/commit/e44d6aaa4709883c8644a02e8379a56f0b637850</a>
<br>
<a href="https://github.com/hjelmn/ompi-mca-var/commit/8577ab48be59b418f482ffdc2a2ea719895d8ad6">https://github.com/hjelmn/ompi-mca-var/commit/8577ab48be59b418f482ffdc2a2ea719895d8ad6</a>
<br>
<a href="https://github.com/hjelmn/ompi-mca-var/commit/50a0874fbf4907c2e16c799e013e3499c9458503">https://github.com/hjelmn/ompi-mca-var/commit/50a0874fbf4907c2e16c799e013e3499c9458503</a>
<br>
<a href="https://github.com/hjelmn/ompi-mca-var/commit/be525bef85f89078df164807df09b70daedbb23a">https://github.com/hjelmn/ompi-mca-var/commit/be525bef85f89078df164807df09b70daedbb23a</a>
<br>
<p>A diff compared to the SVN HEAD is attached; it's currently around 74k
<br>
lines (!).
<br>
<p>It may take some time to understand the impacts on your components and
<br>
frameworks. That said, these changes *are* coming and there will be
<br>
time to fix issues on the trunk before these updates are CMRed to 1.7.
<br>
So I am setting the timeout for a week from today at 3:00 PM US
<br>
Mountain Daylight time.
<br>
<p>*** Because the commit is so invasive, I will be asking for quiet time
<br>
*** while I commit the changes.
<br>
<p>Please let me know if there is anything that should be done to improve
<br>
documentation. I will use git svn dcommit (the master repository is
<br>
git-svn) to push the 8 commits found on the svn-commit branch. I can
<br>
break it into more commits if there are any objections. I will then
<br>
remove the .gitignore file (any any other files not relevant to svn).
<br>
<p>Questions? Comments? Hate mail?
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12207/mca_revamp.patch.bz2">mca_revamp.patch.bz2</a>
</ul>
<!-- attachment="mca_revamp.patch.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12208.php">Sebastian Rinke: "[OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<li><strong>Previous message:</strong> <a href="12206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: MCA system revamp phase 1"</a>
<li><strong>Reply:</strong> <a href="12224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: MCA system revamp phase 1"</a>
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
