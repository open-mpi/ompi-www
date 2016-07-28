<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 31 06:27:53 2005" -->
<!-- isoreceived="20050831112753" -->
<!-- sent="Wed, 31 Aug 2005 13:27:51 +0200" -->
<!-- isosent="20050831112751" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="&amp;quot;fix&amp;quot; for romio configure.in" -->
<!-- id="20050831112751.GA12613_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-31 06:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0276.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<li><strong>Previous message:</strong> <a href="0274.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/09/0301.php">Jeff Squyres: "Re:  &quot;fix&quot; for romio configure.in"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0301.php">Jeff Squyres: "Re:  &quot;fix&quot; for romio configure.in"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a rather subtle issue, and pretty ugly, unfortunately.
<br>
For the curious reader, here is a rather technical explanation:
<br>
<p>Somewhere, inside some
<br>
&nbsp;&nbsp;if test &quot;$arch_...&quot;
<br>
branching construct (but not inside an Autoconf macro definition!), the
<br>
configure.in script uses the macro AC_CHECK_HEADER.  This macro requires
<br>
some other ones to work, so it AC_REQUIREs these; for example
<br>
AC_PROG_EGREP which define $EGREP.  What autoconf then does is expand
<br>
these checks right before the expansion of AC_CHECK_HEADER, that is:
<br>
inside the shell branching construct.
<br>
<p>Then, later on, AC_PROG_LIBTOOL is called.  This macro also needs
<br>
AC_PROG_EGREP, so it also AC_REQUIREs it.  Autoconf remembers that
<br>
it has already expanded the macro, so it is not expanded again.
<br>
<p>Since the actual test for egrep now is hidden inside the shell branch,
<br>
it is not run in all cases.  So further tests that stem from
<br>
AC_PROG_LIBTOOL fail.
<br>
<p>Possible ideas to solve this:
<br>
- move AC_PROG_LIBTOOL up before the branch: does not work, the branch
<br>
&nbsp;&nbsp;code modifies $CC.
<br>
- search for all AC_REQUIREd macros and call them by hand, outside the
<br>
&nbsp;&nbsp;branch.  Tedious and error-prone.
<br>
- rewrite major parts of configure.in to solve the logic.  Not an
<br>
&nbsp;&nbsp;option, OpenMPI wants as little changes as possible to this legacy
<br>
&nbsp;&nbsp;external packages.
<br>
- try to use the experimental AS_IF() Autoconf macro which aims at
<br>
&nbsp;&nbsp;solving (or at least mitigating) this issue.  Not too good an idea.
<br>
- call a stub AC_CHECK_HEADER once outside any branches _before_ it's
<br>
&nbsp;&nbsp;called inside so that required macros are expanded there.
<br>
<p>The patch below implements that last possibility, by searching some
<br>
header name unlikely to be used seriously, and minimizing any
<br>
consequences.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* ompi/mca/io/romio/romio/configure.in: Insert stub call of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_HEADER to pull in required macros at top level instead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of later in shell-conditional branch.
<br>
<p>Index: ompi/mca/io/romio/romio/configure.in
<br>
===================================================================
<br>
--- ompi/mca/io/romio/romio/configure.in	(revision 7105)
<br>
+++ ompi/mca/io/romio/romio/configure.in	(working copy)
<br>
@@ -641,6 +641,8 @@
<br>
&nbsp;# Open MPI: need to actually get the C compiler
<br>
&nbsp;CFLAGS_save=&quot;$CFLAGS&quot;
<br>
&nbsp;AC_PROG_CC
<br>
+# Open MPI: pull in machinery necessary foe AC_HEADER_CHECK at top level.
<br>
+AC_CHECK_HEADER([foobar.h], [:], [:])
<br>
&nbsp;CFLAGS=&quot;$CFLAGS_save&quot;
<br>
&nbsp;
<br>
&nbsp;# Open MPI: this stuff is not necessary with modern versions of the
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0276.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<li><strong>Previous message:</strong> <a href="0274.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/09/0301.php">Jeff Squyres: "Re:  &quot;fix&quot; for romio configure.in"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0301.php">Jeff Squyres: "Re:  &quot;fix&quot; for romio configure.in"</a>
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
