<?
$subject_val = "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  3 09:40:07 2012" -->
<!-- isoreceived="20120803134007" -->
<!-- sent="Fri, 3 Aug 2012 09:40:02 -0400" -->
<!-- isosent="20120803134002" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)" -->
<!-- id="7312B0CE-60B4-4CBD-9BF0-68C5DB8B542E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1911781296.302903.1343975488530.JavaMail.mail_at_webmail11" -->
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
<strong>Subject:</strong> [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-03 09:40:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11367.php">Ralph Castain: "[OMPI devel] No-VM launch"</a>
<li><strong>Previous message:</strong> <a href="11365.php">Jeff Squyres: "[OMPI devel] MPI-3.0 public draft and call for comments"</a>
<li><strong>In reply to:</strong> <a href="11362.php">P. Martin: "Re: [OMPI devel] 1.6.1rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11368.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Reply:</strong> <a href="11368.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Reply:</strong> <a href="11369.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 3, 2012, at 2:31 AM, P. Martin wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the link.  I tried it on OSX 10.8 Mountain Lion.  It works
</span><br>
<span class="quotelev1">&gt; with llvm-gcc from XCode-4.4, and it passes make check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't work with clang, though, which is the default compiler.
</span><br>
<span class="quotelev1">&gt; This issue was raised on Homebrew here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://github.com/mxcl/homebrew/issues/13837">https://github.com/mxcl/homebrew/issues/13837</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you read that you can see that your configure script adds a
</span><br>
<span class="quotelev1">&gt; option to CFLAGS, and in doing so strips a required -XClang
</span><br>
<span class="quotelev1">&gt; from my CFLAGS.   This is a rare issue, but there it is.  So using
</span><br>
<span class="quotelev1">&gt; clang I don't get past configure.
</span><br>
<p><p>Mmm.  Yes.  I see the issue.  Our configure script essentially does a &quot;uniq&quot; on compiler flags; assuming that any flag seen twice is redundant, and removes it.
<br>
<p>This functionality has been in Open MPI for a long, long time.  Perhaps even back to 1.0 days.  I'm surprised that this issue is only surfacing now.  Did homebrew only recently start using a pair of -Xclang flags?  Or did you have some other workaround?
<br>
<p>Regardless, can you try this patch and see if it solves the issue for you?  You'll need to re-run autogen.pl.
<br>
<p>Index: opal/config/opal_functions.m4
<br>
===================================================================
<br>
--- opal/config/opal_functions.m4	(revision 26940)
<br>
+++ opal/config/opal_functions.m4	(working copy)
<br>
@@ -271,6 +271,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_i=&quot;`expr $ompi_i + 1`&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;
<br>
+    # Check for special cases where we do want to allow repeated
<br>
+    # arguments (per
<br>
+    # <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11362.php">http://www.open-mpi.org/community/lists/devel/2012/08/11362.php</a>).
<br>
+
<br>
+    case $val in
<br>
+    -Xclang)  ompi_found=0 ;;
<br>
+    esac
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# If we didn't find the token, add it to the &quot;array&quot;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$ompi_found&quot; = &quot;0&quot;; then
<br>
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
<li><strong>Next message:</strong> <a href="11367.php">Ralph Castain: "[OMPI devel] No-VM launch"</a>
<li><strong>Previous message:</strong> <a href="11365.php">Jeff Squyres: "[OMPI devel] MPI-3.0 public draft and call for comments"</a>
<li><strong>In reply to:</strong> <a href="11362.php">P. Martin: "Re: [OMPI devel] 1.6.1rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11368.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Reply:</strong> <a href="11368.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Reply:</strong> <a href="11369.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
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
