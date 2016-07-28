<?
$subject_val = "[OMPI devel] Trunk returned to normal operations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 21:47:54 2008" -->
<!-- isoreceived="20080228024754" -->
<!-- sent="Wed, 27 Feb 2008 19:47:42 -0700" -->
<!-- isosent="20080228024742" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk returned to normal operations" -->
<!-- id="C3EB6EDE.47D1%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk returned to normal operations<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 21:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3310.php">George Bosilca: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Previous message:</strong> <a href="3308.php">Ralph Castain: "[OMPI devel] Taking the trunk..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3310.php">George Bosilca: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Reply:</strong> <a href="3310.php">George Bosilca: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Reply:</strong> <a href="3314.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Reply:</strong> <a href="3315.php">Jeff Squyres: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Okay, the ORTE merge appears to have gone well and is now complete - you are
<br>
free to use the trunk.
<br>
<p>A few caveats:
<br>
<p>1. obviously, you will need to autogen/configure once you update. I
<br>
-strongly- recommend you rm -rf your install directory first as you will
<br>
definitely be hit with stale libraries from this commit
<br>
<p>2. this is a &quot;drop&quot; from the ORTE devel effort. As such, it is -not-
<br>
complete. There are several known issues, particularly with comm_spawn and
<br>
singleton comm_spawn in certain environments and scenarios. I have a &quot;fix&quot;
<br>
already done and ready to be applied for the comm_spawn problems, but I want
<br>
to test it some more in the morning before committing it to the trunk - and
<br>
I didn't want to delay this merge any longer.
<br>
<p>3. we know that checkpoint/restart is currently broken. Josh and I have
<br>
discussed a couple of options for repairing it, and he will look at it as
<br>
soon as he has a chance. It isn't a big problem - just need to decide which
<br>
option he would prefer to pursue.
<br>
<p>The remaining ORTE scalability work should be moving into the trunk over the
<br>
next few weeks (I will be on vacation 3/7-14, so it will likely take through
<br>
March). We do not anticipate any API changes or framework adds/deletes the
<br>
rest of the way - there will be a few new components added to existing
<br>
frameworks, some revamp of the logic in a few places, etc.
<br>
<p>I will try to cover all the changes in one or two notes over the next few
<br>
days to avoid carpal tunnel. Please feel free to ask questions and I'll do
<br>
my best to provide answers.
<br>
<p>Thanks again for the cooperation tonight...
<br>
Ralph
<br>
<p><p>&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3310.php">George Bosilca: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Previous message:</strong> <a href="3308.php">Ralph Castain: "[OMPI devel] Taking the trunk..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3310.php">George Bosilca: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Reply:</strong> <a href="3310.php">George Bosilca: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Reply:</strong> <a href="3314.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Reply:</strong> <a href="3315.php">Jeff Squyres: "Re: [OMPI devel] Trunk returned to normal operations"</a>
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
