<?
$subject_val = "Re: [OMPI devel] mtt-submit, etc.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 06:26:39 2015" -->
<!-- isoreceived="20151023102639" -->
<!-- sent="Fri, 23 Oct 2015 10:26:14 +0000" -->
<!-- isosent="20151023102614" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mtt-submit, etc." -->
<!-- id="3E4261B2-AA41-42F6-8290-DFE9DF3331F6_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="D511E205-C0DF-48C1-B5D3-CD79AF51E078_at_icl.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-23 06:26:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18256.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18254.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] mtt-submit, etc."</a>
<li><strong>In reply to:</strong> <a href="18251.php">George Bosilca: "Re: [OMPI devel] mtt-submit, etc."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the issue in the current code:
<br>

<br>
1. The current code assumes that if you use the MTT database reporter, you can reach the database.  One of the first things it does is ping the server to ensure that it's reachable.  The rationale is that you don't want MTT to run for a long time and then find out that you can't reach the database to submit your results.
<br>

<br>
2. mtt-relay can certainly be used, but not all sites permit using such a thing.  Ditto with an ssh tunnel.
<br>

<br>
3. Looking at the code, it's probably possible to allow the INI file to specify no URL but specify a $debug_filename, and in such cases, ignore some of the database-submit code.  E.g.:
<br>
&nbsp;&nbsp;&nbsp;- Skip this block <a href="https://github.com/open-mpi/mtt/blob/master/lib/MTT/Reporter/MTTDatabase.pm#L178-L203">https://github.com/open-mpi/mtt/blob/master/lib/MTT/Reporter/MTTDatabase.pm#L178-L203</a>
<br>
&nbsp;&nbsp;&nbsp;- Skip this block <a href="https://github.com/open-mpi/mtt/blob/master/lib/MTT/Reporter/MTTDatabase.pm#L374-L419">https://github.com/open-mpi/mtt/blob/master/lib/MTT/Reporter/MTTDatabase.pm#L374-L419</a>
<br>
&nbsp;&nbsp;&nbsp;- Modify this conditional <a href="https://github.com/open-mpi/mtt/blob/master/lib/MTT/Reporter/MTTDatabase.pm#L424">https://github.com/open-mpi/mtt/blob/master/lib/MTT/Reporter/MTTDatabase.pm#L424</a>
<br>

<br>
I'm afraid I don't have the cycles to look deeper into this at the moment, but this is where I would start.
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Oct 23, 2015, at 12:20 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are able to connect (assuming ssh) to the nodes that will execute the tests, why can&#226;&#128;&#153;t you simply use an ssh tunnel to contact the IU server ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 23, 2015, at 00:08 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was thinking about this, and I believe it would require a change to the mtt client to avoid it. I&#226;&#128;&#153;m working on a new Python-based version of it, and I&#226;&#128;&#153;ll make sure to deal with this there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the interim, I&#226;&#128;&#153;ll have to defer to some old, gray Perl guru to update the current client
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 22, 2015, at 9:23 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't seem to have gotten subscribed yet to mtt-users mail list so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forwarding to the dev team.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2015-10-22 10:18 GMT-06:00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: mtt-submit, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HI Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have the following issue with a cluster I would like to use for submitting MTT results
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for Open MPI, namely, that the nodes on which I have to submit batch jobs to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the tests don't have external internet connectivity, so if my mtt ini file has a IU database reporter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; section, the run dies in the &quot;ping the mtt server&quot; test.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I have right now is a two-stage process where I checkout and compile/build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI and the tests on a front end which does have access to the mtt server.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This part works and gets reported back to IU database. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can run the tests using mtt, but have to disable all the mtt server reporter stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought I could use mtt-submit to submit some kind of mttdatabase debug file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back to IU once the batch job has completed, but I can't figure out a way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to generate this file without enable the mtt server reporter section in the ini file,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and so back to the ping failure issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would anyone have suggestions on how to work around this problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18244.php">http://www.open-mpi.org/community/lists/devel/2015/10/18244.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18249.php">http://www.open-mpi.org/community/lists/devel/2015/10/18249.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18251.php">http://www.open-mpi.org/community/lists/devel/2015/10/18251.php</a>
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
<li><strong>Next message:</strong> <a href="18256.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18254.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] mtt-submit, etc."</a>
<li><strong>In reply to:</strong> <a href="18251.php">George Bosilca: "Re: [OMPI devel] mtt-submit, etc."</a>
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
