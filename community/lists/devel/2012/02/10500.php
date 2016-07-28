<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 14:45:32 2012" -->
<!-- isoreceived="20120220194532" -->
<!-- sent="Mon, 20 Feb 2012 11:45:21 -0800" -->
<!-- isosent="20120220194521" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)" -->
<!-- id="4F42A2D1.5060003_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A1871A61-03D5-463F-B9DC-CA4EFB98AA97_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 14:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10501.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10499.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>In reply to:</strong> <a href="10498.php">Jeffrey Squyres: "[OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That was on my list of defects back in December.
<br>
This change is ALREADY present in the v1.5 branch in svn.
<br>
<p>-Paul
<br>
<p>On 2/20/2012 8:48 AM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; VT guys --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you have a look at this?  I don't know if&lt;sys/wait.h&gt;  needs to be protected or not, but it looks like it's needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Aleksej Saushev&lt;asau_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)
</span><br>
<span class="quotelev2">&gt;&gt; Date: February 18, 2012 3:11:49 PM EST
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: asau_at_[hidden], Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Hello!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WEXITSTATUS is defined in&lt;sys/wait.h&gt;, see the patch attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Sorry, I couldn't find simple mail interface for bug reports.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HE CE3OH...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10500/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10501.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10499.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>In reply to:</strong> <a href="10498.php">Jeffrey Squyres: "[OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
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
