<?
$subject_val = "Re: [OMPI devel] mtt-submit, etc.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 00:20:46 2015" -->
<!-- isoreceived="20151023042046" -->
<!-- sent="Fri, 23 Oct 2015 13:20:38 +0900" -->
<!-- isosent="20151023042038" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mtt-submit, etc." -->
<!-- id="5629B596.7040001_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-23 00:20:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18251.php">George Bosilca: "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>Previous message:</strong> <a href="18249.php">Ralph Castain: "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>In reply to:</strong> <a href="18249.php">Ralph Castain: "Re: [OMPI devel] mtt-submit, etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18251.php">George Bosilca: "Re: [OMPI devel] mtt-submit, etc."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>
<p>that has already been raised in 
<br>
<a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/0820.php">http://www.open-mpi.org/community/lists/mtt-users/2014/10/0820.php</a>
<br>
<p>at the end, Christoph claimed he could achieve that with mtt-relay
<br>
(but provided no detail on how ...)
<br>
<p>You might want to check the full thread and/or ask Christoph directly
<br>
<p>Ralph,
<br>
<p>IIRC, there is a risk such offline tools can be used to send twice the 
<br>
same result to the mtt server, and the mtt server has no way to ignore 
<br>
those duplicates.
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/23/2015 1:08 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I was thinking about this, and I believe it would require a change to 
</span><br>
<span class="quotelev1">&gt; the mtt client to avoid it. I&#146;m working on a new Python-based version 
</span><br>
<span class="quotelev1">&gt; of it, and I&#146;ll make sure to deal with this there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the interim, I&#146;ll have to defer to some old, gray Perl guru to 
</span><br>
<span class="quotelev1">&gt; update the current client
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 22, 2015, at 9:23 AM, Howard Pritchard &lt;hppritcha_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
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
<span class="quotelev2">&gt;&gt; From: *Howard Pritchard* &lt;hppritcha_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:hppritcha_at_[hidden]&gt;&gt;
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
<span class="quotelev2">&gt;&gt; I have the following issue with a cluster I would like to use for 
</span><br>
<span class="quotelev2">&gt;&gt; submitting MTT results
</span><br>
<span class="quotelev2">&gt;&gt; for Open MPI, namely, that the nodes on which I have to submit batch 
</span><br>
<span class="quotelev2">&gt;&gt; jobs to run
</span><br>
<span class="quotelev2">&gt;&gt; the tests don't have external internet connectivity, so if my mtt ini 
</span><br>
<span class="quotelev2">&gt;&gt; file has a IU database reporter
</span><br>
<span class="quotelev2">&gt;&gt; section, the run dies in the &quot;ping the mtt server&quot; test.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I have right now is a two-stage process where I checkout and 
</span><br>
<span class="quotelev2">&gt;&gt; compile/build
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI and the tests on a front end which does have access to the 
</span><br>
<span class="quotelev2">&gt;&gt; mtt server.
</span><br>
<span class="quotelev2">&gt;&gt; This part works and gets reported back to IU database.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can run the tests using mtt, but have to disable all the mtt server 
</span><br>
<span class="quotelev2">&gt;&gt; reporter stuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought I could use mtt-submit to submit some kind of mttdatabase 
</span><br>
<span class="quotelev2">&gt;&gt; debug file
</span><br>
<span class="quotelev2">&gt;&gt; back to IU once the batch job has completed, but I can't figure out a way
</span><br>
<span class="quotelev2">&gt;&gt; to generate this file without enable the mtt server reporter section 
</span><br>
<span class="quotelev2">&gt;&gt; in the ini file,
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
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18244.php">http://www.open-mpi.org/community/lists/devel/2015/10/18244.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18249.php">http://www.open-mpi.org/community/lists/devel/2015/10/18249.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18251.php">George Bosilca: "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>Previous message:</strong> <a href="18249.php">Ralph Castain: "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>In reply to:</strong> <a href="18249.php">Ralph Castain: "Re: [OMPI devel] mtt-submit, etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18251.php">George Bosilca: "Re: [OMPI devel] mtt-submit, etc."</a>
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
