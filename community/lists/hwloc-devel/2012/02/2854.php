<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 14:00:59 2012" -->
<!-- isoreceived="20120210190059" -->
<!-- sent="Fri, 10 Feb 2012 14:00:53 -0500" -->
<!-- isosent="20120210190053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="10169C51-BABD-4135-A600-4CBF62D50F00_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F344AD7.30809_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.2rc1 has escaped<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 14:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2855.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Previous message:</strong> <a href="2853.php">Paul H. Hargrove: "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>In reply to:</strong> <a href="2850.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2858.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2858.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 9, 2012, at 5:38 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; We then test if *either* set the variable. 
</span><br>
<span class="quotelev2">&gt;&gt; Sort of a double-negative.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One of De Morgan's Laws:
</span><br>
<span class="quotelev1">&gt;    NOT (A AND B) = (NOT A) OR (NOT B)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Applied to give:
</span><br>
<span class="quotelev1">&gt;    NOT (TEST1_FAIL AND TEST2_FAIL)
</span><br>
<span class="quotelev1">&gt;       = (NOT TEST1_FAIL) OR (NOT TEST2_FAIL)
</span><br>
<span class="quotelev1">&gt;       = TEST1_PASS OR TEST2_PASS
</span><br>
<p>I think I mis-read your initial patch, but I think we're both agreeing on the actual functionality.  My definition of &quot;pass&quot; might well have been opposite of yours: I was saying that the compiler needs to be able to detect both scenarios (passing less than enough arguments and passing more than enough arguments).
<br>
<p>To do that, I amended your patch to count how many of those two tests &quot;passed&quot;.  If the number of passed tests was 2, all was good.  If not, fail.
<br>
<p>This may be redundant with your original patch, but that's what I did.  :-)
<br>
<p>Here's the final logic -- is it what you intended?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# Make sure the compiler returns an error code when function arg
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# count is wrong, otherwise sched_setaffinity checks may fail.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_STRICT_ARGS_CFLAGS=
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_args_check=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([whether the C compiler rejects function calls with too many arguments])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern int one_arg(int x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int foo(void) { return one_arg(1, 2); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[hwloc_args_check=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([yes])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([whether the C compiler rejects function calls with too few arguments])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern int two_arg(int x, int y);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int foo(void) { return two_arg(3); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[hwloc_args_check=`expr $hwloc_args_check + 1`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([yes])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$hwloc_args_check&quot; != &quot;2&quot;],[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([Your C compiler does not consider incorrect argument counts to be a fatal error.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$hwloc_c_vendor&quot; in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibm)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_STRICT_ARGS_CFLAGS=&quot;-qhalt=e&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_STRICT_ARGS_CFLAGS=FAIL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([Please report this warning and configure using a different C compiler if possible.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$HWLOC_STRICT_ARGS_CFLAGS&quot; != &quot;FAIL&quot;],[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([Configure will append '$HWLOC_STRICT_ARGS_CFLAGS' to the value of CFLAGS when needed.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([Alternatively you may configure with a different compiler.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2855.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Previous message:</strong> <a href="2853.php">Paul H. Hargrove: "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>In reply to:</strong> <a href="2850.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2858.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2858.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
