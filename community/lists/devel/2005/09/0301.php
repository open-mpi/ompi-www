<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  2 06:01:48 2005" -->
<!-- isoreceived="20050902110148" -->
<!-- sent="Fri, 2 Sep 2005 07:01:46 -0400" -->
<!-- isosent="20050902110146" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  &amp;quot;fix&amp;quot; for romio configure.in" -->
<!-- id="dc08593c43ceb624e60fe4f0f2d2ded9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050831112751.GA12613_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-02 06:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0302.php">Peter Kjellstr&#246;m: "Re:  IMPORTANT: Libtool version"</a>
<li><strong>Previous message:</strong> <a href="0300.php">Ralf Wildenhues: "Re:  IMPORTANT: Libtool version"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0275.php">Ralf Wildenhues: "&quot;fix&quot; for romio configure.in"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed -- although I put most of your explanation in a comment.  
<br>
Thanks!
<br>
<p><p>On Aug 31, 2005, at 7:27 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; This is a rather subtle issue, and pretty ugly, unfortunately.
</span><br>
<span class="quotelev1">&gt; For the curious reader, here is a rather technical explanation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somewhere, inside some
</span><br>
<span class="quotelev1">&gt;   if test &quot;$arch_...&quot;
</span><br>
<span class="quotelev1">&gt; branching construct (but not inside an Autoconf macro definition!), the
</span><br>
<span class="quotelev1">&gt; configure.in script uses the macro AC_CHECK_HEADER.  This macro 
</span><br>
<span class="quotelev1">&gt; requires
</span><br>
<span class="quotelev1">&gt; some other ones to work, so it AC_REQUIREs these; for example
</span><br>
<span class="quotelev1">&gt; AC_PROG_EGREP which define $EGREP.  What autoconf then does is expand
</span><br>
<span class="quotelev1">&gt; these checks right before the expansion of AC_CHECK_HEADER, that is:
</span><br>
<span class="quotelev1">&gt; inside the shell branching construct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, later on, AC_PROG_LIBTOOL is called.  This macro also needs
</span><br>
<span class="quotelev1">&gt; AC_PROG_EGREP, so it also AC_REQUIREs it.  Autoconf remembers that
</span><br>
<span class="quotelev1">&gt; it has already expanded the macro, so it is not expanded again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the actual test for egrep now is hidden inside the shell branch,
</span><br>
<span class="quotelev1">&gt; it is not run in all cases.  So further tests that stem from
</span><br>
<span class="quotelev1">&gt; AC_PROG_LIBTOOL fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Possible ideas to solve this:
</span><br>
<span class="quotelev1">&gt; - move AC_PROG_LIBTOOL up before the branch: does not work, the branch
</span><br>
<span class="quotelev1">&gt;   code modifies $CC.
</span><br>
<span class="quotelev1">&gt; - search for all AC_REQUIREd macros and call them by hand, outside the
</span><br>
<span class="quotelev1">&gt;   branch.  Tedious and error-prone.
</span><br>
<span class="quotelev1">&gt; - rewrite major parts of configure.in to solve the logic.  Not an
</span><br>
<span class="quotelev1">&gt;   option, OpenMPI wants as little changes as possible to this legacy
</span><br>
<span class="quotelev1">&gt;   external packages.
</span><br>
<span class="quotelev1">&gt; - try to use the experimental AS_IF() Autoconf macro which aims at
</span><br>
<span class="quotelev1">&gt;   solving (or at least mitigating) this issue.  Not too good an idea.
</span><br>
<span class="quotelev1">&gt; - call a stub AC_CHECK_HEADER once outside any branches _before_ it's
</span><br>
<span class="quotelev1">&gt;   called inside so that required macros are expanded there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch below implements that last possibility, by searching some
</span><br>
<span class="quotelev1">&gt; header name unlikely to be used seriously, and minimizing any
</span><br>
<span class="quotelev1">&gt; consequences.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         * ompi/mca/io/romio/romio/configure.in: Insert stub call of
</span><br>
<span class="quotelev1">&gt;         AC_CHECK_HEADER to pull in required macros at top level instead
</span><br>
<span class="quotelev1">&gt;         of later in shell-conditional branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/io/romio/romio/configure.in
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/io/romio/romio/configure.in	(revision 7105)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/io/romio/romio/configure.in	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -641,6 +641,8 @@
</span><br>
<span class="quotelev1">&gt;  # Open MPI: need to actually get the C compiler
</span><br>
<span class="quotelev1">&gt;  CFLAGS_save=&quot;$CFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;  AC_PROG_CC
</span><br>
<span class="quotelev1">&gt; +# Open MPI: pull in machinery necessary foe AC_HEADER_CHECK at top 
</span><br>
<span class="quotelev1">&gt; level.
</span><br>
<span class="quotelev1">&gt; +AC_CHECK_HEADER([foobar.h], [:], [:])
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;$CFLAGS_save&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # Open MPI: this stuff is not necessary with modern versions of the
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0302.php">Peter Kjellstr&#246;m: "Re:  IMPORTANT: Libtool version"</a>
<li><strong>Previous message:</strong> <a href="0300.php">Ralf Wildenhues: "Re:  IMPORTANT: Libtool version"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0275.php">Ralf Wildenhues: "&quot;fix&quot; for romio configure.in"</a>
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
