<?
$subject_val = "Re: [MTT users] Where do I start?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 06:33:00 2016" -->
<!-- isoreceived="20160121113300" -->
<!-- sent="Thu, 21 Jan 2016 11:32:58 +0000" -->
<!-- isosent="20160121113258" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Where do I start?" -->
<!-- id="6E6A1446-731E-4AD6-8E4B-D542777618D9_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="56A02F5D.20108_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [MTT users] Where do I start?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 06:32:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/02/0843.php">Adrian Reber: "[MTT users] MTT: Unescaped left brace in regex is deprecated"</a>
<li><strong>Previous message:</strong> <a href="0841.php">Gilles Gouaillardet: "Re: [MTT users] Where do I start?"</a>
<li><strong>In reply to:</strong> <a href="0841.php">Gilles Gouaillardet: "Re: [MTT users] Where do I start?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to what Gilles said, here's a good overview page of MTT itself:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/mtt/wiki/MTTOverview">https://github.com/open-mpi/mtt/wiki/MTTOverview</a>
<br>
<p>Here's how we use it in the Open MPI project:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/mtt/wiki/OMPITesting">https://github.com/open-mpi/mtt/wiki/OMPITesting</a>
<br>
<p>You can certainly adapt your usage of the MTT to not report up to the Open MPI community database, for example, and instead, report to local files, or email, etc.
<br>
<p><p><span class="quotelev1">&gt; On Jan 20, 2016, at 8:07 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MTT is a tool that automatically build, install OpenMPI and build and run some test suites,
</span><br>
<span class="quotelev1">&gt; and upload the results to a web server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; note the test suites are *not* part of MTT itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for legal reasons, the test suites are in a private repository, that you could be granted access if you
</span><br>
<span class="quotelev1">&gt; fill in the right paperwork (OpenMPI contributor agreement)
</span><br>
<span class="quotelev1">&gt; note these test suites are (generally) testing features (e.g. no bugs) and not performance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure MTT is a right fit for you. you might want to download and run some MPI benchmark suites.
</span><br>
<span class="quotelev1">&gt; popular benchmarks are the OSU benchmark (Ohio State University), and the IMB benchmark (Intel)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/20/2016 9:39 AM, brown wrap wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have download the installed the MPI Test Tool, but don't have a clue as to where to start. I want to make certain the version of OpenMPI that I have installed is working. I have three clusters and would like to run the tool on all three to get some benchmarks. To be honest, The instructions are confusing to me.Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/01/0841.php">http://www.open-mpi.org/community/lists/mtt-users/2016/01/0841.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/01/0841.php">http://www.open-mpi.org/community/lists/mtt-users/2016/01/0841.php</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/02/0843.php">Adrian Reber: "[MTT users] MTT: Unescaped left brace in regex is deprecated"</a>
<li><strong>Previous message:</strong> <a href="0841.php">Gilles Gouaillardet: "Re: [MTT users] Where do I start?"</a>
<li><strong>In reply to:</strong> <a href="0841.php">Gilles Gouaillardet: "Re: [MTT users] Where do I start?"</a>
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
