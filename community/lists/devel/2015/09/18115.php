<?
$subject_val = "Re: [OMPI devel] Interaction between orterun and user program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 04:26:46 2015" -->
<!-- isoreceived="20150929082646" -->
<!-- sent="Tue, 29 Sep 2015 17:26:42 +0900" -->
<!-- isosent="20150929082642" -->
<!-- name="Kay Khandan (Hamed)" -->
<!-- email="hkhandan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Interaction between orterun and user program" -->
<!-- id="250C5C17-D570-4FF8-B6F8-3834A3ED6D65_at_yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2D306D9A-96D9-4D7E-BDB5-EE1374430C0C_at_cisco.com" -->
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
<strong>Date:</strong> 2015-09-29 04:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18116.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.10.1: coming soon"</a>
<li><strong>Previous message:</strong> <a href="18114.php">Kay Khandan (Hamed): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>In reply to:</strong> <a href="18070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Jeff. I appreciate it. I was on holidays myself. So, that was perfectly alright.
<br>
<p>Best
<br>
&#226;&#128;&#148; Kay
<br>
<p><p><span class="quotelev1">&gt; On Sep 18, 2015, at 4:16 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph is the guy who needs to answer this for you -- he's on travel at the moment; his response may be a little delayed...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 16, 2015, at 4:17 AM, Kay Khandan (Hamed) &lt;hkhandan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My name is Kay. I&#226;&#128;&#153;m a huge &quot;oom-pi&quot; fan, but only recently have been looking at from devel perspective.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I appreciate if somebody shows me the entry point into understanding how orterun and user program interact, and more importantly how to change the way they interact.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The reason: I am making a plugin for MPI support in another message passing system. This plugin is loaded from a dynamic library sometime after the process is started and is run on a separated tread. Therefore, (1) it does not receive any command line arguments, and (2) it is not allowed to use standard pipes (file descriptors 0,1, 2). With that in mind, I&#226;&#128;&#153;de like to interface this plugin from inside so-called ARE (which is the name for the runtime environment for this particular message passing system) to our old friend ORTE. I have the option to run &#226;&#128;&#156;are&#226;&#128;&#157; as a user program run by orterun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $orterun are ./actual-user-program 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It might be wishful thinking, but I am also kindda hoping that I could get orterun out of the way all together by embedding a part of its implementation directly inside that plugin.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;de appreciate to hear your insights.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#148; Kay
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18038.php">http://www.open-mpi.org/community/lists/devel/2015/09/18038.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18070.php">http://www.open-mpi.org/community/lists/devel/2015/09/18070.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18116.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.10.1: coming soon"</a>
<li><strong>Previous message:</strong> <a href="18114.php">Kay Khandan (Hamed): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>In reply to:</strong> <a href="18070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Interaction between orterun and user program"</a>
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
