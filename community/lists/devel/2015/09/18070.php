<?
$subject_val = "Re: [OMPI devel] Interaction between orterun and user program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 15:16:46 2015" -->
<!-- isoreceived="20150917191646" -->
<!-- sent="Thu, 17 Sep 2015 19:16:42 +0000" -->
<!-- isosent="20150917191642" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Interaction between orterun and user program" -->
<!-- id="2D306D9A-96D9-4D7E-BDB5-EE1374430C0C_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="E1FE5373-A90E-4231-A504-FD852CEEF57A_at_yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 15:16:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18071.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18069.php">Dahai Guo: "[OMPI devel] papers/reports about Open MPI collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="18038.php">Kay Khandan (Hamed): "[OMPI devel] Interaction between orterun and user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18079.php">Ralph Castain: "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>Reply:</strong> <a href="18079.php">Ralph Castain: "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>Reply:</strong> <a href="18115.php">Kay Khandan (Hamed): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph is the guy who needs to answer this for you -- he's on travel at the moment; his response may be a little delayed...
<br>

<br>

<br>
<span class="quotelev1">&gt; On Sep 16, 2015, at 4:17 AM, Kay Khandan (Hamed) &lt;hkhandan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My name is Kay. I&#226;&#128;&#153;m a huge &quot;oom-pi&quot; fan, but only recently have been looking at from devel perspective.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I appreciate if somebody shows me the entry point into understanding how orterun and user program interact, and more importantly how to change the way they interact.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason: I am making a plugin for MPI support in another message passing system. This plugin is loaded from a dynamic library sometime after the process is started and is run on a separated tread. Therefore, (1) it does not receive any command line arguments, and (2) it is not allowed to use standard pipes (file descriptors 0,1, 2). With that in mind, I&#226;&#128;&#153;de like to interface this plugin from inside so-called ARE (which is the name for the runtime environment for this particular message passing system) to our old friend ORTE. I have the option to run &#226;&#128;&#156;are&#226;&#128;&#157; as a user program run by orterun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $orterun are ./actual-user-program 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It might be wishful thinking, but I am also kindda hoping that I could get orterun out of the way all together by embedding a part of its implementation directly inside that plugin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;de appreciate to hear your insights.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148; Kay
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18038.php">http://www.open-mpi.org/community/lists/devel/2015/09/18038.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18071.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18069.php">Dahai Guo: "[OMPI devel] papers/reports about Open MPI collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="18038.php">Kay Khandan (Hamed): "[OMPI devel] Interaction between orterun and user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18079.php">Ralph Castain: "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>Reply:</strong> <a href="18079.php">Ralph Castain: "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>Reply:</strong> <a href="18115.php">Kay Khandan (Hamed): "Re: [OMPI devel] Interaction between orterun and user program"</a>
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
