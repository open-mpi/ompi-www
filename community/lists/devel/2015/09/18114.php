<?
$subject_val = "Re: [OMPI devel] Interaction between orterun and user program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 04:25:18 2015" -->
<!-- isoreceived="20150929082518" -->
<!-- sent="Tue, 29 Sep 2015 17:25:09 +0900" -->
<!-- isosent="20150929082509" -->
<!-- name="Kay Khandan (Hamed)" -->
<!-- email="hkhandan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Interaction between orterun and user program" -->
<!-- id="C232BFC0-6DC0-4721-999B-B17208041C16_at_yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2F05A157-1137-43DB-8646-3675E2ECC7FF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Interaction between orterun and user program<br>
<strong>From:</strong> Kay Khandan (Hamed) (<em>hkhandan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-29 04:25:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18115.php">Kay Khandan (Hamed): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>Previous message:</strong> <a href="18113.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] PMIX vs Solaris"</a>
<li><strong>In reply to:</strong> <a href="18079.php">Ralph Castain: "Re: [OMPI devel] Interaction between orterun and user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18115.php">Kay Khandan (Hamed): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Great to hear back from you.
<br>
<p>I am going to try my chance with both options to see which one works better.
<br>
<p><p><span class="quotelev1">&gt; does ARE have a launcher that starts its own daemons that fork/exec the user procs?
</span><br>
<p>In essence there is one ARE daemon per node that runs and manages the apps submitted to it. So
<br>
<p>$are run myapp
<br>
<p>Will not run myapp directly (i.e. fork/exec), but submits it to the local ARE daemon which subsequently submits it to all remote daemons. The daemon should be started in advance either manually or from a startup script.
<br>
<p>$are start
<br>
<p>So, that&#226;&#128;&#153;s where it gets a bit different than orted, I guess.
<br>
<p><p><span class="quotelev1">&gt; You&#226;&#128;&#153;d also have to implement a PMIx server in those daemons to make it all work, but you could model that after the one in ORTE.
</span><br>
<p>I appreciate it if you tell me where to find the PMIx implementation in ORTE. It should be in ompi/orte subtree, but I can&#226;&#128;&#153;t tell where.
<br>
<p><p><span class="quotelev1">&gt; Otherwise, you&#226;&#128;&#153;d have to do it the way you describe. You need to replace the orte/mca/odls/default module with one specifically for ARE so we don&#226;&#128;&#153;t open pipes or do anything else ARE wouldn&#226;&#128;&#153;t like.
</span><br>
<p>I will give it a try. One question though. Do you know who is the one who ultimately calls the functions in odls_default_module.c? I.e. if I do a stack trace from within, say odls_default_fork_local_proc(), the names of which important modules would appear in that stack?
<br>
<p><p><span class="quotelev1">&gt; Shouldn&#226;&#128;&#153;t be too hard to do.
</span><br>
<p>That makes me feel much better.
<br>
<p><p><span class="quotelev1">&gt; I&#226;&#128;&#153;m happy to provide advice
</span><br>
<p>Sure. Very nice of you. I&#226;&#128;&#153;ll keep you posted.
<br>
<p><p><span class="quotelev1">&gt; - fwiw, others have done this before for other systems, and it wasn&#226;&#128;&#153;t too horrible.
</span><br>
<p>So~ I&#226;&#128;&#153;m just checking ... by your standards how much horrible is not too horrible?
<br>
<p><p>Anyways, 
<br>
Thanks a lot
<br>
<p>&#226;&#128;&#148; Kay
<br>
<p><p><p><span class="quotelev1">&gt; On Sep 20, 2015, at 1:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Kay
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suppose you could try to implement the MPI support directly in your plugin - does ARE have a launcher that starts its own daemons that fork/exec the user procs? You&#226;&#128;&#153;d also have to implement a PMIx server in those daemons to make it all work, but you could model that after the one in ORTE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Otherwise, you&#226;&#128;&#153;d have to do it the way you describe. You need to replace the orte/mca/odls/default module with one specifically for ARE so we don&#226;&#128;&#153;t open pipes or do anything else ARE wouldn&#226;&#128;&#153;t like. Shouldn&#226;&#128;&#153;t be too hard to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m happy to provide advice - fwiw, others have done this before for other systems, and it wasn&#226;&#128;&#153;t too horrible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 17, 2015, at 12:16 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph is the guy who needs to answer this for you -- he's on travel at the moment; his response may be a little delayed...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 16, 2015, at 4:17 AM, Kay Khandan (Hamed) &lt;hkhandan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My name is Kay. I&#226;&#128;&#153;m a huge &quot;oom-pi&quot; fan, but only recently have been looking at from devel perspective.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I appreciate if somebody shows me the entry point into understanding how orterun and user program interact, and more importantly how to change the way they interact.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason: I am making a plugin for MPI support in another message passing system. This plugin is loaded from a dynamic library sometime after the process is started and is run on a separated tread. Therefore, (1) it does not receive any command line arguments, and (2) it is not allowed to use standard pipes (file descriptors 0,1, 2). With that in mind, I&#226;&#128;&#153;de like to interface this plugin from inside so-called ARE (which is the name for the runtime environment for this particular message passing system) to our old friend ORTE. I have the option to run &#226;&#128;&#156;are&#226;&#128;&#157; as a user program run by orterun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $orterun are ./actual-user-program 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It might be wishful thinking, but I am also kindda hoping that I could get orterun out of the way all together by embedding a part of its implementation directly inside that plugin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#226;&#128;&#153;de appreciate to hear your insights.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#226;&#128;&#148; Kay
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18038.php">http://www.open-mpi.org/community/lists/devel/2015/09/18038.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18070.php">http://www.open-mpi.org/community/lists/devel/2015/09/18070.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18079.php">http://www.open-mpi.org/community/lists/devel/2015/09/18079.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18115.php">Kay Khandan (Hamed): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>Previous message:</strong> <a href="18113.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] PMIX vs Solaris"</a>
<li><strong>In reply to:</strong> <a href="18079.php">Ralph Castain: "Re: [OMPI devel] Interaction between orterun and user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18115.php">Kay Khandan (Hamed): "Re: [OMPI devel] Interaction between orterun and user program"</a>
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
