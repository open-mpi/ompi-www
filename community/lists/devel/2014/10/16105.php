<?
$subject_val = "Re: [OMPI devel] fixing a bug in 1.8 that's not in master";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 21:57:10 2014" -->
<!-- isoreceived="20141028015710" -->
<!-- sent="Mon, 27 Oct 2014 18:57:06 -0700" -->
<!-- isosent="20141028015706" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fixing a bug in 1.8 that's not in master" -->
<!-- id="4724D5AE-015D-4FC7-86E4-97A6BBC5DE6B_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj4KQRjCBuHfdvQiae337PMCZ3K+2xYuUOb6+GSV=OU4aA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] fixing a bug in 1.8 that's not in master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 21:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16106.php">Paul Kapinos: "[OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="16104.php">Howard Pritchard: "[OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<li><strong>In reply to:</strong> <a href="16104.php">Howard Pritchard: "[OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<li><strong>Reply:</strong> <a href="16107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just create a topic branch from v1.8 in a local clone of ompi-release, make the change there, and then file a PR on the ompi-release repo
<br>
<p>Obviously, if it is a bug solely confined to v1.8, you can&#226;&#128;&#153;t put it in master first :-)
<br>
<p><p><span class="quotelev1">&gt; On Oct 27, 2014, at 3:22 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A cut and past error seems to have happened with
</span><br>
<span class="quotelev1">&gt; plm_alps_modules.c in 1.8 which causes a compile failure
</span><br>
<span class="quotelev1">&gt; when building for cray.  So right now, there's no building
</span><br>
<span class="quotelev1">&gt; ompi 1.8 for crays. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is not present in master.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For these kinds of problems, are we suppose to bypass
</span><br>
<span class="quotelev1">&gt; all the &quot;has to be in master, need commit, etc.&quot; stuff described in 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests">https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests</a> &lt;<a href="https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests">https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and just go straight to pushing to a fork of ompi-release, etc.
</span><br>
<span class="quotelev1">&gt; as per the rest of the instructions on submitting pull requests?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just want to make sure I'm doing the right thing here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16104.php">http://www.open-mpi.org/community/lists/devel/2014/10/16104.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16105/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16106.php">Paul Kapinos: "[OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="16104.php">Howard Pritchard: "[OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<li><strong>In reply to:</strong> <a href="16104.php">Howard Pritchard: "[OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<li><strong>Reply:</strong> <a href="16107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
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
