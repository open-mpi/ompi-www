<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 13 16:45:39 2005" -->
<!-- isoreceived="20051213214539" -->
<!-- sent="Tue, 13 Dec 2005 14:45:36 -0700" -->
<!-- isosent="20051213214536" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  rsh and fork pls components" -->
<!-- id="7.0.0.16.2.20051213144326.02591178_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9EA9623B-EE14-46AC-A743-91217D197069_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-13 16:45:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0618.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<li><strong>Previous message:</strong> <a href="0616.php">Jeff Squyres: "rsh and fork pls components"</a>
<li><strong>In reply to:</strong> <a href="0616.php">Jeff Squyres: "rsh and fork pls components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0618.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<li><strong>Reply:</strong> <a href="0618.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No problem with me - seems straightforward and resolves some confusion.
<br>
<p>On the orted check for the fork pls, you will find that there is a 
<br>
flag in the process info structure that indicates &quot;I am a daemon&quot;. 
<br>
You may just need to check that flag - gets set very early and so 
<br>
should be available in time for this purpose.
<br>
<p><p>At 02:06 PM 12/13/2005, you wrote:
<br>
<span class="quotelev1">&gt;I'd like to suggest a change for the rsh and fork pls components
</span><br>
<span class="quotelev1">&gt;based on some real-world feedback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The rsh pls, despite its name, defaults to using &quot;ssh -x&quot; instead of
</span><br>
<span class="quotelev1">&gt;&quot;rsh&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For users who do not have ssh in their PATH (e.g., for clusters that
</span><br>
<span class="quotelev1">&gt;are walled off from the rest of the net and only have rsh), the rsh
</span><br>
<span class="quotelev1">&gt;pls component will disqualify itself during selection and therefore
</span><br>
<span class="quotelev1">&gt;the &quot;fork&quot; pls will get selected, which will fail when it tries to
</span><br>
<span class="quotelev1">&gt;launch for a variety of reasons (it's only designed to work within
</span><br>
<span class="quotelev1">&gt;the orted).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. I'd like to change the meaning of the pls_rsh_agent MCA parameter
</span><br>
<span class="quotelev1">&gt;to be a colon-delimited list of agents to search for.  This is still
</span><br>
<span class="quotelev1">&gt;backwards-compatible -- if someone does the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         mpirun --mca pla_rsh_agent rsh -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That also still works.  But we might want to extend the default value
</span><br>
<span class="quotelev1">&gt;from:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ssh -x
</span><br>
<span class="quotelev1">&gt;to:
</span><br>
<span class="quotelev1">&gt;         ssh -x : rsh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So that if &quot;ssh&quot; is not found in the $PATH, we'll then try to find
</span><br>
<span class="quotelev1">&gt;&quot;rsh&quot; and use that if it's found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If the rsh pls cannot find any of the agents in the list, then it
</span><br>
<span class="quotelev1">&gt;should disqualify itself from selection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. I'd like to add some kind of check to the fork pls so that it
</span><br>
<span class="quotelev1">&gt;never allows itself to be selected outside of the orted.  I'm not
</span><br>
<span class="quotelev1">&gt;sure what that check would entail (haven't looked at the code yet),
</span><br>
<span class="quotelev1">&gt;but we should prevent this situation because we know it will fail
</span><br>
<span class="quotelev1">&gt;(and currently produce a cryptic error message for the user).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'd like to get both of these in for v1.0.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;{+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt;{+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt;{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0618.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<li><strong>Previous message:</strong> <a href="0616.php">Jeff Squyres: "rsh and fork pls components"</a>
<li><strong>In reply to:</strong> <a href="0616.php">Jeff Squyres: "rsh and fork pls components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0618.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<li><strong>Reply:</strong> <a href="0618.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
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
