<?
$subject_val = "[OMPI devel] RFC: mpirun command line arugments";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 11:52:01 2011" -->
<!-- isoreceived="20110421155201" -->
<!-- sent="Thu, 21 Apr 2011 11:51:53 -0400" -->
<!-- isosent="20110421155153" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: mpirun command line arugments" -->
<!-- id="EF30F371-A106-48EA-A86D-DE416486CE41_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: mpirun command line arugments<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 11:51:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9203.php">Jeff Squyres: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9201.php">Ken Lloyd: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9204.php">Ralph Castain: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Reply:</strong> <a href="9204.php">Ralph Castain: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Deprecate a bunch of old mpirun CLI parameters, remove *most*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;single dash&quot; long mpirun options, make &quot;mpirun --help&quot; much
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;more user friendly
<br>
<p>WHY: `mpirun --help` is currently 232 lines of output.  *Ouch*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Additionally, the Josh/Terry/Jeff affinity re-work will end up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;creating new mpirun CLI options and deprecating the old ones.
<br>
<p>WHEN: Maybe late in the 1.5 series (the new affinity stuff is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tentatively scheduled for late in the 1.5 series).  1.7 for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sure.
<br>
<p>WHERE: Mostly in orte/tools/orterun/
<br>
<p>TIMEOUT: ORNL face-to-face OMPI meeting (May 3)
<br>
<p>-----
<br>
<p>MORE DETAILS:
<br>
<p>We simply have too many options to mpirun.
<br>
<p>- Some could be removed
<br>
- Some should be removed
<br>
- Some should be deprecated (but still available)
<br>
- The --help output needs to be made (much) better
<br>
<p>The new mapping/affinity options effectively replace a bunch of the
<br>
old options.  The old mapping/affinity options should be deprecated in
<br>
favor of the new stuff.
<br>
<p>Additionally, there are at least a few old orterun options that are
<br>
either only of interest to developers and/or have an MCA parameter
<br>
backing them (and are fairly uncommonly used such that the MCA param
<br>
could be used instead).
<br>
<p>Finally, we have many options that are available via both &quot;-foo&quot; and
<br>
&quot;--foo&quot; (mostly for hysterical raisins).  In most cases, the
<br>
single-dash version should be removed -- per GNU conventions, long
<br>
names should only be available via double-dash.  There are a small
<br>
number of single-dash options that must be retained, however, for
<br>
compatibility with other MPI implementations and for mpiexec options
<br>
specifically listed in MPI-2.2:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;-np, -host, -hostfile, -machinefile, -wd, -wdir, -path
<br>
<p>I propose:
<br>
<p>1. Remove all other single-dash long name options.
<br>
<p>2. Make all deprecated options only available if the user
<br>
&nbsp;&nbsp;&nbsp;specifies --deprecated-options on the command line (or invokes mpirun
<br>
&nbsp;&nbsp;&nbsp;via mpirun.deprecated-options).
<br>
&nbsp;&nbsp;&nbsp;--&gt; This allows users to keep their existing scripts that use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deprecated options, but with a glaring signal that &quot;hey, this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;option you're using may disappear in a future version!&quot;
<br>
<p>3. Revamp the --help output to show a short listing of the most common
<br>
&nbsp;&nbsp;&nbsp;options, and a note that a) the mpirun(1) man page offers much more
<br>
&nbsp;&nbsp;&nbsp;detail, and b) --help-all shows the original, exhaustive CLI option
<br>
&nbsp;&nbsp;&nbsp;listing.
<br>
<p>Extra bonus points would be given for anyone who'd like to implement
<br>
an svn/hg-like &quot;help&quot; command, perhaps something like:
<br>
<p>&nbsp;&nbsp;mpirun help machinefile
<br>
&nbsp;&nbsp;...help output specifically about the machinefile option...
<br>
<p>I don't have time to do this last part, but it would be a great
<br>
usability feature.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9203.php">Jeff Squyres: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9201.php">Ken Lloyd: "Re: [OMPI devel] RFC: Second Try: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9204.php">Ralph Castain: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Reply:</strong> <a href="9204.php">Ralph Castain: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
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
