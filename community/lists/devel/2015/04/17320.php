<?
$subject_val = "Re: [OMPI devel] Broken flex-required error message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 17:02:27 2015" -->
<!-- isoreceived="20150422210227" -->
<!-- sent="Wed, 22 Apr 2015 21:02:25 +0000" -->
<!-- isosent="20150422210225" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Broken flex-required error message" -->
<!-- id="25C3306C-175F-47E8-A081-12342CF9FDD7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17xzJz7gUKcA5k4zZBaeA+74EiCDzbBFvZYcSgiRmD_WQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Broken flex-required error message<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 17:02:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17321.php">Paul Hargrove: "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Previous message:</strong> <a href="17319.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Incorrect timer frequency [w/ patch]"</a>
<li><strong>In reply to:</strong> <a href="17310.php">Paul Hargrove: "[OMPI devel] Broken flex-required error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17321.php">Paul Hargrove: "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Reply:</strong> <a href="17321.php">Paul Hargrove: "Re: [OMPI devel] Broken flex-required error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed -- thanks: <a href="https://github.com/open-mpi/ompi/commit/4b8fa246824418f8bd46419286bb1bcb8ce6e941">https://github.com/open-mpi/ompi/commit/4b8fa246824418f8bd46419286bb1bcb8ce6e941</a>
<br>
<p>FWIW, it *did* print a list of files for me on my Mac when I faked it out and forced it to *not* find flex.
<br>
<p>Shrug.
<br>
<p>So I just took that part of the error message out -- let devs always install flex.  :-)
<br>
<p><p><span class="quotelev1">&gt; On Apr 22, 2015, at 2:15 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When building from a git clone of master I encountered the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking for flex... no
</span><br>
<span class="quotelev1">&gt; checking for lex... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Could not find GNU Flex on your system.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** GNU Flex required for developer builds of Open MPI.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Other versions of Lex are not supported.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** YOU DO NOT NEED FLEX FOR DISTRIBUTION TARBALLS!
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** If you absolutely cannot install GNU Flex on this system
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** consider using a distribution tarball, or generate the
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** following files on another system (using Flex) and
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** copy them here:
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not disagree with the requirement for flex.
</span><br>
<span class="quotelev1">&gt; However, there are multiple problems with that output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) The &quot;following files&quot; list is EMPTY.
</span><br>
<span class="quotelev1">&gt; If there is no way to output the list, then the last 4 WARNING lines are pointless.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) A minor grammar point: &quot;Flex required&quot; should be &quot;Flex is required&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) It is NOT known as &quot;GNU Flex&quot;.
</span><br>
<span class="quotelev1">&gt; Quoting from <a href="https://www.gnu.org/software/flex/flex.html">https://www.gnu.org/software/flex/flex.html</a>
</span><br>
<span class="quotelev1">&gt;    Flex is a free (but non-GNU) implementation of the original Unix lex program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17310.php">http://www.open-mpi.org/community/lists/devel/2015/04/17310.php</a>
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
<li><strong>Next message:</strong> <a href="17321.php">Paul Hargrove: "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Previous message:</strong> <a href="17319.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Incorrect timer frequency [w/ patch]"</a>
<li><strong>In reply to:</strong> <a href="17310.php">Paul Hargrove: "[OMPI devel] Broken flex-required error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17321.php">Paul Hargrove: "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Reply:</strong> <a href="17321.php">Paul Hargrove: "Re: [OMPI devel] Broken flex-required error message"</a>
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
