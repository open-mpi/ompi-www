<?
$subject_val = "Re: [MTT users] autogen.sh in svn_post_export";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 15:19:35 2009" -->
<!-- isoreceived="20091104201935" -->
<!-- sent="Wed, 4 Nov 2009 15:19:30 -0500" -->
<!-- isosent="20091104201930" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] autogen.sh in svn_post_export" -->
<!-- id="20091104201930.GD53339_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B956C0FF-FE46-4EAA-8DDB-9679F37316FE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] autogen.sh in svn_post_export<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-04 15:19:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0696.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Previous message:</strong> <a href="0694.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>In reply to:</strong> <a href="0694.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0696.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Reply:</strong> <a href="0696.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov/04/2009 02:22:28PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 4, 2009, at 1:51 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I recently ran into the error &quot;./configure: No such file or directory&quot;
</span><br>
<span class="quotelev2">&gt;&gt; in my nightly test build for the ibm, mpicxx, and onesided test
</span><br>
<span class="quotelev2">&gt;&gt; suites:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/mtt/index.php?do_redir=1169">http://www.open-mpi.org/mtt/index.php?do_redir=1169</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This problem had something to do with autogen.sh being run in the Test
</span><br>
<span class="quotelev2">&gt;&gt; get section (different environment settings, maybe?). Moving the
</span><br>
<span class="quotelev2">&gt;&gt; autogen.sh into the Test build section (before &quot;configure&quot; in the
</span><br>
<span class="quotelev2">&gt;&gt; shell_build_command) resolved the problem. To prevent this problem,
</span><br>
<span class="quotelev2">&gt;&gt; would it be too uncouth to add pre-generated configure scripts (a la
</span><br>
<span class="quotelev2">&gt;&gt; the nightly Open MPI tarballs) in the ompi-tests repository?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it would be uncouth.  :-)  One does not put generated code in the 
</span><br>
<span class="quotelev1">&gt; repository.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure why moving the autogen.sh from test get to test build would 
</span><br>
<span class="quotelev1">&gt; fix the issue for you -- are your autotools in your normal environment, or 
</span><br>
<span class="quotelev1">&gt; do you have them in some particular environment that is loaded by an mpi 
</span><br>
<span class="quotelev1">&gt; install phase?
</span><br>
<p>Hmmm. QLogic and IU are also running into the same issue:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=1170">http://www.open-mpi.org/mtt/index.php?do_redir=1170</a>
<br>
<p>I just filed a Trac ticket:
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/ticket/388">https://svn.open-mpi.org/trac/mtt/ticket/388</a>
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0696.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Previous message:</strong> <a href="0694.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>In reply to:</strong> <a href="0694.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0696.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Reply:</strong> <a href="0696.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
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
