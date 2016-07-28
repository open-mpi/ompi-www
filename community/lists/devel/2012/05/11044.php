<?
$subject_val = "[OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 16:00:22 2012" -->
<!-- isoreceived="20120529200022" -->
<!-- sent="Tue, 29 May 2012 16:00:17 -0400" -->
<!-- isosent="20120529200017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST" -->
<!-- id="D7803EE5-DB3C-463D-B8B9-39337960F8A9_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-29 16:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11045.php">Ralph Castain: "[OMPI devel] Warning in fcoll"</a>
<li><strong>Previous message:</strong> <a href="11043.php">Josh Hursey: "Re: [OMPI devel] Open MPI meeting next week"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11049.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11049.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per ticket #3108, there were still some unfortunate bugs in the affinity code in 1.6.  :-(
<br>
<p>These have now been fixed.  ...but since is the 2nd or 3rd time we have &quot;fixed&quot; the 1.5/1.6 series w.r.t. processor affinity, I'd really like people to test this stuff before it's committed and we ship 1.6.1.  I've put tarballs containing the fixes here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
<br>
<p>Can you please try mpirun options like --bind-to-core and --bind-to-socket and ensure that they still work for you?  (even on machines with hyperthreading enabled, if you have access to such things)
<br>
<p>IBM: I'd particularly like to hear that we haven't made anything worse on POWER systems.  Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11045.php">Ralph Castain: "[OMPI devel] Warning in fcoll"</a>
<li><strong>Previous message:</strong> <a href="11043.php">Josh Hursey: "Re: [OMPI devel] Open MPI meeting next week"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11049.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11049.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
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
