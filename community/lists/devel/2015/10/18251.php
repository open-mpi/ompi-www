<?
$subject_val = "Re: [OMPI devel] mtt-submit, etc.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 00:20:59 2015" -->
<!-- isoreceived="20151023042059" -->
<!-- sent="Fri, 23 Oct 2015 00:20:54 -0400" -->
<!-- isosent="20151023042054" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mtt-submit, etc." -->
<!-- id="D511E205-C0DF-48C1-B5D3-CD79AF51E078_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="41E27A30-D982-410E-A8E9-F1A7B7C0EFB6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mtt-submit, etc.<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-23 00:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18252.php">Federico Reghenzani: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18250.php">Gilles Gouaillardet: "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>In reply to:</strong> <a href="18249.php">Ralph Castain: "Re: [OMPI devel] mtt-submit, etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18255.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>Reply:</strong> <a href="18255.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtt-submit, etc."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are able to connect (assuming ssh) to the nodes that will execute the tests, why can&#226;&#128;&#153;t you simply use an ssh tunnel to contact the IU server ?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; On Oct 23, 2015, at 00:08 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was thinking about this, and I believe it would require a change to the mtt client to avoid it. I&#226;&#128;&#153;m working on a new Python-based version of it, and I&#226;&#128;&#153;ll make sure to deal with this there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the interim, I&#226;&#128;&#153;ll have to defer to some old, gray Perl guru to update the current client
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 22, 2015, at 9:23 AM, Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't seem to have gotten subscribed yet to mtt-users mail list so
</span><br>
<span class="quotelev2">&gt;&gt; forwarding to the dev team.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt;&gt; From: Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2015-10-22 10:18 GMT-06:00
</span><br>
<span class="quotelev2">&gt;&gt; Subject: mtt-submit, etc.
</span><br>
<span class="quotelev2">&gt;&gt; To: mtt-users_at_[hidden] &lt;mailto:mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HI Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have the following issue with a cluster I would like to use for submitting MTT results
</span><br>
<span class="quotelev2">&gt;&gt; for Open MPI, namely, that the nodes on which I have to submit batch jobs to run
</span><br>
<span class="quotelev2">&gt;&gt; the tests don't have external internet connectivity, so if my mtt ini file has a IU database reporter
</span><br>
<span class="quotelev2">&gt;&gt; section, the run dies in the &quot;ping the mtt server&quot; test.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I have right now is a two-stage process where I checkout and compile/build
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI and the tests on a front end which does have access to the mtt server.
</span><br>
<span class="quotelev2">&gt;&gt; This part works and gets reported back to IU database. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can run the tests using mtt, but have to disable all the mtt server reporter stuff.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I thought I could use mtt-submit to submit some kind of mttdatabase debug file
</span><br>
<span class="quotelev2">&gt;&gt; back to IU once the batch job has completed, but I can't figure out a way
</span><br>
<span class="quotelev2">&gt;&gt; to generate this file without enable the mtt server reporter section in the ini file,
</span><br>
<span class="quotelev2">&gt;&gt; and so back to the ping failure issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Would anyone have suggestions on how to work around this problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18244.php">http://www.open-mpi.org/community/lists/devel/2015/10/18244.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18249.php">http://www.open-mpi.org/community/lists/devel/2015/10/18249.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18251/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18252.php">Federico Reghenzani: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18250.php">Gilles Gouaillardet: "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>In reply to:</strong> <a href="18249.php">Ralph Castain: "Re: [OMPI devel] mtt-submit, etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18255.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>Reply:</strong> <a href="18255.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtt-submit, etc."</a>
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
