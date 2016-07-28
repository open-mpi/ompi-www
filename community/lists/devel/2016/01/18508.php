<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 12:55:23 2016" -->
<!-- isoreceived="20160125175523" -->
<!-- sent="Mon, 25 Jan 2016 17:55:20 +0000" -->
<!-- isosent="20160125175520" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="0E22F599-2818-4660-9241-61BA0757BFCC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj5q1B0kPMuCpqhfyujHyyvFMDzOs372drXxS4jfz=t=_g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] tm-less tm module<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 12:55:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18509.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18507.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18505.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18509.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18509.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I'm of split mind here.
<br>
<p>I can see what Howard is saying here -- adding complexity is usually a bad thing.
<br>
<p>But we have gotten these problem reports multiple times over the years: someone *thinking* that they have built with launcher support X (e.g., TM, LSF), but then figuring out later that things aren't running as expected, and after a bunch of work, figure out that it's because they didn't build with support X.
<br>
<p>Gilles idea actually sounds interesting -- if the tm module detect some of the sentinel PBS/TM env variables, emit a show_help() if we don't have full TM support compiled in.  This would actually save some users a bunch of time and frustration.
<br>
<p>--&gt; Keep in mind that the SLRUM launcher is different, because it's all CLI-based (not API-based) and therefore we always build it (because we don't have to find headers and libraries).
<br>
<p>FWIW, we do have precedent of having extra MCA params for users to turn off warnings that they don't want to see.
<br>
<p>I guess the question here is: is there a valid use case for running in PBS/Torque and *not* wanting to use the TM launcher?
<br>
<p><p><p><p><p><span class="quotelev1">&gt; On Jan 25, 2016, at 10:11 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would prefer improving the faq rather than adding yet more complexity in this area.  The way things go you would add this feature then someone else with a different use case would complain we had broken something for them.  Then we would add another mca param to disable the new tm less module etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the faq should be more explicit about configury options required for orte/resource manager integration feature to work. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sent from my smart phonr so no good type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 24, 2016 5:17 PM, &quot;Gilles Gouaillardet&quot; &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there was a question about mtt on the mtt mailing list <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/01/0840.php">http://www.open-mpi.org/community/lists/mtt-users/2016/01/0840.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after a few emails (some offline) it seems that was a configuration issue.
</span><br>
<span class="quotelev1">&gt; the user is running PBSPro and it seems OpenMPI was not configured with the tm module
</span><br>
<span class="quotelev1">&gt; (e.g. tm is not included in the default location, and he did not configure with --with-tm=/.../pbspro)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in this case, the tm module is not built, and when a job runs under PBSPro without any hostfile,
</span><br>
<span class="quotelev1">&gt; the job runs on one node only.
</span><br>
<span class="quotelev1">&gt; in order to make this easier to diagnose, what about always building the tm module :
</span><br>
<span class="quotelev1">&gt; - if tm is found by configury, build the OpenMPI tm modules as usual
</span><br>
<span class="quotelev1">&gt; - if tm is not found by configury, build a dumb module that will issue a warning or abort
</span><br>
<span class="quotelev1">&gt;   if a job is ran under PBS/torque
</span><br>
<span class="quotelev1">&gt;   (e.g. some PBS specific environment variable are defined)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; of course, the spec of this &quot;dumb&quot; module can be improved, for example
</span><br>
<span class="quotelev1">&gt; - add a MCA parameter to disable the warning
</span><br>
<span class="quotelev1">&gt; - issue the warning only if there is more that one node in the job *and* no machinefile nor host list was passed to the mpirun command line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18497.php">http://www.open-mpi.org/community/lists/devel/2016/01/18497.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18505.php">http://www.open-mpi.org/community/lists/devel/2016/01/18505.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18509.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18507.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18505.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18509.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18509.php">Nathan Hjelm: "Re: [OMPI devel] tm-less tm module"</a>
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
