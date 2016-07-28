<?
$subject_val = "Re: [OMPI devel] Trunk returned to normal operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 09:27:59 2008" -->
<!-- isoreceived="20080228142759" -->
<!-- sent="Thu, 28 Feb 2008 09:27:44 -0500" -->
<!-- isosent="20080228142744" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk returned to normal operations" -->
<!-- id="51D93E8F-5E93-4959-A949-4BF3FE6F566B_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3EB6EDE.47D1%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk returned to normal operations<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 09:27:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3315.php">Jeff Squyres: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Previous message:</strong> <a href="3313.php">Ralph H Castain: "[OMPI devel] Revised trunk: debugging output"</a>
<li><strong>In reply to:</strong> <a href="3309.php">Ralph Castain: "[OMPI devel] Trunk returned to normal operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3316.php">Ralph H Castain: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Reply:</strong> <a href="3316.php">Ralph H Castain: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Camille and myself are working also on improving the restart ability  
<br>
of orte2. We are focusing on restarting individual processes (while  
<br>
Josh needs to restart the entire job). However I guess most of the  
<br>
functionalities are similar. Could we join your discussions on point 3 ?
<br>
<p>Aurelien
<br>
<p><p>Le 27 f&#233;vr. 08 &#224; 21:47, Ralph Castain a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, the ORTE merge appears to have gone well and is now complete -  
</span><br>
<span class="quotelev1">&gt; you are
</span><br>
<span class="quotelev1">&gt; free to use the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A few caveats:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. obviously, you will need to autogen/configure once you update. I
</span><br>
<span class="quotelev1">&gt; -strongly- recommend you rm -rf your install directory first as you  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; definitely be hit with stale libraries from this commit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this is a &quot;drop&quot; from the ORTE devel effort. As such, it is -not-
</span><br>
<span class="quotelev1">&gt; complete. There are several known issues, particularly with  
</span><br>
<span class="quotelev1">&gt; comm_spawn and
</span><br>
<span class="quotelev1">&gt; singleton comm_spawn in certain environments and scenarios. I have a  
</span><br>
<span class="quotelev1">&gt; &quot;fix&quot;
</span><br>
<span class="quotelev1">&gt; already done and ready to be applied for the comm_spawn problems,  
</span><br>
<span class="quotelev1">&gt; but I want
</span><br>
<span class="quotelev1">&gt; to test it some more in the morning before committing it to the  
</span><br>
<span class="quotelev1">&gt; trunk - and
</span><br>
<span class="quotelev1">&gt; I didn't want to delay this merge any longer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. we know that checkpoint/restart is currently broken. Josh and I  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; discussed a couple of options for repairing it, and he will look at  
</span><br>
<span class="quotelev1">&gt; it as
</span><br>
<span class="quotelev1">&gt; soon as he has a chance. It isn't a big problem - just need to  
</span><br>
<span class="quotelev1">&gt; decide which
</span><br>
<span class="quotelev1">&gt; option he would prefer to pursue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The remaining ORTE scalability work should be moving into the trunk  
</span><br>
<span class="quotelev1">&gt; over the
</span><br>
<span class="quotelev1">&gt; next few weeks (I will be on vacation 3/7-14, so it will likely take  
</span><br>
<span class="quotelev1">&gt; through
</span><br>
<span class="quotelev1">&gt; March). We do not anticipate any API changes or framework adds/ 
</span><br>
<span class="quotelev1">&gt; deletes the
</span><br>
<span class="quotelev1">&gt; rest of the way - there will be a few new components added to existing
</span><br>
<span class="quotelev1">&gt; frameworks, some revamp of the logic in a few places, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try to cover all the changes in one or two notes over the  
</span><br>
<span class="quotelev1">&gt; next few
</span><br>
<span class="quotelev1">&gt; days to avoid carpal tunnel. Please feel free to ask questions and  
</span><br>
<span class="quotelev1">&gt; I'll do
</span><br>
<span class="quotelev1">&gt; my best to provide answers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for the cooperation tonight...
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3315.php">Jeff Squyres: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Previous message:</strong> <a href="3313.php">Ralph H Castain: "[OMPI devel] Revised trunk: debugging output"</a>
<li><strong>In reply to:</strong> <a href="3309.php">Ralph Castain: "[OMPI devel] Trunk returned to normal operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3316.php">Ralph H Castain: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Reply:</strong> <a href="3316.php">Ralph H Castain: "Re: [OMPI devel] Trunk returned to normal operations"</a>
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
