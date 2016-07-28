<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 18 03:19:51 2010" -->
<!-- isoreceived="20100918071951" -->
<!-- sent="Sat, 18 Sep 2010 01:19:42 -0600" -->
<!-- isosent="20100918071942" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767" -->
<!-- id="074FB26D-9F36-4BF0-8AEA-DFA871F04D7D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201009180714.o8I7ExPY005937_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-18 03:19:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8498.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Previous message:</strong> <a href="8496.php">Ralph Castain: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8499.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8499.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ha! I did that earlier too, but then realized that this error happens only when someone specifies they want-valigrind. I believe the issue here has been discussed before - if someone says &quot;give me valgrind support&quot;, then we should error out if the required level isn't available.
<br>
<p>yes?
<br>
<p>You must still be overseas??
<br>
<p>On Sep 18, 2010, at 1:14 AM, jsquyres_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2010-09-18 03:14:58 EDT (Sat, 18 Sep 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23767
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23767">https://svn.open-mpi.org/trac/ompi/changeset/23767</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Make this a warning, not an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/memchecker/valgrind/configure.m4 |     7 ++++++-                                 
</span><br>
<span class="quotelev1">&gt;   1 files changed, 6 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/memchecker/valgrind/configure.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/memchecker/valgrind/configure.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/memchecker/valgrind/configure.m4	2010-09-18 03:14:58 EDT (Sat, 18 Sep 2010)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; # $HEADER$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([MCA_opal_memchecker_valgrind_PRIORITY], [10])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([MCA_opal_memchecker_valgrind_COMPILE_MODE], [
</span><br>
<span class="quotelev1">&gt; @@ -49,7 +50,7 @@
</span><br>
<span class="quotelev1">&gt;                      [AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt;                       opal_memchecker_valgrind_happy=yes],
</span><br>
<span class="quotelev1">&gt;                      [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; -                      AC_MSG_ERROR([Need Valgrind version 3.2.0 or later. Can not build component.])]
</span><br>
<span class="quotelev1">&gt; +                      AC_MSG_WARN([Need Valgrind version 3.2.0 or later. Can not build component.])]
</span><br>
<span class="quotelev1">&gt;                      [AC_MSG_RESULT([cross-compiling; assume yes...?])
</span><br>
<span class="quotelev1">&gt;                       AC_MSG_WARN([OMPI will fail to compile if you do not have Valgrind version 3.2.0 or later])
</span><br>
<span class="quotelev1">&gt;                       opal_memchecker_valgrind_happy=yes]),
</span><br>
<span class="quotelev1">&gt; @@ -58,6 +59,10 @@
</span><br>
<span class="quotelev1">&gt;                   AC_MSG_WARN([Cannot compile this component])])])
</span><br>
<span class="quotelev1">&gt;     CPPFLAGS=&quot;$opal_memchecker_valgrind_save_CPPFLAGS&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    # If we specifically requested this component and can't build it, error
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$with_valgrind&quot; != &quot;no&quot; -a &quot;$with_valgrind&quot; != &quot;&quot; -a &quot;$opal_memcheck_valgrind_happy&quot; != &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +          [AC_MSG_ERROR([Cannot continue])])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     AS_IF([test &quot;$opal_memchecker_valgrind_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;           [$1],[$2])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8498.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Previous message:</strong> <a href="8496.php">Ralph Castain: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8499.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8499.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
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
