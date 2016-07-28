<?
$subject_val = "Re: [MTT users] autogen.sh in svn_post_export";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 14:22:33 2009" -->
<!-- isoreceived="20091104192233" -->
<!-- sent="Wed, 4 Nov 2009 14:22:28 -0500" -->
<!-- isosent="20091104192228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] autogen.sh in svn_post_export" -->
<!-- id="B956C0FF-FE46-4EAA-8DDB-9679F37316FE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091104185155.GC53339_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-04 14:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0695.php">Ethan Mallove: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Previous message:</strong> <a href="0693.php">Ethan Mallove: "[MTT users] autogen.sh in svn_post_export"</a>
<li><strong>In reply to:</strong> <a href="0693.php">Ethan Mallove: "[MTT users] autogen.sh in svn_post_export"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0695.php">Ethan Mallove: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Reply:</strong> <a href="0695.php">Ethan Mallove: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2009, at 1:51 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I recently ran into the error &quot;./configure: No such file or directory&quot;
</span><br>
<span class="quotelev1">&gt; in my nightly test build for the ibm, mpicxx, and onesided test
</span><br>
<span class="quotelev1">&gt; suites:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/mtt/index.php?do_redir=1169">http://www.open-mpi.org/mtt/index.php?do_redir=1169</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem had something to do with autogen.sh being run in the Test
</span><br>
<span class="quotelev1">&gt; get section (different environment settings, maybe?). Moving the
</span><br>
<span class="quotelev1">&gt; autogen.sh into the Test build section (before &quot;configure&quot; in the
</span><br>
<span class="quotelev1">&gt; shell_build_command) resolved the problem. To prevent this problem,
</span><br>
<span class="quotelev1">&gt; would it be too uncouth to add pre-generated configure scripts (a la
</span><br>
<span class="quotelev1">&gt; the nightly Open MPI tarballs) in the ompi-tests repository?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes, it would be uncouth.  :-)  One does not put generated code in the  
<br>
repository.
<br>
<p>I'm not sure why moving the autogen.sh from test get to test build  
<br>
would fix the issue for you -- are your autotools in your normal  
<br>
environment, or do you have them in some particular environment that  
<br>
is loaded by an mpi install phase?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0695.php">Ethan Mallove: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Previous message:</strong> <a href="0693.php">Ethan Mallove: "[MTT users] autogen.sh in svn_post_export"</a>
<li><strong>In reply to:</strong> <a href="0693.php">Ethan Mallove: "[MTT users] autogen.sh in svn_post_export"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0695.php">Ethan Mallove: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Reply:</strong> <a href="0695.php">Ethan Mallove: "Re: [MTT users] autogen.sh in svn_post_export"</a>
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
