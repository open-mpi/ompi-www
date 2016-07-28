<?
$subject_val = "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  3 15:57:34 2012" -->
<!-- isoreceived="20120803195734" -->
<!-- sent="Fri, 3 Aug 2012 19:57:29 +0000 (GMT)" -->
<!-- isosent="20120803195729" -->
<!-- name="P. Martin" -->
<!-- email="mrsmiley98_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)" -->
<!-- id="86092801.317316.1344023849925.JavaMail.mail_at_webmail11" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7312B0CE-60B4-4CBD-9BF0-68C5DB8B542E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)<br>
<strong>From:</strong> P. Martin (<em>mrsmiley98_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-03 15:57:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11369.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Previous message:</strong> <a href="11367.php">Ralph Castain: "[OMPI devel] No-VM launch"</a>
<li><strong>In reply to:</strong> <a href="11366.php">Jeff Squyres: "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11369.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 3, 2012, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmm.  Yes.  I see the issue.  Our configure script essentially does a &quot;uniq&quot; on compiler flags; assuming that any flag seen twice is redundant, and removes it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This functionality has been in Open MPI for a long, long time.  Perhaps even back to 1.0 days.  I'm surprised that this issue is only surfacing now.  Did homebrew only recently start using a pair of -Xclang flags?  Or did you have some other workaround?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regardless, can you try this patch and see if it solves the issue for you?  You'll need to re-run autogen.pl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: opal/config/opal_functions.m4
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<p><p><p>Thanks for the patch.  Here's what happened:
<br>
<p><p>configure:11646: checking if /usr/bin/clang supports -fno-strict-aliasing
<br>
configure:11662: /usr/bin/clang -c -DNDEBUG -Os -w -pipe -march=native -Xclang -target-feature -Xclang -aes -Qunused-arguments -mmacosx-version-min=10
<br>
.8 -finline-functions -fno-strict-aliasing -isystem /usr/local/include conftest.c &gt;&amp;5
<br>
configure:11662: $? = 0
<br>
configure:11669: result: yes
<br>
configure:11753: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure:11887: checking if /usr/bin/clang supports __builtin_expect
<br>
configure:11904: /usr/bin/clang -o conftest -DNDEBUG -Os -w -pipe -march=native -Xclang -Xclang -aes -Qunused-arguments -mmacosx-version-min=10.8 -fin
<br>
line-functions -fno-strict-aliasing -isystem /usr/local/include -L/usr/local/lib conftest.c  &gt;&amp;5
<br>
error: unknown argument: '-Xclang'
<br>
configure:11904: $? = 1
<br>
<p><p>Apple recently updated XCode.  The way it reacts to this issue may have changed.
<br>
Also Homebrew started using `-Xclang` in February when XCode-4.3 came out,
<br>
the first version from the app store.  According to the comments in the Homebrew
<br>
code:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# Clang mistakenly enables AES-NI on plain Nehalem
<br>
<p>They only set these CFLAGS on that specific CPU
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;-XClang -target-feature -XClang -aes
<br>
<p>Does that seem reasonable?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11369.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Previous message:</strong> <a href="11367.php">Ralph Castain: "[OMPI devel] No-VM launch"</a>
<li><strong>In reply to:</strong> <a href="11366.php">Jeff Squyres: "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11369.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
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
