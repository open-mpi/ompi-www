<?
$subject_val = "Re: [OMPI devel] RFC: mpirun command line arugments";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 19:39:56 2011" -->
<!-- isoreceived="20110421233956" -->
<!-- sent="Thu, 21 Apr 2011 19:39:49 -0400" -->
<!-- isosent="20110421233949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: mpirun command line arugments" -->
<!-- id="85927439-F786-4EA6-AE61-C4E22D190D12_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E50FC7F6-2D0D-4CC8-9402-3B949B771F94_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: mpirun command line arugments<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 19:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9207.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Previous message:</strong> <a href="9205.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>In reply to:</strong> <a href="9204.php">Ralph Castain: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this is probably better.
<br>
<p>I took a *quick* glance through the 232-line output before I sent this and probably made a bad assumption that some of them could go away.
<br>
<p>But definitely some of the old affinity options should become deprecated. That part of the proposal still stands.
<br>
<p><p>On Apr 21, 2011, at 6:52 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Might help if you were to list those CLI params you believe to be removable and/or those you propose to deprecate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just a quick glance: I don't see any options that are defunct, though we could argue about how many people use them. So perhaps what we discussed - having a short response for -h that lists the most commonly used ones, and a longer response to --help that contains them all - might be more appropriate?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 21, 2011, at 9:51 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Deprecate a bunch of old mpirun CLI parameters, remove *most*
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;single dash&quot; long mpirun options, make &quot;mpirun --help&quot; much
</span><br>
<span class="quotelev2">&gt;&gt;     more user friendly
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: `mpirun --help` is currently 232 lines of output.  *Ouch*
</span><br>
<span class="quotelev2">&gt;&gt;    Additionally, the Josh/Terry/Jeff affinity re-work will end up
</span><br>
<span class="quotelev2">&gt;&gt;    creating new mpirun CLI options and deprecating the old ones.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Maybe late in the 1.5 series (the new affinity stuff is
</span><br>
<span class="quotelev2">&gt;&gt;     tentatively scheduled for late in the 1.5 series).  1.7 for
</span><br>
<span class="quotelev2">&gt;&gt;     sure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: Mostly in orte/tools/orterun/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: ORNL face-to-face OMPI meeting (May 3)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MORE DETAILS:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We simply have too many options to mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Some could be removed
</span><br>
<span class="quotelev2">&gt;&gt; - Some should be removed
</span><br>
<span class="quotelev2">&gt;&gt; - Some should be deprecated (but still available)
</span><br>
<span class="quotelev2">&gt;&gt; - The --help output needs to be made (much) better
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The new mapping/affinity options effectively replace a bunch of the
</span><br>
<span class="quotelev2">&gt;&gt; old options.  The old mapping/affinity options should be deprecated in
</span><br>
<span class="quotelev2">&gt;&gt; favor of the new stuff.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, there are at least a few old orterun options that are
</span><br>
<span class="quotelev2">&gt;&gt; either only of interest to developers and/or have an MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt; backing them (and are fairly uncommonly used such that the MCA param
</span><br>
<span class="quotelev2">&gt;&gt; could be used instead).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Finally, we have many options that are available via both &quot;-foo&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--foo&quot; (mostly for hysterical raisins).  In most cases, the
</span><br>
<span class="quotelev2">&gt;&gt; single-dash version should be removed -- per GNU conventions, long
</span><br>
<span class="quotelev2">&gt;&gt; names should only be available via double-dash.  There are a small
</span><br>
<span class="quotelev2">&gt;&gt; number of single-dash options that must be retained, however, for
</span><br>
<span class="quotelev2">&gt;&gt; compatibility with other MPI implementations and for mpiexec options
</span><br>
<span class="quotelev2">&gt;&gt; specifically listed in MPI-2.2:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   -np, -host, -hostfile, -machinefile, -wd, -wdir, -path
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I propose:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Remove all other single-dash long name options.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Make all deprecated options only available if the user
</span><br>
<span class="quotelev2">&gt;&gt;  specifies --deprecated-options on the command line (or invokes mpirun
</span><br>
<span class="quotelev2">&gt;&gt;  via mpirun.deprecated-options).
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; This allows users to keep their existing scripts that use
</span><br>
<span class="quotelev2">&gt;&gt;      deprecated options, but with a glaring signal that &quot;hey, this
</span><br>
<span class="quotelev2">&gt;&gt;      option you're using may disappear in a future version!&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Revamp the --help output to show a short listing of the most common
</span><br>
<span class="quotelev2">&gt;&gt;  options, and a note that a) the mpirun(1) man page offers much more
</span><br>
<span class="quotelev2">&gt;&gt;  detail, and b) --help-all shows the original, exhaustive CLI option
</span><br>
<span class="quotelev2">&gt;&gt;  listing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Extra bonus points would be given for anyone who'd like to implement
</span><br>
<span class="quotelev2">&gt;&gt; an svn/hg-like &quot;help&quot; command, perhaps something like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun help machinefile
</span><br>
<span class="quotelev2">&gt;&gt; ...help output specifically about the machinefile option...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't have time to do this last part, but it would be a great
</span><br>
<span class="quotelev2">&gt;&gt; usability feature.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9207.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Previous message:</strong> <a href="9205.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>In reply to:</strong> <a href="9204.php">Ralph Castain: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
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
