<?
$subject_val = "Re: [OMPI devel] Trunk returned to normal operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 09:36:52 2008" -->
<!-- isoreceived="20080228143652" -->
<!-- sent="Thu, 28 Feb 2008 07:36:36 -0700" -->
<!-- isosent="20080228143636" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk returned to normal operations" -->
<!-- id="C3EC1504.C6A0%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51D93E8F-5E93-4959-A949-4BF3FE6F566B_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 09:36:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3317.php">Jeff Squyres: "[OMPI devel] vt configuration issues"</a>
<li><strong>Previous message:</strong> <a href="3315.php">Jeff Squyres: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>In reply to:</strong> <a href="3314.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3315.php">Jeff Squyres: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/28/08 7:27 AM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Camille and myself are working also on improving the restart ability
</span><br>
<span class="quotelev1">&gt; of orte2. We are focusing on restarting individual processes (while
</span><br>
<span class="quotelev1">&gt; Josh needs to restart the entire job). However I guess most of the
</span><br>
<span class="quotelev1">&gt; functionalities are similar. Could we join your discussions on point 3 ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Certainly! The discussion is about what to do with orte/runtime/orte_cr.c.
<br>
That code basically does a reset of the ORTE system and then works through
<br>
an abbreviated form of orte_init. In doing this, it used the old
<br>
orte_sds.set_my_name API, which is no longer supported, and had a lot of
<br>
duplicated code that used to be in orte_init.
<br>
<p>However, the ESS now does the rte_init so that it can be tailored to the
<br>
local environment. If we move orte_cr into a new orte_ess.restart (or
<br>
whatever) API, then we could also allow each environment to tailor the
<br>
restart procedure to whatever it specifically needs.
<br>
<p>Alternatively, we could just restore a &quot;set_my_name&quot; API to the ESS.
<br>
<p>My personal preference is the first option as I feel it gives us the most
<br>
flexibility, and can extend C/R to other environments. But I leave that for
<br>
those working in C/R to decide.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 27 f&#233;vr. 08 &#224; 21:47, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, the ORTE merge appears to have gone well and is now complete -
</span><br>
<span class="quotelev2">&gt;&gt; you are
</span><br>
<span class="quotelev2">&gt;&gt; free to use the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A few caveats:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. obviously, you will need to autogen/configure once you update. I
</span><br>
<span class="quotelev2">&gt;&gt; -strongly- recommend you rm -rf your install directory first as you
</span><br>
<span class="quotelev2">&gt;&gt; will
</span><br>
<span class="quotelev2">&gt;&gt; definitely be hit with stale libraries from this commit
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. this is a &quot;drop&quot; from the ORTE devel effort. As such, it is -not-
</span><br>
<span class="quotelev2">&gt;&gt; complete. There are several known issues, particularly with
</span><br>
<span class="quotelev2">&gt;&gt; comm_spawn and
</span><br>
<span class="quotelev2">&gt;&gt; singleton comm_spawn in certain environments and scenarios. I have a
</span><br>
<span class="quotelev2">&gt;&gt; &quot;fix&quot;
</span><br>
<span class="quotelev2">&gt;&gt; already done and ready to be applied for the comm_spawn problems,
</span><br>
<span class="quotelev2">&gt;&gt; but I want
</span><br>
<span class="quotelev2">&gt;&gt; to test it some more in the morning before committing it to the
</span><br>
<span class="quotelev2">&gt;&gt; trunk - and
</span><br>
<span class="quotelev2">&gt;&gt; I didn't want to delay this merge any longer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. we know that checkpoint/restart is currently broken. Josh and I
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; discussed a couple of options for repairing it, and he will look at
</span><br>
<span class="quotelev2">&gt;&gt; it as
</span><br>
<span class="quotelev2">&gt;&gt; soon as he has a chance. It isn't a big problem - just need to
</span><br>
<span class="quotelev2">&gt;&gt; decide which
</span><br>
<span class="quotelev2">&gt;&gt; option he would prefer to pursue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The remaining ORTE scalability work should be moving into the trunk
</span><br>
<span class="quotelev2">&gt;&gt; over the
</span><br>
<span class="quotelev2">&gt;&gt; next few weeks (I will be on vacation 3/7-14, so it will likely take
</span><br>
<span class="quotelev2">&gt;&gt; through
</span><br>
<span class="quotelev2">&gt;&gt; March). We do not anticipate any API changes or framework adds/
</span><br>
<span class="quotelev2">&gt;&gt; deletes the
</span><br>
<span class="quotelev2">&gt;&gt; rest of the way - there will be a few new components added to existing
</span><br>
<span class="quotelev2">&gt;&gt; frameworks, some revamp of the logic in a few places, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will try to cover all the changes in one or two notes over the
</span><br>
<span class="quotelev2">&gt;&gt; next few
</span><br>
<span class="quotelev2">&gt;&gt; days to avoid carpal tunnel. Please feel free to ask questions and
</span><br>
<span class="quotelev2">&gt;&gt; I'll do
</span><br>
<span class="quotelev2">&gt;&gt; my best to provide answers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again for the cooperation tonight...
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3317.php">Jeff Squyres: "[OMPI devel] vt configuration issues"</a>
<li><strong>Previous message:</strong> <a href="3315.php">Jeff Squyres: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>In reply to:</strong> <a href="3314.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3315.php">Jeff Squyres: "Re: [OMPI devel] Trunk returned to normal operations"</a>
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
