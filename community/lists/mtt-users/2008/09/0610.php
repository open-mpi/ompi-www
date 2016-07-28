<?
$subject_val = "[MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 18:15:48 2008" -->
<!-- isoreceived="20080915221548" -->
<!-- sent="Mon, 15 Sep 2008 18:15:43 -0400" -->
<!-- isosent="20080915221543" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[MTT users] Patch to add --local-scratch option" -->
<!-- id="ea86ce220809151515t2da68c62y447e933073964cfc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [MTT users] Patch to add --local-scratch option<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 18:15:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/08/0609.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0616.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Attached is a patchfile for the mtt trunk that adds a
<br>
--local-scratch &lt;dir_name&gt;
<br>
option to client/mtt.  You can also specify something like
<br>
this in your [MTT] ini section:
<br>
local_scratch = &amp;shell(&quot;echo /tmp/`whoami`_mtt&quot;)
<br>
<p>This local-scratch directory is then used for part of the --mpi-install
<br>
phase to speed up your run.  Specifically, the source-code of the
<br>
MPI is untarred there, configure is run, make all, and make check.
<br>
Then, when make install is invoked the MPI is installed into the
<br>
usual place as if you hadn't used --local-scratch.  If you don't
<br>
use --local-scratch, then the builds occur in the usual place that
<br>
they have before.
<br>
<p>For the clusters at IU that seem to have slow NSF home directories,
<br>
this cuts the --mpi-install phase time in half.
<br>
<p>The downside is that if the MPI build fails, your build directory is out
<br>
on some compile-node's /tmp and is harder to go debug.  But, since
<br>
mpi build failures are now rare, this should make for quicker turnaround
<br>
for the general case.
<br>
<p>I think I adjusted the code properly for the vpath build case, but I've
<br>
never used that so haven't tested it.  Also, I adjusted the free disk space
<br>
check code.  Right now it only checks the free space on --scratch,
<br>
and won't detect if --local-scratch is full.  If people really care, I
<br>
could make it check both later.  But for now, if your /tmp is full
<br>
you probably have other problems to worry about.
<br>
<p>Comments?  Can you try it out, and if I get no objections, I'd like
<br>
to put this into the MTT trunk this week.
<br>
<pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0610/mtt-local-scratch.patch">mtt-local-scratch.patch</a>
</ul>
<!-- attachment="mtt-local-scratch.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/08/0609.php">Jeff Squyres: "Re: [MTT users] FW: ALPS modifications for MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0616.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
