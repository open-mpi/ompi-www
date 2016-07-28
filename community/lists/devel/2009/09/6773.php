<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 09:59:09 2009" -->
<!-- isoreceived="20090904135909" -->
<!-- sent="Fri, 4 Sep 2009 15:56:36 +0200 (CEST)" -->
<!-- isosent="20090904135636" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="alpine.DEB.2.00.0909041550530.31624_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A632D11D-5F2E-488C-92EE-A200B72BED27_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 09:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6774.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6772.php">Arthur Huillet: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6771.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6774.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like users at LANL are not very nice ;)
<br>
<p>Indeed, this is no hard security. Only a way to prevent users from doing 
<br>
mistakes. We often give users special tuning for their application and 
<br>
when they see their application is going faster, they start messing with 
<br>
every parameter hoping that it will go even faster.
<br>
<p>So, this feature is to prevent the dumb user from breaking everything, not 
<br>
to prevent real sabotage.
<br>
<p>Sylvain
<br>
<p>On Fri, 4 Sep 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Let me point out the obvious since this has plagued us at LANL with regard to 
</span><br>
<span class="quotelev1">&gt; this concept. If a user wants to do something different, all they have to do 
</span><br>
<span class="quotelev1">&gt; is download and build their own copy of OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Amazingly enough, that is exactly what they do. When we build our production 
</span><br>
<span class="quotelev1">&gt; versions, we actually &quot;no-build&quot; modules we don't want them using (e.g., 
</span><br>
<span class="quotelev1">&gt; certain BTL's that use privileged network interfaces) so even MCA params 
</span><br>
<span class="quotelev1">&gt; won't let them do something undesirable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No good - they just try until they realize it won't work, then download and 
</span><br>
<span class="quotelev1">&gt; build their own version...and merrily hose the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point here: this concept can help, but it should in no way be viewed as a 
</span><br>
<span class="quotelev1">&gt; solution to the problem you are trying to solve. It is at best a minor 
</span><br>
<span class="quotelev1">&gt; obstacle as we made it very simple for a user to circumvent such measures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which is why I never made the effort to actually implement what was in that 
</span><br>
<span class="quotelev1">&gt; ticket. It was decided that it really wouldn't help us here, and would only 
</span><br>
<span class="quotelev1">&gt; result in further encouraging user-owned builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2009, at 12:42 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 4, 2009, at 8:26 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can the file name ( openmpi-priv-mca-params.conf ) also be configurable ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, it isn't, presently, but this can be changed if needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If it's configurable, it must be configurable at configure time -- not run 
</span><br>
<span class="quotelev2">&gt;&gt; time -- otherwise, a user could just give a different filename at runtime 
</span><br>
<span class="quotelev2">&gt;&gt; and get around all the &quot;privileged&quot; values.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6774.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6772.php">Arthur Huillet: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6771.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6774.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
